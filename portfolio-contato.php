<?php 
/*
Template Name: contato
*/
 ?>

<?php get_header(); ?>
<h1 class="page-title blue-900">Contato</h1>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-5">
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
		<div class="col-md-7">
			oi
		</div>
	</div>
</div>

<?php get_footer(); ?>