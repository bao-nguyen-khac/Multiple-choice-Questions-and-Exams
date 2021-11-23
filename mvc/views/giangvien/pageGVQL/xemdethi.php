<div class="container p-2">
    <!--Thông tin đề thi-->
    <div class="card mt-2">
        <div class="card-header">
            <h5 class="card-title text-center">THÔNG TIN ĐỀ THI</h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Mã môn học: <?= $monhoc_id ?></li>
                <li class="list-group-item">Mã đề: <?= $dethi['DETHI_ID'] ?></li>
                <li class="list-group-item">Học kì: <?= $dethi['HOCKY'] ?></li>
                <li class="list-group-item">Ngày thi: <?= $dethi['NGAYTHI'] ?></li>
                <li class="list-group-item">Số lượng câu hỏi: <?= $dethi['SLCAUHOI'] ?></li>
                <li class="list-group-item">Thời gian làm bài: <?= $dethi['TGLB'] ?> phút</li>
            </ul>
        </div>
    </div>
    <!--Câu hỏi-->
    <?php $dapan;
        for ($i = 0; $i < $dethi['SLCAUHOI']; $i++) :
    ?>
    <div class="card mt-2">
        <div class="card-header">
            <h5 class="card-title">Câu <?= $i + 1 ?></h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                Phần câu hỏi: <?= $dethi[$i]['PHANHOI'] ?>
            </p>
            <!--Phần trả lời thẻ <li> và đáp án được tô đậm bằng thẻ <h5>-->
            <ul class="list-group list-group-flush">
            <?php $j = 0;
            foreach ($dethi[$i]['phantraloi'] as $traloi) :
                $arr = ['A.', 'B.', 'C.', 'D.'];
                if ($traloi['DAPAN'] == 1) {
                    $dapan = $arr[$j];
                }
            ?>
                <li class="list-group-item"><?= $arr[$j]; ?><?= $traloi['PHANTRALOI']; ?></li>
            <?php $j++;
            endforeach; ?>
                <h5 class="list-group-item">Đáp án: <?= $dapan ?></h5>
            </ul>
        </div>
    </div>
    <?php endfor; ?>
    <a href="./GVQLController/laydethicanduyet/<?= $dethi['HOCKY'] ?>/<?= $monhoc_id ?>">Trở về trang trước</a>
</div>
