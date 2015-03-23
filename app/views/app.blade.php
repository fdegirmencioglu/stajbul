<!DOCTYPE html>
<html lang="en" ng-app="Stajbul">
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
    <link rel="stylesheet" href="/css/font-awesome-ie7.min.css" />
    <script type="text/javascript" src="/js/vendor/modernizr.js"></script> 
    <script src="/ckeditor/ckeditor.js"></script>

</head>
<body>
    <header ng-controller="ProfilesController">
        <base href="/">

        <nav class="top-bar foundation-bar docs-bar" data-topbar role="navigation">
            <ul class="title-area">
                <li class="name">
                    <h1><a href="/"><img  src="/images/logo_sm.png" alt=""/></a></h1>
                </li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">

                <!-- Left Nav Section -->
                <ul class="left">
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-exclamation fa-fw"></i>&nbsp;Bildirimler&nbsp;<span class="badge badge-default">&nbsp;7&nbsp;</span></a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-envelope-o fa-fw"></i>&nbsp;Mesajlar&nbsp;<span class="badge badge-default">&nbsp;1&nbsp;</span></a></li>
                    <li class="divider"></li>
                </ul>  
                <!-- Right Nav Section -->
                <ul class="right">
                    <li class="has-dropdown not-click"> 
                        <a href="" >


                            <img class="imgprofile" width="50px" ng-src="@{{resim_adi}}"   /></a>
                        <ul class="dropdown">
                            <li><a href="/admin/profile">Profilim</a></li>

                        </ul>
                    </li>

                    <!-- Yönetici-->
                    <?php if (Sentry::getUser()->hasAnyAccess(['managers'])) { ?>
                        <li class="not-click"><a><span class="[radius secondary label]">YÖNETİCİ</span></a></li>
                    <?php } ?> 

                    <!-- Firma-->
                    <?php if (Sentry::getUser()->hasAnyAccess(['companies'])) { ?>
                        <li class="not-click"><a><span class="[radius secondary label]">FİRMA</span></a></li>
                    <?php } ?>  

                    <!-- Akademisyen-->
                    <?php if (Sentry::getUser()->hasAnyAccess(['academicians'])) { ?>
                        <li class="not-click"><a><span class="[radius secondary label]">AKADEMİSYEN</span></a></li>
                    <?php } ?>  

                    <!-- ÖĞRENCİ-->
                    <?php if (Sentry::getUser()->hasAnyAccess(['students'])) { ?>
                        <li class="not-click"><a><span class="[radius secondary label]">ÖĞRENCİ</span></a></li>
                    <?php } ?>  

                    <li class="divider"></li>

                    <!-- Yönetici-->
                    <?php if (Sentry::getUser()->hasAnyAccess(['managers'])) { ?>
                        <li><a href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Onay Bekleyen&nbsp;<span class="badge badge-default">&nbsp;3&nbsp;</span></a></li>
                    <?php } ?> 

                    <!-- Firma-->
                    <?php if (Sentry::getUser()->hasAnyAccess(['companies'])) { ?>
                        <li><a href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Onay Bekleyen&nbsp;<span class="badge badge-default">&nbsp;3&nbsp;</span></a></li>
                    <?php } ?> 

                    <!-- Akademisyen-->
                    <?php if (Sentry::getUser()->hasAnyAccess(['academicians'])) { ?>
                        <li><a href="#"><i class="fa fa-check fa-fw"></i>&nbsp;Onay Bekleyen&nbsp;<span class="badge badge-default">&nbsp;3&nbsp;</span></a></li>
                    <?php } ?> 

                    <!-- Öğrenci-->
                    <?php if (Sentry::getUser()->hasAnyAccess(['students'])) { ?>
                        <li><a href="#"><i class="fa fa-check fa-fw"></i>&nbsp;PUANLA&nbsp;<span class="badge badge-default">&nbsp;3&nbsp;</span></a></li>
                    <?php } ?> 

                    <li class="divider"></li>
                    <li class="has-dropdown not-click">
                        <a href="#">Çıkış</a> 
                        <ul class="dropdown"> 
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#" ng-click="logout()">Oturumu Sonlandır</a></li>
                                </ul>
                            </li>  
                        </ul>  
                    </li>
                </ul>       

            </section>
        </nav>

    </header>
