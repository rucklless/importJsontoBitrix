<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$aMenuLinksExt = $APPLICATION->IncludeComponent(
	"crtech:menu.sections",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DEPTH_LEVEL" => "3",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "catalog",
		"ID" => $_REQUEST["ID"],
		"IS_SEF" => "N",
		"SECTION_URL" => "/#SECTION_CODE_PATH#/#ELEMENT_CODE#/"
	)
);
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>