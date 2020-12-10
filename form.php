<?php


require("pdo-connect.php");

if(isset($_POST['submit'])) {
  $firstname = $_POST['firstname'];
  $email = $_POST['email'];
  $request = $_POST['request'];
  $message = $_POST['message'];


$values = "INSERT INTO form_stock (`nom`, `email`, `obj_demande`, `msg_demande`) VALUES ('$firstname', '$email', '$request ', '$message')";
$dbc->exec($values) or die(print_r($db->errorInfo(), true));

}

 ?>
