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
                <li class="list-group-item tglm" value="<?= $dethi['TGLB'] ?>">Thời gian làm bài: <?= $dethi['TGLB'] ?> phút</li>
            </ul>
        </div>
    </div>
    <!--Câu hỏi-->
    <div class="count-time">
        <span class="time-limit">Thời gian còn lại</span>
        <span id="_h">Giờ</span> :
        <span id="_m">Phút</span> :
        <span id="_s">Giây</span>
    </div>
    <div class="clear"></div>
    <form name="formNopBai" action="./SinhVienController/xulyfiletraloi/<?= $dethi['DETHI_ID'] ?>/<?= $_SESSION['mssv'] ?>/<?= $dethi['SLCAUHOI'] ?>/<?= $monhoc_id ?>/<?= $dethi['HOCKY'] ?>" method="post">
        <div class="card mt-2">
            <?php
            for ($i = 0; $i < $dethi['SLCAUHOI']; $i++) :
            ?>
                <div class="card-header">
                    <h5 class="card-title">Câu <?= $i + 1 ?></h5>
                </div>

                <div class="card-body">
                    <p class="card-text">
                        Phần câu hỏi: <?= $dethi[$i]['PHANHOI'] ?>
                    </p>
                    <div class="row">
                        <!--Phần trả lời thẻ <li> và đáp án được tô đậm bằng thẻ <h5>-->
                        <?php $j = 0;
                        foreach ($dethi[$i]['phantraloi'] as $traloi) :
                            $arr = ['A.', 'B.', 'C.', 'D.'];
                        ?>
                            <div class="col-sm-auto">
                                <div class="input-group mb-3">
                                    <div class="input-group-text">
                                        <input class="form-check-input mt-0" type="radio" value="<?= $traloi['PTL_ID'] ?>" name="ptl-<?= $dethi[$i]['CH_ID'] ?>" />
                                    </div>
                                    <span class="input-group-text"><?= $arr[$j]; ?><?= $traloi['PHANTRALOI']; ?></span>
                                </div>
                            </div>
                            <!-- <input type="radio" name="" value=""> <br> -->
                        <?php $j++;
                        endforeach; ?>
                    </div>
                </div>
            <?php endfor; ?>
            <div class="card mt-2">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary submit-bai-lam" name="submit-bai-lam">HOÀN THÀNH BÀI LÀM</button>
                </div>
            </div>
            <!-- <input type="submit"  value="Hoàn thành bài làm"> -->
        </div>
    </form>
</div>
<script>
    var h = null; // Giờ
    var m = null; // Phút
    var s = 0; // Giây
    var time = parseFloat(document.querySelector('.tglm').getAttribute('value'))
    if(time > 60){
        h = time/60
        m = h*60 - time
    }else{
        h = 0
        m = time
    }
    window.onload = function (){
        start()
    }
    var timeout = null; // Timeout
    function start() {
        if (s === -1) {
            m -= 1;
            s = 59;
        };

        if (m === -1) {
            h -= 1;
            m = 59;
        };

        if (h == -1) {
            clearTimeout(timeout);
            document.querySelector('.submit-bai-lam').click()
        };

        document.getElementById('_h').innerText = h.toString();
        document.getElementById('_m').innerText = m.toString();
        document.getElementById('_s').innerText = s.toString();

        timeout = setTimeout(function() {
            s--;
            start();
        }, 1000);
    };
</script>