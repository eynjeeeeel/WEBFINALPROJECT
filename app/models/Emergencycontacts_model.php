<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Emergencycontacts_model extends Model {
    public function getEmergencyContactsByChildId($childId) {
        return $this->db->table('EmergencyContacts')
                        ->where('ChildID', $childId)
                        ->get();
    }
    public function addEmergencyContact($childId, $name, $contact) {
        $data = [
            'ChildID' => $childId,
            'Name' => $name,
            'ContactNumber' => $contact
        ];
    
        return $this->db->table('EmergencyContacts')->insert($data);
    }
    public function updateEmergencyContact($childId, $name, $contact) {
        $data = [
            'Name' => $name,
            'ContactNumber' => $contact
        ];
        $this->db->table('EmergencyContacts')->where('ChildID', $childId)->update($data);
    }
}
?>
