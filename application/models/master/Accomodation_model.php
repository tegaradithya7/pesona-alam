<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accomodation_model extends MY_Model {

	public $table = 'ms_accomodation';

	function getData($form){
		$query = "	SELECT 
    					a.title,
    					a.desc,
    					a.id,
    					a.date,
    					a.release_on

    				FROM ".$this->table." a WHERE a.del = 0";

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
                        a.id= ? AND a.del = 0";

		$query = $this->db->query($query, array($id));
		return $query->row_array();

	}

	function getFacilities($form = null)
    {
      $query = "  SELECT
              id,
              title,
              icon_file

              FROM ms_icons WHERE del=0";

      $query = $this->db->query($query)->result_array();
      $data = array();
      foreach ($query as $key => $value) {
        $data[$value['icon_file']] = $value['title'];
      }
      return $data;
    }

}

/* End of file Accomodation_model.php */
/* Location: ./application/models/Accomodation_model.php */