<?

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "crtech:menu.sections",
    "",
    Array(        
        "IBLOCK_TYPE" => "catalog", 
        "IBLOCK_ID" => "1", 
        "DEPTH_LEVEL" => "2",
        "SECTION_URL" => "/#SECTION_CODE_PATH#/",         
        "CACHE_TIME" => "3600" 
    )
);
/*?><pre><?print_r($aMenuLinksExt)?></pre><?*/
$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);
?>