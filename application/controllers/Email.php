<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function index(){}

	public function contactForm(){
		$fullName = $this->input->post('full_name');
		$department = $this->input->post('department');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$comments = $this->input->post('comments');

		$html = '<html><body>';
		$html = "fullname: $fullName"."</br>";
		$html .= "department: $department"."</br>";
		$html .= "phone: $phone"."</br>";
		$html .= "email: $email "."</br>";
		$html .= "comments: $comments"."</br>";
		$html .= '</body></html>';

//		$toEmail = 'seanautosales@bellnet.ca';
		$toEmail = 'safalsingh32@gmail.com';
		$this->sendEmail($html, $toEmail, 'Contact Form Lead');
	}
	public function insuranceForm(){
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$message = $this->input->post('message');

		$html = '<html><body>';
		$html .= "name: $name"."</br>";
		$html .= "phone: $phone"."</br>";
		$html .= "email: $email"."</br>";
		$html .= "message: $message"."</br>";

		$html.='</body></html>';

//		$toEmail = 'seanautosales@bellnet.ca';
		$toEmail = 'safalsingh32@gmail.com';
		$this->sendEmail($html, $toEmail, 'Contact Form Lead');
	}
	public function financeForm(){
		$firstName = $this->input->post('first_name');
		$lastName = $this->input->post('last_name');
		$dob = $this->input->post('dob');
		$sin = $this->input->post('sin');
		$maritalStatus = $this->input->post('marital_status');
		$bankruptcy = $this->input->post('bankruptcy');
		$releaseDate = $this->input->post('liberation');
		$telephone = $this->input->post('telephone');
		$telephoneAlt = $this->input->post('telephone_alternate');
		$email = $this->input->post('email');
		$drivingLicense = $this->input->post('license_number');
		$drivingLicenseExpiry = $this->input->post('license_expiry');


		$html = '<html><body>';

		$html = '<h3>Applicant Info</h3>';
		$html .= "First Name: $firstName"."</br>";
		$html .= "Last Name: $lastName"."</br>";
		$html .= "Date of Birth: $dob"."</br>";
		$html .= "SIN: $sin"."</br>";
		$html .= "Marital Status: $maritalStatus"."</br>";
		$html .= "Ever declared bankrupt?: $bankruptcy"."</br>";
		$html .= "Date of release(bankruptcy): $releaseDate"."</br>";
		$html .= "Telephone: $telephone"."</br>";
		$html .= "Telephone(alternate): $telephoneAlt"."</br>";
		$html .= "Email: $email"."</br>";
		$html .= "Driving License: $drivingLicense"."</br>";
		$html .= "Driving License Expiry: $drivingLicenseExpiry"."</br>";

		$addressNumber = $this->input->post('address_number');
		$street = $this->input->post('street');
		$apartment = $this->input->post('apartment');
		$city = $this->input->post('city');
		$province = $this->input->post('province');
		$postalCode = $this->input->post('postal_code');
		$homeType = $this->input->post('home_type');
		$ownerOccupant = $this->input->post('owner_occupant');
		$durationOccupation = $this->input->post('duration_occupation');
		$monthlyMortgage = $this->input->post('monthly_mortgage');

		$html = '<h3>Current Address</h3>';
		$html .= "Address No.: $addressNumber"."</br>";
		$html .= "Street: $street"."</br>";
		$html .= "Apartment: $apartment"."</br>";
		$html .= "City: $city"."</br>";
		$html .= "Province: $province"."</br>";
		$html .= "Postal Code: $postalCode"."</br>";
		$html .= "Type of Home: $homeType"."</br>";
		$html .= "Owner or Occupant: $ownerOccupant"."</br>";
		$html .= "Duration of Occupation: $durationOccupation"."</br>";
		$html .= "Monthly Mortgage: $monthlyMortgage $/Month"."</br>";

		$occupation = $this->input->post('occupation');
		$employerName = $this->input->post('employer_name');
		$businessType = $this->input->post('business_type');
		$phoneEmployer = $this->input->post('phone_employer');
		$durationEmployment = $this->input->post('duration_employment');
		$annualIncome = $this->input->post('annual_income');
		$payType = $this->input->post('pay_type');

		$html = '<h3>Current Occupation</h3>';
		$html .= "Occupation: $occupation"."</br>";
		$html .= "Employer Name: $employerName"."</br>";
		$html .= "Type of Business: $businessType"."</br>";
		$html .= "Phone of Employer: $phoneEmployer"."</br>";
		$html .= "Duration of Employment: $durationEmployment"."</br>";
		$html .= "Annual Gross Income: $annualIncome"."</br>";
		$html .= "Type of Pay: $payType"."</br>";

		$html.='</body></html>';

//		$toEmail = 'seanautosales@bellnet.ca';
		$toEmail = 'safalsingh32@gmail.com';
		$this->sendEmail($html, $toEmail, 'Finance Form Lead');
	}

	private function sendEmail($html, $toEmail,$subject){
		// Load PHPMailer library
		$this->load->library('phpmailer_lib');

		// PHPMailer object
		$mail = $this->phpmailer_lib->load();

		// SMTP configuration
		$mail->isSMTP();
		$mail->Host     = 'ssl://smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'smgsoftwares@gmail.com';
		$mail->Password = 'Safal@value99';
		$mail->SMTPSecure = 'ssl';
		$mail->Port     = 465;

		$mail->setFrom('info@seanautosales.com', 'Sean Auto');
//		$mail->addReplyTo('info@example.com', 'CodexWorld');

		// Add a recipient
		$mail->addAddress($toEmail);

		// Add cc or bcc
//		$mail->addCC('cc@example.com');
//		$mail->addBCC('bcc@example.com');

		// Email subject
		$mail->Subject = $subject;

		// Set email format to HTML
		$mail->isHTML(true);

		// Email body content
//		$mailContent = "<h1>Send HTML Email using SMTP in CodeIgniter</h1>
//            <p>This is a test email sending using SMTP mail server with PHPMailer.</p>";
		$mail->Body = $html;

		// Send email
		if(!$mail->send()){
			echo json_encode(array('status'=>false, 'message'=>'Message could not be sent.'));
//			echo 'Mailer Error: ' . $mail->ErrorInfo;
		}else{
			echo json_encode(array('status'=>true, 'message'=>'Message has been sent'));
//			echo 'Message has been sent';
		}
	}
}
