<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	public function get_last_ten_entries()
    {
        $data = $this->db->table('account')->limit(10)->get()->result();
        return $data;
    }

    public function insert_entry()
    {
        $bind = array(
            'firstname' => $this->input->post('firstname'),
            'lastname'  => $this->input->post('lastname'),
            'email'     => $this->input->post('email'),
            'password'  => $this->input->post('password'),
        );

        $this->db->table('account')->insert($bind);
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
}
?>
