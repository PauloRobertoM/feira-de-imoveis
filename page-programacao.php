<?php get_header(); ?>
    
    <?php
        $args = array(
            'posts_per_page' => 30,
            'post_type'      => 'programacaos',
        );

        $programacaos = get_posts($args);
    ?>

    <?php include 'components/topo-interna.php'; ?>

    <section class="menu-geral breads-interna">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
                <li><a href="<?php echo site_url('/'); ?>">PROGRAMAÇÃO</a></li>
            </ul><!-- .nav -->
        </div><!-- container -->
    </section><!-- menu-geral -->

    <section class="interna programacao">
        <div class="container">
            <h4 class="text-center">15 A 19 de Agosto • Centro de Eventos FIEP</h4>
            <h1 class="text-center">Palestras, recreação e muito mais na programação da Feira de Imóveis 2019</h1>
            <p class="text-center">A 28ª Feira de Imóveis do Paraná 2019, que acontece de 15 a 19 de agosto, no Centro de Eventos da Fiep, na Av. das Torres, em Curitiba, terá PALESTRAS E SHOWS GRATUITOS. Programe-se e participe!</p>
            <div class="row">
                <?php foreach ($programacaos as $programacao) : ?>
                    <?php $titulo = $programacao->post_title; ?>
                    <?php $conteudo = $programacao->post_content; ?>
                    <?php $mes = get_the_date('m'); ?>
                    <?php $dia = get_the_date('d'); ?>
                    <?php $semana = get_the_date('l'); ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <h3><?php echo "{$dia}.{$mes} • {$semana}"; ?></h3>
                            <?php
                                $programacaos = rwmb_meta('programacaos_foto', 'type=plupload_image', $programacao->ID);
                                foreach ( $programacaos as $programacao ) {
                                    echo "<img src='{$programacao['url']}' alt='{$programacao['alt']}' />";
                                }
                            ?>
                            <h2><?= $titulo ?></h2>
                            <p><?= $conteudo ?></p>
                        </div><!-- item -->
                    </div><!-- md-4 -->
                <?php endforeach; ?>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php get_footer(); ?>