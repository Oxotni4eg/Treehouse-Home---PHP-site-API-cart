<?php

$phone = $_POST['phone'];
$email = $_POST['email'];

if (!preg_match("/^(?:[a-z0-9]+(?:[-_.]?[a-z0-9]+)?@[a-z0-9_.-]+(?:\.?[a-z0-9]+)?\.[a-z]{2,5})$/i", $email) || !preg_match('/^(\+375)-(\d{2})-(\d{3})-(\d{2})-(\d{2})$/', $phone) ) { 
    require_once('error.php');
} else {
    require_once('tnx.php');
} 

?>

