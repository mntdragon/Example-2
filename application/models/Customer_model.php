<?php Class Customer_model extends CI_model{
    public function getCustomers(){ // also start with function getCustomers()
        $this->db->select('fname, lname'); //method select
        $this->db->from('Customers');
        return $this->db->get()->result_array(); //return data from database
    }
}
