<!doctype html>
<html lang="tr" ng-app="myApp">
    <head>
        @include('includes.head')
    </head>
    <body class="login">
        <header class="row">
            @include('includes.header')
        </header>

    <div class="small-12 small-centered medium-8 medium-centered large-5 large-centered columns">
        @yield('content')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

    @include('includes.foot')
</body>
</html>
