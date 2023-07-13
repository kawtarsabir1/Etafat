/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************************************************!*\
  !*** ./resources/assets/vendor/libs/sweetalert2/sweetalert2.js ***!
  \*****************************************************************/
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
function _get() { if (typeof Reflect !== "undefined" && Reflect.get) { _get = Reflect.get.bind(); } else { _get = function _get(target, property, receiver) { var base = _superPropBase(target, property); if (!base) return; var desc = Object.getOwnPropertyDescriptor(base, property); if (desc.get) { return desc.get.call(arguments.length < 3 ? target : receiver); } return desc.value; }; } return _get.apply(this, arguments); }
function _superPropBase(object, property) { while (!Object.prototype.hasOwnProperty.call(object, property)) { object = _getPrototypeOf(object); if (object === null) break; } return object; }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
function _construct(Parent, args, Class) { if (_isNativeReflectConstruct()) { _construct = Reflect.construct.bind(); } else { _construct = function _construct(Parent, args, Class) { var a = [null]; a.push.apply(a, args); var Constructor = Function.bind.apply(Parent, a); var instance = new Constructor(); if (Class) _setPrototypeOf(instance, Class.prototype); return instance; }; } return _construct.apply(null, arguments); }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
/******/(function () {
  // webpackBootstrap
  /******/
  var __webpack_modules__ = {
    /***/"./node_modules/sweetalert2/dist/sweetalert2.js":
    /*!******************************************************!*\
      !*** ./node_modules/sweetalert2/dist/sweetalert2.js ***!
      \******************************************************/
    /***/
    function node_modulesSweetalert2DistSweetalert2Js(module) {
      /*!
      * sweetalert2 v11.4.33
      * Released under the MIT License.
      */
      (function (global, factory) {
         true ? module.exports = factory() : 0;
      })(this, function () {
        'use strict';

        /**
         * This module contains `WeakMap`s for each effectively-"private  property" that a `Swal` has.
         * For example, to set the private property "foo" of `this` to "bar", you can `privateProps.foo.set(this, 'bar')`
         * This is the approach that Babel will probably take to implement private methods/fields
         *   https://github.com/tc39/proposal-private-methods
         *   https://github.com/babel/babel/pull/7555
         * Once we have the changes from that PR in Babel, and our core class fits reasonable in *one module*
         *   then we can use that language feature.
         */
        var privateProps = {
          awaitingPromise: new WeakMap(),
          promise: new WeakMap(),
          innerParams: new WeakMap(),
          domCache: new WeakMap()
        };
        var swalPrefix = 'swal2-';
        /**
         * @param {string[]} items
         * @returns {object}
         */

        var prefix = function prefix(items) {
          var result = {};
          for (var _i in items) {
            result[items[_i]] = swalPrefix + items[_i];
          }
          return result;
        };
        var swalClasses = prefix(['container', 'shown', 'height-auto', 'iosfix', 'popup', 'modal', 'no-backdrop', 'no-transition', 'toast', 'toast-shown', 'show', 'hide', 'close', 'title', 'html-container', 'actions', 'confirm', 'deny', 'cancel', 'default-outline', 'footer', 'icon', 'icon-content', 'image', 'input', 'file', 'range', 'select', 'radio', 'checkbox', 'label', 'textarea', 'inputerror', 'input-label', 'validation-message', 'progress-steps', 'active-progress-step', 'progress-step', 'progress-step-line', 'loader', 'loading', 'styled', 'top', 'top-start', 'top-end', 'top-left', 'top-right', 'center', 'center-start', 'center-end', 'center-left', 'center-right', 'bottom', 'bottom-start', 'bottom-end', 'bottom-left', 'bottom-right', 'grow-row', 'grow-column', 'grow-fullscreen', 'rtl', 'timer-progress-bar', 'timer-progress-bar-container', 'scrollbar-measure', 'icon-success', 'icon-warning', 'icon-info', 'icon-question', 'icon-error', 'no-war']);
        var iconTypes = prefix(['success', 'warning', 'info', 'question', 'error']);
        var consolePrefix = 'SweetAlert2:';
        /**
         * Filter the unique values into a new array
         *
         * @param {Array} arr
         * @returns {Array}
         */

        var uniqueArray = function uniqueArray(arr) {
          var result = [];
          for (var _i2 = 0; _i2 < arr.length; _i2++) {
            if (result.indexOf(arr[_i2]) === -1) {
              result.push(arr[_i2]);
            }
          }
          return result;
        };
        /**
         * Capitalize the first letter of a string
         *
         * @param {string} str
         * @returns {string}
         */

        var capitalizeFirstLetter = function capitalizeFirstLetter(str) {
          return str.charAt(0).toUpperCase() + str.slice(1);
        };
        /**
         * Standardize console warnings
         *
         * @param {string | Array} message
         */

        var warn = function warn(message) {
          console.warn("".concat(consolePrefix, " ").concat(_typeof(message) === 'object' ? message.join(' ') : message));
        };
        /**
         * Standardize console errors
         *
         * @param {string} message
         */

        var error = function error(message) {
          console.error("".concat(consolePrefix, " ").concat(message));
        };
        /**
         * Private global state for `warnOnce`
         *
         * @type {Array}
         * @private
         */

        var previousWarnOnceMessages = [];
        /**
         * Show a console warning, but only if it hasn't already been shown
         *
         * @param {string} message
         */

        var warnOnce = function warnOnce(message) {
          if (!previousWarnOnceMessages.includes(message)) {
            previousWarnOnceMessages.push(message);
            warn(message);
          }
        };
        /**
         * Show a one-time console warning about deprecated params/methods
         *
         * @param {string} deprecatedParam
         * @param {string} useInstead
         */

        var warnAboutDeprecation = function warnAboutDeprecation(deprecatedParam, useInstead) {
          warnOnce("\"".concat(deprecatedParam, "\" is deprecated and will be removed in the next major release. Please use \"").concat(useInstead, "\" instead."));
        };
        /**
         * If `arg` is a function, call it (with no arguments or context) and return the result.
         * Otherwise, just pass the value through
         *
         * @param {Function | any} arg
         * @returns {any}
         */

        var callIfFunction = function callIfFunction(arg) {
          return typeof arg === 'function' ? arg() : arg;
        };
        /**
         * @param {any} arg
         * @returns {boolean}
         */

        var hasToPromiseFn = function hasToPromiseFn(arg) {
          return arg && typeof arg.toPromise === 'function';
        };
        /**
         * @param {any} arg
         * @returns {Promise}
         */

        var asPromise = function asPromise(arg) {
          return hasToPromiseFn(arg) ? arg.toPromise() : Promise.resolve(arg);
        };
        /**
         * @param {any} arg
         * @returns {boolean}
         */

        var isPromise = function isPromise(arg) {
          return arg && Promise.resolve(arg) === arg;
        };
        /**
         * @param {Array} arr
         * @returns {any}
         */

        var getRandomElement = function getRandomElement(arr) {
          return arr[Math.floor(Math.random() * arr.length)];
        };

        /**
         * Gets the popup container which contains the backdrop and the popup itself.
         *
         * @returns {HTMLElement | null}
         */

        var getContainer = function getContainer() {
          return document.body.querySelector(".".concat(swalClasses.container));
        };
        /**
         * @param {string} selectorString
         * @returns {HTMLElement | null}
         */

        var elementBySelector = function elementBySelector(selectorString) {
          var container = getContainer();
          return container ? container.querySelector(selectorString) : null;
        };
        /**
         * @param {string} className
         * @returns {HTMLElement | null}
         */

        var elementByClass = function elementByClass(className) {
          return elementBySelector(".".concat(className));
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getPopup = function getPopup() {
          return elementByClass(swalClasses.popup);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getIcon = function getIcon() {
          return elementByClass(swalClasses.icon);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getTitle = function getTitle() {
          return elementByClass(swalClasses.title);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getHtmlContainer = function getHtmlContainer() {
          return elementByClass(swalClasses['html-container']);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getImage = function getImage() {
          return elementByClass(swalClasses.image);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getProgressSteps = function getProgressSteps() {
          return elementByClass(swalClasses['progress-steps']);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getValidationMessage = function getValidationMessage() {
          return elementByClass(swalClasses['validation-message']);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getConfirmButton = function getConfirmButton() {
          return elementBySelector(".".concat(swalClasses.actions, " .").concat(swalClasses.confirm));
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getDenyButton = function getDenyButton() {
          return elementBySelector(".".concat(swalClasses.actions, " .").concat(swalClasses.deny));
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getInputLabel = function getInputLabel() {
          return elementByClass(swalClasses['input-label']);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getLoader = function getLoader() {
          return elementBySelector(".".concat(swalClasses.loader));
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getCancelButton = function getCancelButton() {
          return elementBySelector(".".concat(swalClasses.actions, " .").concat(swalClasses.cancel));
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getActions = function getActions() {
          return elementByClass(swalClasses.actions);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getFooter = function getFooter() {
          return elementByClass(swalClasses.footer);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getTimerProgressBar = function getTimerProgressBar() {
          return elementByClass(swalClasses['timer-progress-bar']);
        };
        /**
         * @returns {HTMLElement | null}
         */

        var getCloseButton = function getCloseButton() {
          return elementByClass(swalClasses.close);
        }; // https://github.com/jkup/focusable/blob/master/index.js

        var focusable = "\n  a[href],\n  area[href],\n  input:not([disabled]),\n  select:not([disabled]),\n  textarea:not([disabled]),\n  button:not([disabled]),\n  iframe,\n  object,\n  embed,\n  [tabindex=\"0\"],\n  [contenteditable],\n  audio[controls],\n  video[controls],\n  summary\n";
        /**
         * @returns {HTMLElement[]}
         */

        var getFocusableElements = function getFocusableElements() {
          var focusableElementsWithTabindex = Array.from(getPopup().querySelectorAll('[tabindex]:not([tabindex="-1"]):not([tabindex="0"])')) // sort according to tabindex
          .sort(function (a, b) {
            var tabindexA = parseInt(a.getAttribute('tabindex'));
            var tabindexB = parseInt(b.getAttribute('tabindex'));
            if (tabindexA > tabindexB) {
              return 1;
            } else if (tabindexA < tabindexB) {
              return -1;
            }
            return 0;
          });
          var otherFocusableElements = Array.from(getPopup().querySelectorAll(focusable)).filter(function (el) {
            return el.getAttribute('tabindex') !== '-1';
          });
          return uniqueArray(focusableElementsWithTabindex.concat(otherFocusableElements)).filter(function (el) {
            return isVisible(el);
          });
        };
        /**
         * @returns {boolean}
         */

        var isModal = function isModal() {
          return hasClass(document.body, swalClasses.shown) && !hasClass(document.body, swalClasses['toast-shown']) && !hasClass(document.body, swalClasses['no-backdrop']);
        };
        /**
         * @returns {boolean}
         */

        var isToast = function isToast() {
          return getPopup() && hasClass(getPopup(), swalClasses.toast);
        };
        /**
         * @returns {boolean}
         */

        var isLoading = function isLoading() {
          return getPopup().hasAttribute('data-loading');
        };
        var states = {
          previousBodyPadding: null
        };
        /**
         * Securely set innerHTML of an element
         * https://github.com/sweetalert2/sweetalert2/issues/1926
         *
         * @param {HTMLElement} elem
         * @param {string} html
         */

        var setInnerHtml = function setInnerHtml(elem, html) {
          elem.textContent = '';
          if (html) {
            var parser = new DOMParser();
            var parsed = parser.parseFromString(html, "text/html");
            Array.from(parsed.querySelector('head').childNodes).forEach(function (child) {
              elem.appendChild(child);
            });
            Array.from(parsed.querySelector('body').childNodes).forEach(function (child) {
              elem.appendChild(child);
            });
          }
        };
        /**
         * @param {HTMLElement} elem
         * @param {string} className
         * @returns {boolean}
         */

        var hasClass = function hasClass(elem, className) {
          if (!className) {
            return false;
          }
          var classList = className.split(/\s+/);
          for (var _i3 = 0; _i3 < classList.length; _i3++) {
            if (!elem.classList.contains(classList[_i3])) {
              return false;
            }
          }
          return true;
        };
        /**
         * @param {HTMLElement} elem
         * @param {SweetAlertOptions} params
         */

        var removeCustomClasses = function removeCustomClasses(elem, params) {
          Array.from(elem.classList).forEach(function (className) {
            if (!Object.values(swalClasses).includes(className) && !Object.values(iconTypes).includes(className) && !Object.values(params.showClass).includes(className)) {
              elem.classList.remove(className);
            }
          });
        };
        /**
         * @param {HTMLElement} elem
         * @param {SweetAlertOptions} params
         * @param {string} className
         */

        var applyCustomClass = function applyCustomClass(elem, params, className) {
          removeCustomClasses(elem, params);
          if (params.customClass && params.customClass[className]) {
            if (typeof params.customClass[className] !== 'string' && !params.customClass[className].forEach) {
              return warn("Invalid type of customClass.".concat(className, "! Expected string or iterable object, got \"").concat(_typeof(params.customClass[className]), "\""));
            }
            addClass(elem, params.customClass[className]);
          }
        };
        /**
         * @param {HTMLElement} popup
         * @param {import('./renderers/renderInput').InputClass} inputClass
         * @returns {HTMLInputElement | null}
         */

        var getInput = function getInput(popup, inputClass) {
          if (!inputClass) {
            return null;
          }
          switch (inputClass) {
            case 'select':
            case 'textarea':
            case 'file':
              return popup.querySelector(".".concat(swalClasses.popup, " > .").concat(swalClasses[inputClass]));
            case 'checkbox':
              return popup.querySelector(".".concat(swalClasses.popup, " > .").concat(swalClasses.checkbox, " input"));
            case 'radio':
              return popup.querySelector(".".concat(swalClasses.popup, " > .").concat(swalClasses.radio, " input:checked")) || popup.querySelector(".".concat(swalClasses.popup, " > .").concat(swalClasses.radio, " input:first-child"));
            case 'range':
              return popup.querySelector(".".concat(swalClasses.popup, " > .").concat(swalClasses.range, " input"));
            default:
              return popup.querySelector(".".concat(swalClasses.popup, " > .").concat(swalClasses.input));
          }
        };
        /**
         * @param {HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement} input
         */

        var focusInput = function focusInput(input) {
          input.focus(); // place cursor at end of text in text input

          if (input.type !== 'file') {
            // http://stackoverflow.com/a/2345915
            var val = input.value;
            input.value = '';
            input.value = val;
          }
        };
        /**
         * @param {HTMLElement | HTMLElement[] | null} target
         * @param {string | string[] | readonly string[]} classList
         * @param {boolean} condition
         */

        var toggleClass = function toggleClass(target, classList, condition) {
          if (!target || !classList) {
            return;
          }
          if (typeof classList === 'string') {
            classList = classList.split(/\s+/).filter(Boolean);
          }
          classList.forEach(function (className) {
            if (Array.isArray(target)) {
              target.forEach(function (elem) {
                condition ? elem.classList.add(className) : elem.classList.remove(className);
              });
            } else {
              condition ? target.classList.add(className) : target.classList.remove(className);
            }
          });
        };
        /**
         * @param {HTMLElement | HTMLElement[] | null} target
         * @param {string | string[] | readonly string[]} classList
         */

        var addClass = function addClass(target, classList) {
          toggleClass(target, classList, true);
        };
        /**
         * @param {HTMLElement | HTMLElement[] | null} target
         * @param {string | string[] | readonly string[]} classList
         */

        var removeClass = function removeClass(target, classList) {
          toggleClass(target, classList, false);
        };
        /**
         * Get direct child of an element by class name
         *
         * @param {HTMLElement} elem
         * @param {string} className
         * @returns {HTMLElement | null}
         */

        var getDirectChildByClass = function getDirectChildByClass(elem, className) {
          var children = Array.from(elem.children);
          for (var _i4 = 0; _i4 < children.length; _i4++) {
            var child = children[_i4];
            if (child instanceof HTMLElement && hasClass(child, className)) {
              return child;
            }
          }
        };
        /**
         * @param {HTMLElement} elem
         * @param {string} property
         * @param {*} value
         */

        var applyNumericalStyle = function applyNumericalStyle(elem, property, value) {
          if (value === "".concat(parseInt(value))) {
            value = parseInt(value);
          }
          if (value || parseInt(value) === 0) {
            elem.style[property] = typeof value === 'number' ? "".concat(value, "px") : value;
          } else {
            elem.style.removeProperty(property);
          }
        };
        /**
         * @param {HTMLElement} elem
         * @param {string} display
         */

        var show = function show(elem) {
          var display = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'flex';
          elem.style.display = display;
        };
        /**
         * @param {HTMLElement} elem
         */

        var hide = function hide(elem) {
          elem.style.display = 'none';
        };
        /**
         * @param {HTMLElement} parent
         * @param {string} selector
         * @param {string} property
         * @param {string} value
         */

        var setStyle = function setStyle(parent, selector, property, value) {
          /** @type {HTMLElement} */
          var el = parent.querySelector(selector);
          if (el) {
            el.style[property] = value;
          }
        };
        /**
         * @param {HTMLElement} elem
         * @param {any} condition
         * @param {string} display
         */

        var toggle = function toggle(elem, condition) {
          var display = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 'flex';
          condition ? show(elem, display) : hide(elem);
        };
        /**
         * borrowed from jquery $(elem).is(':visible') implementation
         *
         * @param {HTMLElement} elem
         * @returns {boolean}
         */

        var isVisible = function isVisible(elem) {
          return !!(elem && (elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length));
        };
        /**
         * @returns {boolean}
         */

        var allButtonsAreHidden = function allButtonsAreHidden() {
          return !isVisible(getConfirmButton()) && !isVisible(getDenyButton()) && !isVisible(getCancelButton());
        };
        /**
         * @returns {boolean}
         */

        var isScrollable = function isScrollable(elem) {
          return !!(elem.scrollHeight > elem.clientHeight);
        };
        /**
         * borrowed from https://stackoverflow.com/a/46352119
         *
         * @param {HTMLElement} elem
         * @returns {boolean}
         */

        var hasCssAnimation = function hasCssAnimation(elem) {
          var style = window.getComputedStyle(elem);
          var animDuration = parseFloat(style.getPropertyValue('animation-duration') || '0');
          var transDuration = parseFloat(style.getPropertyValue('transition-duration') || '0');
          return animDuration > 0 || transDuration > 0;
        };
        /**
         * @param {number} timer
         * @param {boolean} reset
         */

        var animateTimerProgressBar = function animateTimerProgressBar(timer) {
          var reset = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
          var timerProgressBar = getTimerProgressBar();
          if (isVisible(timerProgressBar)) {
            if (reset) {
              timerProgressBar.style.transition = 'none';
              timerProgressBar.style.width = '100%';
            }
            setTimeout(function () {
              timerProgressBar.style.transition = "width ".concat(timer / 1000, "s linear");
              timerProgressBar.style.width = '0%';
            }, 10);
          }
        };
        var stopTimerProgressBar = function stopTimerProgressBar() {
          var timerProgressBar = getTimerProgressBar();
          var timerProgressBarWidth = parseInt(window.getComputedStyle(timerProgressBar).width);
          timerProgressBar.style.removeProperty('transition');
          timerProgressBar.style.width = '100%';
          var timerProgressBarFullWidth = parseInt(window.getComputedStyle(timerProgressBar).width);
          var timerProgressBarPercent = timerProgressBarWidth / timerProgressBarFullWidth * 100;
          timerProgressBar.style.removeProperty('transition');
          timerProgressBar.style.width = "".concat(timerProgressBarPercent, "%");
        };
        var RESTORE_FOCUS_TIMEOUT = 100;

        /** @type {GlobalState} */

        var globalState = {};
        var focusPreviousActiveElement = function focusPreviousActiveElement() {
          if (globalState.previousActiveElement instanceof HTMLElement) {
            globalState.previousActiveElement.focus();
            globalState.previousActiveElement = null;
          } else if (document.body) {
            document.body.focus();
          }
        };
        /**
         * Restore previous active (focused) element
         *
         * @param {boolean} returnFocus
         * @returns {Promise}
         */

        var restoreActiveElement = function restoreActiveElement(returnFocus) {
          return new Promise(function (resolve) {
            if (!returnFocus) {
              return resolve();
            }
            var x = window.scrollX;
            var y = window.scrollY;
            globalState.restoreFocusTimeout = setTimeout(function () {
              focusPreviousActiveElement();
              resolve();
            }, RESTORE_FOCUS_TIMEOUT); // issues/900

            window.scrollTo(x, y);
          });
        };

        /**
         * Detect Node env
         *
         * @returns {boolean}
         */
        var isNodeEnv = function isNodeEnv() {
          return typeof window === 'undefined' || typeof document === 'undefined';
        };
        var sweetHTML = "\n <div aria-labelledby=\"".concat(swalClasses.title, "\" aria-describedby=\"").concat(swalClasses['html-container'], "\" class=\"").concat(swalClasses.popup, "\" tabindex=\"-1\">\n   <button type=\"button\" class=\"").concat(swalClasses.close, "\"></button>\n   <ul class=\"").concat(swalClasses['progress-steps'], "\"></ul>\n   <div class=\"").concat(swalClasses.icon, "\"></div>\n   <img class=\"").concat(swalClasses.image, "\" />\n   <h2 class=\"").concat(swalClasses.title, "\" id=\"").concat(swalClasses.title, "\"></h2>\n   <div class=\"").concat(swalClasses['html-container'], "\" id=\"").concat(swalClasses['html-container'], "\"></div>\n   <input class=\"").concat(swalClasses.input, "\" />\n   <input type=\"file\" class=\"").concat(swalClasses.file, "\" />\n   <div class=\"").concat(swalClasses.range, "\">\n     <input type=\"range\" />\n     <output></output>\n   </div>\n   <select class=\"").concat(swalClasses.select, "\"></select>\n   <div class=\"").concat(swalClasses.radio, "\"></div>\n   <label for=\"").concat(swalClasses.checkbox, "\" class=\"").concat(swalClasses.checkbox, "\">\n     <input type=\"checkbox\" />\n     <span class=\"").concat(swalClasses.label, "\"></span>\n   </label>\n   <textarea class=\"").concat(swalClasses.textarea, "\"></textarea>\n   <div class=\"").concat(swalClasses['validation-message'], "\" id=\"").concat(swalClasses['validation-message'], "\"></div>\n   <div class=\"").concat(swalClasses.actions, "\">\n     <div class=\"").concat(swalClasses.loader, "\"></div>\n     <button type=\"button\" class=\"").concat(swalClasses.confirm, "\"></button>\n     <button type=\"button\" class=\"").concat(swalClasses.deny, "\"></button>\n     <button type=\"button\" class=\"").concat(swalClasses.cancel, "\"></button>\n   </div>\n   <div class=\"").concat(swalClasses.footer, "\"></div>\n   <div class=\"").concat(swalClasses['timer-progress-bar-container'], "\">\n     <div class=\"").concat(swalClasses['timer-progress-bar'], "\"></div>\n   </div>\n </div>\n").replace(/(^|\n)\s*/g, '');
        /**
         * @returns {boolean}
         */

        var resetOldContainer = function resetOldContainer() {
          var oldContainer = getContainer();
          if (!oldContainer) {
            return false;
          }
          oldContainer.remove();
          removeClass([document.documentElement, document.body], [swalClasses['no-backdrop'], swalClasses['toast-shown'], swalClasses['has-column']]);
          return true;
        };
        var resetValidationMessage = function resetValidationMessage() {
          globalState.currentInstance.resetValidationMessage();
        };
        var addInputChangeListeners = function addInputChangeListeners() {
          var popup = getPopup();
          var input = getDirectChildByClass(popup, swalClasses.input);
          var file = getDirectChildByClass(popup, swalClasses.file);
          /** @type {HTMLInputElement} */

          var range = popup.querySelector(".".concat(swalClasses.range, " input"));
          /** @type {HTMLOutputElement} */

          var rangeOutput = popup.querySelector(".".concat(swalClasses.range, " output"));
          var select = getDirectChildByClass(popup, swalClasses.select);
          /** @type {HTMLInputElement} */

          var checkbox = popup.querySelector(".".concat(swalClasses.checkbox, " input"));
          var textarea = getDirectChildByClass(popup, swalClasses.textarea);
          input.oninput = resetValidationMessage;
          file.onchange = resetValidationMessage;
          select.onchange = resetValidationMessage;
          checkbox.onchange = resetValidationMessage;
          textarea.oninput = resetValidationMessage;
          range.oninput = function () {
            resetValidationMessage();
            rangeOutput.value = range.value;
          };
          range.onchange = function () {
            resetValidationMessage();
            rangeOutput.value = range.value;
          };
        };
        /**
         * @param {string | HTMLElement} target
         * @returns {HTMLElement}
         */

        var getTarget = function getTarget(target) {
          return typeof target === 'string' ? document.querySelector(target) : target;
        };
        /**
         * @param {SweetAlertOptions} params
         */

        var setupAccessibility = function setupAccessibility(params) {
          var popup = getPopup();
          popup.setAttribute('role', params.toast ? 'alert' : 'dialog');
          popup.setAttribute('aria-live', params.toast ? 'polite' : 'assertive');
          if (!params.toast) {
            popup.setAttribute('aria-modal', 'true');
          }
        };
        /**
         * @param {HTMLElement} targetElement
         */

        var setupRTL = function setupRTL(targetElement) {
          if (window.getComputedStyle(targetElement).direction === 'rtl') {
            addClass(getContainer(), swalClasses.rtl);
          }
        };
        /**
         * Add modal + backdrop + no-war message for Russians to DOM
         *
         * @param {SweetAlertOptions} params
         */

        var init = function init(params) {
          // Clean up the old popup container if it exists
          var oldContainerExisted = resetOldContainer();
          /* istanbul ignore if */

          if (isNodeEnv()) {
            error('SweetAlert2 requires document to initialize');
            return;
          }
          var container = document.createElement('div');
          container.className = swalClasses.container;
          if (oldContainerExisted) {
            addClass(container, swalClasses['no-transition']);
          }
          setInnerHtml(container, sweetHTML);
          var targetElement = getTarget(params.target);
          targetElement.appendChild(container);
          setupAccessibility(params);
          setupRTL(targetElement);
          addInputChangeListeners();
        };

        /**
         * @param {HTMLElement | object | string} param
         * @param {HTMLElement} target
         */

        var parseHtmlToContainer = function parseHtmlToContainer(param, target) {
          // DOM element
          if (param instanceof HTMLElement) {
            target.appendChild(param);
          } // Object
          else if (_typeof(param) === 'object') {
            handleObject(param, target);
          } // Plain string
          else if (param) {
            setInnerHtml(target, param);
          }
        };
        /**
         * @param {object} param
         * @param {HTMLElement} target
         */

        var handleObject = function handleObject(param, target) {
          // JQuery element(s)
          if (param.jquery) {
            handleJqueryElem(target, param);
          } // For other objects use their string representation
          else {
            setInnerHtml(target, param.toString());
          }
        };
        /**
         * @param {HTMLElement} target
         * @param {HTMLElement} elem
         */

        var handleJqueryElem = function handleJqueryElem(target, elem) {
          target.textContent = '';
          if (0 in elem) {
            for (var _i5 = 0; (_i5 in elem); _i5++) {
              target.appendChild(elem[_i5].cloneNode(true));
            }
          } else {
            target.appendChild(elem.cloneNode(true));
          }
        };

        /**
         * @returns {'webkitAnimationEnd' | 'animationend' | false}
         */

        var animationEndEvent = function () {
          // Prevent run in Node env

          /* istanbul ignore if */
          if (isNodeEnv()) {
            return false;
          }
          var testEl = document.createElement('div');
          var transEndEventNames = {
            WebkitAnimation: 'webkitAnimationEnd',
            // Chrome, Safari and Opera
            animation: 'animationend' // Standard syntax
          };

          for (var _i6 in transEndEventNames) {
            if (Object.prototype.hasOwnProperty.call(transEndEventNames, _i6) && typeof testEl.style[_i6] !== 'undefined') {
              return transEndEventNames[_i6];
            }
          }
          return false;
        }();

        /**
         * Measure scrollbar width for padding body during modal show/hide
         * https://github.com/twbs/bootstrap/blob/master/js/src/modal.js
         *
         * @returns {number}
         */

        var measureScrollbar = function measureScrollbar() {
          var scrollDiv = document.createElement('div');
          scrollDiv.className = swalClasses['scrollbar-measure'];
          document.body.appendChild(scrollDiv);
          var scrollbarWidth = scrollDiv.getBoundingClientRect().width - scrollDiv.clientWidth;
          document.body.removeChild(scrollDiv);
          return scrollbarWidth;
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderActions = function renderActions(instance, params) {
          var actions = getActions();
          var loader = getLoader(); // Actions (buttons) wrapper

          if (!params.showConfirmButton && !params.showDenyButton && !params.showCancelButton) {
            hide(actions);
          } else {
            show(actions);
          } // Custom class

          applyCustomClass(actions, params, 'actions'); // Render all the buttons

          renderButtons(actions, loader, params); // Loader

          setInnerHtml(loader, params.loaderHtml);
          applyCustomClass(loader, params, 'loader');
        };
        /**
         * @param {HTMLElement} actions
         * @param {HTMLElement} loader
         * @param {SweetAlertOptions} params
         */

        function renderButtons(actions, loader, params) {
          var confirmButton = getConfirmButton();
          var denyButton = getDenyButton();
          var cancelButton = getCancelButton(); // Render buttons

          renderButton(confirmButton, 'confirm', params);
          renderButton(denyButton, 'deny', params);
          renderButton(cancelButton, 'cancel', params);
          handleButtonsStyling(confirmButton, denyButton, cancelButton, params);
          if (params.reverseButtons) {
            if (params.toast) {
              actions.insertBefore(cancelButton, confirmButton);
              actions.insertBefore(denyButton, confirmButton);
            } else {
              actions.insertBefore(cancelButton, loader);
              actions.insertBefore(denyButton, loader);
              actions.insertBefore(confirmButton, loader);
            }
          }
        }
        /**
         * @param {HTMLElement} confirmButton
         * @param {HTMLElement} denyButton
         * @param {HTMLElement} cancelButton
         * @param {SweetAlertOptions} params
         */

        function handleButtonsStyling(confirmButton, denyButton, cancelButton, params) {
          if (!params.buttonsStyling) {
            return removeClass([confirmButton, denyButton, cancelButton], swalClasses.styled);
          }
          addClass([confirmButton, denyButton, cancelButton], swalClasses.styled); // Buttons background colors

          if (params.confirmButtonColor) {
            confirmButton.style.backgroundColor = params.confirmButtonColor;
            addClass(confirmButton, swalClasses['default-outline']);
          }
          if (params.denyButtonColor) {
            denyButton.style.backgroundColor = params.denyButtonColor;
            addClass(denyButton, swalClasses['default-outline']);
          }
          if (params.cancelButtonColor) {
            cancelButton.style.backgroundColor = params.cancelButtonColor;
            addClass(cancelButton, swalClasses['default-outline']);
          }
        }
        /**
         * @param {HTMLElement} button
         * @param {'confirm' | 'deny' | 'cancel'} buttonType
         * @param {SweetAlertOptions} params
         */

        function renderButton(button, buttonType, params) {
          toggle(button, params["show".concat(capitalizeFirstLetter(buttonType), "Button")], 'inline-block');
          setInnerHtml(button, params["".concat(buttonType, "ButtonText")]); // Set caption text

          button.setAttribute('aria-label', params["".concat(buttonType, "ButtonAriaLabel")]); // ARIA label
          // Add buttons custom classes

          button.className = swalClasses[buttonType];
          applyCustomClass(button, params, "".concat(buttonType, "Button"));
          addClass(button, params["".concat(buttonType, "ButtonClass")]);
        }

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderCloseButton = function renderCloseButton(instance, params) {
          var closeButton = getCloseButton();
          setInnerHtml(closeButton, params.closeButtonHtml); // Custom class

          applyCustomClass(closeButton, params, 'closeButton');
          toggle(closeButton, params.showCloseButton);
          closeButton.setAttribute('aria-label', params.closeButtonAriaLabel);
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderContainer = function renderContainer(instance, params) {
          var container = getContainer();
          if (!container) {
            return;
          }
          handleBackdropParam(container, params.backdrop);
          handlePositionParam(container, params.position);
          handleGrowParam(container, params.grow); // Custom class

          applyCustomClass(container, params, 'container');
        };
        /**
         * @param {HTMLElement} container
         * @param {SweetAlertOptions['backdrop']} backdrop
         */

        function handleBackdropParam(container, backdrop) {
          if (typeof backdrop === 'string') {
            container.style.background = backdrop;
          } else if (!backdrop) {
            addClass([document.documentElement, document.body], swalClasses['no-backdrop']);
          }
        }
        /**
         * @param {HTMLElement} container
         * @param {SweetAlertOptions['position']} position
         */

        function handlePositionParam(container, position) {
          if (position in swalClasses) {
            addClass(container, swalClasses[position]);
          } else {
            warn('The "position" parameter is not valid, defaulting to "center"');
            addClass(container, swalClasses.center);
          }
        }
        /**
         * @param {HTMLElement} container
         * @param {SweetAlertOptions['grow']} grow
         */

        function handleGrowParam(container, grow) {
          if (grow && typeof grow === 'string') {
            var growClass = "grow-".concat(grow);
            if (growClass in swalClasses) {
              addClass(container, swalClasses[growClass]);
            }
          }
        }

        /// <reference path="../../../../sweetalert2.d.ts"/>
        /** @type {InputClass[]} */

        var inputClasses = ['input', 'file', 'range', 'select', 'radio', 'checkbox', 'textarea'];
        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderInput = function renderInput(instance, params) {
          var popup = getPopup();
          var innerParams = privateProps.innerParams.get(instance);
          var rerender = !innerParams || params.input !== innerParams.input;
          inputClasses.forEach(function (inputClass) {
            var inputContainer = getDirectChildByClass(popup, swalClasses[inputClass]); // set attributes

            setAttributes(inputClass, params.inputAttributes); // set class

            inputContainer.className = swalClasses[inputClass];
            if (rerender) {
              hide(inputContainer);
            }
          });
          if (params.input) {
            if (rerender) {
              showInput(params);
            } // set custom class

            setCustomClass(params);
          }
        };
        /**
         * @param {SweetAlertOptions} params
         */

        var showInput = function showInput(params) {
          if (!renderInputType[params.input]) {
            return error("Unexpected type of input! Expected \"text\", \"email\", \"password\", \"number\", \"tel\", \"select\", \"radio\", \"checkbox\", \"textarea\", \"file\" or \"url\", got \"".concat(params.input, "\""));
          }
          var inputContainer = getInputContainer(params.input);
          var input = renderInputType[params.input](inputContainer, params);
          show(inputContainer); // input autofocus

          setTimeout(function () {
            focusInput(input);
          });
        };
        /**
         * @param {HTMLInputElement} input
         */

        var removeAttributes = function removeAttributes(input) {
          for (var _i7 = 0; _i7 < input.attributes.length; _i7++) {
            var attrName = input.attributes[_i7].name;
            if (!['type', 'value', 'style'].includes(attrName)) {
              input.removeAttribute(attrName);
            }
          }
        };
        /**
         * @param {InputClass} inputClass
         * @param {SweetAlertOptions['inputAttributes']} inputAttributes
         */

        var setAttributes = function setAttributes(inputClass, inputAttributes) {
          var input = getInput(getPopup(), inputClass);
          if (!input) {
            return;
          }
          removeAttributes(input);
          for (var attr in inputAttributes) {
            input.setAttribute(attr, inputAttributes[attr]);
          }
        };
        /**
         * @param {SweetAlertOptions} params
         */

        var setCustomClass = function setCustomClass(params) {
          var inputContainer = getInputContainer(params.input);
          if (_typeof(params.customClass) === 'object') {
            addClass(inputContainer, params.customClass.input);
          }
        };
        /**
         * @param {HTMLInputElement | HTMLTextAreaElement} input
         * @param {SweetAlertOptions} params
         */

        var setInputPlaceholder = function setInputPlaceholder(input, params) {
          if (!input.placeholder || params.inputPlaceholder) {
            input.placeholder = params.inputPlaceholder;
          }
        };
        /**
         * @param {Input} input
         * @param {Input} prependTo
         * @param {SweetAlertOptions} params
         */

        var setInputLabel = function setInputLabel(input, prependTo, params) {
          if (params.inputLabel) {
            input.id = swalClasses.input;
            var label = document.createElement('label');
            var labelClass = swalClasses['input-label'];
            label.setAttribute('for', input.id);
            label.className = labelClass;
            if (_typeof(params.customClass) === 'object') {
              addClass(label, params.customClass.inputLabel);
            }
            label.innerText = params.inputLabel;
            prependTo.insertAdjacentElement('beforebegin', label);
          }
        };
        /**
         * @param {SweetAlertOptions['input']} inputType
         * @returns {HTMLElement}
         */

        var getInputContainer = function getInputContainer(inputType) {
          return getDirectChildByClass(getPopup(), swalClasses[inputType] || swalClasses.input);
        };
        /**
         * @param {HTMLInputElement | HTMLOutputElement | HTMLTextAreaElement} input
         * @param {SweetAlertOptions['inputValue']} inputValue
         */

        var checkAndSetInputValue = function checkAndSetInputValue(input, inputValue) {
          if (['string', 'number'].includes(_typeof(inputValue))) {
            input.value = "".concat(inputValue);
          } else if (!isPromise(inputValue)) {
            warn("Unexpected type of inputValue! Expected \"string\", \"number\" or \"Promise\", got \"".concat(_typeof(inputValue), "\""));
          }
        };
        /** @type Record<string, (input: Input | HTMLElement, params: SweetAlertOptions) => Input> */

        var renderInputType = {};
        /**
         * @param {HTMLInputElement} input
         * @param {SweetAlertOptions} params
         * @returns {HTMLInputElement}
         */

        renderInputType.text = renderInputType.email = renderInputType.password = renderInputType.number = renderInputType.tel = renderInputType.url = function (input, params) {
          checkAndSetInputValue(input, params.inputValue);
          setInputLabel(input, input, params);
          setInputPlaceholder(input, params);
          input.type = params.input;
          return input;
        };
        /**
         * @param {HTMLInputElement} input
         * @param {SweetAlertOptions} params
         * @returns {HTMLInputElement}
         */

        renderInputType.file = function (input, params) {
          setInputLabel(input, input, params);
          setInputPlaceholder(input, params);
          return input;
        };
        /**
         * @param {HTMLInputElement} range
         * @param {SweetAlertOptions} params
         * @returns {HTMLInputElement}
         */

        renderInputType.range = function (range, params) {
          var rangeInput = range.querySelector('input');
          var rangeOutput = range.querySelector('output');
          checkAndSetInputValue(rangeInput, params.inputValue);
          rangeInput.type = params.input;
          checkAndSetInputValue(rangeOutput, params.inputValue);
          setInputLabel(rangeInput, range, params);
          return range;
        };
        /**
         * @param {HTMLSelectElement} select
         * @param {SweetAlertOptions} params
         * @returns {HTMLSelectElement}
         */

        renderInputType.select = function (select, params) {
          select.textContent = '';
          if (params.inputPlaceholder) {
            var placeholder = document.createElement('option');
            setInnerHtml(placeholder, params.inputPlaceholder);
            placeholder.value = '';
            placeholder.disabled = true;
            placeholder.selected = true;
            select.appendChild(placeholder);
          }
          setInputLabel(select, select, params);
          return select;
        };
        /**
         * @param {HTMLInputElement} radio
         * @returns {HTMLInputElement}
         */

        renderInputType.radio = function (radio) {
          radio.textContent = '';
          return radio;
        };
        /**
         * @param {HTMLLabelElement} checkboxContainer
         * @param {SweetAlertOptions} params
         * @returns {HTMLInputElement}
         */

        renderInputType.checkbox = function (checkboxContainer, params) {
          var checkbox = getInput(getPopup(), 'checkbox');
          checkbox.value = '1';
          checkbox.id = swalClasses.checkbox;
          checkbox.checked = Boolean(params.inputValue);
          var label = checkboxContainer.querySelector('span');
          setInnerHtml(label, params.inputPlaceholder);
          return checkbox;
        };
        /**
         * @param {HTMLTextAreaElement} textarea
         * @param {SweetAlertOptions} params
         * @returns {HTMLTextAreaElement}
         */

        renderInputType.textarea = function (textarea, params) {
          checkAndSetInputValue(textarea, params.inputValue);
          setInputPlaceholder(textarea, params);
          setInputLabel(textarea, textarea, params);
          /**
           * @param {HTMLElement} el
           * @returns {number}
           */

          var getMargin = function getMargin(el) {
            return parseInt(window.getComputedStyle(el).marginLeft) + parseInt(window.getComputedStyle(el).marginRight);
          }; // https://github.com/sweetalert2/sweetalert2/issues/2291

          setTimeout(function () {
            // https://github.com/sweetalert2/sweetalert2/issues/1699
            if ('MutationObserver' in window) {
              var initialPopupWidth = parseInt(window.getComputedStyle(getPopup()).width);
              var textareaResizeHandler = function textareaResizeHandler() {
                var textareaWidth = textarea.offsetWidth + getMargin(textarea);
                if (textareaWidth > initialPopupWidth) {
                  getPopup().style.width = "".concat(textareaWidth, "px");
                } else {
                  getPopup().style.width = null;
                }
              };
              new MutationObserver(textareaResizeHandler).observe(textarea, {
                attributes: true,
                attributeFilter: ['style']
              });
            }
          });
          return textarea;
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderContent = function renderContent(instance, params) {
          var htmlContainer = getHtmlContainer();
          applyCustomClass(htmlContainer, params, 'htmlContainer'); // Content as HTML

          if (params.html) {
            parseHtmlToContainer(params.html, htmlContainer);
            show(htmlContainer, 'block');
          } // Content as plain text
          else if (params.text) {
            htmlContainer.textContent = params.text;
            show(htmlContainer, 'block');
          } // No content
          else {
            hide(htmlContainer);
          }
          renderInput(instance, params);
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderFooter = function renderFooter(instance, params) {
          var footer = getFooter();
          toggle(footer, params.footer);
          if (params.footer) {
            parseHtmlToContainer(params.footer, footer);
          } // Custom class

          applyCustomClass(footer, params, 'footer');
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderIcon = function renderIcon(instance, params) {
          var innerParams = privateProps.innerParams.get(instance);
          var icon = getIcon(); // if the given icon already rendered, apply the styling without re-rendering the icon

          if (innerParams && params.icon === innerParams.icon) {
            // Custom or default content
            setContent(icon, params);
            applyStyles(icon, params);
            return;
          }
          if (!params.icon && !params.iconHtml) {
            hide(icon);
            return;
          }
          if (params.icon && Object.keys(iconTypes).indexOf(params.icon) === -1) {
            error("Unknown icon! Expected \"success\", \"error\", \"warning\", \"info\" or \"question\", got \"".concat(params.icon, "\""));
            hide(icon);
            return;
          }
          show(icon); // Custom or default content

          setContent(icon, params);
          applyStyles(icon, params); // Animate icon

          addClass(icon, params.showClass.icon);
        };
        /**
         * @param {HTMLElement} icon
         * @param {SweetAlertOptions} params
         */

        var applyStyles = function applyStyles(icon, params) {
          for (var iconType in iconTypes) {
            if (params.icon !== iconType) {
              removeClass(icon, iconTypes[iconType]);
            }
          }
          addClass(icon, iconTypes[params.icon]); // Icon color

          setColor(icon, params); // Success icon background color

          adjustSuccessIconBackgroundColor(); // Custom class

          applyCustomClass(icon, params, 'icon');
        }; // Adjust success icon background color to match the popup background color

        var adjustSuccessIconBackgroundColor = function adjustSuccessIconBackgroundColor() {
          var popup = getPopup();
          var popupBackgroundColor = window.getComputedStyle(popup).getPropertyValue('background-color');
          /** @type {NodeListOf<HTMLElement>} */

          var successIconParts = popup.querySelectorAll('[class^=swal2-success-circular-line], .swal2-success-fix');
          for (var _i8 = 0; _i8 < successIconParts.length; _i8++) {
            successIconParts[_i8].style.backgroundColor = popupBackgroundColor;
          }
        };
        var successIconHtml = "\n  <div class=\"swal2-success-circular-line-left\"></div>\n  <span class=\"swal2-success-line-tip\"></span> <span class=\"swal2-success-line-long\"></span>\n  <div class=\"swal2-success-ring\"></div> <div class=\"swal2-success-fix\"></div>\n  <div class=\"swal2-success-circular-line-right\"></div>\n";
        var errorIconHtml = "\n  <span class=\"swal2-x-mark\">\n    <span class=\"swal2-x-mark-line-left\"></span>\n    <span class=\"swal2-x-mark-line-right\"></span>\n  </span>\n";
        /**
         * @param {HTMLElement} icon
         * @param {SweetAlertOptions} params
         */

        var setContent = function setContent(icon, params) {
          var oldContent = icon.innerHTML;
          var newContent;
          if (params.iconHtml) {
            newContent = iconContent(params.iconHtml);
          } else if (params.icon === 'success') {
            newContent = successIconHtml;
            oldContent = oldContent.replace(/ style=".*?"/g, ''); // undo adjustSuccessIconBackgroundColor()
          } else if (params.icon === 'error') {
            newContent = errorIconHtml;
          } else {
            var defaultIconHtml = {
              question: '?',
              warning: '!',
              info: 'i'
            };
            newContent = iconContent(defaultIconHtml[params.icon]);
          }
          if (oldContent.trim() !== newContent.trim()) {
            setInnerHtml(icon, newContent);
          }
        };
        /**
         * @param {HTMLElement} icon
         * @param {SweetAlertOptions} params
         */

        var setColor = function setColor(icon, params) {
          if (!params.iconColor) {
            return;
          }
          icon.style.color = params.iconColor;
          icon.style.borderColor = params.iconColor;
          for (var _i9 = 0, _arr = ['.swal2-success-line-tip', '.swal2-success-line-long', '.swal2-x-mark-line-left', '.swal2-x-mark-line-right']; _i9 < _arr.length; _i9++) {
            var sel = _arr[_i9];
            setStyle(icon, sel, 'backgroundColor', params.iconColor);
          }
          setStyle(icon, '.swal2-success-ring', 'borderColor', params.iconColor);
        };
        /**
         * @param {string} content
         * @returns {string}
         */

        var iconContent = function iconContent(content) {
          return "<div class=\"".concat(swalClasses['icon-content'], "\">").concat(content, "</div>");
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderImage = function renderImage(instance, params) {
          var image = getImage();
          if (!params.imageUrl) {
            return hide(image);
          }
          show(image, ''); // Src, alt

          image.setAttribute('src', params.imageUrl);
          image.setAttribute('alt', params.imageAlt); // Width, height

          applyNumericalStyle(image, 'width', params.imageWidth);
          applyNumericalStyle(image, 'height', params.imageHeight); // Class

          image.className = swalClasses.image;
          applyCustomClass(image, params, 'image');
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderPopup = function renderPopup(instance, params) {
          var container = getContainer();
          var popup = getPopup(); // Width
          // https://github.com/sweetalert2/sweetalert2/issues/2170

          if (params.toast) {
            applyNumericalStyle(container, 'width', params.width);
            popup.style.width = '100%';
            popup.insertBefore(getLoader(), getIcon());
          } else {
            applyNumericalStyle(popup, 'width', params.width);
          } // Padding

          applyNumericalStyle(popup, 'padding', params.padding); // Color

          if (params.color) {
            popup.style.color = params.color;
          } // Background

          if (params.background) {
            popup.style.background = params.background;
          }
          hide(getValidationMessage()); // Classes

          addClasses(popup, params);
        };
        /**
         * @param {HTMLElement} popup
         * @param {SweetAlertOptions} params
         */

        var addClasses = function addClasses(popup, params) {
          // Default Class + showClass when updating Swal.update({})
          popup.className = "".concat(swalClasses.popup, " ").concat(isVisible(popup) ? params.showClass.popup : '');
          if (params.toast) {
            addClass([document.documentElement, document.body], swalClasses['toast-shown']);
            addClass(popup, swalClasses.toast);
          } else {
            addClass(popup, swalClasses.modal);
          } // Custom class

          applyCustomClass(popup, params, 'popup');
          if (typeof params.customClass === 'string') {
            addClass(popup, params.customClass);
          } // Icon class (#1842)

          if (params.icon) {
            addClass(popup, swalClasses["icon-".concat(params.icon)]);
          }
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderProgressSteps = function renderProgressSteps(instance, params) {
          var progressStepsContainer = getProgressSteps();
          if (!params.progressSteps || params.progressSteps.length === 0) {
            return hide(progressStepsContainer);
          }
          show(progressStepsContainer);
          progressStepsContainer.textContent = '';
          if (params.currentProgressStep >= params.progressSteps.length) {
            warn('Invalid currentProgressStep parameter, it should be less than progressSteps.length ' + '(currentProgressStep like JS arrays starts from 0)');
          }
          params.progressSteps.forEach(function (step, index) {
            var stepEl = createStepElement(step);
            progressStepsContainer.appendChild(stepEl);
            if (index === params.currentProgressStep) {
              addClass(stepEl, swalClasses['active-progress-step']);
            }
            if (index !== params.progressSteps.length - 1) {
              var lineEl = createLineElement(params);
              progressStepsContainer.appendChild(lineEl);
            }
          });
        };
        /**
         * @param {string} step
         * @returns {HTMLLIElement}
         */

        var createStepElement = function createStepElement(step) {
          var stepEl = document.createElement('li');
          addClass(stepEl, swalClasses['progress-step']);
          setInnerHtml(stepEl, step);
          return stepEl;
        };
        /**
         * @param {SweetAlertOptions} params
         * @returns {HTMLLIElement}
         */

        var createLineElement = function createLineElement(params) {
          var lineEl = document.createElement('li');
          addClass(lineEl, swalClasses['progress-step-line']);
          if (params.progressStepsDistance) {
            applyNumericalStyle(lineEl, 'width', params.progressStepsDistance);
          }
          return lineEl;
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var renderTitle = function renderTitle(instance, params) {
          var title = getTitle();
          toggle(title, params.title || params.titleText, 'block');
          if (params.title) {
            parseHtmlToContainer(params.title, title);
          }
          if (params.titleText) {
            title.innerText = params.titleText;
          } // Custom class

          applyCustomClass(title, params, 'title');
        };

        /**
         * @param {SweetAlert2} instance
         * @param {SweetAlertOptions} params
         */

        var render = function render(instance, params) {
          renderPopup(instance, params);
          renderContainer(instance, params);
          renderProgressSteps(instance, params);
          renderIcon(instance, params);
          renderImage(instance, params);
          renderTitle(instance, params);
          renderCloseButton(instance, params);
          renderContent(instance, params);
          renderActions(instance, params);
          renderFooter(instance, params);
          if (typeof params.didRender === 'function') {
            params.didRender(getPopup());
          }
        };

        /**
         * Hides loader and shows back the button which was hidden by .showLoading()
         */

        function hideLoading() {
          // do nothing if popup is closed
          var innerParams = privateProps.innerParams.get(this);
          if (!innerParams) {
            return;
          }
          var domCache = privateProps.domCache.get(this);
          hide(domCache.loader);
          if (isToast()) {
            if (innerParams.icon) {
              show(getIcon());
            }
          } else {
            showRelatedButton(domCache);
          }
          removeClass([domCache.popup, domCache.actions], swalClasses.loading);
          domCache.popup.removeAttribute('aria-busy');
          domCache.popup.removeAttribute('data-loading');
          domCache.confirmButton.disabled = false;
          domCache.denyButton.disabled = false;
          domCache.cancelButton.disabled = false;
        }
        var showRelatedButton = function showRelatedButton(domCache) {
          var buttonToReplace = domCache.popup.getElementsByClassName(domCache.loader.getAttribute('data-button-to-replace'));
          if (buttonToReplace.length) {
            show(buttonToReplace[0], 'inline-block');
          } else if (allButtonsAreHidden()) {
            hide(domCache.actions);
          }
        };

        /**
         * Gets the input DOM node, this method works with input parameter.
         * @returns {HTMLElement | null}
         */

        function getInput$1(instance) {
          var innerParams = privateProps.innerParams.get(instance || this);
          var domCache = privateProps.domCache.get(instance || this);
          if (!domCache) {
            return null;
          }
          return getInput(domCache.popup, innerParams.input);
        }

        /*
         * Global function to determine if SweetAlert2 popup is shown
         */

        var isVisible$1 = function isVisible$1() {
          return isVisible(getPopup());
        };
        /*
         * Global function to click 'Confirm' button
         */

        var clickConfirm = function clickConfirm() {
          return getConfirmButton() && getConfirmButton().click();
        };
        /*
         * Global function to click 'Deny' button
         */

        var clickDeny = function clickDeny() {
          return getDenyButton() && getDenyButton().click();
        };
        /*
         * Global function to click 'Cancel' button
         */

        var clickCancel = function clickCancel() {
          return getCancelButton() && getCancelButton().click();
        };
        var DismissReason = Object.freeze({
          cancel: 'cancel',
          backdrop: 'backdrop',
          close: 'close',
          esc: 'esc',
          timer: 'timer'
        });

        /**
         * @param {GlobalState} globalState
         */

        var removeKeydownHandler = function removeKeydownHandler(globalState) {
          if (globalState.keydownTarget && globalState.keydownHandlerAdded) {
            globalState.keydownTarget.removeEventListener('keydown', globalState.keydownHandler, {
              capture: globalState.keydownListenerCapture
            });
            globalState.keydownHandlerAdded = false;
          }
        };
        /**
         * @param {SweetAlert2} instance
         * @param {GlobalState} globalState
         * @param {SweetAlertOptions} innerParams
         * @param {*} dismissWith
         */

        var addKeydownHandler = function addKeydownHandler(instance, globalState, innerParams, dismissWith) {
          removeKeydownHandler(globalState);
          if (!innerParams.toast) {
            globalState.keydownHandler = function (e) {
              return keydownHandler(instance, e, dismissWith);
            };
            globalState.keydownTarget = innerParams.keydownListenerCapture ? window : getPopup();
            globalState.keydownListenerCapture = innerParams.keydownListenerCapture;
            globalState.keydownTarget.addEventListener('keydown', globalState.keydownHandler, {
              capture: globalState.keydownListenerCapture
            });
            globalState.keydownHandlerAdded = true;
          }
        };
        /**
         * @param {SweetAlertOptions} innerParams
         * @param {number} index
         * @param {number} increment
         */

        var setFocus = function setFocus(innerParams, index, increment) {
          var focusableElements = getFocusableElements(); // search for visible elements and select the next possible match

          if (focusableElements.length) {
            index = index + increment; // rollover to first item

            if (index === focusableElements.length) {
              index = 0; // go to last item
            } else if (index === -1) {
              index = focusableElements.length - 1;
            }
            return focusableElements[index].focus();
          } // no visible focusable elements, focus the popup

          getPopup().focus();
        };
        var arrowKeysNextButton = ['ArrowRight', 'ArrowDown'];
        var arrowKeysPreviousButton = ['ArrowLeft', 'ArrowUp'];
        /**
         * @param {SweetAlert2} instance
         * @param {KeyboardEvent} e
         * @param {function} dismissWith
         */

        var keydownHandler = function keydownHandler(instance, e, dismissWith) {
          var innerParams = privateProps.innerParams.get(instance);
          if (!innerParams) {
            return; // This instance has already been destroyed
          } // Ignore keydown during IME composition
          // https://developer.mozilla.org/en-US/docs/Web/API/Document/keydown_event#ignoring_keydown_during_ime_composition
          // https://github.com/sweetalert2/sweetalert2/issues/720
          // https://github.com/sweetalert2/sweetalert2/issues/2406

          if (e.isComposing || e.keyCode === 229) {
            return;
          }
          if (innerParams.stopKeydownPropagation) {
            e.stopPropagation();
          } // ENTER

          if (e.key === 'Enter') {
            handleEnter(instance, e, innerParams);
          } // TAB
          else if (e.key === 'Tab') {
            handleTab(e, innerParams);
          } // ARROWS - switch focus between buttons
          else if ([].concat(arrowKeysNextButton, arrowKeysPreviousButton).includes(e.key)) {
            handleArrows(e.key);
          } // ESC
          else if (e.key === 'Escape') {
            handleEsc(e, innerParams, dismissWith);
          }
        };
        /**
         * @param {SweetAlert2} instance
         * @param {KeyboardEvent} e
         * @param {SweetAlertOptions} innerParams
         */

        var handleEnter = function handleEnter(instance, e, innerParams) {
          // https://github.com/sweetalert2/sweetalert2/issues/2386
          if (!callIfFunction(innerParams.allowEnterKey)) {
            return;
          }
          if (e.target && instance.getInput() && e.target instanceof HTMLElement && e.target.outerHTML === instance.getInput().outerHTML) {
            if (['textarea', 'file'].includes(innerParams.input)) {
              return; // do not submit
            }

            clickConfirm();
            e.preventDefault();
          }
        };
        /**
         * @param {KeyboardEvent} e
         * @param {SweetAlertOptions} innerParams
         */

        var handleTab = function handleTab(e, innerParams) {
          var targetElement = e.target;
          var focusableElements = getFocusableElements();
          var btnIndex = -1;
          for (var _i10 = 0; _i10 < focusableElements.length; _i10++) {
            if (targetElement === focusableElements[_i10]) {
              btnIndex = _i10;
              break;
            }
          } // Cycle to the next button

          if (!e.shiftKey) {
            setFocus(innerParams, btnIndex, 1);
          } // Cycle to the prev button
          else {
            setFocus(innerParams, btnIndex, -1);
          }
          e.stopPropagation();
          e.preventDefault();
        };
        /**
         * @param {string} key
         */

        var handleArrows = function handleArrows(key) {
          var confirmButton = getConfirmButton();
          var denyButton = getDenyButton();
          var cancelButton = getCancelButton();
          if (document.activeElement instanceof HTMLElement && ![confirmButton, denyButton, cancelButton].includes(document.activeElement)) {
            return;
          }
          var sibling = arrowKeysNextButton.includes(key) ? 'nextElementSibling' : 'previousElementSibling';
          var buttonToFocus = document.activeElement;
          for (var _i11 = 0; _i11 < getActions().children.length; _i11++) {
            buttonToFocus = buttonToFocus[sibling];
            if (!buttonToFocus) {
              return;
            }
            if (buttonToFocus instanceof HTMLButtonElement && isVisible(buttonToFocus)) {
              break;
            }
          }
          if (buttonToFocus instanceof HTMLButtonElement) {
            buttonToFocus.focus();
          }
        };
        /**
         * @param {KeyboardEvent} e
         * @param {SweetAlertOptions} innerParams
         * @param {function} dismissWith
         */

        var handleEsc = function handleEsc(e, innerParams, dismissWith) {
          if (callIfFunction(innerParams.allowEscapeKey)) {
            e.preventDefault();
            dismissWith(DismissReason.esc);
          }
        };

        /**
         * This module contains `WeakMap`s for each effectively-"private  property" that a `Swal` has.
         * For example, to set the private property "foo" of `this` to "bar", you can `privateProps.foo.set(this, 'bar')`
         * This is the approach that Babel will probably take to implement private methods/fields
         *   https://github.com/tc39/proposal-private-methods
         *   https://github.com/babel/babel/pull/7555
         * Once we have the changes from that PR in Babel, and our core class fits reasonable in *one module*
         *   then we can use that language feature.
         */
        var privateMethods = {
          swalPromiseResolve: new WeakMap(),
          swalPromiseReject: new WeakMap()
        };

        // Adding aria-hidden="true" to elements outside of the active modal dialog ensures that
        // elements not within the active modal dialog will not be surfaced if a user opens a screen
        // reader’s list of elements (headings, form controls, landmarks, etc.) in the document.

        var setAriaHidden = function setAriaHidden() {
          var bodyChildren = Array.from(document.body.children);
          bodyChildren.forEach(function (el) {
            if (el === getContainer() || el.contains(getContainer())) {
              return;
            }
            if (el.hasAttribute('aria-hidden')) {
              el.setAttribute('data-previous-aria-hidden', el.getAttribute('aria-hidden'));
            }
            el.setAttribute('aria-hidden', 'true');
          });
        };
        var unsetAriaHidden = function unsetAriaHidden() {
          var bodyChildren = Array.from(document.body.children);
          bodyChildren.forEach(function (el) {
            if (el.hasAttribute('data-previous-aria-hidden')) {
              el.setAttribute('aria-hidden', el.getAttribute('data-previous-aria-hidden'));
              el.removeAttribute('data-previous-aria-hidden');
            } else {
              el.removeAttribute('aria-hidden');
            }
          });
        };

        /* istanbul ignore file */

        var iOSfix = function iOSfix() {
          var iOS =
          // @ts-ignore
          /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream || navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1;
          if (iOS && !hasClass(document.body, swalClasses.iosfix)) {
            var offset = document.body.scrollTop;
            document.body.style.top = "".concat(offset * -1, "px");
            addClass(document.body, swalClasses.iosfix);
            lockBodyScroll();
            addBottomPaddingForTallPopups();
          }
        };
        /**
         * https://github.com/sweetalert2/sweetalert2/issues/1948
         */

        var addBottomPaddingForTallPopups = function addBottomPaddingForTallPopups() {
          var ua = navigator.userAgent;
          var iOS = !!ua.match(/iPad/i) || !!ua.match(/iPhone/i);
          var webkit = !!ua.match(/WebKit/i);
          var iOSSafari = iOS && webkit && !ua.match(/CriOS/i);
          if (iOSSafari) {
            var bottomPanelHeight = 44;
            if (getPopup().scrollHeight > window.innerHeight - bottomPanelHeight) {
              getContainer().style.paddingBottom = "".concat(bottomPanelHeight, "px");
            }
          }
        };
        /**
         * https://github.com/sweetalert2/sweetalert2/issues/1246
         */

        var lockBodyScroll = function lockBodyScroll() {
          var container = getContainer();
          var preventTouchMove;
          /**
           * @param {TouchEvent} e
           */

          container.ontouchstart = function (e) {
            preventTouchMove = shouldPreventTouchMove(e);
          };
          /**
           * @param {TouchEvent} e
           */

          container.ontouchmove = function (e) {
            if (preventTouchMove) {
              e.preventDefault();
              e.stopPropagation();
            }
          };
        };
        /**
         * @param {TouchEvent} event
         * @returns {boolean}
         */

        var shouldPreventTouchMove = function shouldPreventTouchMove(event) {
          var target = event.target;
          var container = getContainer();
          if (isStylus(event) || isZoom(event)) {
            return false;
          }
          if (target === container) {
            return true;
          }
          if (!isScrollable(container) && target instanceof HTMLElement && target.tagName !== 'INPUT' &&
          // #1603
          target.tagName !== 'TEXTAREA' &&
          // #2266
          !(isScrollable(getHtmlContainer()) &&
          // #1944
          getHtmlContainer().contains(target))) {
            return true;
          }
          return false;
        };
        /**
         * https://github.com/sweetalert2/sweetalert2/issues/1786
         *
         * @param {*} event
         * @returns {boolean}
         */

        var isStylus = function isStylus(event) {
          return event.touches && event.touches.length && event.touches[0].touchType === 'stylus';
        };
        /**
         * https://github.com/sweetalert2/sweetalert2/issues/1891
         *
         * @param {TouchEvent} event
         * @returns {boolean}
         */

        var isZoom = function isZoom(event) {
          return event.touches && event.touches.length > 1;
        };
        var undoIOSfix = function undoIOSfix() {
          if (hasClass(document.body, swalClasses.iosfix)) {
            var offset = parseInt(document.body.style.top, 10);
            removeClass(document.body, swalClasses.iosfix);
            document.body.style.top = '';
            document.body.scrollTop = offset * -1;
          }
        };
        var fixScrollbar = function fixScrollbar() {
          // for queues, do not do this more than once
          if (states.previousBodyPadding !== null) {
            return;
          } // if the body has overflow

          if (document.body.scrollHeight > window.innerHeight) {
            // add padding so the content doesn't shift after removal of scrollbar
            states.previousBodyPadding = parseInt(window.getComputedStyle(document.body).getPropertyValue('padding-right'));
            document.body.style.paddingRight = "".concat(states.previousBodyPadding + measureScrollbar(), "px");
          }
        };
        var undoScrollbar = function undoScrollbar() {
          if (states.previousBodyPadding !== null) {
            document.body.style.paddingRight = "".concat(states.previousBodyPadding, "px");
            states.previousBodyPadding = null;
          }
        };

        /*
         * Instance method to close sweetAlert
         */

        function removePopupAndResetState(instance, container, returnFocus, didClose) {
          if (isToast()) {
            triggerDidCloseAndDispose(instance, didClose);
          } else {
            restoreActiveElement(returnFocus).then(function () {
              return triggerDidCloseAndDispose(instance, didClose);
            });
            removeKeydownHandler(globalState);
          }
          var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent); // workaround for #2088
          // for some reason removing the container in Safari will scroll the document to bottom

          if (isSafari) {
            container.setAttribute('style', 'display:none !important');
            container.removeAttribute('class');
            container.innerHTML = '';
          } else {
            container.remove();
          }
          if (isModal()) {
            undoScrollbar();
            undoIOSfix();
            unsetAriaHidden();
          }
          removeBodyClasses();
        }
        function removeBodyClasses() {
          removeClass([document.documentElement, document.body], [swalClasses.shown, swalClasses['height-auto'], swalClasses['no-backdrop'], swalClasses['toast-shown']]);
        }
        function close(resolveValue) {
          resolveValue = prepareResolveValue(resolveValue);
          var swalPromiseResolve = privateMethods.swalPromiseResolve.get(this);
          var didClose = triggerClosePopup(this);
          if (this.isAwaitingPromise()) {
            // A swal awaiting for a promise (after a click on Confirm or Deny) cannot be dismissed anymore #2335
            if (!resolveValue.isDismissed) {
              handleAwaitingPromise(this);
              swalPromiseResolve(resolveValue);
            }
          } else if (didClose) {
            // Resolve Swal promise
            swalPromiseResolve(resolveValue);
          }
        }
        function isAwaitingPromise() {
          return !!privateProps.awaitingPromise.get(this);
        }
        var triggerClosePopup = function triggerClosePopup(instance) {
          var popup = getPopup();
          if (!popup) {
            return false;
          }
          var innerParams = privateProps.innerParams.get(instance);
          if (!innerParams || hasClass(popup, innerParams.hideClass.popup)) {
            return false;
          }
          removeClass(popup, innerParams.showClass.popup);
          addClass(popup, innerParams.hideClass.popup);
          var backdrop = getContainer();
          removeClass(backdrop, innerParams.showClass.backdrop);
          addClass(backdrop, innerParams.hideClass.backdrop);
          handlePopupAnimation(instance, popup, innerParams);
          return true;
        };
        function rejectPromise(error) {
          var rejectPromise = privateMethods.swalPromiseReject.get(this);
          handleAwaitingPromise(this);
          if (rejectPromise) {
            // Reject Swal promise
            rejectPromise(error);
          }
        }
        var handleAwaitingPromise = function handleAwaitingPromise(instance) {
          if (instance.isAwaitingPromise()) {
            privateProps.awaitingPromise["delete"](instance); // The instance might have been previously partly destroyed, we must resume the destroy process in this case #2335

            if (!privateProps.innerParams.get(instance)) {
              instance._destroy();
            }
          }
        };
        var prepareResolveValue = function prepareResolveValue(resolveValue) {
          // When user calls Swal.close()
          if (typeof resolveValue === 'undefined') {
            return {
              isConfirmed: false,
              isDenied: false,
              isDismissed: true
            };
          }
          return Object.assign({
            isConfirmed: false,
            isDenied: false,
            isDismissed: false
          }, resolveValue);
        };
        var handlePopupAnimation = function handlePopupAnimation(instance, popup, innerParams) {
          var container = getContainer(); // If animation is supported, animate

          var animationIsSupported = animationEndEvent && hasCssAnimation(popup);
          if (typeof innerParams.willClose === 'function') {
            innerParams.willClose(popup);
          }
          if (animationIsSupported) {
            animatePopup(instance, popup, container, innerParams.returnFocus, innerParams.didClose);
          } else {
            // Otherwise, remove immediately
            removePopupAndResetState(instance, container, innerParams.returnFocus, innerParams.didClose);
          }
        };
        var animatePopup = function animatePopup(instance, popup, container, returnFocus, didClose) {
          globalState.swalCloseEventFinishedCallback = removePopupAndResetState.bind(null, instance, container, returnFocus, didClose);
          popup.addEventListener(animationEndEvent, function (e) {
            if (e.target === popup) {
              globalState.swalCloseEventFinishedCallback();
              delete globalState.swalCloseEventFinishedCallback;
            }
          });
        };
        var triggerDidCloseAndDispose = function triggerDidCloseAndDispose(instance, didClose) {
          setTimeout(function () {
            if (typeof didClose === 'function') {
              didClose.bind(instance.params)();
            }
            instance._destroy();
          });
        };

        /**
         * @param {SweetAlert2} instance
         * @param {string[]} buttons
         * @param {boolean} disabled
         */

        function setButtonsDisabled(instance, buttons, disabled) {
          var domCache = privateProps.domCache.get(instance);
          buttons.forEach(function (button) {
            domCache[button].disabled = disabled;
          });
        }
        /**
         * @param {HTMLInputElement} input
         * @param {boolean} disabled
         */

        function setInputDisabled(input, disabled) {
          if (!input) {
            return;
          }
          if (input.type === 'radio') {
            var radiosContainer = input.parentNode.parentNode;
            var radios = radiosContainer.querySelectorAll('input');
            for (var _i12 = 0; _i12 < radios.length; _i12++) {
              radios[_i12].disabled = disabled;
            }
          } else {
            input.disabled = disabled;
          }
        }
        function enableButtons() {
          setButtonsDisabled(this, ['confirmButton', 'denyButton', 'cancelButton'], false);
        }
        function disableButtons() {
          setButtonsDisabled(this, ['confirmButton', 'denyButton', 'cancelButton'], true);
        }
        function enableInput() {
          setInputDisabled(this.getInput(), false);
        }
        function disableInput() {
          setInputDisabled(this.getInput(), true);
        }
        function showValidationMessage(error) {
          var domCache = privateProps.domCache.get(this);
          var params = privateProps.innerParams.get(this);
          setInnerHtml(domCache.validationMessage, error);
          domCache.validationMessage.className = swalClasses['validation-message'];
          if (params.customClass && params.customClass.validationMessage) {
            addClass(domCache.validationMessage, params.customClass.validationMessage);
          }
          show(domCache.validationMessage);
          var input = this.getInput();
          if (input) {
            input.setAttribute('aria-invalid', true);
            input.setAttribute('aria-describedby', swalClasses['validation-message']);
            focusInput(input);
            addClass(input, swalClasses.inputerror);
          }
        } // Hide block with validation message

        function resetValidationMessage$1() {
          var domCache = privateProps.domCache.get(this);
          if (domCache.validationMessage) {
            hide(domCache.validationMessage);
          }
          var input = this.getInput();
          if (input) {
            input.removeAttribute('aria-invalid');
            input.removeAttribute('aria-describedby');
            removeClass(input, swalClasses.inputerror);
          }
        }
        function getProgressSteps$1() {
          var domCache = privateProps.domCache.get(this);
          return domCache.progressSteps;
        }
        var defaultParams = {
          title: '',
          titleText: '',
          text: '',
          html: '',
          footer: '',
          icon: undefined,
          iconColor: undefined,
          iconHtml: undefined,
          template: undefined,
          toast: false,
          showClass: {
            popup: 'swal2-show',
            backdrop: 'swal2-backdrop-show',
            icon: 'swal2-icon-show'
          },
          hideClass: {
            popup: 'swal2-hide',
            backdrop: 'swal2-backdrop-hide',
            icon: 'swal2-icon-hide'
          },
          customClass: {},
          target: 'body',
          color: undefined,
          backdrop: true,
          heightAuto: true,
          allowOutsideClick: true,
          allowEscapeKey: true,
          allowEnterKey: true,
          stopKeydownPropagation: true,
          keydownListenerCapture: false,
          showConfirmButton: true,
          showDenyButton: false,
          showCancelButton: false,
          preConfirm: undefined,
          preDeny: undefined,
          confirmButtonText: 'OK',
          confirmButtonAriaLabel: '',
          confirmButtonColor: undefined,
          denyButtonText: 'No',
          denyButtonAriaLabel: '',
          denyButtonColor: undefined,
          cancelButtonText: 'Cancel',
          cancelButtonAriaLabel: '',
          cancelButtonColor: undefined,
          buttonsStyling: true,
          reverseButtons: false,
          focusConfirm: true,
          focusDeny: false,
          focusCancel: false,
          returnFocus: true,
          showCloseButton: false,
          closeButtonHtml: '&times;',
          closeButtonAriaLabel: 'Close this dialog',
          loaderHtml: '',
          showLoaderOnConfirm: false,
          showLoaderOnDeny: false,
          imageUrl: undefined,
          imageWidth: undefined,
          imageHeight: undefined,
          imageAlt: '',
          timer: undefined,
          timerProgressBar: false,
          width: undefined,
          padding: undefined,
          background: undefined,
          input: undefined,
          inputPlaceholder: '',
          inputLabel: '',
          inputValue: '',
          inputOptions: {},
          inputAutoTrim: true,
          inputAttributes: {},
          inputValidator: undefined,
          returnInputValueOnDeny: false,
          validationMessage: undefined,
          grow: false,
          position: 'center',
          progressSteps: [],
          currentProgressStep: undefined,
          progressStepsDistance: undefined,
          willOpen: undefined,
          didOpen: undefined,
          didRender: undefined,
          willClose: undefined,
          didClose: undefined,
          didDestroy: undefined,
          scrollbarPadding: true
        };
        var updatableParams = ['allowEscapeKey', 'allowOutsideClick', 'background', 'buttonsStyling', 'cancelButtonAriaLabel', 'cancelButtonColor', 'cancelButtonText', 'closeButtonAriaLabel', 'closeButtonHtml', 'color', 'confirmButtonAriaLabel', 'confirmButtonColor', 'confirmButtonText', 'currentProgressStep', 'customClass', 'denyButtonAriaLabel', 'denyButtonColor', 'denyButtonText', 'didClose', 'didDestroy', 'footer', 'hideClass', 'html', 'icon', 'iconColor', 'iconHtml', 'imageAlt', 'imageHeight', 'imageUrl', 'imageWidth', 'preConfirm', 'preDeny', 'progressSteps', 'returnFocus', 'reverseButtons', 'showCancelButton', 'showCloseButton', 'showConfirmButton', 'showDenyButton', 'text', 'title', 'titleText', 'willClose'];
        var deprecatedParams = {};
        var toastIncompatibleParams = ['allowOutsideClick', 'allowEnterKey', 'backdrop', 'focusConfirm', 'focusDeny', 'focusCancel', 'returnFocus', 'heightAuto', 'keydownListenerCapture'];
        /**
         * Is valid parameter
         *
         * @param {string} paramName
         * @returns {boolean}
         */

        var isValidParameter = function isValidParameter(paramName) {
          return Object.prototype.hasOwnProperty.call(defaultParams, paramName);
        };
        /**
         * Is valid parameter for Swal.update() method
         *
         * @param {string} paramName
         * @returns {boolean}
         */

        var isUpdatableParameter = function isUpdatableParameter(paramName) {
          return updatableParams.indexOf(paramName) !== -1;
        };
        /**
         * Is deprecated parameter
         *
         * @param {string} paramName
         * @returns {string | undefined}
         */

        var isDeprecatedParameter = function isDeprecatedParameter(paramName) {
          return deprecatedParams[paramName];
        };
        /**
         * @param {string} param
         */

        var checkIfParamIsValid = function checkIfParamIsValid(param) {
          if (!isValidParameter(param)) {
            warn("Unknown parameter \"".concat(param, "\""));
          }
        };
        /**
         * @param {string} param
         */

        var checkIfToastParamIsValid = function checkIfToastParamIsValid(param) {
          if (toastIncompatibleParams.includes(param)) {
            warn("The parameter \"".concat(param, "\" is incompatible with toasts"));
          }
        };
        /**
         * @param {string} param
         */

        var checkIfParamIsDeprecated = function checkIfParamIsDeprecated(param) {
          if (isDeprecatedParameter(param)) {
            warnAboutDeprecation(param, isDeprecatedParameter(param));
          }
        };
        /**
         * Show relevant warnings for given params
         *
         * @param {SweetAlertOptions} params
         */

        var showWarningsForParams = function showWarningsForParams(params) {
          if (!params.backdrop && params.allowOutsideClick) {
            warn('"allowOutsideClick" parameter requires `backdrop` parameter to be set to `true`');
          }
          for (var param in params) {
            checkIfParamIsValid(param);
            if (params.toast) {
              checkIfToastParamIsValid(param);
            }
            checkIfParamIsDeprecated(param);
          }
        };

        /**
         * Updates popup parameters.
         */

        function update(params) {
          var popup = getPopup();
          var innerParams = privateProps.innerParams.get(this);
          if (!popup || hasClass(popup, innerParams.hideClass.popup)) {
            return warn("You're trying to update the closed or closing popup, that won't work. Use the update() method in preConfirm parameter or show a new popup.");
          }
          var validUpdatableParams = filterValidParams(params);
          var updatedParams = Object.assign({}, innerParams, validUpdatableParams);
          render(this, updatedParams);
          privateProps.innerParams.set(this, updatedParams);
          Object.defineProperties(this, {
            params: {
              value: Object.assign({}, this.params, params),
              writable: false,
              enumerable: true
            }
          });
        }
        var filterValidParams = function filterValidParams(params) {
          var validUpdatableParams = {};
          Object.keys(params).forEach(function (param) {
            if (isUpdatableParameter(param)) {
              validUpdatableParams[param] = params[param];
            } else {
              warn("Invalid parameter to update: ".concat(param));
            }
          });
          return validUpdatableParams;
        };
        function _destroy() {
          var domCache = privateProps.domCache.get(this);
          var innerParams = privateProps.innerParams.get(this);
          if (!innerParams) {
            disposeWeakMaps(this); // The WeakMaps might have been partly destroyed, we must recall it to dispose any remaining WeakMaps #2335

            return; // This instance has already been destroyed
          } // Check if there is another Swal closing

          if (domCache.popup && globalState.swalCloseEventFinishedCallback) {
            globalState.swalCloseEventFinishedCallback();
            delete globalState.swalCloseEventFinishedCallback;
          }
          if (typeof innerParams.didDestroy === 'function') {
            innerParams.didDestroy();
          }
          disposeSwal(this);
        }
        /**
         * @param {SweetAlert2} instance
         */

        var disposeSwal = function disposeSwal(instance) {
          disposeWeakMaps(instance); // Unset this.params so GC will dispose it (#1569)
          // @ts-ignore

          delete instance.params; // Unset globalState props so GC will dispose globalState (#1569)

          delete globalState.keydownHandler;
          delete globalState.keydownTarget; // Unset currentInstance

          delete globalState.currentInstance;
        };
        /**
         * @param {SweetAlert2} instance
         */

        var disposeWeakMaps = function disposeWeakMaps(instance) {
          // If the current instance is awaiting a promise result, we keep the privateMethods to call them once the promise result is retrieved #2335
          // @ts-ignore
          if (instance.isAwaitingPromise()) {
            unsetWeakMaps(privateProps, instance);
            privateProps.awaitingPromise.set(instance, true);
          } else {
            unsetWeakMaps(privateMethods, instance);
            unsetWeakMaps(privateProps, instance);
          }
        };
        /**
         * @param {object} obj
         * @param {SweetAlert2} instance
         */

        var unsetWeakMaps = function unsetWeakMaps(obj, instance) {
          for (var _i13 in obj) {
            obj[_i13]["delete"](instance);
          }
        };
        var instanceMethods = /*#__PURE__*/Object.freeze({
          hideLoading: hideLoading,
          disableLoading: hideLoading,
          getInput: getInput$1,
          close: close,
          isAwaitingPromise: isAwaitingPromise,
          rejectPromise: rejectPromise,
          handleAwaitingPromise: handleAwaitingPromise,
          closePopup: close,
          closeModal: close,
          closeToast: close,
          enableButtons: enableButtons,
          disableButtons: disableButtons,
          enableInput: enableInput,
          disableInput: disableInput,
          showValidationMessage: showValidationMessage,
          resetValidationMessage: resetValidationMessage$1,
          getProgressSteps: getProgressSteps$1,
          update: update,
          _destroy: _destroy
        });

        /**
         * Shows loader (spinner), this is useful with AJAX requests.
         * By default the loader be shown instead of the "Confirm" button.
         */

        var showLoading = function showLoading(buttonToReplace) {
          var popup = getPopup();
          if (!popup) {
            new Swal(); // eslint-disable-line no-new
          }

          popup = getPopup();
          var loader = getLoader();
          if (isToast()) {
            hide(getIcon());
          } else {
            replaceButton(popup, buttonToReplace);
          }
          show(loader);
          popup.setAttribute('data-loading', 'true');
          popup.setAttribute('aria-busy', 'true');
          popup.focus();
        };
        var replaceButton = function replaceButton(popup, buttonToReplace) {
          var actions = getActions();
          var loader = getLoader();
          if (!buttonToReplace && isVisible(getConfirmButton())) {
            buttonToReplace = getConfirmButton();
          }
          show(actions);
          if (buttonToReplace) {
            hide(buttonToReplace);
            loader.setAttribute('data-button-to-replace', buttonToReplace.className);
          }
          loader.parentNode.insertBefore(loader, buttonToReplace);
          addClass([popup, actions], swalClasses.loading);
        };
        var handleInputOptionsAndValue = function handleInputOptionsAndValue(instance, params) {
          if (params.input === 'select' || params.input === 'radio') {
            handleInputOptions(instance, params);
          } else if (['text', 'email', 'number', 'tel', 'textarea'].includes(params.input) && (hasToPromiseFn(params.inputValue) || isPromise(params.inputValue))) {
            showLoading(getConfirmButton());
            handleInputValue(instance, params);
          }
        };
        var getInputValue = function getInputValue(instance, innerParams) {
          var input = instance.getInput();
          if (!input) {
            return null;
          }
          switch (innerParams.input) {
            case 'checkbox':
              return getCheckboxValue(input);
            case 'radio':
              return getRadioValue(input);
            case 'file':
              return getFileValue(input);
            default:
              return innerParams.inputAutoTrim ? input.value.trim() : input.value;
          }
        };
        var getCheckboxValue = function getCheckboxValue(input) {
          return input.checked ? 1 : 0;
        };
        var getRadioValue = function getRadioValue(input) {
          return input.checked ? input.value : null;
        };
        var getFileValue = function getFileValue(input) {
          return input.files.length ? input.getAttribute('multiple') !== null ? input.files : input.files[0] : null;
        };
        var handleInputOptions = function handleInputOptions(instance, params) {
          var popup = getPopup();
          var processInputOptions = function processInputOptions(inputOptions) {
            return populateInputOptions[params.input](popup, formatInputOptions(inputOptions), params);
          };
          if (hasToPromiseFn(params.inputOptions) || isPromise(params.inputOptions)) {
            showLoading(getConfirmButton());
            asPromise(params.inputOptions).then(function (inputOptions) {
              instance.hideLoading();
              processInputOptions(inputOptions);
            });
          } else if (_typeof(params.inputOptions) === 'object') {
            processInputOptions(params.inputOptions);
          } else {
            error("Unexpected type of inputOptions! Expected object, Map or Promise, got ".concat(_typeof(params.inputOptions)));
          }
        };
        var handleInputValue = function handleInputValue(instance, params) {
          var input = instance.getInput();
          hide(input);
          asPromise(params.inputValue).then(function (inputValue) {
            input.value = params.input === 'number' ? parseFloat(inputValue) || 0 : "".concat(inputValue);
            show(input);
            input.focus();
            instance.hideLoading();
          })["catch"](function (err) {
            error("Error in inputValue promise: ".concat(err));
            input.value = '';
            show(input);
            input.focus();
            instance.hideLoading();
          });
        };
        var populateInputOptions = {
          select: function select(popup, inputOptions, params) {
            var select = getDirectChildByClass(popup, swalClasses.select);
            var renderOption = function renderOption(parent, optionLabel, optionValue) {
              var option = document.createElement('option');
              option.value = optionValue;
              setInnerHtml(option, optionLabel);
              option.selected = isSelected(optionValue, params.inputValue);
              parent.appendChild(option);
            };
            inputOptions.forEach(function (inputOption) {
              var optionValue = inputOption[0];
              var optionLabel = inputOption[1]; // <optgroup> spec:
              // https://www.w3.org/TR/html401/interact/forms.html#h-17.6
              // "...all OPTGROUP elements must be specified directly within a SELECT element (i.e., groups may not be nested)..."
              // check whether this is a <optgroup>

              if (Array.isArray(optionLabel)) {
                // if it is an array, then it is an <optgroup>
                var optgroup = document.createElement('optgroup');
                optgroup.label = optionValue;
                optgroup.disabled = false; // not configurable for now

                select.appendChild(optgroup);
                optionLabel.forEach(function (o) {
                  return renderOption(optgroup, o[1], o[0]);
                });
              } else {
                // case of <option>
                renderOption(select, optionLabel, optionValue);
              }
            });
            select.focus();
          },
          radio: function radio(popup, inputOptions, params) {
            var radio = getDirectChildByClass(popup, swalClasses.radio);
            inputOptions.forEach(function (inputOption) {
              var radioValue = inputOption[0];
              var radioLabel = inputOption[1];
              var radioInput = document.createElement('input');
              var radioLabelElement = document.createElement('label');
              radioInput.type = 'radio';
              radioInput.name = swalClasses.radio;
              radioInput.value = radioValue;
              if (isSelected(radioValue, params.inputValue)) {
                radioInput.checked = true;
              }
              var label = document.createElement('span');
              setInnerHtml(label, radioLabel);
              label.className = swalClasses.label;
              radioLabelElement.appendChild(radioInput);
              radioLabelElement.appendChild(label);
              radio.appendChild(radioLabelElement);
            });
            var radios = radio.querySelectorAll('input');
            if (radios.length) {
              radios[0].focus();
            }
          }
        };
        /**
         * Converts `inputOptions` into an array of `[value, label]`s
         * @param inputOptions
         */

        var formatInputOptions = function formatInputOptions(inputOptions) {
          var result = [];
          if (typeof Map !== 'undefined' && inputOptions instanceof Map) {
            inputOptions.forEach(function (value, key) {
              var valueFormatted = value;
              if (_typeof(valueFormatted) === 'object') {
                // case of <optgroup>
                valueFormatted = formatInputOptions(valueFormatted);
              }
              result.push([key, valueFormatted]);
            });
          } else {
            Object.keys(inputOptions).forEach(function (key) {
              var valueFormatted = inputOptions[key];
              if (_typeof(valueFormatted) === 'object') {
                // case of <optgroup>
                valueFormatted = formatInputOptions(valueFormatted);
              }
              result.push([key, valueFormatted]);
            });
          }
          return result;
        };
        var isSelected = function isSelected(optionValue, inputValue) {
          return inputValue && inputValue.toString() === optionValue.toString();
        };

        /**
         * @param {SweetAlert2} instance
         */

        var handleConfirmButtonClick = function handleConfirmButtonClick(instance) {
          var innerParams = privateProps.innerParams.get(instance);
          instance.disableButtons();
          if (innerParams.input) {
            handleConfirmOrDenyWithInput(instance, 'confirm');
          } else {
            confirm(instance, true);
          }
        };
        /**
         * @param {SweetAlert2} instance
         */

        var handleDenyButtonClick = function handleDenyButtonClick(instance) {
          var innerParams = privateProps.innerParams.get(instance);
          instance.disableButtons();
          if (innerParams.returnInputValueOnDeny) {
            handleConfirmOrDenyWithInput(instance, 'deny');
          } else {
            deny(instance, false);
          }
        };
        /**
         * @param {SweetAlert2} instance
         * @param {Function} dismissWith
         */

        var handleCancelButtonClick = function handleCancelButtonClick(instance, dismissWith) {
          instance.disableButtons();
          dismissWith(DismissReason.cancel);
        };
        /**
         * @param {SweetAlert2} instance
         * @param {'confirm' | 'deny'} type
         */

        var handleConfirmOrDenyWithInput = function handleConfirmOrDenyWithInput(instance, type) {
          var innerParams = privateProps.innerParams.get(instance);
          if (!innerParams.input) {
            error("The \"input\" parameter is needed to be set when using returnInputValueOn".concat(capitalizeFirstLetter(type)));
            return;
          }
          var inputValue = getInputValue(instance, innerParams);
          if (innerParams.inputValidator) {
            handleInputValidator(instance, inputValue, type);
          } else if (!instance.getInput().checkValidity()) {
            instance.enableButtons();
            instance.showValidationMessage(innerParams.validationMessage);
          } else if (type === 'deny') {
            deny(instance, inputValue);
          } else {
            confirm(instance, inputValue);
          }
        };
        /**
         * @param {SweetAlert2} instance
         * @param {string} inputValue
         * @param {'confirm' | 'deny'} type
         */

        var handleInputValidator = function handleInputValidator(instance, inputValue, type) {
          var innerParams = privateProps.innerParams.get(instance);
          instance.disableInput();
          var validationPromise = Promise.resolve().then(function () {
            return asPromise(innerParams.inputValidator(inputValue, innerParams.validationMessage));
          });
          validationPromise.then(function (validationMessage) {
            instance.enableButtons();
            instance.enableInput();
            if (validationMessage) {
              instance.showValidationMessage(validationMessage);
            } else if (type === 'deny') {
              deny(instance, inputValue);
            } else {
              confirm(instance, inputValue);
            }
          });
        };
        /**
         * @param {SweetAlert2} instance
         * @param {any} value
         */

        var deny = function deny(instance, value) {
          var innerParams = privateProps.innerParams.get(instance || undefined);
          if (innerParams.showLoaderOnDeny) {
            showLoading(getDenyButton());
          }
          if (innerParams.preDeny) {
            privateProps.awaitingPromise.set(instance || undefined, true); // Flagging the instance as awaiting a promise so it's own promise's reject/resolve methods doesn't get destroyed until the result from this preDeny's promise is received

            var preDenyPromise = Promise.resolve().then(function () {
              return asPromise(innerParams.preDeny(value, innerParams.validationMessage));
            });
            preDenyPromise.then(function (preDenyValue) {
              if (preDenyValue === false) {
                instance.hideLoading();
                handleAwaitingPromise(instance);
              } else {
                instance.close({
                  isDenied: true,
                  value: typeof preDenyValue === 'undefined' ? value : preDenyValue
                });
              }
            })["catch"](function (error$$1) {
              return rejectWith(instance || undefined, error$$1);
            });
          } else {
            instance.close({
              isDenied: true,
              value: value
            });
          }
        };
        /**
         * @param {SweetAlert2} instance
         * @param {any} value
         */

        var succeedWith = function succeedWith(instance, value) {
          instance.close({
            isConfirmed: true,
            value: value
          });
        };
        /**
         *
         * @param {SweetAlert2} instance
         * @param {string} error
         */

        var rejectWith = function rejectWith(instance, error$$1) {
          // @ts-ignore
          instance.rejectPromise(error$$1);
        };
        /**
         *
         * @param {SweetAlert2} instance
         * @param {any} value
         */

        var confirm = function confirm(instance, value) {
          var innerParams = privateProps.innerParams.get(instance || undefined);
          if (innerParams.showLoaderOnConfirm) {
            showLoading();
          }
          if (innerParams.preConfirm) {
            instance.resetValidationMessage();
            privateProps.awaitingPromise.set(instance || undefined, true); // Flagging the instance as awaiting a promise so it's own promise's reject/resolve methods doesn't get destroyed until the result from this preConfirm's promise is received

            var preConfirmPromise = Promise.resolve().then(function () {
              return asPromise(innerParams.preConfirm(value, innerParams.validationMessage));
            });
            preConfirmPromise.then(function (preConfirmValue) {
              if (isVisible(getValidationMessage()) || preConfirmValue === false) {
                instance.hideLoading();
                handleAwaitingPromise(instance);
              } else {
                succeedWith(instance, typeof preConfirmValue === 'undefined' ? value : preConfirmValue);
              }
            })["catch"](function (error$$1) {
              return rejectWith(instance || undefined, error$$1);
            });
          } else {
            succeedWith(instance, value);
          }
        };
        var handlePopupClick = function handlePopupClick(instance, domCache, dismissWith) {
          var innerParams = privateProps.innerParams.get(instance);
          if (innerParams.toast) {
            handleToastClick(instance, domCache, dismissWith);
          } else {
            // Ignore click events that had mousedown on the popup but mouseup on the container
            // This can happen when the user drags a slider
            handleModalMousedown(domCache); // Ignore click events that had mousedown on the container but mouseup on the popup

            handleContainerMousedown(domCache);
            handleModalClick(instance, domCache, dismissWith);
          }
        };
        var handleToastClick = function handleToastClick(instance, domCache, dismissWith) {
          // Closing toast by internal click
          domCache.popup.onclick = function () {
            var innerParams = privateProps.innerParams.get(instance);
            if (innerParams && (isAnyButtonShown(innerParams) || innerParams.timer || innerParams.input)) {
              return;
            }
            dismissWith(DismissReason.close);
          };
        };
        /**
         * @param {*} innerParams
         * @returns {boolean}
         */

        var isAnyButtonShown = function isAnyButtonShown(innerParams) {
          return innerParams.showConfirmButton || innerParams.showDenyButton || innerParams.showCancelButton || innerParams.showCloseButton;
        };
        var ignoreOutsideClick = false;
        var handleModalMousedown = function handleModalMousedown(domCache) {
          domCache.popup.onmousedown = function () {
            domCache.container.onmouseup = function (e) {
              domCache.container.onmouseup = undefined; // We only check if the mouseup target is the container because usually it doesn't
              // have any other direct children aside of the popup

              if (e.target === domCache.container) {
                ignoreOutsideClick = true;
              }
            };
          };
        };
        var handleContainerMousedown = function handleContainerMousedown(domCache) {
          domCache.container.onmousedown = function () {
            domCache.popup.onmouseup = function (e) {
              domCache.popup.onmouseup = undefined; // We also need to check if the mouseup target is a child of the popup

              if (e.target === domCache.popup || domCache.popup.contains(e.target)) {
                ignoreOutsideClick = true;
              }
            };
          };
        };
        var handleModalClick = function handleModalClick(instance, domCache, dismissWith) {
          domCache.container.onclick = function (e) {
            var innerParams = privateProps.innerParams.get(instance);
            if (ignoreOutsideClick) {
              ignoreOutsideClick = false;
              return;
            }
            if (e.target === domCache.container && callIfFunction(innerParams.allowOutsideClick)) {
              dismissWith(DismissReason.backdrop);
            }
          };
        };
        var isJqueryElement = function isJqueryElement(elem) {
          return _typeof(elem) === 'object' && elem.jquery;
        };
        var isElement = function isElement(elem) {
          return elem instanceof Element || isJqueryElement(elem);
        };
        var argsToParams = function argsToParams(args) {
          var params = {};
          if (_typeof(args[0]) === 'object' && !isElement(args[0])) {
            Object.assign(params, args[0]);
          } else {
            ['title', 'html', 'icon'].forEach(function (name, index) {
              var arg = args[index];
              if (typeof arg === 'string' || isElement(arg)) {
                params[name] = arg;
              } else if (arg !== undefined) {
                error("Unexpected type of ".concat(name, "! Expected \"string\" or \"Element\", got ").concat(_typeof(arg)));
              }
            });
          }
          return params;
        };
        function fire() {
          var Swal = this; // eslint-disable-line @typescript-eslint/no-this-alias

          for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
            args[_key] = arguments[_key];
          }
          return _construct(Swal, args);
        }

        /**
         * Returns an extended version of `Swal` containing `params` as defaults.
         * Useful for reusing Swal configuration.
         *
         * For example:
         *
         * Before:
         * const textPromptOptions = { input: 'text', showCancelButton: true }
         * const {value: firstName} = await Swal.fire({ ...textPromptOptions, title: 'What is your first name?' })
         * const {value: lastName} = await Swal.fire({ ...textPromptOptions, title: 'What is your last name?' })
         *
         * After:
         * const TextPrompt = Swal.mixin({ input: 'text', showCancelButton: true })
         * const {value: firstName} = await TextPrompt('What is your first name?')
         * const {value: lastName} = await TextPrompt('What is your last name?')
         *
         * @param mixinParams
         */
        function mixin(mixinParams) {
          var MixinSwal = /*#__PURE__*/function (_this) {
            _inherits(MixinSwal, _this);
            var _super = _createSuper(MixinSwal);
            function MixinSwal() {
              _classCallCheck(this, MixinSwal);
              return _super.apply(this, arguments);
            }
            _createClass(MixinSwal, [{
              key: "_main",
              value: function _main(params, priorityMixinParams) {
                return _get(_getPrototypeOf(MixinSwal.prototype), "_main", this).call(this, params, Object.assign({}, mixinParams, priorityMixinParams));
              }
            }]);
            return MixinSwal;
          }(this);
          return MixinSwal;
        }

        /**
         * If `timer` parameter is set, returns number of milliseconds of timer remained.
         * Otherwise, returns undefined.
         */

        var getTimerLeft = function getTimerLeft() {
          return globalState.timeout && globalState.timeout.getTimerLeft();
        };
        /**
         * Stop timer. Returns number of milliseconds of timer remained.
         * If `timer` parameter isn't set, returns undefined.
         */

        var stopTimer = function stopTimer() {
          if (globalState.timeout) {
            stopTimerProgressBar();
            return globalState.timeout.stop();
          }
        };
        /**
         * Resume timer. Returns number of milliseconds of timer remained.
         * If `timer` parameter isn't set, returns undefined.
         */

        var resumeTimer = function resumeTimer() {
          if (globalState.timeout) {
            var remaining = globalState.timeout.start();
            animateTimerProgressBar(remaining);
            return remaining;
          }
        };
        /**
         * Resume timer. Returns number of milliseconds of timer remained.
         * If `timer` parameter isn't set, returns undefined.
         */

        var toggleTimer = function toggleTimer() {
          var timer = globalState.timeout;
          return timer && (timer.running ? stopTimer() : resumeTimer());
        };
        /**
         * Increase timer. Returns number of milliseconds of an updated timer.
         * If `timer` parameter isn't set, returns undefined.
         */

        var increaseTimer = function increaseTimer(n) {
          if (globalState.timeout) {
            var remaining = globalState.timeout.increase(n);
            animateTimerProgressBar(remaining, true);
            return remaining;
          }
        };
        /**
         * Check if timer is running. Returns true if timer is running
         * or false if timer is paused or stopped.
         * If `timer` parameter isn't set, returns undefined
         */

        var isTimerRunning = function isTimerRunning() {
          return globalState.timeout && globalState.timeout.isRunning();
        };
        var bodyClickListenerAdded = false;
        var clickHandlers = {};
        function bindClickHandler() {
          var attr = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'data-swal-template';
          clickHandlers[attr] = this;
          if (!bodyClickListenerAdded) {
            document.body.addEventListener('click', bodyClickListener);
            bodyClickListenerAdded = true;
          }
        }
        var bodyClickListener = function bodyClickListener(event) {
          for (var el = event.target; el && el !== document; el = el.parentNode) {
            for (var attr in clickHandlers) {
              var template = el.getAttribute(attr);
              if (template) {
                clickHandlers[attr].fire({
                  template: template
                });
                return;
              }
            }
          }
        };
        var staticMethods = /*#__PURE__*/Object.freeze({
          isValidParameter: isValidParameter,
          isUpdatableParameter: isUpdatableParameter,
          isDeprecatedParameter: isDeprecatedParameter,
          argsToParams: argsToParams,
          isVisible: isVisible$1,
          clickConfirm: clickConfirm,
          clickDeny: clickDeny,
          clickCancel: clickCancel,
          getContainer: getContainer,
          getPopup: getPopup,
          getTitle: getTitle,
          getHtmlContainer: getHtmlContainer,
          getImage: getImage,
          getIcon: getIcon,
          getInputLabel: getInputLabel,
          getCloseButton: getCloseButton,
          getActions: getActions,
          getConfirmButton: getConfirmButton,
          getDenyButton: getDenyButton,
          getCancelButton: getCancelButton,
          getLoader: getLoader,
          getFooter: getFooter,
          getTimerProgressBar: getTimerProgressBar,
          getFocusableElements: getFocusableElements,
          getValidationMessage: getValidationMessage,
          isLoading: isLoading,
          fire: fire,
          mixin: mixin,
          showLoading: showLoading,
          enableLoading: showLoading,
          getTimerLeft: getTimerLeft,
          stopTimer: stopTimer,
          resumeTimer: resumeTimer,
          toggleTimer: toggleTimer,
          increaseTimer: increaseTimer,
          isTimerRunning: isTimerRunning,
          bindClickHandler: bindClickHandler
        });
        var Timer = /*#__PURE__*/function () {
          /**
           * @param {Function} callback
           * @param {number} delay
           */
          function Timer(callback, delay) {
            _classCallCheck(this, Timer);
            this.callback = callback;
            this.remaining = delay;
            this.running = false;
            this.start();
          }
          _createClass(Timer, [{
            key: "start",
            value: function start() {
              if (!this.running) {
                this.running = true;
                this.started = new Date();
                this.id = setTimeout(this.callback, this.remaining);
              }
              return this.remaining;
            }
          }, {
            key: "stop",
            value: function stop() {
              if (this.running) {
                this.running = false;
                clearTimeout(this.id);
                this.remaining -= new Date().getTime() - this.started.getTime();
              }
              return this.remaining;
            }
          }, {
            key: "increase",
            value: function increase(n) {
              var running = this.running;
              if (running) {
                this.stop();
              }
              this.remaining += n;
              if (running) {
                this.start();
              }
              return this.remaining;
            }
          }, {
            key: "getTimerLeft",
            value: function getTimerLeft() {
              if (this.running) {
                this.stop();
                this.start();
              }
              return this.remaining;
            }
          }, {
            key: "isRunning",
            value: function isRunning() {
              return this.running;
            }
          }]);
          return Timer;
        }();
        var swalStringParams = ['swal-title', 'swal-html', 'swal-footer'];
        /**
         * @param {SweetAlertOptions} params
         * @returns {SweetAlertOptions}
         */

        var getTemplateParams = function getTemplateParams(params) {
          /** @type {HTMLTemplateElement} */
          var template = typeof params.template === 'string' ? document.querySelector(params.template) : params.template;
          if (!template) {
            return {};
          }
          /** @type {DocumentFragment} */

          var templateContent = template.content;
          showWarningsForElements(templateContent);
          var result = Object.assign(getSwalParams(templateContent), getSwalButtons(templateContent), getSwalImage(templateContent), getSwalIcon(templateContent), getSwalInput(templateContent), getSwalStringParams(templateContent, swalStringParams));
          return result;
        };
        /**
         * @param {DocumentFragment} templateContent
         * @returns {SweetAlertOptions}
         */

        var getSwalParams = function getSwalParams(templateContent) {
          var result = {};
          /** @type {HTMLElement[]} */

          var swalParams = Array.from(templateContent.querySelectorAll('swal-param'));
          swalParams.forEach(function (param) {
            showWarningsForAttributes(param, ['name', 'value']);
            var paramName = param.getAttribute('name');
            var value = param.getAttribute('value');
            if (typeof defaultParams[paramName] === 'boolean' && value === 'false') {
              result[paramName] = false;
            }
            if (_typeof(defaultParams[paramName]) === 'object') {
              result[paramName] = JSON.parse(value);
            }
          });
          return result;
        };
        /**
         * @param {DocumentFragment} templateContent
         * @returns {SweetAlertOptions}
         */

        var getSwalButtons = function getSwalButtons(templateContent) {
          var result = {};
          /** @type {HTMLElement[]} */

          var swalButtons = Array.from(templateContent.querySelectorAll('swal-button'));
          swalButtons.forEach(function (button) {
            showWarningsForAttributes(button, ['type', 'color', 'aria-label']);
            var type = button.getAttribute('type');
            result["".concat(type, "ButtonText")] = button.innerHTML;
            result["show".concat(capitalizeFirstLetter(type), "Button")] = true;
            if (button.hasAttribute('color')) {
              result["".concat(type, "ButtonColor")] = button.getAttribute('color');
            }
            if (button.hasAttribute('aria-label')) {
              result["".concat(type, "ButtonAriaLabel")] = button.getAttribute('aria-label');
            }
          });
          return result;
        };
        /**
         * @param {DocumentFragment} templateContent
         * @returns {SweetAlertOptions}
         */

        var getSwalImage = function getSwalImage(templateContent) {
          var result = {};
          /** @type {HTMLElement} */

          var image = templateContent.querySelector('swal-image');
          if (image) {
            showWarningsForAttributes(image, ['src', 'width', 'height', 'alt']);
            if (image.hasAttribute('src')) {
              result.imageUrl = image.getAttribute('src');
            }
            if (image.hasAttribute('width')) {
              result.imageWidth = image.getAttribute('width');
            }
            if (image.hasAttribute('height')) {
              result.imageHeight = image.getAttribute('height');
            }
            if (image.hasAttribute('alt')) {
              result.imageAlt = image.getAttribute('alt');
            }
          }
          return result;
        };
        /**
         * @param {DocumentFragment} templateContent
         * @returns {SweetAlertOptions}
         */

        var getSwalIcon = function getSwalIcon(templateContent) {
          var result = {};
          /** @type {HTMLElement} */

          var icon = templateContent.querySelector('swal-icon');
          if (icon) {
            showWarningsForAttributes(icon, ['type', 'color']);
            if (icon.hasAttribute('type')) {
              /** @type {SweetAlertIcon} */
              // @ts-ignore
              result.icon = icon.getAttribute('type');
            }
            if (icon.hasAttribute('color')) {
              result.iconColor = icon.getAttribute('color');
            }
            result.iconHtml = icon.innerHTML;
          }
          return result;
        };
        /**
         * @param {DocumentFragment} templateContent
         * @returns {SweetAlertOptions}
         */

        var getSwalInput = function getSwalInput(templateContent) {
          var result = {};
          /** @type {HTMLElement} */

          var input = templateContent.querySelector('swal-input');
          if (input) {
            showWarningsForAttributes(input, ['type', 'label', 'placeholder', 'value']);
            /** @type {SweetAlertInput} */
            // @ts-ignore

            result.input = input.getAttribute('type') || 'text';
            if (input.hasAttribute('label')) {
              result.inputLabel = input.getAttribute('label');
            }
            if (input.hasAttribute('placeholder')) {
              result.inputPlaceholder = input.getAttribute('placeholder');
            }
            if (input.hasAttribute('value')) {
              result.inputValue = input.getAttribute('value');
            }
          }
          /** @type {HTMLElement[]} */

          var inputOptions = Array.from(templateContent.querySelectorAll('swal-input-option'));
          if (inputOptions.length) {
            result.inputOptions = {};
            inputOptions.forEach(function (option) {
              showWarningsForAttributes(option, ['value']);
              var optionValue = option.getAttribute('value');
              var optionName = option.innerHTML;
              result.inputOptions[optionValue] = optionName;
            });
          }
          return result;
        };
        /**
         * @param {DocumentFragment} templateContent
         * @param {string[]} paramNames
         * @returns {SweetAlertOptions}
         */

        var getSwalStringParams = function getSwalStringParams(templateContent, paramNames) {
          var result = {};
          for (var _i14 in paramNames) {
            var paramName = paramNames[_i14];
            /** @type {HTMLElement} */

            var tag = templateContent.querySelector(paramName);
            if (tag) {
              showWarningsForAttributes(tag, []);
              result[paramName.replace(/^swal-/, '')] = tag.innerHTML.trim();
            }
          }
          return result;
        };
        /**
         * @param {DocumentFragment} templateContent
         */

        var showWarningsForElements = function showWarningsForElements(templateContent) {
          var allowedElements = swalStringParams.concat(['swal-param', 'swal-button', 'swal-image', 'swal-icon', 'swal-input', 'swal-input-option']);
          Array.from(templateContent.children).forEach(function (el) {
            var tagName = el.tagName.toLowerCase();
            if (!allowedElements.includes(tagName)) {
              warn("Unrecognized element <".concat(tagName, ">"));
            }
          });
        };
        /**
         * @param {HTMLElement} el
         * @param {string[]} allowedAttributes
         */

        var showWarningsForAttributes = function showWarningsForAttributes(el, allowedAttributes) {
          Array.from(el.attributes).forEach(function (attribute) {
            if (allowedAttributes.indexOf(attribute.name) === -1) {
              warn(["Unrecognized attribute \"".concat(attribute.name, "\" on <").concat(el.tagName.toLowerCase(), ">."), "".concat(allowedAttributes.length ? "Allowed attributes are: ".concat(allowedAttributes.join(', ')) : 'To set the value, use HTML within the element.')]);
            }
          });
        };
        var SHOW_CLASS_TIMEOUT = 10;
        /**
         * Open popup, add necessary classes and styles, fix scrollbar
         *
         * @param {SweetAlertOptions} params
         */

        var openPopup = function openPopup(params) {
          var container = getContainer();
          var popup = getPopup();
          if (typeof params.willOpen === 'function') {
            params.willOpen(popup);
          }
          var bodyStyles = window.getComputedStyle(document.body);
          var initialBodyOverflow = bodyStyles.overflowY;
          addClasses$1(container, popup, params); // scrolling is 'hidden' until animation is done, after that 'auto'

          setTimeout(function () {
            setScrollingVisibility(container, popup);
          }, SHOW_CLASS_TIMEOUT);
          if (isModal()) {
            fixScrollContainer(container, params.scrollbarPadding, initialBodyOverflow);
            setAriaHidden();
          }
          if (!isToast() && !globalState.previousActiveElement) {
            globalState.previousActiveElement = document.activeElement;
          }
          if (typeof params.didOpen === 'function') {
            setTimeout(function () {
              return params.didOpen(popup);
            });
          }
          removeClass(container, swalClasses['no-transition']);
        };
        /**
         * @param {AnimationEvent} event
         */

        var swalOpenAnimationFinished = function swalOpenAnimationFinished(event) {
          var popup = getPopup();
          if (event.target !== popup) {
            return;
          }
          var container = getContainer();
          popup.removeEventListener(animationEndEvent, swalOpenAnimationFinished);
          container.style.overflowY = 'auto';
        };
        /**
         * @param {HTMLElement} container
         * @param {HTMLElement} popup
         */

        var setScrollingVisibility = function setScrollingVisibility(container, popup) {
          if (animationEndEvent && hasCssAnimation(popup)) {
            container.style.overflowY = 'hidden';
            popup.addEventListener(animationEndEvent, swalOpenAnimationFinished);
          } else {
            container.style.overflowY = 'auto';
          }
        };
        /**
         * @param {HTMLElement} container
         * @param {boolean} scrollbarPadding
         * @param {string} initialBodyOverflow
         */

        var fixScrollContainer = function fixScrollContainer(container, scrollbarPadding, initialBodyOverflow) {
          iOSfix();
          if (scrollbarPadding && initialBodyOverflow !== 'hidden') {
            fixScrollbar();
          } // sweetalert2/issues/1247

          setTimeout(function () {
            container.scrollTop = 0;
          });
        };
        /**
         * @param {HTMLElement} container
         * @param {HTMLElement} popup
         * @param {SweetAlertOptions} params
         */

        var addClasses$1 = function addClasses$1(container, popup, params) {
          addClass(container, params.showClass.backdrop); // this workaround with opacity is needed for https://github.com/sweetalert2/sweetalert2/issues/2059

          popup.style.setProperty('opacity', '0', 'important');
          show(popup, 'grid');
          setTimeout(function () {
            // Animate popup right after showing it
            addClass(popup, params.showClass.popup); // and remove the opacity workaround

            popup.style.removeProperty('opacity');
          }, SHOW_CLASS_TIMEOUT); // 10ms in order to fix #2062

          addClass([document.documentElement, document.body], swalClasses.shown);
          if (params.heightAuto && params.backdrop && !params.toast) {
            addClass([document.documentElement, document.body], swalClasses['height-auto']);
          }
        };
        var defaultInputValidators = {
          /**
           * @param {string} string
           * @param {string} validationMessage
           * @returns {Promise<void | string>}
           */
          email: function email(string, validationMessage) {
            return /^[a-zA-Z0-9.+_-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9-]{2,24}$/.test(string) ? Promise.resolve() : Promise.resolve(validationMessage || 'Invalid email address');
          },
          /**
           * @param {string} string
           * @param {string} validationMessage
           * @returns {Promise<void | string>}
           */
          url: function url(string, validationMessage) {
            // taken from https://stackoverflow.com/a/3809435 with a small change from #1306 and #2013
            return /^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._+~#=]{1,256}\.[a-z]{2,63}\b([-a-zA-Z0-9@:%_+.~#?&/=]*)$/.test(string) ? Promise.resolve() : Promise.resolve(validationMessage || 'Invalid URL');
          }
        };

        /**
         * @param {SweetAlertOptions} params
         */

        function setDefaultInputValidators(params) {
          // Use default `inputValidator` for supported input types if not provided
          if (!params.inputValidator) {
            Object.keys(defaultInputValidators).forEach(function (key) {
              if (params.input === key) {
                params.inputValidator = defaultInputValidators[key];
              }
            });
          }
        }
        /**
         * @param {SweetAlertOptions} params
         */

        function validateCustomTargetElement(params) {
          // Determine if the custom target element is valid
          if (!params.target || typeof params.target === 'string' && !document.querySelector(params.target) || typeof params.target !== 'string' && !params.target.appendChild) {
            warn('Target parameter is not valid, defaulting to "body"');
            params.target = 'body';
          }
        }
        /**
         * Set type, text and actions on popup
         *
         * @param {SweetAlertOptions} params
         */

        function setParameters(params) {
          setDefaultInputValidators(params); // showLoaderOnConfirm && preConfirm

          if (params.showLoaderOnConfirm && !params.preConfirm) {
            warn('showLoaderOnConfirm is set to true, but preConfirm is not defined.\n' + 'showLoaderOnConfirm should be used together with preConfirm, see usage example:\n' + 'https://sweetalert2.github.io/#ajax-request');
          }
          validateCustomTargetElement(params); // Replace newlines with <br> in title

          if (typeof params.title === 'string') {
            params.title = params.title.split('\n').join('<br />');
          }
          init(params);
        }
        var currentInstance;
        var SweetAlert = /*#__PURE__*/function () {
          function SweetAlert() {
            _classCallCheck(this, SweetAlert);
            // Prevent run in Node env
            if (typeof window === 'undefined') {
              return;
            }
            currentInstance = this; // @ts-ignore

            for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
              args[_key] = arguments[_key];
            }
            var outerParams = Object.freeze(this.constructor.argsToParams(args));
            Object.defineProperties(this, {
              params: {
                value: outerParams,
                writable: false,
                enumerable: true,
                configurable: true
              }
            }); // @ts-ignore

            var promise = currentInstance._main(currentInstance.params);
            privateProps.promise.set(this, promise);
          }
          _createClass(SweetAlert, [{
            key: "_main",
            value: function _main(userParams) {
              var mixinParams = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
              showWarningsForParams(Object.assign({}, mixinParams, userParams));
              if (globalState.currentInstance) {
                // @ts-ignore
                globalState.currentInstance._destroy();
                if (isModal()) {
                  unsetAriaHidden();
                }
              }
              globalState.currentInstance = currentInstance;
              var innerParams = prepareParams(userParams, mixinParams);
              setParameters(innerParams);
              Object.freeze(innerParams); // clear the previous timer

              if (globalState.timeout) {
                globalState.timeout.stop();
                delete globalState.timeout;
              } // clear the restore focus timeout

              clearTimeout(globalState.restoreFocusTimeout);
              var domCache = populateDomCache(currentInstance);
              render(currentInstance, innerParams);
              privateProps.innerParams.set(currentInstance, innerParams);
              return swalPromise(currentInstance, domCache, innerParams);
            } // `catch` cannot be the name of a module export, so we define our thenable methods here instead
          }, {
            key: "then",
            value: function then(onFulfilled) {
              var promise = privateProps.promise.get(this);
              return promise.then(onFulfilled);
            }
          }, {
            key: "finally",
            value: function _finally(onFinally) {
              var promise = privateProps.promise.get(this);
              return promise["finally"](onFinally);
            }
          }]);
          return SweetAlert;
        }();
        /**
         * @param {SweetAlert2} instance
         * @param {DomCache} domCache
         * @param {SweetAlertOptions} innerParams
         * @returns {Promise}
         */
        var swalPromise = function swalPromise(instance, domCache, innerParams) {
          return new Promise(function (resolve, reject) {
            // functions to handle all closings/dismissals

            /**
             * @param {DismissReason} dismiss
             */
            var dismissWith = function dismissWith(dismiss) {
              // @ts-ignore
              instance.close({
                isDismissed: true,
                dismiss: dismiss
              });
            };
            privateMethods.swalPromiseResolve.set(instance, resolve);
            privateMethods.swalPromiseReject.set(instance, reject);
            domCache.confirmButton.onclick = function () {
              handleConfirmButtonClick(instance);
            };
            domCache.denyButton.onclick = function () {
              handleDenyButtonClick(instance);
            };
            domCache.cancelButton.onclick = function () {
              handleCancelButtonClick(instance, dismissWith);
            };
            domCache.closeButton.onclick = function () {
              // @ts-ignore
              dismissWith(DismissReason.close);
            };
            handlePopupClick(instance, domCache, dismissWith);
            addKeydownHandler(instance, globalState, innerParams, dismissWith);
            handleInputOptionsAndValue(instance, innerParams);
            openPopup(innerParams);
            setupTimer(globalState, innerParams, dismissWith);
            initFocus(domCache, innerParams); // Scroll container to top on open (#1247, #1946)

            setTimeout(function () {
              domCache.container.scrollTop = 0;
            });
          });
        };
        /**
         * @param {SweetAlertOptions} userParams
         * @param {SweetAlertOptions} mixinParams
         * @returns {SweetAlertOptions}
         */

        var prepareParams = function prepareParams(userParams, mixinParams) {
          var templateParams = getTemplateParams(userParams);
          var params = Object.assign({}, defaultParams, mixinParams, templateParams, userParams); // precedence is described in #2131

          params.showClass = Object.assign({}, defaultParams.showClass, params.showClass);
          params.hideClass = Object.assign({}, defaultParams.hideClass, params.hideClass);
          return params;
        };
        /**
         * @param {SweetAlert2} instance
         * @returns {DomCache}
         */

        var populateDomCache = function populateDomCache(instance) {
          var domCache = {
            popup: getPopup(),
            container: getContainer(),
            actions: getActions(),
            confirmButton: getConfirmButton(),
            denyButton: getDenyButton(),
            cancelButton: getCancelButton(),
            loader: getLoader(),
            closeButton: getCloseButton(),
            validationMessage: getValidationMessage(),
            progressSteps: getProgressSteps()
          };
          privateProps.domCache.set(instance, domCache);
          return domCache;
        };
        /**
         * @param {GlobalState} globalState
         * @param {SweetAlertOptions} innerParams
         * @param {Function} dismissWith
         */

        var setupTimer = function setupTimer(globalState$$1, innerParams, dismissWith) {
          var timerProgressBar = getTimerProgressBar();
          hide(timerProgressBar);
          if (innerParams.timer) {
            globalState$$1.timeout = new Timer(function () {
              dismissWith('timer');
              delete globalState$$1.timeout;
            }, innerParams.timer);
            if (innerParams.timerProgressBar) {
              show(timerProgressBar);
              applyCustomClass(timerProgressBar, innerParams, 'timerProgressBar');
              setTimeout(function () {
                if (globalState$$1.timeout && globalState$$1.timeout.running) {
                  // timer can be already stopped or unset at this point
                  animateTimerProgressBar(innerParams.timer);
                }
              });
            }
          }
        };
        /**
         * @param {DomCache} domCache
         * @param {SweetAlertOptions} innerParams
         */

        var initFocus = function initFocus(domCache, innerParams) {
          if (innerParams.toast) {
            return;
          }
          if (!callIfFunction(innerParams.allowEnterKey)) {
            blurActiveElement();
            return;
          }
          if (!focusButton(domCache, innerParams)) {
            setFocus(innerParams, -1, 1);
          }
        };
        /**
         * @param {DomCache} domCache
         * @param {SweetAlertOptions} innerParams
         * @returns {boolean}
         */

        var focusButton = function focusButton(domCache, innerParams) {
          if (innerParams.focusDeny && isVisible(domCache.denyButton)) {
            domCache.denyButton.focus();
            return true;
          }
          if (innerParams.focusCancel && isVisible(domCache.cancelButton)) {
            domCache.cancelButton.focus();
            return true;
          }
          if (innerParams.focusConfirm && isVisible(domCache.confirmButton)) {
            domCache.confirmButton.focus();
            return true;
          }
          return false;
        };
        var blurActiveElement = function blurActiveElement() {
          if (document.activeElement instanceof HTMLElement && typeof document.activeElement.blur === 'function') {
            document.activeElement.blur();
          }
        }; // This anti-war message will only be shown to Russian users visiting Russian sites

        if (typeof window !== 'undefined' && /^ru\b/.test(navigator.language) && location.host.match(/\.(ru|su|xn--p1ai)$/)) {
          if (Math.random() < 0.1) {
            var noWar = document.createElement('div');
            noWar.className = 'leave-russia-now-and-apply-your-skills-to-the-world';
            var video = getRandomElement([{
              text: "\u0412 \u043D\u0438\u0436\u0435\u043F\u0440\u0438\u0432\u0435\u0434\u0451\u043D\u043D\u043E\u043C \u0432\u0438\u0434\u0435\u043E \u043E\u0431\u044A\u044F\u0441\u043D\u044F\u0435\u0442\u0441\u044F \u043A\u0430\u043A \u043A\u0430\u0436\u0434\u044B\u0439 \u0438\u0437 \u043D\u0430\u0441 \u043C\u043E\u0436\u0435\u0442 \u043F\u043E\u043C\u043E\u0447\u044C \u0432 \u0442\u043E\u043C,\n        <strong>\u0447\u0442\u043E\u0431\u044B \u044D\u0442\u0430 \u0431\u0435\u0441\u0441\u043C\u044B\u0441\u043B\u0435\u043D\u043D\u0430\u044F \u0438 \u0431\u0435\u0441\u0447\u0435\u043B\u043E\u0432\u0435\u0447\u043D\u0430\u044F \u0432\u043E\u0439\u043D\u0430 \u043E\u0441\u0442\u0430\u043D\u043E\u0432\u0438\u043B\u0430\u0441\u044C</strong>:",
              id: '4CfDhaRkw7I'
            }, {
              text: 'Эмпатия - главное <strong>человеческое</strong> чувство. Способность сопереживать. <strong>Способность поставить себя на место другого.</strong>',
              id: 's-GLAIY4DXA'
            }]);
            setInnerHtml(noWar, "\n      <div>\n        \u0415\u0441\u043B\u0438 \u043C\u044B \u043D\u0435 \u043E\u0441\u0442\u0430\u043D\u043E\u0432\u0438\u043C \u0432\u043E\u0439\u043D\u0443, \u043E\u043D\u0430 \u043F\u0440\u0438\u0434\u0435\u0442 \u0432 \u0434\u043E\u043C <strong>\u043A\u0430\u0436\u0434\u043E\u0433\u043E \u0438\u0437 \u043D\u0430\u0441</strong> \u0438 \u0435\u0451 \u043F\u043E\u0441\u043B\u0435\u0434\u0441\u0442\u0432\u0438\u044F \u0431\u0443\u0434\u0443\u0442 <strong>\u0443\u0436\u0430\u0441\u0430\u044E\u0449\u0438\u043C\u0438</strong>.\n      </div>\n      <div>\n        \u041F\u0443\u0442\u0438\u043D\u0441\u043A\u0438\u0439 \u0440\u0435\u0436\u0438\u043C \u0437\u0430 20 \u0441 \u043B\u0438\u0448\u043D\u0438\u043C \u043B\u0435\u0442 \u0441\u0432\u043E\u0435\u0433\u043E \u0441\u0443\u0449\u0435\u0441\u0442\u0432\u043E\u0432\u0430\u043D\u0438\u044F \u0432\u0434\u043E\u043B\u0431\u0438\u043B \u043D\u0430\u043C, \u0447\u0442\u043E \u043C\u044B \u0431\u0435\u0441\u0441\u0438\u043B\u044C\u043D\u044B \u0438 \u043E\u0434\u0438\u043D \u0447\u0435\u043B\u043E\u0432\u0435\u043A \u043D\u0435 \u043C\u043E\u0436\u0435\u0442 \u043D\u0438\u0447\u0435\u0433\u043E \u0441\u0434\u0435\u043B\u0430\u0442\u044C. <strong>\u042D\u0442\u043E \u043D\u0435 \u0442\u0430\u043A!</strong>\n      </div>\n      <div>\n        ".concat(video.text, "\n      </div>\n      <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/").concat(video.id, "\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n      <div>\n        \u041D\u0435\u0442 \u0432\u043E\u0439\u043D\u0435!\n      </div>\n      "));
            var closeButton = document.createElement('button');
            closeButton.innerHTML = '&times;';
            closeButton.onclick = function () {
              return noWar.remove();
            };
            noWar.appendChild(closeButton);
            window.addEventListener('load', function () {
              setTimeout(function () {
                document.body.appendChild(noWar);
              }, 1000);
            });
          }
        } // Assign instance methods from src/instanceMethods/*.js to prototype

        Object.assign(SweetAlert.prototype, instanceMethods); // Assign static methods from src/staticMethods/*.js to constructor

        Object.assign(SweetAlert, staticMethods); // Proxy to instance methods to constructor, for now, for backwards compatibility

        Object.keys(instanceMethods).forEach(function (key) {
          /**
           * @param {...any} args
           * @returns {any}
           */
          SweetAlert[key] = function () {
            if (currentInstance) {
              var _currentInstance;
              return (_currentInstance = currentInstance)[key].apply(_currentInstance, arguments);
            }
          };
        });
        SweetAlert.DismissReason = DismissReason;
        SweetAlert.version = '11.4.33';
        var Swal = SweetAlert; // @ts-ignore

        Swal["default"] = Swal;
        return Swal;
      });
      if (typeof this !== 'undefined' && this.Sweetalert2) {
        this.swal = this.sweetAlert = this.Swal = this.SweetAlert = this.Sweetalert2;
      }

      /***/
    }

    /******/
  };
  /************************************************************************/
  /******/ // The module cache
  /******/
  var __webpack_module_cache__ = {};
  /******/
  /******/ // The require function
  /******/
  function __nested_webpack_require_157471__(moduleId) {
    /******/ // Check if module is in cache
    /******/var cachedModule = __webpack_module_cache__[moduleId];
    /******/
    if (cachedModule !== undefined) {
      /******/return cachedModule.exports;
      /******/
    }
    /******/ // Create a new module (and put it into the cache)
    /******/
    var module = __webpack_module_cache__[moduleId] = {
      /******/ // no module.id needed
      /******/ // no module.loaded needed
      /******/exports: {}
      /******/
    };
    /******/
    /******/ // Execute the module function
    /******/
    __webpack_modules__[moduleId].call(module.exports, module, module.exports, __nested_webpack_require_157471__);
    /******/
    /******/ // Return the exports of the module
    /******/
    return module.exports;
    /******/
  }
  /******/
  /************************************************************************/
  /******/ /* webpack/runtime/compat get default export */
  /******/
  !function () {
    /******/ // getDefaultExport function for compatibility with non-harmony modules
    /******/__nested_webpack_require_157471__.n = function (module) {
      /******/var getter = module && module.__esModule ? /******/function () {
        return module['default'];
      } : /******/function () {
        return module;
      };
      /******/
      __nested_webpack_require_157471__.d(getter, {
        a: getter
      });
      /******/
      return getter;
      /******/
    };
    /******/
  }();
  /******/
  /******/ /* webpack/runtime/define property getters */
  /******/
  !function () {
    /******/ // define getter functions for harmony exports
    /******/__nested_webpack_require_157471__.d = function (exports, definition) {
      /******/for (var key in definition) {
        /******/if (__nested_webpack_require_157471__.o(definition, key) && !__nested_webpack_require_157471__.o(exports, key)) {
          /******/Object.defineProperty(exports, key, {
            enumerable: true,
            get: definition[key]
          });
          /******/
        }
        /******/
      }
      /******/
    };
    /******/
  }();
  /******/
  /******/ /* webpack/runtime/hasOwnProperty shorthand */
  /******/
  !function () {
    /******/__nested_webpack_require_157471__.o = function (obj, prop) {
      return Object.prototype.hasOwnProperty.call(obj, prop);
    };
    /******/
  }();
  /******/
  /******/ /* webpack/runtime/make namespace object */
  /******/
  !function () {
    /******/ // define __esModule on exports
    /******/__nested_webpack_require_157471__.r = function (exports) {
      /******/if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {
        /******/Object.defineProperty(exports, Symbol.toStringTag, {
          value: 'Module'
        });
        /******/
      }
      /******/
      Object.defineProperty(exports, '__esModule', {
        value: true
      });
      /******/
    };
    /******/
  }();
  /******/
  /************************************************************************/
  var __webpack_exports__ = {};
  // This entry need to be wrapped in an IIFE because it need to be in strict mode.
  !function () {
    "use strict";

    /*!*****************************************************************!*\
      !*** ./resources/assets/vendor/libs/sweetalert2/sweetalert2.js ***!
      \*****************************************************************/
    __nested_webpack_require_157471__.r(__webpack_exports__);
    /* harmony export */
    __nested_webpack_require_157471__.d(__webpack_exports__, {
      /* harmony export */"Swal": function Swal() {
        return (/* binding */_Swal
        );
      }
      /* harmony export */
    });
    /* harmony import */
    var sweetalert2_dist_sweetalert2__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_157471__( /*! sweetalert2/dist/sweetalert2 */"./node_modules/sweetalert2/dist/sweetalert2.js");
    /* harmony import */
    var sweetalert2_dist_sweetalert2__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__nested_webpack_require_157471__.n(sweetalert2_dist_sweetalert2__WEBPACK_IMPORTED_MODULE_0__);
    var _Swal = sweetalert2_dist_sweetalert2__WEBPACK_IMPORTED_MODULE_0__.mixin({
      buttonsStyling: false,
      customClass: {
        confirmButton: 'btn btn-primary',
        cancelButton: 'btn btn-label-danger',
        denyButton: 'btn btn-label-secondary'
      }
    });
  }();
  var __webpack_export_target__ = window;
  for (var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
  if (__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", {
    value: true
  });
  /******/
})();
var __webpack_export_target__ = window;
for(var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
if(__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", { value: true });
/******/ })()
;