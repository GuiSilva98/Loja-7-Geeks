<?php
SESSION_START();
if(isset($_SESSION['txtadmin'])){
    session_destroy();
    header("Location:index.php");
}
?>