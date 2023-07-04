        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">BARANG</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang ?></div>
                    </div>
                    <div class="col-auto">

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">PERMINTAAN BARANG</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $permintaan_barang ?></div>
                    </div>
                    <div class="col-auto">

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">BARANG MASUK</div>
                      <div class="h5 mb-0 font-weight-bold text-info-800"><?= $barang_masuk ?></div>
                    </div>
                    <div class="col-auto">

                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">BARANG KELUAR</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $barang_keluar ?></div>
                    </div>
                    <div class="col-auto">

                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="col-6">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
              </div>
              <div class="card-body">
                <div class="chart-bar">
                  <canvas id="myChart"></canvas>
                </div>
              </div>
            </div>
          </div>


        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <!-- Bootstrap core JavaScript-->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
        <script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?= base_url() ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url() ?>assets/backend/js/sb-admin-2.min.js"></script>

        <script>
          const ctx = document.getElementById('myChart');

          new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['Barang', 'Pemintaan', 'Barang Masuk', 'Barang Keluar'],
              datasets: [{
                label: 'Jumlah',
                data: [<?= $barang ?>, <?= $permintaan_barang ?>, <?= $barang_masuk ?>, <?= $barang_keluar ?>],
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        </script>