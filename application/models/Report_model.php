<?php 

class Report_model extends My_Model{

    function __construct()
    {
        parent::__construct();
        $this->table = 'bill';
    }

    public function getInfoReport(){
        
        $query = $this->db->query(" SELECT * FROM bill join bill_detail on bill.id = bill_detail.bill_id
                                                       join food on bill_detail.food_id = food.id
                                                       join item on bill_detail.item_id = item.id");
        return $query->result();
    }
   
   
}
?>