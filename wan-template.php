<?php 

get_header();

/* Template Name: wan-template */
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
	    <div id="wanPageCarousel" class="carousel">
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		      <div class="item active">
		          <img src="<?php echo(get_template_directory_uri()); ?>/images/wan_services.jpg" alt="wan_services" style="width:100%;">
		          <div class="carousel-caption">
		            <p>wan services<p>
		          </div>
		      </div>
	    </div>   

    <ul class="nav nav-tabs" id="wanPageTab" role="tablist">
      <li class="nav-item active">
        <a class="nav-link" id="mpls-tab" data-toggle="tab" href="#mpls" role="tab" aria-controls="mpls"
          aria-selected="true">MPLS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="radio-tab" data-toggle="tab" href="#radio" role="tab" aria-controls="radio"
          aria-selected="false">Radio Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="wifi-tab" data-toggle="tab" href="#wifi" role="tab" aria-controls="wifi"
          aria-selected="true">Wi-Fi Solutions</a>
      </li>
    </ul>

    <div class="tab-content" id="wanPageTabContent">
        <div class="tab-pane active in" id="mpls" role="tabpanel" aria-labelledby="mpls-tab">
          <div class="wan-page-tab-content">
            <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/wan-featured.jpg" alt="wan-featured">
            <div class="tab-caption">
              <h3>MPLS</h3>
              <p>Vestibulum non mauris eu purus feugiat dictum. Integer hendrerit gravida porttitor. Suspendisse eu venenatis odio. Sed et rutrum tortor. Aenean id dictum nunc, in facilisis orci. Sed nec eleifend augue. Suspendisse a ex semper turpis efficitur porttitor at ac elit. Fusce id mollis sapien. Nullam pharetra varius magna vel imperdiet.</p>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies quam sit amet malesuada consectetur. Aliquam vehicula consequat magna, vel mollis lectus porta ut.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="radio" role="tabpanel" aria-labelledby="radio-tab"> 
          <div class="wan-page-tab-content">
            <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/radio_link.jpg" alt="internet_services">
            <div class="tab-caption">
              <h3>Radio Link</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a fermentum orci. Aenean tempor ligula vitae ligula gravida, eget auctor turpis sagittis. Proin vitae sem sit amet quam facilisis consequat. Donec tincidunt tristique nibh, et laoreet ex porta id. Suspendisse nec mattis orci. Aliquam et nisl egestas, suscipit velit eu, vestibulum elit. Fusce lobortis velit neque. Proin vitae molestie metus. Sed malesuada est libero, non scelerisque erat ultrices a.</p>

              <p>Nullam venenatis, massa vel mollis imperdiet, dolor nunc sagittis risus, nec semper massa arcu ac quam. Suspendisse potenti. Aliquam ut nibh mi. Maecenas congue pretium velit. Morbi nisi quam, gravida ac dapibus non, pulvinar eget ante. Pellentesque in porttitor ex.</p>
            </div>
          </div>
        </div>
        <div class="tab-pane" id="wifi" role="tabpanel" aria-labelledby="wifi-tab"> 
          <div class="wan-page-tab-content">
            <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/wifi.jpg" alt="internet_services">
            <div class="tab-caption">
              <h3>Wi-fi Solutions</h3>
              <p>Nullam venenatis, massa vel mollis imperdiet, dolor nunc sagittis risus, nec semper massa arcu ac quam. Suspendisse potenti. Aliquam ut nibh mi. Maecenas congue pretium velit. Morbi nisi quam, gravida ac dapibus non, pulvinar eget ante. Sed et dictum eros. Vivamus consectetur vehicula nulla vitae maximus.</p>
            </div>
          </div>
        </div>
    </div>
  </main>  
</div> 


<?php

include (TEMPLATEPATH . '/static-page.php'); 

get_footer();

