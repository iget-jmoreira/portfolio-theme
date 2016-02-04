<?php 
/*
Template Name: conhecimentos
*/
 ?>

<?php get_header(); ?>
<h1 class="page-title blue-900">Conhecimentos</h1>

<?php if(have_rows('knowledges')): ?>
	<?php while(have_rows('knowledges')):the_row(); ?>
		<div class="col-md-3">
			<div class="row">
				<div class="knowledge-image" title="<?php the_sub_field('knowledge_title'); ?>" style="background-image:url(<?php the_sub_field('knowledge_image'); ?>)">&nbsp;</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php else: ?>
	nada!
<?php endif; ?>

<?php get_footer(); ?>