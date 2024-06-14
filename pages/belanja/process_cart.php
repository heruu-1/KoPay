<?php
  session_start();
  include("config.php");


  if (!isset($_SESSION["id_customer"])) {
    // Jika belum login, arahkan ke halaman login
    header("location: auth/registrasi_customer.php");
    exit(); // Pastikan untuk keluar dari skrip ini setelah melakukan redirect
  }
// menambah barang ke cart
  if (isset($_POST["add_to_cart"])) {
    // tampung kode_buku dan jumlah Beli
    $kode_biji = $_POST["kode_biji"];
    $jumlah_beli = $_POST["jumlah_beli"];

    // ambil data buku dari database sesuai
    // dengan kode buku yang dipilih
    $sql = "select * from biji_kopi where kode_biji='$kode_biji'";
    $query = mysqli_query($connect, $sql); // Eksekusi sintaks sqlnya
    $biji = mysqli_fetch_array($query); // menampung data dari database ke array

    // membuat array
    $item = [
      "kode_biji" => $biji["kode_biji"],
      "judul" => $biji["judul"],
      "image" => $biji["image"],
      "harga" => $biji["harga"],
      "jumlah_beli" => $jumlah_beli
    ];

    // memasukkan item ke cart
    array_push($_SESSION["cart"], $item);

    // kembali ke tampilan utama
    header("location:index.php");
  }

// menghapus barang pada $cart
  if (isset($_GET["hapus"])) {
    // tampung data kode_buku yang dihapus
    $kode_biji = $_GET["kode_biji"];

    // cari index cart sesuai dengan koed_buku yang dihapus
    $index = array_search(
      $kode_biji, array_column($_SESSION["cart"],"kode_biji")
    );

    // hapus barang pada cart
    array_splice($_SESSION["cart"], $index, 1);

    // redirect ke cart.php
    header("location:cart.php");
  }

// checkout
if (isset($_GET["checkout"])) {
  // Memasukkan data pada cart ke database (tabel transaksi dan detail transaksi)
  // transaksi -> id_transaksi, tgl, id_customer
  // detail -> id_transaksi, kode_buku, jumlah, harga_beli

  $id_transaksi = "ID".rand(1,10000);
  $tgl = date("Y-m-d H:i:s"); // Current time // Format default DATETIME di sql
  $id_customer = $_SESSION["id_customer"];

  // buat Query insert ke tabel transaksi
  $sql = "insert into transaksi values ('$id_transaksi','$tgl','$id_customer')";
  mysqli_query($connect, $sql); // eksekusi dengan mysqli_query

  // Memasukkan data cart ke database satu persatu dengan foreach
  foreach ($_SESSION["cart"] as $cart) {
    $kode_biji = $cart["kode_biji"];
    $jumlah = $cart["jumlah_beli"];
    $harga = $cart["harga"];

    // Buat query insert ke tabel detail
    $sql = "insert into detail_transaksi 
            values ('$id_transaksi','$kode_biji','$jumlah','$harga')";
    mysqli_query($connect, $sql);

    $sql2 = "update biji_kopi set stok = stok - $jumlah
            where kode_biji = '$kode_biji'";
    mysqli_query($connect, $sql2);
  }
  // kosongkan cart-nya
  $_SESSION["cart"] = array();
  // redirect
  header("location:transaksi.php");
}
 ?>
