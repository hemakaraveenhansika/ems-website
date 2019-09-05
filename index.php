<?php
require "JsFunction.php";
?>
<!DOCTYPE>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Employee</title>
</head>
<body>
<button class="tabLink" id="Default" onclick="Open('Personal')">Personal</button>
<button class="tabLink"  onclick="Open('Employee')">Employee</button>
<button class="tabLink" onclick="Open('Contact')">Contact</button>
<div  id="Personal" class="tabcontain">
<table>
    <tr>
        <td>1.Title</td>
        <td id="Title"></td>
    </tr>
    <tr>
        <td>2.Full Name</td>
        <td id="Full_Name"></td>
    </tr>
    <tr>
        <td>3.Date Of Birth</td>
        <td id="Date_Of_Birth"></td>
    </tr>
    <tr>
        <td>4.Gender</td>
        <td id="Gender"></td>
    </tr>
    <tr>
        <td>5.NIC</td>
        <td id="NIC"></td>
    </tr>
    <tr>
        <td>6.Marital status</td>
        <td id="Marital_Status"></td>
    </tr>
    <tr>
        <td>7.Nationality</td>
        <td id="Nationality"></td>
    </tr>
    <tr>
        <td>8.Religion</td>
        <td id="Religion"></td>
    </tr>
</table>
    <button onclick="Edit_Personal()">Request Changes</button>
</div>
<div  id="Employee" class="tabcontain">
    <table>
        <tr>
            <td>1.Date Of Joinning</td>
            <td id="Date_Of_Joinning"></td>
        </tr>
        <tr>
            <td>2.Designation</td>
            <td id="Designation"></td>
        </tr>
        <tr>
            <td>3.Employee Type</td>
            <td id="Employee_type"></td>
        </tr>
        <tr>
            <td>4.Department</td>
            <td id="Department"></td>
        </tr>
    </table>
    <button onclick="Edit_Employee()">Request Changes</button>
</div>
<div  id="Contact" class="tabcontain">
    <table>
        <tr>
            <td>1.Address</td>
            <td id="Address"></td>
        </tr>
        <tr>
            <td>2.Country</td>
            <td id="Country"></td>
        </tr>
        <tr>
            <td>3.Phone</td>
            <td id="Phone"></td>
        </tr>
        <tr>
            <td>4.Mobile</td>
            <td id="Mobile"></td>
        </tr>
        <tr>
            <td>5.E-mail</td>
            <td id="E_mail"></td>
        </tr>
    </table>
    <button onclick="Edit_Contact()">Request Changes</button>
</div>
<div id="Personal_edit" class="edit_tabs">
            <table>
                <tr>
                    <td>Title :  </td>
                    <td><input id="Title_edit" type="text" name="Title"></td>
                </tr>
                <tr>
                    <td>Full Name: </td>
                    <td><input id="Full_Name_edit" type="text" name="Full_Name"></td>
                </tr>
                <tr>
                    <td>Date Of Birth: </td>
                    <td><input id="Date_Of_Birth_edit" type="date" name="Date_Of_Birth"></td>
                </tr>
                <tr>
                    <td>Gender: </td>
                    <td><select id="Gender_edit" name="Gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select></td>
                </tr>
                <tr>
                    <td>NIC: </td>
                    <td><input id="NIC_edit" type="text" name="NIC"></td>
                </tr>
                <tr>
                    <td>Marital status: </td>
                    <td><select id="Marital_Status_edit" name="Marital_Status">
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Nationality: </td>
                    <td><input id="Nationality_edit" type="text" name="Nationality"></td>
                </tr>
                <tr>
                    <td>Religion: </td>
                    <td><input id="Religion_edit" type="text" name="Religion"></td>
                </tr>
                <tr>
                    <td><input type="submit" id="personal_edit_button" value="Request to Admin for Changing" /><td>
                </tr>
                <tr><p id="return_personal"></p></tr>
            </table>
</div>
<div id="Employee_edit" class="edit_tabs">
        <table>
            <tr>
                <td>Date Of Joinning :  </td>
                <td><input id="Date_Of_Joinning_edit" type="date"></td>
            </tr>
            <tr>
                <td>Designation: </td>
                <td><input id="Designation_edit" type="text"></td>
            </tr>
            <tr>
                <td>Employee type: </td>
                <td><select id="Employee_type_edit">
                        <option value="Part Time">Part Time</option>
                        <option value="Full Time">Full Time</option>
                    </select></td>
            </tr>
            <tr>
                <td>Department: </td>
                <td><input id="Department_edit" type="text"></td>
            </tr>
            <tr>
                <td><input type="submit" id="employee_edit_button" value="Request to Admin for Changing" "><td>
            </tr>
            <tr><p id="return_employee"></p></tr>
        </table>
</div>
<div id="Contact_edit" class="edit_tabs">
        <table>
            <tr>
                <td>Address :  </td>
                <td><input id="Address_edit" type="text"></td>
            </tr>
            <tr>
                <td>Country: </td>
                <td><input id="Country_edit" type="text"></td>
            </tr>
            <tr>
                <td>Phone: </td>
                <td><input id="Phone_edit" type="text"></td>
            </tr>
            <tr>
                <td>Mobile: </td>
                <td><input id="Mobile_edit" type="text"></td>
            </tr>
            <tr>
                <td>E-mail: </td>
                <td><input id="E_mail_edit" type="email"></td>
            </tr>
            <tr>
                <td><input type="submit" id="contact_edit_button" value="Request to Admin for Changing" "><td>
            </tr>
            <tr><p id="return_contact"></p></tr>
        </table>
</div>
<script>
    document.getElementById("Default").click();
</script>
</body>
</html>
