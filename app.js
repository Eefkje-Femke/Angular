var app = angular.module('myApp', ["ngRoute"]);
var id = 0;

app.config(function($routeProvider) {
    $routeProvider
    .when("/index", {
        templateUrl : "eindopdracht.html"
    })
    // .when("/users/id/update", {
    //     templateUrl : "update.php"
    // })
    .when("/update", {
        templateUrl : "update.php"
    })
    .when("/delete", {
        templateUrl : "delete.php"
    });
});


 app.controller('bedrijfCtrl', function($scope, $http) {
   $http.get("select.php")
   .then(function (response) {
     $scope.persoon = response.data.records;//get Json and put it in bedrijf
     // id = $scope.persoon.id;
   });
   $scope.orderByMe = function(x) {//order by me
       $scope.myOrderBy = x;
   }

   $scope.test = function (){
     console.log(id);
   }

   //delete
   $scope.click = function (id) {
     alert("Are you sure you want to delete id:" + id + "?");
     console.log("request ");
      var request = $http({//HTTP REQUEST
          method: "POST",
          url: "delete.php",
          data: {'id': id},
          headers: { 'Content-Type': 'application/json' }
      }).then(successCallback, errorCallback);

      function successCallback(data){
        console.log("success");
        // location.replace("http://localhost/JavaScript/AngularJs/Eindopdracht/eindopdracht.html");
      }
      function errorCallback(error){
        console.log("error: "+error);
        $scope.msg = error;
      }

    }
  });//controller

// https://phpenthusiast.com/blog/ajax-with-angular-and-php
// https://www.youtube.com/watch?v=patjvNM9Qbc&list=PL4cUxeGkcC9jqhk5RvBiEwHMKSUXPyng0&index=16
// https://angular-2-training-book.rangle.io/handout/routing/routeparams.html
