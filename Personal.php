<?php
require "JsFunction.php";
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EMS - Document</title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" type="text/css" href="CSS/pec.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        
    </head>


	<div class="wrapper">
        <?php require_once('codeblocks/head.php'); ?>

        <?php require_once('codeblocks/navigation.php'); ?>
        
        <?php require_once('codeblocks/side.php'); ?>

        <div class="profile">
            <img src="img/profile_img/img1.png" class="w3-circle"  style="width:13%" />
        </div>

        <div  id="Personal" class="tabcontain">
            <table>
                <tr>
                    <td>1.Title</td>
                    <td id="Title"></td>
                </tr>
                <tr>
                    <td>2.Full Name</td>
                    <td id="Full_Name"></td>
                </tr>
                <tr>
                    <td>3.Date Of Birth</td>
                    <td id="Date_Of_Birth"></td>
                </tr>
                <tr>
                    <td>4.Gender</td>
                    <td id="Gender"></td>
                </tr>
                <tr>
                    <td>5.NIC</td>
                    <td id="NIC"></td>
                </tr>
                <tr>
                    <td>6.Marital status</td>
                    <td id="Marital_Status"></td>
                </tr>
                <tr>
                    <td>7.Nationality</td>
                    <td id="Nationality"></td>
                </tr>
                <tr>
                    <td>8.Religion</td>
                    <td id="Religion"></td>
                </tr>
            </table>

            <a id="personal" href="Personal_edit.php">Request to change</a>
            <!-- <a onclick="Edit_Personal()">Request Changes</button> -->

        </div>
    </div>
       
    <?php require_once('codeblocks/footer.php'); ?>

</html>

<script>Open("Personal");</script>