<!DOCTYPE html>
<html lang="en" class="app">


<head>
    <meta charset="utf-8" />
    <title>Scale | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/app.v1.css" type="text/css" />
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
    <!--[if lt IE 9]> <script src="js/ie/html5shiv.js"></script> <script src="js/ie/respond.min.js"></script> <script src="js/ie/excanvas.js"></script> <![endif]-->
</head>

<body class="">
    <section class="vbox">
        <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
            <div class="navbar-header aside-md dk">
                <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i class="fa fa-bars"></i> </a>
                <a href="index.html" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale"> <span class="hidden-nav-xs">Scale</span> </a>
                <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user"> <i class="fa fa-cog"></i> </a>
            </div>
            <ul class="nav navbar-nav hidden-xs">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-grid"></i> </a>
                    <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
                        <div class="row m-l-none m-r-none m-t m-b text-center">
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-mail i-2x text-primary-lt"></i> </span> <small class="text-muted">Mailbox</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-calendar i-2x text-danger-lt"></i> </span> <small class="text-muted">Calendar</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-map i-2x text-success-lt"></i> </span> <small class="text-muted">Map</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-paperplane i-2x text-info-lt"></i> </span> <small class="text-muted">Trainning</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-images i-2x text-muted"></i> </span> <small class="text-muted">Photos</small> </a>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="padder-v">
                                    <a href="#"> <span class="m-b-xs block"> <i class="i i-clock i-2x text-warning-lter"></i> </span> <small class="text-muted">Timeline</small> </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </li>
            </ul>
            <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
                <div class="form-group">
                    <div class="input-group"> <span class="input-group-btn"> <button type="submit" class="btn btn-sm bg-white b-white btn-icon"><i class="fa fa-search"></i></button> </span>
                        <input type="text" class="form-control input-sm no-border" placeholder="Search apps, projects..."> </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
                <li class="hidden-xs">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="i i-chat3"></i> <span class="badge badge-sm up bg-danger count">2</span> </a>
                    <section class="dropdown-menu aside-xl animated flipInY">
                        <section class="panel bg-white">
                            <div class="panel-heading b-light bg-light"> <strong>You have <span class="count">2</span> notifications</strong> </div>
                            <div class="list-group list-group-alt">
                                <a href="#" class="media list-group-item"> <span class="pull-left thumb-sm"> <img src="images/a0.png" alt="..." class="img-circle"> </span> <span class="media-body block m-b-none"> Use awesome animate.css<br> <small class="text-muted">10 minutes ago</small> </span> </a>
                                <a href="#" class="media list-group-item"> <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1 hour ago</small> </span> </a>
                            </div>
                            <div class="panel-footer text-sm"> <a href="#" class="pull-right"><i class="fa fa-cog"></i></a> <a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a> </div>
                        </section>
                    </section>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb-sm avatar pull-left"> <img src="images/a0.png" alt="..."> </span> John.Smith <b class="caret"></b> </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li> <span class="arrow top"></span> <a href="#">Settings</a> </li>
                        <li> <a href="profile.html">Profile</a> </li>
                        <li>
                            <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                        </li>
                        <li> <a href="docs.html">Help</a> </li>
                        <li class="divider"></li>
                        <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                    </ul>
                </li>
            </ul>
        </header>
        <section>
            <section class="hbox stretch">
                <!-- .aside -->
                <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                    <section class="vbox">
                        <section class="w-f scrollable">
                            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">
                                <div class="clearfix wrapper dk nav-user hidden-xs">
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="thumb avatar pull-left m-r"> <img src="images/a0.png" class="dker" alt="..."> <i class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span class="block m-t-xs"> <strong class="font-bold text-lt">John.Smith</strong> <b class="caret"></b> </span> <span class="text-muted text-xs block">Art Director</span> </span>
                                        </a>
                                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                            <li> <span class="arrow top hidden-nav-xs"></span> <a href="#">Settings</a> </li>
                                            <li> <a href="profile.html">Profile</a> </li>
                                            <li>
                                                <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a>
                                            </li>
                                            <li> <a href="docs.html">Help</a> </li>
                                            <li class="divider"></li>
                                            <li> <a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- nav -->
                                <nav class="nav-primary hidden-xs">
                                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div>
                                    <ul class="nav nav-main" data-ride="collapse">
                                        <li class="active">
                                            <a href="index.html" class="auto"> <i class="i i-statistics icon"> </i> <span class="font-bold">Overview</span> </a>
                                        </li>


                                        <li>
                                            <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right">4</b> <i class="i i-stack icon"> </i> <span class="font-bold">Layouts</span> </a>
                                            <ul class="nav dk">
                                                <li>
                                                    <a href="layout-color.html" class="auto"> <i class="i i-dot"></i> <span>Color option</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-hbox.html" class="auto"> <i class="i i-dot"></i> <span>Hbox layout</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-boxed.html" class="auto"> <i class="i i-dot"></i> <span>Boxed layout</span> </a>
                                                </li>
                                                <li>
                                                    <a href="layout-fluid.html" class="auto"> <i class="i i-dot"></i> <span>Fluid layout</span> </a>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                            
                                        
                                    </ul>
                                    <div class="line dk hidden-nav-xs"></div>
                                    <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Lables</div>
                                    <ul class="nav">
                                        <li>
                                            <a href="mail.html#work"> <i class="i i-circle-sm text-info-dk"></i> <span>Work space</span> </a>
                                        </li>
                                        <li>
                                            <a href="mail.html#social"> <i class="i i-circle-sm text-success-dk"></i> <span>Connection</span> </a>
                                        </li>
                                        <li>
                                            <a href="mail.html#projects"> <i class="i i-circle-sm text-danger-dk"></i> <span>Projects</span> </a>
                                        </li>
                                    </ul>
                                    <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
                                    <ul class="nav">
                                        <li>
                                            <a href="#"> <i class="i i-circle-sm-o text-success-lt"></i> <span>College</span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="i i-circle-sm-o text-warning"></i> <span>Social</span> </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- / nav -->
                            </div>
                        </section>
                        <footer class="footer hidden-xs no-padder text-center-nav-xs">
                            <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a>
                            <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a>
                        </footer>
                    </section>
                </aside>
                <!-- /.aside -->
                <section id="content">
                    <section class="hbox stretch">
                        <section>
                            <section class="vbox">
                               


                                    
                                    
                                    <!-- ADMIN PANEL SECTION -->
                                    <div class="row">
                                        
                                        <div class="col-md-10" style="margin: 50px 0px 50px 50px;">
                                            <section class="panel b-a" style="min-height: 500px;">
                                                <div class="panel-heading b-b"> <span class="badge bg-warning pull-right">10</span> <a href="#" class="font-bold">Messages</a> </div>



                                               


                                            </section>
                                        </div>




                                       
                                    </div>
                                </section>
                            </section>
                        </section>
                        <!-- side content -->
                        <aside class="aside-md bg-black hide" id="sidebar">
                            <section class="vbox animated fadeInRight">
                                <section class="scrollable">
                                    <div class="wrapper"><strong>Live feed</strong></div>
                                    <ul class="list-group no-bg no-borders auto">
                                        <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-success"></i> <i class="fa fa-reply fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Goody@gmail.com</a> sent your email <small class="icon-muted">13 minutes ago</small> </span> </li>
                                        <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-danger"></i> <i class="fa fa-file-o fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Mide@live.com</a> invite you to join a meeting <small class="icon-muted">20 minutes ago</small> </span> </li>
                                        <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-info"></i> <i class="fa fa-map-marker fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#">Geoge@yahoo.com</a> is online <small class="icon-muted">1 hour ago</small> </span> </li>
                                        <li class="list-group-item"> <span class="fa-stack pull-left m-r-sm"> <i class="fa fa-circle fa-stack-2x text-primary"></i> <i class="fa fa-info fa-stack-1x text-white"></i> </span> <span class="clear"> <a href="#"><strong>Admin</strong></a> post a info <small class="icon-muted">1 day ago</small> </span> </li>
                                    </ul>
                                    <div class="wrapper"><strong>Friends</strong></div>
                                    <ul class="list-group no-bg no-borders auto">
                                        <li class="list-group-item">
                                            <div class="media"> <span class="pull-left thumb-sm avatar"> <img src="images/a3.png" alt="..." class="img-circle"> <i class="on b-black bottom"></i> </span>
                                                <div class="media-body">
                                                    <div><a href="#">Chris Fox</a></div> <small class="text-muted">about 2 minutes ago</small> </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media"> <span class="pull-left thumb-sm avatar"> <img src="images/a2.png" alt="..."> <i class="on b-black bottom"></i> </span>
                                                <div class="media-body">
                                                    <div><a href="#">Amanda Conlan</a></div> <small class="text-muted">about 2 hours ago</small> </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media"> <span class="pull-left thumb-sm avatar"> <img src="images/a1.png" alt="..."> <i class="busy b-black bottom"></i> </span>
                                                <div class="media-body">
                                                    <div><a href="#">Dan Doorack</a></div> <small class="text-muted">3 days ago</small> </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="media"> <span class="pull-left thumb-sm avatar"> <img src="images/a0.png" alt="..."> <i class="away b-black bottom"></i> </span>
                                                <div class="media-body">
                                                    <div><a href="#">Lauren Taylor</a></div> <small class="text-muted">about 2 minutes ago</small> </div>
                                            </div>
                                        </li>
                                    </ul>
                                </section>
                            </section>
                        </aside>
                        <!-- / side content -->
                    </section>
                    <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
                </section>
            </section>
        </section>
    </section>
    <!-- Bootstrap -->
    <!-- App -->
    <script src="js/app.v1.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
    <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/charts/flot/jquery.flot.min.js"></script>
    <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/charts/flot/jquery.flot.spline.js"></script>
    <script src="js/charts/flot/jquery.flot.pie.min.js"></script>
    <script src="js/charts/flot/jquery.flot.resize.js"></script>
    <script src="js/charts/flot/jquery.flot.grow.js"></script>
    <script src="js/charts/flot/demo.js"></script>
    <script src="js/calendar/bootstrap_calendar.js"></script>
    <script src="js/calendar/demo.js"></script>
    <script src="js/sortable/jquery.sortable.js"></script>
    <script src="js/app.plugin.js"></script>
</body>


</html>