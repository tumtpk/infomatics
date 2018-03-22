<body>
   <header id="header-wrap">
   <nav>
   	<div id = "wu_logo" >
		<div class="row">
         	<div class="col-md-1 col-xs-12"></div>
         	<div class="col-md-1 col-xs-12">
         		<img height="190px" src="<?= base_url(); ?>assets/img/logo/wu_logo.png">
         	</div>
         	<div class="col-md-10 col-xs-12">
         		<div class="row section">
         		</div>
             	<div class="row">
             		<div class="col-md-12 col-xs-12">
             			<div style="padding:10px 5px 15px 20px; font-size:40px;color: white;">สำนักวิชาสารสนเทศศาสตร์</div>
             		</div>
             	</div>
             	<div class="row">
             		<div class="col-md-12 col-xs-12">
             			<div style="padding:10px 5px 15px 20px; font-size:40px;color: white;">School of Informatics</div>
             		</div>
             	</div>
         	</div>
         </div>
	</div>
   </nav>
   <nav class="navbar navbar-expand-md">   
      <div class="container">
         <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation" style="padding: 30px 300px;">
            <span class="navbar-toggler-icon">☰</span>
            </button>
         </div>
         <div class="collapse navbar-collapse" id="main-menu">
            <ul class="navbar-nav mr-auto w-100 justify-content">
               <li class="nav-item active">
                  <a class="nav-link active" href="<?=site_url("en")?>">
                  <i class="fa fa-home" style="font-size:18px;"></i>
                  <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="<?=site_url("en/msg_dean")?>">Message from the Dean</a>
					<a class="dropdown-item" href="<?=site_url("en/history")?>">History</a>
                     <a class="dropdown-item" href="<?=site_url("en/philosophy")?>">Vision/Mission</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program</a>
                  <div class="dropdown-menu">
                  	<ul class="navbar-nav mr-auto w-50 justify-content-end">
                     	<li class="nav-item dropdown">
                     	<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Undergraduate</a>
                     	<div class="dropdown-menu">
                     		<a class="dropdown-item" href="<?=site_url("course/dim")?>">การจัดการสารสนเทศดิจิทัล</a>
                     		<a class="dropdown-item" href="<?=site_url("course/com")?>">นิเทศศาสตร์</a>
                             <a class="dropdown-item" href="<?=site_url("course/mta")?>">เทคโนโลยีมัลติมีเดียและแอนิเมชัน</a>
                             <a class="dropdown-item" href="<?=site_url("course/it")?>">เทคโนโลยีสารสนเทศ</a>
                             <a class="dropdown-item" href="<?=site_url("course/swe")?>">วิศวกรรมซอฟต์แวร์</a>
                     	</div>
                     	</li>
                     </ul>
                     <ul class="navbar-nav mr-auto w-50 justify-content-end">
                     	<li class="nav-item dropdown">
                     	<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Graduate</a>
                     	<div class="dropdown-menu">
                     		<a class="dropdown-item" href="<?=site_url("course/mit")?>">การจัดการเทคโนโลยีสารสนเทศ</a>
                     	</div>
                     	</li>
                     </ul>
                  </div>
               </li>
               
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personal</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="<?=site_url("en/new_student")?>">Staff</a>
                     <a class="dropdown-item" href="<?=site_url("en/student")?>">Support</a>
                  </div>
               </li>
               
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Research</a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Info Global</a>
               </li>
               
               <li class="nav-item dropdown">
               		<a class="nav-link " href="<?=site_url("en/contact")?>">Contact Us<span class="sr-only">(current)</span></a>                  
               </li>
               
            </ul>
            <ul class="navbar-nav mr-auto justify-content-end">
            <li class="nav-item dropdown">
               		<a class="nav-link " href="<?=site_url("th")?>">
               		<img alt="" style="height: 25px;" src="<?= base_url(); ?>assets/img/languages/Thailand-Flag.png">
               		</a>                  
               </li>
            </ul>
         </div>
         <ul class="wpb-mobile-menu">
            <li>
               <a class="active" href="index.html">Home</a>
            </li>
            <li>
               <a href="#">Pages</a>
               <ul>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="about-us2.html">About Us 2</a></li>
                  <li><a href="team-page.html">Team Members</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="service2.html">Services 2</a></li>
                  <li><a href="contact1.html">Contact Us</a></li>
                  <li><a href="contact1.html">Contact Us 2</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="404.html">404</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Shortcodes</a>
               <ul>
                  <li><a href="accordions.html">Accordions</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="skills.html">Progress Bars</a></li>
                  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="clients.html">Clients</a></li>
                  <li><a href="icon.html">Icon Boxes</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="carousel.html">Carousel</a></li>
                  <li><a href="maps.html">Google Maps</a></li>
                  <li><a href="pricing.html">Pricing tables</a></li>
                  <li><a href="notification.html">Notification</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Portfolio</a>
               <ul>
                  <li><a href="portfolio-col-2.html">Portfolio 2 Columns</a></li>
                  <li><a href="portfolio-col-3.html">Portfolio 3 Columns</a></li>
                  <li><a href="portfolio-col-4.html">Portfolio 4 Columns</a></li>
                  <li><a href="portfolio-item.html">Portfolio Single</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Blog</a>
               <ul>
                  <li><a href="sidebar-right.html">Sidebar Right</a></li>
                  <li><a href="sidebar-left.html">Sidebar Left</a></li>
                  <li><a href="sidebar-full.html">Full Width</a></li>
                  <li><a href="blog-single.html">Single Post</a></li>
                  <li><a href="blog-grids.html">Blog Grids</a></li>
               </ul>
            </li>
            <li>
               <a href="#">Contact Us</a>
               <ul>
                  <li><a href="contact1.html">Contact us 1</a></li>
                  <li><a href="contact2.html">Contact us 2</a></li>
               </ul>
            </li>
         </ul>
      </div>
   </nav>