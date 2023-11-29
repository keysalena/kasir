<!-- Content Wrapper. Contains page content -->

<head>
  <!-- Tambahkan referensi ke Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+68pd5KEW6F5wxc/mJrVFe+6p6cCw2jp5fpwe5ujl5gV6jG" crossorigin="anonymous">

  <!-- Tambahkan referensi ke Bootstrap JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-Nk2lGlu0vjU8I4arOF3n2P4Umzo8m/Ys6nJTgJj5Jqk7buirr9S5YDi5VeIo6A6i5" crossorigin="anonymous"></script>

  <!-- Tambahkan referensi ke jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      DATA ORDER
    </h1>
    <ol class="breadcrumb">
      <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
      <li class="active">DATA ORDER</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-primary">
          <div class="box-header">
            <button type="button" class="btn btn-primary" id="btnTambahOrder">
              Tambah Order
            </button>

          </div>
          <!-- Modal -->
          <div class="modal fade" id="tambahOrderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Order</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <!-- Form untuk menambahkan order -->
                  <form role="form" method="post" action="pages/order/tambah_proses.php">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="no_meja">NO MEJA</label>
                        <input type="text" name="no_meja" class="form-control" id="no_meja" placeholder="Nomor Meja" required>
                      </div>
                      <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']; ?>">
                      <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="box-body table-responsive">
            <table id="order" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NO MEJA</th>
                  <th>TANGGAL</th>
                  <th>NAMA USER</th>
                  <th>KETERANGAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>

                <?php
                include "conf/conn.php";
                $no = 0;
                $query = mysqli_query($koneksi, "SELECT `order`.*, user.nama_user FROM `order`
                INNER JOIN user ON `order`.id_user = user.id_user
                ORDER BY `order`.id_order DESC")
                  or die(mysqli_error($koneksi));

                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <tr>
                    <td><?php echo $no = $no + 1; ?></td>
                    <td><?php echo $row['no_meja']; ?></td>
                    <td><?php echo $row['tanggal']; ?></td>
                    <td><?php echo $row['nama_user']; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td>
                      <a href="index.php?page=ubah_order&id=<?= $row['id_order']; ?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
                      <a href="pages/order/hapus.php?id=<?= $row['id_order']; ?>" class="btn btn-danger" role="button" title="Hapus Data" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                        <i class="glyphicon glyphicon-trash"></i>
                    </td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#order').DataTable();
  });
</script>

<script>
  $(document).ready(function() {
    $('#btnTambahOrder').click(function() {
      $('#tambahOrderModal').modal('show');
    });
  });
</script>