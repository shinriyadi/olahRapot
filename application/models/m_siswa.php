<?php 

class m_siswa extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls() {
        $sql = "SELECT * FROM `tb_siswa` JOIN tb_kelas USING(id_kelas)";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function kelas() {
        $sql = "SELECT * FROM `tb_kelas` ORDER BY `tingkat`";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function cek_nis($nis) {
        $sql = "SELECT * FROM `tb_siswa` WHERE nis='$nis'";
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
        $sql = "INSERT INTO `tb_siswa` (`nis`,`nama_siswa`,id_kelas)
                    VALUES (?,?,?)";
        $query = $this->db->query($sql,$params);
        return $query;
    }

    public function delete($kode) {
        $sql = "DELETE FROM `tb_siswa`
                    WHERE `id_siswa`='$kode'";
        $query = $this->db->query($sql);
        return $query;
    }

    public function view($kode) {
        $sql = "SELECT * FROM `tb_siswa` JOIN `tb_kelas` USING(id_kelas)
                    WHERE `id_siswa`='$kode'";
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
        $sql = "UPDATE `tb_siswa` SET `nis`=?,`nama_siswa`=?,`id_kelas`=?
                    WHERE `id_siswa`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
