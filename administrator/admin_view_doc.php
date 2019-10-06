<?php session_start(); ?>
<?php if(!isset($_SESSION['a_id'])){
    header('Location: login.php');
} ?>
<?php require_once("includes/admin_home_header.php"); ?>
<?php require_once("includes/admin_navigation.php"); ?>
<?php
    $conn =require_once("dbConfig.php");

    $getID=1;
    $getType='Personal';

    $url=$_SERVER['REQUEST_URI'];
    $str_arr = explode ("=", $url);

    if (sizeof($str_arr)==2){      
        $getID=$str_arr[1];

    }elseif(sizeof($str_arr)==3){
        $getID=$str_arr[1];      
        $getType=$str_arr[2];
    }
    
    $sql = "SELECT * FROM document  WHERE select_type='$getType' AND employee_ID='$getID' ORDER BY doc_id DESC";
    $docs = mysqli_query($conn, $sql);
?>


<head>
<link rel="stylesheet" type="text/css" href="CSS/view_doc.css">
</head>


	<div class="wrapper">

        <div class="view-content">
            <h3 class="title">View Document</h3>    
        
            <div class="no-margin">
                <div class="pagination text-small text-uppercase text-extra-dark-gray">
                    <ul class="no-margin">
                        
                        <?php   
                            echo '<li ><a id="PersonalTag" href="admin_view_doc.php?type='.$getID.'=Personal">Personal</a></li>';    
                            echo '<li ><a id="Offical" href="admin_view_doc.php?type='.$getID.'=Offical">Offical</a></li>';  
                        ?>

                    </ul>
                </div>
            </div>


            
            <?php
                while($row = mysqli_fetch_assoc($docs)){
            ?>
                    <div class="container-file">
                        <div class="AAA">
                            <a href="<?php echo '../uploads/'. $row['file_name'] ;?>"><img src="<?php echo '../img/icon/'.$row['file_type'].'.png' ;?>" width="90" height="100"></a>
                            <br><a class="name" href= "<?php echo '../uploads/'. $row['file_name'];?>" > <?php echo $row['file_name'];?> </a>
                        </div>
                                                       
                    </div>
            <?php
                }
            ?>
            
        </div>
        

	</div>

    <script>
    var type="<?php echo $getType ?>";
    if(type=="Personal"){
        var element=document.getElementById("PersonalTag");
    }else{
        var element = document.getElementById(type);
    }
    element.classList.add("current-link");
</script>