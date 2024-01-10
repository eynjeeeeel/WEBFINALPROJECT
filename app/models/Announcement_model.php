<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Announcement_model extends Model {
    public function getAnnouncements() {
        // Example query to fetch announcements
        return $this->db->table('announcements')->get_all();
    }
    public function addAnnouncement($title, $description) {
        $data = [
            'Title' => $title,
            'Description' => $description,
        ];

        return $this->db->table('announcements')->insert( $data);
    }
}
?>
