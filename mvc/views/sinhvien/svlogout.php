<?php
require_once "./mvc/core/basehref.php";
unset($_SESSION["mssv"]);
unset($_SESSION["ho"]);
unset($_SESSION["ten"]);
header("Location:".getUrl()."/SinhVienController/login");