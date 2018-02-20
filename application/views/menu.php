<body>
   <header id="header-wrap">
   <nav class="navbar navbar-expand-md">
      <div class="container">
         <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
            <img src="<?= base_url(); ?>assets/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
         </div>
         <div class="collapse navbar-collapse" id="main-menu">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
               <li class="nav-item active">
                  <a class="nav-link active" href="<?=site_url("main")?>">หน้าหลัก <span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">เกี่ยวกับสำนักวิชา</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="about-us.html">ความเป็นมา
</a>
                     <a class="dropdown-item" href="about-us2.html">ปรัชญา/วิสัยทัศน์/พันธกิจ</a>
                     <a class="dropdown-item" href="team-page.html">อัตลักษณ์นักศึกษา</a>
                     <a class="dropdown-item" href="services.html">บุคลากร</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">หลักสูตร</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="maps.html">Google Maps</a>
                     <a class="dropdown-item" href="pricing.html">Pricing tables</a>
                     <a class="dropdown-item" href="notification.html">Notification</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">นักศึกษาปัจจุบัน</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="portfolio-col-2.html">Portfolio 2 Columns</a>
                     <a class="dropdown-item" href="portfolio-col-3.html">Portfolio 3 Columns</a>
                     <a class="dropdown-item" href="portfolio-col-4.html">Portfolio 4 Columns</a>
                     <a class="dropdown-item" href="portfolio-item.html">Portfolio Single</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ข่าว</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="sidebar-right.html">ข่าวประชาสัมพันธ์</a>
                     <a class="dropdown-item" href="sidebar-left.html">ข่าวกิจกรรม</a>
                     <!-- <a class="dropdown-item" href="sidebar-full.html"></a>
                     <a class="dropdown-item" href="blog-single.html"></a>
                     <a class="dropdown-item" href="blog-grids.html"></a>
                      -->
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" href="<?=base_url('person')?>">บุคลากร <span class="sr-only">(current)</span></a>
               </li>
            </ul>
            <form class="form-inline">
               <div class="top_search_con">
                  <input class=" mr-sm-2" type="text" placeholder="Search Here ...">
                  <span class="top_search_icon"><i class="icon-magnifier"></i></span>
               </div>
            </form>
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