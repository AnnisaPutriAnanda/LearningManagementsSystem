<?php
  ob_start();
  $id = $_GET['id_goal']; 
  
  $query = "SELECT * FROM personal_goal WHERE id= '$id'"; 
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_array($result);

?>
<br/>
<div class="container" style="margin-top: 20px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tabel Goals
            </div>
            <div class="card-body">
<form action="" method="POST">
                
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

                <button type="submit" name="edit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
</div></div></div></div></div>

<?php
if(isset($_POST['edit'])){ 

$nama_edit = $_POST['nama'];


if(!empty($nama_edit)){

    $query2 = "UPDATE `personal_goal` SET `nama` = '$nama_edit' WHERE `personal_goal`.`id` = '$id'";
    $update = mysqli_query($koneksi, $query2);
    header('location:index.php?page=personal_goal');
    ob_end_flush();
}else{
  echo '<script> alert("Field Tidak Boleh Kosong")</script>';
}
}
?>