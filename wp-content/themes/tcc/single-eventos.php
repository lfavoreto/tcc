<?php get_header(); ?>

<?php $title =  get_the_title() . '| Guardaí';?>

<main class="pageEventos single">
    <section class="head">
        <div class="box-imagem">
            <img src="<?= $assets; ?>/oceano.webp" alt="">
        </div>
        <div class="position">
            <div class="container">
                <?php include 'includes/breadcrumb.php'; ?>
                <h2 class="title" id="postName"><?= get_the_title(); ?></h2>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <div class="image">
                <img src="<?= get_field('imagem') ?>" alt="">
            </div>
            <div class="box">
                <span class="date"><?= date('d/m/Y', strtotime(get_field('data'))); ?></span>
                <p class="text"><strong><?= get_field('descricao') ?></strong></p>
                <div class="content-box">
                    <?= get_field('texto') ?>
                </div>
            </div>
            <div class="redes-sociais share">
                Compartilhar
                <div class="likely" data-url="<?= get_the_permalink() ?>">
                    <div class="facebook" data-quote="<?= get_the_title(); ?>">
                        <span class="sm"><div class="icon"><img src="<?= $assets; ?>/icons/facebook.svg" alt=""></div></span>
                    </div>
                    <a href="" id="whatsapp-share-btt" rel="nofollow" target="_blank">
                        <span class="sm"><div class="icon"><img src="<?= $assets; ?>/icons/whatsapp.svg" alt=""></div></span>
                    </a>
                    <div class="whatsapp">
                        <span class="sm"><div class="icon"><img src="<?= $assets; ?>/icons/whatsapp.svg" alt=""></div></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relacionados">
        <div class="container">
            <?php
                $eventos = new WP_Query(array(
                    'post_type' => 'eventos',
                    'posts_per_page' => 2,
                    'post__not_in' => array(get_the_ID()),
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    'orderby' => 'date',
                ));
            ?>
            <h3 class="stitle">Eventos relacionados</h3>
            <?php if($eventos->have_posts()): ?>
                <ul class="list">
                    <?php while($eventos->have_posts()): $eventos->the_post(); ?>
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
    </section>
</main>

<?php get_footer(); ?>