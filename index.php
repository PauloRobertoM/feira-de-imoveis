<?php get_header(); ?>

    <?php
        $page = 'home';
    ?>

    <?php include 'components/vitrine.php'; ?>

    <section class="dados">
        <div class="container">
            <div class="encontre-seu-imovel">
                <h2>ENCONTRE<br /><strong>SEU IMÓVEL</strong></h2>
                <form>
                    <select class="form-control">
                        <option>TIPO DE IMÓVEL</option>
                        <option>Imóvel 1</option>
                        <option>Imóvel 2</option>
                        <option>Imóvel 3</option>
                    </select>
                    <select class="form-control">
                        <option>ÁREA</option>
                        <option>Área 1</option>
                        <option>Área 2</option>
                        <option>Área 3</option>
                    </select>
                    <select class="form-control">
                        <option>CIDADE</option>
                        <option>Cidade 1</option>
                        <option>Cidade 2</option>
                        <option>Cidade 3</option>
                    </select>
                    <select class="form-control">
                        <option>CIDADE</option>
                        <option>Cidade 1</option>
                        <option>Cidade 2</option>
                        <option>Cidade 3</option>
                    </select>
                    <button><i class="fa fa-search" aria-hidden="true"></i> BUSCAR</button>
                </form>
            </div><!-- encontre-seu-imovel -->
            <section class="redes-sociais">
                <h4>SIGA NOSSAS<br />REDES SOCIAIS</h4>
                <ul>
                    <li><a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                    <li><a href="" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
                <h4>COMO<br />CHEGAR</h4>
                <ul class="como-chegar">
                    <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/waze.png"></a></li>
                </ul>
            </section><!-- redes-sociais -->
        </div><!-- container -->
    </section><!-- dados -->

    <section class="app">
        <div class="container">
            <div>
                <div>
                    <h4>Baixe já o nosso aplicativo.</h4>
                    <p>Encontre seu imível ideal com<br />apenas alguns toques.</p>
                </div>
                <ul>
                    <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-play.png"></a></li>
                    <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/app-apple.png"></a></li>
                </ul>
            </div>
        </div><!-- container -->
    </section><!-- app -->

    <section class="sobre">
        <div class="container">
            <h1>Venha para a maior Feira de Imóveis do Paraná</h1>
            <p></p>
        </div><!-- container -->
    </section><!-- sobre -->

    <section class="marcas">
        <div class="container">
            <?php
                $args = array(
                    'posts_per_page' => 5,
                    'post_type'      => 'marcas',
                );

                $marcas = get_posts($args);
            ?>

            <?php foreach ($marcas as $marca) : ?>
                <?php if ($marca->marca_tipo == 'Patrocínio Master') { ?>
                    <?php
                        $marcas = rwmb_meta('marca_foto', 'type=plupload_image', $marca->ID);
                        foreach ( $marcas as $marca ) {
                            echo "<img src='{$marca['url']}' alt='{$marca['alt']}' />";
                        }
                    ?>
                <?php } ?>
                <?php if ($marca->marca_tipo == 'Patrocínio Secundário') { ?>
                    <?php
                        $marcas = rwmb_meta('marca_foto', 'type=plupload_image', $marca->ID);
                        foreach ( $marcas as $marca ) {
                            echo "<img src='{$marca['url']}' alt='{$marca['alt']}' />";
                        }
                    ?>
                <?php } ?>
                <?php if ($marca->marca_tipo == 'Organização') { ?>
                    <?php
                        $marcas = rwmb_meta('marca_foto', 'type=plupload_image', $marca->ID);
                        foreach ( $marcas as $marca ) {
                            echo "<img src='{$marca['url']}' alt='{$marca['alt']}' />";
                        }
                    ?>
                <?php } ?>
                <?php if ($marca->marca_tipo == 'Realização') { ?>
                    <?php
                        $marcas = rwmb_meta('marca_foto', 'type=plupload_image', $marca->ID);
                        foreach ( $marcas as $marca ) {
                            echo "<img src='{$marca['url']}' alt='{$marca['alt']}' />";
                        }
                    ?>
                <?php } ?>
            <?php endforeach; ?>
        </div><!-- container -->
    </section><!-- marcas -->

