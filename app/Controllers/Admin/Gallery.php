<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;
use App\Libraries\Template;
use App\Models\mGallery;
use CodeIgniter\HTTP\RequestInterface;

class Gallery extends BaseController
{
	protected $request;

	public function __construct() {
		$request = \Config\Services::request();
		$this->request = $request;
	}

	public function index()
	{
		Main::check_admin();
		$mGallery = new mGallery();
		$gallery_list = $mGallery->findAll();

		$data = [
			'gallery_list'	=> $gallery_list
		];

		return Template::tampil_admin('admin/gallery_list', $data);
	}

	public function create()
	{
		Main::check_admin();
		$data = [];
		return Template::tampil_admin('admin/gallery_insert', $data);
	}

	public function insert()
	{
		Main::check_admin();
		$gallery_kategori = $this->request->getVar('gallery_kategori');


		$gallery_image = $this->request->getFile('gallery_image');
		$gallery_image_name = $gallery_image->getRandomName();
		$gallery_image->move('img/', $gallery_image_name);


		$data =[
			'gallery_kategori' => $gallery_kategori,
			'gallery_image' => $gallery_image_name
		];

		$mGallery = new mGallery();
		$mGallery->insert($data);

		return redirect('admin/gallery');
	}

	public function delete($id_gallery = '1')
	{
		Main::check_admin();
		$mGallery = new mGallery();
		$mGallery->where('id_gallery', $id_gallery)->delete();

		return redirect('admin/gallery');
	}


	public function edit($id_gallery)
	{
		Main::check_admin();
		$mGallery = new mGallery();
		$gallery_row = $mGallery->where('id_gallery', $id_gallery)->first();

		$data = [
			'gallery_row' => $gallery_row

		];
		return Template::tampil_admin('admin/gallery_edit', $data);
	}

	public function update($id_gallery)
	{
		Main::check_admin();
		$gallery_kategori = $this->request->getVar('gallery_kategori');

		$data =[
			'gallery_kategori' => $gallery_kategori,
		];

		if(!empty($_FILES['gallery_image']['name'])) {
			$gallery_image = $this->request->getFile('gallery_image');
			$gallery_image_name = $gallery_image->getRandomName();
			$gallery_image->move('img/', $gallery_image_name);

			$data['gallery_image'] = $gallery_image_name;
		}

		$mGallery = new mGallery();
		$mGallery->where('id_gallery', $id_gallery)->set($data)->update();

		return redirect('admin/gallery');
	}

}
