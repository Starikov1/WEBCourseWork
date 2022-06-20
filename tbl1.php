<?php
    include("connection.php");

    $Pr1=$_POST["Iprice1_0"];
    $Ch1=$_POST["Icharacteristics1_0"];
    $Id1=$_POST["IDinvisible1_0"];
    $pr1=$_POST["Iprice1"];
    $ch1=$_POST["Icharacteristics1"];
    if($_POST['update'])
    {
        $SQL = "UPDATE {$tbl1} SET characteristic='$Ch1', price=$Pr1 WHERE id=$Id1;";
    	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    	$mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
     }

    if($_POST['delete'])
    {
        $SQL = "DELETE FROM {$tbl1} WHERE id=$Id1;";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    	$mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
     }

    if($_POST['add1'])
    {
        $SQL = "INSERT INTO {$tbl1}(characteristic, price) VALUES('$ch1', $pr1);";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
    }
    
     header("Location: http://hostelry.zzz.com.ua/");
     exit();
?>			