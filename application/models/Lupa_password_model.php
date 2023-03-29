<?php 
/**
 * 
 */
class Lupa_password_model extends MY_Model
{
	public function cek_email($email)
	{
		$sql = 'SELECT * FROM ms_vendor_admistrasi WHERE vendor_email = ?';
		$query = $this->db->query($sql,array($email));
		return $query;
	}

	public function update_vendor($data,$email)
	{
		$sql = 'SELECT * FROM ms_vendor_admistrasi WHERE vendor_email = ?';
		$data_vendor = $this->db->query($sql,array($email))->row_array();

		return $this->db->where('id_user',$data_vendor['id_vendor'])->update('ms_login',$data);
	}
}