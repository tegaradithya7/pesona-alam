<?php
class Dpt{
	
	public function __construct(){
		$this->CI =& get_instance(); 
	}

	public function set_email_blast($id_doc,$doc_type,$name_file,$expire_date){

		if($expire_date != 'lifetime'){
			$array[30]['date'] = date('Y-m-d',strtotime($expire_date.' -30 days'));
			for($i = 7; $i>=0;$i--){
				$array[$i]['date'] = date('Y-m-d',strtotime($expire_date.' -'.$i.' days'));
			}

			$result = $this->CI->db->select('no, id_vendor')->where('id',$id_doc)->get($doc_type)->row_array();
			$no = $result['no'];

			foreach($array as $key=>$val){
				$a = $this->CI->db->insert('tr_email_blast',
					array(
						'no'=>$no,
						'id_doc'=>$id_doc,
						'doc_type'=>$doc_type,
						'distance'=>$key,
						'id_vendor'=>$result['id_vendor'],
						'date'=>$val['date'],
						'message'=>$this->set_message($no,$name_file,$key),
					)
				);
			}
		}
	}

	public function edit_email_blast($id_doc,$doc_type,$name_file,$expire_date){

		$this->CI->db->where('id_doc', $id_doc)->where('doc_type', $doc_type)->delete('tr_email_blast');
		
		if($expire_date != 'lifetime'){
			

			$array[30]['date'] = date('Y-m-d',strtotime($expire_date.' -30 days'));
			for($i = 7; $i>=0;$i--){
				$array[$i]['date'] = date('Y-m-d',strtotime($expire_date.' -'.$i.' days'));
			}

			$result = $this->CI->db->select('no')->where('id',$id_doc)->get($doc_type)->row_array();
			$no = $result['no'];

			foreach($array as $key=>$val){
				$a = $this->CI->db->insert('tr_email_blast',
					array(
						'no'=>$no,
						'id_doc'=>$id_doc,
						'doc_type'=>$doc_type,
						'distance'=>$key,
						'date'=>$val['date'],
						'message'=>$this->set_message($no,$name_file,$key),
					)
				);
			}
		}
	}

	public function set_message($no,$name_file,$distance){
		$txt = '';
		if($distance==0){
			$txt .= 'Lampiran file '.$name_file.' dengan nomor '.$no.' sudah habis masa berlakunya. 
			Harap diperbaharui untuk segera kami proses menjadi syarat vendor. 
			Terimakasih.';
		}else if($distance==30){
			$txt .= 'Lampiran file '.$name_file.' dengan nomor '.$no.' menyisakan 30 hari sebelum masa berlakunya habis. 
			Harap diperbaharui untuk segera kami proses menjadi syarat vendor.
			Terimakasih.';
		}else{
			$txt .= 'Lampiran file '.$name_file.' dengan nomor '.$no.' menyisakan '.$distance.' hari sebelum masa berlakunya habis. 
			Harap diperbaharui untuk segera kami proses menjadi syarat vendor. 
			Terimakasih.';
		}
		return $txt;
	}

	public function non_iu_change($id){
		$this->CI->db
		->where('id_vendor',$id)
		->where('status',1)
		->update('tr_dpt',
			array(
				'status'=>2,
				'end_date'=>date('Y-m-d'),
				'edit_stamp'=>date('Y-m-d H:i:s'),
			));

		$data =  $this->CI->db->where('id', $id)->get('ms_vendor')->row_array();
		// if ($data['vendor_status'] == 0) {
			// echo $data['vendor_status'];
		// }
		//echo $this->CI->db->affected_rows();
		// if($this->CI->db->affected_rows()>0){
			$status = ($data['vendor_status'] > 0) ? 1 : 0;
			
			$this->CI->db
			->where('id',$id)
			->where('vendor_status!=',0)
			->where('vendor_status IS NOT NULL')
			->update('ms_vendor',
				array(
					'vendor_status'=>$status,
					'need_approve'=>0,
					'edit_stamp'=>date('Y-m-d H:i:s'),
				)
			);
			// echo $this->CI->db->last_query();
			$this->create_iu($id);
		// }
	}

