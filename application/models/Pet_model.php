<?php
class Pet_model extends CI_Model {
    public function getLastestPet() {
        $query = $this->db->query("select * from pet");
        return $query->result();
    }
}