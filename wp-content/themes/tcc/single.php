<?php get_header(); ?>

<main class="pageNoticias single">
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
        <div class="container">
            <div class="image">
                <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
            </div>
            <div class="box">
                <div class="content-box">
                    <?php 
                        echo get_the_content();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="relacionados">
        <div class="container">
            <?php
                $rel_posts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post__not_in' => array(get_the_ID()),
                    'category__in' => wp_get_post_categories(get_the_ID()),
                    'orderby' => 'date',
                ));
            ?>
            <h3 class="stitle">Eventos relacionados</h3>
            <div class="blog">
                <?php while($rel_posts->have_posts()):  $rel_posts->the_post(); ?>
                    <a href="<?= get_the_permalink() ?>" class="news">
                        <div class="image">
                            <img src="<?= get_the_post_thumbnail_url() ?>" alt="">
                        </div>
                        <div class="content">
                            <h3 class="title"><?= get_the_title() ?></h3>
                            <p class="text">
                                <?php 
                                    if(get_the_excerpt() == ""):
                                        echo strip_tags(substr(get_the_content(), 0, 55) . "...");
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