<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Activities_model extends MY_Model
{

	public $table = 'ms_activities';

	function getData($form)
	{
		$query = "	SELECT 
    					a.title,
    					a.release_on,
    					a.desc,
    					a.id

    				FROM " . $this->table . " a WHERE a.del = 0";

		if ($this->input->post('filter')) {

			$query .= $this->filter($form, $this->input->post('filter'), false);
		}
		return $query;
	}

	function selectData($id)
	{

		$query = "	SELECT 
    					a.*
                    FROM 
                        " . $this->table . " a 
                    WHERE 
                        a.id= ? AND a.del = 0";

		$query = $this->db->query($query, array($id));
		return $query->row_array();
	}
}

/* End of file activities_model.php */
/* Location: ./application/models/activities_model.php */