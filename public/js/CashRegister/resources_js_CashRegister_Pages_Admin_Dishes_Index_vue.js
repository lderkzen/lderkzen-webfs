"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_CashRegister_Pages_Admin_Dishes_Index_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=script&lang=js":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=script&lang=js ***!
  \********************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "Admin.Dishes.Index",
  props: {
    dishes: Object,
    dishTypes: Object,
    allergies: Object
  },
  methods: {
    identifyAllergies: function identifyAllergies(allergyIds) {
      var _this = this;

      return allergyIds.map(function (id) {
        return _this.allergies.find(function (allergy) {
          return allergy.id === id;
        }).allergy;
      }).join(', ');
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=template&id=072cc8c1&scoped=true":
/*!************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=template&id=072cc8c1&scoped=true ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");


var _withScopeId = function _withScopeId(n) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.pushScopeId)("data-v-072cc8c1"), n = n(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.popScopeId)(), n;
};

var _hoisted_1 = {
  "class": "container-fluid px-0"
};
var _hoisted_2 = {
  id: "resource-container",
  "class": "text-center pt-4 px-2 pb-2"
};
var _hoisted_3 = {
  "class": "outlined p-4"
};
var _hoisted_4 = {
  id: "resource-table-xl",
  "class": "mx-auto text-nowrap text-center"
};
var _hoisted_5 = {
  "class": "row fw-bold mx-0 bb-blue"
};

var _hoisted_6 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"resource-col-1 px-0\" data-v-072cc8c1><span data-v-072cc8c1>Nummer</span></div><div class=\"resource-col-2 px-0 bx-blue\" data-v-072cc8c1><span data-v-072cc8c1>Gerecht Type</span></div><div class=\"resource-col-5 px-0 bx-blue\" data-v-072cc8c1><span data-v-072cc8c1>Gerecht</span></div><div class=\"resource-col-1 px-0 bx-blue\" data-v-072cc8c1><span data-v-072cc8c1>Prijs</span></div><div class=\"resource-col-1 px-0 bx-blue\" data-v-072cc8c1><span data-v-072cc8c1>Pittigheid</span></div><div class=\"resource-col-4 px-0 bx-blue\" data-v-072cc8c1><span data-v-072cc8c1>Beschrijving</span></div><div class=\"resource-col-2 px-0 bx-blue\" data-v-072cc8c1><span data-v-072cc8c1>Allergiën</span></div>", 7);

var _hoisted_13 = {
  "class": "resource-col-4 row mx-0 justify-content-around px-0"
};

var _hoisted_14 = /*#__PURE__*/_withScopeId(function () {
  return /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
    "class": "col-auto px-0"
  }, "Acties", -1
  /* HOISTED */
  );
});

var _hoisted_15 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("+ Maak een nieuw gerecht aan...");

var _hoisted_16 = {
  "class": "row mx-0 resource"
};
var _hoisted_17 = {
  "class": "resource-col-1 px-0 text-start"
};
var _hoisted_18 = {
  "class": "resource-col-2 px-0 text-start"
};
var _hoisted_19 = ["innerHTML"];
var _hoisted_20 = {
  "class": "resource-col-1 px-0 ps-2"
};
var _hoisted_21 = {
  "class": "resource-col-1 px-0"
};
var _hoisted_22 = {
  "class": "resource-col-4 px-0 text-start"
};
var _hoisted_23 = {
  "class": "resource-col-2 px-0 text-start ps-2"
};
var _hoisted_24 = {
  key: 0,
  "class": "w-100"
};
var _hoisted_25 = {
  "class": "resource-col-4 row mx-0 px-0 ps-1 text-start"
};
var _hoisted_26 = {
  "class": "col-auto ps-0 pe-1"
};

var _hoisted_27 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("Aanpassen");

var _hoisted_28 = {
  "class": "col-auto ps-0 pe-1"
};

var _hoisted_29 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)("Verwijderen");

