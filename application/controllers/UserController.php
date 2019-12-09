<?php  


/**
 * 
 */
class UserController extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/dasboard');
		$this->load->view('template/footer');
	}

}