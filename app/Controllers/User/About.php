<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Libraries\Template;

class About extends BaseController
{
	public function index()
	{
		return Template::tampil_user('user/about', []);
	}


}
