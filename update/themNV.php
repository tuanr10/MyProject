<?php
  include("../pratials/header.php");
  require("../config/db.php");
  if (isset($_POST['add_nv'])) {
    $tennv = $_POST['tennv'];
    $chucvu = $_POST['chucvu'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $madv = $_POST['madv'];
    $sql = "INSERT INTO db_nhanvien(tennv,chucvu,email,sodidong,madv) VALUES ('$tennv','$chucvu','$email','$phone','$madv')";
    $run = mysqli_query($conn,$sql);
    if ($run) { ?>
      <script>
          alert("Add successfully !");
          window.location.href = "../index.php";
      </script>
    <?php } else { ?>
       <script>	
           alert("Add failed !");
           window.location.href = "themnv.php";
       </script>
    <?php } } 

?>
<main>
    <div class="container-fluid !direction !spacing">
        <form class="row g-3 needs-validation" novalidate method="POST" action="themNV.php">
          <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Họ và tên</label>
            <input type="text" class="form-control" name="tennv" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Chức vụ</label>
            <input type="text" class="form-control" name="chucvu" value="" required>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
          </div>
          <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Số di động</label>
            <input type="phone" class="form-control" name="phone" required>
          </div>
          <div class="col-md-3">
            <label for="validationCustom04" class="form-label">Tên đơn vị</label>
            <select class="form-select" name="madv" required>
              <?php
                $sql="select * from db_donvi";
                $result= mysqli_query($conn,$sql);
                if(mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                        echo'<option value="'.$row['madv'].'">'.$row['tendv'].'</option>';
                    }
                }
              ?>
            </select>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="add_nv">Lưu</button>
          </div>
        </form>
    </div>
</main>
<?php
  include("../pratials/footer.php");
?>