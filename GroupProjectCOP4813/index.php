<!doctype html>

<html lang="en">

    <head>
        <title>Clinasyst</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="Scripts/jquery-2.1.4.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>

    <body>
      
        <!---------- Sign In ---------->
        <div class="container">

            <form class="form-signin">
                <h2 class="text-center page-header">Clinasyst</h2>

                <div class="form-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" required/>
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password" required/>
                    <a href="forgotPassword.php">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary col-span-all">login</button>

            </form>
        </div>

    </body>

</html>


<?php

?>