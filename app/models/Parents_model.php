<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Parents_model extends Model {
    private $table = 'Parents';
    public function __construct(){
        parent::__construct();
   
    }
    public function insertParent($data) {
        return $this->db->table($this->table)->insert($data);
    }
    public function authenticate($email, $password) {
        $parent = $this->db->table($this->table)->where('Email', $email)->get();
        if ($parent && password_verify($password, $parent['Password'])) {
            return $parent;
        } else {
            return false;
        }
    }
}
?>
