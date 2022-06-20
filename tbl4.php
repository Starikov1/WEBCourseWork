<?php
    include("connection.php");

    $Pi4=$_POST["PIB4_0"];
    $Ph4=$_POST["phone4_0"];
    $Id4=$_POST["IDinvisible4_0"];
    $pi4=$_POST["pib4"];
    $ph4=$_POST["phone4"];
    
    if($_POST['update'])
    {
        $SQL = "UPDATE {$tbl4} SET pib='$Pi4', phone='$Ph4' WHERE id=$Id4;";
    	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    	$mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
     }

    if($_POST['delete'])
    {
        $SQL = "DELETE FROM {$tbl4} WHERE id=$Id4;";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    	$mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
    }

    if($_POST['add4'])
    {
        $SQL = "INSERT INTO {$tbl4}(pib, phone) VALUES('$pi4', '$ph4');";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli($servername, $username, $password, $dbname);
    	$mysqli->query($SQL);
    }
    
     header("Location: http://hostelry.zzz.com.ua/clientpage.php");
     exit();
?>		