<div class="container-xemmhpt">
    <center><b><label> LỊCH THI </label></b></center>
    <hr>
    <?php foreach($lichthis as $lichthi): ?>
        <span><?= $lichthi['TENMH'] ?> (<?= $lichthi['NGAYTHI'] ?>) -> </span><a href="./SinhVienController/lamdethi/<?= $monhoc_id ?>/<?= $hocky ?>/<?= $lichthi['NGAYTHI'] ?>">Làm bài</a>
    <?php endforeach; ?>
</div>