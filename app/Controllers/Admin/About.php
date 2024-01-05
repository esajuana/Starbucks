<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Main;
use App\Libraries\Template;
use App\Models\mAbout;
use CodeIgniter\HTTP\RequestInterface;

class About extends BaseController
{
	protected $request;

	public function __construct() {
		$request = \Config\Services::request();
		$this->request = $request;
	}

	public function index()
	{
		Main::check_admin();
		$mAbout = new mAbout();
		$about_list = $mAbout->findAll();

		$data = [
			'about_list'	=> $about_list
		];

		return Template::tampil_admin('admin/about_list', $data);
	}

	public function create()
	{
		Main::check_admin();
		$data = [];
		return Template::tampil_admin('admin/about_insert', $data);
	}

	public function insert()
	{
		Main::check_admin();
		$about_name = $this->request->getVar('about_name');

		$data =[
			'about_name' => $about_name,
		];

		$mAbout = new mAbout();
		$mAbout->insert($data);

		return redirect('admin/about');
	}

	public function delete($id_about = '1')
	{
		Main::check_admin();
		$mAbout = new mAbout();
		$mAbout->where('id_about', $id_about)->delete();

		return redirect('admin/about');
	}


	public function edit($id_about)
	{
		Main::check_admin();
		$mAbout = new mAbout();
		$about_row = $mAbout->where('id_about', $id_about)->first();

		$data = [
			'about_row' => $about_row

		];
		return Template::tampil_admin('admin/about_edit', $data);
	}

	public function update($id_about)
	{
		Main::check_admin();
		$about_name = $this->request->getVar('about_name');


		$data =[
			'about_name' => $about_name,
		];

		$mAbout = new mAbout();
		$mAbout->where('id_about', $id_about)->set($data)->update();

		return redirect('admin/about');
	}

}
