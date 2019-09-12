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

        <div  id="Contact" class="tabcontain">
            <table>
                <tr>
                    <td>1.Address</td>
                    <td id="Address"></td>
                </tr>
                <tr>
                    <td>2.Country</td>
                    <td id="Country"></td>
                </tr>
                <tr>
                    <td>3.Phone</td>
                    <td id="Phone"></td>
                </tr>
                <tr>
                    <td>4.Mobile</td>
                    <td id="Mobile"></td>
                </tr>
                <tr>
                    <td>5.E-mail</td>
                    <td id="E_mail"></td>
                </tr>
            </table>

            <a id="contact" href="Contact_edit.php">Request to change</a>
            <!-- <button onclick="Edit_Contact()">Request Changes</button> -->

        </div>
    </div>

    <?php require_once('codeblocks/footer.php'); ?>

</html>

<script>Open("Contact");</script>