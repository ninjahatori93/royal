<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Royalty 17</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- custom design-->
    <link rel="stylesheet" type="text/css" href="style.css">
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
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
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="">Harikken
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
    <div class="row" style="background-color: #F1FFB8; padding: 10px 0; "><!-- Second row -->
        <div class="col-md-3">
            <img src="images/food.jpg" width="150px" height="150px" alt="Profile image"> 
        </div>  
        <div class="col-md-6">
            Name: Harikken<br><br>
            Password: ********<br><br>
            Contract Date: 01-01-0001
        </div>  
        <div class="col-md-3" id="transaction">
          <a href="#" data-toggle="modal" data-target="#myModal" >Transaction history</a>
        </div>

    </div><!-- End of second row -->
    <hr>
    <br><br>
    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-6">
        <form action="" method="post">
          <div class="form-group">
            <label class="control-label col-sm-3" for="name">Customer ID:</label>
            <div class="col-sm-10 col-xs-12 col-md-8">
              <input type="text" class="form-control" id="email" placeholder="Customer ID">
            </div>
          </div><br><br>
          <div class="form-group">
            <label class="control-label col-sm-3" for="name">Bill:</label>
            <div class="col-sm-10 col-xs-12 col-md-8">
              <input type="text" class="form-control" id="email" placeholder="Bill">
            </div>
          </div><br>
          <div class="form-group" style="margin-top: 1%;">
            <label class="control-label col-sm-3" for="name">Discount:</label>
            <div class="col-sm-10 col-xs-12 col-md-8">
              <input type="text" class="form-control" id="email" placeholder="Discount">
            </div>
          </div><br>
          <div class="form-group">
            <label class="control-label col-sm-3" for="name"></label>
            <div class="col-md-6 col-xs-12 col-sm-12">
              <a href="#" data-toggle="modal" data-target="#discountModal" class="btn btn-custom ">Calculate Discount</a>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-3"></div>
    </div>
    <div class="row"><!-- Third row -->
        <div class="col-md-12"  style="margin-top: 3%;" >
<!--           <a href="#" data-toggle="modal" data-target="#myModal" >Calculate Discount</a>
 -->        </div>
    </div><!-- End of Third row -->

<!--  Modals-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Transaction history</h4>

      </div>
      <div class="modal-body" id="profile_modal">
        <!-- <form>
          <div class="form-group">
            <div class="col-sm-12 col-xs-12 col-md-6">
              <input type="search" class="form-control" id="" placeholder="Search Customer">
              <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                   <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </div><br>
        </form><br> -->
        <table style=" height: 400px; display: inline-block; width: 100%; overflow: auto;" >
          <thead style="width: 100%;">
            <tr>
                <th>Date</th>
                <th>Customer ID</th>
                <th>Total Bill</th>
                <th>Discount Offered</th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
            <tr>
                <td>01-01-0001</td>
                <td>Customer ID</td>
                <td>2000 tk</td>
                <td>200</td>
            </tr>
          </tbody>
            
          <tfoot>
            <tr>
              <td><button style="padding: 2px 10px;" class="btn btn-success btn-sm">Total</button></td>
              <td></td>
              <td><b>8000 tk</b></td>
              <td><b>800 tk</b></td>
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
<!-- End Modals-->


<!-- Discount Modals-->
<div id="discountModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Transaction Details</h4>
      </div>
      <div class="modal-body" id="profile_modal">
        <p>Customer ID: <span><b>Royalty 17</b></span></p>
        <p>Bill: <span><b>2000</b></span></p>
        <p>Discount: <span><b>25%</b></span></p>
        <p>Amount after discount: <span><b>1500</b></span></p>
        <button type="button" class="btn btn-success">Confirm</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modals-->



    <hr>
 
    <div class="row">
      <div class="col-md-12 foot">
          <p>This is footer part of the user account</p>
      </div>
    </div>

</div><!-- End of container -->

    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script> 
    <script src="assets/js/customScript.js"></script> 

</body>
</html>