<?php
    require_once("administrator/dbConfig.php");
    $conn = mysqli_connect("localhost", "root", "", "ems_database");
    $sql = "SELECT file_type FROM document WHERE eid=1";
    $result = mysqli_query($conn, $sql);
    $types_ext = array("");
    while($row = mysqli_fetch_assoc($result)){
        array_push($types_ext,$row['file_type']); 
    }
    $dup_type=array_unique($types_ext);
    $allow_type = array_values($dup_type);
    //$types_ext = array('','pdf', 'doc', 'docx','odp','ods','odt','ppt','pptx','txt','xls','xlsx'); 
    $types = array('','pdf'=>'PDF', 'doc'=>'Microsoft Word', 'docx'=>'Microsoft Word (OpenXML)','odp'=>'Open Document presentation','ods'=>'Open Document spreadsheet','odt'=>'Open Document text','ppt'=>'Microsoft PowerPoint','pptx'=>'Microsoft PowerPoint (OpenXML)','txt'=>'Text','xls'=>'Microsoft Excel','xlsx'=>'Microsoft Excel (OpenXML)');
    $pages=sizeof($allow_type);
    $getType='';
    $current=1;
    $url=$_SERVER['REQUEST_URI'];
    $str_arr = explode ("=", $url);

    if (sizeof($str_arr)>1){      
        $getType=$str_arr[1];
        $current = array_search($getType, $allow_type);
    }
      
    $sql = "SELECT * FROM document  WHERE file_type='$getType' AND eid=1  ORDER BY doc_id DESC";
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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">       
    </head>


	<div class="wrapper">
        <?php require_once('codeblocks/head.php'); ?>

        <?php require_once('codeblocks/navigation.php'); ?>
        
        <?php require_once('codeblocks/side.php'); ?>

        <div class="profile">
            <img src="img/profile_img/img1.png" class="w3-circle"  style="width:13%" />
        </div>  
        
        <div class="view-content">
            <h3 class="title">View Document</h3>    
        
            <div class="no-margin" <?php if($pages == 0){ echo 'hidden';}?>>
                <div class="pagination text-small text-uppercase text-extra-dark-gray">
                    <ul class="no-margin">
                    <li><a  href="<?php if ($current>1){echo 'view_doc.php?type='.$allow_type[($current-1)];}else{echo 'javascript:void(0);'; }?>"><i class="fas fa-long-arrow-alt-left margin-5px-right xs-display-none"></i> Prev</a></li>
                        <?php     
                            if($current==1 || $current==2){
                                for ($x = 1; $x <4; $x++) {
                                    echo '<li ><a id="'.$allow_type[$x].'" href="view_doc.php?type='.$allow_type[$x].'">' . $types[$allow_type[$x]] . '</a></li>';                                   
                                }
                            }elseif ($current==($pages-2) || $current==$pages-1) {
                                for ($x = $pages-3; $x <($pages); $x++) {
                                    echo '<li ><a id="'.$allow_type[$x].'" href="view_doc.php?type='.$allow_type[$x].'">' . $types[$allow_type[$x]] . '</a></li>';                                   
                                }
                            }else{
                                for ($x = ($current-1); $x <($current+2); $x++) {
                                    echo '<li ><a id="'.$allow_type[$x].'" href="view_doc.php?type='.$allow_type[$x].'">' . $types[$allow_type[$x]] . '</a></li>';                                   
                                }
                            }
                        ?>
                    <li><a href="<?php if ($current<$pages-1){echo 'view_doc.php?type='.$allow_type[($current+1)];}else{echo 'javascript:void(0);'; }?>"><i class="fas fa-long-arrow-alt-left margin-5px-right xs-display-none"></i> Next</a></li>
                    </ul>
                </div>
            </div>


            
            <?php
                while($row = mysqli_fetch_assoc($docs)){
            ?>
                    <div class="container-file">
                        <div class="AAA">
                            <a href="<?php echo 'uploads/'. $row['file_name'] ;?>"><img src="<?php echo 'img/icon/'.$getType.'.png' ;?>" width="90" height="100"></a>
                            <br><a class="name" href= "<?php echo 'uploads/'. $row['file_name'];?>" > <?php echo $row['file_name'];?> </a>
                        </div>
                                                       
                    </div>
            <?php
                }
            ?>
            
        </div>
        
        <?php //require_once('codeblocks/footer.php');?>

	</div>
<body>
</body>
</html>

<script>
var element = document.getElementById("<?php echo $getType ?>");
element.classList.add("current-link");
</script>