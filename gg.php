<?php

include("csv.php");
$csv = new csv();
if( isset($_POST['sub']))
{   
    $csv->import($_FILES['file']['tmp_name']);
    
}

?>

<!DOCTYPE html>
<!-- saved from url=(0036)file:///D:/Project/Star%20Admin.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><link type="text/css" rel="stylesheet" href="./Star Admin_files/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style><style type="text/css">.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}
</style><link type="text/css" rel="stylesheet" href="./Star Admin_files/css(1)"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style>
      <!-- Required meta tags -->
      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Star Admin</title>
      <link rel="stylesheet" href="./Star Admin_files/font-awesome.min.css">
      <link rel="stylesheet" href="./Star Admin_files/perfect-scrollbar.min.css">
      <link rel="stylesheet" href="./Star Admin_files/style.css">
      <link rel="shortcut icon" href="file:///C:/Users/USER/Downloads/StarAdmin-Free-Bootstrap-Admin-Template-master/StarAdmin-Free-Bootstrap-Admin-Template-master/images/favicon.png">
  <script type="text/javascript" charset="UTF-8" src="./Star Admin_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/map.js.download"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/onion.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/controls.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/marker.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/stats.js.download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/common.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/map.js(1).download"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/util.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/onion.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/controls.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/marker.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/stats.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/common.js(2).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/util.js(2).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/stats.js(2).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/common.js(3).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/util.js(3).download"></script><script type="text/javascript" charset="UTF-8" src="./Star Admin_files/stats.js(3).download"></script></head>
  <body>
      <div class="container-scroller ps ps--theme_default ps--active-y" data-ps-id="5ef1fe1d-8ac2-04b7-2389-8b0ed54b2384">
        <!--Navbar-->
        <nav class="navbar bg-primary-gradient col-lg-12 col-12 p-0 fixed-top navbar-inverse d-flex flex-row">
            <div class="bg-white text-center navbar-brand-wrapper">
                <a class="navbar-brand brand-logo" href="file:///C:/Users/USER/Downloads/StarAdmin-Free-Bootstrap-Admin-Template-master/StarAdmin-Free-Bootstrap-Admin-Template-master/index.html#"><img src="./Star Admin_files/logo_star_black.png"></a>
                <a class="navbar-brand brand-logo-mini" href="file:///C:/Users/USER/Downloads/StarAdmin-Free-Bootstrap-Admin-Template-master/StarAdmin-Free-Bootstrap-Admin-Template-master/index.html#"><img src="./Star Admin_files/logo_star_mini.jpg" alt=""></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <button class="navbar-toggler navbar-toggler hidden-md-down align-self-center mr-3" type="button" data-toggle="minimize">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <form class="form-inline mt-2 mt-md-0 hidden-md-down">
                    <!--?php
                    include ("imp.php");


                     ?-->
                </form>
                <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
                    <li class="nav-item">
                        <a class="nav-link profile-pic" href="file:///C:/Users/USER/Downloads/StarAdmin-Free-Bootstrap-Admin-Template-master/StarAdmin-Free-Bootstrap-Admin-Template-master/index.html#"><img class="rounded-circle" src="./Star Admin_files/face.jpg" alt=""></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="file:///C:/Users/USER/Downloads/StarAdmin-Free-Bootstrap-Admin-Template-master/StarAdmin-Free-Bootstrap-Admin-Template-master/index.html#"><i class="fa fa-th"></i></a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right hidden-lg-up align-self-center" type="button" data-toggle="offcanvas">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <!--End navbar-->
        <div class="container-fluid">
            <div class="row row-offcanvas row-offcanvas-right">
                <nav class="bg-white sidebar sidebar-fixed sidebar-offcanvas" id="sidebar">
                <div class="user-info">
                    <img src="images/face.jpg" alt="">
                    <p class="name">Department of Computer Science and Engineering</p>
                    
                </div>
                    <ul class="nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="Miniproject/index.html">
                                <!-- <i class="fa fa-dashboard"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Probability Distribution</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Miniproject/pages/widgets.html">
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Computer Organization and Architecture</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Miniproject/pages/forms.html">
                                <!-- <i class="fa fa-wpforms"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Operating Systems</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Miniproject/pages/buttons.html">
                                <!-- <i class="fa fa-calculator"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Object Oriented Programming</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/tables.html">
                                <!-- <i class="fa fa-table"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Business Economics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Miniproject/pages/charts.html">
                                <!-- <i class="fa fa-bar-chart"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Principles of Database Design</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Miniproject/pages/icons.html">
                                <!-- <i class="fa fa-font"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Digital Systems Lab</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Miniproject/pages/typography.html">
                                <!-- <i class="fa fa-bold"></i> -->
                                <img src="images/icons/1.png" alt="">
                                <span class="menu-title">Free And Open Source Software Lab</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- SIDEBAR ENDS -->
                
                <div class="content-wrapper">
                    <h3 class="text-primary mb-4">Dashboard</h3>
                 <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title mb-4">Results</h5>
                                    <table class="table">
                                        <thead>
                                            <tr class="">
                                                
                                                <th>REG NO.</th>
                                                <th>BE</th>
                                                <th>MATHS</th>
                                                <th>COA</th>

                                                <th>OS</th>
                                                <th>OODP</th>
                                                <th>FOSS Lab</th>
                                                <th>PDD</th>
                                                
                                                <th>DS Lab</th>

                                                <th>CGPA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                             include "mysql2.php";

                                             ?>




                                        </tbody>
                                    </table>
                                </div>
                            </div>   
                    
                    
                </div>
                <footer class="footer">
                    <div class="container-fluid clearfix">
                      <span class="float-right">
                          <a href="file:///C:/Users/USER/Downloads/StarAdmin-Free-Bootstrap-Admin-Template-master/StarAdmin-Free-Bootstrap-Admin-Template-master/index.html#">Star Admin</a> © 2017
                      </span>
                    </div>
                </footer>
            </div>
        </div>

      <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 759px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 485px;"></div></div><div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 758px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 526px;"></div></div><div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 759px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 528px;"></div></div><div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 710px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 623px;"></div></div><div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; height: 710px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 196px;"></div></div></div>

      <script src="./Star Admin_files/jquery.min.js.download"></script>
      <script src="./Star Admin_files/tether.min.js.download"></script>
      <script src="./Star Admin_files/bootstrap.min.js.download"></script>
      <script src="./Star Admin_files/Chart.min.js.download"></script>
      <script src="./Star Admin_files/perfect-scrollbar.jquery.min.js.download"></script>
      <script src="./Star Admin_files/js" async="" defer=""></script>
      <script src="./Star Admin_files/off-canvas.js.download"></script>
      <script src="./Star Admin_files/hoverable-collapse.js.download"></script>
      <script src="./Star Admin_files/misc.js.download"></script>
      <script src="./Star Admin_files/chart.js.download"></script>
      <script src="./Star Admin_files/maps.js.download"></script>
  


<div style="position: absolute; left: 0px; top: -2px; height: 1px; overflow: hidden; visibility: hidden; width: 1px;"><span style="position: absolute; font-size: 300px; width: auto; height: auto; margin: 0px; padding: 0px; font-family: Roboto, Arial, sans-serif;">BESbswy</span></div></body></html>