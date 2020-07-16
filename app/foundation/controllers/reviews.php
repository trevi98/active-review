<?php

    class reviews extends controller{
       
        private $reviews_model;

        public function __construct(){
            $this->reviews_model=$this->model("m_reviews");
        }

        public function index(){
            $data = $this->reviews_model->show_accepted();
            $this->view("reviews/show",$data);
            die();
        }

        public function create_review(){
            $this->view("reviews/create");
            die();
        }

        public function store(){
            if(!isset($_POST['submit'])){
                $this->view("reviews/create");
                die();
            }
            header("location:".URLROOT."/reviews/index/".$_POST['first_name']);
            die();

            if(empty($_POST['first_name']) || empty($_POST['last_name']) ||
                empty($_POST['education']) || empty($_POST['job_title']) ||
                empty($_POST['comment'])
            ){
                $this->view("reviews/create","all fieilds are required");
                die();
            }

            $this->reviews_model->add_review();
        }


        public function show_for_admin(){
            $data = $this->reviews_model->show_all();
            $this->view("admin/show",$data);
            die();
        }


        public function show_review_admin($id){
            $data = $this->reviews_model->show_review_admin($id);
            $this->view("admin/show_review",$data);
            die();
        }


        public function show_review($id){
            $data = $this->reviews_model->show_review_admin($id);
            $this->view("reviews/show_review",$data);
            die();
        }

        
        public function accept_review($id){
            $this->reviews_model->accept_review($id);
            header("location:".URLROOT."/reviews/show_for_admin");
            die();
        }


        public function delete_review($id){
            $this->reviews_model->delete_review($id);
            header("location:".URLROOT."/reviews/show_for_admin");
            die();
        }


        public function show_accepted(){
            $data = $this->reviews_model->show_accepted();
            $this->view("admin/show_accepted",$data);
            die();
        }


        public function show_accepted_ajax(){
            echo json_encode($this->reviews_model->show_accepted());
            die();
        }


        // public function dashboard(){

        // }



    }




?>