<?php session_start(); ?>
<?php if(!isset($_SESSION['a_id'])){
    header('Location: login.php');
} ?>
<?php
require_once('dbConfig.php');
$output = '';
$sql = "SELECT * FROM employee WHERE CONCAT(`employee_ID`, `Full_Name`) LIKE '%".$_POST["search"]."%'";
global $db;
$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result) > 0){
    $output .= '<h4 align ="center" style="font-size:32px; font-weight: bold;">Search Result - Document Manage</h4>'.'<br>';
    $output .= '<br>';
    $output .= '<div class= "table-responsive">
                <table class="table table bordered">
                <tr>
                    <th>Employee ID</th>
                    <th>Full Name</th>
                    <th>Designation</th>
                    <th>Employee Type</th>
                    <th>Department</th>
                    <th>Email</th>
                </tr>';
    while($row =mysqli_fetch_array($result))
    {
        $output .= '
        <tr class="clickableRaw">
        <td>'.$row['employee_ID'].'</td><td>'.$row['Full_Name'].'</td><td>'.$row['Designation'].'</td><td>'.$row['Employee_type'].'</td><td>'.$row['Department'].'</td><td>'.$row['E_mail'].'</td>
        <td>
        <a href="admin_upload_doc.php?no='.$row['employee_ID'].'"><span class="label label-info">Add</span></a>
        &nbsp;
        <a href="admin_view_doc.php?no='.$row['employee_ID'].'" ><span class="label label-warning">View</span></a>

    </tr>
        ';
    }
    echo $output;
}else
{
    $output='Data Not Found';
    echo $output;
}

?>