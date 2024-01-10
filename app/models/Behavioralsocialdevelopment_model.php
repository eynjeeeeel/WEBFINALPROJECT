<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Behavioralsocialdevelopment_model extends Model {
    public function getDevelopmentInfoByChildId($childId) {
        return $this->db->table('BehavioralSocialDevelopment')
                        ->where('ChildID', $childId)
                        ->get();
    }
    public function addDevelopmentInfo($childId, $behavior, $socialSkills) {
        $data = [
            'ChildID' => $childId,
            'Behavior' => $behavior,
            'SocialSkills' => $socialSkills
        ];
    
        return $this->db->table('BehavioralSocialDevelopment')->insert($data);
    }
    public function updateDevelopmentInfo($childId, $behavior, $socialSkills) {
        $data = [
            'Behavior' => $behavior,
            'SocialSkills' => $socialSkills
        ];
        $this->db->table('BehavioralSocialDevelopment')->where('ChildID', $childId)->update($data);
    }
}
?>
