<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Subjects_model extends Model {
    public function getClasses() {
        $sql = "SELECT s.Name AS SubjectName, t.Name AS TeacherName, t.ProfilePicPath AS ProfilePicPath, s.AgeGroup, s.Time, s.Capacity, s.Image 
                FROM Subjects s 
                JOIN TeacherSubjects ts ON s.SubjectID = ts.SubjectID
                JOIN Teachers t ON ts.TeacherID = t.TeacherID";
        return $this->db->raw($sql);
    }
    public function addSubject($name, $ageGroup, $time, $capacity, $imagePath) {
        // Prepare data for insertion
        $data = [
            'Name' => $name,
            'AgeGroup' => $ageGroup,
            'Time' => $time,
            'Capacity' => $capacity,
            'Image' => $imagePath
        ];
        
        // Insert data into the database
        return $this->db->table('subjects')->insert($data);
    }
    public function getSubjects() {
        // Query to select all subjects
        return  $this->db->table('Subjects')->get_all();
       
    }
}
?>
