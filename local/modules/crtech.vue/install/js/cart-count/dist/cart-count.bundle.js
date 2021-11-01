this.BX = this.BX || {};
(function (exports,main_core) {
	'use strict';

	var _templateObject;
	var CartCount = /*#__PURE__*/function () {
	  function CartCount() {
	    var options = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {
	      name: 'CartCount'
	    };
	    babelHelpers.classCallCheck(this, CartCount);
	    this.name = options.name;
	  }

	  babelHelpers.createClass(CartCount, [{
	    key: "setName",
	    value: function setName(name) {
	      this.name = name;
	    }
	  }, {
	    key: "getName",
	    value: function getName() {
	      return this.name;
	    }
	  }, {
	    key: "render",
	    value: function render() {
	      return main_core.Tag.render(_templateObject || (_templateObject = babelHelpers.taggedTemplateLiteral(["\n\t\t\t<div class=\"ui-cart-count\">\n\t\t\t\t<span class=\"ui-cart-count-name\">", "</span>\n\t\t\t</div>\n\t\t"])), this.getName());
	    }
	  }]);
	  return CartCount;
	}();

	exports.CartCount = CartCount;

}((this.BX[''] = this.BX[''] || {}),BX));
//# sourceMappingURL=cart-count.bundle.js.map
