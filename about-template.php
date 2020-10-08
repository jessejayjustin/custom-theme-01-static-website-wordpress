<?php 

get_header();

/* Template Name: about-template */
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

		<div id="aboutPageCarousel" class="carousel">
		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">
		      <div class="item active">
		          <img src="<?php echo(get_template_directory_uri()); ?>/images/about_us-1.jpg" alt="about_us-1" style="width:100%;">
		          <div class="carousel-caption">
		            <p class="text-left">About Us<p>
		          </div>
		      </div>
		    </div>
		</div>   

	    <div class="about-content col-lg-7 col-md-7 col-sm-10">
		    <p>Donec interdum, lacus ac mollis maximus, massa magna laoreet mauris, nec viverra neque lectus nec arcu. Etiam dictum eros ac erat lobortis, eget imperdiet ligula congue. Vivamus cursus purus vitae sollicitudin tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur tellus augue, viverra non iaculis eget, commodo vitae nisl. Nam hendrerit, odio nec ultricies consequat, nisl dolor laoreet nisi, sed tincidunt libero quam quis ligula.</p>

		    <p>Vestibulum non mauris eu purus feugiat dictum. Integer hendrerit gravida porttitor. Suspendisse eu venenatis odio. Sed et rutrum tortor. Aenean id dictum nunc, in facilisis orci. Sed nec eleifend augue. Suspendisse a ex semper turpis efficitur porttitor at ac elit. Fusce id mollis sapien.</p>

		    <p>Nullam venenatis, massa vel mollis imperdiet, dolor nunc sagittis risus, nec semper massa arcu ac quam. Suspendisse potenti. Aliquam ut nibh mi. Maecenas congue pretium velit. Morbi nisi quam, gravida ac dapibus non, pulvinar eget ante. Sed et dictum eros. Vivamus consectetur vehicula nulla vitae maximus.
		    </p>
	    </div>   
	</main>  
</div>

<?php

include (TEMPLATEPATH . '/sslpay-widget.php'); 

get_footer();

