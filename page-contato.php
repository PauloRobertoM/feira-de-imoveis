<?php get_header(); ?>

    <?php include 'components/topo-interna.php'; ?>

    <section class="menu-geral breads-interna">
        <div class="container">
            <ul>
                <li><a href="<?php echo site_url('/'); ?>">HOME</a></li>
                <li><a href="<?php echo site_url('/'); ?>">CONTATO</a></li>
            </ul><!-- .nav -->
        </div><!-- container -->
    </section><!-- menu-geral -->

    <section class="interna contato">
        <div class="container">
            <h4 class="text-center">15 A 19 de Agosto • Centro de Eventos FIEP</h4>
            <h1 class="text-center">Entre em contato, participe da Feira de Imóveis 2019</h1>
            <p class="text-center">A 28ª Feira de Imóveis do Paraná 2019, que acontece de 15 a 19 de agosto, no Centro de Eventos da Fiep, na Av. das Torres, em Curitiba, terá PALESTRAS E SHOWS GRATUITOS. Programe-se e participe!</p>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="item item1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-lilian.png" alt="">
                        <p class="p-topo">Comercialização de<br />estandes e patrocínios</p>
                        <h4>Lilian</h4>
                        <p>(41) 3359-8000</p>
                        <p>lilian@infinitoo.com.br</p>
                    </div><!-- item -->
                </div><!-- md-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="item item2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-kendra.png" alt="">
                        <p class="p-topo">Informações ao público</p>
                        <h4>Kendra</h4>
                        <p>(41) 3253-6233 | (41) 99607-2316</p>
                        <p>ademipr@ademipr.com.br</p>
                    </div><!-- item -->
                </div><!-- md-4 -->
                <div class="col-md-4 col-sm-4">
                    <div class="item item3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-maria.png" alt="">
                        <p class="p-topo">Atendimento à imprensa</p>
                        <h4>Maria Emília</h4>
                        <p>(41) 3011-2632 | (41) 99622-0171</p>
                        <p>contato@memilia.com</p>
                    </div><!-- item -->
                </div><!-- md-4 -->
            </div><!-- row -->
            <div class="row">
            	<div class="col-md-2 col-sm-2"></div>
            	<div class="col-md-8 col-sm-8">
                    <div id="md"></div>
            		<form id="_form_contato">
					    <div id="_contato_callbacks"></div>
		                <input type="text" name="nome" id="contato_nome" class="form-control" placeholder="NOME">
		                <input type="email" name="email" id="contato_email" class="form-control" placeholder="E-MAIL">
		                <input type="text" name="telefone" id="contato_telefone" class="form-control" placeholder="TELEFONE">
		                <input type="text" name="assunto" id="contato_assunto" class="form-control" placeholder="ASSUNTO">
		                <textarea name="mensagem" id="contato_mensagem" class="form-control" placeholder="MENSAGEM"></textarea>
		                <button type="submit" name="action">ENVIAR</button>
		            </form>
            	</div><!-- md-8 -->
            	<div class="col-md-2 col-sm-2"></div>
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- interna -->

<?php get_footer(); ?>