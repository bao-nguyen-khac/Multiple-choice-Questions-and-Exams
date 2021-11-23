<?php
    if(isset($_POST['submithocky'])){
        $hocky = $_POST['hocky'];
        header("Location:". getUrl() ."/GVPTController/$feature/$hocky/$monhoc_id");
    }
?>
<div class="searchbox-chon-hoc-ky container-xemmhpt">
    <form class="form-chon-hoc-ky" action="" method="post">
        <label> Học kỳ : </label>
        <input type="text" placeholder="Tìm kiếm học kỳ..." name="hocky">
        <button type="submit" name="submithocky"><i class="fa fa-search"></i></button>
    </form>
</div>

