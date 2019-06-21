var app = angular.module("myApp", []);

app.controller("myCtrl", function($scope) {
  $scope.firstName = "John";
  $scope.lastName = "Doe";
});

app.controller("myControl", function($scope) {
  $scope.firstName = "Vannessa";
  $scope.lastName = "Hudgens";
});
