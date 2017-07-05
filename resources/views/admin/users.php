<?php include('header.php'); ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">   
                        <h3>Welcome to Royalty. </h3>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <div class="row">
                    <div class="col-md-6">    
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             Search User By ID
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
                             Search User By Name
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
                             User Information
                            </div>        
                                          
                            <div class="panel-body" id="user_table"> 
                                 <table>
                                   <thead>
                                      <tr>
                                        <th>ID</th>
                                        <th>Customer Name </th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>DOB</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr> 
                                   </thead>
                                    <tbody>
                                        <tr>
                                        <td>Test user</td>
                                        <td>John Cina</td>
                                        <td>user@example.com</td>
                                        <td>01618XXXXXX</td>
                                        <td>Karwan bazar, Dhaka</td>
                                        <td>31-May-17</td>
                                        <td><a href="edit-user"> <button class="btn btn-primary">Edit</button></a></td>
                                        <td><a href="delete_user.php"><button class="btn btn-danger">Delete</button></a></td>
                                    </tr>
                                    </tbody>
                                    
                                 </table> 
                            </div>
                        </div>
                      
                    </div>
                    
                </div>
                <!-- /. ROW  -->
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
<?php include('footer.php'); ?>