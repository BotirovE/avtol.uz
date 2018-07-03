angular.module('app', ['ngAnimate']);
var app = angular.module("app", []);
app.controller("tyresSortController", ["$scope", function ($tyres) {
  $tyres.tyres = tyres;
  // define list of items
  $tyres.tyresCategory = tyresCategory;
  $tyres.tyresSeason = tyresSeason;
  $tyres.tyresBrand = tyresBrand;
  $tyres.tyresDiameter = tyresDiameter;
  $tyres.tyresSize = tyresSize;

	$tyres.filter = {};
  // reset the filter
  $tyres.resetFilter = function() {
    // set filter object as blank
    $tyres.filter = {};
  }
}]);
app.controller("accumSortController", ["$scope", function ($accum) {
  $accum.accum = accum;
  // define list of items
  $accum.accumBrand = accumBrand;
  $accum.accumName = accumName;
  $accum.accumCapacity = accumCapacity;
  $accum.accumSize = accumSize;
  $accum.accumAvto = carBrand;

  $accum.accumFilter = {};
  // reset the filter
  $accum.resetFilter = function() {
    // set filter object as blank
    $accum.accumFilter = {};
  }
}]);

app.controller("rimsSortController", ["$scope", function ($rims) {
  $rims.rims = rims;
  // define list of items
  $rims.rimsBrand = rimsBrand;
  $rims.rimsSize = rimsSize;
  $rims.rimsColor = rimsColor;
  $rims.rimsGap = rimsGap;
  $rims.rimsDiameter = rimsDiameter;

  $rims.rimsFilter = {};
  // reset the filter
  $rims.resetFilter = function() {
    // set filter object as blank
    $rims.rimsFilter = {};
  }
}]);

app.controller("carpetSortController", ["$scope", function ($carpet) {
  $carpet.carpet = carpet;
      // define list of items
  $carpet.carpetBrand = carpetBrand;
	$carpet.carpetColor = carpetColor;

	$carpet.carpetFilter = {};
  // reset the filter
  $carpet.resetFilter = function() {
  // set filter object as blank
  	$carpet.carpetFilter = {};
  }
}]);

app.controller('cart', function ($scope) {
  
  $scope.cart = [];
 	$scope.total = 0;

  function saveCart() {
    localStorage.setItem("shoppingCart", JSON.stringify($scope.cart));
  }

  function loadCart() {
    $scope.cart = JSON.parse(localStorage.getItem("shoppingCart"));
    if ($scope.cart === null) {
      $scope.cart = []
    }
  }
  loadCart();

	// $scope.countCart = function () { // -> return total count
 //    var totalCount = 0;
 //    for (var i in $scope.cart) {
 //        totalCount += $scope.cart[i].count;
 //    }
 //    totalCount;
 //    $('#counter').innerHTML = totalCount;
 //  };
	
  $scope.getCost = function(item) {
    return item.count * item.price;
  };

  $scope.addItem = function (product) {
    if ($scope.cart.length === 0){
	 		product.count = 1;
	 		$scope.cart.push(product);
	 	} else {
	 		var repeat = false;
	 		for(var i = 0; i< $scope.cart.length; i++){
	 			if($scope.cart[i].id === product.id && $scope.cart[i].type === product.type){
	 				repeat = true;
	 				$scope.cart[i].count +=1;
	 			}
	 		}
	 		if (!repeat) {
	 			product.count = 1;
	 		 	$scope.cart.push(product);	
	 		}
	 	}
    saveCart();
  };
  
  $scope.counter = function(){
  	var counter = 0;
    angular.forEach($scope.cart, function(item) {
      counter += item.count;
    })
    return counter;
  	saveCart();
  }
  $scope.getTotal = function() {
    var total = 0;
    angular.forEach($scope.cart, function(item) {
      if ($('.delivery').value === 'express') {
        total += (item.price * item.count)+15000;
      }
      else{
        total += item.price * item.count;
      }
    })
    return total;
    saveCart();
  }
  app.filter('nospace', function () {
    return function (value) {
      return (!value) ? '' : value.replace(/ /g, '');
    };
	});

  $scope.clearCart = function() {
    $scope.cart.length = 0;
    $scope.total = 0;
    saveCart();
  };
  
	$scope.removeItemCart = function(product){
	  if(product.count > 1){
	    product.count -= 1;
	  }
	  else if(product.count === 1){
	    var index = $scope.cart.indexOf(product);
			$scope.cart.splice(index, 1);
	  }
	  saveCart();
  };

  $scope.removeItem = function(item) {
    var index = $scope.cart.indexOf(item);
    $scope.cart.splice(index, 1);
  	$scope.total = $scope.total - (item.price * item.count);
  	saveCart();
  };
});

$(function(){
$(".dropdown").hover(            
  function() {
      $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
      $(this).toggleClass('open');
  },
  function() {
      $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
      $(this).toggleClass('open');
  });
});


// ==================================================
// 
// jquery-input-mask-phone-number v1.0
//
// ==================================================

(function ($) {
  $.fn.usPhoneFormat = function (options) {
    var params = $.extend({
      format: 'xx-xxx-xxxx',
      international: false,
  	}, options);

  	if (params.format === 'xx-xxx-xxxx') {
      $(this).bind('paste', function (e) {
        e.preventDefault();
        var inputValue = e.originalEvent.clipboardData.getData('Text');
        if (!$.isNumeric(inputValue)) {
          return false;
        } else {
          inputValue = String(inputValue.replace(/(\d{3})(\d{3})(\d{4})/, "$1-$2-$3"));
          $(this).val(inputValue);
          $(this).val('');
          inputValue = inputValue.substring(0, 12);
          $(this).val(inputValue);
        }
      });
      $(this).on('keypress', function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          return false;
        }
          var curchr = this.value.length;
          var curval = $(this).val();
          if (curchr == 2) {
            $(this).val(curval + "-");
          } else if (curchr == 7) {
            $(this).val(curval + "-");
          }
          $(this).attr('maxlength', '12');
      });

  	} else if (params.format === '(xx) xxx-xxxx') {
      $(this).on('keypress', function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          return false;
        }
        var curchr = this.value.length;
        var curval = $(this).val();
        if (curchr == 2) {
          $(this).val('+998(' + curval + ')' + " ");
        } else if (curchr == 12) {
          $(this).val(curval + "-");
        } else if(curchr == 15){
      		$(this).val(curval + "-");
        }
        $(this).attr('maxlength', '18');
      });
      $(this).bind('paste', function (e) {
        e.preventDefault();
        var inputValue = e.originalEvent.clipboardData.getData('Text');
        if (!$.isNumeric(inputValue)) {
          return false;
        } else {
          inputValue = String(inputValue.replace(/(\d{3})(\d{3})(\d{4})/, "($1) $2-$3"));
          $(this).val(inputValue);
          $(this).val('');
          inputValue = inputValue.substring(0, 14);
          $(this).val(inputValue);
        }
      });
    }
  }
}(jQuery));

$(document).ready(function() {
  $('.method').on('click', function() {
    $('.method').removeClass('active');
    $(this).addClass('active');
  });
})