<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Registration</title>

        <!-- CSS -->
     
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
		

    </head>

    <div  class="registration">
		
 		<link rel="stylesheet" href="css/registration/form-elements.css">
        <link rel="stylesheet" href="css/registration/style.css">
        <link rel="stylesheet" href="css/registration/media-queries.css">
		<!-- Multi Step Form -->
		<div class="msf-container">
	        <div class="container" style="margin-top: 100px">
	        
	            <div class="row">
	                <div class="col-sm-12 msf-form">
	                    
	                    <form role="form" action="" method="post" class="form-inline">
	                    	
	                    	<fieldset>
	            				<h4>Introduction <span class="step">(Step 1 / 4)</span></h4>
	            				<div class="form-group">
				                    <label for="first-name">First Name:</label><br>
				                    <input type="text" name="first-name" class="first-name form-control" id="first-name">
				                </div><br/>
				                <div class="form-group">
				                    <label for="last-name">Last Name:</label><br>
				                    <input type="text" name="last-name" class="last-name form-control" id="last-name">
				                </div><br/>
				                <div class="form-group">
				                    <label for="height">Email:</label><br>
				                    <input type="text" name="height" class="height form-control" id="height">
				                </div>
				             
	            				<br>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Personal Information<span class="step">(Step 2 / 4)</span></h4>
	            				<div class="form-group">
				                    <label for="birth-city">City:</label><br>
				                    <input type="text" name="birth-city" class="birth-city form-control" id="birth-city">
				                </div><br>
				                <div class="form-group">
				                    <label for="birth-date">Date Of Birth(YYYY/MM/DD):</label><br>
				                    <input type="text" name="birth-date" class="birth-date form-control" id="birth-date">
				                </div>
	            				<br>
	            				<div class="form-group">
				                    <label for="address">Address:</label><br>
				                    <input type="text" name="address" class="address form-control" id="address">
				                </div>
				                <br>
				                 <div class="form-group">
				                    <label for="telephone">Telephone:</label><br>
				                    <input type="text" name="telephone" class="telephone form-control" id="telephone">
				                </div>
				                <br>
				                <div class="selects-2">
									<p>Select 2:</p>
					                <select class="form-control" name="select-2">
					                	<option value="1">Male</option>
					                	<option value="2">Female</option>
					                </select>
								</div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	            			
	            			<fieldset>
	            				<h4>Password<span class="step">(Step 3 / 4)</span></h4>
	            				
				                <div class="form-group">
				                    <label for="address-city">Passwrord:</label><br>
				                    <input type="text" name="address-city" class="address-city form-control" id="address-city">
				                </div>
				                <br>
				                <div class="form-group">
				                    <label for="address-state">Confirm Password:</label><br>
				                    <input type="text" name="address-state" class="address-state form-control" id="address-state">
				                </div>
	            				<br>
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
	            			</fieldset>
	                    	
	                    	<fieldset>
	            				<h4>Payment<span class="step">(Step 4 / 4)</span></h4>
	            				
	            				<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i> Previous</button>
	            				<button type="submit" class="btn">Submit</button>
	            			</fieldset>
	                    </form>
	                    
	                </div>
	            </div>
			</div>
		</div>
		
		

        <!-- Javascript -->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/registration/jquery.backstretch.min.js"></script>
        <script src="js/registration/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </div>

</html>
