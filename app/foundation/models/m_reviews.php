<?php
    class m_reviews{
        private $db;

        public function __construct()
        {
            $this->db=new database();
        }


        public function add_review(){

            ///////////
                $_POST['react']=1;
                $_POST['avatar']=1;
            //////////
            $sql = "reviews (first_name,last_name,education,job_title,contry,star,react,comment,avatar)
                VALUES (:first_name,:last_name,:education,:job_title,:contry,:star,:react,:comment,:avatar)
            ";
            $array = [
                ":first_name" =>$_POST['first_name'],
                ":last_name" =>$_POST['last_name'],
                ":education" =>$_POST['education'],
                ":job_title" =>$_POST['job_title'],
                ":contry" =>$_POST['country'],
                ":star" =>$_POST['star'],
                ":react" =>$_POST['react'],
                ":comment" =>$_POST['comment'],
                ":avatar" =>$_POST['avatar']
            ];
            $this->db->insert($sql,$array);
        }


        public function show_all(){
            $sql = "reviews where status=:status";
            $array=[
                ":status" => 0
            ];
            return $this->db->select($sql,$array);
        }



        public function show_all_all(){
            $sql = "reviews";
            return $this->db->select($sql);
        }



        public function show_review_admin($id){
            $sql = "reviews where id=:id";
            $array=[
                ":id" => $id
            ];
            return $this->db->select($sql,$array,0);
        }



        public function accept_review($id){
            $table = "reviews";
            $sql = "status=1 where id=:id";
            $array=[
                ":id" => $id
            ];
            $this->db->update($table,$sql,$array);
        }



        public function delete_review($id){
            $sql = "reviews where id=:id";
            $array=[
                ":id" => $id
            ];
            $this->db->delete($sql,$array);
        }



        public function show_accepted(){
            $sql = "reviews where status=:status";
            $array=[
                ":status" => 1
            ];
            return $this->db->select($sql,$array);
        }


        
        public function get_accepted_count(){
            $x = "count(id)";
            $sql = "reviews where status=:status";
            $array=[
                ":status" => 1
            ];
            return $this->db->select_spechial($x,$sql,$array,0);
        }



        public function get_all_count(){
            $x = "count(id)";
            $sql = "reviews ";
            $array=[
                ":status" => 1
            ];
            return $this->db->select_spechial($x,$sql,$array,0);
        }
        



    }

?>