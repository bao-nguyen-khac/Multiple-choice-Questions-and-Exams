<?php
require_once "./mvc/core/basehref.php";
$home_url = getUrl() . '/';
?>
<?php

if (!isset($_SESSION["mssv"])) {
    header("Location:" . getUrl() . "/SinhVienController/login");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    echo "<base href='${home_url}'>";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BKEL</title>
    <link rel="stylesheet" href="./public/css/style1.css">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./public/css/style2.css?v=1">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</head>

<body>
    <?php require_once "./mvc/views/sinhvien/blocks/svheader.php" ?> <br> <br>
    <div class="__container">
    <h1 class="left-gvview" style="top: 118px; display: block;" align="left">
        <span> CÁC MÔN HỌC ĐÃ VÀ ĐANG HỌC </span> 
        <hr width="100%">
        <?php foreach($monhocs as $monhoc): ?>
        <a href="./SinhVienController/xemmonhoc/<?= $monhoc['MONHOC_ID'] ?>/<?= $monhoc['HOCKY'] ?>" style="font-size: large;"><?=  $monhoc['TENMH'] ?> Học kỳ: <?= $monhoc['HOCKY'] ?></a><br>
        <?php endforeach; ?>
    </h1>
    </div>
    <?php require_once "./mvc/views/sinhvien/blocks/svfooter.php" ?>
</body>
</html>