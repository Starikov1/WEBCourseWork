<?php
  include("connection.php");

  $CR1="CREATE TABLE IF NOT EXISTS {$tbl1}(id INTEGER PRIMARY KEY AUTO_INCREMENT, characteristic VARCHAR(30) UNIQUE, price FLOAT(10))";
  $CR2="CREATE TABLE IF NOT EXISTS {$tbl2}(id INTEGER PRIMARY KEY AUTO_INCREMENT, characteristic VARCHAR(30) UNIQUE, price FLOAT(10))";
  $CR3="CREATE TABLE IF NOT EXISTS {$tbl3}(id INTEGER PRIMARY KEY AUTO_INCREMENT, characteristic VARCHAR(30) UNIQUE, price FLOAT(10))";
  $CR4="CREATE TABLE IF NOT EXISTS {$tbl4}(id INTEGER PRIMARY KEY AUTO_INCREMENT, pib VARCHAR(30) UNIQUE, phone VARCHAR(30))";
  $CR5="CREATE TABLE IF NOT EXISTS {$tbl5}(id INTEGER PRIMARY KEY AUTO_INCREMENT, id_storeys INTEGER, id_places INTEGER, id_type INTEGER)";
  $CR6="CREATE TABLE IF NOT EXISTS {$tbl6}(id INTEGER PRIMARY KEY AUTO_INCREMENT, id_client INTEGER, id_room INTEGER, price FLOAT(10), start_time DATETIME, finish_time DATETIME);";

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  $mysqli->query($CR1);

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  $mysqli->query($CR2);

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  $mysqli->query($CR3);

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  $mysqli->query($CR4);

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  $mysqli->query($CR5);

  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  $mysqli = new mysqli($servername, $username, $password, $dbname);
  $mysqli->query($CR6);
?>				