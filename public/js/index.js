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

      // reset the filter
      $tyres.resetFilter = function() {
        // set filter object as blank
        $tyres.type = "";
        $tyres.season = ""; 
        $tyres.brand = "";
        $tyres.diametr = "";
      	$tyres.size = "";
      }
}]);
app.controller("accumSortController", ["$scope", function ($accum) {
  $accum.accum = accum;
      // define list of items
      $accum.accumBrand = ["Atlant","Energy","hoppenergy","Daz","KUCH"];
      $accum.accumName = ["6CT-35","6CT-50","6CT-66","6CT-55","6CT-150"];
      $accum.accumCapacity = ["35","50","66","55","150"];
      $accum.accumSize = ["199x131x227","200x170x190","277x175x190","242x175x190","515x191x239"];
      $accum.accumAvto = ["matiz","spark","volga","neksiya","zil"];
      // reset the filter
      $accum.resetFilter = function() {
        // set filter object as blank
        $accum.brand = "";
        $accum.name = ""; 
        $accum.capacity = "";
        $accum.size = "";
      	$accum.avto = "";
      }
}]);


/*app.controller('cart', function ($scope) {
    
  $scope.cart = [];
  
  var findItemById = function(items, id) {
    return find(items, function(item) {
      return item.id === id;
    });
  };
  
  $scope.getCost = function(item) {
    return item.qty * item.price;
  };

  $scope.addItem = function(itemToAdd) {
    var found = findItemById($scope.cart, itemToAdd.id);
    if (found) {
      found.qty += itemToAdd.qty;
    }
    else {
      $scope.cart.push(angular.copy(itemToAdd));}
  };
  
  $scope.getTotal = function() {
    var total =  reduce($scope.cart, function(sum, item) {
      return sum + $scope.getCost(item);
    }, 0);
    console.log('total: ' + total);
    return total;
  };
  
  $scope.clearCart = function() {
    $scope.cart.length = 0;
  };
  
  $scope.removeItem = function(item) {
    var index = $scope.cart.indexOf(item);
    $scope.cart.splice(index, 1);
  };
});*/

app.controller('cart', function ($scope) {
  
  $scope.cart = [];
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
  
  var findItemById = function(items, id) {
    return find(items, function(item) {
      return item.id === id;
    });
  };
  
  $scope.getCost = function(item) {
    return item.qty * item.price;
  };

  // $scope.addItem = function(itemToAdd) {
  //   var found = findItemById($scope.cart, itemToAdd.id);
  //   if (found) {
  //     found.qty += itemToAdd.id.qty;
  //   }
  //   else {
  //     $scope.cart.push(angular.copy(itemToAdd));
  //   }
  //   saveCart();
  // };

  $scope.addItem = function (brand, price, qty) {
        for (var i in $scope.cart) {
            if ($scope.cart[i].brand === brand) {
                $scope.cart[i].qty += $scope.qty;
                saveCart();
                return;
            }
        }

        $scope.cart.push(angular.copy(brand, price, qty));
        saveCart();
    };

  // $scope.getTotal = function() {
  //   var total =  reduce($scope.cart, function(sum, item) {
  //     return sum + $scope.getCost(item);
  //   }, 0);
  //   console.log('total: ' + total);
  //   return total;
  // };
  
  $scope.clearCart = function() {
    $scope.cart.length = 0;
    saveCart();
  };
  
  $scope.removeItem = function(item) {
    var index = $scope.cart.indexOf(item);
    $scope.cart.splice(index, 1);
  	saveCart();
  };
});
