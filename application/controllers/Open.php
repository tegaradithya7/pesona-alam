<?php 
/**
 * 
 */
class Open extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function file($link)
	{
		$link = base64_decode($link);
		// echo $link;die;
		$data['link'] = $link;
		$this->load->view('open/view',$data);
		// $this->load->view('open/view_js',$data);
	}

	public function file_($link)
	{
		$link = base64_decode($link);
		$data['link'] = $link;
		$data['admin'] = $this->session->userdata('admin');
		$this->breadcrumb->addlevel(1, array(
			'url' => site_url('open/file/'.$link),
			'title' => 'Open File'
		));
		$this->header = 'Open File';
		$this->content = $this->load->view('open/view',$data, TRUE);
		$this->script = $this->load->view('open/view_js', $data, TRUE);
		parent::index();
	}
}