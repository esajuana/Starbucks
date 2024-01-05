<?php

namespace App\Models;

use CodeIgniter\Model;

class mValues extends Model
{
	protected $table      = 'values';
	protected $primaryKey = 'id_values';

	protected $useAutoIncrement = true;
	protected $allowedFields = ['values_name'];
}
