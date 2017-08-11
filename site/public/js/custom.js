/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/custom.js":
/***/ (function(module, exports) {

$(document).ready(function () {

	$('#lightgallery').lightGallery();

	$('.carousel').carousel();

	$('.portfolio-item a').hover(function () {
		$(this).children().children('.img-fluid').addClass('hover-img');
	}, function () {
		$(this).children().children('.img-fluid').removeClass('hover-img');
	});

	window.sr = ScrollReveal();
	sr.reveal('.sr-ecos', {
		duration: 2000,
		distance: '10px',
		easing: 'cubic-bezier(0.6, 0.2, 0.1, 1)'
	}, 200);

	if ($('.estrutura-div').length > 0) {
		$('.estrutura-div').css('top', $('.background-text').height() + 470);

		$('.first-content').height($('.estrutura-div').height() + $('.estrutura-div').offset().top - 20);
		console.log($('.estrutura-div').offset().top);
	}

	//Serviços
	$('#fullPageSinglePage').fullpage();

	$('#fullPageMultPage').fullpage({
		scrollingSpeed: 1000,
		anchors: ['zeroPage', 'firstPage', 'secondPage', 'thirdPage'],
		afterLoad: function afterLoad(anchorLink, index) {
			if (index == 1) {
				$('body').css('background-color', 'white');
				$('.arrow-down').hide();
				$('.arrow-up').hide();
			}
		},
		onLeave: function onLeave(index, nextIndex, direction) {
			if (nextIndex == 1) {
				$('body').css('background-color', 'white');
				$('#section0').css("display", "none");
				setTimeout(function () {
					$('#section0').css("display", "block");
				}, 100);
				$('.navbar').css('background-color', '#EC0500');
				$('.barra-botoes').show();
				$('.arrow-down').hide();
				$('.arrow-up').hide();
			}
			if (nextIndex == 2) {
				$('body').css('background-color', '#34495e');
				$('#section0').css("display", "none");
				setTimeout(function () {
					$('#section0').css("display", "block");
				}, 100);
				$('.navbar').css('background-color', '#34495e');
				$('.barra-botoes').hide();
				$('.arrow-down').show();
				$('.arrow-up').show();
				$("#arrowDown").attr("href", "#secondPage");
				$("#arrowUp").attr("href", "#zeroPage");
			} else if (nextIndex == 3) {
				$('body').css('background-color', '#EB5055');
				$('#section1').css("display", "none");
				setTimeout(function () {
					$('#section1').css("display", "block");
				}, 100);
				$('.navbar').css('background-color', '#EB5055');
				$('.barra-botoes').hide();
				$('.arrow-down').show();
				$('.arrow-up').show();
				$("#arrowDown").attr("href", "#thirdPage");
				$("#arrowUp").attr("href", "#firstPage");
			} else if (nextIndex == 4) {
				$('body').css('background-color', '#eee');
				$('#section2').css("display", "none");
				setTimeout(function () {
					$('#section2').css("display", "block");
				}, 100);
				$('.navbar').css('background-color', '#EC0500');
				$('.barra-botoes').hide();
				$('.arrow-down').hide();
				$('.arrow-up').show();
				$("#arrowUp").attr("href", "#secondPage");
			}
		}
	});

	$('#fullPageMultPage2').fullpage({
		scrollingSpeed: 1000,
		anchors: ['zeroPage', 'firstPage', 'secondPage', 'thirdPage'],
		afterLoad: function afterLoad(anchorLink, index) {
			if (index == 1) {
				$('body').css('background-color', 'white');
				$('.arrow-down').hide();
				$('.arrow-up').hide();
			}
		},
		onLeave: function onLeave(index, nextIndex, direction) {
			if (nextIndex == 1) {
				$('body').css('background-color', 'white');
				$('#section0').css("display", "none");
				setTimeout(function () {
					$('#section0').css("display", "block");
				}, 100);
				$('.navbar').css('background-color', '#EC0500');
				$('.barra-botoes').show();
				$('.arrow-down').hide();
				$('.arrow-up').hide();
			}
			if (nextIndex == 2) {
				$('body').css('background-color', '#34495e');
				$('#section0').css("display", "none");
				setTimeout(function () {
					$('#section0').css("display", "block");
				}, 100);
				$('.navbar').css('background-color', '#34495e');
				$('.barra-botoes').hide();
				$('.arrow-down').show();
				$('.arrow-up').show();
				$("#arrowDown").attr("href", "#secondPage");
				$("#arrowUp").attr("href", "#zeroPage");
			} else if (nextIndex == 3) {
				$('body').css('background-color', '#EB5055');
				$('#section1').css("display", "none");
				setTimeout(function () {
					$('#section1').css("display", "block");
				}, 100);
				$('.navbar').css('background-color', '#EB5055');
				$('.barra-botoes').hide();
				$('.arrow-down').hide();
				$('.arrow-up').show();
				$("#arrowDown").attr("href", "#thirdPage");
				$("#arrowUp").attr("href", "#firstPage");
			}
		}
	});
});

/***/ }),

/***/ "./resources/assets/sass/app.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/sass/bootstrap/bootstrap.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./resources/assets/sass/custom-services.scss":
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__("./resources/assets/js/custom.js");
__webpack_require__("./resources/assets/sass/app.scss");
__webpack_require__("./resources/assets/sass/bootstrap/bootstrap.scss");
module.exports = __webpack_require__("./resources/assets/sass/custom-services.scss");


/***/ })

/******/ });