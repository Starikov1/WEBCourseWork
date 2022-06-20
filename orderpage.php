<html>
<head>
 <title>Замовлення</title>
 <meta charset="utf-8">
 <link rel="stylesheet" href="total_styles.css">
 <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
</head>
<body>
<div class="outer-menu">
  <div class="form-menu">
  <center>
    <form>
      <a href="http://hostelry.zzz.com.ua"><input class="button-class-menu" type="button" name="handbook" value="Довідники" href="https://hotelsystemaccount-a7ea90.ingress-daribow.easywp.com/1"/></a>
      <a href="http://hostelry.zzz.com.ua/clientpage.php"><input class="button-class-menu" type="button" name="client" value="Клієнт" /></a>
      <input  class="button-class-menu" type="button" name="order" value="Замовлення" id="thispagebutton"/>
    </form>
    </center>
    <div class="content-below">
        <form method="POST" action="ordercreate.php">
        <center>
            <p>Поверх</p>
            <select name="one" id="one">
                <?php
                include("dbcreate.php");
                include("connection.php");
                ?>
                
                <?php       
                
                function fetch_data1_2($db, $tbl1)
                {
                if(empty($db)){
                  $msg = "Database connection error";
                }
                elseif(empty($tbl1)){
                  $msg = "Table Name is empty";
                }
                else{
                  $query = "SELECT characteristic FROM {$tbl1}";
                  $result = $db->query($query);
                  if($result== true){
                    if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      $msg = $row;
                    }
                    elseif (mysqli_num_rows($result) == 0){
                $msg = "No Data Found"; 
             }
                }
                else{
              $msg = mysqli_error($db);
                  }
              }
                return $msg;
              }   
              
              $conn = new mysqli($servername, $username, $password, $dbname);
              $db = $conn;
              $fetchData = fetch_data1_2($db, $tbl1);
              ?>
              
              <?php
              
                if(is_array($fetchData)){      
                $sn=1;
                foreach($fetchData as $data){
                ?>
                <option value="<?php echo $data['characteristic']??''; ?>"><?php echo $data['characteristic']??''; ?></option>
                <?php
          $sn++;}}else{ ?> 
        <?php echo $fetchData; }?>
            </select>
            
            <p>Кількість місць</p>
            <select name="two" id="two">
                
                <?php       
                
                function fetch_data2_2($db, $tbl2)
                {
                if(empty($db)){
                  $msg = "Database connection error";
                }
                elseif(empty($tbl2)){
                  $msg = "Table Name is empty";
                }
                else{
                  $query = "SELECT characteristic FROM {$tbl2}";
                  $result = $db->query($query);
                  if($result== true){
                    if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      $msg = $row;
                    }
                    elseif (mysqli_num_rows($result) == 0){
                $msg = "No Data Found"; 
             }
                }
                else{
              $msg = mysqli_error($db);
                  }
              }
                return $msg;
              }   
              
              $conn = new mysqli($servername, $username, $password, $dbname);
              $db = $conn;
              $fetchData = fetch_data2_2($db, $tbl2);
              ?>
              
              <?php
              
                if(is_array($fetchData)){      
                $sn=1;
                foreach($fetchData as $data){
                ?>
                <option value="<?php echo $data['characteristic']??''; ?>"><?php echo $data['characteristic']??''; ?></option>
                <?php
          $sn++;}}else{ ?> 
        <?php echo $fetchData; }?>
            </select>
            
            <p>Тип</p>
            <select name="three" id="three">
                
                <?php       
                
                function fetch_data3_2($db, $tbl3)
                {
                if(empty($db)){
                  $msg = "Database connection error";
                }
                elseif(empty($tbl3)){
                  $msg = "Table Name is empty";
                }
                else{
                  $query = "SELECT characteristic FROM {$tbl3}";
                  $result = $db->query($query);
                  if($result== true){
                    if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      $msg = $row;
                    }
                    elseif (mysqli_num_rows($result) == 0){
                $msg = "No Data Found"; 
             }
                }
                else{
              $msg = mysqli_error($db);
                  }
              }
                return $msg;
              }   
              
              $conn = new mysqli($servername, $username, $password, $dbname);
              $db = $conn;
              $fetchData = fetch_data3_2($db, $tbl3);
              ?>
              
              <?php
              
                if(is_array($fetchData)){      
                $sn=1;
                foreach($fetchData as $data){
                ?>
                <option value="<?php echo $data['characteristic']??''; ?>"><?php echo $data['characteristic']??''; ?></option>
                <?php
          $sn++;}}else{ ?> 
        <?php echo $fetchData; }?>
            </select>
            
            <p>Клієнт</p>
            <select name="four" id="four">
                
                <?php       
                
                function fetch_data4_2($db, $tbl4)
                {
                if(empty($db)){
                  $msg = "Database connection error";
                }
                elseif(empty($tbl4)){
                  $msg = "Table Name is empty";
                }
                else{
                  $query = "SELECT pib FROM {$tbl4}";
                  $result = $db->query($query);
                  if($result== true){
                    if (mysqli_num_rows($result) > 0) {
                      $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                      $msg = $row;
                    }
                    elseif (mysqli_num_rows($result) == 0){
                $msg = "No Data Found"; 
             }
                }
                else{
              $msg = mysqli_error($db);
                  }
              }
                return $msg;
              }   
              
              $conn = new mysqli($servername, $username, $password, $dbname);
              $db = $conn;
              $fetchData = fetch_data4_2($db, $tbl4);
              ?>
              
              <?php
              
                if(is_array($fetchData)){      
                $sn=1;
                foreach($fetchData as $data){
                ?>
                <option value="<?php echo $data['pib']??''; ?>"><?php echo $data['pib']??''; ?></option>
                <?php
          $sn++;}}else{ ?> 
        <?php echo $fetchData; }?>
            </select>
            
            <p>Дата заселення</p>
            <input type="datetime-local" name="begin">
            <p>Дата виселення</p>
            <input type="datetime-local" name="edge">
            
            <p>
            <input type="submit" name="performance" value="Створити замовлення" class="button-add-form"></p>
            
            </center>
        </form>
        <br><br>
        
        <?php       
            
            function fetch_data1($db, $tbl6, $tbl4, $tbl1, $tbl2, $tbl3)
            {
            if(empty($db)){
              $msg = "Database connection error";
            }
            elseif(empty($tbl6)||empty($tbl4)||empty($tbl1)||empty($tbl2)||empty($tbl3)){
              $msg = "Table Name is empty";
            }
            else{
              //$columnName = implode(", {}", $columns);
              $query = "SELECT {$tbl6}.id, {$tbl6}.price, {$tbl6}.start_time, {$tbl6}.finish_time, {$tbl4}.pib, {$tbl1}.characteristic AS ch1, {$tbl2}.characteristic AS ch2, {$tbl3}.characteristic AS ch3, room.id_places FROM order1, client, storeys, places, type, room WHERE {$tbl4}.id={$tbl6}.id_client AND room.id={$tbl6}.id_room AND storeys.id=room.id_storeys AND places.id=room.id_places AND type.id=room.id_type";
              $result = $db->query($query);
              if($result== true){
                if (mysqli_num_rows($result) > 0) {
                  $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
                  $msg = $row;
                }
                elseif (mysqli_num_rows($result) == 0){
            $msg = "No Data Found"; 
         }
            }
            else{
          $msg = mysqli_error($db);
              }
          }
            return $msg;
          }    
                $conn = new mysqli($servername, $username, $password, $dbname);

                $db = $conn;
                $columns = ['id','price','start_time','finish_time'];
                $fetchData = fetch_data1($db, $tbl6, $tbl4, $tbl1, $tbl2, $tbl3);
          ?>
               
              
        
        <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
            <th>Клієнт</th>
            <th>Поверх номера</th>
            <th>Місце розташування</th>
            <th>Інші примітності</th>
            <th>Ціна</th>
            <th>Момент заселення</th>
            <th>Момент звільнення</th>
            <th>Видалити</th>
          </tr>
        </thead>
        <tbody class="tbody-table">
          <?php
          
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
    <form class="form-for-1-table" action="ordercreate.php" method="POST" id="myTableS">
        <tr>
          <td style="display: none"><input type="text" name="IDinvisible5_0" id="IDinvisible5_0" value="<?php echo $data['id']??''; ?>"></td> <!-- 4, not 3 --> 
          <td><input type="text" name="Iclient1_0" id="Iclient1_0" value="<?php echo $data['pib']??'';?>"></td> <!-- 5, not 4 --> 
          <td><input type="text" name="Istorey1_0" id="Istorey1_0" value="<?php echo $data['ch1']??''; ?>"></td>
          <td><input type="text" name="Iplace1_0" id="Iplace1_0" value="<?php echo $data['ch2']??''; ?>"></td>
          <td><input type="text" name="Itype1_0" id="Itype1_0" value="<?php echo $data['ch3']??''; ?>"></td>
          <td><input type="text" name="Iprice1_0" id="Iprice1_0" value="<?php echo $data['price']??''; ?>"></td>
          <td><input type="text" name="Istart1_0" id="Istart1_0" value="<?php echo $data['start_time']??''; ?>"></td>
          <td><input type="text" name="Iend1_0" id="Iend1_0" value="<?php echo $data['finish_time']??''; ?>"></td>
          <td><input type="submit" name="delete" value="Видалити"/></td>
         </tr>
    </form>
     <?php
      $sn++;}}else{ ?> 
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?> 
  </td>
    </tr>
    <?php
    }?>
        </tbody>
      </table>
        
    </div>
  </div>
</div>
</body>
</html>	