<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp_starter_kit
 */

get_header();
?>
    <div id="primary" class="content-area">
		<main id="main" class="site-main">
		    
		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    <!-- Wrapper for slides -->
			    <div class="carousel-inner">

			      <div class="item active">
			        <img src="<?php echo(get_template_directory_uri()); ?>/images/Slider03.jpg" alt="Slider03" style="width:100%;">
			        <div class="carousel-caption">
			          <p>race online limited<p>
			          <p style="font-size: 16px;">redifining broadband</p>
			          <p><a class="btn btn-danger btn-caption" href="#">LEARN MORE</a></p>
			        </div>
			      </div>

			      <div class="item">
			        <img src="<?php echo(get_template_directory_uri()); ?>/images/Slider01.png" alt="Slider01" style="width:100%;">
			        <div class="carousel-caption">
			          <p>super fast cloud &<p>
			          <p>hosting service provider</p>
			          <p><a class="btn btn-danger btn-caption" href="#">LEARN MORE</a></p>
			        </div>
			      </div>
			    
			      <div class="item">
			        <img src="<?php echo(get_template_directory_uri()); ?>/images/Cloudhosting.jpg" alt="Cloudhosting" style="width:100%;">
			        <div class="carousel-caption">
			          <p>super fast cloud &<p>
			          <p>hosting service provider</p>
			          <p><a class="btn btn-danger btn-caption" href="#">LEARN MORE</a></p>
			        </div>
			      </div>
			    </div>
			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="icon-prev"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="icon-next"></span>
			      <span class="sr-only">Next</span>
			    </a>
		    </div>   

		    <div class="featured-services clearfix">
			    <div class="wrapper">
			      <h3 class="text-center">featured services</h3>
			      <p class="text-center">Race Online Limited, One of the fastest growing ISP in the country provides seamless, secured Data & Internet connectivity to various grades of customers using fiber &  wireless solutions</p>
				</div>
			</div> 

			<ul class="nav nav-tabs" id="myTab" role="tablist">
			    <li class="nav-item active">
			      <a class="nav-link" id="homeTab" data-toggle="tab" href="#internetServices" role="tab" aria-controls="home"
			        aria-selected="true">Internet Services</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" id="profileTab" data-toggle="tab" href="#globalServices" role="tab" aria-controls="profile"
			        aria-selected="false">Global Services</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" id="contactTab" data-toggle="tab" href="#wanServices" role="tab" aria-controls="contact"
			        aria-selected="false">WAN Services</a>
			    </li>
		    </ul>

			<div class="tab-content" id="myTabContent">
			    <div class="tab-pane active in" id="internetServices" role="tabpanel" aria-labelledby="internet-services-tab">
			      <div class="my-tab-content">
			        <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/internet-int768x512.jpg" alt="internet_services">
			        <div class="tab-caption">
			          <h3>Internet Services</h3>
			          <p>Race Online Limited offers a range of solutions for any business need  and budget. We offer internet access services with various service level descriptions for corporates and SMEs that require a premium internet experience, high availability and consistency.</p>
			          <p><a class="btn btn-danger tab-button" href="#">Learn more</a></p>
			        </div>
			      </div>
			    </div>
			    <div class="tab-pane" id="globalServices" role="tabpanel" aria-labelledby="global-services-tab"> 
			      <div class="my-tab-content">
			        <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/globa-featuredl-768x546.jpg" alt="global_services">
			        <div class="tab-caption">
			          <h3>Global Services</h3>
			          <p>Race Online Limited offers a range of solutions for any business need  and budget. We offer internet access services with various service level descriptions for corporates and SMEs that require a premium internet experience, high availability and consistency.</p>
			          <p><a class="btn btn-danger tab-button" href="#">Learn more</a></p>
			        </div>
			      </div>
			    </div>
			    <div class="tab-pane" id="wanServices" role="tabpanel" aria-labelledby="wan-services-tab">
			      <div class="my-tab-content">
			        <img class="img-responsive" src="<?php echo(get_template_directory_uri()); ?>/images/mpls.jpg" alt="wan_services">
			        <div class="tab-caption">
			          <h3>WAN Services</h3>
			          <p>Race Online Limited offers a range of solutions for any business need  and budget. We offer internet access services with various service level descriptions for corporates and SMEs that require a premium internet experience, high availability and consistency.</p>
			          <p><a class="btn btn-danger tab-button" href="#">Learn more</a></p>
			        </div>
			      </div>
			    </div>
			</div> 
         
			<div class="why-race-online clearfix">
			    <div class="wrapper"><br/>
			      <h3 class="text-center">why race online</h3>
			      <p class="text-center">Race Online Limited IP Transit service offers the important value in the Bangladesh market place by considering reliable, scalable and quality your business demands</p>
			      <ul class="text-center clearfix">
			        <li>
			          <img src="<?php echo(get_template_directory_uri()); ?>/images/high_speed_internet.png" alt="high_speed_internet">
			          <p>high-speed</p>
			          <p>internet</p>
			        </li>
			        <li>
			          <img src="<?php echo(get_template_directory_uri()); ?>/images/customer_support.png" alt="customer_support">
			          <p>24/7 customer</p>
			          <p>support</p>
			        </li>
			        <li>
			          <img src="<?php echo(get_template_directory_uri()); ?>/images/highly_secured.png" alt="highly_secured">
			          <p>highly</p>
			          <p>secured</p>
			        </li>
			        <li>
			          <img src="<?php echo(get_template_directory_uri()); ?>/images/high_speed_youtube.png" alt="high_speed_youtube">
			          <p>high speed youtube</p>
			          <p>& local traffic</p>
			        </li>
			      </ul>
			    </div>
			</div>

			<div class="our-presence clearfix">
			    <div class="wrapper clearfix">
			      <h3 class="text-center">our presence<h3>
			      <div class="our-presence-content clearfix">
			        <div class="select-content">
			          <select onchange="tagVisible()">
			            <option value="select one">Select District</option>
			            <option value="select two">Select two</option>
			            <option value="select three">Select three</option>
			          </select>
			          <select style="display: none; width: 350px;" class="text-center" id="tag-hidden">
			            <option value="select one">Select Area</option>
			            <option value="select two">Select two</option>
			            <option value="select three">Select three</option>
			          </select>
			        </div>
			        <div class="select-content">
			          <p><a class="btn btn-danger explore-button" href="#">Explore</a></p>
			          <div class="dot-content">
			            <p>&#8226;</p>
			            <p>&#8226;</p>
			          </div>
			          <div class="select-text">
			            <p>Available</p>
			            <p>Partially Available</p>
			          </div>
			        </div>
			      </div>
			    </div>
			    <div id="map"></div>
			    <div class="text-center pop">
			      <p><a class="btn pop-button" href="#">BTRC Approved POP Locations (PDF)</a></p>
			    </div>
			    <div class="wrapper">
			      <div class="our-presence-border-bottom"></div>
			    </div>
			</div>

			<div class="our-customers clearfix">
			    <div class="wrapper clearfix">
			        <div class="our-customers-content text-center">
				      <h3>our customers</h3>
				      <p>We cooperate with renowned business and international companies all over the world. Some of our partners and loyal customers are listed below.</p>
				      <ul id="our-customers-list clearfix">
				      	    <?php $myquery = new WP_Query('category_name=our-customers&posts_per_page=100&order=ASC'); ?>
							<?php while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
							    <li>
				                   <?php the_post_thumbnail(); ?>
							    </li>
							<?php endwhile; ?>
				      </ul>
				      <p><a class="btn btn-default btn-lg" id="showImages" onclick="addHeight(330)">Show more</a></p>
			        </div>
			    </div>
			</div>

			<div class="our-sister-concerns">
			    <div class="wrapper text-center">
			      <h3 class="text-center">our sister concerns</h3>
			      <ul>
			        <li>
			          <img src="<?php echo(get_template_directory_uri()); ?>/images/earth-1.png" alt="earth">
			        </li>
			        <li>
			          <img src="<?php echo(get_template_directory_uri()); ?>/images/dhaka-colo-1.png" alt="dhaka-colo">
			        </li>
			        <li>
			          <img src="<?php echo(get_template_directory_uri()); ?>/images/creative_bangladesh.png" alt="creative_bangladesh">
			        </li>
			      </ul>
			    </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	    <!--
		    <section id="featured">
		        <ul>
				    <?php $myquery //= new WP_Query('category_name=menu-items&posts_per_page=4'); ?>
					<?php //while ( $myquery->have_posts() ) : $myquery->the_post(); ?>
					    <li>
		                   <?php //the_post_thumbnail(); ?>
		                   <a href="<?php //the_permalink() ?>"><?php //the_title(); ?></a>
		                   <span><?php //echo get_post_meta($post->ID, 'price', 'true');?></span>
		                   <span class="star-<?php //echo get_post_meta($post->ID, 'rating', 'true');?> rating"></span>
					    </li>
					<?php //endwhile; ?>
		        </ul>
		    </section>
        -->

<?php

include (TEMPLATEPATH . '/sslpay-widget.php'); 

get_footer();