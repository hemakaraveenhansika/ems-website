
<?php 
$db=include("administrator/dbConfig.php");
$emp_id=$_SESSION['e_id'];
$name_sql= "SELECT * FROM employee WHERE employee_ID=$emp_id";
$name_result= mysqli_query($db,$name_sql);
$name_row = mysqli_fetch_assoc($name_result);
$pieces=explode(" ",$name_row["Full_Name"]);
$name='';
for ($x =0; $x<count($pieces)-1; $x++){
    $name .= $pieces[$x][0].'.';
}
?>
<header>
    
    <div class="introduction">

        <div class="name"><?php echo $name.end($pieces); ?></div>
        <div class="position"><?php echo $name_row['Designation']; ?></div>

    </div>
</header>