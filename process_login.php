<?php
session_start();
$servername = "localhost";
$username = "root";
$password = ""; // Sesuaikan dengan password MySQL Anda
$dbname = "restaurant";

// Koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mendapatkan data dari form login
$user = $_POST['username'];
$pass = md5($_POST['password']); // Enkripsi MD5

// Query untuk memeriksa login
$sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $row['username'];
    $_SESSION['role'] = $row['role'];
    header("Location: dashboard.php");
} else {
    echo "Login gagal. Username atau password salah.";
}
$conn->close();
?>