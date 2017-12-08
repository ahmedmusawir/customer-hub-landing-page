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

				<h1 class="text-center"><?php the_field('block_6_heading_text'); ?></h1>
				<h4 class="text-center"><?php the_field('block_6_sub_heading_text'); ?></h4>		
				
			</header><!-- /header -->

			<div class="flex-container">
				<article class="pricebox text-center">

					<div class="content sidebox">

						<h3><?php the_field('block6_left_price_title'); ?></h3>
						<p>
							<?php the_field('block6_left_price_text'); ?>
						</p>
						<h5><?php the_field('block6_left_price_subtitle'); ?></h5>

						<h1><?php the_field('block6_left_price'); ?></h1>
						<h5 class="price-text"><?php the_field('block_left_price_subtext'); ?></h5>

						<a class="btn btn-success btn-lg" href="<?php the_field('block_left_price_button_url'); ?>"><?php the_field('block_left_price_button_text'); ?></a>	

					</div>
					
				</article>
				<article class="pricebox text-center">

					<div class="content middlebox">
						
						<h3><?php the_field('block6_middle_price_title'); ?></h3>
						<p>
							<?php the_field('block6_middle_price_text'); ?>
						</p>
						<h5><?php the_field('block6_middle_price_subtitle'); ?></h5>

						<h1><?php the_field('block6_middle_price'); ?></h1>
						<h5 class="price-text"><?php the_field('block_middle_price_subtext'); ?></h5>

						<a class="btn btn-success btn-lg" href="<?php the_field('block_middle_price_button_url'); ?>"><?php the_field('block_middle_price_button_text'); ?></a>	

					</div>	
					
				</article>
				<article class="pricebox text-center">

					<div class="content sidebox">
						
						<h3><?php the_field('block6_right_price_title'); ?></h3>
						<p>
							<?php the_field('block6_right_price_text'); ?>
						</p>
						<h5><?php the_field('block6_right_price_subtitle'); ?></h5>

						<h1><?php the_field('block6_right_price'); ?></h1>
						<h5 class="price-text"><?php the_field('block_right_price_subtext'); ?></h5>

						<a class="btn btn-success btn-lg" href="<?php the_field('block_right_price_button_url'); ?>"><?php the_field('block_right_price_button_text'); ?></a>	

					</div>	
					
				</article>

			</div>

			<footer class="block6-footer">
				
				<div class="container">

					<img class="center-block" src="<?php the_field('block6_visa_image'); ?>"></img>
					<p class="text-center">
						<?php the_field('block6_visa_disclaimer'); ?>					
					</p>
						
				</div>
				
			</footer>

		</div>
		
	</section> <!-- END OF BLOCK6 -->

	<section id="BLOCK7">

		<div class="container">
			
			<figure class="col-md-12 col-lg-12">
			
				<h1 class="text-center"> <?php the_field('block7_heading'); ?></h1>
				<div class="text-center">
					<a class="btn btn-primary btn-lg" href="<?php the_field('block7_button_url'); ?>"><?php the_field('block7_button_text'); ?></a>
				</div>
			
			</figure>

		</div>

	</section> <!-- END OF BLOCK3 -->

	<!--================================================================
	=            FOLLOWING IS THE ALL PLANS INCLUDE SECTION            =
	=================================================================-->

	<section id="BLOCK8">

		<div class="container">

			<h1 class="text-center"><?php the_field('block_8_heading_text'); ?></h1>

			<div class="row">
				<figure class="col-sm-12 col-md-6 col-lg-6 clearfix">

					<article class="left-content">

						<img class="img-responsive pull-left" src="<?php the_field('block_8_left_top_image'); ?>" alt="">
						
						<h3 class=""><?php the_field('block_8_left_top_subheading'); ?></h3>

						<p class="">
							<?php the_field('block_8_left_top_text'); ?>	
						</p>

					</article>					

				</figure>
				<figure class="col-sm-12 col-md-6 col-lg-6 clearfix">

					<article class="right-content">

						<img class="img-responsive pull-left" src="<?php the_field('block_8_right_top_image'); ?>" alt="">

						<h3 class=""><?php the_field('block_8_right_top_subheading'); ?></h3>

						<p class="">
							<?php the_field('block_8_right_top_text'); ?>	
						</p>
						
					</article>										

				</figure>
			</div>
			<div class="row clearfix">			
				<figure class="col-sm-12 col-md-6 col-lg-6 clearfix">

					<article class="right-content">

						<img class="img-responsive pull-left" src="<?php the_field('block_8_left_bottom_image'); ?>" alt="">

						<h3 class=""><?php the_field('block_8_left_bottom_subheading'); ?></h3>

						<p class="">
							<?php the_field('block_8_left_bottom_text'); ?>	
						</p>
						
					</article>										

				</figure>
				<figure class="col-sm-12 col-md-6 col-lg-6 clearfix">

					<article class="right-content">

						<img class="img-responsive pull-left" src="<?php the_field('block_8_right_bottom_image'); ?>" alt="">

						<h3 class=""><?php the_field('block_8_right_bottom_subheading'); ?></h3>

						<p class="">
							<?php the_field('block_8_right_bottom_text'); ?>	
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

		<h1><?php the_field('block9_heading'); ?></h1>

		<div class="container">
			
			<table class="table table-bordered text-center">
			    <thead>
			        <tr>
			            <th class="top-left"></th>
			            <th  class="text-center">
							<?php the_field('block9_table_header_left'); ?>		            	
			            </th>
			            <th  class="special text-center">
							<?php the_field('block9_table_header_middle'); ?>
			            </th>
			            <th  class="text-center">
							<?php the_field('block9_table_header_right'); ?>
			            </th>
			        </tr>
			    </thead>
			    <tbody>


					<?php if( have_rows('block9_table_repeater') ): ?>
					 
					 	<?php $i = 0; ?>

					    <?php while( have_rows('block9_table_repeater') ): the_row(); ?>

					    <?php $i++; ?>	

			        	<tr>
					    	        
				            <th scope="row">
				            <a href="#"  data-toggle="modal" data-target="#myModal-<?php echo $i; ?>" style="padding-top: 1rem !important;"><?php the_sub_field('row_title'); ?></a>
				            </th>

							<!-- EXAMPLE MODAL -->
							  <div class="modal" id="myModal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
							    <div class="modal-dialog" role="document">
							      <div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							          <h4 class="modal-title modal-text" id="exampleModalLabel"><?php the_sub_field('row_title'); ?></h4>
							        </div>
							        <div class="modal-body">
							          
										<h5 class="modal-text">
											<?php 

											 $description = get_sub_field('row_description'); 
											 echo $description;
											 $description = "";

											?>
										</h5>

							        </div>
							        <div class="modal-footer">
							          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
							        </div>
							      </div>
							    </div>
							  </div>  		
							  	            
				            <td><?php the_sub_field('row_data1'); ?></td>
				            <td><?php the_sub_field('row_data2'); ?></td>
				            <td><?php the_sub_field('row_data3'); ?></td>

			        	</tr>


					    <?php endwhile; ?>
					 
					 
					<?php endif; ?>			 			            
			        
			    </tbody>
			</table>

		</div>

	</section>


	<!--================================================================
	=            FOLLOWING IS WE LOVE HELPING SECTION 		           =
	=================================================================-->

	<section id="BLOCK10">

		<div class="container">

			<h1 class="text-center"><?php the_field('block_10_heading_text'); ?></h1>


				<figure class="col-sm-12 col-md-3 col-lg-3 clearfix">

					<article class="right-content">

						<img class="img-responsive center-block" src="<?php the_field('block_10_first_image'); ?>" alt="">
						
						<h3 class="text-center"><?php the_field('block_10_first_subheading'); ?></h3>

						<p class="text-center">
							<?php the_field('block_10_first_text'); ?>
						</p>

					</article>					

				</figure>
				<figure class="col-sm-12 col-md-3 col-lg-3 clearfix">

					<article class="right-content">

						<img class="img-responsive center-block" src="<?php the_field('block_10_second_image'); ?>" alt="">

						<h3 class="text-center"><?php the_field('block_10_second_subheading'); ?></h3>

						<p class="text-center">
							<?php the_field('block_10_second_text'); ?>
						</p>
						
					</article>										

				</figure>
				<figure class="col-sm-12 col-md-3 col-lg-3 clearfix">

					<article class="right-content">

						<img class="img-responsive center-block" src="<?php the_field('block_10_third_image'); ?>" alt="">

						<h3 class="text-center"><?php the_field('block_10_third_subheading'); ?></h3>

						<p class="text-center">
							<?php the_field('block_10_third_text'); ?>
						</p>
						
					</article>										

				</figure>
				<figure class="col-sm-12 col-md-3 col-lg-3 clearfix">

					<article class="right-content">

						<img class="img-responsive center-block" src="<?php the_field('block_10_fourth_image'); ?>" alt="">

						<h3 class="text-center"><?php the_field('block_10_fourth_subheading'); ?></h3>

						<p class="text-center">
							<?php the_field('block_10_fourth_text'); ?>
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
			
			<?php the_field('block_11_faq_content'); ?>

		</article> <!-- END OF BLOCK8 -->

	</section>


	<footer id="SITE-FOOTER">
		<nav class="text-center">
			<?php the_field('page_footer_navigation'); ?>
		</nav>
		<div class="copyright text-center">
			<?php the_field('page_footer_copyright'); ?>
		</div>
	</footer>


	<!--====  End of JavaScripts  ====-->
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>































