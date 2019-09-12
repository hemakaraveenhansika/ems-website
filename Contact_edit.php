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

        <div id="Contact_edit" class="edit_tabs">
        <table>
            <tr>
                <td>Address :  </td>
                <td><input id="Address_edit" type="text"></td>
            </tr>
            <tr>
                <td>Country: </td>
                <td><input id="Country_edit" type="text"></td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><input id="Phone_edit" type="text"></td>
            </tr>
            <tr>
                <td>Mobile: </td>
                <td><input id="Mobile_edit" type="text"></td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td><input id="E_mail_edit" type="email"></td>
            </tr>
            <tr>
                <td><input type="submit" id="contact_edit_button" value="Request to Admin for Changing" "><td>
            </tr>
            <tr><p id="return_contact"></p></tr>
        </table>
</div>


        
        <?php require_once('codeblocks/footer.php'); ?>
<body>
</body>
</html>
<script>Edit_Contact();</script>