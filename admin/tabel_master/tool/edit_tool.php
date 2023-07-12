<?php
  ob_start();
  $id = $_GET['id_tool']; 
  
  $query = "SELECT * FROM tools WHERE id= '$id'"; 
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_array($result);

 if(isset($_POST['edit'])){ 

    $target = $row['gambar'];
    
    $cek = mysqli_num_rows($target);
    if($cek > 0){}else{
        unlink("file/$target");
    }
   


    $gambar = $_FILES['gambar']['name'];
    $file_tmp = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($file_tmp, 'file/'.$gambar);
    $nama_edit = $_POST['nama'];
    $link = $_POST['link'];

 if(!empty($nama_edit)){

    $query2 = "UPDATE `tools` SET `nama` = '$nama_edit', `gambar` = '$gambar', `link` = '$link' WHERE `tools`.`id` = '$id'";
    $update = mysqli_query($koneksi, $query2);
    header('location:index.php?page=tool');
    ob_end_flush();
}else{ echo 'mohon isi field dengan benar';}
}

?>
<br/>
<div class="container" style="margin-top: 20px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tabel Tools
            </div>
            <div class="card-body">
<form enctype="multipart/form-data" action="" method="POST">
                
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="" class="form-control" disabled>
                </div>

                <div class="form-group">
                  <label>NAMA</label>
                  <br/>
                  <input type="text" name="nama" id="nama" value="<?php echo $row['nama'] ?>" placeholder="" class="form-control">
                </div>
                <br/>
                <div class="form-group">
                  <label>GAMBAR</label>
                  <br/>
                  <input type="file" name="gambar" id="gambar" value="<?php echo $row['gambar'] ?>" placeholder="" class="form-control">
                </div>
                <br/>
                <div class="form-group">
                  <label>LINK</label>
                  <br/>
                  <input type="text" name="link" id="link" value="<?php echo $row['link'] ?>" placeholder="" class="form-control">
                </div>
                <br/>

                <button type="submit" name="edit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
</div></div></div></div></div>




