<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;
use App\Libraries\Template;

class Login extends BaseController
{
	protected $request;
	protected $session;


	public function __construct() {
		$request = \Config\Services::request();
		$session = \Config\Services::session();
		$this->request = $request;
		$this->session = $session;

	}

	public function index()
	{
		Main::check_login();
		return view('admin/login', []);
	}
	public function process()
	{
		$akun_email = 'esajuana@gmail.com';
		$akun_password = '1234567';

		$input_email = $this->request->getVar('email');
		$input_password = $this->request->getVar('password');

		if($akun_email == $input_email && $akun_password == $input_password ) {
			$this->session->set('login_status', TRUE);
			$this->session->set('admin_email', $akun_email);

			return redirect('admin/dashboard');

		} else {
			return redirect('admin/login');
		}

	}

}
