<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Faq extends MY_Controller {

	public $form;

	public $modelAlias = 'em';

	public $alias = 'ms_email';

	public $module = 'Spa Offers';

	public $isClientMenu = true;

	public $successMessage = '<div class="alert alert-success temp">Sukses</div>';

	public function __construct(){

		parent::__construct();

		$this->load->model('master/faq_model','fm');
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
					'upload_url'=>site_url('master/faq/upload_lampiran'),
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
		$this->getData = $this->fm->getData($this->form);
		$this->insertUrl = site_url('master/faq/save/');
		$this->updateUrl = 'master/faq/update';
		$this->deleteUrl = 'master/faq/delete/';
		// print_r($getData);die;
	}
	
	public function index(){
		$data['admin'] = $this->session->userdata('admin');
		$this->breadcrumb->addlevel(1, array(
			'url' => site_url('master/spa'),
			'title' => 'Customer Message'
		));
		$this->header = 'Customer Message';
		$this->content = $this->load->view('master/faq/list',$data, TRUE);
		$this->script = $this->load->view('master/faq/list_js', $data, TRUE);
		parent::index();
	}

	public function lihat_data($id = null)
	{	
		$this->form = array( 
			  'form'=>array( 
	         	array(
		            'field'	=> 	'nama',
		            'type'	=>	'text',
		            'label'	=>	'Name',
		            'rules' =>	'required'
	         	),
			  	array(
		            'field'	=> 	'email',
		            'type'	=>	'text',
		            'label'	=>	'Email',
		            'rules' =>	'required'
	         	),
	         	array(
		            'field'	=> 	'phone',
		            'type'	=>	'text',
		            'label'	=>	'Phone',
		            'rules' =>	'required'
	         	),
			  	array(
		            'field'	=> 	'customer_type',
		            'type'	=>	'text',
		            'label'	=>	'Customer Type',
		            'rules' =>	'required'
	         	),
			  	array(
		            'field'	=> 	'receive_from',
		            'type'	=>	'text',
		            'label'	=>	'Receive From',
		            'rules' =>	'required'
	         	),
	         	array(
		            'field'	=> 	'message',
		            'type'	=>	'text',
		            'label'	=>	'Message',
		            'rules' =>	'required'
	         	)
	         )
		);	
		{
		$modelAlias = $this->fm;
		 $data = $this->fm->selectData($id);

		 foreach($this->form['form'] as $key => $element) {
		 	$this->form['form'][$key]['readonly'] = TRUE;
		 	$this->form['form'][$key]['value'] = $data[$element['field']];
		 	if($this->form['form'][$key]['type']=='date_range'){
		 		$_value = array();

		 		foreach ($this->form['form'][$key]['field'] as $keys => $values) {
		 			$_value[] = $data[$values];

		 		}
		 		$this->form['form'][$key]['value'] = $_value;
		 	}
		 }
		echo json_encode($this->form);
	 }
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
