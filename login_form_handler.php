<?php
session_start();
$db=require_once("administrator/dbConfig.php");
if(isset($_POST['submit'])){
$username_form = $_POST['username'];
$password_form = sha1($_POST['password']);
$query1 = "SELECT * FROM employee where E_username='$username_form' AND e_password='$password_form'";

$query2 = "SELECT * FROM employee where E_mail='$username_form' AND e_password='$password_form'";
$query3 = "SELECT * FROM admin where a_username='$username_form' AND a_password='$password_form'";

$query4 = "SELECT * FROM admin where a_email='$username_form' AND a_password='$password_form'";

$resultSet1 = mysqli_query($db, $query1);
$resultSet2 = mysqli_query($db, $query2);
$resultSet3 = mysqli_query($db, $query3);
$resultSet4 = mysqli_query($db, $query4);

$popup = 1;
$message = "Successfully Logged in !";
$count=false;
if (mysqli_num_rows($resultSet1) > 0 || mysqli_num_rows($resultSet2) > 0) {
    if (mysqli_num_rows($resultSet1) > 0) {
        $resultAll = $resultSet1;
    } else {
        $resultAll = $resultSet2;
    }
    $result = mysqli_fetch_assoc($resultAll);
    $_SESSION["e_id"] = $result["employee_ID"];
    

    
    $_SESSION["designation"] = $result["Designation"];
    $_SESSION["mobile"] = $result["Mobile"];
    $_SESSION["lanline"] = $result["Phone"];
    $_SESSION["hireDate"] = $result["Date_Of_Joinning"];
    
    $_SESSION["emp_type"] = $result["Employee_type"];
    $_SESSION["emp_department"] = $result["Department"];
    if($result["image"]!=null){
        $_SESSION["image"] = $result["image"];
    }else{
        $_SESSION["image"] = null;
    }
    


    echo "<script type='text/javascript'>
                        window.location.href='Personal.php';</script>";

} elseif (mysqli_num_rows($resultSet3) > 0 || mysqli_num_rows($resultSet4) > 0) {
    if (mysqli_num_rows($resultSet3) > 0) {
        $resultAll = $resultSet3;
    } else {
        $resultAll = $resultSet4;
    }
    $result = mysqli_fetch_assoc($resultAll);
    $_SESSION["a_id"] = $result["a_id"];
    $_SESSION["a_name"]= $result["a_name"];
    $_SESSION["role"]= $result["role"];
    



    echo "<script type='text/javascript'>
                        window.location.href='administrator/admin_home_search.php';</script>";
} else {
    
    $message = "Login failed, incorrect password or username.";
    
    $popup=0;
    echo "<script type='text/javascript'> 
            window.location.href='login.php?login_failed';
            </script>";
//    <span id='incorrect'><div style='margin-top:50px; color:#000; font-weight: bold;'>Login Failed! incorrect username or password.</div></span>
//    echo("<script type='text/javascript'>document.write($message)</script>");
}

}

mysqli_close($db);
?>

