"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_CashRegister_Pages_Index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Index.vue?vue&type=script&lang=js":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Index.vue?vue&type=script&lang=js ***!
  \*******************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _inertiajs_inertia_vue3__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @inertiajs/inertia-vue3 */ "./node_modules/@inertiajs/inertia-vue3/dist/index.js");
/* harmony import */ var _Shared_Modal__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../Shared/Modal */ "./resources/js/CashRegister/Shared/Modal.vue");


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    Modal: _Shared_Modal__WEBPACK_IMPORTED_MODULE_1__["default"]
  },
  name: "Index",
  props: {
    dishTypes: Object,
    dishes: Object,
    sortedDishes: {
      "default": []
    },
    order: {
      "default": (0,_inertiajs_inertia_vue3__WEBPACK_IMPORTED_MODULE_0__.useForm)({
        order: []
      })
    }
  },
  data: function data() {
    var _localStorage$getItem;

    return {
      addBtns: {},
      selectedDishes: JSON.parse((_localStorage$getItem = localStorage.getItem('order')) !== null && _localStorage$getItem !== void 0 ? _localStorage$getItem : '[]'),
      displayModal: false,
      modalMsg: ''
    };
  },
  computed: {
    totalPrice: function totalPrice() {
      var total = 0;
      this.selectedDishes.forEach(function (dish) {
        return total += dish.price * dish.amount;
      });
      return '€ ' + total.toFixed(2).replace('.', ',');
    }
  },
  methods: {
    selectDish: function selectDish(dish) {
      var selectedDish = this.selectedDishes.find(function (selected) {
        return selected.id === dish.id;
      });

      if (selectedDish) {
        selectedDish.amount++;
        return;
      }

      dish.amount = 1;
      dish.comment = '';
      this.selectedDishes.push(dish);
    },
    updateSelectedDishAmount: function updateSelectedDishAmount(index, newAmount) {
      if (newAmount <= 0) {
        this.selectedDishes.splice(index, 1);
        return;
      }

      this.selectedDishes[index].amount = parseInt(newAmount);
    },
    processOrder: function processOrder() {
      var _this = this;

      if (this.selectedDishes.length <= 0) return;
      this.selectedDishes.forEach(function (dish) {
        return _this.order.order.push(dish);
      });
      this.order.post('/kassa/pay', {
        onSuccess: function onSuccess() {
          _this.modalMsg = 'Verkoop succesvol!';
          _this.displayModal = true;
        }
      });
      this.clearSelectedDishes();
    },
    clearSelectedDishes: function clearSelectedDishes() {
      this.selectedDishes.splice(0, this.selectedDishes.length);
      this.order.order = [];
    }
  },
  created: function created() {
    var _this2 = this;

    Object.values(this.dishTypes).forEach(function (type, index) {
      return _this2.sortedDishes[index] = [];
    });
    Object.values(this.dishTypes).forEach(function (type) {
      Object.values(_this2.dishes).forEach(function (dish) {
        if (type.id === dish.dish_type_id) _this2.sortedDishes[type.id - 1].push(dish);
      });
    });
  },
  beforeUnmount: function beforeUnmount() {
    localStorage.setItem('order', JSON.stringify(this.selectedDishes));
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Shared/Modal.vue?vue&type=script&lang=js":
/*!********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Shared/Modal.vue?vue&type=script&lang=js ***!
  \********************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Modal",
  props: {
    msg: String
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Index.vue?vue&type=template&id=8f8ad6e8":
/*!***********************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Index.vue?vue&type=template&id=8f8ad6e8 ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "container-fluid d-flex pt-4"
};
var _hoisted_2 = {
  id: "dish-selector-container",
  "class": "w-60 h-600 p-2"
};
var _hoisted_3 = {
  id: "dish-selector",
  "class": "outlined h-100 p-3"
};
var _hoisted_4 = {
  "class": "dishtype-container py-1"
};
var _hoisted_5 = {
  "class": "text-center"
};
var _hoisted_6 = {
  "class": "row mx-0 justify-content-between"
};
var _hoisted_7 = {
  "class": "col-9 px-0 row mx-0 justify-content-end"
};
var _hoisted_8 = {
  "class": "col-2"
};
var _hoisted_9 = ["innerHTML"];
var _hoisted_10 = {
  "class": "col-3 px-0 row mx-0 justify-content-start"
};
var _hoisted_11 = {
  "class": "col-6"
};
var _hoisted_12 = {
  "class": "col-6"
};
var _hoisted_13 = ["onClick"];
var _hoisted_14 = {
  id: "order-box-container",
  "class": "w-40 h-600 p-2"
};
var _hoisted_15 = {
  id: "order-box",
  "class": "outlined p-3"
};

var _hoisted_16 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h6", {
  "class": "text-center py-1"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("b", null, "Bestelling")], -1
/* HOISTED */
);

