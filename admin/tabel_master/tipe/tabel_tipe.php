
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tabel Tipe
            </div>
            <div class="card-body">
            <a href='index.php?page=tipe&acts=buat' class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
                     $query = mysqli_query($koneksi, "SELECT * FROM `tipe_kelas`");
                     while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                    <td><?php echo $no++ ?></td>
                  
                  <td><?php echo $row['nama'] ?></td>
                      <td class="text-center">
                        <a href='index.php?page=tipe&acts=edit&id_tipe=<?php echo $row['id'] ?>' class="btn btn-sm btn-primary">EDIT</a>
                        <a href='index.php?page=tipe&acts=hapus&id_tipe=<?php echo $row['id'] ?>' class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>