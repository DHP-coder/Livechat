<?php
    class App{

        //define controller, action, params
        //Example: localhost/livechat/Home/SayHi/1/2
        protected $controller="Home";
        protected $action="SayHi";
        protected $params=[];

        function __construct(){

            //Define array which constant url
            $arr = $this->UrlProcess();

            //Start controller process
            if( file_exists("./mvc/controllers/".$arr[0].".php") ){
                $this->controller = $arr[0];
                unset($arr[0]);
            }

            require_once "./mvc/controllers/". $this->controller .".php";
            $this->controller = new $this->controller;
            //End controller process

            // Start action process
            if(isset($arr[1])){
                if( method_exists( $this->controller , $arr[1]) ){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            // End action process

            // Start params process
            $this->params = $arr?array_values($arr):[];
            call_user_func_array([$this->controller, $this->action], $this->params );
            // End params process
            
        }

        //Cut "/" in url 
        function UrlProcess(){
            if( isset($_GET["url"]) ){
                return explode("/", filter_var(trim($_GET["url"], "/")));
            }
        }
    }
?>