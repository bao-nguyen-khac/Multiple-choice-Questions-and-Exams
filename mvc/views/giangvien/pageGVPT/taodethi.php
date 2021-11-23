<div class="container p-2">
    <!--Tạo đề thi-->
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-center">TẠO ĐỀ THI</h5>
        </div>
        <div class="card-body">
            <!--form-->
            <form action="./GVPTController/taodethi/<?= $monhoc_id ?>" method="POST">
                <ul class="list-group list-group-flush">
                    <div class="list-group-item">
                        <!--Học kì-->
                        <div class="input-group mb-3">
                            <span class="input-group-text">Học kì</span>
                            <input type="text" class="form-control" id="moTa" autocomplete="off" placeholder="Nhập học kì (VD: 212)" name="hocki" />
                        </div>
                        <!--Ngày thi-->
                        <div class="input-group mb-3">
                            <span class="input-group-text">Ngày thi</span>
                            <input type="date" class="form-control" id="ngayThi" placeholder="Nhập ngày thi (dd/mm/yyyy)" name="ngaythi" value="2021-11-20" />
                        </div>
                        <!--Ngày kí xác nhận-->
                        <div class="input-group mb-3">
                            <span class="input-group-text">Ngày kí xác nhận</span>
                            <input type="date" class="form-control" id="ngayKiXacNhan" placeholder="Nhập ngày kí xác nhận (dd/mm/yyyy)" name="kixacnhan" value="2021-11-10"/>
                        </div>
                        <!--Số lượng câu hỏi-->
                        <div class="input-group mb-3">
                            <span class="input-group-text">Số lượng câu hỏi</span>
                            <input type="number" step="1" class="form-control" id="soLuongCauHoi" autocomplete="off" placeholder="Nhập số lượng câu hỏi" name="slch" />
                        </div>
                        <!--Thời gian làm bài-->
                        <div class="input-group mb-3">
                            <span class="input-group-text">Thời gian làm bài (Phút)</span>
                            <input type="number" step="1" class="form-control" id="thoiGianLamBai" autocomplete="off" placeholder="Thời gian làm bài (Phút)" name="tglb" />
                        </div>
                        <!--Số lượng đề muốn tạo-->
                        <div class="input-group mb-3">
                            <span class="input-group-text">Số lượng đề</span>
                            <input type="number" step="1" class="form-control" id="soLuongDe" autocomplete="off" placeholder="Số lượng đề muốn tạo" name="sldethi" />
                        </div>
                    </div>
                    <!--Tạo-->
                    <div class="list-group-item">
                        <button type="submit" class="btn btn-primary" name="taodethi">Tạo đề thi</button>
                    </div>
                </ul>
            </form>
        </div>
    </div>
</div>
