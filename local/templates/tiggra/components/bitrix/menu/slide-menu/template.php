<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<pre><?//print_r($arResult)?></pre>
	<div id="vue-menu-application"><main-menu></main-menu>


<?if (!empty($arResult)):?>
<?/*
<ul class="slide-left-menu vue-slide">
<?
foreach($arResult as $arItem):


	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
	$parent = '';
	if($arItem['PARAMS']['IS_PARENT']){
		$parent = 'parent';
	}
?>
	<?if($arItem["SELECTED"]):?>
		<li><a data-category-id="<?=$arItem['PARAMS']['ID']?>" href="<?=$arItem["LINK"]?>" class="selected <?echo $parent?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a data-category-id="<?=$arItem['PARAMS']['ID']?>" href="<?=$arItem["LINK"]?>" class="<?echo $parent?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>

<?endforeach?>

</ul>*/?>
<?endif?>

		</div>

	</div>


<script>
	// Create a Vue application
	const menu = Vue.createApp({})
	arrResult = <?echo json_encode($arResult)?>
	// Define a new global component called button-counter
	menu.component('main-menu', {
		data() {
			return {
				list: arrResult,
				//activeSubmenu: 0,
				activeSubmenu: arrResult[0].ITEMS,
				activeMenuIndex:0,
				mousePosX: 0,
				windowWidth: window.innerWidth,
				alreadiOnMobileMenu:false,
			}
		},
		methods:{
			getMousePosX(){
				this.mousePosX = event.screenX;
			},
			selectSubmenu(indx){
				this.activeMenuIndex = indx // индекс активного пункта
				/*   задержка чтобы при случайном наведении на пункт, под меню не показывалось    */
				setTimeout(() => {
					/* если по истечению задержки мы все еще на том же пункт меню, значит показываем подменю   */
					if(this.activeMenuIndex == indx){
						this.activeSubmenu = this.list[indx].ITEMS
					}
				} ,200)
			},
			updateWindowWidth() {
				this.windowWidth = window.innerWidth;
			},
			slideMenu(){
				const menuRightElem = document.getElementById('mobile-menu');
				if(menuRightElem && this.alreadiOnMobileMenu !== true){
					const menuRight = new SlideMenu(menuRightElem, {
						keyClose: 'Escape',
						submenuLinkAfter: '<span><i class="fa fa-angle-right"></i></span>',
						backLinkBefore: '<span><i class="fa fa-angle-left"></i></span>',
					});
					this.alreadiOnMobileMenu = true
				}
			}
		},
		computed:{
			showMobileMenu(){
				if(this.windowWidth<800){
					this.slideMenu();
					return true
				}else{
					this.alreadiOnMobileMenu = false
					return false
				}

			}
		},
		created() {
			window.addEventListener('resize', this.updateWindowWidth);
		},
		mounted() {
			this.slideMenu();
		},
		template: `
			<div class="slide-menu" @mousemove="getMousePosX()">

				<div class="slide-logo">

				</div>
				<div class="slide-close-button">
					<button class="close"><i class="fa fa-close"></i></button>
				</div>
				<div class="deliter" v-if='!showMobileMenu'></div>
				<div class="slide-left-menu vue-slide">
					<ul v-if='!showMobileMenu'>
						<li v-for="(item, index) in list"><a :href='item.LINK' :data-list-id="index" @mouseover="selectSubmenu(index)" @mouseleave="activeMenuIndex = false">{{item.TEXT}}</a></li>
					</ul>

					<nav class="mm-menu mm-menu_opened" id="menu" v-else  style="z-index: 99999">
						<div id="panel-menu">
							<ul>
								<li v-for="(item, index) in list">
									<span v-if="item.IS_PARENT === true">{{item.TEXT}}</span>
									<a v-else :href='item.LINK'>
										{{item.TEXT}}
									</a>
									<ul v-if="item.IS_PARENT === true">
										<li v-for="(subitem, subindex) in item.ITEMS">
											<span v-if="subitem.IS_PARENT === true">{{subitem.TEXT}}</span>
											<a v-else :href="subitem.LINK">{{subitem.TEXT}}</a>
											<ul v-if="subitem.IS_PARENT === true">
												<li v-for="(subsubitem, subsubindex) in subitem.ITEMS">
													<a :href="subsubitem.LINK">{{subsubitem.TEXT}}</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</nav>
				</div>

				<div class="second-list slide-menu-here" v-if='!showMobileMenu'>
					<ul>
						<li v-for="(item, index) in activeSubmenu"><a :href='item.LINK' :data-list-id="index" class="second-item">{{item.TEXT}}</a>
							<div class="third-list">
								<ul v-if='item.IS_PARENT === true'>
									<li v-for="subitem in item.ITEMS">
										<a :href="subitem.LINK" class="third-item">{{subitem.TEXT}}</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
<div class="mdl-layout__obfuscator"></div>
		`
	})

	menu.mount('#vue-menu-application')
</script>

<?php
	$this->addExternalJS($templateFolder."/assets/slide.js");
?>
<script>

</script>
