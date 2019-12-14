<?php  

/**
 * 
 */
class AdminController extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelLaundry','Models');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/dasboard');
		$this->load->view('template/footer');
	}

	public function paket()
	{
		$data['pakets'] = $this->Models->get_paket();
		$data['no'] = 1;
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/promo',$data);
		$this->load->view('template/footer');
	}

	public function TambahPaket()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/add_paket');
		$this->load->view('template/footer');
	}

	public function do_paket()
	{
		$this->form_validation->set_rules('nama','Nama','required|max[20]');
		$this->form_validation->set_rules('ket','Keterangan','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('template/header');
			$this->load->view('template/menuadmin');
			$this->load->view('admin/add_paket');
			$this->load->view('template/footer');
		} else {
			$data = [
				'nama_paket' => $this->input->post('nama'),
				'tanggal_paket' => date('Y-m-d'),
				'keterangan_paket' => $this->input->post('ket'),
				'active_paket' => 'Active'
			];

			$insert = $this->Models->post_paket($data);
			if ($insert) {
				$this->session->set_flashdata('success','menambahkan paket berhasil');
				redirect('AdminController/paket');
			} else {
				$this->session->set_flashdata('success','menambahkan paket gaga;');
				redirect('AdminController/paket');
			}
		}
	}

	public function edit_paket($id)
	{
		$data['paket'] = $this->Models->get_id_paket($id);
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/edit_paket',$data);
		$this->load->view('template/footer');
	}

	public function do_edit_paket()
	{
		$id = $this->input->post('id');
		$data = [
			'nama_paket' => $this->input->post('nama'),
			'keterangan_paket' => $this->input->post('ket'),
			'active_paket' => $this->input->post('status')
		];

		$update = $this->Models->edit_paket($id,$data);

		if ($update) {
			$this->session->set_flashdata('success','update paket berhasil');
			redirect('AdminController/paket');
		} else {
			$this->session->set_flashdata('success','update paket gagal');
			redirect('AdminController/paket');
		}

	}

	public function delete_paket($id)
	{
		$del = $this->Models->delete_paket($id);
		if ($del) {
			$this->session->set_flashdata('success','hapus paket berhasil');
			redirect('AdminController/paket');
		} else {
			$this->session->set_flashdata('success','hapus paket gagal');
			redirect('AdminController/paket');
		}
	}


	public function cari_paket()
	{
		$cari = $this->input->post('cari');
		$data['pakets'] = $this->Models->search_paket($cari);
		$data['no'] = 1;
		if (count($data['pakets']) > 0 ) {
			$this->load->view('template/header');
			$this->load->view('template/menuadmin');
			$this->load->view('admin/promo',$data);
			$this->load->view('template/footer');
		} else {
			$this->session->set_flashdata('success','data paket tidak ditemukan');
			redirect('AdminController/paket');
		}
	
	}

	public function transaksi()
	{
		$data['trans'] = $this->Models->get_alltrans();
		$data['no'] =1;
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/transaksi',$data);
		$this->load->view('template/footer');
	}

	public function detail_trans($id)
	{
		$data['trans'] = $this->Models->get_id_trans($id);
		//var_dump($data['trans']);
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/detail_transaksi',$data);
		$this->load->view('template/footer');
	}

	public function hapus_trans($id)
	{
		$this->Models->delete_transaksi($id);
		$this->session->set_flashdata('Success','Data success deleted');
		redirect('AdminController/transaksi');
	}

	public function cari_pelanggan()
	{
		
		$data['user'] = $this->Models->cari_user();
		$data['no'] =1;
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/pelanggan',$data);
		$this->load->view('template/footer');
	}

	public function pelanggan()
	{
		$data['user'] = $this->Models->get_user();
		$data['no']=1;
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/pelanggan',$data);
		$this->load->view('template/footer');
	}


	public function show_pelanggan($id)
	{
		$data['pelanggan'] = $this->Models->get_id_user($id);
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/show_pelanggan',$data);
		$this->load->view('template/footer');
	}

	public function delete_pelanggan($id)
	{
		$delete = $this->Models->delete_pelanggan($id);
		if ($delete) {
			$this->session->set_flashdata('success','Data success deleted');
			redirect('AdminController/pelanggan');
		} else {
			$this->session->set_flashdata('success','Data success deleted');
			redirect('AdminController/pelanggan');
		}
	}

	public function karyawan()
	{
		$data['karyawan'] = $this->Models->karyawan();
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/karyawan',$data);
		$this->load->view('template/footer');
	}

	public function tambah_karyawan()
	{
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/tambah_karyawan');
		$this->load->view('template/footer');
	}

	public function do_tambahkaryawan()
	{
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('uname','Username','required');
		$this->form_validation->set_rules('pswd1','PASSWORD','required|matches[pswd2]');
		$this->form_validation->set_rules('pswd2','PASSWORD','required|matches[pswd1]');
		$this->form_validation->set_rules('alamat','Alamat','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('template/header');
			$this->load->view('template/menuadmin');
			$this->load->view('admin/tambah_karyawan');
			$this->load->view('template/footer');
		} else {
			$gambar = $_FILES['foto']['name'];
			if ($gambar == "") {
				echo "Gagal";
			} else {
				$config['allowed_types'] = "png|jpg";
				$config['upload_path'] = "./asset/foto/";
				$this->load->library('upload',$config);
				if (!$this->upload->do_upload('foto')) {
					echo "Gagal";
				} else {
					$data = [
						'nama_karyawan' => $this->input->post('nama'),
						'username_karyawan' => $this->input->post('uname'),
						'password_karyawan' =>md5($this->input->post('pswd2')),
						'alamat_karyawan' => $this->input->post('alamat'),
						'jabatan_karyawan' => $this->input->post('jabatan'),
						'foto_karyawan' =>  $_FILES['foto']['name'],
						'active_karyawan' => 1,
					];
					$query = $this->Models->post_karyawan($data);
					if ($query) {
						$this->session->set_flashdata('success','Data success post');
						redirect('AdminController/karyawan');
					} else {
						$this->session->set_flashdata('success','Data gagal post');
						redirect('AdminController/karyawan');
					}
				}
			}
		}
	}

	public function edit_karyawan($id)
	{
		$data['kary'] = $this->Models->get_karyawan($id);
		$this->load->view('template/header');
		$this->load->view('template/menuadmin');
		$this->load->view('admin/edit_karyawan',$data);
		$this->load->view('template/footer');
	}

	public function do_editkaryawan()
	{
		$gambar = $_FILES['foto']['name'];
		if ($gambar == "") {
			$id = $this->input->post('id');
			$data = [
				'nama_karyawan' => $this->input->post('nama'),
				'username_karyawan' => $this->input->post('uname'),
				'alamat_karyawan' => $this->input->post('alamat'),
				'jabatan_karyawan' => $this->input->post('jabatan'),
			];

			$query = $this->Models->update_karyawan($id,$data);
			if ($query) {
				$this->session->set_flashdata('success','Data success update');
				redirect('AdminController/karyawan');
			} else {
				$this->session->set_flashdata('success','Data failed update');
				redirect('AdminController/karyawan');
			}

		} else {
			$config['allowed_types'] = "png|jpg";
			$config['upload_path'] = "./asset/foto/";
			$this->load->library('upload',$config);
			if (!$this->upload->do_upload('foto')) {
				echo "Gagal";
			} else {
				$id = $this->input->post('id');
				$data = [
					'nama_karyawan' => $this->input->post('nama'),
					'username_karyawan' => $this->input->post('uname'),
					'alamat_karyawan' => $this->input->post('alamat'),
					'jabatan_karyawan' => $this->input->post('jabatan'),
					'foto_karyawan' =>  $_FILES['foto']['name'],
				];
				$query = $this->Models->update_karyawan($id,$data);
				if ($query) {
					$this->session->set_flashdata('success','Data success post');
					redirect('AdminController/karyawan');
				} else {
					$this->session->set_flashdata('success','Data gagal post');
					redirect('AdminController/karyawan');
				}
			}
		}
	}

	public function hapus_karyawan($id)
	{
		$query = $this->Models->delete_karyawan($id);
		if ($query) {
			$this->session->set_flashdata('success','Data success Delete');
			redirect('AdminController/karyawan');
		} else {
			$this->session->set_flashdata('success','Data gagal Delete');
			redirect('AdminController/karyawan');
		}
	}


}