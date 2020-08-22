<?php
if (isset($_POST['btn-addTransaksi'])) {
   $data = [
      "noResi"         => $_POST['noResi'],
      "namaBarang"     => $_POST['namaBarang'],
      "beratBarang"    => $_POST['beratBarang'],
      "jenisBarang"    => $_POST['jenisBarang'],
      "namaPengirim"   => $_POST['namaPengirim'],
      "kontakPengirim" => $_POST['kontakPengirim'],
      "namaPenerima"   => $_POST['namaPenerima'],
      "kontakPenerima" => $_POST['kontakPenerima'],
      "layanan"        => $_POST['layanan'],
      "ongkir"         => $_POST['ongkir'],
   ];

   $dataOngkir = getOngkirById($_POST['ongkir']);

   if ($_POST['layanan'] == 2) { //layanan YES
      $data["totalBiaya"] = $dataOngkir['biaya'] * 1.5;
   } else {
      $data["totalBiaya"] = $dataOngkir['biaya'];
   }

   $insert = addTransaksi($data);

   if ($insert) {
      addTrackingHistory($_POST['noResi']);
      notif("Data transaksi berhasil ditambah", 1);
      header("Location: ?page=transaksi");
   }
}
