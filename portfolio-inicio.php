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
	<h3 class="blue-900"><?php the_field('user_name'); ?></h3>
	<h4 class="blue-700"><?php the_field('user_profession'); ?></h4>
</div>

<?php if(get_field('bio')): ?>
	<div class="col-md-8 bio">
		<h3 class="blue-900">Bio</h3>
		<h4 class="text-color"><?php the_field('bio'); ?></h4>
	</div>
<?php endif; ?>

<?php get_footer(); ?>