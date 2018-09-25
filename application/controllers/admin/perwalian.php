<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Perwalian extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_perwalian');
    }

    public function index() {
        $data['ls'] = $this->m_perwalian->ls();
        parent::display('perwalian/list', $data);
    }

    public function edit($kode) {
        $data['v'] = $this->m_perwalian->view($kode);
        $data['g'] = $this->m_perwalian->guru();
        $this->load->view('admin/perwalian/edit',$data);
    }

    public function edit_process() {
        $params = array(
            $this->input->post('id_user'),
            $this->input->post('id_kelas'),
        );

        $this->m_perwalian->update_wali($this->input->post('id_user'));
        $this->m_perwalian->update_guru($this->input->post('user'));
        $cek = $this->m_perwalian->edit($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg',
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                      Berhasil Merubah Data 

                    </div>'
                );
            redirect('admin/perwalian');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/perwalian');
        }
    }
}

?>