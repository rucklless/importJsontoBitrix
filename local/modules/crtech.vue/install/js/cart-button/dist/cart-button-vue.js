(function (window) {
	'use strict';

	/**
	 * Bitrix UI
	 * Reaction picker Vue component
	 *
	 * @package bitrix
	 * @subpackage ui
	 * @copyright 2001-2019 Bitrix
	 */

	const BX = window.BX;
	BX.Vue.component('bx-cart-button-vue', {
		/**
		 * @emits 'set' {values: object}
		 * @emits 'list' {action: string, type: string}
		 */
		props: {
			values: {
				default: {}
			},
			userId: {
				default: 0
			},
			openList: {
				default: true
			}
		},
		data: function data() {
			return {

			};
		},
		created: function created() {

		},
		watch: {

		},
		methods: {

		},
		computed: {
			localize(state)
			{
				return BX.Vue.getFilteredPhrases('BX_VUE_CART_BUTTON_');
			}
		},
		template: ""
	});

}(window);
//# sourceMappingURL=reaction.bundle.js.map
