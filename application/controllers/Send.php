<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Send extends CI_Controller
{

	public function send_email($type = "")
	{
		require 'vendor/autoload.php';

		$config_mail = new PHPMailer(true);

		try {
			// echo $to.' - '.$sub.' - '.$msg;die;

			// $config_mail->SMTPDebug = 2;		

			$post = $this->input->post();

			// print_r($post);die;

			if ($type == 'contact') {

				$cus_type = array(
					1 => 'Customer Type',
					2 => 'Personal',
					3 => 'Company'
				);

				$subject = "Pesona Alam Website Contact Inquiries";

				$message = "Name : " . $post['name'] . " <br> Email : " . $post['email'] . " <br> Customer Type : " . $cus_type[$post['customer_type']] . " <br> Message : " . $post['message'];
			} else {
				$subject = "Meeting and Event";
				$message = "Name : " . $post['name'] . " <br> Email : " . $post['email'] . " <br> Message : " . $post['message'];
			}

			$config_mail->IsSMTP();
			$config_mail->Host = 'pesonaalamresort.com';
			$config_mail->Timeout = 7;
			$config_mail->Port = 465;
			$config_mail->SMTPAuth = true;
			$config_mail->Username = 'tegaradithya7@gmail.com';
			$config_mail->Password = 'tegarcool7';
			$config_mail->SMTPSecure = 'ssl';
			$config_mail->SetFrom('tegaradithya7@gmail.com', 'Pesona Alam Website Form');
			$config_mail->IsHTML(true);
			$config_mail->Subject = $subject;

			// $cc = explode(',', $data['cc']);
			// foreach ($cc as $key => $value) {
			// 	$config_mail->addCC($value);
			// }

			$config_mail->Body = $message;
			$config_mail->SMTPOptions = array(
				'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
				)
			);
			if ($path != '') {
				$config_mail->AddAttachment($path);
			}
			$config_mail->addAddress('sales-pesonaalam@tauzia.com', 'Sales pesona alam');
			$config_mail->Send();
			// $send =  mail($to,$sub,$msg,$from);
			// if ($config_mail->Send()) {
			if ($path != '') {
				unlink($path);
			}
			// $mail->ErrorInfo();
			// echo "Sukses";

			echo "<script>alert('Sukses mengirim email!');window.location.href='" . $post['url'] . "';</script>";
			//
		} catch (phpmailerException $e) {
			echo $e->errorMessage(); //Pretty error messages from PHPMailer
		} catch (Exception $e) {
			echo $e->getMessage(); //Boring error messages from anything else!
		}
	}
}

/* End of file Send.php */
/* Location: ./application/controllers/Send.php */