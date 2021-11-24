<?php
class GiangVienPTModel extends db{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function getChuanDauRa($monhoc_id){
        $sql = "SELECT * FROM chuandaura WHERE MONHOC_ID = '". $monhoc_id ."'";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }
    public function ThemCauHoi($PHANHOI,$CHUANDAURA_ID,$MONHOC_ID,$ptl,$DAPAN,$mscb){
        $PHANHOI = addcslashes($PHANHOI,"'");  
        $sql = "INSERT INTO cauhoi(PHANHOI,CHUANDAURA_ID,MOTA_ID,MSCB_PT,THOIDIEMCUTHE,MONHOC_ID) VALUE  ('" . $PHANHOI . "','" . $CHUANDAURA_ID . "',NULL,'" . $mscb . "',NOW(),'" . $MONHOC_ID . "');";
        $this->_query($sql);
        $getCHIdsql = "SELECT CH_ID FROM cauhoi ORDER BY CH_ID DESC LIMIT 1";
        $getLastId = $this->_query($getCHIdsql);
        $getLastId =  mysqli_fetch_assoc($getLastId);
        for($i = 0; $i < 4; $i++){
            $default = 0;
            if($i == $DAPAN){
                $default = 1;
            }
            $themptl = "INSERT INTO phantraloi(CH_ID,PHANTRALOI,DAPAN) VALUE (". $getLastId['CH_ID'] .",'". $ptl[$i] ."',".$default.");";
            $this->_query($themptl);
        }
    }
    public function xemhetcauhoi($MOHHOC_ID,$page,$qty,&$checkNext){
        $start = $page*$qty - $qty;
        $cauhoisql = "SELECT * FROM cauhoi WHERE MONHOC_ID = '". $MOHHOC_ID ."' ORDER BY CH_ID DESC LIMIT $start, $qty ";
        $query1 = $this->_query($cauhoisql);
        $cauhois = [];
        while ($row = mysqli_fetch_assoc($query1)) {
            array_push($cauhois, $row);
        }
        $data = [];
        $start += $qty;
        $sql2 = "SELECT * FROM cauhoi WHERE MONHOC_ID = '". $MOHHOC_ID ."' LIMIT $start,1";
        $query2 = $this->_query($sql2);
        if(mysqli_num_rows($query2) == 0){
            $checkNext = 0;
        }
        foreach($cauhois as $cauhoi){
            $cautraloiql = "SELECT PTL_ID, PHANTRALOI, DAPAN FROM phantraloi WHERE CH_ID = ". $cauhoi['CH_ID'];
            $cauhoi['phantraloi'] = [];
            $query2 = $this->_query($cautraloiql);
            while ($row = mysqli_fetch_assoc($query2)){
                array_push($cauhoi['phantraloi'], $row);
            } 
            array_push($data,$cauhoi);
        }
        return $data;
    }
    public function xemcauhoi($cauhoi_id){
        $cauhoisql = "SELECT * FROM cauhoi WHERE CH_ID = $cauhoi_id";
        $query1 = $this->_query($cauhoisql);
        $cauhois = [];
        while ($row = mysqli_fetch_assoc($query1)) {
            array_push($cauhois, $row);
        }
        $data = [];
        foreach($cauhois as $cauhoi){
            $cautraloiql = "SELECT PTL_ID, PHANTRALOI, DAPAN FROM phantraloi WHERE CH_ID = ". $cauhoi['CH_ID'];
            $cauhoi['phantraloi'] = [];
            $query2 = $this->_query($cautraloiql);
            while ($row = mysqli_fetch_assoc($query2)){
                array_push($cauhoi['phantraloi'], $row);
            } 
            array_push($data,$cauhoi);
        }
        return $data[0];
    }
    public function chinhsuacauhoi($cauhoi_id,$PHANHOI, $chuandaura,$ptl,$DAPAN,$mscb){
        $sql = "UPDATE cauhoi SET PHANHOI = '". $PHANHOI ."', CHUANDAURA_ID = '". $chuandaura ."', MSCB_PT = '". $mscb ."', THOIDIEMCUTHE = NOW() WHERE CH_ID = $cauhoi_id;";
        $this->_query($sql);
        $ptlidsql = "SELECT PTL_ID FROM phantraloi WHERE CH_ID = $cauhoi_id";
        $ptlId = [];
        $query1 = $this->_query($ptlidsql);
        while ($row = mysqli_fetch_assoc($query1)){
            array_push($ptlId, $row);
        }
        for($i = 0; $i < 4; $i++){
            $default = 0;
            if($i == $DAPAN){
                $default = 1;
            }
            $chinhsuaptlsql = "UPDATE phantraloi SET PHANTRALOI = '". $ptl[$i] ."', DAPAN = $default WHERE PTL_ID = '". $ptlId[$i]['PTL_ID'] ."';";
            $this->_query($chinhsuaptlsql);
        }
    }
    public function xoacauhoi($cauhoi_id){
        $sql = "DELETE FROM cauhoi WHERE CH_ID = $cauhoi_id;";
        $this->_query($sql);
    }
    public function taodethi($hocki,$ngaythi,$kixacnhan,$slch,$tglb,$sldethi,$monhoc_id,$mscb){
        $slchsql = "SELECT COUNT(CH_ID) FROM cauhoi WHERE MONHOC_ID = '$monhoc_id';";
        $slchIndb = $this->_query($slchsql);
        $data = [];
        while ($row = mysqli_fetch_assoc($slchIndb)){
            array_push($data, $row);
        }
        if($slch > $data[0]['COUNT(CH_ID)']){
            return false;
        }
        for($i = 0; $i < $sldethi; $i++){
            $taodethisql = "INSERT INTO dethi(SLCAUHOI,TGLB,HOCKY,NGAYTHI,NGAYXACNHAN,NGAYKYDUYET,MONHOC_ID,MSCB_RA_DE,MSCB_KI_DUYET) 
            VALUES ($slch,$tglb,$hocki,'". $ngaythi ."','". $kixacnhan ."',NULL,'". $monhoc_id ."','". $mscb ."',NULL)";
            $this->_query($taodethisql);
            $layidsql = "SELECT DETHI_ID FROM dethi ORDER BY DETHI_ID DESC LIMIT 1";
            $laydethiid = $this->_query($layidsql);
            $laydethiid = mysqli_fetch_assoc($laydethiid);
            
            $laycauhoisql = "SELECT CH_ID FROM cauhoi WHERE MONHOC_ID = '$monhoc_id' ORDER BY RAND () LIMIT $slch";
            $query = $this->_query($laycauhoisql);
            while ($row = mysqli_fetch_assoc($query)) {
                $themvaodethisql = "INSERT INTO baogom VALUE(". $laydethiid['DETHI_ID'] ."," .$row['CH_ID'] .");";
                $this->_query($themvaodethisql);
            }
        }
    }
    public function xemhetdethi($hocki,$monhoc_id){
        $sql = "SELECT DETHI_ID FROM dethi WHERE HOCKY = $hocki AND MONHOC_ID = '". $monhoc_id ."' AND NGAYKYDUYET IS NOT NULL;";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }
    public function xemdethichitiet($dethi_id){
        // here
        $dethi = "SELECT * FROM dethi WHERE DETHI_ID = $dethi_id";
        $query = $this->_query($dethi);
        $dethi = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($dethi, $row);
        }
        $cauhoisql = "SELECT CAUHOI_ID FROM baogom WHERE DETHI_ID = $dethi_id ;";
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
            array_push($dethi[0],$cauhoi);
        }
        return $dethi;
    }
    public function xemdssinhvien($hocky,$monhoc_id){
        $sql = "SELECT s.MSSV,s.HOTENDEM,s.TEN FROM hoc h,sinhvien s WHERE h.MONHOC_ID = '". $monhoc_id ."' AND h.HOCKY = $hocky AND h.MSSV = s.MSSV;";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)){
            $layDiemSql = "SELECT DIEM FROM lambai WHERE MSSV = ".$row['MSSV']." AND HOCKY = $hocky AND MONHOC_ID = '$monhoc_id';";
            $query2 = $this->_query($layDiemSql);
            $row['DIEM'] = mysqli_fetch_assoc($query2)['DIEM'];
            array_push($data, $row);
        }
        return $data;
    }
    public function xemketqualambai($mssv,$hocky, $monhoc_id){
        $sql = "SELECT DETHI_ID,FILETRALOI,DIEM FROM lambai WHERE MONHOC_ID = '$monhoc_id' AND HOCKY = $hocky AND MSSV = '$mssv';";
        $query = $this->_query($sql);
        $data = [];
        while ($row = mysqli_fetch_assoc($query)){
            array_push($data, $row);
        }
        if(empty($data)){
            return false;
        }
        $data = $data[0];
        $dethi = $this->xemdethichitiet($data['DETHI_ID'])[0];
        $data['dethi'] = $dethi;
        return $data;
    }
}
?>