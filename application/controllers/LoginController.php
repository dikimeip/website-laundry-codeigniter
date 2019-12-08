<?php 

class LoginController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLaundry','Models');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function DoLogin()
	{
		$level = $this->input->post('level');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		if ($level == '0') {
			$login = $this->Models->Loginuser($email,$password);
			if (count($login) > 0 ) {
				echo "KARYAWAN";
			} else {
				echo "Gagal Login";
			}
		} elseif ($level == '1') {
			echo "ADMIN";
		} else {
			echo "NotShow";
		}
	}


}
