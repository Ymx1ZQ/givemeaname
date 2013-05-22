<?php

class User_Model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function __initialise($id) {
        $result = $this->db->query('
        SELECT * 
        FROM users
        JOIN meta
        ON users.id = meta.user_id
        WHERE users.id = '. $id)->result_array();        
        $this->user_data = $result[0];        
    }

    public function getUserData() {        
        $this->user_data['name_to_show'] = $this->nameToShow();
        return $this->user_data;
    }
    
    public function nameToShow() {
        $name_to_show = trim($this->user_data['first_name'] . ' ' . $this->user_data['last_name']);
        if ($name_to_show == '') $name_to_show = $this->user_data['email'];
        return $name_to_show;		
	}

    public function getId() {
        return $this->user_data['id'];
    }
    
    public function getUserGroup() {
		return $this->db->query('SELECT * FROM groups WHERE id = ' . $this->user_data[0]['group_id'])->result_array();
    }        

    public function getMail() {
		return $this->user_data[0]['email'];
	}

    public function updateMail($options) {
		return $this->db->query("UPDATE users SET email = '".$options['email']."' WHERE id = '".$options['user_id']."'");
	}

	public function delete_account() {
		return $this->db->query("DELETE FROM users WHERE id = '".$this->getId()."'");
	}

    function getUserByEmail($email) {
        $users = $this->db->get_where('users', array('email' => $email))->result_array();
        if (empty($users))
            return false;
        return $users[0];
    }
    
	function getUserById($id) {
        $users = $this->db->get_where('users', array('id' => $id))->result_array();
        if (empty($users))
            return false;
        return $users[0];
    }

    function existsMail($mail) {
        return $this->getUserByEmail($mail) !== false ? true : false;
    }

}

?>
