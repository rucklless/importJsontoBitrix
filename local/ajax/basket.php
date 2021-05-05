<?// if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
define("STOP_STATISTICS", true);
define("NOT_CHECK_PERMISSIONS", true);
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");
\Bitrix\Main\Loader::includeModule('sale');

if($_REQUEST['refresh_basket'] == 'y'):
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

endif;

if($_REQUEST['action'] == 'DEL'):
	if(!empty($_REQUEST['id'])){
		$arBasketItems = array();

		$dbBasketItems = CSaleBasket::GetList(
			array(
				"NAME" => "ASC",
				"ID" => "ASC"
			),
			array(
				"FUSER_ID" => CSaleBasket::GetBasketUserID(),
				"LID" => SITE_ID,
				"ORDER_ID" => "NULL",
				"PRODUCT_ID" => $_REQUEST['id']
			),
			false,
			false,
			array("ID", "PRODUCT_ID")
		);
		while ($arItems = $dbBasketItems->Fetch()) {
			if (CSaleBasket::Delete($arItems['ID']))
				echo "ok";
		}
	}
endif;


if($_REQUEST['check_basket'] == 'y'):
	$dbBasketItems = CSaleBasket::GetList(
		array(
			"NAME" => "ASC",
			"ID" => "ASC"
		),
		array(
			"FUSER_ID" => CSaleBasket::GetBasketUserID(),
			"LID" => SITE_ID,
			"ORDER_ID" => "NULL",
			"PRODUCT_ID" => 9444
		),
		false,
		false,
		array("ID", "PRODUCT_ID")
	);
	echo json_encode($dbBasketItems);
	/*?><pre><?print_r($dbBasketItems)?></pre></*/
endif;

