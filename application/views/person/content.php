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
	               	<a href="#">คณบดี</a><br/>
	               	 รศ.ดร.พูลพงษ์ บุญพราหมณ์<br/>
	               	<i class="fa fa-phone"></i> เบอร์ติดต่อ 2266 , 2206</br>
	               	<i class="fa fa-envelope-o"></i> bpoonpon@wu.ac.th
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
	              	<a href="#">รองคณบดี</a></br>
	               	 อาจารย์ ดร.อัตนันท์ เตโชพิศาลวงศ์<br/>
	               	<i class="fa fa-phone"></i> 3811 2657 , 3803 2206</br>
	               	<i class="fa fa-envelope-o"></i> attanan.ta@wu.ac.th
	              </p>
	            </div>
          </div>
      	</div>
      	<?php foreach ($data as $key => $val){  ?>
      	</br>
          	<div class="row">
          		<div class="col-md-12">
          			<a href="javascript:;" onclick="showPerson('<?=$key?>')" autofocus><h3><?=$val['name']?></h3></a>
          		</div>
          	</div>
      	</br>
      	<?php $persons = $val['person'];  
            $count = 0;
            echo "<div id='$key' style='display:none'>";
            foreach ($persons as $person){ $count++;?>
            	<?php if($count == 1){ ?>
            	<div class="row">
           		<?php } ?>
            	<div class="col-md-3">
    	          <!-- Team Item Starts -->
    	        	<div class="team-item wow fadeInUpQuick animated divwidth" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s;-moz-animation-delay: 1s;animation-delay: 1s;">
    	            <figure class="team-profile">
    	              <img src="<?=base_url('assets/img/person/').$person['pic'].".jpg"?>" width="105px" height="131px" alt="">
    	            </figure>
    	          </div>
    	          <div class="info">
    	              <p>
    	              	<a href="#"><?=$person['rank'] ?></a></br>
	               	 	<?=$person['name'] ?><br/>
	               		<i class="fa fa-phone"></i> <?=$person['phone'] ?></br>
    	                <i class="fa fa-envelope-o"></i> <?=$person['email'] ?>
    	              </p>
    	            </div>
              </div>
              
              <?php if($count == 4){ ?>
            </div>
            <?php $count = 0; }  } 
            if($count != 0){
                echo "</div>";
            }
            ?>
            </div>
      	<?php } ?>
      	
      	
      	
      	  
       
      </div><!-- Container Ends -->
    </section>