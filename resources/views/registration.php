<?php
  include('header.php');
?>

 <link rel="stylesheet" href="css/registration/style.css">

<section id="works" class="works clearfix" style="width: 100%;margin-top: 50px;background-color: #e3e5e8">
<form class="registration">
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>First Name:</label>
  </div>
  <div class="group">
    <input type="email"><span class="highlight"></span><span class="bar"></span>
    <label>Last Name</label>
  </div>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>E-Mail</label>
  </div>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Date Of Birth:</label>
  </div>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Contact Number:</label>
  </div>
  <div class="group">
    <input type="text"><span class="highlight"></span><span class="bar"></span>
    <label>Address</label>
  </div>
  <div class="group">
    <input type="password"><span class="highlight"></span><span class="bar"></span>
    <label>Password:</label>
  </div>
  <div class="group">
    <input type="password`"><span class="highlight"></span><span class="bar"></span>
    <label>Confirm Password</label>
  </div>
   <div class="group">
    <input type="file"><span class="highlight"></span><span class="bar"></span>
  </div>
  
  <button type="button" class="button buttonBlue">Next
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
</form>
</section>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script src="js/registration/index.js"></script>

<?php
	include('footer.php');
?>   