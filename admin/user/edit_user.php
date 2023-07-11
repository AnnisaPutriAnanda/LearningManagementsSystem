<?php
  ob_start();
  $id = $_GET['id_user']; 
  
  $query = "SELECT * FROM user WHERE id_user= '$id'"; 
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_array($result);

?>
<br/>
<div class="container" style="margin-top: 20px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tabel Tipe
            </div>
            <div class="card-body">
<form action="" method="POST">
                
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id" value="<?php echo $row['id_user'] ?>" placeholder="" class="form-control" disabled>
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <br/>
                  <input type="text" name="nama" id="nama" value="<?php echo $row['username'] ?>" placeholder="" class="form-control">
                </div>
                <br/>
              <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="text" name="password" id="password" value="<?php echo $row['password'] ?>" placeholder="" class="form-control">
                </div>
              <br/>
              <div class="form-group">
                  <label>LEVEL</label>
                  <select class="form-select" aria-label="Default select example" name="level" id="level" value="<?php echo $row['level'] ?>">
                  <option value="admin">admin</option>
                  <option value="pengguna">pengguna</option>
                  </select>
                </div>
              <br/>

                <button type="submit" name="edit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
</div></div></div></div></div>

<?php
if(isset($_POST['edit'])){ 

$nama_edit = $_POST['nama'];
$password_edit = $_POST['password'];
$level_edit = $_POST['level'];


if(!empty($nama_edit) && !empty($password_edit) && !empty($level_edit)){

    $query2 = "UPDATE `user` SET `username` = '$nama_edit', `password` = '$password_edit', `level` = '$level_edit' WHERE `user`.`id_user` = '$id'";
    $update = mysqli_query($koneksi, $query2);
    header('location:index.php?page=user&acts=tabel');
    ob_end_flush();
}
}
?>