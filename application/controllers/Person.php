<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Person extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
		$this->load->model('PersonModel');
		$q["data"] = $this->PersonModel->getPerson();
		$this->load->view('head');
		$this->load->view('menu');
		$this->load->view('person/header');
		$this->load->view('person/content', $q);
		$this->load->view('footer');
		$this->load->view('foot');
	}
	
}
