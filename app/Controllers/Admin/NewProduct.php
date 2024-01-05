<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;
use App\Libraries\Template;
use App\Models\mNewProduct;
use CodeIgniter\HTTP\RequestInterface;

class NewProduct extends BaseController
{
	protected $request;

	public function __construct() {
		$request = \Config\Services::request();
		$this->request = $request;
	}

	public function index()
	{
		Main::check_admin();
		$mNewProduct = new mNewProduct();
		$new_product_list = $mNewProduct->findAll();

		$data = [
			'new_product_list'	=> $new_product_list
		];

		return Template::tampil_admin('admin/new_product_list', $data);
	}

	public function create()
	{
		Main::check_admin();
		$data = [];
		return Template::tampil_admin('admin/new_product_insert', $data);
	}

	public function insert()
	{
		Main::check_admin();
		$new_product_name = $this->request->getVar('new_product_name');
		$new_product_price = $this->request->getVar('new_product_price');
		$new_product_description = $this->request->getVar('new_product_description');
		$new_product_status = $this->request->getVar('new_product_status');

		$new_product_image = $this->request->getFile('new_product_image');
		$new_product_image_name = $new_product_image->getRandomName();
		$new_product_image->move('img/', $new_product_image_name);

		$data =[
			'new_product_name' => $new_product_name,
			'new_product_price' => $new_product_price,
			'new_product_description' => $new_product_description,
			'new_product_status' => $new_product_status,
			'new_product_image' => $new_product_image_name

		];

		$mNewProduct = new mNewProduct();
		$mNewProduct->insert($data);

		return redirect('admin/new-product');
	}

	public function delete($id_new_product = '1')
	{
		Main::check_admin();
		$mNewProduct = new mNewProduct();
		$mNewProduct->where('id_new_product', $id_new_product)->delete();

		return redirect('admin/new-product');
	}

	public function edit($id_new_product)
	{
		Main::check_admin();
		$mNewProduct = new mNewProduct();
		$new_product_row = $mNewProduct->where('id_new_product', $id_new_product)->first();

		$data = [
			'new_product_row' => $new_product_row

		];
		return Template::tampil_admin('admin/new_product_edit', $data);
	}

	public function update($id_new_product)
	{
		Main::check_admin();
		$new_product_name =$this->request->getVar('new_product_name');
		$new_product_price =$this->request->getVar('new_product_price');
		$new_product_description =$this->request->getVar('new_product_description');
		$new_product_status = $this->request->getVar('new_product_status');


		$data =[
			'new_product_name' => $new_product_name,
			'new_product_price' => $new_product_price,
			'new_product_description' => $new_product_description,
			'new_product_status' => $new_product_status,

		];

		if(!empty($_FILES['new_product_image']['name'])) {
			$new_product_image = $this->request->getFile('new_product_image');
			$new_product_image_name = $new_product_image->getRandomName();
			$new_product_image->move('img/', $new_product_image_name);

			$data['new_product_image'] = $new_product_image_name;
		}

		$mNewProduct = new mNewProduct();
		$mNewProduct->where('id_new_product', $id_new_product)->set($data)->update();

		return redirect('admin/new-product');
	}

}
