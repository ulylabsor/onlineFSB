<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Jekyll v4.0.1">
   <title>Challange 2</title>

   <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

   <!-- Bootstrap core CSS -->
   <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   <!-- Favicons -->
   <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
   <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
   <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
   <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
   <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
   <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
   <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
   <meta name="theme-color" content="#563d7c">


   <style>
      .bd-placeholder-img {
         font-size: 1.125rem;
         text-anchor: middle;
         -webkit-user-select: none;
         -moz-user-select: none;
         -ms-user-select: none;
         user-select: none;
      }

      @media (min-width: 768px) {
         .bd-placeholder-img-lg {
            font-size: 3.5rem;
         }
      }
   </style>
   <!-- Custom styles for this template -->
   <link href="https://getbootstrap.com/docs/4.5/examples/checkout/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">
   <div class="container">
      <div class="py-5 text-center">
         <h2>Challange 2</h2>

      </div>
      <div class="row justify-content-center">
         <div class="col-md-8 order-md-1">
            <h4 class="mb-3">Data Barang</h4>
            <form class="needs-validation" method="POST" action="">
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <label for="namaBarang">Nama Barang</label>
                     <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="jenisBarang">Jenis Barang</label>
                     <select class="form-control" name="jenisBarang" id="jenisBarang">
                        <option value="Elektronik">Elektronik</option>
                        <option value="ATK">ATK</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Material">Material</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6 mb-3">
                     <label for="hargaSatuan">Harga Satuan</label>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text">Rp.</span>
                        </div>
                        <input type="number" class="form-control" id="hargaSatuan" name="hargaSatuan" placeholder="Harga Satuan" required>
                     </div>
                  </div>
                  <div class="col-md-6 mb-3">
                     <label for="jumlahBeli">Jumlah Beli</label>
                     <input type="number" class="form-control" id="jumlahBeli" name="jumlahBeli" placeholder="Jumlah Beli" required>
                  </div>
               </div>

               <hr class="mb-4">
               <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnProses">Continue to checkout</button>
            </form>
         </div>
      </div>
   </div>


   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script>
      window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
   </script>
   <script src="https://getbootstrap.com/docs/4.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>
   <script src="https://getbootstrap.com/docs/4.5/examples/checkout/form-validation.js"></script>
</body>

</html>

<?php
if (isset($_POST['btnProses'])) {
   $namaBarang  = $_POST['namaBarang'];
   $jenisBarang = $_POST['jenisBarang'];
   $hargaSatuan = $_POST['hargaSatuan'];
   $jumlahBeli  = $_POST['jumlahBeli'];

   $totalbayar         = $hargaSatuan * $jumlahBeli;

   if ($totalbayar > 100000 && $totalbayar <= 150000) {
      $dapatDiskon        = '30%';
      $diskon             = $totalbayar * 0.30;
   } else if ($totalbayar > 150000 && $totalbayar <= 200000) {
      $dapatDiskon        = '40%';
      $diskon             = $totalbayar * 0.40;
   } else if ($totalbayar > 200000 && $totalbayar <= 300000) {
      $dapatDiskon        = '50%';
      $diskon             = $totalbayar * 0.50;
   } else if ($totalbayar > 300000) {
      $dapatDiskon        = 'Maksimum Diskon 150rb';
      $diskon             = 150000;
   } else {
      $dapatDiskon        = '0';
      $diskon = 0;
   }

   $totalsetelahdiskon = $totalbayar - $diskon;
   $bayar              = 13000000;
   $kembalian          = $bayar - $totalsetelahdiskon;
?>

   <div class="row justify-content-center">
      <div class="col-md-4">
         <small>
            <table class="table table-striped table-bordered table-hover">
               <tr>
                  <th class="p-2">Nama Barang</th>
                  <td class="p-2"><?= $namaBarang ?></td>
               </tr>
               <tr>
                  <th class="p-2">Jenis Barang</th>
                  <td class="p-2"><?= $jenisBarang ?></td>
               </tr>
               <tr>
                  <th class="p-2">Harga Satuan</th>
                  <td class="p-2">Rp. <?= number_format($hargaSatuan, 0, ',', '.') ?>,-</td>
               </tr>
               <tr>
                  <th class="p-2">Jumlah Beli</th>
                  <td class="p-2"><?= $jumlahBeli ?></td>
               </tr>
               <tr>
                  <th class="p-2">Total Bayar</th>
                  <td class="p-2">Rp. <?= number_format($totalbayar, 0, ',', '.') ?>,-</td>
               </tr>
               <tr>
                  <th class="p-2">Diskon</th>
                  <td class="p-2">Rp. <?= number_format($diskon, 0, ',', '.') ?>,- (<?= $dapatDiskon ?>)</td>
               </tr>
               <tr>
                  <th class="p-2">Total Setelah Diskon</th>
                  <td class="p-2">Rp. <?= number_format($totalsetelahdiskon, 0, ',', '.') ?>,-</td>
               </tr>
               <tr>
                  <th class="p-2">Bayar</th>
                  <td class="p-2">Rp. <?= number_format($bayar, 0, ',', '.') ?>,-</td>
               </tr>
               <tr>
                  <th class="p-2">Kembalian</th>
                  <td class="p-2">Rp. <?= number_format($kembalian, 0, ',', '.') ?>,-</td>
               </tr>
            </table>
         </small>
      </div>
   </div>

<?php
}
?>