<?php /*
    <section class="infografico">
        <?php
            $args = array(
                'posts_per_page' => 4,
                'post_type'      => 'infograficos',
            );

            $infograficos = get_posts($args);
        ?>
        <?php foreach ($infograficos as $infografico) : ?>
            <?php $i += 1; ?>
            <div class="col-md-3 col-sm-3">
                <div class="flip flip-<?= $i ?>">
                    <div class="front">
                       <h2><?= $infografico->post_title ?></h2>
                    </div>
                    <div class="back">
                       <p><?= $infografico->post_content ?></p>
                    </div>
                </div>
            </div><!-- md-3 -->
        <?php endforeach; ?>
    </section><!-- infografico -->

    <section class="itens">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-noticias.png"> NOTÍCIAS E EVENTOS</h2>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="item">
                            <div class="row">
                                <a href="<?php the_permalink() ?>">
                                    <div class="col-md-6 col-sm-6">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(''); ?>
                                        <?php endif; ?>
                                    </div><!-- md-6 -->
                                    <div class="col-md-6 col-sm-6">
                                        <span><?php the_date(); ?></span>
                                        <h4><?php the_title(); ?></h4>
                                    </div><!-- md-6 -->
                                </a>
                            </div><!-- row -->
                        </div><!-- item -->
                    <?php endwhile; endif; ?>

                    <a href="<?php echo site_url('noticias-e-eventos'); ?>" class="btn-geral btn-azul">VEJA TODAS AS NOTICIAS E EVENTOS</a>
                </div><!-- md-6 -->
                <div class="col-md-6 col-sm-6">
                    <?php
                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'      => 'videos',
                        );
                        $videos = get_posts($args);
                    ?>
                    <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-videos.png"> VIDEOS</h2>
                    <?php foreach ($videos as $video) : ?>
                        <a href="<?= $video->videos_link ?>" target="_blank">
                            <?php
                                $foto_videos = rwmb_meta('videos_foto', 'type=plupload_image', $video->ID);
                                foreach ( $foto_videos as $foto_video ) {
                                    echo "<img src='{$foto_video['url']}' class='img-videos' alt='{$foto_video['alt']}' />";
                                }
                            ?>
                            <h3><?= $video->post_title ?></h3>
                            <p>A Vitoria Rodrigues, uma das idealizadoras da Questao Demais, e tambem professora. e tambem professora. e tambem professora.</p>
                        </a>
                    <?php endforeach; ?>
                    <a href="<?php echo site_url('videos'); ?>" class="btn-geral btn-vermelho">VEJA MAIS VIDEOS</a>
                </div><!-- md-6 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- itens -->    

    <section class="noticias">
        <div class="container">
            <div class="titulo">
                <h2>Notícias</h2>
            </div><!-- titulo -->

            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- <div class="col-md-4 col-sm-4"> -->
                        <a href="<?php the_permalink() ?>" class="">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(''); ?>
                            <?php endif; ?>
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo excerpt(115, get_the_excerpt()); ?></p>
                            <a href="<?php the_permalink() ?>" class="">VER MAIS</a>
                        </a>
                        <div class="borda"></div>
                    <!-- </div> --><!-- md-4 -->

                    <?php
                        $args = array(
                            'posts_per_page' => 20,
                            'post_type'      => 'projetos',
                        );
                        $projetos = get_posts($args);
                    ?>

                    <?php foreach ($projetos as $projeto) : ?>
                        <h4><?= $projeto->post_title ?></h4>
                        <p><?= $projeto->post_content ?></p>
                    <?php endforeach; ?>

                <?php endwhile; endif; ?>  
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- noticias -->

    <section class="app-infoleg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="item">
                        <div>
                            <h2>Aplicativo<br /><span>Infoleg</span></h2>
                            <p>Quer saber tudo sobre o meu mandato na palama da sua mão</p>
                            <p>Baixe aqui o APP</p>
                            <a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/store1.png" alt=""></a>
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/store2.png" alt=""></a>
                        </div>
                    </div>
                </div><!-- xs-6 -->
                <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/app.jpg" alt="" class="img-app">
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- app-infoleg -->

    <section class="galeria">
        <div class="container">
            <div class="titulo">
                <h2>Instagram</h2>
            </div><!-- titulo -->

        </div><!-- container -->
    </section><!-- galeria -->

    <section class="projetos" id="anc-porjetos">
        <div class="container">
            <div class="titulo">
                <h2>Projetos e Realizações</h2>
            </div><!-- titulo -->
            <div class="row">
                <?php
                    $args = array(
                        'posts_per_page' => 20,
                        'post_type'      => 'projetos',
                    );
                    $projetos = get_posts($args);
                ?>

                <?php foreach ($projetos as $projeto) : ?>
                    <div class="col-md-3 col-sm-3">
                        <div class="item">
                            <a data-toggle="modal" data-target="#myModal_<?= $projeto->ID ?>">
                                <h4><?= $projeto->post_title ?></h4>
                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div><!-- item -->
                    </div><!-- md-3 -->

                    <div class="modal fade" id="myModal_<?= $projeto->ID ?>" tabindex="-1" role="dialog" aria-labelledby="myModal_<?= $projeto->ID ?>Label">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel"><?= $projeto->post_title ?></h4>
                                </div>
                                <div class="modal-body">
                                    <p><?= $projeto->post_content ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- projetos -->

    <section class="videos">
        <div class="container">
            <div class="titulo">
                <h2>Vídeos</h2>
            </div><!-- titulo -->
        </div><!-- container -->
        <div class="owl-carousel owl-theme" id="owl-video">
            <?php
                $args = array(
                    'posts_per_page' => 20,
                    'post_type'      => 'videos',
                );
                $videos = get_posts($args);
            ?>

            <?php foreach ($videos as $video) : ?>
                <div class="item">
                    <a href="<?= $video->videos_link ?>" target="_blank">
                        <?php
                            $foto_videos = rwmb_meta('videos_foto', 'type=plupload_image', $video->ID);
                            foreach ( $foto_videos as $foto_video ) {
                                echo "<img src='{$foto_video['url']}' class='img-videos' alt='{$foto_video['alt']}' />";
                            }
                        ?>
                        <div class="play">
                            <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/images/play.png" alt="">
                        </div><!-- play -->
                        <h4><?= $video->post_title ?></h4>
                    </a>
                </div><!-- item -->
            <?php endforeach; ?>
        </div><!-- #owl-video -->
    </section><!-- videos -->

    */ ?>

<?php get_footer(); ?>