<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?>

	

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="fcred">
		Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?>.
		<?php fflink(); ?> | <a href="http://topwpthemes.com/<?php echo wp_get_theme(); ?>/" ><?php echo wp_get_theme(); ?> Theme</a> 	
	  		</div>		
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>
<?php if(is_single()) { ?>
<script type="text/javascript">
		jQuery.backstretch("<?php get_image_url(); ?>  ");
</script>
<?php } elseif(!is_front_page()) { ?>
<script type="text/javascript">
	jQuery.backstretch("<?php echo of_get_option('w2f_defaultbg'); ?>  ");
</script>
<?php } ?>
</body>
</html>