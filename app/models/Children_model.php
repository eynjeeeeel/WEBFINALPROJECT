<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Children_model extends Model {
    public function getChildDetails($parentId) {
        return $this->db->table('Children')
                        ->where('ParentID', $parentId)
                        ->get_all();
    }
    public function getChildbyID($childId) {
        return $this->db->table('Children')
                        ->where('ChildID', $childId)
                        ->get();
    }
    public function getChildbyIDs($childId) {
        return $this->db->table('Children as c')
        ->select('c.ChildID, c.Name as ChildName, c.Age, c.Birthday, c.Gender, c.Address, c.ParentID, c.PhotoPath, ec.EmergencyContactID, ec.Name as EmergencyContactName, ec.ContactNumber, d.Behavior, d.SocialSkills, g.GradeID, g.StudentID, g.SubjectID, g.Quarter, g.Grade, h.BloodType, h.Allergies')
        ->left_join('EmergencyContacts as ec', 'ec.ChildID = c.ChildID')
        ->left_join('behavioralsocialdevelopment as d', 'd.ChildID = c.ChildID')
        ->left_join('Grades as g', 'g.StudentID = c.ChildID')
        ->left_join('healthinformation as h', 'h.ChildID = c.ChildID')
                        ->where('c.ChildID', $childId)
                        ->get();
    }
    public function getStudent() {
        return $this->db->table('Children')
        ->get_all();
    }
    
    public function addChild($name, $age, $birthday, $gender, $address, $photoPath) {
        $formattedBirthday = (new DateTime($birthday))->format('Y-m-d');
    
        $data = [
            'Name' => $name,
            'Age' => (int)$age,
            'Birthday' => $formattedBirthday,
            'Gender' => $gender,
            'Address' => $address,
            'PhotoPath' => $photoPath
        ];
    
        return $this->db->table('Children')->insert($data);
    }
    public function updateChild($id, $name, $age, $birthday, $gender, $address) {
        $data = [
            'Name' => $name,
            'Age' => $age,
            'Birthday' => $birthday,
            'Gender' => $gender,
            'Address' => $address,
        ];
        $this->db->table('Children')->where('ChildID', $id)->update($data);
    }
    public function checkChild($idNumber, $birthday) {
        $result = $this->db->table('Children')
                           ->where('ChildID', $idNumber)
                           ->where('Birthday', $birthday)
                           ->get();
    
        if ($result === false) {
            // Handle the error or return false
            return false;
        }
    
        return count($result) > 0;
    }
    
    

public function updateParentId($idNumber, $parentId) {
    $data = ['ParentID' => $parentId];
    return  $this->db->table('Children')
             ->where('ChildID', $idNumber)
             ->update($data);
  
}

}
?>
