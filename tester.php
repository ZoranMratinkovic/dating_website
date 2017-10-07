<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Icon css link -->
    <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/linears-icon/style.css" rel="stylesheet">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="vendors/image-dropdown/dd.css" rel="stylesheet">
    <link href="vendors/image-dropdown/flags.css" rel="stylesheet">
    <link href="vendors/image-dropdown/skin2.css" rel="stylesheet">
    <link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
    <link href="vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="vendors/animate-css/animate.css" rel="stylesheet">
    <link href="vendors/bs-tooltip/jquery.webui-popover.css" rel="stylesheet">
    <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">


    <script type="text/javascript" src='js/our_script.js'></script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <!--RS5.0 Extensions-->
    <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- Extra plugin js -->
    <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
    <script src="vendors/animate-css/wow.min.js"></script>
    <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
    <script src="vendors/bootstrap-datepicker/js/moment-with-locales.js"></script>
    <script src="vendors/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="vendors/counter-up/waypoints.min.js"></script>
    <script src="vendors/counter-up/jquery.counterup.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
    <script src="vendors/jquery-ui/jquery-ui.js"></script>


    <script src="js/video_player.js"></script>
    <script src="js/theme.js"></script>
    <style>
    .navbar-default{
    color: #fff;
    background-color: #ccc6c6;
    border-color: #aca1a2;
    }
    .navbar-default .navbar-nav > li > a{
    	color:#fff;
    }
    .navbar-default .navbar-nav > .dropdown > a .caret{
    	border-top-color: #fff;
        border-bottom-color: #fff;
    }
    .navbar-default .navbar-brand{
    	color:#fff;
    }
    .menu-large {
      position: static !important;
    }
    .megamenu{
      padding: 20px 0px;
      width:100%;
    }
    .megamenu> li > ul {
      padding: 0;
      margin: 0;
    }
    .megamenu> li > ul > li {
      list-style: none;
    }
    .megamenu> li > ul > li > a {
      display: block;
      padding: 3px 20px;
      clear: both;
      font-weight: normal;
      line-height: 1.428571429;
      color: #333333;
      white-space: normal;
    }
    .megamenu> li ul > li > a:hover,
    .megamenu> li ul > li > a:focus {
      text-decoration: none;
      color: #262626;
      background-color: #f5f5f5;
    }
    .megamenu.disabled > a,
    .megamenu.disabled > a:hover,
    .megamenu.disabled > a:focus {
      color: #999999;
    }
    .megamenu.disabled > a:hover,
    .megamenu.disabled > a:focus {
      text-decoration: none;
      background-color: transparent;
      background-image: none;
      filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
      cursor: not-allowed;
    }
    .megamenu.dropdown-header {
      color: #428bca;
      font-size: 18px;
    }
    @media (max-width: 768px) {
      .megamenu{
        margin-left: 0 ;
        margin-right: 0 ;
      }
      .megamenu> li {
        margin-bottom: 30px;
      }
      .megamenu> li:last-child {
        margin-bottom: 0;
      }
      .megamenu.dropdown-header {
        padding: 3px 15px !important;

      }
      .navbar-nav .open .dropdown-menu .dropdown-header{
    	color:#fff;
      }
    }
    </style>
    <script type="text/javascript">
    jQuery(document).ready(function(){
        $(".dropdown").hover(
            function() { $('.dropdown-menu', this).stop().fadeIn("fast");
            },
            function() { $('.dropdown-menu', this).stop().fadeOut("fast");
        });
    });
    </script>
  </head>
  <body>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">


  			<ul class="nav navbar-nav">
  			<li class="dropdown menu-large">
  				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
  				<ul class="dropdown-menu megamenu row">
  					<li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Glyphicons</li>
  							<li><a href="#">Available glyphs</a></li>
  							<li class="disabled"><a href="#">How to use</a></li>
  							<li><a href="#">Examples</a></li>
  							<li class="divider"></li>
  							<li class="dropdown-header">Dropdowns</li>
  							<li><a href="#">Example</a></li>
  							<li><a href="#">Aligninment options</a></li>
  							<li><a href="#">Headers</a></li>
  							<li><a href="#">Disabled menu items</a></li>
  						</ul>
  					</li>
            <li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Glyphicons</li>
  							<li><a href="#">Available glyphs</a></li>
  							<li class="disabled"><a href="#">How to use</a></li>
  							<li><a href="#">Examples</a></li>
  							<li class="divider"></li>
  							<li class="dropdown-header">Dropdowns</li>
  							<li><a href="#">Example</a></li>
  							<li><a href="#">Aligninment options</a></li>
  							<li><a href="#">Headers</a></li>
  							<li><a href="#">Disabled menu items</a></li>
  						</ul>
  					</li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Glyphicons</li>
                <li><a href="#">Available glyphs</a></li>
                <li class="disabled"><a href="#">How to use</a></li>
                <li><a href="#">Examples</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Dropdowns</li>
                <li><a href="#">Example</a></li>
                <li><a href="#">Aligninment options</a></li>
                <li><a href="#">Headers</a></li>
                <li><a href="#">Disabled menu items</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
  						<ul>
  							<li class="dropdown-header">Glyphicons</li>
  							<li><a href="#">Available glyphs</a></li>
  							<li class="disabled"><a href="#">How to use</a></li>
  							<li><a href="#">Examples</a></li>
  							<li class="divider"></li>
  							<li class="dropdown-header">Dropdowns</li>
  							<li><a href="#">Example</a></li>
  							<li><a href="#">Aligninment options</a></li>
  							<li><a href="#">Headers</a></li>
  							<li><a href="#">Disabled menu items</a></li>
  						</ul>
  					</li>
  				</ul>

  			</li>
  		</ul>

        </div>
      </div>
  </body>
</html>
