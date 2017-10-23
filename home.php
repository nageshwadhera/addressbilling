<!DOCTYPE html>
<?php
    session_start();
    include ("header2.php");
    if(!isset($_SESSION['nagesh']))
    {
        header("location:index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        })
    </script>
</head>
<body style=" background-image:url('images/back.jpg');">
        <!-- CHANGE PASSWORD BUTTON-->
        <div class="container" style="margin-top: 50px;">
        <button type="button" class="btn btn-success" style="float: right; margin-right: 50px; margin-bottom: 10px;" data-toggle="modal" data-target="#change" ><?php echo $_SESSION["nagesh"];?><span CLASS="glyphicon glyphicon-user"></span></button>
        <br>
        <br>

        <!-- HEADING-->
        <center><h2><div  class="text-uppercase text-danger"  id="msg" style="margin-top: 50px;" >ADDRESS MANAGEMENT SYSTEM</div>
            <br><br></h2>

        <!-- BUTTONS-->
        <div id="buttons">

            <button class="btn-success btn" data-toggle="modal" data-target="#address"  style="border-radius: 10px">NEW ADDRESS</button><br><br>
            <a href="list.php?add="><button class="btn btn-success" style="border-radius: 10px">VIEW ADDRESSES</button></a><br><br>
            <button class="btn btn-danger" data-toggle="modal" data-target="#delete">DELETE ADDRESSES</button> </a>
        </div>
        </center>

        <!--ADD ADDRESS MODAL-->
        <div class="modal fade" id="address" role="dialog" style="background-color: #0f0f0f">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content" style="font-family: Georgia;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center>   <label style="color:#1b6d85; font-size:28px;">ADD ADDRESS</label></center>
                    </div>
                    <div class="modal-body">
                        <form action="address.php" method="post"  id="form1">
                            <div id="fname" class="form-group">
                                <label>First Name</label>
                                <input name="fname" id="fname" data-rule-required="true" type="text" class="form-control" data-rule-minlength="2">
                            </div>

                            <div id="lname" class="form-group">
                                <label >Last Name</label>
                                <input name="lname"  id="lname" type="text" class="form-control" data-rule-required="true" data-rule-minlength="2">
                            </div>

                            <div id="address" class="form-group">
                                <label>Address</label>
                                <input name="addr" id="addr" type="text" class="form-control" data-rule-required="true" data-rule-minlength="2">
                            </div>

                            <div id="cntct" class="form-group">
                                <label id=cntctnum >Contact Number</label>
                                <input  name="contact" id="contact" type="text" class="form-control" data-rule-required="true" data-rule-number="true" data-rule-maxlength="10" data-rule-minlength="10">
                            </div>

                            <div id="buttons" class="form-group">
                                <input style="width: 100px; position: relative; left:-10px;"class="btn btn-success" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!--DELETE ADDRESS MODAL-->
        <div class="modal fade" id="delete" role="dialog" style="background-color: #0f0f0f">
            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content" style="font-family: Georgia;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <center>   <label style="color:#1b6d85; font-size:28px;">ENTER USERNAME</label></center>
                    </div>
                    <div class="modal-body">
                        <form action="deleteqry.php" method="post"  id="form1">
                            <div id="snum" class="form-group">
                                <input  name="name" id="name" data-rule-required="true" type="text" class="form-control" >
                            </div>

                            <div id="buttons" class="form-group">
                                <input style="width: 100px; position: relative; left:-10px;"class="btn btn-success" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!--CHANGE PASSWORD MODAL-->
        <div class="modal fade" id="change" role="dialog" style="background-color:#0f0f0f;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Change Details</h4>
                    </div>
                    <div class="modal-body">
                        <form action="changepwd.php" method="post">
                          <div class="form-group">
                                <label>FIRST NAME</label>
                                <input type="text" class="form-control" name="fname" placeholder="Enter Firstname">
                          </div>
                          <div class="form-group">
                                <label>LAST NAME</label>
                                <input type="text" class="form-control" name="lname" placeholder="Enter Last Name">
                          </div>
                          <div class="form-group">
                                <label>USERNAME</label>
                                <input type="email" class="form-control" name="username" readonly value="<?php echo $_SESSION['nagesh'];?>">
                          </div>
                          <div class="form-group">
                                <label>PASSWORD</label>
                                <input type="password" class="form-control" name="pwd" placeholder="Enter Password" data-rule-minlength="6">
                          </div>
                          <div class="form-group">
                            <input type="Submit" class="btn btn-success" name="submit">
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