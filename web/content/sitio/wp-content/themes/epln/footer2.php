<?php 
//baner 1 footer
$id_Home =2;
$titulo1 = get_field('titulo_f1',$id_Home);
$subt1 = get_field('subtitulof1',$id_Home);
$img1 = get_field('imagen',$id_Home);
$link1 = get_field('link',$id_Home);
$textbtn1 = get_field('texto_del_boton',$id_Home);

//baner 2
$titulo2 = get_field('titulo_f2',$id_Home);
$subt2 = get_field('subtitulof2',$id_Home);
$img2 = get_field('imagen2',$id_Home);
$link2 = get_field('link2',$id_Home);
$textbtn2 = get_field('texto_del_boton2',$id_Home);
 ?>
<section class="school">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <article class"">
                                <img src="<?php echo $img1; ?>" alt="<?php echo $titulo1;?>">
                                
                                    <div class="col-md-12 cont-article school1">
                                        <h3><?php echo $titulo1; ?></h3>
                                        <h4><?php echo $subt1; ?></h4>
                                        <a href="<?php echo $link1; ?>" class="btn-yellow hvr-grow-shadow"><?php echo $textbtn1; ?></a>
                                    </div>
                                
                            </article>
                        </div>
                        <div class="col-md-6">
                            <article class"">
                                <img src="<?php echo $img2; ?>" alt="<?php echo $titulo1;?>">
                                
                                    <div class="col-md-12 cont-article school2">
                                        <h3><?php echo $titulo2; ?></h3>
                                        <h4><?php echo $subt2; ?></h4>
                                        <a href="<?php echo $link2; ?>" class="btn-yellow hvr-grow-shadow"><?php echo $textbtn2; ?></a>
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
                            <!-- <h2>Suscríbete al Newletter</h2>
                            <p>Me interesa recibir información del mundo de la contabilidad.</p> -->

                            <div id="sidebar">
                                <ul style="list-style: none;">
                                <?php   /* Widgetized sidebar, if you have the plugin installed. */
                                            if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
                                <?php endif; ?>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </section>