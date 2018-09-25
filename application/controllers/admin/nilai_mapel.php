<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Nilai_mapel extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_nilai_mapel');
        $this->load->model('m_user');
        $this->load->model('m_siswa');
    }

    public function index() {
        if (isset($_SESSION['admin'])) {
            $user = $_SESSION['admin'];
            $data['ls'] = $this->m_nilai_mapel->ls($user);
        } elseif (isset($_SESSION['guru'])){
            $user = $_SESSION['guru'];
            $data['ls'] = $this->m_nilai_mapel->ls($user);
        } elseif (isset($_SESSION['wali_kelas'])){
            $user = $_SESSION['wali_kelas'];
            $data['ls'] = $this->m_nilai_mapel->ls($user);
        }        
        parent::display('nilai_mapel/list', $data);
    }

    public function nilai_kelas() {
        if (isset($_SESSION['admin'])) {
            $user = $_SESSION['admin'];
            $data['ls'] = $this->m_nilai_mapel->ls($user);
        } elseif (isset($_SESSION['guru'])){
            $user = $_SESSION['guru'];
            $data['ls'] = $this->m_nilai_mapel->ls($user);
        } elseif (isset($_SESSION['wali_kelas'])){
            $user = $_SESSION['wali_kelas'];
            $data['ls'] = $this->m_nilai_mapel->ls2($user);
        }        
        parent::display('nilai_mapel/kelas', $data);
    }

    public function edit($kode1,$kode2) {
        $cek = $this->m_nilai_mapel->view($kode1,$kode2);

        if($cek == NULL) {
            $data['v'] = $this->m_nilai_mapel->lihat($kode1,$kode2);
            $this->load->view('admin/nilai_mapel/edit1', $data);             
        } else {
            $data['v'] = $cek;
            $this->load->view('admin/nilai_mapel/edit2', $data);
        }
        
    }

    public function detail($kode1,$kode2) {
        $cek = $this->m_nilai_mapel->view($kode1,$kode2);

        if($cek == NULL) {
            $data['v'] = $this->m_nilai_mapel->lihat($kode1,$kode2);
            $this->load->view('admin/nilai_mapel/edit1', $data);             
        } else {
            $data['v'] = $cek;
            $this->load->view('admin/nilai_mapel/detail', $data);
        }
        
    }

    public function tambah_nilai() {
        $array_penge = array (
            $this->input->post('uh1'),
            $this->input->post('uh2'),
            $this->input->post('uh3'),
            $this->input->post('uh4'),
            $this->input->post('uh5'),
            $this->input->post('uh6'),
        );
        $uts=$this->input->post('uts');
        $uas=$this->input->post('uas');
        $penge = array_filter($array_penge);

        if(empty($penge)){
          $rata_pengetahuan = 0;
        } else {
          $rata_pengetahuan = ceil(array_sum($penge)/count($penge));
        }

        $pengetahuan=$rata_pengetahuan*0.6+$uts*0.1+$uas*0.3;

        $array_ket = array (
            $this->input->post('ket1'),
            $this->input->post('ket2'),
            $this->input->post('ket3'),
            $this->input->post('ket4'),
        );
        $kete = array_filter($array_ket);
        $rata_kete = ceil(array_sum($kete)/count($kete));

        $params = array(
            $this->input->post('id_siswa'),
            $this->input->post('id_mapel'),
            $this->input->post('uh1'),
            $this->input->post('uh2'),
            $this->input->post('uh3'),
            $this->input->post('uh4'),
            $this->input->post('uh5'),
            $this->input->post('uh6'),
            $this->input->post('ket1'),
            $this->input->post('ket2'),
            $this->input->post('ket3'),
            $this->input->post('ket4'),
            $this->input->post('uts'),
            $this->input->post('uas'),
            $pengetahuan,
            $rata_kete,
        );

        $cek = $this->m_nilai_mapel->tambah_nilai($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/nilai_mapel');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/nilai_mapel');
        }
    }

    public function edit_process() {
        $array_penge = array (
            $this->input->post('uh1'),
            $this->input->post('uh2'),
            $this->input->post('uh3'),
            $this->input->post('uh4'),
            $this->input->post('uh5'),
            $this->input->post('uh6'),
        );
        $uts=$this->input->post('uts');
        $uas=$this->input->post('uas');
        $penge = array_filter($array_penge);

        if(empty($penge)){
          $rata_pengetahuan = 0;
        } else {
          $rata_pengetahuan = ceil(array_sum($penge)/count($penge));
        }

        $pengetahuan=$rata_pengetahuan*0.6+$uts*0.1+$uas*0.3;

        $array_ket = array (
            $this->input->post('ket1'),
            $this->input->post('ket2'),
            $this->input->post('ket3'),
            $this->input->post('ket4'),
        );
        $kete = array_filter($array_ket);
        $rata_kete = ceil(array_sum($kete)/count($kete));

        $params = array(
            $this->input->post('id_siswa'),
            $this->input->post('id_mapel'),
            $this->input->post('uh1'),
            $this->input->post('uh2'),
            $this->input->post('uh3'),
            $this->input->post('uh4'),
            $this->input->post('uh5'),
            $this->input->post('uh6'),
            $this->input->post('ket1'),
            $this->input->post('ket2'),
            $this->input->post('ket3'),
            $this->input->post('ket4'),
            $this->input->post('uts'),
            $this->input->post('uas'),
            $pengetahuan,
            $rata_kete,
            $this->input->post('id_detail')
        );

        $cek = $this->m_nilai_mapel->edit($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/nilai_mapel');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/nilai_mapel');
        }
    }

    public function delete($id) {
    	$cek = $this->m_mapel_tb->delete($id);

    	if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menghapus Data

                    </div>'
                );
            redirect('admin/mapel_tb');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menghapus Data
                        
                    </div>'
                );
            redirect('admin/mapel_tb');
        }
    }
}

?>