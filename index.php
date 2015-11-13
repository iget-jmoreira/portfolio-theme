<?php get_header(); ?>

<div class="container-fluid">
	<div class="card col-lg-8 col-lg-offset-2" id="about">
		<div class="card-header">
			<?php the_field('title_about'); ?>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-lg-3">
					<img src="<?php the_field('image_about'); ?>">
				</div>
				<div class="col-lg-9">
					<?php the_field('content_about'); ?>
				</div>
			</div>
		</div>
	</div>

	<div class="card col-lg-8 col-lg-offset-2" id="skills">
		<div class="card-header">
			<?php the_field('title_skills'); ?>
		</div>
		<div class="card-body text-content">
			<?php the_field('content_skills'); ?>
		</div>
	</div>

	<div class="card col-lg-8 col-lg-offset-2" id="hobbies">
		<div class="card-header">
			<?php the_field('title_hobbies'); ?>
		</div>
		<div class="card-body">
			<?php the_field('content_hobbies'); ?>
		</div>
	</div>

	<div class="card col-lg-8 col-lg-offset-2" id="contact">
		<div class="card-header">
			<?php the_field('title_contact'); ?>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-6">
					<div class="col-md-3">
						<i>aqui</i>
					</div>
					<div class="col-md-9">
						<?php the_field('contact_phone'); ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-3">
						<i>aqui</i>
					</div>
					<div class="col-md-9">
						<?php the_field('contact_email'); ?>
					</div>
				</div>
			</div>
		</div>
</div>
</div>

<?php get_footer(); ?>