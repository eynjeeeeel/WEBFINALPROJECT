<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Admins_model extends Model {
    protected $table = 'Admins';
    public function insertAdmin($data) {
        // Hash the password
        $data['Password'] = password_hash($data['Password'], PASSWORD_DEFAULT);

        // Insert admin data
        return $this->db->table($this->table)->insert($data);
    }
    public function authenticate($email, $password) {
        $admin = $this->db->table($this->table)->where('Email', $email)->get();
        if ($admin && password_verify($password, $admin['Password'])) {
            return $admin;
        } else {
            return false;
        }
    }
}
?>
