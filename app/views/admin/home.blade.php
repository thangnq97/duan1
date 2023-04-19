<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Light Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="./public/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="./public/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="./public/assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="./public/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="./public/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="./" class="simple-text">
                    Home Page
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="./admin">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="./user-manager">
                        <i class="pe-7s-user"></i>
                        <p>User Manager</p>
                    </a>
                </li>
                <li>
                    <a href="./product-manager">
                        <i class="pe-7s-note2"></i>
                        <p>Product Manager</p>
                    </a>
                </li>
                <li>
                    <a href="./comment-manager">
                        <i class="pe-7s-chat"></i>
                        <p>Comment Manager</p>
                    </a>
                </li>
                <li>
                    <a href="./topping-manager">
                        <i class="pe-7s-graph"></i>
                        <p>Topping Manager</p>
                    </a>
                </li>
                <li>
                    <a href="bill-manager">
                        <i class="pe-7s-cart"></i>
                        <p>Bill Manager</p>
                    </a>
                </li>
                <li>
                    <a href="brand-manager">
                        <i class="pe-7s-note2"></i>
                        <p>Brand Manager</p>
                    </a>
                </li>
                <li>
                    <a href="./size-manager">
                        <i class="pe-7s-copy-file"></i>
                        <p>Size Manager</p>
                    </a>
                </li>
                <li>
                    <a href="./voucher-manager">
                        <i class="pe-7s-gift"></i>
                        <p>Voucher Manager</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-lg hidden-md"></b>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li>
                            <a href="./sign-out">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- content --}}
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="md-6">
                        @yield('main-content')
                    </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="./public/assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="./public/assets/js/bootstrap.min.js" type="text/javascript"></script>

   {{-- bosstrap validator cdn --}}
   <script src="./public/validator/dist/validator.min.js" type="text/javascript"></script>


	<!--  Charts Plugin -->
	<script src="./public/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="./public/assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="./public/assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="./public/assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Dashboard</b> - a beautiful freebie for every web developer."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
