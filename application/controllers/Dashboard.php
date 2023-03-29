<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index($id=null)
	{
		
		if($this->session->userdata('admin')['id_role'] == 7) {
			redirect('auction');
		}
		if($this->session->userdata('user')) {
			redirect('vendor/dashboard');
		}
		$user = $this->session->userdata('user');
        $admin = $this->session->userdata('admin');
        $data['admin'] = $admin;
        $data['session'] = (($user) ? $user : $admin);        
		$this->header = 'Welcome '.(($user) ? $user['name'] : $admin['name']);
		if( $admin){
			$this->content = $this->load->view('dashboard/dashboard_admin',$data, TRUE);
			$this->script  = $this->load->view('dashboard/dashboard_js', $data, TRUE);
		}else if($user){
			$this->content = $this->load->view('dashboard/dashboard_vendor',$data, TRUE);
		}

		parent::index();
	}
	
}
