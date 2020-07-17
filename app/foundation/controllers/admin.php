<?php
    class admin extends controller {
        use authentication;
        private $admin_model;
        private $reviews_model;

        public function __construct(){
            $this->admin_model = $this->model("m_admin");
            $this->reviews_model = $this->model("m_reviews");
        }

        public function login($err=""){
            if(authentication::is_loged_in("admin",true)){
                
                // if(!$reroutr_destination=""){
                // //    authentication::reroute($reroutr_destination);
                // header("location:".URLROOT."/admin/dashboard");
                //     die();
                // }
                $data = $this->reviews_model->show_all();
                $data1 = $this->reviews_model->get_accepted_count();
                $this->view("admin/dashboard",$data,$data1);
                die();
            }
            if(!isset($_POST['login'])){
                $this->view("admin/login",$err);
                die();
            }
            // echo"hh";
            $data = $this->admin_model->login($_POST['username'],$_POST['password']);
            if(count($data) > 1){
                authentication::authorize("admin",true);
                // if(!$reroutr_destination=""){
                //     // authentication::reroute($reroutr_destination);
                //     header("location:".URLROOT."/admin/dashboard");
                //     die();
                // }
                $data = $this->reviews_model->show_all();
                $data1 = $this->reviews_model->get_accepted_count();
                $this->view("admin/dashboard",$data,$data1);
                die();

            }
            // $x = $reroutr_destination;
            // $reroutr_destination = "admin/login".$x;
            // authentication::reroute($reroutr_destination,"username or password is incorrect");
            header("location:".URLROOT."/admin/login/username or password is incorrect");

        }



        public function dashboard(){
            // authentication::authenticate("admin","login","admin",true,"admin-dashboard");
            if(!isset($_SESSION['admin'])){
                header("location:".URLROOT."/admin/login");
            }
            $data = $this->reviews_model->get_all_count();
            $data1 = $this->reviews_model->get_accepted_count();
            $data2 = $this->reviews_model->show_all();
            // $data1 = $this->reviews_model->show_accepted();
            $this->view("admin/dashboard",$data,$data1,$data2);
            die();

        }

        public function show_review($id){
            $data = $this->reviews_model->get_all_count();
            $data1 = $this->reviews_model->get_accepted_count();
            $data2 = $this->reviews_model->show_all();
            $data3 = $this->reviews_model->show_review_admin($id);
            $this->view("admin/show_review",$data,$data1,$data2,$data3);
            die();
        }



    }

?>