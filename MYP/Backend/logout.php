<?php
session_start();
print_r($_SESSION);
session_destroy();
header('Location: C:\xamppretry\htdocs\MYP\MYP_main.php');
?>