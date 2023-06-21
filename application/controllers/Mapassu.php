<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapassu extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mapasu");
	}

	public function index()
	{
		$data["mapassu"] = $this->Mapasu->obtenerTodos();
		$this->load->view('mapassu', $data);
	}
}
