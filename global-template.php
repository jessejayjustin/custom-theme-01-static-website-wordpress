<?php 

get_header();

/* Template Name: global-template */
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
  	<div id="globalPageCarousel" class="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img src="<?php echo(get_template_directory_uri()); ?>/images/global_services.jpg" alt="global_services" style="width:100%;">
          <div class="carousel-caption">
            <p>we erase the boundary<p>
          </div>
      </div>
    </div>        

    <ul class="nav nav-tabs" id="globalPageTabs" role="tablist">
      <li class="nav-item active">
        <a class="nav-link" id="mpls-tab" data-toggle="tab" href="#mpls" role="tab" aria-controls="mpls"
          aria-selected="true">MPLS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="ipvpn-tab" data-toggle="tab" href="#ipvpn" role="tab" aria-controls="ipvpn"
          aria-selected="false">IPVPN</a>
      </li>
    </ul>

    <div class="tab-content" id="globalTabContent">
      <div class="tab-pane active in" id="mpls" role="tabpanel" aria-labelledby="mpls-tab">
        <div class="global-page-tab-content">
          <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/mpls-1.jpg" alt="mpls">
          <div class="tab-caption">
            <h3>MPLS</h3>
            <p>Vestibulum non mauris eu purus feugiat dictum. Integer hendrerit gravida porttitor. Suspendisse eu venenatis odio. Sed et rutrum tortor. Aenean id dictum nunc, in facilisis orci. Sed nec eleifend augue. Suspendisse a ex semper turpis efficitur porttitor at ac elit. Fusce id mollis sapien. Nullam pharetra varius magna vel imperdiet.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies quam sit amet malesuada consectetur. Aliquam vehicula consequat magna, vel mollis lectus porta ut.</p>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="ipvpn" role="tabpanel" aria-labelledby="ipvpn-tab"> 
        <div class="global-page-tab-content">
          <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/ip-vpn.jpg" alt="internet_services" style="width:120%;">
          <div class="tab-caption">
            <h3>IP VPN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a fermentum orci. Aenean tempor ligula vitae ligula gravida, eget auctor turpis sagittis. Proin vitae sem sit amet quam facilisis consequat.</p>
          </div>
        </div>
      </div>
    </div>
  </main>  
</div> 

<?php

include (TEMPLATEPATH . '/static-page.php'); 

get_footer();
