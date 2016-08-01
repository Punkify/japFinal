<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Japanese File Management System</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>

</head>

<body>

<section id="container" >
    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>SCHOOL NAME</b></a>
        <!--logo end-->


        <div class="top-menu">

            <ul class="nav pull-right top-menu">

                <li><a class="logout" href="login.html" data-toggle="tooltip" data-placement="bottom" title="Settings"><i class="fa fa-wrench" aria-hidden="true"></i></a></li>
                <li><a class="logout" href="login.html" data-toggle="tooltip" data-placement="bottom" title="Log Out"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
            </ul>


        </div>
        <br>




    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <div class="user-panel">
                    <div class="pull-left image" style="color: white;margin-right: 18px;">
                        <img src="assets/img/default.jpg" class="img-circle" alt="User Image">
                    </div><br>
                    <div class="pull-left info" style="
    color: #fff;">
                        <p>$studentUsername</p>
                    </div>
                </div>


                <li class="mt">
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="student.html" >
                        <i class="fa fa-desktop"></i>
                        <span>Task</span>
                    </a>

                </li>

                <li class="sub-menu">
                    <a href="messages.html" >
                        <i class="fa fa-envelope-o"></i>
                        <span>Messages</span>
                    </a>

                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>




    @yield('consultancyContent')



    <div class="col-lg-3 ds">

        <!--COMPLETED ACTIONS DONUTS CHART-->
        <h3>NOTIFICATIONS</h3>

        <!-- First Action -->
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p><muted>2 Minutes Ago</muted><br/>
                    <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                </p>
            </div>
        </div>
        <!-- Second Action -->
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p><muted>3 Hours Ago</muted><br/>
                    <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                </p>
            </div>
        </div>
        <!-- Third Action -->
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p><muted>7 Hours Ago</muted><br/>
                    <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                </p>
            </div>
        </div>
        <!-- Fourth Action -->
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p><muted>11 Hours Ago</muted><br/>
                    <a href="#">Mark Twain</a> commented your post.<br/>
                </p>
            </div>
        </div>
        <!-- Fifth Action -->
        <div class="desc">
            <div class="thumb">
                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            </div>
            <div class="details">
                <p><muted>18 Hours Ago</muted><br/>
                    <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                </p>
            </div>
        </div>



    </div><!-- /col-lg-3 -->
    </div><! --/row -->

</section>
</section>

<!--main content end-->
<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2016 - SWGK Nepal
        <a href="index.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/jquery-1.8.3.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="assets/js/jquery.sparkline.js"></script>

<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="assets/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="assets/js/sparkline-chart.js"></script>





</body>
</html>
