        <section class="marcas">
            <div class="container">
                <div class="marca1">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <h2>patrocínio master</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/caixa.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/governo.png" alt="">
                        </div><!-- md-6 -->
                        <div class="col-md-6 col-sm-6">
                            <h2>patrocínio master</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/fiep.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imovel.png" alt="">
                        </div><!-- md-6 -->
                    </div><!-- row -->
                </div><!-- marca1 -->
            </div><!-- container -->
        </section><!-- marcas -->

        <section class="marcas marcas2">
            <div class="container">
                <div class="marca2">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5 col-sm-6">
                            <h2>ORGANIZAÇÃO</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/infinitoo.png" alt="">
                        </div><!-- md-5 -->
                        <div class="col-md-5 col-sm-6">
                            <h2>REALIZAÇÃO</h2>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ademi.png" alt="">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/sinduscon.png" alt="">
                        </div><!-- md-5 -->
                        <div class="col-md-1"></div>
                    </div><!-- row -->
                </div><!-- marca2 -->
            </div><!-- container -->
        </section><!-- marcas -->

        <section class="menu-geral">
            <div class="container">
                <ul>
                    <li><a href="<?php echo site_url('a-feira'); ?>">A FEIRA</a></li>
                    <li><a href="<?php echo site_url('expositores'); ?>">EXPOSITORES</a></li>
                    <li><a href="<?php echo site_url('noticias'); ?>">NOTÍCIAS</a></li>
                    <li><a href="<?php echo site_url('localizacao'); ?>">LOCALIZAÇÃO</a></li>
                    <li><a href="<?php echo site_url('contato'); ?>">CONTATO</a></li>
                </ul><!-- .nav -->
            </div><!-- container -->
        </section><!-- menu-geral -->

        <footer>
            <div class="container">
                <div>
                    <p>© Copyright Feira de Imóveis do Paraná</p>
                    <div class="redes">
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
                    </div><!-- redes -->
                </div>
            </div><!-- container -->
        </footer>

        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js'></script>
        <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js'></script>
        <script src="https://use.fontawesome.com/6963733f46.js"></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js'></script>
        <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/script.js'></script>
    </body>
</html>