function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_Head = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Head");

  var _component_Link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("Link");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Head, {
    title: "Gerechten"
  }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_5, [_hoisted_6, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_13, [_hoisted_14, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
    href: "/kassa/admin/gerechten/aanmaken",
    "class": "create-anchor col-auto px-0"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [_hoisted_15];
    }),
    _: 1
    /* STABLE */

  })])]), ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($props.dishes, function (dish) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_16, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_17, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(dish.dish_nr ? dish.dish_nr + '.' : ''), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_18, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($props.dishTypes.find(function (type) {
      return type.id === dish.dish_type_id;
    }).type), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
      "class": "resource-col-5 px-0 ps-2 text-start",
      innerHTML: dish.name
    }, null, 8
    /* PROPS */
    , _hoisted_19), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_20, "€ " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(parseInt(dish.price).toFixed(2).replace('.', ',')), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_21, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(dish.spice_level), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_22, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(dish.description), 1
    /* TEXT */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_23, [dish.allergies ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("span", _hoisted_24, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($options.identifyAllergies(dish.allergies)), 1
    /* TEXT */
    )) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_25, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_26, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
      href: "/kassa/admin/gerechten/".concat(dish.id, "/aanpassen"),
      "class": "d-inline-block btn-resource btn-blue"
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        return [_hoisted_27];
      }),
      _: 2
      /* DYNAMIC */

    }, 1032
    /* PROPS, DYNAMIC_SLOTS */
    , ["href"])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_28, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_Link, {
      as: "button",
      href: "/kassa/admin/gerechten/".concat(dish.id),
      "class": "btn-resource btn-red",
      method: "DELETE"
    }, {
      "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
        return [_hoisted_29];
      }),
      _: 2
      /* DYNAMIC */

    }, 1032
    /* PROPS, DYNAMIC_SLOTS */
    , ["href"])])])]);
  }), 256
  /* UNKEYED_FRAGMENT */
  ))])])])])], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-8.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css":
/*!*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-8.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css ***!
  \*********************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_8_use_1_public_css_cash_register_admin_resource_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! -!../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!../../../../../../public/css/cash_register/admin_resource.css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./public/css/cash_register/admin_resource.css");
// Imports


var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
___CSS_LOADER_EXPORT___.i(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_8_use_1_public_css_cash_register_admin_resource_css__WEBPACK_IMPORTED_MODULE_1__["default"]);
// Module
___CSS_LOADER_EXPORT___.push([module.id, "\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./public/css/cash_register/admin_resource.css":
/*!*******************************************************************************************************************!*\
  !*** ./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./public/css/cash_register/admin_resource.css ***!
  \*******************************************************************************************************************/
/***/ ((module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../node_modules/css-loader/dist/runtime/api.js */ "./node_modules/css-loader/dist/runtime/api.js");
/* harmony import */ var _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0__);
// Imports

var ___CSS_LOADER_EXPORT___ = _node_modules_css_loader_dist_runtime_api_js__WEBPACK_IMPORTED_MODULE_0___default()(function(i){return i[1]});
// Module
___CSS_LOADER_EXPORT___.push([module.id, "#resource-container > div {\n    min-height: 400px;\n    max-height: 90vh;\n}\n\n.resource {\n    padding-top: 1px;\n}\n\n.resource span {\n    overflow: hidden;\n    text-overflow: ellipsis;\n}\n\nform input, form select, form small {\n    line-height: 1.2;\n    font-size: 13.33px;\n}\n\n.btn-resource {\n    line-height: 1.2;\n    border-radius: 2px;\n    text-decoration: none;\n    font-family: \"Times New Roman\", serif;\n    font-size: 13.33px;\n    padding: 1px 6px;\n}\n\n.btn-resource:disabled, .create-anchor:disabled {\n    pointer-events: none;\n}\n\n.btn-blue {\n    background: #deebf7;\n    border: 1px solid #0d6efd;\n    color: #0d6efd;\n}\n\n.btn-blue:hover {\n    color: #0a58ca;\n}\n\n.btn-red {\n    background: #f7c9c6;\n    border: 1px solid #ff3519;\n    color: #ff3519;\n}\n\n.btn-red:hover {\n    color: #c9331e;\n}\n\n.create-anchor {\n    font-family: \"Times New Roman\", serif;\n    font-size: 13.33px;\n    text-decoration: none;\n    color: #28a745;\n}\n\n.create-anchor:hover {\n    color: #199a4a;\n}\n\n.resource-col-1 {\n    flex: 0 0 auto;\n    width: 5%;\n}\n\n.resource-col-2 {\n    flex: 0 0 auto;\n    width: 10%;\n}\n\n.resource-col-3 {\n    flex: 0 0 auto;\n    width: 15%;\n}\n\n.resource-col-4 {\n    flex: 0 0 auto;\n    width: 20%;\n}\n\n.resource-col-5 {\n    flex: 0 0 auto;\n    width: 25%;\n}\n\n.resource-col-6 {\n    flex: 0 0 auto;\n    width: 30%;\n}\n\n.resource-col-7 {\n    flex: 0 0 auto;\n    width: 35%;\n}\n\n.resource-col-8 {\n    flex: 0 0 auto;\n    width: 40%;\n}\n\n.resource-col-9 {\n    flex: 0 0 auto;\n    width: 45%;\n}\n\n.resource-col-10 {\n    flex: 0 0 auto;\n    width: 50%;\n}\n\n.resource-col-11 {\n    flex: 0 0 auto;\n    width: 55%;\n}\n\n.resource-col-12 {\n    flex: 0 0 auto;\n    width: 60%;\n}\n\n.resource-col-13 {\n    flex: 0 0 auto;\n    width: 65%;\n}\n\n.resource-col-14 {\n    flex: 0 0 auto;\n    width: 70%;\n}\n\n.resource-col-15 {\n    flex: 0 0 auto;\n    width: 75%;\n}\n\n.resource-col-16 {\n    flex: 0 0 auto;\n    width: 80%;\n}\n\n.resource-col-17 {\n    flex: 0 0 auto;\n    width: 85%;\n}\n\n.resource-col-18 {\n    flex: 0 0 auto;\n    width: 90%;\n}\n\n.resource-col-19 {\n    flex: 0 0 auto;\n    width: 95%;\n}\n\n.resource-col-20 {\n    flex: 0 0 auto;\n    width: 100%;\n}\n", ""]);
// Exports
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (___CSS_LOADER_EXPORT___);


