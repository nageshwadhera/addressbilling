<!DOCTYPE HTML>
<?php
session_start();
if(isset($_SESSION['nagesh']))
{
    header("location:home.php");
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.js" rel="script"></script>
    <script src="jquery-3.2.1.min.js" rel="script"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
    <script src="jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#form1").validate();
            $("#form").validate();
        })
    </script>
</head>


<body background="images/back.jpg ">

<div id="main" class="container">

    <!-- HEADING -->

    <label id="addresss" style="margin-top: 20%">ADDRESS MANAGEMENT SYSTEM</label>

    <!-- BUTTONS -->

<h2 style="margin-top: 25%" id="buttons">
        <button class="btn btn-success" data-toggle="modal" data-target="#signup"> Sign Up <span class="glyphicon glyphicon-log-in" > </button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#signin">Sign In <span class="glyphicon glyphicon-user"></span> </button>
</h2>
    <!-- Signin Modal -->
    <div class="modal fade" id="signin" role="dialog" style="background-color: #0f0f0f">
        <div class="modal-dialog">

            <!-- Modal content-->

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <center>   <label style="color:#1b6d85; font-size:24px;">USER LOGIN</label></center>
                </div>
                <div class="modal-body">
                    <form action="logincheck.php" method="post" style="width:400px;" id="form1">
                    <div class="form-group">

                        <label style="color:#1b6d85; margin-right:350px;">Username</label>
                        <input  name="user" id="user" type="text" class="form-control" data-rule-maxlength="50">
                    </div>

                    <div  class="form-group">
                        <label style="color:#1b6d85; margin-right: 350px;">Password</label>
                        <input  name="pwd"  id="pwd" type="password" class="form-control" data-rule-minlength="6" data-rule-required="true">
                    </div>

                    <div id="btns" class="form-group">
                        <input class="btn btn-info form-control" type="submit" value="Submit" style="width:150px;">


                    </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <!--  Signup Modal -->
    <div class="modal fade" id="signup" role="dialog" style="background-color: #0f0f0f">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <center>  <h4 class="modal-title">SIGNUP</h4></center>
                </div>
                <div class="modal-body">
                    <form id="form" action="user.php" method="post" style="width:400px; font-family: Georgia">
                        <div class="form-group">
                            <label style="color:grey;margin-top: 30px; margin-right: 315px;">First Name</label>
                            <input  name="fname" id="fname" type="text" class="form-control" data-rule-required="true" data-rule-minlength="2">
                        </div>

                        <div class="form-group">
                            <label style="color:grey;margin-right: 315px;">Last Name</label>
                            <input  name="lname"  id="lname" type="text" class="form-control" data-rule-required="true" data-rule-minlength="2">
                        </div>

                        <div class="form-group">
                            <label style="color:grey;margin-right: 315px;">Username</label>
                            <input   name="user" id="user" type="email" class="form-control" data-rule-required="true" data-rule-minlength="7">
                        </div>

                        <div class="form-group">
                            <label style="color:grey; margin-right: 315px;">Password</label>
                            <input  name="pwd" id="pwd" type="password" class="form-control" data-rule-required="true" data-rule-minlength="6">
                        </div>

                        <div id="buttonss" class="form-group">
                            <input style="width:150px;"class="btn btn-info" type="submit" value="Submit">&nbsp;&nbsp;

                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>