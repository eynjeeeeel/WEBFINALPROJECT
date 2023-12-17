<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
	
	public function get_last_ten_entries()
    {
        $data = $this->db->table('account')->limit(10)->get()->result();
        return $data;
    }

    public function getStudent()
    {
        return $this->db->table('students')->get_all();
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

    public function get_last_20_entries()
    {
        $data = $this->db->table('admin')->limit(20)->get()->result();
        return $data;
    }
    
    public function getAdmin()
    {
        return $this->db->table('admin')->get_all();
    }
    
    public function registerAdmin($data)
    {
        $hashedPassword = password_hash($data['password'], PASSWORD_DEFAULT);
    
        $adminData = array(
            'username' => $data['username'],
            'password' => $hashedPassword,
            'tech_id' => $data['tech_id'],
            'fname' => $data['fname'],
            'mname' => $data['mname'],
            'lname' => $data['lname'],
            'gender' => $data['gender'],
            'dob' => $data['dob'],
            'cnum' => $data['cnum'],
            'email' => $data['email'],
            'homeadd' => $data['homeadd'],
        );
    
        $this->db->table('admin')->insert($adminData);
    }
    
    public function updateAdminEntry()
    {
        $bind = array(
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            'tech_id' => $this->input->post('tech_id'),
            'fname' => $this->input->post('fname'),
            'mname' => $this->input->post('mname'),
            'lname' => $this->input->post('lname'),
            'gender' => $this->input->post('gender'),
            'dob' => $this->input->post('dob'),
            'cnum' => $this->input->post('cnum'),
            'email' => $this->input->post('email'),
            'homeadd' => $this->input->post('homeadd'),
            'date' => time(),
        );
    
        $this->db->table('admin')->where('id', $this->input->post('id'))->update($bind);
    }
    
    public function verifyAdmin($adminID)
    {
        $this->db->table('admin')
            ->where('id', $adminID)
            ->update(['IsVerified' => true]);
    }
    
    public function authenticateAdmin($username, $password)
    {
        $admin = $this->db->table('admin')
            ->where('username', $username)
            ->get();
    
        if ($admin && password_verify($password, $admin['password'])) {
            return $admin;
        } else {
            return null;
        }
    }
    
    public function getAdminDataById($adminId)
    {
        return $this->db->table('admin')->where('id', $adminId)->get();
    }
    

    // Integration with grades table
    // public function getGradesData()
    // {
    //     $data = $this->db->table('grades')->get_all();
    //     return $data;
    // }

    // Integration with acadprog table
    // public function saveAcademicProgress($acadprogData)
    // {
    //     $this->db->table('acadprog')->insert($acadprogData);
    // }

    // Integration with club table
    // public function saveClubInvolvement($clubData)
    // {
    //     $this->db->table('club')->insert($clubData);
    // }

    public function registerstudent($data)
    {

        $data = array(
                'idnumber' => $data['idnumber'],
                'fullname' => $data['fullname'],
                'age'      => $data['age'],
                'birthday' => $data['birthday'],
                'gender'   => $data['gender'],
                'address'  => $data['address'],
            );

            $this->db->table('students')->insert($data);
        }


        public function addbsdev($data)
        {
    
            $data = array(
                    'behavior' => $data['behavior'],
                    'social_skills' => $data['social_skills'],
                );
    
                $this->db->table('bsdev')->insert($data);
        }

        public function addtinfo($data)
        {
    
            $data = array(
                    'teacher_name' => $data['teacher_name'],
                    'teacher_subject' => $data['teacher_subject'],
                );
    
                $this->db->table('tinfo')->insert($data);
        }

        public function addsfacilities($data)
        {
    
            $data = array(
                    'facility_name' => $data['facility_name'],
                    'facility_description' => $data['facility_description'],
                );
    
                $this->db->table('sfacilities')->insert($data);
        }

    public function addecon($data)
    {

        $data = array(
                'emergency_name' => $data['emergency_name'],
                'emergency_contact' => $data['emergency_contact'],
            );

            $this->db->table('econ')->insert($data);
    }

    public function addhinfo($data)
    {

        $data = array(
                'blood_type' => $data['blood_type'],
                'allergies' => $data['allergies'],
            );

            $this->db->table('hinfo')->insert($data);
    }

    public function getemen($id)
    {
        $data = $this->db->table('econ')->where('id', $id)->get();
        return $data;
    }

    
}

?>
