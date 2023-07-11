
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tabel User
            </div>
            <div class="card-body">
            <a href='index.php?page=user&acts=buat' class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">PASS</th>
                    <th scope="col">LEVEL</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                     $query = mysqli_query($koneksi, "SELECT * FROM `user`");
                     while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                  <td><?php echo $row['id_user'] ?></td>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php echo $row['password'] ?></td>
                  <td><?php echo $row['level'] ?></td>
                      <td class="text-center">
                        <a href='index.php?page=user&acts=edit&id_user=<?php echo $row['id_user'] ?>' class="btn btn-sm btn-primary">EDIT</a>
                        <a href='index.php?page=user&acts=hapus&id_user=<?php echo $row['id_user'] ?>' class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>