<div id="sidebar"><!-- Start sidebar menu -->
    <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->

        <div class="divspace"></div>

        <ul class="accordion reset-margin-left " data-accordion="myAccordionGroup"> 

            <?php if (Sentry::getUser()->hasAnyAccess(['managers'])) { ?>
                <li class="accordion-navigation"> 
                    <a href="#panel1c"><i class="fa fa-star fa-fw"></i>&nbsp;Firma İşlemleri</a> 
                    <div id="panel1c" class="content"> 
                        <ul class="side-nav"><li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Firma Ana Sayfa</a></li></ul>
                    </div> 
                </li> 

                <li class="accordion-navigation"> 
                    <a href="#panel2c"><i class="fa fa-book fa-fw"></i>&nbsp;Öğrenci İşlemleri</a> 
                    <div id="panel2c" class="content"> 
                        <ul class="side-nav"><li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Öğrenci Ana Sayfa</a></li></ul>
                    </div> 
                </li> 

                <li class="accordion-navigation"> 
                    <a href="#panel3c"><i class="fa fa-university fa-fw"></i>&nbsp;Akademisyen İşlemleri</a> 
                    <div id="panel3c" class="content"> 
                        <ul class="side-nav"><li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Akademisyen Ana Sayfa</a></li></ul>
                    </div> 
                </li> 

                <li class="accordion-navigation"> 
                    <a href="#panel4c"><i class="fa fa-th-list fa-fw"></i>&nbsp;Listeleme İşlemleri</a> 
                    <div id="panel4c" class="content"> 
                        <ul class="side-nav">
                            <li><a href="#"><i class="fa fa-book fa-fw"></i>&nbsp;Öğrenci Listele</a></li>
                            <li><a href="#"><i class="fa fa-star fa-fw"></i>&nbsp;Firma Listele</a></li>
                            <li><a href="#"><i class="fa fa-university fa-fw"></i>&nbsp;Akademisyen Listele</a></li>
                            <li><a href="/admin/list"><i class="fa fa-user-secret fa-fw"></i>&nbsp;Yönetici Listele</a></li>
                            <li><a href="/admin/log_list"><i class="fa fa-file-text-o fa-fw"></i>&nbsp;Log Listele</a></li>
                        </ul>
                    </div> 
                </li> 

                <li class="accordion-navigation"> 
                    <a href="#panel5c"><i class="fa fa-lightbulb-o fa-fw"></i>&nbsp;Yönetici İşlemleri</a> 
                    <div id="panel5c" class="content"> 
                        <ul class="side-nav">
                            <li><a href="/admin/new"><i class="fa fa-building fa-fw"></i>&nbsp;Yönetici Ekleme</a></li>
                            <li><a href="/admin/profile"><i class="fa fa-cogs fa-fw"></i>&nbsp;Profilim</a></li>
                            <li><a href="/admin/confirmation"><i class="fa fa-cogs fa-fw"></i>&nbsp;Yeni Üye Onay</a></li>
                        </ul>
                    </div> 
                </li> 

            <?php } ?>

            <li class="accordion-navigation"> 
                <a href="#panel6c"><i class="fa fa-folder-o fa-fw"></i>&nbsp;Staj Raporu</a> 
                <div id="panel6c" class="content"> 
                    <ul class="side-nav">
                        <?php if (Sentry::getUser()->hasAnyAccess(['managers']) || Sentry::getUser()->hasAnyAccess(['students'])) { ?>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Listele(Y-Ö)</a></li>
                        <?php } ?>

                        <?php if (Sentry::getUser()->hasAnyAccess(['students'])) { ?>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Ekle(Ö)</a></li>
                        <?php } ?>

                        <?php if (Sentry::getUser()->hasAnyAccess(['companies'])) { ?>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Firma Onay (F)</a></li>
                        <?php } ?>

                        <?php if (Sentry::getUser()->hasAnyAccess(['academicians'])) { ?>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Akademisyen Onay(A)</a></li>
                        <?php } ?>
                    </ul>
                </div> 
            </li> 

            <?php if (Sentry::getUser()->hasAnyAccess(['companies'])) { ?>
                <li class="accordion-navigation"> 
                    <a href="#panel7c"><i class="fa fa-briefcase fa-fw"></i>&nbsp;Firma İşlemler</a> 
                    <div id="panel7c" class="content"> 
                        <ul class="side-nav">
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;İlan Ver</a></li>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Seçtiğim CV'lerim</a></li>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Başvuranlar</a></li>
                            <li><a href="/company/profile"><i class="fa fa-diamond fa-fw"></i>&nbsp;Firma Profili</a></li>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Mülakatlarım</a></li>
                        </ul>
                    </div> 
                </li> 
            <?php } ?>

            <?php if (Sentry::getUser()->hasAnyAccess(['students'])) { ?>
                <li class="accordion-navigation"> 
                    <a href="#panel8c"><i class="fa fa-cog fa-fw"></i>&nbsp;Öğrenci İşlemler</a> 
                    <div id="panel8c" class="content"> 
                        <ul class="side-nav">
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Staja Başvur</a></li>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Staj Ara</a></li>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Firma Oyla</a></li>
                            <li><a href="/admin/profile"><i class="fa fa-cogs fa-fw"></i>&nbsp;Profilim</a></li>
                        </ul>
                    </div> 
                </li> 
            <?php } ?>

            <?php if (Sentry::getUser()->hasAnyAccess(['academicians'])) { ?>
                <li class="accordion-navigation"> 
                    <a href="#panel9c"><i class="fa fa-graduation-cap fa-fw"></i>&nbsp;Akademisyen İşlemler</a> 
                    <div id="panel9c" class="content"> 
                        <ul class="side-nav">
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Staja Atama</a></li>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Rapor Notlama</a></li>
                            <li><a href="#"><i class="fa fa-play fa-fw"></i>&nbsp;Stajyerlerimi Listele</a></li>
                        </ul>
                    </div> 
                </li>
            <?php } ?>


            <li class="accordion-navigation"> 
                <a href="#panel11c"><i class="fa fa-paper-plane fa-fw"></i>&nbsp;İletişim</a> 
                <div id="panel11c" class="content"> 
                    <ul class="side-nav">
                        <li><a href="#"><i class="fa fa-envelope-o fa-fw"></i>&nbsp;Mesaj Gönder</a></li>
                    </ul>
                </div> 
            </li>


        </ul> 
    </div>
