<?php
    class Tacgia extends controller{
        private $tg;
        function __construct()
        {
            $this->tg=$this->model("Tacgia_m");
        }
        function Get_data(){
            $this->view('Master',[
                'page'=>'Tacgia_v',
                'mtg' =>'',
                'ht' =>'',
                'ngs' =>'',
                'gt' =>'',
                'dt' =>'',
                'mail'=>'',
                'dc' =>''
            ]);
        }
        function ins(){
            if(isset($_POST['btnLuu'])){
                $mtg=$_POST['txtMatacgia'];
                $ht=$_POST['txtTentacgia'];
                $ngs=$_POST['txtNgaysinh'];
                $gt=$_POST['ddlGioitinh'];
                $dt=$_POST['txtDienthoai'];
                $mail=$_POST['txtEmail'];
                $dc=$_POST['txtDiachi'];
                $kq=$this->tg->tacgia_ins($mtg,$ht,$ngs,$gt,$dt,$mail,$dc);
                if($kq){
                    echo "<script>alert('Thêm tác giả thành công');</script>";
                }else{
                    echo "<script>alert('Thêm tác giả thất bại');</script>";
                }
                //Gọi lại giao diện
                $this->view('Master',[
                    'page'=>'Tacgia_v',
                    'mtg' =>$mtg,
                    'ht' =>$ht,
                    'ngs' =>$ngs,
                    'gt' =>$gt,
                    'dt' =>$dt,
                    'mail'=>$mail,
                    'dc' =>$dc
                ]);
            }
        }
    }
?>