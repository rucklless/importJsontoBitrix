<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');
?>
<a class="basket fly-item" title="Корзина"  id="<?=$cartId?>" href="<?= $arParams['PATH_TO_BASKET'] ?>">
	<div class="icon">
		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 viewBox="0 0 450.391 450.391" style="enable-background:new 0 0 450.391 450.391;" xml:space="preserve">
			<g>
				<g>
					<g>
						<path d="M143.673,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02
							c25.969,0,47.02-21.052,47.02-47.02C190.694,371.374,169.642,350.322,143.673,350.322z M143.673,423.465
							c-14.427,0-26.122-11.695-26.122-26.122c0-14.427,11.695-26.122,26.122-26.122c14.427,0,26.122,11.695,26.122,26.122
							C169.796,411.77,158.1,423.465,143.673,423.465z"/>
						<path d="M342.204,350.322c-25.969,0-47.02,21.052-47.02,47.02c0,25.969,21.052,47.02,47.02,47.02s47.02-21.052,47.02-47.02
							C389.224,371.374,368.173,350.322,342.204,350.322z M342.204,423.465c-14.427,0-26.122-11.695-26.122-26.122
							c0-14.427,11.695-26.122,26.122-26.122s26.122,11.695,26.122,26.122C368.327,411.77,356.631,423.465,342.204,423.465z"/>
						<path d="M448.261,76.037c-2.176-2.377-5.153-3.865-8.359-4.18L99.788,67.155L90.384,38.42
							C83.759,19.211,65.771,6.243,45.453,6.028H10.449C4.678,6.028,0,10.706,0,16.477s4.678,10.449,10.449,10.449h35.004
							c11.361,0.251,21.365,7.546,25.078,18.286l66.351,200.098l-5.224,12.016c-5.827,15.026-4.077,31.938,4.702,45.453
							c8.695,13.274,23.323,21.466,39.184,21.943h203.233c5.771,0,10.449-4.678,10.449-10.449c0-5.771-4.678-10.449-10.449-10.449
							H175.543c-8.957-0.224-17.202-4.936-21.943-12.539c-4.688-7.51-5.651-16.762-2.612-25.078l4.18-9.404l219.951-22.988
							c24.16-2.661,44.034-20.233,49.633-43.886l25.078-105.012C450.96,81.893,450.36,78.492,448.261,76.037z M404.376,185.228
							c-3.392,15.226-16.319,26.457-31.869,27.69l-217.339,22.465L106.58,88.053l320.261,4.702L404.376,185.228z"/>
					</g>
				</g>
			</g>
		</svg>
		<?if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y')) {?>
			<div class="count" id="basket_count">
				<?echo $arResult['NUM_PRODUCTS'];?>
			</div>
		<?}
		?>
	</div>
	<div class="description">
		<?if (!$arResult["DISABLE_USE_BASKET"])
		{
			?>
			<span class="title"><?= GetMessage('TSB1_CART') ?></span><?
		}
		if (!$compositeStub)
		{
		if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'))
		{
			?>
			<p>
			<?= GetMessage('TSB1_TOTAL_GOODS') ?>:
			<span class="count_description" id="basket_count_desc"><?echo $arResult['BASKET_COUNT_DESCRIPTION'];?></span>
			</p><?

		if ($arParams['SHOW_TOTAL_PRICE'] == 'Y')
		{
		?>
			<p><?= GetMessage('TSB1_TOTAL_PRICE') ?>
		<span id="basket_total_desc">
				<?=GetMessage('TSB1_TOTAL_PRICE')?> <strong><?=$arResult['TOTAL_PRICE']?></strong>
			</span>
			</p>
		<?
				}
			}
		}

		/*if (!$compositeStub)
		{
			if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'))
			{
				echo $arResult['BASKET_COUNT_DESCRIPTION'];

				if ($arParams['SHOW_TOTAL_PRICE'] == 'Y')
				{
					?>
					<br <? if ($arParams['POSITION_FIXED'] == 'Y'): ?>class="hidden-xs"<? endif; ?>/>
					<span>
				<?=GetMessage('TSB1_TOTAL_PRICE')?> <strong><?=$arResult['TOTAL_PRICE']?></strong>
			</span>
					<?
				}
			}
		}*/?>
	</div>
