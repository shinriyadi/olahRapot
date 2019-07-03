<?php 

class M_sekolah extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls() {
        $sql = "SELECT * FROM `tb_sekolah`";
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
        $sql = "SELECT * FROM `tb_sekolah`
                    WHERE `id_sekolah`='$kode'";
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
        $sql = "UPDATE `tb_sekolah` SET `nama_sekolah`=?,alamat_sekolah=?,tahun_ajaran=?,semester=?,kepala_sekolah=?,sikap_spiritual=?
                    WHERE `id_sekolah`=?";
        $query = $this->db->query($sql, $params);
        return $query;
    }
}

?>
