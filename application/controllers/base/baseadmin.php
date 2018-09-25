<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Baseadmin extends CI_Controller {

    public function __construct() {

        parent::__construct();
        if (!isset($_SESSION['admin']) && !isset($_SESSION['wali_kelas']) && !isset($_SESSION['guru']) && !isset($_SESSION['bk'])) {
            redirect('login');
        }

        $this->load->model('m_user');
    }

    public function display($file, $dt = array()) {
        $kode_user = "";
        if(isset($_SESSION['admin'])) {
            $kode_user = $_SESSION['admin'];
        } elseif (isset($_SESSION['wali_kelas'])) {
            $kode_user = $_SESSION['wali_kelas'];
        } elseif (isset($_SESSION['guru'])) {
            $kode_user = $_SESSION['guru'];
        } elseif (isset($_SESSION['bk'])) {
            $kode_user = $_SESSION['bk'];
        }

        $dt['msg'] = $this->session->flashdata('msg');
        $kk['vUser'] = $this->m_user->view($kode_user);
        $kk['url'] = $this->uri->segment(2);

        if (count($dt != 0)) {
            $this->load->view('base/header', $kk);
            $this->load->view('base/sidebar');
            $this->load->view('admin/' . $file, $dt);
            $this->load->view('base/footer');
        } else {
            $this->load->view('base/header', $kk);
            $this->load->view('base/header');
            $this->load->view('admin/' . $file);
            $this->load->view('base/footer');
        }
    }

}
?>

