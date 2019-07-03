<?php 

class M_rekap extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function nilai($user) {
        $sql = "SELECT * FROM penge
                WHERE wali = $user ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function nilai2($user) {
        $sql = "SELECT * FROM keter
                WHERE wali = $user ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function mapel($user) {
        $sql = "SELECT * FROM tb_mapel m
                JOIN tb_kelas k using(id_kelas)               
                WHERE k.id_user = $user ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function kelas($user) {
        $sql = "SELECT DISTINCT * FROM tb_siswa s
                JOIN tb_detail_nilai d using(id_siswa) 
                JOIN tb_kelas k using(id_kelas)               
                WHERE k.id_user = $user 
                ORDER BY s.nama_siswa";
        $query = $this->db->query($sql);
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
