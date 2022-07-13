<!-- Admin Logout -->
<?php
session_start();
session_destroy();
header('location:login.html');
?>