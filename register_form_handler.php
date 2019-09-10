<?php

$db_user='root';
$db_pass='root';
$db_name='ems_db';

$db=new PDO('mysql:host=localhost; dbname='.$db_name.';charset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST)){
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $password=sha1($_POST['password']);
        $confirmpassword=$_POST['confirmpassword'];
        $username=$firstname.$lastname;
        
        $sql="INSERT INTO users (firstname, lastname, username, email, password) VALUES(?,?,?,?,?)";
        $stmtinsert=$db->prepare($sql);
        $result=$stmtinsert->execute([$firstname,$lastname,$username,$email,$password]);
        echo 'registered';
    }
?>
