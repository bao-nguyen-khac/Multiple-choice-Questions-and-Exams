<?php
    $arr_filetraloi = json_decode($kqlambai['FILETRALOI']);
    
?>
<div class="container p-2">
    <!--Thông tin đề thi-->
    <div class="card mt-2">
        <div class="card-header">
            <h5 class="card-title text-center">KẾT QUẢ BÀI LÀM CỦA <?= $mssv ?></h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Mã môn học: <?= $monhoc_id ?></li>
                <li class="list-group-item">Mã đề: <?= $kqlambai['dethi']['DETHI_ID'] ?></li>
                <li class="list-group-item">Học kì: <?= $kqlambai['dethi']['HOCKY'] ?></li>
                <li class="list-group-item">Ngày thi: <?= $kqlambai['dethi']['NGAYTHI'] ?></li>
                <li class="list-group-item">Số lượng câu hỏi: <?= $kqlambai['dethi']['SLCAUHOI'] ?></li>
                <li class="list-group-item">Thời gian làm bài: <?= $kqlambai['dethi']['TGLB'] ?> phút</li>
            </ul>
        </div>
    </div>
    <!--Câu hỏi-->
    <?php $dapan;
        for ($i = 0; $i < $kqlambai['dethi']['SLCAUHOI']; $i++) :
    ?>
    <div class="card mt-2">
        <div class="card-header">
            <h5 class="card-title">Câu <?= $i + 1 ?></h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                Phần câu hỏi: <?= $kqlambai['dethi'][$i]['PHANHOI'] ?>
            </p>
            <!--Phần trả lời thẻ <li> và đáp án được tô đậm bằng thẻ <h5>-->
            <ul class="list-group list-group-flush">
            <?php $j = 0;$true = false;
            foreach ($kqlambai['dethi'][$i]['phantraloi'] as $traloi) :
                $arr = ['A.', 'B.', 'C.', 'D.'];
                if ($traloi['DAPAN'] == 1) {
                    $dapan = $arr[$j];
                }
                if($traloi['PTL_ID'] === $arr_filetraloi[$i]):
            ?>
                <li class="list-group-item active"><?= $arr[$j]; ?><?= $traloi['PHANTRALOI']; ?></li>
                <?php $true = ($traloi['DAPAN'] == 1) ? true : false ; else: ?>
                    <li class="list-group-item"><?= $arr[$j]; ?><?= $traloi['PHANTRALOI']; ?></li>
                <?php endif; ?>
            <?php $j++;
            endforeach; if($true == true): ?>
                    <h5 class="list-group-item">Đúng, câu trả lời là: <?= $dapan ?></h5>
                <?php else: ?>
                    <h5 class="list-group-item">Sai, câu trả lời là: <?= $dapan ?></h5>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <?php endfor; ?>
    <a href="./GVPTController/xemdssinhvien/<?= $kqlambai['dethi']['HOCKY'] ?>/<?= $monhoc_id ?>">Trở về</a>
</div>
