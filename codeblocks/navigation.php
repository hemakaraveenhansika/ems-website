<?php
    $parts = Explode('/', $_SERVER["PHP_SELF"]);
    $name=$parts[count($parts) - 1];
    $page_name = Explode ('.', $name);

    switch ($page_name[0]) {
        case "upload_doc" :
            $page_name[0]="document";
            break;
        case "view_doc":
            $page_name[0]="document";
            break;     
    }
?>

<div class="container">
    
    <div class="navbar-header navbar-header-custom">
        <nav>
            <ul>
                <li><a id="Personal" href="Personal.php">Personal</a></li>
                <li><a id="Employee" href="Employee.php">Employement</a></li>
                <li><a id="Contact" href="Contact.php">Contact</a></li>
                <li><a id="leave" href="leave.php">Leave</a></li>
                <li><a id="document" href="document.php">Document</a></li>
            </ul>
        </nav>
    </div>                
</div>

<script>
var element = document.getElementById("<?php echo $page_name[0] ?>");
element.classList.add("current-link-nav");
</script>