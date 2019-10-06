<?php session_start(); ?>
<?php if(!isset($_SESSION['a_id'])){
    header('Location: login.php');
} ?>
<?php
$db=require_once('dbConfig.php');
$output = '';
$adminID=$_SESSION['a_id'];

$admin_sql="SELECT * FROM admin WHERE a_id=$adminID";
$admin_result=mysqli_query($db,$admin_sql);
$admin_row =mysqli_fetch_array($admin_result);
if ($admin_row["role"]=="full_access"){
    $sql = "SELECT * FROM leave_table WHERE status=3 AND CONCAT(employee_ID,employee_name) LIKE '%".$_POST["search"]."%' ORDER BY date_of_request DESC";
}else{
    $sql = "SELECT * FROM leave_table WHERE status=3 AND assesd_by=$adminID AND CONCAT(employee_ID,employee_name) LIKE '%".$_POST["search"]."%' ORDER BY date_of_request DESC";
}

$statusList=array("Not Applied","Pending","Canceled","Approved","Declined");

$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result) > 0){
    $output .= '<h4 align ="center" style="font-size:32px; font-weight: bold;">Search Result For Approved Leave</h4>';
    $output .= '<br><br>';
    $output .= '<div class= "table-responsive">
                <table class="table table bordered">
                <tr>
                    <th>Employee Name</th>
                    <th>Leave Type</th>
                    <th>From Date</th>
                    <th>To Date Type</th>
                    <th>No of Days</th>
                    <th>Status</th>
                </tr>';
    while($row =mysqli_fetch_array($result))
    {
        $output .= '
            <tr class="clickableRaw">
            <td>'.$row['employee_name'].'</td><td>'.$row['leave_type'].'</td><td>'.$row['leave_date_from'].'</td><td>'.$row['leave_date_to'].'</td><td>'.$row['no_of_days'].'</td><td>'.$statusList[$row['status']].'</td>
                <td>
                <a href="adminviewLeaveForm.php?no='.$row['leave_num'].'"><span class="label label-warning">View</span></a>
                &nbsp;
                <a href="leave_manage.php?no='.$row['leave_num'].'=4=0" onclick="return confirm(/       Are You Sure You Want To decline ?       /)"><span class="label label-danger">Decline</span></a></td>
            </tr>
            
        ';
    }
    echo $output;
}else
{
    $output='<br><br><br>';
    $output.='Data Not Found';
    echo $output;
}

?>