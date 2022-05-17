<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{

	public function login()
	{
		$data['tittle'] = 'Hospital Queuing System - Login';
		$this->load->view('layout/auth/header.php', $data); //megirim variabel data ke header yag berisi tittle
		$this->load->view('pages/auth/login.php');
		$this->load->view('layout/auth/footer.php');
	}
	public function register()
	{
		$data['tittle'] = 'Hospital Queuing System - Register';
		$this->load->view('layout/auth/header.php', $data);
		$this->load->view('pages/auth/register.php');
		$this->load->view('layout/auth/footer.php');
	}
}
