<!doctype html>
<html lang="en" ng-app="myApp">
<head>
  <meta charset="UTF-8">
  <title>Stajbul</title>

  <link rel="stylesheet" type="text/css" href="css/foundation.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <script type="text/javascript" src="js/vendor/modernizr.js'"></script>
</head>
<body>	

  <div class="small-12 small-centered medium-8 medium-centered large-5 large-centered columns">
      @yield('content')
  </div>

	<script type="text/javascript" src="js/vendor/jquery.js"></script>
	<script type="text/javascript" src="js/vendor/angular.min.js"></script>
	<script type="text/javascript" src="js/foundation.min.js"></script>

	<script type="text/javascript" src="js/controller/controller.js"></script>

	<script>
		$(document).foundation();
	</script>

</body>
</html>
