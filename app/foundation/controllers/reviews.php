<?php

    class reviews extends controller{
       
        private $reviews_model;

        public function __construct(){
            $this->reviews_model=$this->model("m_reviews");
        }

        public function index($name=""){
            // $data = $this->reviews_model->show_accepted();
            // $this->view("reviews/show",$data);
            // die();
            $this->view("homepage",$name);
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
            
            if(empty($_POST['first_name']) || empty($_POST['last_name']) ||
            empty($_POST['education']) || empty($_POST['job_title']) ||
            empty($_POST['comment'])
            ){
                $this->view("reviews/create","all fieilds are required");
                die();
            }
            $img="none";
            if($_POST['chosen_avatar']!='none'){
                $img = $_POST['chosen_avatar'];
            }
            else{
                if(isset($_FILES['img'])){
                    echo 1;
                    $target_dir = "../public/uploads/";
                    // echo  basename($_FILES["img"]["name"]);
                    $img_name = explode(".",basename($_FILES["img"]["name"]))[0];
                    $img_extention = explode(".",basename($_FILES["img"]["name"]))[1];
                    $uploadOk = 1;
                    $target_file = $target_dir .$img_name.".".$img_extention;
                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                    // Check if image file is a actual image or fake image
                    if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["img"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                    }
                
                    // Check if file already exists
                    if (file_exists($target_file)) {
                    // echo "Sorry, file already exists.";
                    $img_name.=rand(0,100);
                    $uploadOk = 1;
                    }
                
                    // Check file size
                    if ($_FILES["img"]["size"] > 500000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                    }
                
                    // Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                    }
                    $target_file = $target_dir .$img_name.".".$img_extention;
                
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                    } else {
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        echo "ggg";
                        // echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
                        // $stmt = $conn->prepare("UPDATE background SET background=:background");
                        // $stmt->bindParam(':background', $target_file);
                        // $stmt->execute();
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    }
                    $img=$img_name.".".$img_extention;
                    echo $img;
                }
            }
            $this->reviews_model->add_review($img);
            header("location:".URLROOT."/reviews/index/".$_POST['first_name']);
            die();
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