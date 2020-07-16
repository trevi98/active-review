<?php

class homepage extends controller{

    private $reviews_model;

    public function __construct(){
        $this->reviews_model=$this->model("m_reviews");
    }


    public function index(){
        // $data = $this->reviews_model->show_accepted();
        $this->view("homepage");
        die();
    }







}


?>