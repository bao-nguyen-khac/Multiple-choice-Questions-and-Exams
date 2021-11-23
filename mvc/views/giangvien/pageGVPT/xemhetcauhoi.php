<div class="container p-2">
    <!--Câu hỏi-->
    <?php $count = 1;
    $dapan;
    foreach ($cauhois as $cauhoi) :
        $i = 0;
    ?>
    <div class="card mt-2">
        <div class="card-header">
            <h5 class="card-title">Câu hỏi <?= $count ?> (<?= $cauhoi['CHUANDAURA_ID']?>)</h5>
        </div>
        <div class="card-body">
            <p class="card-text">
                Phần câu hỏi: <?= $cauhoi['PHANHOI'] ?>
            </p>
            <!--Phần trả lời thẻ <li> và đáp án được tô đậm bằng thẻ <h5>-->
            <ul class="list-group list-group-flush">
                <?php foreach ($cauhoi['phantraloi'] as $traloi) :
                    $arr = ['A.', 'B.', 'C.', 'D.'];
                    if ($traloi['DAPAN'] == 1) {
                        $dapan = $arr[$i];
                    }
                ?>
                    <li class="list-group-item"><?= $arr[$i]; ?><?= $traloi['PHANTRALOI']; ?></li>
                <?php $i++;
                endforeach; ?>
                <h5 class="list-group-item">Đáp án: <?= $dapan ?></h5>
                <!--Xóa + Chỉnh sửa-->
                <div class="list-group-item">
                    <a class="btn btn-danger" href="./GVPTController/xoacauhoi/<?= $cauhoi['CH_ID'] ?>/<?= $monhoc_id ?>">Xóa</a>
                    <a class="btn btn-primary" href="./GVPTController/chinhsuachtemp/<?= $cauhoi['CH_ID'] ?>/<?= $monhoc_id ?>">Chỉnh sửa</a>
                </div>
            </ul>
        </div>
    </div>
    <?php $count++;
    endforeach; ?>
    <a href="./GVPTController/xemmhPT/<?= $monhoc_id ?>">Trở về trang môn học</a>
</div>
