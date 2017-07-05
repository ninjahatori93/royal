<?php include('header.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-6">   
                        <h3>Welcome to Royalty. </h3>
                    </div>
                    <div class="col-md-6">   
                        <a href="add-partner"><button class="btn btn-primary">Add New</button></a>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    <div class="col-md-6">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             Search Partner By ID
                            </div>        
                                          
                            <div class="panel-body"> 
                                <form action="" method="post">
                                    <input type="search" name="search" placeholder="Search here">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             Search Paartner By Name
                            </div> 
                            <div class="panel-body"> 
                                <form action="" method="post">
                                    <input type="search" name="search" placeholder="Search here">
                                    <button type="submit" class="btn btn-success">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                 </div>
                <!-- /. ROW  -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             Partner Information
                            </div>        
                                          
                            <div class="panel-body" id="partner_table"> 
                                 <table >
                                   <thead>
                                     <tr>
                                        <th>ID</th>
                                        <th>Partner Name </th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Transaction</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>  
                                   </thead>
                                    <tbody>
                                      <tr>
                                        <td>Test Partner</td>
                                        <td>Seasonal Tastes</td>
                                        <td>Partner@example.com</td>
                                        <td>01618XXXXXX</td>
                                        <td>45 Main Gulshan Avenue Road, Gulshan 2, Dhaka City 1212, Bangladesh</td>
                                        <td><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#myModal">Transaction</button></td>
                                        <td><a href="edit-partner"> <button class="btn btn-primary">Edit</button></a></td>
                                        <td><a href="delete_partner.php"><button class="btn btn-danger">Delete</button></a></td>
                                    </tr>  
                                    </tbody>
                                    
                                 </table> 
                            </div>
                        </div>
                    </div>
                </div><!-- ROW  -->
            </div><!-- PAGE INNER  -->         
        </div><!-- PAGE WRAPPER  -->
 

<!--  Modals-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" >&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Partner Transaction Details</h4>
                </div>
                <div class="modal-body" id="partner_modal">
                    <table>
                        <thead>
                           <tr>
                            <th>Customer ID</th>
                            <th>Transaction</th>
                            <th>Amount (taka)</th>
                           </tr> 
                        </thead>
                        <tbody>
                           <tr>
                            <td>Customer 1</td>
                            <td>05</td>
                            <td>5000 tk</td>
                        </tr>
                        <tr>
                            <td>Customer 2</td>
                            <td>05</td>
                            <td>5000 tk</td>
                        </tr>
                        <tr>
                            <td>Customer 3</td>
                            <td>05</td>
                            <td>5000 tk</td>
                        </tr> 
                        </tbody>
                        
                        <tfoot>
                        <tr>
                          <td>Total Customer: 15</td>
                          <td>Total Transaction: 15</td>
                          <td>Total Amount: 15000 tk</td>
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


<?php include('footer.php'); ?>