<?php

namespace App\Models;

use CodeIgniter\Model;

class mGallery extends Model
{
	protected $table      = 'gallery';
	protected $primaryKey = 'id_gallery';

	protected $useAutoIncrement = true;
	protected $allowedFields = ['gallery_image', 'gallery_kategori',];
}
