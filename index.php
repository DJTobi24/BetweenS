<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>between-Control System</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <script src="https://kit.fontawesome.com/71c3c34350.js"></script>
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
  <?php include("config.php") ?>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Between - Control</a>
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Berlin seid ihr gut drauf &nbsp; <a href="#" class="btn btn-warning square-btn-adjust">Öm joa</a> </div>
        </nav>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>


                    <li>
                        <a class="active-menu"  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
						   <li  >
                        <a   href="chart.html"><i class="fa fa-bar-chart-o fa-3x"></i> Morris Charts</a>
                    </li>
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                      </li>
                  <li  >
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>S Control Dasboard</h2>
                        <h5>Willkommen zurück</h5>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12 ">
                        <div class="panel ">
          <div class="main-temp">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-6"> <i class="fas fa-hippo fa-3x"></i> <br> Innen</div>
                <div class="col-xs-6">
                  <div class="text-temp"> <?php echo "$temppi" . "$temp" ?> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12 ">
      <div class="panel ">
        <div class="main-temp-back1">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-6"> <i class="fas fa-thermometer-three-quarters fa-3x"></i> <br>Außen </div>
              <div class="col-xs-6">
                <div class="text-temp"> <?php sleep(1); echo "$temppausen" . "$temp"; ?> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-12 col-xs-12 ">
      <div class="panel ">
        <div class="main-temp-back1">
          <div class="panel-body">
            <div class="row">
              <div class="col-xs-6"> <i class="fas fa-tint fa-3x"></i></i> <br>Humidity </div>
              <div class="col-xs-6">
                <div class="text-temp"> <?php sleep(1); echo "$huminnen" . "$hum"; ?> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        </div>
                 <!-- /. ROW  -->
                <div class="row">


                </div>
                 <!-- /. ROW  -->
                <div class="row">



                </div>
                 <!-- /. ROW  -->
                 <!-- /. ROW  -->
                <div class="row">

                  <div class="col-md-3 col-sm-12 col-xs-12 ">
                    <div class="panel ">
                      <div class="<?php echo "$luefteran"; ?>">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-6"> <i class="fas fa-fan fa-3x"></i> <br>Lüfter 1 </div>
                            <div class="col-xs-6">
                              <div class="text-temp"> <?php sleep(1); echo "$luefter1"; ?> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12 ">
                    <div class="panel ">
                      <div class="<?php echo "$luefteraus"; ?>">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-6"> <i class="fas fa-fan fa-3x"></i> <br>Lüfter 2</div>
                            <div class="col-xs-6">
                              <div class="text-temp"> <?php sleep(1); echo "$luefter2"; ?> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12 ">
                    <div class="panel ">
                      <div class="<?php echo "$luefteran"; ?>">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-6"> <i class="fas fa-fan fa-3x"></i><br>Lüfter 3</div>
                            <div class="col-xs-6">
                              <div class="text-temp"> <?php sleep(1); echo "$luefter3"; ?> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



                </div>
                 <!-- /. ROW  -->

    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
