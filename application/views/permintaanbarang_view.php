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
        <form enctype="multipart/form-data" method="POST" action="<?= base_url('permintaanbarang/tambah') ?>" autocomplete="off">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="POST">
            <div class="">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <label class="form-control-label" for="tgl_permintaan">Tanggal Permintaan<span class="small text-danger">*</span></label>
                    <input type="date" id="tgl_permintaan" class="form-control" name="tgl_permintaan" placeholder="Tanggal Permintaan">
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="nama_peminta">Nama Peminta<span class="small text-danger">*</span></label>
                    <input type="text" id="nama_peminta" class="form-control" name="nama_peminta" placeholder="Nama Peminta">
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="jabatan_permintaan">Jabatan Permintaan<span class="small text-danger">*</span></label>
                    <input type="text" id="jabatan_permintaan" class="form-control" name="jabatan_permintaan" placeholder="Jabatan Permintaan">
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="ket_peminta">Keterangan Peminta<span class="small text-danger">*</span></label>
                    <input type="text" id="ket_peminta" class="form-control" name="ket_peminta" placeholder="Keterangan Peminta">
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
      <form enctype="multipart/form-data" method="POST" action="<?= base_url('permintaanbarang/edit') ?>" autocomplete="off">
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="PUT">
          <div class="">
            <input type="hidden" id="id_edit" class="form-control" name="id_permintaan">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <label class="form-control-label" for="tgl_permintaan">Tanggal Permintaan<span class="small text-danger">*</span></label>
                  <input type="date" id="tgl_permintaan_edit" class="form-control" name="tgl_permintaan" placeholder="Tanggal Permintaan">
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="nama_peminta">Nama Peminta<span class="small text-danger">*</span></label>
                  <input type="text" id="nama_peminta_edit" class="form-control" name="nama_peminta" placeholder="Nama Peminta">
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="jabatan_permintaan">Jabatan Permintaan<span class="small text-danger">*</span></label>
                  <input type="text" id="jabatan_permintaan_edit" class="form-control" name="jabatan_permintaan" placeholder="Jabatan Permintaan">
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="ket_peminta">Keterangan Peminta<span class="small text-danger">*</span></label>
                  <input type="text" id="ket_peminta_edit" class="form-control" name="ket_peminta" placeholder="Keterangan Peminta">
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="status">Keterangan Peminta<span class="small text-danger">*</span></label>
                  <select name="status" id="status_edit" class="form-control">
                    <option value="0">Belum disetujui</option>
                    <option value="1">Diterima</option>
                    <option value="2">Ditolak</option>
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
                <th>Tanggal Permintaan</th>
                <th>Nama Peminta</th>
                <th>Jabatan Permintaan</th>
                <th>Keterangan Peminta</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Tanggal Permintaan</th>
                <th>Nama Peminta</th>
                <th>Jabatan Permintaan</th>
                <th>Keterangan Peminta</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($permintaanbarang as $data) : ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $data->tgl_permintaan ?></td>
                  <td><?= $data->nama_peminta ?></td>
                  <td><?= $data->jabatan_permintaan ?></td>
                  <td><?= $data->ket_peminta ?></td>
                  <td>
                    <?php if ($data->status == 0) : ?>
                      <span class="badge badge-warning">Belum disetujui</span>
                    <?php elseif ($data->status == 1) : ?>
                      <span class="badge badge-success">Diterima</span>
                    <?php elseif ($data->status == 2) : ?>
                      <span class="badge badge-danger">Ditolak</span>
                    <?php endif; ?>
                  </td>
                  <td>
                    <form action="<?= base_url('permintaanbarang/hapus/'), $data->id_permintaan ?>" method="POST">
                      <?php if ($this->session->userdata('level') == 2 && !($data->status == 1 || $data->status == 2)) : ?>
                        <button type="button" class="btn btn-warning btn-sm open_modal" data-toggle="modal" value="<?= $data->id_permintaan ?>" data-target="#EditModal">
                          Edit
                        </button>
                      <?php endif; ?>
                      <?php if ($this->session->userdata('level') == 1) : ?>
                        <button type="button" class="btn btn-warning btn-sm open_modal" data-toggle="modal" value="<?= $data->id_permintaan ?>" data-target="#EditModal">
                          Edit
                        </button>
                      <?php endif; ?>
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
<script>
  $(document).on('click', '.open_modal', function() {
    var url = "<?= base_url() ?>permintaanbarang/get";
    var id = $(this).val();
    $.get(url + '/' + id, function(data) {
      //success data
      data = JSON.parse(data);
      console.log(data.id_permintaan);
      $('#id_edit').val(data.id_permintaan);
      $('#tgl_permintaan_edit').val(data.tgl_permintaan);
      $('#nama_peminta_edit').val(data.nama_peminta);
      $('#jabatan_permintaan_edit').val(data.jabatan_permintaan);
      $('#ket_peminta_edit').val(data.ket_peminta);
      $('#status_edit').val(data.status);
    })
  });
</script>