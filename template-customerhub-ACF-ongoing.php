<?php
/**
 * The template for displaying Customer Hub Landing Page.
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * Template Name: Customer Hub Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Moose_Framework
 */
// get_header();

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/template-customerhub.css" />
</head>
<style type="text/css" media="screen">
</style>
<body>

	<section id="LOGO">

		<!-- <img class="img-responsive center-block" src="https://i.ontraport.com/22246.620101c5fa4b388049c5b9500efef6df.PNG" alt=""> -->
		<img class="img-responsive center-block" src="<?php the_field('cr_logo_image'); ?>" alt="">
		
	</section>

	<section id="BLOCK1">

		<div class="container">
			
			<h1 class=" text-center"><?php the_field('cr_header_heading_text'); ?></h1>
			<h5 class=" text-center"><?php the_field('cr_header_subheading_text'); ?></h5>

		</div>

	</section>
	<div class="arrow-block text-center center-block">

		<div class="arrow-down"></div>
		
	</div>	<!-- END OF BLOCK1 -->

	<section id="BLOCK2">

		<div class="container">
			
			<article class="content">

				<figure class="col-md-6 col-lg-6">

					<article class="left-content">

						<?php the_field('block2_left_pane_content'); ?>
						
					</article>
					
				</figure>
				<figure class="col-md-6 col-lg-6">

					<?php the_field('block2_right_pane_content'); ?>
				
				</figure>
			</article>
			
		</div>

	</section> <!-- END OF BLOCK2 -->

	<section id="BLOCK3">

		<div class="container">
			
			<img class="img-responsive center-block" src="<?php the_field('block3_top_icon'); ?>" alt="">
			
			<figure class="col-md-6 col-lg-6">

				<?php the_field('block3_left_pane_content'); ?>

			</figure>
			<figure class="col-md-6 col-lg-6">
				
				<?php the_field('block3_right_pane_content'); ?>
			
			</figure>

		</div>

	</section> <!-- END OF BLOCK3 -->

	<!--===============================================
	=            START OF BLOCK 4A FOR ACF            =
	================================================-->
	
	<section id="BLOCK4">

		<div class="container">
			
			<article class="content">

    		<?php if ( get_field('block4_left_pane_content_1') && get_field('block4_right_pane_content_1') ) : ?>
			
				<div class="row">
					<figure class="col-md-6 col-lg-6">

						<article class="left-content">
				

							<?php the_field('block4_left_pane_content_1'); ?>
							

						</article>					

					</figure>
					<figure class="col-md-6 col-lg-6">

						<article class="right-content">
				

							<?php the_field('block4_right_pane_content_1'); ?>

							
						</article>										

					</figure>
				</div>

    		<?php endif; ?>

    		<?php if ( get_field('block4_left_pane_content_2') && get_field('block4_right_pane_content_2') ) : ?>


				<div class="row">
					<figure class="col-md-6 col-lg-6">

						<article class="left-content">
							
							<?php the_field('block4_left_pane_content_2'); ?>
			
						</article>					

					</figure>
					<figure class="col-md-6 col-lg-6">

						<article class="right-content">
							
							<?php the_field('block4_right_pane_content_2'); ?>
							
						</article>										

					</figure>
				</div>

    		<?php endif; ?>

    		<?php if ( get_field('block4_left_pane_content_3') && get_field('block4_right_pane_content_3') ) : ?>

				<div class="row">
					<figure class="col-md-6 col-lg-6">

						<article class="left-content">
							
							<?php the_field('block4_left_pane_content_3'); ?>

						</article>					

					</figure>
					<figure class="col-md-6 col-lg-6">

						<article class="right-content">

							<?php the_field('block4_right_pane_content_3'); ?>
							
						</article>										

					</figure>
				</div>

    		<?php endif; ?>

    		<?php if ( get_field('block4_left_pane_content_4') && get_field('block4_right_pane_content_4') ) : ?>

				<div class="row">
					<figure class="col-md-6 col-lg-6">

						<article class="left-content">

							<?php the_field('block4_left_pane_content_4'); ?>

						</article>					

					</figure>
					<figure class="col-md-6 col-lg-6">

						<article class="right-content">

							<?php the_field('block4_right_pane_content_4'); ?>
							
						</article>										

					</figure>
				</div>

    		<?php endif; ?>

    		<!--===============================================
    		=            START OF BLOCK 4B FOR ACF            =
    		================================================-->
    		

				<div class="row">

					<h1 class=" text-center"><?php the_field('block_4b_heading_text'); ?></h1>

					<figure class="col-md-4 col-lg-4">

						<article class="left-content">

							<img class="img-responsive center-block" src="<?php the_field('block_4b_left_image') ?>" alt="">
							
							<h3 class=" text-center"><?php the_field('block_4b_left_heading'); ?></h3>

							<p class=" text-center">
								<?php the_field('block_4b_left_text'); ?>								
							</p>

						</article>					

					</figure>
					<figure class="col-md-4 col-lg-4">

						<article class="right-content">

							<img class="img-responsive center-block" src="<?php the_field('block_4b_middle_image') ?>" alt="">

							<h3 class=" text-center"><?php the_field('block_4b_middle_heading'); ?></h3>

							<p class=" text-center">
								<?php the_field('block_4b_middle_text'); ?>								
							</p>
							
						</article>										

					</figure>
					<figure class="col-md-4 col-lg-4">

						<article class="right-content">

							<img class="img-responsive center-block" src="<?php the_field('block_4b_right_image') ?>" alt="">
							<h3 class=" text-center"><?php the_field('block_4b_right_heading'); ?></h3>

							<p class=" text-center">
								<?php the_field('block_4b_right_text'); ?>								
							</p>
							
						</article>										

					</figure>
				</div>
			</article>
			
		</div>

	</section> <!-- END OF BLOCK4 -->


	<section id="BLOCK5">

		<div class="container">

			<img class="img-responsive center-block" src="<?php the_field('block5_top_icon'); ?>" alt="">
			
			<figure class="col-md-6 col-lg-6">

				<?php the_field('block5_left_pane_content'); ?>

			</figure>
			<figure class="col-md-6 col-lg-6">
				
				<?php the_field('block5_right_pane_content'); ?>
			
			</figure>		
			
		</div>

	</section> <!-- END OF BLOCK5 -->	


	<!--=====================================================
	=            FOLLOWING IS THE PRICING TABLES            =
	======================================================-->
	

	<section id="BLOCK6">

		<div class="container">
			
			<header>

				<h1 class="text-center">Get Instant Access to the CustomerHub Platform</h1>
				<h4 class="text-center">Choose Your Plan and Get Started</h4>		
				
			</header><!-- /header -->

			<div class="flex-container">
				<article class="pricebox text-center">

					<div class="content sidebox">

						<h3>Pricebox One</h3>
						<p>
							The entire Unbounce platform, plus a Launch Specialist and Success Manager to help maximize your ROI. Enterprise plans are custom-built to suit your needs.
						</p>
						<h5>STARTING FROM</h5>

						<h1>$150/mo</h1>
						<h5 class="price-text">With Annual Billing (20% OFF)</h5>

						<a class="btn btn-success btn-lg" href="#">GET IT NOW</a>	

					</div>
					
				</article>
				<article class="pricebox text-center">

					<div class="content middlebox">
						
						<h3>Pricebox Two</h3>
						<p>
							Double the landing pages and Convertables of the Essential plan, plus client sub-accounts, premium integrations, and better conversion tools.
						</p>
						<h5>STARTING FROM</h5>

						<h1>$150/mo</h1>
						<h5 class="price-text">With Annual Billing (20% OFF)</h5>

						<a class="btn btn-success btn-lg" href="#">GET IT NOW</a>

					</div>	
					
				</article>
				<article class="pricebox text-center">

					<div class="content sidebox">
						
						<h3>Pricebox Three</h3>
						<p>
							New to landing pages and Convertables? The Essential plan includes everything you need to get started.
						</p>
						<h5>STARTING FROM</h5>

						<h1>$150/mo</h1>
						<h5 class="price-text">With Annual Billing (20% OFF)</h5>

						<a class="btn btn-success btn-lg" href="#">GET IT NOW</a>

					</div>	
					
				</article>
			</div>

			<footer class="block6-footer">
				
				<div class="container">

					<img class="center-block" src="https://unbounce.com/photos/logo_payment.png"></img>
					<p class="text-center">
						All pricing in USD, and you won't be billed until after your 30-day trial expires. You can change plans or cancel your account at any time. 
						Checking out the Enterprise plans? Ask us about Launch Sessions and custom template re-creation.						
					</p>
						
				</div>
				
			</footer>

		</div>
		
	</section> <!-- END OF BLOCK6 -->

	<section id="BLOCK7">

		<div class="container">
			
			<figure class="col-md-12 col-lg-12">
			
				<h1 class="text-center">Have More Than 10 Locations? Please Contact Us for Information on Multi-Location Service</h1>
				<div class="text-center">
					<a class="btn btn-primary btn-lg" href="#">LET'S TALK</a>
				</div>
			
			</figure>

		</div>

	</section> <!-- END OF BLOCK3 -->

	<!--================================================================
	=            FOLLOWING IS THE ALL PLANS INCLUDE SECTION            =
	=================================================================-->

	<section id="BLOCK8">

		<div class="container">

			<h1 class="text-center">All Plans Include</h1>

			<div class="row">
				<figure class="col-sm-12 col-md-6 col-lg-6 clearfix">

					<article class="left-content">

						<img class="img-responsive pull-left" src="https://unbounce-wpengine.netdna-ssl.com/photos/drag-drop-icon-1.svg" alt="">
						
						<h3 class="">Drag and Drop Builder</h3>

						<p class="">
							Easily build, edit and customize — no coding required. 
							<br>
							<a href="#">Learn More ></a>
						</p>

					</article>					

				</figure>
				<figure class="col-sm-12 col-md-6 col-lg-6 clearfix">

					<article class="right-content">

						<img class="img-responsive pull-left" src="https://unbounce-wpengine.netdna-ssl.com/photos/drag-drop-icon-1.svg" alt="">

						<h3 class="">Unbounce Convertables</h3>

						<p class="">
							Use tools like overlays and sticky bars to drive more conversions on every page.
							<br>
							<a href="#">Learn More ></a>
						</p>
						
					</article>										

				</figure>
			</div>
			<div class="row clearfix">			
				<figure class="col-sm-12 col-md-6 col-lg-6 clearfix">

					<article class="right-content">

						<img class="img-responsive pull-left" src="https://unbounce-wpengine.netdna-ssl.com/photos/drag-drop-icon-1.svg" alt="">

						<h3 class="">High-Converting Templates</h3>

						<p class="">
							Choose from 125+ fully customizable templates, or start from scratch. 
							<br>
							<a href="#">Learn More ></a>
						</p>
						
					</article>										

				</figure>
				<figure class="col-sm-12 col-md-6 col-lg-6 clearfix">

					<article class="right-content">

						<img class="img-responsive pull-left" src="https://unbounce-wpengine.netdna-ssl.com/photos/drag-drop-icon-1.svg" alt="">

						<h3 class="">Essential Integrations</h3>

						<p class="">
							Integrate with tools like WordPress, MailChimp and Google Analytics. 
							<br>
							<a href="#">Learn More ></a>
						</p>
						
					</article>										

				</figure>
			</div>
			<hr>
		</div> <!-- END CONTAINER -->
	</section>

	<!--=====================================================
	=            FOLLOWING IS THE FRETURES TABLE            =
	======================================================-->


	<section id="BLOCK9" class="hidden-xs">

		<h1>Compare Plan Features</h1>

		<div class="container">
			
			<table class="table table-bordered text-center">
			    <thead>
			        <tr>
			            <th class="top-left"></th>
			            <th  class="text-center">
							<h3>Enterprise</h3>
							<h4>$399+/mo</h4>
							<p>With Annual Billing (20% OFF)</p>		            	
			            </th>
			            <th  class="special text-center">
							<h3>Premium</h3>
							<h4>$159/mo</h4>
							<p>With Annual Billing (20% OFF)</p>
			            </th>
			            <th  class="text-center">
							<h3>Essential</h3>
							<h4>$79/mo</h4>
							<p>With Annual Billing (20% OFF)</p>
			            </th>
			        </tr>
			    </thead>
			    <tbody>
			        <tr>
			            <th scope="row">
			            <a href="#"  data-toggle="modal" data-target="#exampleModal">Published Landing Pages</a>
			            </th>

						<!-- EXAMPLE MODAL -->
						  <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
						    <div class="modal-dialog" role="document">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						          <h4 class="modal-title modal-text" id="exampleModalLabel">Published Landing Pages</h4>
						        </div>
						        <div class="modal-body">
						          
									<h5 class="modal-text">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
									</h5>

						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						        </div>
						      </div>
						    </div>
						  </div>  		
						  	            
			            <td>375+</td>
			            <td>150</td>
			            <td>75</td>
			        </tr>
			        <tr>
			            <th scope="row">Published Convertables</th>
			            <td>40+</td>
			            <td>16</td>
			            <td>8</td>
			        </tr>
			        <tr>
			            <th scope="row">Client Sub-Accounts</th>
			            <td>15+</td>
			            <td>5</td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			        </tr>
			        <tr>
			            <th scope="row">Client Sub-Accounts</th>
			            <td>15+</td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			        </tr>
			        <tr>
			            <th scope="row">Client Sub-Accounts</th>
			            <td>15+</td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			        </tr>
			        <tr>
			            <th scope="row">Client Sub-Accounts</th>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			        </tr>
			        <tr>
			            <th scope="row">Client Sub-Accounts</th>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			        </tr>
			        <tr>
			            <th scope="row">Client Sub-Accounts</th>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			        </tr>
			        <tr>
			            <th scope="row">Client Sub-Accounts</th>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			        </tr>
			        <tr>
			            <th scope="row">Client Sub-Accounts</th>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			            <td><i class="fa fa-check" aria-hidden="true"></i></td>
			        </tr>
			    </tbody>
			</table>

		</div>

	</section>


	<!--================================================================
	=            FOLLOWING IS WE LOVE HELPING SECTION 		           =
	=================================================================-->

	<section id="BLOCK10">

		<div class="container">

			<h1 class="text-center">We Love Helping Marketers Succeed</h1>

				<figure class="col-sm-12 col-md-3 col-lg-3 clearfix">

					<article class="right-content">

						<img class="img-responsive center-block" src="https://unbounce-wpengine.netdna-ssl.com/photos/any-channel-icon.svg" alt="">
						
						<h3 class="text-center">Drag and Drop Builder</h3>

						<p class="text-center">
							Unlimited phone, email and live chat support on all plans.
						</p>

					</article>					

				</figure>
				<figure class="col-sm-12 col-md-3 col-lg-3 clearfix">

					<article class="right-content">

						<img class="img-responsive center-block" src="https://unbounce-wpengine.netdna-ssl.com/photos/any-channel-icon.svg" alt="">

						<h3 class="text-center">Unbounce Convertables</h3>

						<p class="text-center">
							Unlimited phone, email and live chat support on all plans.
						</p>
						
					</article>										

				</figure>
				<figure class="col-sm-12 col-md-3 col-lg-3 clearfix">

					<article class="right-content">

						<img class="img-responsive center-block" src="https://unbounce-wpengine.netdna-ssl.com/photos/any-channel-icon.svg" alt="">

						<h3 class="text-center">99% Satisfaction</h3>

						<p class="text-center">
							Unlimited phone, email and live chat support on all plans.
						</p>
						
					</article>										

				</figure>
				<figure class="col-sm-12 col-md-3 col-lg-3 clearfix">

					<article class="right-content">

						<img class="img-responsive center-block" src="https://unbounce-wpengine.netdna-ssl.com/photos/any-channel-icon.svg" alt="">

						<h3 class="text-center">Essential Integrations</h3>

						<p class="text-center">
							Unlimited phone, email and live chat support on all plans.
						</p>
						
					</article>										

				</figure>
		</div> <!-- END CONTAINER -->
	</section>
	<!--==================================================
	=            FOLLOWING IS THE FAQ SECTION            =
	===================================================-->
	

	<section id="BLOCK">

		<article class="container">
			
			<h1>F.A.Q.</h1>

			<h2>Do you have an overview that I can download?</h2> 
			<p>You can <a href="http://omen.ontraport.com/d/CustomerHub%2BReviews-Overview.pdf" target="_blank" title="">click here</a> to see an overview of the software</p>
		
			<h2>Can I customize the landing page?</h2>
			<p>Yes! You can add your logo and change the words to suite how you speak with your customers.</p>

			<h2>Can I see an example report?</h2>
			<p>Here is an example of a report that the software can generate: <a href="http://omen.ontraport.com/d/CustomerHub%2BReviews%2BSample%2BReport.pdf" target="_blank" title="">Click here</a></p>

			<h2>How do I know when bad reviews are generated?</h2>
			<p>You will get an email if a bad review is mitted through the widget or detected through review scanning so you can respond immediately. You can also see a detailed view of all reviews on the reports.</p>

		</article> <!-- END OF BLOCK8 -->

	</section>


	<footer id="SITE-FOOTER">
		<nav class="text-center">
			<ul>
				<li><a href="" title="">Support</a></li>
				<li><a href="" title="">Contact</a></li>
			</ul>
		</nav>
		<div class="copyright text-center">
			<a href="#">REFUND POLICY | </a>© 2017 <a href="#">CUSTOMERHUB.REVIEWS </a>a service of <a href="#">Omen Interactive | </a><a href="#">PRIVACY POLICY</a>
		</div>
	</footer>


	<!--====  End of JavaScripts  ====-->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>































