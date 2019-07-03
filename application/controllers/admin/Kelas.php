<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Kelas extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_kelas');
        $this->load->library('PHPExcel');
    }

    public function index() {
        $data['ls'] = $this->m_kelas->ls();
        parent::display('kelas/list', $data);
    }

    public function add_process() {
    	$params = array(
    		$this->input->post('kode_kelas'),
    		$this->input->post('nama'),
    	);

    	$cek = $this->m_kelas->add($params);

    	if ($cek) {
            $this->session->set_flashdata('msg', 'Berhasil Menambah Data~1');
            redirect('admin/kelas');
        } else {
            $this->session->set_flashdata('msg', 'Gagal Menambah Data~0');
            redirect('admin/kelas');
        }
    }

    public function edit($kode) {
        $data['v'] = $this->m_kelas->view($kode);
        $this->load->view('admin/kelas/edit',$data);
    }

    public function edit_process() {
        $params = array(
            $this->input->post('nis'),
            $this->input->post('nama'),
            $this->input->post('id_kelas'),
        );

        $cek = $this->m_kelas->edit($params);

        if ($cek) {
            $this->session->set_flashdata('msg', 'Berhasil Merubah Data~1');
            redirect('admin/gudang');
        } else {
            $this->session->set_flashdata('msg', 'Gagal Merubah Data~0');
            redirect('admin/kelas');
        }
    }

    public function delete($id) {
    	$cek = $this->m_kelas->delete($id);

    	if ($cek) {
            $this->session->set_flashdata('msg', 'Berhasil Menghapus Data~1');
            redirect('admin/kelas');
        } else {
            $this->session->set_flashdata('msg', 'Gagal Menghapus Data~0');
            redirect('admin/kelas');
        }
    }
}

?>