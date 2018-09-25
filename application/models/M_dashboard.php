<?php 

class M_dashboard extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function siswa() {
        $sql = "SELECT count(id_siswa) as jumlah FROM `tb_siswa`";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function guru() {
        $sql = "SELECT count(id_user) as jumlah FROM `tb_user` where not id_user=1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function mapel() {
        $sql = "SELECT count(distinct(nama_mapel)) as jumlah FROM `tb_mapel`
                where not id_user=1";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function kelas() {
        $sql = "SELECT count(id_kelas) as jumlah FROM `tb_kelas`";
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