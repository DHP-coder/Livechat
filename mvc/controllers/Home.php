<?php
class Home extends Controller{

    public $sv;

    public function __construct()
    {
        //call model
        $this->sv = $this->model("SinhVienModel");
    }
    function SayHi(){

        //call view
        $this->view("layout-master", [
            "page"=>"news",
            "sv" => $this->sv->SinhVien()
            ]);
    }

    
}
?>