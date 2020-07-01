<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leflambe
 */
 $image_id = get_field('logo', 4);
 $taille_image = 'logo';
?>
</div>


	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<!-- <div class="logo"> -->
				<!-- <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->

				<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo wp_get_attachment_image($image_id, $taille_image) ?></a></p>
			<!-- </div> -->
			<p>Garage de vente d'occasion </p>
			<p>dans la Manche près de les Pieux</p>


		</div><!-- .site-info -->
				<div class="nav">
					<ul id="footerNavigation">
						<li class="active"><a href="<?php echo esc_url( home_url( '/accueil' ) ); ?>" title="">Accueil</a></li>
						<li class="active"><a href="<?php echo esc_url( home_url( '/assurances' ) ); ?>" title="">Assurances</a></li>
						<li class="active"><a href="<?php echo esc_url( home_url( '/occasions' ) ); ?>" title="">Occasions</a></li>
						<li class="active"><a href="<?php echo esc_url( home_url( '/services' ) ); ?>" title="">Services</a></li>
						<li class="active"><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" title="">Contact</a></li>
						<li class="active"><a class="last-child" href="<?php echo esc_url( home_url( '/mentionslegal' ) ); ?>" title="">Mentions Legal</a></li>
					</ul>

					<div class="contactFooter">
						<h2>Contactez nous :</h2>
						<p>Par Mail : <?php the_field('email', 4) ?></p>
						<p>Par Téléphone : <?php the_field('telephone', 4) ?></p>
						<p>Par Fax : <?php the_field('fax', 4) ?></p>
						<p>Directement au garage : <?php the_field('adresse', 4) ?></p>
					</div>
				</div>

				<div class="maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2589.505735999575!2d-1.7685234839166406!3d49.531606279359174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480c92becd2c26d1%3A0x3d7027c6988e8004!2s28+Route+de+Couville%2C+50340+Beno%C3%AEtville!5e0!3m2!1sfr!2sfr!4v1517449692885" width="90%" height="90%" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>

			<div class="gallery">
						<?php  $args = array(
							'post_type' => 'occasion',
							'post-status' => 'publish',
							'posts_per_page' => 6,
							'orderby' => 'date',
							'order' => 'DESC',
						);
						$the_query = new WP_Query( $args );

						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) {
								$the_query->the_post(); ?>
									<a href="<?php echo get_the_permalink() ?>"><?php the_post_thumbnail('galleryFooter') ?></a>
					<?php }
							/* Restore original Post Data */
							wp_reset_postdata();
							} else {
								// no posts found
							}

						?>
						<!-- <img src="<?php echo esc_url(home_url('/wp-content/themes/leflambe/assets/img/20.png'))?>" alt="">
						<img src="<?php echo esc_url(home_url('/wp-content/themes/leflambe/assets/img/20.png'))?>" alt="">
						<img src="<?php echo esc_url(home_url('/wp-content/themes/leflambe/assets/img/20.png'))?>" alt=""> -->

			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
