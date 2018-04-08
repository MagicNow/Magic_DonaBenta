<?php
/*
Template Name: home
*/
?>
 <!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/css/bootstrap.min.css">
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<?php wp_head(); ?>
<link rel='stylesheet' href="<?php echo get_template_directory_uri(); ?>/css/comidadibuteco.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" <?php body_class(); ?>>

<script src="<?php echo get_template_directory_uri(); ?>/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/comidadibuteco.min.js"></script>


  <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="header-content clearfix">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/donabenta__logo.png" class="main_logo">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="home" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-left">
                    <h1 class="title">
                      CONHEÇA AS RECEITAS DO<Br>
                      COMIDA DI BUTECO 2018
                   </h1>
                    <p>O Comida di Buteco não é festival e sim um Concurso,
                        <br> uma competição onde os votos definem um
                        <br> ranking dos participantes e cujos 20% últimos colocados
                        <br> perdem o direito de participar no ano subsequente.
                        <br> E o público tem todo o mês do concurso para visitar
                        <br> quantos butecos quiser, comer, votar e ajudar a eleger os
                        <br> melhores butecos do Brasil.</p>
                    <p>Para visualizar as receitas, clique na <img src="<?php echo get_template_directory_uri(); ?>/img/flag.png"> de qualquer estado.
                    </p>
                    <p><a href="#regulamento">Regulamento</a></p>
                </div>
                <div class="col-md-6 text-left">
                    <div class="map-content clearfix">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/mapa.png" class="mapa">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo_comidadibuteco.png" class="logo_comida">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
    </footer>







<?php wp_footer(); ?>
</body>
</html>
