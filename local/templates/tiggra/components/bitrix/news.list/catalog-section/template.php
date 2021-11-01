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
?>
<div class="catalog-main">
	<div class="grids">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?if($arItem['DISPLAY_PROPERTIES']['COUNT_COL']['VALUE'] == 2){
				$span = 'span-2';
			}else{
				$span = '';
			}
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="card <?echo $span?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="card__side card__side--front">
					<div class="text-box">
						<div class="image">
							<img
									class="preview_picture"
									border="0"
									src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
									alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
									title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
							/>
						</div>
						<div class="text-box-middle">
							<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
									<span><?echo $arItem["NAME"]?></span>
							<?endif;?>
						</div>
					</div>
				</div>
			</div>
		<?endforeach;?>
		<div class="card span-2">
			<div class="card__side card__side--front">
				<div class="text-box">
					<p class="text-box-middle">Печать баннеров</p>
				</div>
			</div>
		</div>
	</div>
</div>

