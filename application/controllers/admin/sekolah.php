<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class sekolah extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_sekolah');
    }

    public function index() {
        $data['ls'] = $this->m_sekolah->ls();
        parent::display('sekolah/list', $data);
    }

    public function add_process() {
        $params = array(
            $this->input->post('nama_sekolah')
        );

        $cek = $this->m_sekolah->add($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menambah Data

                    </div>'
                );
            redirect('admin/sekolah');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menambah Data
                        
                    </div>'
                );
            redirect('admin/sekolah');
        }
    }

    public function edit($kode) {
        $data['v'] = $this->m_sekolah->view($kode);
        $this->load->view('admin/sekolah/edit',$data);
    }

    public function edit_process() {
        $params = array(
            $this->input->post('nama_sekolah'),
            $this->input->post('alamat_sekolah'),
            $this->input->post('tahun_ajaran'),
            $this->input->post('semester'),
            $this->input->post('kepala_sekolah'),
            $this->input->post('sikap_spiritual'),
            $this->input->post('id_sekolah'),
        );

        $cek = $this->m_sekolah->edit($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/sekolah');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/sekolah');
        }
    }

    public function delete($id) {
        $cek = $this->m_sekolah->delete($id);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menghapus Data

                    </div>'
                );
            redirect('admin/sekolah');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menghapus Data
                        
                    </div>'
                );
            redirect('admin/sekolah');
        }
    }
}

?>