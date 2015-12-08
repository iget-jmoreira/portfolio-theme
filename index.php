<?php get_header(); ?>

<div class="container-fluid card card-home" id="home">
	<div class="profile-image" style="background-image: url(<?php the_field('profile_image'); ?>)"></div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 text-center profile-name"><?php the_field('name') ?></div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 text-center profile-title"><?php the_field('description'); ?></div>
	</div>
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 text-center"><i class="fa fa-chevron-down"></i></div>
	</div>
</div>

<?php if(have_rows('contents')): ?>
	<?php while(have_rows('contents')): the_row(); ?>
		<div class="container-fluid card" id="<?php the_sub_field('id'); ?>" style="background-image:url(<?php the_sub_field('background'); ?>);">
			<div class="row">
				<div class="card-title col-lg-5 col-xs-10">
					<?php echo ucfirst(get_sub_field('id')); ?>
				</div>
			</div>

			<div class="row">
				<?php if(get_sub_field('contacts')): ?>
					<div class="card-contact col-lg-10 col-lg-offset-1 col-xs-10 col-xs-offset-1">
				<?php else: ?>
					<div class="card-body col-lg-8 col-lg-offset-2 col-xs-10 col-xs-offset-1">
				<?php endif; ?>

					<?php if(get_sub_field('contacts')): ?>
						<!-- Contatos -->
						<div class="row">
							<!-- Telefone -->
							<?php if(get_sub_field('contact_phone')): ?>
								<div class="col-lg-4 col-xs-12" id="phone">
									<div class="icon">
										<i class="fa fa-phone"></i>
									</div>
									<div class="contact">
										<?php the_sub_field('contact_phone'); ?>
									</div>
								</div>
							<?php endif; ?>
							<!-- Email -->
							<?php if(get_sub_field('contact_email')): ?>
								<div class="col-lg-4 col-xs-12" id="email">
									<div class="icon">
										<i class="fa fa-envelope-o"></i>
									</div>
									<div class="contact">
										<?php the_sub_field('contact_email'); ?>
									</div>
								</div>
							<?php endif; ?>
							<!-- Facebook, Twitter, Github -->
							<div class="col-lg-4 col-xs-12">
								<div class="row">
									<!-- Facebook -->
									<?php if(get_sub_field('contact_facebook')): ?>
										<?php if(!get_sub_field('contact_twitter') && !get_sub_field('contact_github')): ?>
											<div class="col-lg-4 col-xs-12">
										<?php elseif(!get_sub_field('contact_twitter') || !get_sub_field('contact_github')): ?>
											<div class="col-lg-4 col-xs-6">
										<?php else: ?>
											<div class="col-lg-4 col-xs-4">
										<?php endif; ?>
											<a href="<?php the_sub_field('contact_facebook'); ?>" target="_blank" title="Facebook">
												<div class="icon">
													<i class="fa fa-facebook"></i>
												</div>
											</a>
										</div>
									<?php endif; ?>
									<!-- Twitter -->
									<?php if(get_sub_field('contact_twitter')): ?>
										<?php if(!get_sub_field('contact_facebook') && !get_sub_field('contact_github')): ?>
											<div class="col-lg-4 col-xs-12">
										<?php elseif(!get_sub_field('contact_facebook') || !get_sub_field('contact_github')): ?>
											<div class="col-lg-4 col-xs-6">
										<?php else: ?>
											<div class="col-lg-4 col-xs-4">
										<?php endif; ?>
											<a href="<?php the_sub_field('contact_twitter'); ?>" target="_blank" title="Twitter">
												<div class="icon">
													<i class="fa fa-twitter"></i>
												</div>
											</a>
										</div>
									<?php endif; ?>
									<!-- Github -->
									<?php if(get_sub_field('contact_github')): ?>
										<?php if(!get_sub_field('contact_twitter') && !get_sub_field('contact_facebook')): ?>
											<div class="col-lg-4 col-xs-12">
										<?php elseif(!get_sub_field('contact_twitter') || !get_sub_field('contact_facebook')): ?>
											<div class="col-lg-4 col-xs-6">
										<?php else: ?>
											<div class="col-lg-4 col-xs-4">
										<?php endif; ?>
											<a href="<?php the_sub_field('contact_github'); ?>" target="_blank" title="Github">
												<div class="icon">
													<i class="fa fa-github"></i>
												</div>
											</a>
										</div>
									<?php endif; ?>
								</div>
							</div>
						</div>
					<?php else: ?>
						<!-- Content -->
						<div class="row">
							<?php if(have_rows('skills')): ?>
								<!-- Habilidades -->
								<?php while(have_rows('skills')): the_row(); ?>
									<div class="col-lg-6 col-xs-6">
										<div class="col-lg-7 col-xs-12">
											<strong><?php the_sub_field('skill'); ?></strong>
										</div>
										<div class="col-lg-5 col-xs-12">
											<?php $n = get_sub_field('skill_power'); ?>
											<?php for($i = 0; $i < $n; $i++): ?>
												<div class="skill"></div>
											<?php endfor; ?>
										</div>
									</div>
								<?php endwhile; ?>
							<?php else: ?>
								<!-- Texto -->
								<div class="col-lg-12 col-xs-12">
									<?php the_sub_field('content'); ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<!-- <div class="container-fluid">
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
</div> -->

<?php get_footer(); ?>