var _hoisted_17 = {
  id: "selected-dishes-container"
};
var _hoisted_18 = {
  "class": "col-1"
};
var _hoisted_19 = ["innerHTML"];
var _hoisted_20 = {
  "class": "col-2 px-0"
};
var _hoisted_21 = {
  "class": "col-1 px-0"
};
var _hoisted_22 = ["value", "onInput"];
var _hoisted_23 = {
  "class": "col-3"
};
var _hoisted_24 = ["onUpdate:modelValue"];
var _hoisted_25 = {
  id: "order-box-total",
  "class": "d-flex flex-row align-items-center justify-content-between py-3 px-5 outlined"
};

var _hoisted_26 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "d-inline-block"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("b", null, "Totaal:")], -1
/* HOISTED */
);

var _hoisted_27 = {
  "class": "d-flex flex-row align-items-center"
};
var _hoisted_28 = {
  id: "order-price",
  "class": "d-inline-block pe-3"
};
var _hoisted_29 = {
  "class": "d-flex flex-column align-items-start"
};
var _hoisted_30 = ["disabled"];
function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _this = this;

  var _component_Head = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Head");

  var _component_Modal = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Modal");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Head, {
    title: "Orders"
  }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($props.dishTypes, function (type, index) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h6", _hoisted_5, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("b", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(type.type), 1
    /* TEXT */
    )]), ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($props.sortedDishes[index], function (dish) {
      return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_6, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_7, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_8, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(dish.dish_nr ? dish.dish_nr + '.' : ''), 1
      /* TEXT */
      ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
        "class": "col-10",
        innerHTML: dish.name
      }, null, 8
      /* PROPS */
      , _hoisted_9)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_10, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_11, "€ " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(dish.price), 1
      /* TEXT */
      ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_12, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
        "class": "btn-block",
        onClick: function onClick($event) {
          return $options.selectDish(dish);
        }
      }, "Toevoegen", 8
      /* PROPS */
      , _hoisted_13)])])]);
    }), 256
    /* UNKEYED_FRAGMENT */
    ))]);
  }), 256
  /* UNKEYED_FRAGMENT */
  ))])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_14, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_15, [_hoisted_16, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_17, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.selectedDishes, function (dish, index) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      key: dish.id,
      "class": "row mx-0 justify-content-evenly"
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_18, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(dish.dish_nr ? dish.dish_nr + '.' : ''), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
      "class": "col-5",
      innerHTML: dish.name
    }, null, 8
    /* PROPS */
    , _hoisted_19), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_20, "€ " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)((dish.price * dish.amount).toFixed(2).replace('.', ',')), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_21, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
      value: dish.amount,
      onInput: function onInput(event) {
        return $options.updateSelectedDishAmount(index, event.target.value);
      },
      type: "number",
      min: "0",
      "class": "w-100"
    }, null, 40
    /* PROPS, HYDRATE_EVENTS */
    , _hoisted_22)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_23, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("input", {
      "onUpdate:modelValue": function onUpdateModelValue($event) {
        return dish.comment = $event;
      },
      type: "text",
      "class": "w-100",
      placeholder: "Opmerking..."
    }, null, 8
    /* PROPS */
    , _hoisted_24), [[vue__WEBPACK_IMPORTED_MODULE_0__.vModelText, dish.comment]])])]);
  }), 128
  /* KEYED_FRAGMENT */
  ))])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_25, [_hoisted_26, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_27, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_28, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("b", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($options.totalPrice), 1
  /* TEXT */
  )]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_29, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    id: "pay-button",
    "class": "px-2 mb-1",
    onClick: _cache[0] || (_cache[0] = function ($event) {
      return $options.processOrder();
    }),
    disabled: this.order.processing
  }, "Afrekenen", 8
  /* PROPS */
  , _hoisted_30), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    id: "clear-order-button",
    "class": "px-2",
    onClick: _cache[1] || (_cache[1] = function ($event) {
      return _this.clearSelectedDishes();
    })
  }, "Verwijderen")])])])]), $data.displayModal ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createBlock)(_component_Modal, {
    key: 0,
    onClose: _cache[2] || (_cache[2] = function ($event) {
      return $data.displayModal = false;
    }),
    msg: $data.modalMsg
  }, null, 8
  /* PROPS */
  , ["msg"])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Shared/Modal.vue?vue&type=template&id=59270764":