</div> 
<!-- End #sidebar -->

<div class="page-content"> 
    @yield('content')

</div>

<?php
$getCurrentUserID = Sentry::getUser()->id;
if (Sentry::getUser()->hasAnyAccess(['companies'])) {
    $getCurrentCompanyID = DB::SELECT('SELECT id FROM company_meta WHERE user_id = ?', [$getCurrentUserID]);
    $getCurrentCompanyCityID = DB::SELECT('SELECT sehir FROM company_meta WHERE id = ?', [$getCurrentCompanyID[0]->id]);
}
/*
  echo '<pre>';
  var_dump($getCurrentCompanyCityID);
  echo '</pre>';

  echo '<br/> SONUC=' . $getCurrentCompanyCityID[0]->sehir;
  //echo '<br/> getUserID='. $getUserID;

  echo '<br/>Veri1= ' . '<input type="text" name="fname" value="' . $getCurrentCompanyID[0]->id . '" />';
  echo 'Veri2= ' . '<input type="text" name="fname" value="' . $getCurrentCompanyCityID[0]->sehir . '" />'; */
?>


<input type="hidden" id="current_user_id" name="user_id" ng-model="current_user_id" value="<?php echo Sentry::getUser()->id; ?>" />


<?php if (Sentry::getUser()->hasAnyAccess(['companies'])) { ?>
    <input type="hidden" id="current_company_id" name="current_company_id" ng-model="current_company_id" value="<?php echo $getCurrentCompanyID[0]->id; ?>" />

    <input type="hidden" id="current_company_city_id" name="current_company_city_id" ng-model="current_company_city_id" value="<?php echo $getCurrentCompanyCityID[0]->sehir; ?>" />

<?php } ?>




<!-- Scripts -->
<script type="text/javascript" src="/js/vendor/jquery.js"></script>

<script type="text/javascript" src="/js/vendor/angular.min.js"></script> 
<script type="text/javascript" src="/js/vendor/angular-route.min.js"></script> 

<!-- shim is needed to support non-HTML5 FormData browsers (IE8-9)-->
<script src="/js/vendor/angular-file-upload-shim.min.js"></script> 
<script src="/js/vendor/angular-file-upload.min.js"></script> 


<script src="/js/vendor/dirPagination.js"></script> 

<script type="text/javascript" src="/js/foundation.min.js"></script> 
<script type="text/javascript" src="/js/app.js"></script> 
<script type="text/javascript" src="/js/services/LogsFactory.js"></script>  
<script type="text/javascript" src="/js/services/ProfilesFactory.js"></script>
<script type="text/javascript" src="/js/services/ManagersFactory.js"></script> 
<script type="text/javascript" src="/js/services/CompanyProfilesFactory.js"></script> 
<script type="text/javascript" src="/js/controller/ProfilesController.js"></script>
<script type="text/javascript" src="/js/controller/ManagersController.js"></script> 
<script type="text/javascript" src="/js/controller/CompanyProfilesController.js"></script>  
<script type="text/javascript" src="/js/controller/LogsController.js"></script> 

<script>
        $(document).foundation();
</script>

</body>
</html>