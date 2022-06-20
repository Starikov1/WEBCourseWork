<?php

function NewDT($dt)
{
    $d = date('d', $dt);
    $m = date('m', $dt);
    $y = date('Y', $dt);
    
    return "{$y}-{$m}-{$d} 00:00:00";
}

include("connection.php");

if($_POST['performance'])
{   
    $dt1 = strtotime ($_POST['begin']);
    $dt2 = strtotime ($_POST['edge']);
    
    $date1=NewDT($dt1);
    $date2=NewDT($dt2);
    
    $datetime1 = new DateTime(NewDT($dt1));
    $datetime2 = new DateTime(NewDT($dt2));
    /*$str = "PT{$h1}H{$i1}M";
    $interval1 = new DateInterval($str);*/
    //$datetime->sub(new DateInterval($str));
    
    $interval = $datetime1->diff($datetime2);
    
    $days = $interval->d;
    
    $ch1 = $_POST['one'];
    $ch2 = $_POST['two'];
    $ch3 = $_POST['three'];
    $p = $_POST['four'];
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if($con)
    {
        $strSQL1 = "SELECT id FROM {$tbl1} WHERE characteristic='$ch1'";
        $result = $con->query($strSQL1);
        $row = $result->fetch_assoc();
        $id1 = $row['id'];
        
        $strSQL2 = "SELECT id FROM {$tbl2} WHERE characteristic='$ch2'";
        $result = $con->query($strSQL2);
        $row = $result->fetch_assoc();
        $id2 = $row['id'];
        
        $strSQL3 = "SELECT id FROM {$tbl3} WHERE characteristic='$ch3'";
        $result = $con->query($strSQL3);
        $row = $result->fetch_assoc();
        $id3 = $row['id'];
        
        $strSQL1 = "SELECT price FROM {$tbl1} WHERE characteristic='$ch1'";
        $result = $con->query($strSQL1);
        $row = $result->fetch_assoc();
        $price1 = $row['price'];
        
        $strSQL2 = "SELECT price FROM {$tbl2} WHERE characteristic='$ch2'";
        $result = $con->query($strSQL2);
        $row = $result->fetch_assoc();
        $price2 = $row['price'];
        
        $strSQL3 = "SELECT price FROM {$tbl3} WHERE characteristic='$ch3'";
        $result = $con->query($strSQL3);
        $row = $result->fetch_assoc();
        $price3 = $row['price'];
        
        $strSQL4 = "SELECT id FROM {$tbl4} WHERE pib='$p'";
        $result = $con->query($strSQL4);
        $row = $result->fetch_assoc();
        $id_c = $row['id'];
        
        $s5 = "INSERT INTO room(id_storeys, id_places, id_type) VALUES($id1, $id2, $id3)";
        $result = $con->query($s5);
        
        $strSQL5 = "SELECT MAX(id) FROM room";
        $result = $con->query($strSQL5);
        $row = $result->fetch_assoc();
        $id_r = $row['MAX(id)'];
        
        $s6 = "INSERT INTO {$tbl6}(id_client, id_room, price, start_time, finish_time) VALUES($id_c, $id_r, $days*($price1+$price2+$price3), '$date1', '$date2');";
        $result = $con->query($s6);
    }
    mysqli_close($con);
}

if($_POST['delete'])
{
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if($con)
    {
        $id=$_POST['IDinvisible5_0'];
        $strSQL1 = "SELECT id_room FROM {$tbl6} WHERE id=$id";
        $result = $con->query($strSQL1);
        $row = $result->fetch_assoc();
        $id_r = $row['id_room'];
        
        echo $id_r;
        
        $s1 = "DELETE FROM {$tbl5} WHERE id=$id_r";
        $result = $con->query($s1);
        
        $s2 = "DELETE FROM {$tbl6} WHERE id=$id";
        $result = $con->query($s2);
    }
    mysqli_close($con);
}

header("Location: http://hostelry.zzz.com.ua/orderpage.php");

?>	