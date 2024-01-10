<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Schoolfacilities_model extends Model {
    public function getAllFacilities() {
        // Query to select all facilities
        return $this->db->table('SchoolFacilities')->get_all();
    }
    
}
?>
