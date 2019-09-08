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