<?php
    include("connection.php");

    $Pr2=$_POST["Iprice2_0"];
    $Ch2=$_POST["Icharacteristics2_0"];
    $Id2=$_POST["IDinvisible2_0"];
    $pr2=$_POST["Iprice2"];
    $ch2=$_POST["Icharacteristics2"];
    if($_POST['update'])
    {
        $SQL = "UPDATE {$tbl2} SET characteristic='$Ch2', price=$Pr2 WHERE id=$Id2;";
    	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    	$mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
     }

    if($_POST['delete'])
    {
        $SQL = "DELETE FROM {$tbl2} WHERE id=$Id2;";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    	$mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
     }

    if($_POST['add2'])
    {
        $SQL = "INSERT INTO {$tbl2}(characteristic, price) VALUES('$ch2', $pr2);";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
    }
    
     header("Location: http://hostelry.zzz.com.ua/");
     exit();
?>		