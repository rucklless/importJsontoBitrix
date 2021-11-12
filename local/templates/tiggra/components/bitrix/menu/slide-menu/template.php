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
		},
		computed:{
			/*submenu(){
				if(this.activeSubmenu === undefined)
					this.activeSubmenu = this.list[0].ITEMS
				return this.list[0].ITEMS
			}*/
		},
		template: `
			<div class="slide-menu" @mousemove="getMousePosX()">
				<div class="slide-left">
					<div class="slide-logo"></div>
					<div class="slide-left-menu vue-slide">
								<ul>
									<li v-for="(item, index) in list"><a :href='item.LINK' :data-list-id="index" @mouseover="selectSubmenu(index)" @mouseleave="activeMenuIndex = false">{{item.TEXT}}</a></li>
								</ul>
					</div>
				</div>
				<div class="slide-right">
					<div class="slide-close-button">
						<button class="close"><i class="fa fa-close"></i></button>
					</div>
					<div class="second-list slide-menu-here">
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
			</div>
			<div class="mdl-layout__obfuscator"></div>
		`
	})

	menu.mount('#vue-menu-application')
</script>













<script>
	/*BX.Vue.component('bx-component', {
		data(){
			return {
				list: <?echo json_encode($arResult)?>,
				sublist:{},
			}
		},
		computed:{

		},
		method:{
			activeSubmenu(event){
				console.log(event)
				//if(indx === undefined)
				//{
					//indx = 0
				//}
				//return indx
				//return this.list[index].ITEMS
			}
		},
		template:
			`<ul class="slide-left-menu vue-slide">
				<li v-for="(item, index) in list"><a :href='item.LINK' :data-list-id="index" @mouseover="activeSubmenu">{{item.TEXT}}</a></li>
			</ul>`,
	});*/
	/*BX.Vue.create({
		el: '#vue-application',
		template: '<bx-component/>'
	});*/
</script>

