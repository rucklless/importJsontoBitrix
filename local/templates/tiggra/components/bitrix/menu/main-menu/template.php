<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<pre><?//print_r($arResult)?></pre>
	<nav class="navbar navbar-expand-lg megamenu">
		<div class="collapse navbar-collapse" id="main_nav">
			<ul class="navbar-nav">
				<?$previousLevel = 0;?>
				<?foreach($arResult as $arItem):?>
				<?//=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
					<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):
						switch ($arItem["DEPTH_LEVEL"]):
						case 4:
							echo "i равно 0";
							break;
						case 3:
							echo "i равно 1";
							break;
						case 2:
							echo "</ul></li>";
							break;
						case 1:
							echo "</ul></li>";
							break;
						endswitch;
						?>
					<?endif?>
					<?if ($arItem["IS_PARENT"]):?>
						<?if ($arItem["DEPTH_LEVEL"] == 1):?>
							<?if($arItem["PARAMS"]['megamenu'] == 'y'):?>
								<li class="nav-item dropdown catalog">
								<a class="nav-link main-toggle dropdown-toggle" href="#" data-bs-toggle="dropdown"><span class="icon toggle-icon"><i></i><i></i><i></i></span><?=$arItem['TEXT']?> </a>
								<ul class="dropdown-menu">
							<?else:?>

							<?endif;?>
						<?elseif ($arItem["DEPTH_LEVEL"] == 2):?>
							<li class="has-submenu">
								<a class="dropdown-item dropdown-toggle" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
								<div class="shadow"></div>
								<div class="megasubmenu dropdown-menu">
									<div class="row wrap-megamenu">
										<ul class="list-unstyled">
										<!--div class="col">
											<h6 class="title">Одежда</h6>
											<ul class="list-unstyled"-->
							</li>
						<?endif;?>
					<?else:?>
						<?if ($arItem["DEPTH_LEVEL"] == 1):?>
							<li class="nav-item"><a class="nav-link" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
						<?elseif ($arItem["DEPTH_LEVEL"] == 2):?>
							<li class="has-submenu">
								<a class="dropdown-item" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a>
								<div class="shadow"></div>
							</li>
						<?elseif ($arItem["DEPTH_LEVEL"] == 3):?>
							<li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
						<?endif;?>
					<?endif;?>
					<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
				<?endforeach;?>
			</ul>
		</div> <!-- navbar-collapse.// -->

	</nav>




<ul id="horizontal-multilevel-menu">

	<?
	$previousLevel = 0;
	foreach($arResult as $arItem):?>

		<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
			<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>

		<?if ($arItem["IS_PARENT"]):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a>
					<ul>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>" class="parent"><?=$arItem["TEXT"]?></a>
					<ul>
			<?endif?>

		<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="<?=$arItem["LINK"]?>" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li<?if ($arItem["SELECTED"]):?> class="item-selected"<?endif?>><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li><a href="" class="<?if ($arItem["SELECTED"]):?>root-item-selected<?else:?>root-item<?endif?>" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

	<?endforeach?>

	<?if ($previousLevel > 1)://close last item tags?>
		<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
	<?endif?>

	</ul>
	<div class="menu-clear-left"></div>
	<?endif?>