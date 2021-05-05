<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?><div class="<? echo $arCurView['CONT']; ?>"><?

if (0 < $arResult["SECTIONS_COUNT"])
{
?>
	<div class="catalog-tile">

<?
	foreach ($arResult['SECTIONS'] as &$arSection)
	{
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);?>
		<a id="<? echo $this->GetEditAreaId($arSection['ID']); ?>" class="item" href="<? echo $arSection['SECTION_PAGE_URL']; ?>">
			<img src="<? echo $arSection['PICTURE']['SRC']; ?>" class="card-img-top" title="<? echo $arSection['PICTURE']['TITLE']; ?>" alt="<? echo $arSection['PICTURE']['ALT']; ?>">
			<span class="title"><? echo $arSection['NAME']; ?></span>
		</a>
		<?
	}
	unset($arSection);
}
?>
	</div>
</div>