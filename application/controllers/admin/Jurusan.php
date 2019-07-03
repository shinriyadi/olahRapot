<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Jurusan extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_jurusan');
    }

    public function index() {
        $data['ls'] = $this->m_jurusan->ls();
        parent::display('jurusan/list', $data);
    }

    public function add_process() {
    	$params = array(
    		$this->input->post('kode_jurusan'),
    		$this->input->post('nama'),
    	);

    	$cek = $this->m_jurusan->add($params);

    	if ($cek) {
            $this->session->set_flashdata('msg', 'Berhasil Menambah Data~1');
            redirect('admin/jurusan');
        } else {
            $this->session->set_flashdata('msg', 'Gagal Menambah Data~0');
            redirect('admin/jurusan');
        }
    }

    public function edit($kode) {
        $data['v'] = $this->m_jurusan->view($kode);
        $this->load->view('admin/jurusan/edit',$data);
    }

    public function edit_process() {
        $params = array(
            $this->input->post('kode_jurusan'),
            $this->input->post('nama'),
        );

        $cek = $this->m_jurusan->edit($params);

        if ($cek) {
            $this->session->set_flashdata('msg', 'Berhasil Merubah Data~1');
            redirect('admin/gudang');
        } else {
            $this->session->set_flashdata('msg', 'Gagal Merubah Data~0');
            redirect('admin/jurusan');
        }
    }

    public function delete($id) {
    	$cek = $this->m_jurusan->delete($id);

    	if ($cek) {
            $this->session->set_flashdata('msg', 'Berhasil Menghapus Data~1');
            redirect('admin/jurusan');
        } else {
            $this->session->set_flashdata('msg', 'Gagal Menghapus Data~0');
            redirect('admin/jurusan');
        }
    }
}

?>