<div class="centerbox" style="width: 65%; top: 118px; display : block;">
    <center><label> DANH SÁCH SINH VIÊN THAM DỰ THI </label></center>
    <hr>
    <table align="center" class="table-dssv">
        <tr>
            <th align="left">Số thứ tự</th>
            <th align="center">Họ và tên</th>
            <th align="center">Mã số sinh viên</th>
            <th align="center">Điểm</th>
        </tr>
        <?php $count=1; foreach($dssinhvien as $sinhvien): ?>
        <tr>
            <td align="center"><?= $count ?></td>
            <td align="left"><?= $sinhvien['HOTENDEM']." ".$sinhvien['TEN'] ?></td>
            <td align="center"><?= $sinhvien['MSSV'] ?></td>
            <td align="center"><?= ($sinhvien['DIEM'] != '') ? $sinhvien['DIEM'] : 13 ?></td>
        </tr>
    <?php $count++;endforeach; ?>
    </table>
</div>

