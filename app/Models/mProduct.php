<?php

namespace App\Models;

use CodeIgniter\Model;

class mProduct extends Model
{
	protected $table      = 'product';
	protected $primaryKey = 'id_product';

	protected $useAutoIncrement = true;
	protected $allowedFields = ['product_name', 'product_price', 'product_image', 'product_description'];
}
