<?php
class renderDetailElem extends CBitrixComponent{
	public static function test(){
		echo 'Test';
}
public static function amount(){
		global $itemIds;
		global $price;
		global $actualItem;
		global $arParams;
	?>
	<div class="product-item-amount">
		<div class="product-item-amount-field-container">
			<span class="product-item-amount-field-btn-minus no-select" id="<?=$itemIds['QUANTITY_DOWN_ID']?>"></span>
			<div class="product-item-amount-field-block">
				<input class="product-item-amount-field" id="<?=$itemIds['QUANTITY_ID']?>" type="number" value="<?=$price['MIN_QUANTITY']?>">
				<span class="product-item-amount-description-container">
													<span id="<?=$itemIds['QUANTITY_MEASURE']?>"><?=$actualItem['ITEM_MEASURE']['TITLE']?></span>
													<span id="<?=$itemIds['PRICE_TOTAL']?>"></span>
												</span>
			</div>
			<span class="product-item-amount-field-btn-plus no-select" id="<?=$itemIds['QUANTITY_UP_ID']?>"></span>

			<?if ($arParams['USE_PRODUCT_QUANTITY'])
			{
				?>
				<div class="mb-3" <?= (!$actualItem['CAN_BUY'] ? ' style="display: none;"' : '') ?> data-entity="quantity-block">

				</div>
				<?
			}?>
		</div>
	</div><?php
	}
}