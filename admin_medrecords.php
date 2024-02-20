<?php
    $pdo = new PDO("mysql:host=localhost;dbname=veraruk;charset=utf8", "root", "");
    $stmt = $pdo->prepare("SELECT * FROM medical_records "); 
    $stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="admin_medrecords.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script>
            
  </script>
<body>
  <header>
   <?php include('homepage_admin.php');?>
  </header>
  <div class="container">
        <input type="text" id="search-box" placeholder="ค้นหา"></input><br>
        <a href="#" class="button-add"> เพิ่มประวัติผู้ป่วยใหม่ + </a>
    <table>
        <tr>
            <th>รหัสผู้ป่วย</th>
            <th>ชื่อผู้ป่วย</th>
            <th>   </th>
            <th>   </th>
        </tr>
<?php while($row=$stmt->fetch()): ?>
    <tr>
        <td><?=$row ["patient_id"] ?></td>
        <td><?=$row ["name_patient"] ?></td>
        <td><i class="fa fa-calendar"></i></td>
        <td><button class="button-booking">เพิ่มลงในการนัดหมาย</button></td><br>     
    </tr>
    <?php endwhile; ?>
</table>
</div>

</body>    
  