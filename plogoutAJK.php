<?php
//save as plogout.php
session_start();
session_unset();
session_destroy();
header("Location: loginAJK.php");
?>