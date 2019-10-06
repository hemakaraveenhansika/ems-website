<?php session_start();
$e_id_ses=$_SESSION["e_id"];
?>
<?php
    $conn =require_once("administrator/dbConfig.php");
    $getType='Personal';

    $url=$_SERVER['REQUEST_URI'];
    $str_arr = explode ("=", $url);
    if (sizeof($str_arr)>1){      
        $getType=$str_arr[1];
    }
  
    $sql = "SELECT * FROM document  WHERE select_type='$getType' AND employee_ID='$e_id_ses'  ORDER BY doc_id DESC";
    $docs = mysqli_query($conn, $sql);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EMS - View Document</title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" type="text/css" href="CSS/view_doc.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">       
    <?php require_once('codeblocks/notification.php'); ?>


	<div class="wrapper">
        <?php require_once('codeblocks/head.php'); ?>
        <?php require_once ('codeblocks/image_insert.php'); ?>
        <?php require_once('codeblocks/navigation.php'); ?>
        
        <?php require_once('codeblocks/side.php'); ?>

<!--        <div class="profile">-->
<!--            <img src="img/profile_img/img1.png" class="w3-circle"  style="width:13%" />-->
<!--        </div>  -->
        
        <div class="view-content">
            <h3 class="title">View Document</h3>    
        
            <div class="no-margin" >
                <div class="pagination text-small text-uppercase text-extra-dark-gray">
                    <ul class="no-margin">

                    
                        <?php   
                            echo '<li ><a id="PersonalTag" href="view_doc.php?type=Personal">Personal</a></li>';    
                            echo '<li ><a id="Offical" href="view_doc.php?type=Offical">Offical</a></li>';  
                        ?>

                    </ul>
                </div>
            </div>


            
            <?php
                while($row = mysqli_fetch_assoc($docs)){
            ?>
                    <div class="container-file">
                        <div class="AAA">
                            <a href="<?php echo 'uploads/'. $row['file_name'] ;?>"><img src="<?php echo 'img/icon/'.$row['file_type'].'.png' ;?>" width="90" height="100"></a>
                            <br><a class="name" href= "<?php echo 'uploads/'. $row['file_name'];?>" > <?php echo $row['file_name'];?> </a>
                        </div>
                                                       
                    </div>
            <?php
                }
            ?>
            
        </div>

	</div>
<body>
</body>
</html>

<script>
    var type="<?php echo $getType ?>";
    if(type=="Personal"){
        var element=document.getElementById("PersonalTag");
    }else{
        var element = document.getElementById(type);
    }
    element.classList.add("current-link");
</script>