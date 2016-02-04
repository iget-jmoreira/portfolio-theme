<?php 
/*
Template Name: templates
*/
 ?>


<?php get_header(); ?>
<h1 class="page-title blue-900">Templates</h1>

<?php if(have_rows('templates')): ?>
	<?php $count = 0; ?>
	<?php while(have_rows('templates')): the_row(); ?>
		<div class="col-md-3">
			<div class="templates" id="<?php echo $count; ?>" style="background-image:url(<?php the_sub_field('template_cover_page'); ?>)">&nbsp;</div>
			<h5 align="center"><?php the_sub_field('template_title'); ?></h5>
			<div class="template-hidden" id="<?php echo $count; ?>">
				<img src="" id="currentImg" class="bigImg" align="center">
				<div class="images-list">
					<?php while(have_rows('template')): the_row(); ?>
							<img src="<?php the_sub_field('template_images'); ?>">
					<?php endwhile; ?>
				</div>
			</div>
		</div>
		<?php $count++; ?>
	<?php endwhile; ?>
<?php else: ?>
	Nenhum cadastrado!
<?php endif; ?>
<?php get_footer(); ?>