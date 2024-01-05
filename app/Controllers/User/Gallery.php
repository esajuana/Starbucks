<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Libraries\Template;

class Gallery extends BaseController
{
	public function index()
	{
		return Template::tampil_user('user/gallery', []);
	}


}
