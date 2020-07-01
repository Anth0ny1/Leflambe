<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leflambe
 */
$image_id = get_field('logo', 4);
$taille_image = 'logo';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<!-- <div class="row"> -->

		<div class="site-brandingContent">
			<div class="site-branding">
				<!-- // the_custom_logo(); -->
				<div class="logo">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

					<a href="<?php echo esc_url(home_url('/')); ?>" title="accueil"><?php echo wp_get_attachment_image($image_id, $taille_image);?></a>


				</div>

					<p>Garage de vente d'occasion </p>
					<p>dans le Manche près de Les Pieux</p>
			</div><!-- .site-branding -->
		</div>


		<nav id="site-navigation" class="main-navigation" >
			<ul id="headerNavigation">
				<li class="active"><a href="<?php echo esc_url( home_url( '/accueil' ) ); ?>" title="">Accueil</a></li>
				<li class="active"><a href="<?php echo esc_url( home_url( '/assurances' ) ); ?>" title="">Assurances</a></li>
				<li class="active"><a href="<?php echo esc_url( home_url( '/occasions' ) ); ?>" title="">Occasions</a></li>
				<li class="active"><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" title="">Contact</a></li>
				<li class="active"><a class="last-child" href="<?php echo esc_url( home_url( '/services' ) ); ?>" title="">Services</a></li>
				<!-- <li class="active"><a class="last-child "href="<?php echo esc_url( home_url( '/mentionlegal' ) ); ?>" title="">Mentions Legal</a></li> -->
			</ul>
		</nav><!-- #site-navigation -->


		<div class="column">
			<div class="horraire">
				<table>
					<h2 class="horraireOuv">Nos horraires d'ouverture</h2>
					<tr class="label">
						<td>Jour </td> <td> Matin </td> <td> Midi </td>
					</tr>
					<tr>
						<td>Lundi : </td> <td> <?php the_field('lundimatin', 4) ?> /</td><td>/ <?php the_field('lundimidi', 4) ?> </td>
					</tr>
					<tr>
						<td>Mardi : </td> <td> <?php the_field('mardimatin', 4) ?> /</td><td>/ <?php the_field('mardimidi', 4) ?> </td>
					</tr>
					<tr>
						<td>Mercredi : </td> <td> <?php the_field('mercredimatin', 4) ?> /</td><td>/ <?php the_field('mercredimidi', 4) ?> </td>
					</tr>
					<tr>
						<td>Jeudi : </td> <td> <?php the_field('jeudimatin', 4) ?> /</td><td>/ <?php the_field('jeudimidi', 4) ?> </td>
					</tr>
					<tr>
						<td>Vendredi : </td> <td> <?php the_field('vendredimatin', 4) ?> /</td><td>/ <?php the_field('vendredimidi', 4) ?> </td>
					</tr>
					<tr>
						<td>Samedi : </td> <td> <?php the_field('samedimatin', 4) ?> /</td><td>/ <?php the_field('samedimidi', 4) ?> </td>
					</tr>
				</table>
			</div>


			<div class="contactHeader">
				<h2>Contactez nous : </h2>
				<p class="firstChild">Par Tél : <?php the_field('telephone', 4) ?></p>
				<p>Par Mail : <?php the_field('email', 4) ?></p>
			</div>
		</div>

	<!-- </div> -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div id="wrapper">
