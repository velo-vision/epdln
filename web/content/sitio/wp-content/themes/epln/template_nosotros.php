<?php 
/*
template name: nosotros
*/
get_header();
 ?>

<?php echo the_content(); ?>
<?php 
//campos 

$id_n = 4;
$url = wp_get_attachment_url( get_post_thumbnail_id($id_n) );
$titulo_Nosotros = get_field('titulo_principal',$id_n);
$subt = get_field('subtitulo_principal',$id_n);
$mision = get_field('mision',$id_n);
$fon_mision = get_field('fondo_de_mision',$id_n);
$opcionesLab = get_field('opciones_laborales',$id_n);
$Titulo_info = get_field('informes',$id_n);
$subt_info = get_field('subtitulo_informes',$id_n);
$fondo_info = get_field('imagen_informes',$id_n);
?>

 <section class="banner">
    <img src="<?php echo $url; ?>" alt="Banner nosotros"/>
	<div class="contBanner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<h2><?php echo $titulo_Nosotros; ?></h2>
					<p><?php echo $subt; ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <p><a href="">INICIO</a> > Nosotros</p>
            </div>
        </div>
    </div>
</section>
<section class="nosotros">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-offset-2 col-md-8 text-center">
                <p><?php 
                    $post = get_post(4);
                    echo $post->post_content; ?>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="mision">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center">
                <?php echo $mision; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-offset-6 col-md-6 text-center">
                <?php echo $opcionesLab; ?>
            </div>
        </div>
    </div>
</section>
<section class="informes">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><?php echo $Titulo_info; ?></h2>
                <p><?php echo $subt_info; ?></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-offset-1 col-md-10">
                <?php global $post; $args = array( "category" => 6 ); $myposts = get_posts( $args );?>
                <ul id="slider-informes">
                    <?php foreach( $myposts as $post ) : setup_postdata($post); ?>
                        <?php if (has_post_thumbnail()) { $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>  
                            <li><a href="<?php the_permalink(); ?>"><img src="<?php echo $url; ?>" alt="<?php the_title(); ?>"/></a></li>
                    <?php }?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php 
include('footer2.php');
get_footer();
 ?>