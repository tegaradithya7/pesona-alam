<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('Main_model', 'mm');
		$this->load->model('get_model','gm');
		date_default_timezone_set("Asia/Bangkok");

	}

	public function index(){
		if ($this->session->userdata('lim_ex')) {
			$this->exceed_attempt();
		}else{
			if($this->session->userdata('admin')){

				if($this->session->userdata('admin')['id_role'] == 7) {
					redirect('auction');
				}else{
					redirect('dashboard');
				}
			}else if($this->session->userdata('user')) {
				redirect('vendor/dashboard');
			}else{
				$this->login();
			}
		}
	}

	public function home()
	{
		$data['latest_info'] = $this->mm->get_latest_info();
		// print_r($this->mm->get_latest_info());die;
		$this->load->view('main_page/index',$data);
	}

	public function login(){
		if($this->session->userdata('admin')){
			if($this->session->userdata('admin')['id_role'] == 7) {
				redirect('auction');
			}else{
				redirect('dashboard');
			}
		}else if($this->session->userdata('user')) {
			redirect('vendor/dashboard');
		}
		$this->load->view('login_page');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url());
	}

	public function check(){
		$return['status'] = 'error';
		$return['message']= 'Terjadi Kesalahan';

		$result = $this->mm->check($this->input->post());
		if($result){
			// echo $this->db->last_query();
			$this->mm->tr_cek_login($this->input->post(),0);
			$return['status'] = 'success';
			$return['message']= '<div class="login-notif" id="sukses">Login Berhasil</div>';
			$return['url'] = site_url('dashboard');

		}else{
			// echo $this->db->last_query();
			$this->mm->tr_cek_login($this->input->post(),1);
			$cek_att = $this->mm->tr_cek_login($this->input->post(),2)->result_array(); 
			$get_att = $this->mm->tr_cek_login($this->input->post(),2)->row_array();
			$c_att = count($cek_att);
			$t_att = $c_att * 10;
			
			if ($c_att >= 3) {
				// echo "string1";die;
				$return['url'] = site_url('main/exceed_attempt');	
				$return['status'] = 'error';
				$return['message']= '<div class="login-notif" id="gagal">Anda telah melebihi batas minimal login!</div>';
				$t_server = date('Y-m-d H:i:s',strtotime('+'.$t_att.' second',strtotime($get_att['date'])));
				$set_sess = array(
					'att'	=> $c_att,
					'limit' => $t_att,
					'date'	=> date('Y-m-d H:i:s',strtotime('+3 minute',strtotime($t_server)))
				);
				$this->session->set_userdata('lim_ex',$set_sess);
			} else {
				// echo "string2";die;
				$return['status'] = 'error';
				$return['message']= '<div class="login-notif" id="gagal">Data tidak dikenal. Silahkan login kembali!</div>';
				$return['url'] = site_url();
			}			
		}

		header('Access-Control-Allow-Origin: *');
		echo json_encode($return);
	}	
	public function exceed_attempt()
	{
		$this->load->view('exceed_attemp');
	}
	public function destory_lim_sess()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}
	public function template_debug(){
		$this->load->view('template/layout-folder');
	}
	public function add_vendor(){
		$data['id_sbu'] = $this->gm->getdatasbu();
		$data1['id_role'] = $this->gm->getdatalegal();
		$this->load->view('daftar_vendor',array_merge($data,$data1));
	}
}