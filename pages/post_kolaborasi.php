<?php
// Pastikan Anda mengatur koneksi database sesuai dengan konfigurasi Anda
$servername = "localhost"; // Ganti sesuai dengan server Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "kopay_db"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Memproses data dari formulir jika ada request POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $message = $_POST['message'];

    // SQL untuk menyimpan data ke dalam tabel kolaborasi
    $sql = "INSERT INTO submissions (full_name, email, phone_number, message)
            VALUES ('$full_name', '$email', '$phone_number', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Jika data berhasil disimpan
        header('kolaborasi.php');

    } else {
        // Jika terjadi kesalahan dalam penyimpanan data
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi database
$conn->close();
?>
