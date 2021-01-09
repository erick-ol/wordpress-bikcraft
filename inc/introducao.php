<style type="text/css">
	.interna_bg {
	background: url("<?php the_field('introducao_interna_imagem') ?>") no-repeat center;
	background-size: cover;
	}
</style>

<section class="introducao-interna interna_bg">
	<div class="container">
		<h1><?php the_title(); ?></h1> 
		<p><?php the_field('subtitulo'); ?></p>
	</div>
</section>