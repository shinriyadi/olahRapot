<?php 

class M_guru extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls() {
        $sql = "SELECT * FROM `tb_user` WHERE `status` IN ('GURU','WALI KELAS','BK')
                    ORDER BY `nama_user`";
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
        $sql = "INSERT INTO `tb_user` (`username`,`nama_user`,`status`,`password`)
                    VALUES (?,?,?,?)";
        $query = $this->db->query($sql,$params);
        return $query;
    }

    public function delete($kode) {
        $sql = "DELETE FROM `tb_user`
                    WHERE `id_user`='$kode'";
        $query = $this->db->query($sql);
        return $query;
    }

    public function view($kode) {
        $sql = "SELECT * FROM `tb_user`
                    WHERE `id_user`='$kode'";
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
        $sql = "UPDATE `tb_user` SET `username`=?,`nama_user`=?,`status`=?,`password`=?
                    WHERE `id_user`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
