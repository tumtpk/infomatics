<body>
   <header id="header-wrap">
   <nav class="navbar navbar-expand-md">
      <div class="container">
         <div class="navbar-header">
            <a class="navbar-brand" href="<?=site_url("main")?>">
            <img height="80" width="250" src="<?= base_url(); ?>assets/img/logo/LOGO_INFO.png" alt="">
            <!-- School of Informatics  -->
            
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation" style="padding: 30px 300px;">
            <span class="navbar-toggler-icon">☰</span>
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
                     <a class="dropdown-item" href="<?=site_url("main/history")?>">ความเป็นมา
</a>
                     <a class="dropdown-item" href="<?=site_url("main/philosophy")?>">ปรัชญา/วิสัยทัศน์/พันธกิจ</a>
                     <a class="dropdown-item" href="<?=site_url("main/Identities")?>">อัตลักษณ์นักศึกษา</a>
                     <a class="dropdown-item" href="<?=site_url("person")?>">บุคลากร</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">หลักสูตร</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="<?=site_url("main/undergraduate")?>">หลักสูตรปริญญาตรี</a>
                     <a class="dropdown-item" href="<?=site_url("main/graduate")?>">หลักสูตรปริญญาโท-เอก</a>
                     <a class="dropdown-item" href="<?=site_url("main")?>">ผู้สนใจศึกษาต่อ</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">นักศึกษา</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="<?=site_url("main/new_student")?>">ผู้สนใจศึกษาต่อ</a>
                     <a class="dropdown-item" href="<?=site_url("main/student")?>">นักศึกษาปัจจุบัน</a>
                     <a class="dropdown-item" href="<?=site_url("main/old_student")?>">ศิษย์เก่า</a>
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ข่าว</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="<?=site_url("main")?>">ข่าวประชาสัมพันธ์</a>
                     <a class="dropdown-item" href="<?=site_url("main")?>">ข่าวกิจกรรม</a>
                     <!-- <a class="dropdown-item" href="sidebar-full.html"></a>
                     <a class="dropdown-item" href="blog-single.html"></a>
                     <a class="dropdown-item" href="blog-grids.html"></a>
                      -->
                  </div>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="<?=site_url("main")?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ติดต่อเรา</a>
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