	function create_iu($id = null, $id_ijin_usaha = null){

		$query = "	SELECT *,
					(SELECT COUNT(*) FROM tr_dpt WHERE id_dpt_type = a.id_dpt_type AND tr_dpt.end_date IS NOT NULL) as countData,
					b.id_bidang,
					b.id_sub_bidang
					FROM ms_ijin_usaha a
					LEFT JOIN ms_iu_bsb b ON b.id_ijin_usaha=a.id
					WHERE a.id_vendor = ? 
					AND (a.del IS NULL OR a.del = 0) 
					GROUP BY id_dpt_type";
		$query = $this->CI->db->query($query, array($id));

		$getDateDPT = $this->CI->db->where('id',$id)->get('ms_vendor')->row_array();

		foreach($query->result_array() as $key => $value){
			if($value['countData']!=0){
				$this->CI->db->insert('tr_dpt',array(
						'id_vendor'		=>$id,
						'id_dpt_type'	=>$value['id_dpt_type'],
						'id_bidang'		=>$value['id_bidang'],
						'id_sub_bidang'	=>$value['id_sub_bidang'],
						'start_date'	=> $getDateDPT['dpt_first_date'],
						'entry_stamp'	=>date('Y-m-d H:i:s'),
						'status'		=>0
					)
				);
			}
		}
	}

	function iu_change($id){
		$user = $this->CI->session->userdata('user');
		$this->CI->db->where('id',$id)->where('(del = 0 OR del IS NULL)');
		$query = $this->CI->db->get('ms_ijin_usaha');
		$data = $query->row_array();

		$this->CI->db
		->where('id_dpt_type',$data['id_dpt_type'])
		->where('status',1)
		->where('id_vendor',$user['id_user'])
		->update('tr_dpt',
			array(
				'status'=>2,
				'end_date'=>date('Y-m-d H:i:s'),
				'edit_stamp'=>date('Y-m-d H:i:s'),
			));

		
		//checking empty data
		$query = "SELECT * FROM tr_dpt WHERE id_dpt_type = ? AND id_vendor = ? AND status = 0";
		$query = $this->CI->db->query($query, array($data['id_dpt_type'], $user['id_user']));
		// print_r($query);die;
		// echo $query->num_rows(); die;
		

			$getIuBsb = $this->CI->db->where('id_vendor',$user['id_user'])->where('id_ijin_usaha',$id)->get('ms_iu_bsb')->row_array();

			$checking_bsb = $this->CI->db->where('id_vendor',$user['id_user'])
										 ->where('id_dpt_type',$data['id_dpt_type'])
									 	 ->where('id_bidang',$getIuBsb['id_bidang'])
									 	 ->where('id_sub_bidang',$getIuBsb['id_sub_bidang'])
									 	 ->get('tr_dpt')
									 	 ->result_array();
			if($query->num_rows() == 0){
				$this->CI->db->insert('tr_dpt',
				array(
						'id_dpt_type'	=>$data['id_dpt_type'],
						'id_bidang'		=>$getIuBsb['id_bidang'],
						'id_sub_bidang'	=>$getIuBsb['id_sub_bidang'],
						'id_vendor'		=>$user['id_user'],
						'status'		=>0,
						'entry_stamp'	=>date('Y-m-d H:i:s')
					)
				);
			}else{
				if (count($checking_bsb) < 1) {
					$this->CI->db->insert('tr_dpt',
					array(
							'id_dpt_type'	=>$data['id_dpt_type'],
							'id_bidang'		=>$getIuBsb['id_bidang'],
							'id_sub_bidang'	=>$getIuBsb['id_sub_bidang'],
							'id_vendor'		=>$user['id_user'],
							'status'		=>0,
							'entry_stamp'	=>date('Y-m-d H:i:s')
						)
					);
				}
			}		 	 
			
		/*checking dpt*/

		$this->CI->db->where('id_vendor',$user['id_user'])->where('status',1);
		$num_rows = $this->CI->db->get('tr_dpt')->num_rows();
		if($num_rows==0){
			$data 	=  	$this->CI->db->where('id', $id_vendor)->get('ms_vendor')->row_array();
			$vendor_status = $data['vendor_status'];
			$status = ($data['vendor_status']==0) ? 0 : 1;
			$this->CI->db
			->where('id',$user['id_user'])
			->update('ms_vendor',
					array(
						'vendor_status'=>$status,
						'need_approve'=>0,
						'edit_stamp'=>date('Y-m-d H:i:s'),
					));
		}
	}

	

	public function decrease_status_dpt($id){
		$this->CI->db->where('id',$id);
		$a = $this->CI->db->update('tr_dpt',
			array(
				'status'=>0,
				'data_last_check'=>date('Y-m-d H:i:s'),
				'data_checker_id'=>$admin['user_id']
			));
		return $a;
	}

	public function check_iu($id_user){
		$res = $this->CI->db->select('*')->where('(del=0 OR del IS NULL)')->where('id_vendor',$id_user)->where_in('id_dpt_type',array(2,3,4,5))->get('ms_ijin_usaha')->num_rows();
		return $res;
	}
}