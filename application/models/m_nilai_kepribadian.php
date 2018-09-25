<?php 

class M_nilai_kepribadian extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function dkv() {
        $sql = "SELECT * FROM tb_siswa s INNER JOIN tb_kelas k USING(id_kelas)
                            WHERE kode_jurusan='dkv'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }  
    }
    public function tkj() {
        $sql = "SELECT * FROM tb_siswa s INNER JOIN tb_kelas k USING(id_kelas)
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
    public function tb() {
        $sql = "SELECT * FROM tb_siswa s INNER JOIN tb_kelas k USING(id_kelas)
                            WHERE kode_jurusan='tb'";
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
        $sql = "SELECT * FROM `tb_siswa` s JOIN tb_kelas k USING(id_kelas)
                    WHERE k.id_user = $user";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function delete($kode) {
        $sql = "DELETE FROM `tb_mapel`
                    WHERE `id_mapel`='$kode'";
        $query = $this->db->query($sql);
        return $query;
    }

    public function lihat($kode) {
        $sql = "SELECT * FROM  tb_siswa s
                    WHERE s.id_siswa=$kode";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function view($kode) {
        $sql = "SELECT * FROM tb_kepribadian k
                    JOIN tb_siswa s USING(id_siswa)
                    JOIN tb_ekstra e USING(id_ekstra)
                    WHERE s.id_siswa=$kode";
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
        $sql = "INSERT INTO `tb_kepribadian` (`id_siswa`,`id_ekstra`,`keterangan_ekstra`,`sakit`,izin,tanpa_keterangan)
                    VALUES (?,?,?,?,?,?)";
        $query = $this->db->query($sql, $params);
        return $query;
    } 

    public function edit($params) {
        $sql = "UPDATE tb_kepribadian SET `id_ekstra`=?,`keterangan_ekstra`=?,`sakit`=?,izin=?,tanpa_keterangan=?
                    WHERE `id_kepribadian`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
