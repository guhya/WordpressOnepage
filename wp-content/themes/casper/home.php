<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package casper
 */

get_header(); ?>

	<!-- Header -->
	<header class="text-center" name="home">
		<div class="intro-text">
			<h1 class="wow fadeInDown">
				We are <strong><span class="color"><?php bloginfo( 'name' ); ?></span></strong>
			</h1>
			<p class="wow fadeInDown" ><?=get_bloginfo( 'description', 'display' );?></p>
			<a href="#works-section" class="btn btn-default btn-lg page-scroll wow fadeInUp" data-wow-delay="200ms">Our Portfolio</a>
		</div>
	</header>
	
	<!-- About Section -->
	<div id="about-section">
		<div class="container">
			<div class="section-title text-center wow fadeInDown" >
				<h2>
					<strong>About</strong> us
				</h2>
				<hr>
				<div class="clearfix"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
			</div>
			<div class="row">
				<div class="col-md-6 wow fadeInLeft">
					<img src="<?=get_template_directory_uri();?>/img/about.png" class="img-responsive">
				</div>
				<div class="col-md-6 wow fadeInRight">
					<h4>Who We Are</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam
						commodo nibh ante facilisis bibendum.</p>
					<div class="space"></div>
					<h4>What We Do</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at.</p>
					<div class="space"></div>
					<div class="list-style">
						<div class="row">
							<div class="col-lg-6 col-sm-6 col-xs-12">
								<ul>
									<li><i class="fa fa-check">&nbsp;</i>Lorem ipsum dolor</li>
									<li><i class="fa fa-check">&nbsp;</i>Consectetur adipiscing</li>
									<li><i class="fa fa-check">&nbsp;</i>Duis sed dapibus leo</li>
									<li><i class="fa fa-check">&nbsp;</i>Sed commodo nibh ante</li>
								</ul>
							</div>
							<div class="col-lg-6 col-sm-6 col-xs-12">
								<ul>
									<li><i class="fa fa-check">&nbsp;</i>Lorem ipsum dolor</li>
									<li><i class="fa fa-check">&nbsp;</i>Consectetur adipiscing</li>
									<li><i class="fa fa-check">&nbsp;</i>Duis sed dapibus leo</li>
									<li><i class="fa fa-check">&nbsp;</i>Sed commodo nibh ante</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Portfolio Section -->
	<div id="works-section" class="text-center">
		<div class="container">
			<!-- Container -->
			<div class="section-title wow fadeInDown" >
				<h2>
					Our <strong>Portfolio</strong>
				</h2>
				<hr>
				<div class="clearfix"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
			</div>
			<div class="categories">
				<ul class="cat list-inline">
					<li>
						<ol class="type list-inline">
							<li><a href="#" data-filter="*" class="active">All</a></li>
							<?php
								$categories = get_categories();
								foreach ($categories as $c){
									if($c->parent == 8){
									?>
										<li><a href="#" data-filter=".<?=$c->slug;?>" class=""><?=$c->name;?></a></li>
									<?php 
									}
								}
							?>
						</ol>
					</li>
				</ul>
			</div>
			<div class="row">
				<div class="portfolio-items">
					<?php
						$criteria = array("numberposts" => 100, "category" => 8, "order" => "ASC");
						$posts = get_posts($criteria);
						
						$i = 0;
						foreach($posts as $p){
							$i++;
							//Get last category of this post
							$cat = get_the_category($p->ID);
							$lastCat = "";
							foreach ($cat as $c){
								if($c->parent == 8){
									$lastCat = $c->slug;
								}
							}
							
							$thumbnail = get_the_post_thumbnail_url($p->ID);
							
							$excerpt = strlen($p->post_content) > 100 ? substr($p->post_content, 0, 100) : $p->post_content; 
					?>
					
					<div class="col-sm-6 col-md-3 col-lg-3 <?=$lastCat;?>">
						<div class="portfolio-item wow fadeInUp" data-wow-delay="200ms">
							<div class="hover-bg">
								<a href="#portfolioModal<?=$i;?>" class="portfolio-link" data-toggle="modal">
									<div class="hover-text">
										<h4><?=$p->post_title;?></h4>
										<?=$excerpt;?>
										<div class="clearfix"></div>
										<i class="fa fa-plus"></i>
									</div> <img src="<?=$thumbnail;?>" class="img-responsive" alt="Project Title">
								</a>
							</div>
						</div>
					</div>
					
					<?php 
						}
					?>
					
				</div>
			</div>
		</div>
	</div>
	
	<!-- Services Section -->
	<div id="services-section" class="text-center">
		<div class="container">
			<div class="section-title wow fadeInDown" >
				<h2>
					Our <strong>Services</strong>
				</h2>
				<hr>
				<div class="clearfix"></div>
				<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus. Eleifend pellentesque natoque faucibus magna ut etiam.</p>
			</div>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="200ms">
					<i class="fa fa-desktop"></i>
					<h4>
						<strong>Web design</strong>
					</h4>
					<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
				</div>
				<div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="400ms">
					<i class="fa fa-gears"></i>
					<h4>
						<strong>App Development</strong>
					</h4>
					<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
				</div>
				<div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="600ms">
					<i class="fa fa-bullhorn"></i>
					<h4>
						<strong>Marketing</strong>
					</h4>
					<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
				</div>
				<div class="col-md-3 col-sm-6 service wow fadeInUp" data-wow-delay="800ms">
					<i class="fa fa-rocket"></i>
					<h4>
						<strong>Branding</strong>
					</h4>
					<p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
				</div>
			</div>
		</div>
	</div>	

	
	<!-- Team Section -->
	<div id="team-section" class="text-center">
		<div class="container">
			<div class="section-title wow fadeInDown" >
				<h2>
					Meet the <strong>Team</strong>
				</h2>
				<hr>
				<div class="clearfix"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
			</div>
			<div id="row">
				<?php 
				$criteria = array("numberposts" => 100, "category" => 21, "order" => "ASC");
				$team = get_posts($criteria);
				$l = sizeof($team);
				$c = 12 / $l;
				
				foreach($team as $t){
					$thumbnail = get_the_post_thumbnail_url($t->ID);
				?>
				<div class="col-md-<?=$c;?> col-sm-6 team wow fadeInUp" data-wow-delay="200ms">
					<div class="thumbnail">
						<img src="<?=$thumbnail;?>" alt="<?=$t->post_title;?>" class="img-circle team-img">
						<div class="caption">
							<h3><?=$t->post_title;?></h3>
							<?=$t->post_content;?>
							<!-- 
							<p>CEO / Founder</p>
							<ul class="list-inline">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							-->
						</div>
					</div>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
	
	<!-- Services Section -->
	<div id="news-section" class="text-center">
		<div class="container">
			<div class="section-title wow fadeInDown" >
				<h2>
					News & <strong>Press Release</strong>
				</h2>
				<hr>
			</div>
			<div class="row">
				<?php 
				$criteria = array("numberposts" => 3, "category" => 7, "order" => "DESC");
				$news = get_posts($criteria);
				
				foreach($news as $n){
					$thumbnail = get_the_post_thumbnail_url($n->ID);
					$date = get_the_date("", $n->ID);
					$content = wp_strip_all_tags($n->post_content);
					$content = wp_trim_words($content, 75, " &hellip;");
					$uri = get_the_permalink($n->ID);	
				?>
				<div class="col-md-4 col-sm-6 service wow fadeInUp" data-wow-delay="200ms" style="text-align:left;">
					<a href="<?=$uri;?>"><img src="<?=$thumbnail;?>" style="width:100%;"></a>
					<h4>
						<strong><a href="<?=$uri;?>"><?=$n->post_title;?></a></strong>
					</h4>
					<p><?=$content;?></p>
					<p style="color: #fff;"><i class="fa fa-calendar">&nbsp;</i> Published on : <?=$date;?></p>
				</div>
				<?php
				}
				?>
				<div class="clear-fix"></div>
				<div class="col-md-12 wow fadeInUp" data-wow-delay="400ms" style="margin-top: 50px;">
					<button type="button" class="btn btn-default" onclick="top.location='/category/news'">Load More</button>
				</div>
			</div>
		</div>
	</div>	
	
	<!-- Testimonials Section -->
	<div id="testimonials-section" class="text-center">
		<div class="container">
			<div class="section-title wow fadeInDown">
				<h2>
					What our <strong>Clients</strong> say
				</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div id="testimonial" class="owl-carousel owl-theme wow fadeInUp" data-wow-delay="200ms">
						<?php 
						$criteria = array("numberposts" => 100, "category" => 9, "order" => "ASC");
						$testimonials = get_posts($criteria);
						
						$i = 0;
						foreach($testimonials as $t){
						?>
							<div class="item">
								<p>
									<?=$t->post_content;?>
								</p>
								<p><strong><?=$t->post_title;?></strong></p>
							</div>
						<?php 
						}
						?>											
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact Section -->
	<div id="contact-section" class="text-center">
		<div class="container">
			<div class="section-title wow fadeInDown">
				<h2>
					<strong>Contact</strong> us
				</h2>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
			</div>
			<div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="200ms">
				<div class="col-md-4">
					<i class="fa fa-map-marker fa-2x"></i>
					<p>
						321 Awesome Street<br> New York, NY 17022
					</p>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope-o fa-2x"></i>
					<p>info@companyname.com</p>
				</div>
				<div class="col-md-4">
					<i class="fa fa-phone fa-2x"></i>
					<p>+1 800 123 1234</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-8 col-md-offset-2 wow fadeInUp" data-wow-delay="400ms">
				<h3>Leave us a message</h3>
				<form name="sentMessage" id="contactForm" novalidate="">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="casper-name" id="casper-name" class="form-control" placeholder="Name" required="required" aria-invalid="false">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" name="casper-email" id="casper-email" class="form-control" placeholder="Email" required="required" aria-invalid="false">
								<p class="help-block text-danger"></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea name="casper-message" id="casper-message" class="form-control" rows="4" placeholder="Message" required="" aria-invalid="false"></textarea>
						<p class="help-block text-danger"></p>
					</div>
					<div id="success"></div>
					<button type="submit" class="btn btn-default">Send Message</button>
				</form>
				<div class="social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-github"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Portfolio Modals -->
	<!-- Use the modals below to showcase details about your portfolio projects! -->

	<?php
		$i = 0;
		foreach($posts as $p){
			$i++;
			
			//Get tags
			$tag = get_the_tags($p->ID);
			$tag = reset($tag);
					
			//Get last category of this post
			$cat = get_the_category($p->ID);
			$lastCat = "";
			foreach ($cat as $c){
				if($c->parent == 8){
					$lastCatName = $c->name;
				}
			}
			
			$thumbnail = get_the_post_thumbnail_url($p->ID);
			?>
			<div class="portfolio-modal modal fade" id="portfolioModal<?=$i;?>" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<div class="modal-body">
									<!-- Project Details Go Here -->
									<h2><?=$p->post_title;?></h2>
									<!-- <p class="item-intro">Lorem ipsum dolor sit amet consectetur.</p> -->
									
									<img class="img-responsive img-centered" src="<?=$thumbnail;?>" alt="">
									<p><?=$p->post_content;?></p>
									<ul class="list-inline">
										<li><strong>Client</strong>: <?=$tag->name;?></li>
										<li><strong>Category</strong>: <?=$lastCatName;?></li>
									</ul>
									<button type="button" class="btn btn-primary" data-dismiss="modal">
										<i class="fa fa-times"></i> Close Project
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	<?php 
		}
	?>	
	
<?php
get_footer();
