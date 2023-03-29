<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_model extends MY_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function get_total_daftar_tunggu()
	{
		$query = "SELECT a.name, a.id as id FROM ms_vendor a INNER JOIN ms_vendor_admistrasi as mva ON a.id=mva.id_vendor WHERE a.vendor_status=1 AND a.del = 0";
		
		return $query;
	}

	function get_note_admin(){
		$admin = $this->session->userdata('admin');
		$query = 	"	SELECT
							a.*,
							b.name
						FROM
							tr_note a
						LEFT JOIN
							ms_vendor b ON b.id=a.id_vendor
						WHERE
							a.is_active = ?
							AND a.is_admin_close = ?
							AND a.id_sbu = ?
					";

		$result = $this->db->query($query,array(1 , 0 , $admin['id_sbu']));
		return $result;
	}

	public function get_blacklist()
	{
		$query = " 	SELECT
						a.name,
						b.id id
					FROM 
						tr_blacklist b
					LEFT JOIN 
						ms_vendor a ON b.id_vendor = a.id
					WHERE 
						a.is_active = 0 
						AND (b.del = 0 OR b.del IS NULL)
						AND (a.del = 0 OR b.del IS NULL)";
		// if(!in_array($this->session->userdata('admin')['id_role'], array(1,2,8))){
		// 	$query .= " AND a.id_sbu = ".$this->session->userdata('admin')['id_sbu'];
		// }
		
		// $result = $this->db->query($query);
		// echo $this->db->last_query();
		return $query;
	}

	public function get_dpt()
	{
		$query = " 	SELECT 
						a.name,
						a.id
					FROM 
						ms_vendor a

					LEFT JOIN 
						tr_dpt b ON b.id_vendor = a.id 
					WHERE 
						a.is_active = 1
						AND a.vendor_status = 2
						AND a.del = 0
						AND NOT EXISTS(
							SELECT 1 FROM tr_blacklist_nik c JOIN ms_pengurus msp ON msp.no = c.nik WHERE msp.id_vendor = a.id AND (c.del = 0 OR c.del IS NULL)
						)
						AND NOT EXISTS(
							SELECT 1 FROM tr_blacklist d WHERE d.id_vendor = a.id AND (d.del = 0 OR d.del IS NULL)
						)";
		// if(!in_array($this->session->userdata('admin')['id_role'], array(1,8))){
		// 	$query .= " AND a.id_sbu = ".$this->session->userdata('admin')['id_sbu'];
		// }
		$query .= " GROUP BY
						a.id ";
		// $result = $this->db->query($query);
						// ORDER BY 
						// b.start_date DESC
		return $query;
	}

	function search_vendor(){
		$result = array();
		if($_POST['search']!=''){
			$admin = $this->session->userdata('admin');		
			$query = "	SELECT
			                a.id,
			                a.name,
			                a.npwp_code,
			                b.name sbu,
			                a.vendor_status
						FROM ms_vendor a
						LEFT JOIN tb_sbu b ON b.id=a.id_sbu
						WHERE a.del = 0 AND a.name LIKE ?
						LIMIT 5";

		    $query = $this->db->query($query, array('%'.$_POST['search'].'%',))->result_array();		
			foreach($query as $key => $value){
				if ($value['vendor_status'] == 0) {
					$vendor_status = '<strong style="color:#205BBB;">Daftar Tunggu Baru</strong>';
				} elseif ($value['vendor_status'] == 1){
					$vendor_status = '<strong style="color:#205BBB;">Daftar Tunggu</strong>';
				} elseif ($value['vendor_status'] == 2) {
					$vendor_status = '<strong style="color:#1CA54C;">DPT Aktif</strong>';
				} elseif ($value['vendor_status'] == 3) {
					$vendor_status = '<strong style="color:#17054c;">Blacklist</strong>';
				} elseif ($value['vendor_status'] == 4) {
					$vendor_status = '<strong style="color:#0fb4c6;">Daftar Beku</strong>';
				}
				$result[$value['id']] = '<a style="color:black;" href="'.site_url('vendor/view/view_data/index/'.base64_encode($this->encrypt->encode($value['id']))).'"><span>'.$value['name'].'</span><span>NPWP : '.$value['npwp_code'].'</span><span>'.$value['sbu'].'</span><span>Status : '.$vendor_status.'</span></a>'; 
			}
			
			
		}
		return $result;
	}
}
