<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Healthinformation_model extends Model {
    public function getHealthInfoByChildId($childId) {
        return $this->db->table('HealthInformation')
                        ->where('ChildID', $childId)
                        ->get();
    }
    public function addHealthInfo($childId, $bloodType, $allergies) {
        $data = [
            'ChildID' => $childId,
            'BloodType' => $bloodType,
            'Allergies' => $allergies
        ];
    
        return $this->db->table('HealthInformation')->insert($data);
    }
    public function updateHealthInfo($childId, $bloodType, $allergies) {
        $data = [
            'BloodType' => $bloodType,
            'Allergies' => $allergies
        ];
        $this->db->table('HealthInformation')->where('ChildID', $childId)->update( $data);
    }
}
?>
