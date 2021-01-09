<?php
// Template Name: Produtos
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
		<?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>

		<?php
			$args = array (
				'post_type' => 'produtos',
				'order'   => 'ASC'
			);
			$the_query = new WP_Query ( $args );
		?>

		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<section class="container produto_item animar-interno">
				<a href="<?php the_permalink(); ?>">
					<div class="grid-11">
						<img src="<?php the_field('imagem_principal'); ?>" alt="Bikcraft <?php the_title(); ?>">
						<h2><?php the_title(); ?></h2>
					</div>
					<div class="grid-5 produto_icone"><img src="<?php the_field('imagem_icone'); ?>" alt="Icone <?php the_title(); ?>"></div>
				</a>
			</section>
		<?php endwhile; else: endif; ?>

		<!-- Reset o Loop -->
		<?php wp_reset_query(); wp_reset_postdata(); ?>

		<?php include(TEMPLATEPATH . "/inc/produtos-orcamento.php"); ?>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>