<?php

if(isset($_POST['submit'])){ 

$gambar = $_FILES['gambar']['name'];
$file_tmp = $_FILES['gambar']['tmp_name'];
$nama_edit = $_POST['nama'];
$link = $_POST['link'];
move_uploaded_file($file_tmp, 'file/'.$gambar);

if(!empty($nama_edit)){

    $query2 = "INSERT INTO `tools` (`id`, `nama`, `gambar`, `link`) VALUES (NULL, '$nama_edit', '$gambar', '$link')";
    $update = mysqli_query($koneksi, $query2);
    header('location:index.php?page=tool');
}

}

?>
<br/>
<div class="container" style="margin-top: 20px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tabel Tool
            </div>
            <div class="card-body">
<form enctype="multipart/form-data" action="" method="POST">
                
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
                  <label>GAMBAR</label>
                  <input type="file" name="gambar" id="gambar" value="" placeholder="" class="form-control">
                </div>
              <br/>
              <div class="form-group">
                <label>LINK</label>
                <input type="text" name="link" id="link" value="" placeholder="" class="form-control">
               </div>
                <button type="submit" name="submit" class="btn btn-success">TAMBAH</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
</div></div></div></div></div>

