/******/ (function() { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************************!*\
  !*** ./modules/setting/resources/assets/js/app.js ***!
  \****************************************************/
function openModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.classList.add("show");
  modal.style.display = "block";
  document.body.style.overflow = "hidden";
  modal.style.background = "rgba(0,0,0,0.4)";
}
function closeModal(modalId) {
  var modal = document.getElementById(modalId);
  modal.classList.remove("show");
  modal.style.display = "none";
  document.body.style.overflow = "auto";
  modal.style.background = "none";
  var inputs = document.getElementsByClassName("form-control");
  for (var i = 0; i < inputs.length; i++) {
    inputs[i].value = "";
  }
}
document.getElementById("create-tab").onclick = function () {
  openModal("modalCenter");
};
document.getElementById("close-new-tab-modal").onclick = function () {
  closeModal("modalCenter");
};
document.getElementById("close-new-tab-modal-top").onclick = function () {
  closeModal("modalCenter");
};
document.getElementById("close-setting-tab-modal").onclick = function () {
  closeModal("tabOperationModal");
};
document.getElementById("close-setting-tab-modal-top").onclick = function () {
  closeModal("tabOperationModal");
};
var __webpack_export_target__ = window;
for(var i in __webpack_exports__) __webpack_export_target__[i] = __webpack_exports__[i];
if(__webpack_exports__.__esModule) Object.defineProperty(__webpack_export_target__, "__esModule", { value: true });
/******/ })()
;