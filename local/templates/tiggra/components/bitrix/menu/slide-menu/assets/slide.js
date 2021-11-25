!function (t) {
	var e = {};

	function n(r) {
		if (e[r]) return e[r].exports;
		var o = e[r] = {i: r, l: !1, exports: {}};
		return t[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports
	}

	n.m = t, n.c = e, n.d = function (t, e, r) {
		n.o(t, e) || Object.defineProperty(t, e, {enumerable: !0, get: r})
	}, n.r = function (t) {
		"undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(t, "__esModule", {value: !0})
	}, n.t = function (t, e) {
		if (1 & e && (t = n(t)), 8 & e) return t;
		if (4 & e && "object" == typeof t && t && t.__esModule) return t;
		var r = Object.create(null);
		if (n.r(r), Object.defineProperty(r, "default", {
			enumerable: !0,
			value: t
		}), 2 & e && "string" != typeof t) for (var o in t) n.d(r, o, function (e) {
			return t[e]
		}.bind(null, o));
		return r
	}, n.n = function (t) {
		var e = t && t.__esModule ? function () {
			return t.default
		} : function () {
			return t
		};
		return n.d(e, "a", e), e
	}, n.o = function (t, e) {
		return Object.prototype.hasOwnProperty.call(t, e)
	}, n.p = "", n(n.s = 59)
}([function (t, e, n) {
	(function (e) {
		var n = function (t) {
			return t && t.Math == Math && t
		};
		t.exports = n("object" == typeof globalThis && globalThis) || n("object" == typeof window && window) || n("object" == typeof self && self) || n("object" == typeof e && e) || Function("return this")()
	}).call(this, n(32))
}, function (t, e) {
	t.exports = function (t) {
		try {
			return !!t()
		} catch (t) {
			return !0
		}
	}
}, function (t, e) {
	var n = {}.hasOwnProperty;
	t.exports = function (t, e) {
		return n.call(t, e)
	}
}, function (t, e, n) {
	var r = n(1);
	t.exports = !r((function () {
		return 7 != Object.defineProperty({}, "a", {
			get: function () {
				return 7
			}
		}).a
	}))
}, function (t, e) {
	t.exports = function (t) {
		return "object" == typeof t ? null !== t : "function" == typeof t
	}
}, function (t, e, n) {
	var r = n(3), o = n(18), i = n(13);
	t.exports = r ? function (t, e, n) {
		return o.f(t, e, i(1, n))
	} : function (t, e, n) {
		return t[e] = n, t
	}
}, function (t, e, n) {
	var r = n(4);
	t.exports = function (t) {
		if (!r(t)) throw TypeError(String(t) + " is not an object");
		return t
	}
}, function (t, e, n) {
	var r = n(14), o = n(8);
	t.exports = function (t) {
		return r(o(t))
	}
}, function (t, e) {
	t.exports = function (t) {
		if (null == t) throw TypeError("Can't call method on " + t);
		return t
	}
}, function (t, e, n) {
	var r = n(0), o = n(5);
	t.exports = function (t, e) {
		try {
			o(r, t, e)
		} catch (n) {
			r[t] = e
		}
		return e
	}
}, function (t, e, n) {
	var r = n(0), o = n(11).f, i = n(5), c = n(19), s = n(9), a = n(38), u = n(46);
	t.exports = function (t, e) {
		var n, l, f, p, h, m = t.target, d = t.global, v = t.stat;
		if (n = d ? r : v ? r[m] || s(m, {}) : (r[m] || {}).prototype) for (l in e) {
			if (p = e[l], f = t.noTargetGet ? (h = o(n, l)) && h.value : n[l], !u(d ? l : m + (v ? "." : "#") + l, t.forced) && void 0 !== f) {
				if (typeof p == typeof f) continue;
				a(p, f)
			}
			(t.sham || f && f.sham) && i(p, "sham", !0), c(n, l, p, t)
		}
	}
}, function (t, e, n) {
	var r = n(3), o = n(12), i = n(13), c = n(7), s = n(16), a = n(2), u = n(17), l = Object.getOwnPropertyDescriptor;
	e.f = r ? l : function (t, e) {
		if (t = c(t), e = s(e, !0), u) try {
			return l(t, e)
		} catch (t) {
		}
		if (a(t, e)) return i(!o.f.call(t, e), t[e])
	}
}, function (t, e, n) {
	"use strict";
	var r = {}.propertyIsEnumerable, o = Object.getOwnPropertyDescriptor, i = o && !r.call({1: 2}, 1);
	e.f = i ? function (t) {
		var e = o(this, t);
		return !!e && e.enumerable
	} : r
}, function (t, e) {
	t.exports = function (t, e) {
		return {enumerable: !(1 & t), configurable: !(2 & t), writable: !(4 & t), value: e}
	}
}, function (t, e, n) {
	var r = n(1), o = n(15), i = "".split;
	t.exports = r((function () {
		return !Object("z").propertyIsEnumerable(0)
	})) ? function (t) {
		return "String" == o(t) ? i.call(t, "") : Object(t)
	} : Object
}, function (t, e) {
	var n = {}.toString;
	t.exports = function (t) {
		return n.call(t).slice(8, -1)
	}
}, function (t, e, n) {
	var r = n(4);
	t.exports = function (t, e) {
		if (!r(t)) return t;
		var n, o;
		if (e && "function" == typeof (n = t.toString) && !r(o = n.call(t))) return o;
		if ("function" == typeof (n = t.valueOf) && !r(o = n.call(t))) return o;
		if (!e && "function" == typeof (n = t.toString) && !r(o = n.call(t))) return o;
		throw TypeError("Can't convert object to primitive value")
	}
}, function (t, e, n) {
	var r = n(3), o = n(1), i = n(33);
	t.exports = !r && !o((function () {
		return 7 != Object.defineProperty(i("div"), "a", {
			get: function () {
				return 7
			}
		}).a
	}))
}, function (t, e, n) {
	var r = n(3), o = n(17), i = n(6), c = n(16), s = Object.defineProperty;
	e.f = r ? s : function (t, e, n) {
		if (i(t), e = c(e, !0), i(n), o) try {
			return s(t, e, n)
		} catch (t) {
		}
		if ("get" in n || "set" in n) throw TypeError("Accessors not supported");
		return "value" in n && (t[e] = n.value), t
	}
}, function (t, e, n) {
	var r = n(0), o = n(5), i = n(2), c = n(9), s = n(20), a = n(34), u = a.get, l = a.enforce,
		f = String(String).split("String");
	(t.exports = function (t, e, n, s) {
		var a = !!s && !!s.unsafe, u = !!s && !!s.enumerable, p = !!s && !!s.noTargetGet;
		"function" == typeof n && ("string" != typeof e || i(n, "name") || o(n, "name", e), l(n).source = f.join("string" == typeof e ? e : "")), t !== r ? (a ? !p && t[e] && (u = !0) : delete t[e], u ? t[e] = n : o(t, e, n)) : u ? t[e] = n : c(e, n)
	})(Function.prototype, "toString", (function () {
		return "function" == typeof this && u(this).source || s(this)
	}))
}, function (t, e, n) {
	var r = n(21), o = Function.toString;
	"function" != typeof r.inspectSource && (r.inspectSource = function (t) {
		return o.call(t)
	}), t.exports = r.inspectSource
}, function (t, e, n) {
	var r = n(0), o = n(9), i = r["__core-js_shared__"] || o("__core-js_shared__", {});
	t.exports = i
}, function (t, e, n) {
	var r = n(37), o = n(21);
	(t.exports = function (t, e) {
		return o[t] || (o[t] = void 0 !== e ? e : {})
	})("versions", []).push({
		version: "3.6.1",
		mode: r ? "pure" : "global",
		copyright: "© 2019 Denis Pushkarev (zloirock.ru)"
	})
}, function (t, e) {
	var n = 0, r = Math.random();
	t.exports = function (t) {
		return "Symbol(" + String(void 0 === t ? "" : t) + ")_" + (++n + r).toString(36)
	}
}, function (t, e) {
	t.exports = {}
}, function (t, e, n) {
	var r = n(2), o = n(7), i = n(43).indexOf, c = n(24);
	t.exports = function (t, e) {
		var n, s = o(t), a = 0, u = [];
		for (n in s) !r(c, n) && r(s, n) && u.push(n);
		for (; e.length > a;) r(s, n = e[a++]) && (~i(u, n) || u.push(n));
		return u
	}
}, function (t, e) {
	var n = Math.ceil, r = Math.floor;
	t.exports = function (t) {
		return isNaN(t = +t) ? 0 : (t > 0 ? r : n)(t)
	}
}, function (t, e) {
	t.exports = ["constructor", "hasOwnProperty", "isPrototypeOf", "propertyIsEnumerable", "toLocaleString", "toString", "valueOf"]
}, function (t, e) {
	e.f = Object.getOwnPropertySymbols
}, function (t, e, n) {
	var r = n(0), o = n(22), i = n(2), c = n(23), s = n(30), a = n(55), u = o("wks"), l = r.Symbol,
		f = a ? l : l && l.withoutSetter || c;
	t.exports = function (t) {
		return i(u, t) || (s && i(l, t) ? u[t] = l[t] : u[t] = f("Symbol." + t)), u[t]
	}
}, function (t, e, n) {
	var r = n(1);
	t.exports = !!Object.getOwnPropertySymbols && !r((function () {
		return !String(Symbol())
	}))
}, function (t, e, n) {
	var r = n(10), o = n(47);
	r({target: "Object", stat: !0, forced: Object.assign !== o}, {assign: o})
}, function (t, e) {
	var n;
	n = function () {
		return this
	}();
	try {
		n = n || new Function("return this")()
	} catch (t) {
		"object" == typeof window && (n = window)
	}
	t.exports = n
}, function (t, e, n) {
	var r = n(0), o = n(4), i = r.document, c = o(i) && o(i.createElement);
	t.exports = function (t) {
		return c ? i.createElement(t) : {}
	}
}, function (t, e, n) {
	var r, o, i, c = n(35), s = n(0), a = n(4), u = n(5), l = n(2), f = n(36), p = n(24), h = s.WeakMap;
	if (c) {
		var m = new h, d = m.get, v = m.has, g = m.set;
		r = function (t, e) {
			return g.call(m, t, e), e
		}, o = function (t) {
			return d.call(m, t) || {}
		}, i = function (t) {
			return v.call(m, t)
		}
	} else {
		var E = f("state");
		p[E] = !0, r = function (t, e) {
			return u(t, E, e), e
		}, o = function (t) {
			return l(t, E) ? t[E] : {}
		}, i = function (t) {
			return l(t, E)
		}
	}
	t.exports = {
		set: r, get: o, has: i, enforce: function (t) {
			return i(t) ? o(t) : r(t, {})
		}, getterFor: function (t) {
			return function (e) {
				var n;
				if (!a(e) || (n = o(e)).type !== t) throw TypeError("Incompatible receiver, " + t + " required");
				return n
			}
		}
	}
}, function (t, e, n) {
	var r = n(0), o = n(20), i = r.WeakMap;
	t.exports = "function" == typeof i && /native code/.test(o(i))
}, function (t, e, n) {
	var r = n(22), o = n(23), i = r("keys");
	t.exports = function (t) {
		return i[t] || (i[t] = o(t))
	}
}, function (t, e) {
	t.exports = !1
}, function (t, e, n) {
	var r = n(2), o = n(39), i = n(11), c = n(18);
	t.exports = function (t, e) {
		for (var n = o(e), s = c.f, a = i.f, u = 0; u < n.length; u++) {
			var l = n[u];
			r(t, l) || s(t, l, a(e, l))
		}
	}
}, function (t, e, n) {
	var r = n(40), o = n(42), i = n(28), c = n(6);
	t.exports = r("Reflect", "ownKeys") || function (t) {
		var e = o.f(c(t)), n = i.f;
		return n ? e.concat(n(t)) : e
	}
}, function (t, e, n) {
	var r = n(41), o = n(0), i = function (t) {
		return "function" == typeof t ? t : void 0
	};
	t.exports = function (t, e) {
		return arguments.length < 2 ? i(r[t]) || i(o[t]) : r[t] && r[t][e] || o[t] && o[t][e]
	}
}, function (t, e, n) {
	var r = n(0);
	t.exports = r
}, function (t, e, n) {
	var r = n(25), o = n(27).concat("length", "prototype");
	e.f = Object.getOwnPropertyNames || function (t) {
		return r(t, o)
	}
}, function (t, e, n) {
	var r = n(7), o = n(44), i = n(45), c = function (t) {
		return function (e, n, c) {
			var s, a = r(e), u = o(a.length), l = i(c, u);
			if (t && n != n) {
				for (; u > l;) if ((s = a[l++]) != s) return !0
			} else for (; u > l; l++) if ((t || l in a) && a[l] === n) return t || l || 0;
			return !t && -1
		}
	};
	t.exports = {includes: c(!0), indexOf: c(!1)}
}, function (t, e, n) {
	var r = n(26), o = Math.min;
	t.exports = function (t) {
		return t > 0 ? o(r(t), 9007199254740991) : 0
	}
}, function (t, e, n) {
	var r = n(26), o = Math.max, i = Math.min;
	t.exports = function (t, e) {
		var n = r(t);
		return n < 0 ? o(n + e, 0) : i(n, e)
	}
}, function (t, e, n) {
	var r = n(1), o = /#|\.prototype\./, i = function (t, e) {
		var n = s[c(t)];
		return n == u || n != a && ("function" == typeof e ? r(e) : !!e)
	}, c = i.normalize = function (t) {
		return String(t).replace(o, ".").toLowerCase()
	}, s = i.data = {}, a = i.NATIVE = "N", u = i.POLYFILL = "P";
	t.exports = i
}, function (t, e, n) {
	"use strict";
	var r = n(3), o = n(1), i = n(48), c = n(28), s = n(12), a = n(49), u = n(14), l = Object.assign,
		f = Object.defineProperty;
	t.exports = !l || o((function () {
		if (r && 1 !== l({b: 1}, l(f({}, "a", {
			enumerable: !0, get: function () {
				f(this, "b", {value: 3, enumerable: !1})
			}
		}), {b: 2})).b) return !0;
		var t = {}, e = {}, n = Symbol();
		return t[n] = 7, "abcdefghijklmnopqrst".split("").forEach((function (t) {
			e[t] = t
		})), 7 != l({}, t)[n] || "abcdefghijklmnopqrst" != i(l({}, e)).join("")
	})) ? function (t, e) {
		for (var n = a(t), o = arguments.length, l = 1, f = c.f, p = s.f; o > l;) for (var h, m = u(arguments[l++]), d = f ? i(m).concat(f(m)) : i(m), v = d.length, g = 0; v > g;) h = d[g++], r && !p.call(m, h) || (n[h] = m[h]);
		return n
	} : l
}, function (t, e, n) {
	var r = n(25), o = n(27);
	t.exports = Object.keys || function (t) {
		return r(t, o)
	}
}, function (t, e, n) {
	var r = n(8);
	t.exports = function (t) {
		return Object(r(t))
	}
}, function (t, e, n) {
	"use strict";
	var r = n(19), o = n(6), i = n(1), c = n(51), s = RegExp.prototype, a = s.toString, u = i((function () {
		return "/a/b" != a.call({source: "a", flags: "b"})
	})), l = "toString" != a.name;
	(u || l) && r(RegExp.prototype, "toString", (function () {
		var t = o(this), e = String(t.source), n = t.flags;
		return "/" + e + "/" + String(void 0 === n && t instanceof RegExp && !("flags" in s) ? c.call(t) : n)
	}), {unsafe: !0})
}, function (t, e, n) {
	"use strict";
	var r = n(6);
	t.exports = function () {
		var t = r(this), e = "";
		return t.global && (e += "g"), t.ignoreCase && (e += "i"), t.multiline && (e += "m"), t.dotAll && (e += "s"), t.unicode && (e += "u"), t.sticky && (e += "y"), e
	}
}, function (t, e, n) {
	"use strict";
	var r = n(10), o = n(53), i = n(8);
	r({target: "String", proto: !0, forced: !n(56)("includes")}, {
		includes: function (t) {
			return !!~String(i(this)).indexOf(o(t), arguments.length > 1 ? arguments[1] : void 0)
		}
	})
}, function (t, e, n) {
	var r = n(54);
	t.exports = function (t) {
		if (r(t)) throw TypeError("The method doesn't accept regular expressions");
		return t
	}
}, function (t, e, n) {
	var r = n(4), o = n(15), i = n(29)("match");
	t.exports = function (t) {
		var e;
		return r(t) && (void 0 !== (e = t[i]) ? !!e : "RegExp" == o(t))
	}
}, function (t, e, n) {
	var r = n(30);
	t.exports = r && !Symbol.sham && "symbol" == typeof Symbol.iterator
}, function (t, e, n) {
	var r = n(29)("match");
	t.exports = function (t) {
		var e = /./;
		try {
			"/./"[t](e)
		} catch (n) {
			try {
				return e[r] = !1, "/./"[t](e)
			} catch (t) {
			}
		}
		return !1
	}
}, function (t, e, n) {
}, , function (t, e, n) {
	"use strict";
	n.r(e);
	var r, o, i;
	n(31), n(50), n(52), n(57);

	function c(t, e, n) {
		const r = [];
		for (; t && null !== t.parentElement && (void 0 === n || r.length < n);) t instanceof HTMLElement && t.matches(e) && r.push(t), t = t.parentElement;
		return r
	}

	function s(t, e) {
		const n = c(t, e, 1);
		return n.length ? n[0] : null
	}

	!function (t) {
		t[t.Backward = -1] = "Backward", t[t.Forward = 1] = "Forward"
	}(r || (r = {})), function (t) {
		t.Left = "left", t.Right = "right"
	}(o || (o = {})), function (t) {
		t.Back = "back", t.Close = "close", t.Forward = "forward", t.Navigate = "navigate", t.Open = "open"
	}(i || (i = {}));
	const a = {
		backLinkAfter: "",
		backLinkBefore: "",
		keyClose: "",
		keyOpen: "",
		position: "right",
		showBackLink: !0,
		submenuLinkAfter: "",
		submenuLinkBefore: ""
	};

	class u {
		constructor(t, e) {
			if (this.level = 0, this.isOpen = !1, this.isAnimating = !1, this.lastAction = null, null === t) throw new Error("Argument `elem` must be a valid HTML node");
			this.options = Object.assign({}, a, e), this.menuElem = t, this.wrapperElem = document.createElement("div"), this.wrapperElem.classList.add(u.CLASS_NAMES.wrapper);
			const n = this.menuElem.querySelector("ul");
			n && function (t, e) {
				if (null === t.parentElement) throw Error("`elem` has no parentElement");
				t.parentElement.insertBefore(e, t), e.appendChild(t)
			}(n, this.wrapperElem), this.initMenu(), this.initSubmenus(), this.initEventHandlers(), this.menuElem._slideMenu = this
		}

		toggle(t, e = !0) {
			let n;
			if (void 0 === t) return this.isOpen ? this.close(e) : this.open(e);
			if (n = t ? 0 : this.options.position === o.Left ? "-100%" : "100%", this.isOpen = t, e) this.moveSlider(this.menuElem, n); else {
				const t = this.moveSlider.bind(this, this.menuElem, n);
				this.runWithoutAnimation(t)
			}
		}

		open(t = !0) {
			this.triggerEvent(i.Open), this.toggle(!0, t)
		}

		close(t = !0) {
			this.triggerEvent(i.Close), this.toggle(!1, t)
		}

		back() {
			this.navigate(r.Backward)
		}

		destroy() {
			const {submenuLinkAfter: t, submenuLinkBefore: e, showBackLink: n} = this.options;
			if (t || e) {
				Array.from(this.wrapperElem.querySelectorAll(".".concat(u.CLASS_NAMES.decorator))).forEach(t => {
					t.parentElement && t.parentElement.removeChild(t)
				})
			}
			if (n) {
				Array.from(this.wrapperElem.querySelectorAll(".".concat(u.CLASS_NAMES.control))).forEach(t => {
					const e = s(t, "li");
					e && e.parentElement && e.parentElement.removeChild(e)
				})
			}
			!function (t) {
				const e = t.parentElement;
				if (null === e) throw Error("`elem` has no parentElement");
				for (; t.firstChild;) e.insertBefore(t.firstChild, t);
				e.removeChild(t)
			}(this.wrapperElem), this.menuElem.style.cssText = "", this.menuElem.querySelectorAll("ul").forEach(t => t.style.cssText = ""), delete this.menuElem._slideMenu
		}

		initEventHandlers() {
			Array.from(this.menuElem.querySelectorAll("a")).forEach(t => t.addEventListener("click", t => {
				const e = t.target, n = e.matches("a") ? e : s(e, "a");
				n && this.navigate(r.Forward, n)
			})), this.menuElem.addEventListener("transitionend", this.onTransitionEnd.bind(this)), this.wrapperElem.addEventListener("transitionend", this.onTransitionEnd.bind(this)), this.initKeybindings(), this.initSubmenuVisibility()
		}

		onTransitionEnd(t) {
			t.target !== this.menuElem && t.target !== this.wrapperElem || (this.isAnimating = !1, this.lastAction && (this.triggerEvent(this.lastAction, !0), this.lastAction = null))
		}

		initKeybindings() {
			document.addEventListener("keydown", t => {
				switch (t.key) {
					case this.options.keyClose:
						this.close();
						break;
					case this.options.keyOpen:
						this.open();
						break;
					default:
						return
				}
				t.preventDefault()
			})
		}

		initSubmenuVisibility() {
			this.menuElem.addEventListener("sm.back-after", () => {
				//active submenu
				const t = ".".concat(u.CLASS_NAMES.active, " ").repeat(this.level + 1),
					e = this.menuElem.querySelector("ul ".concat(t));
				e && (e.style.display = "none", e.classList.remove(u.CLASS_NAMES.active))
			})
		}

		triggerEvent(t, e = !1) {
			this.lastAction = t;
			const n = "sm.".concat(t).concat(e ? "-after" : ""), r = new CustomEvent(n);
			this.menuElem.dispatchEvent(r)
		}

		navigate(t = r.Forward, e) {
			if (this.isAnimating || t === r.Backward && 0 === this.level) return;
			const n = -100 * (this.level + t);
			if (e && null !== e.parentElement && t === r.Forward) {
				const t = e.parentElement.querySelector("ul");
				if (!t) return;
				t.classList.add(u.CLASS_NAMES.active), t.style.display = "block"
			}
			const o = t === r.Forward ? i.Forward : i.Back;
			this.triggerEvent(o), this.level = this.level + t, this.moveSlider(this.wrapperElem, n)
		}

		moveSlider(t, e) {
			e.toString().includes("%") || (e += "%"), t.style.transform = "translateX(".concat(e, ")"), this.isAnimating = !0
		}

		initMenu() {
			this.runWithoutAnimation(() => {
				switch (this.options.position) {
					case o.Left:
						Object.assign(this.menuElem.style, {left: 0, right: "auto", transform: "translateX(-100%)"});
						break;
					default:
						Object.assign(this.menuElem.style, {left: "auto", right: 0})
				}
				this.menuElem.style.display = "block"
			})
		}

		runWithoutAnimation(t) {
			const e = [this.menuElem, this.wrapperElem];
			e.forEach(t => t.style.transition = "none"), t(), this.menuElem.offsetHeight, e.forEach(t => t.style.removeProperty("transition")), this.isAnimating = !1
		}

		initSubmenus() {
			this.menuElem.querySelectorAll("a").forEach(t => {
				if (null === t.parentElement) return;
				const e = t.parentElement.querySelector("ul");
				if (!e) return;
				t.addEventListener("click", t => {
					t.preventDefault()
				});
				const n = t.textContent;
				if (this.addLinkDecorators(t), this.options.showBackLink) {
					const {backLinkBefore: t, backLinkAfter: r} = this.options, o = document.createElement("a");
					o.innerHTML = t + n + r, o.classList.add(u.CLASS_NAMES.backlink, u.CLASS_NAMES.control), o.setAttribute("data-action", i.Back);
					const c = document.createElement("li");
					c.appendChild(o), e.insertBefore(c, e.firstChild)
				}
			})
		}

		addLinkDecorators(t) {
			const {submenuLinkBefore: e, submenuLinkAfter: n} = this.options;
			if (e) {
				const n = document.createElement("span");
				n.classList.add(u.CLASS_NAMES.decorator), n.innerHTML = e, t.insertBefore(n, t.firstChild)
			}
			if (n) {
				const e = document.createElement("span");
				e.classList.add(u.CLASS_NAMES.decorator), e.innerHTML = n, t.appendChild(e)
			}
			return t
		}
	}

	u.NAMESPACE = "mobile-menu", u.CLASS_NAMES = {
		active: "".concat(u.NAMESPACE, "__submenu--active"),
		backlink: "".concat(u.NAMESPACE, "__backlink"),
		control: "".concat(u.NAMESPACE, "__control"),
		decorator: "".concat(u.NAMESPACE, "__decorator"),
		wrapper: "".concat(u.NAMESPACE, "__slider")
	}, document.addEventListener("click", t => {
		if (!(t.target instanceof HTMLElement)) return;
		const e = t.target.className.includes(u.CLASS_NAMES.control) ? t.target : s(t.target, ".".concat(u.CLASS_NAMES.control));
		if (!e || !e.className.includes(u.CLASS_NAMES.control)) return;
		const n = e.getAttribute("data-target"),
			r = n && "this" !== n ? document.getElementById(n) : s(e, ".".concat(u.NAMESPACE));
		if (!r) throw new Error("Unable to find menu ".concat(n));
		const o = r._slideMenu, i = e.getAttribute("data-action"), c = e.getAttribute("data-arg");
		o && i && "function" == typeof o[i] && (c ? o[i](c) : o[i]())
	}), window.SlideMenu = u
}]);
/*slide end*/

/*menu*/

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

