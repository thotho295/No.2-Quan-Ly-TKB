<?php
require("../common/Database.php");
class Password
{
    private $db;
    public function _construct(){
        $this->db = new Database;
    }
    public function check_exist($login_id){
        $this->db->query('SELECT from admin WHERE login_id =:login_id');
        $this->db->bindParam(':login_id', $login_id, PDO::PARAM_STR);
//        if($this->db->execute()){
//            return true;
//        }else{
//            return false;
//        }
        $row = $this->db->single();
        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function update_password_token($login_id, $password_token){
        $this->db->query('UPDATE admin SET reset_password_token =:token WHERE login_id=:login_id');
        $this->db->bindParam(':login_id', $login_id, PDO::PARAM_STR);
        $this->db-> bindParam(':token',$password_token, PDO::PARAM_STR);
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function layout_reset(){
        $this->db->query('SELECT * from admin where reset_password_token IS NOT NULL');
        $row = $this->db->single();
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function delete_token(){
        $this->db->query('UPDATE admin SET reset_password_token ="" WHERE login_id=:login_id');
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}