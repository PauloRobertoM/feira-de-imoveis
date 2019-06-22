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
            <div class="redes-sociais">
                <h4>SIGA NOSSAS<br />REDES SOCIAIS</h4>
                <ul>
                    <li><a href="https://www.facebook.com/events/181468232634947/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://twitter.com/feiraimoveispr" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/feiraimoveispr/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.flickr.com/photos/ademipr" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.youtube.com/user/feiraimoveispr" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                </ul>
                <h4>COMO<br />CHEGAR</h4>
                <ul class="como-chegar">
                    <li><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/waze.png"></a></li>
                </ul>
            </div><!-- redes-sociais -->
        </div><!-- container -->
    </section><!-- dados -->

    <?php include 'content-app.php'; ?>

    <section class="sobre">
        <div class="container">
            <h1>Venha para a maior Feira de Imóveis do Paraná</h1>
            <p class="p-sobre">Está chegando e você não pode perder, são diversos expositores entre as empresas mais renomadas do país em um só lugar, trazendo para você os melhores imóveis com as condições mais improváveis que você pode encontrar hoje no mercado. Traga sua família e aproveite toda a estrutura que montamos para o seu dia ser confortável com nossa área de recreação e Food Trucks para todas as idades e gostos. Não perca, a entrada e o estacionamento são gratuitos.</p>
            <div class="row">
                <div class="col-md-1"></div>
                <?php
                    $args = array('posts_per_page' => 2);
                    $query = new WP_Query( $args );
                ?>
                <?php if ( have_posts() ) : while ( $query->have_posts()) : $query->the_post(); ?>
                    <?php $date = get_the_date(); ?>
                    <div class="col-md-5 col-sm-6">
                        <div class="item">
                            <a href="<?php the_permalink() ?>">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(''); ?>
                                <?php endif; ?>
                                <p><?= $date ?></p>
                                <h4><?php the_title(); ?></h4>
                            </a>
                            <a href="<?php the_permalink() ?>" class="btn-mais">+</a>
                        </div><!-- item -->
                    </div><!-- md-5 -->
                <?php endwhile; endif; ?>
                <div class="col-md-1"></div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- sobre -->
    
<?php get_footer(); ?>