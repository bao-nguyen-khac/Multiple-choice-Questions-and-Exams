<?php
require_once "./mvc/core/basehref.php";
$home_url = getUrl() . '/';
?>
<?php

if (!isset($_SESSION["gv_mscb"])) {
    header("Location:" . getUrl() . "/GiangVienController/login");
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
    <!-- <script src=".public/js/bootstrap.min.js"></script> -->
</head>

<body>
    <?php require_once "./mvc/views/giangvien/blocks/gvheader.php" ?> <br> <br>
    <div class="__container">
    <h1 class="left-gvview" style="top: 118px; display: block;" align="left">
        <span> CÁC MÔN HỌC ĐANG QUẢN LÝ </span> 
        <hr width="100%">
        <?php foreach($monhocpt as $monhoc): ?>
        <a href="./GVPTController/xemmhPT/<?= $monhoc['MONHOC_ID'] ?>" style="font-size: large;"><?=  $monhoc['TENMH'] ?> (<?= $monhoc['MONHOC_ID'] ?>)</a><br>
        <?php endforeach; ?>
    </h1>
    <br> <br>
    
    <h1 class="left-gvview" style="top : 118px; display : block;" align="left">
        <span> CÁC MÔN HỌC ĐANG PHỤ TRÁCH </span>
        <hr width="100%">
        <?php foreach($monhocql as $monhoc): ?>
        <a href="./GVQLController/xemmhQL/<?= $monhoc['MONHOC_ID'] ?>" style="font-size: large;"><?= $monhoc['TENMH'] ?> (<?= $monhoc['MONHOC_ID'] ?>)</a> <br>
        <?php endforeach; ?>
    </h1>
    </div>
    <?php require_once "./mvc/views/giangvien/blocks/gvfooter.php" ?>
    
</body>

</html>