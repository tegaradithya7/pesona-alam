<?php defined('BASEPATH') or exit('No direct script access allowed');
class Activities extends MY_Controller
{

	public $form;

	public $modelAlias = 'am';

	public $alias = 'ms_activities';

	public $module = 'activities Offers';

	public $isClientMenu = true;

	public $successMessage = '<div class="alert alert-success temp">Sukses</div>';

	public function __construct()
	{

		parent::__construct();

		$this->load->model('master/activities_model', 'am');
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
					'field'	=> 	'align',
					'type'	=>	'dropdown',
					'label'	=>	'Position',
					'source' =>	array(
						'start'	=>	'Start',
						'end'	=>	'End'
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
					'field'	=> 	'activities_file',
					'type'	=>	'multiple_file',
					'label'	=>	'Image',
					'upload_path' => base_url('assets/lampiran/activities_file/'),
					'upload_url' => site_url('master/activities/upload_lampiran'),
					'allowed_types' => 'pdf|jpeg|jpg|png|gif|rar|zip|doc|docx',
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
		$this->insertUrl = site_url('master/activities/save/');
		$this->updateUrl = 'master/activities/update';
		$this->deleteUrl = 'master/activities/delete/';
	}

	public function index()
	{
		$data['admin'] = $this->session->userdata('admin');
		$this->breadcrumb->addlevel(1, array(
			'url' => site_url('master/activities'),
			'title' => 'Activities Offers'
		));
		$this->header = 'Activities Offers';
		$this->content = $this->load->view('master/activities/list', $data, TRUE);
		$this->script = $this->load->view('master/activities/list_js', $data, TRUE);
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
					redirect(site_url('master/activities'));
				}
			} else {
				$d1 = base64_decode($id);
				$id = $this->encrypt->decode($d1);
				$save['edit_stamp'] = timestamp();
				$lastData = $this->$modelAlias->selectData($id);
				if ($this->$modelAlias->update($id, $save)) {
					$this->deleteTemp($save, $lastData);
					redirect(site_url('master/activities'));
				}
			}
		} else {
			$data['menu'] 	= 'Offers';
			$data['img'] 	= $save['activities_file'];
			$data['title'] 	= $save['title'];
			$data['desc'] 	= $save['desc'];
			$data['type'] 	= $save['type'];
			$data['file']	= 'activities_file';
			$data['action'] = $url;
			$data['url']	= 'master/activities/' . $url;
			$data['url_back'] = 'master/activities';
			if ($id != '') {
				$d1 = base64_decode($id);
				$d2 = $this->encrypt->decode($d1);

				$select = $this->$modelAlias->selectData($d2);

				$data['id']		= $id;
				$data['path'] 	= 'temp';
				$data['date'] 	= $select['date'];
			} else {
				$data['path'] 	= 'temp';
				$data['date'] 	= date('Y-m-d');
			}
			// print_r($data);die;
			$this->load->view('master/activities/preview', $data);
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
		if ($this->validation()) {
			$save = $this->input->post();
			// print_r($save);die;
			$save['date'] = timestamp();
			$save['entry_stamp'] = timestamp();
			if ($this->$modelAlias->insert($save)) {
				// $this->session->set_userdata('msg', $this->successMessage);
				$this->deleteTemp($save);
				redirect(site_url('master/activities'));
			}
		}
	}

	public function update($id)
	{
		$d1 = base64_decode($id);
		$id = $this->encrypt->decode($d1);

		$modelAlias = $this->modelAlias;
		if ($this->validation()) {
			// $save = $this->clean_data($this->input->post());
			$save = $this->input->post();
			$save['edit_stamp'] = timestamp();
			$lastData = $this->$modelAlias->selectData($id);
			if ($this->$modelAlias->update($id, $save)) {
				// $this->session->set_userdata('msg', $this->successMessage);
				$this->deleteTemp($save, $lastData);
				redirect(site_url('master/activities'));
			}
		}
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
			'url' => site_url('master/activities'),
			'title' => ucfirst($action) . ' Data'
		));
		$this->header = ucfirst($action) . ' Data';
		$this->content = $this->load->view('master/activities/form', $data, TRUE);
		$this->script = $this->load->view('master/activities/form_js', $data, TRUE);
		parent::index();
	}
}
