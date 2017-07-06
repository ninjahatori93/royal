<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Page Title -->
        <title>RoyaltyBd-Home</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/font-awesome.min2.css" rel="stylesheet">
        <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">


        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/layout-rtl.css">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link rel="stylesheet" href="css/demo.css">
        <link rel="stylesheet" href="css/prism.css">
        <link rel="stylesheet" href="css/chosen.css">
        
        <!-- CUSTOM STYLES-->
        <link href="css/custom-user-profile.css" rel="stylesheet" />

        <link href="css/custom.css" rel="stylesheet" />

         <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <!-- FAQ Style -->
        <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="css/faqspage.css"> <!-- Resource style -->

        <!-- Partner Page Style -->
        <link rel="stylesheet" href="css/partnerspage.css">   

         <!-- About Us Style -->     
        <link rel="stylesheet" type="text/css" href="css/da-slider.css" />
        <link rel="stylesheet" href="css/aboutus-styles.css" />
        <link rel="stylesheet" href="css/slider-css.css" />

        <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

        <!-- Custom Media Query -->
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />

<style>
body{font-family: Raleway;}
p{font-size: 1.3em;}
.col-sm-4 address{font-size: 1em;}
.countdown-container {
    position: initial;
    top: 50%;
}

@media only screen and (max-width: 767px) {
    .searching {
        display: none;
        }

    .button1{
        display: none;
        }
}


@media only screen and (min-width: 480px) and (max-width: 767px)  {
  .searching {
      display: none;
      }

  .button1{
      display: none;
      }
    }
@media screen and (min-width: 1041) and (max-width: 1280px) {
  .button1{
      display: none !important;
      }
  .home_search{margin-right: 0px;}

}
@media screen and (min-width: 320px) and (max-width: 767px){
  .user_image img{
    margin-left: 0px !important;
    float: left;
  }
  .user_info ul span{float: left;}

}        
@media screen and (min-width: 320px) and (max-width: 1024px){
  .partner_image img{
    margin-left: 5% !important;
    float: left !important;
  }
  .partner_info ul span{padding-bottom: 20px;}
  .footer{text-align: center;}
  .carousel-indicators {
    bottom: 10px;
    left: inherit;
    margin: 0;
    right: 30px;
    top: 26%;
    width: 0;
}
}
@media screen and (max-width: 979px){/*not working*/
  .category-text{
    font-size: 10px;
  }
}

@media screen and (max-width: 819px){
  #hide_carousel{
    display: none;
  }
  #hide_carousel{ 
  position: absolute; 
  overflow: hidden; 
  clip: rect(0 0 0 0); 
  height: 1px; width: 1px;
  margin: -1px; padding: 0; border: 0; 
}
}
@media screen and (max-width: 780px){
  #filter_hide .checkbox, input[type=checkbox], h4{
    font-size: 2em;
  }
  #filter_hide input[type=submit]{
    font-size: 2em;
    margin-top: 5px;
  }
  .offer h1{margin-top: 60px;}
  .support h1{margin-top: 60px;}
  #introText{margin-top: 60px;}
  .timeline-badge{margin-top: -45px;}
  .mb50 img{height: 50% ;}
  .contact .mb50{width: 100% !important;}
  .mix p{font-size: 10px !important;}
  figcaption{padding-top: 5% !important;}
  .homepage-carousel{height: 100% !important;}
}

@media screen and (max-width: 1024px){
  .card_button{margin-left: 0 !important; padding-bottom: 10px !important;}
  .navbar-nav{background-color: #121E3B  !important;}
  .searching{width: 200px;}
  .home_search{margin-right: 0 !important;}
  .category-title{margin-right: 10% !important;}
  .mix p{font-size: 13px !important;}
  figcaption{padding-top: 5% !important;}
  .mb50 img{height: 60% !important; margin-top: 15% !important;}
  .mb50 .footer-single{margin-top: 35% !important;}
  .sec-sub-title {margin: 0;}
  .homepage-carousel{height: 100% !important;}
  .social a{margin-left: 0 !important;}
  .support {margin-top: 0 !important;}
  .support h1{padding-top: 10% !important;}
  #introText{margin-top: 10% !important; }
  #introText div{width: 80% !important;}
  .heading{padding: 0; margin:0;}
  .secpad div{margin-right: 20% !important;}
}
@media screen and (max-width: 768px){
  .mb50 .footer-single{margin-top: 0 !important;}
  .subscribe1{height: 50% !important;}
  .homepage-carousel{height: 50% !important;}
  #works{margin-bottom: 10px !important;}
  .text h3{padding-left: 0 !important;}
}
.countdown-container {
position: initial;
top: 50%;
}
/*media queries*/
@media all and (max-width: 991px) and (min-width:0px) {
  #filter, #show_filter, #hide_filter{
    display: none;
  }
#filter_hide{color:#fff; background-color: #121E3B ; min-height: 250px; margin-bottom: 5%; width: 90%;}
}

@media all and (min-width: 992px){
  #filter_hide{
    display: none;
  }
  #filter{
    position: fixed; background-color: #CDB64B; min-height: 400px; top: 180px; z-index: 999; left: 0;
    border: 1px solid black; border-radius: 4px; display:; }
