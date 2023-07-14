<?php
$koneksi = new mysqli('localhost', 'root', '', 'farismagrib')
or die(mysqli_error($koneksi));


if(isset($_POST['simpan'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $noTelp = $_POST['noTelp'];
    $tgLahir = $_POST['tgLahir'];
    $keterangan = $_POST['keterangan'];
    $koneksi->query("INSERT INTO vaksinasi (idPasien, nmPasien, jk, alamat, noTelp, tgLahir, keterangan) values ('$idPasien', '$nmPasien', '$jk', '$alamat', '$noTelp', '$tgLahir', '$keterangan')");

    header('location:pasien.php');
}


if (isset($_GET['idPasien'])) {
    $idPasien = $_GET['idPasien'];
    $koneksi->query("DELETE FROM vaksinasi where idPasien = '$idPasien'");
    header("location:pasien.php");
} 

if(isset($_POST['edit'])) {
    $idPasien = $_POST['idPasien'];
    $nmPasien = $_POST['nmPasien'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $noTelp = $_POST['noTelp'];
    $tgLahir = $_POST['tgLahir'];
    $keterangan = $_POST['keterangan'];

    $koneksi->query("UPDATE vaksinasi SET idPasien='$idPasien', nmPasien='$nmPasien', jk='$jk', alamat='$alamat', noTelp='$noTelp', tgLahir='$tgLahir', keterangan='$keterangan' WHERE idPasien = '$idPasien'");
    header("location:pasien.php");
}
?>