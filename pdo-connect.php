<?php

/* Connexion à la base de donnée MySQL en créant une fonction */
  $dbd = 'mysql:dbname=test;host=127.0.0.1';
  $dbuser = 'root';
  $dbpwd = 'root';

  try {
    $dbc = new PDO($dbd, $dbuser, $dbpwd);
  } catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
  }

 ?>
