<?php
    include "connection.php";
    $nama_pemesan = $_POST['nama_pemesan'];
    $nomor_identitas = $_POST['nomor_identitas'];
    $no_hp = $_POST['no_hp'];
    $id_bus = $_POST['id_bus'];
    $jadwal = $_POST['jadwal'];
    $penumpang_umum = (int) $_POST['penumpang_umum'];
    $penumpang_lansia = (int) $_POST['penumpang_lansia'];
    if($id_bus == "EC"){
        $harga = 10000;
    }
    else if($id_bus == "BS"){
        $harga = 30000;
    }
    else{
        $harga = 50000;
    }
    $diskon = ($harga * 10) / 100;
    $total_diskon = $harga - $diskon;
    $total_bayar = ($penumpang_umum * $harga) + ($penumpang_lansia * $total_diskon);
    $insert = "INSERT INTO booking(nama_pemesan, nomor_identitas, no_hp, id_bus, jadwal, penumpang_umum, penumpang_lansia, total_bayar) VALUES('".$nama_pemesan."', '".$nomor_identitas."', '".$no_hp."', '".$id_bus."', '".$jadwal."', '".$penumpang_umum."', '".$penumpang_lansia."', '".$total_bayar."')";
    $query_insert = $koneksi->query($insert);
    if($query_insert){
        header("location: ../views/form_booking.php");
    }
    else{
        echo mysqli_error($koneksi);
    }
?>