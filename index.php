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
			<table class="table-skills">
				<tbody>
					<tr>
						<td><div class="skill">PHP</div><div class="skill-value">
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
						</div></td>
						<td><div class="skill">JavaScript</div><div class="skill-value">
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
						</div></td>
					</tr>
					<tr>
						<td><div class="skill">JQuery</div><div class="skill-value">
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
						</div></td>
						<td><div class="skill">AngularJs</div><div class="skill-value">
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
						</div></td>
					</tr>
					<tr>
						<td><div class="skill">AJAX</div><div class="skill-value">
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
						</div></td>
						<td><div class="skill">Magento</div><div class="skill-value">
							<div class="sk"></div>
							<div class="sk"></div>
							<div class="sk"></div>
						</div></td>
					</tr>
					<tr>
						<td><div class="skill">PHP</div><div class="skill-value">
							<div class="sk"></div>
							<div class="sk"></div>
						</div></td>
						<td><div class="skill">JavaScript</div><div class="skill-value">
							<div class="sk"></div>
							<div class="sk"></div>
						</div></td>
					</tr>
					<tr>
						<td><div class="skill">PHP</div><div class="skill-value">
							<div class="sk"></div>
						</div></td>
						<td><div class="skill">JavaScript</div><div class="skill-value">
							<div class="sk"></div>
						</div></td>
					</tr>
				</tbody>
			</table>
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