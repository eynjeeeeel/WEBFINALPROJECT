<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	
	public function get_last_ten_entries()
    {
        $data = $this->db->table('account')->limit(10)->get()->result();
        return $data;
    }

    public function register($data)
    {
        $data = array(
            'firstname' => $data['firstname'],
            'lastname'  => $data['lastname'],
            'Email' => $data['email'],
            'Password' => $data['password'],
        );

        $this->db->table('account')->insert($data);
    }

    public function update_entry()
    {
        $bind = array(
            'firstname' => $this->input->post('firstname'),
            'lastname'  => $this->input->post('lastname'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password'),
            'date'      => time(),
        );

        $this->db->table('account')->where('id', $this->input->post('id'))->update($bind);
    }

    public function verifyUser($userID)
    {
        $this->db->table('account')
            ->where('id', $userID)
            ->update(['IsVerified' => true]);
    }

    public function authenticateUser($email, $password)
    {
        $user = $this->db->table('account')
            ->where('email', $email)
            ->get();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        } else {
            return null;
        }
    }

    public function getUserDataById($userId)
    {

        return $this->db->table('account')->where('id', $userId)->get();

    }
    public function registerWithImage($data)
    {
        $upload_config = array(
            'upload_path'   => './public/img/',
            'allowed_types' => 'jpg|jpeg|png',
            'max_size'      => 2048, // 2MB
            'encrypt_name'  => TRUE
        );

        $this->load->library('upload', $upload_config);

        if ($this->upload->do_upload()) {
            $file_data = $this->upload->data();

            $user_data = array(
                'idnumber' => $data['idnumber'],
                'fullname' => $data['fullname'],
                'age'      => $data['age'],
                'birthday' => $data['birthday'],
                'gender'   => $data['gender'],
                'address'  => $data['address'],
                'section'  => $data['section'],
                'picture'  => 'public/img/' . $file_data['file_name']
            );

            // Add session data
            $this->session->set_userdata('user_data', $user_data);

            $this->db->insert('students', $user_data);
            return true;
        } else {
            return false;
        }
    }
}
?>