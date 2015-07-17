
<!doctype html>

<html lang="en">

    <head>
        <title>Clinasyst</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="Scripts/jquery-2.1.4.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>

    <body>

        <!---------- Navigation ---------->
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Clinasyst</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li><a href="userDashboard.php">Home</a></li>
                <li class="active"><a href="#">Profile<span class="sr-only">(current)</span></a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Sign out</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      
        <!---------- Page Container ---------->
        <div class="container">
            
            <a href="userDashboard.php" class="btn btn-default pull-right"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Go Back</a>

            <!---------- Page Title ---------->
            <h2 class="page-header">My Profile</h2>

            <!---------- Form ---------->
                 <form class="form-container">
                     <div class="form-group">
                         <label for="inputName">Business Name</label>
                         <input type="text" class="form-control" id="inputName" placeholder="example business" disabled/>
                     </div>
                     <div class="form-group">
                         <label for="inputType">Account Type</label>
                         <input type="text" class="form-control" id="inputType" placeholder="user" disabled/>
                     </div>
                     <div class="form-group">
                         <label for="inputEmail">Email Address</label>
                         <input type="text" class="form-control" id="inputEmail" placeholder="user@example.com" disabled/>
                     </div>
                     <div class="form-group">
                         <label for="inputPass">Password</label>
                         <input type="password" class="form-control" id="inputPass" placeholder="**********" disabled/>
                         <!---------- Modal Trigger ---------->
                         <a href="#" data-toggle="modal" data-target="#passModal">Change Password</a>

                         <!---------- Modal ---------->
                        <div class="modal fade" id="passModal" tabindex="-1" role="dialog" aria-labelledby="passModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Change Password</h4>
                              </div>
                              <form>
                                  <div class="modal-body">
                                    
                                     <div class="form-group">
                                         <label for="inputCurrPass">Current Password</label>
                                         <input type="password" class="form-control" id="inputCurrPass" placeholder="Current Password" required/>
                                     </div>
                                     <div class="form-group">
                                         <label for="inputNewPass">New Password</label>
                                         <input type="password" class="form-control" id="inputNewPass" placeholder="New Password" required/>
                                     </div>
                                     <div class="form-group">
                                         <label for="inputConfPass">Confirm Password</label>
                                         <input type="password" class="form-control" id="inputConfPass" placeholder="Confirm Password" required/>
                                     </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary pull-left">Save changes</button>
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                  </div>
                              </form>
                            </div>
                          </div>
                        </div>
                     </div>
                     <!---------- End Modal ---------->

                 </form>
                 <!---------- End Form ---------->
                  
        </div>
        <!---------- End Container ---------->

    </body>

</html>


<?php

?>