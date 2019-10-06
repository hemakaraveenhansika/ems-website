<?php session_start(); ?>
<?php if(!isset($_SESSION['a_id'])){
    header('Location: login.php');
} ?>
<?php
$admin_id=$_SESSION['a_id'];
$admin_role=$_SESSION['role'];

$db=require_once('dbConfig.php');
$output = '';
$sql = "SELECT * FROM msg_info WHERE `from_ID` IS NOT NULL ORDER BY `date_time` DESC";

$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result) > 0){
    $output .= '<h4 align ="center" style="font-size:32px; font-weight: bold;">Notifications</h4>'.'<br>';
    $output .= '<br>';
    $output .= '<div class= "table-responsive">
                <table class="table table bordered">
                <tr>
                    <th style="text-align:center;">Subject</th>
                    <th style="text-align:center;">Message</th>
                    <th style="text-align:center;">Date-Time</th>
                    <th style="text-align:center;">status</th>
                </tr>';
    while($row =mysqli_fetch_array($result))
    {
        $btn_echo="";
        $page_id="#";
        $leave_sql="SELECT * FROM leave_table WHERE `leave_num`='{$row['leave_ID']}'";
        $leave_result = mysqli_query($db,$leave_sql);
        $leave_row=mysqli_fetch_array($leave_result);
        $assesd_person=$leave_row['assesd_by'];
        
        $access=false;
        if($assesd_person==$admin_id or $admin_role=="full_access"){
        $access=true;
        }
        $count=0;
        if ($row["status"]==1 and $access){
                $count=1;
                $page_id='adminviewLeaveForm.php?no='.$row["leave_ID"].'';
                $btn_echo.='<a href="'.$page_id.'" ><span class="label label-warning">View</span></a>';
            }elseif ($row["status"]==8 and $access){
                $count=1;
                $page_id="#";
            }elseif ($row["status"]==2 and $access){
                $count=1;
                $page_id='adminviewLeaveForm.php?no='.$row["leave_ID"].'';
                $btn_echo.='<a href="'.$page_id.'" ><span class="label label-warning">View</span></a>';
            }elseif ($row["status"]==5 ){
                $count=1;
                $page_id='personal_details_change_request.php?no='.$row["change_ID"].'';
                $btn_echo.='<a href="'.$page_id.'" ><span class="label label-warning">View</span></a>';
            }elseif ($row["status"]==6){
                $count=1;
                $page_id='employee_details_change_request.php?no='.$row["change_ID"].'';
            $btn_echo.='<a href="'.$page_id.'" ><span class="label label-warning">View</span></a>';
            }elseif ($row["status"]==7){
                $count=1;
                $page_id='contact_details_change_request.php?no='.$row["change_ID"].'';
            $btn_echo.='<a href="'.$page_id.'" ><span class="label label-warning">View</span></a>';
            }elseif ($row["status"]==55 or $row["status"]==66 or $row["status"]==77 or $row["status"]==56 ){
                $count=1;
                $page_id="#";
            }
        
        if($count==1){
        $output .= '
            <tr class="clickableRaw">
                <td style="width:15%; max-width:150px;">'.$row['subject'].'</td><td style=" width:40%; max-width:150px;"><p style="word-wrap:break-word;" >'.$row['message'].'</p></td><td style=" width:15%; max-width:100px;">'.$row['date_time'].'</td>
                <td style="text-align:center; width:15%; max-width:100px;">
                
                '.$btn_echo.'
                

            </tr>
        ';}
    }
    echo $output;
}else
{
    $output='No Notification Found';
    echo $output;
}

?>

