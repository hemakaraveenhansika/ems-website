<?php

include('connect.php');

if(isset($_POST['view'])){
	
	if($_POST["view"] != ''){
		$update_query = "UPDATE `msg_info` SET `status`='read' WHERE `status`='unread'";
		mysqli_query($con, $update_query);
	}
	
	$query = "SELECT * FROM `msg_info`";
	$result = mysqli_query($con, $query);
	$count_query = "SELECT * FROM `msg_info` WHERE `status`='unread'";
	$count_result = mysqli_query($con, $count_query);
	$count = mysqli_num_rows($count_result);
	$output = '';

	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_array($result)){
			if($row["status"]=='unread'){
				$output .= '
				<li>
					<a href="#">
						<strong>'.$row["Subject"].'</strong><br />
						<small><em><b>'.$row["message"].'</b></em></small>
					</a>
				</li>
				';
			}
			else{
				$output .= '
				<li>
					<a href="#">
						<strong>'.$row["Subject"].'</strong><br />
						<small><em>'.$row["message"].'</em></small>
					</a>
				</li>
				';
				
			}
		}
	}
	else{
		$output .= '
		<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
	}
	
	$data = array(
		'notification' => $output,
		'unseen_notification'  => $count
	);
	
	echo json_encode($data);
}
?>