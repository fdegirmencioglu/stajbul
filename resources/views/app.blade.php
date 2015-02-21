<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css' />

    <title>Stajbul</title>
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="/css/foundation.css" />  
    <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="/css/custom.css" />
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <!-- ie7 fix -->
    <link rel="stylesheet" href="css/font-awesome-ie7.min.css" />
    <script type="text/javascript" src="/js/vendor/modernizr.js'"></script>
</head>
<body>
    <header>


        <nav class="top-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                    <h1><a href="#"><i class="fa fa-home fa-fw"></i>&nbsp;Ana Sayfa</a></h1>
                </li>
            </ul>

            <section class="top-bar-section">

                <!-- Left Nav Section -->
                <ul class="left small-4 medium-2 columns">
                    <li><a href="#"><i class="fa fa-exclamation fa-fw"></i>&nbsp;Bildirimler&nbsp;<span class="badge badge-default">&nbsp;7&nbsp;</span></a></li>
                    <li><a href="#"><i class="fa fa-envelope-o fa-fw"></i>&nbsp;Mesajlar&nbsp;<span class="badge badge-default">&nbsp;1&nbsp;</span></a></li>
                </ul>        

                <ul class="small-4 medium-8 small-offset-2 columns"><li><a href="/"><img  src="/images/logo_sm.png" alt=""/></a></li></ul>
                <!-- Right Nav Section -->
                <ul class="right small-4 medium-2 columns">
                    <li class="has-dropdown not-click"> 
                        <a href=""><img class="imgprofile" src="/images/profilresmim.png" alt=""/></a> 
                        <ul class="dropdown">
                            <li><a href="#">Profilim</a></li>
                        </ul>
                    </li>
                    <li class="not-click"><a><span class="[radius secondary label]">YÖNETİCİ</span></a></li>
                    <li><a href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Onay Bekleyen&nbsp;<span class="badge badge-default">&nbsp;3&nbsp;</span></a></li>
                    <li class="has-dropdown not-click">
                        <a href="#">ÇIKIŞ</a>
                        <ul class="dropdown">
                            <li><a href="#">Çıkış Yap</a></li>
                        </ul>
                    </li>
                </ul>       

            </section>
        </nav>

    </header>
    <!--<nav class="navbar navbar-default">
            <div class="container-fluid">
                    <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Laravel</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                    <li><a href="/">Home</a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                    @if (Auth::guest())
                                            <li><a href="/auth/login">Login</a></li>
                                            <li><a href="/auth/register">Register</a></li>
                                    @else
                                            <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                            <li><a href="/auth/logout">Logout</a></li>
                                                    </ul>
                                            </li>
                                    @endif
                            </ul>
                    </div>
            </div>
    </nav>

    @yield('content')-->

    <!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
