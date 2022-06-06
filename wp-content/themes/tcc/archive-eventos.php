<?php get_header(); ?>

<main class="pageEventos">

    <section class="head">
        <div class="box-imagem">
            <img src="<?= $assets; ?>/oceano.webp" alt="">
        </div>
        <div class="position">
            <div class="container">
                <?php include 'includes/breadcrumb.php'; ?>
                <h2 class="title">Eventos</h2>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="wrapper">
            <div class="container">
                <form role="search" action="<?= esc_url( home_url('eventos/') );?>" method="GET" class="form">
                    <h3 class="text">Veja nossos eventos!</h3>
                    <div class="campos">
                        
                    </div>
                </form>

                <?php

                    $eventos = array(
                        'post_type' => 'eventos',
                        'posts_per_page' => 4,
                        'order' => 'ASC',
                        'paged' => $paged,
                    );

                    query_posts( $eventos );
                ?>

                        <ul class="list">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <li>
                                <div class="image">
                                    <img src="<?= get_field('imagem') ?>" alt="">
                                </div>
                                <div class="content">
                                    <span class="date"><?= date('d/m/Y', strtotime(get_field('data'))); ?></span>
                                    <h3 class="title"><?= get_field('titulo') ?></h3>
                                    <p class="text"><?= get_field('descricao') ?></p>
                                    <a href="<?= get_the_permalink() ?>" class="button">
                                        Saiba mais <div class="arrow"><img src="<?= $assets; ?>/icons/arrow.svg" alt=""></div>
                                    </a>
                                </div>
                            </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>