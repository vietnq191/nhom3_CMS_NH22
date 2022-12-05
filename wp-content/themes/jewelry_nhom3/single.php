<?php get_header(); ?>
<div class='container-fluid header-slider'>
    <div class='row-fluid'>
<?php 
    if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part('content', get_post_format()); ?>
			<div class="tdb-block-inner td-fix-index">
			    <h1 class="tdb-title-text has-text-align-center has-white-background-color has-text-color has-background has-x-large-font-size"><?php echo get_the_title(); ?></h1><div></div>
			    <div class="tdb-title-line">
			</div></div>
			<div></div>
				<?php the_content() ?>
			<?php if( function_exists( 'aioseo_breadcrumbs' ) ) aioseo_breadcrumbs(); ?>
		<?php endwhile ?>
	<?php else : ?>
		<?php get_template_part('content', 'none'); ?>
	<?php endif; ?>
</div>
</div>
<style> 
.tdb-title-text {
    color:#0d3e6f;font-style:normal;font-weight:800;text-transform:none;
}
</style>

<?php dynamic_sidebar('sidebar-widget'); ?>
<?php get_footer(); ?>