<?php 
/*
Template Name: home
*/
 ?>

<?php get_header(); ?>

<div class="testandoCss">
	<?php the_field('titulo'); ?>
	<img src="<?php the_field('imagem'); ?>">
	<?php the_field('descricao'); ?>
</div>


<a name="teste">oi</a>

<?php get_footer(); ?>