<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>EMS - Upload Document</title>
        <link rel="stylesheet" type="text/css" href="CSS/main.css">
        <link rel="stylesheet" type="text/css" href="CSS/upload_doc.css">
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

        <div class="detail">
            <h3>Upload Document</h3>
            <div class="table-detail">
                <table>
                    <col width="30">
                    <col width="180">
                    <col width="120">
                    <tr>
                        <td>01.</td>
                        <td>Employee ID</td>
                        <td>*********</td>
                    </tr>
                    <tr>
                        <td>02.</td>
                        <td>Employee Name</td>
                        <td>*********</td>
                    </tr><tr>
                        <td>03.</td>
                        <td>Destination</td>
                        <td>*********</td>
                    </tr><tr>
                        <td>04.</td>
                        <td>Department</td>
                        <td>*********</td>
                    </tr><tr>
                        <td>05.</td>
                        <td>Added Date</td>
                        <td>*********</td>
                    </tr><tr>
                        <td>06.</td>
                        <td>Type of Document</td>
                        <td>*********</td>
                    </tr>
                </table> 
            </div>

            <div class="btn">
                <div class="add">
                    <input type="file" id="file" style="display:none;" />
                    <button class="btn btn-lg btn-primary btn-circle" id="button" name="button" value="Upload" onclick="thisFileUpload();"><i class="fa fa-plus"></i></button>
                </div>
                <br>
                <table class="btn-table">
                    <col width="70">
                    <col width="70">
                    <col width="70">
                    <tr>
                        <td><button class="btn btn-lg btn-primary btn-circle"><i class="fa fa-arrow-left"></i></button></td>
                        <td><button class="btn btn-lg btn-primary btn-circle"><i class="fa fa-times"></i></button></td>
                        <td><button class="btn btn-lg btn-primary btn-circle"><i class="fa fa-arrow-right"></i></button></td>
                    </tr>
                </table>
            </div>


        </div>
        
        <?php require_once('codeblocks/footer.php'); ?>

	</div>
<body>
</body>
</html>

<script>
        function thisFileUpload() {
            document.getElementById("file").click();
        };
</script>