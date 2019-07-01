var app = angular.module('myApp', ["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "eindopdracht.html"
    })
    .when("/update", {
        templateUrl : "update.php"
    })
    .when("/delete", {
        templateUrl : "delete.php"
    });
});


 app.controller('bedrijfCtrl', function($scope, $http) {
   $http.get("select.php")
   .then(function (response) {$scope.persoon = response.data.records;//get Json and put it in bedrijf
   });
   $scope.orderByMe = function(x) {//order by me
       $scope.myOrderBy = x;
   }

   // $scope.ID = function(id){
   //   $scope.clickID = id;
   // }

   //delete
   $scope.click = function (id) {
     console.log("request ");
      var request = $http({//HTTP REQUEST
          method: "POST",
          url: "delete.php",
          data: {'id': id},
          headers: { 'Content-Type': 'application/json' }
      }).then(successCallback, errorCallback);

      function successCallback(data){
        console.log("success");
      }
      function errorCallback(error){
        console.log("error: "+error);
        $scope.msg = error;
      }

    }
  });//controller
