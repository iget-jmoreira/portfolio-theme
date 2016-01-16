<?php 
/*
Template Name: habilidades
*/
 ?>

<?php get_header(); ?>
<h1 class="page-title blue-900">Habilidades</h1>

<?php if(have_rows('skills')): ?>
	<?php while(have_rows('skills')): the_row(); ?>
		<div class="col-md-6">
			<div class="col-md-5 text-right">
				<h5 class="text-color"><?php the_sub_field('skill_name'); ?></h5>
			</div>
			<div class="col-md-6 col-md-offset-1">
				<?php teste(get_sub_field('skill_power')); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php else: ?>
	Nenhuma Habilidade cadastrada.
<?php endif ?>

<?php get_footer(); ?>