<?php


class basket
{
	public static function refreshBasket(){
		$arID = array();
		$arBasketItems = array();
		$result['total'] = 0;
		$dbBasketItems = CSaleBasket::GetList(
			array(
				"NAME" => "ASC",
				"ID" => "ASC"
			),
			array(
				"FUSER_ID" => CSaleBasket::GetBasketUserID(),
				"LID" => SITE_ID,
				"ORDER_ID" => "NULL"
			),
			false,
			false,
			array("ID", "CALLBACK_FUNC", "MODULE", "PRODUCT_ID", "QUANTITY", "PRODUCT_PROVIDER_CLASS")
		);
		while ($arItems = $dbBasketItems->Fetch()) {
			if ('' != $arItems['PRODUCT_PROVIDER_CLASS'] || '' != $arItems["CALLBACK_FUNC"]) {
				CSaleBasket::UpdatePrice($arItems["ID"],
					$arItems["CALLBACK_FUNC"],
					$arItems["MODULE"],
					$arItems["PRODUCT_ID"],
					$arItems["QUANTITY"],
					"N",
					$arItems["PRODUCT_PROVIDER_CLASS"]
				);
				$arID[] = $arItems["ID"];
			}
		}
		if (!empty($arID)) {
			$dbBasketItems = CSaleBasket::GetList(
				array(
					"NAME" => "ASC",
					"ID" => "ASC"
				),
				array(
					"ID" => $arID,
					"ORDER_ID" => "NULL"
				),
				false,
				false,
				array("ID", "CALLBACK_FUNC", "MODULE", "PRODUCT_ID", "QUANTITY", "DELAY", "CAN_BUY", "PRICE", "WEIGHT", "PRODUCT_PROVIDER_CLASS", "NAME")
			);
			while ($arItems = $dbBasketItems->Fetch()) {
				$arBasketItems[] = $arItems;
				$result['total'] += $arItems['QUANTITY']*$arItems['PRICE'];
			}
		}

		$result['count'] = count($arBasketItems);
		$result['items'] = $arBasketItems;
		$result = json_encode($result);
		echo $result;
		// Печатаем массив, содержащий актуальную на текущий момент корзину
	}
}