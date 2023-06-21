<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapascli extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mapacli");
	}

	public function index()
	{
		$data["mapascli"] = $this->Mapacli->obtenerTodos();
		$this->load->view('mapascli', $data);
	}
}
