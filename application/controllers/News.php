<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function print_head_slide(){
        $this->load->view('head');
        $this->load->view('menu');
        $this->load->view('slide');
    }
    public function print_head($title="สารสนเทศศาสตร์"){
        $this->load->view('head');
        $this->load->view('menu');
        $this->load->view('title',array("title_name"=>$title));
    }
    public function print_foot(){
        $this->load->view('footer');
        $this->load->view('foot');
    }
    
	public function index()
	{
		$this->load->view('head');
		$this->load->view('menu');
		$this->load->view('footer');
		$this->load->view('foot');
	}
	public function topic($id=0)
	{
	    if($id==1){
	        $this->print_head("ข่าวประชาสัมพันธ์");
	        $this->load->view('news/news_all_1');
	    }else if($id==2){
	        $this->print_head("ข่าวกิจกรรม");
	        $this->load->view('news/news_all_2');
	    }
	    $this->print_foot();
	}
	public function detail($topic=0)
	{
	    $this->print_head();
	    if($topic==1){
	        $this->load->view('news/news_1');
	    }else if($topic==2){
	        $this->load->view('news/news_2');
	    }else if($topic==3){
	        $this->load->view('news/news_3');
	    }else if($topic==4){
	        $this->load->view('news/news_4');
	    }else if($topic==5){
	        $this->load->view('news/news_5');
	    }else if($topic=="IT003"){
	        $this->load->view('news/IT003');
	    }
	    $this->print_foot();
	}
	
}
