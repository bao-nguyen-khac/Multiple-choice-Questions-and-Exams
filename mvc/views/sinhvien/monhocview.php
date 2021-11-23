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
    <link rel="stylesheet" href="./public/css/style2.css?v=1">
    <link rel="stylesheet" href="./public/css/bootstrap.min.css" />
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</head>

<body>
    <?php require_once "./mvc/views/sinhvien/blocks/svheader.php" ?>
    <?php require_once "./mvc/views/sinhvien/blocks/svslider.php" ?>
    <div class="__container">
    <?php require_once "./mvc/views/sinhvien/pages/".$data["page"].".php";?>
    </div>
    <?php require_once "./mvc/views/sinhvien/blocks/svfooter.php" ?>
</body>
</html>