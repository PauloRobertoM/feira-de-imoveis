<?php get_header(); ?>

    <?php
        $args = array (
            'post_status'            => 'publish',
            'pagination'             => true,
            'posts_per_page'         => '10',
        );
        $posts = new WP_Query( $args );
    ?>

    <?php include 'components/topo-interna.php'; ?>

    <section class="menu-geral breads-interna">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
                <li><a href="<?php echo site_url('/'); ?>">NOTÍCIAS</a></li>
            </ul><!-- .nav -->
        </div><!-- container -->
    </section><!-- menu-geral -->
    
    <section class="interna sobre">
        <div class="container">
            <h4 class="text-center">15 A 19 de Agosto • Centro de Eventos FIEP</h4>
            <h1 class="text-center">As últimas notícias da Feira de Imóveis</h1>
            <p class="text-center">A Feira de Imóveis está chegando e todo dia tem novidades para você. Fique por dentro de tudo o que acontece antes, durante e depois aqui no nosso canal de notícias. Navegue pelos posts abaixo e se ainda tiver alguma dúvida, entre em contato com nossa equipe.</p>
            <div class="row">
                <?php if ( $posts->have_posts() ) : while ( $posts->have_posts()) : $posts->the_post(); ?>
                    <?php $date = get_the_date(); ?>
                    <div class="col-md-6 col-sm-6">
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
                    </div><!-- md-6 -->
                <?php endwhile; endif; ?>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- sobre -->

<?php get_footer(); ?>
