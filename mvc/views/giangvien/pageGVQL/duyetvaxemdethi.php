<div class="centerbox" style="width: 20%; top: 118px; display : block;">
    <center><label>Đề thi chờ duyệt của học kỳ <?= $hocky ?> </label></center>
    <hr>
    <center>
        <?php foreach($dethicanduyets as $dethicanduyet): ?>
            <a href="./GVQLController/xemdethichitiet/<?= $dethicanduyet['DETHI_ID'] ?>/<?= $monhoc_id ?>/duyet">Đề thi ID: <?= $dethicanduyet['DETHI_ID'] ?></a> <br>
        <?php endforeach; ?>
    </center>
</div>
<div class="centerbox" style="width: 20%; top: 118px; display : block;">
    <center><label>Các đề thi đã được duyệt của môn học của học kỳ <?= $hocky ?> </label></center>
    <hr>
    <center>
        <?php foreach($dethis as $dethi): ?>
            <a href="./GVQLController/xemdethichitiet/<?= $dethi['DETHI_ID'] ?>/<?= $monhoc_id ?>/xem">Đề thi ID: <?= $dethi['DETHI_ID'] ?></a> <br>
        <?php endforeach; ?>
    </center>
</div>


