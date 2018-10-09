<?php
session_start();

$_SESSION['id']=array();
$_SESSION['contra']=array();

session_destroy();

header('Location: .');
?>