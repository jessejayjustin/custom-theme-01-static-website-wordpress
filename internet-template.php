<?php 

get_header();

/* Template Name: internet-template */
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
	  	<div id="internetPageCarousel" class="carousel">
	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	          <img src="<?php echo(get_template_directory_uri()); ?>/images/internet-services.jpg" alt="internet_services" style="width:100%;">
	          <div class="carousel-caption">
	            <p>we offer service on your<p>
	            <p>terms</p>
	            <p>Everyone has issues from time to time. When you need</p>
	            <p>us, we're ready to help the way you want.</p>
	          </div>
	      </div>
	    </div> 
	    <ul class="nav nav-tabs" id="internetPageTab" role="tablist">
	    <li class="nav-item active">
	      <a class="nav-link" id="corporate-tab" data-toggle="tab" href="#corporate" role="tab" aria-controls="corporate"
	        aria-selected="true">Corporate Connectivity</a>
	    </li>
	    <li class="nav-item">
	      <a class="nav-link" id="soho-tab" data-toggle="tab" href="#soho" role="tab" aria-controls="soho"
	        aria-selected="false">SOHO</a>
	    </li>
	    </ul>

	    <div class="tab-content" id="myTabContent">
		    <div class="tab-pane active in" id="corporate" role="tabpanel" aria-labelledby="corporate-tab">
		      <div class="internet-tb-content-group">
		        <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/data_connectivity.jpg" alt="internet_services">
		        <div class="tab-caption">
		          <h3>Data Connectivity</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a fermentum orci. Aenean tempor ligula vitae ligula gravida, eget auctor turpis sagittis. Proin vitae sem sit amet quam facilisis consequat. Donec tincidunt tristique nibh, et laoreet ex porta id. Suspendisse nec mattis orci.</p>

		          <p>Suspendisse a ex semper turpis efficitur porttitor at ac elit. Fusce id mollis sapien. Nullam pharetra varius magna vel imperdiet. Mauris posuere sem in ante pretium, eu cursus magna finibus. Proin ornare mi non ligula feugiat sollicitudin.  Pellentesque in porttitor ex. Sed molestie ipsum vitae eros commodo, quis consequat nibh semper.</p>
		          <p><a class="btn btn-danger btn-caption tab-button" href="#">LEARN MORE</a></p>
		        </div>
		      </div>
		      <div class="internet-tb-content-group">
		        <div class="tab-caption">
		          <h3>Internet Connectivity</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a fermentum orci. Aenean tempor ligula vitae ligula gravida, eget auctor turpis sagittis. Proin vitae sem sit amet quam facilisis consequat. Donec tincidunt tristique nibh, et laoreet ex porta id. Suspendisse nec mattis orci. </p>

		          <p>Suspendisse a ex semper turpis efficitur porttitor at ac elit. Fusce id mollis sapien. Nullam pharetra varius magna vel imperdiet. Mauris posuere sem in ante pretium, eu cursus magna finibus. Proin ornare mi non ligula feugiat sollicitudin.</p>

		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies quam sit amet malesuada consectetur. Aliquam vehicula consequat magna, vel mollis lectus porta ut. Proin pellentesque sollicitudin ligula ac ultricies. Vivamus libero massa, posuere porta nisl ut, porta cursus leo. Donec quis nisl metus.</p>

		          <p>Nullam hendrerit volutpat finibus. Mauris nec sodales metus. Integer vel ligula ante. Maecenas sed tellus consequat, aliquet quam sit amet, fermentum dui. Suspendisse potenti. Donec interdum, lacus ac mollis maximus, massa magna laoreet mauris, nec viverra neque lectus nec arcu. Etiam dictum eros ac erat lobortis, eget imperdiet ligula congue.</p>
		        </div>
		        <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/internet_connectivity.jpg" alt="internet_services">
		        <div class="tab-caption" id="tb-caption-mobile">
		          <h3>Internet Connectivity</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a fermentum orci. Aenean tempor ligula vitae ligula gravida, eget auctor turpis sagittis. Proin vitae sem sit amet quam facilisis consequat. Donec tincidunt tristique nibh, et laoreet ex porta id. Suspendisse nec mattis orci. </p>

		          <p>Suspendisse a ex semper turpis efficitur porttitor at ac elit. Fusce id mollis sapien. Nullam pharetra varius magna vel imperdiet. Mauris posuere sem in ante pretium, eu cursus magna finibus. Proin ornare mi non ligula feugiat sollicitudin.</p>

		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies quam sit amet malesuada consectetur. Aliquam vehicula consequat magna, vel mollis lectus porta ut. Proin pellentesque sollicitudin ligula ac ultricies. Vivamus libero massa, posuere porta nisl ut, porta cursus leo. Donec quis nisl metus.</p>

		          <p>Nullam hendrerit volutpat finibus. Mauris nec sodales metus. Integer vel ligula ante. Maecenas sed tellus consequat, aliquet quam sit amet, fermentum dui. Suspendisse potenti. Donec interdum, lacus ac mollis maximus, massa magna laoreet mauris, nec viverra neque lectus nec arcu. Etiam dictum eros ac erat lobortis, eget imperdiet ligula congue.</p>
		        </div>
		      </div>
		      <div class="internet-tb-content-group">
		        <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/ip_telephony.jpg" alt="internet_services">
		        <div class="tab-caption">
		          <h3>IP Telephony</h3>
		          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras a fermentum orci. Aenean tempor ligula vitae ligula gravida, eget auctor turpis sagittis. Proin vitae sem sit amet quam facilisis consequat. Donec tincidunt tristique nibh, et laoreet ex porta id. Suspendisse nec mattis orci. Nullam venenatis, massa vel mollis imperdiet, dolor nunc sagittis risus, nec semper massa arcu ac quam.</p>

		          <p>Donec interdum, lacus ac mollis maximus, massa magna laoreet mauris, nec viverra neque lectus nec arcu. Etiam dictum eros ac erat lobortis, eget imperdiet ligula congue. Vivamus cursus purus vitae sollicitudin tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tellus augue, viverra non iaculis eget, commodo vitae nisl. Nam hendrerit, odio nec ultricies consequat, nisl dolor laoreet nisi, sed tincidunt libero quam quis ligula.</p>

		          <p>Sed molestie ipsum vitae eros commodo, quis consequat nibh semper. Donec vestibulum mollis purus, eu accumsan purus. Aliquam condimentum, mauris nec tincidunt feugiat.</p>
		          <p><a class="btn btn-danger btn-caption tab-button" href="#">LEARN MORE</a></p>
		        </div>
		      </div>
		    </div>
		    <div class="tab-pane" id="soho" role="tabpanel" aria-labelledby="soho-tab"> 
		        <div class="internet-tb-content-group">
			        <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/soho.jpg" alt="data_services">
			        <div class="tab-caption">
			          <h3>SOHO</h3>
			          <p>Nullam venenatis, massa vel mollis imperdiet, dolor nunc sagittis risus, nec semper massa arcu ac quam. Suspendisse potenti. Aliquam ut nibh mi. Maecenas congue pretium velit. Morbi nisi quam, gravida ac dapibus non, pulvinar eget ante. Sed et dictum eros. Vivamus consectetur vehicula nulla vitae maximus.</p>

			          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies quam sit amet malesuada consectetur. Aliquam vehicula consequat magna, vel mollis lectus porta ut. Proin pellentesque sollicitudin ligula ac ultricies. Vivamus libero massa, posuere porta nisl ut, porta cursus leo. Donec quis nisl metus. Nullam hendrerit volutpat finibus.</p>
			        </div>
		        </div>
		    </div>
	    </div>    
    </main>
</div>

<?php

include (TEMPLATEPATH . '/static-page.php'); 

get_footer();



