var app = angular.module('myApp', ["ngRoute"]);

app.config(function($routeProvider) {//routing
    $routeProvider
    .when("/index", {
        templateUrl : "eindopdracht.html"
    })
    .when("/update", {
        templateUrl : "update.php"
    })
    .when("/delete", {
        templateUrl : "delete.php"
    })
    .when("/create", {
        templateUrl : "create.php"
    });
});

//controller
 app.controller('bedrijfCtrl', function($scope, $http) {
   $http.get("select.php")
   .then(function (response) {
     $scope.persoon = response.data.records;//get Json and put it in persoon
   });
   $scope.orderByMe = function(x) {//order by me
       $scope.myOrderBy = x;
   }

   $scope.time = function(){//timestamp function
      var currentDate = new Date();
      var date = currentDate.getDate();
      var month = currentDate.getMonth(); //Be careful! January is 0 not 1
      var year = currentDate.getFullYear();

      var dateString = date + "-" +(month + 1) + "-" + year;
      $scope.timsestamp = dateString;
   }
  });//controller
