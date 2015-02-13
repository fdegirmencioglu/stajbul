<!doctype html>
<html lang="tr" ng-app="Stajbul">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

        <title>Stajbul</title>

        <link rel="stylesheet" type="text/css" href="/css/foundation.css">
        <link rel="stylesheet" type="text/css" href="/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="/css/custom.css">
        <link rel="shortcut icon" href="favicon.ico" >

        

        <script type="text/javascript" src="/js/vendor/modernizr.js'"></script>

    </head>
    <body class="login">
        <header class="row">
            
          <div class="row">
              <div class="large-12 columns">
                  <div class="logo">
                      <a href="/projem/stajbul/public/">
                          <img src="/images/logo-big.png" alt=""/>
                      </a>
                  </div>
              </div>
          </div>
        </header>

    <div class="small-12 small-centered medium-8 medium-centered large-5 large-centered columns">
        @yield('content2')
    </div>

    <footer class="row">  
      <div class="copyright">© Copyright 2015 Staj-Bul</div>
    </footer>

   

    <script type="text/javascript" src="/js/vendor/jquery.js"></script>
    <script type="text/javascript" src="/js/vendor/angular.min.js"></script>
    <script type="text/javascript" src="/js/foundation.min.js"></script>

    <script type="text/javascript" src="/js/app.js"></script>
    <script type="text/javascript" src="/js/controller/LoginController.js"></script>

    <script>
        $(document).foundation();
    </script>


</body>
</html>