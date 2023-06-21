<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mapaspe extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Mapape");
	}

	public function index()
	{
		$data["mapaspe"] = $this->Mapape->obtenerTodos();
		$this->load->view('mapaspe', $data);
	}
}
