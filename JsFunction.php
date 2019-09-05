<?php
require "database.php";
$code_array = json_encode($row);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
<script>
    var Data_array = <?php echo $code_array; ?>;
    $(document).ready(function () {
    $("#personal_edit_button").click(function() {
        var Title= $("#Title_edit").val();
        var Full_Name= $("#Full_Name_edit").val();
        var Date_Of_Birth= $("#Date_Of_Birth_edit").val();
        var Gender= $("#Gender_edit").val();
        var NIC= $("#NIC_edit").val();
        var Marital_Status= $("#Marital_Status_edit").val();
        var Nationality= $("#Nationality_edit").val();
        var Religion= $("#Religion_edit").val();
        $.post("edit.php",{
            Title:Title,
            Full_Name:Full_Name,
            Date_Of_Birth:Date_Of_Birth,
            Gender: Gender,
            NIC:NIC,
            Marital_Status:Marital_Status,
            Nationality:Nationality,
            Religion:Religion,
        },function (data,status) {
            $("#return_personal").html(data);
        });
    });
    $("#employee_edit_button").click(function() {
            var Date_Of_Joinning= $("#Date_Of_Joinning_edit").val();
            var Designation= $("#Designation_edit").val();
            var Employee_type= $("#Employee_type_edit").val();
            var Department= $("#Department_edit").val();
            $.post("edit.php",{
                Date_Of_Joinning:Date_Of_Joinning,
                Designation:Designation,
                Employee_type:Employee_type,
                Department: Department,
            },function (data,status) {
                $("#return_employee").html(data);
            });
        });
    $("#contact_edit_button").click(function() {
        var Address= $("#Address_edit").val();
        var Country= $("#Country_edit").val();
        var Phone= $("#Phone_edit").val();
        var Mobile= $("#Mobile_edit").val();
        var E_mail= $("#E_mail_edit").val();
        $.post("edit.php",{
            Address:Address,
            Country:Country,
            Phone:Phone,
            Mobile: Mobile,
            E_mail:E_mail,
        },function (data,status) {
           $("#return_contact").html(data);
        });
        });
    });
    function Open(type) {
        tabcontent1 = document.getElementsByClassName("tabcontain");
        tabcontent2 = document.getElementsByClassName("edit_tabs");
        for (i = 0; i < tabcontent1.length; i++) {
            tabcontent1[i].style.display = "none";
            tabcontent2[i].style.display = "none";
        }
        if(type=='Personal') {
            var array_personal = ["Title", "Full_Name", "Date_Of_Birth", "Gender", "NIC", "Marital_Status", "Nationality", "Religion"];
            var personal_detail = [Data_array.Title, Data_array.Full_Name, Data_array.Date_Of_Birth, Data_array.Gender, Data_array.NIC, Data_array.Marital_Status, Data_array.Nationality, Data_array.Religion];
            for (i = 0; i < 8; i++) {
                document.getElementById(array_personal[i]).innerHTML = ":  "+personal_detail[i];
            }
        }else if(type=='Employee') {
            var array_employee = ["Date_Of_Joinning", "Designation", "Employee_type", "Department"];
            var employee_detail = [Data_array.Date_Of_Joinning, Data_array.Designation, Data_array.Employee_type, Data_array.Department];
            for (i = 0; i < 4; i++) {
                document.getElementById(array_employee[i]).innerHTML = ":  "+employee_detail[i];
            }
        }else if (type=='Contact') {
            var array_contact = ["Address", "Country", "Phone", "Mobile", "E_mail"];
            var contact_detail = [Data_array.Address, Data_array.Country, Data_array.Phone, Data_array.Mobile, Data_array.E_mail];
            for (i = 0; i < 5; i++) {
                document.getElementById(array_contact[i]).innerHTML = ":  "+contact_detail[i];
            }
        }
        document.getElementById(type).style.display = "block";
    }
    function Edit_Personal() {
        tabcontent = document.getElementById("Personal");
        document.getElementById("return_personal").innerHTML='';
        tabcontent.style.display = "none";
        document.getElementById('Personal_edit').style.display = "block";
        var array_personal_edit = ["Title_edit", "Full_Name_edit", "Date_Of_Birth_edit", "Gender_edit", "NIC_edit", "Marital_Status_edit", "Nationality_edit", "Religion_edit"];
        var personal_detail = [Data_array.Title, Data_array.Full_Name, Data_array.Date_Of_Birth, Data_array.Gender, Data_array.NIC, Data_array.Marital_Status, Data_array.Nationality, Data_array.Religion];
        for (var i=0;i<8;i++){
            if(i==3){
                if("Male"==personal_detail[i]){var index='0';}else if ("Female"==personal_detail[i]){var index='1'}else{var index='2';}
                document.getElementById(array_personal_edit[i]).selectedIndex=index;
            }else if(i==5){
                if("Married"==personal_detail[i]){var index='0';}else{var index='1';}
                document.getElementById(array_personal_edit[i]).selectedIndex=index;
            }else {
                document.getElementById(array_personal_edit[i]).value= personal_detail[i];
            }
        }
    }
    function Edit_Employee() {
        tabcontent = document.getElementById("Employee");
        document.getElementById("return_employee").innerHTML='';
        tabcontent.style.display = "none";
        document.getElementById('Employee_edit').style.display = "block";
        var array_employee_edit = ["Date_Of_Joinning_edit", "Designation_edit", "Employee_type_edit", "Department_edit"];
        var employee_detail = [Data_array.Date_Of_Joinning, Data_array.Designation, Data_array.Employee_type, Data_array.Department];
        for (var i=0;i<4;i++){
            if(i==2){
                if("Part Time"==employee_detail[i]){var index='0';}else{var index='1';}
                document.getElementById(array_employee_edit[i]).selectedIndex=index;
            }else {
                document.getElementById(array_employee_edit[i]).setAttribute('value', employee_detail[i]);
            }
        }

    }
    function Edit_Contact() {
        tabcontent = document.getElementById("Contact");
        document.getElementById("return_contact").innerHTML='';
        tabcontent.style.display = "none";
        document.getElementById('Contact_edit').style.display = "block";
        var array_contact_edit = ["Address_edit", "Country_edit", "Phone_edit", "Mobile_edit", "E_mail_edit"];
        var contact_detail = [Data_array.Address, Data_array.Country, Data_array.Phone, Data_array.Mobile, Data_array.E_mail];
        for (var i=0;i<5;i++){
            document.getElementById(array_contact_edit[i]).setAttribute('value',contact_detail[i]);
        }
    }
    function change_Personal() {
        console.log(change_value_personal);
        for (var i=0;i<8;i++){
            var array_personal_edit = ["Title_edit", "Full_Name_edit", "Date_Of_Birth_edit", "Gender_edit", "NIC_edit", "Marital_status_edit", "Nationality_edit", "Religion_edit"];
            var personal_detail = [Data_array.Title, Data_array.Full_Name, Data_array.Date_Of_Birth, Data_array.Gender, Data_array.NIC, Data_array.Marital_Status, Data_array.Nationality, Data_array.Religion];
            if(document.getElementById(array_personal_edit[i]).value!=personal_detail[i]){
                change_personal_array.push(array_personal_edit[i].slice(0,array_personal_edit[i].length-5)+":"+document.getElementById(array_personal_edit[i]).value);
                // console.log(array_personal_edit[i].slice(0,array_personal_edit[i].length-5));
            }
        }
        var json_personal=  JSON.stringify(change_personal_array);

        Open('Personal');
    }
</script>
