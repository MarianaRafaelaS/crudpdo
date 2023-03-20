<?php
try {
    $conect = new PDO("mysql:dbname=aula_b4;host=localhost;port=3308","root","");
    $conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }