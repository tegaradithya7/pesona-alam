<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faq_model extends MY_Model {

	public $table = 'ms_faq';

	function getData($form){
		$query = "	SELECT 
						a.nama,
						a.email,
						a.phone,
						a.customer_type,
						a.receive_from,
						a.message,
						a.id

    				FROM ".$this->table." a";

		if($this->input->post('filter')){

			$query .= $this->filter($form, $this->input->post('filter'), false);

		}
		return $query;

	}

	function selectData($id){

		$query = "	SELECT 
    					a.*
                    FROM 
                        ".$this->table." a 
                    WHERE 
                        a.id= ?";

		$query = $this->db->query($query, array($id));
		return $query->row_array();

	}

}

/* End of file Spa_model.php */
/* Location: ./application/models/Spa_model.php */