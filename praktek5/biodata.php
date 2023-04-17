<?php
    $nama = $_GET['nama'];
    $umur = $_GET['umur'];
    $tempatlahir = $_GET['tempatlahir'];
    $jnskelamin = $_GET['jnskelamin'];
    $alamat = $_GET['alamat'];
    $agama = $_GET['agama'];

    echo "<h2>Biodata Sederhana</h2>";
    echo "Nama = $nama"."<br>";
    echo "Umur = $umur"."<br>";
    echo "Tempat Lahir = $tempatlahir"."<br>";
    echo "Jenis Kelamin = $jnskelamin"."<br>";
    echo "Alamat = $alamat"."<br>";
    echo "Agama = $agama"."<br>";
?>