<?php
require_once "./mvc/core/basehref.php";
class GVQLController extends controller{
    public function viewHome(){
        header("Location:".getUrl()."/GiangVienController/viewHome");
    }
    public function xemmhQL($monhoc_id){
        $this->view("giangvien/gvqlview",[
            'page' => "xemmhQL",
            'monhoc_id' => $monhoc_id,
            'controller' => "GVQLController"
        ]);
    }
    public function chonhocky($monhoc_id,$feature){
        $this->view("giangvien/gvqlview",[
            'page' => "formchonhocky",
            'monhoc_id' =>  $monhoc_id,
            'feature' => $feature
        ]);
    }
    public function laydethicanduyet($hocky,$monhoc_id){
        $dethicanduyets = $this->model("GiangVienQLModel")->laydethicanduyet($hocky,$monhoc_id);
        $dethis = $this->model("GiangVienPTModel")->xemhetdethi($hocky,$monhoc_id);
        $this->view("giangvien/gvqlview",[
            'page' => "duyetvaxemdethi",
            'monhoc_id' =>  $monhoc_id,
            'dethicanduyets' => $dethicanduyets,
            'dethis' => $dethis,
            'hocky' => $hocky
        ]);
    }
    public function xemdethichitiet($dethi_id,$monhoc_id,$check){
        $dethi = $this->model("GiangVienPTModel")->xemdethichitiet($dethi_id);
        if($check == 'duyet'){
            $this->view("giangvien/gvqlview",[
                'page' => "duyetdethi",
                'monhoc_id' => $monhoc_id,
                'dethi' =>  $dethi[0],
            ]);
        }else{
            $this->view("giangvien/gvqlview",[
                'page' => "xemdethi",
                'monhoc_id' => $monhoc_id,
                'dethi' =>  $dethi[0],
            ]);
        }
    }
    public function duyetdethi($dethi_id,$monhoc_id,$hocky){
        $mscb = $_SESSION["gv_mscb"];
        $this->model("GiangVienQLModel")->duyetdethi($dethi_id,$mscb);
        header("Location:".getUrl()."/GVQLController/laydethicanduyet/".$hocky."/".$monhoc_id);
    }
    public function xemdsvadiem($hocky, $monhoc_id){
        $dssinhvien = $this->model("GiangVienPTModel")->xemdssinhvien($hocky,$monhoc_id);
        $this->view("giangvien/gvqlview",[
            'page' => "xemdsvadiem",
            'monhoc_id' => $monhoc_id,
            'hocky' => $hocky,
            'dssinhvien' =>  $dssinhvien,
        ]);
    }
}


// echo '<pre>';
//         print_r($dethis);
//         die;