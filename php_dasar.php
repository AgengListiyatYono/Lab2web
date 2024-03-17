<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Belajar PHP Dasar</h1>
     <?php
      echo("Hello World");
     ?>
    <h1>Menggunakan Variable</h1>
    <?php
    $nim = "312210082";
    $nama = 'Ageng Listiyat Yono';
     echo "NIM : " . $nim . "<br>";
    echo "Nama : $nama";
    ?>
    <br>
    </br>
    <?php
    echo 'Selamat Datang ' . $_GET['nama'];
    ?>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type ="text" name="nama">
        <input type ="submit" value="kirim">
    </form>
    <?php
    $gaji = 1000000;
    $pajak = 0.1;
    $thp = $gaji - ($gaji*$pajak);
    echo "Gaji sebelum pajak = Rp. $gaji <br>";
    echo "Gaji yang dibawa pulang = Rp. $thp";
    ?>
    <h3>kondisi if</h3>
    <?php
    $nama_hari = date("1");
    if ($nama_hari == "Sunday") {
        echo "Minggu";

    } elseif ($nama_hari == "Monday") {
        echo "Senin";
    } else {
        echo "Selasa";
    }
    ?>
    <h3>kondisi switch</h3>
    <?php
    $nama_hari = date ("1");
    switch ($nama_hari) {
        case "Sunday":
            echo "Minggu";
            break;
        case "Monday":
            echo "Senin";
            break;
        default:
            echo "Sabtu";
    }
    ?>
    <h3>Perulangan for</h3>
    <br></br>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    for ($i=1; $i<=10; $i++) {
        echo "Perulangan ke: " . $i . '<br />';
    }

    echo "Perulangan Menurun dari 10 ke 1 <br />";
    for ($i=10; $i>=1; $i--) {
        echo "Perulangan ke: " . $i . '<br />';

    }
    ?>
    
    <h3>Perulangan while</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10) {
        echo "Perulangan ke: " . $i. '<br />';
        $i++;
    }
    ?>

    <h3>Perulangan dowhile</h3>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    do {
        echo"Perulangan ke: " . $i . '<br />';
        $i++;
    } while ($i<=10);
    ?>
</body>
</html>