/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!*******************************************************!*\
  !*** ./resources/assets/vendor/libs/swiper/swiper.js ***!
  \*******************************************************/
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _wrapNativeSuper(Class) { var _cache = typeof Map === "function" ? new Map() : undefined; _wrapNativeSuper = function _wrapNativeSuper(Class) { if (Class === null || !_isNativeFunction(Class)) return Class; if (typeof Class !== "function") { throw new TypeError("Super expression must either be null or a function"); } if (typeof _cache !== "undefined") { if (_cache.has(Class)) return _cache.get(Class); _cache.set(Class, Wrapper); } function Wrapper() { return _construct(Class, arguments, _getPrototypeOf(this).constructor); } Wrapper.prototype = Object.create(Class.prototype, { constructor: { value: Wrapper, enumerable: false, writable: true, configurable: true } }); return _setPrototypeOf(Wrapper, Class); }; return _wrapNativeSuper(Class); }
function _construct(Parent, args, Class) { if (_isNativeReflectConstruct()) { _construct = Reflect.construct.bind(); } else { _construct = function _construct(Parent, args, Class) { var a = [null]; a.push.apply(a, args); var Constructor = Function.bind.apply(Parent, a); var instance = new Constructor(); if (Class) _setPrototypeOf(instance, Class.prototype); return instance; }; } return _construct.apply(null, arguments); }
function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); return true; } catch (e) { return false; } }
function _isNativeFunction(fn) { return Function.toString.call(fn).indexOf("[native code]") !== -1; }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
/******/(function () {
  // webpackBootstrap
  /******/
  "use strict";

  /******/
  var __webpack_modules__ = {
    /***/"./node_modules/dom7/dom7.esm.js":
    /*!***************************************!*\
      !*** ./node_modules/dom7/dom7.esm.js ***!
      \***************************************/
    /***/
    function node_modulesDom7Dom7EsmJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_6829__) {
      __nested_webpack_require_6829__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_6829__.d(__webpack_exports__, {
        /* harmony export */"$": function $() {
          return (/* binding */_$
          );
        },
        /* harmony export */"add": function add() {
          return (/* binding */_add
          );
        },
        /* harmony export */"addClass": function addClass() {
          return (/* binding */_addClass
          );
        },
        /* harmony export */"animate": function animate() {
          return (/* binding */_animate
          );
        },
        /* harmony export */"animationEnd": function animationEnd() {
          return (/* binding */_animationEnd
          );
        },
        /* harmony export */"append": function append() {
          return (/* binding */_append
          );
        },
        /* harmony export */"appendTo": function appendTo() {
          return (/* binding */_appendTo
          );
        },
        /* harmony export */"attr": function attr() {
          return (/* binding */_attr
          );
        },
        /* harmony export */"blur": function blur() {
          return (/* binding */_blur
          );
        },
        /* harmony export */"change": function change() {
          return (/* binding */_change
          );
        },
        /* harmony export */"children": function children() {
          return (/* binding */_children
          );
        },
        /* harmony export */"click": function click() {
          return (/* binding */_click
          );
        },
        /* harmony export */"closest": function closest() {
          return (/* binding */_closest
          );
        },
        /* harmony export */"css": function css() {
          return (/* binding */_css
          );
        },
        /* harmony export */"data": function data() {
          return (/* binding */_data
          );
        },
        /* harmony export */"dataset": function dataset() {
          return (/* binding */_dataset
          );
        },
        /* harmony export */"detach": function detach() {
          return (/* binding */_detach
          );
        },
        /* harmony export */"each": function each() {
          return (/* binding */_each
          );
        },
        /* harmony export */"empty": function empty() {
          return (/* binding */_empty
          );
        },
        /* harmony export */"eq": function eq() {
          return (/* binding */_eq
          );
        },
        /* harmony export */"filter": function filter() {
          return (/* binding */_filter
          );
        },
        /* harmony export */"find": function find() {
          return (/* binding */_find
          );
        },
        /* harmony export */"focus": function focus() {
          return (/* binding */_focus
          );
        },
        /* harmony export */"focusin": function focusin() {
          return (/* binding */_focusin
          );
        },
        /* harmony export */"focusout": function focusout() {
          return (/* binding */_focusout
          );
        },
        /* harmony export */"hasClass": function hasClass() {
          return (/* binding */_hasClass
          );
        },
        /* harmony export */"height": function height() {
          return (/* binding */_height
          );
        },
        /* harmony export */"hide": function hide() {
          return (/* binding */_hide
          );
        },
        /* harmony export */"html": function html() {
          return (/* binding */_html
          );
        },
        /* harmony export */"index": function index() {
          return (/* binding */_index
          );
        },
        /* harmony export */"insertAfter": function insertAfter() {
          return (/* binding */_insertAfter
          );
        },
        /* harmony export */"insertBefore": function insertBefore() {
          return (/* binding */_insertBefore
          );
        },
        /* harmony export */"is": function is() {
          return (/* binding */_is
          );
        },
        /* harmony export */"keydown": function keydown() {
          return (/* binding */_keydown
          );
        },
        /* harmony export */"keypress": function keypress() {
          return (/* binding */_keypress
          );
        },
        /* harmony export */"keyup": function keyup() {
          return (/* binding */_keyup
          );
        },
        /* harmony export */"mousedown": function mousedown() {
          return (/* binding */_mousedown
          );
        },
        /* harmony export */"mouseenter": function mouseenter() {
          return (/* binding */_mouseenter
          );
        },
        /* harmony export */"mouseleave": function mouseleave() {
          return (/* binding */_mouseleave
          );
        },
        /* harmony export */"mousemove": function mousemove() {
          return (/* binding */_mousemove
          );
        },
        /* harmony export */"mouseout": function mouseout() {
          return (/* binding */_mouseout
          );
        },
        /* harmony export */"mouseover": function mouseover() {
          return (/* binding */_mouseover
          );
        },
        /* harmony export */"mouseup": function mouseup() {
          return (/* binding */_mouseup
          );
        },
        /* harmony export */"next": function next() {
          return (/* binding */_next
          );
        },
        /* harmony export */"nextAll": function nextAll() {
          return (/* binding */_nextAll
          );
        },
        /* harmony export */"off": function off() {
          return (/* binding */_off
          );
        },
        /* harmony export */"offset": function offset() {
          return (/* binding */_offset
          );
        },
        /* harmony export */"on": function on() {
          return (/* binding */_on
          );
        },
        /* harmony export */"once": function once() {
          return (/* binding */_once
          );
        },
        /* harmony export */"outerHeight": function outerHeight() {
          return (/* binding */_outerHeight
          );
        },
        /* harmony export */"outerWidth": function outerWidth() {
          return (/* binding */_outerWidth
          );
        },
        /* harmony export */"parent": function parent() {
          return (/* binding */_parent
          );
        },
        /* harmony export */"parents": function parents() {
          return (/* binding */_parents
          );
        },
        /* harmony export */"prepend": function prepend() {
          return (/* binding */_prepend
          );
        },
        /* harmony export */"prependTo": function prependTo() {
          return (/* binding */_prependTo
          );
        },
        /* harmony export */"prev": function prev() {
          return (/* binding */_prev
          );
        },
        /* harmony export */"prevAll": function prevAll() {
          return (/* binding */_prevAll
          );
        },
        /* harmony export */"prop": function prop() {
          return (/* binding */_prop
          );
        },
        /* harmony export */"remove": function remove() {
          return (/* binding */_remove
          );
        },
        /* harmony export */"removeAttr": function removeAttr() {
          return (/* binding */_removeAttr
          );
        },
        /* harmony export */"removeClass": function removeClass() {
          return (/* binding */_removeClass
          );
        },
        /* harmony export */"removeData": function removeData() {
          return (/* binding */_removeData
          );
        },
        /* harmony export */"resize": function resize() {
          return (/* binding */_resize
          );
        },
        /* harmony export */"scroll": function scroll() {
          return (/* binding */_scroll
          );
        },
        /* harmony export */"scrollLeft": function scrollLeft() {
          return (/* binding */_scrollLeft
          );
        },
        /* harmony export */"scrollTo": function scrollTo() {
          return (/* binding */_scrollTo
          );
        },
        /* harmony export */"scrollTop": function scrollTop() {
          return (/* binding */_scrollTop
          );
        },
        /* harmony export */"show": function show() {
          return (/* binding */_show
          );
        },
        /* harmony export */"siblings": function siblings() {
          return (/* binding */_siblings
          );
        },
        /* harmony export */"stop": function stop() {
          return (/* binding */_stop
          );
        },
        /* harmony export */"styles": function styles() {
          return (/* binding */_styles
          );
        },
        /* harmony export */"submit": function submit() {
          return (/* binding */_submit
          );
        },
        /* harmony export */"text": function text() {
          return (/* binding */_text
          );
        },
        /* harmony export */"toggleClass": function toggleClass() {
          return (/* binding */_toggleClass
          );
        },
        /* harmony export */"touchend": function touchend() {
          return (/* binding */_touchend
          );
        },
        /* harmony export */"touchmove": function touchmove() {
          return (/* binding */_touchmove
          );
        },
        /* harmony export */"touchstart": function touchstart() {
          return (/* binding */_touchstart
          );
        },
        /* harmony export */"transform": function transform() {
          return (/* binding */_transform
          );
        },
        /* harmony export */"transition": function transition() {
          return (/* binding */_transition
          );
        },
        /* harmony export */"transitionEnd": function transitionEnd() {
          return (/* binding */_transitionEnd
          );
        },
        /* harmony export */"trigger": function trigger() {
          return (/* binding */_trigger
          );
        },
        /* harmony export */"val": function val() {
          return (/* binding */_val
          );
        },
        /* harmony export */"value": function value() {
          return (/* binding */_value
          );
        },
        /* harmony export */"width": function width() {
          return (/* binding */_width
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_6829__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /**
       * Dom7 4.0.4
       * Minimalistic JavaScript library for DOM manipulation, with a jQuery-compatible API
       * https://framework7.io/docs/dom7.html
       *
       * Copyright 2022, Vladimir Kharlampidi
       *
       * Licensed under MIT
       *
       * Released on: January 11, 2022
       */

      /* eslint-disable no-proto */
      function makeReactive(obj) {
        var proto = obj.__proto__;
        Object.defineProperty(obj, '__proto__', {
          get: function get() {
            return proto;
          },
          set: function set(value) {
            proto.__proto__ = value;
          }
        });
      }
      var Dom7 = /*#__PURE__*/function (_Array) {
        _inherits(Dom7, _Array);
        var _super = _createSuper(Dom7);
        function Dom7(items) {
          var _this;
          _classCallCheck(this, Dom7);
          if (typeof items === 'number') {
            _this = _super.call(this, items);
          } else {
            _this = _super.call.apply(_super, [this].concat(_toConsumableArray(items || [])));
            makeReactive(_assertThisInitialized(_this));
          }
          return _possibleConstructorReturn(_this);
        }
        return _createClass(Dom7);
      }( /*#__PURE__*/_wrapNativeSuper(Array));
      function arrayFlat() {
        var arr = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : [];
        var res = [];
        arr.forEach(function (el) {
          if (Array.isArray(el)) {
            res.push.apply(res, _toConsumableArray(arrayFlat(el)));
          } else {
            res.push(el);
          }
        });
        return res;
      }
      function arrayFilter(arr, callback) {
        return Array.prototype.filter.call(arr, callback);
      }
      function arrayUnique(arr) {
        var uniqueArray = [];
        for (var _i = 0; _i < arr.length; _i += 1) {
          if (uniqueArray.indexOf(arr[_i]) === -1) uniqueArray.push(arr[_i]);
        }
        return uniqueArray;
      }
      function toCamelCase(string) {
        return string.toLowerCase().replace(/-(.)/g, function (match, group) {
          return group.toUpperCase();
        });
      }

      // eslint-disable-next-line

      function qsa(selector, context) {
        if (typeof selector !== 'string') {
          return [selector];
        }
        var a = [];
        var res = context.querySelectorAll(selector);
        for (var _i2 = 0; _i2 < res.length; _i2 += 1) {
          a.push(res[_i2]);
        }
        return a;
      }
      function _$(selector, context) {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var arr = [];
        if (!context && selector instanceof Dom7) {
          return selector;
        }
        if (!selector) {
          return new Dom7(arr);
        }
        if (typeof selector === 'string') {
          var html = selector.trim();
          if (html.indexOf('<') >= 0 && html.indexOf('>') >= 0) {
            var toCreate = 'div';
            if (html.indexOf('<li') === 0) toCreate = 'ul';
            if (html.indexOf('<tr') === 0) toCreate = 'tbody';
            if (html.indexOf('<td') === 0 || html.indexOf('<th') === 0) toCreate = 'tr';
            if (html.indexOf('<tbody') === 0) toCreate = 'table';
            if (html.indexOf('<option') === 0) toCreate = 'select';
            var tempParent = document.createElement(toCreate);
            tempParent.innerHTML = html;
            for (var _i3 = 0; _i3 < tempParent.childNodes.length; _i3 += 1) {
              arr.push(tempParent.childNodes[_i3]);
            }
          } else {
            arr = qsa(selector.trim(), context || document);
          } // arr = qsa(selector, document);
        } else if (selector.nodeType || selector === window || selector === document) {
          arr.push(selector);
        } else if (Array.isArray(selector)) {
          if (selector instanceof Dom7) return selector;
          arr = selector;
        }
        return new Dom7(arrayUnique(arr));
      }
      _$.fn = Dom7.prototype;

      // eslint-disable-next-line

      function _addClass() {
        for (var _len = arguments.length, classes = new Array(_len), _key = 0; _key < _len; _key++) {
          classes[_key] = arguments[_key];
        }
        var classNames = arrayFlat(classes.map(function (c) {
          return c.split(' ');
        }));
        this.forEach(function (el) {
          var _el$classList;
          (_el$classList = el.classList).add.apply(_el$classList, _toConsumableArray(classNames));
        });
        return this;
      }
      function _removeClass() {
        for (var _len2 = arguments.length, classes = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
          classes[_key2] = arguments[_key2];
        }
        var classNames = arrayFlat(classes.map(function (c) {
          return c.split(' ');
        }));
        this.forEach(function (el) {
          var _el$classList2;
          (_el$classList2 = el.classList).remove.apply(_el$classList2, _toConsumableArray(classNames));
        });
        return this;
      }
      function _toggleClass() {
        for (var _len3 = arguments.length, classes = new Array(_len3), _key3 = 0; _key3 < _len3; _key3++) {
          classes[_key3] = arguments[_key3];
        }
        var classNames = arrayFlat(classes.map(function (c) {
          return c.split(' ');
        }));
        this.forEach(function (el) {
          classNames.forEach(function (className) {
            el.classList.toggle(className);
          });
        });
      }
      function _hasClass() {
        for (var _len4 = arguments.length, classes = new Array(_len4), _key4 = 0; _key4 < _len4; _key4++) {
          classes[_key4] = arguments[_key4];
        }
        var classNames = arrayFlat(classes.map(function (c) {
          return c.split(' ');
        }));
        return arrayFilter(this, function (el) {
          return classNames.filter(function (className) {
            return el.classList.contains(className);
          }).length > 0;
        }).length > 0;
      }
      function _attr(attrs, value) {
        if (arguments.length === 1 && typeof attrs === 'string') {
          // Get attr
          if (this[0]) return this[0].getAttribute(attrs);
          return undefined;
        } // Set attrs

        for (var _i4 = 0; _i4 < this.length; _i4 += 1) {
          if (arguments.length === 2) {
            // String
            this[_i4].setAttribute(attrs, value);
          } else {
            // Object
            for (var attrName in attrs) {
              this[_i4][attrName] = attrs[attrName];
              this[_i4].setAttribute(attrName, attrs[attrName]);
            }
          }
        }
        return this;
      }
      function _removeAttr(attr) {
        for (var _i5 = 0; _i5 < this.length; _i5 += 1) {
          this[_i5].removeAttribute(attr);
        }
        return this;
      }
      function _prop(props, value) {
        if (arguments.length === 1 && typeof props === 'string') {
          // Get prop
          if (this[0]) return this[0][props];
        } else {
          // Set props
          for (var _i6 = 0; _i6 < this.length; _i6 += 1) {
            if (arguments.length === 2) {
              // String
              this[_i6][props] = value;
            } else {
              // Object
              for (var propName in props) {
                this[_i6][propName] = props[propName];
              }
            }
          }
          return this;
        }
        return this;
      }
      function _data(key, value) {
        var el;
        if (typeof value === 'undefined') {
          el = this[0];
          if (!el) return undefined; // Get value

          if (el.dom7ElementDataStorage && key in el.dom7ElementDataStorage) {
            return el.dom7ElementDataStorage[key];
          }
          var dataKey = el.getAttribute("data-".concat(key));
          if (dataKey) {
            return dataKey;
          }
          return undefined;
        } // Set value

        for (var _i7 = 0; _i7 < this.length; _i7 += 1) {
          el = this[_i7];
          if (!el.dom7ElementDataStorage) el.dom7ElementDataStorage = {};
          el.dom7ElementDataStorage[key] = value;
        }
        return this;
      }
      function _removeData(key) {
        for (var _i8 = 0; _i8 < this.length; _i8 += 1) {
          var el = this[_i8];
          if (el.dom7ElementDataStorage && el.dom7ElementDataStorage[key]) {
            el.dom7ElementDataStorage[key] = null;
            delete el.dom7ElementDataStorage[key];
          }
        }
      }
      function _dataset() {
        var el = this[0];
        if (!el) return undefined;
        var dataset = {}; // eslint-disable-line

        if (el.dataset) {
          for (var dataKey in el.dataset) {
            dataset[dataKey] = el.dataset[dataKey];
          }
        } else {
          for (var _i9 = 0; _i9 < el.attributes.length; _i9 += 1) {
            var attr = el.attributes[_i9];
            if (attr.name.indexOf('data-') >= 0) {
              dataset[toCamelCase(attr.name.split('data-')[1])] = attr.value;
            }
          }
        }
        for (var key in dataset) {
          if (dataset[key] === 'false') dataset[key] = false;else if (dataset[key] === 'true') dataset[key] = true;else if (parseFloat(dataset[key]) === dataset[key] * 1) dataset[key] *= 1;
        }
        return dataset;
      }
      function _val(value) {
        if (typeof value === 'undefined') {
          // get value
          var el = this[0];
          if (!el) return undefined;
          if (el.multiple && el.nodeName.toLowerCase() === 'select') {
            var values = [];
            for (var _i10 = 0; _i10 < el.selectedOptions.length; _i10 += 1) {
              values.push(el.selectedOptions[_i10].value);
            }
            return values;
          }
          return el.value;
        } // set value

        for (var _i11 = 0; _i11 < this.length; _i11 += 1) {
          var _el = this[_i11];
          if (Array.isArray(value) && _el.multiple && _el.nodeName.toLowerCase() === 'select') {
            for (var j = 0; j < _el.options.length; j += 1) {
              _el.options[j].selected = value.indexOf(_el.options[j].value) >= 0;
            }
          } else {
            _el.value = value;
          }
        }
        return this;
      }
      function _value(value) {
        return this.val(value);
      }
      function _transform(transform) {
        for (var _i12 = 0; _i12 < this.length; _i12 += 1) {
          this[_i12].style.transform = transform;
        }
        return this;
      }
      function _transition(duration) {
        for (var _i13 = 0; _i13 < this.length; _i13 += 1) {
          this[_i13].style.transitionDuration = typeof duration !== 'string' ? "".concat(duration, "ms") : duration;
        }
        return this;
      }
      function _on() {
        for (var _len5 = arguments.length, args = new Array(_len5), _key5 = 0; _key5 < _len5; _key5++) {
          args[_key5] = arguments[_key5];
        }
        var eventType = args[0],
          targetSelector = args[1],
          listener = args[2],
          capture = args[3];
        if (typeof args[1] === 'function') {
          eventType = args[0];
          listener = args[1];
          capture = args[2];
          targetSelector = undefined;
        }
        if (!capture) capture = false;
        function handleLiveEvent(e) {
          var target = e.target;
          if (!target) return;
          var eventData = e.target.dom7EventData || [];
          if (eventData.indexOf(e) < 0) {
            eventData.unshift(e);
          }
          if (_$(target).is(targetSelector)) listener.apply(target, eventData);else {
            var parents = _$(target).parents(); // eslint-disable-line

            for (var k = 0; k < parents.length; k += 1) {
              if (_$(parents[k]).is(targetSelector)) listener.apply(parents[k], eventData);
            }
          }
        }
        function handleEvent(e) {
          var eventData = e && e.target ? e.target.dom7EventData || [] : [];
          if (eventData.indexOf(e) < 0) {
            eventData.unshift(e);
          }
          listener.apply(this, eventData);
        }
        var events = eventType.split(' ');
        var j;
        for (var _i14 = 0; _i14 < this.length; _i14 += 1) {
          var el = this[_i14];
          if (!targetSelector) {
            for (j = 0; j < events.length; j += 1) {
              var _event = events[j];
              if (!el.dom7Listeners) el.dom7Listeners = {};
              if (!el.dom7Listeners[_event]) el.dom7Listeners[_event] = [];
              el.dom7Listeners[_event].push({
                listener: listener,
                proxyListener: handleEvent
              });
              el.addEventListener(_event, handleEvent, capture);
            }
          } else {
            // Live events
            for (j = 0; j < events.length; j += 1) {
              var _event2 = events[j];
              if (!el.dom7LiveListeners) el.dom7LiveListeners = {};
              if (!el.dom7LiveListeners[_event2]) el.dom7LiveListeners[_event2] = [];
              el.dom7LiveListeners[_event2].push({
                listener: listener,
                proxyListener: handleLiveEvent
              });
              el.addEventListener(_event2, handleLiveEvent, capture);
            }
          }
        }
        return this;
      }
      function _off() {
        for (var _len6 = arguments.length, args = new Array(_len6), _key6 = 0; _key6 < _len6; _key6++) {
          args[_key6] = arguments[_key6];
        }
        var eventType = args[0],
          targetSelector = args[1],
          listener = args[2],
          capture = args[3];
        if (typeof args[1] === 'function') {
          eventType = args[0];
          listener = args[1];
          capture = args[2];
          targetSelector = undefined;
        }
        if (!capture) capture = false;
        var events = eventType.split(' ');
        for (var _i15 = 0; _i15 < events.length; _i15 += 1) {
          var _event3 = events[_i15];
          for (var j = 0; j < this.length; j += 1) {
            var el = this[j];
            var handlers = void 0;
            if (!targetSelector && el.dom7Listeners) {
              handlers = el.dom7Listeners[_event3];
            } else if (targetSelector && el.dom7LiveListeners) {
              handlers = el.dom7LiveListeners[_event3];
            }
            if (handlers && handlers.length) {
              for (var k = handlers.length - 1; k >= 0; k -= 1) {
                var handler = handlers[k];
                if (listener && handler.listener === listener) {
                  el.removeEventListener(_event3, handler.proxyListener, capture);
                  handlers.splice(k, 1);
                } else if (listener && handler.listener && handler.listener.dom7proxy && handler.listener.dom7proxy === listener) {
                  el.removeEventListener(_event3, handler.proxyListener, capture);
                  handlers.splice(k, 1);
                } else if (!listener) {
                  el.removeEventListener(_event3, handler.proxyListener, capture);
                  handlers.splice(k, 1);
                }
              }
            }
          }
        }
        return this;
      }
      function _once() {
        var dom = this;
        for (var _len7 = arguments.length, args = new Array(_len7), _key7 = 0; _key7 < _len7; _key7++) {
          args[_key7] = arguments[_key7];
        }
        var eventName = args[0],
          targetSelector = args[1],
          listener = args[2],
          capture = args[3];
        if (typeof args[1] === 'function') {
          eventName = args[0];
          listener = args[1];
          capture = args[2];
          targetSelector = undefined;
        }
        function onceHandler() {
          for (var _len8 = arguments.length, eventArgs = new Array(_len8), _key8 = 0; _key8 < _len8; _key8++) {
            eventArgs[_key8] = arguments[_key8];
          }
          listener.apply(this, eventArgs);
          dom.off(eventName, targetSelector, onceHandler, capture);
          if (onceHandler.dom7proxy) {
            delete onceHandler.dom7proxy;
          }
        }
        onceHandler.dom7proxy = listener;
        return dom.on(eventName, targetSelector, onceHandler, capture);
      }
      function _trigger() {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        for (var _len9 = arguments.length, args = new Array(_len9), _key9 = 0; _key9 < _len9; _key9++) {
          args[_key9] = arguments[_key9];
        }
        var events = args[0].split(' ');
        var eventData = args[1];
        for (var _i16 = 0; _i16 < events.length; _i16 += 1) {
          var _event4 = events[_i16];
          for (var j = 0; j < this.length; j += 1) {
            var el = this[j];
            if (window.CustomEvent) {
              var evt = new window.CustomEvent(_event4, {
                detail: eventData,
                bubbles: true,
                cancelable: true
              });
              el.dom7EventData = args.filter(function (data, dataIndex) {
                return dataIndex > 0;
              });
              el.dispatchEvent(evt);
              el.dom7EventData = [];
              delete el.dom7EventData;
            }
          }
        }
        return this;
      }
      function _transitionEnd(callback) {
        var dom = this;
        function fireCallBack(e) {
          if (e.target !== this) return;
          callback.call(this, e);
          dom.off('transitionend', fireCallBack);
        }
        if (callback) {
          dom.on('transitionend', fireCallBack);
        }
        return this;
      }
      function _animationEnd(callback) {
        var dom = this;
        function fireCallBack(e) {
          if (e.target !== this) return;
          callback.call(this, e);
          dom.off('animationend', fireCallBack);
        }
        if (callback) {
          dom.on('animationend', fireCallBack);
        }
        return this;
      }
      function _width() {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        if (this[0] === window) {
          return window.innerWidth;
        }
        if (this.length > 0) {
          return parseFloat(this.css('width'));
        }
        return null;
      }
      function _outerWidth(includeMargins) {
        if (this.length > 0) {
          if (includeMargins) {
            var styles = this.styles();
            return this[0].offsetWidth + parseFloat(styles.getPropertyValue('margin-right')) + parseFloat(styles.getPropertyValue('margin-left'));
          }
          return this[0].offsetWidth;
        }
        return null;
      }
      function _height() {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        if (this[0] === window) {
          return window.innerHeight;
        }
        if (this.length > 0) {
          return parseFloat(this.css('height'));
        }
        return null;
      }
      function _outerHeight(includeMargins) {
        if (this.length > 0) {
          if (includeMargins) {
            var styles = this.styles();
            return this[0].offsetHeight + parseFloat(styles.getPropertyValue('margin-top')) + parseFloat(styles.getPropertyValue('margin-bottom'));
          }
          return this[0].offsetHeight;
        }
        return null;
      }
      function _offset() {
        if (this.length > 0) {
          var _window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
          var _document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
          var el = this[0];
          var box = el.getBoundingClientRect();
          var body = _document.body;
          var clientTop = el.clientTop || body.clientTop || 0;
          var clientLeft = el.clientLeft || body.clientLeft || 0;
          var scrollTop = el === _window ? _window.scrollY : el.scrollTop;
          var scrollLeft = el === _window ? _window.scrollX : el.scrollLeft;
          return {
            top: box.top + scrollTop - clientTop,
            left: box.left + scrollLeft - clientLeft
          };
        }
        return null;
      }
      function _hide() {
        for (var _i17 = 0; _i17 < this.length; _i17 += 1) {
          this[_i17].style.display = 'none';
        }
        return this;
      }
      function _show() {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        for (var _i18 = 0; _i18 < this.length; _i18 += 1) {
          var el = this[_i18];
          if (el.style.display === 'none') {
            el.style.display = '';
          }
          if (window.getComputedStyle(el, null).getPropertyValue('display') === 'none') {
            // Still not visible
            el.style.display = 'block';
          }
        }
        return this;
      }
      function _styles() {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        if (this[0]) return window.getComputedStyle(this[0], null);
        return {};
      }
      function _css(props, value) {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var i;
        if (arguments.length === 1) {
          if (typeof props === 'string') {
            // .css('width')
            if (this[0]) return window.getComputedStyle(this[0], null).getPropertyValue(props);
          } else {
            // .css({ width: '100px' })
            for (i = 0; i < this.length; i += 1) {
              for (var prop in props) {
                this[i].style[prop] = props[prop];
              }
            }
            return this;
          }
        }
        if (arguments.length === 2 && typeof props === 'string') {
          // .css('width', '100px')
          for (i = 0; i < this.length; i += 1) {
            this[i].style[props] = value;
          }
          return this;
        }
        return this;
      }
      function _each(callback) {
        if (!callback) return this;
        this.forEach(function (el, index) {
          callback.apply(el, [el, index]);
        });
        return this;
      }
      function _filter(callback) {
        var result = arrayFilter(this, callback);
        return _$(result);
      }
      function _html(html) {
        if (typeof html === 'undefined') {
          return this[0] ? this[0].innerHTML : null;
        }
        for (var _i19 = 0; _i19 < this.length; _i19 += 1) {
          this[_i19].innerHTML = html;
        }
        return this;
      }
      function _text(text) {
        if (typeof text === 'undefined') {
          return this[0] ? this[0].textContent.trim() : null;
        }
        for (var _i20 = 0; _i20 < this.length; _i20 += 1) {
          this[_i20].textContent = text;
        }
        return this;
      }
      function _is(selector) {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var el = this[0];
        var compareWith;
        var i;
        if (!el || typeof selector === 'undefined') return false;
        if (typeof selector === 'string') {
          if (el.matches) return el.matches(selector);
          if (el.webkitMatchesSelector) return el.webkitMatchesSelector(selector);
          if (el.msMatchesSelector) return el.msMatchesSelector(selector);
          compareWith = _$(selector);
          for (i = 0; i < compareWith.length; i += 1) {
            if (compareWith[i] === el) return true;
          }
          return false;
        }
        if (selector === document) {
          return el === document;
        }
        if (selector === window) {
          return el === window;
        }
        if (selector.nodeType || selector instanceof Dom7) {
          compareWith = selector.nodeType ? [selector] : selector;
          for (i = 0; i < compareWith.length; i += 1) {
            if (compareWith[i] === el) return true;
          }
          return false;
        }
        return false;
      }
      function _index() {
        var child = this[0];
        var i;
        if (child) {
          i = 0; // eslint-disable-next-line

          while ((child = child.previousSibling) !== null) {
            if (child.nodeType === 1) i += 1;
          }
          return i;
        }
        return undefined;
      }
      function _eq(index) {
        if (typeof index === 'undefined') return this;
        var length = this.length;
        if (index > length - 1) {
          return _$([]);
        }
        if (index < 0) {
          var returnIndex = length + index;
          if (returnIndex < 0) return _$([]);
          return _$([this[returnIndex]]);
        }
        return _$([this[index]]);
      }
      function _append() {
        var newChild;
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        for (var k = 0; k < arguments.length; k += 1) {
          newChild = k < 0 || arguments.length <= k ? undefined : arguments[k];
          for (var _i21 = 0; _i21 < this.length; _i21 += 1) {
            if (typeof newChild === 'string') {
              var tempDiv = document.createElement('div');
              tempDiv.innerHTML = newChild;
              while (tempDiv.firstChild) {
                this[_i21].appendChild(tempDiv.firstChild);
              }
            } else if (newChild instanceof Dom7) {
              for (var j = 0; j < newChild.length; j += 1) {
                this[_i21].appendChild(newChild[j]);
              }
            } else {
              this[_i21].appendChild(newChild);
            }
          }
        }
        return this;
      }
      function _appendTo(parent) {
        _$(parent).append(this);
        return this;
      }
      function _prepend(newChild) {
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var i;
        var j;
        for (i = 0; i < this.length; i += 1) {
          if (typeof newChild === 'string') {
            var tempDiv = document.createElement('div');
            tempDiv.innerHTML = newChild;
            for (j = tempDiv.childNodes.length - 1; j >= 0; j -= 1) {
              this[i].insertBefore(tempDiv.childNodes[j], this[i].childNodes[0]);
            }
          } else if (newChild instanceof Dom7) {
            for (j = 0; j < newChild.length; j += 1) {
              this[i].insertBefore(newChild[j], this[i].childNodes[0]);
            }
          } else {
            this[i].insertBefore(newChild, this[i].childNodes[0]);
          }
        }
        return this;
      }
      function _prependTo(parent) {
        _$(parent).prepend(this);
        return this;
      }
      function _insertBefore(selector) {
        var before = _$(selector);
        for (var _i22 = 0; _i22 < this.length; _i22 += 1) {
          if (before.length === 1) {
            before[0].parentNode.insertBefore(this[_i22], before[0]);
          } else if (before.length > 1) {
            for (var j = 0; j < before.length; j += 1) {
              before[j].parentNode.insertBefore(this[_i22].cloneNode(true), before[j]);
            }
          }
        }
      }
      function _insertAfter(selector) {
        var after = _$(selector);
        for (var _i23 = 0; _i23 < this.length; _i23 += 1) {
          if (after.length === 1) {
            after[0].parentNode.insertBefore(this[_i23], after[0].nextSibling);
          } else if (after.length > 1) {
            for (var j = 0; j < after.length; j += 1) {
              after[j].parentNode.insertBefore(this[_i23].cloneNode(true), after[j].nextSibling);
            }
          }
        }
      }
      function _next(selector) {
        if (this.length > 0) {
          if (selector) {
            if (this[0].nextElementSibling && _$(this[0].nextElementSibling).is(selector)) {
              return _$([this[0].nextElementSibling]);
            }
            return _$([]);
          }
          if (this[0].nextElementSibling) return _$([this[0].nextElementSibling]);
          return _$([]);
        }
        return _$([]);
      }
      function _nextAll(selector) {
        var nextEls = [];
        var el = this[0];
        if (!el) return _$([]);
        while (el.nextElementSibling) {
          var next = el.nextElementSibling; // eslint-disable-line

          if (selector) {
            if (_$(next).is(selector)) nextEls.push(next);
          } else nextEls.push(next);
          el = next;
        }
        return _$(nextEls);
      }
      function _prev(selector) {
        if (this.length > 0) {
          var el = this[0];
          if (selector) {
            if (el.previousElementSibling && _$(el.previousElementSibling).is(selector)) {
              return _$([el.previousElementSibling]);
            }
            return _$([]);
          }
          if (el.previousElementSibling) return _$([el.previousElementSibling]);
          return _$([]);
        }
        return _$([]);
      }
      function _prevAll(selector) {
        var prevEls = [];
        var el = this[0];
        if (!el) return _$([]);
        while (el.previousElementSibling) {
          var prev = el.previousElementSibling; // eslint-disable-line

          if (selector) {
            if (_$(prev).is(selector)) prevEls.push(prev);
          } else prevEls.push(prev);
          el = prev;
        }
        return _$(prevEls);
      }
      function _siblings(selector) {
        return this.nextAll(selector).add(this.prevAll(selector));
      }
      function _parent(selector) {
        var parents = []; // eslint-disable-line

        for (var _i24 = 0; _i24 < this.length; _i24 += 1) {
          if (this[_i24].parentNode !== null) {
            if (selector) {
              if (_$(this[_i24].parentNode).is(selector)) parents.push(this[_i24].parentNode);
            } else {
              parents.push(this[_i24].parentNode);
            }
          }
        }
        return _$(parents);
      }
      function _parents(selector) {
        var parents = []; // eslint-disable-line

        for (var _i25 = 0; _i25 < this.length; _i25 += 1) {
          var parent = this[_i25].parentNode; // eslint-disable-line

          while (parent) {
            if (selector) {
              if (_$(parent).is(selector)) parents.push(parent);
            } else {
              parents.push(parent);
            }
            parent = parent.parentNode;
          }
        }
        return _$(parents);
      }
      function _closest(selector) {
        var closest = this; // eslint-disable-line

        if (typeof selector === 'undefined') {
          return _$([]);
        }
        if (!closest.is(selector)) {
          closest = closest.parents(selector).eq(0);
        }
        return closest;
      }
      function _find(selector) {
        var foundElements = [];
        for (var _i26 = 0; _i26 < this.length; _i26 += 1) {
          var found = this[_i26].querySelectorAll(selector);
          for (var j = 0; j < found.length; j += 1) {
            foundElements.push(found[j]);
          }
        }
        return _$(foundElements);
      }
      function _children(selector) {
        var children = []; // eslint-disable-line

        for (var _i27 = 0; _i27 < this.length; _i27 += 1) {
          var childNodes = this[_i27].children;
          for (var j = 0; j < childNodes.length; j += 1) {
            if (!selector || _$(childNodes[j]).is(selector)) {
              children.push(childNodes[j]);
            }
          }
        }
        return _$(children);
      }
      function _remove() {
        for (var _i28 = 0; _i28 < this.length; _i28 += 1) {
          if (this[_i28].parentNode) this[_i28].parentNode.removeChild(this[_i28]);
        }
        return this;
      }
      function _detach() {
        return this.remove();
      }
      function _add() {
        var dom = this;
        var i;
        var j;
        for (var _len10 = arguments.length, els = new Array(_len10), _key10 = 0; _key10 < _len10; _key10++) {
          els[_key10] = arguments[_key10];
        }
        for (i = 0; i < els.length; i += 1) {
          var toAdd = _$(els[i]);
          for (j = 0; j < toAdd.length; j += 1) {
            dom.push(toAdd[j]);
          }
        }
        return dom;
      }
      function _empty() {
        for (var _i29 = 0; _i29 < this.length; _i29 += 1) {
          var el = this[_i29];
          if (el.nodeType === 1) {
            for (var j = 0; j < el.childNodes.length; j += 1) {
              if (el.childNodes[j].parentNode) {
                el.childNodes[j].parentNode.removeChild(el.childNodes[j]);
              }
            }
            el.textContent = '';
          }
        }
        return this;
      }

      // eslint-disable-next-line

      function _scrollTo() {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        for (var _len11 = arguments.length, args = new Array(_len11), _key11 = 0; _key11 < _len11; _key11++) {
          args[_key11] = arguments[_key11];
        }
        var left = args[0],
          top = args[1],
          duration = args[2],
          easing = args[3],
          callback = args[4];
        if (args.length === 4 && typeof easing === 'function') {
          callback = easing;
          left = args[0];
          top = args[1];
          duration = args[2];
          callback = args[3];
          easing = args[4];
        }
        if (typeof easing === 'undefined') easing = 'swing';
        return this.each(function animate() {
          var el = this;
          var currentTop;
          var currentLeft;
          var maxTop;
          var maxLeft;
          var newTop;
          var newLeft;
          var scrollTop; // eslint-disable-line

          var scrollLeft; // eslint-disable-line

          var animateTop = top > 0 || top === 0;
          var animateLeft = left > 0 || left === 0;
          if (typeof easing === 'undefined') {
            easing = 'swing';
          }
          if (animateTop) {
            currentTop = el.scrollTop;
            if (!duration) {
              el.scrollTop = top;
            }
          }
          if (animateLeft) {
            currentLeft = el.scrollLeft;
            if (!duration) {
              el.scrollLeft = left;
            }
          }
          if (!duration) return;
          if (animateTop) {
            maxTop = el.scrollHeight - el.offsetHeight;
            newTop = Math.max(Math.min(top, maxTop), 0);
          }
          if (animateLeft) {
            maxLeft = el.scrollWidth - el.offsetWidth;
            newLeft = Math.max(Math.min(left, maxLeft), 0);
          }
          var startTime = null;
          if (animateTop && newTop === currentTop) animateTop = false;
          if (animateLeft && newLeft === currentLeft) animateLeft = false;
          function render() {
            var time = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : new Date().getTime();
            if (startTime === null) {
              startTime = time;
            }
            var progress = Math.max(Math.min((time - startTime) / duration, 1), 0);
            var easeProgress = easing === 'linear' ? progress : 0.5 - Math.cos(progress * Math.PI) / 2;
            var done;
            if (animateTop) scrollTop = currentTop + easeProgress * (newTop - currentTop);
            if (animateLeft) scrollLeft = currentLeft + easeProgress * (newLeft - currentLeft);
            if (animateTop && newTop > currentTop && scrollTop >= newTop) {
              el.scrollTop = newTop;
              done = true;
            }
            if (animateTop && newTop < currentTop && scrollTop <= newTop) {
              el.scrollTop = newTop;
              done = true;
            }
            if (animateLeft && newLeft > currentLeft && scrollLeft >= newLeft) {
              el.scrollLeft = newLeft;
              done = true;
            }
            if (animateLeft && newLeft < currentLeft && scrollLeft <= newLeft) {
              el.scrollLeft = newLeft;
              done = true;
            }
            if (done) {
              if (callback) callback();
              return;
            }
            if (animateTop) el.scrollTop = scrollTop;
            if (animateLeft) el.scrollLeft = scrollLeft;
            window.requestAnimationFrame(render);
          }
          window.requestAnimationFrame(render);
        });
      } // scrollTop(top, duration, easing, callback) {

      function _scrollTop() {
        for (var _len12 = arguments.length, args = new Array(_len12), _key12 = 0; _key12 < _len12; _key12++) {
          args[_key12] = arguments[_key12];
        }
        var top = args[0],
          duration = args[1],
          easing = args[2],
          callback = args[3];
        if (args.length === 3 && typeof easing === 'function') {
          top = args[0];
          duration = args[1];
          callback = args[2];
          easing = args[3];
        }
        var dom = this;
        if (typeof top === 'undefined') {
          if (dom.length > 0) return dom[0].scrollTop;
          return null;
        }
        return dom.scrollTo(undefined, top, duration, easing, callback);
      }
      function _scrollLeft() {
        for (var _len13 = arguments.length, args = new Array(_len13), _key13 = 0; _key13 < _len13; _key13++) {
          args[_key13] = arguments[_key13];
        }
        var left = args[0],
          duration = args[1],
          easing = args[2],
          callback = args[3];
        if (args.length === 3 && typeof easing === 'function') {
          left = args[0];
          duration = args[1];
          callback = args[2];
          easing = args[3];
        }
        var dom = this;
        if (typeof left === 'undefined') {
          if (dom.length > 0) return dom[0].scrollLeft;
          return null;
        }
        return dom.scrollTo(left, undefined, duration, easing, callback);
      }

      // eslint-disable-next-line

      function _animate(initialProps, initialParams) {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var els = this;
        var a = {
          props: Object.assign({}, initialProps),
          params: Object.assign({
            duration: 300,
            easing: 'swing' // or 'linear'

            /* Callbacks
            begin(elements)
            complete(elements)
            progress(elements, complete, remaining, start, tweenValue)
            */
          }, initialParams),
          elements: els,
          animating: false,
          que: [],
          easingProgress: function easingProgress(easing, progress) {
            if (easing === 'swing') {
              return 0.5 - Math.cos(progress * Math.PI) / 2;
            }
            if (typeof easing === 'function') {
              return easing(progress);
            }
            return progress;
          },
          stop: function stop() {
            if (a.frameId) {
              window.cancelAnimationFrame(a.frameId);
            }
            a.animating = false;
            a.elements.each(function (el) {
              var element = el;
              delete element.dom7AnimateInstance;
            });
            a.que = [];
          },
          done: function done(complete) {
            a.animating = false;
            a.elements.each(function (el) {
              var element = el;
              delete element.dom7AnimateInstance;
            });
            if (complete) complete(els);
            if (a.que.length > 0) {
              var que = a.que.shift();
              a.animate(que[0], que[1]);
            }
          },
          animate: function animate(props, params) {
            if (a.animating) {
              a.que.push([props, params]);
              return a;
            }
            var elements = []; // Define & Cache Initials & Units

            a.elements.each(function (el, index) {
              var initialFullValue;
              var initialValue;
              var unit;
              var finalValue;
              var finalFullValue;
              if (!el.dom7AnimateInstance) a.elements[index].dom7AnimateInstance = a;
              elements[index] = {
                container: el
              };
              Object.keys(props).forEach(function (prop) {
                initialFullValue = window.getComputedStyle(el, null).getPropertyValue(prop).replace(',', '.');
                initialValue = parseFloat(initialFullValue);
                unit = initialFullValue.replace(initialValue, '');
                finalValue = parseFloat(props[prop]);
                finalFullValue = props[prop] + unit;
                elements[index][prop] = {
                  initialFullValue: initialFullValue,
                  initialValue: initialValue,
                  unit: unit,
                  finalValue: finalValue,
                  finalFullValue: finalFullValue,
                  currentValue: initialValue
                };
              });
            });
            var startTime = null;
            var time;
            var elementsDone = 0;
            var propsDone = 0;
            var done;
            var began = false;
            a.animating = true;
            function render() {
              time = new Date().getTime();
              var progress;
              var easeProgress; // let el;

              if (!began) {
                began = true;
                if (params.begin) params.begin(els);
              }
              if (startTime === null) {
                startTime = time;
              }
              if (params.progress) {
                // eslint-disable-next-line
                params.progress(els, Math.max(Math.min((time - startTime) / params.duration, 1), 0), startTime + params.duration - time < 0 ? 0 : startTime + params.duration - time, startTime);
              }
              elements.forEach(function (element) {
                var el = element;
                if (done || el.done) return;
                Object.keys(props).forEach(function (prop) {
                  if (done || el.done) return;
                  progress = Math.max(Math.min((time - startTime) / params.duration, 1), 0);
                  easeProgress = a.easingProgress(params.easing, progress);
                  var _el$prop = el[prop],
                    initialValue = _el$prop.initialValue,
                    finalValue = _el$prop.finalValue,
                    unit = _el$prop.unit;
                  el[prop].currentValue = initialValue + easeProgress * (finalValue - initialValue);
                  var currentValue = el[prop].currentValue;
                  if (finalValue > initialValue && currentValue >= finalValue || finalValue < initialValue && currentValue <= finalValue) {
                    el.container.style[prop] = finalValue + unit;
                    propsDone += 1;
                    if (propsDone === Object.keys(props).length) {
                      el.done = true;
                      elementsDone += 1;
                    }
                    if (elementsDone === elements.length) {
                      done = true;
                    }
                  }
                  if (done) {
                    a.done(params.complete);
                    return;
                  }
                  el.container.style[prop] = currentValue + unit;
                });
              });
              if (done) return; // Then call

              a.frameId = window.requestAnimationFrame(render);
            }
            a.frameId = window.requestAnimationFrame(render);
            return a;
          }
        };
        if (a.elements.length === 0) {
          return els;
        }
        var animateInstance;
        for (var _i30 = 0; _i30 < a.elements.length; _i30 += 1) {
          if (a.elements[_i30].dom7AnimateInstance) {
            animateInstance = a.elements[_i30].dom7AnimateInstance;
          } else a.elements[_i30].dom7AnimateInstance = a;
        }
        if (!animateInstance) {
          animateInstance = a;
        }
        if (initialProps === 'stop') {
          animateInstance.stop();
        } else {
          animateInstance.animate(a.props, a.params);
        }
        return els;
      }
      function _stop() {
        var els = this;
        for (var _i31 = 0; _i31 < els.length; _i31 += 1) {
          if (els[_i31].dom7AnimateInstance) {
            els[_i31].dom7AnimateInstance.stop();
          }
        }
      }
      var noTrigger = 'resize scroll'.split(' ');
      function shortcut(name) {
        function eventHandler() {
          for (var _len14 = arguments.length, args = new Array(_len14), _key14 = 0; _key14 < _len14; _key14++) {
            args[_key14] = arguments[_key14];
          }
          if (typeof args[0] === 'undefined') {
            for (var _i32 = 0; _i32 < this.length; _i32 += 1) {
              if (noTrigger.indexOf(name) < 0) {
                if (name in this[_i32]) this[_i32][name]();else {
                  _$(this[_i32]).trigger(name);
                }
              }
            }
            return this;
          }
          return this.on.apply(this, [name].concat(args));
        }
        return eventHandler;
      }
      var _click = shortcut('click');
      var _blur = shortcut('blur');
      var _focus = shortcut('focus');
      var _focusin = shortcut('focusin');
      var _focusout = shortcut('focusout');
      var _keyup = shortcut('keyup');
      var _keydown = shortcut('keydown');
      var _keypress = shortcut('keypress');
      var _submit = shortcut('submit');
      var _change = shortcut('change');
      var _mousedown = shortcut('mousedown');
      var _mousemove = shortcut('mousemove');
      var _mouseup = shortcut('mouseup');
      var _mouseenter = shortcut('mouseenter');
      var _mouseleave = shortcut('mouseleave');
      var _mouseout = shortcut('mouseout');
      var _mouseover = shortcut('mouseover');
      var _touchstart = shortcut('touchstart');
      var _touchend = shortcut('touchend');
      var _touchmove = shortcut('touchmove');
      var _resize = shortcut('resize');
      var _scroll = shortcut('scroll');

      /* harmony default export */
      __webpack_exports__["default"] = _$;

      /***/
    },

    /***/"./node_modules/ssr-window/ssr-window.esm.js":
    /*!***************************************************!*\
      !*** ./node_modules/ssr-window/ssr-window.esm.js ***!
      \***************************************************/
    /***/
    function node_modulesSsrWindowSsrWindowEsmJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_64508__) {
      __nested_webpack_require_64508__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_64508__.d(__webpack_exports__, {
        /* harmony export */"extend": function extend() {
          return (/* binding */_extend
          );
        },
        /* harmony export */"getDocument": function getDocument() {
          return (/* binding */_getDocument
          );
        },
        /* harmony export */"getWindow": function getWindow() {
          return (/* binding */_getWindow
          );
        },
        /* harmony export */"ssrDocument": function ssrDocument() {
          return (/* binding */_ssrDocument
          );
        },
        /* harmony export */"ssrWindow": function ssrWindow() {
          return (/* binding */_ssrWindow
          );
        }
        /* harmony export */
      });
      /**
       * SSR Window 4.0.2
       * Better handling for window object in SSR environment
       * https://github.com/nolimits4web/ssr-window
       *
       * Copyright 2021, Vladimir Kharlampidi
       *
       * Licensed under MIT
       *
       * Released on: December 13, 2021
       */
      /* eslint-disable no-param-reassign */
      function isObject(obj) {
        return obj !== null && _typeof(obj) === 'object' && 'constructor' in obj && obj.constructor === Object;
      }
      function _extend() {
        var target = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
        var src = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
        Object.keys(src).forEach(function (key) {
          if (typeof target[key] === 'undefined') target[key] = src[key];else if (isObject(src[key]) && isObject(target[key]) && Object.keys(src[key]).length > 0) {
            _extend(target[key], src[key]);
          }
        });
      }
      var _ssrDocument = {
        body: {},
        addEventListener: function addEventListener() {},
        removeEventListener: function removeEventListener() {},
        activeElement: {
          blur: function blur() {},
          nodeName: ''
        },
        querySelector: function querySelector() {
          return null;
        },
        querySelectorAll: function querySelectorAll() {
          return [];
        },
        getElementById: function getElementById() {
          return null;
        },
        createEvent: function createEvent() {
          return {
            initEvent: function initEvent() {}
          };
        },
        createElement: function createElement() {
          return {
            children: [],
            childNodes: [],
            style: {},
            setAttribute: function setAttribute() {},
            getElementsByTagName: function getElementsByTagName() {
              return [];
            }
          };
        },
        createElementNS: function createElementNS() {
          return {};
        },
        importNode: function importNode() {
          return null;
        },
        location: {
          hash: '',
          host: '',
          hostname: '',
          href: '',
          origin: '',
          pathname: '',
          protocol: '',
          search: ''
        }
      };
      function _getDocument() {
        var doc = typeof document !== 'undefined' ? document : {};
        _extend(doc, _ssrDocument);
        return doc;
      }
      var _ssrWindow = {
        document: _ssrDocument,
        navigator: {
          userAgent: ''
        },
        location: {
          hash: '',
          host: '',
          hostname: '',
          href: '',
          origin: '',
          pathname: '',
          protocol: '',
          search: ''
        },
        history: {
          replaceState: function replaceState() {},
          pushState: function pushState() {},
          go: function go() {},
          back: function back() {}
        },
        CustomEvent: function CustomEvent() {
          return this;
        },
        addEventListener: function addEventListener() {},
        removeEventListener: function removeEventListener() {},
        getComputedStyle: function getComputedStyle() {
          return {
            getPropertyValue: function getPropertyValue() {
              return '';
            }
          };
        },
        Image: function Image() {},
        Date: function Date() {},
        screen: {},
        setTimeout: function setTimeout() {},
        clearTimeout: function clearTimeout() {},
        matchMedia: function matchMedia() {
          return {};
        },
        requestAnimationFrame: function requestAnimationFrame(callback) {
          if (typeof setTimeout === 'undefined') {
            callback();
            return null;
          }
          return setTimeout(callback, 0);
        },
        cancelAnimationFrame: function cancelAnimationFrame(id) {
          if (typeof setTimeout === 'undefined') {
            return;
          }
          clearTimeout(id);
        }
      };
      function _getWindow() {
        var win = typeof window !== 'undefined' ? window : {};
        _extend(win, _ssrWindow);
        return win;
      }

      /***/
    },

    /***/"./node_modules/swiper/core/breakpoints/getBreakpoint.js":
    /*!***************************************************************!*\
      !*** ./node_modules/swiper/core/breakpoints/getBreakpoint.js ***!
      \***************************************************************/
    /***/
    function node_modulesSwiperCoreBreakpointsGetBreakpointJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_70091__) {
      __nested_webpack_require_70091__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_70091__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */getBreakpoint
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_70091__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      function getBreakpoint(breakpoints) {
        var base = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'window';
        var containerEl = arguments.length > 2 ? arguments[2] : undefined;
        if (!breakpoints || base === 'container' && !containerEl) return undefined;
        var breakpoint = false;
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var currentHeight = base === 'window' ? window.innerHeight : containerEl.clientHeight;
        var points = Object.keys(breakpoints).map(function (point) {
          if (typeof point === 'string' && point.indexOf('@') === 0) {
            var minRatio = parseFloat(point.substr(1));
            var value = currentHeight * minRatio;
            return {
              value: value,
              point: point
            };
          }
          return {
            value: point,
            point: point
          };
        });
        points.sort(function (a, b) {
          return parseInt(a.value, 10) - parseInt(b.value, 10);
        });
        for (var _i33 = 0; _i33 < points.length; _i33 += 1) {
          var _points$_i = points[_i33],
            point = _points$_i.point,
            value = _points$_i.value;
          if (base === 'window') {
            if (window.matchMedia("(min-width: ".concat(value, "px)")).matches) {
              breakpoint = point;
            }
          } else if (value <= containerEl.clientWidth) {
            breakpoint = point;
          }
        }
        return breakpoint || 'max';
      }

      /***/
    },

    /***/"./node_modules/swiper/core/breakpoints/index.js":
    /*!*******************************************************!*\
      !*** ./node_modules/swiper/core/breakpoints/index.js ***!
      \*******************************************************/
    /***/
    function node_modulesSwiperCoreBreakpointsIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_72537__) {
      __nested_webpack_require_72537__.r(__webpack_exports__);
      /* harmony import */
      var _setBreakpoint_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_72537__( /*! ./setBreakpoint.js */"./node_modules/swiper/core/breakpoints/setBreakpoint.js");
      /* harmony import */
      var _getBreakpoint_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_72537__( /*! ./getBreakpoint.js */"./node_modules/swiper/core/breakpoints/getBreakpoint.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        setBreakpoint: _setBreakpoint_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        getBreakpoint: _getBreakpoint_js__WEBPACK_IMPORTED_MODULE_1__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/breakpoints/setBreakpoint.js":
    /*!***************************************************************!*\
      !*** ./node_modules/swiper/core/breakpoints/setBreakpoint.js ***!
      \***************************************************************/
    /***/
    function node_modulesSwiperCoreBreakpointsSetBreakpointJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_73682__) {
      __nested_webpack_require_73682__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_73682__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */setBreakpoint
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_73682__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      var isGridEnabled = function isGridEnabled(swiper, params) {
        return swiper.grid && params.grid && params.grid.rows > 1;
      };
      function setBreakpoint() {
        var swiper = this;
        var activeIndex = swiper.activeIndex,
          initialized = swiper.initialized,
          _swiper$loopedSlides = swiper.loopedSlides,
          loopedSlides = _swiper$loopedSlides === void 0 ? 0 : _swiper$loopedSlides,
          params = swiper.params,
          $el = swiper.$el;
        var breakpoints = params.breakpoints;
        if (!breakpoints || breakpoints && Object.keys(breakpoints).length === 0) return; // Get breakpoint for window width and update parameters

        var breakpoint = swiper.getBreakpoint(breakpoints, swiper.params.breakpointsBase, swiper.el);
        if (!breakpoint || swiper.currentBreakpoint === breakpoint) return;
        var breakpointOnlyParams = breakpoint in breakpoints ? breakpoints[breakpoint] : undefined;
        var breakpointParams = breakpointOnlyParams || swiper.originalParams;
        var wasMultiRow = isGridEnabled(swiper, params);
        var isMultiRow = isGridEnabled(swiper, breakpointParams);
        var wasEnabled = params.enabled;
        if (wasMultiRow && !isMultiRow) {
          $el.removeClass("".concat(params.containerModifierClass, "grid ").concat(params.containerModifierClass, "grid-column"));
          swiper.emitContainerClasses();
        } else if (!wasMultiRow && isMultiRow) {
          $el.addClass("".concat(params.containerModifierClass, "grid"));
          if (breakpointParams.grid.fill && breakpointParams.grid.fill === 'column' || !breakpointParams.grid.fill && params.grid.fill === 'column') {
            $el.addClass("".concat(params.containerModifierClass, "grid-column"));
          }
          swiper.emitContainerClasses();
        } // Toggle navigation, pagination, scrollbar

        ['navigation', 'pagination', 'scrollbar'].forEach(function (prop) {
          var wasModuleEnabled = params[prop] && params[prop].enabled;
          var isModuleEnabled = breakpointParams[prop] && breakpointParams[prop].enabled;
          if (wasModuleEnabled && !isModuleEnabled) {
            swiper[prop].disable();
          }
          if (!wasModuleEnabled && isModuleEnabled) {
            swiper[prop].enable();
          }
        });
        var directionChanged = breakpointParams.direction && breakpointParams.direction !== params.direction;
        var needsReLoop = params.loop && (breakpointParams.slidesPerView !== params.slidesPerView || directionChanged);
        if (directionChanged && initialized) {
          swiper.changeDirection();
        }
        (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.extend)(swiper.params, breakpointParams);
        var isEnabled = swiper.params.enabled;
        Object.assign(swiper, {
          allowTouchMove: swiper.params.allowTouchMove,
          allowSlideNext: swiper.params.allowSlideNext,
          allowSlidePrev: swiper.params.allowSlidePrev
        });
        if (wasEnabled && !isEnabled) {
          swiper.disable();
        } else if (!wasEnabled && isEnabled) {
          swiper.enable();
        }
        swiper.currentBreakpoint = breakpoint;
        swiper.emit('_beforeBreakpoint', breakpointParams);
        if (needsReLoop && initialized) {
          swiper.loopDestroy();
          swiper.loopCreate();
          swiper.updateSlides();
          swiper.slideTo(activeIndex - loopedSlides + swiper.loopedSlides, 0, false);
        }
        swiper.emit('breakpoint', breakpointParams);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/check-overflow/index.js":
    /*!**********************************************************!*\
      !*** ./node_modules/swiper/core/check-overflow/index.js ***!
      \**********************************************************/
    /***/
    function node_modulesSwiperCoreCheckOverflowIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_78164__) {
      __nested_webpack_require_78164__.r(__webpack_exports__);
      function checkOverflow() {
        var swiper = this;
        var wasLocked = swiper.isLocked,
          params = swiper.params;
        var slidesOffsetBefore = params.slidesOffsetBefore;
        if (slidesOffsetBefore) {
          var lastSlideIndex = swiper.slides.length - 1;
          var lastSlideRightEdge = swiper.slidesGrid[lastSlideIndex] + swiper.slidesSizesGrid[lastSlideIndex] + slidesOffsetBefore * 2;
          swiper.isLocked = swiper.size > lastSlideRightEdge;
        } else {
          swiper.isLocked = swiper.snapGrid.length === 1;
        }
        if (params.allowSlideNext === true) {
          swiper.allowSlideNext = !swiper.isLocked;
        }
        if (params.allowSlidePrev === true) {
          swiper.allowSlidePrev = !swiper.isLocked;
        }
        if (wasLocked && wasLocked !== swiper.isLocked) {
          swiper.isEnd = false;
        }
        if (wasLocked !== swiper.isLocked) {
          swiper.emit(swiper.isLocked ? 'lock' : 'unlock');
        }
      }

      /* harmony default export */
      __webpack_exports__["default"] = {
        checkOverflow: checkOverflow
      };

      /***/
    },

    /***/"./node_modules/swiper/core/classes/addClasses.js":
    /*!********************************************************!*\
      !*** ./node_modules/swiper/core/classes/addClasses.js ***!
      \********************************************************/
    /***/
    function node_modulesSwiperCoreClassesAddClassesJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_79772__) {
      __nested_webpack_require_79772__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_79772__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */addClasses
          );
        }
        /* harmony export */
      });
      function prepareClasses(entries, prefix) {
        var resultClasses = [];
        entries.forEach(function (item) {
          if (_typeof(item) === 'object') {
            Object.keys(item).forEach(function (classNames) {
              if (item[classNames]) {
                resultClasses.push(prefix + classNames);
              }
            });
          } else if (typeof item === 'string') {
            resultClasses.push(prefix + item);
          }
        });
        return resultClasses;
      }
      function addClasses() {
        var swiper = this;
        var classNames = swiper.classNames,
          params = swiper.params,
          rtl = swiper.rtl,
          $el = swiper.$el,
          device = swiper.device,
          support = swiper.support; // prettier-ignore

        var suffixes = prepareClasses(['initialized', params.direction, {
          'pointer-events': !support.touch
        }, {
          'free-mode': swiper.params.freeMode && params.freeMode.enabled
        }, {
          'autoheight': params.autoHeight
        }, {
          'rtl': rtl
        }, {
          'grid': params.grid && params.grid.rows > 1
        }, {
          'grid-column': params.grid && params.grid.rows > 1 && params.grid.fill === 'column'
        }, {
          'android': device.android
        }, {
          'ios': device.ios
        }, {
          'css-mode': params.cssMode
        }, {
          'centered': params.cssMode && params.centeredSlides
        }, {
          'watch-progress': params.watchSlidesProgress
        }], params.containerModifierClass);
        classNames.push.apply(classNames, _toConsumableArray(suffixes));
        $el.addClass(_toConsumableArray(classNames).join(' '));
        swiper.emitContainerClasses();
      }

      /***/
    },

    /***/"./node_modules/swiper/core/classes/index.js":
    /*!***************************************************!*\
      !*** ./node_modules/swiper/core/classes/index.js ***!
      \***************************************************/
    /***/
    function node_modulesSwiperCoreClassesIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_82239__) {
      __nested_webpack_require_82239__.r(__webpack_exports__);
      /* harmony import */
      var _addClasses_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_82239__( /*! ./addClasses.js */"./node_modules/swiper/core/classes/addClasses.js");
      /* harmony import */
      var _removeClasses_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_82239__( /*! ./removeClasses.js */"./node_modules/swiper/core/classes/removeClasses.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        addClasses: _addClasses_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        removeClasses: _removeClasses_js__WEBPACK_IMPORTED_MODULE_1__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/classes/removeClasses.js":
    /*!***********************************************************!*\
      !*** ./node_modules/swiper/core/classes/removeClasses.js ***!
      \***********************************************************/
    /***/
    function node_modulesSwiperCoreClassesRemoveClassesJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_83341__) {
      __nested_webpack_require_83341__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_83341__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */removeClasses
          );
        }
        /* harmony export */
      });
      function removeClasses() {
        var swiper = this;
        var $el = swiper.$el,
          classNames = swiper.classNames;
        $el.removeClass(classNames.join(' '));
        swiper.emitContainerClasses();
      }

      /***/
    },

    /***/"./node_modules/swiper/core/core.js":
    /*!******************************************!*\
      !*** ./node_modules/swiper/core/core.js ***!
      \******************************************/
    /***/
    function node_modulesSwiperCoreCoreJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_84221__) {
      __nested_webpack_require_84221__.r(__webpack_exports__);
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_84221__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_84221__( /*! ../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_84221__( /*! ../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      /* harmony import */
      var _shared_get_support_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_84221__( /*! ../shared/get-support.js */"./node_modules/swiper/shared/get-support.js");
      /* harmony import */
      var _shared_get_device_js__WEBPACK_IMPORTED_MODULE_4__ = __nested_webpack_require_84221__( /*! ../shared/get-device.js */"./node_modules/swiper/shared/get-device.js");
      /* harmony import */
      var _shared_get_browser_js__WEBPACK_IMPORTED_MODULE_5__ = __nested_webpack_require_84221__( /*! ../shared/get-browser.js */"./node_modules/swiper/shared/get-browser.js");
      /* harmony import */
      var _modules_resize_resize_js__WEBPACK_IMPORTED_MODULE_6__ = __nested_webpack_require_84221__( /*! ./modules/resize/resize.js */"./node_modules/swiper/core/modules/resize/resize.js");
      /* harmony import */
      var _modules_observer_observer_js__WEBPACK_IMPORTED_MODULE_7__ = __nested_webpack_require_84221__( /*! ./modules/observer/observer.js */"./node_modules/swiper/core/modules/observer/observer.js");
      /* harmony import */
      var _events_emitter_js__WEBPACK_IMPORTED_MODULE_8__ = __nested_webpack_require_84221__( /*! ./events-emitter.js */"./node_modules/swiper/core/events-emitter.js");
      /* harmony import */
      var _update_index_js__WEBPACK_IMPORTED_MODULE_9__ = __nested_webpack_require_84221__( /*! ./update/index.js */"./node_modules/swiper/core/update/index.js");
      /* harmony import */
      var _translate_index_js__WEBPACK_IMPORTED_MODULE_10__ = __nested_webpack_require_84221__( /*! ./translate/index.js */"./node_modules/swiper/core/translate/index.js");
      /* harmony import */
      var _transition_index_js__WEBPACK_IMPORTED_MODULE_11__ = __nested_webpack_require_84221__( /*! ./transition/index.js */"./node_modules/swiper/core/transition/index.js");
      /* harmony import */
      var _slide_index_js__WEBPACK_IMPORTED_MODULE_12__ = __nested_webpack_require_84221__( /*! ./slide/index.js */"./node_modules/swiper/core/slide/index.js");
      /* harmony import */
      var _loop_index_js__WEBPACK_IMPORTED_MODULE_13__ = __nested_webpack_require_84221__( /*! ./loop/index.js */"./node_modules/swiper/core/loop/index.js");
      /* harmony import */
      var _grab_cursor_index_js__WEBPACK_IMPORTED_MODULE_14__ = __nested_webpack_require_84221__( /*! ./grab-cursor/index.js */"./node_modules/swiper/core/grab-cursor/index.js");
      /* harmony import */
      var _events_index_js__WEBPACK_IMPORTED_MODULE_15__ = __nested_webpack_require_84221__( /*! ./events/index.js */"./node_modules/swiper/core/events/index.js");
      /* harmony import */
      var _breakpoints_index_js__WEBPACK_IMPORTED_MODULE_16__ = __nested_webpack_require_84221__( /*! ./breakpoints/index.js */"./node_modules/swiper/core/breakpoints/index.js");
      /* harmony import */
      var _classes_index_js__WEBPACK_IMPORTED_MODULE_17__ = __nested_webpack_require_84221__( /*! ./classes/index.js */"./node_modules/swiper/core/classes/index.js");
      /* harmony import */
      var _images_index_js__WEBPACK_IMPORTED_MODULE_18__ = __nested_webpack_require_84221__( /*! ./images/index.js */"./node_modules/swiper/core/images/index.js");
      /* harmony import */
      var _check_overflow_index_js__WEBPACK_IMPORTED_MODULE_19__ = __nested_webpack_require_84221__( /*! ./check-overflow/index.js */"./node_modules/swiper/core/check-overflow/index.js");
      /* harmony import */
      var _defaults_js__WEBPACK_IMPORTED_MODULE_20__ = __nested_webpack_require_84221__( /*! ./defaults.js */"./node_modules/swiper/core/defaults.js");
      /* harmony import */
      var _moduleExtendParams_js__WEBPACK_IMPORTED_MODULE_21__ = __nested_webpack_require_84221__( /*! ./moduleExtendParams.js */"./node_modules/swiper/core/moduleExtendParams.js");
      /* eslint no-param-reassign: "off" */

      var prototypes = {
        eventsEmitter: _events_emitter_js__WEBPACK_IMPORTED_MODULE_8__["default"],
        update: _update_index_js__WEBPACK_IMPORTED_MODULE_9__["default"],
        translate: _translate_index_js__WEBPACK_IMPORTED_MODULE_10__["default"],
        transition: _transition_index_js__WEBPACK_IMPORTED_MODULE_11__["default"],
        slide: _slide_index_js__WEBPACK_IMPORTED_MODULE_12__["default"],
        loop: _loop_index_js__WEBPACK_IMPORTED_MODULE_13__["default"],
        grabCursor: _grab_cursor_index_js__WEBPACK_IMPORTED_MODULE_14__["default"],
        events: _events_index_js__WEBPACK_IMPORTED_MODULE_15__["default"],
        breakpoints: _breakpoints_index_js__WEBPACK_IMPORTED_MODULE_16__["default"],
        checkOverflow: _check_overflow_index_js__WEBPACK_IMPORTED_MODULE_19__["default"],
        classes: _classes_index_js__WEBPACK_IMPORTED_MODULE_17__["default"],
        images: _images_index_js__WEBPACK_IMPORTED_MODULE_18__["default"]
      };
      var extendedDefaults = {};
      var Swiper = /*#__PURE__*/function () {
        function Swiper() {
          _classCallCheck(this, Swiper);
          var el;
          var params;
          for (var _len15 = arguments.length, args = new Array(_len15), _key15 = 0; _key15 < _len15; _key15++) {
            args[_key15] = arguments[_key15];
          }
          if (args.length === 1 && args[0].constructor && Object.prototype.toString.call(args[0]).slice(8, -1) === 'Object') {
            params = args[0];
          } else {
            el = args[0];
            params = args[1];
          }
          if (!params) params = {};
          params = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.extend)({}, params);
          if (el && !params.el) params.el = el;
          if (params.el && (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.el).length > 1) {
            var swipers = [];
            (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.el).each(function (containerEl) {
              var newParams = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.extend)({}, params, {
                el: containerEl
              });
              swipers.push(new Swiper(newParams));
            }); // eslint-disable-next-line no-constructor-return

            return swipers;
          } // Swiper Instance

          var swiper = this;
          swiper.__swiper__ = true;
          swiper.support = (0, _shared_get_support_js__WEBPACK_IMPORTED_MODULE_3__.getSupport)();
          swiper.device = (0, _shared_get_device_js__WEBPACK_IMPORTED_MODULE_4__.getDevice)({
            userAgent: params.userAgent
          });
          swiper.browser = (0, _shared_get_browser_js__WEBPACK_IMPORTED_MODULE_5__.getBrowser)();
          swiper.eventsListeners = {};
          swiper.eventsAnyListeners = [];
          swiper.modules = _toConsumableArray(swiper.__modules__);
          if (params.modules && Array.isArray(params.modules)) {
            var _swiper$modules;
            (_swiper$modules = swiper.modules).push.apply(_swiper$modules, _toConsumableArray(params.modules));
          }
          var allModulesParams = {};
          swiper.modules.forEach(function (mod) {
            mod({
              swiper: swiper,
              extendParams: (0, _moduleExtendParams_js__WEBPACK_IMPORTED_MODULE_21__["default"])(params, allModulesParams),
              on: swiper.on.bind(swiper),
              once: swiper.once.bind(swiper),
              off: swiper.off.bind(swiper),
              emit: swiper.emit.bind(swiper)
            });
          }); // Extend defaults with modules params

          var swiperParams = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.extend)({}, _defaults_js__WEBPACK_IMPORTED_MODULE_20__["default"], allModulesParams); // Extend defaults with passed params

          swiper.params = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.extend)({}, swiperParams, extendedDefaults, params);
          swiper.originalParams = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.extend)({}, swiper.params);
          swiper.passedParams = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.extend)({}, params); // add event listeners

          if (swiper.params && swiper.params.on) {
            Object.keys(swiper.params.on).forEach(function (eventName) {
              swiper.on(eventName, swiper.params.on[eventName]);
            });
          }
          if (swiper.params && swiper.params.onAny) {
            swiper.onAny(swiper.params.onAny);
          } // Save Dom lib

          swiper.$ = _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"]; // Extend Swiper

          Object.assign(swiper, {
            enabled: swiper.params.enabled,
            el: el,
            // Classes
            classNames: [],
            // Slides
            slides: (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(),
            slidesGrid: [],
            snapGrid: [],
            slidesSizesGrid: [],
            // isDirection
            isHorizontal: function isHorizontal() {
              return swiper.params.direction === 'horizontal';
            },
            isVertical: function isVertical() {
              return swiper.params.direction === 'vertical';
            },
            // Indexes
            activeIndex: 0,
            realIndex: 0,
            //
            isBeginning: true,
            isEnd: false,
            // Props
            translate: 0,
            previousTranslate: 0,
            progress: 0,
            velocity: 0,
            animating: false,
            // Locks
            allowSlideNext: swiper.params.allowSlideNext,
            allowSlidePrev: swiper.params.allowSlidePrev,
            // Touch Events
            touchEvents: function touchEvents() {
              var touch = ['touchstart', 'touchmove', 'touchend', 'touchcancel'];
              var desktop = ['pointerdown', 'pointermove', 'pointerup'];
              swiper.touchEventsTouch = {
                start: touch[0],
                move: touch[1],
                end: touch[2],
                cancel: touch[3]
              };
              swiper.touchEventsDesktop = {
                start: desktop[0],
                move: desktop[1],
                end: desktop[2]
              };
              return swiper.support.touch || !swiper.params.simulateTouch ? swiper.touchEventsTouch : swiper.touchEventsDesktop;
            }(),
            touchEventsData: {
              isTouched: undefined,
              isMoved: undefined,
              allowTouchCallbacks: undefined,
              touchStartTime: undefined,
              isScrolling: undefined,
              currentTranslate: undefined,
              startTranslate: undefined,
              allowThresholdMove: undefined,
              // Form elements to match
              focusableElements: swiper.params.focusableElements,
              // Last click time
              lastClickTime: (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.now)(),
              clickTimeout: undefined,
              // Velocities
              velocities: [],
              allowMomentumBounce: undefined,
              isTouchEvent: undefined,
              startMoving: undefined
            },
            // Clicks
            allowClick: true,
            // Touches
            allowTouchMove: swiper.params.allowTouchMove,
            touches: {
              startX: 0,
              startY: 0,
              currentX: 0,
              currentY: 0,
              diff: 0
            },
            // Images
            imagesToLoad: [],
            imagesLoaded: 0
          });
          swiper.emit('_swiper'); // Init

          if (swiper.params.init) {
            swiper.init();
          } // Return app instance
          // eslint-disable-next-line no-constructor-return

          return swiper;
        }
        _createClass(Swiper, [{
          key: "enable",
          value: function enable() {
            var swiper = this;
            if (swiper.enabled) return;
            swiper.enabled = true;
            if (swiper.params.grabCursor) {
              swiper.setGrabCursor();
            }
            swiper.emit('enable');
          }
        }, {
          key: "disable",
          value: function disable() {
            var swiper = this;
            if (!swiper.enabled) return;
            swiper.enabled = false;
            if (swiper.params.grabCursor) {
              swiper.unsetGrabCursor();
            }
            swiper.emit('disable');
          }
        }, {
          key: "setProgress",
          value: function setProgress(progress, speed) {
            var swiper = this;
            progress = Math.min(Math.max(progress, 0), 1);
            var min = swiper.minTranslate();
            var max = swiper.maxTranslate();
            var current = (max - min) * progress + min;
            swiper.translateTo(current, typeof speed === 'undefined' ? 0 : speed);
            swiper.updateActiveIndex();
            swiper.updateSlidesClasses();
          }
        }, {
          key: "emitContainerClasses",
          value: function emitContainerClasses() {
            var swiper = this;
            if (!swiper.params._emitClasses || !swiper.el) return;
            var cls = swiper.el.className.split(' ').filter(function (className) {
              return className.indexOf('swiper') === 0 || className.indexOf(swiper.params.containerModifierClass) === 0;
            });
            swiper.emit('_containerClasses', cls.join(' '));
          }
        }, {
          key: "getSlideClasses",
          value: function getSlideClasses(slideEl) {
            var swiper = this;
            if (swiper.destroyed) return '';
            return slideEl.className.split(' ').filter(function (className) {
              return className.indexOf('swiper-slide') === 0 || className.indexOf(swiper.params.slideClass) === 0;
            }).join(' ');
          }
        }, {
          key: "emitSlidesClasses",
          value: function emitSlidesClasses() {
            var swiper = this;
            if (!swiper.params._emitClasses || !swiper.el) return;
            var updates = [];
            swiper.slides.each(function (slideEl) {
              var classNames = swiper.getSlideClasses(slideEl);
              updates.push({
                slideEl: slideEl,
                classNames: classNames
              });
              swiper.emit('_slideClass', slideEl, classNames);
            });
            swiper.emit('_slideClasses', updates);
          }
        }, {
          key: "slidesPerViewDynamic",
          value: function slidesPerViewDynamic() {
            var view = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'current';
            var exact = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;
            var swiper = this;
            var params = swiper.params,
              slides = swiper.slides,
              slidesGrid = swiper.slidesGrid,
              slidesSizesGrid = swiper.slidesSizesGrid,
              swiperSize = swiper.size,
              activeIndex = swiper.activeIndex;
            var spv = 1;
            if (params.centeredSlides) {
              var slideSize = slides[activeIndex].swiperSlideSize;
              var breakLoop;
              for (var _i34 = activeIndex + 1; _i34 < slides.length; _i34 += 1) {
                if (slides[_i34] && !breakLoop) {
                  slideSize += slides[_i34].swiperSlideSize;
                  spv += 1;
                  if (slideSize > swiperSize) breakLoop = true;
                }
              }
              for (var _i35 = activeIndex - 1; _i35 >= 0; _i35 -= 1) {
                if (slides[_i35] && !breakLoop) {
                  slideSize += slides[_i35].swiperSlideSize;
                  spv += 1;
                  if (slideSize > swiperSize) breakLoop = true;
                }
              }
            } else {
              // eslint-disable-next-line
              if (view === 'current') {
                for (var _i36 = activeIndex + 1; _i36 < slides.length; _i36 += 1) {
                  var slideInView = exact ? slidesGrid[_i36] + slidesSizesGrid[_i36] - slidesGrid[activeIndex] < swiperSize : slidesGrid[_i36] - slidesGrid[activeIndex] < swiperSize;
                  if (slideInView) {
                    spv += 1;
                  }
                }
              } else {
                // previous
                for (var _i37 = activeIndex - 1; _i37 >= 0; _i37 -= 1) {
                  var _slideInView = slidesGrid[activeIndex] - slidesGrid[_i37] < swiperSize;
                  if (_slideInView) {
                    spv += 1;
                  }
                }
              }
            }
            return spv;
          }
        }, {
          key: "update",
          value: function update() {
            var swiper = this;
            if (!swiper || swiper.destroyed) return;
            var snapGrid = swiper.snapGrid,
              params = swiper.params; // Breakpoints

            if (params.breakpoints) {
              swiper.setBreakpoint();
            }
            swiper.updateSize();
            swiper.updateSlides();
            swiper.updateProgress();
            swiper.updateSlidesClasses();
            function setTranslate() {
              var translateValue = swiper.rtlTranslate ? swiper.translate * -1 : swiper.translate;
              var newTranslate = Math.min(Math.max(translateValue, swiper.maxTranslate()), swiper.minTranslate());
              swiper.setTranslate(newTranslate);
              swiper.updateActiveIndex();
              swiper.updateSlidesClasses();
            }
            var translated;
            if (swiper.params.freeMode && swiper.params.freeMode.enabled) {
              setTranslate();
              if (swiper.params.autoHeight) {
                swiper.updateAutoHeight();
              }
            } else {
              if ((swiper.params.slidesPerView === 'auto' || swiper.params.slidesPerView > 1) && swiper.isEnd && !swiper.params.centeredSlides) {
                translated = swiper.slideTo(swiper.slides.length - 1, 0, false, true);
              } else {
                translated = swiper.slideTo(swiper.activeIndex, 0, false, true);
              }
              if (!translated) {
                setTranslate();
              }
            }
            if (params.watchOverflow && snapGrid !== swiper.snapGrid) {
              swiper.checkOverflow();
            }
            swiper.emit('update');
          }
        }, {
          key: "changeDirection",
          value: function changeDirection(newDirection) {
            var needUpdate = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
            var swiper = this;
            var currentDirection = swiper.params.direction;
            if (!newDirection) {
              // eslint-disable-next-line
              newDirection = currentDirection === 'horizontal' ? 'vertical' : 'horizontal';
            }
            if (newDirection === currentDirection || newDirection !== 'horizontal' && newDirection !== 'vertical') {
              return swiper;
            }
            swiper.$el.removeClass("".concat(swiper.params.containerModifierClass).concat(currentDirection)).addClass("".concat(swiper.params.containerModifierClass).concat(newDirection));
            swiper.emitContainerClasses();
            swiper.params.direction = newDirection;
            swiper.slides.each(function (slideEl) {
              if (newDirection === 'vertical') {
                slideEl.style.width = '';
              } else {
                slideEl.style.height = '';
              }
            });
            swiper.emit('changeDirection');
            if (needUpdate) swiper.update();
            return swiper;
          }
        }, {
          key: "changeLanguageDirection",
          value: function changeLanguageDirection(direction) {
            var swiper = this;
            if (swiper.rtl && direction === 'rtl' || !swiper.rtl && direction === 'ltr') return;
            swiper.rtl = direction === 'rtl';
            swiper.rtlTranslate = swiper.params.direction === 'horizontal' && swiper.rtl;
            if (swiper.rtl) {
              swiper.$el.addClass("".concat(swiper.params.containerModifierClass, "rtl"));
              swiper.el.dir = 'rtl';
            } else {
              swiper.$el.removeClass("".concat(swiper.params.containerModifierClass, "rtl"));
              swiper.el.dir = 'ltr';
            }
            swiper.update();
          }
        }, {
          key: "mount",
          value: function mount(el) {
            var swiper = this;
            if (swiper.mounted) return true; // Find el

            var $el = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(el || swiper.params.el);
            el = $el[0];
            if (!el) {
              return false;
            }
            el.swiper = swiper;
            var getWrapperSelector = function getWrapperSelector() {
              return ".".concat((swiper.params.wrapperClass || '').trim().split(' ').join('.'));
            };
            var getWrapper = function getWrapper() {
              if (el && el.shadowRoot && el.shadowRoot.querySelector) {
                var res = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(el.shadowRoot.querySelector(getWrapperSelector())); // Children needs to return slot items

                res.children = function (options) {
                  return $el.children(options);
                };
                return res;
              }
              if (!$el.children) {
                return (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])($el).children(getWrapperSelector());
              }
              return $el.children(getWrapperSelector());
            }; // Find Wrapper

            var $wrapperEl = getWrapper();
            if ($wrapperEl.length === 0 && swiper.params.createElements) {
              var _document2 = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
              var wrapper = _document2.createElement('div');
              $wrapperEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(wrapper);
              wrapper.className = swiper.params.wrapperClass;
              $el.append(wrapper);
              $el.children(".".concat(swiper.params.slideClass)).each(function (slideEl) {
                $wrapperEl.append(slideEl);
              });
            }
            Object.assign(swiper, {
              $el: $el,
              el: el,
              $wrapperEl: $wrapperEl,
              wrapperEl: $wrapperEl[0],
              mounted: true,
              // RTL
              rtl: el.dir.toLowerCase() === 'rtl' || $el.css('direction') === 'rtl',
              rtlTranslate: swiper.params.direction === 'horizontal' && (el.dir.toLowerCase() === 'rtl' || $el.css('direction') === 'rtl'),
              wrongRTL: $wrapperEl.css('display') === '-webkit-box'
            });
            return true;
          }
        }, {
          key: "init",
          value: function init(el) {
            var swiper = this;
            if (swiper.initialized) return swiper;
            var mounted = swiper.mount(el);
            if (mounted === false) return swiper;
            swiper.emit('beforeInit'); // Set breakpoint

            if (swiper.params.breakpoints) {
              swiper.setBreakpoint();
            } // Add Classes

            swiper.addClasses(); // Create loop

            if (swiper.params.loop) {
              swiper.loopCreate();
            } // Update size

            swiper.updateSize(); // Update slides

            swiper.updateSlides();
            if (swiper.params.watchOverflow) {
              swiper.checkOverflow();
            } // Set Grab Cursor

            if (swiper.params.grabCursor && swiper.enabled) {
              swiper.setGrabCursor();
            }
            if (swiper.params.preloadImages) {
              swiper.preloadImages();
            } // Slide To Initial Slide

            if (swiper.params.loop) {
              swiper.slideTo(swiper.params.initialSlide + swiper.loopedSlides, 0, swiper.params.runCallbacksOnInit, false, true);
            } else {
              swiper.slideTo(swiper.params.initialSlide, 0, swiper.params.runCallbacksOnInit, false, true);
            } // Attach events

            swiper.attachEvents(); // Init Flag

            swiper.initialized = true; // Emit

            swiper.emit('init');
            swiper.emit('afterInit');
            return swiper;
          }
        }, {
          key: "destroy",
          value: function destroy() {
            var deleteInstance = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;
            var cleanStyles = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
            var swiper = this;
            var params = swiper.params,
              $el = swiper.$el,
              $wrapperEl = swiper.$wrapperEl,
              slides = swiper.slides;
            if (typeof swiper.params === 'undefined' || swiper.destroyed) {
              return null;
            }
            swiper.emit('beforeDestroy'); // Init Flag

            swiper.initialized = false; // Detach events

            swiper.detachEvents(); // Destroy loop

            if (params.loop) {
              swiper.loopDestroy();
            } // Cleanup styles

            if (cleanStyles) {
              swiper.removeClasses();
              $el.removeAttr('style');
              $wrapperEl.removeAttr('style');
              if (slides && slides.length) {
                slides.removeClass([params.slideVisibleClass, params.slideActiveClass, params.slideNextClass, params.slidePrevClass].join(' ')).removeAttr('style').removeAttr('data-swiper-slide-index');
              }
            }
            swiper.emit('destroy'); // Detach emitter events

            Object.keys(swiper.eventsListeners).forEach(function (eventName) {
              swiper.off(eventName);
            });
            if (deleteInstance !== false) {
              swiper.$el[0].swiper = null;
              (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.deleteProps)(swiper);
            }
            swiper.destroyed = true;
            return null;
          }
        }], [{
          key: "extendDefaults",
          value: function extendDefaults(newDefaults) {
            (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.extend)(extendedDefaults, newDefaults);
          }
        }, {
          key: "extendedDefaults",
          get: function get() {
            return extendedDefaults;
          }
        }, {
          key: "defaults",
          get: function get() {
            return _defaults_js__WEBPACK_IMPORTED_MODULE_20__["default"];
          }
        }, {
          key: "installModule",
          value: function installModule(mod) {
            if (!Swiper.prototype.__modules__) Swiper.prototype.__modules__ = [];
            var modules = Swiper.prototype.__modules__;
            if (typeof mod === 'function' && modules.indexOf(mod) < 0) {
              modules.push(mod);
            }
          }
        }, {
          key: "use",
          value: function use(module) {
            if (Array.isArray(module)) {
              module.forEach(function (m) {
                return Swiper.installModule(m);
              });
              return Swiper;
            }
            Swiper.installModule(module);
            return Swiper;
          }
        }]);
        return Swiper;
      }();
      Object.keys(prototypes).forEach(function (prototypeGroup) {
        Object.keys(prototypes[prototypeGroup]).forEach(function (protoMethod) {
          Swiper.prototype[protoMethod] = prototypes[prototypeGroup][protoMethod];
        });
      });
      Swiper.use([_modules_resize_resize_js__WEBPACK_IMPORTED_MODULE_6__["default"], _modules_observer_observer_js__WEBPACK_IMPORTED_MODULE_7__["default"]]);
      /* harmony default export */
      __webpack_exports__["default"] = Swiper;

      /***/
    },

    /***/"./node_modules/swiper/core/defaults.js":
    /*!**********************************************!*\
      !*** ./node_modules/swiper/core/defaults.js ***!
      \**********************************************/
    /***/
    function node_modulesSwiperCoreDefaultsJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_112948__) {
      __nested_webpack_require_112948__.r(__webpack_exports__);
      /* harmony default export */
      __webpack_exports__["default"] = {
        init: true,
        direction: 'horizontal',
        touchEventsTarget: 'wrapper',
        initialSlide: 0,
        speed: 300,
        cssMode: false,
        updateOnWindowResize: true,
        resizeObserver: true,
        nested: false,
        createElements: false,
        enabled: true,
        focusableElements: 'input, select, option, textarea, button, video, label',
        // Overrides
        width: null,
        height: null,
        //
        preventInteractionOnTransition: false,
        // ssr
        userAgent: null,
        url: null,
        // To support iOS's swipe-to-go-back gesture (when being used in-app).
        edgeSwipeDetection: false,
        edgeSwipeThreshold: 20,
        // Autoheight
        autoHeight: false,
        // Set wrapper width
        setWrapperSize: false,
        // Virtual Translate
        virtualTranslate: false,
        // Effects
        effect: 'slide',
        // 'slide' or 'fade' or 'cube' or 'coverflow' or 'flip'
        // Breakpoints
        breakpoints: undefined,
        breakpointsBase: 'window',
        // Slides grid
        spaceBetween: 0,
        slidesPerView: 1,
        slidesPerGroup: 1,
        slidesPerGroupSkip: 0,
        slidesPerGroupAuto: false,
        centeredSlides: false,
        centeredSlidesBounds: false,
        slidesOffsetBefore: 0,
        // in px
        slidesOffsetAfter: 0,
        // in px
        normalizeSlideIndex: true,
        centerInsufficientSlides: false,
        // Disable swiper and hide navigation when container not overflow
        watchOverflow: true,
        // Round length
        roundLengths: false,
        // Touches
        touchRatio: 1,
        touchAngle: 45,
        simulateTouch: true,
        shortSwipes: true,
        longSwipes: true,
        longSwipesRatio: 0.5,
        longSwipesMs: 300,
        followFinger: true,
        allowTouchMove: true,
        threshold: 0,
        touchMoveStopPropagation: false,
        touchStartPreventDefault: true,
        touchStartForcePreventDefault: false,
        touchReleaseOnEdges: false,
        // Unique Navigation Elements
        uniqueNavElements: true,
        // Resistance
        resistance: true,
        resistanceRatio: 0.85,
        // Progress
        watchSlidesProgress: false,
        // Cursor
        grabCursor: false,
        // Clicks
        preventClicks: true,
        preventClicksPropagation: true,
        slideToClickedSlide: false,
        // Images
        preloadImages: true,
        updateOnImagesReady: true,
        // loop
        loop: false,
        loopAdditionalSlides: 0,
        loopedSlides: null,
        loopedSlidesLimit: true,
        loopFillGroupWithBlank: false,
        loopPreventsSlide: true,
        // rewind
        rewind: false,
        // Swiping/no swiping
        allowSlidePrev: true,
        allowSlideNext: true,
        swipeHandler: null,
        // '.swipe-handler',
        noSwiping: true,
        noSwipingClass: 'swiper-no-swiping',
        noSwipingSelector: null,
        // Passive Listeners
        passiveListeners: true,
        maxBackfaceHiddenSlides: 10,
        // NS
        containerModifierClass: 'swiper-',
        // NEW
        slideClass: 'swiper-slide',
        slideBlankClass: 'swiper-slide-invisible-blank',
        slideActiveClass: 'swiper-slide-active',
        slideDuplicateActiveClass: 'swiper-slide-duplicate-active',
        slideVisibleClass: 'swiper-slide-visible',
        slideDuplicateClass: 'swiper-slide-duplicate',
        slideNextClass: 'swiper-slide-next',
        slideDuplicateNextClass: 'swiper-slide-duplicate-next',
        slidePrevClass: 'swiper-slide-prev',
        slideDuplicatePrevClass: 'swiper-slide-duplicate-prev',
        wrapperClass: 'swiper-wrapper',
        // Callbacks
        runCallbacksOnInit: true,
        // Internals
        _emitClasses: false
      };

      /***/
    },

    /***/"./node_modules/swiper/core/events-emitter.js":
    /*!****************************************************!*\
      !*** ./node_modules/swiper/core/events-emitter.js ***!
      \****************************************************/
    /***/
    function node_modulesSwiperCoreEventsEmitterJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_117381__) {
      __nested_webpack_require_117381__.r(__webpack_exports__);
      /* eslint-disable no-underscore-dangle */
      /* harmony default export */
      __webpack_exports__["default"] = {
        on: function on(events, handler, priority) {
          var self = this;
          if (!self.eventsListeners || self.destroyed) return self;
          if (typeof handler !== 'function') return self;
          var method = priority ? 'unshift' : 'push';
          events.split(' ').forEach(function (event) {
            if (!self.eventsListeners[event]) self.eventsListeners[event] = [];
            self.eventsListeners[event][method](handler);
          });
          return self;
        },
        once: function once(events, handler, priority) {
          var self = this;
          if (!self.eventsListeners || self.destroyed) return self;
          if (typeof handler !== 'function') return self;
          function onceHandler() {
            self.off(events, onceHandler);
            if (onceHandler.__emitterProxy) {
              delete onceHandler.__emitterProxy;
            }
            for (var _len16 = arguments.length, args = new Array(_len16), _key16 = 0; _key16 < _len16; _key16++) {
              args[_key16] = arguments[_key16];
            }
            handler.apply(self, args);
          }
          onceHandler.__emitterProxy = handler;
          return self.on(events, onceHandler, priority);
        },
        onAny: function onAny(handler, priority) {
          var self = this;
          if (!self.eventsListeners || self.destroyed) return self;
          if (typeof handler !== 'function') return self;
          var method = priority ? 'unshift' : 'push';
          if (self.eventsAnyListeners.indexOf(handler) < 0) {
            self.eventsAnyListeners[method](handler);
          }
          return self;
        },
        offAny: function offAny(handler) {
          var self = this;
          if (!self.eventsListeners || self.destroyed) return self;
          if (!self.eventsAnyListeners) return self;
          var index = self.eventsAnyListeners.indexOf(handler);
          if (index >= 0) {
            self.eventsAnyListeners.splice(index, 1);
          }
          return self;
        },
        off: function off(events, handler) {
          var self = this;
          if (!self.eventsListeners || self.destroyed) return self;
          if (!self.eventsListeners) return self;
          events.split(' ').forEach(function (event) {
            if (typeof handler === 'undefined') {
              self.eventsListeners[event] = [];
            } else if (self.eventsListeners[event]) {
              self.eventsListeners[event].forEach(function (eventHandler, index) {
                if (eventHandler === handler || eventHandler.__emitterProxy && eventHandler.__emitterProxy === handler) {
                  self.eventsListeners[event].splice(index, 1);
                }
              });
            }
          });
          return self;
        },
        emit: function emit() {
          var self = this;
          if (!self.eventsListeners || self.destroyed) return self;
          if (!self.eventsListeners) return self;
          var events;
          var data;
          var context;
          for (var _len17 = arguments.length, args = new Array(_len17), _key17 = 0; _key17 < _len17; _key17++) {
            args[_key17] = arguments[_key17];
          }
          if (typeof args[0] === 'string' || Array.isArray(args[0])) {
            events = args[0];
            data = args.slice(1, args.length);
            context = self;
          } else {
            events = args[0].events;
            data = args[0].data;
            context = args[0].context || self;
          }
          data.unshift(context);
          var eventsArray = Array.isArray(events) ? events : events.split(' ');
          eventsArray.forEach(function (event) {
            if (self.eventsAnyListeners && self.eventsAnyListeners.length) {
              self.eventsAnyListeners.forEach(function (eventHandler) {
                eventHandler.apply(context, [event].concat(_toConsumableArray(data)));
              });
            }
            if (self.eventsListeners && self.eventsListeners[event]) {
              self.eventsListeners[event].forEach(function (eventHandler) {
                eventHandler.apply(context, data);
              });
            }
          });
          return self;
        }
      };

      /***/
    },

    /***/"./node_modules/swiper/core/events/index.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/core/events/index.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperCoreEventsIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_122214__) {
      __nested_webpack_require_122214__.r(__webpack_exports__);
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_122214__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _onTouchStart_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_122214__( /*! ./onTouchStart.js */"./node_modules/swiper/core/events/onTouchStart.js");
      /* harmony import */
      var _onTouchMove_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_122214__( /*! ./onTouchMove.js */"./node_modules/swiper/core/events/onTouchMove.js");
      /* harmony import */
      var _onTouchEnd_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_122214__( /*! ./onTouchEnd.js */"./node_modules/swiper/core/events/onTouchEnd.js");
      /* harmony import */
      var _onResize_js__WEBPACK_IMPORTED_MODULE_4__ = __nested_webpack_require_122214__( /*! ./onResize.js */"./node_modules/swiper/core/events/onResize.js");
      /* harmony import */
      var _onClick_js__WEBPACK_IMPORTED_MODULE_5__ = __nested_webpack_require_122214__( /*! ./onClick.js */"./node_modules/swiper/core/events/onClick.js");
      /* harmony import */
      var _onScroll_js__WEBPACK_IMPORTED_MODULE_6__ = __nested_webpack_require_122214__( /*! ./onScroll.js */"./node_modules/swiper/core/events/onScroll.js");
      var dummyEventAttached = false;
      function dummyEventListener() {}
      var events = function events(swiper, method) {
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var params = swiper.params,
          touchEvents = swiper.touchEvents,
          el = swiper.el,
          wrapperEl = swiper.wrapperEl,
          device = swiper.device,
          support = swiper.support;
        var capture = !!params.nested;
        var domMethod = method === 'on' ? 'addEventListener' : 'removeEventListener';
        var swiperMethod = method; // Touch Events

        if (!support.touch) {
          el[domMethod](touchEvents.start, swiper.onTouchStart, false);
          document[domMethod](touchEvents.move, swiper.onTouchMove, capture);
          document[domMethod](touchEvents.end, swiper.onTouchEnd, false);
        } else {
          var passiveListener = touchEvents.start === 'touchstart' && support.passiveListener && params.passiveListeners ? {
            passive: true,
            capture: false
          } : false;
          el[domMethod](touchEvents.start, swiper.onTouchStart, passiveListener);
          el[domMethod](touchEvents.move, swiper.onTouchMove, support.passiveListener ? {
            passive: false,
            capture: capture
          } : capture);
          el[domMethod](touchEvents.end, swiper.onTouchEnd, passiveListener);
          if (touchEvents.cancel) {
            el[domMethod](touchEvents.cancel, swiper.onTouchEnd, passiveListener);
          }
        } // Prevent Links Clicks

        if (params.preventClicks || params.preventClicksPropagation) {
          el[domMethod]('click', swiper.onClick, true);
        }
        if (params.cssMode) {
          wrapperEl[domMethod]('scroll', swiper.onScroll);
        } // Resize handler

        if (params.updateOnWindowResize) {
          swiper[swiperMethod](device.ios || device.android ? 'resize orientationchange observerUpdate' : 'resize observerUpdate', _onResize_js__WEBPACK_IMPORTED_MODULE_4__["default"], true);
        } else {
          swiper[swiperMethod]('observerUpdate', _onResize_js__WEBPACK_IMPORTED_MODULE_4__["default"], true);
        }
      };
      function attachEvents() {
        var swiper = this;
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var params = swiper.params,
          support = swiper.support;
        swiper.onTouchStart = _onTouchStart_js__WEBPACK_IMPORTED_MODULE_1__["default"].bind(swiper);
        swiper.onTouchMove = _onTouchMove_js__WEBPACK_IMPORTED_MODULE_2__["default"].bind(swiper);
        swiper.onTouchEnd = _onTouchEnd_js__WEBPACK_IMPORTED_MODULE_3__["default"].bind(swiper);
        if (params.cssMode) {
          swiper.onScroll = _onScroll_js__WEBPACK_IMPORTED_MODULE_6__["default"].bind(swiper);
        }
        swiper.onClick = _onClick_js__WEBPACK_IMPORTED_MODULE_5__["default"].bind(swiper);
        if (support.touch && !dummyEventAttached) {
          document.addEventListener('touchstart', dummyEventListener);
          dummyEventAttached = true;
        }
        events(swiper, 'on');
      }
      function detachEvents() {
        var swiper = this;
        events(swiper, 'off');
      }

      /* harmony default export */
      __webpack_exports__["default"] = {
        attachEvents: attachEvents,
        detachEvents: detachEvents
      };

      /***/
    },

    /***/"./node_modules/swiper/core/events/onClick.js":
    /*!****************************************************!*\
      !*** ./node_modules/swiper/core/events/onClick.js ***!
      \****************************************************/
    /***/
    function node_modulesSwiperCoreEventsOnClickJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_127302__) {
      __nested_webpack_require_127302__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_127302__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */onClick
          );
        }
        /* harmony export */
      });
      function onClick(e) {
        var swiper = this;
        if (!swiper.enabled) return;
        if (!swiper.allowClick) {
          if (swiper.params.preventClicks) e.preventDefault();
          if (swiper.params.preventClicksPropagation && swiper.animating) {
            e.stopPropagation();
            e.stopImmediatePropagation();
          }
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/events/onResize.js":
    /*!*****************************************************!*\
      !*** ./node_modules/swiper/core/events/onResize.js ***!
      \*****************************************************/
    /***/
    function node_modulesSwiperCoreEventsOnResizeJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_128374__) {
      __nested_webpack_require_128374__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_128374__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */onResize
          );
        }
        /* harmony export */
      });
      function onResize() {
        var swiper = this;
        var params = swiper.params,
          el = swiper.el;
        if (el && el.offsetWidth === 0) return; // Breakpoints

        if (params.breakpoints) {
          swiper.setBreakpoint();
        } // Save locks

        var allowSlideNext = swiper.allowSlideNext,
          allowSlidePrev = swiper.allowSlidePrev,
          snapGrid = swiper.snapGrid; // Disable locks on resize

        swiper.allowSlideNext = true;
        swiper.allowSlidePrev = true;
        swiper.updateSize();
        swiper.updateSlides();
        swiper.updateSlidesClasses();
        if ((params.slidesPerView === 'auto' || params.slidesPerView > 1) && swiper.isEnd && !swiper.isBeginning && !swiper.params.centeredSlides) {
          swiper.slideTo(swiper.slides.length - 1, 0, false, true);
        } else {
          swiper.slideTo(swiper.activeIndex, 0, false, true);
        }
        if (swiper.autoplay && swiper.autoplay.running && swiper.autoplay.paused) {
          swiper.autoplay.run();
        } // Return locks after resize

        swiper.allowSlidePrev = allowSlidePrev;
        swiper.allowSlideNext = allowSlideNext;
        if (swiper.params.watchOverflow && snapGrid !== swiper.snapGrid) {
          swiper.checkOverflow();
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/events/onScroll.js":
    /*!*****************************************************!*\
      !*** ./node_modules/swiper/core/events/onScroll.js ***!
      \*****************************************************/
    /***/
    function node_modulesSwiperCoreEventsOnScrollJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_130379__) {
      __nested_webpack_require_130379__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_130379__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */onScroll
          );
        }
        /* harmony export */
      });
      function onScroll() {
        var swiper = this;
        var wrapperEl = swiper.wrapperEl,
          rtlTranslate = swiper.rtlTranslate,
          enabled = swiper.enabled;
        if (!enabled) return;
        swiper.previousTranslate = swiper.translate;
        if (swiper.isHorizontal()) {
          swiper.translate = -wrapperEl.scrollLeft;
        } else {
          swiper.translate = -wrapperEl.scrollTop;
        } // eslint-disable-next-line

        if (swiper.translate === 0) swiper.translate = 0;
        swiper.updateActiveIndex();
        swiper.updateSlidesClasses();
        var newProgress;
        var translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
        if (translatesDiff === 0) {
          newProgress = 0;
        } else {
          newProgress = (swiper.translate - swiper.minTranslate()) / translatesDiff;
        }
        if (newProgress !== swiper.progress) {
          swiper.updateProgress(rtlTranslate ? -swiper.translate : swiper.translate);
        }
        swiper.emit('setTranslate', swiper.translate, false);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/events/onTouchEnd.js":
    /*!*******************************************************!*\
      !*** ./node_modules/swiper/core/events/onTouchEnd.js ***!
      \*******************************************************/
    /***/
    function node_modulesSwiperCoreEventsOnTouchEndJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_132171__) {
      __nested_webpack_require_132171__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_132171__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */onTouchEnd
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_132171__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function onTouchEnd(event) {
        var swiper = this;
        var data = swiper.touchEventsData;
        var params = swiper.params,
          touches = swiper.touches,
          rtl = swiper.rtlTranslate,
          slidesGrid = swiper.slidesGrid,
          enabled = swiper.enabled;
        if (!enabled) return;
        var e = event;
        if (e.originalEvent) e = e.originalEvent;
        if (data.allowTouchCallbacks) {
          swiper.emit('touchEnd', e);
        }
        data.allowTouchCallbacks = false;
        if (!data.isTouched) {
          if (data.isMoved && params.grabCursor) {
            swiper.setGrabCursor(false);
          }
          data.isMoved = false;
          data.startMoving = false;
          return;
        } // Return Grab Cursor

        if (params.grabCursor && data.isMoved && data.isTouched && (swiper.allowSlideNext === true || swiper.allowSlidePrev === true)) {
          swiper.setGrabCursor(false);
        } // Time diff

        var touchEndTime = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.now)();
        var timeDiff = touchEndTime - data.touchStartTime; // Tap, doubleTap, Click

        if (swiper.allowClick) {
          var pathTree = e.path || e.composedPath && e.composedPath();
          swiper.updateClickedSlide(pathTree && pathTree[0] || e.target);
          swiper.emit('tap click', e);
          if (timeDiff < 300 && touchEndTime - data.lastClickTime < 300) {
            swiper.emit('doubleTap doubleClick', e);
          }
        }
        data.lastClickTime = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.now)();
        (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.nextTick)(function () {
          if (!swiper.destroyed) swiper.allowClick = true;
        });
        if (!data.isTouched || !data.isMoved || !swiper.swipeDirection || touches.diff === 0 || data.currentTranslate === data.startTranslate) {
          data.isTouched = false;
          data.isMoved = false;
          data.startMoving = false;
          return;
        }
        data.isTouched = false;
        data.isMoved = false;
        data.startMoving = false;
        var currentPos;
        if (params.followFinger) {
          currentPos = rtl ? swiper.translate : -swiper.translate;
        } else {
          currentPos = -data.currentTranslate;
        }
        if (params.cssMode) {
          return;
        }
        if (swiper.params.freeMode && params.freeMode.enabled) {
          swiper.freeMode.onTouchEnd({
            currentPos: currentPos
          });
          return;
        } // Find current slide

        var stopIndex = 0;
        var groupSize = swiper.slidesSizesGrid[0];
        for (var _i38 = 0; _i38 < slidesGrid.length; _i38 += _i38 < params.slidesPerGroupSkip ? 1 : params.slidesPerGroup) {
          var _increment = _i38 < params.slidesPerGroupSkip - 1 ? 1 : params.slidesPerGroup;
          if (typeof slidesGrid[_i38 + _increment] !== 'undefined') {
            if (currentPos >= slidesGrid[_i38] && currentPos < slidesGrid[_i38 + _increment]) {
              stopIndex = _i38;
              groupSize = slidesGrid[_i38 + _increment] - slidesGrid[_i38];
            }
          } else if (currentPos >= slidesGrid[_i38]) {
            stopIndex = _i38;
            groupSize = slidesGrid[slidesGrid.length - 1] - slidesGrid[slidesGrid.length - 2];
          }
        }
        var rewindFirstIndex = null;
        var rewindLastIndex = null;
        if (params.rewind) {
          if (swiper.isBeginning) {
            rewindLastIndex = swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual ? swiper.virtual.slides.length - 1 : swiper.slides.length - 1;
          } else if (swiper.isEnd) {
            rewindFirstIndex = 0;
          }
        } // Find current slide size

        var ratio = (currentPos - slidesGrid[stopIndex]) / groupSize;
        var increment = stopIndex < params.slidesPerGroupSkip - 1 ? 1 : params.slidesPerGroup;
        if (timeDiff > params.longSwipesMs) {
          // Long touches
          if (!params.longSwipes) {
            swiper.slideTo(swiper.activeIndex);
            return;
          }
          if (swiper.swipeDirection === 'next') {
            if (ratio >= params.longSwipesRatio) swiper.slideTo(params.rewind && swiper.isEnd ? rewindFirstIndex : stopIndex + increment);else swiper.slideTo(stopIndex);
          }
          if (swiper.swipeDirection === 'prev') {
            if (ratio > 1 - params.longSwipesRatio) {
              swiper.slideTo(stopIndex + increment);
            } else if (rewindLastIndex !== null && ratio < 0 && Math.abs(ratio) > params.longSwipesRatio) {
              swiper.slideTo(rewindLastIndex);
            } else {
              swiper.slideTo(stopIndex);
            }
          }
        } else {
          // Short swipes
          if (!params.shortSwipes) {
            swiper.slideTo(swiper.activeIndex);
            return;
          }
          var isNavButtonTarget = swiper.navigation && (e.target === swiper.navigation.nextEl || e.target === swiper.navigation.prevEl);
          if (!isNavButtonTarget) {
            if (swiper.swipeDirection === 'next') {
              swiper.slideTo(rewindFirstIndex !== null ? rewindFirstIndex : stopIndex + increment);
            }
            if (swiper.swipeDirection === 'prev') {
              swiper.slideTo(rewindLastIndex !== null ? rewindLastIndex : stopIndex);
            }
          } else if (e.target === swiper.navigation.nextEl) {
            swiper.slideTo(stopIndex + increment);
          } else {
            swiper.slideTo(stopIndex);
          }
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/events/onTouchMove.js":
    /*!********************************************************!*\
      !*** ./node_modules/swiper/core/events/onTouchMove.js ***!
      \********************************************************/
    /***/
    function node_modulesSwiperCoreEventsOnTouchMoveJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_138704__) {
      __nested_webpack_require_138704__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_138704__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */onTouchMove
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_138704__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_138704__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_138704__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function onTouchMove(event) {
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var swiper = this;
        var data = swiper.touchEventsData;
        var params = swiper.params,
          touches = swiper.touches,
          rtl = swiper.rtlTranslate,
          enabled = swiper.enabled;
        if (!enabled) return;
        var e = event;
        if (e.originalEvent) e = e.originalEvent;
        if (!data.isTouched) {
          if (data.startMoving && data.isScrolling) {
            swiper.emit('touchMoveOpposite', e);
          }
          return;
        }
        if (data.isTouchEvent && e.type !== 'touchmove') return;
        var targetTouch = e.type === 'touchmove' && e.targetTouches && (e.targetTouches[0] || e.changedTouches[0]);
        var pageX = e.type === 'touchmove' ? targetTouch.pageX : e.pageX;
        var pageY = e.type === 'touchmove' ? targetTouch.pageY : e.pageY;
        if (e.preventedByNestedSwiper) {
          touches.startX = pageX;
          touches.startY = pageY;
          return;
        }
        if (!swiper.allowTouchMove) {
          if (!(0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(e.target).is(data.focusableElements)) {
            swiper.allowClick = false;
          }
          if (data.isTouched) {
            Object.assign(touches, {
              startX: pageX,
              startY: pageY,
              currentX: pageX,
              currentY: pageY
            });
            data.touchStartTime = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.now)();
          }
          return;
        }
        if (data.isTouchEvent && params.touchReleaseOnEdges && !params.loop) {
          if (swiper.isVertical()) {
            // Vertical
            if (pageY < touches.startY && swiper.translate <= swiper.maxTranslate() || pageY > touches.startY && swiper.translate >= swiper.minTranslate()) {
              data.isTouched = false;
              data.isMoved = false;
              return;
            }
          } else if (pageX < touches.startX && swiper.translate <= swiper.maxTranslate() || pageX > touches.startX && swiper.translate >= swiper.minTranslate()) {
            return;
          }
        }
        if (data.isTouchEvent && document.activeElement) {
          if (e.target === document.activeElement && (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(e.target).is(data.focusableElements)) {
            data.isMoved = true;
            swiper.allowClick = false;
            return;
          }
        }
        if (data.allowTouchCallbacks) {
          swiper.emit('touchMove', e);
        }
        if (e.targetTouches && e.targetTouches.length > 1) return;
        touches.currentX = pageX;
        touches.currentY = pageY;
        var diffX = touches.currentX - touches.startX;
        var diffY = touches.currentY - touches.startY;
        if (swiper.params.threshold && Math.sqrt(Math.pow(diffX, 2) + Math.pow(diffY, 2)) < swiper.params.threshold) return;
        if (typeof data.isScrolling === 'undefined') {
          var touchAngle;
          if (swiper.isHorizontal() && touches.currentY === touches.startY || swiper.isVertical() && touches.currentX === touches.startX) {
            data.isScrolling = false;
          } else {
            // eslint-disable-next-line
            if (diffX * diffX + diffY * diffY >= 25) {
              touchAngle = Math.atan2(Math.abs(diffY), Math.abs(diffX)) * 180 / Math.PI;
              data.isScrolling = swiper.isHorizontal() ? touchAngle > params.touchAngle : 90 - touchAngle > params.touchAngle;
            }
          }
        }
        if (data.isScrolling) {
          swiper.emit('touchMoveOpposite', e);
        }
        if (typeof data.startMoving === 'undefined') {
          if (touches.currentX !== touches.startX || touches.currentY !== touches.startY) {
            data.startMoving = true;
          }
        }
        if (data.isScrolling) {
          data.isTouched = false;
          return;
        }
        if (!data.startMoving) {
          return;
        }
        swiper.allowClick = false;
        if (!params.cssMode && e.cancelable) {
          e.preventDefault();
        }
        if (params.touchMoveStopPropagation && !params.nested) {
          e.stopPropagation();
        }
        if (!data.isMoved) {
          if (params.loop && !params.cssMode) {
            swiper.loopFix();
          }
          data.startTranslate = swiper.getTranslate();
          swiper.setTransition(0);
          if (swiper.animating) {
            swiper.$wrapperEl.trigger('webkitTransitionEnd transitionend');
          }
          data.allowMomentumBounce = false; // Grab Cursor

          if (params.grabCursor && (swiper.allowSlideNext === true || swiper.allowSlidePrev === true)) {
            swiper.setGrabCursor(true);
          }
          swiper.emit('sliderFirstMove', e);
        }
        swiper.emit('sliderMove', e);
        data.isMoved = true;
        var diff = swiper.isHorizontal() ? diffX : diffY;
        touches.diff = diff;
        diff *= params.touchRatio;
        if (rtl) diff = -diff;
        swiper.swipeDirection = diff > 0 ? 'prev' : 'next';
        data.currentTranslate = diff + data.startTranslate;
        var disableParentSwiper = true;
        var resistanceRatio = params.resistanceRatio;
        if (params.touchReleaseOnEdges) {
          resistanceRatio = 0;
        }
        if (diff > 0 && data.currentTranslate > swiper.minTranslate()) {
          disableParentSwiper = false;
          if (params.resistance) data.currentTranslate = swiper.minTranslate() - 1 + Math.pow(-swiper.minTranslate() + data.startTranslate + diff, resistanceRatio);
        } else if (diff < 0 && data.currentTranslate < swiper.maxTranslate()) {
          disableParentSwiper = false;
          if (params.resistance) data.currentTranslate = swiper.maxTranslate() + 1 - Math.pow(swiper.maxTranslate() - data.startTranslate - diff, resistanceRatio);
        }
        if (disableParentSwiper) {
          e.preventedByNestedSwiper = true;
        } // Directions locks

        if (!swiper.allowSlideNext && swiper.swipeDirection === 'next' && data.currentTranslate < data.startTranslate) {
          data.currentTranslate = data.startTranslate;
        }
        if (!swiper.allowSlidePrev && swiper.swipeDirection === 'prev' && data.currentTranslate > data.startTranslate) {
          data.currentTranslate = data.startTranslate;
        }
        if (!swiper.allowSlidePrev && !swiper.allowSlideNext) {
          data.currentTranslate = data.startTranslate;
        } // Threshold

        if (params.threshold > 0) {
          if (Math.abs(diff) > params.threshold || data.allowThresholdMove) {
            if (!data.allowThresholdMove) {
              data.allowThresholdMove = true;
              touches.startX = touches.currentX;
              touches.startY = touches.currentY;
              data.currentTranslate = data.startTranslate;
              touches.diff = swiper.isHorizontal() ? touches.currentX - touches.startX : touches.currentY - touches.startY;
              return;
            }
          } else {
            data.currentTranslate = data.startTranslate;
            return;
          }
        }
        if (!params.followFinger || params.cssMode) return; // Update active index in free mode

        if (params.freeMode && params.freeMode.enabled && swiper.freeMode || params.watchSlidesProgress) {
          swiper.updateActiveIndex();
          swiper.updateSlidesClasses();
        }
        if (swiper.params.freeMode && params.freeMode.enabled && swiper.freeMode) {
          swiper.freeMode.onTouchMove();
        } // Update progress

        swiper.updateProgress(data.currentTranslate); // Update translate

        swiper.setTranslate(data.currentTranslate);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/events/onTouchStart.js":
    /*!*********************************************************!*\
      !*** ./node_modules/swiper/core/events/onTouchStart.js ***!
      \*********************************************************/
    /***/
    function node_modulesSwiperCoreEventsOnTouchStartJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_147795__) {
      __nested_webpack_require_147795__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_147795__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */onTouchStart
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_147795__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_147795__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_147795__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");

      // Modified from https://stackoverflow.com/questions/54520554/custom-element-getrootnode-closest-function-crossing-multiple-parent-shadowd

      function closestElement(selector) {
        var base = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this;
        function __closestFrom(el) {
          if (!el || el === (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)() || el === (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)()) return null;
          if (el.assignedSlot) el = el.assignedSlot;
          var found = el.closest(selector);
          if (!found && !el.getRootNode) {
            return null;
          }
          return found || __closestFrom(el.getRootNode().host);
        }
        return __closestFrom(base);
      }
      function onTouchStart(event) {
        var swiper = this;
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var data = swiper.touchEventsData;
        var params = swiper.params,
          touches = swiper.touches,
          enabled = swiper.enabled;
        if (!enabled) return;
        if (swiper.animating && params.preventInteractionOnTransition) {
          return;
        }
        if (!swiper.animating && params.cssMode && params.loop) {
          swiper.loopFix();
        }
        var e = event;
        if (e.originalEvent) e = e.originalEvent;
        var $targetEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(e.target);
        if (params.touchEventsTarget === 'wrapper') {
          if (!$targetEl.closest(swiper.wrapperEl).length) return;
        }
        data.isTouchEvent = e.type === 'touchstart';
        if (!data.isTouchEvent && 'which' in e && e.which === 3) return;
        if (!data.isTouchEvent && 'button' in e && e.button > 0) return;
        if (data.isTouched && data.isMoved) return; // change target el for shadow root component

        var swipingClassHasValue = !!params.noSwipingClass && params.noSwipingClass !== ''; // eslint-disable-next-line

        var eventPath = event.composedPath ? event.composedPath() : event.path;
        if (swipingClassHasValue && e.target && e.target.shadowRoot && eventPath) {
          $targetEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(eventPath[0]);
        }
        var noSwipingSelector = params.noSwipingSelector ? params.noSwipingSelector : ".".concat(params.noSwipingClass);
        var isTargetShadow = !!(e.target && e.target.shadowRoot); // use closestElement for shadow root element to get the actual closest for nested shadow root element

        if (params.noSwiping && (isTargetShadow ? closestElement(noSwipingSelector, $targetEl[0]) : $targetEl.closest(noSwipingSelector)[0])) {
          swiper.allowClick = true;
          return;
        }
        if (params.swipeHandler) {
          if (!$targetEl.closest(params.swipeHandler)[0]) return;
        }
        touches.currentX = e.type === 'touchstart' ? e.targetTouches[0].pageX : e.pageX;
        touches.currentY = e.type === 'touchstart' ? e.targetTouches[0].pageY : e.pageY;
        var startX = touches.currentX;
        var startY = touches.currentY; // Do NOT start if iOS edge swipe is detected. Otherwise iOS app cannot swipe-to-go-back anymore

        var edgeSwipeDetection = params.edgeSwipeDetection || params.iOSEdgeSwipeDetection;
        var edgeSwipeThreshold = params.edgeSwipeThreshold || params.iOSEdgeSwipeThreshold;
        if (edgeSwipeDetection && (startX <= edgeSwipeThreshold || startX >= window.innerWidth - edgeSwipeThreshold)) {
          if (edgeSwipeDetection === 'prevent') {
            event.preventDefault();
          } else {
            return;
          }
        }
        Object.assign(data, {
          isTouched: true,
          isMoved: false,
          allowTouchCallbacks: true,
          isScrolling: undefined,
          startMoving: undefined
        });
        touches.startX = startX;
        touches.startY = startY;
        data.touchStartTime = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.now)();
        swiper.allowClick = true;
        swiper.updateSize();
        swiper.swipeDirection = undefined;
        if (params.threshold > 0) data.allowThresholdMove = false;
        if (e.type !== 'touchstart') {
          var preventDefault = true;
          if ($targetEl.is(data.focusableElements)) {
            preventDefault = false;
            if ($targetEl[0].nodeName === 'SELECT') {
              data.isTouched = false;
            }
          }
          if (document.activeElement && (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(document.activeElement).is(data.focusableElements) && document.activeElement !== $targetEl[0]) {
            document.activeElement.blur();
          }
          var shouldPreventDefault = preventDefault && swiper.allowTouchMove && params.touchStartPreventDefault;
          if ((params.touchStartForcePreventDefault || shouldPreventDefault) && !$targetEl[0].isContentEditable) {
            e.preventDefault();
          }
        }
        if (swiper.params.freeMode && swiper.params.freeMode.enabled && swiper.freeMode && swiper.animating && !params.cssMode) {
          swiper.freeMode.onTouchStart();
        }
        swiper.emit('touchStart', e);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/grab-cursor/index.js":
    /*!*******************************************************!*\
      !*** ./node_modules/swiper/core/grab-cursor/index.js ***!
      \*******************************************************/
    /***/
    function node_modulesSwiperCoreGrabCursorIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_154392__) {
      __nested_webpack_require_154392__.r(__webpack_exports__);
      /* harmony import */
      var _setGrabCursor_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_154392__( /*! ./setGrabCursor.js */"./node_modules/swiper/core/grab-cursor/setGrabCursor.js");
      /* harmony import */
      var _unsetGrabCursor_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_154392__( /*! ./unsetGrabCursor.js */"./node_modules/swiper/core/grab-cursor/unsetGrabCursor.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        setGrabCursor: _setGrabCursor_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        unsetGrabCursor: _unsetGrabCursor_js__WEBPACK_IMPORTED_MODULE_1__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/grab-cursor/setGrabCursor.js":
    /*!***************************************************************!*\
      !*** ./node_modules/swiper/core/grab-cursor/setGrabCursor.js ***!
      \***************************************************************/
    /***/
    function node_modulesSwiperCoreGrabCursorSetGrabCursorJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_155546__) {
      __nested_webpack_require_155546__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_155546__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */setGrabCursor
          );
        }
        /* harmony export */
      });
      function setGrabCursor(moving) {
        var swiper = this;
        if (swiper.support.touch || !swiper.params.simulateTouch || swiper.params.watchOverflow && swiper.isLocked || swiper.params.cssMode) return;
        var el = swiper.params.touchEventsTarget === 'container' ? swiper.el : swiper.wrapperEl;
        el.style.cursor = 'move';
        el.style.cursor = moving ? 'grabbing' : 'grab';
      }

      /***/
    },

    /***/"./node_modules/swiper/core/grab-cursor/unsetGrabCursor.js":
    /*!*****************************************************************!*\
      !*** ./node_modules/swiper/core/grab-cursor/unsetGrabCursor.js ***!
      \*****************************************************************/
    /***/
    function node_modulesSwiperCoreGrabCursorUnsetGrabCursorJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_156723__) {
      __nested_webpack_require_156723__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_156723__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */unsetGrabCursor
          );
        }
        /* harmony export */
      });
      function unsetGrabCursor() {
        var swiper = this;
        if (swiper.support.touch || swiper.params.watchOverflow && swiper.isLocked || swiper.params.cssMode) {
          return;
        }
        swiper[swiper.params.touchEventsTarget === 'container' ? 'el' : 'wrapperEl'].style.cursor = '';
      }

      /***/
    },

    /***/"./node_modules/swiper/core/images/index.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/core/images/index.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperCoreImagesIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_157731__) {
      __nested_webpack_require_157731__.r(__webpack_exports__);
      /* harmony import */
      var _loadImage_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_157731__( /*! ./loadImage.js */"./node_modules/swiper/core/images/loadImage.js");
      /* harmony import */
      var _preloadImages_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_157731__( /*! ./preloadImages.js */"./node_modules/swiper/core/images/preloadImages.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        loadImage: _loadImage_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        preloadImages: _preloadImages_js__WEBPACK_IMPORTED_MODULE_1__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/images/loadImage.js":
    /*!******************************************************!*\
      !*** ./node_modules/swiper/core/images/loadImage.js ***!
      \******************************************************/
    /***/
    function node_modulesSwiperCoreImagesLoadImageJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_158801__) {
      __nested_webpack_require_158801__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_158801__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */loadImage
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_158801__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_158801__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function loadImage(imageEl, src, srcset, sizes, checkForComplete, callback) {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var image;
        function onReady() {
          if (callback) callback();
        }
        var isPicture = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(imageEl).parent('picture')[0];
        if (!isPicture && (!imageEl.complete || !checkForComplete)) {
          if (src) {
            image = new window.Image();
            image.onload = onReady;
            image.onerror = onReady;
            if (sizes) {
              image.sizes = sizes;
            }
            if (srcset) {
              image.srcset = srcset;
            }
            if (src) {
              image.src = src;
            }
          } else {
            onReady();
          }
        } else {
          // image already loaded...
          onReady();
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/images/preloadImages.js":
    /*!**********************************************************!*\
      !*** ./node_modules/swiper/core/images/preloadImages.js ***!
      \**********************************************************/
    /***/
    function node_modulesSwiperCoreImagesPreloadImagesJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_160807__) {
      __nested_webpack_require_160807__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_160807__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */preloadImages
          );
        }
        /* harmony export */
      });
      function preloadImages() {
        var swiper = this;
        swiper.imagesToLoad = swiper.$el.find('img');
        function onReady() {
          if (typeof swiper === 'undefined' || swiper === null || !swiper || swiper.destroyed) return;
          if (swiper.imagesLoaded !== undefined) swiper.imagesLoaded += 1;
          if (swiper.imagesLoaded === swiper.imagesToLoad.length) {
            if (swiper.params.updateOnImagesReady) swiper.update();
            swiper.emit('imagesReady');
          }
        }
        for (var _i39 = 0; _i39 < swiper.imagesToLoad.length; _i39 += 1) {
          var imageEl = swiper.imagesToLoad[_i39];
          swiper.loadImage(imageEl, imageEl.currentSrc || imageEl.getAttribute('src'), imageEl.srcset || imageEl.getAttribute('srcset'), imageEl.sizes || imageEl.getAttribute('sizes'), true, onReady);
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/loop/index.js":
    /*!************************************************!*\
      !*** ./node_modules/swiper/core/loop/index.js ***!
      \************************************************/
    /***/
    function node_modulesSwiperCoreLoopIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_162354__) {
      __nested_webpack_require_162354__.r(__webpack_exports__);
      /* harmony import */
      var _loopCreate_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_162354__( /*! ./loopCreate.js */"./node_modules/swiper/core/loop/loopCreate.js");
      /* harmony import */
      var _loopFix_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_162354__( /*! ./loopFix.js */"./node_modules/swiper/core/loop/loopFix.js");
      /* harmony import */
      var _loopDestroy_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_162354__( /*! ./loopDestroy.js */"./node_modules/swiper/core/loop/loopDestroy.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        loopCreate: _loopCreate_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        loopFix: _loopFix_js__WEBPACK_IMPORTED_MODULE_1__["default"],
        loopDestroy: _loopDestroy_js__WEBPACK_IMPORTED_MODULE_2__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/loop/loopCreate.js":
    /*!*****************************************************!*\
      !*** ./node_modules/swiper/core/loop/loopCreate.js ***!
      \*****************************************************/
    /***/
    function node_modulesSwiperCoreLoopLoopCreateJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_163647__) {
      __nested_webpack_require_163647__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_163647__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */loopCreate
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_163647__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_163647__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function loopCreate() {
        var swiper = this;
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var params = swiper.params,
          $wrapperEl = swiper.$wrapperEl; // Remove duplicated slides

        var $selector = $wrapperEl.children().length > 0 ? (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])($wrapperEl.children()[0].parentNode) : $wrapperEl;
        $selector.children(".".concat(params.slideClass, ".").concat(params.slideDuplicateClass)).remove();
        var slides = $selector.children(".".concat(params.slideClass));
        if (params.loopFillGroupWithBlank) {
          var blankSlidesNum = params.slidesPerGroup - slides.length % params.slidesPerGroup;
          if (blankSlidesNum !== params.slidesPerGroup) {
            for (var _i40 = 0; _i40 < blankSlidesNum; _i40 += 1) {
              var blankNode = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(document.createElement('div')).addClass("".concat(params.slideClass, " ").concat(params.slideBlankClass));
              $selector.append(blankNode);
            }
            slides = $selector.children(".".concat(params.slideClass));
          }
        }
        if (params.slidesPerView === 'auto' && !params.loopedSlides) params.loopedSlides = slides.length;
        swiper.loopedSlides = Math.ceil(parseFloat(params.loopedSlides || params.slidesPerView, 10));
        swiper.loopedSlides += params.loopAdditionalSlides;
        if (swiper.loopedSlides > slides.length && swiper.params.loopedSlidesLimit) {
          swiper.loopedSlides = slides.length;
        }
        var prependSlides = [];
        var appendSlides = [];
        slides.each(function (el, index) {
          var slide = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(el);
          slide.attr('data-swiper-slide-index', index);
        });
        for (var _i41 = 0; _i41 < swiper.loopedSlides; _i41 += 1) {
          var index = _i41 - Math.floor(_i41 / slides.length) * slides.length;
          appendSlides.push(slides.eq(index)[0]);
          prependSlides.unshift(slides.eq(slides.length - index - 1)[0]);
        }
        for (var _i42 = 0; _i42 < appendSlides.length; _i42 += 1) {
          $selector.append((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(appendSlides[_i42].cloneNode(true)).addClass(params.slideDuplicateClass));
        }
        for (var _i43 = prependSlides.length - 1; _i43 >= 0; _i43 -= 1) {
          $selector.prepend((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(prependSlides[_i43].cloneNode(true)).addClass(params.slideDuplicateClass));
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/loop/loopDestroy.js":
    /*!******************************************************!*\
      !*** ./node_modules/swiper/core/loop/loopDestroy.js ***!
      \******************************************************/
    /***/
    function node_modulesSwiperCoreLoopLoopDestroyJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_167350__) {
      __nested_webpack_require_167350__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_167350__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */loopDestroy
          );
        }
        /* harmony export */
      });
      function loopDestroy() {
        var swiper = this;
        var $wrapperEl = swiper.$wrapperEl,
          params = swiper.params,
          slides = swiper.slides;
        $wrapperEl.children(".".concat(params.slideClass, ".").concat(params.slideDuplicateClass, ",.").concat(params.slideClass, ".").concat(params.slideBlankClass)).remove();
        slides.removeAttr('data-swiper-slide-index');
      }

      /***/
    },

    /***/"./node_modules/swiper/core/loop/loopFix.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/core/loop/loopFix.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperCoreLoopLoopFixJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_168450__) {
      __nested_webpack_require_168450__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_168450__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */loopFix
          );
        }
        /* harmony export */
      });
      function loopFix() {
        var swiper = this;
        swiper.emit('beforeLoopFix');
        var activeIndex = swiper.activeIndex,
          slides = swiper.slides,
          loopedSlides = swiper.loopedSlides,
          allowSlidePrev = swiper.allowSlidePrev,
          allowSlideNext = swiper.allowSlideNext,
          snapGrid = swiper.snapGrid,
          rtl = swiper.rtlTranslate;
        var newIndex;
        swiper.allowSlidePrev = true;
        swiper.allowSlideNext = true;
        var snapTranslate = -snapGrid[activeIndex];
        var diff = snapTranslate - swiper.getTranslate(); // Fix For Negative Oversliding

        if (activeIndex < loopedSlides) {
          newIndex = slides.length - loopedSlides * 3 + activeIndex;
          newIndex += loopedSlides;
          var slideChanged = swiper.slideTo(newIndex, 0, false, true);
          if (slideChanged && diff !== 0) {
            swiper.setTranslate((rtl ? -swiper.translate : swiper.translate) - diff);
          }
        } else if (activeIndex >= slides.length - loopedSlides) {
          // Fix For Positive Oversliding
          newIndex = -slides.length + activeIndex + loopedSlides;
          newIndex += loopedSlides;
          var _slideChanged = swiper.slideTo(newIndex, 0, false, true);
          if (_slideChanged && diff !== 0) {
            swiper.setTranslate((rtl ? -swiper.translate : swiper.translate) - diff);
          }
        }
        swiper.allowSlidePrev = allowSlidePrev;
        swiper.allowSlideNext = allowSlideNext;
        swiper.emit('loopFix');
      }

      /***/
    },

    /***/"./node_modules/swiper/core/moduleExtendParams.js":
    /*!********************************************************!*\
      !*** ./node_modules/swiper/core/moduleExtendParams.js ***!
      \********************************************************/
    /***/
    function node_modulesSwiperCoreModuleExtendParamsJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_170733__) {
      __nested_webpack_require_170733__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_170733__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */moduleExtendParams
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_170733__( /*! ../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function moduleExtendParams(params, allModulesParams) {
        return function extendParams() {
          var obj = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
          var moduleParamName = Object.keys(obj)[0];
          var moduleParams = obj[moduleParamName];
          if (_typeof(moduleParams) !== 'object' || moduleParams === null) {
            (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.extend)(allModulesParams, obj);
            return;
          }
          if (['navigation', 'pagination', 'scrollbar'].indexOf(moduleParamName) >= 0 && params[moduleParamName] === true) {
            params[moduleParamName] = {
              auto: true
            };
          }
          if (!(moduleParamName in params && 'enabled' in moduleParams)) {
            (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.extend)(allModulesParams, obj);
            return;
          }
          if (params[moduleParamName] === true) {
            params[moduleParamName] = {
              enabled: true
            };
          }
          if (_typeof(params[moduleParamName]) === 'object' && !('enabled' in params[moduleParamName])) {
            params[moduleParamName].enabled = true;
          }
          if (!params[moduleParamName]) params[moduleParamName] = {
            enabled: false
          };
          (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.extend)(allModulesParams, obj);
        };
      }

      /***/
    },

    /***/"./node_modules/swiper/core/modules/observer/observer.js":
    /*!***************************************************************!*\
      !*** ./node_modules/swiper/core/modules/observer/observer.js ***!
      \***************************************************************/
    /***/
    function node_modulesSwiperCoreModulesObserverObserverJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_173122__) {
      __nested_webpack_require_173122__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_173122__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Observer
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_173122__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      function Observer(_ref) {
        var swiper = _ref.swiper,
          extendParams = _ref.extendParams,
          on = _ref.on,
          emit = _ref.emit;
        var observers = [];
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var attach = function attach(target) {
          var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
          var ObserverFunc = window.MutationObserver || window.WebkitMutationObserver;
          var observer = new ObserverFunc(function (mutations) {
            // The observerUpdate event should only be triggered
            // once despite the number of mutations.  Additional
            // triggers are redundant and are very costly
            if (mutations.length === 1) {
              emit('observerUpdate', mutations[0]);
              return;
            }
            var observerUpdate = function observerUpdate() {
              emit('observerUpdate', mutations[0]);
            };
            if (window.requestAnimationFrame) {
              window.requestAnimationFrame(observerUpdate);
            } else {
              window.setTimeout(observerUpdate, 0);
            }
          });
          observer.observe(target, {
            attributes: typeof options.attributes === 'undefined' ? true : options.attributes,
            childList: typeof options.childList === 'undefined' ? true : options.childList,
            characterData: typeof options.characterData === 'undefined' ? true : options.characterData
          });
          observers.push(observer);
        };
        var init = function init() {
          if (!swiper.params.observer) return;
          if (swiper.params.observeParents) {
            var containerParents = swiper.$el.parents();
            for (var _i44 = 0; _i44 < containerParents.length; _i44 += 1) {
              attach(containerParents[_i44]);
            }
          } // Observe container

          attach(swiper.$el[0], {
            childList: swiper.params.observeSlideChildren
          }); // Observe wrapper

          attach(swiper.$wrapperEl[0], {
            attributes: false
          });
        };
        var destroy = function destroy() {
          observers.forEach(function (observer) {
            observer.disconnect();
          });
          observers.splice(0, observers.length);
        };
        extendParams({
          observer: false,
          observeParents: false,
          observeSlideChildren: false
        });
        on('init', init);
        on('destroy', destroy);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/modules/resize/resize.js":
    /*!***********************************************************!*\
      !*** ./node_modules/swiper/core/modules/resize/resize.js ***!
      \***********************************************************/
    /***/
    function node_modulesSwiperCoreModulesResizeResizeJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_176606__) {
      __nested_webpack_require_176606__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_176606__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Resize
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_176606__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      function Resize(_ref2) {
        var swiper = _ref2.swiper,
          on = _ref2.on,
          emit = _ref2.emit;
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var observer = null;
        var animationFrame = null;
        var resizeHandler = function resizeHandler() {
          if (!swiper || swiper.destroyed || !swiper.initialized) return;
          emit('beforeResize');
          emit('resize');
        };
        var createObserver = function createObserver() {
          if (!swiper || swiper.destroyed || !swiper.initialized) return;
          observer = new ResizeObserver(function (entries) {
            animationFrame = window.requestAnimationFrame(function () {
              var width = swiper.width,
                height = swiper.height;
              var newWidth = width;
              var newHeight = height;
              entries.forEach(function (_ref3) {
                var contentBoxSize = _ref3.contentBoxSize,
                  contentRect = _ref3.contentRect,
                  target = _ref3.target;
                if (target && target !== swiper.el) return;
                newWidth = contentRect ? contentRect.width : (contentBoxSize[0] || contentBoxSize).inlineSize;
                newHeight = contentRect ? contentRect.height : (contentBoxSize[0] || contentBoxSize).blockSize;
              });
              if (newWidth !== width || newHeight !== height) {
                resizeHandler();
              }
            });
          });
          observer.observe(swiper.el);
        };
        var removeObserver = function removeObserver() {
          if (animationFrame) {
            window.cancelAnimationFrame(animationFrame);
          }
          if (observer && observer.unobserve && swiper.el) {
            observer.unobserve(swiper.el);
            observer = null;
          }
        };
        var orientationChangeHandler = function orientationChangeHandler() {
          if (!swiper || swiper.destroyed || !swiper.initialized) return;
          emit('orientationchange');
        };
        on('init', function () {
          if (swiper.params.resizeObserver && typeof window.ResizeObserver !== 'undefined') {
            createObserver();
            return;
          }
          window.addEventListener('resize', resizeHandler);
          window.addEventListener('orientationchange', orientationChangeHandler);
        });
        on('destroy', function () {
          removeObserver();
          window.removeEventListener('resize', resizeHandler);
          window.removeEventListener('orientationchange', orientationChangeHandler);
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/core/slide/index.js":
    /*!*************************************************!*\
      !*** ./node_modules/swiper/core/slide/index.js ***!
      \*************************************************/
    /***/
    function node_modulesSwiperCoreSlideIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_180113__) {
      __nested_webpack_require_180113__.r(__webpack_exports__);
      /* harmony import */
      var _slideTo_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_180113__( /*! ./slideTo.js */"./node_modules/swiper/core/slide/slideTo.js");
      /* harmony import */
      var _slideToLoop_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_180113__( /*! ./slideToLoop.js */"./node_modules/swiper/core/slide/slideToLoop.js");
      /* harmony import */
      var _slideNext_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_180113__( /*! ./slideNext.js */"./node_modules/swiper/core/slide/slideNext.js");
      /* harmony import */
      var _slidePrev_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_180113__( /*! ./slidePrev.js */"./node_modules/swiper/core/slide/slidePrev.js");
      /* harmony import */
      var _slideReset_js__WEBPACK_IMPORTED_MODULE_4__ = __nested_webpack_require_180113__( /*! ./slideReset.js */"./node_modules/swiper/core/slide/slideReset.js");
      /* harmony import */
      var _slideToClosest_js__WEBPACK_IMPORTED_MODULE_5__ = __nested_webpack_require_180113__( /*! ./slideToClosest.js */"./node_modules/swiper/core/slide/slideToClosest.js");
      /* harmony import */
      var _slideToClickedSlide_js__WEBPACK_IMPORTED_MODULE_6__ = __nested_webpack_require_180113__( /*! ./slideToClickedSlide.js */"./node_modules/swiper/core/slide/slideToClickedSlide.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        slideTo: _slideTo_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        slideToLoop: _slideToLoop_js__WEBPACK_IMPORTED_MODULE_1__["default"],
        slideNext: _slideNext_js__WEBPACK_IMPORTED_MODULE_2__["default"],
        slidePrev: _slidePrev_js__WEBPACK_IMPORTED_MODULE_3__["default"],
        slideReset: _slideReset_js__WEBPACK_IMPORTED_MODULE_4__["default"],
        slideToClosest: _slideToClosest_js__WEBPACK_IMPORTED_MODULE_5__["default"],
        slideToClickedSlide: _slideToClickedSlide_js__WEBPACK_IMPORTED_MODULE_6__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/slide/slideNext.js":
    /*!*****************************************************!*\
      !*** ./node_modules/swiper/core/slide/slideNext.js ***!
      \*****************************************************/
    /***/
    function node_modulesSwiperCoreSlideSlideNextJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_182476__) {
      __nested_webpack_require_182476__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_182476__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */slideNext
          );
        }
        /* harmony export */
      });
      /* eslint no-unused-vars: "off" */
      function slideNext() {
        var speed = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this.params.speed;
        var runCallbacks = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
        var internal = arguments.length > 2 ? arguments[2] : undefined;
        var swiper = this;
        var animating = swiper.animating,
          enabled = swiper.enabled,
          params = swiper.params;
        if (!enabled) return swiper;
        var perGroup = params.slidesPerGroup;
        if (params.slidesPerView === 'auto' && params.slidesPerGroup === 1 && params.slidesPerGroupAuto) {
          perGroup = Math.max(swiper.slidesPerViewDynamic('current', true), 1);
        }
        var increment = swiper.activeIndex < params.slidesPerGroupSkip ? 1 : perGroup;
        if (params.loop) {
          if (animating && params.loopPreventsSlide) return false;
          swiper.loopFix(); // eslint-disable-next-line

          swiper._clientLeft = swiper.$wrapperEl[0].clientLeft;
        }
        if (params.rewind && swiper.isEnd) {
          return swiper.slideTo(0, speed, runCallbacks, internal);
        }
        return swiper.slideTo(swiper.activeIndex + increment, speed, runCallbacks, internal);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/slide/slidePrev.js":
    /*!*****************************************************!*\
      !*** ./node_modules/swiper/core/slide/slidePrev.js ***!
      \*****************************************************/
    /***/
    function node_modulesSwiperCoreSlideSlidePrevJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_184485__) {
      __nested_webpack_require_184485__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_184485__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */slidePrev
          );
        }
        /* harmony export */
      });
      /* eslint no-unused-vars: "off" */
      function slidePrev() {
        var speed = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this.params.speed;
        var runCallbacks = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
        var internal = arguments.length > 2 ? arguments[2] : undefined;
        var swiper = this;
        var params = swiper.params,
          animating = swiper.animating,
          snapGrid = swiper.snapGrid,
          slidesGrid = swiper.slidesGrid,
          rtlTranslate = swiper.rtlTranslate,
          enabled = swiper.enabled;
        if (!enabled) return swiper;
        if (params.loop) {
          if (animating && params.loopPreventsSlide) return false;
          swiper.loopFix(); // eslint-disable-next-line

          swiper._clientLeft = swiper.$wrapperEl[0].clientLeft;
        }
        var translate = rtlTranslate ? swiper.translate : -swiper.translate;
        function normalize(val) {
          if (val < 0) return -Math.floor(Math.abs(val));
          return Math.floor(val);
        }
        var normalizedTranslate = normalize(translate);
        var normalizedSnapGrid = snapGrid.map(function (val) {
          return normalize(val);
        });
        var prevSnap = snapGrid[normalizedSnapGrid.indexOf(normalizedTranslate) - 1];
        if (typeof prevSnap === 'undefined' && params.cssMode) {
          var prevSnapIndex;
          snapGrid.forEach(function (snap, snapIndex) {
            if (normalizedTranslate >= snap) {
              // prevSnap = snap;
              prevSnapIndex = snapIndex;
            }
          });
          if (typeof prevSnapIndex !== 'undefined') {
            prevSnap = snapGrid[prevSnapIndex > 0 ? prevSnapIndex - 1 : prevSnapIndex];
          }
        }
        var prevIndex = 0;
        if (typeof prevSnap !== 'undefined') {
          prevIndex = slidesGrid.indexOf(prevSnap);
          if (prevIndex < 0) prevIndex = swiper.activeIndex - 1;
          if (params.slidesPerView === 'auto' && params.slidesPerGroup === 1 && params.slidesPerGroupAuto) {
            prevIndex = prevIndex - swiper.slidesPerViewDynamic('previous', true) + 1;
            prevIndex = Math.max(prevIndex, 0);
          }
        }
        if (params.rewind && swiper.isBeginning) {
          var lastIndex = swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual ? swiper.virtual.slides.length - 1 : swiper.slides.length - 1;
          return swiper.slideTo(lastIndex, speed, runCallbacks, internal);
        }
        return swiper.slideTo(prevIndex, speed, runCallbacks, internal);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/slide/slideReset.js":
    /*!******************************************************!*\
      !*** ./node_modules/swiper/core/slide/slideReset.js ***!
      \******************************************************/
    /***/
    function node_modulesSwiperCoreSlideSlideResetJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_187834__) {
      __nested_webpack_require_187834__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_187834__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */slideReset
          );
        }
        /* harmony export */
      });
      /* eslint no-unused-vars: "off" */
      function slideReset() {
        var speed = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this.params.speed;
        var runCallbacks = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
        var internal = arguments.length > 2 ? arguments[2] : undefined;
        var swiper = this;
        return swiper.slideTo(swiper.activeIndex, speed, runCallbacks, internal);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/slide/slideTo.js":
    /*!***************************************************!*\
      !*** ./node_modules/swiper/core/slide/slideTo.js ***!
      \***************************************************/
    /***/
    function node_modulesSwiperCoreSlideSlideToJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_188997__) {
      __nested_webpack_require_188997__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_188997__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */slideTo
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_188997__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function slideTo() {
        var index = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
        var speed = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.params.speed;
        var runCallbacks = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        var internal = arguments.length > 3 ? arguments[3] : undefined;
        var initial = arguments.length > 4 ? arguments[4] : undefined;
        if (typeof index !== 'number' && typeof index !== 'string') {
          throw new Error("The 'index' argument cannot have type other than 'number' or 'string'. [".concat(_typeof(index), "] given."));
        }
        if (typeof index === 'string') {
          /**
           * The `index` argument converted from `string` to `number`.
           * @type {number}
           */
          var indexAsNumber = parseInt(index, 10);
          /**
           * Determines whether the `index` argument is a valid `number`
           * after being converted from the `string` type.
           * @type {boolean}
           */

          var isValidNumber = isFinite(indexAsNumber);
          if (!isValidNumber) {
            throw new Error("The passed-in 'index' (string) couldn't be converted to 'number'. [".concat(index, "] given."));
          } // Knowing that the converted `index` is a valid number,
          // we can update the original argument's value.

          index = indexAsNumber;
        }
        var swiper = this;
        var slideIndex = index;
        if (slideIndex < 0) slideIndex = 0;
        var params = swiper.params,
          snapGrid = swiper.snapGrid,
          slidesGrid = swiper.slidesGrid,
          previousIndex = swiper.previousIndex,
          activeIndex = swiper.activeIndex,
          rtl = swiper.rtlTranslate,
          wrapperEl = swiper.wrapperEl,
          enabled = swiper.enabled;
        if (swiper.animating && params.preventInteractionOnTransition || !enabled && !internal && !initial) {
          return false;
        }
        var skip = Math.min(swiper.params.slidesPerGroupSkip, slideIndex);
        var snapIndex = skip + Math.floor((slideIndex - skip) / swiper.params.slidesPerGroup);
        if (snapIndex >= snapGrid.length) snapIndex = snapGrid.length - 1;
        var translate = -snapGrid[snapIndex]; // Normalize slideIndex

        if (params.normalizeSlideIndex) {
          for (var _i45 = 0; _i45 < slidesGrid.length; _i45 += 1) {
            var normalizedTranslate = -Math.floor(translate * 100);
            var normalizedGrid = Math.floor(slidesGrid[_i45] * 100);
            var normalizedGridNext = Math.floor(slidesGrid[_i45 + 1] * 100);
            if (typeof slidesGrid[_i45 + 1] !== 'undefined') {
              if (normalizedTranslate >= normalizedGrid && normalizedTranslate < normalizedGridNext - (normalizedGridNext - normalizedGrid) / 2) {
                slideIndex = _i45;
              } else if (normalizedTranslate >= normalizedGrid && normalizedTranslate < normalizedGridNext) {
                slideIndex = _i45 + 1;
              }
            } else if (normalizedTranslate >= normalizedGrid) {
              slideIndex = _i45;
            }
          }
        } // Directions locks

        if (swiper.initialized && slideIndex !== activeIndex) {
          if (!swiper.allowSlideNext && translate < swiper.translate && translate < swiper.minTranslate()) {
            return false;
          }
          if (!swiper.allowSlidePrev && translate > swiper.translate && translate > swiper.maxTranslate()) {
            if ((activeIndex || 0) !== slideIndex) return false;
          }
        }
        if (slideIndex !== (previousIndex || 0) && runCallbacks) {
          swiper.emit('beforeSlideChangeStart');
        } // Update progress

        swiper.updateProgress(translate);
        var direction;
        if (slideIndex > activeIndex) direction = 'next';else if (slideIndex < activeIndex) direction = 'prev';else direction = 'reset'; // Update Index

        if (rtl && -translate === swiper.translate || !rtl && translate === swiper.translate) {
          swiper.updateActiveIndex(slideIndex); // Update Height

          if (params.autoHeight) {
            swiper.updateAutoHeight();
          }
          swiper.updateSlidesClasses();
          if (params.effect !== 'slide') {
            swiper.setTranslate(translate);
          }
          if (direction !== 'reset') {
            swiper.transitionStart(runCallbacks, direction);
            swiper.transitionEnd(runCallbacks, direction);
          }
          return false;
        }
        if (params.cssMode) {
          var isH = swiper.isHorizontal();
          var t = rtl ? translate : -translate;
          if (speed === 0) {
            var isVirtual = swiper.virtual && swiper.params.virtual.enabled;
            if (isVirtual) {
              swiper.wrapperEl.style.scrollSnapType = 'none';
              swiper._immediateVirtual = true;
            }
            wrapperEl[isH ? 'scrollLeft' : 'scrollTop'] = t;
            if (isVirtual) {
              requestAnimationFrame(function () {
                swiper.wrapperEl.style.scrollSnapType = '';
                swiper._swiperImmediateVirtual = false;
              });
            }
          } else {
            var _wrapperEl$scrollTo;
            if (!swiper.support.smoothScroll) {
              (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.animateCSSModeScroll)({
                swiper: swiper,
                targetPosition: t,
                side: isH ? 'left' : 'top'
              });
              return true;
            }
            wrapperEl.scrollTo((_wrapperEl$scrollTo = {}, _defineProperty(_wrapperEl$scrollTo, isH ? 'left' : 'top', t), _defineProperty(_wrapperEl$scrollTo, "behavior", 'smooth'), _wrapperEl$scrollTo));
          }
          return true;
        }
        swiper.setTransition(speed);
        swiper.setTranslate(translate);
        swiper.updateActiveIndex(slideIndex);
        swiper.updateSlidesClasses();
        swiper.emit('beforeTransitionStart', speed, internal);
        swiper.transitionStart(runCallbacks, direction);
        if (speed === 0) {
          swiper.transitionEnd(runCallbacks, direction);
        } else if (!swiper.animating) {
          swiper.animating = true;
          if (!swiper.onSlideToWrapperTransitionEnd) {
            swiper.onSlideToWrapperTransitionEnd = function transitionEnd(e) {
              if (!swiper || swiper.destroyed) return;
              if (e.target !== this) return;
              swiper.$wrapperEl[0].removeEventListener('transitionend', swiper.onSlideToWrapperTransitionEnd);
              swiper.$wrapperEl[0].removeEventListener('webkitTransitionEnd', swiper.onSlideToWrapperTransitionEnd);
              swiper.onSlideToWrapperTransitionEnd = null;
              delete swiper.onSlideToWrapperTransitionEnd;
              swiper.transitionEnd(runCallbacks, direction);
            };
          }
          swiper.$wrapperEl[0].addEventListener('transitionend', swiper.onSlideToWrapperTransitionEnd);
          swiper.$wrapperEl[0].addEventListener('webkitTransitionEnd', swiper.onSlideToWrapperTransitionEnd);
        }
        return true;
      }

      /***/
    },

    /***/"./node_modules/swiper/core/slide/slideToClickedSlide.js":
    /*!***************************************************************!*\
      !*** ./node_modules/swiper/core/slide/slideToClickedSlide.js ***!
      \***************************************************************/
    /***/
    function node_modulesSwiperCoreSlideSlideToClickedSlideJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_197186__) {
      __nested_webpack_require_197186__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_197186__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */slideToClickedSlide
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_197186__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_197186__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function slideToClickedSlide() {
        var swiper = this;
        var params = swiper.params,
          $wrapperEl = swiper.$wrapperEl;
        var slidesPerView = params.slidesPerView === 'auto' ? swiper.slidesPerViewDynamic() : params.slidesPerView;
        var slideToIndex = swiper.clickedIndex;
        var realIndex;
        if (params.loop) {
          if (swiper.animating) return;
          realIndex = parseInt((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(swiper.clickedSlide).attr('data-swiper-slide-index'), 10);
          if (params.centeredSlides) {
            if (slideToIndex < swiper.loopedSlides - slidesPerView / 2 || slideToIndex > swiper.slides.length - swiper.loopedSlides + slidesPerView / 2) {
              swiper.loopFix();
              slideToIndex = $wrapperEl.children(".".concat(params.slideClass, "[data-swiper-slide-index=\"").concat(realIndex, "\"]:not(.").concat(params.slideDuplicateClass, ")")).eq(0).index();
              (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_1__.nextTick)(function () {
                swiper.slideTo(slideToIndex);
              });
            } else {
              swiper.slideTo(slideToIndex);
            }
          } else if (slideToIndex > swiper.slides.length - slidesPerView) {
            swiper.loopFix();
            slideToIndex = $wrapperEl.children(".".concat(params.slideClass, "[data-swiper-slide-index=\"").concat(realIndex, "\"]:not(.").concat(params.slideDuplicateClass, ")")).eq(0).index();
            (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_1__.nextTick)(function () {
              swiper.slideTo(slideToIndex);
            });
          } else {
            swiper.slideTo(slideToIndex);
          }
        } else {
          swiper.slideTo(slideToIndex);
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/slide/slideToClosest.js":
    /*!**********************************************************!*\
      !*** ./node_modules/swiper/core/slide/slideToClosest.js ***!
      \**********************************************************/
    /***/
    function node_modulesSwiperCoreSlideSlideToClosestJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_200068__) {
      __nested_webpack_require_200068__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_200068__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */slideToClosest
          );
        }
        /* harmony export */
      });
      /* eslint no-unused-vars: "off" */
      function slideToClosest() {
        var speed = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this.params.speed;
        var runCallbacks = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
        var internal = arguments.length > 2 ? arguments[2] : undefined;
        var threshold = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 0.5;
        var swiper = this;
        var index = swiper.activeIndex;
        var skip = Math.min(swiper.params.slidesPerGroupSkip, index);
        var snapIndex = skip + Math.floor((index - skip) / swiper.params.slidesPerGroup);
        var translate = swiper.rtlTranslate ? swiper.translate : -swiper.translate;
        if (translate >= swiper.snapGrid[snapIndex]) {
          // The current translate is on or after the current snap index, so the choice
          // is between the current index and the one after it.
          var currentSnap = swiper.snapGrid[snapIndex];
          var nextSnap = swiper.snapGrid[snapIndex + 1];
          if (translate - currentSnap > (nextSnap - currentSnap) * threshold) {
            index += swiper.params.slidesPerGroup;
          }
        } else {
          // The current translate is before the current snap index, so the choice
          // is between the current index and the one before it.
          var prevSnap = swiper.snapGrid[snapIndex - 1];
          var _currentSnap = swiper.snapGrid[snapIndex];
          if (translate - prevSnap <= (_currentSnap - prevSnap) * threshold) {
            index -= swiper.params.slidesPerGroup;
          }
        }
        index = Math.max(index, 0);
        index = Math.min(index, swiper.slidesGrid.length - 1);
        return swiper.slideTo(index, speed, runCallbacks, internal);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/slide/slideToLoop.js":
    /*!*******************************************************!*\
      !*** ./node_modules/swiper/core/slide/slideToLoop.js ***!
      \*******************************************************/
    /***/
    function node_modulesSwiperCoreSlideSlideToLoopJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_202620__) {
      __nested_webpack_require_202620__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_202620__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */slideToLoop
          );
        }
        /* harmony export */
      });
      function slideToLoop() {
        var index = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
        var speed = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.params.speed;
        var runCallbacks = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        var internal = arguments.length > 3 ? arguments[3] : undefined;
        if (typeof index === 'string') {
          /**
           * The `index` argument converted from `string` to `number`.
           * @type {number}
           */
          var indexAsNumber = parseInt(index, 10);
          /**
           * Determines whether the `index` argument is a valid `number`
           * after being converted from the `string` type.
           * @type {boolean}
           */

          var isValidNumber = isFinite(indexAsNumber);
          if (!isValidNumber) {
            throw new Error("The passed-in 'index' (string) couldn't be converted to 'number'. [".concat(index, "] given."));
          } // Knowing that the converted `index` is a valid number,
          // we can update the original argument's value.

          index = indexAsNumber;
        }
        var swiper = this;
        var newIndex = index;
        if (swiper.params.loop) {
          newIndex += swiper.loopedSlides;
        }
        return swiper.slideTo(newIndex, speed, runCallbacks, internal);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/transition/index.js":
    /*!******************************************************!*\
      !*** ./node_modules/swiper/core/transition/index.js ***!
      \******************************************************/
    /***/
    function node_modulesSwiperCoreTransitionIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_204757__) {
      __nested_webpack_require_204757__.r(__webpack_exports__);
      /* harmony import */
      var _setTransition_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_204757__( /*! ./setTransition.js */"./node_modules/swiper/core/transition/setTransition.js");
      /* harmony import */
      var _transitionStart_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_204757__( /*! ./transitionStart.js */"./node_modules/swiper/core/transition/transitionStart.js");
      /* harmony import */
      var _transitionEnd_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_204757__( /*! ./transitionEnd.js */"./node_modules/swiper/core/transition/transitionEnd.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        setTransition: _setTransition_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        transitionStart: _transitionStart_js__WEBPACK_IMPORTED_MODULE_1__["default"],
        transitionEnd: _transitionEnd_js__WEBPACK_IMPORTED_MODULE_2__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/transition/setTransition.js":
    /*!**************************************************************!*\
      !*** ./node_modules/swiper/core/transition/setTransition.js ***!
      \**************************************************************/
    /***/
    function node_modulesSwiperCoreTransitionSetTransitionJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_206178__) {
      __nested_webpack_require_206178__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_206178__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */setTransition
          );
        }
        /* harmony export */
      });
      function setTransition(duration, byController) {
        var swiper = this;
        if (!swiper.params.cssMode) {
          swiper.$wrapperEl.transition(duration);
        }
        swiper.emit('setTransition', duration, byController);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/transition/transitionEmit.js":
    /*!***************************************************************!*\
      !*** ./node_modules/swiper/core/transition/transitionEmit.js ***!
      \***************************************************************/
    /***/
    function node_modulesSwiperCoreTransitionTransitionEmitJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_207186__) {
      __nested_webpack_require_207186__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_207186__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */transitionEmit
          );
        }
        /* harmony export */
      });
      function transitionEmit(_ref4) {
        var swiper = _ref4.swiper,
          runCallbacks = _ref4.runCallbacks,
          direction = _ref4.direction,
          step = _ref4.step;
        var activeIndex = swiper.activeIndex,
          previousIndex = swiper.previousIndex;
        var dir = direction;
        if (!dir) {
          if (activeIndex > previousIndex) dir = 'next';else if (activeIndex < previousIndex) dir = 'prev';else dir = 'reset';
        }
        swiper.emit("transition".concat(step));
        if (runCallbacks && activeIndex !== previousIndex) {
          if (dir === 'reset') {
            swiper.emit("slideResetTransition".concat(step));
            return;
          }
          swiper.emit("slideChangeTransition".concat(step));
          if (dir === 'next') {
            swiper.emit("slideNextTransition".concat(step));
          } else {
            swiper.emit("slidePrevTransition".concat(step));
          }
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/transition/transitionEnd.js":
    /*!**************************************************************!*\
      !*** ./node_modules/swiper/core/transition/transitionEnd.js ***!
      \**************************************************************/
    /***/
    function node_modulesSwiperCoreTransitionTransitionEndJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_208907__) {
      __nested_webpack_require_208907__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_208907__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */transitionEnd
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _transitionEmit_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_208907__( /*! ./transitionEmit.js */"./node_modules/swiper/core/transition/transitionEmit.js");
      function transitionEnd() {
        var runCallbacks = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;
        var direction = arguments.length > 1 ? arguments[1] : undefined;
        var swiper = this;
        var params = swiper.params;
        swiper.animating = false;
        if (params.cssMode) return;
        swiper.setTransition(0);
        (0, _transitionEmit_js__WEBPACK_IMPORTED_MODULE_0__["default"])({
          swiper: swiper,
          runCallbacks: runCallbacks,
          direction: direction,
          step: 'End'
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/core/transition/transitionStart.js":
    /*!****************************************************************!*\
      !*** ./node_modules/swiper/core/transition/transitionStart.js ***!
      \****************************************************************/
    /***/
    function node_modulesSwiperCoreTransitionTransitionStartJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_210449__) {
      __nested_webpack_require_210449__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_210449__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */transitionStart
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _transitionEmit_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_210449__( /*! ./transitionEmit.js */"./node_modules/swiper/core/transition/transitionEmit.js");
      function transitionStart() {
        var runCallbacks = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;
        var direction = arguments.length > 1 ? arguments[1] : undefined;
        var swiper = this;
        var params = swiper.params;
        if (params.cssMode) return;
        if (params.autoHeight) {
          swiper.updateAutoHeight();
        }
        (0, _transitionEmit_js__WEBPACK_IMPORTED_MODULE_0__["default"])({
          swiper: swiper,
          runCallbacks: runCallbacks,
          direction: direction,
          step: 'Start'
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/core/translate/getTranslate.js":
    /*!************************************************************!*\
      !*** ./node_modules/swiper/core/translate/getTranslate.js ***!
      \************************************************************/
    /***/
    function node_modulesSwiperCoreTranslateGetTranslateJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_211990__) {
      __nested_webpack_require_211990__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_211990__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */getSwiperTranslate
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_211990__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function getSwiperTranslate() {
        var axis = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this.isHorizontal() ? 'x' : 'y';
        var swiper = this;
        var params = swiper.params,
          rtl = swiper.rtlTranslate,
          translate = swiper.translate,
          $wrapperEl = swiper.$wrapperEl;
        if (params.virtualTranslate) {
          return rtl ? -translate : translate;
        }
        if (params.cssMode) {
          return translate;
        }
        var currentTranslate = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.getTranslate)($wrapperEl[0], axis);
        if (rtl) currentTranslate = -currentTranslate;
        return currentTranslate || 0;
      }

      /***/
    },

    /***/"./node_modules/swiper/core/translate/index.js":
    /*!*****************************************************!*\
      !*** ./node_modules/swiper/core/translate/index.js ***!
      \*****************************************************/
    /***/
    function node_modulesSwiperCoreTranslateIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_213601__) {
      __nested_webpack_require_213601__.r(__webpack_exports__);
      /* harmony import */
      var _getTranslate_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_213601__( /*! ./getTranslate.js */"./node_modules/swiper/core/translate/getTranslate.js");
      /* harmony import */
      var _setTranslate_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_213601__( /*! ./setTranslate.js */"./node_modules/swiper/core/translate/setTranslate.js");
      /* harmony import */
      var _minTranslate_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_213601__( /*! ./minTranslate.js */"./node_modules/swiper/core/translate/minTranslate.js");
      /* harmony import */
      var _maxTranslate_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_213601__( /*! ./maxTranslate.js */"./node_modules/swiper/core/translate/maxTranslate.js");
      /* harmony import */
      var _translateTo_js__WEBPACK_IMPORTED_MODULE_4__ = __nested_webpack_require_213601__( /*! ./translateTo.js */"./node_modules/swiper/core/translate/translateTo.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        getTranslate: _getTranslate_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        setTranslate: _setTranslate_js__WEBPACK_IMPORTED_MODULE_1__["default"],
        minTranslate: _minTranslate_js__WEBPACK_IMPORTED_MODULE_2__["default"],
        maxTranslate: _maxTranslate_js__WEBPACK_IMPORTED_MODULE_3__["default"],
        translateTo: _translateTo_js__WEBPACK_IMPORTED_MODULE_4__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/translate/maxTranslate.js":
    /*!************************************************************!*\
      !*** ./node_modules/swiper/core/translate/maxTranslate.js ***!
      \************************************************************/
    /***/
    function node_modulesSwiperCoreTranslateMaxTranslateJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_215513__) {
      __nested_webpack_require_215513__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_215513__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */maxTranslate
          );
        }
        /* harmony export */
      });
      function maxTranslate() {
        return -this.snapGrid[this.snapGrid.length - 1];
      }

      /***/
    },

    /***/"./node_modules/swiper/core/translate/minTranslate.js":
    /*!************************************************************!*\
      !*** ./node_modules/swiper/core/translate/minTranslate.js ***!
      \************************************************************/
    /***/
    function node_modulesSwiperCoreTranslateMinTranslateJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_216352__) {
      __nested_webpack_require_216352__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_216352__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */minTranslate
          );
        }
        /* harmony export */
      });
      function minTranslate() {
        return -this.snapGrid[0];
      }

      /***/
    },

    /***/"./node_modules/swiper/core/translate/setTranslate.js":
    /*!************************************************************!*\
      !*** ./node_modules/swiper/core/translate/setTranslate.js ***!
      \************************************************************/
    /***/
    function node_modulesSwiperCoreTranslateSetTranslateJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_217168__) {
      __nested_webpack_require_217168__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_217168__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */setTranslate
          );
        }
        /* harmony export */
      });
      function setTranslate(translate, byController) {
        var swiper = this;
        var rtl = swiper.rtlTranslate,
          params = swiper.params,
          $wrapperEl = swiper.$wrapperEl,
          wrapperEl = swiper.wrapperEl,
          progress = swiper.progress;
        var x = 0;
        var y = 0;
        var z = 0;
        if (swiper.isHorizontal()) {
          x = rtl ? -translate : translate;
        } else {
          y = translate;
        }
        if (params.roundLengths) {
          x = Math.floor(x);
          y = Math.floor(y);
        }
        if (params.cssMode) {
          wrapperEl[swiper.isHorizontal() ? 'scrollLeft' : 'scrollTop'] = swiper.isHorizontal() ? -x : -y;
        } else if (!params.virtualTranslate) {
          $wrapperEl.transform("translate3d(".concat(x, "px, ").concat(y, "px, ").concat(z, "px)"));
        }
        swiper.previousTranslate = swiper.translate;
        swiper.translate = swiper.isHorizontal() ? x : y; // Check if we need to update progress

        var newProgress;
        var translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
        if (translatesDiff === 0) {
          newProgress = 0;
        } else {
          newProgress = (translate - swiper.minTranslate()) / translatesDiff;
        }
        if (newProgress !== progress) {
          swiper.updateProgress(translate);
        }
        swiper.emit('setTranslate', swiper.translate, byController);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/translate/translateTo.js":
    /*!***********************************************************!*\
      !*** ./node_modules/swiper/core/translate/translateTo.js ***!
      \***********************************************************/
    /***/
    function node_modulesSwiperCoreTranslateTranslateToJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_219359__) {
      __nested_webpack_require_219359__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_219359__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */translateTo
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_219359__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function translateTo() {
        var translate = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 0;
        var speed = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : this.params.speed;
        var runCallbacks = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : true;
        var translateBounds = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : true;
        var internal = arguments.length > 4 ? arguments[4] : undefined;
        var swiper = this;
        var params = swiper.params,
          wrapperEl = swiper.wrapperEl;
        if (swiper.animating && params.preventInteractionOnTransition) {
          return false;
        }
        var minTranslate = swiper.minTranslate();
        var maxTranslate = swiper.maxTranslate();
        var newTranslate;
        if (translateBounds && translate > minTranslate) newTranslate = minTranslate;else if (translateBounds && translate < maxTranslate) newTranslate = maxTranslate;else newTranslate = translate; // Update progress

        swiper.updateProgress(newTranslate);
        if (params.cssMode) {
          var isH = swiper.isHorizontal();
          if (speed === 0) {
            wrapperEl[isH ? 'scrollLeft' : 'scrollTop'] = -newTranslate;
          } else {
            var _wrapperEl$scrollTo2;
            if (!swiper.support.smoothScroll) {
              (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.animateCSSModeScroll)({
                swiper: swiper,
                targetPosition: -newTranslate,
                side: isH ? 'left' : 'top'
              });
              return true;
            }
            wrapperEl.scrollTo((_wrapperEl$scrollTo2 = {}, _defineProperty(_wrapperEl$scrollTo2, isH ? 'left' : 'top', -newTranslate), _defineProperty(_wrapperEl$scrollTo2, "behavior", 'smooth'), _wrapperEl$scrollTo2));
          }
          return true;
        }
        if (speed === 0) {
          swiper.setTransition(0);
          swiper.setTranslate(newTranslate);
          if (runCallbacks) {
            swiper.emit('beforeTransitionStart', speed, internal);
            swiper.emit('transitionEnd');
          }
        } else {
          swiper.setTransition(speed);
          swiper.setTranslate(newTranslate);
          if (runCallbacks) {
            swiper.emit('beforeTransitionStart', speed, internal);
            swiper.emit('transitionStart');
          }
          if (!swiper.animating) {
            swiper.animating = true;
            if (!swiper.onTranslateToWrapperTransitionEnd) {
              swiper.onTranslateToWrapperTransitionEnd = function transitionEnd(e) {
                if (!swiper || swiper.destroyed) return;
                if (e.target !== this) return;
                swiper.$wrapperEl[0].removeEventListener('transitionend', swiper.onTranslateToWrapperTransitionEnd);
                swiper.$wrapperEl[0].removeEventListener('webkitTransitionEnd', swiper.onTranslateToWrapperTransitionEnd);
                swiper.onTranslateToWrapperTransitionEnd = null;
                delete swiper.onTranslateToWrapperTransitionEnd;
                if (runCallbacks) {
                  swiper.emit('transitionEnd');
                }
              };
            }
            swiper.$wrapperEl[0].addEventListener('transitionend', swiper.onTranslateToWrapperTransitionEnd);
            swiper.$wrapperEl[0].addEventListener('webkitTransitionEnd', swiper.onTranslateToWrapperTransitionEnd);
          }
        }
        return true;
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/index.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/core/update/index.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperCoreUpdateIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_223763__) {
      __nested_webpack_require_223763__.r(__webpack_exports__);
      /* harmony import */
      var _updateSize_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_223763__( /*! ./updateSize.js */"./node_modules/swiper/core/update/updateSize.js");
      /* harmony import */
      var _updateSlides_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_223763__( /*! ./updateSlides.js */"./node_modules/swiper/core/update/updateSlides.js");
      /* harmony import */
      var _updateAutoHeight_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_223763__( /*! ./updateAutoHeight.js */"./node_modules/swiper/core/update/updateAutoHeight.js");
      /* harmony import */
      var _updateSlidesOffset_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_223763__( /*! ./updateSlidesOffset.js */"./node_modules/swiper/core/update/updateSlidesOffset.js");
      /* harmony import */
      var _updateSlidesProgress_js__WEBPACK_IMPORTED_MODULE_4__ = __nested_webpack_require_223763__( /*! ./updateSlidesProgress.js */"./node_modules/swiper/core/update/updateSlidesProgress.js");
      /* harmony import */
      var _updateProgress_js__WEBPACK_IMPORTED_MODULE_5__ = __nested_webpack_require_223763__( /*! ./updateProgress.js */"./node_modules/swiper/core/update/updateProgress.js");
      /* harmony import */
      var _updateSlidesClasses_js__WEBPACK_IMPORTED_MODULE_6__ = __nested_webpack_require_223763__( /*! ./updateSlidesClasses.js */"./node_modules/swiper/core/update/updateSlidesClasses.js");
      /* harmony import */
      var _updateActiveIndex_js__WEBPACK_IMPORTED_MODULE_7__ = __nested_webpack_require_223763__( /*! ./updateActiveIndex.js */"./node_modules/swiper/core/update/updateActiveIndex.js");
      /* harmony import */
      var _updateClickedSlide_js__WEBPACK_IMPORTED_MODULE_8__ = __nested_webpack_require_223763__( /*! ./updateClickedSlide.js */"./node_modules/swiper/core/update/updateClickedSlide.js");

      /* harmony default export */
      __webpack_exports__["default"] = {
        updateSize: _updateSize_js__WEBPACK_IMPORTED_MODULE_0__["default"],
        updateSlides: _updateSlides_js__WEBPACK_IMPORTED_MODULE_1__["default"],
        updateAutoHeight: _updateAutoHeight_js__WEBPACK_IMPORTED_MODULE_2__["default"],
        updateSlidesOffset: _updateSlidesOffset_js__WEBPACK_IMPORTED_MODULE_3__["default"],
        updateSlidesProgress: _updateSlidesProgress_js__WEBPACK_IMPORTED_MODULE_4__["default"],
        updateProgress: _updateProgress_js__WEBPACK_IMPORTED_MODULE_5__["default"],
        updateSlidesClasses: _updateSlidesClasses_js__WEBPACK_IMPORTED_MODULE_6__["default"],
        updateActiveIndex: _updateActiveIndex_js__WEBPACK_IMPORTED_MODULE_7__["default"],
        updateClickedSlide: _updateClickedSlide_js__WEBPACK_IMPORTED_MODULE_8__["default"]
      };

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateActiveIndex.js":
    /*!**************************************************************!*\
      !*** ./node_modules/swiper/core/update/updateActiveIndex.js ***!
      \**************************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateActiveIndexJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_226911__) {
      __nested_webpack_require_226911__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_226911__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateActiveIndex
          );
        }
        /* harmony export */
      });
      function updateActiveIndex(newActiveIndex) {
        var swiper = this;
        var translate = swiper.rtlTranslate ? swiper.translate : -swiper.translate;
        var slidesGrid = swiper.slidesGrid,
          snapGrid = swiper.snapGrid,
          params = swiper.params,
          previousIndex = swiper.activeIndex,
          previousRealIndex = swiper.realIndex,
          previousSnapIndex = swiper.snapIndex;
        var activeIndex = newActiveIndex;
        var snapIndex;
        if (typeof activeIndex === 'undefined') {
          for (var _i46 = 0; _i46 < slidesGrid.length; _i46 += 1) {
            if (typeof slidesGrid[_i46 + 1] !== 'undefined') {
              if (translate >= slidesGrid[_i46] && translate < slidesGrid[_i46 + 1] - (slidesGrid[_i46 + 1] - slidesGrid[_i46]) / 2) {
                activeIndex = _i46;
              } else if (translate >= slidesGrid[_i46] && translate < slidesGrid[_i46 + 1]) {
                activeIndex = _i46 + 1;
              }
            } else if (translate >= slidesGrid[_i46]) {
              activeIndex = _i46;
            }
          } // Normalize slideIndex

          if (params.normalizeSlideIndex) {
            if (activeIndex < 0 || typeof activeIndex === 'undefined') activeIndex = 0;
          }
        }
        if (snapGrid.indexOf(translate) >= 0) {
          snapIndex = snapGrid.indexOf(translate);
        } else {
          var skip = Math.min(params.slidesPerGroupSkip, activeIndex);
          snapIndex = skip + Math.floor((activeIndex - skip) / params.slidesPerGroup);
        }
        if (snapIndex >= snapGrid.length) snapIndex = snapGrid.length - 1;
        if (activeIndex === previousIndex) {
          if (snapIndex !== previousSnapIndex) {
            swiper.snapIndex = snapIndex;
            swiper.emit('snapIndexChange');
          }
          return;
        } // Get real index

        var realIndex = parseInt(swiper.slides.eq(activeIndex).attr('data-swiper-slide-index') || activeIndex, 10);
        Object.assign(swiper, {
          snapIndex: snapIndex,
          realIndex: realIndex,
          previousIndex: previousIndex,
          activeIndex: activeIndex
        });
        swiper.emit('activeIndexChange');
        swiper.emit('snapIndexChange');
        if (previousRealIndex !== realIndex) {
          swiper.emit('realIndexChange');
        }
        if (swiper.initialized || swiper.params.runCallbacksOnInit) {
          swiper.emit('slideChange');
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateAutoHeight.js":
    /*!*************************************************************!*\
      !*** ./node_modules/swiper/core/update/updateAutoHeight.js ***!
      \*************************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateAutoHeightJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_230149__) {
      __nested_webpack_require_230149__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_230149__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateAutoHeight
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_230149__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function updateAutoHeight(speed) {
        var swiper = this;
        var activeSlides = [];
        var isVirtual = swiper.virtual && swiper.params.virtual.enabled;
        var newHeight = 0;
        var i;
        if (typeof speed === 'number') {
          swiper.setTransition(speed);
        } else if (speed === true) {
          swiper.setTransition(swiper.params.speed);
        }
        var getSlideByIndex = function getSlideByIndex(index) {
          if (isVirtual) {
            return swiper.slides.filter(function (el) {
              return parseInt(el.getAttribute('data-swiper-slide-index'), 10) === index;
            })[0];
          }
          return swiper.slides.eq(index)[0];
        }; // Find slides currently in view

        if (swiper.params.slidesPerView !== 'auto' && swiper.params.slidesPerView > 1) {
          if (swiper.params.centeredSlides) {
            (swiper.visibleSlides || (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])([])).each(function (slide) {
              activeSlides.push(slide);
            });
          } else {
            for (i = 0; i < Math.ceil(swiper.params.slidesPerView); i += 1) {
              var index = swiper.activeIndex + i;
              if (index > swiper.slides.length && !isVirtual) break;
              activeSlides.push(getSlideByIndex(index));
            }
          }
        } else {
          activeSlides.push(getSlideByIndex(swiper.activeIndex));
        } // Find new height from highest slide in view

        for (i = 0; i < activeSlides.length; i += 1) {
          if (typeof activeSlides[i] !== 'undefined') {
            var height = activeSlides[i].offsetHeight;
            newHeight = height > newHeight ? height : newHeight;
          }
        } // Update Height

        if (newHeight || newHeight === 0) swiper.$wrapperEl.css('height', "".concat(newHeight, "px"));
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateClickedSlide.js":
    /*!***************************************************************!*\
      !*** ./node_modules/swiper/core/update/updateClickedSlide.js ***!
      \***************************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateClickedSlideJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_232969__) {
      __nested_webpack_require_232969__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_232969__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateClickedSlide
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_232969__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function updateClickedSlide(e) {
        var swiper = this;
        var params = swiper.params;
        var slide = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(e).closest(".".concat(params.slideClass))[0];
        var slideFound = false;
        var slideIndex;
        if (slide) {
          for (var _i47 = 0; _i47 < swiper.slides.length; _i47 += 1) {
            if (swiper.slides[_i47] === slide) {
              slideFound = true;
              slideIndex = _i47;
              break;
            }
          }
        }
        if (slide && slideFound) {
          swiper.clickedSlide = slide;
          if (swiper.virtual && swiper.params.virtual.enabled) {
            swiper.clickedIndex = parseInt((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(slide).attr('data-swiper-slide-index'), 10);
          } else {
            swiper.clickedIndex = slideIndex;
          }
        } else {
          swiper.clickedSlide = undefined;
          swiper.clickedIndex = undefined;
          return;
        }
        if (params.slideToClickedSlide && swiper.clickedIndex !== undefined && swiper.clickedIndex !== swiper.activeIndex) {
          swiper.slideToClickedSlide();
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateProgress.js":
    /*!***********************************************************!*\
      !*** ./node_modules/swiper/core/update/updateProgress.js ***!
      \***********************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateProgressJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_235108__) {
      __nested_webpack_require_235108__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_235108__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateProgress
          );
        }
        /* harmony export */
      });
      function updateProgress(translate) {
        var swiper = this;
        if (typeof translate === 'undefined') {
          var multiplier = swiper.rtlTranslate ? -1 : 1; // eslint-disable-next-line

          translate = swiper && swiper.translate && swiper.translate * multiplier || 0;
        }
        var params = swiper.params;
        var translatesDiff = swiper.maxTranslate() - swiper.minTranslate();
        var progress = swiper.progress,
          isBeginning = swiper.isBeginning,
          isEnd = swiper.isEnd;
        var wasBeginning = isBeginning;
        var wasEnd = isEnd;
        if (translatesDiff === 0) {
          progress = 0;
          isBeginning = true;
          isEnd = true;
        } else {
          progress = (translate - swiper.minTranslate()) / translatesDiff;
          isBeginning = progress <= 0;
          isEnd = progress >= 1;
        }
        Object.assign(swiper, {
          progress: progress,
          isBeginning: isBeginning,
          isEnd: isEnd
        });
        if (params.watchSlidesProgress || params.centeredSlides && params.autoHeight) swiper.updateSlidesProgress(translate);
        if (isBeginning && !wasBeginning) {
          swiper.emit('reachBeginning toEdge');
        }
        if (isEnd && !wasEnd) {
          swiper.emit('reachEnd toEdge');
        }
        if (wasBeginning && !isBeginning || wasEnd && !isEnd) {
          swiper.emit('fromEdge');
        }
        swiper.emit('progress', progress);
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateSize.js":
    /*!*******************************************************!*\
      !*** ./node_modules/swiper/core/update/updateSize.js ***!
      \*******************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateSizeJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_237318__) {
      __nested_webpack_require_237318__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_237318__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateSize
          );
        }
        /* harmony export */
      });
      function updateSize() {
        var swiper = this;
        var width;
        var height;
        var $el = swiper.$el;
        if (typeof swiper.params.width !== 'undefined' && swiper.params.width !== null) {
          width = swiper.params.width;
        } else {
          width = $el[0].clientWidth;
        }
        if (typeof swiper.params.height !== 'undefined' && swiper.params.height !== null) {
          height = swiper.params.height;
        } else {
          height = $el[0].clientHeight;
        }
        if (width === 0 && swiper.isHorizontal() || height === 0 && swiper.isVertical()) {
          return;
        } // Subtract paddings

        width = width - parseInt($el.css('padding-left') || 0, 10) - parseInt($el.css('padding-right') || 0, 10);
        height = height - parseInt($el.css('padding-top') || 0, 10) - parseInt($el.css('padding-bottom') || 0, 10);
        if (Number.isNaN(width)) width = 0;
        if (Number.isNaN(height)) height = 0;
        Object.assign(swiper, {
          width: width,
          height: height,
          size: swiper.isHorizontal() ? width : height
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateSlides.js":
    /*!*********************************************************!*\
      !*** ./node_modules/swiper/core/update/updateSlides.js ***!
      \*********************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateSlidesJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_239181__) {
      __nested_webpack_require_239181__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_239181__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateSlides
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_239181__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function updateSlides() {
        var swiper = this;
        function getDirectionLabel(property) {
          if (swiper.isHorizontal()) {
            return property;
          } // prettier-ignore

          return {
            'width': 'height',
            'margin-top': 'margin-left',
            'margin-bottom ': 'margin-right',
            'margin-left': 'margin-top',
            'margin-right': 'margin-bottom',
            'padding-left': 'padding-top',
            'padding-right': 'padding-bottom',
            'marginRight': 'marginBottom'
          }[property];
        }
        function getDirectionPropertyValue(node, label) {
          return parseFloat(node.getPropertyValue(getDirectionLabel(label)) || 0);
        }
        var params = swiper.params;
        var $wrapperEl = swiper.$wrapperEl,
          swiperSize = swiper.size,
          rtl = swiper.rtlTranslate,
          wrongRTL = swiper.wrongRTL;
        var isVirtual = swiper.virtual && params.virtual.enabled;
        var previousSlidesLength = isVirtual ? swiper.virtual.slides.length : swiper.slides.length;
        var slides = $wrapperEl.children(".".concat(swiper.params.slideClass));
        var slidesLength = isVirtual ? swiper.virtual.slides.length : slides.length;
        var snapGrid = [];
        var slidesGrid = [];
        var slidesSizesGrid = [];
        var offsetBefore = params.slidesOffsetBefore;
        if (typeof offsetBefore === 'function') {
          offsetBefore = params.slidesOffsetBefore.call(swiper);
        }
        var offsetAfter = params.slidesOffsetAfter;
        if (typeof offsetAfter === 'function') {
          offsetAfter = params.slidesOffsetAfter.call(swiper);
        }
        var previousSnapGridLength = swiper.snapGrid.length;
        var previousSlidesGridLength = swiper.slidesGrid.length;
        var spaceBetween = params.spaceBetween;
        var slidePosition = -offsetBefore;
        var prevSlideSize = 0;
        var index = 0;
        if (typeof swiperSize === 'undefined') {
          return;
        }
        if (typeof spaceBetween === 'string' && spaceBetween.indexOf('%') >= 0) {
          spaceBetween = parseFloat(spaceBetween.replace('%', '')) / 100 * swiperSize;
        }
        swiper.virtualSize = -spaceBetween; // reset margins

        if (rtl) slides.css({
          marginLeft: '',
          marginBottom: '',
          marginTop: ''
        });else slides.css({
          marginRight: '',
          marginBottom: '',
          marginTop: ''
        }); // reset cssMode offsets

        if (params.centeredSlides && params.cssMode) {
          (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.setCSSProperty)(swiper.wrapperEl, '--swiper-centered-offset-before', '');
          (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.setCSSProperty)(swiper.wrapperEl, '--swiper-centered-offset-after', '');
        }
        var gridEnabled = params.grid && params.grid.rows > 1 && swiper.grid;
        if (gridEnabled) {
          swiper.grid.initSlides(slidesLength);
        } // Calc slides

        var slideSize;
        var shouldResetSlideSize = params.slidesPerView === 'auto' && params.breakpoints && Object.keys(params.breakpoints).filter(function (key) {
          return typeof params.breakpoints[key].slidesPerView !== 'undefined';
        }).length > 0;
        for (var _i48 = 0; _i48 < slidesLength; _i48 += 1) {
          slideSize = 0;
          var slide = slides.eq(_i48);
          if (gridEnabled) {
            swiper.grid.updateSlide(_i48, slide, slidesLength, getDirectionLabel);
          }
          if (slide.css('display') === 'none') continue; // eslint-disable-line

          if (params.slidesPerView === 'auto') {
            if (shouldResetSlideSize) {
              slides[_i48].style[getDirectionLabel('width')] = "";
            }
            var slideStyles = getComputedStyle(slide[0]);
            var currentTransform = slide[0].style.transform;
            var currentWebKitTransform = slide[0].style.webkitTransform;
            if (currentTransform) {
              slide[0].style.transform = 'none';
            }
            if (currentWebKitTransform) {
              slide[0].style.webkitTransform = 'none';
            }
            if (params.roundLengths) {
              slideSize = swiper.isHorizontal() ? slide.outerWidth(true) : slide.outerHeight(true);
            } else {
              // eslint-disable-next-line
              var width = getDirectionPropertyValue(slideStyles, 'width');
              var paddingLeft = getDirectionPropertyValue(slideStyles, 'padding-left');
              var paddingRight = getDirectionPropertyValue(slideStyles, 'padding-right');
              var marginLeft = getDirectionPropertyValue(slideStyles, 'margin-left');
              var marginRight = getDirectionPropertyValue(slideStyles, 'margin-right');
              var boxSizing = slideStyles.getPropertyValue('box-sizing');
              if (boxSizing && boxSizing === 'border-box') {
                slideSize = width + marginLeft + marginRight;
              } else {
                var _slide$ = slide[0],
                  clientWidth = _slide$.clientWidth,
                  offsetWidth = _slide$.offsetWidth;
                slideSize = width + paddingLeft + paddingRight + marginLeft + marginRight + (offsetWidth - clientWidth);
              }
            }
            if (currentTransform) {
              slide[0].style.transform = currentTransform;
            }
            if (currentWebKitTransform) {
              slide[0].style.webkitTransform = currentWebKitTransform;
            }
            if (params.roundLengths) slideSize = Math.floor(slideSize);
          } else {
            slideSize = (swiperSize - (params.slidesPerView - 1) * spaceBetween) / params.slidesPerView;
            if (params.roundLengths) slideSize = Math.floor(slideSize);
            if (slides[_i48]) {
              slides[_i48].style[getDirectionLabel('width')] = "".concat(slideSize, "px");
            }
          }
          if (slides[_i48]) {
            slides[_i48].swiperSlideSize = slideSize;
          }
          slidesSizesGrid.push(slideSize);
          if (params.centeredSlides) {
            slidePosition = slidePosition + slideSize / 2 + prevSlideSize / 2 + spaceBetween;
            if (prevSlideSize === 0 && _i48 !== 0) slidePosition = slidePosition - swiperSize / 2 - spaceBetween;
            if (_i48 === 0) slidePosition = slidePosition - swiperSize / 2 - spaceBetween;
            if (Math.abs(slidePosition) < 1 / 1000) slidePosition = 0;
            if (params.roundLengths) slidePosition = Math.floor(slidePosition);
            if (index % params.slidesPerGroup === 0) snapGrid.push(slidePosition);
            slidesGrid.push(slidePosition);
          } else {
            if (params.roundLengths) slidePosition = Math.floor(slidePosition);
            if ((index - Math.min(swiper.params.slidesPerGroupSkip, index)) % swiper.params.slidesPerGroup === 0) snapGrid.push(slidePosition);
            slidesGrid.push(slidePosition);
            slidePosition = slidePosition + slideSize + spaceBetween;
          }
          swiper.virtualSize += slideSize + spaceBetween;
          prevSlideSize = slideSize;
          index += 1;
        }
        swiper.virtualSize = Math.max(swiper.virtualSize, swiperSize) + offsetAfter;
        if (rtl && wrongRTL && (params.effect === 'slide' || params.effect === 'coverflow')) {
          $wrapperEl.css({
            width: "".concat(swiper.virtualSize + params.spaceBetween, "px")
          });
        }
        if (params.setWrapperSize) {
          $wrapperEl.css(_defineProperty({}, getDirectionLabel('width'), "".concat(swiper.virtualSize + params.spaceBetween, "px")));
        }
        if (gridEnabled) {
          swiper.grid.updateWrapperSize(slideSize, snapGrid, getDirectionLabel);
        } // Remove last grid elements depending on width

        if (!params.centeredSlides) {
          var newSlidesGrid = [];
          for (var _i49 = 0; _i49 < snapGrid.length; _i49 += 1) {
            var slidesGridItem = snapGrid[_i49];
            if (params.roundLengths) slidesGridItem = Math.floor(slidesGridItem);
            if (snapGrid[_i49] <= swiper.virtualSize - swiperSize) {
              newSlidesGrid.push(slidesGridItem);
            }
          }
          snapGrid = newSlidesGrid;
          if (Math.floor(swiper.virtualSize - swiperSize) - Math.floor(snapGrid[snapGrid.length - 1]) > 1) {
            snapGrid.push(swiper.virtualSize - swiperSize);
          }
        }
        if (snapGrid.length === 0) snapGrid = [0];
        if (params.spaceBetween !== 0) {
          var key = swiper.isHorizontal() && rtl ? 'marginLeft' : getDirectionLabel('marginRight');
          slides.filter(function (_, slideIndex) {
            if (!params.cssMode) return true;
            if (slideIndex === slides.length - 1) {
              return false;
            }
            return true;
          }).css(_defineProperty({}, key, "".concat(spaceBetween, "px")));
        }
        if (params.centeredSlides && params.centeredSlidesBounds) {
          var allSlidesSize = 0;
          slidesSizesGrid.forEach(function (slideSizeValue) {
            allSlidesSize += slideSizeValue + (params.spaceBetween ? params.spaceBetween : 0);
          });
          allSlidesSize -= params.spaceBetween;
          var maxSnap = allSlidesSize - swiperSize;
          snapGrid = snapGrid.map(function (snap) {
            if (snap < 0) return -offsetBefore;
            if (snap > maxSnap) return maxSnap + offsetAfter;
            return snap;
          });
        }
        if (params.centerInsufficientSlides) {
          var _allSlidesSize = 0;
          slidesSizesGrid.forEach(function (slideSizeValue) {
            _allSlidesSize += slideSizeValue + (params.spaceBetween ? params.spaceBetween : 0);
          });
          _allSlidesSize -= params.spaceBetween;
          if (_allSlidesSize < swiperSize) {
            var allSlidesOffset = (swiperSize - _allSlidesSize) / 2;
            snapGrid.forEach(function (snap, snapIndex) {
              snapGrid[snapIndex] = snap - allSlidesOffset;
            });
            slidesGrid.forEach(function (snap, snapIndex) {
              slidesGrid[snapIndex] = snap + allSlidesOffset;
            });
          }
        }
        Object.assign(swiper, {
          slides: slides,
          snapGrid: snapGrid,
          slidesGrid: slidesGrid,
          slidesSizesGrid: slidesSizesGrid
        });
        if (params.centeredSlides && params.cssMode && !params.centeredSlidesBounds) {
          (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.setCSSProperty)(swiper.wrapperEl, '--swiper-centered-offset-before', "".concat(-snapGrid[0], "px"));
          (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.setCSSProperty)(swiper.wrapperEl, '--swiper-centered-offset-after', "".concat(swiper.size / 2 - slidesSizesGrid[slidesSizesGrid.length - 1] / 2, "px"));
          var addToSnapGrid = -swiper.snapGrid[0];
          var addToSlidesGrid = -swiper.slidesGrid[0];
          swiper.snapGrid = swiper.snapGrid.map(function (v) {
            return v + addToSnapGrid;
          });
          swiper.slidesGrid = swiper.slidesGrid.map(function (v) {
            return v + addToSlidesGrid;
          });
        }
        if (slidesLength !== previousSlidesLength) {
          swiper.emit('slidesLengthChange');
        }
        if (snapGrid.length !== previousSnapGridLength) {
          if (swiper.params.watchOverflow) swiper.checkOverflow();
          swiper.emit('snapGridLengthChange');
        }
        if (slidesGrid.length !== previousSlidesGridLength) {
          swiper.emit('slidesGridLengthChange');
        }
        if (params.watchSlidesProgress) {
          swiper.updateSlidesOffset();
        }
        if (!isVirtual && !params.cssMode && (params.effect === 'slide' || params.effect === 'fade')) {
          var backFaceHiddenClass = "".concat(params.containerModifierClass, "backface-hidden");
          var hasClassBackfaceClassAdded = swiper.$el.hasClass(backFaceHiddenClass);
          if (slidesLength <= params.maxBackfaceHiddenSlides) {
            if (!hasClassBackfaceClassAdded) swiper.$el.addClass(backFaceHiddenClass);
          } else if (hasClassBackfaceClassAdded) {
            swiper.$el.removeClass(backFaceHiddenClass);
          }
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateSlidesClasses.js":
    /*!****************************************************************!*\
      !*** ./node_modules/swiper/core/update/updateSlidesClasses.js ***!
      \****************************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateSlidesClassesJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_252558__) {
      __nested_webpack_require_252558__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_252558__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateSlidesClasses
          );
        }
        /* harmony export */
      });
      function updateSlidesClasses() {
        var swiper = this;
        var slides = swiper.slides,
          params = swiper.params,
          $wrapperEl = swiper.$wrapperEl,
          activeIndex = swiper.activeIndex,
          realIndex = swiper.realIndex;
        var isVirtual = swiper.virtual && params.virtual.enabled;
        slides.removeClass("".concat(params.slideActiveClass, " ").concat(params.slideNextClass, " ").concat(params.slidePrevClass, " ").concat(params.slideDuplicateActiveClass, " ").concat(params.slideDuplicateNextClass, " ").concat(params.slideDuplicatePrevClass));
        var activeSlide;
        if (isVirtual) {
          activeSlide = swiper.$wrapperEl.find(".".concat(params.slideClass, "[data-swiper-slide-index=\"").concat(activeIndex, "\"]"));
        } else {
          activeSlide = slides.eq(activeIndex);
        } // Active classes

        activeSlide.addClass(params.slideActiveClass);
        if (params.loop) {
          // Duplicate to all looped slides
          if (activeSlide.hasClass(params.slideDuplicateClass)) {
            $wrapperEl.children(".".concat(params.slideClass, ":not(.").concat(params.slideDuplicateClass, ")[data-swiper-slide-index=\"").concat(realIndex, "\"]")).addClass(params.slideDuplicateActiveClass);
          } else {
            $wrapperEl.children(".".concat(params.slideClass, ".").concat(params.slideDuplicateClass, "[data-swiper-slide-index=\"").concat(realIndex, "\"]")).addClass(params.slideDuplicateActiveClass);
          }
        } // Next Slide

        var nextSlide = activeSlide.nextAll(".".concat(params.slideClass)).eq(0).addClass(params.slideNextClass);
        if (params.loop && nextSlide.length === 0) {
          nextSlide = slides.eq(0);
          nextSlide.addClass(params.slideNextClass);
        } // Prev Slide

        var prevSlide = activeSlide.prevAll(".".concat(params.slideClass)).eq(0).addClass(params.slidePrevClass);
        if (params.loop && prevSlide.length === 0) {
          prevSlide = slides.eq(-1);
          prevSlide.addClass(params.slidePrevClass);
        }
        if (params.loop) {
          // Duplicate to all looped slides
          if (nextSlide.hasClass(params.slideDuplicateClass)) {
            $wrapperEl.children(".".concat(params.slideClass, ":not(.").concat(params.slideDuplicateClass, ")[data-swiper-slide-index=\"").concat(nextSlide.attr('data-swiper-slide-index'), "\"]")).addClass(params.slideDuplicateNextClass);
          } else {
            $wrapperEl.children(".".concat(params.slideClass, ".").concat(params.slideDuplicateClass, "[data-swiper-slide-index=\"").concat(nextSlide.attr('data-swiper-slide-index'), "\"]")).addClass(params.slideDuplicateNextClass);
          }
          if (prevSlide.hasClass(params.slideDuplicateClass)) {
            $wrapperEl.children(".".concat(params.slideClass, ":not(.").concat(params.slideDuplicateClass, ")[data-swiper-slide-index=\"").concat(prevSlide.attr('data-swiper-slide-index'), "\"]")).addClass(params.slideDuplicatePrevClass);
          } else {
            $wrapperEl.children(".".concat(params.slideClass, ".").concat(params.slideDuplicateClass, "[data-swiper-slide-index=\"").concat(prevSlide.attr('data-swiper-slide-index'), "\"]")).addClass(params.slideDuplicatePrevClass);
          }
        }
        swiper.emitSlidesClasses();
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateSlidesOffset.js":
    /*!***************************************************************!*\
      !*** ./node_modules/swiper/core/update/updateSlidesOffset.js ***!
      \***************************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateSlidesOffsetJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_256666__) {
      __nested_webpack_require_256666__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_256666__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateSlidesOffset
          );
        }
        /* harmony export */
      });
      function updateSlidesOffset() {
        var swiper = this;
        var slides = swiper.slides;
        for (var _i50 = 0; _i50 < slides.length; _i50 += 1) {
          slides[_i50].swiperSlideOffset = swiper.isHorizontal() ? slides[_i50].offsetLeft : slides[_i50].offsetTop;
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/core/update/updateSlidesProgress.js":
    /*!*****************************************************************!*\
      !*** ./node_modules/swiper/core/update/updateSlidesProgress.js ***!
      \*****************************************************************/
    /***/
    function node_modulesSwiperCoreUpdateUpdateSlidesProgressJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_257737__) {
      __nested_webpack_require_257737__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_257737__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */updateSlidesProgress
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_257737__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function updateSlidesProgress() {
        var translate = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : this && this.translate || 0;
        var swiper = this;
        var params = swiper.params;
        var slides = swiper.slides,
          rtl = swiper.rtlTranslate,
          snapGrid = swiper.snapGrid;
        if (slides.length === 0) return;
        if (typeof slides[0].swiperSlideOffset === 'undefined') swiper.updateSlidesOffset();
        var offsetCenter = -translate;
        if (rtl) offsetCenter = translate; // Visible Slides

        slides.removeClass(params.slideVisibleClass);
        swiper.visibleSlidesIndexes = [];
        swiper.visibleSlides = [];
        for (var _i51 = 0; _i51 < slides.length; _i51 += 1) {
          var slide = slides[_i51];
          var slideOffset = slide.swiperSlideOffset;
          if (params.cssMode && params.centeredSlides) {
            slideOffset -= slides[0].swiperSlideOffset;
          }
          var slideProgress = (offsetCenter + (params.centeredSlides ? swiper.minTranslate() : 0) - slideOffset) / (slide.swiperSlideSize + params.spaceBetween);
          var originalSlideProgress = (offsetCenter - snapGrid[0] + (params.centeredSlides ? swiper.minTranslate() : 0) - slideOffset) / (slide.swiperSlideSize + params.spaceBetween);
          var slideBefore = -(offsetCenter - slideOffset);
          var slideAfter = slideBefore + swiper.slidesSizesGrid[_i51];
          var isVisible = slideBefore >= 0 && slideBefore < swiper.size - 1 || slideAfter > 1 && slideAfter <= swiper.size || slideBefore <= 0 && slideAfter >= swiper.size;
          if (isVisible) {
            swiper.visibleSlides.push(slide);
            swiper.visibleSlidesIndexes.push(_i51);
            slides.eq(_i51).addClass(params.slideVisibleClass);
          }
          slide.progress = rtl ? -slideProgress : slideProgress;
          slide.originalProgress = rtl ? -originalSlideProgress : originalSlideProgress;
        }
        swiper.visibleSlides = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(swiper.visibleSlides);
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/a11y/a11y.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/modules/a11y/a11y.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperModulesA11yA11yJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_260720__) {
      __nested_webpack_require_260720__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_260720__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */A11y
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_260720__( /*! ../../shared/classes-to-selector.js */"./node_modules/swiper/shared/classes-to-selector.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_260720__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function A11y(_ref5) {
        var swiper = _ref5.swiper,
          extendParams = _ref5.extendParams,
          on = _ref5.on;
        extendParams({
          a11y: {
            enabled: true,
            notificationClass: 'swiper-notification',
            prevSlideMessage: 'Previous slide',
            nextSlideMessage: 'Next slide',
            firstSlideMessage: 'This is the first slide',
            lastSlideMessage: 'This is the last slide',
            paginationBulletMessage: 'Go to slide {{index}}',
            slideLabelMessage: '{{index}} / {{slidesLength}}',
            containerMessage: null,
            containerRoleDescriptionMessage: null,
            itemRoleDescriptionMessage: null,
            slideRole: 'group',
            id: null
          }
        });
        swiper.a11y = {
          clicked: false
        };
        var liveRegion = null;
        function notify(message) {
          var notification = liveRegion;
          if (notification.length === 0) return;
          notification.html('');
          notification.html(message);
        }
        function getRandomNumber() {
          var size = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 16;
          var randomChar = function randomChar() {
            return Math.round(16 * Math.random()).toString(16);
          };
          return 'x'.repeat(size).replace(/x/g, randomChar);
        }
        function makeElFocusable($el) {
          $el.attr('tabIndex', '0');
        }
        function makeElNotFocusable($el) {
          $el.attr('tabIndex', '-1');
        }
        function addElRole($el, role) {
          $el.attr('role', role);
        }
        function addElRoleDescription($el, description) {
          $el.attr('aria-roledescription', description);
        }
        function addElControls($el, controls) {
          $el.attr('aria-controls', controls);
        }
        function addElLabel($el, label) {
          $el.attr('aria-label', label);
        }
        function addElId($el, id) {
          $el.attr('id', id);
        }
        function addElLive($el, live) {
          $el.attr('aria-live', live);
        }
        function disableEl($el) {
          $el.attr('aria-disabled', true);
        }
        function enableEl($el) {
          $el.attr('aria-disabled', false);
        }
        function onEnterOrSpaceKey(e) {
          if (e.keyCode !== 13 && e.keyCode !== 32) return;
          var params = swiper.params.a11y;
          var $targetEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(e.target);
          if (swiper.navigation && swiper.navigation.$nextEl && $targetEl.is(swiper.navigation.$nextEl)) {
            if (!(swiper.isEnd && !swiper.params.loop)) {
              swiper.slideNext();
            }
            if (swiper.isEnd) {
              notify(params.lastSlideMessage);
            } else {
              notify(params.nextSlideMessage);
            }
          }
          if (swiper.navigation && swiper.navigation.$prevEl && $targetEl.is(swiper.navigation.$prevEl)) {
            if (!(swiper.isBeginning && !swiper.params.loop)) {
              swiper.slidePrev();
            }
            if (swiper.isBeginning) {
              notify(params.firstSlideMessage);
            } else {
              notify(params.prevSlideMessage);
            }
          }
          if (swiper.pagination && $targetEl.is((0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_0__["default"])(swiper.params.pagination.bulletClass))) {
            $targetEl[0].click();
          }
        }
        function updateNavigation() {
          if (swiper.params.loop || swiper.params.rewind || !swiper.navigation) return;
          var _swiper$navigation = swiper.navigation,
            $nextEl = _swiper$navigation.$nextEl,
            $prevEl = _swiper$navigation.$prevEl;
          if ($prevEl && $prevEl.length > 0) {
            if (swiper.isBeginning) {
              disableEl($prevEl);
              makeElNotFocusable($prevEl);
            } else {
              enableEl($prevEl);
              makeElFocusable($prevEl);
            }
          }
          if ($nextEl && $nextEl.length > 0) {
            if (swiper.isEnd) {
              disableEl($nextEl);
              makeElNotFocusable($nextEl);
            } else {
              enableEl($nextEl);
              makeElFocusable($nextEl);
            }
          }
        }
        function hasPagination() {
          return swiper.pagination && swiper.pagination.bullets && swiper.pagination.bullets.length;
        }
        function hasClickablePagination() {
          return hasPagination() && swiper.params.pagination.clickable;
        }
        function updatePagination() {
          var params = swiper.params.a11y;
          if (!hasPagination()) return;
          swiper.pagination.bullets.each(function (bulletEl) {
            var $bulletEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(bulletEl);
            if (swiper.params.pagination.clickable) {
              makeElFocusable($bulletEl);
              if (!swiper.params.pagination.renderBullet) {
                addElRole($bulletEl, 'button');
                addElLabel($bulletEl, params.paginationBulletMessage.replace(/\{\{index\}\}/, $bulletEl.index() + 1));
              }
            }
            if ($bulletEl.is(".".concat(swiper.params.pagination.bulletActiveClass))) {
              $bulletEl.attr('aria-current', 'true');
            } else {
              $bulletEl.removeAttr('aria-current');
            }
          });
        }
        var initNavEl = function initNavEl($el, wrapperId, message) {
          makeElFocusable($el);
          if ($el[0].tagName !== 'BUTTON') {
            addElRole($el, 'button');
            $el.on('keydown', onEnterOrSpaceKey);
          }
          addElLabel($el, message);
          addElControls($el, wrapperId);
        };
        var handlePointerDown = function handlePointerDown() {
          swiper.a11y.clicked = true;
        };
        var handlePointerUp = function handlePointerUp() {
          swiper.a11y.clicked = false;
        };
        var handleFocus = function handleFocus(e) {
          if (swiper.a11y.clicked) return;
          var slideEl = e.target.closest(".".concat(swiper.params.slideClass));
          if (!slideEl || !swiper.slides.includes(slideEl)) return;
          var isActive = swiper.slides.indexOf(slideEl) === swiper.activeIndex;
          var isVisible = swiper.params.watchSlidesProgress && swiper.visibleSlides && swiper.visibleSlides.includes(slideEl);
          if (isActive || isVisible) return;
          if (swiper.isHorizontal()) {
            swiper.el.scrollLeft = 0;
          } else {
            swiper.el.scrollTop = 0;
          }
          swiper.slideTo(swiper.slides.indexOf(slideEl), 0);
        };
        var initSlides = function initSlides() {
          var params = swiper.params.a11y;
          if (params.itemRoleDescriptionMessage) {
            addElRoleDescription((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(swiper.slides), params.itemRoleDescriptionMessage);
          }
          if (params.slideRole) {
            addElRole((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(swiper.slides), params.slideRole);
          }
          var slidesLength = swiper.params.loop ? swiper.slides.filter(function (el) {
            return !el.classList.contains(swiper.params.slideDuplicateClass);
          }).length : swiper.slides.length;
          if (params.slideLabelMessage) {
            swiper.slides.each(function (slideEl, index) {
              var $slideEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(slideEl);
              var slideIndex = swiper.params.loop ? parseInt($slideEl.attr('data-swiper-slide-index'), 10) : index;
              var ariaLabelMessage = params.slideLabelMessage.replace(/\{\{index\}\}/, slideIndex + 1).replace(/\{\{slidesLength\}\}/, slidesLength);
              addElLabel($slideEl, ariaLabelMessage);
            });
          }
        };
        var init = function init() {
          var params = swiper.params.a11y;
          swiper.$el.append(liveRegion); // Container

          var $containerEl = swiper.$el;
          if (params.containerRoleDescriptionMessage) {
            addElRoleDescription($containerEl, params.containerRoleDescriptionMessage);
          }
          if (params.containerMessage) {
            addElLabel($containerEl, params.containerMessage);
          } // Wrapper

          var $wrapperEl = swiper.$wrapperEl;
          var wrapperId = params.id || $wrapperEl.attr('id') || "swiper-wrapper-".concat(getRandomNumber(16));
          var live = swiper.params.autoplay && swiper.params.autoplay.enabled ? 'off' : 'polite';
          addElId($wrapperEl, wrapperId);
          addElLive($wrapperEl, live); // Slide

          initSlides(); // Navigation

          var $nextEl;
          var $prevEl;
          if (swiper.navigation && swiper.navigation.$nextEl) {
            $nextEl = swiper.navigation.$nextEl;
          }
          if (swiper.navigation && swiper.navigation.$prevEl) {
            $prevEl = swiper.navigation.$prevEl;
          }
          if ($nextEl && $nextEl.length) {
            initNavEl($nextEl, wrapperId, params.nextSlideMessage);
          }
          if ($prevEl && $prevEl.length) {
            initNavEl($prevEl, wrapperId, params.prevSlideMessage);
          } // Pagination

          if (hasClickablePagination()) {
            swiper.pagination.$el.on('keydown', (0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_0__["default"])(swiper.params.pagination.bulletClass), onEnterOrSpaceKey);
          } // Tab focus

          swiper.$el.on('focus', handleFocus, true);
          swiper.$el.on('pointerdown', handlePointerDown, true);
          swiper.$el.on('pointerup', handlePointerUp, true);
        };
        function destroy() {
          if (liveRegion && liveRegion.length > 0) liveRegion.remove();
          var $nextEl;
          var $prevEl;
          if (swiper.navigation && swiper.navigation.$nextEl) {
            $nextEl = swiper.navigation.$nextEl;
          }
          if (swiper.navigation && swiper.navigation.$prevEl) {
            $prevEl = swiper.navigation.$prevEl;
          }
          if ($nextEl) {
            $nextEl.off('keydown', onEnterOrSpaceKey);
          }
          if ($prevEl) {
            $prevEl.off('keydown', onEnterOrSpaceKey);
          } // Pagination

          if (hasClickablePagination()) {
            swiper.pagination.$el.off('keydown', (0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_0__["default"])(swiper.params.pagination.bulletClass), onEnterOrSpaceKey);
          } // Tab focus

          swiper.$el.off('focus', handleFocus, true);
          swiper.$el.off('pointerdown', handlePointerDown, true);
          swiper.$el.off('pointerup', handlePointerUp, true);
        }
        on('beforeInit', function () {
          liveRegion = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])("<span class=\"".concat(swiper.params.a11y.notificationClass, "\" aria-live=\"assertive\" aria-atomic=\"true\"></span>"));
        });
        on('afterInit', function () {
          if (!swiper.params.a11y.enabled) return;
          init();
        });
        on('slidesLengthChange snapGridLengthChange slidesGridLengthChange', function () {
          if (!swiper.params.a11y.enabled) return;
          initSlides();
        });
        on('fromEdge toEdge afterInit lock unlock', function () {
          if (!swiper.params.a11y.enabled) return;
          updateNavigation();
        });
        on('paginationUpdate', function () {
          if (!swiper.params.a11y.enabled) return;
          updatePagination();
        });
        on('destroy', function () {
          if (!swiper.params.a11y.enabled) return;
          destroy();
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/autoplay/autoplay.js":
    /*!**********************************************************!*\
      !*** ./node_modules/swiper/modules/autoplay/autoplay.js ***!
      \**********************************************************/
    /***/
    function node_modulesSwiperModulesAutoplayAutoplayJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_273796__) {
      __nested_webpack_require_273796__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_273796__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Autoplay
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_273796__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_273796__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      /* eslint no-underscore-dangle: "off" */

      /* eslint no-use-before-define: "off" */

      function Autoplay(_ref6) {
        var swiper = _ref6.swiper,
          extendParams = _ref6.extendParams,
          on = _ref6.on,
          emit = _ref6.emit;
        var timeout;
        swiper.autoplay = {
          running: false,
          paused: false
        };
        extendParams({
          autoplay: {
            enabled: false,
            delay: 3000,
            waitForTransition: true,
            disableOnInteraction: true,
            stopOnLastSlide: false,
            reverseDirection: false,
            pauseOnMouseEnter: false
          }
        });
        function run() {
          if (!swiper.size) {
            swiper.autoplay.running = false;
            swiper.autoplay.paused = false;
            return;
          }
          var $activeSlideEl = swiper.slides.eq(swiper.activeIndex);
          var delay = swiper.params.autoplay.delay;
          if ($activeSlideEl.attr('data-swiper-autoplay')) {
            delay = $activeSlideEl.attr('data-swiper-autoplay') || swiper.params.autoplay.delay;
          }
          clearTimeout(timeout);
          timeout = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_1__.nextTick)(function () {
            var autoplayResult;
            if (swiper.params.autoplay.reverseDirection) {
              if (swiper.params.loop) {
                swiper.loopFix();
                autoplayResult = swiper.slidePrev(swiper.params.speed, true, true);
                emit('autoplay');
              } else if (!swiper.isBeginning) {
                autoplayResult = swiper.slidePrev(swiper.params.speed, true, true);
                emit('autoplay');
              } else if (!swiper.params.autoplay.stopOnLastSlide) {
                autoplayResult = swiper.slideTo(swiper.slides.length - 1, swiper.params.speed, true, true);
                emit('autoplay');
              } else {
                stop();
              }
            } else if (swiper.params.loop) {
              swiper.loopFix();
              autoplayResult = swiper.slideNext(swiper.params.speed, true, true);
              emit('autoplay');
            } else if (!swiper.isEnd) {
              autoplayResult = swiper.slideNext(swiper.params.speed, true, true);
              emit('autoplay');
            } else if (!swiper.params.autoplay.stopOnLastSlide) {
              autoplayResult = swiper.slideTo(0, swiper.params.speed, true, true);
              emit('autoplay');
            } else {
              stop();
            }
            if (swiper.params.cssMode && swiper.autoplay.running) run();else if (autoplayResult === false) {
              run();
            }
          }, delay);
        }
        function start() {
          if (typeof timeout !== 'undefined') return false;
          if (swiper.autoplay.running) return false;
          swiper.autoplay.running = true;
          emit('autoplayStart');
          run();
          return true;
        }
        function stop() {
          if (!swiper.autoplay.running) return false;
          if (typeof timeout === 'undefined') return false;
          if (timeout) {
            clearTimeout(timeout);
            timeout = undefined;
          }
          swiper.autoplay.running = false;
          emit('autoplayStop');
          return true;
        }
        function pause(speed) {
          if (!swiper.autoplay.running) return;
          if (swiper.autoplay.paused) return;
          if (timeout) clearTimeout(timeout);
          swiper.autoplay.paused = true;
          if (speed === 0 || !swiper.params.autoplay.waitForTransition) {
            swiper.autoplay.paused = false;
            run();
          } else {
            ['transitionend', 'webkitTransitionEnd'].forEach(function (event) {
              swiper.$wrapperEl[0].addEventListener(event, onTransitionEnd);
            });
          }
        }
        function onVisibilityChange() {
          var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
          if (document.visibilityState === 'hidden' && swiper.autoplay.running) {
            pause();
          }
          if (document.visibilityState === 'visible' && swiper.autoplay.paused) {
            run();
            swiper.autoplay.paused = false;
          }
        }
        function onTransitionEnd(e) {
          if (!swiper || swiper.destroyed || !swiper.$wrapperEl) return;
          if (e.target !== swiper.$wrapperEl[0]) return;
          ['transitionend', 'webkitTransitionEnd'].forEach(function (event) {
            swiper.$wrapperEl[0].removeEventListener(event, onTransitionEnd);
          });
          swiper.autoplay.paused = false;
          if (!swiper.autoplay.running) {
            stop();
          } else {
            run();
          }
        }
        function onMouseEnter() {
          if (swiper.params.autoplay.disableOnInteraction) {
            stop();
          } else {
            emit('autoplayPause');
            pause();
          }
          ['transitionend', 'webkitTransitionEnd'].forEach(function (event) {
            swiper.$wrapperEl[0].removeEventListener(event, onTransitionEnd);
          });
        }
        function onMouseLeave() {
          if (swiper.params.autoplay.disableOnInteraction) {
            return;
          }
          swiper.autoplay.paused = false;
          emit('autoplayResume');
          run();
        }
        function attachMouseEvents() {
          if (swiper.params.autoplay.pauseOnMouseEnter) {
            swiper.$el.on('mouseenter', onMouseEnter);
            swiper.$el.on('mouseleave', onMouseLeave);
          }
        }
        function detachMouseEvents() {
          swiper.$el.off('mouseenter', onMouseEnter);
          swiper.$el.off('mouseleave', onMouseLeave);
        }
        on('init', function () {
          if (swiper.params.autoplay.enabled) {
            start();
            var _document3 = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
            _document3.addEventListener('visibilitychange', onVisibilityChange);
            attachMouseEvents();
          }
        });
        on('beforeTransitionStart', function (_s, speed, internal) {
          if (swiper.autoplay.running) {
            if (internal || !swiper.params.autoplay.disableOnInteraction) {
              swiper.autoplay.pause(speed);
            } else {
              stop();
            }
          }
        });
        on('sliderFirstMove', function () {
          if (swiper.autoplay.running) {
            if (swiper.params.autoplay.disableOnInteraction) {
              stop();
            } else {
              pause();
            }
          }
        });
        on('touchEnd', function () {
          if (swiper.params.cssMode && swiper.autoplay.paused && !swiper.params.autoplay.disableOnInteraction) {
            run();
          }
        });
        on('destroy', function () {
          detachMouseEvents();
          if (swiper.autoplay.running) {
            stop();
          }
          var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
          document.removeEventListener('visibilitychange', onVisibilityChange);
        });
        Object.assign(swiper.autoplay, {
          pause: pause,
          run: run,
          start: start,
          stop: stop
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/controller/controller.js":
    /*!**************************************************************!*\
      !*** ./node_modules/swiper/modules/controller/controller.js ***!
      \**************************************************************/
    /***/
    function node_modulesSwiperModulesControllerControllerJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_282282__) {
      __nested_webpack_require_282282__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_282282__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Controller
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_282282__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      /* eslint no-bitwise: ["error", { "allow": [">>"] }] */

      function Controller(_ref7) {
        var swiper = _ref7.swiper,
          extendParams = _ref7.extendParams,
          on = _ref7.on;
        extendParams({
          controller: {
            control: undefined,
            inverse: false,
            by: 'slide' // or 'container'
          }
        });

        swiper.controller = {
          control: undefined
        };
        function LinearSpline(x, y) {
          var binarySearch = function search() {
            var maxIndex;
            var minIndex;
            var guess;
            return function (array, val) {
              minIndex = -1;
              maxIndex = array.length;
              while (maxIndex - minIndex > 1) {
                guess = maxIndex + minIndex >> 1;
                if (array[guess] <= val) {
                  minIndex = guess;
                } else {
                  maxIndex = guess;
                }
              }
              return maxIndex;
            };
          }();
          this.x = x;
          this.y = y;
          this.lastIndex = x.length - 1; // Given an x value (x2), return the expected y2 value:
          // (x1,y1) is the known point before given value,
          // (x3,y3) is the known point after given value.

          var i1;
          var i3;
          this.interpolate = function interpolate(x2) {
            if (!x2) return 0; // Get the indexes of x1 and x3 (the array indexes before and after given x2):

            i3 = binarySearch(this.x, x2);
            i1 = i3 - 1; // We have our indexes i1 & i3, so we can calculate already:
            // y2 := ((x2−x1) × (y3−y1)) ÷ (x3−x1) + y1

            return (x2 - this.x[i1]) * (this.y[i3] - this.y[i1]) / (this.x[i3] - this.x[i1]) + this.y[i1];
          };
          return this;
        } // xxx: for now i will just save one spline function to to

        function getInterpolateFunction(c) {
          if (!swiper.controller.spline) {
            swiper.controller.spline = swiper.params.loop ? new LinearSpline(swiper.slidesGrid, c.slidesGrid) : new LinearSpline(swiper.snapGrid, c.snapGrid);
          }
        }
        function setTranslate(_t, byController) {
          var controlled = swiper.controller.control;
          var multiplier;
          var controlledTranslate;
          var Swiper = swiper.constructor;
          function setControlledTranslate(c) {
            // this will create an Interpolate function based on the snapGrids
            // x is the Grid of the scrolled scroller and y will be the controlled scroller
            // it makes sense to create this only once and recall it for the interpolation
            // the function does a lot of value caching for performance
            var translate = swiper.rtlTranslate ? -swiper.translate : swiper.translate;
            if (swiper.params.controller.by === 'slide') {
              getInterpolateFunction(c); // i am not sure why the values have to be multiplicated this way, tried to invert the snapGrid
              // but it did not work out

              controlledTranslate = -swiper.controller.spline.interpolate(-translate);
            }
            if (!controlledTranslate || swiper.params.controller.by === 'container') {
              multiplier = (c.maxTranslate() - c.minTranslate()) / (swiper.maxTranslate() - swiper.minTranslate());
              controlledTranslate = (translate - swiper.minTranslate()) * multiplier + c.minTranslate();
            }
            if (swiper.params.controller.inverse) {
              controlledTranslate = c.maxTranslate() - controlledTranslate;
            }
            c.updateProgress(controlledTranslate);
            c.setTranslate(controlledTranslate, swiper);
            c.updateActiveIndex();
            c.updateSlidesClasses();
          }
          if (Array.isArray(controlled)) {
            for (var _i52 = 0; _i52 < controlled.length; _i52 += 1) {
              if (controlled[_i52] !== byController && controlled[_i52] instanceof Swiper) {
                setControlledTranslate(controlled[_i52]);
              }
            }
          } else if (controlled instanceof Swiper && byController !== controlled) {
            setControlledTranslate(controlled);
          }
        }
        function setTransition(duration, byController) {
          var Swiper = swiper.constructor;
          var controlled = swiper.controller.control;
          var i;
          function setControlledTransition(c) {
            c.setTransition(duration, swiper);
            if (duration !== 0) {
              c.transitionStart();
              if (c.params.autoHeight) {
                (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.nextTick)(function () {
                  c.updateAutoHeight();
                });
              }
              c.$wrapperEl.transitionEnd(function () {
                if (!controlled) return;
                if (c.params.loop && swiper.params.controller.by === 'slide') {
                  c.loopFix();
                }
                c.transitionEnd();
              });
            }
          }
          if (Array.isArray(controlled)) {
            for (i = 0; i < controlled.length; i += 1) {
              if (controlled[i] !== byController && controlled[i] instanceof Swiper) {
                setControlledTransition(controlled[i]);
              }
            }
          } else if (controlled instanceof Swiper && byController !== controlled) {
            setControlledTransition(controlled);
          }
        }
        function removeSpline() {
          if (!swiper.controller.control) return;
          if (swiper.controller.spline) {
            swiper.controller.spline = undefined;
            delete swiper.controller.spline;
          }
        }
        on('beforeInit', function () {
          swiper.controller.control = swiper.params.controller.control;
        });
        on('update', function () {
          removeSpline();
        });
        on('resize', function () {
          removeSpline();
        });
        on('observerUpdate', function () {
          removeSpline();
        });
        on('setTranslate', function (_s, translate, byController) {
          if (!swiper.controller.control) return;
          swiper.controller.setTranslate(translate, byController);
        });
        on('setTransition', function (_s, duration, byController) {
          if (!swiper.controller.control) return;
          swiper.controller.setTransition(duration, byController);
        });
        Object.assign(swiper.controller, {
          setTranslate: setTranslate,
          setTransition: setTransition
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/effect-cards/effect-cards.js":
    /*!******************************************************************!*\
      !*** ./node_modules/swiper/modules/effect-cards/effect-cards.js ***!
      \******************************************************************/
    /***/
    function node_modulesSwiperModulesEffectCardsEffectCardsJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_289932__) {
      __nested_webpack_require_289932__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_289932__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */EffectCards
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_289932__( /*! ../../shared/create-shadow.js */"./node_modules/swiper/shared/create-shadow.js");
      /* harmony import */
      var _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_289932__( /*! ../../shared/effect-init.js */"./node_modules/swiper/shared/effect-init.js");
      /* harmony import */
      var _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_289932__( /*! ../../shared/effect-target.js */"./node_modules/swiper/shared/effect-target.js");
      /* harmony import */
      var _shared_effect_virtual_transition_end_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_289932__( /*! ../../shared/effect-virtual-transition-end.js */"./node_modules/swiper/shared/effect-virtual-transition-end.js");
      function EffectCards(_ref8) {
        var swiper = _ref8.swiper,
          extendParams = _ref8.extendParams,
          on = _ref8.on;
        extendParams({
          cardsEffect: {
            slideShadows: true,
            transformEl: null,
            rotate: true,
            perSlideRotate: 2,
            perSlideOffset: 8
          }
        });
        var setTranslate = function setTranslate() {
          var slides = swiper.slides,
            activeIndex = swiper.activeIndex;
          var params = swiper.params.cardsEffect;
          var _swiper$touchEventsDa = swiper.touchEventsData,
            startTranslate = _swiper$touchEventsDa.startTranslate,
            isTouched = _swiper$touchEventsDa.isTouched;
          var currentTranslate = swiper.translate;
          for (var _i53 = 0; _i53 < slides.length; _i53 += 1) {
            var $slideEl = slides.eq(_i53);
            var slideProgress = $slideEl[0].progress;
            var progress = Math.min(Math.max(slideProgress, -4), 4);
            var offset = $slideEl[0].swiperSlideOffset;
            if (swiper.params.centeredSlides && !swiper.params.cssMode) {
              swiper.$wrapperEl.transform("translateX(".concat(swiper.minTranslate(), "px)"));
            }
            if (swiper.params.centeredSlides && swiper.params.cssMode) {
              offset -= slides[0].swiperSlideOffset;
            }
            var tX = swiper.params.cssMode ? -offset - swiper.translate : -offset;
            var tY = 0;
            var tZ = -100 * Math.abs(progress);
            var scale = 1;
            var rotate = -params.perSlideRotate * progress;
            var tXAdd = params.perSlideOffset - Math.abs(progress) * 0.75;
            var slideIndex = swiper.virtual && swiper.params.virtual.enabled ? swiper.virtual.from + _i53 : _i53;
            var isSwipeToNext = (slideIndex === activeIndex || slideIndex === activeIndex - 1) && progress > 0 && progress < 1 && (isTouched || swiper.params.cssMode) && currentTranslate < startTranslate;
            var isSwipeToPrev = (slideIndex === activeIndex || slideIndex === activeIndex + 1) && progress < 0 && progress > -1 && (isTouched || swiper.params.cssMode) && currentTranslate > startTranslate;
            if (isSwipeToNext || isSwipeToPrev) {
              var subProgress = Math.pow(1 - Math.abs((Math.abs(progress) - 0.5) / 0.5), 0.5);
              rotate += -28 * progress * subProgress;
              scale += -0.5 * subProgress;
              tXAdd += 96 * subProgress;
              tY = "".concat(-25 * subProgress * Math.abs(progress), "%");
            }
            if (progress < 0) {
              // next
              tX = "calc(".concat(tX, "px + (").concat(tXAdd * Math.abs(progress), "%))");
            } else if (progress > 0) {
              // prev
              tX = "calc(".concat(tX, "px + (-").concat(tXAdd * Math.abs(progress), "%))");
            } else {
              tX = "".concat(tX, "px");
            }
            if (!swiper.isHorizontal()) {
              var prevY = tY;
              tY = tX;
              tX = prevY;
            }
            var scaleString = progress < 0 ? "".concat(1 + (1 - scale) * progress) : "".concat(1 - (1 - scale) * progress);
            var transform = "\n        translate3d(".concat(tX, ", ").concat(tY, ", ").concat(tZ, "px)\n        rotateZ(").concat(params.rotate ? rotate : 0, "deg)\n        scale(").concat(scaleString, ")\n      ");
            if (params.slideShadows) {
              // Set shadows
              var $shadowEl = $slideEl.find('.swiper-slide-shadow');
              if ($shadowEl.length === 0) {
                $shadowEl = (0, _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_0__["default"])(params, $slideEl);
              }
              if ($shadowEl.length) $shadowEl[0].style.opacity = Math.min(Math.max((Math.abs(progress) - 0.5) / 0.5, 0), 1);
            }
            $slideEl[0].style.zIndex = -Math.abs(Math.round(slideProgress)) + slides.length;
            var $targetEl = (0, _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_2__["default"])(params, $slideEl);
            $targetEl.transform(transform);
          }
        };
        var setTransition = function setTransition(duration) {
          var transformEl = swiper.params.cardsEffect.transformEl;
          var $transitionElements = transformEl ? swiper.slides.find(transformEl) : swiper.slides;
          $transitionElements.transition(duration).find('.swiper-slide-shadow').transition(duration);
          (0, _shared_effect_virtual_transition_end_js__WEBPACK_IMPORTED_MODULE_3__["default"])({
            swiper: swiper,
            duration: duration,
            transformEl: transformEl
          });
        };
        (0, _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_1__["default"])({
          effect: 'cards',
          swiper: swiper,
          on: on,
          setTranslate: setTranslate,
          setTransition: setTransition,
          perspective: function perspective() {
            return true;
          },
          overwriteParams: function overwriteParams() {
            return {
              watchSlidesProgress: true,
              virtualTranslate: !swiper.params.cssMode
            };
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/effect-coverflow/effect-coverflow.js":
    /*!**************************************************************************!*\
      !*** ./node_modules/swiper/modules/effect-coverflow/effect-coverflow.js ***!
      \**************************************************************************/
    /***/
    function node_modulesSwiperModulesEffectCoverflowEffectCoverflowJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_296856__) {
      __nested_webpack_require_296856__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_296856__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */EffectCoverflow
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_296856__( /*! ../../shared/create-shadow.js */"./node_modules/swiper/shared/create-shadow.js");
      /* harmony import */
      var _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_296856__( /*! ../../shared/effect-init.js */"./node_modules/swiper/shared/effect-init.js");
      /* harmony import */
      var _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_296856__( /*! ../../shared/effect-target.js */"./node_modules/swiper/shared/effect-target.js");
      function EffectCoverflow(_ref9) {
        var swiper = _ref9.swiper,
          extendParams = _ref9.extendParams,
          on = _ref9.on;
        extendParams({
          coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            scale: 1,
            modifier: 1,
            slideShadows: true,
            transformEl: null
          }
        });
        var setTranslate = function setTranslate() {
          var swiperWidth = swiper.width,
            swiperHeight = swiper.height,
            slides = swiper.slides,
            slidesSizesGrid = swiper.slidesSizesGrid;
          var params = swiper.params.coverflowEffect;
          var isHorizontal = swiper.isHorizontal();
          var transform = swiper.translate;
          var center = isHorizontal ? -transform + swiperWidth / 2 : -transform + swiperHeight / 2;
          var rotate = isHorizontal ? params.rotate : -params.rotate;
          var translate = params.depth; // Each slide offset from center

          for (var _i54 = 0, length = slides.length; _i54 < length; _i54 += 1) {
            var $slideEl = slides.eq(_i54);
            var slideSize = slidesSizesGrid[_i54];
            var slideOffset = $slideEl[0].swiperSlideOffset;
            var centerOffset = (center - slideOffset - slideSize / 2) / slideSize;
            var offsetMultiplier = typeof params.modifier === 'function' ? params.modifier(centerOffset) : centerOffset * params.modifier;
            var rotateY = isHorizontal ? rotate * offsetMultiplier : 0;
            var rotateX = isHorizontal ? 0 : rotate * offsetMultiplier; // var rotateZ = 0

            var translateZ = -translate * Math.abs(offsetMultiplier);
            var stretch = params.stretch; // Allow percentage to make a relative stretch for responsive sliders

            if (typeof stretch === 'string' && stretch.indexOf('%') !== -1) {
              stretch = parseFloat(params.stretch) / 100 * slideSize;
            }
            var translateY = isHorizontal ? 0 : stretch * offsetMultiplier;
            var translateX = isHorizontal ? stretch * offsetMultiplier : 0;
            var scale = 1 - (1 - params.scale) * Math.abs(offsetMultiplier); // Fix for ultra small values

            if (Math.abs(translateX) < 0.001) translateX = 0;
            if (Math.abs(translateY) < 0.001) translateY = 0;
            if (Math.abs(translateZ) < 0.001) translateZ = 0;
            if (Math.abs(rotateY) < 0.001) rotateY = 0;
            if (Math.abs(rotateX) < 0.001) rotateX = 0;
            if (Math.abs(scale) < 0.001) scale = 0;
            var slideTransform = "translate3d(".concat(translateX, "px,").concat(translateY, "px,").concat(translateZ, "px)  rotateX(").concat(rotateX, "deg) rotateY(").concat(rotateY, "deg) scale(").concat(scale, ")");
            var $targetEl = (0, _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_2__["default"])(params, $slideEl);
            $targetEl.transform(slideTransform);
            $slideEl[0].style.zIndex = -Math.abs(Math.round(offsetMultiplier)) + 1;
            if (params.slideShadows) {
              // Set shadows
              var $shadowBeforeEl = isHorizontal ? $slideEl.find('.swiper-slide-shadow-left') : $slideEl.find('.swiper-slide-shadow-top');
              var $shadowAfterEl = isHorizontal ? $slideEl.find('.swiper-slide-shadow-right') : $slideEl.find('.swiper-slide-shadow-bottom');
              if ($shadowBeforeEl.length === 0) {
                $shadowBeforeEl = (0, _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_0__["default"])(params, $slideEl, isHorizontal ? 'left' : 'top');
              }
              if ($shadowAfterEl.length === 0) {
                $shadowAfterEl = (0, _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_0__["default"])(params, $slideEl, isHorizontal ? 'right' : 'bottom');
              }
              if ($shadowBeforeEl.length) $shadowBeforeEl[0].style.opacity = offsetMultiplier > 0 ? offsetMultiplier : 0;
              if ($shadowAfterEl.length) $shadowAfterEl[0].style.opacity = -offsetMultiplier > 0 ? -offsetMultiplier : 0;
            }
          }
        };
        var setTransition = function setTransition(duration) {
          var transformEl = swiper.params.coverflowEffect.transformEl;
          var $transitionElements = transformEl ? swiper.slides.find(transformEl) : swiper.slides;
          $transitionElements.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
        };
        (0, _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_1__["default"])({
          effect: 'coverflow',
          swiper: swiper,
          on: on,
          setTranslate: setTranslate,
          setTransition: setTransition,
          perspective: function perspective() {
            return true;
          },
          overwriteParams: function overwriteParams() {
            return {
              watchSlidesProgress: true
            };
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/effect-creative/effect-creative.js":
    /*!************************************************************************!*\
      !*** ./node_modules/swiper/modules/effect-creative/effect-creative.js ***!
      \************************************************************************/
    /***/
    function node_modulesSwiperModulesEffectCreativeEffectCreativeJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_303311__) {
      __nested_webpack_require_303311__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_303311__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */EffectCreative
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_303311__( /*! ../../shared/create-shadow.js */"./node_modules/swiper/shared/create-shadow.js");
      /* harmony import */
      var _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_303311__( /*! ../../shared/effect-init.js */"./node_modules/swiper/shared/effect-init.js");
      /* harmony import */
      var _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_303311__( /*! ../../shared/effect-target.js */"./node_modules/swiper/shared/effect-target.js");
      /* harmony import */
      var _shared_effect_virtual_transition_end_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_303311__( /*! ../../shared/effect-virtual-transition-end.js */"./node_modules/swiper/shared/effect-virtual-transition-end.js");
      function EffectCreative(_ref10) {
        var swiper = _ref10.swiper,
          extendParams = _ref10.extendParams,
          on = _ref10.on;
        extendParams({
          creativeEffect: {
            transformEl: null,
            limitProgress: 1,
            shadowPerProgress: false,
            progressMultiplier: 1,
            perspective: true,
            prev: {
              translate: [0, 0, 0],
              rotate: [0, 0, 0],
              opacity: 1,
              scale: 1
            },
            next: {
              translate: [0, 0, 0],
              rotate: [0, 0, 0],
              opacity: 1,
              scale: 1
            }
          }
        });
        var getTranslateValue = function getTranslateValue(value) {
          if (typeof value === 'string') return value;
          return "".concat(value, "px");
        };
        var setTranslate = function setTranslate() {
          var slides = swiper.slides,
            $wrapperEl = swiper.$wrapperEl,
            slidesSizesGrid = swiper.slidesSizesGrid;
          var params = swiper.params.creativeEffect;
          var multiplier = params.progressMultiplier;
          var isCenteredSlides = swiper.params.centeredSlides;
          if (isCenteredSlides) {
            var margin = slidesSizesGrid[0] / 2 - swiper.params.slidesOffsetBefore || 0;
            $wrapperEl.transform("translateX(calc(50% - ".concat(margin, "px))"));
          }
          var _loop = function _loop() {
            var $slideEl = slides.eq(_i55);
            var slideProgress = $slideEl[0].progress;
            var progress = Math.min(Math.max($slideEl[0].progress, -params.limitProgress), params.limitProgress);
            var originalProgress = progress;
            if (!isCenteredSlides) {
              originalProgress = Math.min(Math.max($slideEl[0].originalProgress, -params.limitProgress), params.limitProgress);
            }
            var offset = $slideEl[0].swiperSlideOffset;
            var t = [swiper.params.cssMode ? -offset - swiper.translate : -offset, 0, 0];
            var r = [0, 0, 0];
            var custom = false;
            if (!swiper.isHorizontal()) {
              t[1] = t[0];
              t[0] = 0;
            }
            var data = {
              translate: [0, 0, 0],
              rotate: [0, 0, 0],
              scale: 1,
              opacity: 1
            };
            if (progress < 0) {
              data = params.next;
              custom = true;
            } else if (progress > 0) {
              data = params.prev;
              custom = true;
            } // set translate

            t.forEach(function (value, index) {
              t[index] = "calc(".concat(value, "px + (").concat(getTranslateValue(data.translate[index]), " * ").concat(Math.abs(progress * multiplier), "))");
            }); // set rotates

            r.forEach(function (value, index) {
              r[index] = data.rotate[index] * Math.abs(progress * multiplier);
            });
            $slideEl[0].style.zIndex = -Math.abs(Math.round(slideProgress)) + slides.length;
            var translateString = t.join(', ');
            var rotateString = "rotateX(".concat(r[0], "deg) rotateY(").concat(r[1], "deg) rotateZ(").concat(r[2], "deg)");
            var scaleString = originalProgress < 0 ? "scale(".concat(1 + (1 - data.scale) * originalProgress * multiplier, ")") : "scale(".concat(1 - (1 - data.scale) * originalProgress * multiplier, ")");
            var opacityString = originalProgress < 0 ? 1 + (1 - data.opacity) * originalProgress * multiplier : 1 - (1 - data.opacity) * originalProgress * multiplier;
            var transform = "translate3d(".concat(translateString, ") ").concat(rotateString, " ").concat(scaleString); // Set shadows

            if (custom && data.shadow || !custom) {
              var $shadowEl = $slideEl.children('.swiper-slide-shadow');
              if ($shadowEl.length === 0 && data.shadow) {
                $shadowEl = (0, _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_0__["default"])(params, $slideEl);
              }
              if ($shadowEl.length) {
                var shadowOpacity = params.shadowPerProgress ? progress * (1 / params.limitProgress) : progress;
                $shadowEl[0].style.opacity = Math.min(Math.max(Math.abs(shadowOpacity), 0), 1);
              }
            }
            var $targetEl = (0, _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_2__["default"])(params, $slideEl);
            $targetEl.transform(transform).css({
              opacity: opacityString
            });
            if (data.origin) {
              $targetEl.css('transform-origin', data.origin);
            }
          };
          for (var _i55 = 0; _i55 < slides.length; _i55 += 1) {
            _loop();
          }
        };
        var setTransition = function setTransition(duration) {
          var transformEl = swiper.params.creativeEffect.transformEl;
          var $transitionElements = transformEl ? swiper.slides.find(transformEl) : swiper.slides;
          $transitionElements.transition(duration).find('.swiper-slide-shadow').transition(duration);
          (0, _shared_effect_virtual_transition_end_js__WEBPACK_IMPORTED_MODULE_3__["default"])({
            swiper: swiper,
            duration: duration,
            transformEl: transformEl,
            allSlides: true
          });
        };
        (0, _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_1__["default"])({
          effect: 'creative',
          swiper: swiper,
          on: on,
          setTranslate: setTranslate,
          setTransition: setTransition,
          perspective: function perspective() {
            return swiper.params.creativeEffect.perspective;
          },
          overwriteParams: function overwriteParams() {
            return {
              watchSlidesProgress: true,
              virtualTranslate: !swiper.params.cssMode
            };
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/effect-cube/effect-cube.js":
    /*!****************************************************************!*\
      !*** ./node_modules/swiper/modules/effect-cube/effect-cube.js ***!
      \****************************************************************/
    /***/
    function node_modulesSwiperModulesEffectCubeEffectCubeJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_310894__) {
      __nested_webpack_require_310894__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_310894__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */EffectCube
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_310894__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_310894__( /*! ../../shared/effect-init.js */"./node_modules/swiper/shared/effect-init.js");
      function EffectCube(_ref11) {
        var swiper = _ref11.swiper,
          extendParams = _ref11.extendParams,
          on = _ref11.on;
        extendParams({
          cubeEffect: {
            slideShadows: true,
            shadow: true,
            shadowOffset: 20,
            shadowScale: 0.94
          }
        });
        var createSlideShadows = function createSlideShadows($slideEl, progress, isHorizontal) {
          var shadowBefore = isHorizontal ? $slideEl.find('.swiper-slide-shadow-left') : $slideEl.find('.swiper-slide-shadow-top');
          var shadowAfter = isHorizontal ? $slideEl.find('.swiper-slide-shadow-right') : $slideEl.find('.swiper-slide-shadow-bottom');
          if (shadowBefore.length === 0) {
            shadowBefore = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])("<div class=\"swiper-slide-shadow-".concat(isHorizontal ? 'left' : 'top', "\"></div>"));
            $slideEl.append(shadowBefore);
          }
          if (shadowAfter.length === 0) {
            shadowAfter = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])("<div class=\"swiper-slide-shadow-".concat(isHorizontal ? 'right' : 'bottom', "\"></div>"));
            $slideEl.append(shadowAfter);
          }
          if (shadowBefore.length) shadowBefore[0].style.opacity = Math.max(-progress, 0);
          if (shadowAfter.length) shadowAfter[0].style.opacity = Math.max(progress, 0);
        };
        var recreateShadows = function recreateShadows() {
          // create new ones
          var isHorizontal = swiper.isHorizontal();
          swiper.slides.each(function (slideEl) {
            var progress = Math.max(Math.min(slideEl.progress, 1), -1);
            createSlideShadows((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(slideEl), progress, isHorizontal);
          });
        };
        var setTranslate = function setTranslate() {
          var $el = swiper.$el,
            $wrapperEl = swiper.$wrapperEl,
            slides = swiper.slides,
            swiperWidth = swiper.width,
            swiperHeight = swiper.height,
            rtl = swiper.rtlTranslate,
            swiperSize = swiper.size,
            browser = swiper.browser;
          var params = swiper.params.cubeEffect;
          var isHorizontal = swiper.isHorizontal();
          var isVirtual = swiper.virtual && swiper.params.virtual.enabled;
          var wrapperRotate = 0;
          var $cubeShadowEl;
          if (params.shadow) {
            if (isHorizontal) {
              $cubeShadowEl = $wrapperEl.find('.swiper-cube-shadow');
              if ($cubeShadowEl.length === 0) {
                $cubeShadowEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])('<div class="swiper-cube-shadow"></div>');
                $wrapperEl.append($cubeShadowEl);
              }
              $cubeShadowEl.css({
                height: "".concat(swiperWidth, "px")
              });
            } else {
              $cubeShadowEl = $el.find('.swiper-cube-shadow');
              if ($cubeShadowEl.length === 0) {
                $cubeShadowEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])('<div class="swiper-cube-shadow"></div>');
                $el.append($cubeShadowEl);
              }
            }
          }
          for (var _i56 = 0; _i56 < slides.length; _i56 += 1) {
            var $slideEl = slides.eq(_i56);
            var slideIndex = _i56;
            if (isVirtual) {
              slideIndex = parseInt($slideEl.attr('data-swiper-slide-index'), 10);
            }
            var slideAngle = slideIndex * 90;
            var round = Math.floor(slideAngle / 360);
            if (rtl) {
              slideAngle = -slideAngle;
              round = Math.floor(-slideAngle / 360);
            }
            var progress = Math.max(Math.min($slideEl[0].progress, 1), -1);
            var tx = 0;
            var ty = 0;
            var tz = 0;
            if (slideIndex % 4 === 0) {
              tx = -round * 4 * swiperSize;
              tz = 0;
            } else if ((slideIndex - 1) % 4 === 0) {
              tx = 0;
              tz = -round * 4 * swiperSize;
            } else if ((slideIndex - 2) % 4 === 0) {
              tx = swiperSize + round * 4 * swiperSize;
              tz = swiperSize;
            } else if ((slideIndex - 3) % 4 === 0) {
              tx = -swiperSize;
              tz = 3 * swiperSize + swiperSize * 4 * round;
            }
            if (rtl) {
              tx = -tx;
            }
            if (!isHorizontal) {
              ty = tx;
              tx = 0;
            }
            var transform = "rotateX(".concat(isHorizontal ? 0 : -slideAngle, "deg) rotateY(").concat(isHorizontal ? slideAngle : 0, "deg) translate3d(").concat(tx, "px, ").concat(ty, "px, ").concat(tz, "px)");
            if (progress <= 1 && progress > -1) {
              wrapperRotate = slideIndex * 90 + progress * 90;
              if (rtl) wrapperRotate = -slideIndex * 90 - progress * 90;
            }
            $slideEl.transform(transform);
            if (params.slideShadows) {
              createSlideShadows($slideEl, progress, isHorizontal);
            }
          }
          $wrapperEl.css({
            '-webkit-transform-origin': "50% 50% -".concat(swiperSize / 2, "px"),
            'transform-origin': "50% 50% -".concat(swiperSize / 2, "px")
          });
          if (params.shadow) {
            if (isHorizontal) {
              $cubeShadowEl.transform("translate3d(0px, ".concat(swiperWidth / 2 + params.shadowOffset, "px, ").concat(-swiperWidth / 2, "px) rotateX(90deg) rotateZ(0deg) scale(").concat(params.shadowScale, ")"));
            } else {
              var shadowAngle = Math.abs(wrapperRotate) - Math.floor(Math.abs(wrapperRotate) / 90) * 90;
              var multiplier = 1.5 - (Math.sin(shadowAngle * 2 * Math.PI / 360) / 2 + Math.cos(shadowAngle * 2 * Math.PI / 360) / 2);
              var scale1 = params.shadowScale;
              var scale2 = params.shadowScale / multiplier;
              var offset = params.shadowOffset;
              $cubeShadowEl.transform("scale3d(".concat(scale1, ", 1, ").concat(scale2, ") translate3d(0px, ").concat(swiperHeight / 2 + offset, "px, ").concat(-swiperHeight / 2 / scale2, "px) rotateX(-90deg)"));
            }
          }
          var zFactor = browser.isSafari || browser.isWebView ? -swiperSize / 2 : 0;
          $wrapperEl.transform("translate3d(0px,0,".concat(zFactor, "px) rotateX(").concat(swiper.isHorizontal() ? 0 : wrapperRotate, "deg) rotateY(").concat(swiper.isHorizontal() ? -wrapperRotate : 0, "deg)"));
          $wrapperEl[0].style.setProperty('--swiper-cube-translate-z', "".concat(zFactor, "px"));
        };
        var setTransition = function setTransition(duration) {
          var $el = swiper.$el,
            slides = swiper.slides;
          slides.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
          if (swiper.params.cubeEffect.shadow && !swiper.isHorizontal()) {
            $el.find('.swiper-cube-shadow').transition(duration);
          }
        };
        (0, _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_1__["default"])({
          effect: 'cube',
          swiper: swiper,
          on: on,
          setTranslate: setTranslate,
          setTransition: setTransition,
          recreateShadows: recreateShadows,
          getEffectParams: function getEffectParams() {
            return swiper.params.cubeEffect;
          },
          perspective: function perspective() {
            return true;
          },
          overwriteParams: function overwriteParams() {
            return {
              slidesPerView: 1,
              slidesPerGroup: 1,
              watchSlidesProgress: true,
              resistanceRatio: 0,
              spaceBetween: 0,
              centeredSlides: false,
              virtualTranslate: true
            };
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/effect-fade/effect-fade.js":
    /*!****************************************************************!*\
      !*** ./node_modules/swiper/modules/effect-fade/effect-fade.js ***!
      \****************************************************************/
    /***/
    function node_modulesSwiperModulesEffectFadeEffectFadeJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_320059__) {
      __nested_webpack_require_320059__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_320059__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */EffectFade
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_320059__( /*! ../../shared/effect-init.js */"./node_modules/swiper/shared/effect-init.js");
      /* harmony import */
      var _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_320059__( /*! ../../shared/effect-target.js */"./node_modules/swiper/shared/effect-target.js");
      /* harmony import */
      var _shared_effect_virtual_transition_end_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_320059__( /*! ../../shared/effect-virtual-transition-end.js */"./node_modules/swiper/shared/effect-virtual-transition-end.js");
      function EffectFade(_ref12) {
        var swiper = _ref12.swiper,
          extendParams = _ref12.extendParams,
          on = _ref12.on;
        extendParams({
          fadeEffect: {
            crossFade: false,
            transformEl: null
          }
        });
        var setTranslate = function setTranslate() {
          var slides = swiper.slides;
          var params = swiper.params.fadeEffect;
          for (var _i57 = 0; _i57 < slides.length; _i57 += 1) {
            var $slideEl = swiper.slides.eq(_i57);
            var offset = $slideEl[0].swiperSlideOffset;
            var tx = -offset;
            if (!swiper.params.virtualTranslate) tx -= swiper.translate;
            var ty = 0;
            if (!swiper.isHorizontal()) {
              ty = tx;
              tx = 0;
            }
            var slideOpacity = swiper.params.fadeEffect.crossFade ? Math.max(1 - Math.abs($slideEl[0].progress), 0) : 1 + Math.min(Math.max($slideEl[0].progress, -1), 0);
            var $targetEl = (0, _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params, $slideEl);
            $targetEl.css({
              opacity: slideOpacity
            }).transform("translate3d(".concat(tx, "px, ").concat(ty, "px, 0px)"));
          }
        };
        var setTransition = function setTransition(duration) {
          var transformEl = swiper.params.fadeEffect.transformEl;
          var $transitionElements = transformEl ? swiper.slides.find(transformEl) : swiper.slides;
          $transitionElements.transition(duration);
          (0, _shared_effect_virtual_transition_end_js__WEBPACK_IMPORTED_MODULE_2__["default"])({
            swiper: swiper,
            duration: duration,
            transformEl: transformEl,
            allSlides: true
          });
        };
        (0, _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_0__["default"])({
          effect: 'fade',
          swiper: swiper,
          on: on,
          setTranslate: setTranslate,
          setTransition: setTransition,
          overwriteParams: function overwriteParams() {
            return {
              slidesPerView: 1,
              slidesPerGroup: 1,
              watchSlidesProgress: true,
              spaceBetween: 0,
              virtualTranslate: !swiper.params.cssMode
            };
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/effect-flip/effect-flip.js":
    /*!****************************************************************!*\
      !*** ./node_modules/swiper/modules/effect-flip/effect-flip.js ***!
      \****************************************************************/
    /***/
    function node_modulesSwiperModulesEffectFlipEffectFlipJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_323803__) {
      __nested_webpack_require_323803__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_323803__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */EffectFlip
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_323803__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_323803__( /*! ../../shared/create-shadow.js */"./node_modules/swiper/shared/create-shadow.js");
      /* harmony import */
      var _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_323803__( /*! ../../shared/effect-init.js */"./node_modules/swiper/shared/effect-init.js");
      /* harmony import */
      var _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_323803__( /*! ../../shared/effect-target.js */"./node_modules/swiper/shared/effect-target.js");
      /* harmony import */
      var _shared_effect_virtual_transition_end_js__WEBPACK_IMPORTED_MODULE_4__ = __nested_webpack_require_323803__( /*! ../../shared/effect-virtual-transition-end.js */"./node_modules/swiper/shared/effect-virtual-transition-end.js");
      function EffectFlip(_ref13) {
        var swiper = _ref13.swiper,
          extendParams = _ref13.extendParams,
          on = _ref13.on;
        extendParams({
          flipEffect: {
            slideShadows: true,
            limitRotation: true,
            transformEl: null
          }
        });
        var createSlideShadows = function createSlideShadows($slideEl, progress, params) {
          var shadowBefore = swiper.isHorizontal() ? $slideEl.find('.swiper-slide-shadow-left') : $slideEl.find('.swiper-slide-shadow-top');
          var shadowAfter = swiper.isHorizontal() ? $slideEl.find('.swiper-slide-shadow-right') : $slideEl.find('.swiper-slide-shadow-bottom');
          if (shadowBefore.length === 0) {
            shadowBefore = (0, _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params, $slideEl, swiper.isHorizontal() ? 'left' : 'top');
          }
          if (shadowAfter.length === 0) {
            shadowAfter = (0, _shared_create_shadow_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params, $slideEl, swiper.isHorizontal() ? 'right' : 'bottom');
          }
          if (shadowBefore.length) shadowBefore[0].style.opacity = Math.max(-progress, 0);
          if (shadowAfter.length) shadowAfter[0].style.opacity = Math.max(progress, 0);
        };
        var recreateShadows = function recreateShadows() {
          // Set shadows
          var params = swiper.params.flipEffect;
          swiper.slides.each(function (slideEl) {
            var $slideEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(slideEl);
            var progress = $slideEl[0].progress;
            if (swiper.params.flipEffect.limitRotation) {
              progress = Math.max(Math.min(slideEl.progress, 1), -1);
            }
            createSlideShadows($slideEl, progress, params);
          });
        };
        var setTranslate = function setTranslate() {
          var slides = swiper.slides,
            rtl = swiper.rtlTranslate;
          var params = swiper.params.flipEffect;
          for (var _i58 = 0; _i58 < slides.length; _i58 += 1) {
            var $slideEl = slides.eq(_i58);
            var progress = $slideEl[0].progress;
            if (swiper.params.flipEffect.limitRotation) {
              progress = Math.max(Math.min($slideEl[0].progress, 1), -1);
            }
            var offset = $slideEl[0].swiperSlideOffset;
            var rotate = -180 * progress;
            var rotateY = rotate;
            var rotateX = 0;
            var tx = swiper.params.cssMode ? -offset - swiper.translate : -offset;
            var ty = 0;
            if (!swiper.isHorizontal()) {
              ty = tx;
              tx = 0;
              rotateX = -rotateY;
              rotateY = 0;
            } else if (rtl) {
              rotateY = -rotateY;
            }
            $slideEl[0].style.zIndex = -Math.abs(Math.round(progress)) + slides.length;
            if (params.slideShadows) {
              createSlideShadows($slideEl, progress, params);
            }
            var transform = "translate3d(".concat(tx, "px, ").concat(ty, "px, 0px) rotateX(").concat(rotateX, "deg) rotateY(").concat(rotateY, "deg)");
            var $targetEl = (0, _shared_effect_target_js__WEBPACK_IMPORTED_MODULE_3__["default"])(params, $slideEl);
            $targetEl.transform(transform);
          }
        };
        var setTransition = function setTransition(duration) {
          var transformEl = swiper.params.flipEffect.transformEl;
          var $transitionElements = transformEl ? swiper.slides.find(transformEl) : swiper.slides;
          $transitionElements.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
          (0, _shared_effect_virtual_transition_end_js__WEBPACK_IMPORTED_MODULE_4__["default"])({
            swiper: swiper,
            duration: duration,
            transformEl: transformEl
          });
        };
        (0, _shared_effect_init_js__WEBPACK_IMPORTED_MODULE_2__["default"])({
          effect: 'flip',
          swiper: swiper,
          on: on,
          setTranslate: setTranslate,
          setTransition: setTransition,
          recreateShadows: recreateShadows,
          getEffectParams: function getEffectParams() {
            return swiper.params.flipEffect;
          },
          perspective: function perspective() {
            return true;
          },
          overwriteParams: function overwriteParams() {
            return {
              slidesPerView: 1,
              slidesPerGroup: 1,
              watchSlidesProgress: true,
              spaceBetween: 0,
              virtualTranslate: !swiper.params.cssMode
            };
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/free-mode/free-mode.js":
    /*!************************************************************!*\
      !*** ./node_modules/swiper/modules/free-mode/free-mode.js ***!
      \************************************************************/
    /***/
    function node_modulesSwiperModulesFreeModeFreeModeJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_330348__) {
      __nested_webpack_require_330348__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_330348__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */freeMode
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_330348__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function freeMode(_ref14) {
        var swiper = _ref14.swiper,
          extendParams = _ref14.extendParams,
          emit = _ref14.emit,
          once = _ref14.once;
        extendParams({
          freeMode: {
            enabled: false,
            momentum: true,
            momentumRatio: 1,
            momentumBounce: true,
            momentumBounceRatio: 1,
            momentumVelocityRatio: 1,
            sticky: false,
            minimumVelocity: 0.02
          }
        });
        function onTouchStart() {
          var translate = swiper.getTranslate();
          swiper.setTranslate(translate);
          swiper.setTransition(0);
          swiper.touchEventsData.velocities.length = 0;
          swiper.freeMode.onTouchEnd({
            currentPos: swiper.rtl ? swiper.translate : -swiper.translate
          });
        }
        function onTouchMove() {
          var data = swiper.touchEventsData,
            touches = swiper.touches; // Velocity

          if (data.velocities.length === 0) {
            data.velocities.push({
              position: touches[swiper.isHorizontal() ? 'startX' : 'startY'],
              time: data.touchStartTime
            });
          }
          data.velocities.push({
            position: touches[swiper.isHorizontal() ? 'currentX' : 'currentY'],
            time: (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.now)()
          });
        }
        function onTouchEnd(_ref15) {
          var currentPos = _ref15.currentPos;
          var params = swiper.params,
            $wrapperEl = swiper.$wrapperEl,
            rtl = swiper.rtlTranslate,
            snapGrid = swiper.snapGrid,
            data = swiper.touchEventsData; // Time diff

          var touchEndTime = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.now)();
          var timeDiff = touchEndTime - data.touchStartTime;
          if (currentPos < -swiper.minTranslate()) {
            swiper.slideTo(swiper.activeIndex);
            return;
          }
          if (currentPos > -swiper.maxTranslate()) {
            if (swiper.slides.length < snapGrid.length) {
              swiper.slideTo(snapGrid.length - 1);
            } else {
              swiper.slideTo(swiper.slides.length - 1);
            }
            return;
          }
          if (params.freeMode.momentum) {
            if (data.velocities.length > 1) {
              var lastMoveEvent = data.velocities.pop();
              var velocityEvent = data.velocities.pop();
              var distance = lastMoveEvent.position - velocityEvent.position;
              var time = lastMoveEvent.time - velocityEvent.time;
              swiper.velocity = distance / time;
              swiper.velocity /= 2;
              if (Math.abs(swiper.velocity) < params.freeMode.minimumVelocity) {
                swiper.velocity = 0;
              } // this implies that the user stopped moving a finger then released.
              // There would be no events with distance zero, so the last event is stale.

              if (time > 150 || (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.now)() - lastMoveEvent.time > 300) {
                swiper.velocity = 0;
              }
            } else {
              swiper.velocity = 0;
            }
            swiper.velocity *= params.freeMode.momentumVelocityRatio;
            data.velocities.length = 0;
            var momentumDuration = 1000 * params.freeMode.momentumRatio;
            var momentumDistance = swiper.velocity * momentumDuration;
            var newPosition = swiper.translate + momentumDistance;
            if (rtl) newPosition = -newPosition;
            var doBounce = false;
            var afterBouncePosition;
            var bounceAmount = Math.abs(swiper.velocity) * 20 * params.freeMode.momentumBounceRatio;
            var needsLoopFix;
            if (newPosition < swiper.maxTranslate()) {
              if (params.freeMode.momentumBounce) {
                if (newPosition + swiper.maxTranslate() < -bounceAmount) {
                  newPosition = swiper.maxTranslate() - bounceAmount;
                }
                afterBouncePosition = swiper.maxTranslate();
                doBounce = true;
                data.allowMomentumBounce = true;
              } else {
                newPosition = swiper.maxTranslate();
              }
              if (params.loop && params.centeredSlides) needsLoopFix = true;
            } else if (newPosition > swiper.minTranslate()) {
              if (params.freeMode.momentumBounce) {
                if (newPosition - swiper.minTranslate() > bounceAmount) {
                  newPosition = swiper.minTranslate() + bounceAmount;
                }
                afterBouncePosition = swiper.minTranslate();
                doBounce = true;
                data.allowMomentumBounce = true;
              } else {
                newPosition = swiper.minTranslate();
              }
              if (params.loop && params.centeredSlides) needsLoopFix = true;
            } else if (params.freeMode.sticky) {
              var nextSlide;
              for (var j = 0; j < snapGrid.length; j += 1) {
                if (snapGrid[j] > -newPosition) {
                  nextSlide = j;
                  break;
                }
              }
              if (Math.abs(snapGrid[nextSlide] - newPosition) < Math.abs(snapGrid[nextSlide - 1] - newPosition) || swiper.swipeDirection === 'next') {
                newPosition = snapGrid[nextSlide];
              } else {
                newPosition = snapGrid[nextSlide - 1];
              }
              newPosition = -newPosition;
            }
            if (needsLoopFix) {
              once('transitionEnd', function () {
                swiper.loopFix();
              });
            } // Fix duration

            if (swiper.velocity !== 0) {
              if (rtl) {
                momentumDuration = Math.abs((-newPosition - swiper.translate) / swiper.velocity);
              } else {
                momentumDuration = Math.abs((newPosition - swiper.translate) / swiper.velocity);
              }
              if (params.freeMode.sticky) {
                // If freeMode.sticky is active and the user ends a swipe with a slow-velocity
                // event, then durations can be 20+ seconds to slide one (or zero!) slides.
                // It's easy to see this when simulating touch with mouse events. To fix this,
                // limit single-slide swipes to the default slide duration. This also has the
                // nice side effect of matching slide speed if the user stopped moving before
                // lifting finger or mouse vs. moving slowly before lifting the finger/mouse.
                // For faster swipes, also apply limits (albeit higher ones).
                var moveDistance = Math.abs((rtl ? -newPosition : newPosition) - swiper.translate);
                var currentSlideSize = swiper.slidesSizesGrid[swiper.activeIndex];
                if (moveDistance < currentSlideSize) {
                  momentumDuration = params.speed;
                } else if (moveDistance < 2 * currentSlideSize) {
                  momentumDuration = params.speed * 1.5;
                } else {
                  momentumDuration = params.speed * 2.5;
                }
              }
            } else if (params.freeMode.sticky) {
              swiper.slideToClosest();
              return;
            }
            if (params.freeMode.momentumBounce && doBounce) {
              swiper.updateProgress(afterBouncePosition);
              swiper.setTransition(momentumDuration);
              swiper.setTranslate(newPosition);
              swiper.transitionStart(true, swiper.swipeDirection);
              swiper.animating = true;
              $wrapperEl.transitionEnd(function () {
                if (!swiper || swiper.destroyed || !data.allowMomentumBounce) return;
                emit('momentumBounce');
                swiper.setTransition(params.speed);
                setTimeout(function () {
                  swiper.setTranslate(afterBouncePosition);
                  $wrapperEl.transitionEnd(function () {
                    if (!swiper || swiper.destroyed) return;
                    swiper.transitionEnd();
                  });
                }, 0);
              });
            } else if (swiper.velocity) {
              emit('_freeModeNoMomentumRelease');
              swiper.updateProgress(newPosition);
              swiper.setTransition(momentumDuration);
              swiper.setTranslate(newPosition);
              swiper.transitionStart(true, swiper.swipeDirection);
              if (!swiper.animating) {
                swiper.animating = true;
                $wrapperEl.transitionEnd(function () {
                  if (!swiper || swiper.destroyed) return;
                  swiper.transitionEnd();
                });
              }
            } else {
              swiper.updateProgress(newPosition);
            }
            swiper.updateActiveIndex();
            swiper.updateSlidesClasses();
          } else if (params.freeMode.sticky) {
            swiper.slideToClosest();
            return;
          } else if (params.freeMode) {
            emit('_freeModeNoMomentumRelease');
          }
          if (!params.freeMode.momentum || timeDiff >= params.longSwipesMs) {
            swiper.updateProgress();
            swiper.updateActiveIndex();
            swiper.updateSlidesClasses();
          }
        }
        Object.assign(swiper, {
          freeMode: {
            onTouchStart: onTouchStart,
            onTouchMove: onTouchMove,
            onTouchEnd: onTouchEnd
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/grid/grid.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/modules/grid/grid.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperModulesGridGridJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_340903__) {
      __nested_webpack_require_340903__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_340903__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Grid
          );
        }
        /* harmony export */
      });
      function Grid(_ref16) {
        var swiper = _ref16.swiper,
          extendParams = _ref16.extendParams;
        extendParams({
          grid: {
            rows: 1,
            fill: 'column'
          }
        });
        var slidesNumberEvenToRows;
        var slidesPerRow;
        var numFullColumns;
        var initSlides = function initSlides(slidesLength) {
          var slidesPerView = swiper.params.slidesPerView;
          var _swiper$params$grid = swiper.params.grid,
            rows = _swiper$params$grid.rows,
            fill = _swiper$params$grid.fill;
          slidesPerRow = slidesNumberEvenToRows / rows;
          numFullColumns = Math.floor(slidesLength / rows);
          if (Math.floor(slidesLength / rows) === slidesLength / rows) {
            slidesNumberEvenToRows = slidesLength;
          } else {
            slidesNumberEvenToRows = Math.ceil(slidesLength / rows) * rows;
          }
          if (slidesPerView !== 'auto' && fill === 'row') {
            slidesNumberEvenToRows = Math.max(slidesNumberEvenToRows, slidesPerView * rows);
          }
        };
        var updateSlide = function updateSlide(i, slide, slidesLength, getDirectionLabel) {
          var _swiper$params = swiper.params,
            slidesPerGroup = _swiper$params.slidesPerGroup,
            spaceBetween = _swiper$params.spaceBetween;
          var _swiper$params$grid2 = swiper.params.grid,
            rows = _swiper$params$grid2.rows,
            fill = _swiper$params$grid2.fill; // Set slides order

          var newSlideOrderIndex;
          var column;
          var row;
          if (fill === 'row' && slidesPerGroup > 1) {
            var groupIndex = Math.floor(i / (slidesPerGroup * rows));
            var slideIndexInGroup = i - rows * slidesPerGroup * groupIndex;
            var columnsInGroup = groupIndex === 0 ? slidesPerGroup : Math.min(Math.ceil((slidesLength - groupIndex * rows * slidesPerGroup) / rows), slidesPerGroup);
            row = Math.floor(slideIndexInGroup / columnsInGroup);
            column = slideIndexInGroup - row * columnsInGroup + groupIndex * slidesPerGroup;
            newSlideOrderIndex = column + row * slidesNumberEvenToRows / rows;
            slide.css({
              '-webkit-order': newSlideOrderIndex,
              order: newSlideOrderIndex
            });
          } else if (fill === 'column') {
            column = Math.floor(i / rows);
            row = i - column * rows;
            if (column > numFullColumns || column === numFullColumns && row === rows - 1) {
              row += 1;
              if (row >= rows) {
                row = 0;
                column += 1;
              }
            }
          } else {
            row = Math.floor(i / slidesPerRow);
            column = i - row * slidesPerRow;
          }
          slide.css(getDirectionLabel('margin-top'), row !== 0 ? spaceBetween && "".concat(spaceBetween, "px") : '');
        };
        var updateWrapperSize = function updateWrapperSize(slideSize, snapGrid, getDirectionLabel) {
          var _swiper$params2 = swiper.params,
            spaceBetween = _swiper$params2.spaceBetween,
            centeredSlides = _swiper$params2.centeredSlides,
            roundLengths = _swiper$params2.roundLengths;
          var rows = swiper.params.grid.rows;
          swiper.virtualSize = (slideSize + spaceBetween) * slidesNumberEvenToRows;
          swiper.virtualSize = Math.ceil(swiper.virtualSize / rows) - spaceBetween;
          swiper.$wrapperEl.css(_defineProperty({}, getDirectionLabel('width'), "".concat(swiper.virtualSize + spaceBetween, "px")));
          if (centeredSlides) {
            snapGrid.splice(0, snapGrid.length);
            var newSlidesGrid = [];
            for (var _i59 = 0; _i59 < snapGrid.length; _i59 += 1) {
              var slidesGridItem = snapGrid[_i59];
              if (roundLengths) slidesGridItem = Math.floor(slidesGridItem);
              if (snapGrid[_i59] < swiper.virtualSize + snapGrid[0]) newSlidesGrid.push(slidesGridItem);
            }
            snapGrid.push.apply(snapGrid, newSlidesGrid);
          }
        };
        swiper.grid = {
          initSlides: initSlides,
          updateSlide: updateSlide,
          updateWrapperSize: updateWrapperSize
        };
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/hash-navigation/hash-navigation.js":
    /*!************************************************************************!*\
      !*** ./node_modules/swiper/modules/hash-navigation/hash-navigation.js ***!
      \************************************************************************/
    /***/
    function node_modulesSwiperModulesHashNavigationHashNavigationJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_345985__) {
      __nested_webpack_require_345985__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_345985__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */HashNavigation
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_345985__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_345985__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function HashNavigation(_ref17) {
        var swiper = _ref17.swiper,
          extendParams = _ref17.extendParams,
          emit = _ref17.emit,
          on = _ref17.on;
        var initialized = false;
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        extendParams({
          hashNavigation: {
            enabled: false,
            replaceState: false,
            watchState: false
          }
        });
        var onHashChange = function onHashChange() {
          emit('hashChange');
          var newHash = document.location.hash.replace('#', '');
          var activeSlideHash = swiper.slides.eq(swiper.activeIndex).attr('data-hash');
          if (newHash !== activeSlideHash) {
            var newIndex = swiper.$wrapperEl.children(".".concat(swiper.params.slideClass, "[data-hash=\"").concat(newHash, "\"]")).index();
            if (typeof newIndex === 'undefined') return;
            swiper.slideTo(newIndex);
          }
        };
        var setHash = function setHash() {
          if (!initialized || !swiper.params.hashNavigation.enabled) return;
          if (swiper.params.hashNavigation.replaceState && window.history && window.history.replaceState) {
            window.history.replaceState(null, null, "#".concat(swiper.slides.eq(swiper.activeIndex).attr('data-hash')) || 0);
            emit('hashSet');
          } else {
            var slide = swiper.slides.eq(swiper.activeIndex);
            var hash = slide.attr('data-hash') || slide.attr('data-history');
            document.location.hash = hash || '';
            emit('hashSet');
          }
        };
        var init = function init() {
          if (!swiper.params.hashNavigation.enabled || swiper.params.history && swiper.params.history.enabled) return;
          initialized = true;
          var hash = document.location.hash.replace('#', '');
          if (hash) {
            var speed = 0;
            for (var _i60 = 0, length = swiper.slides.length; _i60 < length; _i60 += 1) {
              var slide = swiper.slides.eq(_i60);
              var slideHash = slide.attr('data-hash') || slide.attr('data-history');
              if (slideHash === hash && !slide.hasClass(swiper.params.slideDuplicateClass)) {
                var index = slide.index();
                swiper.slideTo(index, speed, swiper.params.runCallbacksOnInit, true);
              }
            }
          }
          if (swiper.params.hashNavigation.watchState) {
            (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(window).on('hashchange', onHashChange);
          }
        };
        var destroy = function destroy() {
          if (swiper.params.hashNavigation.watchState) {
            (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(window).off('hashchange', onHashChange);
          }
        };
        on('init', function () {
          if (swiper.params.hashNavigation.enabled) {
            init();
          }
        });
        on('destroy', function () {
          if (swiper.params.hashNavigation.enabled) {
            destroy();
          }
        });
        on('transitionEnd _freeModeNoMomentumRelease', function () {
          if (initialized) {
            setHash();
          }
        });
        on('slideChange', function () {
          if (initialized && swiper.params.cssMode) {
            setHash();
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/history/history.js":
    /*!********************************************************!*\
      !*** ./node_modules/swiper/modules/history/history.js ***!
      \********************************************************/
    /***/
    function node_modulesSwiperModulesHistoryHistoryJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_350544__) {
      __nested_webpack_require_350544__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_350544__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */History
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_350544__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      function History(_ref18) {
        var swiper = _ref18.swiper,
          extendParams = _ref18.extendParams,
          on = _ref18.on;
        extendParams({
          history: {
            enabled: false,
            root: '',
            replaceState: false,
            key: 'slides',
            keepQuery: false
          }
        });
        var initialized = false;
        var paths = {};
        var slugify = function slugify(text) {
          return text.toString().replace(/\s+/g, '-').replace(/[^\w-]+/g, '').replace(/--+/g, '-').replace(/^-+/, '').replace(/-+$/, '');
        };
        var getPathValues = function getPathValues(urlOverride) {
          var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
          var location;
          if (urlOverride) {
            location = new URL(urlOverride);
          } else {
            location = window.location;
          }
          var pathArray = location.pathname.slice(1).split('/').filter(function (part) {
            return part !== '';
          });
          var total = pathArray.length;
          var key = pathArray[total - 2];
          var value = pathArray[total - 1];
          return {
            key: key,
            value: value
          };
        };
        var setHistory = function setHistory(key, index) {
          var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
          if (!initialized || !swiper.params.history.enabled) return;
          var location;
          if (swiper.params.url) {
            location = new URL(swiper.params.url);
          } else {
            location = window.location;
          }
          var slide = swiper.slides.eq(index);
          var value = slugify(slide.attr('data-history'));
          if (swiper.params.history.root.length > 0) {
            var root = swiper.params.history.root;
            if (root[root.length - 1] === '/') root = root.slice(0, root.length - 1);
            value = "".concat(root, "/").concat(key, "/").concat(value);
          } else if (!location.pathname.includes(key)) {
            value = "".concat(key, "/").concat(value);
          }
          if (swiper.params.history.keepQuery) {
            value += location.search;
          }
          var currentState = window.history.state;
          if (currentState && currentState.value === value) {
            return;
          }
          if (swiper.params.history.replaceState) {
            window.history.replaceState({
              value: value
            }, null, value);
          } else {
            window.history.pushState({
              value: value
            }, null, value);
          }
        };
        var scrollToSlide = function scrollToSlide(speed, value, runCallbacks) {
          if (value) {
            for (var _i61 = 0, length = swiper.slides.length; _i61 < length; _i61 += 1) {
              var slide = swiper.slides.eq(_i61);
              var slideHistory = slugify(slide.attr('data-history'));
              if (slideHistory === value && !slide.hasClass(swiper.params.slideDuplicateClass)) {
                var index = slide.index();
                swiper.slideTo(index, speed, runCallbacks);
              }
            }
          } else {
            swiper.slideTo(0, speed, runCallbacks);
          }
        };
        var setHistoryPopState = function setHistoryPopState() {
          paths = getPathValues(swiper.params.url);
          scrollToSlide(swiper.params.speed, paths.value, false);
        };
        var init = function init() {
          var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
          if (!swiper.params.history) return;
          if (!window.history || !window.history.pushState) {
            swiper.params.history.enabled = false;
            swiper.params.hashNavigation.enabled = true;
            return;
          }
          initialized = true;
          paths = getPathValues(swiper.params.url);
          if (!paths.key && !paths.value) return;
          scrollToSlide(0, paths.value, swiper.params.runCallbacksOnInit);
          if (!swiper.params.history.replaceState) {
            window.addEventListener('popstate', setHistoryPopState);
          }
        };
        var destroy = function destroy() {
          var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
          if (!swiper.params.history.replaceState) {
            window.removeEventListener('popstate', setHistoryPopState);
          }
        };
        on('init', function () {
          if (swiper.params.history.enabled) {
            init();
          }
        });
        on('destroy', function () {
          if (swiper.params.history.enabled) {
            destroy();
          }
        });
        on('transitionEnd _freeModeNoMomentumRelease', function () {
          if (initialized) {
            setHistory(swiper.params.history.key, swiper.activeIndex);
          }
        });
        on('slideChange', function () {
          if (initialized && swiper.params.cssMode) {
            setHistory(swiper.params.history.key, swiper.activeIndex);
          }
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/keyboard/keyboard.js":
    /*!**********************************************************!*\
      !*** ./node_modules/swiper/modules/keyboard/keyboard.js ***!
      \**********************************************************/
    /***/
    function node_modulesSwiperModulesKeyboardKeyboardJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_356588__) {
      __nested_webpack_require_356588__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_356588__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Keyboard
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_356588__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_356588__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* eslint-disable consistent-return */

      function Keyboard(_ref19) {
        var swiper = _ref19.swiper,
          extendParams = _ref19.extendParams,
          on = _ref19.on,
          emit = _ref19.emit;
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        swiper.keyboard = {
          enabled: false
        };
        extendParams({
          keyboard: {
            enabled: false,
            onlyInViewport: true,
            pageUpDown: true
          }
        });
        function handle(event) {
          if (!swiper.enabled) return;
          var rtl = swiper.rtlTranslate;
          var e = event;
          if (e.originalEvent) e = e.originalEvent; // jquery fix

          var kc = e.keyCode || e.charCode;
          var pageUpDown = swiper.params.keyboard.pageUpDown;
          var isPageUp = pageUpDown && kc === 33;
          var isPageDown = pageUpDown && kc === 34;
          var isArrowLeft = kc === 37;
          var isArrowRight = kc === 39;
          var isArrowUp = kc === 38;
          var isArrowDown = kc === 40; // Directions locks

          if (!swiper.allowSlideNext && (swiper.isHorizontal() && isArrowRight || swiper.isVertical() && isArrowDown || isPageDown)) {
            return false;
          }
          if (!swiper.allowSlidePrev && (swiper.isHorizontal() && isArrowLeft || swiper.isVertical() && isArrowUp || isPageUp)) {
            return false;
          }
          if (e.shiftKey || e.altKey || e.ctrlKey || e.metaKey) {
            return undefined;
          }
          if (document.activeElement && document.activeElement.nodeName && (document.activeElement.nodeName.toLowerCase() === 'input' || document.activeElement.nodeName.toLowerCase() === 'textarea')) {
            return undefined;
          }
          if (swiper.params.keyboard.onlyInViewport && (isPageUp || isPageDown || isArrowLeft || isArrowRight || isArrowUp || isArrowDown)) {
            var inView = false; // Check that swiper should be inside of visible area of window

            if (swiper.$el.parents(".".concat(swiper.params.slideClass)).length > 0 && swiper.$el.parents(".".concat(swiper.params.slideActiveClass)).length === 0) {
              return undefined;
            }
            var $el = swiper.$el;
            var swiperWidth = $el[0].clientWidth;
            var swiperHeight = $el[0].clientHeight;
            var windowWidth = window.innerWidth;
            var windowHeight = window.innerHeight;
            var swiperOffset = swiper.$el.offset();
            if (rtl) swiperOffset.left -= swiper.$el[0].scrollLeft;
            var swiperCoord = [[swiperOffset.left, swiperOffset.top], [swiperOffset.left + swiperWidth, swiperOffset.top], [swiperOffset.left, swiperOffset.top + swiperHeight], [swiperOffset.left + swiperWidth, swiperOffset.top + swiperHeight]];
            for (var _i62 = 0; _i62 < swiperCoord.length; _i62 += 1) {
              var point = swiperCoord[_i62];
              if (point[0] >= 0 && point[0] <= windowWidth && point[1] >= 0 && point[1] <= windowHeight) {
                if (point[0] === 0 && point[1] === 0) continue; // eslint-disable-line

                inView = true;
              }
            }
            if (!inView) return undefined;
          }
          if (swiper.isHorizontal()) {
            if (isPageUp || isPageDown || isArrowLeft || isArrowRight) {
              if (e.preventDefault) e.preventDefault();else e.returnValue = false;
            }
            if ((isPageDown || isArrowRight) && !rtl || (isPageUp || isArrowLeft) && rtl) swiper.slideNext();
            if ((isPageUp || isArrowLeft) && !rtl || (isPageDown || isArrowRight) && rtl) swiper.slidePrev();
          } else {
            if (isPageUp || isPageDown || isArrowUp || isArrowDown) {
              if (e.preventDefault) e.preventDefault();else e.returnValue = false;
            }
            if (isPageDown || isArrowDown) swiper.slideNext();
            if (isPageUp || isArrowUp) swiper.slidePrev();
          }
          emit('keyPress', kc);
          return undefined;
        }
        function enable() {
          if (swiper.keyboard.enabled) return;
          (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(document).on('keydown', handle);
          swiper.keyboard.enabled = true;
        }
        function disable() {
          if (!swiper.keyboard.enabled) return;
          (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(document).off('keydown', handle);
          swiper.keyboard.enabled = false;
        }
        on('init', function () {
          if (swiper.params.keyboard.enabled) {
            enable();
          }
        });
        on('destroy', function () {
          if (swiper.keyboard.enabled) {
            disable();
          }
        });
        Object.assign(swiper.keyboard, {
          enable: enable,
          disable: disable
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/lazy/lazy.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/modules/lazy/lazy.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperModulesLazyLazyJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_362625__) {
      __nested_webpack_require_362625__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_362625__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Lazy
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_362625__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_362625__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function Lazy(_ref20) {
        var swiper = _ref20.swiper,
          extendParams = _ref20.extendParams,
          on = _ref20.on,
          emit = _ref20.emit;
        extendParams({
          lazy: {
            checkInView: false,
            enabled: false,
            loadPrevNext: false,
            loadPrevNextAmount: 1,
            loadOnTransitionStart: false,
            scrollingElement: '',
            elementClass: 'swiper-lazy',
            loadingClass: 'swiper-lazy-loading',
            loadedClass: 'swiper-lazy-loaded',
            preloaderClass: 'swiper-lazy-preloader'
          }
        });
        swiper.lazy = {};
        var scrollHandlerAttached = false;
        var initialImageLoaded = false;
        function loadInSlide(index) {
          var loadInDuplicate = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;
          var params = swiper.params.lazy;
          if (typeof index === 'undefined') return;
          if (swiper.slides.length === 0) return;
          var isVirtual = swiper.virtual && swiper.params.virtual.enabled;
          var $slideEl = isVirtual ? swiper.$wrapperEl.children(".".concat(swiper.params.slideClass, "[data-swiper-slide-index=\"").concat(index, "\"]")) : swiper.slides.eq(index);
          var $images = $slideEl.find(".".concat(params.elementClass, ":not(.").concat(params.loadedClass, "):not(.").concat(params.loadingClass, ")"));
          if ($slideEl.hasClass(params.elementClass) && !$slideEl.hasClass(params.loadedClass) && !$slideEl.hasClass(params.loadingClass)) {
            $images.push($slideEl[0]);
          }
          if ($images.length === 0) return;
          $images.each(function (imageEl) {
            var $imageEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(imageEl);
            $imageEl.addClass(params.loadingClass);
            var background = $imageEl.attr('data-background');
            var src = $imageEl.attr('data-src');
            var srcset = $imageEl.attr('data-srcset');
            var sizes = $imageEl.attr('data-sizes');
            var $pictureEl = $imageEl.parent('picture');
            swiper.loadImage($imageEl[0], src || background, srcset, sizes, false, function () {
              if (typeof swiper === 'undefined' || swiper === null || !swiper || swiper && !swiper.params || swiper.destroyed) return;
              if (background) {
                $imageEl.css('background-image', "url(\"".concat(background, "\")"));
                $imageEl.removeAttr('data-background');
              } else {
                if (srcset) {
                  $imageEl.attr('srcset', srcset);
                  $imageEl.removeAttr('data-srcset');
                }
                if (sizes) {
                  $imageEl.attr('sizes', sizes);
                  $imageEl.removeAttr('data-sizes');
                }
                if ($pictureEl.length) {
                  $pictureEl.children('source').each(function (sourceEl) {
                    var $source = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(sourceEl);
                    if ($source.attr('data-srcset')) {
                      $source.attr('srcset', $source.attr('data-srcset'));
                      $source.removeAttr('data-srcset');
                    }
                  });
                }
                if (src) {
                  $imageEl.attr('src', src);
                  $imageEl.removeAttr('data-src');
                }
              }
              $imageEl.addClass(params.loadedClass).removeClass(params.loadingClass);
              $slideEl.find(".".concat(params.preloaderClass)).remove();
              if (swiper.params.loop && loadInDuplicate) {
                var slideOriginalIndex = $slideEl.attr('data-swiper-slide-index');
                if ($slideEl.hasClass(swiper.params.slideDuplicateClass)) {
                  var originalSlide = swiper.$wrapperEl.children("[data-swiper-slide-index=\"".concat(slideOriginalIndex, "\"]:not(.").concat(swiper.params.slideDuplicateClass, ")"));
                  loadInSlide(originalSlide.index(), false);
                } else {
                  var duplicatedSlide = swiper.$wrapperEl.children(".".concat(swiper.params.slideDuplicateClass, "[data-swiper-slide-index=\"").concat(slideOriginalIndex, "\"]"));
                  loadInSlide(duplicatedSlide.index(), false);
                }
              }
              emit('lazyImageReady', $slideEl[0], $imageEl[0]);
              if (swiper.params.autoHeight) {
                swiper.updateAutoHeight();
              }
            });
            emit('lazyImageLoad', $slideEl[0], $imageEl[0]);
          });
        }
        function load() {
          var $wrapperEl = swiper.$wrapperEl,
            swiperParams = swiper.params,
            slides = swiper.slides,
            activeIndex = swiper.activeIndex;
          var isVirtual = swiper.virtual && swiperParams.virtual.enabled;
          var params = swiperParams.lazy;
          var slidesPerView = swiperParams.slidesPerView;
          if (slidesPerView === 'auto') {
            slidesPerView = 0;
          }
          function slideExist(index) {
            if (isVirtual) {
              if ($wrapperEl.children(".".concat(swiperParams.slideClass, "[data-swiper-slide-index=\"").concat(index, "\"]")).length) {
                return true;
              }
            } else if (slides[index]) return true;
            return false;
          }
          function slideIndex(slideEl) {
            if (isVirtual) {
              return (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(slideEl).attr('data-swiper-slide-index');
            }
            return (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(slideEl).index();
          }
          if (!initialImageLoaded) initialImageLoaded = true;
          if (swiper.params.watchSlidesProgress) {
            $wrapperEl.children(".".concat(swiperParams.slideVisibleClass)).each(function (slideEl) {
              var index = isVirtual ? (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(slideEl).attr('data-swiper-slide-index') : (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(slideEl).index();
              loadInSlide(index);
            });
          } else if (slidesPerView > 1) {
            for (var _i63 = activeIndex; _i63 < activeIndex + slidesPerView; _i63 += 1) {
              if (slideExist(_i63)) loadInSlide(_i63);
            }
          } else {
            loadInSlide(activeIndex);
          }
          if (params.loadPrevNext) {
            if (slidesPerView > 1 || params.loadPrevNextAmount && params.loadPrevNextAmount > 1) {
              var amount = params.loadPrevNextAmount;
              var spv = Math.ceil(slidesPerView);
              var maxIndex = Math.min(activeIndex + spv + Math.max(amount, spv), slides.length);
              var minIndex = Math.max(activeIndex - Math.max(spv, amount), 0); // Next Slides

              for (var _i64 = activeIndex + spv; _i64 < maxIndex; _i64 += 1) {
                if (slideExist(_i64)) loadInSlide(_i64);
              } // Prev Slides

              for (var _i65 = minIndex; _i65 < activeIndex; _i65 += 1) {
                if (slideExist(_i65)) loadInSlide(_i65);
              }
            } else {
              var nextSlide = $wrapperEl.children(".".concat(swiperParams.slideNextClass));
              if (nextSlide.length > 0) loadInSlide(slideIndex(nextSlide));
              var prevSlide = $wrapperEl.children(".".concat(swiperParams.slidePrevClass));
              if (prevSlide.length > 0) loadInSlide(slideIndex(prevSlide));
            }
          }
        }
        function checkInViewOnLoad() {
          var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
          if (!swiper || swiper.destroyed) return;
          var $scrollElement = swiper.params.lazy.scrollingElement ? (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(swiper.params.lazy.scrollingElement) : (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(window);
          var isWindow = $scrollElement[0] === window;
          var scrollElementWidth = isWindow ? window.innerWidth : $scrollElement[0].offsetWidth;
          var scrollElementHeight = isWindow ? window.innerHeight : $scrollElement[0].offsetHeight;
          var swiperOffset = swiper.$el.offset();
          var rtl = swiper.rtlTranslate;
          var inView = false;
          if (rtl) swiperOffset.left -= swiper.$el[0].scrollLeft;
          var swiperCoord = [[swiperOffset.left, swiperOffset.top], [swiperOffset.left + swiper.width, swiperOffset.top], [swiperOffset.left, swiperOffset.top + swiper.height], [swiperOffset.left + swiper.width, swiperOffset.top + swiper.height]];
          for (var _i66 = 0; _i66 < swiperCoord.length; _i66 += 1) {
            var point = swiperCoord[_i66];
            if (point[0] >= 0 && point[0] <= scrollElementWidth && point[1] >= 0 && point[1] <= scrollElementHeight) {
              if (point[0] === 0 && point[1] === 0) continue; // eslint-disable-line

              inView = true;
            }
          }
          var passiveListener = swiper.touchEvents.start === 'touchstart' && swiper.support.passiveListener && swiper.params.passiveListeners ? {
            passive: true,
            capture: false
          } : false;
          if (inView) {
            load();
            $scrollElement.off('scroll', checkInViewOnLoad, passiveListener);
          } else if (!scrollHandlerAttached) {
            scrollHandlerAttached = true;
            $scrollElement.on('scroll', checkInViewOnLoad, passiveListener);
          }
        }
        on('beforeInit', function () {
          if (swiper.params.lazy.enabled && swiper.params.preloadImages) {
            swiper.params.preloadImages = false;
          }
        });
        on('init', function () {
          if (swiper.params.lazy.enabled) {
            if (swiper.params.lazy.checkInView) {
              checkInViewOnLoad();
            } else {
              load();
            }
          }
        });
        on('scroll', function () {
          if (swiper.params.freeMode && swiper.params.freeMode.enabled && !swiper.params.freeMode.sticky) {
            load();
          }
        });
        on('scrollbarDragMove resize _freeModeNoMomentumRelease', function () {
          if (swiper.params.lazy.enabled) {
            if (swiper.params.lazy.checkInView) {
              checkInViewOnLoad();
            } else {
              load();
            }
          }
        });
        on('transitionStart', function () {
          if (swiper.params.lazy.enabled) {
            if (swiper.params.lazy.loadOnTransitionStart || !swiper.params.lazy.loadOnTransitionStart && !initialImageLoaded) {
              if (swiper.params.lazy.checkInView) {
                checkInViewOnLoad();
              } else {
                load();
              }
            }
          }
        });
        on('transitionEnd', function () {
          if (swiper.params.lazy.enabled && !swiper.params.lazy.loadOnTransitionStart) {
            if (swiper.params.lazy.checkInView) {
              checkInViewOnLoad();
            } else {
              load();
            }
          }
        });
        on('slideChange', function () {
          var _swiper$params3 = swiper.params,
            lazy = _swiper$params3.lazy,
            cssMode = _swiper$params3.cssMode,
            watchSlidesProgress = _swiper$params3.watchSlidesProgress,
            touchReleaseOnEdges = _swiper$params3.touchReleaseOnEdges,
            resistanceRatio = _swiper$params3.resistanceRatio;
          if (lazy.enabled && (cssMode || watchSlidesProgress && (touchReleaseOnEdges || resistanceRatio === 0))) {
            load();
          }
        });
        on('destroy', function () {
          if (!swiper.$el) return;
          swiper.$el.find(".".concat(swiper.params.lazy.loadingClass)).removeClass(swiper.params.lazy.loadingClass);
        });
        Object.assign(swiper.lazy, {
          load: load,
          loadInSlide: loadInSlide
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/manipulation/manipulation.js":
    /*!******************************************************************!*\
      !*** ./node_modules/swiper/modules/manipulation/manipulation.js ***!
      \******************************************************************/
    /***/
    function node_modulesSwiperModulesManipulationManipulationJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_375880__) {
      __nested_webpack_require_375880__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_375880__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Manipulation
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _methods_appendSlide_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_375880__( /*! ./methods/appendSlide.js */"./node_modules/swiper/modules/manipulation/methods/appendSlide.js");
      /* harmony import */
      var _methods_prependSlide_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_375880__( /*! ./methods/prependSlide.js */"./node_modules/swiper/modules/manipulation/methods/prependSlide.js");
      /* harmony import */
      var _methods_addSlide_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_375880__( /*! ./methods/addSlide.js */"./node_modules/swiper/modules/manipulation/methods/addSlide.js");
      /* harmony import */
      var _methods_removeSlide_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_375880__( /*! ./methods/removeSlide.js */"./node_modules/swiper/modules/manipulation/methods/removeSlide.js");
      /* harmony import */
      var _methods_removeAllSlides_js__WEBPACK_IMPORTED_MODULE_4__ = __nested_webpack_require_375880__( /*! ./methods/removeAllSlides.js */"./node_modules/swiper/modules/manipulation/methods/removeAllSlides.js");
      function Manipulation(_ref21) {
        var swiper = _ref21.swiper;
        Object.assign(swiper, {
          appendSlide: _methods_appendSlide_js__WEBPACK_IMPORTED_MODULE_0__["default"].bind(swiper),
          prependSlide: _methods_prependSlide_js__WEBPACK_IMPORTED_MODULE_1__["default"].bind(swiper),
          addSlide: _methods_addSlide_js__WEBPACK_IMPORTED_MODULE_2__["default"].bind(swiper),
          removeSlide: _methods_removeSlide_js__WEBPACK_IMPORTED_MODULE_3__["default"].bind(swiper),
          removeAllSlides: _methods_removeAllSlides_js__WEBPACK_IMPORTED_MODULE_4__["default"].bind(swiper)
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/manipulation/methods/addSlide.js":
    /*!**********************************************************************!*\
      !*** ./node_modules/swiper/modules/manipulation/methods/addSlide.js ***!
      \**********************************************************************/
    /***/
    function node_modulesSwiperModulesManipulationMethodsAddSlideJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_378381__) {
      __nested_webpack_require_378381__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_378381__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */addSlide
          );
        }
        /* harmony export */
      });
      function addSlide(index, slides) {
        var swiper = this;
        var $wrapperEl = swiper.$wrapperEl,
          params = swiper.params,
          activeIndex = swiper.activeIndex;
        var activeIndexBuffer = activeIndex;
        if (params.loop) {
          activeIndexBuffer -= swiper.loopedSlides;
          swiper.loopDestroy();
          swiper.slides = $wrapperEl.children(".".concat(params.slideClass));
        }
        var baseLength = swiper.slides.length;
        if (index <= 0) {
          swiper.prependSlide(slides);
          return;
        }
        if (index >= baseLength) {
          swiper.appendSlide(slides);
          return;
        }
        var newActiveIndex = activeIndexBuffer > index ? activeIndexBuffer + 1 : activeIndexBuffer;
        var slidesBuffer = [];
        for (var _i67 = baseLength - 1; _i67 >= index; _i67 -= 1) {
          var currentSlide = swiper.slides.eq(_i67);
          currentSlide.remove();
          slidesBuffer.unshift(currentSlide);
        }
        if (_typeof(slides) === 'object' && 'length' in slides) {
          for (var _i68 = 0; _i68 < slides.length; _i68 += 1) {
            if (slides[_i68]) $wrapperEl.append(slides[_i68]);
          }
          newActiveIndex = activeIndexBuffer > index ? activeIndexBuffer + slides.length : activeIndexBuffer;
        } else {
          $wrapperEl.append(slides);
        }
        for (var _i69 = 0; _i69 < slidesBuffer.length; _i69 += 1) {
          $wrapperEl.append(slidesBuffer[_i69]);
        }
        if (params.loop) {
          swiper.loopCreate();
        }
        if (!params.observer) {
          swiper.update();
        }
        if (params.loop) {
          swiper.slideTo(newActiveIndex + swiper.loopedSlides, 0, false);
        } else {
          swiper.slideTo(newActiveIndex, 0, false);
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/manipulation/methods/appendSlide.js":
    /*!*************************************************************************!*\
      !*** ./node_modules/swiper/modules/manipulation/methods/appendSlide.js ***!
      \*************************************************************************/
    /***/
    function node_modulesSwiperModulesManipulationMethodsAppendSlideJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_381030__) {
      __nested_webpack_require_381030__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_381030__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */appendSlide
          );
        }
        /* harmony export */
      });
      function appendSlide(slides) {
        var swiper = this;
        var $wrapperEl = swiper.$wrapperEl,
          params = swiper.params;
        if (params.loop) {
          swiper.loopDestroy();
        }
        if (_typeof(slides) === 'object' && 'length' in slides) {
          for (var _i70 = 0; _i70 < slides.length; _i70 += 1) {
            if (slides[_i70]) $wrapperEl.append(slides[_i70]);
          }
        } else {
          $wrapperEl.append(slides);
        }
        if (params.loop) {
          swiper.loopCreate();
        }
        if (!params.observer) {
          swiper.update();
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/manipulation/methods/prependSlide.js":
    /*!**************************************************************************!*\
      !*** ./node_modules/swiper/modules/manipulation/methods/prependSlide.js ***!
      \**************************************************************************/
    /***/
    function node_modulesSwiperModulesManipulationMethodsPrependSlideJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_382465__) {
      __nested_webpack_require_382465__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_382465__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */prependSlide
          );
        }
        /* harmony export */
      });
      function prependSlide(slides) {
        var swiper = this;
        var params = swiper.params,
          $wrapperEl = swiper.$wrapperEl,
          activeIndex = swiper.activeIndex;
        if (params.loop) {
          swiper.loopDestroy();
        }
        var newActiveIndex = activeIndex + 1;
        if (_typeof(slides) === 'object' && 'length' in slides) {
          for (var _i71 = 0; _i71 < slides.length; _i71 += 1) {
            if (slides[_i71]) $wrapperEl.prepend(slides[_i71]);
          }
          newActiveIndex = activeIndex + slides.length;
        } else {
          $wrapperEl.prepend(slides);
        }
        if (params.loop) {
          swiper.loopCreate();
        }
        if (!params.observer) {
          swiper.update();
        }
        swiper.slideTo(newActiveIndex, 0, false);
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/manipulation/methods/removeAllSlides.js":
    /*!*****************************************************************************!*\
      !*** ./node_modules/swiper/modules/manipulation/methods/removeAllSlides.js ***!
      \*****************************************************************************/
    /***/
    function node_modulesSwiperModulesManipulationMethodsRemoveAllSlidesJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_384115__) {
      __nested_webpack_require_384115__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_384115__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */removeAllSlides
          );
        }
        /* harmony export */
      });
      function removeAllSlides() {
        var swiper = this;
        var slidesIndexes = [];
        for (var _i72 = 0; _i72 < swiper.slides.length; _i72 += 1) {
          slidesIndexes.push(_i72);
        }
        swiper.removeSlide(slidesIndexes);
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/manipulation/methods/removeSlide.js":
    /*!*************************************************************************!*\
      !*** ./node_modules/swiper/modules/manipulation/methods/removeSlide.js ***!
      \*************************************************************************/
    /***/
    function node_modulesSwiperModulesManipulationMethodsRemoveSlideJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_385184__) {
      __nested_webpack_require_385184__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_385184__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */removeSlide
          );
        }
        /* harmony export */
      });
      function removeSlide(slidesIndexes) {
        var swiper = this;
        var params = swiper.params,
          $wrapperEl = swiper.$wrapperEl,
          activeIndex = swiper.activeIndex;
        var activeIndexBuffer = activeIndex;
        if (params.loop) {
          activeIndexBuffer -= swiper.loopedSlides;
          swiper.loopDestroy();
          swiper.slides = $wrapperEl.children(".".concat(params.slideClass));
        }
        var newActiveIndex = activeIndexBuffer;
        var indexToRemove;
        if (_typeof(slidesIndexes) === 'object' && 'length' in slidesIndexes) {
          for (var _i73 = 0; _i73 < slidesIndexes.length; _i73 += 1) {
            indexToRemove = slidesIndexes[_i73];
            if (swiper.slides[indexToRemove]) swiper.slides.eq(indexToRemove).remove();
            if (indexToRemove < newActiveIndex) newActiveIndex -= 1;
          }
          newActiveIndex = Math.max(newActiveIndex, 0);
        } else {
          indexToRemove = slidesIndexes;
          if (swiper.slides[indexToRemove]) swiper.slides.eq(indexToRemove).remove();
          if (indexToRemove < newActiveIndex) newActiveIndex -= 1;
          newActiveIndex = Math.max(newActiveIndex, 0);
        }
        if (params.loop) {
          swiper.loopCreate();
        }
        if (!params.observer) {
          swiper.update();
        }
        if (params.loop) {
          swiper.slideTo(newActiveIndex + swiper.loopedSlides, 0, false);
        } else {
          swiper.slideTo(newActiveIndex, 0, false);
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/mousewheel/mousewheel.js":
    /*!**************************************************************!*\
      !*** ./node_modules/swiper/modules/mousewheel/mousewheel.js ***!
      \**************************************************************/
    /***/
    function node_modulesSwiperModulesMousewheelMousewheelJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_387474__) {
      __nested_webpack_require_387474__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_387474__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Mousewheel
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_387474__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_387474__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_387474__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      /* eslint-disable consistent-return */

      function Mousewheel(_ref22) {
        var swiper = _ref22.swiper,
          extendParams = _ref22.extendParams,
          on = _ref22.on,
          emit = _ref22.emit;
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        extendParams({
          mousewheel: {
            enabled: false,
            releaseOnEdges: false,
            invert: false,
            forceToAxis: false,
            sensitivity: 1,
            eventsTarget: 'container',
            thresholdDelta: null,
            thresholdTime: null
          }
        });
        swiper.mousewheel = {
          enabled: false
        };
        var timeout;
        var lastScrollTime = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.now)();
        var lastEventBeforeSnap;
        var recentWheelEvents = [];
        function normalize(e) {
          // Reasonable defaults
          var PIXEL_STEP = 10;
          var LINE_HEIGHT = 40;
          var PAGE_HEIGHT = 800;
          var sX = 0;
          var sY = 0; // spinX, spinY

          var pX = 0;
          var pY = 0; // pixelX, pixelY
          // Legacy

          if ('detail' in e) {
            sY = e.detail;
          }
          if ('wheelDelta' in e) {
            sY = -e.wheelDelta / 120;
          }
          if ('wheelDeltaY' in e) {
            sY = -e.wheelDeltaY / 120;
          }
          if ('wheelDeltaX' in e) {
            sX = -e.wheelDeltaX / 120;
          } // side scrolling on FF with DOMMouseScroll

          if ('axis' in e && e.axis === e.HORIZONTAL_AXIS) {
            sX = sY;
            sY = 0;
          }
          pX = sX * PIXEL_STEP;
          pY = sY * PIXEL_STEP;
          if ('deltaY' in e) {
            pY = e.deltaY;
          }
          if ('deltaX' in e) {
            pX = e.deltaX;
          }
          if (e.shiftKey && !pX) {
            // if user scrolls with shift he wants horizontal scroll
            pX = pY;
            pY = 0;
          }
          if ((pX || pY) && e.deltaMode) {
            if (e.deltaMode === 1) {
              // delta in LINE units
              pX *= LINE_HEIGHT;
              pY *= LINE_HEIGHT;
            } else {
              // delta in PAGE units
              pX *= PAGE_HEIGHT;
              pY *= PAGE_HEIGHT;
            }
          } // Fall-back if spin cannot be determined

          if (pX && !sX) {
            sX = pX < 1 ? -1 : 1;
          }
          if (pY && !sY) {
            sY = pY < 1 ? -1 : 1;
          }
          return {
            spinX: sX,
            spinY: sY,
            pixelX: pX,
            pixelY: pY
          };
        }
        function handleMouseEnter() {
          if (!swiper.enabled) return;
          swiper.mouseEntered = true;
        }
        function handleMouseLeave() {
          if (!swiper.enabled) return;
          swiper.mouseEntered = false;
        }
        function animateSlider(newEvent) {
          if (swiper.params.mousewheel.thresholdDelta && newEvent.delta < swiper.params.mousewheel.thresholdDelta) {
            // Prevent if delta of wheel scroll delta is below configured threshold
            return false;
          }
          if (swiper.params.mousewheel.thresholdTime && (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.now)() - lastScrollTime < swiper.params.mousewheel.thresholdTime) {
            // Prevent if time between scrolls is below configured threshold
            return false;
          } // If the movement is NOT big enough and
          // if the last time the user scrolled was too close to the current one (avoid continuously triggering the slider):
          //   Don't go any further (avoid insignificant scroll movement).

          if (newEvent.delta >= 6 && (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.now)() - lastScrollTime < 60) {
            // Return false as a default
            return true;
          } // If user is scrolling towards the end:
          //   If the slider hasn't hit the latest slide or
          //   if the slider is a loop and
          //   if the slider isn't moving right now:
          //     Go to next slide and
          //     emit a scroll event.
          // Else (the user is scrolling towards the beginning) and
          // if the slider hasn't hit the first slide or
          // if the slider is a loop and
          // if the slider isn't moving right now:
          //   Go to prev slide and
          //   emit a scroll event.

          if (newEvent.direction < 0) {
            if ((!swiper.isEnd || swiper.params.loop) && !swiper.animating) {
              swiper.slideNext();
              emit('scroll', newEvent.raw);
            }
          } else if ((!swiper.isBeginning || swiper.params.loop) && !swiper.animating) {
            swiper.slidePrev();
            emit('scroll', newEvent.raw);
          } // If you got here is because an animation has been triggered so store the current time

          lastScrollTime = new window.Date().getTime(); // Return false as a default

          return false;
        }
        function releaseScroll(newEvent) {
          var params = swiper.params.mousewheel;
          if (newEvent.direction < 0) {
            if (swiper.isEnd && !swiper.params.loop && params.releaseOnEdges) {
              // Return true to animate scroll on edges
              return true;
            }
          } else if (swiper.isBeginning && !swiper.params.loop && params.releaseOnEdges) {
            // Return true to animate scroll on edges
            return true;
          }
          return false;
        }
        function handle(event) {
          var e = event;
          var disableParentSwiper = true;
          if (!swiper.enabled) return;
          var params = swiper.params.mousewheel;
          if (swiper.params.cssMode) {
            e.preventDefault();
          }
          var target = swiper.$el;
          if (swiper.params.mousewheel.eventsTarget !== 'container') {
            target = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(swiper.params.mousewheel.eventsTarget);
          }
          if (!swiper.mouseEntered && !target[0].contains(e.target) && !params.releaseOnEdges) return true;
          if (e.originalEvent) e = e.originalEvent; // jquery fix

          var delta = 0;
          var rtlFactor = swiper.rtlTranslate ? -1 : 1;
          var data = normalize(e);
          if (params.forceToAxis) {
            if (swiper.isHorizontal()) {
              if (Math.abs(data.pixelX) > Math.abs(data.pixelY)) delta = -data.pixelX * rtlFactor;else return true;
            } else if (Math.abs(data.pixelY) > Math.abs(data.pixelX)) delta = -data.pixelY;else return true;
          } else {
            delta = Math.abs(data.pixelX) > Math.abs(data.pixelY) ? -data.pixelX * rtlFactor : -data.pixelY;
          }
          if (delta === 0) return true;
          if (params.invert) delta = -delta; // Get the scroll positions

          var positions = swiper.getTranslate() + delta * params.sensitivity;
          if (positions >= swiper.minTranslate()) positions = swiper.minTranslate();
          if (positions <= swiper.maxTranslate()) positions = swiper.maxTranslate(); // When loop is true:
          //     the disableParentSwiper will be true.
          // When loop is false:
          //     if the scroll positions is not on edge,
          //     then the disableParentSwiper will be true.
          //     if the scroll on edge positions,
          //     then the disableParentSwiper will be false.

          disableParentSwiper = swiper.params.loop ? true : !(positions === swiper.minTranslate() || positions === swiper.maxTranslate());
          if (disableParentSwiper && swiper.params.nested) e.stopPropagation();
          if (!swiper.params.freeMode || !swiper.params.freeMode.enabled) {
            // Register the new event in a variable which stores the relevant data
            var newEvent = {
              time: (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.now)(),
              delta: Math.abs(delta),
              direction: Math.sign(delta),
              raw: event
            }; // Keep the most recent events

            if (recentWheelEvents.length >= 2) {
              recentWheelEvents.shift(); // only store the last N events
            }

            var prevEvent = recentWheelEvents.length ? recentWheelEvents[recentWheelEvents.length - 1] : undefined;
            recentWheelEvents.push(newEvent); // If there is at least one previous recorded event:
            //   If direction has changed or
            //   if the scroll is quicker than the previous one:
            //     Animate the slider.
            // Else (this is the first time the wheel is moved):
            //     Animate the slider.

            if (prevEvent) {
              if (newEvent.direction !== prevEvent.direction || newEvent.delta > prevEvent.delta || newEvent.time > prevEvent.time + 150) {
                animateSlider(newEvent);
              }
            } else {
              animateSlider(newEvent);
            } // If it's time to release the scroll:
            //   Return now so you don't hit the preventDefault.

            if (releaseScroll(newEvent)) {
              return true;
            }
          } else {
            // Freemode or scrollContainer:
            // If we recently snapped after a momentum scroll, then ignore wheel events
            // to give time for the deceleration to finish. Stop ignoring after 500 msecs
            // or if it's a new scroll (larger delta or inverse sign as last event before
            // an end-of-momentum snap).
            var _newEvent = {
              time: (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.now)(),
              delta: Math.abs(delta),
              direction: Math.sign(delta)
            };
            var ignoreWheelEvents = lastEventBeforeSnap && _newEvent.time < lastEventBeforeSnap.time + 500 && _newEvent.delta <= lastEventBeforeSnap.delta && _newEvent.direction === lastEventBeforeSnap.direction;
            if (!ignoreWheelEvents) {
              lastEventBeforeSnap = undefined;
              if (swiper.params.loop) {
                swiper.loopFix();
              }
              var position = swiper.getTranslate() + delta * params.sensitivity;
              var wasBeginning = swiper.isBeginning;
              var wasEnd = swiper.isEnd;
              if (position >= swiper.minTranslate()) position = swiper.minTranslate();
              if (position <= swiper.maxTranslate()) position = swiper.maxTranslate();
              swiper.setTransition(0);
              swiper.setTranslate(position);
              swiper.updateProgress();
              swiper.updateActiveIndex();
              swiper.updateSlidesClasses();
              if (!wasBeginning && swiper.isBeginning || !wasEnd && swiper.isEnd) {
                swiper.updateSlidesClasses();
              }
              if (swiper.params.freeMode.sticky) {
                // When wheel scrolling starts with sticky (aka snap) enabled, then detect
                // the end of a momentum scroll by storing recent (N=15?) wheel events.
                // 1. do all N events have decreasing or same (absolute value) delta?
                // 2. did all N events arrive in the last M (M=500?) msecs?
                // 3. does the earliest event have an (absolute value) delta that's
                //    at least P (P=1?) larger than the most recent event's delta?
                // 4. does the latest event have a delta that's smaller than Q (Q=6?) pixels?
                // If 1-4 are "yes" then we're near the end of a momentum scroll deceleration.
                // Snap immediately and ignore remaining wheel events in this scroll.
                // See comment above for "remaining wheel events in this scroll" determination.
                // If 1-4 aren't satisfied, then wait to snap until 500ms after the last event.
                clearTimeout(timeout);
                timeout = undefined;
                if (recentWheelEvents.length >= 15) {
                  recentWheelEvents.shift(); // only store the last N events
                }

                var _prevEvent = recentWheelEvents.length ? recentWheelEvents[recentWheelEvents.length - 1] : undefined;
                var firstEvent = recentWheelEvents[0];
                recentWheelEvents.push(_newEvent);
                if (_prevEvent && (_newEvent.delta > _prevEvent.delta || _newEvent.direction !== _prevEvent.direction)) {
                  // Increasing or reverse-sign delta means the user started scrolling again. Clear the wheel event log.
                  recentWheelEvents.splice(0);
                } else if (recentWheelEvents.length >= 15 && _newEvent.time - firstEvent.time < 500 && firstEvent.delta - _newEvent.delta >= 1 && _newEvent.delta <= 6) {
                  // We're at the end of the deceleration of a momentum scroll, so there's no need
                  // to wait for more events. Snap ASAP on the next tick.
                  // Also, because there's some remaining momentum we'll bias the snap in the
                  // direction of the ongoing scroll because it's better UX for the scroll to snap
                  // in the same direction as the scroll instead of reversing to snap.  Therefore,
                  // if it's already scrolled more than 20% in the current direction, keep going.
                  var snapToThreshold = delta > 0 ? 0.8 : 0.2;
                  lastEventBeforeSnap = _newEvent;
                  recentWheelEvents.splice(0);
                  timeout = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.nextTick)(function () {
                    swiper.slideToClosest(swiper.params.speed, true, undefined, snapToThreshold);
                  }, 0); // no delay; move on next tick
                }

                if (!timeout) {
                  // if we get here, then we haven't detected the end of a momentum scroll, so
                  // we'll consider a scroll "complete" when there haven't been any wheel events
                  // for 500ms.
                  timeout = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.nextTick)(function () {
                    var snapToThreshold = 0.5;
                    lastEventBeforeSnap = _newEvent;
                    recentWheelEvents.splice(0);
                    swiper.slideToClosest(swiper.params.speed, true, undefined, snapToThreshold);
                  }, 500);
                }
              } // Emit event

              if (!ignoreWheelEvents) emit('scroll', e); // Stop autoplay

              if (swiper.params.autoplay && swiper.params.autoplayDisableOnInteraction) swiper.autoplay.stop(); // Return page scroll on edge positions

              if (position === swiper.minTranslate() || position === swiper.maxTranslate()) return true;
            }
          }
          if (e.preventDefault) e.preventDefault();else e.returnValue = false;
          return false;
        }
        function events(method) {
          var target = swiper.$el;
          if (swiper.params.mousewheel.eventsTarget !== 'container') {
            target = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(swiper.params.mousewheel.eventsTarget);
          }
          target[method]('mouseenter', handleMouseEnter);
          target[method]('mouseleave', handleMouseLeave);
          target[method]('wheel', handle);
        }
        function enable() {
          if (swiper.params.cssMode) {
            swiper.wrapperEl.removeEventListener('wheel', handle);
            return true;
          }
          if (swiper.mousewheel.enabled) return false;
          events('on');
          swiper.mousewheel.enabled = true;
          return true;
        }
        function disable() {
          if (swiper.params.cssMode) {
            swiper.wrapperEl.addEventListener(event, handle);
            return true;
          }
          if (!swiper.mousewheel.enabled) return false;
          events('off');
          swiper.mousewheel.enabled = false;
          return true;
        }
        on('init', function () {
          if (!swiper.params.mousewheel.enabled && swiper.params.cssMode) {
            disable();
          }
          if (swiper.params.mousewheel.enabled) enable();
        });
        on('destroy', function () {
          if (swiper.params.cssMode) {
            enable();
          }
          if (swiper.mousewheel.enabled) disable();
        });
        Object.assign(swiper.mousewheel, {
          enable: enable,
          disable: disable
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/navigation/navigation.js":
    /*!**************************************************************!*\
      !*** ./node_modules/swiper/modules/navigation/navigation.js ***!
      \**************************************************************/
    /***/
    function node_modulesSwiperModulesNavigationNavigationJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_405390__) {
      __nested_webpack_require_405390__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_405390__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Navigation
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_create_element_if_not_defined_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_405390__( /*! ../../shared/create-element-if-not-defined.js */"./node_modules/swiper/shared/create-element-if-not-defined.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_405390__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function Navigation(_ref23) {
        var swiper = _ref23.swiper,
          extendParams = _ref23.extendParams,
          on = _ref23.on,
          emit = _ref23.emit;
        extendParams({
          navigation: {
            nextEl: null,
            prevEl: null,
            hideOnClick: false,
            disabledClass: 'swiper-button-disabled',
            hiddenClass: 'swiper-button-hidden',
            lockClass: 'swiper-button-lock',
            navigationDisabledClass: 'swiper-navigation-disabled'
          }
        });
        swiper.navigation = {
          nextEl: null,
          $nextEl: null,
          prevEl: null,
          $prevEl: null
        };
        function getEl(el) {
          var $el;
          if (el) {
            $el = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(el);
            if (swiper.params.uniqueNavElements && typeof el === 'string' && $el.length > 1 && swiper.$el.find(el).length === 1) {
              $el = swiper.$el.find(el);
            }
          }
          return $el;
        }
        function toggleEl($el, disabled) {
          var params = swiper.params.navigation;
          if ($el && $el.length > 0) {
            $el[disabled ? 'addClass' : 'removeClass'](params.disabledClass);
            if ($el[0] && $el[0].tagName === 'BUTTON') $el[0].disabled = disabled;
            if (swiper.params.watchOverflow && swiper.enabled) {
              $el[swiper.isLocked ? 'addClass' : 'removeClass'](params.lockClass);
            }
          }
        }
        function update() {
          // Update Navigation Buttons
          if (swiper.params.loop) return;
          var _swiper$navigation2 = swiper.navigation,
            $nextEl = _swiper$navigation2.$nextEl,
            $prevEl = _swiper$navigation2.$prevEl;
          toggleEl($prevEl, swiper.isBeginning && !swiper.params.rewind);
          toggleEl($nextEl, swiper.isEnd && !swiper.params.rewind);
        }
        function onPrevClick(e) {
          e.preventDefault();
          if (swiper.isBeginning && !swiper.params.loop && !swiper.params.rewind) return;
          swiper.slidePrev();
          emit('navigationPrev');
        }
        function onNextClick(e) {
          e.preventDefault();
          if (swiper.isEnd && !swiper.params.loop && !swiper.params.rewind) return;
          swiper.slideNext();
          emit('navigationNext');
        }
        function init() {
          var params = swiper.params.navigation;
          swiper.params.navigation = (0, _shared_create_element_if_not_defined_js__WEBPACK_IMPORTED_MODULE_0__["default"])(swiper, swiper.originalParams.navigation, swiper.params.navigation, {
            nextEl: 'swiper-button-next',
            prevEl: 'swiper-button-prev'
          });
          if (!(params.nextEl || params.prevEl)) return;
          var $nextEl = getEl(params.nextEl);
          var $prevEl = getEl(params.prevEl);
          if ($nextEl && $nextEl.length > 0) {
            $nextEl.on('click', onNextClick);
          }
          if ($prevEl && $prevEl.length > 0) {
            $prevEl.on('click', onPrevClick);
          }
          Object.assign(swiper.navigation, {
            $nextEl: $nextEl,
            nextEl: $nextEl && $nextEl[0],
            $prevEl: $prevEl,
            prevEl: $prevEl && $prevEl[0]
          });
          if (!swiper.enabled) {
            if ($nextEl) $nextEl.addClass(params.lockClass);
            if ($prevEl) $prevEl.addClass(params.lockClass);
          }
        }
        function destroy() {
          var _swiper$navigation3 = swiper.navigation,
            $nextEl = _swiper$navigation3.$nextEl,
            $prevEl = _swiper$navigation3.$prevEl;
          if ($nextEl && $nextEl.length) {
            $nextEl.off('click', onNextClick);
            $nextEl.removeClass(swiper.params.navigation.disabledClass);
          }
          if ($prevEl && $prevEl.length) {
            $prevEl.off('click', onPrevClick);
            $prevEl.removeClass(swiper.params.navigation.disabledClass);
          }
        }
        on('init', function () {
          if (swiper.params.navigation.enabled === false) {
            // eslint-disable-next-line
            disable();
          } else {
            init();
            update();
          }
        });
        on('toEdge fromEdge lock unlock', function () {
          update();
        });
        on('destroy', function () {
          destroy();
        });
        on('enable disable', function () {
          var _swiper$navigation4 = swiper.navigation,
            $nextEl = _swiper$navigation4.$nextEl,
            $prevEl = _swiper$navigation4.$prevEl;
          if ($nextEl) {
            $nextEl[swiper.enabled ? 'removeClass' : 'addClass'](swiper.params.navigation.lockClass);
          }
          if ($prevEl) {
            $prevEl[swiper.enabled ? 'removeClass' : 'addClass'](swiper.params.navigation.lockClass);
          }
        });
        on('click', function (_s, e) {
          var _swiper$navigation5 = swiper.navigation,
            $nextEl = _swiper$navigation5.$nextEl,
            $prevEl = _swiper$navigation5.$prevEl;
          var targetEl = e.target;
          if (swiper.params.navigation.hideOnClick && !(0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(targetEl).is($prevEl) && !(0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(targetEl).is($nextEl)) {
            if (swiper.pagination && swiper.params.pagination && swiper.params.pagination.clickable && (swiper.pagination.el === targetEl || swiper.pagination.el.contains(targetEl))) return;
            var isHidden;
            if ($nextEl) {
              isHidden = $nextEl.hasClass(swiper.params.navigation.hiddenClass);
            } else if ($prevEl) {
              isHidden = $prevEl.hasClass(swiper.params.navigation.hiddenClass);
            }
            if (isHidden === true) {
              emit('navigationShow');
            } else {
              emit('navigationHide');
            }
            if ($nextEl) {
              $nextEl.toggleClass(swiper.params.navigation.hiddenClass);
            }
            if ($prevEl) {
              $prevEl.toggleClass(swiper.params.navigation.hiddenClass);
            }
          }
        });
        var enable = function enable() {
          swiper.$el.removeClass(swiper.params.navigation.navigationDisabledClass);
          init();
          update();
        };
        var disable = function disable() {
          swiper.$el.addClass(swiper.params.navigation.navigationDisabledClass);
          destroy();
        };
        Object.assign(swiper.navigation, {
          enable: enable,
          disable: disable,
          update: update,
          init: init,
          destroy: destroy
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/pagination/pagination.js":
    /*!**************************************************************!*\
      !*** ./node_modules/swiper/modules/pagination/pagination.js ***!
      \**************************************************************/
    /***/
    function node_modulesSwiperModulesPaginationPaginationJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_413335__) {
      __nested_webpack_require_413335__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_413335__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Pagination
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_413335__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_413335__( /*! ../../shared/classes-to-selector.js */"./node_modules/swiper/shared/classes-to-selector.js");
      /* harmony import */
      var _shared_create_element_if_not_defined_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_413335__( /*! ../../shared/create-element-if-not-defined.js */"./node_modules/swiper/shared/create-element-if-not-defined.js");
      function Pagination(_ref24) {
        var swiper = _ref24.swiper,
          extendParams = _ref24.extendParams,
          on = _ref24.on,
          emit = _ref24.emit;
        var pfx = 'swiper-pagination';
        extendParams({
          pagination: {
            el: null,
            bulletElement: 'span',
            clickable: false,
            hideOnClick: false,
            renderBullet: null,
            renderProgressbar: null,
            renderFraction: null,
            renderCustom: null,
            progressbarOpposite: false,
            type: 'bullets',
            // 'bullets' or 'progressbar' or 'fraction' or 'custom'
            dynamicBullets: false,
            dynamicMainBullets: 1,
            formatFractionCurrent: function formatFractionCurrent(number) {
              return number;
            },
            formatFractionTotal: function formatFractionTotal(number) {
              return number;
            },
            bulletClass: "".concat(pfx, "-bullet"),
            bulletActiveClass: "".concat(pfx, "-bullet-active"),
            modifierClass: "".concat(pfx, "-"),
            currentClass: "".concat(pfx, "-current"),
            totalClass: "".concat(pfx, "-total"),
            hiddenClass: "".concat(pfx, "-hidden"),
            progressbarFillClass: "".concat(pfx, "-progressbar-fill"),
            progressbarOppositeClass: "".concat(pfx, "-progressbar-opposite"),
            clickableClass: "".concat(pfx, "-clickable"),
            lockClass: "".concat(pfx, "-lock"),
            horizontalClass: "".concat(pfx, "-horizontal"),
            verticalClass: "".concat(pfx, "-vertical"),
            paginationDisabledClass: "".concat(pfx, "-disabled")
          }
        });
        swiper.pagination = {
          el: null,
          $el: null,
          bullets: []
        };
        var bulletSize;
        var dynamicBulletIndex = 0;
        function isPaginationDisabled() {
          return !swiper.params.pagination.el || !swiper.pagination.el || !swiper.pagination.$el || swiper.pagination.$el.length === 0;
        }
        function setSideBullets($bulletEl, position) {
          var bulletActiveClass = swiper.params.pagination.bulletActiveClass;
          $bulletEl[position]().addClass("".concat(bulletActiveClass, "-").concat(position))[position]().addClass("".concat(bulletActiveClass, "-").concat(position, "-").concat(position));
        }
        function update() {
          // Render || Update Pagination bullets/items
          var rtl = swiper.rtl;
          var params = swiper.params.pagination;
          if (isPaginationDisabled()) return;
          var slidesLength = swiper.virtual && swiper.params.virtual.enabled ? swiper.virtual.slides.length : swiper.slides.length;
          var $el = swiper.pagination.$el; // Current/Total

          var current;
          var total = swiper.params.loop ? Math.ceil((slidesLength - swiper.loopedSlides * 2) / swiper.params.slidesPerGroup) : swiper.snapGrid.length;
          if (swiper.params.loop) {
            current = Math.ceil((swiper.activeIndex - swiper.loopedSlides) / swiper.params.slidesPerGroup);
            if (current > slidesLength - 1 - swiper.loopedSlides * 2) {
              current -= slidesLength - swiper.loopedSlides * 2;
            }
            if (current > total - 1) current -= total;
            if (current < 0 && swiper.params.paginationType !== 'bullets') current = total + current;
          } else if (typeof swiper.snapIndex !== 'undefined') {
            current = swiper.snapIndex;
          } else {
            current = swiper.activeIndex || 0;
          } // Types

          if (params.type === 'bullets' && swiper.pagination.bullets && swiper.pagination.bullets.length > 0) {
            var bullets = swiper.pagination.bullets;
            var firstIndex;
            var lastIndex;
            var midIndex;
            if (params.dynamicBullets) {
              bulletSize = bullets.eq(0)[swiper.isHorizontal() ? 'outerWidth' : 'outerHeight'](true);
              $el.css(swiper.isHorizontal() ? 'width' : 'height', "".concat(bulletSize * (params.dynamicMainBullets + 4), "px"));
              if (params.dynamicMainBullets > 1 && swiper.previousIndex !== undefined) {
                dynamicBulletIndex += current - (swiper.previousIndex - swiper.loopedSlides || 0);
                if (dynamicBulletIndex > params.dynamicMainBullets - 1) {
                  dynamicBulletIndex = params.dynamicMainBullets - 1;
                } else if (dynamicBulletIndex < 0) {
                  dynamicBulletIndex = 0;
                }
              }
              firstIndex = Math.max(current - dynamicBulletIndex, 0);
              lastIndex = firstIndex + (Math.min(bullets.length, params.dynamicMainBullets) - 1);
              midIndex = (lastIndex + firstIndex) / 2;
            }
            bullets.removeClass(['', '-next', '-next-next', '-prev', '-prev-prev', '-main'].map(function (suffix) {
              return "".concat(params.bulletActiveClass).concat(suffix);
            }).join(' '));
            if ($el.length > 1) {
              bullets.each(function (bullet) {
                var $bullet = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(bullet);
                var bulletIndex = $bullet.index();
                if (bulletIndex === current) {
                  $bullet.addClass(params.bulletActiveClass);
                }
                if (params.dynamicBullets) {
                  if (bulletIndex >= firstIndex && bulletIndex <= lastIndex) {
                    $bullet.addClass("".concat(params.bulletActiveClass, "-main"));
                  }
                  if (bulletIndex === firstIndex) {
                    setSideBullets($bullet, 'prev');
                  }
                  if (bulletIndex === lastIndex) {
                    setSideBullets($bullet, 'next');
                  }
                }
              });
            } else {
              var $bullet = bullets.eq(current);
              var bulletIndex = $bullet.index();
              $bullet.addClass(params.bulletActiveClass);
              if (params.dynamicBullets) {
                var $firstDisplayedBullet = bullets.eq(firstIndex);
                var $lastDisplayedBullet = bullets.eq(lastIndex);
                for (var _i74 = firstIndex; _i74 <= lastIndex; _i74 += 1) {
                  bullets.eq(_i74).addClass("".concat(params.bulletActiveClass, "-main"));
                }
                if (swiper.params.loop) {
                  if (bulletIndex >= bullets.length) {
                    for (var _i75 = params.dynamicMainBullets; _i75 >= 0; _i75 -= 1) {
                      bullets.eq(bullets.length - _i75).addClass("".concat(params.bulletActiveClass, "-main"));
                    }
                    bullets.eq(bullets.length - params.dynamicMainBullets - 1).addClass("".concat(params.bulletActiveClass, "-prev"));
                  } else {
                    setSideBullets($firstDisplayedBullet, 'prev');
                    setSideBullets($lastDisplayedBullet, 'next');
                  }
                } else {
                  setSideBullets($firstDisplayedBullet, 'prev');
                  setSideBullets($lastDisplayedBullet, 'next');
                }
              }
            }
            if (params.dynamicBullets) {
              var dynamicBulletsLength = Math.min(bullets.length, params.dynamicMainBullets + 4);
              var bulletsOffset = (bulletSize * dynamicBulletsLength - bulletSize) / 2 - midIndex * bulletSize;
              var offsetProp = rtl ? 'right' : 'left';
              bullets.css(swiper.isHorizontal() ? offsetProp : 'top', "".concat(bulletsOffset, "px"));
            }
          }
          if (params.type === 'fraction') {
            $el.find((0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.currentClass)).text(params.formatFractionCurrent(current + 1));
            $el.find((0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.totalClass)).text(params.formatFractionTotal(total));
          }
          if (params.type === 'progressbar') {
            var progressbarDirection;
            if (params.progressbarOpposite) {
              progressbarDirection = swiper.isHorizontal() ? 'vertical' : 'horizontal';
            } else {
              progressbarDirection = swiper.isHorizontal() ? 'horizontal' : 'vertical';
            }
            var scale = (current + 1) / total;
            var scaleX = 1;
            var scaleY = 1;
            if (progressbarDirection === 'horizontal') {
              scaleX = scale;
            } else {
              scaleY = scale;
            }
            $el.find((0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.progressbarFillClass)).transform("translate3d(0,0,0) scaleX(".concat(scaleX, ") scaleY(").concat(scaleY, ")")).transition(swiper.params.speed);
          }
          if (params.type === 'custom' && params.renderCustom) {
            $el.html(params.renderCustom(swiper, current + 1, total));
            emit('paginationRender', $el[0]);
          } else {
            emit('paginationUpdate', $el[0]);
          }
          if (swiper.params.watchOverflow && swiper.enabled) {
            $el[swiper.isLocked ? 'addClass' : 'removeClass'](params.lockClass);
          }
        }
        function render() {
          // Render Container
          var params = swiper.params.pagination;
          if (isPaginationDisabled()) return;
          var slidesLength = swiper.virtual && swiper.params.virtual.enabled ? swiper.virtual.slides.length : swiper.slides.length;
          var $el = swiper.pagination.$el;
          var paginationHTML = '';
          if (params.type === 'bullets') {
            var numberOfBullets = swiper.params.loop ? Math.ceil((slidesLength - swiper.loopedSlides * 2) / swiper.params.slidesPerGroup) : swiper.snapGrid.length;
            if (swiper.params.freeMode && swiper.params.freeMode.enabled && !swiper.params.loop && numberOfBullets > slidesLength) {
              numberOfBullets = slidesLength;
            }
            for (var _i76 = 0; _i76 < numberOfBullets; _i76 += 1) {
              if (params.renderBullet) {
                paginationHTML += params.renderBullet.call(swiper, _i76, params.bulletClass);
              } else {
                paginationHTML += "<".concat(params.bulletElement, " class=\"").concat(params.bulletClass, "\"></").concat(params.bulletElement, ">");
              }
            }
            $el.html(paginationHTML);
            swiper.pagination.bullets = $el.find((0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.bulletClass));
          }
          if (params.type === 'fraction') {
            if (params.renderFraction) {
              paginationHTML = params.renderFraction.call(swiper, params.currentClass, params.totalClass);
            } else {
              paginationHTML = "<span class=\"".concat(params.currentClass, "\"></span>") + ' / ' + "<span class=\"".concat(params.totalClass, "\"></span>");
            }
            $el.html(paginationHTML);
          }
          if (params.type === 'progressbar') {
            if (params.renderProgressbar) {
              paginationHTML = params.renderProgressbar.call(swiper, params.progressbarFillClass);
            } else {
              paginationHTML = "<span class=\"".concat(params.progressbarFillClass, "\"></span>");
            }
            $el.html(paginationHTML);
          }
          if (params.type !== 'custom') {
            emit('paginationRender', swiper.pagination.$el[0]);
          }
        }
        function init() {
          swiper.params.pagination = (0, _shared_create_element_if_not_defined_js__WEBPACK_IMPORTED_MODULE_2__["default"])(swiper, swiper.originalParams.pagination, swiper.params.pagination, {
            el: 'swiper-pagination'
          });
          var params = swiper.params.pagination;
          if (!params.el) return;
          var $el = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(params.el);
          if ($el.length === 0) return;
          if (swiper.params.uniqueNavElements && typeof params.el === 'string' && $el.length > 1) {
            $el = swiper.$el.find(params.el); // check if it belongs to another nested Swiper

            if ($el.length > 1) {
              $el = $el.filter(function (el) {
                if ((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(el).parents('.swiper')[0] !== swiper.el) return false;
                return true;
              });
            }
          }
          if (params.type === 'bullets' && params.clickable) {
            $el.addClass(params.clickableClass);
          }
          $el.addClass(params.modifierClass + params.type);
          $el.addClass(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass);
          if (params.type === 'bullets' && params.dynamicBullets) {
            $el.addClass("".concat(params.modifierClass).concat(params.type, "-dynamic"));
            dynamicBulletIndex = 0;
            if (params.dynamicMainBullets < 1) {
              params.dynamicMainBullets = 1;
            }
          }
          if (params.type === 'progressbar' && params.progressbarOpposite) {
            $el.addClass(params.progressbarOppositeClass);
          }
          if (params.clickable) {
            $el.on('click', (0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.bulletClass), function onClick(e) {
              e.preventDefault();
              var index = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(this).index() * swiper.params.slidesPerGroup;
              if (swiper.params.loop) index += swiper.loopedSlides;
              swiper.slideTo(index);
            });
          }
          Object.assign(swiper.pagination, {
            $el: $el,
            el: $el[0]
          });
          if (!swiper.enabled) {
            $el.addClass(params.lockClass);
          }
        }
        function destroy() {
          var params = swiper.params.pagination;
          if (isPaginationDisabled()) return;
          var $el = swiper.pagination.$el;
          $el.removeClass(params.hiddenClass);
          $el.removeClass(params.modifierClass + params.type);
          $el.removeClass(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass);
          if (swiper.pagination.bullets && swiper.pagination.bullets.removeClass) swiper.pagination.bullets.removeClass(params.bulletActiveClass);
          if (params.clickable) {
            $el.off('click', (0, _shared_classes_to_selector_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.bulletClass));
          }
        }
        on('init', function () {
          if (swiper.params.pagination.enabled === false) {
            // eslint-disable-next-line
            disable();
          } else {
            init();
            render();
            update();
          }
        });
        on('activeIndexChange', function () {
          if (swiper.params.loop) {
            update();
          } else if (typeof swiper.snapIndex === 'undefined') {
            update();
          }
        });
        on('snapIndexChange', function () {
          if (!swiper.params.loop) {
            update();
          }
        });
        on('slidesLengthChange', function () {
          if (swiper.params.loop) {
            render();
            update();
          }
        });
        on('snapGridLengthChange', function () {
          if (!swiper.params.loop) {
            render();
            update();
          }
        });
        on('destroy', function () {
          destroy();
        });
        on('enable disable', function () {
          var $el = swiper.pagination.$el;
          if ($el) {
            $el[swiper.enabled ? 'removeClass' : 'addClass'](swiper.params.pagination.lockClass);
          }
        });
        on('lock unlock', function () {
          update();
        });
        on('click', function (_s, e) {
          var targetEl = e.target;
          var $el = swiper.pagination.$el;
          if (swiper.params.pagination.el && swiper.params.pagination.hideOnClick && $el && $el.length > 0 && !(0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(targetEl).hasClass(swiper.params.pagination.bulletClass)) {
            if (swiper.navigation && (swiper.navigation.nextEl && targetEl === swiper.navigation.nextEl || swiper.navigation.prevEl && targetEl === swiper.navigation.prevEl)) return;
            var isHidden = $el.hasClass(swiper.params.pagination.hiddenClass);
            if (isHidden === true) {
              emit('paginationShow');
            } else {
              emit('paginationHide');
            }
            $el.toggleClass(swiper.params.pagination.hiddenClass);
          }
        });
        var enable = function enable() {
          swiper.$el.removeClass(swiper.params.pagination.paginationDisabledClass);
          if (swiper.pagination.$el) {
            swiper.pagination.$el.removeClass(swiper.params.pagination.paginationDisabledClass);
          }
          init();
          render();
          update();
        };
        var disable = function disable() {
          swiper.$el.addClass(swiper.params.pagination.paginationDisabledClass);
          if (swiper.pagination.$el) {
            swiper.pagination.$el.addClass(swiper.params.pagination.paginationDisabledClass);
          }
          destroy();
        };
        Object.assign(swiper.pagination, {
          enable: enable,
          disable: disable,
          render: render,
          update: update,
          init: init,
          destroy: destroy
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/parallax/parallax.js":
    /*!**********************************************************!*\
      !*** ./node_modules/swiper/modules/parallax/parallax.js ***!
      \**********************************************************/
    /***/
    function node_modulesSwiperModulesParallaxParallaxJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_432514__) {
      __nested_webpack_require_432514__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_432514__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Parallax
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_432514__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function Parallax(_ref25) {
        var swiper = _ref25.swiper,
          extendParams = _ref25.extendParams,
          on = _ref25.on;
        extendParams({
          parallax: {
            enabled: false
          }
        });
        var setTransform = function setTransform(el, progress) {
          var rtl = swiper.rtl;
          var $el = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(el);
          var rtlFactor = rtl ? -1 : 1;
          var p = $el.attr('data-swiper-parallax') || '0';
          var x = $el.attr('data-swiper-parallax-x');
          var y = $el.attr('data-swiper-parallax-y');
          var scale = $el.attr('data-swiper-parallax-scale');
          var opacity = $el.attr('data-swiper-parallax-opacity');
          if (x || y) {
            x = x || '0';
            y = y || '0';
          } else if (swiper.isHorizontal()) {
            x = p;
            y = '0';
          } else {
            y = p;
            x = '0';
          }
          if (x.indexOf('%') >= 0) {
            x = "".concat(parseInt(x, 10) * progress * rtlFactor, "%");
          } else {
            x = "".concat(x * progress * rtlFactor, "px");
          }
          if (y.indexOf('%') >= 0) {
            y = "".concat(parseInt(y, 10) * progress, "%");
          } else {
            y = "".concat(y * progress, "px");
          }
          if (typeof opacity !== 'undefined' && opacity !== null) {
            var currentOpacity = opacity - (opacity - 1) * (1 - Math.abs(progress));
            $el[0].style.opacity = currentOpacity;
          }
          if (typeof scale === 'undefined' || scale === null) {
            $el.transform("translate3d(".concat(x, ", ").concat(y, ", 0px)"));
          } else {
            var currentScale = scale - (scale - 1) * (1 - Math.abs(progress));
            $el.transform("translate3d(".concat(x, ", ").concat(y, ", 0px) scale(").concat(currentScale, ")"));
          }
        };
        var setTranslate = function setTranslate() {
          var $el = swiper.$el,
            slides = swiper.slides,
            progress = swiper.progress,
            snapGrid = swiper.snapGrid;
          $el.children('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]').each(function (el) {
            setTransform(el, progress);
          });
          slides.each(function (slideEl, slideIndex) {
            var slideProgress = slideEl.progress;
            if (swiper.params.slidesPerGroup > 1 && swiper.params.slidesPerView !== 'auto') {
              slideProgress += Math.ceil(slideIndex / 2) - progress * (snapGrid.length - 1);
            }
            slideProgress = Math.min(Math.max(slideProgress, -1), 1);
            (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(slideEl).find('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]').each(function (el) {
              setTransform(el, slideProgress);
            });
          });
        };
        var setTransition = function setTransition() {
          var duration = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : swiper.params.speed;
          var $el = swiper.$el;
          $el.find('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y], [data-swiper-parallax-opacity], [data-swiper-parallax-scale]').each(function (parallaxEl) {
            var $parallaxEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(parallaxEl);
            var parallaxDuration = parseInt($parallaxEl.attr('data-swiper-parallax-duration'), 10) || duration;
            if (duration === 0) parallaxDuration = 0;
            $parallaxEl.transition(parallaxDuration);
          });
        };
        on('beforeInit', function () {
          if (!swiper.params.parallax.enabled) return;
          swiper.params.watchSlidesProgress = true;
          swiper.originalParams.watchSlidesProgress = true;
        });
        on('init', function () {
          if (!swiper.params.parallax.enabled) return;
          setTranslate();
        });
        on('setTranslate', function () {
          if (!swiper.params.parallax.enabled) return;
          setTranslate();
        });
        on('setTransition', function (_swiper, duration) {
          if (!swiper.params.parallax.enabled) return;
          setTransition(duration);
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/scrollbar/scrollbar.js":
    /*!************************************************************!*\
      !*** ./node_modules/swiper/modules/scrollbar/scrollbar.js ***!
      \************************************************************/
    /***/
    function node_modulesSwiperModulesScrollbarScrollbarJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_437910__) {
      __nested_webpack_require_437910__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_437910__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Scrollbar
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_437910__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_437910__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_437910__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      /* harmony import */
      var _shared_create_element_if_not_defined_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_437910__( /*! ../../shared/create-element-if-not-defined.js */"./node_modules/swiper/shared/create-element-if-not-defined.js");
      function Scrollbar(_ref26) {
        var swiper = _ref26.swiper,
          extendParams = _ref26.extendParams,
          on = _ref26.on,
          emit = _ref26.emit;
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        var isTouched = false;
        var timeout = null;
        var dragTimeout = null;
        var dragStartPos;
        var dragSize;
        var trackSize;
        var divider;
        extendParams({
          scrollbar: {
            el: null,
            dragSize: 'auto',
            hide: false,
            draggable: false,
            snapOnRelease: true,
            lockClass: 'swiper-scrollbar-lock',
            dragClass: 'swiper-scrollbar-drag',
            scrollbarDisabledClass: 'swiper-scrollbar-disabled',
            horizontalClass: "swiper-scrollbar-horizontal",
            verticalClass: "swiper-scrollbar-vertical"
          }
        });
        swiper.scrollbar = {
          el: null,
          dragEl: null,
          $el: null,
          $dragEl: null
        };
        function setTranslate() {
          if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
          var scrollbar = swiper.scrollbar,
            rtl = swiper.rtlTranslate,
            progress = swiper.progress;
          var $dragEl = scrollbar.$dragEl,
            $el = scrollbar.$el;
          var params = swiper.params.scrollbar;
          var newSize = dragSize;
          var newPos = (trackSize - dragSize) * progress;
          if (rtl) {
            newPos = -newPos;
            if (newPos > 0) {
              newSize = dragSize - newPos;
              newPos = 0;
            } else if (-newPos + dragSize > trackSize) {
              newSize = trackSize + newPos;
            }
          } else if (newPos < 0) {
            newSize = dragSize + newPos;
            newPos = 0;
          } else if (newPos + dragSize > trackSize) {
            newSize = trackSize - newPos;
          }
          if (swiper.isHorizontal()) {
            $dragEl.transform("translate3d(".concat(newPos, "px, 0, 0)"));
            $dragEl[0].style.width = "".concat(newSize, "px");
          } else {
            $dragEl.transform("translate3d(0px, ".concat(newPos, "px, 0)"));
            $dragEl[0].style.height = "".concat(newSize, "px");
          }
          if (params.hide) {
            clearTimeout(timeout);
            $el[0].style.opacity = 1;
            timeout = setTimeout(function () {
              $el[0].style.opacity = 0;
              $el.transition(400);
            }, 1000);
          }
        }
        function setTransition(duration) {
          if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
          swiper.scrollbar.$dragEl.transition(duration);
        }
        function updateSize() {
          if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
          var scrollbar = swiper.scrollbar;
          var $dragEl = scrollbar.$dragEl,
            $el = scrollbar.$el;
          $dragEl[0].style.width = '';
          $dragEl[0].style.height = '';
          trackSize = swiper.isHorizontal() ? $el[0].offsetWidth : $el[0].offsetHeight;
          divider = swiper.size / (swiper.virtualSize + swiper.params.slidesOffsetBefore - (swiper.params.centeredSlides ? swiper.snapGrid[0] : 0));
          if (swiper.params.scrollbar.dragSize === 'auto') {
            dragSize = trackSize * divider;
          } else {
            dragSize = parseInt(swiper.params.scrollbar.dragSize, 10);
          }
          if (swiper.isHorizontal()) {
            $dragEl[0].style.width = "".concat(dragSize, "px");
          } else {
            $dragEl[0].style.height = "".concat(dragSize, "px");
          }
          if (divider >= 1) {
            $el[0].style.display = 'none';
          } else {
            $el[0].style.display = '';
          }
          if (swiper.params.scrollbar.hide) {
            $el[0].style.opacity = 0;
          }
          if (swiper.params.watchOverflow && swiper.enabled) {
            scrollbar.$el[swiper.isLocked ? 'addClass' : 'removeClass'](swiper.params.scrollbar.lockClass);
          }
        }
        function getPointerPosition(e) {
          if (swiper.isHorizontal()) {
            return e.type === 'touchstart' || e.type === 'touchmove' ? e.targetTouches[0].clientX : e.clientX;
          }
          return e.type === 'touchstart' || e.type === 'touchmove' ? e.targetTouches[0].clientY : e.clientY;
        }
        function setDragPosition(e) {
          var scrollbar = swiper.scrollbar,
            rtl = swiper.rtlTranslate;
          var $el = scrollbar.$el;
          var positionRatio;
          positionRatio = (getPointerPosition(e) - $el.offset()[swiper.isHorizontal() ? 'left' : 'top'] - (dragStartPos !== null ? dragStartPos : dragSize / 2)) / (trackSize - dragSize);
          positionRatio = Math.max(Math.min(positionRatio, 1), 0);
          if (rtl) {
            positionRatio = 1 - positionRatio;
          }
          var position = swiper.minTranslate() + (swiper.maxTranslate() - swiper.minTranslate()) * positionRatio;
          swiper.updateProgress(position);
          swiper.setTranslate(position);
          swiper.updateActiveIndex();
          swiper.updateSlidesClasses();
        }
        function onDragStart(e) {
          var params = swiper.params.scrollbar;
          var scrollbar = swiper.scrollbar,
            $wrapperEl = swiper.$wrapperEl;
          var $el = scrollbar.$el,
            $dragEl = scrollbar.$dragEl;
          isTouched = true;
          dragStartPos = e.target === $dragEl[0] || e.target === $dragEl ? getPointerPosition(e) - e.target.getBoundingClientRect()[swiper.isHorizontal() ? 'left' : 'top'] : null;
          e.preventDefault();
          e.stopPropagation();
          $wrapperEl.transition(100);
          $dragEl.transition(100);
          setDragPosition(e);
          clearTimeout(dragTimeout);
          $el.transition(0);
          if (params.hide) {
            $el.css('opacity', 1);
          }
          if (swiper.params.cssMode) {
            swiper.$wrapperEl.css('scroll-snap-type', 'none');
          }
          emit('scrollbarDragStart', e);
        }
        function onDragMove(e) {
          var scrollbar = swiper.scrollbar,
            $wrapperEl = swiper.$wrapperEl;
          var $el = scrollbar.$el,
            $dragEl = scrollbar.$dragEl;
          if (!isTouched) return;
          if (e.preventDefault) e.preventDefault();else e.returnValue = false;
          setDragPosition(e);
          $wrapperEl.transition(0);
          $el.transition(0);
          $dragEl.transition(0);
          emit('scrollbarDragMove', e);
        }
        function onDragEnd(e) {
          var params = swiper.params.scrollbar;
          var scrollbar = swiper.scrollbar,
            $wrapperEl = swiper.$wrapperEl;
          var $el = scrollbar.$el;
          if (!isTouched) return;
          isTouched = false;
          if (swiper.params.cssMode) {
            swiper.$wrapperEl.css('scroll-snap-type', '');
            $wrapperEl.transition('');
          }
          if (params.hide) {
            clearTimeout(dragTimeout);
            dragTimeout = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.nextTick)(function () {
              $el.css('opacity', 0);
              $el.transition(400);
            }, 1000);
          }
          emit('scrollbarDragEnd', e);
          if (params.snapOnRelease) {
            swiper.slideToClosest();
          }
        }
        function events(method) {
          var scrollbar = swiper.scrollbar,
            touchEventsTouch = swiper.touchEventsTouch,
            touchEventsDesktop = swiper.touchEventsDesktop,
            params = swiper.params,
            support = swiper.support;
          var $el = scrollbar.$el;
          if (!$el) return;
          var target = $el[0];
          var activeListener = support.passiveListener && params.passiveListeners ? {
            passive: false,
            capture: false
          } : false;
          var passiveListener = support.passiveListener && params.passiveListeners ? {
            passive: true,
            capture: false
          } : false;
          if (!target) return;
          var eventMethod = method === 'on' ? 'addEventListener' : 'removeEventListener';
          if (!support.touch) {
            target[eventMethod](touchEventsDesktop.start, onDragStart, activeListener);
            document[eventMethod](touchEventsDesktop.move, onDragMove, activeListener);
            document[eventMethod](touchEventsDesktop.end, onDragEnd, passiveListener);
          } else {
            target[eventMethod](touchEventsTouch.start, onDragStart, activeListener);
            target[eventMethod](touchEventsTouch.move, onDragMove, activeListener);
            target[eventMethod](touchEventsTouch.end, onDragEnd, passiveListener);
          }
        }
        function enableDraggable() {
          if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
          events('on');
        }
        function disableDraggable() {
          if (!swiper.params.scrollbar.el || !swiper.scrollbar.el) return;
          events('off');
        }
        function init() {
          var scrollbar = swiper.scrollbar,
            $swiperEl = swiper.$el;
          swiper.params.scrollbar = (0, _shared_create_element_if_not_defined_js__WEBPACK_IMPORTED_MODULE_3__["default"])(swiper, swiper.originalParams.scrollbar, swiper.params.scrollbar, {
            el: 'swiper-scrollbar'
          });
          var params = swiper.params.scrollbar;
          if (!params.el) return;
          var $el = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(params.el);
          if (swiper.params.uniqueNavElements && typeof params.el === 'string' && $el.length > 1 && $swiperEl.find(params.el).length === 1) {
            $el = $swiperEl.find(params.el);
          }
          $el.addClass(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass);
          var $dragEl = $el.find(".".concat(swiper.params.scrollbar.dragClass));
          if ($dragEl.length === 0) {
            $dragEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])("<div class=\"".concat(swiper.params.scrollbar.dragClass, "\"></div>"));
            $el.append($dragEl);
          }
          Object.assign(scrollbar, {
            $el: $el,
            el: $el[0],
            $dragEl: $dragEl,
            dragEl: $dragEl[0]
          });
          if (params.draggable) {
            enableDraggable();
          }
          if ($el) {
            $el[swiper.enabled ? 'removeClass' : 'addClass'](swiper.params.scrollbar.lockClass);
          }
        }
        function destroy() {
          var params = swiper.params.scrollbar;
          var $el = swiper.scrollbar.$el;
          if ($el) {
            $el.removeClass(swiper.isHorizontal() ? params.horizontalClass : params.verticalClass);
          }
          disableDraggable();
        }
        on('init', function () {
          if (swiper.params.scrollbar.enabled === false) {
            // eslint-disable-next-line
            disable();
          } else {
            init();
            updateSize();
            setTranslate();
          }
        });
        on('update resize observerUpdate lock unlock', function () {
          updateSize();
        });
        on('setTranslate', function () {
          setTranslate();
        });
        on('setTransition', function (_s, duration) {
          setTransition(duration);
        });
        on('enable disable', function () {
          var $el = swiper.scrollbar.$el;
          if ($el) {
            $el[swiper.enabled ? 'removeClass' : 'addClass'](swiper.params.scrollbar.lockClass);
          }
        });
        on('destroy', function () {
          destroy();
        });
        var enable = function enable() {
          swiper.$el.removeClass(swiper.params.scrollbar.scrollbarDisabledClass);
          if (swiper.scrollbar.$el) {
            swiper.scrollbar.$el.removeClass(swiper.params.scrollbar.scrollbarDisabledClass);
          }
          init();
          updateSize();
          setTranslate();
        };
        var disable = function disable() {
          swiper.$el.addClass(swiper.params.scrollbar.scrollbarDisabledClass);
          if (swiper.scrollbar.$el) {
            swiper.scrollbar.$el.addClass(swiper.params.scrollbar.scrollbarDisabledClass);
          }
          destroy();
        };
        Object.assign(swiper.scrollbar, {
          enable: enable,
          disable: disable,
          updateSize: updateSize,
          setTranslate: setTranslate,
          init: init,
          destroy: destroy
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/thumbs/thumbs.js":
    /*!******************************************************!*\
      !*** ./node_modules/swiper/modules/thumbs/thumbs.js ***!
      \******************************************************/
    /***/
    function node_modulesSwiperModulesThumbsThumbsJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_452121__) {
      __nested_webpack_require_452121__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_452121__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Thumb
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_452121__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_452121__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      function Thumb(_ref27) {
        var swiper = _ref27.swiper,
          extendParams = _ref27.extendParams,
          on = _ref27.on;
        extendParams({
          thumbs: {
            swiper: null,
            multipleActiveThumbs: true,
            autoScrollOffset: 0,
            slideThumbActiveClass: 'swiper-slide-thumb-active',
            thumbsContainerClass: 'swiper-thumbs'
          }
        });
        var initialized = false;
        var swiperCreated = false;
        swiper.thumbs = {
          swiper: null
        };
        function onThumbClick() {
          var thumbsSwiper = swiper.thumbs.swiper;
          if (!thumbsSwiper || thumbsSwiper.destroyed) return;
          var clickedIndex = thumbsSwiper.clickedIndex;
          var clickedSlide = thumbsSwiper.clickedSlide;
          if (clickedSlide && (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(clickedSlide).hasClass(swiper.params.thumbs.slideThumbActiveClass)) return;
          if (typeof clickedIndex === 'undefined' || clickedIndex === null) return;
          var slideToIndex;
          if (thumbsSwiper.params.loop) {
            slideToIndex = parseInt((0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(thumbsSwiper.clickedSlide).attr('data-swiper-slide-index'), 10);
          } else {
            slideToIndex = clickedIndex;
          }
          if (swiper.params.loop) {
            var currentIndex = swiper.activeIndex;
            if (swiper.slides.eq(currentIndex).hasClass(swiper.params.slideDuplicateClass)) {
              swiper.loopFix(); // eslint-disable-next-line

              swiper._clientLeft = swiper.$wrapperEl[0].clientLeft;
              currentIndex = swiper.activeIndex;
            }
            var prevIndex = swiper.slides.eq(currentIndex).prevAll("[data-swiper-slide-index=\"".concat(slideToIndex, "\"]")).eq(0).index();
            var nextIndex = swiper.slides.eq(currentIndex).nextAll("[data-swiper-slide-index=\"".concat(slideToIndex, "\"]")).eq(0).index();
            if (typeof prevIndex === 'undefined') slideToIndex = nextIndex;else if (typeof nextIndex === 'undefined') slideToIndex = prevIndex;else if (nextIndex - currentIndex < currentIndex - prevIndex) slideToIndex = nextIndex;else slideToIndex = prevIndex;
          }
          swiper.slideTo(slideToIndex);
        }
        function init() {
          var thumbsParams = swiper.params.thumbs;
          if (initialized) return false;
          initialized = true;
          var SwiperClass = swiper.constructor;
          if (thumbsParams.swiper instanceof SwiperClass) {
            swiper.thumbs.swiper = thumbsParams.swiper;
            Object.assign(swiper.thumbs.swiper.originalParams, {
              watchSlidesProgress: true,
              slideToClickedSlide: false
            });
            Object.assign(swiper.thumbs.swiper.params, {
              watchSlidesProgress: true,
              slideToClickedSlide: false
            });
          } else if ((0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_0__.isObject)(thumbsParams.swiper)) {
            var thumbsSwiperParams = Object.assign({}, thumbsParams.swiper);
            Object.assign(thumbsSwiperParams, {
              watchSlidesProgress: true,
              slideToClickedSlide: false
            });
            swiper.thumbs.swiper = new SwiperClass(thumbsSwiperParams);
            swiperCreated = true;
          }
          swiper.thumbs.swiper.$el.addClass(swiper.params.thumbs.thumbsContainerClass);
          swiper.thumbs.swiper.on('tap', onThumbClick);
          return true;
        }
        function update(initial) {
          var thumbsSwiper = swiper.thumbs.swiper;
          if (!thumbsSwiper || thumbsSwiper.destroyed) return;
          var slidesPerView = thumbsSwiper.params.slidesPerView === 'auto' ? thumbsSwiper.slidesPerViewDynamic() : thumbsSwiper.params.slidesPerView; // Activate thumbs

          var thumbsToActivate = 1;
          var thumbActiveClass = swiper.params.thumbs.slideThumbActiveClass;
          if (swiper.params.slidesPerView > 1 && !swiper.params.centeredSlides) {
            thumbsToActivate = swiper.params.slidesPerView;
          }
          if (!swiper.params.thumbs.multipleActiveThumbs) {
            thumbsToActivate = 1;
          }
          thumbsToActivate = Math.floor(thumbsToActivate);
          thumbsSwiper.slides.removeClass(thumbActiveClass);
          if (thumbsSwiper.params.loop || thumbsSwiper.params.virtual && thumbsSwiper.params.virtual.enabled) {
            for (var _i77 = 0; _i77 < thumbsToActivate; _i77 += 1) {
              thumbsSwiper.$wrapperEl.children("[data-swiper-slide-index=\"".concat(swiper.realIndex + _i77, "\"]")).addClass(thumbActiveClass);
            }
          } else {
            for (var _i78 = 0; _i78 < thumbsToActivate; _i78 += 1) {
              thumbsSwiper.slides.eq(swiper.realIndex + _i78).addClass(thumbActiveClass);
            }
          }
          var autoScrollOffset = swiper.params.thumbs.autoScrollOffset;
          var useOffset = autoScrollOffset && !thumbsSwiper.params.loop;
          if (swiper.realIndex !== thumbsSwiper.realIndex || useOffset) {
            var currentThumbsIndex = thumbsSwiper.activeIndex;
            var newThumbsIndex;
            var direction;
            if (thumbsSwiper.params.loop) {
              if (thumbsSwiper.slides.eq(currentThumbsIndex).hasClass(thumbsSwiper.params.slideDuplicateClass)) {
                thumbsSwiper.loopFix(); // eslint-disable-next-line

                thumbsSwiper._clientLeft = thumbsSwiper.$wrapperEl[0].clientLeft;
                currentThumbsIndex = thumbsSwiper.activeIndex;
              } // Find actual thumbs index to slide to

              var prevThumbsIndex = thumbsSwiper.slides.eq(currentThumbsIndex).prevAll("[data-swiper-slide-index=\"".concat(swiper.realIndex, "\"]")).eq(0).index();
              var nextThumbsIndex = thumbsSwiper.slides.eq(currentThumbsIndex).nextAll("[data-swiper-slide-index=\"".concat(swiper.realIndex, "\"]")).eq(0).index();
              if (typeof prevThumbsIndex === 'undefined') {
                newThumbsIndex = nextThumbsIndex;
              } else if (typeof nextThumbsIndex === 'undefined') {
                newThumbsIndex = prevThumbsIndex;
              } else if (nextThumbsIndex - currentThumbsIndex === currentThumbsIndex - prevThumbsIndex) {
                newThumbsIndex = thumbsSwiper.params.slidesPerGroup > 1 ? nextThumbsIndex : currentThumbsIndex;
              } else if (nextThumbsIndex - currentThumbsIndex < currentThumbsIndex - prevThumbsIndex) {
                newThumbsIndex = nextThumbsIndex;
              } else {
                newThumbsIndex = prevThumbsIndex;
              }
              direction = swiper.activeIndex > swiper.previousIndex ? 'next' : 'prev';
            } else {
              newThumbsIndex = swiper.realIndex;
              direction = newThumbsIndex > swiper.previousIndex ? 'next' : 'prev';
            }
            if (useOffset) {
              newThumbsIndex += direction === 'next' ? autoScrollOffset : -1 * autoScrollOffset;
            }
            if (thumbsSwiper.visibleSlidesIndexes && thumbsSwiper.visibleSlidesIndexes.indexOf(newThumbsIndex) < 0) {
              if (thumbsSwiper.params.centeredSlides) {
                if (newThumbsIndex > currentThumbsIndex) {
                  newThumbsIndex = newThumbsIndex - Math.floor(slidesPerView / 2) + 1;
                } else {
                  newThumbsIndex = newThumbsIndex + Math.floor(slidesPerView / 2) - 1;
                }
              } else if (newThumbsIndex > currentThumbsIndex && thumbsSwiper.params.slidesPerGroup === 1) {// newThumbsIndex = newThumbsIndex - slidesPerView + 1;
              }
              thumbsSwiper.slideTo(newThumbsIndex, initial ? 0 : undefined);
            }
          }
        }
        on('beforeInit', function () {
          var thumbs = swiper.params.thumbs;
          if (!thumbs || !thumbs.swiper) return;
          init();
          update(true);
        });
        on('slideChange update resize observerUpdate', function () {
          update();
        });
        on('setTransition', function (_s, duration) {
          var thumbsSwiper = swiper.thumbs.swiper;
          if (!thumbsSwiper || thumbsSwiper.destroyed) return;
          thumbsSwiper.setTransition(duration);
        });
        on('beforeDestroy', function () {
          var thumbsSwiper = swiper.thumbs.swiper;
          if (!thumbsSwiper || thumbsSwiper.destroyed) return;
          if (swiperCreated) {
            thumbsSwiper.destroy();
          }
        });
        Object.assign(swiper.thumbs, {
          init: init,
          update: update
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/virtual/virtual.js":
    /*!********************************************************!*\
      !*** ./node_modules/swiper/modules/virtual/virtual.js ***!
      \********************************************************/
    /***/
    function node_modulesSwiperModulesVirtualVirtualJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_461922__) {
      __nested_webpack_require_461922__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_461922__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Virtual
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_461922__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_461922__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function Virtual(_ref28) {
        var swiper = _ref28.swiper,
          extendParams = _ref28.extendParams,
          on = _ref28.on,
          emit = _ref28.emit;
        extendParams({
          virtual: {
            enabled: false,
            slides: [],
            cache: true,
            renderSlide: null,
            renderExternal: null,
            renderExternalUpdate: true,
            addSlidesBefore: 0,
            addSlidesAfter: 0
          }
        });
        var cssModeTimeout;
        swiper.virtual = {
          cache: {},
          from: undefined,
          to: undefined,
          slides: [],
          offset: 0,
          slidesGrid: []
        };
        function renderSlide(slide, index) {
          var params = swiper.params.virtual;
          if (params.cache && swiper.virtual.cache[index]) {
            return swiper.virtual.cache[index];
          }
          var $slideEl = params.renderSlide ? (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])(params.renderSlide.call(swiper, slide, index)) : (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])("<div class=\"".concat(swiper.params.slideClass, "\" data-swiper-slide-index=\"").concat(index, "\">").concat(slide, "</div>"));
          if (!$slideEl.attr('data-swiper-slide-index')) $slideEl.attr('data-swiper-slide-index', index);
          if (params.cache) swiper.virtual.cache[index] = $slideEl;
          return $slideEl;
        }
        function update(force) {
          var _swiper$params4 = swiper.params,
            slidesPerView = _swiper$params4.slidesPerView,
            slidesPerGroup = _swiper$params4.slidesPerGroup,
            centeredSlides = _swiper$params4.centeredSlides;
          var _swiper$params$virtua = swiper.params.virtual,
            addSlidesBefore = _swiper$params$virtua.addSlidesBefore,
            addSlidesAfter = _swiper$params$virtua.addSlidesAfter;
          var _swiper$virtual = swiper.virtual,
            previousFrom = _swiper$virtual.from,
            previousTo = _swiper$virtual.to,
            slides = _swiper$virtual.slides,
            previousSlidesGrid = _swiper$virtual.slidesGrid,
            previousOffset = _swiper$virtual.offset;
          if (!swiper.params.cssMode) {
            swiper.updateActiveIndex();
          }
          var activeIndex = swiper.activeIndex || 0;
          var offsetProp;
          if (swiper.rtlTranslate) offsetProp = 'right';else offsetProp = swiper.isHorizontal() ? 'left' : 'top';
          var slidesAfter;
          var slidesBefore;
          if (centeredSlides) {
            slidesAfter = Math.floor(slidesPerView / 2) + slidesPerGroup + addSlidesAfter;
            slidesBefore = Math.floor(slidesPerView / 2) + slidesPerGroup + addSlidesBefore;
          } else {
            slidesAfter = slidesPerView + (slidesPerGroup - 1) + addSlidesAfter;
            slidesBefore = slidesPerGroup + addSlidesBefore;
          }
          var from = Math.max((activeIndex || 0) - slidesBefore, 0);
          var to = Math.min((activeIndex || 0) + slidesAfter, slides.length - 1);
          var offset = (swiper.slidesGrid[from] || 0) - (swiper.slidesGrid[0] || 0);
          Object.assign(swiper.virtual, {
            from: from,
            to: to,
            offset: offset,
            slidesGrid: swiper.slidesGrid
          });
          function onRendered() {
            swiper.updateSlides();
            swiper.updateProgress();
            swiper.updateSlidesClasses();
            if (swiper.lazy && swiper.params.lazy.enabled) {
              swiper.lazy.load();
            }
            emit('virtualUpdate');
          }
          if (previousFrom === from && previousTo === to && !force) {
            if (swiper.slidesGrid !== previousSlidesGrid && offset !== previousOffset) {
              swiper.slides.css(offsetProp, "".concat(offset, "px"));
            }
            swiper.updateProgress();
            emit('virtualUpdate');
            return;
          }
          if (swiper.params.virtual.renderExternal) {
            swiper.params.virtual.renderExternal.call(swiper, {
              offset: offset,
              from: from,
              to: to,
              slides: function getSlides() {
                var slidesToRender = [];
                for (var _i79 = from; _i79 <= to; _i79 += 1) {
                  slidesToRender.push(slides[_i79]);
                }
                return slidesToRender;
              }()
            });
            if (swiper.params.virtual.renderExternalUpdate) {
              onRendered();
            } else {
              emit('virtualUpdate');
            }
            return;
          }
          var prependIndexes = [];
          var appendIndexes = [];
          if (force) {
            swiper.$wrapperEl.find(".".concat(swiper.params.slideClass)).remove();
          } else {
            for (var _i80 = previousFrom; _i80 <= previousTo; _i80 += 1) {
              if (_i80 < from || _i80 > to) {
                swiper.$wrapperEl.find(".".concat(swiper.params.slideClass, "[data-swiper-slide-index=\"").concat(_i80, "\"]")).remove();
              }
            }
          }
          for (var _i81 = 0; _i81 < slides.length; _i81 += 1) {
            if (_i81 >= from && _i81 <= to) {
              if (typeof previousTo === 'undefined' || force) {
                appendIndexes.push(_i81);
              } else {
                if (_i81 > previousTo) appendIndexes.push(_i81);
                if (_i81 < previousFrom) prependIndexes.push(_i81);
              }
            }
          }
          appendIndexes.forEach(function (index) {
            swiper.$wrapperEl.append(renderSlide(slides[index], index));
          });
          prependIndexes.sort(function (a, b) {
            return b - a;
          }).forEach(function (index) {
            swiper.$wrapperEl.prepend(renderSlide(slides[index], index));
          });
          swiper.$wrapperEl.children('.swiper-slide').css(offsetProp, "".concat(offset, "px"));
          onRendered();
        }
        function appendSlide(slides) {
          if (_typeof(slides) === 'object' && 'length' in slides) {
            for (var _i82 = 0; _i82 < slides.length; _i82 += 1) {
              if (slides[_i82]) swiper.virtual.slides.push(slides[_i82]);
            }
          } else {
            swiper.virtual.slides.push(slides);
          }
          update(true);
        }
        function prependSlide(slides) {
          var activeIndex = swiper.activeIndex;
          var newActiveIndex = activeIndex + 1;
          var numberOfNewSlides = 1;
          if (Array.isArray(slides)) {
            for (var _i83 = 0; _i83 < slides.length; _i83 += 1) {
              if (slides[_i83]) swiper.virtual.slides.unshift(slides[_i83]);
            }
            newActiveIndex = activeIndex + slides.length;
            numberOfNewSlides = slides.length;
          } else {
            swiper.virtual.slides.unshift(slides);
          }
          if (swiper.params.virtual.cache) {
            var cache = swiper.virtual.cache;
            var newCache = {};
            Object.keys(cache).forEach(function (cachedIndex) {
              var $cachedEl = cache[cachedIndex];
              var cachedElIndex = $cachedEl.attr('data-swiper-slide-index');
              if (cachedElIndex) {
                $cachedEl.attr('data-swiper-slide-index', parseInt(cachedElIndex, 10) + numberOfNewSlides);
              }
              newCache[parseInt(cachedIndex, 10) + numberOfNewSlides] = $cachedEl;
            });
            swiper.virtual.cache = newCache;
          }
          update(true);
          swiper.slideTo(newActiveIndex, 0);
        }
        function removeSlide(slidesIndexes) {
          if (typeof slidesIndexes === 'undefined' || slidesIndexes === null) return;
          var activeIndex = swiper.activeIndex;
          if (Array.isArray(slidesIndexes)) {
            for (var _i84 = slidesIndexes.length - 1; _i84 >= 0; _i84 -= 1) {
              swiper.virtual.slides.splice(slidesIndexes[_i84], 1);
              if (swiper.params.virtual.cache) {
                delete swiper.virtual.cache[slidesIndexes[_i84]];
              }
              if (slidesIndexes[_i84] < activeIndex) activeIndex -= 1;
              activeIndex = Math.max(activeIndex, 0);
            }
          } else {
            swiper.virtual.slides.splice(slidesIndexes, 1);
            if (swiper.params.virtual.cache) {
              delete swiper.virtual.cache[slidesIndexes];
            }
            if (slidesIndexes < activeIndex) activeIndex -= 1;
            activeIndex = Math.max(activeIndex, 0);
          }
          update(true);
          swiper.slideTo(activeIndex, 0);
        }
        function removeAllSlides() {
          swiper.virtual.slides = [];
          if (swiper.params.virtual.cache) {
            swiper.virtual.cache = {};
          }
          update(true);
          swiper.slideTo(0, 0);
        }
        on('beforeInit', function () {
          if (!swiper.params.virtual.enabled) return;
          swiper.virtual.slides = swiper.params.virtual.slides;
          swiper.classNames.push("".concat(swiper.params.containerModifierClass, "virtual"));
          swiper.params.watchSlidesProgress = true;
          swiper.originalParams.watchSlidesProgress = true;
          if (!swiper.params.initialSlide) {
            update();
          }
        });
        on('setTranslate', function () {
          if (!swiper.params.virtual.enabled) return;
          if (swiper.params.cssMode && !swiper._immediateVirtual) {
            clearTimeout(cssModeTimeout);
            cssModeTimeout = setTimeout(function () {
              update();
            }, 100);
          } else {
            update();
          }
        });
        on('init update resize', function () {
          if (!swiper.params.virtual.enabled) return;
          if (swiper.params.cssMode) {
            (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_1__.setCSSProperty)(swiper.wrapperEl, '--swiper-virtual-size', "".concat(swiper.virtualSize, "px"));
          }
        });
        Object.assign(swiper.virtual, {
          appendSlide: appendSlide,
          prependSlide: prependSlide,
          removeSlide: removeSlide,
          removeAllSlides: removeAllSlides,
          update: update
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/modules/zoom/zoom.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/modules/zoom/zoom.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperModulesZoomZoomJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_473321__) {
      __nested_webpack_require_473321__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_473321__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */Zoom
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_473321__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_473321__( /*! ../../shared/dom.js */"./node_modules/swiper/shared/dom.js");
      /* harmony import */
      var _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_473321__( /*! ../../shared/utils.js */"./node_modules/swiper/shared/utils.js");
      function Zoom(_ref29) {
        var swiper = _ref29.swiper,
          extendParams = _ref29.extendParams,
          on = _ref29.on,
          emit = _ref29.emit;
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        extendParams({
          zoom: {
            enabled: false,
            maxRatio: 3,
            minRatio: 1,
            toggle: true,
            containerClass: 'swiper-zoom-container',
            zoomedSlideClass: 'swiper-slide-zoomed'
          }
        });
        swiper.zoom = {
          enabled: false
        };
        var currentScale = 1;
        var isScaling = false;
        var gesturesEnabled;
        var fakeGestureTouched;
        var fakeGestureMoved;
        var gesture = {
          $slideEl: undefined,
          slideWidth: undefined,
          slideHeight: undefined,
          $imageEl: undefined,
          $imageWrapEl: undefined,
          maxRatio: 3
        };
        var image = {
          isTouched: undefined,
          isMoved: undefined,
          currentX: undefined,
          currentY: undefined,
          minX: undefined,
          minY: undefined,
          maxX: undefined,
          maxY: undefined,
          width: undefined,
          height: undefined,
          startX: undefined,
          startY: undefined,
          touchesStart: {},
          touchesCurrent: {}
        };
        var velocity = {
          x: undefined,
          y: undefined,
          prevPositionX: undefined,
          prevPositionY: undefined,
          prevTime: undefined
        };
        var scale = 1;
        Object.defineProperty(swiper.zoom, 'scale', {
          get: function get() {
            return scale;
          },
          set: function set(value) {
            if (scale !== value) {
              var imageEl = gesture.$imageEl ? gesture.$imageEl[0] : undefined;
              var slideEl = gesture.$slideEl ? gesture.$slideEl[0] : undefined;
              emit('zoomChange', value, imageEl, slideEl);
            }
            scale = value;
          }
        });
        function getDistanceBetweenTouches(e) {
          if (e.targetTouches.length < 2) return 1;
          var x1 = e.targetTouches[0].pageX;
          var y1 = e.targetTouches[0].pageY;
          var x2 = e.targetTouches[1].pageX;
          var y2 = e.targetTouches[1].pageY;
          var distance = Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
          return distance;
        } // Events

        function onGestureStart(e) {
          var support = swiper.support;
          var params = swiper.params.zoom;
          fakeGestureTouched = false;
          fakeGestureMoved = false;
          if (!support.gestures) {
            if (e.type !== 'touchstart' || e.type === 'touchstart' && e.targetTouches.length < 2) {
              return;
            }
            fakeGestureTouched = true;
            gesture.scaleStart = getDistanceBetweenTouches(e);
          }
          if (!gesture.$slideEl || !gesture.$slideEl.length) {
            gesture.$slideEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(e.target).closest(".".concat(swiper.params.slideClass));
            if (gesture.$slideEl.length === 0) gesture.$slideEl = swiper.slides.eq(swiper.activeIndex);
            gesture.$imageEl = gesture.$slideEl.find(".".concat(params.containerClass)).eq(0).find('picture, img, svg, canvas, .swiper-zoom-target').eq(0);
            gesture.$imageWrapEl = gesture.$imageEl.parent(".".concat(params.containerClass));
            gesture.maxRatio = gesture.$imageWrapEl.attr('data-swiper-zoom') || params.maxRatio;
            if (gesture.$imageWrapEl.length === 0) {
              gesture.$imageEl = undefined;
              return;
            }
          }
          if (gesture.$imageEl) {
            gesture.$imageEl.transition(0);
          }
          isScaling = true;
        }
        function onGestureChange(e) {
          var support = swiper.support;
          var params = swiper.params.zoom;
          var zoom = swiper.zoom;
          if (!support.gestures) {
            if (e.type !== 'touchmove' || e.type === 'touchmove' && e.targetTouches.length < 2) {
              return;
            }
            fakeGestureMoved = true;
            gesture.scaleMove = getDistanceBetweenTouches(e);
          }
          if (!gesture.$imageEl || gesture.$imageEl.length === 0) {
            if (e.type === 'gesturechange') onGestureStart(e);
            return;
          }
          if (support.gestures) {
            zoom.scale = e.scale * currentScale;
          } else {
            zoom.scale = gesture.scaleMove / gesture.scaleStart * currentScale;
          }
          if (zoom.scale > gesture.maxRatio) {
            zoom.scale = gesture.maxRatio - 1 + Math.pow(zoom.scale - gesture.maxRatio + 1, 0.5);
          }
          if (zoom.scale < params.minRatio) {
            zoom.scale = params.minRatio + 1 - Math.pow(params.minRatio - zoom.scale + 1, 0.5);
          }
          gesture.$imageEl.transform("translate3d(0,0,0) scale(".concat(zoom.scale, ")"));
        }
        function onGestureEnd(e) {
          var device = swiper.device;
          var support = swiper.support;
          var params = swiper.params.zoom;
          var zoom = swiper.zoom;
          if (!support.gestures) {
            if (!fakeGestureTouched || !fakeGestureMoved) {
              return;
            }
            if (e.type !== 'touchend' || e.type === 'touchend' && e.changedTouches.length < 2 && !device.android) {
              return;
            }
            fakeGestureTouched = false;
            fakeGestureMoved = false;
          }
          if (!gesture.$imageEl || gesture.$imageEl.length === 0) return;
          zoom.scale = Math.max(Math.min(zoom.scale, gesture.maxRatio), params.minRatio);
          gesture.$imageEl.transition(swiper.params.speed).transform("translate3d(0,0,0) scale(".concat(zoom.scale, ")"));
          currentScale = zoom.scale;
          isScaling = false;
          if (zoom.scale === 1) gesture.$slideEl = undefined;
        }
        function onTouchStart(e) {
          var device = swiper.device;
          if (!gesture.$imageEl || gesture.$imageEl.length === 0) return;
          if (image.isTouched) return;
          if (device.android && e.cancelable) e.preventDefault();
          image.isTouched = true;
          image.touchesStart.x = e.type === 'touchstart' ? e.targetTouches[0].pageX : e.pageX;
          image.touchesStart.y = e.type === 'touchstart' ? e.targetTouches[0].pageY : e.pageY;
        }
        function onTouchMove(e) {
          var zoom = swiper.zoom;
          if (!gesture.$imageEl || gesture.$imageEl.length === 0) return;
          swiper.allowClick = false;
          if (!image.isTouched || !gesture.$slideEl) return;
          if (!image.isMoved) {
            image.width = gesture.$imageEl[0].offsetWidth;
            image.height = gesture.$imageEl[0].offsetHeight;
            image.startX = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.getTranslate)(gesture.$imageWrapEl[0], 'x') || 0;
            image.startY = (0, _shared_utils_js__WEBPACK_IMPORTED_MODULE_2__.getTranslate)(gesture.$imageWrapEl[0], 'y') || 0;
            gesture.slideWidth = gesture.$slideEl[0].offsetWidth;
            gesture.slideHeight = gesture.$slideEl[0].offsetHeight;
            gesture.$imageWrapEl.transition(0);
          } // Define if we need image drag

          var scaledWidth = image.width * zoom.scale;
          var scaledHeight = image.height * zoom.scale;
          if (scaledWidth < gesture.slideWidth && scaledHeight < gesture.slideHeight) return;
          image.minX = Math.min(gesture.slideWidth / 2 - scaledWidth / 2, 0);
          image.maxX = -image.minX;
          image.minY = Math.min(gesture.slideHeight / 2 - scaledHeight / 2, 0);
          image.maxY = -image.minY;
          image.touchesCurrent.x = e.type === 'touchmove' ? e.targetTouches[0].pageX : e.pageX;
          image.touchesCurrent.y = e.type === 'touchmove' ? e.targetTouches[0].pageY : e.pageY;
          if (!image.isMoved && !isScaling) {
            if (swiper.isHorizontal() && (Math.floor(image.minX) === Math.floor(image.startX) && image.touchesCurrent.x < image.touchesStart.x || Math.floor(image.maxX) === Math.floor(image.startX) && image.touchesCurrent.x > image.touchesStart.x)) {
              image.isTouched = false;
              return;
            }
            if (!swiper.isHorizontal() && (Math.floor(image.minY) === Math.floor(image.startY) && image.touchesCurrent.y < image.touchesStart.y || Math.floor(image.maxY) === Math.floor(image.startY) && image.touchesCurrent.y > image.touchesStart.y)) {
              image.isTouched = false;
              return;
            }
          }
          if (e.cancelable) {
            e.preventDefault();
          }
          e.stopPropagation();
          image.isMoved = true;
          image.currentX = image.touchesCurrent.x - image.touchesStart.x + image.startX;
          image.currentY = image.touchesCurrent.y - image.touchesStart.y + image.startY;
          if (image.currentX < image.minX) {
            image.currentX = image.minX + 1 - Math.pow(image.minX - image.currentX + 1, 0.8);
          }
          if (image.currentX > image.maxX) {
            image.currentX = image.maxX - 1 + Math.pow(image.currentX - image.maxX + 1, 0.8);
          }
          if (image.currentY < image.minY) {
            image.currentY = image.minY + 1 - Math.pow(image.minY - image.currentY + 1, 0.8);
          }
          if (image.currentY > image.maxY) {
            image.currentY = image.maxY - 1 + Math.pow(image.currentY - image.maxY + 1, 0.8);
          } // Velocity

          if (!velocity.prevPositionX) velocity.prevPositionX = image.touchesCurrent.x;
          if (!velocity.prevPositionY) velocity.prevPositionY = image.touchesCurrent.y;
          if (!velocity.prevTime) velocity.prevTime = Date.now();
          velocity.x = (image.touchesCurrent.x - velocity.prevPositionX) / (Date.now() - velocity.prevTime) / 2;
          velocity.y = (image.touchesCurrent.y - velocity.prevPositionY) / (Date.now() - velocity.prevTime) / 2;
          if (Math.abs(image.touchesCurrent.x - velocity.prevPositionX) < 2) velocity.x = 0;
          if (Math.abs(image.touchesCurrent.y - velocity.prevPositionY) < 2) velocity.y = 0;
          velocity.prevPositionX = image.touchesCurrent.x;
          velocity.prevPositionY = image.touchesCurrent.y;
          velocity.prevTime = Date.now();
          gesture.$imageWrapEl.transform("translate3d(".concat(image.currentX, "px, ").concat(image.currentY, "px,0)"));
        }
        function onTouchEnd() {
          var zoom = swiper.zoom;
          if (!gesture.$imageEl || gesture.$imageEl.length === 0) return;
          if (!image.isTouched || !image.isMoved) {
            image.isTouched = false;
            image.isMoved = false;
            return;
          }
          image.isTouched = false;
          image.isMoved = false;
          var momentumDurationX = 300;
          var momentumDurationY = 300;
          var momentumDistanceX = velocity.x * momentumDurationX;
          var newPositionX = image.currentX + momentumDistanceX;
          var momentumDistanceY = velocity.y * momentumDurationY;
          var newPositionY = image.currentY + momentumDistanceY; // Fix duration

          if (velocity.x !== 0) momentumDurationX = Math.abs((newPositionX - image.currentX) / velocity.x);
          if (velocity.y !== 0) momentumDurationY = Math.abs((newPositionY - image.currentY) / velocity.y);
          var momentumDuration = Math.max(momentumDurationX, momentumDurationY);
          image.currentX = newPositionX;
          image.currentY = newPositionY; // Define if we need image drag

          var scaledWidth = image.width * zoom.scale;
          var scaledHeight = image.height * zoom.scale;
          image.minX = Math.min(gesture.slideWidth / 2 - scaledWidth / 2, 0);
          image.maxX = -image.minX;
          image.minY = Math.min(gesture.slideHeight / 2 - scaledHeight / 2, 0);
          image.maxY = -image.minY;
          image.currentX = Math.max(Math.min(image.currentX, image.maxX), image.minX);
          image.currentY = Math.max(Math.min(image.currentY, image.maxY), image.minY);
          gesture.$imageWrapEl.transition(momentumDuration).transform("translate3d(".concat(image.currentX, "px, ").concat(image.currentY, "px,0)"));
        }
        function onTransitionEnd() {
          var zoom = swiper.zoom;
          if (gesture.$slideEl && swiper.previousIndex !== swiper.activeIndex) {
            if (gesture.$imageEl) {
              gesture.$imageEl.transform('translate3d(0,0,0) scale(1)');
            }
            if (gesture.$imageWrapEl) {
              gesture.$imageWrapEl.transform('translate3d(0,0,0)');
            }
            zoom.scale = 1;
            currentScale = 1;
            gesture.$slideEl = undefined;
            gesture.$imageEl = undefined;
            gesture.$imageWrapEl = undefined;
          }
        }
        function zoomIn(e) {
          var zoom = swiper.zoom;
          var params = swiper.params.zoom;
          if (!gesture.$slideEl) {
            if (e && e.target) {
              gesture.$slideEl = (0, _shared_dom_js__WEBPACK_IMPORTED_MODULE_1__["default"])(e.target).closest(".".concat(swiper.params.slideClass));
            }
            if (!gesture.$slideEl) {
              if (swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual) {
                gesture.$slideEl = swiper.$wrapperEl.children(".".concat(swiper.params.slideActiveClass));
              } else {
                gesture.$slideEl = swiper.slides.eq(swiper.activeIndex);
              }
            }
            gesture.$imageEl = gesture.$slideEl.find(".".concat(params.containerClass)).eq(0).find('picture, img, svg, canvas, .swiper-zoom-target').eq(0);
            gesture.$imageWrapEl = gesture.$imageEl.parent(".".concat(params.containerClass));
          }
          if (!gesture.$imageEl || gesture.$imageEl.length === 0 || !gesture.$imageWrapEl || gesture.$imageWrapEl.length === 0) return;
          if (swiper.params.cssMode) {
            swiper.wrapperEl.style.overflow = 'hidden';
            swiper.wrapperEl.style.touchAction = 'none';
          }
          gesture.$slideEl.addClass("".concat(params.zoomedSlideClass));
          var touchX;
          var touchY;
          var offsetX;
          var offsetY;
          var diffX;
          var diffY;
          var translateX;
          var translateY;
          var imageWidth;
          var imageHeight;
          var scaledWidth;
          var scaledHeight;
          var translateMinX;
          var translateMinY;
          var translateMaxX;
          var translateMaxY;
          var slideWidth;
          var slideHeight;
          if (typeof image.touchesStart.x === 'undefined' && e) {
            touchX = e.type === 'touchend' ? e.changedTouches[0].pageX : e.pageX;
            touchY = e.type === 'touchend' ? e.changedTouches[0].pageY : e.pageY;
          } else {
            touchX = image.touchesStart.x;
            touchY = image.touchesStart.y;
          }
          zoom.scale = gesture.$imageWrapEl.attr('data-swiper-zoom') || params.maxRatio;
          currentScale = gesture.$imageWrapEl.attr('data-swiper-zoom') || params.maxRatio;
          if (e) {
            slideWidth = gesture.$slideEl[0].offsetWidth;
            slideHeight = gesture.$slideEl[0].offsetHeight;
            offsetX = gesture.$slideEl.offset().left + window.scrollX;
            offsetY = gesture.$slideEl.offset().top + window.scrollY;
            diffX = offsetX + slideWidth / 2 - touchX;
            diffY = offsetY + slideHeight / 2 - touchY;
            imageWidth = gesture.$imageEl[0].offsetWidth;
            imageHeight = gesture.$imageEl[0].offsetHeight;
            scaledWidth = imageWidth * zoom.scale;
            scaledHeight = imageHeight * zoom.scale;
            translateMinX = Math.min(slideWidth / 2 - scaledWidth / 2, 0);
            translateMinY = Math.min(slideHeight / 2 - scaledHeight / 2, 0);
            translateMaxX = -translateMinX;
            translateMaxY = -translateMinY;
            translateX = diffX * zoom.scale;
            translateY = diffY * zoom.scale;
            if (translateX < translateMinX) {
              translateX = translateMinX;
            }
            if (translateX > translateMaxX) {
              translateX = translateMaxX;
            }
            if (translateY < translateMinY) {
              translateY = translateMinY;
            }
            if (translateY > translateMaxY) {
              translateY = translateMaxY;
            }
          } else {
            translateX = 0;
            translateY = 0;
          }
          gesture.$imageWrapEl.transition(300).transform("translate3d(".concat(translateX, "px, ").concat(translateY, "px,0)"));
          gesture.$imageEl.transition(300).transform("translate3d(0,0,0) scale(".concat(zoom.scale, ")"));
        }
        function zoomOut() {
          var zoom = swiper.zoom;
          var params = swiper.params.zoom;
          if (!gesture.$slideEl) {
            if (swiper.params.virtual && swiper.params.virtual.enabled && swiper.virtual) {
              gesture.$slideEl = swiper.$wrapperEl.children(".".concat(swiper.params.slideActiveClass));
            } else {
              gesture.$slideEl = swiper.slides.eq(swiper.activeIndex);
            }
            gesture.$imageEl = gesture.$slideEl.find(".".concat(params.containerClass)).eq(0).find('picture, img, svg, canvas, .swiper-zoom-target').eq(0);
            gesture.$imageWrapEl = gesture.$imageEl.parent(".".concat(params.containerClass));
          }
          if (!gesture.$imageEl || gesture.$imageEl.length === 0 || !gesture.$imageWrapEl || gesture.$imageWrapEl.length === 0) return;
          if (swiper.params.cssMode) {
            swiper.wrapperEl.style.overflow = '';
            swiper.wrapperEl.style.touchAction = '';
          }
          zoom.scale = 1;
          currentScale = 1;
          gesture.$imageWrapEl.transition(300).transform('translate3d(0,0,0)');
          gesture.$imageEl.transition(300).transform('translate3d(0,0,0) scale(1)');
          gesture.$slideEl.removeClass("".concat(params.zoomedSlideClass));
          gesture.$slideEl = undefined;
        } // Toggle Zoom

        function zoomToggle(e) {
          var zoom = swiper.zoom;
          if (zoom.scale && zoom.scale !== 1) {
            // Zoom Out
            zoomOut();
          } else {
            // Zoom In
            zoomIn(e);
          }
        }
        function getListeners() {
          var support = swiper.support;
          var passiveListener = swiper.touchEvents.start === 'touchstart' && support.passiveListener && swiper.params.passiveListeners ? {
            passive: true,
            capture: false
          } : false;
          var activeListenerWithCapture = support.passiveListener ? {
            passive: false,
            capture: true
          } : true;
          return {
            passiveListener: passiveListener,
            activeListenerWithCapture: activeListenerWithCapture
          };
        }
        function getSlideSelector() {
          return ".".concat(swiper.params.slideClass);
        }
        function toggleGestures(method) {
          var _getListeners = getListeners(),
            passiveListener = _getListeners.passiveListener;
          var slideSelector = getSlideSelector();
          swiper.$wrapperEl[method]('gesturestart', slideSelector, onGestureStart, passiveListener);
          swiper.$wrapperEl[method]('gesturechange', slideSelector, onGestureChange, passiveListener);
          swiper.$wrapperEl[method]('gestureend', slideSelector, onGestureEnd, passiveListener);
        }
        function enableGestures() {
          if (gesturesEnabled) return;
          gesturesEnabled = true;
          toggleGestures('on');
        }
        function disableGestures() {
          if (!gesturesEnabled) return;
          gesturesEnabled = false;
          toggleGestures('off');
        } // Attach/Detach Events

        function enable() {
          var zoom = swiper.zoom;
          if (zoom.enabled) return;
          zoom.enabled = true;
          var support = swiper.support;
          var _getListeners2 = getListeners(),
            passiveListener = _getListeners2.passiveListener,
            activeListenerWithCapture = _getListeners2.activeListenerWithCapture;
          var slideSelector = getSlideSelector(); // Scale image

          if (support.gestures) {
            swiper.$wrapperEl.on(swiper.touchEvents.start, enableGestures, passiveListener);
            swiper.$wrapperEl.on(swiper.touchEvents.end, disableGestures, passiveListener);
          } else if (swiper.touchEvents.start === 'touchstart') {
            swiper.$wrapperEl.on(swiper.touchEvents.start, slideSelector, onGestureStart, passiveListener);
            swiper.$wrapperEl.on(swiper.touchEvents.move, slideSelector, onGestureChange, activeListenerWithCapture);
            swiper.$wrapperEl.on(swiper.touchEvents.end, slideSelector, onGestureEnd, passiveListener);
            if (swiper.touchEvents.cancel) {
              swiper.$wrapperEl.on(swiper.touchEvents.cancel, slideSelector, onGestureEnd, passiveListener);
            }
          } // Move image

          swiper.$wrapperEl.on(swiper.touchEvents.move, ".".concat(swiper.params.zoom.containerClass), onTouchMove, activeListenerWithCapture);
        }
        function disable() {
          var zoom = swiper.zoom;
          if (!zoom.enabled) return;
          var support = swiper.support;
          zoom.enabled = false;
          var _getListeners3 = getListeners(),
            passiveListener = _getListeners3.passiveListener,
            activeListenerWithCapture = _getListeners3.activeListenerWithCapture;
          var slideSelector = getSlideSelector(); // Scale image

          if (support.gestures) {
            swiper.$wrapperEl.off(swiper.touchEvents.start, enableGestures, passiveListener);
            swiper.$wrapperEl.off(swiper.touchEvents.end, disableGestures, passiveListener);
          } else if (swiper.touchEvents.start === 'touchstart') {
            swiper.$wrapperEl.off(swiper.touchEvents.start, slideSelector, onGestureStart, passiveListener);
            swiper.$wrapperEl.off(swiper.touchEvents.move, slideSelector, onGestureChange, activeListenerWithCapture);
            swiper.$wrapperEl.off(swiper.touchEvents.end, slideSelector, onGestureEnd, passiveListener);
            if (swiper.touchEvents.cancel) {
              swiper.$wrapperEl.off(swiper.touchEvents.cancel, slideSelector, onGestureEnd, passiveListener);
            }
          } // Move image

          swiper.$wrapperEl.off(swiper.touchEvents.move, ".".concat(swiper.params.zoom.containerClass), onTouchMove, activeListenerWithCapture);
        }
        on('init', function () {
          if (swiper.params.zoom.enabled) {
            enable();
          }
        });
        on('destroy', function () {
          disable();
        });
        on('touchStart', function (_s, e) {
          if (!swiper.zoom.enabled) return;
          onTouchStart(e);
        });
        on('touchEnd', function (_s, e) {
          if (!swiper.zoom.enabled) return;
          onTouchEnd(e);
        });
        on('doubleTap', function (_s, e) {
          if (!swiper.animating && swiper.params.zoom.enabled && swiper.zoom.enabled && swiper.params.zoom.toggle) {
            zoomToggle(e);
          }
        });
        on('transitionEnd', function () {
          if (swiper.zoom.enabled && swiper.params.zoom.enabled) {
            onTransitionEnd();
          }
        });
        on('slideChange', function () {
          if (swiper.zoom.enabled && swiper.params.zoom.enabled && swiper.params.cssMode) {
            onTransitionEnd();
          }
        });
        Object.assign(swiper.zoom, {
          enable: enable,
          disable: disable,
          "in": zoomIn,
          out: zoomOut,
          toggle: zoomToggle
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/classes-to-selector.js":
    /*!***********************************************************!*\
      !*** ./node_modules/swiper/shared/classes-to-selector.js ***!
      \***********************************************************/
    /***/
    function node_modulesSwiperSharedClassesToSelectorJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_498770__) {
      __nested_webpack_require_498770__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_498770__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */classesToSelector
          );
        }
        /* harmony export */
      });
      function classesToSelector() {
        var classes = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : '';
        return ".".concat(classes.trim().replace(/([\.:!\/])/g, '\\$1') // eslint-disable-line
        .replace(/ /g, '.'));
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/create-element-if-not-defined.js":
    /*!*********************************************************************!*\
      !*** ./node_modules/swiper/shared/create-element-if-not-defined.js ***!
      \*********************************************************************/
    /***/
    function node_modulesSwiperSharedCreateElementIfNotDefinedJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_499823__) {
      __nested_webpack_require_499823__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_499823__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */createElementIfNotDefined
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_499823__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      function createElementIfNotDefined(swiper, originalParams, params, checkProps) {
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        if (swiper.params.createElements) {
          Object.keys(checkProps).forEach(function (key) {
            if (!params[key] && params.auto === true) {
              var element = swiper.$el.children(".".concat(checkProps[key]))[0];
              if (!element) {
                element = document.createElement('div');
                element.className = checkProps[key];
                swiper.$el.append(element);
              }
              params[key] = element;
              originalParams[key] = element;
            }
          });
        }
        return params;
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/create-shadow.js":
    /*!*****************************************************!*\
      !*** ./node_modules/swiper/shared/create-shadow.js ***!
      \*****************************************************/
    /***/
    function node_modulesSwiperSharedCreateShadowJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_501469__) {
      __nested_webpack_require_501469__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_501469__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */createShadow
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _dom_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_501469__( /*! ./dom.js */"./node_modules/swiper/shared/dom.js");
      function createShadow(params, $slideEl, side) {
        var shadowClass = "swiper-slide-shadow".concat(side ? "-".concat(side) : '');
        var $shadowContainer = params.transformEl ? $slideEl.find(params.transformEl) : $slideEl;
        var $shadowEl = $shadowContainer.children(".".concat(shadowClass));
        if (!$shadowEl.length) {
          $shadowEl = (0, _dom_js__WEBPACK_IMPORTED_MODULE_0__["default"])("<div class=\"swiper-slide-shadow".concat(side ? "-".concat(side) : '', "\"></div>"));
          $shadowContainer.append($shadowEl);
        }
        return $shadowEl;
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/dom.js":
    /*!*******************************************!*\
      !*** ./node_modules/swiper/shared/dom.js ***!
      \*******************************************/
    /***/
    function node_modulesSwiperSharedDomJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_502878__) {
      __nested_webpack_require_502878__.r(__webpack_exports__);
      /* harmony import */
      var dom7__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_502878__( /*! dom7 */"./node_modules/dom7/dom7.esm.js");
      var Methods = {
        addClass: dom7__WEBPACK_IMPORTED_MODULE_0__.addClass,
        removeClass: dom7__WEBPACK_IMPORTED_MODULE_0__.removeClass,
        hasClass: dom7__WEBPACK_IMPORTED_MODULE_0__.hasClass,
        toggleClass: dom7__WEBPACK_IMPORTED_MODULE_0__.toggleClass,
        attr: dom7__WEBPACK_IMPORTED_MODULE_0__.attr,
        removeAttr: dom7__WEBPACK_IMPORTED_MODULE_0__.removeAttr,
        transform: dom7__WEBPACK_IMPORTED_MODULE_0__.transform,
        transition: dom7__WEBPACK_IMPORTED_MODULE_0__.transition,
        on: dom7__WEBPACK_IMPORTED_MODULE_0__.on,
        off: dom7__WEBPACK_IMPORTED_MODULE_0__.off,
        trigger: dom7__WEBPACK_IMPORTED_MODULE_0__.trigger,
        transitionEnd: dom7__WEBPACK_IMPORTED_MODULE_0__.transitionEnd,
        outerWidth: dom7__WEBPACK_IMPORTED_MODULE_0__.outerWidth,
        outerHeight: dom7__WEBPACK_IMPORTED_MODULE_0__.outerHeight,
        styles: dom7__WEBPACK_IMPORTED_MODULE_0__.styles,
        offset: dom7__WEBPACK_IMPORTED_MODULE_0__.offset,
        css: dom7__WEBPACK_IMPORTED_MODULE_0__.css,
        each: dom7__WEBPACK_IMPORTED_MODULE_0__.each,
        html: dom7__WEBPACK_IMPORTED_MODULE_0__.html,
        text: dom7__WEBPACK_IMPORTED_MODULE_0__.text,
        is: dom7__WEBPACK_IMPORTED_MODULE_0__.is,
        index: dom7__WEBPACK_IMPORTED_MODULE_0__.index,
        eq: dom7__WEBPACK_IMPORTED_MODULE_0__.eq,
        append: dom7__WEBPACK_IMPORTED_MODULE_0__.append,
        prepend: dom7__WEBPACK_IMPORTED_MODULE_0__.prepend,
        next: dom7__WEBPACK_IMPORTED_MODULE_0__.next,
        nextAll: dom7__WEBPACK_IMPORTED_MODULE_0__.nextAll,
        prev: dom7__WEBPACK_IMPORTED_MODULE_0__.prev,
        prevAll: dom7__WEBPACK_IMPORTED_MODULE_0__.prevAll,
        parent: dom7__WEBPACK_IMPORTED_MODULE_0__.parent,
        parents: dom7__WEBPACK_IMPORTED_MODULE_0__.parents,
        closest: dom7__WEBPACK_IMPORTED_MODULE_0__.closest,
        find: dom7__WEBPACK_IMPORTED_MODULE_0__.find,
        children: dom7__WEBPACK_IMPORTED_MODULE_0__.children,
        filter: dom7__WEBPACK_IMPORTED_MODULE_0__.filter,
        remove: dom7__WEBPACK_IMPORTED_MODULE_0__.remove
      };
      Object.keys(Methods).forEach(function (methodName) {
        Object.defineProperty(dom7__WEBPACK_IMPORTED_MODULE_0__.$.fn, methodName, {
          value: Methods[methodName],
          writable: true
        });
      });
      /* harmony default export */
      __webpack_exports__["default"] = dom7__WEBPACK_IMPORTED_MODULE_0__.$;

      /***/
    },

    /***/"./node_modules/swiper/shared/effect-init.js":
    /*!***************************************************!*\
      !*** ./node_modules/swiper/shared/effect-init.js ***!
      \***************************************************/
    /***/
    function node_modulesSwiperSharedEffectInitJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_505960__) {
      __nested_webpack_require_505960__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_505960__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */effectInit
          );
        }
        /* harmony export */
      });
      function effectInit(params) {
        var effect = params.effect,
          swiper = params.swiper,
          on = params.on,
          setTranslate = params.setTranslate,
          setTransition = params.setTransition,
          overwriteParams = params.overwriteParams,
          perspective = params.perspective,
          recreateShadows = params.recreateShadows,
          getEffectParams = params.getEffectParams;
        on('beforeInit', function () {
          if (swiper.params.effect !== effect) return;
          swiper.classNames.push("".concat(swiper.params.containerModifierClass).concat(effect));
          if (perspective && perspective()) {
            swiper.classNames.push("".concat(swiper.params.containerModifierClass, "3d"));
          }
          var overwriteParamsResult = overwriteParams ? overwriteParams() : {};
          Object.assign(swiper.params, overwriteParamsResult);
          Object.assign(swiper.originalParams, overwriteParamsResult);
        });
        on('setTranslate', function () {
          if (swiper.params.effect !== effect) return;
          setTranslate();
        });
        on('setTransition', function (_s, duration) {
          if (swiper.params.effect !== effect) return;
          setTransition(duration);
        });
        on('transitionEnd', function () {
          if (swiper.params.effect !== effect) return;
          if (recreateShadows) {
            if (!getEffectParams || !getEffectParams().slideShadows) return; // remove shadows

            swiper.slides.each(function (slideEl) {
              var $slideEl = swiper.$(slideEl);
              $slideEl.find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').remove();
            }); // create new one

            recreateShadows();
          }
        });
        var requireUpdateOnVirtual;
        on('virtualUpdate', function () {
          if (swiper.params.effect !== effect) return;
          if (!swiper.slides.length) {
            requireUpdateOnVirtual = true;
          }
          requestAnimationFrame(function () {
            if (requireUpdateOnVirtual && swiper.slides && swiper.slides.length) {
              setTranslate();
              requireUpdateOnVirtual = false;
            }
          });
        });
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/effect-target.js":
    /*!*****************************************************!*\
      !*** ./node_modules/swiper/shared/effect-target.js ***!
      \*****************************************************/
    /***/
    function node_modulesSwiperSharedEffectTargetJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_508994__) {
      __nested_webpack_require_508994__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_508994__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */effectTarget
          );
        }
        /* harmony export */
      });
      function effectTarget(effectParams, $slideEl) {
        if (effectParams.transformEl) {
          return $slideEl.find(effectParams.transformEl).css({
            'backface-visibility': 'hidden',
            '-webkit-backface-visibility': 'hidden'
          });
        }
        return $slideEl;
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/effect-virtual-transition-end.js":
    /*!*********************************************************************!*\
      !*** ./node_modules/swiper/shared/effect-virtual-transition-end.js ***!
      \*********************************************************************/
    /***/
    function node_modulesSwiperSharedEffectVirtualTransitionEndJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_510090__) {
      __nested_webpack_require_510090__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_510090__.d(__webpack_exports__, {
        /* harmony export */"default": function _default() {
          return (/* binding */effectVirtualTransitionEnd
          );
        }
        /* harmony export */
      });
      function effectVirtualTransitionEnd(_ref30) {
        var swiper = _ref30.swiper,
          duration = _ref30.duration,
          transformEl = _ref30.transformEl,
          allSlides = _ref30.allSlides;
        var slides = swiper.slides,
          activeIndex = swiper.activeIndex,
          $wrapperEl = swiper.$wrapperEl;
        if (swiper.params.virtualTranslate && duration !== 0) {
          var eventTriggered = false;
          var $transitionEndTarget;
          if (allSlides) {
            $transitionEndTarget = transformEl ? slides.find(transformEl) : slides;
          } else {
            $transitionEndTarget = transformEl ? slides.eq(activeIndex).find(transformEl) : slides.eq(activeIndex);
          }
          $transitionEndTarget.transitionEnd(function () {
            if (eventTriggered) return;
            if (!swiper || swiper.destroyed) return;
            eventTriggered = true;
            swiper.animating = false;
            var triggerEvents = ['webkitTransitionEnd', 'transitionend'];
            for (var _i85 = 0; _i85 < triggerEvents.length; _i85 += 1) {
              $wrapperEl.trigger(triggerEvents[_i85]);
            }
          });
        }
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/get-browser.js":
    /*!***************************************************!*\
      !*** ./node_modules/swiper/shared/get-browser.js ***!
      \***************************************************/
    /***/
    function node_modulesSwiperSharedGetBrowserJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_512002__) {
      __nested_webpack_require_512002__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_512002__.d(__webpack_exports__, {
        /* harmony export */"getBrowser": function getBrowser() {
          return (/* binding */_getBrowser
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_512002__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      var browser;
      function calcBrowser() {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        function isSafari() {
          var ua = window.navigator.userAgent.toLowerCase();
          return ua.indexOf('safari') >= 0 && ua.indexOf('chrome') < 0 && ua.indexOf('android') < 0;
        }
        return {
          isSafari: isSafari(),
          isWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(window.navigator.userAgent)
        };
      }
      function _getBrowser() {
        if (!browser) {
          browser = calcBrowser();
        }
        return browser;
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/get-device.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/shared/get-device.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperSharedGetDeviceJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_513495__) {
      __nested_webpack_require_513495__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_513495__.d(__webpack_exports__, {
        /* harmony export */"getDevice": function getDevice() {
          return (/* binding */_getDevice
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_513495__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      /* harmony import */
      var _get_support_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_513495__( /*! ./get-support.js */"./node_modules/swiper/shared/get-support.js");
      var deviceCached;
      function calcDevice() {
        var _ref31 = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {},
          userAgent = _ref31.userAgent;
        var support = (0, _get_support_js__WEBPACK_IMPORTED_MODULE_1__.getSupport)();
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var platform = window.navigator.platform;
        var ua = userAgent || window.navigator.userAgent;
        var device = {
          ios: false,
          android: false
        };
        var screenWidth = window.screen.width;
        var screenHeight = window.screen.height;
        var android = ua.match(/(Android);?[\s\/]+([\d.]+)?/); // eslint-disable-line

        var ipad = ua.match(/(iPad).*OS\s([\d_]+)/);
        var ipod = ua.match(/(iPod)(.*OS\s([\d_]+))?/);
        var iphone = !ipad && ua.match(/(iPhone\sOS|iOS)\s([\d_]+)/);
        var windows = platform === 'Win32';
        var macos = platform === 'MacIntel'; // iPadOs 13 fix

        var iPadScreens = ['1024x1366', '1366x1024', '834x1194', '1194x834', '834x1112', '1112x834', '768x1024', '1024x768', '820x1180', '1180x820', '810x1080', '1080x810'];
        if (!ipad && macos && support.touch && iPadScreens.indexOf("".concat(screenWidth, "x").concat(screenHeight)) >= 0) {
          ipad = ua.match(/(Version)\/([\d.]+)/);
          if (!ipad) ipad = [0, 1, '13_0_0'];
          macos = false;
        } // Android

        if (android && !windows) {
          device.os = 'android';
          device.android = true;
        }
        if (ipad || iphone || ipod) {
          device.os = 'ios';
          device.ios = true;
        } // Export object

        return device;
      }
      function _getDevice() {
        var overrides = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
        if (!deviceCached) {
          deviceCached = calcDevice(overrides);
        }
        return deviceCached;
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/get-support.js":
    /*!***************************************************!*\
      !*** ./node_modules/swiper/shared/get-support.js ***!
      \***************************************************/
    /***/
    function node_modulesSwiperSharedGetSupportJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_516502__) {
      __nested_webpack_require_516502__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_516502__.d(__webpack_exports__, {
        /* harmony export */"getSupport": function getSupport() {
          return (/* binding */_getSupport
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_516502__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      var support;
      function calcSupport() {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var document = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getDocument)();
        return {
          smoothScroll: document.documentElement && 'scrollBehavior' in document.documentElement.style,
          touch: !!('ontouchstart' in window || window.DocumentTouch && document instanceof window.DocumentTouch),
          passiveListener: function checkPassiveListener() {
            var supportsPassive = false;
            try {
              var opts = Object.defineProperty({}, 'passive', {
                // eslint-disable-next-line
                get: function get() {
                  supportsPassive = true;
                }
              });
              window.addEventListener('testPassiveListener', null, opts);
            } catch (e) {// No support
            }
            return supportsPassive;
          }(),
          gestures: function checkGestures() {
            return 'ongesturestart' in window;
          }()
        };
      }
      function _getSupport() {
        if (!support) {
          support = calcSupport();
        }
        return support;
      }

      /***/
    },

    /***/"./node_modules/swiper/shared/utils.js":
    /*!*********************************************!*\
      !*** ./node_modules/swiper/shared/utils.js ***!
      \*********************************************/
    /***/
    function node_modulesSwiperSharedUtilsJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_518568__) {
      __nested_webpack_require_518568__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_518568__.d(__webpack_exports__, {
        /* harmony export */"animateCSSModeScroll": function animateCSSModeScroll() {
          return (/* binding */_animateCSSModeScroll
          );
        },
        /* harmony export */"deleteProps": function deleteProps() {
          return (/* binding */_deleteProps
          );
        },
        /* harmony export */"nextTick": function nextTick() {
          return (/* binding */_nextTick
          );
        },
        /* harmony export */"now": function now() {
          return (/* binding */_now
          );
        },
        /* harmony export */"getTranslate": function getTranslate() {
          return (/* binding */_getTranslate
          );
        },
        /* harmony export */"isObject": function isObject() {
          return (/* binding */_isObject
          );
        },
        /* harmony export */"extend": function extend() {
          return (/* binding */_extend2
          );
        },
        /* harmony export */"getComputedStyle": function (_getComputedStyle) {
          function getComputedStyle() {
            return _getComputedStyle.apply(this, arguments);
          }
          getComputedStyle.toString = function () {
            return _getComputedStyle.toString();
          };
          return getComputedStyle;
        }(function () {
          return (/* binding */getComputedStyle
          );
        }),
        /* harmony export */"setCSSProperty": function setCSSProperty() {
          return (/* binding */_setCSSProperty
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var ssr_window__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_518568__( /*! ssr-window */"./node_modules/ssr-window/ssr-window.esm.js");
      function _deleteProps(obj) {
        var object = obj;
        Object.keys(object).forEach(function (key) {
          try {
            object[key] = null;
          } catch (e) {// no getter for object
          }
          try {
            delete object[key];
          } catch (e) {// something got wrong
          }
        });
      }
      function _nextTick(callback) {
        var delay = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 0;
        return setTimeout(callback, delay);
      }
      function _now() {
        return Date.now();
      }
      function getComputedStyle(el) {
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var style;
        if (window.getComputedStyle) {
          style = window.getComputedStyle(el, null);
        }
        if (!style && el.currentStyle) {
          style = el.currentStyle;
        }
        if (!style) {
          style = el.style;
        }
        return style;
      }
      function _getTranslate(el) {
        var axis = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 'x';
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var matrix;
        var curTransform;
        var transformMatrix;
        var curStyle = getComputedStyle(el, null);
        if (window.WebKitCSSMatrix) {
          curTransform = curStyle.transform || curStyle.webkitTransform;
          if (curTransform.split(',').length > 6) {
            curTransform = curTransform.split(', ').map(function (a) {
              return a.replace(',', '.');
            }).join(', ');
          } // Some old versions of Webkit choke when 'none' is passed; pass
          // empty string instead in this case

          transformMatrix = new window.WebKitCSSMatrix(curTransform === 'none' ? '' : curTransform);
        } else {
          transformMatrix = curStyle.MozTransform || curStyle.OTransform || curStyle.MsTransform || curStyle.msTransform || curStyle.transform || curStyle.getPropertyValue('transform').replace('translate(', 'matrix(1, 0, 0, 1,');
          matrix = transformMatrix.toString().split(',');
        }
        if (axis === 'x') {
          // Latest Chrome and webkits Fix
          if (window.WebKitCSSMatrix) curTransform = transformMatrix.m41; // Crazy IE10 Matrix
          else if (matrix.length === 16) curTransform = parseFloat(matrix[12]); // Normal Browsers
          else curTransform = parseFloat(matrix[4]);
        }
        if (axis === 'y') {
          // Latest Chrome and webkits Fix
          if (window.WebKitCSSMatrix) curTransform = transformMatrix.m42; // Crazy IE10 Matrix
          else if (matrix.length === 16) curTransform = parseFloat(matrix[13]); // Normal Browsers
          else curTransform = parseFloat(matrix[5]);
        }
        return curTransform || 0;
      }
      function _isObject(o) {
        return _typeof(o) === 'object' && o !== null && o.constructor && Object.prototype.toString.call(o).slice(8, -1) === 'Object';
      }
      function isNode(node) {
        // eslint-disable-next-line
        if (typeof window !== 'undefined' && typeof window.HTMLElement !== 'undefined') {
          return node instanceof HTMLElement;
        }
        return node && (node.nodeType === 1 || node.nodeType === 11);
      }
      function _extend2() {
        var to = Object(arguments.length <= 0 ? undefined : arguments[0]);
        var noExtend = ['__proto__', 'constructor', 'prototype'];
        for (var _i86 = 1; _i86 < arguments.length; _i86 += 1) {
          var nextSource = _i86 < 0 || arguments.length <= _i86 ? undefined : arguments[_i86];
          if (nextSource !== undefined && nextSource !== null && !isNode(nextSource)) {
            var keysArray = Object.keys(Object(nextSource)).filter(function (key) {
              return noExtend.indexOf(key) < 0;
            });
            for (var nextIndex = 0, len = keysArray.length; nextIndex < len; nextIndex += 1) {
              var nextKey = keysArray[nextIndex];
              var desc = Object.getOwnPropertyDescriptor(nextSource, nextKey);
              if (desc !== undefined && desc.enumerable) {
                if (_isObject(to[nextKey]) && _isObject(nextSource[nextKey])) {
                  if (nextSource[nextKey].__swiper__) {
                    to[nextKey] = nextSource[nextKey];
                  } else {
                    _extend2(to[nextKey], nextSource[nextKey]);
                  }
                } else if (!_isObject(to[nextKey]) && _isObject(nextSource[nextKey])) {
                  to[nextKey] = {};
                  if (nextSource[nextKey].__swiper__) {
                    to[nextKey] = nextSource[nextKey];
                  } else {
                    _extend2(to[nextKey], nextSource[nextKey]);
                  }
                } else {
                  to[nextKey] = nextSource[nextKey];
                }
              }
            }
          }
        }
        return to;
      }
      function _setCSSProperty(el, varName, varValue) {
        el.style.setProperty(varName, varValue);
      }
      function _animateCSSModeScroll(_ref32) {
        var swiper = _ref32.swiper,
          targetPosition = _ref32.targetPosition,
          side = _ref32.side;
        var window = (0, ssr_window__WEBPACK_IMPORTED_MODULE_0__.getWindow)();
        var startPosition = -swiper.translate;
        var startTime = null;
        var time;
        var duration = swiper.params.speed;
        swiper.wrapperEl.style.scrollSnapType = 'none';
        window.cancelAnimationFrame(swiper.cssModeFrameID);
        var dir = targetPosition > startPosition ? 'next' : 'prev';
        var isOutOfBound = function isOutOfBound(current, target) {
          return dir === 'next' && current >= target || dir === 'prev' && current <= target;
        };
        var animate = function animate() {
          time = new Date().getTime();
          if (startTime === null) {
            startTime = time;
          }
          var progress = Math.max(Math.min((time - startTime) / duration, 1), 0);
          var easeProgress = 0.5 - Math.cos(progress * Math.PI) / 2;
          var currentPosition = startPosition + easeProgress * (targetPosition - startPosition);
          if (isOutOfBound(currentPosition, targetPosition)) {
            currentPosition = targetPosition;
          }
          swiper.wrapperEl.scrollTo(_defineProperty({}, side, currentPosition));
          if (isOutOfBound(currentPosition, targetPosition)) {
            swiper.wrapperEl.style.overflow = 'hidden';
            swiper.wrapperEl.style.scrollSnapType = '';
            setTimeout(function () {
              swiper.wrapperEl.style.overflow = '';
              swiper.wrapperEl.scrollTo(_defineProperty({}, side, currentPosition));
            });
            window.cancelAnimationFrame(swiper.cssModeFrameID);
            return;
          }
          swiper.cssModeFrameID = window.requestAnimationFrame(animate);
        };
        animate();
      }

      /***/
    },

    /***/"./node_modules/swiper/swiper-bundle.esm.js":
    /*!**************************************************!*\
      !*** ./node_modules/swiper/swiper-bundle.esm.js ***!
      \**************************************************/
    /***/
    function node_modulesSwiperSwiperBundleEsmJs(__unused_webpack___webpack_module__, __webpack_exports__, __nested_webpack_require_527844__) {
      __nested_webpack_require_527844__.r(__webpack_exports__);
      /* harmony export */
      __nested_webpack_require_527844__.d(__webpack_exports__, {
        /* harmony export */"Swiper": function Swiper() {
          return (/* reexport safe */_core_core_js__WEBPACK_IMPORTED_MODULE_0__["default"]
          );
        },
        /* harmony export */"default": function _default() {
          return (/* reexport safe */_core_core_js__WEBPACK_IMPORTED_MODULE_0__["default"]
          );
        }
        /* harmony export */
      });
      /* harmony import */
      var _core_core_js__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_527844__( /*! ./core/core.js */"./node_modules/swiper/core/core.js");
      /* harmony import */
      var _modules_virtual_virtual_js__WEBPACK_IMPORTED_MODULE_1__ = __nested_webpack_require_527844__( /*! ./modules/virtual/virtual.js */"./node_modules/swiper/modules/virtual/virtual.js");
      /* harmony import */
      var _modules_keyboard_keyboard_js__WEBPACK_IMPORTED_MODULE_2__ = __nested_webpack_require_527844__( /*! ./modules/keyboard/keyboard.js */"./node_modules/swiper/modules/keyboard/keyboard.js");
      /* harmony import */
      var _modules_mousewheel_mousewheel_js__WEBPACK_IMPORTED_MODULE_3__ = __nested_webpack_require_527844__( /*! ./modules/mousewheel/mousewheel.js */"./node_modules/swiper/modules/mousewheel/mousewheel.js");
      /* harmony import */
      var _modules_navigation_navigation_js__WEBPACK_IMPORTED_MODULE_4__ = __nested_webpack_require_527844__( /*! ./modules/navigation/navigation.js */"./node_modules/swiper/modules/navigation/navigation.js");
      /* harmony import */
      var _modules_pagination_pagination_js__WEBPACK_IMPORTED_MODULE_5__ = __nested_webpack_require_527844__( /*! ./modules/pagination/pagination.js */"./node_modules/swiper/modules/pagination/pagination.js");
      /* harmony import */
      var _modules_scrollbar_scrollbar_js__WEBPACK_IMPORTED_MODULE_6__ = __nested_webpack_require_527844__( /*! ./modules/scrollbar/scrollbar.js */"./node_modules/swiper/modules/scrollbar/scrollbar.js");
      /* harmony import */
      var _modules_parallax_parallax_js__WEBPACK_IMPORTED_MODULE_7__ = __nested_webpack_require_527844__( /*! ./modules/parallax/parallax.js */"./node_modules/swiper/modules/parallax/parallax.js");
      /* harmony import */
      var _modules_zoom_zoom_js__WEBPACK_IMPORTED_MODULE_8__ = __nested_webpack_require_527844__( /*! ./modules/zoom/zoom.js */"./node_modules/swiper/modules/zoom/zoom.js");
      /* harmony import */
      var _modules_lazy_lazy_js__WEBPACK_IMPORTED_MODULE_9__ = __nested_webpack_require_527844__( /*! ./modules/lazy/lazy.js */"./node_modules/swiper/modules/lazy/lazy.js");
      /* harmony import */
      var _modules_controller_controller_js__WEBPACK_IMPORTED_MODULE_10__ = __nested_webpack_require_527844__( /*! ./modules/controller/controller.js */"./node_modules/swiper/modules/controller/controller.js");
      /* harmony import */
      var _modules_a11y_a11y_js__WEBPACK_IMPORTED_MODULE_11__ = __nested_webpack_require_527844__( /*! ./modules/a11y/a11y.js */"./node_modules/swiper/modules/a11y/a11y.js");
      /* harmony import */
      var _modules_history_history_js__WEBPACK_IMPORTED_MODULE_12__ = __nested_webpack_require_527844__( /*! ./modules/history/history.js */"./node_modules/swiper/modules/history/history.js");
      /* harmony import */
      var _modules_hash_navigation_hash_navigation_js__WEBPACK_IMPORTED_MODULE_13__ = __nested_webpack_require_527844__( /*! ./modules/hash-navigation/hash-navigation.js */"./node_modules/swiper/modules/hash-navigation/hash-navigation.js");
      /* harmony import */
      var _modules_autoplay_autoplay_js__WEBPACK_IMPORTED_MODULE_14__ = __nested_webpack_require_527844__( /*! ./modules/autoplay/autoplay.js */"./node_modules/swiper/modules/autoplay/autoplay.js");
      /* harmony import */
      var _modules_thumbs_thumbs_js__WEBPACK_IMPORTED_MODULE_15__ = __nested_webpack_require_527844__( /*! ./modules/thumbs/thumbs.js */"./node_modules/swiper/modules/thumbs/thumbs.js");
      /* harmony import */
      var _modules_free_mode_free_mode_js__WEBPACK_IMPORTED_MODULE_16__ = __nested_webpack_require_527844__( /*! ./modules/free-mode/free-mode.js */"./node_modules/swiper/modules/free-mode/free-mode.js");
      /* harmony import */
      var _modules_grid_grid_js__WEBPACK_IMPORTED_MODULE_17__ = __nested_webpack_require_527844__( /*! ./modules/grid/grid.js */"./node_modules/swiper/modules/grid/grid.js");
      /* harmony import */
      var _modules_manipulation_manipulation_js__WEBPACK_IMPORTED_MODULE_18__ = __nested_webpack_require_527844__( /*! ./modules/manipulation/manipulation.js */"./node_modules/swiper/modules/manipulation/manipulation.js");
      /* harmony import */
      var _modules_effect_fade_effect_fade_js__WEBPACK_IMPORTED_MODULE_19__ = __nested_webpack_require_527844__( /*! ./modules/effect-fade/effect-fade.js */"./node_modules/swiper/modules/effect-fade/effect-fade.js");
      /* harmony import */
      var _modules_effect_cube_effect_cube_js__WEBPACK_IMPORTED_MODULE_20__ = __nested_webpack_require_527844__( /*! ./modules/effect-cube/effect-cube.js */"./node_modules/swiper/modules/effect-cube/effect-cube.js");
      /* harmony import */
      var _modules_effect_flip_effect_flip_js__WEBPACK_IMPORTED_MODULE_21__ = __nested_webpack_require_527844__( /*! ./modules/effect-flip/effect-flip.js */"./node_modules/swiper/modules/effect-flip/effect-flip.js");
      /* harmony import */
      var _modules_effect_coverflow_effect_coverflow_js__WEBPACK_IMPORTED_MODULE_22__ = __nested_webpack_require_527844__( /*! ./modules/effect-coverflow/effect-coverflow.js */"./node_modules/swiper/modules/effect-coverflow/effect-coverflow.js");
      /* harmony import */
      var _modules_effect_creative_effect_creative_js__WEBPACK_IMPORTED_MODULE_23__ = __nested_webpack_require_527844__( /*! ./modules/effect-creative/effect-creative.js */"./node_modules/swiper/modules/effect-creative/effect-creative.js");
      /* harmony import */
      var _modules_effect_cards_effect_cards_js__WEBPACK_IMPORTED_MODULE_24__ = __nested_webpack_require_527844__( /*! ./modules/effect-cards/effect-cards.js */"./node_modules/swiper/modules/effect-cards/effect-cards.js");
      /**
       * Swiper 8.4.2
       * Most modern mobile touch slider and framework with hardware accelerated transitions
       * https://swiperjs.com
       *
       * Copyright 2014-2022 Vladimir Kharlampidi
       *
       * Released under the MIT License
       *
       * Released on: September 15, 2022
       */

      // Swiper Class
      var modules = [_modules_virtual_virtual_js__WEBPACK_IMPORTED_MODULE_1__["default"], _modules_keyboard_keyboard_js__WEBPACK_IMPORTED_MODULE_2__["default"], _modules_mousewheel_mousewheel_js__WEBPACK_IMPORTED_MODULE_3__["default"], _modules_navigation_navigation_js__WEBPACK_IMPORTED_MODULE_4__["default"], _modules_pagination_pagination_js__WEBPACK_IMPORTED_MODULE_5__["default"], _modules_scrollbar_scrollbar_js__WEBPACK_IMPORTED_MODULE_6__["default"], _modules_parallax_parallax_js__WEBPACK_IMPORTED_MODULE_7__["default"], _modules_zoom_zoom_js__WEBPACK_IMPORTED_MODULE_8__["default"], _modules_lazy_lazy_js__WEBPACK_IMPORTED_MODULE_9__["default"], _modules_controller_controller_js__WEBPACK_IMPORTED_MODULE_10__["default"], _modules_a11y_a11y_js__WEBPACK_IMPORTED_MODULE_11__["default"], _modules_history_history_js__WEBPACK_IMPORTED_MODULE_12__["default"], _modules_hash_navigation_hash_navigation_js__WEBPACK_IMPORTED_MODULE_13__["default"], _modules_autoplay_autoplay_js__WEBPACK_IMPORTED_MODULE_14__["default"], _modules_thumbs_thumbs_js__WEBPACK_IMPORTED_MODULE_15__["default"], _modules_free_mode_free_mode_js__WEBPACK_IMPORTED_MODULE_16__["default"], _modules_grid_grid_js__WEBPACK_IMPORTED_MODULE_17__["default"], _modules_manipulation_manipulation_js__WEBPACK_IMPORTED_MODULE_18__["default"], _modules_effect_fade_effect_fade_js__WEBPACK_IMPORTED_MODULE_19__["default"], _modules_effect_cube_effect_cube_js__WEBPACK_IMPORTED_MODULE_20__["default"], _modules_effect_flip_effect_flip_js__WEBPACK_IMPORTED_MODULE_21__["default"], _modules_effect_coverflow_effect_coverflow_js__WEBPACK_IMPORTED_MODULE_22__["default"], _modules_effect_creative_effect_creative_js__WEBPACK_IMPORTED_MODULE_23__["default"], _modules_effect_cards_effect_cards_js__WEBPACK_IMPORTED_MODULE_24__["default"]];
      _core_core_js__WEBPACK_IMPORTED_MODULE_0__["default"].use(modules);

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
  function __nested_webpack_require_536280__(moduleId) {
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
    __webpack_modules__[moduleId](module, module.exports, __nested_webpack_require_536280__);
    /******/
    /******/ // Return the exports of the module
    /******/
    return module.exports;
    /******/
  }
  /******/
  /************************************************************************/
  /******/ /* webpack/runtime/define property getters */
  /******/
  !function () {
    /******/ // define getter functions for harmony exports
    /******/__nested_webpack_require_536280__.d = function (exports, definition) {
      /******/for (var key in definition) {
        /******/if (__nested_webpack_require_536280__.o(definition, key) && !__nested_webpack_require_536280__.o(exports, key)) {
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
    /******/__nested_webpack_require_536280__.o = function (obj, prop) {
      return Object.prototype.hasOwnProperty.call(obj, prop);
    };
    /******/
  }();
  /******/
  /******/ /* webpack/runtime/make namespace object */
  /******/
  !function () {
    /******/ // define __esModule on exports
    /******/__nested_webpack_require_536280__.r = function (exports) {
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
  // This entry need to be wrapped in an IIFE because it need to be isolated against other modules in the chunk.
  !function () {
    /*!*******************************************************!*\
      !*** ./resources/assets/vendor/libs/swiper/swiper.js ***!
      \*******************************************************/
    __nested_webpack_require_536280__.r(__webpack_exports__);
    /* harmony export */
    __nested_webpack_require_536280__.d(__webpack_exports__, {
      /* harmony export */"Swiper": function Swiper() {
        return (/* reexport safe */swiper_bundle__WEBPACK_IMPORTED_MODULE_0__["default"]
        );
      }
      /* harmony export */
    });
    /* harmony import */
    var swiper_bundle__WEBPACK_IMPORTED_MODULE_0__ = __nested_webpack_require_536280__( /*! swiper/bundle */"./node_modules/swiper/swiper-bundle.esm.js");
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