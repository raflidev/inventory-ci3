<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah <?= $title ?></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form enctype="multipart/form-data" method="POST" action="<?= base_url('tbarangkeluar/tambah') ?>" autocomplete="off">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <label class="form-control-label" for="jumlah_keluar">Jumlah Keluar<span class="small text-danger">*</span></label>
                    <input type="text" id="jumlah_keluar" class="form-control" name="jumlah_keluar" placeholder="Jumlah Keluar">
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="id_user">User<span class="small text-danger">*</span></label>
                    <select type="text" id="id_user" class="form-control" name="id_user">
                      <?php foreach ($user as $user) : ?>
                        <option value="<?= $user->id_user ?>"><?= $user->nama_lengkap ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="id_user">Barang<span class="small text-danger">*</span></label>
                    <select type="text" id="id_barang" class="form-control" name="id_barang">
                      <?php foreach ($barang as $barang) : ?>
                        <option value="<?= $barang->id_barang ?>"><?= $barang->nama_barang ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="id_pelanggan">Pelanggan<span class="small text-danger">*</span></label>
                    <select type="text" id="id_pelanggan" class="form-control" name="id_pelanggan">
                      <?php foreach ($pelanggan as $pelanggan) : ?>
                        <option value="<?= $pelanggan->id_pelanggan ?>"><?= $pelanggan->nama ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>



<div class="row">

  <div class="col-lg-12 order-lg-1">
    <?php if ($this->session->flashdata('success')) : ?>
      <div class="alert alert-success" role="alert">
        <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php endif; ?>
    <div class="card shadow mb-4">

      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
      </div>



      <div class="card-body">
        <div class="mb-4">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah data
          </button>
        </div>
        <div class="table-responsive">
          <table class="display table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Jumlah keluar</th>
                <th>User</th>
                <th>Barang</th>
                <th>Pelanggan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Jumlah keluar</th>
                <th>User</th>
                <th>Barang</th>
                <th>Pelanggan</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($data as $data) : ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $data->jumlah_keluar ?></td>
                  <td><?= $data->nama_lengkap ?></td>
                  <td><?= $data->nama_barang ?></td>
                  <td><?= $data->nama ?></td>
                  <td>
                    <form action="<?= base_url('tbarangkeluar/hapus/'), $id . "/" . $data->id_trkeluar ?>" method="POST">
                      <?php if ($this->session->userdata('level') == 1) : ?>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                      <?php endif; ?>
                    </form>
                  </td>
                </tr>
                <?php $no++ ?>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>

</div>
</div>
<!-- /.container-fluid -->
<script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/backend/js/datatable.js"></script>
<script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>assets/backend/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url() ?>assets/backend/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url() ?>assets/backend/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url() ?>assets/backend/js/demo/chart-pie-demo.js"></script>
<script>
  $(document).ready(function() {
    $('#dataTable').DataTable();
  });
</script>