</a>
<?/*<div class="bx-hdr-profile">
	<div class="bx-basket-block">
		<div class="right">
		<?if (!$arResult["DISABLE_USE_BASKET"])
		{
			?>
			<span><?= GetMessage('TSB1_CART') ?></span><?
		}

		if (!$compositeStub)
		{
			if ($arParams['SHOW_NUM_PRODUCTS'] == 'Y' && ($arResult['NUM_PRODUCTS'] > 0 || $arParams['SHOW_EMPTY_VALUES'] == 'Y'))
			{
				echo $arResult['BASKET_COUNT_DESCRIPTION'];

				if ($arParams['SHOW_TOTAL_PRICE'] == 'Y')
				{
					?>
					<br <? if ($arParams['POSITION_FIXED'] == 'Y'): ?>class="hidden-xs"<? endif; ?>/>
					<span>
						<?=GetMessage('TSB1_TOTAL_PRICE')?> <strong><?=$arResult['TOTAL_PRICE']?></strong>
					</span>
					<?
				}
			}
		}?>
	</div><?
		if ($arParams['SHOW_PERSONAL_LINK'] == 'Y'):?>
			<div style="padding-top: 4px;">
			<span class="icon_info"></span>
			<a href="<?=$arParams['PATH_TO_PERSONAL']?>"><?=GetMessage('TSB1_PERSONAL')?></a>
			</div>
		<?endif?>
	</div>
	<?if (!$compositeStub && $arParams['SHOW_AUTHOR'] == 'Y'):?>
		<div class="bx-basket-block">
			<i class="fa fa-user"></i>
			<?if ($USER->IsAuthorized()):
				$name = trim($USER->GetFullName());
				if (! $name)
					$name = trim($USER->GetLogin());
				if (mb_strlen($name) > 15)
					$name = mb_substr($name, 0, 12).'...';
				?>
				<a href="<?=$arParams['PATH_TO_PROFILE']?>"><?=htmlspecialcharsbx($name)?></a>
				&nbsp;
				<a href="?logout=yes&<?=bitrix_sessid_get()?>"><?=GetMessage('TSB1_LOGOUT')?></a>
			<?else:
				$arParamsToDelete = array(
					"login",
					"login_form",
					"logout",
					"register",
					"forgot_password",
					"change_password",
					"confirm_registration",
					"confirm_code",
					"confirm_user_id",
					"logout_butt",
					"auth_service_id",
					"clear_cache",
					"backurl",
				);

				$currentUrl = urlencode($APPLICATION->GetCurPageParam("", $arParamsToDelete));
			if ($arParams['AJAX'] == 'N')
			{
				?><script type="text/javascript"><?=$cartId?>.currentUrl = '<?=$currentUrl?>';</script><?
			}
			else
			{
				$currentUrl = '#CURRENT_URL#';
			}

			$pathToAuthorize = $arParams['PATH_TO_AUTHORIZE'];
			$pathToAuthorize .= (mb_stripos($pathToAuthorize, '?') === false ? '?' : '&');
			$pathToAuthorize .= 'login=yes&backurl='.$currentUrl;
			?>
				<a href="<?=$pathToAuthorize?>">
					<?=GetMessage('TSB1_LOGIN')?>
				</a>
			<?
			if ($arParams['SHOW_REGISTRATION'] === 'Y')
			{
			$pathToRegister = $arParams['PATH_TO_REGISTER'];
			$pathToRegister .= (mb_stripos($pathToRegister, '?') === false ? '?' : '&');
			$pathToRegister .= 'register=yes&backurl='.$currentUrl;
			?>
				<a href="<?=$pathToRegister?>">
					<?=GetMessage('TSB1_REGISTER')?>
				</a>
				<?
			}
				?>
			<?endif?>
		</div>
	<?endif?>
</div>*/?>