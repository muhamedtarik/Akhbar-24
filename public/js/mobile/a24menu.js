! function (a) {
    function b() {
        g.hasClass(k) ? h.toggleClass(l) : h.toggleClass(m), o && g.one("transitionend", function () {
            o.focus()
        })
    }

    function c() {
        g.hasClass(k) ? h.removeClass(l) : h.removeClass(m)
    }

    function d() {
        g.hasClass(k) ? (h.addClass(l), g.animate({
            left: "0px"
        }, p), i.animate({
            left: q
        }, p), j.animate({
            left: q
        }, p)) : (h.addClass(m), g.animate({
            right: "0px"
        }, p), i.animate({
            right: q
        }, p), j.animate({
            right: q
        }, p)), o && o.focus()
    }

    function e() {
        g.hasClass(k) ? (h.removeClass(l), g.animate({
            left: "-" + q
        }, p), i.animate({
            left: "0px"
        }, p), j.animate({
            left: "0px"
        }, p)) : (h.removeClass(m), g.animate({
            right: "-" + q
        }, p), i.animate({
            right: "0px"
        }, p), j.animate({
            right: "0px"
        }, p))
    }

    function f() {
        a(r).addClass(t), a(r).on("click", function (b) {
            var c = a(this);
            c.hasClass(t) ? (c.siblings(r).addClass(t).removeClass(s), c.removeClass(t).addClass(s)) : c.addClass(t).removeClass(s), b.stopPropagation()
        })
    }
    var g = a(".a24menu"),
        h = a("body"),
        i = a("#container"),
        j = a(".push"),
        k = "a24menu-left",
        l = "a24menu-open-left",
        m = "a24menu-open-right",
        n = a(".site-overlay"),
        o = a(g.data("focus")),
        p = 200,
        q = g.width() + "px",
        r = ".a24menu-submenu",
        s = "a24menu-submenu-open",
        t = "a24menu-submenu-closed";
    a(r);
    if (void 0 !== g.data("menu-btn-class")) var u = g.data("menu-btn-class");
    else var u = ".menu-btn";
    var v = a(u + ", .a24menu-link"),
        w = a(u);
    a(document).keyup(function (a) {
        27 == a.keyCode && (h.hasClass(l) || h.hasClass(m)) && (x ? c() : (e(), y = !1), w && w.focus())
    });
    var x = function () {
        var a = document.createElement("p"),
            b = !1,
            c = {
                webkitTransform: "-webkit-transform",
                OTransform: "-o-transform",
                msTransform: "-ms-transform",
                MozTransform: "-moz-transform",
                transform: "transform"
            };
        if (null !== document.body) {
            document.body.insertBefore(a, null);
            for (var d in c) void 0 !== a.style[d] && (a.style[d] = "translate3d(1px,1px,1px)", b = window.getComputedStyle(a).getPropertyValue(c[d]));
            return document.body.removeChild(a), void 0 !== b && b.length > 0 && "none" !== b
        }
        return !1
    }();
    if (x) f(), v.on("click", function () {
        b()
    }), n.on("click", function () {
        b()
    });
    else {
        h.addClass("no-csstransforms3d"), g.hasClass(k) ? g.css({
            left: "-" + q
        }) : g.css({
            right: "-" + q
        }), i.css({
            "overflow-x": "hidden"
        });
        var y = !1;
        f(), v.on("click", function () {
            y ? (e(), y = !1) : (d(), y = !0)
        }), n.on("click", function () {
            y ? (e(), y = !1) : (d(), y = !0)
        })
    }
}(jQuery);
