<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class UserModel extends CI_Model {
    function __construct()
    {
        parent::__construct();
    }
    
    function insert($account,$password){
        $this->db->insert("user", 
            Array(
            "account" =>  $account,
            "password" => $password
        ));     
    }    
    
    function checkUserExist($account){
        $this->db->select("COUNT(*) AS users");
        $this->db->from("user");
        $this->db->where("account", $account);
        $query = $this->db->get(); 
        return $query->row()->users > 0 ;
    }
}