<?php 

class m_ekstra extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls() {
        $sql = "SELECT * FROM `tb_ekstra` ORDER BY nama_ekstra";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function add($params) {
        $sql = "INSERT INTO `tb_ekstra` (`nama_ekstra`)
                    VALUES (?)";
        $query = $this->db->query($sql,$params);
        return $query;
    }

    public function delete($kode) {
        $sql = "DELETE FROM `tb_ekstra`
                    WHERE `id_ekstra`='$kode'";
        $query = $this->db->query($sql);
        return $query;
    }

    public function view($kode) {
        $sql = "SELECT * FROM `tb_ekstra`
                    WHERE `id_ekstra`='$kode'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function edit($params) {
        $sql = "UPDATE `tb_ekstra` SET `nama_ekstra`=?
                    WHERE `id_ekstra`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
