<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function swe()
	{
		$this->load->helper('url');
		$this->load->view('head');
		$this->load->view('menu');
		$this->load->view('course/header', array("course"=>"วิศวกรรมซอฟต์แวร์"));
		$this->load->view('course/swe');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	
}
