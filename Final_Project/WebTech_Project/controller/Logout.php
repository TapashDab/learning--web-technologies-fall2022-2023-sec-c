<?php
session_start();
session_unset();
session_destroy();
setcookie('status', 'true', time() - 1, '/');
header('location: login.php');
?>