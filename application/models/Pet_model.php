<?php
class Pet_model extends My_Model {

    function __construct()
    {
        parent::__construct();
        $this->table = 'pet';
    }

    public function getLastestPet() {

        $query = $this->db->query("SELECT * FROM pet");

        return $query->result();
    }
    public function getPetSale(){
        $query = $this->db->query("SELECT * FROM pet WHERE sale_id != '' ");

        return $query->result();
    }

    public function delete_pet_id($id){
        $this->db->where('id',$id);
        $this->db->delete('pet');
    }
    public function getInfoPet($id){
        $query = $this->db->query("SELECT * FROM pet WHERE id = '$id' ");

        return $query->result();
    }
    public function getPetBuild(){
        $query = $this->db->query("SELECT * FROM pet WHERE pet.tt = 1 ");

        return $query->result();
    }
    
}