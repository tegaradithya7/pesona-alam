<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Email extends MY_Controller {

	public $form;

	public $modelAlias = 'em';

	public $alias = 'ms_email';

	public $module = 'Spa Offers';

	public $isClientMenu = true;

	public $successMessage = '<div class="alert alert-success temp">Sukses</div>';

	public function __construct(){

		parent::__construct();

		$this->load->model('master/email_model','em');
		$admin = $this->session->userdata('admin');

		$this->form = array(
			'form'=>array(
	         	array(
		            'field'	=> 	'title',
		            'type'	=>	'text',
		            'label'	=>	'Name',
		            'rules' => 	'required',
		        ),
		        array(
		            'field'	=> 	'type',
		            'type'	=>	'dropdown',
		            'label'	=>	'Type',
		            'source'=>	array(
		            	'news'	=>	'News',
		            	'promo'	=>	'Promo'
		            )
		            // 'rules' => 	'required',
	         	),
		        array(
		            'field'	=> 	'desc',
		            'type'	=>	'custom_text',
		            'label'	=>	'Description',
		            // 'rules' => 	'required',
	         	),
	         	array(
		            'field'	=> 	'spa_file',
		            'type'	=>	'multiple_file',
		            'label'	=>	'Image',
		            'upload_path'=>base_url('assets/lampiran/spa_file/'),
					'upload_url'=>site_url('master/email/upload_lampiran'),
					'allowed_types'=>'pdf|jpeg|jpg|png|gif|rar|zip|doc|docx',
		            // 'rules' => 'required'
	         	),
	         // 	array(
		        //     'field'	=> 	'date',
		        //     'type'	=>	'date',
		        //     'label'	=>	'Date',
		        //     // 'rules' => 	'required',
		        // )
	        )
		);
		$this->getData = $this->em->getData($this->form);
		$this->insertUrl = site_url('master/email/save/');
		$this->updateUrl = 'master/email/update';
		$this->deleteUrl = 'master/email/delete/';
	}
	
	public function index(){
		$data['admin'] = $this->session->userdata('admin');
		$this->breadcrumb->addlevel(1, array(
			'url' => site_url('master/spa'),
			'title' => 'Email Subscription'
		));
		$this->header = 'Email Subscription';
		$this->content = $this->load->view('master/email/list',$data, TRUE);
		$this->script = $this->load->view('master/email/list_js', $data, TRUE);
		parent::index();
	}

	// public function getData($id = null)
	// {
	// 	$config['query'] = $this->sm->getData($this->form);
	// 	$return = $this->tablegenerator->initialize($config);
	// 	foreach ($return['data'] as $k => $v) {
	// 		$return['data'][$k]->id = base64_encode($this->encrypt->encode($v->id));
	// 	}
	// 	echo json_encode($return);
	// }

}
