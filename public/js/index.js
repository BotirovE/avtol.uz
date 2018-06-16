angular.module('app', ['ngAnimate']);
var app = angular.module("app", []);
app.controller("tyresSortController", ["$scope", function ($tyres) {
  $tyres.tyres = tyres;
  // define list of items
  $tyres.tyresType = ["Легковые шины","Легко-грузовые шины","Грузовые шины","Сельскохозяйственные шины","Шины для спец техники"];
  $tyres.tyresSeason = ["Летные шины","Зимные шины","Всесезонные шины"];
  $tyres.tyresBrand = ["Pirelli","Dunlop","Cooper","Hankook"];
  $tyres.tyresDiametr = ["12","13","14","15","17","17.5","19"];
  $tyres.tyresSize = ["135/80","145/65","145/70","155/60","165/80","185"];

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
  $accum.accumName = ["6CT-35","6CT-50","6CT-66","6CT-55","6CT-150"];
  $accum.accumCapacity = ["35","50","66","55","150"];
  $accum.accumSize = ["199x131x227","200x170x190","277x175x190","242x175x190","515x191x239"];
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
  $rims.rimsBrand = ["WSP Italy","VAG","Opel"];
  $rims.rimsSize = ["6x15","6x16","5x110","5x112"];
  $rims.rimsColor = ["Серебро","Серый","Хром","Чёрный"];
  $rims.rimsHole = ["5x112","4x114,3","5x110","5x112"];
  $rims.rimsHubDiametr = ["65.1","57.1","56.6"];

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
  $carpet.carpetBrand = ["Novline", "Airline"];
	$carpet.carpetColor = ["Серебро","Серый","Хром","Чёрный","Красный"];

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

  $scope.counter = 0;
	$scope.countCart = function () { // -> return total count
    var totalCount = 0;
    for (var i in $scope.cart) {
        totalCount += $scope.cart[i].count;
    }
    totalCount;
    $('#counter').innerHTML = totalCount;
  };

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
	 			if($scope.cart[i].id === product.id){
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
  
  $scope.getTotal = function() {
    var total = 0;
    angular.forEach($scope.cart, function(item) {
      total += item.price * item.count;
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