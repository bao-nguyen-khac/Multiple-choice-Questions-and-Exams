<?php
require_once "./mvc/core/basehref.php";
class GVPTController extends controller{
    public function viewHome(){
        header("Location:".getUrl()."/GiangVienController/viewHome");
    }
    public function xemmhPT($monhoc_id){
        $this->view("giangvien/gvptview",[
            'page' => "xemmhPT",
            'monhoc_id' => $monhoc_id,
            'controller' => "GVPTController"
        ]);
    }
    public function chuyentrang($page,$data=[]){
        $getChuanDauRa = $this->model("GiangVienPTModel")->getChuanDauRa($data);
        $this->view("giangvien/gvptview",[
            'page' => "$page",
            'monhoc_id' => $data,
            'chuandaura' =>  $getChuanDauRa
        ]);
    }
    public function chonhocky($monhoc_id,$feature){
        $this->view("giangvien/gvptview",[
            'page' => "formchonhocky",
            'monhoc_id' =>  $monhoc_id,
            'feature' => $feature
        ]);
    }
    public function themCauHoi($monhoc_id){
        $mscb = $_SESSION['gv_mscb'];
        if (count($_POST) > 0) {
            $PHANHOI = $_POST["PHANHOI"];
            $chuandaura = $_POST["chuandaura"];
            // $MOTA_ID = $_POST["MOTA_ID"];
            $DAPAN = $_POST["dapan"];
            switch ($DAPAN){
                case 'A':
                    $DAPAN = 0;
                    break;
                case 'B':
                    $DAPAN = 1;
                    break;
                case 'C':
                    $DAPAN = 2;
                    break;
                case 'D':
                    $DAPAN = 3;
                    break;
                default:
                    break;
            }
            $ptl = [];
            array_push($ptl,$_POST["A"]);
            array_push($ptl,$_POST["B"]);
            array_push($ptl,$_POST["C"]);
            array_push($ptl,$_POST["D"]);
            $this->model("GiangVienPTModel")->ThemCauHoi($PHANHOI, $chuandaura,$monhoc_id,$ptl,$DAPAN,$mscb);
        }
        header("Location:".getUrl()."./GVPTController/chuyentrang/themcauhoi/".$monhoc_id);
    }
    public function xemhetcauhoi($monhoc_id){
        $cauhoi = $this->model("GiangVienPTModel")->xemhetcauhoi($monhoc_id);
        $this->view("giangvien/gvptview",[
            'page' => "xemhetcauhoi",
            'monhoc_id' => $monhoc_id,
            'cauhois' =>  $cauhoi
        ]);
    }
    public function chinhsuachtemp($cauhoi_id,$monhoc_id){
        $cauhoi = $this->model("GiangVienPTModel")->xemcauhoi($cauhoi_id);
        $getChuanDauRa = $this->model("GiangVienPTModel")->getChuanDauRa($monhoc_id);
        $this->view("giangvien/gvptview",[
            'page' => "chinhsuacauhoi",
            'monhoc_id' => $monhoc_id,
            'cauhoi' =>  $cauhoi,
            'chuandaura' =>  $getChuanDauRa
        ]);
    }
    public function chinhsuacauhoi($cauhoi_id,$monhoc_id){
        $mscb = $_SESSION['gv_mscb'];
        if (isset($_POST["submit-update"])) {
            $PHANHOI = $_POST["PHANHOI"];
            $chuandaura = $_POST["chuandaura"];
            $DAPAN = $_POST["dapan"];
            switch ($DAPAN){
                case 'A':
                    $DAPAN = 0;
                    break;
                case 'B':
                    $DAPAN = 1;
                    break;
                case 'C':
                    $DAPAN = 2;
                    break;
                case 'D':
                    $DAPAN = 3;
                    break;
                default:
                    break;
            }
            $ptl = [];
            array_push($ptl,$_POST["A"]);
            array_push($ptl,$_POST["B"]);
            array_push($ptl,$_POST["C"]);
            array_push($ptl,$_POST["D"]);
            $this->model("GiangVienPTModel")->chinhsuacauhoi($cauhoi_id,$PHANHOI, $chuandaura,$ptl,$DAPAN,$mscb);
            header("Location:".getUrl()."./GVPTController/xemmhPT/".$monhoc_id);
        }
    }
    public function xoacauhoi($cauhoi_id,$monhoc_id){
        $this->model("GiangVienPTModel")->xoacauhoi($cauhoi_id);
        header("Location:".getUrl()."./GVPTController/xemhetcauhoi/".$monhoc_id);
    }
    public function taodethi($monhoc_id){
        if(isset($_POST['taodethi'])){
            $mscb = $_SESSION['gv_mscb'];
            $hocki = $_POST["hocki"];
            $ngaythi = $_POST["ngaythi"];
            $kixacnhan = $_POST["kixacnhan"];
            $slch = $_POST["slch"]; 
            $tglb = $_POST["tglb"]; 
            $sldethi = $_POST["sldethi"]; 
            $this->model("GiangVienPTModel")->taodethi($hocki,$ngaythi,$kixacnhan,$slch,$tglb,$sldethi,$monhoc_id,$mscb);
        }
        header("Location:".getUrl()."./GVPTController/chuyentrang/taodethi/".$monhoc_id);
    }
    public function xemhetdethi($hocki,$monhoc_id){
        $dethis = $this->model("GiangVienPTModel")->xemhetdethi($hocki,$monhoc_id);
        $this->view("giangvien/gvptview",[
            'page' => "xemhetdethi",
            'monhoc_id' => $monhoc_id,
            'dethis' =>  $dethis,
            'hocki' => $hocki
        ]);
    }
    public function xemdethichitiet($dethi_id,$monhoc_id){
        $dethi = $this->model("GiangVienPTModel")->xemdethichitiet($dethi_id);
        $this->view("giangvien/gvptview",[
            'page' => "xemdethichitiet",
            'monhoc_id' => $monhoc_id,
            'dethi' =>  $dethi[0],
        ]);
    }
    public function xemdssinhvien($hocky, $monhoc_id){
        $dssinhvien = $this->model("GiangVienPTModel")->xemdssinhvien($hocky,$monhoc_id);
        $this->view("giangvien/gvptview",[
            'page' => "xemdssinhvien",
            'monhoc_id' => $monhoc_id,
            'hocky' => $hocky,
            'dssinhvien' =>  $dssinhvien,
        ]);
    }
    public function xemketqualambai($mssv,$hocky, $monhoc_id){
        $kqlambai = $this->model("GiangVienPTModel")->xemketqualambai($mssv,$hocky, $monhoc_id);
        if(!$kqlambai){
            echo '<script>
            alert("Chưa tới kỳ thi hoặc sinh viên vắng thi");
            window.location.href="../../../../GVPTController/xemdssinhvien/'.$hocky.'/'.$monhoc_id.'"</script>';
        }
        $this->view("giangvien/gvptview",[
            'page' => "xemketqualambai",
            'monhoc_id' => $monhoc_id,
            'kqlambai' => $kqlambai,
            'mssv' => $mssv
        ]);
    }
}




// echo '<pre>';
// print_r($dethi);
// die;