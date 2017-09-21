<?php 
/*
template name: home
*/
get_header(); 
$id_Home =2;
$tituloUno = get_field('titulo',$id_Home);
$subtitulo = get_field('subtitulo',$id_Home);
$tituloSocial = get_field('titulo_redes_sociales',$id_Home);
?>
<section class="slider">
	<?php global $post; 
		$args = array( "posts_per_page" => 6, "offset"=> 0, "category" => 2 ); 
		$myposts = get_posts( $args );?>
		<ul class="bxslider">
	<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
		<li><?php if (has_post_thumbnail()) {
              	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>                   
              <img src="<?php echo $url; ?>" alt="<?php the_title(); ?> "/><?php }?>
			<div class="contSlider">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 text-center wow bounceInLeft">
							<h2><?php the_title(); ?></h2>
							<p class="hidden-xs"><?php echo get_the_excerpt( get_the_ID() ) ?></p>
							<a href="<?php the_permalink($post->ID); ?>" class="btn-yellow hvr-grow-shadow">IR A SECCIÓN</a>
						</div>
					</div>
				</div>
	  		</div>
		</li>
		<?php endforeach; ?>
	</ul>
</section>
<div class="container">
	<section class="about">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<img src="<?php bloginfo('template_url'); ?>/img/imgPrueba/ico_mouse_down.png" alt="down">
				<h2><?php echo $tituloUno; ?></h2>
				<p><?php echo $subtitulo; ?></p>
			</div>
		</div>
	</section>

	<section class="block">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<?php global $post; 
					$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 1 ); 
					$myposts = get_posts( $args );?>
				<article>
					<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
						<?php if (has_post_thumbnail()) {
              			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
							<img src="<?php echo $url; ?>" alt="<?php the_title(); ?> "/><?php }?>
						<div class="col-xs-12 col-sm-12 col-md-offset-7 col-md-5 cont-article">
							<h4><?php echo the_category() ?></h4>
							<h3><?php the_title(); ?></h3>
							<a href="<?php the_permalink($post->ID); ?>" class="btn-yellow hvr-grow-shadow">Leer Artículo</a>
						</div>
					<?php endforeach; ?>
				</article>
			</div>
		</div>
	</section>
	<section class="block">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<article>
					<img src="<?php bloginfo('template_url'); ?>/img/imgPrueba/Home_Slider_Infografias.png" alt="background">
					<div class="col-xs-12 col-sm-12 col-md-5 cont-article">
						<h4>INFOGRAFÍAS</h4>
						<h3>¿Cómo trabajar bajo presión? (Y no morir en el intento)</h3>
						<a href="" class="btn-yellow hvr-grow-shadow">Leer Artículo</a>
					</div>
				</article>
			</div>
		</div>
	</section>
	<section class="block">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<article>
					<img src="<?php bloginfo('template_url'); ?>/img/imgPrueba/Home_Slider_Videos.png" alt="background">
					<div class="col-xs-12 col-sm-12 col-md-offset-7 col-md-5 cont-article">
						<h4>VIDEOS</h4>
						<h3>Cómo trámitar tu RFC si eres menor de edad</h3>
						<a href="" class="btn-yellow hvr-grow-shadow">Leer Artículo</a>
					</div>
				</article>
			</div>
		</div>
	</section>
</div>


			<section class="socialMedia">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 text-center">
							<h2><?php echo $tituloSocial; ?></h2>
						</div>
						<div class="col-md-5">
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.10&appId=702474316614723";
							fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>

							<div class="fb-comments" data-href="http://elpoderdelosnumeros.org/" data-width="100%" data-numposts="5"></div>
							

						</div>
						<div class="col-md-5">
							

						</div>
					</div>
				</div>
			</section>

			<section class="school">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<article class"">
								<img src="<?php bloginfo('template_url'); ?>/img/imgPrueba/Home_SeccionPlaticasFooter.jpg" alt="background">
								
									<div class="col-md-12 cont-article school1">
										<h3>¿Te interesa que vayamos a tu escuela?</h3>
										<h4>No dudes en contactarnos</h4>
										<a href="" class="btn-yellow hvr-grow-shadow">Quiero información</a>
									</div>
								
							</article>
						</div>
						<div class="col-md-6">
							<article class"">
								<img src="<?php bloginfo('template_url'); ?>/img/imgPrueba/Home_SeccionEncuestasFooter.jpg" alt="background">
								
									<div class="col-md-12 cont-article school2">
										<h3>¿Ya visitamos tu escuela?</h3>
										<h4>Por favor, responde esta encuesta</h4>
										<a href="" class="btn-pink hvr-grow-shadow">Ir a encuesta</a>
									</div>
								
							</article>
						</div>

					</div>
				</div>

			</section>

			<section class="newletter">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2>Suscríbete al Newletter</h2>
							<p>Me interesa recibir información del mundo de la contabilidad.</p>

						</div>

					</div>
				</div>

			</section>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
