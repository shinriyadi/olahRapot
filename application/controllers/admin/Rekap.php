<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Rekap extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_rekap');
    }

    public function index() {
        if (isset($_SESSION['wali_kelas'])){
            $user = $_SESSION['wali_kelas'];
            $data['nilai'] = $this->m_rekap->nilai($user);
            $data['mapel'] = $this->m_rekap->mapel($user);
            $data['kelas'] = $this->m_rekap->kelas($user);
            $this->load->view('admin/nilai_rapor/rekap', $data);
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

    public function rekap2() {
        if (isset($_SESSION['wali_kelas'])){
            $user = $_SESSION['wali_kelas'];
            $data['nilai'] = $this->m_rekap->nilai2($user);
            $data['mapel'] = $this->m_rekap->mapel($user);
            $data['kelas'] = $this->m_rekap->kelas($user);
            $this->load->view('admin/nilai_rapor/rekap2', $data);
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

    public function detail($kode) {
        $data['v'] = $this->m_nilai_rapor->view($kode);
        $data['sekolah'] = $this->m_nilai_rapor->sekolah();
        $data['nas1'] = $this->m_nilai_rapor->nasional1($kode);
        $data['nas2'] = $this->m_nilai_rapor->nasional2($kode);
        $data['wil1'] = $this->m_nilai_rapor->kewilayahan1($kode);
        $data['wil2'] = $this->m_nilai_rapor->kewilayahan2($kode);
        $data['bid1'] = $this->m_nilai_rapor->bidang1($kode);
        $data['bid2'] = $this->m_nilai_rapor->bidang2($kode);
        $data['prog1'] = $this->m_nilai_rapor->program_keahlian1($kode);
        $data['prog2'] = $this->m_nilai_rapor->program_keahlian2($kode);
        $data['komp1'] = $this->m_nilai_rapor->kompetensi1($kode);
        $data['komp2'] = $this->m_nilai_rapor->kompetensi2($kode);
        $data['lokal1'] = $this->m_nilai_rapor->lokal1($kode);
        $data['lokal2'] = $this->m_nilai_rapor->lokal2($kode);

        $data['pkl'] = $this->m_nilai_rapor->pkl($kode);
        $data['ekstra'] = $this->m_nilai_rapor->ekstra($kode);
        $data['prestasi'] = $this->m_nilai_rapor->prestasi($kode);
        $data['kehadiran'] = $this->m_nilai_rapor->kehadiran($kode);
        $data['wali'] = $this->m_nilai_rapor->wali($kode);

        $this->load->view('admin/nilai_rapor/print', $data);
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