/*!************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Shared/Modal.vue?vue&type=template&id=59270764 ***!
  \************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  ref: 'modal',
  id: "modal",
  "class": "d-flex w-100 vh-100"
};
var _hoisted_2 = {
  "class": "row justify-content-around mx-0 vh-50 w-100"
};
var _hoisted_3 = {
  "class": "col-4 align-self-center px-0"
};
var _hoisted_4 = {
  "class": "row align-items-start p-4 mx-0 border-1"
};
var _hoisted_5 = {
  "class": "col px-0 py-3 text-tnr"
};
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_5, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($props.msg), 1
  /* TEXT */
  ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
    "class": "col-auto px-0 fs-3 text-muted",
    onClick: _cache[0] || (_cache[0] = function ($event) {
      return _ctx.$emit('close');
    })
  }, "×")])])])]);
}

/***/ }),

/***/ "./resources/js/CashRegister/Pages/Index.vue":
/*!***************************************************!*\
  !*** ./resources/js/CashRegister/Pages/Index.vue ***!
  \***************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Index_vue_vue_type_template_id_8f8ad6e8__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Index.vue?vue&type=template&id=8f8ad6e8 */ "./resources/js/CashRegister/Pages/Index.vue?vue&type=template&id=8f8ad6e8");
/* harmony import */ var _Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Index.vue?vue&type=script&lang=js */ "./resources/js/CashRegister/Pages/Index.vue?vue&type=script&lang=js");
/* harmony import */ var C_Users_Luke_Desktop_backup_dgd_dev_2_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_Luke_Desktop_backup_dgd_dev_2_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Index_vue_vue_type_template_id_8f8ad6e8__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/CashRegister/Pages/Index.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/CashRegister/Shared/Modal.vue":
/*!****************************************************!*\
  !*** ./resources/js/CashRegister/Shared/Modal.vue ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Modal_vue_vue_type_template_id_59270764__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Modal.vue?vue&type=template&id=59270764 */ "./resources/js/CashRegister/Shared/Modal.vue?vue&type=template&id=59270764");
/* harmony import */ var _Modal_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Modal.vue?vue&type=script&lang=js */ "./resources/js/CashRegister/Shared/Modal.vue?vue&type=script&lang=js");
/* harmony import */ var C_Users_Luke_Desktop_backup_dgd_dev_2_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_Luke_Desktop_backup_dgd_dev_2_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Modal_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Modal_vue_vue_type_template_id_59270764__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/CashRegister/Shared/Modal.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/CashRegister/Pages/Index.vue?vue&type=script&lang=js":
/*!***************************************************************************!*\
  !*** ./resources/js/CashRegister/Pages/Index.vue?vue&type=script&lang=js ***!
  \***************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Index.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Index.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/CashRegister/Shared/Modal.vue?vue&type=script&lang=js":
/*!****************************************************************************!*\
  !*** ./resources/js/CashRegister/Shared/Modal.vue?vue&type=script&lang=js ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Modal_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Modal_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Modal.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Shared/Modal.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/CashRegister/Pages/Index.vue?vue&type=template&id=8f8ad6e8":
/*!*********************************************************************************!*\
  !*** ./resources/js/CashRegister/Pages/Index.vue?vue&type=template&id=8f8ad6e8 ***!
  \*********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_template_id_8f8ad6e8__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_template_id_8f8ad6e8__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Index.vue?vue&type=template&id=8f8ad6e8 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Index.vue?vue&type=template&id=8f8ad6e8");


/***/ }),

/***/ "./resources/js/CashRegister/Shared/Modal.vue?vue&type=template&id=59270764":
/*!**********************************************************************************!*\
  !*** ./resources/js/CashRegister/Shared/Modal.vue?vue&type=template&id=59270764 ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Modal_vue_vue_type_template_id_59270764__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Modal_vue_vue_type_template_id_59270764__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Modal.vue?vue&type=template&id=59270764 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Shared/Modal.vue?vue&type=template&id=59270764");


/***/ })

}]);