<?php get_header(); ?>

<main class="pageNoticias">

    <section class="head">
        <div class="box-imagem">
            <img src="<?= $assets; ?>/oceano.webp" alt="">
        </div>
        <div class="position">
            <div class="container">
                <?php include 'includes/breadcrumb.php'; ?>
                <h2 class="title"><?= get_the_title(); ?></h2>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="wrapper">
            <div class="container">
                <form action="#" class="form">
                    <h3 class="text">Faça sua busca agora mesmo!</h3>
                    <div class="campos">
                        <input type="text" placeholder="Buscar">
                        <select name="" id="">
                            <option value="">Categorias</option>
                        </select>
                    </div>
                </form>

                <?php
                    $posts = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                    ));
                ?>

                    <?php if($posts->have_posts()): ?>
                        <div class="list">
                            <?php while($posts->have_posts()): $posts->the_post(); ?>
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
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>