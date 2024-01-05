<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;
use App\Libraries\Template;

class Dashboard extends BaseController
{
	public function index()
	{
		Main::check_admin();
		return Template::tampil_admin('admin/dashboard', []);
	}


}
