<?php get_header(); ?>

   <?php include 'components/topo-interna.php'; ?>

    <section class="menu-geral breads-interna">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
                <li><a href="<?php echo site_url('noticias'); ?>">NOTÍCIAS</a></li>
                <li><a href="#"><?php the_title(); ?></a></li>
            </ul><!-- .nav -->
        </div><!-- container -->
    </section><!-- menu-geral -->
    
    <section class="interna noticias-interna">
        <div class="container">
            <h4 class="text-center">15 A 19 de Agosto • Centro de Eventos FIEP</h4>
            <div class="titulo-interna">
                <h1 class="text-center"><?php the_title(); ?></h1>
                <div>
                    <?php $date = get_the_date(); ?>
                    <p><?= $date ?></p>
                    <h4>compartilhe:</h4>
                    <ul>
                        <li><a href="" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div><!-- titulo-interna -->
            
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(''); ?>
                <?php endif; ?>
                <p><?php the_content(); ?></p>
            <?php endwhile; ?>
            <hr />
        </div><!-- container -->
    </section><!-- noticias-interna -->

    <section class="sobre outras-noticias">
        <div class="container">
            <h5>Outras Notícias</h5>
            <div class="row">
                <?php
                    $args = array('posts_per_page' => 2);
                    $query = new WP_Query( $args );
                ?>
                <?php if ( have_posts() ) : while ( $query->have_posts()) : $query->the_post(); ?>
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