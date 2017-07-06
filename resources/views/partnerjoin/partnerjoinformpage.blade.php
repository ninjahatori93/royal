<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up-Royalty</title>
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="partner-css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="partner-css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="partner-css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="partner-css/animate.css">
    
    <link rel="stylesheet" href="partner-css/partnerjoinform.css">

<style type="text/css">
body{font-family: Raleway;}
a,h1,p{font-family: Raleway;}
.navbar-brand, .logo-dec{font-family: Raleway;}

@media screen and (max-width: 480px){
  .registration{width: 80% !important;}
}
</style>
  </head>
  <body>    
    <div>
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Part<span class="logo-dec">ners</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="partnerjoin">Home</a></li>
                </ul>
            </div>
            </div>
        </nav>
        </header>
           <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s">
              <h1 class="bnr-title">Join Royalty</h1>
              <h2 class="bnr-sub-title">Be Royal among others</h2>
              <p class="bnr-para">Fill up the form below to join us as an awesome partner, we will contact you as soon as possible.</p>
              </div>
          </div>
        </div>
        </div>        
      </div>
    </div>
    <!--/ HEADER-->
    
  <section id="works signup" class="works clearfix" style="width: 100%;background-color: #e3e5e8">
<form class="registration" method="post" action="{{ url('reg-form') }}">
  <div class="group">
    <input type="text" class="business-name"><span class="highlight"></span><span class="bar"></span>
    <label>Business Name:</label>
  </div>
  <div class="group">
    <input type="text" class="business-number"><span class="highlight"></span><span class="bar"></span>
    <label>Business Number:</label>
  </div>
  <div class="group">
    <input type="email" class="business-email"><span class="highlight"></span><span class="bar"></span>
    <label>Business E-Mail:</label>
  </div>
  <div class="group">
    <input type="text" class="business-zip-code"><span class="highlight"></span><span class="bar"></span>
    <label>Business ZIP Code:</label>
  </div>
  <div class="group">
    <input type="text" class="business-address"><span class="highlight"></span><span class="bar"></span>
    <label>Business Address:</label>
  </div>
  <div class="group">
    <input type="text" class="full-name"><span class="highlight"></span><span class="bar"></span>
    <label>Full Name:</label>
  </div>
  <div class="group">
    <span class="highlight"></span><span class="bar"></span>
    <label>Select Area:</label><br><br>
    <select class="form-control" style="border: 1px solid #7ec2f7;border-radius: 4px">
      <option class="300ft">300ft Road Bashundhara</option>
      <option class="bailey-road">Bailey Road</option>
      <option class="banani">Banani</option>
      <option class="baridhara">Baridhara</option>
      <option class="bashundhara">Bashundhara</option>
      <option class="dhanmondi">Dhanmondi</option>
      <option class="gulshan1">Gulshan 1</option>
      <option class="gulshan2">Gulshan 2</option>
      <option class="khilgaon">Khilgaon</option>
      <option class="mirpur">Mirpur</option>
      <option class="mohakhali">Mohakhali</option>
      <option class="mohammadpur">Mohammadpur</option>
      <option class="panthapath">Panthapath</option>
      <option class="shyamoli">Shyamoli</option>
      <option class="uttara">Uttara</option>
    </select>
  </div>
  <div class="group">
    <span class="highlight"></span><span class="bar"></span>
    <label>Select Category:</label><br><br>
    <select class="form-control" style="border: 1px solid #7ec2f7;border-radius: 4px">
      <option class="food">Food & Drinks</option>
      <option class="beauty">Beauty & Spa</option>
      <option class="banani">Lifestyle</option>
      <option class="health">Health & Fitness</option>
      <option class="gataway">Travel & Getaways</option>
      <option class="entertainment">Entertainment</option>
    </select>
  </div>
  
  <button type="submit" class="button buttonBlue">Next
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
</section>

        <div class="row" style="background-color: #0e1830;width: 100%;height: 130px; margin: 0px">
                <div class="col-md-12">
                    <p class="copyright text-center" style="margin: 50px auto">
                        Copyright © 2017 <a href="#">Alpha Vault Tech</a>. All rights reserved. Designed & developed by <a href="#">Alpha Vault Bangladesh.</a>
                    </p>
                </div>
            </div>
    

    
  </div>
    <script src="partner-js/jquery.min.js"></script>
    <script src="partner-js/jquery.easing.min.js"></script>
    <script src="partner-js/bootstrap.min.js"></script>
    <script src="partner-js/wow.js"></script>
    <script src="partner-js/jquery.bxslider.min.js"></script>
    <script src="partner-js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>