<?php
require "koneksi.php";

$db = new database();
$row = $db->tampilData();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Daftar barang</title>
</head>

<body>
    <div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                foreach ($row as $rows) :
                ?>
                    <tr class="bg-info">
                        <td> <?= $i; ?> </td>
                        <td><?= $rows["kodebarang"]; ?></td>
                        <td><?= $rows["namabarang"]; ?></td>
                        <td>Rp.<?= $rows["harga"]; ?></td>
                        <td>
                            <a href="controller/edit.php?id=<?= $row["id"]; ?>" class="btn btn-primary">Edit</a>
                            <a href="controller/hapus.php?id= <?= $row["id"]; ?> " class="btn btn-danger">hapus</a>
                        </td>

                    <?php
                    $i++;
                endforeach;
                    ?>
                    </tr>

            </tbody>
        </table>
    </div>




    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>

</html>