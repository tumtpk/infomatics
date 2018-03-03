<section id="team" class="section" style="text-align:  -webkit-center;">
      <!-- Container Starts -->
      <div class="container">
      	<div class="row">
      		<div class="col-md-6">
	          <!-- Team Item Starts -->
	        	<div class="team-item wow fadeInUpQuick animated div-width-head" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s;-moz-animation-delay: 1s;animation-delay: 1s;">
	            <figure class="team-profile">
	              <img src="<?=base_url()?>assets/img/team/4011010312.jpg" alt="">
	            </figure>
	          </div>
	          <div class="info">
	              <p>
	               	 รศ.ดร.พูลพงษ์ บุญพราหมณ์<br/>
	               	<a href="#">คณบดี</a>
	              </p>
	            </div>
          </div>
          <div class="col-md-6">
	          <!-- Team Item Starts -->
	        	<div class="team-item wow fadeInUpQuick animated div-width-head" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s;-moz-animation-delay: 1s;animation-delay: 1s;">
	            <figure class="team-profile">
	              <img src="<?=base_url()?>assets/img/team/5500000048.jpg" alt="">
	            </figure>
	          </div>
	          <div class="info">
	              <p>
	               	 อาจารย์ ดร.อัตนันท์ เตโชพิศาลวงศ์<br/>
	               	<a href="#">รองคณบดี</a>
	              </p>
	            </div>
          </div>
      	</div>   
        <?php 
        $count = 0;
        foreach ($data as $person){ $count++;?>
        	<?php if($count == 1){ ?>
        	<div class="row">
       		<?php } ?>
        	<div class="col-md-3">
	          <!-- Team Item Starts -->
	        	<div class="team-item wow fadeInUpQuick animated divwidth" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s;-moz-animation-delay: 1s;animation-delay: 1s;">
	            <figure class="team-profile">
	              <img src="<?=base_url()?>assets/img/team/team-01.jpg" alt="">
	            </figure>
	          </div>
	          <div class="info">
	              <p>
	                <?=$person['name'] ?>
	              </p>
	            </div>
          </div>
          
          <?php if($count == 4){ ?>
        </div>
        <?php $count = 0; } } ?>
      </div><!-- Container Ends -->
    </section>