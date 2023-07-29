<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Profil PT Nippisun Indonesia</h1>

  <div class="row">

    <div class="col-lg-12 order-lg-1">
      <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php endif; ?>
      <div class="card shadow mb-4">

        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">PT Nippisun Indonesia</h6>
        </div>



        <div class="card-body">
          <div class="mb-4">
            <img src="<?= base_url('/assets/backend/img/logo.jpg') ?>" width="400" alt="" srcset="">
          </div>
          <div>
            <div class="h3 text-black">Sejarah Perusahaan</div>
            <p>Perusahaan ini didirikan pada tahun 1925 atas nama “Miwa Concern” untuk produksi dan pemasaran pigmen, dan sejak itu telah mengalami banyak perubahan organisasi. Kami terus berusaha untuk meningkatkan kualitas dan penggunaan produk selama bertahun-tahun dan telah membuat kemajuan besar. Dengan perkembangan resin sintesis khususnya setelah perang dunia II, studi dan pengembangan pewarnaan resin menjadi luar biasa misalnya pengembangan bahan pewarna yang dikenal kulit PVC, resin termoplastik, kulit sintetis dan bahan kemasaan.</p>
            <p>Seiring dengan perkembangan industry plastic, pada tahun 1979 Nippon Pigment merambah bisnis luar negeri sebagai perusahaan global. Selama bertahun-tahun kami telah mencapai teknologi peracikan dan kelompok kami telah mengumpulkan teknologi inti dan telah mendistribusikan teknologi tersebut serta teknologi produksi di seluruh dunia.</p>
          </div>
          <div>
            <div class="h3 text-black">Sejarah Perusahaan</div>
            <div>
              <div>Nama Perusahaan : PT Nippisun Indonesia</div>
              <div>Nama Perusahaan Pusat : Nippon Pigment</div>
              <div>Jenis : Perusahaan Terbatas (PT)</div>
              <div>Alamat : Jl. Sulawesi I</div>
              <div>Provinsi : Jawa Barat</div>
              <div>Kabupaten : Bekasi</div>
              <div>Kelurahan : Gandamekar</div>
              <div>Kecamatan : Cikarang Barat</div>
              <div>Pemilik : Koichi Sasahara</div>
              <div>Telepon : 021-8980018 </div>
            </div>

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
    var url = "<?= base_url() ?>pemasok/get";
    var id = $(this).val();
    $.get(url + '/' + id, function(data) {
      //success data
      data = JSON.parse(data);
      console.log(data.id_pemasok);
      $('#id_edit').val(data.id_pemasok);
      $('#nama_edit').val(data.nama);
      $('#alamat_edit').val(data.alamat);
      $('#kodepos_edit').val(data.kodepos);
      $('#no_hp_edit').val(data.no_hp);
      $('#namakontak_edit').val(data.namakontak);
      $('#email_edit').val(data.email);
    })
  });
</script>