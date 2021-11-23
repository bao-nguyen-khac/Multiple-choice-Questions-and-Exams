<?php
require_once "./mvc/core/basehref.php";
$home_url = getUrl() . '/';
$message = "";
if (isset($_POST['submit-svlogin'])) {
	$username = $_POST["username"];
    $password = $_POST["password"];
    $user = new SinhVienController;
    $row = $user->checklogin($username,$password);
    if(is_array($row)){
        $_SESSION["mssv"] = $row['MSSV'];
        $_SESSION["ho"] = $row['HOTENDEM'];
        $_SESSION["ten"] = $row['TEN'];
    }else{
        $message = "Invalid Username or Password!";
    }
}
if (isset($_SESSION["mssv"])) {
	header("Location:".getUrl()."/SinhVienController/viewHome");
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
    <link rel="stylesheet" href="./public/css/style1.css?v=1">
    <title>Login</title>
</head>
    <h1 align="center">SINH VIÊN LOGIN </h1>
    <br> <br> 
    <form class="container container-xemmhpt" action="" method="post">
        <b><label for="username">Tên đăng nhập</label><br></b>
        <input type="text" placeholder="Nhập tên tài khoản" class="inputbox" name="username" required><br><br>
        
        <b><label for="password">Mật khẩu</label><br></b>
        <input type="password" placeholder="Nhập mật khẩu" class="inputbox" name="password" required><br>

        <div class="message"><?php if($message!="") { echo $message; } ?></div>
        &emsp; &emsp;
        <input type="submit" class="button" name="submit-svlogin" value="Login">
        &ensp; &emsp; &emsp; 
        <input type="reset" class="button" value="Reset">
    </form>
<body>
    
</body>
</body>

</html>
