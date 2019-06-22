<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <meta name="language" content="portuguese" />
        <link rel="alternate" hreflang="pt" href="" />
        <meta name="revisit-after" content="5 day" />
        <meta name="author" content="paulo1rm23@gmail.com">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="reply-to" content="paulo1rm23@gmail.com">
        <meta name="theme-color" content="#4667d1">
        <title>Feira de Imóveis</title>

        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css' type='text/css' />
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/hover-min.css' type='text/css' />
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css' type='text/css' />
        <link rel='stylesheet' href='<?php echo get_template_directory_uri(); ?>/assets/css/style.css' type='text/css' />

        <?php wp_head(); ?>
    </head>

    <body>
        <?php
            global $post;
            $url = get_permalink($post->ID);
            if (empty($url)) { ?>
                <header>
                    <?php include 'components/menu.php'; ?>
                </header>
            <?php } else { ?>
                <header class="header-interna">
                    <?php include 'components/menu.php'; ?>
                </header>
            <?php } ?>