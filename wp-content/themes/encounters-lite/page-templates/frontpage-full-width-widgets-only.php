<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 *
   Template Name: Front Page Full Width Widgets Only
 *
 * Description: A page template that provides a full width layout
 * without the left or right sidebar columns and no content.
 *
 * @file           frontpage-full-width-widgets-only.php
 * @package        Encounters 
 * @author         Styled Themes 
 * @copyright      2013 Styledthemes.com
 * @license        license.txt
 * @version        Release 1.7.7
 */

 get_header(); ?>

<div id="content-wrapper" style="background-color:<?php echo get_theme_mod( 'contentbg', '#ffffff' ); ?>; color:<?php echo get_theme_mod( 'contenttext', '#787b7f' ); ?>; border-color:<?php echo get_theme_mod( 'contentborder', '#bf7b7b' ); ?>; font-size: <?php echo get_theme_mod( 'content_fontsize', '0.813em' ); ?>;">
	<div class="container-fluid">
	
			<?php get_template_part( 'sidebar', 'cta' ); ?>

			<?php get_template_part( 'sidebar', 'top' ); ?>	
		
			<?php get_template_part( 'sidebar', 'content-top' ); ?>
		
			<?php get_template_part( 'sidebar', 'inset-top' ); ?>

			<?php get_template_part( 'sidebar', 'inset-bottom' ); ?>	
		
			<?php get_template_part( 'sidebar', 'content-bottom' ); ?>
		
	</div>
</div>
<?php get_footer(); ?>