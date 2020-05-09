<?php
// create database connection using koneksi.php
    include 'config/koneksi.php';

    // Fetch all data from database
    $result = mysqli_query($koneksi, "SELECT * FROM user");
    // var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <a href="add.php">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <td>Name</td>
                <td>Username</td>
                <td>Role</td>
            </tr>
        </thead>
        <tbody>
        <?php 
            while ($hasil = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?= $hasil['name'];?></td>
                <td><?= $hasil['user'];?></td>
                <td><?= $hasil['role'];?></td>
            </tr>
        <?php }?>
        </tbody>
    </table>
</body>
</html>