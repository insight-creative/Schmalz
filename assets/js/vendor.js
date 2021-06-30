"use strict";

// detect IE and display an error message prompting users to upgrade to a modern browser
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<div id="outdated"><h6>Your browser is out-of-date!</h6><p>Update your browser to view this website correctly.<a id="btnUpdateBrowser" href="http://outdatedbrowser.com/" target="_blank">Update my browser now</a></p><p class="last"><a data-toggle="hidden" data-target="#outdated" href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p></div>');
}
"use strict";

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
(function () {
  var isIe = /(trident|msie)/i.test(navigator.userAgent);

  if (isIe && document.getElementById && window.addEventListener) {
    window.addEventListener('hashchange', function () {
      var id = location.hash.substring(1),
          element;

      if (!/^[A-z0-9_-]+$/.test(id)) {
        return;
      }

      element = document.getElementById(id);

      if (element) {
        if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
          element.tabIndex = -1;
        }

        element.focus();
      }
    }, false);
  }
})();
"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var VanillaTilt = function () {
  "use strict";

  var t = /*#__PURE__*/function () {
    function t(e) {
      var i = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};

      _classCallCheck(this, t);

      if (!(e instanceof Node)) throw "Can't initialize VanillaTilt because " + e + " is not a Node.";
      this.width = null, this.height = null, this.clientWidth = null, this.clientHeight = null, this.left = null, this.top = null, this.gammazero = null, this.betazero = null, this.lastgammazero = null, this.lastbetazero = null, this.transitionTimeout = null, this.updateCall = null, this.event = null, this.updateBind = this.update.bind(this), this.resetBind = this.reset.bind(this), this.element = e, this.settings = this.extendSettings(i), this.reverse = this.settings.reverse ? -1 : 1, this.glare = t.isSettingTrue(this.settings.glare), this.glarePrerender = t.isSettingTrue(this.settings["glare-prerender"]), this.fullPageListening = t.isSettingTrue(this.settings["full-page-listening"]), this.gyroscope = t.isSettingTrue(this.settings.gyroscope), this.gyroscopeSamples = this.settings.gyroscopeSamples, this.elementListener = this.getElementListener(), this.glare && this.prepareGlare(), this.fullPageListening && this.updateClientSize(), this.addEventListeners(), this.updateInitialPosition();
    }

    _createClass(t, [{
      key: "getElementListener",
      value: function getElementListener() {
        if (this.fullPageListening) return window.document;

        if ("string" == typeof this.settings["mouse-event-element"]) {
          var _t = document.querySelector(this.settings["mouse-event-element"]);

          if (_t) return _t;
        }

        return this.settings["mouse-event-element"] instanceof Node ? this.settings["mouse-event-element"] : this.element;
      }
    }, {
      key: "addEventListeners",
      value: function addEventListeners() {
        this.onMouseEnterBind = this.onMouseEnter.bind(this), this.onMouseMoveBind = this.onMouseMove.bind(this), this.onMouseLeaveBind = this.onMouseLeave.bind(this), this.onWindowResizeBind = this.onWindowResize.bind(this), this.onDeviceOrientationBind = this.onDeviceOrientation.bind(this), this.elementListener.addEventListener("mouseenter", this.onMouseEnterBind), this.elementListener.addEventListener("mouseleave", this.onMouseLeaveBind), this.elementListener.addEventListener("mousemove", this.onMouseMoveBind), (this.glare || this.fullPageListening) && window.addEventListener("resize", this.onWindowResizeBind), this.gyroscope && window.addEventListener("deviceorientation", this.onDeviceOrientationBind);
      }
    }, {
      key: "removeEventListeners",
      value: function removeEventListeners() {
        this.elementListener.removeEventListener("mouseenter", this.onMouseEnterBind), this.elementListener.removeEventListener("mouseleave", this.onMouseLeaveBind), this.elementListener.removeEventListener("mousemove", this.onMouseMoveBind), this.gyroscope && window.removeEventListener("deviceorientation", this.onDeviceOrientationBind), (this.glare || this.fullPageListening) && window.removeEventListener("resize", this.onWindowResizeBind);
      }
    }, {
      key: "destroy",
      value: function destroy() {
        clearTimeout(this.transitionTimeout), null !== this.updateCall && cancelAnimationFrame(this.updateCall), this.reset(), this.removeEventListeners(), this.element.vanillaTilt = null, delete this.element.vanillaTilt, this.element = null;
      }
    }, {
      key: "onDeviceOrientation",
      value: function onDeviceOrientation(t) {
        if (null === t.gamma || null === t.beta) return;
        this.updateElementPosition(), this.gyroscopeSamples > 0 && (this.lastgammazero = this.gammazero, this.lastbetazero = this.betazero, null === this.gammazero ? (this.gammazero = t.gamma, this.betazero = t.beta) : (this.gammazero = (t.gamma + this.lastgammazero) / 2, this.betazero = (t.beta + this.lastbetazero) / 2), this.gyroscopeSamples -= 1);
        var e = this.settings.gyroscopeMaxAngleX - this.settings.gyroscopeMinAngleX,
            i = this.settings.gyroscopeMaxAngleY - this.settings.gyroscopeMinAngleY,
            s = e / this.width,
            n = i / this.height,
            l = (t.gamma - (this.settings.gyroscopeMinAngleX + this.gammazero)) / s,
            a = (t.beta - (this.settings.gyroscopeMinAngleY + this.betazero)) / n;
        null !== this.updateCall && cancelAnimationFrame(this.updateCall), this.event = {
          clientX: l + this.left,
          clientY: a + this.top
        }, this.updateCall = requestAnimationFrame(this.updateBind);
      }
    }, {
      key: "onMouseEnter",
      value: function onMouseEnter() {
        this.updateElementPosition(), this.element.style.willChange = "transform", this.setTransition();
      }
    }, {
      key: "onMouseMove",
      value: function onMouseMove(t) {
        null !== this.updateCall && cancelAnimationFrame(this.updateCall), this.event = t, this.updateCall = requestAnimationFrame(this.updateBind);
      }
    }, {
      key: "onMouseLeave",
      value: function onMouseLeave() {
        this.setTransition(), this.settings.reset && requestAnimationFrame(this.resetBind);
      }
    }, {
      key: "reset",
      value: function reset() {
        this.event = {
          clientX: this.left + this.width / 2,
          clientY: this.top + this.height / 2
        }, this.element && this.element.style && (this.element.style.transform = "perspective(".concat(this.settings.perspective, "px) ") + "rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)"), this.resetGlare();
      }
    }, {
      key: "resetGlare",
      value: function resetGlare() {
        this.glare && (this.glareElement.style.transform = "rotate(180deg) translate(-50%, -50%)", this.glareElement.style.opacity = "0");
      }
    }, {
      key: "updateInitialPosition",
      value: function updateInitialPosition() {
        if (0 === this.settings.startX && 0 === this.settings.startY) return;
        this.onMouseEnter(), this.fullPageListening ? this.event = {
          clientX: (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.clientWidth,
          clientY: (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.clientHeight
        } : this.event = {
          clientX: this.left + (this.settings.startX + this.settings.max) / (2 * this.settings.max) * this.width,
          clientY: this.top + (this.settings.startY + this.settings.max) / (2 * this.settings.max) * this.height
        };
        var t = this.settings.scale;
        this.settings.scale = 1, this.update(), this.settings.scale = t, this.resetGlare();
      }
    }, {
      key: "getValues",
      value: function getValues() {
        var t, e;
        return this.fullPageListening ? (t = this.event.clientX / this.clientWidth, e = this.event.clientY / this.clientHeight) : (t = (this.event.clientX - this.left) / this.width, e = (this.event.clientY - this.top) / this.height), t = Math.min(Math.max(t, 0), 1), e = Math.min(Math.max(e, 0), 1), {
          tiltX: (this.reverse * (this.settings.max - t * this.settings.max * 2)).toFixed(2),
          tiltY: (this.reverse * (e * this.settings.max * 2 - this.settings.max)).toFixed(2),
          percentageX: 100 * t,
          percentageY: 100 * e,
          angle: Math.atan2(this.event.clientX - (this.left + this.width / 2), -(this.event.clientY - (this.top + this.height / 2))) * (180 / Math.PI)
        };
      }
    }, {
      key: "updateElementPosition",
      value: function updateElementPosition() {
        var t = this.element.getBoundingClientRect();
        this.width = this.element.offsetWidth, this.height = this.element.offsetHeight, this.left = t.left, this.top = t.top;
      }
    }, {
      key: "update",
      value: function update() {
        var t = this.getValues();
        this.element.style.transform = "perspective(" + this.settings.perspective + "px) rotateX(" + ("x" === this.settings.axis ? 0 : t.tiltY) + "deg) rotateY(" + ("y" === this.settings.axis ? 0 : t.tiltX) + "deg) scale3d(" + this.settings.scale + ", " + this.settings.scale + ", " + this.settings.scale + ")", this.glare && (this.glareElement.style.transform = "rotate(".concat(t.angle, "deg) translate(-50%, -50%)"), this.glareElement.style.opacity = "".concat(t.percentageY * this.settings["max-glare"] / 100)), this.element.dispatchEvent(new CustomEvent("tiltChange", {
          detail: t
        })), this.updateCall = null;
      }
    }, {
      key: "prepareGlare",
      value: function prepareGlare() {
        if (!this.glarePrerender) {
          var _t2 = document.createElement("div");

          _t2.classList.add("js-tilt-glare");

          var e = document.createElement("div");
          e.classList.add("js-tilt-glare-inner"), _t2.appendChild(e), this.element.appendChild(_t2);
        }

        this.glareElementWrapper = this.element.querySelector(".js-tilt-glare"), this.glareElement = this.element.querySelector(".js-tilt-glare-inner"), this.glarePrerender || (Object.assign(this.glareElementWrapper.style, {
          position: "absolute",
          top: "0",
          left: "0",
          width: "100%",
          height: "100%",
          overflow: "hidden",
          "pointer-events": "none"
        }), Object.assign(this.glareElement.style, {
          position: "absolute",
          top: "50%",
          left: "50%",
          "pointer-events": "none",
          "background-image": "linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)",
          width: "".concat(2 * this.element.offsetWidth, "px"),
          height: "".concat(2 * this.element.offsetWidth, "px"),
          transform: "rotate(180deg) translate(-50%, -50%)",
          "transform-origin": "0% 0%",
          opacity: "0"
        }));
      }
    }, {
      key: "updateGlareSize",
      value: function updateGlareSize() {
        this.glare && Object.assign(this.glareElement.style, {
          width: "".concat(2 * this.element.offsetWidth),
          height: "".concat(2 * this.element.offsetWidth)
        });
      }
    }, {
      key: "updateClientSize",
      value: function updateClientSize() {
        this.clientWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth, this.clientHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
      }
    }, {
      key: "onWindowResize",
      value: function onWindowResize() {
        this.updateGlareSize(), this.updateClientSize();
      }
    }, {
      key: "setTransition",
      value: function setTransition() {
        var _this = this;

        clearTimeout(this.transitionTimeout), this.element.style.transition = this.settings.speed + "ms " + this.settings.easing, this.glare && (this.glareElement.style.transition = "opacity ".concat(this.settings.speed, "ms ").concat(this.settings.easing)), this.transitionTimeout = setTimeout(function () {
          _this.element.style.transition = "", _this.glare && (_this.glareElement.style.transition = "");
        }, this.settings.speed);
      }
    }, {
      key: "extendSettings",
      value: function extendSettings(t) {
        var e = {
          reverse: !1,
          max: 15,
          startX: 0,
          startY: 0,
          perspective: 1e3,
          easing: "cubic-bezier(.03,.98,.52,.99)",
          scale: 1,
          speed: 300,
          transition: !0,
          axis: null,
          glare: !1,
          "max-glare": 1,
          "glare-prerender": !1,
          "full-page-listening": !1,
          "mouse-event-element": null,
          reset: !0,
          gyroscope: !0,
          gyroscopeMinAngleX: -45,
          gyroscopeMaxAngleX: 45,
          gyroscopeMinAngleY: -45,
          gyroscopeMaxAngleY: 45,
          gyroscopeSamples: 10
        },
            i = {};

        for (var s in e) {
          if (s in t) i[s] = t[s];else if (this.element.hasAttribute("data-tilt-" + s)) {
            var _t3 = this.element.getAttribute("data-tilt-" + s);

            try {
              i[s] = JSON.parse(_t3);
            } catch (e) {
              i[s] = _t3;
            }
          } else i[s] = e[s];
        }

        return i;
      }
    }], [{
      key: "isSettingTrue",
      value: function isSettingTrue(t) {
        return "" === t || !0 === t || 1 === t;
      }
    }, {
      key: "init",
      value: function init(e, i) {
        e instanceof Node && (e = [e]), e instanceof NodeList && (e = [].slice.call(e)), e instanceof Array && e.forEach(function (e) {
          "vanillaTilt" in e || (e.vanillaTilt = new t(e, i));
        });
      }
    }]);

    return t;
  }();

  return "undefined" != typeof document && (window.VanillaTilt = t, t.init(document.querySelectorAll("[data-tilt]"))), t;
}();