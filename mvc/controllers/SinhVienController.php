<?php
require_once "./mvc/core/basehref.php";
class SinhVienController extends controller{
    public function viewHome(){
        $mssv = $_SESSION['mssv'];
        $monhocs = $this->model("SinhVienModel")->laytatcamonhoc($mssv);
        $this->view("sinhvien/svview",[
            'monhocs' => $monhocs,
        ]);
    }
    public function login(){
        $this->view("sinhvien/svlogin");
    }
    public function logout(){
        $this->view("sinhvien/svlogout");
    }
    public function checklogin($username, $password){
        return $this->model("SinhVienModel")->CheckLogin($username, $password);
    }
    public function xemmonhoc($monhoc_id,$hocky){
        $this->view("sinhvien/monhocview",[
            'page' => 'xemmonhoc',
            'monhoc_id' => $monhoc_id,
            'hocky' => $hocky,
        ]);
    }
    public function xemlichthi($monhoc_id,$hocky){
        $lichthis = $this->model("SinhVienModel")->xemlichthi($monhoc_id,$hocky);
        $this->view("sinhvien/monhocview",[
            'page' => 'xemlichthi',
            'monhoc_id' => $monhoc_id,
            'hocky' => $hocky,
            'lichthis' => $lichthis
        ]);
    }
    public function lamdethi($monhoc_id,$hocky,$ngaythi){
        $chualambai = $this->model("SinhVienModel")->chualambai($_SESSION['mssv'],$monhoc_id,$hocky);
        $now = date("Y-m-d");
        $check = false;
        $chuatoi = false;
        if($ngaythi == $now){
            $check = true;
        }else if($ngaythi > $now ){
            $chuatoi = true;
        }
        $this->view("sinhvien/monhocview",[
            'page' => 'lamdethi',
            'monhoc_id' => $monhoc_id,
            'hocky' => $hocky,
            'check' => $check,
            'chuatoi' => $chuatoi,
            'chualambai' => $chualambai
        ]);
    }
    public function batdaulambai($monhoc_id,$hocky){
        $dethi = $this->model("SinhVienModel")->batdaulambai($monhoc_id,$hocky);
        $this->view("sinhvien/monhocview",[
            'page' => 'batdaulambai',
            'monhoc_id' => $monhoc_id,
            'hocky' => $hocky,
            'dethi' => $dethi
        ]);
    }
    public function xulyfiletraloi($dethi_id,$mssv,$slch,$monhoc_id,$hocky){
        $cauhois = $this->model("SinhVienModel")->laycauhoitrongdethi($dethi_id);
        $filetraloi = [];
        if(isset($_POST['submit-bai-lam'])){
            foreach($cauhois as $cauhoi){
                array_push($filetraloi,$_POST['ptl-'.$cauhoi['CAUHOI_ID']]);
            }
        }
        $diem = 0;
        $trongso = floatval(10/$slch);
        foreach($filetraloi as $cautraloi){
            if($this->model("SinhVienModel")->checkdapan($cautraloi)){
                $diem += $trongso; 
            }
        }
        $this->model("SinhVienModel")->ghiphanlambai($dethi_id,$mssv,json_encode($filetraloi),$diem,$monhoc_id,$hocky);
        header("Location:".getUrl()."./SinhVienController/saukhilambai/".$monhoc_id."/".$hocky."/".$diem);
    }
    public function saukhilambai($monhoc_id,$hocky,$diem){
        $this->view("sinhvien/monhocview",[
            'page' => 'saukhilambai',
            'monhoc_id' => $monhoc_id,
            'hocky' => $hocky,
            'diem' => $diem
        ]);
    }
    public function xemlaibailam($mssv,$monhoc_id,$hocky){
        $kqlambai = $this->model("GiangVienPTModel")->xemketqualambai($mssv,$hocky, $monhoc_id);
        if(!$kqlambai){
            echo '<script>
            alert("Bài làm không tồn tại");
            window.location.href="../../../../SinhVienController/xemmonhoc/'.$monhoc_id.'/'.$hocky.'"</script>';
        }
        $this->view("sinhvien/monhocview",[
            'page' => "xemlaibailam",
            'monhoc_id' => $monhoc_id,
            'kqlambai' => $kqlambai,
            'mssv' => $mssv,
            'hocky' => $hocky,
        ]);
    }
}
?>

<!-- echo '<pre>';
        print_r($data);
        die; -->