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

        <div id="Personal_edit" class="edit_tabs">
            <table>
                <tr>
                    <td>Title :  </td>
                    <td><input id="Title_edit" type="text" name="Title"></td>
                </tr>
                <tr>
                    <td>Full Name: </td>
                    <td><input id="Full_Name_edit" type="text" name="Full_Name"></td>
                </tr>
                <tr>
                    <td>Date Of Birth: </td>
                    <td><input id="Date_Of_Birth_edit" type="date" name="Date_Of_Birth"></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td><select id="Gender_edit" name="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select></td>
                </tr>
                <tr>
                    <td>NIC: </td>
                    <td><input id="NIC_edit" type="text" name="NIC"></td>
                </tr>
                <tr>
                    <td>Marital status: </td>
                    <td><select id="Marital_Status_edit" name="Marital_Status">
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Nationality: </td>
                    <td><input id="Nationality_edit" type="text" name="Nationality"></td>
                </tr>
                <tr>
                    <td>Religion: </td>
                    <td><input id="Religion_edit" type="text" name="Religion"></td>
                </tr>
                <tr>
                    <td><input type="submit" id="personal_edit_button" value="Request to Admin for Changing" /><td>
                </tr>
                <tr><p id="return_personal"></p></tr>
            </table>
</div>

        
        <?php require_once('codeblocks/footer.php'); ?>
<body>
</body>
</html>
<script>Edit_Personal();</script>