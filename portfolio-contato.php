<?php 
/*
Template Name: contato
*/
 ?>

<?php get_header(); ?>
<h1 class="page-title blue-900">Contato</h1>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="content-proposta">
				<h3 class="text-center blue-700">
					Envie Uma Proposta
				</h3>
				<div class="container-fluid form-group">
					<label class="text-color">E-mail</label>
					<input type="text" class="form-control">
				</div>
				<div class="container-fluid form-group">
					<label class="text-color">Proposta</label>
					<textarea cols="30" rows="7" class="form-control"></textarea>
				</div>
				<div class="container-fluid form-group">
					<button class="btn btn-primary">Enviar</button>
					<button class="btn btn-danger">Cancelar</button>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<?php if(get_field('phone')): ?>
				<div class="container-fluid">	
					<div class="contact-icon text-white"><i class="fa fa-phone"></i></div>
					<div class="contact-title"><?php the_field('phone'); ?></div>
				</div>
			<?php endif; ?>

			<?php if(get_field('mail')): ?>
				<div class="container-fluid">	
					<div class="contact-icon text-white"><i class="fa fa-envelope-o"></i></div>
					<div class="contact-title"><?php the_field('mail'); ?></div>
				</div>
			<?php endif; ?>

			<?php if(get_field('facebook')): ?>
				<div class="container-fluid">	
					<div class="contact-icon text-white"><i class="fa fa-facebook"></i></div>
					<div class="contact-title"><?php the_field('facebook'); ?></div>
				</div>
			<?php endif; ?>

			<?php if(get_field('github')): ?>
				<div class="container-fluid">	
					<div class="contact-icon text-white"><i class="fa fa-github"></i></div>
					<div class="contact-title"><?php the_field('github'); ?></div>
				</div>
			<?php endif; ?>

			<?php if(get_field('twitter')): ?>
				<div class="container-fluid">	
					<div class="contact-icon text-white"><i class="fa fa-twitter"></i></div>
					<div class="contact-title"><?php the_field('twitter'); ?></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>