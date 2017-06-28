<caption>
<div class="container-fluid">
<nav class="navbar navbar-default">
  
    <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <li ><a href="<?php echo $this->config->base_url(); ?>">Home </a></li>
        <li><a href="<?php echo $this->config->base_url(); ?>index.php/home/about_Us">About Us </a></li>
        
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gallery
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>index.php/home/galleryR">Residences</a><br>
          <a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>index.php/home/galleryA">Apartments</a><br>
          <a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>index.php/home/galleryL">Leisure & Resorts</a><br>
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>index.php/home/galleryC">Commercial & Public</a><br>
          <a class="dropdown-item" href="<?php echo $this->config->base_url(); ?>index.php/home/galleryI">Interiors </a>
        </div>
      </li>
        <li>
           <a href="<?php echo $this->config->base_url(); ?>index.php/home/services">
             Services
           </a>
        </li>
        <li>
           <a href="<?php echo $this->config->base_url(); ?>index.php/home/contact_us">
             Contact Us
           </a>
        </li>
         
      </ul>

      
    </div><!-- /.navbar-collapse -->
  </div>
 
</nav>
</caption>