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

        <div  id="Employee" class="tabcontain">
            <table>
                <tr>
                    <td>1.Date Of Joinning</td>
                    <td id="Date_Of_Joinning"></td>
                </tr>
                <tr>
                    <td>2.Designation</td>
                    <td id="Designation"></td>
                </tr>
                <tr>
                    <td>3.Employee Type</td>
                    <td id="Employee_type"></td>
                </tr>
                <tr>
                    <td>4.Department</td>
                    <td id="Department"></td>
                </tr>
            </table>

            <a id="employee" href="Employee_edit.php">Request to change</a>
            <!-- <button onclick="Edit_Employee()">Request Changes</button> -->
        </div>
    </div>

    <?php require_once('codeblocks/footer.php'); ?>

</html>

<script>Open("Employee");</script>