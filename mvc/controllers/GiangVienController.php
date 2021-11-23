<?php
require_once "./mvc/core/basehref.php";
class GiangVienController extends controller{
    public function viewHome(){
        $mscb = $_SESSION['gv_mscb'];
        $monhocpt = $this->model('GiangVienModel')->LayTatCaMonHocPT($mscb);
        $monhocql = $this->model('GiangVienModel')->LayTatCaMonHocQL($mscb);
        $this->view("giangvien/gvview",[
            'monhocpt' => $monhocpt,
            'monhocql' => $monhocql
        ]);
    }
    public function login(){
        $this->view("giangvien/gvlogin");
    }
    public function logout(){
        $this->view("giangvien/gvlogout");
    }
    public function checklogin($username, $password){
        return $this->model("GiangVienModel")->CheckLogin($username, $password);
    }

    
}
?>