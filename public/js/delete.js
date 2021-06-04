/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/delete.js":
/*!********************************!*\
  !*** ./resources/js/delete.js ***!
  \********************************/
/***/ (() => {

eval("$(function () {\n  $('.delete').click(function () {\n    var _this = this;\n\n    Swal.fire({\n      title: 'Are you sure?',\n      text: 'You will not be able to recover this imaginary file!',\n      icon: 'warning',\n      showCancelButton: true,\n      confirmButtonText: 'Yes, delete it!',\n      cancelButtonText: 'No, keep it'\n    }).then(function (result) {\n      if (result.isConfirmed) {\n        Swal.fire('Deleted!', 'Your imaginary file has been deleted.', 'success');\n        $.ajax({\n          method: \"DELETE\",\n          url: deleteurl + $(_this).data(\"id\") //data: {id: $(this).data(\"id\")}\n\n        }).done(function (response) {\n          window.location.reload();\n        }).fail(function (data) {\n          Swal.fire('Oops...', data.responseJSON.message, data.responseJSON.status);\n        });\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzP2ZlNjQiXSwibmFtZXMiOlsiJCIsImNsaWNrIiwiU3dhbCIsImZpcmUiLCJ0aXRsZSIsInRleHQiLCJpY29uIiwic2hvd0NhbmNlbEJ1dHRvbiIsImNvbmZpcm1CdXR0b25UZXh0IiwiY2FuY2VsQnV0dG9uVGV4dCIsInRoZW4iLCJyZXN1bHQiLCJpc0NvbmZpcm1lZCIsImFqYXgiLCJtZXRob2QiLCJ1cmwiLCJkZWxldGV1cmwiLCJkYXRhIiwiZG9uZSIsInJlc3BvbnNlIiwid2luZG93IiwibG9jYXRpb24iLCJyZWxvYWQiLCJmYWlsIiwicmVzcG9uc2VKU09OIiwibWVzc2FnZSIsInN0YXR1cyJdLCJtYXBwaW5ncyI6IkFBQUFBLENBQUMsQ0FBQyxZQUNGO0FBQ0lBLEVBQUFBLENBQUMsQ0FBQyxTQUFELENBQUQsQ0FBYUMsS0FBYixDQUFtQixZQUNuQjtBQUFBOztBQUNJQyxJQUFBQSxJQUFJLENBQUNDLElBQUwsQ0FDQztBQUNHQyxNQUFBQSxLQUFLLEVBQUUsZUFEVjtBQUVHQyxNQUFBQSxJQUFJLEVBQUUsc0RBRlQ7QUFHR0MsTUFBQUEsSUFBSSxFQUFFLFNBSFQ7QUFJR0MsTUFBQUEsZ0JBQWdCLEVBQUUsSUFKckI7QUFLR0MsTUFBQUEsaUJBQWlCLEVBQUUsaUJBTHRCO0FBTUdDLE1BQUFBLGdCQUFnQixFQUFFO0FBTnJCLEtBREQsRUFTQ0MsSUFURCxDQVNNLFVBQUNDLE1BQUQsRUFDTjtBQUNJLFVBQUlBLE1BQU0sQ0FBQ0MsV0FBWCxFQUNJO0FBQ0lWLFFBQUFBLElBQUksQ0FBQ0MsSUFBTCxDQUVBLFVBRkEsRUFHQSx1Q0FIQSxFQUlBLFNBSkE7QUFNSkgsUUFBQUEsQ0FBQyxDQUFDYSxJQUFGLENBQ0M7QUFDR0MsVUFBQUEsTUFBTSxFQUFFLFFBRFg7QUFFR0MsVUFBQUEsR0FBRyxFQUFFQyxTQUFTLEdBQUdoQixDQUFDLENBQUMsS0FBRCxDQUFELENBQVFpQixJQUFSLENBQWEsSUFBYixDQUZwQixDQUdHOztBQUhILFNBREQsRUFNQ0MsSUFORCxDQU1NLFVBQVNDLFFBQVQsRUFDTjtBQUNJQyxVQUFBQSxNQUFNLENBQUNDLFFBQVAsQ0FBZ0JDLE1BQWhCO0FBQ0gsU0FURCxFQVVDQyxJQVZELENBVU0sVUFBU04sSUFBVCxFQUNOO0FBQ0lmLFVBQUFBLElBQUksQ0FBQ0MsSUFBTCxDQUFVLFNBQVYsRUFBcUJjLElBQUksQ0FBQ08sWUFBTCxDQUFrQkMsT0FBdkMsRUFBZ0RSLElBQUksQ0FBQ08sWUFBTCxDQUFrQkUsTUFBbEU7QUFDSCxTQWJEO0FBY0g7QUFDSixLQWxDRDtBQW9DSCxHQXRDRDtBQXVDSCxDQXpDQSxDQUFEIiwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpXG57XG4gICAgJCgnLmRlbGV0ZScpLmNsaWNrKGZ1bmN0aW9uKClcbiAgICB7XG4gICAgICAgIFN3YWwuZmlyZVxuICAgICAgICAoe1xuICAgICAgICAgICAgdGl0bGU6ICdBcmUgeW91IHN1cmU/JyxcbiAgICAgICAgICAgIHRleHQ6ICdZb3Ugd2lsbCBub3QgYmUgYWJsZSB0byByZWNvdmVyIHRoaXMgaW1hZ2luYXJ5IGZpbGUhJyxcbiAgICAgICAgICAgIGljb246ICd3YXJuaW5nJyxcbiAgICAgICAgICAgIHNob3dDYW5jZWxCdXR0b246IHRydWUsXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uVGV4dDogJ1llcywgZGVsZXRlIGl0IScsXG4gICAgICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiAnTm8sIGtlZXAgaXQnXG4gICAgICAgIH0pXG4gICAgICAgIC50aGVuKChyZXN1bHQpID0+IFxuICAgICAgICB7XG4gICAgICAgICAgICBpZiAocmVzdWx0LmlzQ29uZmlybWVkKSBcbiAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgIFN3YWwuZmlyZVxuICAgICAgICAgICAgICAgICAgICAoXG4gICAgICAgICAgICAgICAgICAgICdEZWxldGVkIScsXG4gICAgICAgICAgICAgICAgICAgICdZb3VyIGltYWdpbmFyeSBmaWxlIGhhcyBiZWVuIGRlbGV0ZWQuJyxcbiAgICAgICAgICAgICAgICAgICAgJ3N1Y2Nlc3MnXG4gICAgICAgICAgICAgICAgICAgIClcbiAgICAgICAgICAgICAgICAkLmFqYXhcbiAgICAgICAgICAgICAgICAoe1xuICAgICAgICAgICAgICAgICAgICBtZXRob2Q6IFwiREVMRVRFXCIsXG4gICAgICAgICAgICAgICAgICAgIHVybDogZGVsZXRldXJsICsgJCh0aGlzKS5kYXRhKFwiaWRcIilcbiAgICAgICAgICAgICAgICAgICAgLy9kYXRhOiB7aWQ6ICQodGhpcykuZGF0YShcImlkXCIpfVxuICAgICAgICAgICAgICAgIH0pXG4gICAgICAgICAgICAgICAgLmRvbmUoZnVuY3Rpb24ocmVzcG9uc2UpXG4gICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAuZmFpbChmdW5jdGlvbihkYXRhKVxuICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKCdPb3BzLi4uJywgZGF0YS5yZXNwb25zZUpTT04ubWVzc2FnZSwgZGF0YS5yZXNwb25zZUpTT04uc3RhdHVzKVxuICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgfSBcbiAgICAgICAgfSlcblxuICAgIH0pO1xufSk7Il0sImZpbGUiOiIuL3Jlc291cmNlcy9qcy9kZWxldGUuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/delete.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/delete.js"]();
/******/ 	
/******/ })()
;