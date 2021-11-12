<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
	<script type="text/javascript">
		/// some script

		// jquery ready start
		/*$(document).ready(function() {
			// jQuery code
			//////////////////////// Prevent closing from click inside dropdown
			$(document).on('click', '.dropdown-menu', function (e) {
				e.stopPropagation();
			});

			if ($(window).width() < 992) {

				$('.has-submenu a').click(function(e){
					e.preventDefault();
					$(this).next('.megasubmenu').toggle();

					$('.dropdown').on('hide.bs.dropdown', function () {
						$(this).find('.megasubmenu').hide();
					})
				});

			}
		}); // jquery end*/
	</script>
	<nav class="navbar navbar-expand-lg megamenu">
		<div class="collapse navbar-collapse" id="main_nav">
			<ul class="navbar-nav">
				<?
				$previousLevel = 0;
				foreach($arResult as $arItem):?>
					<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
						<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
					<?endif?>

					<?if($arItem['LINK'] == '/catalog/'):?>
						<li class="nav-item dropdown catalog">
							<a class="nav-link main-toggle dropdown-toggle" href="#mmenu" id="hamburger-icon">
								<span class="icon toggle-icon"><i></i><i></i><i></i></span>Каталог </a>
						</li>
					<?else:?>

						<?if ($arItem["IS_PARENT"]):?>

							<?if ($arItem["DEPTH_LEVEL"] == 1):?>
								<li class="nav-item"><a href="<?=$arItem["LINK"]?>" class="nav-link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
									<ul>
							<?else:?>
								<li class="has-submenu"<?if ($arItem["SELECTED"]):?> class="nav-linkitem-selected"<?endif?>>
									<a class="dropdown-item dropdown-toggle" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
									<div class="shadow"></div>
									<div class="megasubmenu dropdown-menu">
										<div class="row wrap-megamenu">
											<div class="col">
												<h6 class="title"><?=$arItem["TEXT"]?></h6>
												<ul class="list-unstyled">
							<?endif?>

						<?else:?>

							<?if ($arItem["PERMISSION"] > "D"):?>

								<?if ($arItem["DEPTH_LEVEL"] == 1):?>
									<li class="nav-item has-submenu"><a href="<?=$arItem["LINK"]?>" class="nav-link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
								<?else:?>
									<li class="nav-item"<?if ($arItem["SELECTED"]):?> class="item-selected nav-link"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
								<?endif?>

							<?else:?>

								<?if ($arItem["DEPTH_LEVEL"] == 1):?>
									<li class="nav-item"><a href="" class="nav-link <?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
								<?else:?>
									<li class="nav-item"><a href="" class="denied nav-link" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
								<?endif?>

							<?endif?>

						<?endif?>
					<?endif;?>
					<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
				<?endforeach?>

				<?if ($previousLevel > 1)://close last item tags?>
					<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
				<?endif?>
			</ul>
		</div> <!-- navbar-collapse.// -->

	</nav>
<?if (!empty($arResult)):?>
<ul id="horizontal-multilevel-menu">



</ul>
<div class="menu-clear-left"></div>
<?endif?>