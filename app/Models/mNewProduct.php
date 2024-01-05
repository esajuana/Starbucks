<?php

namespace App\Models;

use CodeIgniter\Model;

class mNewProduct extends Model
{
	protected $table      = 'new_product';
	protected $primaryKey = 'id_new_product';

	protected $useAutoIncrement = true;
	protected $allowedFields = ['new_product_name', 'new_product_price', 'new_product_description', 'new_product_image', 'new_product_status'];
}
