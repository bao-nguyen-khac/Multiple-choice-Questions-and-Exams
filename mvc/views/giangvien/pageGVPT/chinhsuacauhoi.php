<div class="container p-2">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center">CHỈNH SỬA CÂU HỎI</h5>
        </div>
        <div class="card-body">
            <form action="./GVPTController/chinhsuacauhoi/<?= $cauhoi['CH_ID'] ?>/<?= $monhoc_id ?>" method="POST">
                <!--Trang xử lí-->
                <h5 class="card-title">Phần hỏi</h5>
                <!--Chuẩn đầu ra-->
                <div class="input-group mb-3">
                    <span class="input-group-text">Chọn chuẩn đầu ra</span>
                    <select class="form-select" id="chuanDauRa" name="chuandaura">
                        <?php foreach($chuandaura as $each):
                            if($each['CHUANDAURA_ID'] == $cauhoi['CHUANDAURA_ID']):
                        ?>
                            <option selected value="<?= $each['CHUANDAURA_ID']?>"><?= $each['CHUANDAURA_ID']?></option>
                            <?php else: ?>
                                <option value="<?= $each['CHUANDAURA_ID']?>"><?= $each['CHUANDAURA_ID']?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Câu hỏi</span>
                    <input type="text" class="form-control" autocomplete="off" id="cauHoi" autocomplete="off" name="PHANHOI" value="<?= $cauhoi['PHANHOI'] ?>"/>
                </div>
                <!--Phần hỏi + đáp án-->
                <h5 class="card-title">Phần trả lời</h5>

                <?php $dem = -1; 
                    foreach($cauhoi['phantraloi'] as $phantraloi){
                        $dem++;
                        if($phantraloi['DAPAN'] == 1){
                            break;
                        }
                    }
                    $arr = ['A', 'B', 'C', 'D'];
                    for($i = 0; $i < 4; $i++):
                        if($i == $dem):
                ?>
                <div class="input-group mb-3">
                    <span class="input-group-text"><?= $arr[$i] ?></span>
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" checked value="<?= $arr[$i] ?>" name="dapan" />
                    </div>
                    <input type="text" class="form-control" autocomplete="off" value="<?= $cauhoi['phantraloi'][$i]['PHANTRALOI'] ?>" name="<?= $arr[$i] ?>" />
                </div>
                    <?php else: ?>

                <div class="input-group mb-3">
                    <span class="input-group-text"><?= $arr[$i] ?></span>
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="<?= $arr[$i] ?>" name="dapan" />
                    </div>
                    <input type="text" class="form-control" autocomplete="off" value="<?= $cauhoi['phantraloi'][$i]['PHANTRALOI'] ?>" name="<?= $arr[$i] ?>" />
                </div>
                    <?php endif; ?>
                <?php endfor; ?>
                <button type="submit" class="btn btn-primary" name="submit-update">Gửi</button>
                <button type="reset" class="btn btn-primary">Đặt lại</button>
            </form>
        </div>
    </div>
</div>
