<?php

class Name_Model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function createName($options = array()) {        
        return $this->db->insert('names', $options);
    }

    function deleteName($options = array()) {        
        return $this->db->delete('names', $options);
    }
    
    private function getNames($options = array()) {  
        $result = $this->db->get_where('names', $options)->result_array();
    }
        
    function getNameById($name_id = array()) {        
        $names = $this->getNames(array('id'=>$name_id));
        return isset($names[0]) ? $names[0] : array();
    }
    
    function getNameByName($name_name = array()) {        
        $names = $this->getNames(array('name'=>$name_name));
        return isset($names[0]) ? $names[0] : array();
    }
    
    function existsName($name_name = array()) {        
        $name = $this->getNameByName($name_name);
        return isset($name) ? true : false;
    }

    function existsNonfundedName($name_name = array()) {        
        $name = $this->getNames(array('name'=>$name_name,'funded'=>0));
        return isset($name) ? true : false;
    }

    function getAllNames($funded = null) {
		$filter = '';
		if ($funded === 0) $filter = ' WHERE funded = 0';
		if ($funded == 1) $filter = ' WHERE funded = 1';		
        $names = $this->db->query('SELECT * FROM names'. $filter)->result_array();
        return isset($names) ? $names : array();
    }


}

?>
