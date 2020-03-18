<?php
SESSION_START();
if(isset($_SESSION['txtnome'])){
    session_destroy();
    header("Location:index.php");
}
?>