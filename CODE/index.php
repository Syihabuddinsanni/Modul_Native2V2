<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota";

$res = mysqli_query($koneksi, $sql);

$anggota = array();

while ($data = mysqli_fetch_assoc($res)) {
    $anggota[] = $data;
}
include '../aset/header.php';
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
          <div class="card">
            <div class="card-header">
              <h2 class="card-title"><i class="fas fa-edit"></i>Data Anggota</h2>
            </div>
            <div class="card-body">
              <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
             
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  foreach ($anggota as $p ) { ?>

                    <tr>
                      <th scope="row"><?= $no ?></th>
                      <td><?= $p['nama'] ?></th>
                            <td><?= $p['kelas'] ?></td>
							
                        
                            <td>
                              <a href="#" class="badge badge-primary">detail</a>
                              <a href="#" class="badge badge-secondary">EDIT</a>
                              <a href="#" class="badge badge-success">Hapus</a>
                            </td>
                          </tr>

                          <?php
                          $no++;
                        }
                        ?>

                </tbody>
              </table>
            </div>
          </div>
		  <br>
			<h5><a class="fas fa-user-plus mr-2" href="http://localhost/siperpus/anggota/tambah.php">Tambah Anggota</a></h5>
			

		</div>
    </div>
</div>
<?php
include '../aset/footer.php';
?>