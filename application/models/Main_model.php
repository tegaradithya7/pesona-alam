<?php

class Main_model extends CI_model
{

	function check($data = array())
	{

		$username = $this->input->post('username');

		$_password = $this->input->post('password');
		$password = do_hash($this->input->post('password'), 'sha1');


		$sql = "SELECT * FROM ms_login WHERE username = ? AND password_hash = ?";

		$sql = $this->db->query($sql, array($username, $password));
		// echo $this->db->last_query();
		$_sql = $sql->row_array();
		// print_r($_sql);die;
		$ct_sql = '';
		if ($sql) {

			if ($_sql['type'] == "user") {

				$ct_sql = "SELECT ms_vendor.*  FROM ms_vendor WHERE ms_vendor.id=? AND ms_vendor.vendor_status != 3";
				$ct_sql = $this->db->query($ct_sql, array($_sql['id_user']));
				$data = $ct_sql->row_array();


				if ($ct_sql->num_rows() > 0) {
					$set_session = array(
						'id_user' 		=> 	$data['id'],
						'name'			=>	$data['name'],
						'id_sbu'		=>	$data['id_sbu'],
						'vendor_status'	=>	$data['vendor_status'],
						'is_active'		=>	$data['is_active'],
						'id_role'		=>	11,
						'npwp_code'		=>  $data['npwp_code']
					);

					$this->session->set_userdata('user', $set_session);

					return true;
				}
			} else if ($_sql['type'] == "admin") {
				$ct_sql = "SELECT *,
							ms_admin.name,
							tb_role.name role_name
							FROM ms_admin 
							JOIN tb_role ON ms_admin.id_role = tb_role.id 
							WHERE ms_admin.id=?";
				$ct_sql = $this->db->query($ct_sql, array($_sql['id_user']));

				$data = $ct_sql->row_array();

				$set_session = array(
					'id_user' 		=> 	$data['id'],
					'name'			=>	$data['name'],
					'id_role'		=>	$data['id_role'],
					'role_name'		=>	$data['role_name']
				);

				$this->session->set_userdata('admin', $set_session);

				return true;
			}
		} else {
			return false;
		}
	}

	public function get_latest_info()
	{
		$tables = array(
			'ms_spa' 			=> 'spa',
			'ms_dining' 		=> 'dining',
			'ms_accomodation' 	=> 'accomodation',
			'ms_news' 			=> 'news'
		);

		foreach ($tables as $table => $type) {
			$query = $this->db->where('del', 0)->order_by('id', 'desc')->get($table)->row_array();
			$data[] = array(
				'id'	=> $query['id'],
				'title' => $query['title'],
				'type' 	=> $query['type'],
				'image' => $query[$type . '_file'],
				'path'	=> $type . '_file',
				'to'	=> $type
			);
		}

		// print_r($data);
		return $data;
	}

	public function tr_cek_login($data, $status)
	{
		if ($status == 0) {
			return $this->db->where('username', $data['username'])->delete('tr_cek_login');
		} else if ($status == 1) {
			return $this->db->insert('tr_cek_login', array(
				'username' 	=> $data['username'],
				'password'	=> $data['password'],
				'date'		=> date('Y-m-d H:i:s')
			));
		} else if ($status == 2) {
			return $this->db->where('username', $data['username'])->order_by('id', 'desc')->get('tr_cek_login');
		}
	}
}
