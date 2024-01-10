<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Teachers_model extends Model {
    public function addTeacher($name, $profilePicPath) {
        // Prepare data for insertion
        $data = [
            'Name' => $name,
            'ProfilePicPath' => $profilePicPath
        ];
        
        // Insert data into the database
        return $this->db->table('teachers')->insert($data);
    } public function getTeachers() {
        // Query to select all teachers
     return $this->db->table('Teachers')->get_all();
       
    }
    
}
?>
