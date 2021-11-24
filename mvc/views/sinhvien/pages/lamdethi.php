<?php
    if($check == true){
        if($chualambai){
            echo '
            <p style="text-align: center; display: block">Số lần làm bài cho phép: 1 </p>
            <a style="text-align: center; display: block" href="./SinhVienController/batdaulambai/'. $monhoc_id .'/'.$hocky.'">Bắt đầu làm bài</a>
            ';
        }else{
            echo '
            <h3 style="text-align: center;">Đã hoàn thành bài làm</h3>
            ';
        }
    }else{
        if($chuatoi == true){
            echo '
            <h3 style="text-align: center;">Chưa tới ngày thi</h3>
            ';

        }else{
            echo '
            <h3 style="text-align: center;">Đã qua ngày thi</h3>
            ';
        }
    }
?>
