<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Teachersubjects_model extends Model {
    public function addTeacherAssignment($data) {
        return $this->db->table('teachersubjects')->insert($data);
    }
}
?>
