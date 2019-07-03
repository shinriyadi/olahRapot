<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Prestasi extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_prestasi');
        $this->load->model('m_user');
        $this->load->model('m_siswa');
        $this->load->model('m_ekstra');
    }

    public function dkv() {
        if(isset($_SESSION['admin'])|isset($_SESSION['bk'])){
            $data['ls'] = $this->m_prestasi->dkv();
            parent::display('prestasi/list', $data);
        }else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Anda tidak punya hak akes

                    </div>'
                );
            redirect('admin/dashboard');
        }         
    }
    public function tkj() {
        if(isset($_SESSION['admin'])|isset($_SESSION['bk'])){
            $data['ls'] = $this->m_prestasi->tkj();
            parent::display('prestasi/list', $data);
        }else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Anda tidak punya hak akes

                    </div>'
                );
            redirect('admin/dashboard');
        }
    }
    public function tb() {
        if(isset($_SESSION['admin'])|isset($_SESSION['bk'])){
            $data['ls'] = $this->m_prestasi->tb();
            parent::display('prestasi/list', $data);
        }else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Anda tidak punya hak akes

                    </div>'
                );
            redirect('admin/dashboard');
        }
    }
    public function kelas() {
        if(isset($_SESSION['wali_kelas'])){
            $user = $_SESSION['wali_kelas'];
            $data['ls'] = $this->m_prestasi->kelas($user);      
            parent::display('prestasi/list', $data);
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Anda tidak punya hak akes

                    </div>'
                );
            redirect('admin/dashboard');
        } 
    }

    public function edit($kode) {
        $cek = $this->m_prestasi->view($kode);

        if($cek == NULL) {
            $data['v'] = $this->m_prestasi->lihat($kode);
            $this->load->view('admin/prestasi/edit1', $data);             
        } else {
            $data['v'] = $cek;
            $this->load->view('admin/prestasi/edit2', $data);
        }
        
    }

    public function detail($kode) {
        $cek = $this->m_prestasi->view($kode);

        if($cek == NULL) {
            $data['v'] = $this->m_prestasi->lihat($kode);
            $this->load->view('admin/prestasi/edit1', $data);             
        } else {
            $data['v'] = $cek;
            $this->load->view('admin/prestasi/detail', $data);
        }
        
    }

    public function tambah_nilai() {
        $params1 = array (
            $this->input->post('id_siswa'),
            $this->input->post('pkl'),
            $this->input->post('lokasi'),
            $this->input->post('lama'),
            $this->input->post('keterangan_pkl'),           
        );

        $params2 = array (
            $this->input->post('id_siswa'),
            $this->input->post('prestasi'),
            $this->input->post('keterangan_prestasi'),           
        );

        $cek1 = $this->m_prestasi->tambah_pkl($params1);
        $cek2 = $this->m_prestasi->tambah_prestasi($params2);
        if ($cek1&$cek2) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/prestasi/dkv');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/prestasi/dkv');
        }
    }

    public function edit_process() {
        $params1 = array (
            $this->input->post('pkl'),
            $this->input->post('lokasi'),
            $this->input->post('lama'),
            $this->input->post('keterangan_pkl'),   
            $this->input->post('id_pkl'),        
        );

        $params2 = array (
            $this->input->post('prestasi'),
            $this->input->post('keterangan_prestasi'), 
            $this->input->post('id_prestasi'),          
        );

        $cek1 = $this->m_prestasi->edit_pkl($params1);
        $cek2 = $this->m_prestasi->edit_prestasi($params2);

        if ($cek1 & $cek2) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/prestasi/dkv');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/prestasi/dkv');
        }
    }
}

?>