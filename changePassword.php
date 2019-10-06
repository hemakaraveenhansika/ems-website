<?php
session_start();
$emp_id = $_SESSION['e_id'];
if (isset($_POST['submit'])) {
    $oldpassword = sha1($_POST['oldpassword']);
    $newpassword = sha1($_POST['newpassword']);
    $confirmpassword = sha1($_POST['confirmpassword']);

    $db = require_once("administrator/dbConfig.php");
    $query = "SELECT * FROM employee where employee_ID='$emp_id'";
    $resultSet = mysqli_query($db, $query) or die('query did not work');
    $row = mysqli_fetch_assoc($resultSet);
    if ($oldpassword == $row['e_password']) {
        if ($newpassword == $confirmpassword) {
            $queryChange = mysqli_query($db, "UPDATE employee SET e_password='$newpassword' where employee_ID='$emp_id'") or die('query did not work');
//            die ("
//                    <link rel='stylesheet' type='text/css' href='css/contact_style.css'>
//                    <body>
//                    <div class='form-area' style='margin-top:10px; height:400px;'>
//                    <form id='contact-form'>
//                        <br><br><h2>Your password has been changed Successfully. </h2>
//                        <br><br>Return to the<a style='text-decoration: underline; !important; ' href='Personal.php'> main page!</a>
//                    </form>
//                    </div>
//                    </body>");
            echo("<span id='incorrect'><div style='margin-top:50px; color:#000; font-weight: bold;'>Your password has been changed Successfully.</div></span>");
        } else {
            echo("<div style='margin-top:450px; color:#F90A0A; font-weight: bold;'>new passwords doesn't match</div>");
        }
    } else {
        echo("<span id='incorrect'><div style='margin-top:50px; color:#F90A0A; font-weight: bold;'>Old password is incorrect</div></span>");
    }


} else {
    //echo('You must be logged in to change your password');
}


?>

<html>
<head>
    <title>change password</title>
    <link rel='stylesheet' type='text/css' href='css/contact_style.css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {

            $("#password_error_msg").hide();
            $("#confirmp_error_msg").hide();

            var error_password = false;
            var error_confirmp = false;

            $('#password').focusout(function () {
                check_password();
            });

            $('#confirmpassword').focusout(function () {
                check_confirmp();
            });

            function check_password() {
                var password_length = $('#password').val().length;
                if (password_length < 8) {
                    $("#password_error_msg").html("Password should contain atleast 8 characters");
                    $("#password_error_msg").show();
                    $("#password_error_msg").css("color", "#F90A0A");
                    error_password = true;
                } else {
                    $("#password_error_msg").hide();
                    error_password = false;
                }
            }

            function check_confirmp() {
                var password = $('#password').val();
                var confirmp = $('#confirmpassword').val();
                if (password == confirmp) {
                    $("#confirmp_error_msg").hide();
                    error_confirmp = false;
                } else {
                    $("#confirmp_error_msg").html("Confirm password and password should be the same. ");
                    $("#confirmp_error_msg").show();
                    $("#confirmp_error_msg").css("color", "#F90A0A");
                    error_confirmp = true;
                }
            }

            $('#submit').click(function (e) {
                $("#incorrect").hide();
                var oldpassword = $('#oldpassword').val();
                var password = $('#password').val();
                var confirmpassword = $('#confirmpassword').val();
                if (error_password == true || error_confirmp == true || oldpassword == '' || password == '' || confirmpassword == '') {
                    event.preventDefault();
                    alert("Please fill the information correctly");

                }
            });

        });
    </script>


</head>
<body>
<div class='form-area'>
    <div class='contact-title'>
        <h1><br><br>Change Password<br><br></h1>

    </div>

    <div class='contact-form'>
        <form id='contact-form' onsubmit="false" method='POST' action='changePassword.php'>
            <input name='oldpassword' id='oldpassword' type='password' class='form-control'
                   placeholder='Old Password' required>
            <br>

            <input name='newpassword' id='password' type='password' class='form-control'
                   placeholder='New Password' required>
            <span class="error_form" id="password_error_msg"></span>
            <br>

            <input name='confirmpassword' id='confirmpassword' type='password' class='form-control'
                   placeholder='Confirm Password' required><br>
            <span class="error_form" id="confirmp_error_msg"></span>
            <br>

            <input name='submit' id='submit' type='submit' class='submit' value='Change Password'>
            <a style="text-decoration: none;!important;" href="Personal.php"><input   class='submit' value='Back'></a>
        </form>
    </div>
</div>
</body>
</html>

