<div class="centerbox" style="width: 20%; top: 118px; display : block;">
    <center><label>CÁC ĐỀ THI CUỐI KỲ ĐÃ ĐƯỢC DUYỆT CỦA HỌC KỲ <?= $hocki ?></label></center>
    <hr>
    <center>
        <?php foreach($dethis as $dethi): ?>
        
        <a href="./GVPTController/xemdethichitiet/<?= $dethi['DETHI_ID'] ?>/<?= $monhoc_id ?>">Đề thi ID: <?= $dethi['DETHI_ID'] ?></a> <br>
        
        <?php endforeach; ?>
    </center>
</div>
