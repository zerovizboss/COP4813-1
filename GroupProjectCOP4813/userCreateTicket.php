
<!doctype html>

<html lang="en">

    <head>
        <title>Clinasyst</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="Scripts/jquery-2.1.4.js"></script>
        <script src="js/bootstrap.js"></script>
        <script>

            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })

        </script>
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
                <li><a href="userProfile.php">Profile</a></li>
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
            <h2 class="page-header">Create New Ticket</h2>

            <!---------- Form ---------->
                 <form class="form-container">
                     <div class="form-group">
                         <label for="inputTitle">Title</label>
                         <input type="text" class="form-control" id="inputTitle" placeholder="Title" required/>
                     </div>
                     <div class="form-group">
                         <label for="inputCategory">Category</label>
                         <span class="glyphicon glyphicon-question-sign" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="Most relevant to your issue"></span>
                         <select class="form-control">
                             <option> -Select Category- </option>
                             <option>example option</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <label for="inputDesc">Description</label>
                         <textarea class="form-control" rows="5" id="inputDesc" placeholder="Please describe your issue..."></textarea>
                     </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                         <a href="userDashboard.php" class="btn btn-default">Cancel</a>
                 </form>
                 <!---------- End Form ---------->
                  
        </div>
        <!---------- End Container ---------->

    </body>

</html>


<?php

?>