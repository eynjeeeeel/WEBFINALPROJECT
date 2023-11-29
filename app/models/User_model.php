<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
    public function register($data)
    {
        $bind = array(
            'Firstname' => $data['firstname'],
            'Lastname' => $data['lastname'],
            'Email' => $data['email'],
            'Password' => $data['password'],
        );

        $this->db->table('account')->insert($bind);
    }

    public function authenticateUser($email, $password)
    {
        $user = $this->db->table('account')
            ->where('Email', $email)
            ->get();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return null;
        }
    }

    public function getUserDataById($id)
    {

        return $this->db->table('account')->where('id', $id)->get();

    }
}
?>
