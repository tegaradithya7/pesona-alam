<?php defined('BASEPATH') or exit('No direct script access allowed');
class Accomodation extends MY_Controller
{

	public $form;

	public $modelAlias = 'am';

	public $alias = 'ms_accomodation';

	public $module = 'Accomodation';

	public $isClientMenu = true;

	public $successMessage = '<div class="alert alert-success temp">Sukses</div>';

	public function __construct()
	{

		parent::__construct();

		$this->load->model('master/accomodation_model', 'am');
		$admin = $this->session->userdata('admin');

		$this->form = array(
			'form' => array(
				array(
					'field'	=> 	'release_on',
					'type'	=>	'dropdown',
					'label'	=>	'Publish On',
					'source' =>	array(
						1	=>	'Pesona Alam',
						2	=>	'Botanica',
						3	=>	'Semua Web'
					)
				),
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
					'source' =>	array(
						'news'	=>	'News',
						'promo'	=>	'Promo'
					)
					// 'rules' => 	'required',
				),
				array(
					'field'	=> 	'desc',
					'type'	=>	'textarea',
					'label'	=>	'Description',
					// 'rules' => 	'required',
				),
				array(
					'field'	=> 	'max_guest',
					'type'	=>	'number',
					'label'	=>	'Maximum Guest',
					// 'rules' => 	'required',
				),
				array(
					'field'	=> 	'room_width',
					'type'	=>	'number',
					'label'	=>	'Room Width',
					// 'rules' => 	'required',
				),
				array(
					'field'	=> 	'accomodation_file',
					'type'	=>	'file',
					'label'	=>	'Image',
					'upload_path' => base_url('assets/lampiran/accomodation_file/'),
					'upload_url' => site_url('master/accomodation/upload_lampiran'),
					'allowed_types' => 'pdf|jpeg|jpg|png|gif|rar|zip|doc|docx',
					'caption' => '<span class="english-caption">*Format data harus PDF, JPEG, JPG, PNG, GIF ,ZIP dan RAR.</span>',
					// 'rules' => 'required'
				),
				// array(
				//     'field'	=> 	'id_facilities',
				//     'type'	=>	'checkboxList',
				//     'label'	=>	'Facilities', 
				// 	'source' =>	$this->am->getFacilities(),
				// ),
				array(
					'field'	=> 	'gallery',
					'type'	=>	'multiple_file',
					'label'	=>	'Gallery',
					'upload_path' => base_url('assets/lampiran/gallery/'),
					'upload_url' => site_url('master/accomodation/upload_lampiran'),
					'allowed_types' => 'pdf|jpeg|jpg|png|gif|rar|zip|doc|docx',
					'caption' => '<span class="english-caption">*Format data harus PDF, JPEG, JPG, PNG, GIF ,ZIP dan RAR.</span>',
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
		// $this->getData = $this->km->getData($this->form);
		$this->insertUrl = site_url('master/accomodation/save/');
		$this->updateUrl = 'master/accomodation/update';
		$this->deleteUrl = 'master/accomodation/delete/';
	}

	public function index()
	{
		$data['admin'] = $this->session->userdata('admin');
		$this->breadcrumb->addlevel(1, array(
			'url' => site_url('master/accomodation'),
			'title' => 'Room Offers'
		));
		$this->header = 'Room Offers';
		$this->content = $this->load->view('master/accomodation/list', $data, TRUE);
		$this->script = $this->load->view('master/accomodation/list_js', $data, TRUE);
		parent::index();
	}

	public function preview($url, $id = "")
	{
		$save = $this->input->post();
		$modelAlias = $this->modelAlias;
		// print_r($save);die;
		if (isset($save['save'])) {
			unset($save['save']);
			if ($url == 'save') {
				$save['date'] = timestamp();
				$save['entry_stamp'] = timestamp();
				if ($this->$modelAlias->insert($save)) {
					$this->deleteTemp($save);
					redirect(site_url('master/accomodation'));
				}
			} else {
				$d1 = base64_decode($id);
				$id = $this->encrypt->decode($d1);
				$save['edit_stamp'] = timestamp();
				$lastData = $this->$modelAlias->selectData($id);
				if ($this->$modelAlias->update($id, $save)) {
					$this->deleteTemp($save, $lastData);
					redirect(site_url('master/accomodation'));
				}
			}
		} else {
			$data['menu'] 	= 'Offers';
			$data['img'] 	= $save['accomodation_file'];
			$data['title'] 	= $save['title'];
			$data['desc'] 	= $save['desc'];
			$data['type'] 	= $save['type'];
			$data['file']	= 'accomodation_file';
			$data['action'] = $url;
			$data['url']	= 'master/accomodation/' . $url;
			$data['url_back'] = 'master/accomodation';
			if ($id != '') {
				$d1 = base64_decode($id);
				$d2 = $this->encrypt->decode($d1);

				$select = $this->$modelAlias->selectData($d2);

				$data['id']		= $id;
				$data['path'] 	= 'accomodation_file';
				$data['date'] 	= $select['date'];
			} else {
				$data['path'] 	= 'temp';
				$data['date'] 	= date('Y-m-d');
			}
			// print_r($data);die;
			$this->load->view('preview/preview', $data);
		}
	}

	public function insert()
	{
		echo json_encode($this->form);
	}

	public function edit($id = null)
	{
		$d1 = base64_decode($id);
		$d2 = $this->encrypt->decode($d1);

		$modelAlias = $this->modelAlias;
		$data = $this->$modelAlias->selectData($d2);

		foreach ($this->form['form'] as $key => $element) {
			$this->form['form'][$key]['value'] = $data[$element['field']];
			if ($this->form['form'][$key]['type'] == 'date_range') {
				$_value = array();

				foreach ($this->form['form'][$key]['field'] as $keys => $values) {
					$_value[] = $data[$values];
				}
				$this->form['form'][$key]['value'] = $_value;
			}
		}

		echo json_encode($this->form);
	}

	public function save()
	{
		$modelAlias = $this->modelAlias;
		// print_r($this->input->post());die;
		// if ($this->validation()) {
		$save = $this->input->post();
		// print_r($save);die;
		$save['date'] = timestamp();
		$save['entry_stamp'] = timestamp();
		if ($this->$modelAlias->insert($save)) {
			// $this->session->set_userdata('msg', $this->successMessage);
			$this->deleteTemp($save);
			redirect(site_url('master/accomodation'));
		}
		// }
	}

	public function update($id)
	{
		$d1 = base64_decode($id);
		$id = $this->encrypt->decode($d1);

		$modelAlias = $this->modelAlias;
		// if ($this->validation()) {
		// $save = $this->clean_data($this->input->post());
		$save = $this->input->post();
		$save['edit_stamp'] = timestamp();
		$lastData = $this->$modelAlias->selectData($id);
		if ($this->$modelAlias->update($id, $save)) {
			// $this->session->set_userdata('msg', $this->successMessage);
			$this->deleteTemp($save, $lastData);
			redirect(site_url('master/accomodation'));
		}
		// }
	}

	public function getData($id = null)
	{
		$config['query'] = $this->am->getData($this->form);
		$return = $this->tablegenerator->initialize($config);
		foreach ($return['data'] as $k => $v) {
			$return['data'][$k]->id = base64_encode($this->encrypt->encode($v->id));
		}
		echo json_encode($return);
	}

	public function form($action, $id = "")
	{
		if ($id != "") {
			$data['data'] = $this->am->selectData($id);
		}
		$data['action'] = $action;
		$data['admin'] = $this->session->userdata('admin');
		$data['id'] = $id;
		$this->breadcrumb->addlevel(1, array(
			'url' => site_url('master/accomodation'),
			'title' => ucfirst($action) . ' Data'
		));
		$this->header = ucfirst($action) . ' Data';
		$this->content = $this->load->view('master/accomodation/form', $data, TRUE);
		$this->script = $this->load->view('master/accomodation/form_js', $data, TRUE);
		parent::index();
	}
}
