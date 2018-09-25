<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Guru extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_guru');
    }

    public function index() {
        if(isset($_SESSION['admin'])){
            $data['ls'] = $this->m_guru->ls();
            parent::display('guru/list', $data);
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

    public function add_process() {
    	$params = array(
    		$this->input->post('username'),
    		$this->input->post('nama'),
    		$this->input->post('status'),
            $this->input->post('password'),
    	);

    	$cek = $this->m_guru->add($params);

    	if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menambah Data

                    </div>'
                );
            redirect('admin/guru');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-warning alert-dismissible" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menambah Data
                        
                    </div>'
                );
            redirect('admin/guru');
        }
    }

    public function edit($kode) {
        $data['v'] = $this->m_guru->view($kode);
        $this->load->view('admin/guru/edit',$data);
    }

    public function edit_process() {
        $params = array(
            $this->input->post('username'),
            $this->input->post('nama'),
            $this->input->post('status'),
            $this->input->post('password'),
            $this->input->post('id_user'),
        );

        $cek = $this->m_guru->edit($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/guru');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/guru');
        }
    }

    public function delete($id) {
    	$cek = $this->m_guru->delete($id);

    	if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menghapus Data

                    </div>'
                );
            redirect('admin/guru');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-warning alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menghapus Data
                        
                    </div>'
                );
            redirect('admin/guru');
        }
    }
}

?>