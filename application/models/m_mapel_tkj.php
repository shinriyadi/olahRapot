<?php 

class M_mapel_tkj extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls() {
        $sql = "SELECT * FROM tb_mapel 
                    JOIN tb_user u USING (id_user)
                    JOIN tb_kelas j USING (id_kelas)
                    JOIN tb_kompetensi k USING (id_kompetensi)
                    WHERE j.kode_jurusan='tkj'";
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
        $sql = "SELECT * FROM tb_kelas
                    WHERE kode_jurusan='tkj'";
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
        $sql = "INSERT INTO `tb_mapel` (`nama_mapel`,`id_kompetensi`,`id_user`,`id_kelas`)
                    VALUES (?,?,?,?)";
        $query = $this->db->query($sql,$params);
        return $query;
    }

    public function delete($kode) {
        $sql = "DELETE FROM `tb_mapel`
                    WHERE `id_mapel`='$kode'";
        $query = $this->db->query($sql);
        return $query;
    }

    public function view($kode) {
        $sql = "SELECT * FROM `tb_mapel`
                    WHERE `id_mapel`='$kode'";
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
        $sql = "UPDATE `tb_mapel` SET `id_user`=?,id_kompetensi=?
                    WHERE `id_mapel`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
