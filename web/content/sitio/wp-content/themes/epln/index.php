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
				<?php global $post; 
					$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 4 ); 
					$myposts = get_posts( $args );?>
				<article>
					<?php foreach( $myposts as $post ) : setup_postdata($post); ?>
					<?php if (has_post_thumbnail()) {
              			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?> 
							<img src="<?php echo $url; ?>" alt="<?php the_title(); ?> "/><?php }?>
							<div class="col-xs-12 col-sm-12 col-md-5 cont-article">
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
				<?php global $post; 
					$args = array( "posts_per_page" => 1, "offset"=> 0, "category" => 5 ); 
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
							<a class="twitter-timeline"  href="https://twitter.com/search?q=%40elpoderdelosnum" data-widget-id="910962602662141952">Tweets sobre @elpoderdelosnum</a>
            					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
            					</script>
						</div>
					</div>
				</div>
			</section>
			
<?php //get_sidebar(); ?>


  
  
<?php include('footer2.php'); ?>
<?php get_footer(); ?>
