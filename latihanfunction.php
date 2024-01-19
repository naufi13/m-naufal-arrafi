<?php
$namaLengkap = "Muhammad naufal arrafi";
$kelas = "X RPL 2";
$umur = "16 tahun";
$tempat_tanggalLahir = "Jakarta ,12 juni 2007";
$no = "0896 3630 6869";
$alamat = "Jalan mangga besar 13,gang tahu ";


function biodata(){
    global $namaLengkap, $umur, $kelas, $tempat_tanggalLahir, $no, $alamat;
    echo "Nama Lengkap = $namaLengkap <br/>";
    echo "Umur = $umur <br/>";
    echo "Kelas = $kelas <br/>";
      echo "Tempat/Tanggal lahir = $tempat_tanggalLahir <br/>";
      echo "No WhatsApp = $no <br/>";
      echo "Alamat = $alamat <br/>";
}

echo biodata();


?>