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
	    }else if($topic==6){
	        $this->load->view('news/news_6');
	    }else if($topic=="IT003"){
	        $this->load->view('news/IT003');
	    }else if($topic=="IT005"){
	        $this->load->view('news/IT005');
	    }else if($topic=="IT006"){
	        $this->load->view('news/IT006');
	    }else if($topic=="IT007"){
	        $this->load->view('news/IT007');
	    }else if($topic=="IT008"){
	        $this->load->view('news/IT008');
	    }else if($topic=="IT009"){
	        $this->load->view('news/IT009');
	    }else if($topic=="IT012"){
	        $this->load->view('news/IT012');
	    }else if($topic=="IT014"){
	        $this->load->view('news/IT014');
	    }else if($topic=="IT015"){
	        $this->load->view('news/IT015');
	    }else if($topic=="MC001"){
	        $this->load->view('news/MC001');
	    }else if($topic=="MC002"){
	        $this->load->view('news/MC002');
	    }else if($topic=="MC003"){
	        $this->load->view('news/MC003');
	    }else if($topic=="MC010"){
	        $this->load->view('news/MC010');
	    }else if($topic=="MC013"){
	        $this->load->view('news/MC013');
	    }else if($topic=="MC014"){
	        $this->load->view('news/MC014');
	    }else if($topic=="MC015"){
	        $this->load->view('news/MC015');
	    }else if($topic=="MC016"){
	        $this->load->view('news/MC016');
	    }else if($topic=="MC017"){
	        $this->load->view('news/MC017');
	    }else if($topic=="MC018"){
	        $this->load->view('news/MC018');
	    }else if($topic=="MC025"){
	        $this->load->view('news/MC025');
	    }else if($topic=="MC029"){
	        $this->load->view('news/MC029');
	    }else if($topic=="MC030"){
	        $this->load->view('news/MC030');
	       }else if($topic=="MTA002"){
	        $this->load->view('news/MTA002');
	    }else if($topic=="MTA003"){
	        $this->load->view('news/MTA003');
	    }else if($topic=="MTA005"){
	        $this->load->view('news/MTA005');
	    }else if($topic=="MTA006"){
	        $this->load->view('news/MTA006');
	    }else if($topic=="MTA008"){
	        $this->load->view('news/MTA008');
	    }else if($topic=="MTA009"){
	        $this->load->view('news/MTA009');
	    }else if($topic=="MTA010"){
	        $this->load->view('news/MTA010');
	    }else if($topic=="MTA011"){
	        $this->load->view('news/MTA011');
	    }else if($topic=="MTA014"){
	        $this->load->view('news/MTA014');
	    }else if($topic=="DIM001"){
	        $this->load->view('news/DIM001');
	    }else if($topic=="DIM002"){
	        $this->load->view('news/DIM002');
	    }else if($topic=="DIM003"){
	        $this->load->view('news/DIM003');
	    }else if($topic=="DIM004"){
	        $this->load->view('news/DIM004');
	    }else if($topic=="DIM005"){
	        $this->load->view('news/DIM005');
	    }else if($topic=="DIM007"){
	        $this->load->view('news/DIM007');
	    }else if($topic=="SWE001"){
	        $this->load->view('news/SWE001');
	    }else if($topic=="SWE002"){
	        $this->load->view('news/SWE002');
	    }else if($topic=="SWE003"){
	        $this->load->view('news/SWE003');
	    }else if($topic=="SWE004"){
	        $this->load->view('news/SWE004');
	    }else if($topic=="SWE005"){
	        $this->load->view('news/SWE005');
	    }else if($topic=="SWE006"){
	        $this->load->view('news/SWE006');
	    }else if($topic=="SWE007"){
	        $this->load->view('news/SWE007');
	    }else if($topic=="SWE008"){
	        $this->load->view('news/SWE008');
	    }else if($topic=="other001"){
	        $this->load->view('news/other001');
	    }
	    $this->print_foot();
	}
	
}
