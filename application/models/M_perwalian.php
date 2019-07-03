<?php

Class M_perwalian extends CI_Model {

	public function __construct() {

        parent::__construct();
    }

    public function ls() {
        $sql = "SELECT * FROM tb_kelas  
                INNER JOIN  tb_user ON tb_kelas.id_user = tb_user.id_user
                ORDER BY nama_jurusan";

        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function view($kode) {
        $sql = "SELECT * FROM tb_kelas
                    WHERE id_kelas=$kode";
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
        $sql ="SELECT * FROM tb_user WHERE status LIKE 'guru' ";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function edit($params) {
        $sql = "UPDATE `tb_kelas` SET `id_user`=?
                    WHERE `id_kelas`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    public function update_wali($kode) {
        $sql = "UPDATE tb_user SET status='WALI KELAS'
                    WHERE id_user=?";
        $query = $this->db->query($sql, $kode);
        return $query;
    }

    public function update_guru($kode) {
        $sql = "UPDATE tb_user SET status='GURU'
                    WHERE id_user=?";
        $query = $this->db->query($sql, $kode);
        return $query;
    }

}

?>