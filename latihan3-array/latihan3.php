<?php

$produk = [
    [
        "no" => "1",
        "nama" => "Sepatu Nike Black Edition 115",
        "harga" => 5000000,
        "foto" => "foto1.jpg",
        "stok" => 50,
        "status" => "Tersedia"
    ],

    [
        "no" => "2",
        "nama" => "Sepatu Adidas White Edition 225",
        "harga" => 6000000,
        "foto" => "foto2.jpg",
        "stok" => 0,
        "status" => "Tidak Tersedia"
    ]
    ];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding= "7" cellspacing = "0">
    <h1>Safina store | Toko sepatu murah dan terpercaya</h1>
    <h2>Data Produk</h2>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>foto</th>
        <th>Stok</th>
        <th>Status</th>
    </tr>
    <tr>
    <?php foreach ($produk as $pk) : ?>
        <td> <?= $pk["no"]?> </td>
        <td> <?= $pk["nama"]?> </td>
        <td> Rp. <?= number_format ($pk["harga"])?> </td>
        <td><img src="<?= $pk["foto"];?>" alt="" style = "width: 80px;" ></td>
        <td> <?= $pk ["stok"]; ?></td>
        <?php if($pk ["status"]=="Tersedia") { ?>
            <td style = 'color : green'><?= $pk ["status"]?></td>
        <?php } else { ?>
            <td style = 'color : red'><?= $pk ["status"]?></td>
        <?php } ?>
        </tr>
        <?php endforeach; ?>
        </table>
</body>
</html>
