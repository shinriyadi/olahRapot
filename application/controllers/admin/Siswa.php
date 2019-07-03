<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Siswa extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_siswa');
        $this->load->library('PHPExcel');
    }

    public function index() {
        $data['ls'] = $this->m_siswa->ls();
        $data['k'] = $this->m_siswa->kelas();
        parent::display('siswa/list', $data);
    }

    public function add_process() {
    	$params = array(
    		$this->input->post('nis'),
    		$this->input->post('nama'),
            $this->input->post('kelas'),
    	);

        $nis = $this->m_siswa->cek_nis($this->input->post('nis'));

        if ($nis) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        NIS sudah Ada ~ Gagal Menambah Data
                        
                    </div>'
                );
            redirect('admin/siswa');
        } else {
            $cek = $this->m_siswa->add($params);

            if ($cek) {
                $this->session->set_flashdata(
                    'msg', 
                    '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-check"></i>

                            Berhasil Menambah Data

                        </div>'
                    );
                redirect('admin/siswa');
            } else {
                $this->session->set_flashdata(
                    'msg', 
                    '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <i class="icon fa fa-warning"></i>

                            Gagal Menambah Data
                            
                        </div>'
                    );
                redirect('admin/siswa');
            }
        } 	
    }

    public function edit($kode) {
        $data['v'] = $this->m_siswa->view($kode);
        $data['k'] = $this->m_siswa->kelas();
        $this->load->view('admin/siswa/edit',$data);
    }

    public function edit_process() {
        $params = array(
            $this->input->post('nis'),
            $this->input->post('nama'),
            $this->input->post('kelas'),
            $this->input->post('id_siswa'),
        );

        $cek = $this->m_siswa->edit($params);

        if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Merubah Data

                    </div>'
                );
            redirect('admin/siswa');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Merubah Data
                        
                    </div>'
                );
            redirect('admin/siswa');
        }
    }

    public function delete($id) {
    	$cek = $this->m_siswa->delete($id);

    	if ($cek) {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-check"></i>

                        Berhasil Menghapus Data

                    </div>'
                );
            redirect('admin/siswa');
        } else {
            $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-waring alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Menghapus Data
                        
                    </div>'
                );
            redirect('admin/siswa');
        }
    }
}

?>