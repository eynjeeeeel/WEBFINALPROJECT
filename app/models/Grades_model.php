<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Grades_model extends Model {
    public function getGradesByChildId($childId) {
        // SQL query to fetch grades
        return $this->db->table('Grades')
        ->join('Subjects', 'Grades.SubjectID = Subjects.SubjectID')
        ->where('Grades.StudentID', $childId)
        ->get_all();
    }
}
?>
