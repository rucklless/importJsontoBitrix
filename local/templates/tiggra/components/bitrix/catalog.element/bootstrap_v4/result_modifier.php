<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

$arResult['DEL_URL_TEMPLATE'] = 'action=DEL&id=#ID#';


/*foreach ($arResult['SKU_PROPS'] as &$prop){
	foreach ($prop['VALUES'] as &$val){
		?><pre><?print_r($val)?></pre><?
	}
}*/