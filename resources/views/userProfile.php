<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Royalty 17</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- custom design-->
    <link rel="stylesheet" type="text/css" href="style.css">
     <!-- GOOGLE FONTS-->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <style>

  </style>
</head>
<body>
<div class="container">
    <div class="row" style="margin: 0 -30px;"><!-- First row -->
        <div class="col-md-12"><!-- Nav div -->
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <div class="navbar-header" style="background-color: #F8F8F8;">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                  </button>
                  <img src="images/companyLogo.png" width="100px" height="50px">
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><img src="images/homeButton.png" width="30" height="25"></a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Renew Subscription</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="">XYZ
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="editUser.php">Edit Profile</a></li>
                        <li><a href="#">Logout</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
        </div><!-- End of nav div -->
    </div><!-- End of first row -->
    <div class="row" style="background-color: #E6E6FA; padding-top: 10px; "><!-- Second row -->
        <div class="col-md-5 user_image">
            <img src="http://www2.mmu.ac.uk/media/mmuacuk/content/images/health-professions/student-profile-simone-bianchi-piantini.jpg" width="150px" height="150px" alt="Profile image" style="margin-left: 65%; margin-top: 30px"> 
        </div>

        <div class="col-md-5" style="padding-top: 30px; padding-left: 70px">
        <ul >
          <span class="glyphicon glyphicon-user"> ABCDXYZ</span> <br> <br>
          <span class="glyphicon glyphicon-envelope"> 123@xyz.com</span> <br> <br>
          <span class="glyphicon glyphicon-gift"> 01-01-0001</span> <br> <br>
          <span class="glyphicon glyphicon-credit-card"></span> <span style="padding: 2px 40px;" class="btn-success btn-sm">Active</span> <br> <br>
          <span class="glyphicon glyphicon-flash"> Expiry:01-01-2018</span>
        </ul>
            
           
                      
            <span style="font-size: .9em;"></span><br><br>
        </div>  

        <div class="col-md-3"></div>

    </div><!-- End of second row -->

    <div class="row"><!-- Third row -->
        <div class="col-md-12" id="transaction" style="margin-top: 3%;" >
            <a href="#" data-toggle="modal" data-target="#myModal" style="background-color: #121E3B">Transaction History</a>
        </div>
    </div><hr><!-- End of Third row -->

<!--  Modals-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <center>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Transaction history</h4>
      </div>
      <div class="modal-body" id="profile_modal">
        <table>
          <thead>
            <tr>
                <th>Date</th>
                <th>Shop Visited</th>
                <th>Bill</th>
                <th>Discount Availed</th>
                <th>Amount Spent</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>01-01-0001</td>
                <td>Restaurant 1</td>
                <td>2000 tk</td>
                <td>200 tk</td>
                <td>1800 tk</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Restaurant 2</td>
                <td>2000 tk</td>
                <td>200 tk</td>
                <td>1800 tk</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Restaurant 3</td>
                <td>2000 tk</td>
                <td>200 tk</td>
                <td>1800 tk</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Restaurant 4</td>
                <td>2000 tk</td>
                <td>200 tk</td>
                <td>1800 tk</td>
            </tr>
          </tbody>
            
             <tfoot>
            <tr>
              <td><button style="padding: 5px 30px;" class="btn btn-success btn-sm">TOTAL</button></td>
              <td></td>
              <td><b>8000 tk</b></td>
              <td><b>800 tk</b></td>
              <td><b>7200 tk</b></td>
            </tr>
          </tfoot>
         </table> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<!-- End Modals-->

    <div class="row"><!-- Fourth row -->
        <div class="col-md-12" style="background-color: #121E3B ; height: 200px;">
          <p style="color: #CDB64B; font-style: railway medium; font-size: 2em; text-align: center;">YOUR LOYALTY REWARDED BY ROYALTY</p>
            <div class="progress" style="margin-top:;">
              <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
              aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%; color: #121E3B  ">
                40% Complete (success)
              </div>

            </div>
        </div>
    </div><!-- End of fourth row -->


    <div class="row"><!-- Fifth row -->
       <div class="col-md-12">
        <h1 style="color: black; text-align: center;">You have saved " 0000 Tk"</h1>
       </div> 
    </div><!-- End of fifth row -->   


    <hr>
<center>
    <div class="row" style="background-color: #E6E6FA; padding: 0; "><!-- Fifth row -->
        <h3 class="text" style="font-size: 25px"> Refer a friend or family!</h3>
        <h4 class="text" style="font-size: 20px"> Refer your friend or family to win XYZ!</h4>
        <br>
        <div class="col-md-12" >
        <button class="btn btn-danger" style="background-color: #121E3B; border-color: #121E3B">Refer!</button>
        </div><br><br><br>
    </div><br>
    
    <div class="row" style="background-color: #E6E6FA; padding: 0 0 2% 0; ">
        <h3 class="text" style="font-size: 25px">Email Preferences</h3>
        <div class="col-md-12">
            <button class="btn btn-danger" style="background-color: #121E3B; border-color: #121E3B">Unsubscribe</button>
        </div>
    </div><br><br>
    </center><!-- End of fifth row -->
 
    <div class="row">
      <div class="col-md-12 foot">
          <p>This is footer part of the user account</p>
      </div>
    </div>

</div><!-- End of container -->

    <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script> 
    <script src="js/customScript.js"></script> 
   <!-- Facebook messenger widget -->

<!-- /Facebook messenger widget -->
</body>
</html>