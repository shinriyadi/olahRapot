<?php

Class M_login extends CI_Model {

	public function __construct() {

        parent::__construct();
    }

// Read data using username and password
    public function cek_login($params) {
    	$sql = "SELECT * FROM `tb_user` WHERE username = ? AND `password` = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

}

?>