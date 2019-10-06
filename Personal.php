<<<<<<< HEAD
<?php session_start(); ?>
<?php if(!isset($_SESSION['e_id'])){
    header('Location: login.php');
} ?>
=======
<?php
require "JsFunction.php";
?>


>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
<<<<<<< HEAD
        <title>EMS - Personal</title>
=======
        <title>EMS - Document</title>
>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" type="text/css" href="CSS/pec.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        .Lable{
                font-size:17px;
                color: black; 
                font-weight: bold; 
                font-family:Times-New_Roamen;
            }
            .button_para{
                font-weight: bold;
                
            }
            .button_container{
                margin-left: 1%;
            }
            .btn-1{
  font-size:1.5rem;
  border-color: #245580;
  border-radius:100px;
  width:45px;
  background-color: #245580;
  height:42px;    
  transition: .5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.icon{
 position: relative;
  top: 2.5%;
  color: white;
  transform: translateX(0%);
  text-align:center;
    font-size: 22px;
}
/*//Hover*/
/*//-----------------------*/
.btn-1:hover{  
  width:125px;
  background-color: #245580;
  border-color:#245580;
  box-shadow: 0px 5px 5px rgba(0,0,0,0.2);
  color: blue;
  transition:.3s;
}

.btn-1:active{
  box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
  transition: .05s
}
        </style>
        
    <?php require_once('codeblocks/notification.php'); ?>
	<div class="wrapper">
        <?php require "JsFunction.php";?>

        <?php require_once('codeblocks/head.php'); ?>
        <?php require_once ('codeblocks/image_insert.php'); ?>
        <?php require_once('codeblocks/navigation.php'); ?>
        
        <?php require_once('codeblocks/side.php'); ?>

<<<<<<< HEAD
<!--        <div class="profile">-->
<!--            <img src="img/profile_img/img1.png" class="w3-circle"  style="width:13%" />-->
<!--        </div>-->
<!--        <div><p style="color: dodgerblue; font-family: 'Times New Roman';font-size: 30px">Personal Details</p></div>-->
        
        
    </div>
    <body>
        <div  id="Personal" class="tabcontain">
            <table>
                <tr>
                    <td class="Lable">1.Title</td>
                    <td id="Title"></td>
                </tr>
                <tr>
                    <td class="Lable">2.Full Name</td>
                    <td id="Full_Name"></td>
                </tr>
                <tr>
                    <td class="Lable">3.Date Of Birth</td>
                    <td id="Date_Of_Birth"></td>
                </tr>
                <tr>
                    <td class="Lable">4.Gender</td>
                    <td id="Gender"></td>
                </tr>
                <tr>
                    <td class="Lable">5.NIC</td>
                    <td id="NIC"></td>
                </tr>
                <tr>
                    <td class="Lable">6.Marital status</td>
                    <td id="Marital_Status"></td>
                </tr>
                <tr>
                    <td class="Lable">7.Nationality</td>
                    <td id="Nationality"></td>
                </tr>
                <tr>
                    <td class="Lable">8.Religion</td>
                    <td id="Religion"></td>
                </tr>
            </table>
            <div class="button_container">
                <button id="personal" class="btn-1" onclick="window.location.href='Personal_edit.php'">
                    <i class="fa fa fa-edit fa-1x icon"></i>
                </button>
                <label for="person" class="button_para">Request to Change</label>
            </div>
            
        </div>
        
    </body>
        <?php require_once('codeblocks/footer.php'); ?>
=======
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

>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248
</html>

<script>Open("Personal");</script>