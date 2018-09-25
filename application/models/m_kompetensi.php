<?php 

class M_kompetensi extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls() {
        $sql = "SELECT * FROM tb_kompetensi ORDER BY kurikulum ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

}

?>
