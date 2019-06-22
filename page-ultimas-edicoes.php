<?php get_header(); ?>

	<?php
        $args = array(
            'posts_per_page' => 30,
            'post_type'      => 'ultimas',
        );

        $ultimas = get_posts($args);
    ?>

    <?php include 'components/topo-interna.php'; ?>

    <section class="menu-geral breads-interna">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
                <li><a href="<?php echo site_url('/'); ?>">ÚLTIMAS EDIÇÕES</a></li>
            </ul><!-- .nav -->
        </div><!-- container -->
    </section><!-- menu-geral -->
    
    <section class="interna sobre">
        <div class="container">
            <h4 class="text-center">15 A 19 de Agosto • Centro de Eventos FIEP</h4>
            <h1 class="text-center">Já são 27 edições, e vem muito mais por aí</h1>
            <p class="text-center">Em suas 27 últimas edições, a Feira de Imóveis do Paraná somou mais de R$ 680 milhões em negócios realizados durante o evento. Apenas na edição de 2014, 12 mil visitantes fecharam R$ 50 milhões em negócios entre os 40 expositores que participaram da feira. Confira alguma das edições realizadas.</p>
			
			<div class="cd-timeline js-cd-timeline">
				<div class="cd-timeline__container">
					<?php foreach ($ultimas as $ultima) : ?>
	                    <?php $titulo = $ultima->post_title; ?>
	                    <?php $conteudo = $ultima->post_content; ?>
	                    <?php $ano = $ultima->ultimas_ano; ?>
	                    <div class="cd-timeline__block js-cd-block">
							<div class="cd-timeline__img cd-timeline__img--picture js-cd-img"></div>
							<div class="cd-timeline__content js-cd-content">
								<p><?= $conteudo ?></p>
								<span class="cd-timeline__date"><?= $ano ?> • <?= $titulo ?></span>
							</div> <!-- cd-timeline__content -->
						</div> <!-- cd-timeline__block -->
	                <?php endforeach; ?>
				</div><!-- cd-timeline__container -->
			</div><!-- cd-timeline -->
        </div><!-- container -->
    </section><!-- sobre -->

<?php get_footer(); ?>
