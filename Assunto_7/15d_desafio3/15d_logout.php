<?php
session_start();

// Encerra
session_destroy();

// redireciona
header("Location: 15d_login.php");
exit();
?>