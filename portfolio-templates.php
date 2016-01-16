<?php 
/*
Template Name: templates
*/
 ?>


<?php get_header(); ?>
<h1 class="page-title blue-900">Templates</h1>

<?php if(have_rows('templates')): ?>
	<?php while(have_rows('templates')): the_row(); ?>
		<div class="col-md-3">
			<div class="templates" style="background-image:url(<?php the_sub_field('template_cover_page'); ?>)">&nbsp;</div>
		</div>
	<?php endwhile; ?>
<?php else: ?>
	Nenhum cadastrado!
<?php endif; ?>
<?php get_footer(); ?>