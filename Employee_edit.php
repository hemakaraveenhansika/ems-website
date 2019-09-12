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

        <div id="Employee_edit" class="edit_tabs">
        <table>
            <tr>
                <td>Date Of Joinning :  </td>
                <td><input id="Date_Of_Joinning_edit" type="date"></td>
            </tr>
            <tr>
                <td>Designation: </td>
                <td><input id="Designation_edit" type="text"></td>
            </tr>
            <tr>
                <td>Employee type: </td>
                <td><select id="Employee_type_edit">
                        <option value="Part Time">Part Time</option>
                        <option value="Full Time">Full Time</option>
                    </select></td>
            </tr>
            <tr>
                <td>Department: </td>
                <td><input id="Department_edit" type="text"></td>
            </tr>
            <tr>
                <td><input type="submit" id="employee_edit_button" value="Request to Admin for Changing" "><td>
            </tr>
            <tr><p id="return_employee"></p></tr>
        </table>
</div>

        
        <?php require_once('codeblocks/footer.php'); ?>
<body>
</body>
</html>
<script>Edit_Employee();</script>