#show_filter{
  display: none;
  position: fixed;
  top: 100px;
  z-index: 999; 
  left: 0;
  color: #fff;
  height: 60px;
  border: 1px solid #121E3B;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  background-color: #121E3B;
}
#hide_filter{
  position: fixed;
  top: 100px;
  z-index: 999; 
  left: 0;
  color: #fff;
  height: 60px;
  border: 1px solid #121E3B;
  border-top-right-radius: 50px;
  border-bottom-right-radius: 50px;
  background-color: #121E3B;
}
.jumbotron p{padding-left: 30%;}
}
.jumbotron h1{padding-top: ;}
}
/*media queries ends*/



#filter_hide{
  background-color: #CDB64B; min-height: 300px; left: 0; width: 90%;}

#filter h4{float: left; }
#filter input{float: left;}
label{height: 30px; left: 15px; display: inline-flex;}
.checkbox label{width: 100%; border-bottom: 1px solid #000; left: 15px; font-size: .7em;}
.checkbox input{top: 5px;}
.checkbox:nth-child(1) label{border-top: 1px solid #000;}



    .carousel-inner.onebyone-carosel { margin: auto; width: 90%; }
    .onebyone-carosel .active.left { left: -33.33%; }
    .onebyone-carosel .active.right { left: 33.33%; }
    .onebyone-carosel .next { left: 33.33%; }
    .onebyone-carosel .prev { left: -33.33%; }
    .jumbotron {
      background-color: #3366ff;
      color: #fff;
      padding: 10px 25px;
      font-family: Montserrat, sans-serif;
  }

  .offer2{
    padding-bottom: 20px;
  }

.image {
  opacity: 1;
  display: block;
  width: 50%;
  height: 50%;
  transition: .5s ease;
  backface-visibility: hidden;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 25%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.middle1 {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 75%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
.banner:hover .image {
  opacity: 0.3;
}

.banner:hover .middle {
  opacity: 1;
}

.banner:hover .middle1 {
  opacity: 1;
}


.text {
  font-family: 'Raleway', serif;
  font-size: 48px;
}
.text-center{font-size: 1.3em; padding: 10px 0; color: #fff;}
.text h3 {
  color: inherit !important;
}

.body_width{
  width: 80%;
}

.footer-single ul li{
    list-style: none;
    margin-bottom: 5px;
}
span{color: #000;}
.form-control {
    height: 50px;
    font-size: 14px;
    font-weight: 400;
    color: #a6a7aa;
    background: #fafafa;
    border: 1px solid #000;
    border-radius: 10px;
    padding-right: 15px;
    margin-bottom: 4px;
}
figcaption p{color: #fff; padding: 0 2%;}

.modal-header-login {
    min-height: 16.43px;
    border-bottom: 1px solid #e5e5e5;
}

@media (max-width: 1300px) {
    .navbar-header {
        float: none;
    }
    .navbar-left,.navbar-right {
        float: none !important;
    }
    .navbar-toggle {
        display: block;
    }
    .navbar-collapse {
        border-top: 1px solid transparent;
        box-shadow: inset 0 1px 0 rgba(255,255,255,0.1);
    }
    .navbar-fixed-top {
        top: 0;
        border-width: 0 0 1px;
    }
    .navbar-collapse.collapse {
        display: none!important;
    }
    .navbar-nav {
        float: none!important;
        margin-top: 7.5px;
    }
    .navbar-nav>li {
        float: none;
    }
    .navbar-nav>li>a {
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .collapse.in{
        display:block !important;
    }
}
</style>
    </head>

    
<body id="body">
  <center>
    <div class="modal fade" id="myModal" role="dialog" style="height: 100%">
    <div class="modal-dialog" style="width: 400px;">
      <!-- Modal content-->
      <div class="modal-content" style="z-index: 0;">
        <div class="modal-header-login">
          <button type="button" class="close" data-dismiss="modal" style="margin-right: 8px;">&times;</button>
          <div class="login-block" style="width: 100%;margin:">
              <h1 style="color: #ffffff">Login</h1>
              <form method="post" action="{!! url('login') !!}">
                <input type="text" value="" placeholder="Username" id="username" name="username" />
                <input type="password" value="" placeholder="Password" id="password" name="password" />
                <!-- <input type="submit" value="submit" id="submit" name="submit" /> -->
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" >Submit</button>
              </form>
              
          </div>
        </div>
        </div>
    </div>
  </div>


   
    
   
        <!-- preloader -->
        <div id="preloader">
            <img src="images/logo.gif" alt="Preloader">
        </div>
        <!-- end preloader -->


        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar" style="height: 50px; position: fixed;">
            <div class="container" style="width: 80%">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <a class="navbar-brand" href="#body">
                        <h1 id="logo">
                            <img src="images/royalty logo-01.png" alt="RoyaltyBD">
                        </h1>
                    </a>
                    <!-- /logo -->
                </div>

                <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right nav_font" role="navigation">
                    <ul id="nav main-menu" class="nav navbar-nav">
                        <li class="home_search" style="margin-top: 5px;margin-right: 50px;margin-bottom: 0px">
                            <form method="post" action="{!! url('searchWebsite') !!}">
                             <input type="search" name="search" placeholder="Search" class="searching">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>
                        <li class="current"><a href="index.php">Home</a></li>
                        <li><a href="offers" >Categories</a></li>
                        <li><a href="partners">Our Partners</a></li>
                        <li><a href="partnerjoin" target="blank">Become A Partner</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                        <li><a href="about">About Us</a></li>
                        <li><a href="contact">Contact Us</a></li>
                        <li class="card_button" style="margin-top: 7px;margin-left: 75px; font-family: Railway;"><button type="submit" class="button1"><a href="registration.php">Buy Card Now!</a></button></li>
                        
                    </ul>
                </nav>
                <!-- /main nav -->
                
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->