<?php
require "database.php";
if (isset($_POST['Title']) or isset($_POST['Full_Name']) or isset($_POST['Date_Of_Birth']) or isset($_POST['Gender']) or isset($_POST['NIC']) or isset($_POST['Marital_Status']) or isset($_POST['Nationality']) or isset($_POST['Religion'])){
    $arrayPersonal=[];
    $keysPersonal="";
    $valuesPersonal="";
    $array_personal = ["Title", "Full_Name", "Date_Of_Birth", "Gender", "NIC", "Marital_Status", "Nationality", "Religion"];
    for ($i=0;$i<8;$i++){
        if($_POST[$array_personal[$i]]!=$row[$array_personal[$i]]){
            $arrayPersonal+=[$array_personal[$i] =>$_POST[$array_personal[$i]]];
        }
    }
    foreach ($arrayPersonal as $key => $value) {
        $keysPersonal=$keysPersonal. ",".$key;
        $valuesPersonal=$valuesPersonal.",'".$value."'";
    }
//    echo $keys,$values;
    if ($keysPersonal!=""){
        $sqlPeronal="INSERT INTO editemployee(".substr($keysPersonal,1).")VALUES(".substr($valuesPersonal,1).")";
        if ( $conn->query($sqlPeronal )) {
            echo "New record created successfully";
//            echo '<script type="text/javascript">Open("Personal");</script>';
        } else {
            echo "Error: " . $sqlPeronal . "<br>" . mysqli_error($conn);
        }
    }
}
if (isset($_POST['Date_Of_Joinning']) or isset($_POST['Designation']) or isset($_POST['Employee_type']) or isset($_POST['Department'])){
    $arrayEmployee=[];
    $keysEmployee="";
    $valuesEmployee="";
    $array_employee = ["Date_Of_Joinning", "Designation", "Employee_type", "Department"];
    for ($i=0;$i<4;$i++){
        if($_POST[$array_employee[$i]]!=$row[$array_employee[$i]]){
            $arrayEmployee+=[$array_employee[$i] =>$_POST[$array_employee[$i]]];
        }
    }
    foreach ($arrayEmployee as $key => $value) {
        $keysEmployee=$keysEmployee. ",".$key;
        $valuesEmployee=$valuesEmployee.",'".$value."'";
    }
//    echo $keys,$values;
    if ($keysEmployee!=""){
        $sqlEmployee="INSERT INTO editemployee(".substr($keysEmployee,1).")VALUES(".substr($valuesEmployee,1).")";
        if ( $conn->query($sqlEmployee )) {
            echo "New record created successfully";
//            echo '<script type="text/javascript">Open("Personal");</script>';
        } else {
            echo "Error: " . $sqlEmployee . "<br>" . mysqli_error($conn);
        }
    }
}
if (isset($_POST['Address']) or isset($_POST['Country']) or isset($_POST['Phone']) or isset($_POST['Mobile']) or isset($_POST['E_mail'])){
    $arrayContact=[];
    $keysContact="";
    $valuesContact="";
    $array_contact = ["Address", "Country", "Phone", "Mobile", "E_mail"];
    for ($i=0;$i<5;$i++){
        if($_POST[$array_contact[$i]]!=$row[$array_contact[$i]]){
            $arrayContact+=[$array_contact[$i] =>$_POST[$array_contact[$i]]];
        }
    }
    foreach ($arrayContact as $key => $value) {
        $keysContact=$keysContact. ",".$key;
        $valuesContact=$valuesContact.",'".$value."'";
    }
    if ($keysContact!=""){
        $sqlContact="INSERT INTO editemployee(".substr($keysContact,1).")VALUES(".substr($valuesContact,1).")";
        if ( $conn->query($sqlContact)) {
            echo "New record created successfully";
//            echo '<script type="text/javascript">Open("Personal");</script>';
        } else {
            echo "Error: " . $sqlContact . "<br>" . mysqli_error($conn);
        }
    }
}
?>