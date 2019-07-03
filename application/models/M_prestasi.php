<?php 

class M_prestasi extends CI_Model {

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
        $sql = "SELECT * FROM tb_prestasi , tb_pkl 
                    JOIN tb_siswa s USING(id_siswa)
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

    public function tambah_pkl($params) {
        $sql = "INSERT INTO `tb_pkl` (`id_siswa`,`mitra_pkl`,`lokasi_pkl`,lama_pkl,keterangan_pkl)
                    VALUES (?,?,?,?,?)";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    public function tambah_prestasi($params) {
        $sql = "INSERT INTO `tb_prestasi` (`id_siswa`,`jenis_prestasi`,`keterangan_prestasi`)
                    VALUES (?,?,?)";
        $query = $this->db->query($sql, $params);
        return $query;
    } 

    public function edit_pkl($params) {
        $sql = "UPDATE tb_pkl SET mitra_pkl=?, lokasi_pkl=?, lama_pkl=?, keterangan_pkl=?
                WHERE id_pkl=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }

    public function edit_prestasi($params) {
        $sql = "UPDATE tb_prestasi SET jenis_prestasi=?, keterangan_prestasi=?
                WHERE id_prestasi=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
