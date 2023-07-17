/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************************************!*\
  !*** ./resources/assets/vendor/fonts/flag-icons.scss.js ***!
  \**********************************************************/
/******/(function () {
  // webpackBootstrap
  /******/
  "use strict";

  /******/
  var __webpack_modules__ = {
    /***/"./resources/assets/vendor/fonts/flag-icons.scss":
    /*!*******************************************************!*\
      !*** ./resources/assets/vendor/fonts/flag-icons.scss ***!
      \*******************************************************/
    /***/
    function resourcesAssetsVendorFontsFlagIconsScss(__unused_webpack_module, __webpack_exports__, __nested_webpack_require_479__) {
      __nested_webpack_require_479__.r(__webpack_exports__);
      // extracted by mini-css-extract-plugin

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
  function __nested_webpack_require_851__(moduleId) {
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
    __webpack_modules__[moduleId](module, module.exports, __nested_webpack_require_851__);
    /******/
    /******/ // Return the exports of the module
    /******/
    return module.exports;
    /******/
  }
  /******/
  /******/ // expose the modules object (__webpack_modules__)
  /******/
  __nested_webpack_require_851__.m = __webpack_modules__;
  /******/
  /************************************************************************/
  /******/ /* webpack/runtime/chunk loaded */
  /******/
  !function () {
    /******/var deferred = [];
    /******/
    __nested_webpack_require_851__.O = function (result, chunkIds, fn, priority) {
      /******/if (chunkIds) {
        /******/priority = priority || 0;
        /******/
        for (var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
        /******/
        deferred[i] = [chunkIds, fn, priority];
        /******/
        return;
        /******/
      }
      /******/
      var notFulfilled = Infinity;
      /******/
      for (var i = 0; i < deferred.length; i++) {
        /******/var chunkIds = deferred[i][0];
        /******/
        var fn = deferred[i][1];
        /******/
        var priority = deferred[i][2];
        /******/
        var fulfilled = true;
        /******/
        for (var j = 0; j < chunkIds.length; j++) {
          /******/if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__nested_webpack_require_851__.O).every(function (key) {
            return __nested_webpack_require_851__.O[key](chunkIds[j]);
          })) {
            /******/chunkIds.splice(j--, 1);
            /******/
          } else {
            /******/fulfilled = false;
            /******/
            if (priority < notFulfilled) notFulfilled = priority;
            /******/
          }
          /******/
        }
        /******/
        if (fulfilled) {
          /******/deferred.splice(i--, 1);
          /******/
          var r = fn();
          /******/
          if (r !== undefined) result = r;
          /******/
        }
        /******/
      }
      /******/
      return result;
      /******/
    };
    /******/
  }();
  /******/
  /******/ /* webpack/runtime/hasOwnProperty shorthand */
  /******/
  !function () {
    /******/__nested_webpack_require_851__.o = function (obj, prop) {
      return Object.prototype.hasOwnProperty.call(obj, prop);
    };
    /******/
  }();
  /******/
  /******/ /* webpack/runtime/make namespace object */
  /******/
  !function () {
    /******/ // define __esModule on exports
    /******/__nested_webpack_require_851__.r = function (exports) {
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
  /******/ /* webpack/runtime/jsonp chunk loading */
  /******/
  !function () {
    /******/ // no baseURI
    /******/
    /******/ // object to store loaded and loading chunks
    /******/ // undefined = chunk not loaded, null = chunk preloaded/prefetched
    /******/ // [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
    /******/var installedChunks = {
      /******/"/assets/vendor/fonts/flag-icons.scss": 0,
      /******/"assets/vendor/fonts/flag-icons": 0
      /******/
    };
    /******/
    /******/ // no chunk on demand loading
    /******/
    /******/ // no prefetching
    /******/
    /******/ // no preloaded
    /******/
    /******/ // no HMR
    /******/
    /******/ // no HMR manifest
    /******/
    /******/
    __nested_webpack_require_851__.O.j = function (chunkId) {
      return installedChunks[chunkId] === 0;
    };
    /******/
    /******/ // install a JSONP callback for chunk loading
    /******/
    var webpackJsonpCallback = function webpackJsonpCallback(parentChunkLoadingFunction, data) {
      /******/var chunkIds = data[0];
      /******/
      var moreModules = data[1];
      /******/
      var runtime = data[2];
      /******/ // add "moreModules" to the modules object,
      /******/ // then flag all "chunkIds" as loaded and fire callback
      /******/
      var moduleId,
        chunkId,
        i = 0;
      /******/
      if (chunkIds.some(function (id) {
        return installedChunks[id] !== 0;
      })) {
        /******/for (moduleId in moreModules) {
          /******/if (__nested_webpack_require_851__.o(moreModules, moduleId)) {
            /******/__nested_webpack_require_851__.m[moduleId] = moreModules[moduleId];
            /******/
          }
          /******/
        }
        /******/
        if (runtime) var result = runtime(__nested_webpack_require_851__);
        /******/
      }
      /******/
      if (parentChunkLoadingFunction) parentChunkLoadingFunction(data);
      /******/
      for (; i < chunkIds.length; i++) {
        /******/chunkId = chunkIds[i];
        /******/
        if (__nested_webpack_require_851__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
          /******/installedChunks[chunkId][0]();
          /******/
        }
        /******/
        installedChunks[chunkIds[i]] = 0;
        /******/
      }
      /******/
      return __nested_webpack_require_851__.O(result);
      /******/
    };
    /******/
    /******/
    var chunkLoadingGlobal = self["webpackChunkVuexy"] = self["webpackChunkVuexy"] || [];
    /******/
    chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
    /******/
    chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
    /******/
  }();
  /******/
  /************************************************************************/
  /******/
  /******/ // startup
  /******/ // Load entry module and return exports
  /******/ // This entry module depends on other loaded chunks and execution need to be delayed
  /******/
  var __webpack_exports__ = __nested_webpack_require_851__.O(undefined, ["assets/vendor/fonts/flag-icons"], function () {
    return __nested_webpack_require_851__("./resources/assets/vendor/fonts/flag-icons.scss");
  });
  /******/
  __webpack_exports__ = __nested_webpack_require_851__.O(__webpack_exports__);
  /******/
  var __webpack_export_target__ = window;
  /******/
  for (var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
  /******/
  if (__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", {
    value: true
  });
  /******/
  /******/
})();
var __webpack_export_target__ = window;
for(var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
if(__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", { value: true });
/******/ })()
;