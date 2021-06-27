<?php
session_start();
if(!isset($_SESSION['unique_id'])){ //_seesion remember the user information
    header("location: login.php");
}
else{header("location: users.php");}
    



?>