<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Schoolfacilities_model extends Model {
    public function getAllFacilities() {
        // Query to select all facilities
        return $this->db->table('SchoolFacilities')->get_all();
    }
    public function addFacility($name, $description) {
        // Create an array of data to insert
        $data = [
            'Name' => $name,
            'Description' => $description
        ];

        // Insert data into the 'SchoolFacilities' table
        return $this->db->table('SchoolFacilities')->insert($data);
    }
}
?>
