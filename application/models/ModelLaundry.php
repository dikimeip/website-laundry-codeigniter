<?php  


class ModelLaundry extends CI_Model
{
	public function Loginuser($email,$password)
	{
		return $this->db->get_where('karyawan',array(
			'username_karyawan' => $email,
			'password_karyawan' => $password,
			'active_karyawan'	=> 1
		))->result_array();
	}

	public function LoginAdmin($email,$password)
	{
		return $this->db->get_where('admin',array(
			'email_admin' => $email,
			'password_admin' => $password
		))->result_array();
	}

	public function get_user()
	{
		return $this->db->get('user')->result_array();
	}

	public function post_user($data)
	{
		return $this->db->insert('user',$data);
	}

	public function get_id_user($id)
	{
		return $this->db->get_where('user',['id_user' => $id])->row_array();
	}

	public function edit_user($data,$id)
	{
		$this->db->where('id_user',$id);
		return $this->db->update('user',$data);
	}

	public function cari_user()
	{
		$data = $this->input->post('cari');
		$this->db->select('*');
		$this->db->from('user');
		$this->db->like('nama_user',$data);
		return $this->db->get()->result_array();
	}

	public function get_paket()
	{
		return $this->db->get('paket')->result_array();
	}

	public function post_paket($data)
	{
		return $this->db->insert('paket',$data);
	}

	public function get_id_paket($id)
	{
		return $this->db->get_where('paket',['id_paket' => $id])->row_array();
	}
}