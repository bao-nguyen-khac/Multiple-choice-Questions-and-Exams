<?php
class GiangVienModel extends db{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function CheckLogin($username, $password){
        $sql = "SELECT * FROM giangvien WHERE username ='" . $username . "' and password = MD5('".$password."')";
        $query = $this->_query($sql);
        $row  = mysqli_fetch_array($query);
        return $row;
    }
    public function LayTatCaMonHocPT($id){
        $sql = "SELECT * FROM phutrach WHERE MSCB_PT = '". $id ."'";
        $query = $this->_query($sql);
        $data1 = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data1, $row);
        }
        $data2 = [];
        foreach($data1 as $data){
            $sql = "SELECT * FROM monhoc WHERE MONHOC_ID = '". $data['MONHOC_ID'] ."'";
            $query = $this->_query($sql);
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($data2, $row);
            }
        }
        return $data2;
    }
    public function LayTatCaMonHocQL($id){
        $sql = "SELECT * FROM quanly WHERE MSCB_QL = '". $id ."'";
        $query = $this->_query($sql);
        $data1 = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data1, $row);
        }
        $data2 = [];
        foreach($data1 as $data){
            $sql = "SELECT * FROM monhoc WHERE MONHOC_ID = '". $data['MONHOC_ID'] ."'";
            $query = $this->_query($sql);
            while ($row = mysqli_fetch_assoc($query)) {
                array_push($data2, $row);
            }
        }
        return $data2;
    }
}
?>