
<?php 
$emp_id=$_SESSION['e_id'];
$db=include("administrator/dbConfig.php");
$prof_sql= "SELECT * FROM employee WHERE employee_ID=$emp_id";
$prof_result= mysqli_query($db,$prof_sql);
$prof_row = mysqli_fetch_assoc($prof_result);
?>

<aside>
    <div class="content">
        <br>
        <h5><?php echo $prof_row['Mobile']; ?></h5>
        <h5><?php echo $prof_row['Phone']; ?></h5>
        <br>
        <h5><?php echo $prof_row['E_mail']; ?></h5>
        <br>
        <h5><span style="font-weight: bold; color: #285e8e;">Hired Date :</span></h5>
        <h5><?php echo $prof_row['Date_Of_Joinning']; ?></h5>
        <br>
        <h5><?php echo $prof_row['Employee_type']; ?></h5>
        <h5><?php echo $prof_row['Department']; ?></h5>

    </div>
</aside>