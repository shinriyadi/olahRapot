<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class nilai_kepribadian extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_nilai_kepribadian');
        $this->load->model('m_user');
        $this->load->model('m_siswa');
        $this->load->model('m_ekstra');
    }

    public function dkv() {
        $data['ls'] = $this->m_nilai_kepribadian->dkv();
            parent::display('nilai_kepribadian/list_dkv', $data);        
    }
    public function tkj() {
        $data['ls'] = $this->m_nilai_kepribadian->tkj();      
        parent::display('nilai_kepribadian/list_tkj', $data);
    }
    public function tb() {
        $data['ls'] = $this->m_nilai_kepribadian->tb();      
        parent::display('nilai_kepribadian/list_tb', $data);
    }

    public function edit($kode) {
        $cek = $this->m_nilai_kepribadian->view($kode);

        if($cek == NULL) {
            $data['v'] = $this->m_nilai_kepribadian->lihat($kode);
            $data['e'] = $this->m_ekstra->ls();
            $this->load->view('admin/nilai_kepribadian/edit1', $data);             
        } else {
            $data['v'] = $cek;
            $data['e'] = $this->m_ekstra->ls();
            $this->load->view('admin/nilai_kepribadian/edit2', $data);
        }
        
    }

    public function detail($kode) {
        $cek = $this->m_nilai_kepribadian->view($kode);

        if($cek == NULL) {
            $data['v'] = $this->m_nilai_kepribadian->lihat($kode);
            $this->load->view('admin/nilai_kepribadian/edit1', $data);             
        } else {
            $data['v'] = $cek;
            $this->load->view('admin/nilai_kepribadian/detail', $data);
        }
        
    }

    public function tambah_nilai() {
        $params = array (
            $this->input->post('id_siswa'),
            $this->input->post('id_ekstra'),
            $this->input->post('ket_ekstra'),
            $this->input->post('sakit'),
            $this->input->post('izin'),
            $this->input->post('tanpa'),            
        );

        $cek = $this->m_nilai_kepribadian->tambah_nilai($params);
        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/nilai_kepribadian/dkv');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/nilai_kepribadian/dkv');
        }
    }

    public function edit_process() {
        $params = array (
            $this->input->post('id_ekstra'),
            $this->input->post('ket_ekstra'),
            $this->input->post('sakit'),
            $this->input->post('izin'),
            $this->input->post('tanpa'),            
            $this->input->post('id_kepribadian'),
        );

        $cek = $this->m_nilai_kepribadian->edit($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/nilai_kepribadian/dkv');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/nilai_kepribadian/dkv');
        }
    }
}

?>