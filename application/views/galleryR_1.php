<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('common/header.php');?>
  <header>
  	<title>Gallery</title>
		<?php $this->load->view('common/main_menu.php');?>
  </header>
<body>
  

  </div>
  <div class="container">
      <div class="thumbnail">
      
            <div class="caption">
                <div  class="panel with-nav-tabs panel-default"  style="background-color: #057185;" >
  <h1 style="text-align:center; color:#a1cd3b;">Pahalewela (Uthpala)</h1>
</div>
        <!-- Jssor Slider Begin -->
        
        <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto; width: 1140px; height: 700px; overflow: hidden;">

            <!-- Loading Screen -->
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;">
                </div>
                <div style="position: absolute; display: block; background: url(<?php echo $this->config->base_url(); ?>assets/image/slider/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
                </div>
            </div>

            <!-- Slides Container -->
            <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1140px; height: 700px;
            overflow: hidden;">
                <div>
                    <img u="image"src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File1.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File2.jpg" />
                </div>
                <div>
                    <img u="image"src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File3.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File4.jpg" />
                </div>
                <div>
                    <img u="image"src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File5.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File6.jpg" />
                </div>
                <div>
                    <img u="image"src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File7.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File8.jpg" />
                </div>
                <div>
                    <img u="image"src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File9.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File10.jpg" />
                </div>
                <div>
                    <img u="image"src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File11.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File12.jpg" />
                </div>
                <div>
                    <img u="image" src2="<?php echo $this->config->base_url(); ?>assets/image/slider/r1/File13.jpg" />
                </div>

            </div>

            <div u="navigator" class="jssorb05" style="bottom: 16px; right: 6px;">
                <!-- bullet navigator item prototype -->
                <div u="prototype"></div>
            </div>
            
            <span u="arrowleft" class="jssora11l" style="top: 123px; left: 8px;">
            </span>
            <!-- Arrow Right -->
            <span u="arrowright" class="jssora11r" style="top: 123px; right: 8px;">
            </span>
            <!--#endregion Arrow Navigator Skin End -->
            <a style="display: none" href="#">DK Works</a>
        </div>
        <!-- Jssor Slider End -->

    
    
  
    
    </div>
    
   
    
   
 </div> 

  </div>
            </div>
        




    <nav class="navbar navbar-default navbar-fixed-bottom">
  <div >
   <?php $this->load->view('common/footer.php');?>
  </div>
</nav>


	
</body>
</html>