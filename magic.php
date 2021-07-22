<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

/*Bitrix\Main\Loader::includeModule("crtech.offers");
use Crtech\Offers\Internal;
$res = Internal\OffersTable::add(array('LID' => 's1', 'FUSER_ID' => 'kbl', 'PRODUCT_ID' => 'kbl', 'CURRENCY' => 'kbl', 'QUANTITY' => 'kbl'));
if (!$res->isSuccess()) {
	$errors = $res->getErrorMessages();
}
?><pre><?print_r($errors)?></pre><?php
*/

//use Сrteсh\Offers;
//use Bitrix\Main\Base;


//Crtech\Offers\Internal\OffersTable::test();

/*use Bitrix\Main\ORM\Entity;
Entity::getInstance('\\Crtech\\Offers\\Internal\\TestTable')->createDBTable();*/

/*use Crtech\Offers;*/





//Offers::test();
/*php
require_once ('magic.class.php');
require_once ('data.magic.php');
Bitrix\Main\Loader::includeModule("sale");

// Выведем актуальную корзину для текущего пользователя

/*$arBasketItems = array();

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

}*/