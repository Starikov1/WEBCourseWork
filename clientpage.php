<html>
<head>
    <title>Клієнти</title>
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
      <input class="button-class-menu" id="thispagebutton" type="button" name="client" value="Клієнт" />
      <a href="http://hostelry.zzz.com.ua/orderpage.php"><input class="button-class-menu" type="button" name="order" value="Замовлення" /></a>
    </form>
    </center>
    <div class="content-below">
        <?php
            include("dbcreate.php");
    		include("connection.php");
        ?>
        
    <?php       
            
        	function fetch_data4($db, $tbl4, $columns)
            {
            if(empty($db)){
              $msg = "Database connection error";
            }
            elseif (empty($columns) || !is_array($columns)) {
              $msg="columns Name must be defined in an indexed array";
            }
            elseif(empty($tbl4)){
              $msg = "Table Name is empty";
            }
            else{
              $columnName = implode(", ", $columns);
              $query = "SELECT {$columnName} FROM {$tbl4}";
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
                $columns = ['id','pib','phone'];
                $fetchData = fetch_data4($db, $tbl4, $columns);
          ?>
         
        <!-- <input type="text" name="searchT" value="<?php if(isset($_POST['searchT'])){echo $_GET['searchT']; } ?>" id="tableInp" onkeyup="myFunction()"> -->
        
        <center>
        <p class="tableheader">Таблиця контактних даних клієнтів</p>
        
        <div class="tbl1">
        
        <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
            <th>ПІБ</th>
            <th>ТЕЛЕФОН</th>
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
      <form class="form-for-1-table" action="tbl4.php" method="POST" id="myTableS">
        <tr>
          <td style="display: none"><input type="text" name="IDinvisible4_0" id="IDinvisible4_0" value="<?php echo $data['id']??''; ?>"></td> <!-- 4, not 3 --> 
          <td><input type="text" name="PIB4_0" id="PIB4_0" value="<?php echo $data['pib']??''; ?>"></td> <!-- 5, not 4 --> 
          <td><input type="text" name="phone4_0" id="phone4_0" value="<?php echo $data['phone']??''; ?>"></td> <!-- 6, not 5 --> 
          <td><input type="submit" name="update" value="Змінити"/></td>
          <td><input type="submit" name="delete" value="Видалити" href=\"tbl4.php?id=".$data['id']."\"/></td>
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
        <form class="form-for-1-table" action="tbl4.php" method="POST">
        ПІБ<input type="text" name="pib4" id="pib4" value="" class="Input-form-add"><br><br>
        Телефон<input type="text" name="phone4" id="phone4" value="" class="Input-form-add"><br><br>
        <input type="submit" name="add4" value="Додати" class="button-add-form">
    </form>
    </div></div>
    </div>
  </div>
</div>
</body>
</html>