 <?php 
  include("pratials/header.php");
  require("./config/db.php");
 ?> 
  <main class="bg-warning">
      <div class="container">
          <div class="row">
              <div>
                  <a class="btn btn-primary btn-sm " href="./update/themNV.php" role="button">thêm</a>
              </div>
              <div class="directory-table">
                <div class="table">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Họ và tên</th>
                            <th scope="col">Chức vụ</th>
                            <th scope="col">Email</th>
                            <th scope="col">Số di động</th>
                            <th scope="col">Tên đơn vị</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <!-- Nhan xet :day la vung du lieu thay doi duoc-->
                            <?php 
                                //b2 khai bao va thuc hien truy vấn
                                $sql = "SELECT nv.manv, nv.tennv, nv.chucvu, nv.email, nv.sodidong, dv.tendv from db_nhanvien nv, db_donvi dv where nv.madv = dv.madv";
                                $result = mysqli_query($conn,$sql);
                                
                                //b3  kiem tra va xu li tap ket qua  - ung voi cau lenh select  
                                if(mysqli_num_rows($result)>0){
                                  $i=1;
                                  while($row=mysqli_fetch_assoc($result)){
                            ?>
                                    <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $row['tennv']; ?></td>
                                    <td><?php echo $row['chucvu']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['sodidong']; ?></td>
                                    <td><?php echo $row['tendv']; ?></td>
                                    <td><a href="update/suaNV.php?manv=<?php echo $row['manv']; ?>"><i class="fas fa-edit"></i></a></td>
                                    <td><a href="update/xoaNV.php?manv=<?php echo $row['manv']; ?>"><i class="fas fa-trash"></i></a></td>
                                    </tr>
                            <?php
                                    $i++;
                                  }
                                }
                                 
                            ?>
                        </tbody>
                    </table>
                </div>
              </div>
          </div>
      </div>
</main>

<?php 
  include("pratials/footer.php");
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
