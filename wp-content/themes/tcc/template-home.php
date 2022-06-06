<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<main class="pageHome">

    <section class="slider">
        <div class="wrapper">
            <div class="slider-banners">
                <div class="banner">
                    <div class="image">
                        <img src="<?= $assets; ?>/banner-001.webp" alt="">
                    </div>
                    <div class="position">
                        <div class="container">
                            <div class="content">
                                <h2 class="title">Venha conhecer e se surpreender com a aventura!</h2>
                                <a href="<?= home_url() ?>/passeios" class="button">Veja nossos passeios</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner">
                    <div class="image">
                        <img src="<?= $assets; ?>/banner.webp" alt="">
                    </div>
                    <div class="position">
                        <div class="container">
                            <div class="content">
                                <h2 class="title">Aulas de Stund Up Paddle e aluguel equipamentos</h2>
                                <a href="<?= home_url() ?>/servicos" class="button">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-dots"></div>
        </div>
    </section>

    <section class="servicos">
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

    <?php include 'includes/cta.php'; ?>

    <section class="sobre">
        <div class="container">
            <div class="image">
                <img src="<?= $assets; ?>/about.webp" alt="">
            </div>
            <div class="content">
                <h2 class="title">Sobre</h2>
                <p class="text">
                    Com o objetivo de minimizar o estresse diário e também pela possibilidade de praticar uma atividade física em ambiente aberto, com mais liberdade, é que os alunos da Guardaí recorrem ao esporte. Outros benefícios que a modalidade proporciona são: bom condicionamento físico, aprimora a concentração E desenvolve o espírito de equipe.
                </p>
                <a href="<?= home_url() ?>/quem-somos" class="button">Leia mais</a>
            </div>
        </div>
    </section>

    <section class="eventos" id="eventos">
        <div class="container">
            <h2 class="title">Nossos Eventos</h2>

            <?php $filter = isset($_GET['filter'])? $_GET['filter'] : 'vai_rolar'; ?>

            <div class="nav">
                <a href="<?= home_url() ?>/#eventos" class="filter">
                    <button class="<?= $filter == 'vai_rolar' ? 'active' : '' ?>">Vai Rolar</button>
                </a>

                <a href="<?= home_url() ?>?filter=ja_rolou/#eventos" class="filter">
                    <button class="<?= $filter != 'vai_rolar' ? 'active' : '' ?>">Já Rolou</button>
                </a>
            </div>

            <?php
                $eventos = new WP_Query(array(
                    'post_type' => 'eventos',
                    'posts_per_page' => 2,
                    'meta_query' => [
                        [
                            'key' => 'data',
                            'value' => date('Y-m-d'),
                            'type' => 'DATE',
                            'compare' => $filter == 'vai_rolar' ? '>=' : '<'
                        ]
                    ]
                ));
            ?>

            <?php if($eventos->have_posts()): ?>
                <ul>
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
                    <?php endwhile; wp_reset_query(); ?>
                </ul>
            <?php else: ?>
                <p class="empty">Nenhum evento...</p>
            <?php endif; ?>
        </div>
    </section>

    <section class="banner">
        <div class="wrapper">
            <img src="<?= $assets ?>/banner_03.webp" alt="">
        </div>
    </section>

    <section class="noticias">
        <div class="container">
            <h2 class="title">Notícias</h2>

            <?php
                $posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ));
            ?>

            <div class="blog">
                <?php while($posts->have_posts()):  $posts->the_post(); ?>
                    <a href="<?= get_the_permalink() ?>" class="news">
                        <div class="image">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title"><?= get_the_title() ?></h3>
                            <p class="text">
                                <?php 
                                    if(get_the_excerpt() == ""):
                                        echo strip_tags(substr(get_the_content(), 0, 155) . "...");
                                    else:
                                        echo get_the_excerpt();
                                    endif;
                                ?>
                                </p>
                            <span class="button">
                                Saiba mais <div class="arrow"><img src="<?= $assets; ?>/icons/arrow.svg" alt=""></div>
                            </span>
                        </div>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>