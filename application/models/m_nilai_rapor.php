<?php 

class m_nilai_rapor extends CI_Model {

    public function __construct() {

        parent::__construct();
    }

    public function ls($user) {
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

    public function view($kode) {
        $sql = "SELECT * FROM tb_siswa JOIN tb_kelas using(id_kelas)
                    WHERE id_siswa=$kode";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function sekolah() {
        $sql = "SELECT * FROM tb_sekolah";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function nasional1($kode) {
        $sql = "SELECT * FROM tb_detail_nilai d
                    join tb_mapel m using(id_mapel)
                    join tb_kompetensi k using(id_kompetensi)
                    join tb_keterangan using(id_mapel)
                    join tb_siswa s using(id_siswa)
                    where s.id_siswa = $kode and k.nama_kompetensi = 'muatan nasional' and k.kurikulum ='k13'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function nasional2($kode) {
        $sql = "SELECT * FROM tb_mapel m
                    JOIN tb_kompetensi k using(id_kompetensi)
                    JOIN tb_kelas l using(id_kelas)
                        WHERE id_kelas = (select id_kelas 
                        FROM tb_kelas join tb_siswa using(id_kelas)
                        WHERE id_siswa = $kode) and m.id_user = 1 and k.nama_kompetensi='muatan nasional'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function kewilayahan1($kode) {
        $sql = "SELECT * FROM tb_detail_nilai d
                    join tb_mapel m using(id_mapel)
                    join tb_kompetensi k using(id_kompetensi)
                    join tb_keterangan using(id_mapel)
                    join tb_siswa s using(id_siswa)
                    where s.id_siswa = $kode and k.nama_kompetensi = 'muatan kewilayahan' and k.kurikulum ='k13'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function kewilayahan2($kode) {
        $sql = "SELECT * FROM tb_mapel m
                    JOIN tb_kompetensi k using(id_kompetensi)
                    JOIN tb_kelas l using(id_kelas)
                        WHERE id_kelas = (select id_kelas 
                        FROM tb_kelas join tb_siswa using(id_kelas)
                        WHERE id_siswa = $kode) and m.id_user = 1 and k.nama_kompetensi='muatan kewilayahan'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function bidang1($kode) {
        $sql = "SELECT * FROM tb_detail_nilai d
                    join tb_mapel m using(id_mapel)
                    join tb_kompetensi k using(id_kompetensi)
                    join tb_keterangan using(id_mapel)
                    join tb_siswa s using(id_siswa)
                    where s.id_siswa = $kode and k.nama_kompetensi = 'dasar bidang keahlian' and k.kurikulum ='k13'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function bidang2($kode) {
        $sql = "SELECT * FROM tb_mapel m
                    JOIN tb_kompetensi k using(id_kompetensi)
                    JOIN tb_kelas l using(id_kelas)
                        WHERE id_kelas = (select id_kelas 
                        FROM tb_kelas join tb_siswa using(id_kelas)
                        WHERE id_siswa = $kode) and m.id_user = 1 and k.nama_kompetensi='dasar bidang keahlian'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function program_keahlian1($kode) {
        $sql = "SELECT * FROM tb_detail_nilai d
                    join tb_mapel m using(id_mapel)
                    join tb_kompetensi k using(id_kompetensi)
                    join tb_keterangan using(id_mapel)
                    join tb_siswa s using(id_siswa)
                    where s.id_siswa = $kode and k.nama_kompetensi = 'dasar program keahlian' and k.kurikulum ='k13'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function program_keahlian2($kode) {
        $sql = "SELECT * FROM tb_mapel m
                    JOIN tb_kompetensi k using(id_kompetensi)
                    JOIN tb_kelas l using(id_kelas)
                        WHERE id_kelas = (select id_kelas 
                        FROM tb_kelas join tb_siswa using(id_kelas)
                        WHERE id_siswa = $kode) and m.id_user = 1 and k.nama_kompetensi='dasar program keahlian'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function kompetensi1($kode) {
        $sql = "SELECT * FROM tb_detail_nilai d
                    join tb_mapel m using(id_mapel)
                    join tb_kompetensi k using(id_kompetensi)
                    join tb_keterangan using(id_mapel)
                    join tb_siswa s using(id_siswa)
                    where s.id_siswa = $kode and k.nama_kompetensi = 'kompetensi keahlian' and k.kurikulum ='k13'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function kompetensi2($kode) {
        $sql = "SELECT * FROM tb_mapel m
                    JOIN tb_kompetensi k using(id_kompetensi)
                    JOIN tb_kelas l using(id_kelas)
                        WHERE id_kelas = (select id_kelas 
                        FROM tb_kelas join tb_siswa using(id_kelas)
                        WHERE id_siswa = $kode) and m.id_user = 1 and k.nama_kompetensi='kompetensi keahlian'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function lokal1($kode) {
        $sql = "SELECT * FROM tb_detail_nilai d
                    join tb_mapel m using(id_mapel)
                    join tb_kompetensi k using(id_kompetensi)
                    join tb_keterangan using(id_mapel)
                    join tb_siswa s using(id_siswa)
                    where s.id_siswa = $kode and k.nama_kompetensi = 'muatan lokal' and k.kurikulum ='k13'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    public function lokal2($kode) {
        $sql = "SELECT * FROM tb_mapel m
                    JOIN tb_kompetensi k using(id_kompetensi)
                    JOIN tb_kelas l using(id_kelas)
                        WHERE id_kelas = (select id_kelas 
                        FROM tb_kelas join tb_siswa using(id_kelas)
                        WHERE id_siswa = $kode) and m.id_user = 1 and k.nama_kompetensi='muatan lokal'";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function pkl($kode) {
        $sql = "SELECT * FROM tb_pkl JOIN tb_siswa using(id_siswa)
                    WHERE id_siswa=$kode";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function ekstra($kode) {
        $sql = "SELECT * FROM tb_ekstra 
                    JOIN tb_kepribadian using(id_ekstra)
                    JOIN tb_siswa using(id_siswa)
                    WHERE id_siswa=$kode";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function prestasi($kode) {
        $sql = "SELECT * FROM tb_prestasi
                    JOIN tb_siswa using(id_siswa)
                    WHERE id_siswa=$kode";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function kehadiran($kode) {
        $sql = "SELECT * FROM tb_kepribadian
                    JOIN tb_siswa using(id_siswa)
                    WHERE id_siswa=$kode";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    public function wali($kode) {
        $sql = "SELECT * FROM tb_kelas
                    JOIN tb_siswa using(id_kelas)
                    JOIN tb_user using(id_user)
                    WHERE id_siswa=$kode";
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
