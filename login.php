<<<<<<< HEAD

<!DOCTYPE html>
<?php $count=false; ?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/contact_style.css">
</head>
<body>
    <?php if(isset($_GET['login_failed'])){
            echo "<p style='background-color: #2b542c;color: white; padding: 10px;'> login failed! incorrect username or password";
        } ?>
<div class="form-area">
    <div class="contact-title">
        <h1>Login</h1>

    </div>

    <div class="contact-form">
        <form id="contact-form" method="post" action="login_form_handler.php">
            <input name="username" type="text" class="form-control"
                   placeholder="User Name / Email" required>
            <br>

            <input name="password" type="password" class="form-control"
                   placeholder="Password" required>
            <br>
            <input type="submit" class="submit" name="submit" value="Login">
        </form>
        <?php if(isset($_GET['logout'])){
            echo "<p style='background-color: #2b542c;color: white; padding: 10px;'> You have successfully Logout";
        } ?>
    </div>
</div>
</body>
</html>
=======
<?php

$conn       = mysqli_connect('localhost', 'root', 'root', 'ems_db');
$username   = $_POST['username'];
$password   = $_POST['password']; 
$query= "SELECT * FROM users where username='$username'";

$resultSet  = mysqli_query($conn,$query);

if(mysqli_num_rows($resultSet) > 0){
        $row    = mysqli_fetch_assoc($resultSet);
        if($row['password'] == sha1($password)){
            echo "Good, Logged In!";
        }else{
            echo "Oh No, password incorrect!";
        }
    }else{
        echo "Please enter correct username!";
    }
>>>>>>> 6308a536c40f1b0571f32e74beb2fb6c0a2b0248
