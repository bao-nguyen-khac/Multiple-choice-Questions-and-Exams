<?php
    if(isset($_POST['chonhocky'])){
        $hocky = $_POST['hocky'];
        header("Location:". getUrl() ."/GVQLController/$feature/$hocky/$monhoc_id");
    }
?>
<div class="searchbox-chon-hoc-ky container-xemmhpt">
    <form class="form-chon-hoc-ky" action="" method="post">
        <label> Học kỳ : </label> 
        <input type="text" placeholder="Tìm kiếm học kỳ..." name="hocky">
        <button type="submit" name="chonhocky"><i class="fa fa-search"></i></button>
    </form>
</div>