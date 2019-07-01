var app = angular.module('myApp', ["ngRoute"]);

 app.controller('bedrijfCtrl', function($scope, $http) {
   $http.get("select.php")
   .then(function (response) {$scope.persoon = response.data.records;//get Json and put it in bedrijf
   });
   $scope.orderByMe = function(x) {//order by me
       $scope.myOrderBy = x;
   }


   $scope.click = function (id) {
     console.log("request ");

     // var request = $http(
     //   {//HTTP REQUEST NOT WORKING!!!!!
     //     method: "POST",
     //     url: "delete.php",
     //     //headers: { 'Content-Type': 'application/x-www-form-urlencoded' }//url coded
     //     //headers: { 'Content-Type': 'text/html' }//url coded
     //     headers: { 'Content-Type': 'application/json' }//url coded
     //   },
     //   JSON.stringify({'id': id })
     // ).then(successCallback, errorCallback);
      var request = $http({//HTTP REQUEST NOT WORKING!!!!!
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


  // app.config(function($routeProvider) {
  //     $routeProvider
  //     .when("/", {
  //         templateUrl : "eindopdracht.html"
  //     })
  //     .when("/delete", {
  //         templateUrl : "delete.php"
  //     });
  // });
