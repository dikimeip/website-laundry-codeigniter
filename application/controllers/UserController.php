<?php  


/**
 * 
 */
class UserController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLaundry','Models');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		// if ($this->session->userdata('isUser')) {
		// 	redirect('LoginController/index');
		// }
	}
	
	public function index()
	{
		//$data['ses'] = $this->session->userdata('isUser');
		$data['trans'] = $this->Models->get_alltrans();
		$data['pakets'] = $this->Models->get_paket();
		$data['user'] = $this->Models->get_user();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/dasboard',$data);
		$this->load->view('template/footer');
	}

	public function user()
	{
		$data['user'] = $this->Models->get_user();
		$data['no']=1;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/pengguna',$data);
		$this->load->view('template/footer');
	}

	public function post_user()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/tambah_pengguna');
		$this->load->view('template/footer');
	}

	public function do_post_user()
	{
		 $this->form_validation->set_rules('nama', 'Nama', 'required');
		 $this->form_validation->set_rules('alamat', 'Alamat', 'required');
		 $this->form_validation->set_rules('hp', 'Hp', 'required|max_length[12]|integer');
		 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		 if ($this->form_validation->run() == false ) {
		 	$this->load->view('template/header');
			$this->load->view('template/menu');
			$this->load->view('user/tambah_pengguna');
			$this->load->view('template/footer');
		 } else {
		 	$data = [
		 		'nama_user' => $this->input->post('nama'),
		 		'alamat_user' => $this->input->post('alamat'),
		 		'hp_user' => $this->input->post('hp'),
		 		'email_user' => $this->input->post('email'),
		 		'ket_user' => 'User'
		 	];
		 	$query = $this->Models->post_user($data);
		 	if ($query) {
		 		$this->session->set_flashdata('success','Tambah data berhasil dilakukan');
		 		redirect('UserController/user');
		 	} else {
		 		$this->session->set_flashdata('success','Tambah Gagal dilakukan');
		 		redirect('UserController/user');
		 	}
		 }
	}

	public function edit_user($id)
	{
		$data['user'] = $this->Models->get_id_user($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/edit_pengguna',$data);
		$this->load->view('template/footer');
	}

	public function do_edituser()
	{
		$data = [
		 		'nama_user' => $this->input->post('nama'),
		 		'alamat_user' => $this->input->post('alamat'),
		 		'hp_user' => $this->input->post('hp'),
		 		'email_user' => $this->input->post('email'),
		 		'ket_user' => $this->input->post('ket')
		 	];
		$id = $this->input->post('id');

		$query = $this->Models->edit_user($data,$id);
		if ($query) {
			$this->session->set_flashdata('success','Edit data berhasil dilakukan');
		 	redirect('UserController/user');
		} else {
			$this->session->set_flashdata('success','Edit data Gagal dilakukan');
		 	redirect('UserController/user');
		}
	}

	public function cari_user()
	{
		$data['user'] = $this->Models->cari_user();
		$data['no']=1;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/pengguna',$data);
		$this->load->view('template/footer');
	}

	public function transaksi()
	{
		$data['trans'] = $this->Models->get_alltrans();
		$data['no'] =1;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/transaksi',$data);
		$this->load->view('template/footer');
	}

	public function tambah_transaksi()
	{
		$data['paket'] = $this->Models->paket_active();
		$data['user'] = $this->Models->get_user();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/tambah_transaksi',$data);
		$this->load->view('template/footer');
	}

	public function do_tambahtrans()
	{
		$id = $this->input->post('paket');
		$berat = $this->input->post('berat');
		$paket = $this->Models->get_id_paket($id);
		$kali = $paket['harga_paket'] * $berat;
		
		$data = [
			'id_user' => $this->input->post('user'),
			'id_paket' => $id,
			'berat_transaksi' => $berat,
			'tanggal_masuk_transaksi' => date('Y-m-d'),
			'harga_total' => $kali,
			'keterangan_transaksi' => $this->input->post('ket'),
			'status_transaksi' => 'Baru'
		];

		$query = $this->Models->input_transaksi($data);
		if ($query) {
			$this->session->set_flashdata('success','Transaksi berhasil dilakukan');
			redirect('UserController/transaksi');
		} else {
			$this->session->set_flashdata('success','Transaksi Gagal dilakukan');
			redirect('UserController/transaksi');
		}
	}

	public function show_trans($id)
	{
		$data['trans'] = $this->Models->get_id_trans($id);
		//var_dump($data['trans']);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/show_transaksi',$data);
		$this->load->view('template/footer');
	}

	public function ProsesTrans()
	{
		$data['trans'] = $this->Models->get_alltrans();
		$data['no'] =1;
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/ProsesTransaksi',$data);
		$this->load->view('template/footer');
	}

	public function edit_transaksi($id)
	{
		$data['trans'] = $this->Models->get_id_trans($id);
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('user/edit_transaksi',$data);
		$this->load->view('template/footer');
	}

	public function do_edittrans()
	{
		$id = $this->input->post('id');
		$data = [
			'keterangan_transaksi' => $this->input->post('ket'),
			'status_transaksi' => $this->input->post('status')
		];

		$query = $this->Models->edit_transaksi($id,$data);
		if ($query) {
			$this->session->set_flashdata('success','Transaksi berhasil Diubah');
			redirect('UserController/ProsesTrans');
		} else {
			$this->session->set_flashdata('success','Transaksi Gagal Diubah');
			redirect('UserController/ProsesTrans');
		}
	}

	public function hapus_transaksi($id)
	{
		$query = $this->Models->delete_transaksi($id);
		if ($query) {
			$this->session->set_flashdata('success','Transaksi berhasil Dihapus');
			redirect('UserController/ProsesTrans');
		} else {
			$this->session->set_flashdata('success','Transaksi Gagal Dihapus');
			redirect('UserController/ProsesTrans');
		}
	}

	public function cetak_trans($id)
	{
		$data['trans'] = $this->Models->get_id_trans($id);
		$this->load->view('cetak/cetak_transaksi',$data);
	}

}