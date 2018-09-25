<?php 

class M_nilai_mapel extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls($user) {
        if ($user == 1){
            $sql = "SELECT * FROM tb_siswa INNER JOIN tb_kelas k USING(id_kelas)
                                INNER JOIN tb_mapel m USING(id_kelas)
                                ORDER BY m.nama_mapel,nama_siswa";
            $query = $this->db->query($sql);
            if ($query->num_rows() > 0) {
                $result = $query->result_array();
                $query->free_result();
                return $result;
            } else {
                return array();
            }
        } else {
            $sql = "SELECT * FROM tb_siswa INNER JOIN tb_kelas k USING(id_kelas)
                                INNER JOIN tb_mapel m USING(id_kelas)
                                WHERE  m.id_user = $user
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

    public function ls2($user) {
            $sql = "SELECT * FROM tb_siswa INNER JOIN tb_kelas k USING(id_kelas)
                                INNER JOIN tb_mapel m USING(id_kelas)
                                WHERE k.id_user = $user
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

    public function view($kode1,$kode2) {
        $sql = "SELECT * FROM tb_detail_nilai d
                    INNER JOIN tb_siswa s USING(id_siswa)
                    INNER JOIN tb_mapel m USING(id_mapel)
                    WHERE s.id_siswa=$kode1 AND m.id_mapel=$kode2";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function lihat($kode1,$kode2) {
        $sql = "SELECT * FROM tb_siswa s, tb_mapel m
                    WHERE s.id_siswa=$kode1 AND m.id_mapel=$kode2";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function tambah_nilai($params) {
        $sql = "INSERT INTO `tb_detail_nilai` (`id_siswa`,`id_mapel`,`uh1`,`uh2`,uh3,uh4,uh5,uh6,ket1,ket2,ket3,ket4,uts,uas,pengetahuan_akhir,keterampilan_akhir)
                    VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $query = $this->db->query($sql, $params);
        return $query;
    } 

    public function edit($params) {
        $sql = "UPDATE `tb_detail_nilai` SET id_siswa=?,`id_mapel`=?,`uh1`=?,`uh2`=?,uh3=?,uh4=?,uh5=?,uh6=?,ket1=?,ket2=?,ket3=?,ket4=?,uts=?,uas=?,pengetahuan_akhir=?,keterampilan_akhir=?
                    WHERE `id_detail_nilai`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
