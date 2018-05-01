<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once( APPPATH . 'controllers/base/baseadmin.php' );

class dashboard extends baseadmin {

    public function __construct() {
        parent::__construct();
        $this->load->model('m_user');
    }

    function index() {
        $data['user'] = $this->m_user->hitung();
        parent::display('dashboard', $data);
        
    }

}

?>