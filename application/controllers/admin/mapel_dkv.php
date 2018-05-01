<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class mapel_dkv extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_mapel_dkv');
        $this->load->model('m_user');
        $this->load->model('m_kompetensi');
    }

    public function index() {
        $data['ls'] = $this->m_mapel_dkv->ls();
        $data['kelas'] = $this->m_mapel_dkv->kelas();
        $data['guru'] = $this->m_user->ls();
        $data['kompetensi'] = $this->m_kompetensi->ls();
        parent::display('mapel/list_mapel_dkv', $data);
    }

    public function add_process() {
    	$params = array(
    		$this->input->post('nama'),
    		$this->input->post('kompetensi'),
    		$this->input->post('guru'),
            $this->input->post('kelas'),
    	);

    	$cek = $this->m_mapel_dkv->add($params);

    	if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menambah Data

                    </div>'
                );
            redirect('admin/mapel_dkv');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menambah Data
                        
                    </div>'
                );
            redirect('admin/mapel_dkv');
        }
    }

    public function edit($kode) {
        $data['v'] = $this->m_mapel_dkv->view($kode);
        $data['guru'] = $this->m_user->ls();
        $data['komp'] = $this->m_kompetensi->ls();
        $this->load->view('admin/mapel/edit_dkv', $data);
    }

    public function edit_process() {
        $params = array(
            $this->input->post('guru'),
            $this->input->post('kompetensi'),
            $this->input->post('id_mapel'),
        );

        $cek = $this->m_mapel_dkv->edit($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/mapel_dkv');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/mapel_dkv');
        }
    }

    public function delete($id) {
    	$cek = $this->m_mapel_dkv->delete($id);

    	if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menghapus Data

                    </div>'
                );
            redirect('admin/mapel_dkv');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menghapus Data
                        
                    </div>'
                );
            redirect('admin/mapel_dkv');
        }
    }
}

?>