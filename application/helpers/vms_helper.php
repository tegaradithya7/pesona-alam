<?php 



function is_perseorangan(){
	$CI =& get_instance();
	$user = $CI->session->userdata('user');
	$query = "SELECT id_legal FROM ms_vendor_admistrasi WHERE id_vendor = ?";
	$query = $CI->db->query($query, array($user['id_user']));
	$query = $query->row_array();

	if($query['id_legal']==9){
		return true;
	}else{
		return false;
	}
}

function is_k3($id = null){
	$CI =& get_instance();
	if($id==null){
		$user = $CI->session->userdata('user');
	}else{
		$user['id_user'] = $id;
	}
	
	$query = "	SELECT 1 
				FROM ms_iu_bsb a
				JOIN tb_sub_bidang b ON a.id_sub_bidang = b.id
                JOIN ms_ijin_usaha c ON a.id_ijin_usaha = c.id
				WHERE a.id_vendor = ? AND is_k3 = 1 AND c.del = 0;";
	$query = $CI->db->query($query, array($user['id_user']));
	$return = $query->num_rows();
	return $return;
}
function generateAccordionVerifikasi($data){
	$html = "";
	foreach ($data as $key => $value) {

		$table_surat = array('ms_akta','ms_situ','ms_tdp','ms_ijin_usaha','ms_agen');
    	$html .="<li>";
    	$html .="<b>".$value['title']."</b>";
    	if(in_array($value['field'], $table_surat)){
    		$html .= "<p>No : ".$value['data']['no']."</p>";
    	}
    	if($value['field']=='ms_pengalaman'){
    		$html .= "<p>Nama Pekerjaan : ".$value['data']['job_name']."</p>";
    	}
    	if($value['field']=='ms_pengurus'||$value['field']=='ms_pemilik'){
    		$html .= "<p>Nama : ".$value['data']['name']."</p>";
    	}
    	$html .="</li>";

    }

    return $html;
}