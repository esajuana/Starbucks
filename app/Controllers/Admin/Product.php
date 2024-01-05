<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;
use App\Libraries\Template;
use App\Models\mProduct;
use CodeIgniter\HTTP\RequestInterface;

class Product extends BaseController
{
	protected $request;

	public function __construct() {
		$request = \Config\Services::request();
		$this->request = $request;
	}

	public function index()
	{
		Main::check_admin();
		$mProduct = new mProduct();
		$product_list = $mProduct->findAll();

		$data = [
			'product_list'	=> $product_list
		];

		return Template::tampil_admin('admin/product_list', $data);
	}

	public function create()
	{
		Main::check_admin();
		$data = [];
		return Template::tampil_admin('admin/product_insert', $data);
	}

	public function insert()
	{
		Main::check_admin();
		$product_name = $this->request->getVar('product_name');
		$product_price = $this->request->getVar('product_price');
		$product_description = $this->request->getVar('product_description');

		$product_image = $this->request->getFile('product_image');
		$product_image_name = $product_image->getRandomName();
		$product_image->move('img/', $product_image_name);


		$data =[
			'product_name' => $product_name,
			'product_price' => $product_price,
			'product_description' => $product_description,
			'product_image' => $product_image_name
		];

		$mProduct = new mProduct();
		$mProduct->insert($data);

		return redirect('admin/product');
	}

	public function delete($id_product = '1')
	{
		Main::check_admin();
		$mProduct = new mProduct();
		$mProduct->where('id_product', $id_product)->delete();

		return redirect('admin/product');
	}


	public function edit($id_product)
	{
		Main::check_admin();
		$mProduct = new mProduct();
		$product_row = $mProduct->where('id_product', $id_product)->first();

		$data = [
			'product_row' => $product_row

		];
		return Template::tampil_admin('admin/product_edit', $data);
	}

	public function update($id_product)
	{
		Main::check_admin();
		$product_name =$this->request->getVar('product_name');
		$product_price =$this->request->getVar('product_price');
		$product_description =$this->request->getVar('product_description');

		$data =[
			'product_name' => $product_name,
			'product_price' => $product_price,
			'product_description' => $product_description,
		];

		if(!empty($_FILES['product_image']['name'])) {
			$product_image = $this->request->getFile('product_image');
			$product_image_name = $product_image->getRandomName();
			$product_image->move('img/', $product_image_name);

			$data['product_image'] = $product_image_name;
		}

		$mProduct = new mProduct();
		$mProduct->where('id_product', $id_product)->set($data)->update();

		return redirect('admin/product');
	}

}
