<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model
{

	public function get_news()
	{
		$query = $this->db->or_where_not_in('release_on', 2)
			->where('del', 0)
			->order_by('id', 'desc')
			->get('ms_news');
		return $query->result_array();
	}

	public function get_accomodation()
	{
		$query = $this->db->or_where_not_in('release_on', 2)->where('del', 0)->order_by('id', 'desc')->get('ms_accomodation');
		return $query->result_array();
	}

	public function get_dining()
	{
		$query = $this->db->or_where_not_in('release_on', 2)->where('del', 0)->order_by('id', 'desc')->get('ms_dining');
		return $query->result_array();
	}

	public function get_spa()
	{
		$query = $this->db->where('del', 0)->order_by('id', 'desc')->get('ms_spa');
		return $query->result_array();
	}

	public function get_activities()
	{
		$query = $this->db->where('del', 0)->order_by('id', 'desc')->get('ms_activities');
		return $query->result_array();
	}

	public function get_rooms()
	{
		$query = $this->db->where('del', 0)->where('type', 1)->order_by('id', 'desc')->get('ms_rooms_villas');
		return $query->result_array();
	}

	public function get_villas()
	{
		$query = $this->db->where('del', 0)->where('type', 2)->order_by('id', 'desc')->get('ms_rooms_villas');
		return $query->result_array();
	}

	public function get_facilities()
	{
		$query = $this->db->where('del', 0)->order_by('id', 'desc')->get('ms_facilities');
		return $query->result_array();
	}

	public function detail_data($id, $type)
	{
		// echo "string ".$type;die;
		$query = $this->db->where('id', $id)->get('ms_' . $type);
		return $query->row_array();
	}

	public function detail_activities($id)
	{
		$query = $this->db->where('id', $id)->get('ms_activities');
		return $query->row_array();
	}
}

/* End of file Menu_model.php */
/* Location: ./application/models/Menu_model.php */