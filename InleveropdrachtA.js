var app = angular.module('myApp', []);

app.controller('myCtrl', function($scope) {
  $scope.regex  = ".*"  //Needed (ngPattern surrounds with ^ and $)
      + "(?=[^\\d]*\\d)"    //At least one digit
      + "(?=[^A-Z]*[A-Z])"  //At least one uppercase character
      + ".*";    //Needed (ngPattern surrounds with ^ and $)
});
