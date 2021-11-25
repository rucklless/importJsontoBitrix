!function (e) {
	var t = {};

	function n(i) {
		if (t[i]) return t[i].exports;
		var s = t[i] = {i: i, l: !1, exports: {}};
		return e[i].call(s.exports, s, s.exports, n), s.l = !0, s.exports
	}

	n(n.s = 0)
}([function (e, t) {
	"use strict";
	//alert('133');
	var i = {
		hooks: {},
		extensions: [],
		wrappers: [],
		navbar: {add: !0, sticky: !0, title: "Меню", titleLink: "parent"},
		onClick: {close: null, preventDefault: null, setSelected: !0},
		slidingSubmenus: !0
	}, s = {
		classNames: {
			inset: "Inset",
			nolistview: "NoListview",
			nopanel: "NoPanel",
			panel: "Panel",
			selected: "Selected",
			vertical: "Vertical"
		}, language: null, openingInterval: 25, panelNodetype: ["ul", "ol", "div"], transitionDuration: 400
	};

	function a(e, t) {//need
		for (var n in "object" != o(e) && (e = {}), "object" != o(t) && (t = {}), t) t.hasOwnProperty(n) && (void 0 === e[n] ? e[n] = t[n] : "object" == o(e[n]) && a(e[n], t[n]));
		return e
	}

	function o(e) {
		return {}.toString.call(e).match(/\s([a-zA-Z]+)/)[1].toLowerCase()
	}

	function m() { //success
		return "mm-" + l++
	}

	var l = 0;

	var p = {};

	function b(e) {//need
		var t = e.split("."), n = document.createElement(t.shift());
		return t.forEach((function (e) {
			n.classList.add(e)
		})), n
	}

	function g(e, t) {//success
		return Array.prototype.slice.call(e.querySelectorAll(t))
	}

	function _(e, t) {
		var n = Array.prototype.slice.call(e.children);
		return t ? n.filter((function (e) {
			return e.matches(t)
		})) : n
	}

	function E(e, t, n) {
		e.matches("." + t) && (e.classList.remove(t), e.classList.add(n))
	}

	var x = {};

	var S = function () {
		function e(t, n, i) {
			return this.opts = a(n, e.options), this.conf = a(i, e.configs), this._api = ["bind",  "initListview", "setSelected"], this.node = {}, this.vars = {}, this.hook = {}, this.clck = [], this.node.menu = "string" == typeof t ? document.querySelector(t) : t, "function" == typeof this._deprecatedWarnings && this._deprecatedWarnings(), this._initWrappers(), this._initMenu(), this._initPanels(), this._initOpened(), this._initAnchors(), this
		}

		return e.prototype.openPanel = function (e, t) {
			var n = this;
			if (this.trigger("openPanel:before", [e]), e && (e.matches(".mm-panel") || (e = e.closest(".mm-panel")), e)) {
				if ("boolean" != typeof t && (t = !0), e.parentElement.matches(".mm-listitem_vertical")) {
					y(e, ".mm-listitem_vertical").forEach((function (e) {
						e.classList.add("mm-listitem_opened"), _(e, ".mm-panel").forEach((function (e) {
							e.classList.remove("mm-hidden")
						}))
					}));
					var i = y(e, ".mm-panel").filter((function (e) {
						return !e.parentElement.matches(".mm-listitem_vertical")
					}));
					this.trigger("openPanel:start", [e]), i.length && this.openPanel(i[0]), this.trigger("openPanel:finish", [e])
				} else {
					if (e.matches(".mm-panel_opened")) return;
					var s = _(this.node.pnls, ".mm-panel"), a = _(this.node.pnls, ".mm-panel_opened")[0];
					s.filter((function (t) {
						return t !== e
					})).forEach((function (e) {
						e.classList.remove("mm-panel_opened-parent")
					}));
					for (var o = e.mmParent; o;) (o = o.closest(".mm-panel")) && (o.parentElement.matches(".mm-listitem_vertical") || o.classList.add("mm-panel_opened-parent"), o = o.mmParent);
					s.forEach((function (e) {
						e.classList.remove("mm-panel_highest")
					})), s.filter((function (e) {
						return e !== a
					})).filter((function (t) {
						return t !== e
					})).forEach((function (e) {
						e.classList.add("mm-hidden")
					})), e.classList.remove("mm-hidden");
					var r = function () {
						a && a.classList.remove("mm-panel_opened"), e.classList.add("mm-panel_opened"), e.matches(".mm-panel_opened-parent") ? (a && a.classList.add("mm-panel_highest"), e.classList.remove("mm-panel_opened-parent")) : (a && a.classList.add("mm-panel_opened-parent"), e.classList.add("mm-panel_highest")), n.trigger("openPanel:start", [e])
					}, m = function () {

					};
					t && !e.matches(".mm-panel_noanimation") ? setTimeout((function () {
						r()
					}), this.conf.openingInterval) : (r(), m())
				}
				this.trigger("openPanel:after", [e])
			}
		}, e.prototype.bind = function (e, t) {
			this.hook[e] = this.hook[e] || [], this.hook[e].push(t) //need
		}, e.prototype.trigger = function (e, t) {
			if (this.hook[e]) for (var n = 0, i = this.hook[e].length; n < i; n++) this.hook[e][n].apply(this, t)
		}, e.prototype._initWrappers = function () {
		}, e.prototype._initMenu = function () {
			var e = this;
			this.trigger("initMenu:before"), this.node.wrpr = this.node.wrpr || this.node.menu.parentElement, this.node.wrpr.classList.add("mm-wrapper"), this.node.menu.id = this.node.menu.id || m();
			var t = b("div.mm-panels");
			_(this.node.menu).forEach((function (n) {
				e.conf.panelNodetype.indexOf(n.nodeName.toLowerCase()) > -1 && t.append(n)
			})), this.node.menu.append(t), this.node.pnls = t, this.node.menu.classList.add("mm-menu"), this.trigger("initMenu:after")
		}, e.prototype._initPanels = function () {
			var e = this;
			this.trigger("initPanels:before"), this.clck.push((function (t, n) {
				if (n.inMenu) { //need
					var i = t.getAttribute("href");
					if (i && i.length > 1 && "#" == i.slice(0, 1)) try {
						var s = g(e.node.menu, i)[0];
						if (s && s.matches(".mm-panel")) return t.parentElement.matches(".mm-listitem_vertical") ? e.togglePanel(s) : e.openPanel(s), !0
					} catch (e) {
					}
				}
			})), _(this.node.pnls).forEach((function (t) {
				e.initPanel(t)
			})), this.trigger("initPanels:after")
		}, e.prototype.initPanel = function (e) {
			var t = this, n = this.conf.panelNodetype.join(", ");
			if (e.matches(n) && (e.matches(".mm-panel") || (e = this._initPanel(e)), e)) {
				var i = [];
				i.push.apply(i, _(e, "." + this.conf.classNames.panel)), _(e, ".mm-listview").forEach((function (e) {
					_(e, ".mm-listitem").forEach((function (e) {
						i.push.apply(i, _(e, n))
					}))
				})), i.forEach((function (e) {
					t.initPanel(e)
				}))
			}
		}, e.prototype._initPanel = function (e) { //need
			var t = this;
			if (this.trigger("initPanel:before", [e]), E(e, this.conf.classNames.panel, "mm-panel"), E(e, this.conf.classNames.nopanel, "mm-nopanel"), E(e, this.conf.classNames.inset, "mm-listview_inset"), e.matches(".mm-listview_inset") && e.classList.add("mm-nopanel"), e.matches(".mm-nopanel")) return null;
			var n = e.id || m(), i = e.matches("." + this.conf.classNames.vertical) || !this.opts.slidingSubmenus;
			if (e.classList.remove(this.conf.classNames.vertical), e.matches("ul, ol")) { //need
				e.removeAttribute("id");
				var s = b("div");
				e.before(s), s.append(e), e = s
			}
			e.id = n, e.classList.add("mm-panel"), e.classList.add("mm-hidden");
			var a = [e.parentElement].filter((function (e) {
				return e.matches("li")
			}))[0];
			if (i ? a && a.classList.add("mm-listitem_vertical") : this.node.pnls.append(e), a && (a.mmChild = e, e.mmParent = a, a && a.matches(".mm-listitem") && !_(a, ".mm-btn").length)) {
				var o = _(a, ".mm-listitem__text")[0];
				if (o) {
					var r = b("a.mm-btn.mm-btn_next.mm-listitem__btn");
					r.setAttribute("href", "#" + e.id), o.matches("span") ? (r.classList.add("mm-listitem__text"), r.innerHTML = o.innerHTML, a.insertBefore(r, o.nextElementSibling), o.remove()) : a.insertBefore(r, _(a, ".mm-panel")[0])
				}
			}
			return this._initNavbar(e), _(e, "ul, ol").forEach((function (e) {
				t.initListview(e)
			})), this.trigger("initPanel:after", [e]), e
		}, e.prototype._initNavbar = function (e) {
			if (this.trigger("initNavbar:before", [e]), !_(e, ".mm-navbar").length) {
				var t = null, n = null;
				if (e.getAttribute("data-mm-parent") ? n = false : (t = e.mmParent) && (n = t.closest(".mm-panel")), !t || !t.matches(".mm-listitem_vertical")) {
					var i = b("div.mm-navbar");
					if (this.opts.navbar.add ? this.opts.navbar.sticky && i.classList.add("mm-navbar_sticky") : i.classList.add("mm-hidden"), n) {
						var s = b("a.mm-btn.mm-btn_prev.mm-navbar__btn");
						s.setAttribute("href", "#" + n.id), i.append(s)
					}
					var a = null;
					t ? a = _(t, ".mm-listitem__text")[0] : n && (a = false);
					var o = b("a.mm-navbar__title"), r = b("span");
					switch (o.append(r), r.innerHTML = e.getAttribute("data-mm-title") || (a ? a.textContent : "") || this.i18n(this.opts.navbar.title) || this.i18n("Menu"), this.opts.navbar.titleLink) {
						case"anchor":
							a && o.setAttribute("href", a.getAttribute("href"));
							break;
						case"parent":
							n && o.setAttribute("href", "#" + n.id)
					}
					i.append(o), e.prepend(i), this.trigger("initNavbar:after", [e])
				}
			}
		}, e.prototype.initListview = function (e) {
			var t = this;
			this.trigger("initListview:before", [e]), E(e, this.conf.classNames.nolistview, "mm-nolistview"), e.matches(".mm-nolistview") || (e.classList.add("mm-listview"), _(e).forEach((function (e) {
				e.classList.add("mm-listitem"), E(e, t.conf.classNames.selected, "mm-listitem_selected"), _(e, "a, span").forEach((function (e) {
					e.matches(".mm-btn") || e.classList.add("mm-listitem__text")
				}))
			}))), this.trigger("initListview:after", [e])
		}, e.prototype._initOpened = function () {
			this.trigger("initOpened:before");
			t = null;

			var n = t ? t.closest(".mm-panel") : _(this.node.pnls, ".mm-panel")[0];
			this.openPanel(n, !1), this.trigger("initOpened:after")
		}, e.prototype._initAnchors = function () {
			var e = this;
			this.trigger("initAnchors:before"), document.addEventListener("click", (function (t) {
				var n = t.target.closest("a[href]");
				if (n) {
					for (var i = {
						inMenu: n.closest(".mm-menu") === e.node.menu,
						inListview: n.matches(".mm-listitem > a"),
						toExternal: n.matches('[rel="external"]') || n.matches('[target="_blank"]')
					}, s = {

					}, c = 0; c < e.clck.length; c++) {
						var m = e.clck[c].call(e, n, i);
						if (m) {
							if ("boolean" == typeof m) return void t.preventDefault();
							"object" == o(m) && (s = a(m, s))
						}
					}
					i.inMenu && i.inListview && !i.toExternal && (r(n, e.opts.onClick.setSelected, s.setSelected) && e.setSelected(n.parentElement), r(n, e.opts.onClick.preventDefault, s.preventDefault) && t.preventDefault(), r(n, e.opts.onClick.close, s.close) && e.opts.offCanvas && "function" == typeof e.close && e.close())
				}
			}), !0), this.trigger("initAnchors:after")
		}, e.prototype.i18n = function (e) {
			return function (e, t) {
				return "string" == typeof t && void 0 !== p[t] && p[t][e] || e
			}(e, this.conf.language)
		}, e.options = i, e.configs = s, e.addons = {}, e.wrappers = {}, e.node = {}, e.vars = {}, e
	}(), M = {blockUI: !0, moveBackground: !0};
	var A = {
		clone: !1,
		menu: {insertMethod: "prepend", insertSelector: "body"},
		page: {nodetype: "div", selector: null, noSelector: []}
	};

	S.options.offCanvas = M, S.configs.offCanvas = A;
	S.prototype.open = function () {
		this.trigger("open:before"), this.vars.opened || (this._openSetup())
	};

	S.sr_aria = function (e, t, n) {
	}, S.sr_role = function (e, t) {
	}, S.sr_text = function (e) {
		return '<span class="mm-sronly">' + e + "</span>"
	};
	var W = {height: "default"};
	S.options.autoHeight = W;
	var V = {add: !1, addTo: "panels"};
	S.options.dividers = V, S.configs.classNames.divider = "Divider";

	S.configs.classNames.navbars = {
		panelTitle: "Title"
	};
	var ye = {scroll: !1, update: !1};
	var Le = {scrollOffset: 0, updateOffset: 50};
	S.options.pageScroll = ye, S.configs.pageScroll = Le;
	var we = {
		add: !1,
		addTo: "panels",
		cancel: !1,
		noResults: "No results found.",
		placeholder: "Search",
		panel: {add: !1, dividers: !0, fx: "none", id: null, splash: null, title: "Search"},
		search: !0,
		showTextItems: !1,
		showSubPanels: !0
	};
	var Ee = {clear: !1, form: !1, input: !1, submit: !1};
	S.options.searchfield = we, S.configs.searchfield = Ee;

	var De;
	window && (window.MobileMenu = S), (De = window.jQuery || window.Zepto || null) && (De.fn.mobilemenu = function (e, t) {
		var n = De();
		return this.each((function (i, s) {
			if (!s.mmApi) {
				var a = new S(s, e, t), o = De(a.node.menu);
				o.data("MobileMenu", a.API), n = n.add(o)
			}
		})), n
	})
}]);

//try5