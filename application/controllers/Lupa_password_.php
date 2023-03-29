<?php defined('BASEPATH') OR exit('No direct script access allowed');
	
class Lupa_password extends MY_Controller
{
	public $form;

	public $modelAlias = 'lpm';

	public $alias = 'ms_vendor';

	public $module = 'Daftar Vendor';

	public $isClientMenu = true;

	public $needLogin = false;

	function __construct()
	{
		parent::__construct();
		$this->load->model('Lupa_password_model','lpm');

		$this->form = array(
			'form'=>array(
				array(
					'field' => 'email',
					'type'  => 'text',
					'label' => 'Masukkan email anda',
					'rules' => 'required'
				)
			)
		);
	}

	public function index()
	{
		$this->load->view('lupa_password/view',null,FALSE);
		$this->load->view('lupa_password/view_js', null, FALSE);
	}

	public function form_lupa_password()
	{
		$this->form['url'] = site_url('lupa_password/cek_password_baru');
		$this->form['button'] = array(
                array(
                    'type'=>'submit',
                    'label'=>'Kirim'
                )
            );
		echo json_encode($this->form);
	}

	public function cek_password_baru()
	{
		$email = $this->input->post('email');
		$get_data = $this->lpm->cek_email($email);
		
		if($get_data->num_rows() > 0){
			$password = password_generator();
			$message = 'Ini adalah password anda yang baru '.$password;
			// email($save['vendor_email'], $message, 'Authentikasi Login VMS PT Perusahaan Gas Negara Tbk');
			$this->email->from(EMAIL_HOSTNAME, 'VMS PGN');
			$this->email->to($email); 


			$this->email->subject('Password Baru');
			
			$this->email->message($message);	
			$this->email->send();


			$save_data['password'] 	   = do_hash($password,'sha1');
			$save_data['password_raw'] = $password;
			$save_data['edit_stamp']   = date('Y-m-d H:i:s');
			$this->lpm->update_vendor($save_data,$email);

			echo json_encode(array('status' => 'success'));
		} else {
			echo json_encode(array('status' => 'error'));
		}
	}
}