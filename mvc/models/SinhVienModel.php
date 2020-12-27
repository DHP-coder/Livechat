<?php
class SinhVienModel extends DB{
    public function GetSV(){
        return "Dang Hoai Phong";
    }

    public function SinhVien(){
        $qr = "SELECT * FROM users";
        $rows = mysqli_query($this->con, $qr);
        $mang = array();
        while($row = mysqli_fetch_array($rows)){
            $mang[] = $row;
        }
        return json_encode($mang);
    }
}
?>