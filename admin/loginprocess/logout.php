<?php
session_start();

// first method 

session_destroy();

// second method
// unset($_SESSION['id']);
// unset($_SESSION['email']);
// unset($_SESSION['name']);

echo header("Location: ../index.php?msg=login_success");
?>