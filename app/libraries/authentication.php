<?php 
    trait authentication{

        public $controller;
        public $controller_method;
        public $reroute_destination;
        public $key;
        public $value;

        public static function authenticate($controller,$controller_method,$key,$value,$reroute_destination=""){
            if(!isset($_SESSION[$key])){
                header("location:".URLROOT."/{$controller}/{$controller_method}/{$reroute_destination}");
                die();
            }
            if($_SESSION[$key]!=$value){
                header("location:".URLROOT."/{$controller}/{$controller_method}/{$reroute_destination}");
                die();
            }

            
        }

        public static function reroute($route,$msg=""){
            $str="";
            if($route != ""){

                $str = str_replace("-","/",$route);
            }
            header("location:".URLROOT."/".$str."/".$msg);

        }

        public static function is_loged_in($key,$value){
            if(!isset($_SESSION[$key])){
                return false;
            }
            if($_SESSION[$key] == $value){
                return true;
            }
            return false;
        }

        public static function authorize($key,$value){
            $_SESSION[$key] = $value;
        }

    }


?>