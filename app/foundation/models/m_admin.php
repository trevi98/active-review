<?php
    class m_admin{
        private $db;

        public function __construct()
        {
            $this->db=new database();
        }



        public function login($username,$password){
            $sql="admin where username=:username and password=:password";
            $array=[
                ":username" => $username,
                ":password" => $password
            ];
            return $this->db->select($sql,$array,0);
        }


    }
?>