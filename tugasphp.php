<!DOCTYPE html>
<html>
<head>
    <title>Hitung Umur</title>
</head>
<body>

<h2>Masukkan Informasi Anda</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nama: <input type="text" name="nama"><br>
    Tanggal Lahir: <input type="date" name="tanggal_lahir"><br>
    Pekerjaan: <input type="text" name="pekerjaan"><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form
    $nama = $_POST['nama'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $pekerjaan = $_POST['pekerjaan'];

    // Menghitung umur
    $umur = date_diff(date_create($tanggal_lahir), date_create('now'))->y;

    // Menampilkan output
    echo "<h2>Hasil:</h2>";
    echo "Nama: " . $nama . "<br>";
    echo "Tanggal Lahir: " . $tanggal_lahir . "<br>";
    echo "Pekerjaan: " . $pekerjaan . "<br>";
    echo "Umur: " . $umur . " tahun";
}
?>

</body>
</html>