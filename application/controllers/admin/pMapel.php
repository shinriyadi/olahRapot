<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class pMapel extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_pMapel');
    }

    public function index() {
        if (isset($_SESSION['admin'])) {
            $user = $_SESSION['admin'];
            $data['ls'] = $this->m_pMapel->ls($user);
            $data['mapel'] = $this->m_pMapel->view_mapel($user);
        } elseif (isset($_SESSION['guru'])){
            $user = $_SESSION['guru'];
            $data['ls'] = $this->m_pMapel->ls($user);
            $data['mapel'] = $this->m_pMapel->view_mapel($user);
        } elseif (isset($_SESSION['wali_kelas'])){
            $user = $_SESSION['wali_kelas'];
            $data['ls'] = $this->m_pMapel->ls($user);
            $data['mapel'] = $this->m_pMapel->view_mapel($user);
        }
        parent::display('pengaturan/pMapel', $data);
    }

    public function add_process() {
        $params = array(
            $this->input->post('id_mapel'),
            $this->input->post('pengA'),
            $this->input->post('pengB'),
            $this->input->post('pengC'),
            $this->input->post('pengD'),
            $this->input->post('ketA'),
            $this->input->post('ketB'),
            $this->input->post('ketC'),
            $this->input->post('ketD'),
        );

        $cek = $this->m_pMapel->add($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menambah Data

                    </div>'
                );
            redirect('admin/pMapel');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menambah Data
                        
                    </div>'
                );
            redirect('admin/pMapel');
        }
    }

    public function detail($kode) {
        $data['v'] = $this->m_pMapel->view($kode);
        $this->load->view('admin/pengaturan/detail_deskripsi', $data);
    }

    public function edit($kode) {
        $data['v'] = $this->m_pMapel->view($kode);
        $this->load->view('admin/pengaturan/edit_deskripsi',$data);
    }

    public function edit_process() {
        $params = array(            
            $this->input->post('pengA'),
            $this->input->post('pengB'),
            $this->input->post('pengC'),
            $this->input->post('pengD'),
            $this->input->post('ketA'),
            $this->input->post('ketB'),
            $this->input->post('ketC'),
            $this->input->post('ketD'),
            $this->input->post('id_keterangan'),
        );

        $cek = $this->m_pMapel->edit($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                      Berhasil Merubah Data 

                    </div>'
                );
            redirect('admin/pMapel');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/pMapel');
        }
    }

    public function delete($id) {
        $cek = $this->m_pMapel->delete($id);

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
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
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