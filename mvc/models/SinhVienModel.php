<?php
class SinhVienModel extends db{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function CheckLogin($username, $password){
        $sql = "SELECT * FROM sinhvien WHERE username ='" . $username . "' and password = MD5('".$password."')";
        $query = $this->_query($sql);
        $row  = mysqli_fetch_array($query);
        return $row;
    }
    public function laytatcamonhoc($mssv){
        $sql = "SELECT h.MONHOC_ID,m.TENMH,h.HOCKY,h.MSSV FROM hoc h,monhoc m WHERE h.MSSV = $mssv AND h.MONHOC_ID = m.MONHOC_ID";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }
    public function xemlichthi($monhoc_id,$hocky){
        $sql = "SELECT DISTINCT d.NGAYTHI,m.TENMH FROM dethi d,monhoc m WHERE d.MSCB_KI_DUYET IS NOT NULL AND d.HOCKY = $hocky AND d.MONHOC_ID = '". $monhoc_id ."' AND d.MONHOC_ID = m.MONHOC_ID";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }
    public function chualambai($mssv,$monhoc_id,$hocky){
        $sql = "SELECT * FROM lambai WHERE MSSV = '". $mssv ."' AND MONHOC_ID = '". $monhoc_id ."' AND HOCKY = $hocky;";
        $query = $this->_query($sql);
        if(mysqli_fetch_assoc($query) == 0){
            return true;
        }
        return false;
    }
    public function batdaulambai($monhoc_id,$hocky){    
        $chondethisql = "SELECT * FROM dethi WHERE MONHOC_ID = '$monhoc_id' AND HOCKY = $hocky AND NGAYKYDUYET IS NOT NULL ORDER BY RAND() LIMIT 1";
        $query = $this->_query($chondethisql);
        $dethi = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($dethi, $row);
        }
        $dethi = $dethi[0];
        $cauhoisql = "SELECT CAUHOI_ID FROM baogom WHERE DETHI_ID = ". $dethi['DETHI_ID'] .";";
        $query1 = $this->_query($cauhoisql);
        $cauhois = [];
        while ($row = mysqli_fetch_assoc($query1)) {
            $cauhoisql = "SELECT CH_ID,PHANHOI FROM cauhoi WHERE CH_ID = ". $row['CAUHOI_ID'] ." ;";
            $query2 = $this->_query($cauhoisql);
            while ($row1 = mysqli_fetch_assoc($query2)) {
                array_push($cauhois,$row1);
            }
        }
        foreach($cauhois as $cauhoi){
            $cautraloiql = "SELECT PTL_ID, PHANTRALOI, DAPAN FROM phantraloi WHERE CH_ID = ". $cauhoi['CH_ID'] .";";
            $cauhoi['phantraloi'] = [];
            $query2 = $this->_query($cautraloiql);
            while ($row = mysqli_fetch_assoc($query2)){
                array_push($cauhoi['phantraloi'], $row);
            }
            array_push($dethi,$cauhoi);
        }
        return $dethi;
    }
    public function laycauhoitrongdethi($dethi_id){
        $sql = "SELECT CAUHOI_ID FROM baogom WHERE DETHI_ID = $dethi_id";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }
    public function checkdapan($ptl_id){
        $sql = "SELECT DAPAN FROM phantraloi WHERE PTL_ID = $ptl_id";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        if($data[0]['DAPAN'] == 1)
            return true;
        return false;
    }
    public function ghiphanlambai($dethi_id,$mssv,$filetraloi,$diem,$monhoc_id,$hocky){
        $sql = "INSERT INTO lambai VALUES (". $dethi_id .",'". $mssv ."','". $filetraloi ."',". $diem .",". $hocky .",'". $monhoc_id ."');";
        $this->_query($sql);
    }
}
?>