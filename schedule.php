<?php
$conn = require_once("administrator/dbConfig.php");
$sql = "SELECT * FROM employee WHERE Num_Employee=1";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$status='<font color="red">' . 'Pending' . '</font>';
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EMS - Schedule</title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" type="text/css" href="CSS/schedule.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-clockpicker.min.css">
        <link rel="stylesheet" type="text/css" href="css/github.min.css">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap-clockpicker.min.js"></script>
        
    </head>


	<div class="wrapper">
        <?php require_once('codeblocks/head.php'); ?>

        <?php require_once('codeblocks/navigation.php'); ?>
        
        <?php require_once('codeblocks/side.php'); ?>

        <div class="profile">
            <img src="img/profile_img/img1.png" class="w3-circle"  style="width:13%" />
        </div>

        <form action="view_leaveForm.php" method="post">
            <div class="table-detail">

                <h3 class="title">Schedule Leave</h3>

                <table>
                    <col width="30">
                    <col width="180">
                    <col width="600">
                    <tr>
                        <td>01.</td>
                        <td>Date of Request</td>
                        <td>: <?php echo date("Y-m-d"); ?></td>
                    </tr>
                    <tr>
                        <td>02.</td>
                        <td>Employee ID</td>
                        <td >: <span id="eid" name="eid"><?php echo $row['Num_Employee'] ?></span> </td>
                    </tr>
                    <tr>
                        <td>03.</td>
                        <td>Name</td>
                        <td id="name">: <?php echo $row['Full_Name'] ?></td>
                    </tr>
                    <tr>
                        <td>04.</td>
                        <td>Department</td>
                        <td id="department">: <?php echo $row['Department'] ?></td>
                    </tr>
                    <tr>
                        <td>05.</td>
                        <td >Leave Type</td>
                    </tr>
                </table>
                    
                <div class="select">
                    <input class="opacity" type="radio" name="radio1" id="inlineRadio1" value="Casual Duty">
                    <label class="form-check-label" for="inlineRadio1">Casual Duty</label>

                    <input class="opacity" type="radio" name="radio1" id="inlineRadio2" value="Annual Short">
                    <label class="form-check-label" for="inlineRadio2">Annual Short</label>

                    <input class="opacity" type="radio" name="radio1" id="inlineRadio3" value="Study Leave">
                    <label class="form-check-label" for="inlineRadio3">Study Leave</label>

                    <input class="opacity" type="radio" name="radio1" id="inlineRadio4" value="Special Authorized">
                    <label class="form-check-label" for="inlineRadio4">Special Authorized</label>

                    <input class="opacity" type="radio" name="radio1" id="inlineRadio5" value="Health Nopay">
                    <label class="form-check-label" for="inlineRadio5">Health Nopay</label>

                </div>
                        
                <table>
                    <col width="30">
                    <col width="180">
                    <col width="550">
                    <tr>
                        <td>06.</td>
                        <td>Leave date</td>
                        <td>: From  <input class="date" id="date-from" type="date" name="date-from"> To <input class="date" id="date-to" type="date" name="date-to"> </td>
                    </tr>
                    <tr>
                        <td>07.</td>
                        <td>No of Date</td>
                        <td>: <input type="text" id="date-no" name="date-no"></td>
                    </tr>
                    <tr>
                        <td>08.</td>
                        <td>Time</td>
                        <td class="clock">: From &nbsp;   <div class="input-group clockpicker"  data-autoclose="true">
                                    <input type="text" id="time-from" name="time-from" class="form-control" value="12:00">
                                </div>
                                &nbsp; To &nbsp; 
                                <div class="input-group clockpicker"  data-autoclose="true">
                                    <input type="text" id="time-to" name="time-to" class="form-control" value="12:00">
                                </div>
                                &nbsp;&nbsp;&nbsp;(Only for Short Leaves)
                        </td>

                    </tr>
                    <tr>
                        <td>09.</td>
                        <td>Leave Reason</td>
                        <td>: <input id="reason" type="text" name="reason"></td>
                    </tr>
                    
                </table>

                <table class="last-raw">
                <tr>
                        <td width="100">Assed by</td>
                        <td width="500">:&nbsp;
                            <select name="assign" id="assign" >
                                <option value="e001">W.M. D. Silva </option>
                                <option value="e002">P.O. D. Nayaka </option>
                                <option value="e003">A.M. K. Pala  </option>
                            </select>
                        </td>
                        <td width="50">Status</td>
                        <td id="status" width="200">: <?php echo $status; ?> </td>
                    </tr>
                </table>

                <div class="btn">
                    <button class="btn btn-lg btn-primary btn-circle" type=button  onClick="window.history.back()"><i class="fa fa-times"></i></button> &nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-lg btn-primary btn-circle"><i class="fa fa-arrow-right"></i></button>
                </div>
                           

            </div>
        </form>

        <?php require_once('codeblocks/footer.php'); ?>

	</div>

</html>                
 

<script type="text/javascript">
    $('.clockpicker').clockpicker()
        .find('input').change(function(){
            console.log(this.value);
        });
    var input = $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    // Manually toggle to the minutes view
    $('#check-minutes').click(function(e){
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
                .clockpicker('toggleView', 'minutes');
    });

</script>