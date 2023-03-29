<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Facilities_model extends MY_Model
{

    public $table = 'ms_facilities';

    function getData($form)
    {
        $query = "	SELECT 
    					a.name,
    					a.desc,
    					a.id,
    					a.date,
                        a.facilities_file,
    					a.release_on

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

/* End of file Rooms_model.php */
/* Location: ./application/models/Rooms_model.php */