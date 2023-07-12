<?php
  ob_start();
  $id = $_GET['id_kategori']; 
  
  $query = "SELECT * FROM kategori_kelas WHERE id= '$id'"; 
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_array($result);

?>
<br/>

<form action="" method="POST">
                
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="" id="" value="<?php echo $row['id'] ?>" placeholder="" class="form-control" disabled>
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <br/>
                  <input type="text" name="nama_kt" id="nama_kt" value="<?php echo $row['nama'] ?>" placeholder="" class="form-control">
                </div>
                <br/>

                <button type="submit" name="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>

              <?php

              if(isset($_POST['submit'])){ 

                $nama_edit = $_POST['nama_kt'];
                
                if(!empty($nama_edit)){
                
                    $query2 = "UPDATE `kategori_kelas` SET `nama` = '$nama_edit' WHERE `kategori_kelas`.`id` = '$id'";
                    $update = mysqli_query($koneksi, $query2);
                    header('location:index.php?page=kategori');
                    ob_end_flush();
                }else{
                  echo '<script> alert("Field Tidak Boleh Kosong")</script>';
                }
                };
              ?>
