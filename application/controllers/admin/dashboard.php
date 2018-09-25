<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class Dashboard extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_dashboard');
        $this->load->model('m_sekolah');
    }

    function index() {
        $data['guru'] = $this->m_dashboard->guru();
        $data['siswa'] = $this->m_dashboard->siswa();
        $data['mapel'] = $this->m_dashboard->mapel();
        $data['kelas'] = $this->m_dashboard->kelas();
        $data['sekolah'] = $this->m_sekolah->ls();
        parent::display('dashboard', $data);
        
    }

}

?>