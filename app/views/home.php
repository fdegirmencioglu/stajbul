<!doctype html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<title>Stajbul</title>
</head>
<body>
	<div ng-controller="appController as appCtrl">
		
		<input ng-model="hello" type="text" />
		<div>{{ hello }}</div>
Bu bir değişiklik.
	</div>
	

	<script type="text/javascript" src="js/libs/angular.min.js"></script>
	<script type="text/javascript" src="js/controller/controller.js"></script>
</body>
</html>
