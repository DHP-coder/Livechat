<?php

class Register extends Controller{
    public $sv;
    public $UserModel;

    public function __construct()
    {
        //call model
        $this->sv = $this->model("SinhVienModel");
        $this->UserModel = $this->model("UsersModel");
    }
    public function SayHi(){
        $this->view("layout-master",[
            "page"=>"register",
            "sv"=> $this->sv->SinhVien()
        ]);
    }

    public function UserRegister(){
        //1. Get data input
        if (isset($_POST["btn-register"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $password = password_hash('$password', PASSWORD_DEFAULT);
            
        }

        //2. Insert database users table
        $kq = $this->UserModel->InsertNewUser($username, $password);

        //3. Show OK or Fail
        $this->view("layout-admin", [
            "page"=>"register",
            "sv"=> $this->sv->SinhVien(),
            "result" => $kq
            ]);
    }
}

?>