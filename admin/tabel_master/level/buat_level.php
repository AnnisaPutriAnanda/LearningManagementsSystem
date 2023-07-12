<?php

if(isset($_POST['submit'])){ 

$id_edit = $_POST['id'];
$nama_edit = $_POST['nama'];


if(!empty($nama_edit)){

    $query2 = "INSERT INTO `level_kelas` (`id`, `nama`) VALUES (NULL, '$nama_edit')";
    $update = mysqli_query($koneksi, $query2);
    header('location:index.php?page=level');
}else{
  echo '<script> alert("Field Tidak Boleh Kosong")</script>';
}

}

?>
<br/>
<div class="container" style="margin-top: 20px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tabel Level
            </div>
            <div class="card-body">
<form action="" method="POST">
                
                <div class="form-group">
                  <div hidden>
                  <label>ID</label>
                  <input type="text" name="id" id="id" value="" placeholder="" class="form-control">
                </div></div>

                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama" id="nama" value="" placeholder="" class="form-control">
                </div>
              <br/>
                <button type="submit" name="submit" class="btn btn-success">TAMBAH</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
</div></div></div></div></div>

