<html>
<title>AngularJS First Application</title>
<body>
<script src="angular.js"></script>
<h1>Sample Application</h1>
<div ng-app="">
<p>Enter your Name: <input type="text" ng-model="name"></p>
<p>Hello <span ng-bind="name"></span>!</p>
</div>