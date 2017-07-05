<?php
  include('header.php');
?>


 <link rel="stylesheet" href="css/registration/style.css">

<section id="works" class="works clearfix" style="width: 100%;margin-top: 70px;background-color: #e3e5e8">
<form class="registration">
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