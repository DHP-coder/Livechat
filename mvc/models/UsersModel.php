<?php
class UsersModel extends DB{
    public function InsertNewUser($username, $password){
        $qr = "INSERT INTO users VALUE(null, '$username', '$password', 'null', 'null', 'null', 'null', 'null', 'null', 'null')";

        $result = false;
        if(mysqli_query($this->con, $qr)){
            $result = true;
        }
        return json_encode( $result );
    }

    public function checkUsername($un){
        $qr = "SELECT user_id FROM users WHERE user_name = '$un'";
        $rows = mysqli_query($this->con, $qr);
        $kq = false;
        if(mysqli_num_rows($rows)>0){
            $kq = true;
        }
        return json_encode($kq);
    }
}
?>