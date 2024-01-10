<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Event_model extends Model {
    public function getEvents() {
        // Example query to fetch events
        return $this->db->table('events')->get_all();
    }
}
?>
