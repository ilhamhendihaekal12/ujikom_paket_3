<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "gallery");

// Pastikan request adalah metode GET dan parameter comment_id tersedia
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["comment_id"])) {
    // Ambil ID komentar yang akan dihapus dari parameter URL
    $comment_id = $_GET["comment_id"];

    // Query untuk menghapus komentar berdasarkan ID komentar
    $sql = "DELETE FROM commens WHERE commen_id = '$comment_id'";

    // Eksekusi query
    if (mysqli_query($conn, $sql)) {
        // Redirect kembali ke halaman sebelumnya setelah penghapusan berhasil
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        echo "Error deleting comment: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Menutup koneksi ke database
mysqli_close($conn);
?>
