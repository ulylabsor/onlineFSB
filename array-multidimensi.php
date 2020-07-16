<?php

$data = [
   1 => [
      "nim"      => "12540987",
      'nama'     => "Budi Handoyo",
      'umur'     => 23,
      'jk'       => "Pria",
      'jurusan'  => "Sistem Informasi",
      'fakultas' => 'Fasilkom',
      'ipk'      => 3.4,
      'email'    => "budi@gmail.com",
      'pembimbing' => [
         'pembimbing1' => 'Fenando, M.Kom',
         'pembimbing2' => 'Dr. Syaiful, ST., M.Kom',
      ]
   ],
   [
      "nim"      => "125309212",
      'nama'     => "Ayu permata",
      'umur'     => 20,
      'jk'       => "Wanita",
      'jurusan'  => "Jurnalistik",
      'fakultas' => 'Fisip',
      'ipk'      => 3.8,
      'email'    => "ayu@gmail.com",
      'pembimbing' => [
         'pembimbing1' => 'Fenando, M.Kom',
         'pembimbing2' => 'Ani M.Kom',
      ]
   ],
   [
      "nim"      => "125409534",
      'nama'     => "Mella",
      'umur'     => 18,
      'jk'       => "Wanita",
      'jurusan'  => "Teknik Informatika",
      'fakultas' => 'Fasilkom',
      'ipk'      => 3.8,
      'email'    => "mella@gmail.com",
      'pembimbing' => [
         'pembimbing1' => 'Fenando, M.Kom',
         'pembimbing2' => 'Ani M.Kom',
      ]
   ],
];

echo $data[1]['nama'] . "<br>";
echo $data[2]['nama'];
echo "<hr>";

$banyakData = count($data);

for ($i = 1; $i <= $banyakData; $i++) {
   echo $data[$i]['nama'] . "<br>";
}

echo "<hr>";

foreach ($data as $mhs) {
   echo $mhs['nama'] . "<br>";
   echo $mhs['pembimbing']['pembimbing1'] . "<br>";
}
