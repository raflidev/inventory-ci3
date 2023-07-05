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
        <form enctype="multipart/form-data" method="POST" action="<?= base_url('barangkeluar/tambah') ?>" autocomplete="off">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="POST">
            <div class="">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <label class="form-control-label" for="no_bukti">No Bukti<span class="small text-danger">*</span></label>
                    <input type="text" id="no_bukti" class="form-control" name="no_bukti" placeholder="No Bukti">
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="tgl_keluar">Tanggal keluar<span class="small text-danger">*</span></label>
                    <input type="date" id="tgl_keluar" class="form-control" name="tgl_keluar" placeholder="tgl_keluar">
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="pengurus">Pengurus<span class="small text-danger">*</span></label>
                    <input type="text" id="pengurus" class="form-control" name="pengurus" placeholder="Pengurus">
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="ket_keluar">Keterangan keluar<span class="small text-danger">*</span></label>
                    <input type="text" id="ket_keluar" class="form-control" name="ket_keluar" placeholder="Keterangan keluar">
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

<!-- Modal Edit -->
<div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="EditModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" method="POST" action="<?= base_url('barangkeluar/edit') ?>" autocomplete="off">
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="PUT">
          <div class="">
            <input type="hidden" id="id_edit" class="form-control" name="id_bkeluar">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <label class="form-control-label" for="no_bukti">No Bukti<span class="small text-danger">*</span></label>
                  <input type="text" id="no_bukti_edit" class="form-control" name="no_bukti" placeholder="No Bukti">
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="tgl_keluar">Tanggal keluar<span class="small text-danger">*</span></label>
                  <input type="date" id="tgl_keluar_edit" class="form-control" name="tgl_keluar" placeholder="tgl_keluar">
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="pengurus">Pengurus<span class="small text-danger">*</span></label>
                  <input type="text" id="pengurus_edit" class="form-control" name="pengurus" placeholder="Pengurus">
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="ket_keluar">Keterangan keluar<span class="small text-danger">*</span></label>
                  <input type="text" id="ket_keluar_edit" class="form-control" name="ket_keluar" placeholder="Keterangan keluar">
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
          <?php if ($this->session->userdata('level') != 3) : ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Tambah data
            </button>
          <?php endif ?>
        </div>
        <div class="table-responsive">
          <table class="display table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>No Bukti</th>
                <th>Tanggal keluar</th>
                <th>Pengurus</th>
                <th>Keterangan keluar</th>
                <?php if ($this->session->userdata('level') != 3) : ?>
                  <th>Aksi</th>
                <?php endif ?>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>No Bukti</th>
                <th>Tanggal keluar</th>
                <th>Pengurus</th>
                <th>Keterangan keluar</th>
                <?php if ($this->session->userdata('level') != 3) : ?>
                  <th>Aksi</th>
                <?php endif ?>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($barangkeluar as $data) : ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $data->no_bukti ?></td>
                  <td><?= $data->tgl_keluar ?></td>
                  <td><?= $data->pengurus ?></td>
                  <td><?= $data->ket_keluar ?></td>
                  <?php if ($this->session->userdata('level') != 3) : ?>
                    <td>
                      <form action="<?= base_url('barangkeluar/hapus/'), $data->id_bkeluar ?>" method="POST">
                        <a href="<?= base_url("/tbarangkeluar/index/$data->id_bkeluar") ?>" class="btn btn-info btn-sm">Isi Barang</a>
                        <button type="button" class="btn btn-warning btn-sm open_modal" data-toggle="modal" value="<?= $data->id_bkeluar ?>" data-target="#EditModal">
                          Edit
                        </button>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                      </form>
                    </td>
                  <?php endif ?>
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
<script>
  $(document).on('click', '.open_modal', function() {
    var url = "<?= base_url() ?>barangkeluar/get";
    var id = $(this).val();
    $.get(url + '/' + id, function(data) {
      //success data
      data = JSON.parse(data);
      console.log(data);
      $('#id_edit').val(data.id_bkeluar);
      $('#no_bukti_edit').val(data.no_bukti);
      $('#tgl_keluar_edit').val(data.tgl_keluar);
      $('#pengurus_edit').val(data.pengurus);
      $('#ket_keluar_edit').val(data.ket_keluar);
    })
  });
</script>