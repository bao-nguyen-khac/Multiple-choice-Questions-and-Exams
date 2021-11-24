<div class="modal fade" id="modalActionDel" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Xóa câu hỏi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Bạn chắc chắn muốn xóa câu hỏi này?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <a class="action-delete"><button type="button" class="btn btn-primary">Xóa</button></a>
            </div>
        </div>
    </div>
</div>
<div class="container p-2">
    <!--Câu hỏi-->
    <?php $count = $numpage * 5 - 5 + 1;
    $dapan;
    foreach ($cauhois as $cauhoi) :
        $i = 0;
    ?>
        <div class="card mt-2">
            <div class="card-header">
                <h5 class="card-title">Câu hỏi <?= $count ?> (<?= $cauhoi['CHUANDAURA_ID'] ?>)</h5>
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
                        <button type="button" class="btn btn-danger __btn-delete" data-cauhoi_id="<?= $cauhoi['CH_ID'] ?>" data-monhoc_id="<?= $monhoc_id ?>" data-bs-toggle="modal" data-bs-target="#modalActionDel">Xóa</button>
                        <a class="btn btn-primary" href="./GVPTController/chinhsuachtemp/<?= $cauhoi['CH_ID'] ?>/<?= $monhoc_id ?>">Chỉnh sửa</a>
                    </div>
                </ul>
            </div>
        </div>
    <?php $count++;
    endforeach; ?>
    <div class="card mt-2">
        <div class="select-page">
            <?php if ($numpage > 1) : ?>
                <div class="pre-page">
                    <a href="./GVPTController/xemhetcauhoi/<?= $monhoc_id ?>/<?= $numpage - 1 ?>">
                        << Prev </a>
                </div>
            <?php endif; ?>
            <?php if ($checkNext == 1) : ?>
                <div class="next-page">
                    <a href="./GVPTController/xemhetcauhoi/<?= $monhoc_id ?>/<?= $numpage + 1 ?>"> Next >></a>
                </div>
            <?php endif; ?>

            <div class="clear"></div>
        </div>
    </div>

    <a href="./GVPTController/xemmhPT/<?= $monhoc_id ?>">Trở về trang môn học</a>
</div>