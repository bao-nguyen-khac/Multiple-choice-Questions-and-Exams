<nav  class="navbar navbar-expand-lg navbar-light navbar-dark bg-primary">
    <div class="container">
        <!--LOGO-->
        <a href="./GiangVienController/viewHome" class="navbar-brand">
            <img class="d-inline-block align-text-top logo" src="./public/img/logo.svg" alt="" width="30" height="24" />
        </a>
        <!--Danh sách trang-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Trái-->
            <ul class="navbar-nav mb-2 mb-lg-0 __header-title">
                <li class="nav-item">
                    <a class="nav-link active title" aria-current="page">BKEL</a>
                </li>
            </ul>
            <!--Phải-->
            <ul class="navbar-nav text-right logo">
                <li class="nav-item text-right">
                    <div class="nav-link sayhi">Welcome <?php echo $_SESSION["gv_mscb"]; ?></p>
                </li>
                <li class="nav-item text-right logout">
                    <a class="nav-link" href="./GiangVienController/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>