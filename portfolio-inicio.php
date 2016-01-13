<?php 
/*
Template Name: inicio
*/
 ?>


<?php get_header(); ?>

<?php if(get_field('bio')): ?>
<div class="col-md-4 user text-center" align="center">	
<?php else: ?>
<div class="col-md-6 col-md-offset-3 user text-center">
<?php endif; ?>
	<div class="user-image" style="background-image: url(<?php the_field('user_image');?>)">&nbsp;</div>
	<h2><?php the_field('user_name'); ?></h2>
	<h4><?php the_field('user_profession'); ?></h4>
</div>

<?php if(get_field('bio')): ?>
	<div class="col-md-8 bio">
		<h3>Bio</h3>
		<h4><?php the_field('bio'); ?></h4>
	</div>
<?php endif; ?>

<?php get_footer(); ?>