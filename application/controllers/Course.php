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
	public function it()
	{
	    $this->load->helper('url');
	    $this->load->view('head');
	    $this->load->view('menu');
	    $this->load->view('course/header', array("course"=>"เทคโนโลยีสารสนเทศ"));
	    $this->load->view('course/it');
	    $this->load->view('footer');
	    $this->load->view('foot');
	}
	public function dim()
	{
	    $this->load->helper('url');
	    $this->load->view('head');
	    $this->load->view('menu');
	    $this->load->view('course/header', array("course"=>"การจัดการสารสนเทศดิจิทัล"));
	    $this->load->view('course/dim');
	    $this->load->view('footer');
	    $this->load->view('foot');
	}
	public function mta()
	{
	    $this->load->helper('url');
	    $this->load->view('head');
	    $this->load->view('menu');
	    $this->load->view('course/header', array("course"=>"เทคโนโลยีมัลติมีเดียและแอนิเมชัน"));
	    $this->load->view('course/mta');
	    $this->load->view('footer');
	    $this->load->view('foot');
	}
	public function com()
	{
	    $this->load->helper('url');
	    $this->load->view('head');
	    $this->load->view('menu');
	    $this->load->view('course/header', array("course"=>"นิเทศศาสตร์"));
	    $this->load->view('course/com');
	    $this->load->view('footer');
	    $this->load->view('foot');
	}
	public function mit()
	{
	    $this->load->helper('url');
	    $this->load->view('head');
	    $this->load->view('menu');
	    $this->load->view('course/header', array("course"=>"การจัดการเทคโนโลยีสารสนเทศ"));
	    $this->load->view('course/mit');
	    $this->load->view('footer');
	    $this->load->view('foot');
	}
}
