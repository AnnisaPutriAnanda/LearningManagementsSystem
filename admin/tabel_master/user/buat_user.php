<?php

if(isset($_POST['submit'])){ 

$id_edit = $_POST['id'];
$nama_edit = $_POST['nama'];
$password_edit = $_POST['password'];
$level_edit = $_POST['level'];


if(!empty($nama_edit) && !empty($password_edit) && !empty($level_edit)){

    $query2 = "INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES (NULL, '$nama_edit', '$password_edit', '$level_edit')";
    $update = mysqli_query($koneksi, $query2);
    header('location:index.php?page=user');
}

}

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
                  <div hidden>
                  <label>ID</label>
                  <input type="text" name="id" id="id" value="" placeholder="" class="form-control">
                </div>
</div>

                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" id="nama" value="" placeholder="" class="form-control">
                </div>
              <br/>
              <div class="form-group">
                  <label>PASSWORD</label>
                  <input type="text" name="password" id="password" value="" placeholder="" class="form-control">
                </div>
              <br/>
              <div class="form-group">
                  <label>LEVEL</label>
                  <select class="form-select" aria-label="Default select example" name="level" id="level">
                  <option value="admin">admin</option>
                  <option value="pengguna">pengguna</option>
                  </select>
                </div>
              <br/>
                <button type="submit" name="submit" class="btn btn-success">TAMBAH</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
</div></div></div></div></div>

