<html>
	<head>
		<title>Довідник</title>
		<meta charset="utf-8">
        <link rel="stylesheet" href="total_styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="outer-menu">
			<div class="form-menu">
                <center>
    				<form>
    					<input class="button-class-menu" id="thispagebutton" type="button" name="handbook" value="Довідники"/>
    					<a href="http://hostelry.zzz.com.ua/clientpage.php"><input class="button-class-menu" type="button" name="client" value="Клієнт"/></a>
    					<a href="http://hostelry.zzz.com.ua/orderpage.php"><input class="button-class-menu" type="button" name="order" value="Замовлення"/></a>
    				</form>
                </center>
			<div class="content-below">
                
                
                    <?php
            include("dbcreate.php");
        	include("connection.php");
        ?>
        
    <?php       
            
        	function fetch_data1($db, $tbl1, $columns)
            {
            if(empty($db)){
              $msg = "Database connection error";
            }
            elseif (empty($columns) || !is_array($columns)) {
              $msg="columns Name must be defined in an indexed array";
            }
            elseif(empty($tbl1)){
              $msg = "Table Name is empty";
            }
            else{
              $columnName = implode(", ", $columns);
              $query = "SELECT {$columnName} FROM {$tbl1}";
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
                $columns = ['id','characteristic','price'];
                $fetchData = fetch_data1($db, $tbl1, $columns);
          ?>
               
              
        <center>
        
        <p class="tableheader">Таблиця націнок за один номер готелю в залежності від поверху</p>
        
        <div class="tbl1"> 
        <table class="table1" id="myTable">
        <thead>
          <tr>
            <th>Характеристика</th>
            <th>Націнка</th>
            <th>Оновити</th>
            <th>Видалити</th>
          </tr>
        </thead>
        <tbody class="tbody-table">
          <?php
          
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
    <form class="form-for-1-table" action="tbl1.php" method="POST" id="myTableS">
        <tr>
          <td style="display: none"><input type="text" name="IDinvisible1_0" id="IDinvisible1_0" value="<?php echo $data['id']??''; ?>"></td> <!-- 4, not 3 --> 
          <td style="width: 30%"><input style="width:100%" type="text" name="Icharacteristic1_0" id="Icharacteristic1_0" value="<?php echo $data['characteristic']??''; ?>"></td> <!-- 5, not 4 --> 
          <td style="width: 30%"><input style="width:100%" type="text" name="Iprice4_0" id="Iprice4_0" value="<?php echo $data['price']??''; ?>"></td> <!-- 6, not 5 --> 
          <td style="width: 20%"><input style="width:100%"  type="submit" name="update" value="Змінити"/></td>
          <td style="width: 20%"><input style="width:100%" type="submit" name="delete" value="Видалити" href=\"tbl1.php?id=".$data['id']."\"/></td>
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
      </center>
      <div class="form-div-add">
          <div class="inner-form">
              <form class="form-for-1-table" action="tbl1.php" method="POST">
              <span>Характеристика</span><p><input type="text" name="Icharacteristics1" id="Icharacteristics1" class="Input-form-add" value=""></p>
                Націнка<p><input type="text" name="Iprice1" id="Iprice1" class="Input-form-add" value=""></p>
                <p><input type="submit" name="add1" value="Додати" class="button-add-form"></p>
              </form>
          </div>
      </div>
                
                
                
                
                
                
                
            
    
                
                
                <?php         
        	function fetch_data2($db, $tbl2, $columns)
            {
            //$msg = "Database connection error";
            if(empty($db)){
              $msg = "Database connection error";
            }
            elseif (empty($columns) || !is_array($columns)) {
              $msg="columns Name must be defined in an indexed array";
            }
            elseif(empty($tbl2)){
              $msg = "Table Name is empty";
            }
            else{
              $columnName = implode(", ", $columns);
              $query = "SELECT {$columnName} FROM {$tbl2} ORDER BY id DESC";
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
                  $columns = ['id','characteristic','price'];
                  $fetchData = fetch_data2($db, $tbl2, $columns);
                
          ?>
                
                <center>
                <p class="tableheader">Таблиця націнок за один номер готелю в залежності від кількості місць</p>
        <div class="tbl1">         
      <table class="table table-bordered" id="table2">
        <thead>
          <tr>
            <th>Характеристика</th>
            <th>Націнка</th>
            <th>Оновити</th>
            <th>Видалити</th>
          </tr>
        </thead>
        <tbody class="tbody-table">
          <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
    <form class="form-for-1-table" action="tbl2.php" method="POST">
      <tr>
      <td style="display: none"><input type="text" name="IDinvisible2_0" id="IDinvisible2_0" value="<?php echo $data['id']??''; ?>" style="display: none"></td> <!-- 4, not 3 --> 
      <td style="width: 30%"><input style="width:100%" type="text" name="Icharacteristics2_0" id="Icharacteristics2_0" value="<?php echo $data['characteristic']??''; ?>"></td> <!-- 5, not 4 --> 
      <td style="width: 30%"><input style="width:100%" type="text" name="Iprice2_0" id="Iprice2_0" value="<?php echo $data['price']??''; ?>"></td> <!-- 6, not 5 --> 
      <td style="width: 20%"><input style="width:100%" type="submit" name="update" value="Змінити"/></td>
      <td style="width: 20%"><input style="width:100%" type="submit" name="delete" value="Видалити"/></td>
     </tr>
     </form>
     <?php
      $sn++;}}else{ ?> <!-- 3, not 6 --> 
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
      </center>
      <div class="form-div-add">
          <div class="inner-form">
              <form class="form-for-1-table" action="tbl2.php" method="POST">
                Харктеристика<p><input type="text" name="Icharacteristics2" id="Icharacteristics2" class="Input-form-add" value=""></p>
                Націнка:<p><input type="text" name="Iprice2" id="Iprice2" value="" class="Input-form-add"></p>
                		<input type="text" name="IDinvisible2" id="IDinvisible2" value="" style="display: none">
                <p><input type="submit" name="add2" value="Додати" class="button-add-form"></p>
            </div>
        </div>
    </form>
    
            <p><p>
                        
               <?php         
    		function fetch_data3($db, $tbl3, $columns)
            {
            //$msg = "Database connection error";
            if(empty($db)){
              $msg = "Database connection error";
            }
            elseif (empty($columns) || !is_array($columns)) {
              $msg="columns Name must be defined in an indexed array";
            }
            elseif(empty($tbl3)){
              $msg = "Table Name is empty";
            }
            else{
              $columnName = implode(", ", $columns);
              $query = "SELECT {$columnName} FROM {$tbl3} ORDER BY id DESC";
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
                  $columns = ['id','characteristic','price'];
                  $fetchData = fetch_data3($db, $tbl3, $columns);
                
          ?>
          
          <center>
          <p class="tableheader">Таблиця націнок за один номер готелю в залежності інших характеристик</p>
       <div class="tbl1">    
      <table class="table table-bordered" id="table2">
        <thead>
          <tr>
            <th>Характеристика</th>
            <th>Націнка</th>
            <th>Оновити</th>
            <th>Видалити</th>
          </tr>
        </thead>
        <tbody class="tbody-table">
          <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
     <form class="form-for-1-table" action="tbl3.php" method="POST">
      <tr>
      <td style="display: none"><input type="text" name="IDinvisible3_0" id="IDinvisible3_0" value="<?php echo $data['id']??''; ?>" style="display: none"></td> <!-- 4, not 3 --> 
      <td style="width: 30%"><input style="width:100%" type="text" name="Icharacteristics3_0" id="Icharacteristics3_0" value="<?php echo $data['characteristic']??''; ?>"></td> <!-- 5, not 4 --> 
      <td style="width: 30%"><input style="width:100%" type="text" name="Iprice3_0" id="Iprice3_0" value="<?php echo $data['price']??''; ?>"></td> <!-- 6, not 5 --> 
      <td style="width: 20%"><input style="width:100%" type="submit" name="update" value="Змінити"/></td>
      <td style="width: 20%"><input style="width:100%" type="submit" name="delete" value="Видалити"/></td>
     </tr>
     </form>
     <?php
      $sn++;}}else{ ?> <!-- 3, not 6 --> 
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
      </center>
      <div class="form-div-add">
          <div class="inner-form">
           <form class="form-for-1-table" action="tbl3.php" method="POST">
            Харктеристика<p><input type="text" name="Icharacteristics3" id="Icharacteristics3" class="Input-form-add" value=""></p>
            Націнка:<p><input type="text" name="Iprice3" id="Iprice3" value="" class="Input-form-add"></p>
            		<input type="text" name="IDinvisible3" id="IDinvisible3" value="" style="display: none">
            <p><input type="submit" name="add3" value="Додати" class="button-add-form"></p>
            
    </form>
    </div>
        </div>
				</div>
			</div>
		</div>
	</body>
</html>	