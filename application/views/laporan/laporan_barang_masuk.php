<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <style>
    #table {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
      font-size: 13px;
    }

    #table td,
    #table th {
      border: 1px solid #ddd;
      padding: 3px;
    }

    #table tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #table tr:hover {
      background-color: #ddd;
    }

    #table th {
      padding-top: 10px;
      text-align: left;
      background-color: #4d4d4d;
      color: white;
    }

    #ttd div {
      margin-left: 420px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div style="text-align:center;font-size:20px">
    <h3><?= $title ?></h3>
    <?php
    if (isset($tgl_mulai) && isset($tgl_akhir)) {
      if ($tgl_mulai == $tgl_akhir) {
        echo "<p style='font-size:16px'>Periode " . date("d-m-Y", strtotime($tgl_mulai)) . "</p>";
      } else {
        echo "<p style='font-size:16px'>Periode " . date("d-m-Y", strtotime($tgl_mulai)) . " s/d " . date("d-m-Y", strtotime($tgl_akhir)) . "</p>";
      }
    }
    ?>
  </div>
  <table id="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>No Bukti</th>
        <th>Tanggal</th>
        <th>Nama Barang</th>
        <th>Nama Pemasok</th>
        <th>Jumlah</th>
        <th>Satuan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      foreach ($data as $data) { ?>
        <tr>
          <td scope="row"><?= $no ?></td>
          <!-- <td style="word-break:break-all; word-wrap:break-word"><?= date("d-m-Y", strtotime($data['tanggalsurat_suratkeluar'])) ?></td> -->
          <td style="word-break:break-all; word-wrap:break-word"><?= $data['no_bukti'] ?></td>
          <td style="word-break:break-all; word-wrap:break-word"><?= $data['tgl_masuk'] ?></td>
          <td style="word-break:break-all; word-wrap:break-word"><?= $data['nama_barang'] ?></td>
          <td style="word-break:break-all; word-wrap:break-word"><?= $data['nama'] ?></td>
          <td style="word-break:break-all; word-wrap:break-word"><?= $data['jumlah_masuk'] ?></td>
          <td style="word-break:break-all; word-wrap:break-word"><?= $data['satuan'] ?></td>
        </tr>
      <?php
        $no++;
      } ?>
    </tbody>
  </table>
</body>

</html>