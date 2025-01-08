<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $kota = $_POST['kota'];

    $sql = "INSERT INTO mahasiswa (npm, nama, kota) VALUES ('$npm', '$nama', '$kota')";
    if (mysqli_query($conn, $sql)) {
        header('location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <h1>Form Pedaftaran</h1>
        <form action="" method="post">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">NPM</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="text" name="npm" placeholder="input npm" type="text" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa fa-address-book"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <div class="input-group">
                        <input id="text1" name="nama" placeholder="Input Nama" type="text" class="form-control">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fa fa-address-book-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Kota</label>
                <div class="col-8">
                    <select id="select" name="kota" class="custom-select">
                        <option value="Bandar Lampung">Bandar Lampung</option>
                        <option value="Metro">Metro</option>
                        <option value="Kalianda">Kalianda</option>
                        <option value="Pesawaran">Pesawaran</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>