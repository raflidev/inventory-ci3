<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

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

          <form enctype="multipart/form-data" method="POST" action="<?= base_url('laporan/proses') ?>" autocomplete="off">
            <div class="modal-body">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="hidden" name="_method" value="POST">
              <div class="">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group focused">
                      <label class="form-control-label" for="jenis_laporan">Jenis Laporan<span class="small text-danger">*</span></label>
                      <select type="text" id="jenis_laporan" class="form-control" name="jenis_laporan">
                        <option value="Daftar Barang">Daftar Barang</option>
                        <option value="Persediaan Barang">Persediaan Barang</option>
                        <option value="Barang Masuk">Barang Masuk</option>
                        <option value="Barang Keluar">Barang Keluar</option>
                        <option value="Permintaan Barang">Permintaan Barang</option>
                      </select>
                    </div>
                    <div class="row">
                      <div class="form-group focused col-6">
                        <label class="form-control-label" for="tgl_mulai">Tanggal Mulai<span class="small text-danger">*</span></label>
                        <input type="date" id="tgl_mulai" class="form-control" name="tgl_mulai" placeholder="tgl_mulai">
                      </div>
                      <div class="form-group focused col-6">
                        <label class="form-control-label" for="tgl_akhir">Tanggal Akhir<span class="small text-danger">*</span></label>
                        <input type="date" id="tgl_akhir" class="form-control" name="tgl_akhir" placeholder="tgl_akhir">
                      </div>
                    </div>
                    <div class="form-group focused">
                      <label class="form-control-label" for="kategori">Kategori<span class="small text-danger">*</span></label>
                      <select type="text" id="kategori" class="form-control" name="kategori">
                        <option value="semua">-- Semua --</option>
                        <?php foreach ($barang as $b) : ?>
                          <option value="<?= $b->kategori ?>"><?= $b->kategori ?></option>
                        <?php endforeach ?>
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
<script src="<?= base_url() ?>assets/backend/js/demo/chart-pie-demo.js"></script>`