<?php 

class Login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('m_login');
	}

	function index() {
		if(isset($_SESSION['admin']) || isset($_SESSION['wali_kelas']) || isset($_SESSION['guru']) || isset($_SESSION['bk'])){
			redirect('admin/dashboard');
		}
		$dt['msg'] = $this->session->flashdata('msg');
		$this->load->view('login', $dt);		
	}

	function login_process() {
		$params = array (
			$this->input->post('username'),
			$this->input->post('password')
			);

		$cek = $this->m_login->cek_login($params);

		if ($cek == NULL) {
		  $this->session->set_flashdata(
                'msg', 
                '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-bottom:10px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="icon fa fa-warning"></i>

                        Gagal Login. Pastikan Data anda sudah benar

                    </div>'
                );
			redirect("login");
		} else {
			if($cek['status'] =='ADMIN') {
				$_SESSION['admin'] = $cek['id_user'];
			} else if ($cek['status'] == 'WALI KELAS') {
				$_SESSION['wali_kelas'] = $cek['id_user'];
			} else if ($cek['status'] == 'GURU') {
				$_SESSION['guru'] = $cek['id_user'];
			} else {
				$_SESSION['bk'] = $cek['id_user'];
			}
			redirect('admin/dashboard');	
		}
	}

	public function logout() {
		if (isset($_SESSION['admin'])) {
			unset($_SESSION['admin']);
		}

		if (isset($_SESSION['wali_kelas'])) {
			unset($_SESSION['wali_kelas']);
		}

		if (isset($_SESSION['guru'])) {
			unset($_SESSION['guru']);
		}

		if (isset($_SESSION['bk'])) {
			unset($_SESSION['bk']);
		}

		redirect('login');
	}
}

?>