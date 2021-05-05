<?php
require_once ('magic.class.php');
require_once ('data.magic.php');
Bitrix\Main\Loader::includeModule("sale");
/*?><pre><?var_export($arrId)?></pre><?php*/


// Выведем актуальную корзину для текущего пользователя

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
		"PRODUCT_ID" => 9444
	),
	false,
	false,
	array("ID", "PRODUCT_ID")
);
while ($arItems = $dbBasketItems->Fetch()) {

}