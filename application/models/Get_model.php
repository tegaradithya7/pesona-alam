<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Get_model extends MY_Model{
	public $table = 'tb_sbu';
	function __construct(){
		parent::__construct();
		
	}

	function getSbu(){
		$query = "	SELECT
						a.*
						FROM ".$this->table." a WHERE a.del = 0";

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getSbuView(){
		$query = "	SELECT
						a.*
						FROM ".$this->table." a ";

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getTypeCompany(){
		$data = array(
			1 => 'Afiliasi',
			2 => 'non Afiliasi'
			// 0 => 'Pilih Disini',
			// 1 => 'Anak Perusahaan PGN',
			// 2 => 'Anak Perusahaan Terafilisasi PGN',
			// 3 => 'BUMN',
			// 4 => 'Anak Perusahaan BUMN/Afiliasi BUMN',
			// 5 => 'Lainnya',
		);
		return $data;
	}


	function getRole($form){
		$query = "	SELECT
						id,
						name

						FROM tb_role WHERE del=0 AND name != 'Vendor' ";

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getBidang($form){
		$query = "	SELECT
						id,
						name

						FROM tb_bidang ";

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}
	

	function getSubBidang($form){
		$query = "	SELECT
						id,
						name

						FROM tb_sub_bidang ";

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getdatalegal() 
	{
		$query = "	SELECT
						id,
						name

						FROM tb_legal 

						WHERE del = 0";

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getDptType() {
		$query = "	SELECT
						id,
						name

						FROM tb_dpt_type ";

		$query = $this->db->query($query)->result_array();
		$data = array();
		// $data[] = 'Pilih Salah Satu';
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getnoakta($user=null) {
		if ($user != null){
		$query = "	SELECT 
						id,
						no
					FROM 
						ms_akta
					WHERE 
						del = 0 AND id_vendor = ".$user;

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['no'];
		}
		return $data;
	}
	}


	function getBsbIu($id_vendor=null) {
		$user = $this->session->userdata('user')['id_user'];
		if($id_vendor!=null){
			$user = $id_vendor;
		}
		$query = "	SELECT
						a.id id,
						CONCAT(b.name, '-'  ,c.name) as name

					FROM 
						ms_iu_bsb a
					LEFT JOIN
						tb_bidang b ON b.id = a.id_bidang
					LEFT JOIN
						tb_sub_bidang c ON c.id = a.id_sub_bidang
					WHERE 
						 a.del = 0 AND a.id_vendor = ".$user;

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getBsbDpt() {
		$query = "	SELECT
						b.id,
						CONCAT(a.name, '-'  ,b.name) as name

					FROM 
						
						tb_bidang a 
					LEFT JOIN
						tb_sub_bidang b ON a.id = b.id_bidang
					WHERE 
						 a.del = 0 ";

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getBsbIuAdmin($id) {
		
		$query = "	SELECT
						a.id id,
						CONCAT(b.name, '-'  ,c.name) as name

					FROM 
						ms_iu_bsb a
					LEFT JOIN
						tb_bidang b ON b.id = a.id_bidang
					LEFT JOIN
						tb_sub_bidang c ON c.id = a.id_sub_bidang
					WHERE 
						 a.del = 0 AND a.id_vendor = ".$id;

		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['id']] = $value['name'];
		}
		return $data;
	}

	function getKurs() {
		$query = "	SELECT
						a.id,
						a.symbol
				    FROM 
						tb_kurs a
					WHERE 
						a.del = 0 AND a.symbol != 'IDR'";
						
		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['symbol']] = $value['symbol'];
		}
		return $data;
	}

	function getProvince(){
		$query = "	SELECT
						a.id_vendor,
						a.vendor_province
				    FROM 
						ms_vendor_admistrasi a
					WHERE 
						a.del = 0 ";
						
		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['vendor_province']] = $value['vendor_province'];
		}
		return $data;
	}

	function getMerk(){
		$query = "	SELECT
						b.id,
						a.merk
				    FROM 
						ms_agen_produk a
					LEFT JOIN
						ms_agen b ON b.id=a.id_agen
					WHERE 
						a.del = 0 ";
						
		$query = $this->db->query($query)->result_array();
		$data = array();
		foreach ($query as $key => $value) {
			$data[$value['merk']] = $value['merk'];
		}
		return $data;
	}
}