<?php
require_once "./mvc/core/basehref.php";
unset($_SESSION["gv_mscb"]);
header("Location:".getUrl()."/GiangVienController/login");