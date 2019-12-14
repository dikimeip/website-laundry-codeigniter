<?php 

class LoginController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLaundry','Models');
		$this->load->library('session');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function DoLogin()
	{
		$level = $this->input->post('level');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		if ($level == '0') {
			$login = $this->Models->Loginuser($email,$password);
			if (count($login) > 0 ) {
				redirect('UserController/index');
				$this->session->set_userdata('ok');
			} else {
				$this->session->set_flashdata('gagal','Login Gagal..');
				redirect('LoginController/index');
			}
		} elseif ($level == '1') {
			$loginn = $this->Models->LoginAdmin($email,$password);
			if (count($loginn) > 0 ) {
				redirect('AdminController/index');
				$this->session->set_userdata('ok');
			} else {
				$this->session->set_flashdata('gagal','Login Gagal..');
				redirect('LoginController/index');
			}
		} else {
			$this->session->set_flashdata('gagal','Login Gagal..');
			redirect('LoginController/index');
		}
	}

	public function logout()
	{
		redirect('LoginController/index');
	}




}
