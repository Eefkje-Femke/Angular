var app = angular.module('myApp', ["ngRoute"]);


 app.controller('bedrijfCtrl', function($scope, $http) {
   $http.get("connect.php")
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
          // headers: { 'Content-Type': 'application/x-www-form-urlencoded' }//url coded
          //headers: { 'Content-Type': 'text/html' }//url coded
          //headers: { 'Content-Type': 'application/json' }//url coded

      }).then(successCallback, errorCallback);

      function successCallback(response){
        console.log("response");
        $scope.msg = response;
      }
      function errorCallback(error){
        console.log("error: "+error);
      $scope.msg = error;
      }

    }

});

// app.config(function($routeProvider) {
//     $routeProvider
//     .when("/", {
//         templateUrl : "eindopdracht.html"
//     })
//     .when("/delete", {
//         templateUrl : "delete.php"
//     });
// });

  // var url = '/delete', data = {{ x.id }} ,config='contenttype';
  // $http.post(url, data, config).then(function (response) {
  //
  // // This function handles success
  //
  // }, function (response) {
  //
  // // this function handles error
  //
  // });


     // $scope.click = function(id) {
     //   $scope.msg = "Do you want to delete id: "+ id;//ID IS HIER!!!!
     //
     //   var url = '/delete', data = id;
     //   $http.post(url, data).then(function (response) {
     //     $scope.test = "Post Data Submitted Successfully!";
     //   }, function (response) {
     //     $scope.test = "Service not Exists";
     //   });
     // }
