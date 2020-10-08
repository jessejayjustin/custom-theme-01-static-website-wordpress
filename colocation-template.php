<?php 

get_header();

/* Template Name: colocation-template */
?>
<div id="primary" class="content-area">
  <main id="main" class="site-main">
  	<div id="colocationPageCarousel" class="carousel">
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <div class="item active">
            <img src="<?php echo(get_template_directory_uri()); ?>/images/colocation.jpg" alt="colocation_services" style="width:100%;">
            <div class="carousel-caption">
              <p>your toughness our<p>
              <p>business</p>
            </div>
        </div>
    </div>   

    <ul class="nav nav-tabs" id="colocationPageTabs" role="tablist">
      <li class="nav-item active">
        <a class="nav-link" id="cloud-tab" data-toggle="tab" href="#cloud" role="tab" aria-controls="cloud"
          aria-selected="true">Cloud Computing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="data-tab" data-toggle="tab" href="#data" role="tab" aria-controls="data"
          aria-selected="false">Data Services</a>
      </li>
    </ul>

    <div class="tab-content" id="colocationTabContent">
      <div class="tab-pane active in" id="cloud" role="tabpanel" aria-labelledby="cloud-tab">
        <div class="colocation-page-tab-content">
          <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/cloud_computing.jpg" alt="cloud_computing">
          <div class="tab-caption">
            <h3>Cloud Computing</h3>
            <p>Vestibulum non mauris eu purus feugiat dictum. Integer hendrerit gravida porttitor. Suspendisse eu venenatis odio. Sed et rutrum tortor. Aenean id dictum nunc, in facilisis orci. Sed nec eleifend augue. 

            <p>Suspendisse a ex semper turpis efficitur porttitor at ac elit. Fusce id mollis sapien. Nullam pharetra varius magna vel imperdiet. Mauris posuere sem in ante pretium, eu cursus magna finibus. Proin ornare mi non ligula feugiat sollicitudin.</p>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="data" role="tabpanel" aria-labelledby="data-tab"> 
        <div class="colocation-page-tab-content">
          <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/data_services.jpg" alt="data_services">
          <div class="tab-caption">
            <h3>Data Services</h3>
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
