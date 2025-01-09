<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiwa</title>
    <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>
<div class="container mt-5">


    <div class="d-flex justify-content-between mb-3">
        <h3>Daftar Mahasiswa</h3>
        <a href="tambah.php" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>

    <table class="table table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">NPM</th>
                <th scope="col">Nama</th>
                <th scope="col">Kota</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $no = 1;
            $sql = "SELECT * FROM mahasiswa";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $row['npm']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['kota']; ?></td>
                    <td><a class="btn btn-info" href="editmhs.php?id=<?= $row['id']; ?>">Edite</a> <a class="btn btn-danger"
                            href="deletemhs.php?id=<?= $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>

</div>

<body>

</body>

</html>