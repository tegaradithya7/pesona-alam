<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('menu_model', 'mm');
	}

	public function offers()
	{
		$data['news'] 			= $this->mm->get_news();
		$data['accomodation'] 	= $this->mm->get_accomodation();
		$data['spa'] 			= $this->mm->get_spa();
		$data['dining'] 		= $this->mm->get_dining();
		// print_r($data);die;
		$this->load->view('main_page/offers', $data);
	}

	public function rooms_villas()
	{
		$data['rooms'] 		= $this->mm->get_rooms();
		$data['villas'] 	= $this->mm->get_villas();
		$this->load->view('main_page/rooms-villas', $data);
	}

	public function rooms()
	{
		$data['rooms'] 		= $this->mm->get_rooms();
		// print_r($data);
		// die;
		$this->load->view('main_page/rooms', $data);
	}

	public function villas()
	{
		$data['villas'] 	= $this->mm->get_villas();
		$this->load->view('main_page/villas', $data);
	}

	public function meeting()
	{
		$this->load->view('main_page/meeting-event', $data);
	}

	public function facilities()
	{
		$data['facilities'] 	= $this->mm->get_facilities();
		$this->load->view('main_page/facilities', $data);
	}

	public function activities()
	{
		$data['activities'] = $this->mm->get_activities();
		$this->load->view('main_page/activities', $data);
	}

	public function news()
	{
		$data['news'] = $this->mm->get_news();
		// print_r($data['news']);
		// die;
		$this->load->view('main_page/news', $data);
	}

	public function contact()
	{
		$this->load->view('main_page/contact', $data);
	}

	public function detail($id, $type = "news")
	{
		// echo "string ".$type;die;
		$data['detail_data'] = $this->mm->detail_data($id, $type);
		$data['type'] = $type;
		if ($type = "news") {
			$data['menu'] = 'News';
		} else {
			$data['menu'] = 'Offers';
		}
		// print_r($this->mm->detail_data($id,$type));die;
		$this->load->view('main_page/news-detail-1', $data);
	}

	public function detail_activity($id)
	{
		$data['detail'] = $this->mm->detail_activities($id);
		$this->load->view('main_page/activities-detail-1', $data);
	}
}

/* End of file Menu.php */
/* Location: ./application/controllers/Menu.php */