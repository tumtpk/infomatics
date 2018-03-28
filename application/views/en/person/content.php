<section id="team" class="section" style="text-align:  -webkit-center;">
      <!-- Container Starts -->
      <div class="container">
      	<div class="row">
      		<div class="col-md-6">
	          <!-- Team Item Starts -->
	        	<div class="team-item wow fadeInUpQuick animated div-width-head" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s;-moz-animation-delay: 1s;animation-delay: 1s;">
	            <figure class="team-profile">
	              <a href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4011010312" target="_blank"><img src="<?=base_url()?>assets/img/team/4011010312.jpg" alt=""></a>
	            </figure>
	          </div>
	          <div class="info">
	              <p>
	               	<a href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=4011010312" target="_blank">Dean<br/>
	               	 Assoc.Prof.Dr. Poonpong Boonbrahm<br/></a>
	               	<i class="fa fa-phone"></i> Tel: 2266 , 2206</br>
	               	<i class="fa fa-envelope-o"></i> bpoonpon@wu.ac.th
	              </p>
	            </div>
          </div>
          <div class="col-md-6">
	          <!-- Team Item Starts -->
	        	<div class="team-item wow fadeInUpQuick animated div-width-head" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s;-moz-animation-delay: 1s;animation-delay: 1s;">
	            <figure class="team-profile">
	              <a href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=5500000048" target="_blank"><img src="<?=base_url()?>assets/img/team/5500000048.jpg" alt=""></a>
	            </figure>
	          </div>
	          <div class="info">
	              <p>
	              	<a href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=5500000048" target="_blank">Vice Dean<br/>
	               	    Dr. Attanan Tachopisalwong<br/></a>
	               	<i class="fa fa-phone"></i>Tel:3811 2657 , 3803 2206<br/>
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
    	              <a href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=<?=$person['personID'] ?>" target="_blank"><img src="<?=base_url('assets/img/person/').$person['pic'].".jpg"?>" width="105px" height="131px" alt=""></a>
    	            </figure>
    	          </div>
    	          <div class="info">
    	              <p>
    	              	<a href="http://expert.wu.ac.th/html/source/DESAboutPersonallist_.php?PERSONID=<?=$person['personID'] ?>" target="_blank"><?=$person['rank'] ?><br/>
	               	 	<?=$person['name'] ?><br/></a>
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