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
            <form id="fupForm" enctype="multipart/form-data">
                <h3 class="title">Upload Document</h3>
                <div class="table-detail">
                    <table>
                        <col width="30">
                        <col width="180">
                        <col width="120">
                        <tr>
                            <td>01.</td>
                            <td>Employee ID</td>
                            <td>: EID0002</td>
                        </tr>
                        <tr>
                            <td>02.</td>
                            <td>Employee Name</td>
                            <td>: M.T. Dasanayaka</td>
                        </tr><tr>
                            <td>03.</td>
                            <td>Destination</td>
                            <td>: HR Manager</td>
                        </tr><tr>
                            <td>04.</td>
                            <td>Department</td>
                            <td>: HR Department</td>
                        </tr><tr>
                            <td>05.</td>
                            <td>Added Date</td>
                            <td>: 2019/09/04</td>
                        </tr><tr>
                            <td>06.</td>
                            <td>Input Document</td>
                            <td>
                                <div class="form-group">
                                    <input type="file" id="file" name="file" required />
                                </div>
                            </td>
                        </tr>
                    </table> 
                </div>

            <div class="btn">
                <div class="add">
                    <button class="btn btn-lg btn-primary btn-circle" type="submit" name="submit" value="SUBMIT" ><i class="fa fa-plus"></i></button>
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
            </form>
        </div>
        
        <?php //require_once('codeblocks/footer.php'); ?>

	</div>
<body>
</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(e){
        // Submit form data via Ajax
        $("#fupForm").on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'includes/submit.php',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function(){
                    $('.submitBtn').attr("disabled","disabled");
                    $('#fupForm').css("opacity",".5");
                },
                success: function(response){ //console.log(response);
                    $('.statusMsg').html('');
                    if(response.status == 1){
                        $('#fupForm')[0].reset();
                        $('.statusMsg').html('<p class="alert alert-success">'+response.message+'</p>');
                    }else{
                        $('.statusMsg').html('<p class="alert alert-danger">'+response.message+'</p>');
                    }
                    $('#fupForm').css("opacity","");
                    $(".submitBtn").removeAttr("disabled");
                }
            });
        });
    });

    // File type validation
    $("#file").change(function() {
        var file = this.files[0];
        var fileType = file.type;
        var match = ['application/pdf', 'application/msword', 'application/vnd.ms-office', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.oasis.opendocument.presentation', 'application/vnd.oasis.opendocument.spreadsheet','application/vnd.oasis.opendocument.text','application/vnd.ms-powerpoint','application/vnd.openxmlformats-officedocument.presentationml.presentation','text/plain','application/vnd.ms-excel','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
        if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) || (fileType == match[3]) || (fileType == match[4]) || (fileType == match[5])|| (fileType == match[6]) ||(fileType == match[7]) ||(fileType == match[8]) ||(fileType == match[9]) ||(fileType == match[10]) ||(fileType == match[11]) )){
            alert('Sorry, only PDF, DOC, Microsoft Word (OpenXML), OpenDocument presentation document, OpenDocument spreadsheet document, OpenDocument text document, Microsoft PowerPoint, Microsoft PowerPoint(OpenXML), Text files, Microsoft Excel, Microsoft Excel(OpenXML) are allowed to upload.');
            $("#file").val('');
            return false;
        }
    });
</script>