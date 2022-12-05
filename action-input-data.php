<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['Submit'])){

    // ambil data dari formulir

    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Email = $_POST['Email'];
    $Telp = $_POST['Telp'];

    // buat query
    $sql = "INSERT INTO user (Nama, Alamat, Email, Telp) VALUE ('$Nama', '$Alamat', '$Email', '$Telp')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>
<!-- 

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;


INSERT INTO `user` (`id`, `Nama`, `Alamat`, `Email`, `Telp`) VALUES
(1, 'Arum', 'Bandung', 'Cipaku','081222211344'); 
-->