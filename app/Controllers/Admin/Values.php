<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;
use App\Libraries\Template;
use App\Models\mValues;
use CodeIgniter\HTTP\RequestInterface;

class Values extends BaseController
{
	protected $request;

	public function __construct() {
		$request = \Config\Services::request();
		$this->request = $request;
	}

	public function index()
	{
		Main::check_admin();
		$mValues = new mValues();
		$values_list = $mValues->findAll();

		$data = [
			'values_list'	=> $values_list
		];

		return Template::tampil_admin('admin/values_list', $data);
	}

	public function create()
	{
		Main::check_admin();
		$data = [];
		return Template::tampil_admin('admin/values_insert', $data);
	}

	public function insert()
	{
		Main::check_admin();
		$values_name = $this->request->getVar('values_name');

		$data =[
			'values_name' => $values_name,
		];

		$mValues = new mValues();
		$mValues->insert($data);

		return redirect('admin/values');
	}

	public function delete($id_values = '1')
	{
		Main::check_admin();
		$mValues = new mValues();
		$mValues->where('id_values', $id_values)->delete();

		return redirect('admin/values');
	}


	public function edit($id_values)
	{
		Main::check_admin();
		$mValues = new mValues();
		$values_row = $mValues->where('id_values', $id_values)->first();

		$data = [
			'values_row' => $values_row

		];
		return Template::tampil_admin('admin/values_edit', $data);
	}

	public function update($id_values)
	{
		Main::check_admin();
		$values_name = $this->request->getVar('values_name');


		$data =[
			'values_name' => $values_name,
		];

		$mValues = new mValues();
		$mValues->where('id_values', $id_values)->set($data)->update();

		return redirect('admin/values');
	}

}
