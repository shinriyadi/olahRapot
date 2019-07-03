<?php 

class M_pMapel extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls($user) {
        if ($user == 1){
            $sql = "SELECT * FROM tb_keterangan INNER JOIN tb_mapel m USING(id_mapel)
                                INNER JOIN tb_kelas k USING(id_kelas)
                                ORDER BY m.nama_mapel";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return array();
            }
        } else {
            $sql = "SELECT * FROM tb_keterangan INNER JOIN tb_mapel m USING(id_mapel)
                                INNER JOIN tb_kelas k USING(id_kelas)
                                WHERE m.id_user=$user
                                ORDER BY m.nama_mapel";
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

    public function add($params) {
        $sql = "INSERT INTO tb_keterangan (id_mapel,a_pengetahuan,b_pengetahuan,c_pengetahuan,d_pengetahuan,
                    a_keterampilan,b_keterampilan,c_keterampilan,d_keterampilan)
                    VALUES (?,?,?,?,?,?,?,?,?)";
        $query = $this->db->query($sql,$params);
        return $query;
    }
    public function kkm($params) {
        $sql = "UPDATE `tb_mapel` SET `kkm_pengetahuan`=?,`kkm_keterampilan`=?
                    WHERE `id_mapel`=?";
        $query = $this->db->query($sql,$params);
        return $query;
    }

    public function view_mapel($user) {
        if ($user == 1){
            $sql = "SELECT * FROM tb_mapel m LEFT OUTER JOIN tb_kelas k USING(id_kelas)
                                WHERE m.id_user != 1 AND kkm_pengetahuan IS NULL OR kkm_pengetahuan=0
                                ORDER BY m.nama_mapel";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return array();
            }
        } else {
            $sql = "SELECT * FROM tb_mapel m LEFT OUTER JOIN tb_kelas k USING(id_kelas)
                                WHERE m.id_user = $user AND (kkm_pengetahuan IS NULL OR kkm_pengetahuan=0)
                                ORDER BY m.nama_mapel";
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

    public function delete($kode) {
        $sql = "DELETE FROM `tb_keterangan`
                    WHERE `id_keterangan_mapel`='$kode'";
        $query = $this->db->query($sql);
        return $query;
    }

    public function delete2($kode) {
        $sql = "UPDATE tb_mapel m SET kkm_pengetahuan = 0, kkm_keterampilan = 0
                WHERE m.id_mapel = $kode";
        $query = $this->db->query($sql);
        return $query;
    }

    public function view($kode) {
        $sql = "SELECT * FROM `tb_keterangan` JOIN tb_mapel USING(id_mapel) JOIN tb_kelas USING(id_kelas)
                    WHERE `id_keterangan_mapel`='$kode'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function view_kkm($kode) {
        $sql = "SELECT * FROM `tb_mapel` JOIN tb_keterangan USING(id_mapel)
                    WHERE `id_keterangan_mapel`='$kode'";
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
        $sql = "UPDATE `tb_keterangan` SET `a_pengetahuan`=?,`b_pengetahuan`=?,`c_pengetahuan`=?,`d_pengetahuan`=?,a_keterampilan=?,b_keterampilan=?,c_keterampilan=?,d_keterampilan=?
                    WHERE `id_keterangan_mapel`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    public function edit_kkm($params) {
        $sql = "UPDATE `tb_mapel` SET `kkm_pengetahuan`=?,`kkm_keterampilan`=?
                    WHERE `id_mapel`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
