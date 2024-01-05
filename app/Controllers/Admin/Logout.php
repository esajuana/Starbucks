<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;
use App\Libraries\Template;

class Logout extends BaseController
{
	protected $session;

	public function __construct() {
		$session = \Config\Services::session();
		$this->session = $session;

	}

	public function process()
	{
		$this->session->remove('login_status');
		$this->session->remove('admin_email');

		redirect('admin/login');

	}

}
