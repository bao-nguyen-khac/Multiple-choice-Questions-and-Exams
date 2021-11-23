<div class="container p-2">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center">THÊM CÂU HỎI MỚI</h5>
        </div>
        <div class="card-body">
            <form action="./GVPTController/themCauHoi/<?= $monhoc_id ?>" method="POST">
                <!--Trang xử lí-->
                <h5 class="card-title">Phần hỏi</h5>
                <!--Chuẩn đầu ra-->
                <div class="input-group mb-3">
                    <span class="input-group-text">Chọn chuẩn đầu ra</span>
                    <select class="form-select" id="chuanDauRa" name="chuandaura">
                    <?php foreach ($chuandaura as $each) : ?>
                        <option value="<?= $each['CHUANDAURA_ID'] ?>"><?= $each['CHUANDAURA_ID'] ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>
                <!--Mô tả-->
                <!-- <div class="input-group mb-3">
                    <span class="input-group-text">Phần mô tả</span>
                    <input type="text" class="form-control" id="moTa" autocomplete="off" placeholder="Nhập nội dung mô tả" name="MOTA_ID" />
                </div> -->
                <!--Câu hỏi-->
                <div class="input-group mb-3">
                    <span class="input-group-text">Câu hỏi</span>
                    <input type="text" class="form-control" id="cauHoi" autocomplete="off" placeholder="Nhập nội dung câu hỏi" name="PHANHOI" />
                </div>
                <!--Phần hỏi + đáp án-->
                <h5 class="card-title">Phần trả lời</h5>
                <!--Câu A-->
                <div class="input-group mb-3">
                    <span class="input-group-text">A</span>
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" checked value="A" name="dapan" />
                    </div>
                    <input type="text" class="form-control" autocomplete="off" placeholder="Nội dung câu trả lời" name="A" />
                </div>
                <!--Câu B-->
                <div class="input-group mb-3">
                    <span class="input-group-text">B</span>
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="B" name="dapan" />
                    </div>
                    <input type="text" class="form-control" autocomplete="off" placeholder="Nội dung câu trả lời" name="B" />
                </div>
                <!--Câu C-->
                <div class="input-group mb-3">
                    <span class="input-group-text">C</span>
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="C" name="dapan" />
                    </div>
                    <input type="text" class="form-control" autocomplete="off" placeholder="Nội dung câu trả lời" name="C" />
                </div>
                <!--Câu D-->
                <div class="input-group mb-3">
                    <span class="input-group-text">D</span>
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="radio" value="D" name="dapan" />
                    </div>
                    <input type="text" class="form-control" autocomplete="off" placeholder="Nội dung câu trả lời" name="D" />
                </div>
                <button type="submit" class="btn btn-primary" name="submit-cauhoi">Gửi</button>
                <button type="reset" class="btn btn-primary">Đặt lại</button>
            </form>
        </div>
    </div>
</div>
