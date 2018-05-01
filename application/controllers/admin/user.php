<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class user extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
    }

    public function index() {
        $data['ls'] = $this->m_user->ls();
        parent::display('admin/dashboard', $data);
    }

    public function view($kode) {
        $data['vUser'] = $this->m_user->view($kode);
        $this->load->view('base/edit',$data);
    }

    public function edit() {
        if($this->input->post('password_lama') == $this->input->post('password_lama_benar')) {
            if($this->input->post('password_baru1') == $this->input->post('password_baru2')) {
                $params = array(
                    $this->input->post('username'),
                    $this->input->post('password_baru1'),
                    $this->input->post('kode_user'),                    
                );

                $cek = $this->m_user->edit($params);

                if($cek){
                    $this->session->set_flashdata('msg', 
                        '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i>

                            Berhasil Mengubah Password

                        </div>'
                    );
                    redirect('admin/dashboard');
                } else {
                    $this->session->set_flashdata('msg', '
                        <div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-warning"></i>

                            Gagal Mengubah Password

                        </div>');
                    redirect('admin/dashboard');
                }

            } else {
                $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-warning"></i>

                            Verifikasi Password Baru Harus Sama

                        </div>');
            redirect('admin/dashboard');
            }
        } else {
            $this->session->set_flashdata('msg', 
                    '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-warning"></i>

                            Masukkan Password Lama dengan Benar

                        </div>');
            redirect('admin/dashboard');
        }

    }
}

?>