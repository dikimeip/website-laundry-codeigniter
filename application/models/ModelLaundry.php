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
}