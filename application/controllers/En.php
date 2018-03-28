<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class En extends CI_Controller {

    public function print_head_slide(){
        $this->load->helper('url');
        $this->load->view('head');
        $this->load->view('menu-en');
        $this->load->view('slide');
    }
    public function print_head($title="สารสนเทศศาสตร์"){
        $this->load->helper('url');
        $this->load->view('head');
        $this->load->view('menu-en');
        $this->load->view('title',array("title_name"=>$title));
    }
    public function print_foot(){
        $this->load->view('footer');
        $this->load->view('foot');
    }
    
	public function index()
	{
	    $this->print_head_slide();
		$this->load->view('content-en');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	
	public function msg_dean(){
	    $this->print_head("Massage from the Dean");
	    $this->load->view('en/main/msg_dean');
	    $this->print_foot();
	}
	public function history(){
	    $this->print_head("Background");
	    $this->load->view('en/main/history');
	    $this->print_foot();
	}
	public function philosophy(){
	    $this->print_head("Vision/Mission");
	    $this->load->view('en/main/philosophy');
	    $this->print_foot();
	}
	public function identities(){
	    $this->print_head("");
	    $this->load->view('main/identities');
	    $this->print_foot();
	}
	
	public function undergraduate(){
	    $this->load->helper('url');
	    $this->print_head("Undergraduate");
	    $this->load->view('main/undergraduate');
	    $this->print_foot();
	}
	public function ungrad_works(){
	    $this->print_head("ผลงานนักศึกษา");
	    //$this->load->view('main/graduate');
	    $this->print_foot();
	}
	
	public function graduate(){
	    $this->print_head("Graduate");
	    $this->load->view('main/graduate');
	    $this->print_foot();
	}
	
	public function new_student(){
	    $this->print_head("");
	    //$this->load->view('content');
	    $this->print_foot();
	}
	public function student(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	public function old_student(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	
	public function register(){
	    $this->print_head();
	    //$this->load->view('content');
	    $this->print_foot();
	}
	public function contact(){
	    $this->print_head("Contact As");
	    $this->load->view('contact');
	    $this->print_foot();
	}
	public function vdo(){
	    $this->print_head("VDO");
	    $this->load->view('main/vdo');
	    $this->print_foot();
	}
	public function picture(){
	    $this->print_head("รูปภาพประทับใจ");
	    $this->load->view('contact');
	    $this->print_foot();
	}
	
	public function staff(){
	    
	    $this->load->model('PersonModel');
	    $q["data"] = $this->PersonModel->getStaffEN();
	    $this->print_head("Staff");
	    $this->load->view('en/person/content', $q);
	    $this->print_foot();
	}
	public function support(){
	    
	    $this->load->model('PersonModel');
	    $q["data"] = $this->PersonModel->getSupportEN();
	    $this->print_head("Support Staff");
	    $this->load->view('en/person/content', $q);
	    $this->print_foot();
	}
	
	public function swe()
	{
	    $this->print_head("Software Engineering");
	    $this->load->view('en/course/swe');
	    $this->print_foot();
	}
	public function it()
	{
	    $this->print_head("Information Technology");
	    $this->load->view('en/course/it');
	    $this->print_foot();
	}
	public function dim()
	{
	    $this->print_head("Digital Information Management");
	    $this->load->view('en/course/dim');
	    $this->print_foot();
	}
	public function mta()
	{
	    $this->print_head("Multimedia Technology and Animation");
	    $this->load->view('en/course/mta');
	    $this->print_foot();
	}
	public function com()
	{
	    $this->print_head("Communication Arts");
	    $this->load->view('en/course/com');
	    $this->print_foot();
	}
	public function mit()
	{
	    $this->print_head("การจัดการเทคโนโลยีสารสนเทศ");
	    $this->load->view('en/course/mit');
	    $this->print_foot();
	}
}
