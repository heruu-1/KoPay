<?php

// load file config.php
include("config.php");
  if (isset($_POST["save_buku"])) {
    // issset digunakan untuk mengecek
    // apakah ketika mengakses file ini, dikirimkan
    // data dengan nama "save_buku" dengan method post

    // tampung data yang dikirimkan
    $action = $_POST["action"];
    $kode_biji = $_POST["kode_biji"];
    $judul = $_POST["judul"];
    $tahun = $_POST["tahun"];
    $harga = $_POST["harga"];
    $stok = $_POST["stok"];

    // menampung file image
    if (!empty($_FILES['image']['name'])) {
      $path = pathinfo($_FILES["image"]["name"]);
      // get extension
      $extension = $path["extension"];

      // merangkai nama file
      $filename = $kode_biji . "-" . rand(1,1000). "." . $extension;
      // generate file name
    }

    // cek aksinya
// Add data
    if ($action == "insert") {
      // Sintaks untuk Insert
      $sql = "insert into biji_kopi values
              ('$kode_biji','$judul','$tahun','$harga','$stok','$filename')";

      // upload file process
      move_uploaded_file($_FILES["image"]["tmp_name"],"image/".$filename);

      // eksekusi perintah sql-nya
      mysqli_query($connect, $sql);

// Update Data
    } else if ($action == "update") {
      if (!empty($_FILES["image"]["name"])) {

        // mendapatkan nama file
        $path = pathinfo($_FILES["image"]["name"]);

        //  mendapatkan extension? dari file
        $extension = $path["extension"];

        // rewrite nama file
        $filename = $kode_biji . "-" . rand(1,1000) . "." . $extension;

        // mengambil data yang akan diedit
        $sql = "select * from biji_kopi
                where kode_biji='$kode_biji'";
        $query = mysqli_query($connect, $sql);
        $hasil = mysqli_fetch_array($query);

        if (file_exists("image/".$hasil["image"])) {
          // menghapus data sebelumnya
          unlink("image/".$hasil["image"]);
        }

        move_uploaded_file($_FILES["image"]["tmp_name"], "image/".$filename);

        // Update semua
        $sql = "update biji_kopi set
                judul='$judul',
                tahun='$tahun',
                harga='$harga',
                stok='$stok',
                image='$filename'
                where kode_biji='$kode_biji'";
        } else {
          // Update Tanpa File
          $sql = "update biji_kopi set
                  judul='$judul',
                  tahun='$tahun',
                  harga='$harga',
                  stok='$stok'
                  where kode_biji='$kode_biji'";
        }

      // eksekusi query
      mysqli_query($connect, $sql);

    }

    header("location:buku.php");

  }

// Delete Data
  if (isset($_GET["hapus"])) {
    $kode_buku = $_GET["kode_buku"];

    $sql = "select * from buku
            where kode_buku='$kode_buku'";

    $query = mysqli_query($connect, $sql);

    $hasil = mysqli_fetch_array($query);

    $sql = "delete from buku
            where kode_buku='$kode_buku'";

    if (file_exists("image/".$hasil["image"])) {
      unlink("image/".$hasil["image"]);
    }

    mysqli_query($connect, $sql);

    header("location:buku.php");
  }
