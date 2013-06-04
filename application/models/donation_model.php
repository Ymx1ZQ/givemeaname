<?php

class Donation_Model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function createDonation($options = array()) {        
        return $this->db->insert('donations', $options);
    }

    function deleteDonation($options = array()) {        
        return $this->db->delete('donations', $options);
    }
    
    private function getDonations($options = array()) {  
        $names = $this->db->get_where('donations', $options)->result_array();
        return isset($names) ? $names : array();
    }
        
    function getDonationById($donation_id = array()) {        
        $donations = $this->getDonations(array('id'=>$donation_id));        
        return isset($donations[0]) ? $donations[0] : array();
    }
    
    function getDonationsByNameId($name_id = array()) {        
        $donations = $this->getDonations(array('name_id'=>$name_id));        
        return isset($donations) ? $donations : array();
    }
    
    function getMoneyDonatedByNameId($name_id = array()) {        
        $total_donations = $this->db->query('SELECT SUM(amount) AS total FROM donations WHERE name_id = '.$name_id)->result_array();
        return isset($total_donations[0]['total']) ? $total_donations[0]['total'] : 0;
    }
    
    function getHydratedDonationsByNameId($name_id) {
		$hydrated_donations = $this->db->query('SELECT * FROM donations JOIN meta ON donations.user_id = meta.user_id WHERE donations.name_id = ' . $name_id)->result_array();
		return isset($hydrated_donations) ? $hydrated_donations : array();
	}
}

?>
