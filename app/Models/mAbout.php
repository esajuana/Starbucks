<?php

namespace App\Models;

use CodeIgniter\Model;

class mAbout extends Model
{
	protected $table      = 'about';
	protected $primaryKey = 'id_about';

	protected $useAutoIncrement = true;
	protected $allowedFields = ['about_name'];
}
