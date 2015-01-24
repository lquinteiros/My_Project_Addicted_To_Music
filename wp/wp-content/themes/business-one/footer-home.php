<?php global $business; ?>

<!-- FOOTER -->
		<footer class="bottom-footer clearfix" role="contentinfo">
			
			
			<div class="container">
				
				<div class="col-sm-5">

					<?php if(isset($business['credit'])){ ?>
					
					<?php if($business['credit']==true){ ?>

					<!-- end site-generator -->				

					<?php } } ?>

					<?php if(isset($business['opt-editor'])){ ?>

					<div class="div-copyright">

						<?php echo $business['opt-editor']; ?>

					</div> <!-- end div-copyright -->

					<?php } ?>				

					

				</div> <!-- end col-sm-5 -->


				<div class="col-sm-2">
					
					<figure>

						<?php business_one_logo(); ?>					

					</figure> <!-- end logo -->	

				</div> <!-- end col-sm-2 -->					


				<?php wp_nav_menu(array(
					'theme_location' => 'footer-menu',
					'menu_class' => 'nav',
					'container' => 'nav',
					'container_class' => 'col-sm-5',
					'depth' => 1,
					'fallback_cb' => 'business_one_footerfb'
				)); ?>	


			</div> <!-- end container -->
			

		</footer>
		<!-- END FOOTER -->