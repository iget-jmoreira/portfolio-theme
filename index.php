<?php get_header(); ?>

<div class="container-fluid">
	<div class="card col-lg-8 col-lg-offset-2" id="about">
		<div class="card-header">
			<?php the_field('title_about'); ?>
		</div>
		<div class="card-body">
			<?php the_field('content_about'); ?>
		</div>
	</div>

	<div class="card col-lg-8 col-lg-offset-2" id="skills">
		<div class="card-header">
			<?php the_field('title_skills'); ?>
		</div>
		<div class="card-body text-content">
			<div class="row">
				<?php if(have_rows('skill_content')): ?>
					<?php while(have_rows('skill_content')): the_row(); ?>
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-8 col-xs-7">
									<?php the_sub_field('skill_name'); ?>
								</div>
								<div class="col-lg-4 col-xs-5">
									<?php the_sub_field('skill_power'); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php else: ?>
					tchau
				<?php endif; ?>
			</div>
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
				<div class="col-md-4">
					<div class="row">
						<div class="col-lg-3 col-xs-12">
							<div class="icon">
								<i class="fa fa-phone"></i>
							</div>
						</div>
						<div class="col-lg-9 col-xs-12 contact-content">
							<?php the_field('contact_phone'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-lg-3 text-center">
							<div class="icon">
								<i class="fa fa-facebook f"></i>
							</div>
						</div>
						<div class="col-lg-9 contact-content">
							<a href="http://www.facebook.com<?php the_field('contact_facebook')?>" target="_blank"><?php the_field('contact_facebook'); ?></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row">
						<div class="col-lg-3 text-center">
							<div class="icon">
								<i class="fa fa-envelope-o"></i>
							</div>
						</div>
						<div class="col-lg-9 contact-content">
							<?php the_field('contact_email'); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
</div>

<?php get_footer(); ?>