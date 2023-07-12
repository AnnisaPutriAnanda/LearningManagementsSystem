
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Tabel Tools
            </div>
            <div class="card-body">
            <a href='index.php?page=tool&acts=buat' class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">GAMBAR</th>
                    <th scope="col">LINK</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                     $no = 1;
                     $query = mysqli_query($koneksi, "SELECT * FROM `tools`");
                     while($row = mysqli_fetch_array($query)){

                        $gambar = $row['gambar'];
                        $link = $row['link'];
                  ?>

                  <tr>
                <td><?php echo $no++ ?></td>
                  <td><?php echo $row['nama'] ?></td>
                  <td> <?php if(empty($gambar)){ echo'Gambar Tidak Ditambahkan';}else{?> <img height="100" width="100" src='file/<?php echo $gambar; ?>'><?php }?></td>
                  <td> <?php if(empty($link)){ echo'Link Tidak Ditambahkan';}else{?> <a href ="<?php echo $row['link'] ?>"><button class="btn btn-success">Link Download</button></a><?php }?></td>
                      <td class="text-center">
                        <a href='index.php?page=tool&acts=edit&id_tool=<?php echo $row['id'] ?>' class="btn btn-sm btn-primary">EDIT</a>
                        <a href='index.php?page=tool&acts=hapus&id_tool=<?php echo $row['id'] ?>' class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php }
                 
                
                ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>