<?php
session_start();
$_SESSION['permissao'] = null;
header("Location: index.php");
?>