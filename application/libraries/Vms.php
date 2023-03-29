<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Vms{
	private $CI;
	public function __construct(){
		$this->CI =& get_instance(); 

		$this->messageDokumen = "Lampiran file {{label}} dengan nomor {{no}} menyisakan {{day}} sebelum masa berlakunya habis.  Harap diperbaharui untuk segera kami proses menjadi syarat vendor. Terimakasih.";
	}	
	public function setEmailBlast($data){
		$userdata = $this->CI->session->userdata('user');
		$expire_date = $data['expire_date'];
		if($expire_date != 'lifetime'){
			$array[30]['date'] = date('Y-m-d',strtotime($expire_date.' -30 days'));
			for($i = 7; $i>=0;$i--){
				$array[$i]['date'] = date('Y-m-d',strtotime($expire_date.' -'.$i.' days'));
			}

			$no = $result['no'];

			foreach($array as $key=>$val){
				$a = $this->CI->db->insert('tr_email_blast',
					array(
						'id_doc'=>$data['id'],
						'doc_type'=>$data['doc_type'],
						'distance'=>$key,
						'date'=>$val['date'],
						'message'=>$this->set_message_dokumen($data['no'],$data['doc'], $key),
						'id_vendor'=>$userdata['id_user']
					)
				);
			}

		}
		
	}

	public function set_message_dokumen($no,$name_file,$distance){
		$txt = "";
		if($distance==0){
			$txt .= "Lampiran file ".$name_file." dengan nomor ".$no." sudah habis masa berlakunya.<br> Harap diperbaharui untuk segera kami proses menjadi syarat vendor.<br>Terimakasih.";
		}else if($distance==30){
			$txt .= "Lampiran file ".$name_file." dengan nomor ".$no." menyisakan 30 hari sebelum masa berlakunya habis.<br> Harap diperbaharui untuk segera kami proses menjadi syarat vendor.<br>Terimakasih.";
		}else{
			$txt .= "Lampiran file ".$name_file." dengan nomor ".$no." menyisakan ".$distance." hari sebelum masa berlakunya habis.<br> Harap diperbaharui untuk segera kami proses menjadi syarat vendor.<br>Terimakasih.";
		}
		return $txt;
	}
}
