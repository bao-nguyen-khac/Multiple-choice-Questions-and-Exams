<?php
class GiangVienQLModel extends db{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function laydethicanduyet($hocky,$monhoc_id){
        $sql = "SELECT DETHI_ID FROM dethi WHERE HOCKY = $hocky AND MONHOC_ID = '". $monhoc_id ."' AND MSCB_KI_DUYET IS NULL;";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }
    public function duyetdethi($dethi_id,$mscb){
        $sql = "UPDATE dethi SET NGAYKYDUYET = NOW(),MSCB_KI_DUYET = '". $mscb ."' WHERE DETHI_ID = $dethi_id ;";
        $this->_query($sql);
    }
}