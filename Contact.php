<<<<<<< HEAD
<?php session_start();?>
=======
>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248
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
<<<<<<< HEAD
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
            .button{
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
.button:hover{  
  width:125px;
  background-color: #245580;
  border-color:#245580;
  box-shadow: 0px 5px 5px rgba(0,0,0,0.2);
  color: blue;
  transition:.3s;
}

.button:active{
  box-shadow: 0px 2px 5px rgba(0,0,0,0.2);
  transition: .05s
}
        
        </style>
    <?php require_once('codeblocks/notification.php'); ?>
=======
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        
    </head>
>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248


	<div class="wrapper">
        <?php require_once('codeblocks/head.php'); ?>
<<<<<<< HEAD
        <?php require_once ('codeblocks/image_insert.php'); ?>
=======

>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248
        <?php require_once('codeblocks/navigation.php'); ?>
        
        <?php require_once('codeblocks/side.php'); ?>

<<<<<<< HEAD
<!--        <div class="profile">-->
<!--            <img src="img/profile_img/img1.png" class="w3-circle"  style="width:13%" />-->
<!--        </div>-->
=======
        <div class="profile">
            <img src="img/profile_img/img1.png" class="w3-circle"  style="width:13%" />
        </div>
>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248

        <div  id="Contact" class="tabcontain">
            <table>
                <tr>
<<<<<<< HEAD
                    <td class="Lable">1.Address</td>
                    <td id="Address"></td>
                </tr>
                <tr>
                    <td class="Lable">2.Country</td>
                    <td id="Country"></td>
                </tr>
                <tr>
                    <td class="Lable">3.Phone</td>
                    <td id="Phone"></td>
                </tr>
                <tr>
                    <td class="Lable">4.Mobile</td>
                    <td id="Mobile"></td>
                </tr>
                <tr>
                    <td class="Lable">5.E-mail</td>
                    <td id="E_mail"></td>
                </tr>
            </table>
            <div class="button_container">
                <button id="personal" class="button" onclick="window.location.href='Contact_edit.php'">
                    <i class="fa fa fa-edit fa-1x icon"></i>
                </button>
                <label for="person" class="button_para">Request to Change</label>
            </div>
=======
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

>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248
        </div>
    </div>

    <?php require_once('codeblocks/footer.php'); ?>

</html>

<script>Open("Contact");</script>