/***/ }),

/***/ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-8.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css":
/*!*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-8.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css ***!
  \*************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! !../../../../../../node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js */ "./node_modules/style-loader/dist/runtime/injectStylesIntoStyleTag.js");
/* harmony import */ var _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _node_modules_css_loader_dist_cjs_js_clonedRuleSet_8_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_8_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_style_index_0_id_072cc8c1_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! !!../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!../../../../../../node_modules/vue-loader/dist/stylePostLoader.js!../../../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-8.use[2]!../../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css */ "./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-8.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css");

            

var options = {};

options.insert = "head";
options.singleton = false;

var update = _node_modules_style_loader_dist_runtime_injectStylesIntoStyleTag_js__WEBPACK_IMPORTED_MODULE_0___default()(_node_modules_css_loader_dist_cjs_js_clonedRuleSet_8_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_8_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_style_index_0_id_072cc8c1_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_1__["default"], options);



/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_css_loader_dist_cjs_js_clonedRuleSet_8_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_8_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_style_index_0_id_072cc8c1_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_1__["default"].locals || {});

/***/ }),

/***/ "./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue":
/*!****************************************************************!*\
  !*** ./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue ***!
  \****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Index_vue_vue_type_template_id_072cc8c1_scoped_true__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Index.vue?vue&type=template&id=072cc8c1&scoped=true */ "./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=template&id=072cc8c1&scoped=true");
/* harmony import */ var _Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Index.vue?vue&type=script&lang=js */ "./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=script&lang=js");
/* harmony import */ var _Index_vue_vue_type_style_index_0_id_072cc8c1_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css */ "./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css");
/* harmony import */ var C_Users_Luke_Desktop_backup_dgd_dev_2_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;


const __exports__ = /*#__PURE__*/(0,C_Users_Luke_Desktop_backup_dgd_dev_2_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_3__["default"])(_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Index_vue_vue_type_template_id_072cc8c1_scoped_true__WEBPACK_IMPORTED_MODULE_0__.render],['__scopeId',"data-v-072cc8c1"],['__file',"resources/js/CashRegister/Pages/Admin/Dishes/Index.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=script&lang=js":
/*!****************************************************************************************!*\
  !*** ./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=script&lang=js ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Index.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=template&id=072cc8c1&scoped=true":
/*!**********************************************************************************************************!*\
  !*** ./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=template&id=072cc8c1&scoped=true ***!
  \**********************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_template_id_072cc8c1_scoped_true__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_template_id_072cc8c1_scoped_true__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Index.vue?vue&type=template&id=072cc8c1&scoped=true */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=template&id=072cc8c1&scoped=true");


/***/ }),

/***/ "./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css":
/*!************************************************************************************************************************!*\
  !*** ./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css ***!
  \************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_dist_cjs_js_node_modules_css_loader_dist_cjs_js_clonedRuleSet_8_use_1_node_modules_vue_loader_dist_stylePostLoader_js_node_modules_postcss_loader_dist_cjs_js_clonedRuleSet_8_use_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Index_vue_vue_type_style_index_0_id_072cc8c1_scoped_true_lang_css__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/style-loader/dist/cjs.js!../../../../../../node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!../../../../../../node_modules/vue-loader/dist/stylePostLoader.js!../../../../../../node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-8.use[2]!../../../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css */ "./node_modules/style-loader/dist/cjs.js!./node_modules/css-loader/dist/cjs.js??clonedRuleSet-8.use[1]!./node_modules/vue-loader/dist/stylePostLoader.js!./node_modules/postcss-loader/dist/cjs.js??clonedRuleSet-8.use[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/CashRegister/Pages/Admin/Dishes/Index.vue?vue&type=style&index=0&id=072cc8c1&scoped=true&lang=css");


/***/ })

}]);