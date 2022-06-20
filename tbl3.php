<?php
    include("connection.php");

    $Pr3=$_POST["Iprice3_0"];
    $Ch3=$_POST["Icharacteristics3_0"];
    $Id3=$_POST["IDinvisible3_0"];
    $pr3=$_POST["Iprice3"];
    $ch3=$_POST["Icharacteristics3"];
    if($_POST['update'])
    {
        $SQL = "UPDATE {$tbl3} SET characteristic='$Ch3', price=$Pr3 WHERE id=$Id3;";
    	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    	$mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
     }

    if($_POST['delete'])
    {
        $SQL = "DELETE FROM {$tbl3} WHERE id=$Id3;";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    	$mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
     }

    if($_POST['add3'])
    {
        $SQL = "INSERT INTO {$tbl3}(characteristic, price) VALUES('$ch3', $pr3);";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
    }
    
     header("Location: http://hostelry.zzz.com.ua/");
     exit();
?>		