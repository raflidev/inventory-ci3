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
        <form enctype="multipart/form-data" method="POST" action="<?= base_url('stokbarang/tambah') ?>" autocomplete="off">
          <div class="modal-body">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="_method" value="POST">
            <div class="">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group focused">
                    <label class="form-control-label" for="id_barang">Barang<span class="small text-danger">*</span></label>
                    <select class="form-control" name="id_barang" id="id_barang">
                      <?php foreach ($barang as $data) : ?>
                        <option value="<?= $data->id_barang ?>"><?= $data->id_barang . " - " . $data->nama_barang ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="stok_barang">Stok Barang<span class="small text-danger">*</span></label>
                    <input type="number" id="stok_barang" class="form-control" name="stok_barang" placeholder="Stok Barang">
                  </div>
                  <div class="form-group focused">
                    <label class="form-control-label" for="stok_minimum">Stok Minimum<span class="small text-danger">*</span></label>
                    <input type="number" id="stok_minimum" class="form-control" name="stok_minimum" placeholder="Stok Minimum">
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
      <form enctype="multipart/form-data" method="POST" action="<?= base_url('stokbarang/edit') ?>" autocomplete="off">
        <div class="modal-body">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="_method" value="PUT">
          <div class="">
            <input type="hidden" id="id_edit" class="form-control" name="id_persediaan">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group focused">
                  <label class="form-control-label" for="stok_barang">Stok Barang<span class="small text-danger">*</span></label>
                  <input type="number" id="stok_barang_edit" class="form-control" name="stok_barang" placeholder="Stok Barang">
                </div>
                <div class="form-group focused">
                  <label class="form-control-label" for="stok_minimum">Stok Minimum<span class="small text-danger">*</span></label>
                  <input type="number" id="stok_minimum_edit" class="form-control" name="stok_minimum" placeholder="Stok Minimum">
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
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Satuan</th>
                <th>Gudang</th>
                <th>Rak</th>
                <th>Keterangan</th>
                <th>Stok Barang</th>
                <th>Stok Minimum</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jenis</th>
                <th>Merk</th>
                <th>Satuan</th>
                <th>Gudang</th>
                <th>Rak</th>
                <th>Keterangan</th>
                <th>Stok Barang</th>
                <th>Stok Minimum</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
            <tbody>
              <?php $no = 1;
              foreach ($stokbarang as $data) : ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $data->nama_barang ?></td>
                  <td><?= $data->jenis ?></td>
                  <td><?= $data->merk ?></td>
                  <td><?= $data->satuan ?></td>
                  <td><?= $data->gudang ?></td>
                  <td><?= $data->rak ?></td>
                  <td><?= $data->keterangan ?></td>
                  <td><?= $data->stok_barang ?></td>
                  <td><?= $data->stok_minimum ?></td>
                  <td>
                    <form action="<?= base_url('stokbarang/hapus/'), $data->id_persediaan ?>" method="POST">
                      <button type="button" class="btn btn-warning btn-sm open_modal" data-toggle="modal" value="<?= $data->id_persediaan ?>" data-target="#EditModal">
                        Edit
                      </button>
                      <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
    var url = "<?= base_url() ?>stokbarang/get";
    var id = $(this).val();
    $.get(url + '/' + id, function(data) {
      //success data
      data = JSON.parse(data);
      console.log(data);
      $('#id_edit').val(data.id_persediaan);
      $('#stok_barang_edit').val(data.stok_barang);
      $('#stok_minimum_edit').val(data.stok_minimum);
    })
  });
</script>