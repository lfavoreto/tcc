<?php /* Template Name: Loja */ ?>

<?php get_header('shop'); ?>

<main class="pageLoja">

    <section class="banner">
        <div class="container">
            <div class="content">
                <div class="item">
                    <h2 class="title">Produtos com até <strong>40%</strong> de desconto</h2>
                    <div class="box-image">
                        <img src="<?= $assets; ?>/Kayak-Free.webp" alt="">
                    </div>
                    <a href="#" class="button">Ver produtos</a>
                </div>
                <div class="item">
                    <h2 class="title">Título 2</h2> 
                </div>
            </div>
        </div>
    </section>

    <section class="nav">
        <div class="container">
            <h2 class="title">Nossos Serviços</h2>
            <ul>
                <li>
                    <a href="<?= home_url() ?>/produtos">
                        <div class="image">
                            <img src="<?= $assets; ?>/prancha-de-surf.webp" alt="">
                        </div>
                        <p class="text">Produtos</p>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>/acessorios">
                        <div class="image">
                            <img src="<?= $assets; ?>/colete-salva-vidas.webp" alt="">
                        </div>
                        <p class="text">Acessórios</p>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>/locacao">
                        <div class="image">
                            <img src="<?= $assets; ?>/prancha-de-remo.webp" alt="">
                        </div>
                        <p class="text">Locação</p>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>/passeios">
                        <div class="image">
                            <img src="<?= $assets; ?>/canoa.webp" alt="">
                        </div>
                        <p class="text">Passeios</p>
                    </a>
                </li>
                <li>
                    <a href="<?= home_url() ?>/guardaria">
                        <div class="image">
                            <img src="<?= $assets; ?>/armazem.webp" alt="">
                        </div>
                        <p class="text">Guardaria</p>
                    </a>
                </li>
            </ul>
        </div>
    </section>

    <section class="destaques">
        <div class="container">
            <h2 class="title">Produtos em Destaques</h2>

            <?= do_shortcode('[products limit="4" columns="4" orderby="popularity" class="ll-produtos" category="passeios" cat_operator="NOT IN"]') ?>
        </div>
    </section>

    <section class="banner-bottom">
        <div class="wrapper">
            <img src="<?= $assets; ?>/banner_03.webp" alt="">
        </div>
    </section>

    <section class="destaques">
        <div class="container">
            <h2 class="title">Aulas e Passeios</h2>

            <?= do_shortcode('[products limit="4" columns="4" orderby="popularity" class="ll-produtos" category="passeios"]') ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>