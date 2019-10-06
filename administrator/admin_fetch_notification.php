<?php session_start(); ?>
<?php if(!isset($_SESSION['a_id'])){
	header('Location: login.php');
} ?>
<?php
include('dbConfig.php');
$admin_id=$_SESSION['a_id'];
$admin_role=$_SESSION['role'];
if(isset($_POST['view'])){
	
	if($_POST["view"] != ''){
        $m_id=$_POST["view"];
		$update_query = "UPDATE `msg_info` SET `type`='read' WHERE `id`='$m_id'";
		mysqli_query($db, $update_query);
	}
	
	$query = "SELECT * FROM `msg_info` WHERE `from_ID` IS NOT NULL ORDER BY `date_time` DESC";
//    WHERE `to_ID`='$employee_ID'
	$result = mysqli_query($db, $query);
	$count_query = "SELECT * FROM `msg_info` WHERE `type`='unread' AND `from_ID` IS NOT NULL";
//     AND `to_ID`='$employee_ID'
	$count_result = mysqli_query($db, $count_query);
	$count = mysqli_num_rows($count_result);
	$output = '<a style="float:right; font-weight:100;text-transform: capitalize; font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-size:8px; " href="admin_all_notification.php"></span>see all notification <span class="glyphicon glyphicon-comment">&nbsp</a>';
    
    
    
    
    
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
            $msg_id=$row["id"];
            $page_id="#";
            
            $leave_sql="SELECT * FROM leave_table WHERE `leave_num`='{$row['leave_ID']}'";
        $leave_result = mysqli_query($db,$leave_sql);
        $leave_row=mysqli_fetch_array($leave_result);
        $assesd_person=$leave_row['assesd_by'];
        
        $access=false;
        if($assesd_person==$admin_id or $admin_role=="full_access"){
        $access=true;
        }
        $count_val=0;
            if ($row["status"]==1 and $access){
                $count_val=1;
                $page_id="adminviewLeaveForm.php?no={$row["leave_ID"]}";
            }elseif ($row["status"]==8 and $access){
                $count_val=1;
                $page_id="#";
            }elseif ($row["status"]==2 and $access){
                $count_val=1;
                $page_id="adminviewLeaveForm.php?no={$row["leave_ID"]}";
            }elseif ($row["status"]==5){
                $count_val=1;
                $page_id="personal_details_change_request.php?no={$row["change_ID"]}";
            }elseif ($row["status"]==6){
                $count_val=1;
                $page_id="employee_details_change_request.php?no={$row["change_ID"]}";
            }elseif ($row["status"]==7){
                $count_val=1;
                $page_id="contact_details_change_request.php?no={$row["change_ID"]}";
            }elseif ($row["status"]==55 or $row["status"]==66 or $row["status"]==77 or $row["status"]==56 ){
                $count_val=1;
                $page_id="#";
            }
            
            
			if($row["type"]=='unread' and $count_val==1){
				$output .= '
				<li id='.$msg_id.' class="notify-li">
					<a href="';
                 $output .= $page_id;
				$output .= ' "style="word-wrap:break-word;background-color: rgb(51, 51, 51,0.2); border-radius:5px; white-space: normal;">
               <p class="notification-header" style=" "><b>'.$row["subject"].'</b></p>
						<p class="notification-body" style=" ">'.$row["message"].'</p>
					</a>
				</li>
				';
			}
			elseif($count_val==1){
				$output .= '
				<li id='.$msg_id.' class="notify-li" >
					<a href="';
                    $output .= $page_id;
                    $output .= ' "style="word-wrap:break-word; border-radius:5px; white-space: normal;">
                <p class="notification-header" style=" "><b>'.$row["subject"].'</b></p>
						<p class="notification-body" style=" ">'.$row["message"].'</p>
					</a>
				</li>
				';
				
			}
		}
	}
	else{
		$output .= '
		<li><a href="#" class="text-bold text-italic">No Notifications Found</a></li>';
	}
	
	$data = array(
		'notification' => $output,
		'unseen_notification'  => $count
	);
	
	echo json_encode($data);
}
?>
