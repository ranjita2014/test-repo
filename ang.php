<html>
   <head>
      <title>Angular JS Includes</title>
      <script src = "http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
   </head>
   <body>
     
      <div ng-app="myApp" ng-controller="myCtrl">
	  <span ng-repeat="(index,data) in test">
	  <input type="checkbox" ng-model="name" id="name{{index}}" ng-click="getval(index)">{{data}}
	  </span>
	  
	  <input type="text">
	 
	  <input type="button" ng-click="submit_check()" value="click here">
	  </div>
      
      
   </body>
   <script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {

$scope.test = ["test1","test2","test3","test4","test5"];


	$scope.getval = function(valindex)
	{
		alert(valindex);
	}
    $scope.submit_check=function() {
		angular.forEach($scope.test, function(value, key){
		 	if(key == 3)
			{
				$scope.test[key].checked = true;
				document.getElementById("name"+key).checked=true;
			}
			
	   });
	}
});
</script> 

</html>