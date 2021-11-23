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
    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style2.css?v=1">
    <link rel="stylesheet" href="./public/css/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
</head>

<body>
    <?php require_once "./mvc/views/giangvien/blocks/gvheader.php" ?>
    <?php require_once "./mvc/views/giangvien/blocks/gvptslider.php" ?>
    <div class="__container">
        <?php require_once "./mvc/views/giangvien/pageGVPT/".$data["page"].".php";?>
    </div>
    
    <?php require_once "./mvc/views/giangvien/blocks/gvfooter.php" ?>

</body>

</html>