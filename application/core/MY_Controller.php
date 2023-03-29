<?php
defined('BASEPATH') or exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
	public $id_client;

	public $_sideMenu;

	public $breadcrumb;

	public $header;

	public $content;

	public $script;

	public $form;

	public $activeMenu;

	public $successMessage = '<div class="alert alert-success temp">Sukses</div>';

	public $isClientMenu;

	public $needLogin = true;

	function __construct()
	{
		parent::__construct();
		$this->_sideMenu = array();
		$this->load->library('breadcrumb', array());
		$this->load->library('tablegenerator', array());
		$this->form_validation->set_error_delimiters('', '');
		if ($this->uri->segment(1) != '' && $this->needLogin) {
			if (!$this->session->userdata('admin') && !$this->session->userdata('user')) {
				redirect(site_url());
			}
		}
	}

	function index($id = null)
	{
		$this->isAdmin();
		$this->breadcrumb = $this->breadcrumb->generate();
		$this->load->library('sideMenu', $this->_sideMenu);
		$user = $this->session->userdata('user');
		$admin = $this->session->userdata('admin');
		$data = array(
			'user' => ($user) ? $user['name'] : $admin['role_name'],
			'sideMenu' => $this->sidemenu->generate($this->activeMenu),
			'breadcrumb' => $this->breadcrumb,
			'header' => $this->header,
			'content' => $this->content,
			'script' => $this->script
		);
		$this->parser->parse('template/base', $data);
	}

	function formFilter()
	{
		$return['button'] = array(
			array(
				'type' => 'button',
				'label' => 'Filter',
				'class' => 'btn-filter'
			),
			array(
				'type' => 'reset',
				'label' => 'Reset'
			)
		);
		$return['form'] = $this->form['filter'];
		echo json_encode($return);
	}

	function isAdmin()
	{
		if ($this->session->userdata('admin')) {
			$this->_sideMenu = array(
				// array(
				// 	'group' => 'dashboard',
				// 	'title' => 'Dashboard',
				// 	'url' => site_url() ,
				// 	'role' => array(
				// 		1,
				// 		4,
				// 		5,
				// 		6,
				// 		8,
				// 		12
				// 	)
				// ) ,
				array(
					'group' => 'master',
					'title' => 'Master',
					'url' => '#',
					'role' => array(
						1
					),
					'list' => array(
						array(
							'url' => site_url('master/news'),
							'title' => 'News',
							'role' => array(
								1
							),
						),
						array(
							'url' => site_url('master/Rooms_Villas'),
							'title' => 'Rooms',
							'role' => array(
								1
							),
						),
						array(
							'url' => site_url('master/Facilities'),
							'title' => 'Facilities',
							'role' => array(
								1
							),
						),
						array(
							'url' => site_url('master/dining'),
							'title' => 'F&B Offers',
							'role' => array(
								1
							),
						),
						array(
							'url' => site_url('master/spa'),
							'title' => 'Events',
							'role' => array(
								1
							),
						),
						array(
							'url' => site_url('master/accomodation'),
							'title' => 'Room Offers',
							'role' => array(
								1
							),
						),
						array(
							'url' => site_url('master/activities'),
							'title' => 'Activities',
							'role' => array(
								1
							),
						),
						// array(
						// 	'url' => site_url('master/faq') ,
						// 	'title' => 'Customer Message',
						// 	'role' => array(
						// 		1
						// 	) ,
						// )
					)
				),
			);
		}
	}

	public	function validation($form = null)
	{

		ob_start();

		$_r = false;
		if ($form == null) {
			$form = $this->form['form'];

			foreach ($form['form'] as $key =>  $value) {
				if ($value['type'] == 'file' || $value['type'] == 'multiple_file') {
					unset($form['form'][$key]);
				}
			}
			// print_r($this->form);

			if ($this->form['form'][0] == NULL) {
				$_form = array();
				foreach ($this->form['form'] as $key => $value) {
					foreach ($value as $keys => $values) {
						$v = explode('|', $values['label']);
						$_form[$keys]['label'] = $v[0];
						$_form[$keys]['field'] = $values['field'];
						$_form[$keys]['rules'] = $values['rules'];
					}
				}
				$this->form_validation->set_rules($_form);
			} else {

				foreach ($this->form['form'] as $key =>  $value) {
					$v = explode('|', $value['label']);

					$this->form['form'][$key]['label'] = $v[0];
				}

				$this->form_validation->set_rules($this->form['form']);
			}
		}

		if ($this->form_validation->run() == FALSE) {

			$return['status'] = 'error';
			if ($this->form['form'][0] == NULL) {
				foreach ($form as $key => $value) {
					foreach ($value as $keys => $values) {
						if ($values['type'] == 'file' || $values['type'] == 'multiple_file') {
							$return['file'][$key][$values['field']] = $this->session->userdata($values['field']);
						}

						if ($values['type'] == 'date_range') {
							$return['form'][$key][$values['field'][0]] = form_error($values['field'][0] . '_start');
							$return['form'][$key][$values['field'][1]] = form_error($values['field'][1] . '_start');
						} else {
							$return['form'][$key][$values['field']] = form_error($values['field']);
						}
					}
				}
			} else {
				foreach ($form as $value) {
					if ($value['type'] == 'file' || $value['type'] == 'multiple_file') {
						$return['file'][$value['field']] = $this->session->userdata($value['field']);
					}

					if ($value['type'] == 'date_range') {
						$return['form'][$value['field'][0]] = form_error($value['field'][0] . '_start');
						$return['form'][$value['field'][1]] = form_error($value['field'][1] . '_start');
					} else {
						$return['form'][$value['field']] = form_error($value['field']);
					}
				}
			}


			$_r = false;
		} else {
			$return['status'] = 'success';
			$_r = true;
		}

		echo json_encode($return);
		return $_r;
	}

	public function getData($id = null)
	{
		$config['query'] = $this->getData;
		$return = $this->tablegenerator->initialize($config);
		echo json_encode($return);
	}

	public function insert()
	{
		$this->form['url'] = $this->insertUrl;
		$this->form['button'] = array(
			array(
				'type' => 'submit',
				'label' => 'Save',
			),
			array(
				'type' => 'cancel',
				'label' => 'Cancel'
			)
		);
		echo json_encode($this->form);
	}

	public function save($data = null)
	{
		$modelAlias = $this->modelAlias;
		if ($this->validation()) {
			$save = $this->clean_data($this->input->post());
			$save['entry_stamp'] = timestamp();
			if ($this->$modelAlias->insert($save)) {
				$this->session->set_flashdata('msg', $this->successMessage);
				$this->deleteTemp($save);
				return true;
			}
		}
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


		$this->form['url'] = site_url($this->updateUrl . '/' . $id);
		$this->form['button'] = array(
			array(
				'type'  => 'submit',
				'label' => 'Save Changes'
			),
			array(
				'type'  => 'cancel',
				'label' => 'Cancel'
			)
		);
		echo json_encode($this->form);
	}

	public function update($id)
	{
		$d1 = base64_decode($id);
		$id = $this->encrypt->decode($d1);

		$modelAlias = $this->modelAlias;
		if ($this->validation()) {
			$save = $this->input->post();
			$save['edit_stamp'] = timestamp();
			$lastData = $this->$modelAlias->selectData($id);
			if ($this->$modelAlias->update($id, $save)) {
				$this->session->set_userdata('alert', $this->form['successAlert']);
				$this->deleteTemp($save, $lastData);
			}
		}
	}
	public function getSingleData($id)
	{
		$user  = $this->session->userdata('user');
		$modelAlias = $this->modelAlias;
		$getData   = $this->$modelAlias->selectData($id);

		foreach ($this->form['form'] as $key => $value) {
			$this->form['form'][$key]['readonly'] = TRUE;
			$this->form['form'][$key]['value'] = $getData[$value['field']];

			if ($value['type'] == 'date_range') {
				foreach ($value['field'] as $keyField => $rowField) {
					$this->form['form'][$key]['value'][] = $getData[$rowField];
				}
			}
			if ($value['type'] == 'money') {
				$this->form['form'][$key]['value'] = number_format($getData[$value['field']]);
			}
			if ($value['type'] == 'money_asing') {
				$this->form['form'][$key]['value'][] = $getData[$value['field'][0]];
				$this->form['form'][$key]['value'][] = number_format($getData[$value['field'][1]]);
			}
		}

		echo json_encode($this->form);
	}
	public function approveOvertimeUser($id)
	{
		$modelAlias = $this->modelAlias;
		$save = $this->input->post();
		$save['edit_stamp'] = timestamp();
		return $this->$modelAlias->update($id, $save);
	}

	public function delete($id)
	{
		$d1 = base64_decode($id);
		$id = $this->encrypt->decode($d1);
		// echo $id;die;
		$modelAlias = $this->modelAlias;
		if ($this->$modelAlias->delete($id)) {
			$return['status'] = 'success';
		} else {
			$return['status'] = 'error';
		}

		echo json_encode($return);
	}

	public function remove($id)
	{
		// echo $id;die;
		$this->formDelete['url'] = site_url($this->deleteUrl . $id);
		$this->formDelete['button'] = array(
			array(
				'type' => 'delete',
				'label' => 'Delete'
			),
			array(
				'type' => 'cancel',
				'label' => 'Cancel'
			)
		);
		echo json_encode($this->formDelete);
	}

	public function upload_lampiran()
	{

		foreach ($_FILES as $key => $row) {
			if (is_array($row['name'])) {
				foreach ($row['name'] as $keys => $values) {
					$file_name = $row['name'] = $key . '_' . name_generator($_FILES[$key]['name'][$keys]);
					$_FILES['files']['name'] = $file_name;
					$_FILES['files']['type'] = $_FILES[$key]['type'][$keys];
					$_FILES['files']['tmp_name'] = $_FILES[$key]['tmp_name'][$keys];
					$_FILES['files']['error'] = $_FILES[$key]['error'][$keys];
					$_FILES['files']['size'] = $_FILES[$key]['size'][$keys];

					$config['upload_path'] = './assets/lampiran/temp/';
					$config['allowed_types'] = $_POST['allowed_types'];
					$this->load->library('upload');
					$this->upload->initialize($config);

					if (!$this->upload->do_upload('files')) {
						$return['status'] = 'error';
						$return['message'] = $this->upload->display_errors('', '');
					} else {
						$return['status'] = 'success';
						$return['upload_path'] = base_url('assets/lampiran/temp/' . $file_name);
						$return['file_name'] = $file_name;
					}

					echo json_encode($return);
				}
			} else {
				$file_name = $_FILES[$key]['name'] = $key . '_' . name_generator($_FILES[$key]['name']);
				$config['upload_path'] = './assets/lampiran/temp/';
				$config['allowed_types'] = $_POST['allowed_types'];
				$this->load->library('upload');
				$this->upload->initialize($config);
				if (!$this->upload->do_upload($key)) {
					$return['status'] = 'error';
					$return['message'] = $this->upload->display_errors('', '');
				} else {
					$return['status'] = 'success';
					$return['upload_path'] = base_url('assets/lampiran/temp/' . $file_name);
					$return['file_name'] = $file_name;
				}

				echo json_encode($return);
			}
		}
	}

	public function do_upload($field, $db_name = '')
	{
		$file_name = $_FILES[$db_name]['name'] = $db_name . '_' . name_generator($_FILES[$db_name]['name']);
		$config['upload_path'] = './assets/lampiran/' . $db_name . '/';
		$config['allowed_types'] = 'pdf|jpeg|jpg|png|gif';
		$this->load->library('upload');
		$this->upload->initialize($config);
		if (!$this->upload->do_upload($db_name)) {
			$_POST[$db_name] = $file_name;
			$this->form_validation->set_message('do_upload', $this->upload->display_errors('', ''));
			return false;
		} else {
			$this->session->set_userdata($db_name, $file_name);
			$_POST[$db_name] = $file_name;
			return true;
		}
	}

	public function deleteTemp($save, $lastData = null)
	{
		if ($this->form['form'][0] == NULL) {
			$_form = array();
			$i = 0;
			foreach ($this->form['form'] as $key => $value) {
				foreach ($value as $keys => $values) {
					$_form[$i] = $values;
					$i++;
				}
			}
			$this->form['form'] = $_form;
		}

		// print_r($save['news_file']);die;
		// print_r($this->form);die;

		foreach ($this->form['form'] as $key => $value) {
			if ($value['type'] == 'file') {
				if ($lastData != null && ($save[$value['field']] != $lastData[$value['field']])) {
					if ($lastData[$value['field']] != '') {
						unlink('./assets/lampiran/' . $value['field'] . '/' . $lastData[$value['field']]);
					}
				}

				if ($save[$value['field']] != '') {
					if (file_exists('./assets/lampiran/temp/' . $save[$value['field']])) {

						rename('./assets/lampiran/temp/' . $save[$value['field']], './assets/lampiran/' . $value['field'] . '/' . $save[$value['field']]);
					}
				}
			} elseif ($value['type'] == 'multiple_file') {
				$multi_file = $save[$value['field']];

				foreach ($multi_file as $k => $v) {
					if ($lastData != null && ($v != $lastData[$value['field']])) {
						if ($lastData[$value['field']] != '') {
							unlink('./assets/lampiran/' . $value['field'] . '/' . $lastData[$value['field']]);
						}
					}

					if ($v != '') {
						if (file_exists('./assets/lampiran/temp/' . $v)) {

							rename('./assets/lampiran/temp/' . $v, './assets/lampiran/' . $value['field'] . '/' . $v);
						}
					}
				}
			}
		}
	}

	public function stillActive($id)
	{
		$vendor = $this->db->where('id', $id)->get('ms_vendor')->row_array();

		$arr = array(
			'is_active'		=>	1,
			'vendor_status' => ($vendor['vendor_status'] == 4) ? '1' : $vendor['vendor_status']
		);

		return $this->db->where('id', $id)->update('ms_vendor', $arr);
	}

	public function clean_data($data)
	{
		return preg_replace("/[^\/@:a-zA-Z0-9,._-]/", " ", $data);
	}
}
