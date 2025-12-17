<?php
    class Tacgia_m extends connectDB{
        function tacgia_ins($mtg,$ht,$ngs,$gt,$dt,$mail,$dc){
            $sql="INSERT INTO tacgia(matacgia,tentacgia,ngaysinh,gioitinh,dienthoai,email,diachi) VALUES('$mtg','$ht','$ngs','$gt','$dt','$mail','$dc')";
            return mysqli_query($this->con,$sql);
        }
    }
?>