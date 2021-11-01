<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<nav class="navbar navbar-expand-lg megamenu">
	<div class="collapse navbar-collapse" id="main_nav">
		<?if (!empty($arResult)):?>
			<ul class="navbar-nav">
				<?$previousLevel = 0;
				$catalog = false;
				foreach($arResult as $arItem):?>
					<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
						<?if($catalog && $arItem["DEPTH_LEVEL"] == 1):?>
							<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"] - 1));?>
						<?else:?>
							<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
						<?endif;?>
					<?endif;?>
					<?if($arItem['PARAMS']['megamenu'] == 'y'):?>
						<li class="nav-item dropdown catalog">
							<a class="nav-link main-toggle dropdown-toggle" href="#mmenu" data-bs-toggle="dropdown"><span class="icon toggle-icon"><i></i><i></i><i></i></span>Каталог </a>
						</li>
					<? /**
						 * if item is catalog, pushing child item in to the buffer, for sliding menu.
						 */?>
						<?//ob_start();
						$catalog = true;?>
					<?else:?>
						<?if($catalog):
							if($arItem["DEPTH_LEVEL"]>1):
								if ($arItem["IS_PARENT"]):?>
									<li><span><?=$arItem['TEXT']?></span>
										<ul>
								<?else:?>
									<li><a href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
								<?endif;
							else:
								$catalog = false;
								$slideMenu = ob_get_contents();
								ob_clean();
								?><li class="nav-item"><a class="nav-link" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li><?
							endif;?>
						<?else:?>
							<li class="nav-item"><a class="nav-link" href="<?=$arItem['LINK']?>"><?=$arItem['TEXT']?></a></li>
						<?endif;?>
					<?endif;?>
					<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
				<?endforeach;?>
				<?/*$mainMenu = ob_get_clean();
					echo $mainMenu;*/
				?>
			</ul>
		<?endif;?>
		</div> <!-- navbar-collapse.// -->

	</nav>

<pre><?//var_export($bf)?></pre>
<?//php echo strval($bf)?>
<?if (!empty($arResult)):?>
	<style>.mm-menu_offcanvas #panel-menu ul{
            display: block !important;
        }</style>
<div class="menu-clear-left"></div>
	<nav id="mmenu" class="">
		<div id="panel-menu">
			<ul style="display: none">
				<?echo $slideMenu;?>
				<li class="Divider">Other demos</li>
				<?echo $mainMenu;?>
			</ul>
		</div>
	</nav>
<?endif?>

