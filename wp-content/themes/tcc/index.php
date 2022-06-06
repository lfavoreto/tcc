<?php get_header(); ?>

<main class="pageNoticias">

    <section class="head">
        <div class="box-imagem">
            <img src="<?= $assets; ?>/oceano.webp" alt="">
        </div>
        <div class="position">
            <div class="container">
                <?php include 'includes/breadcrumb.php'; ?>
                <h2 class="title">Notícias</h2>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="wrapper">
            <div class="container">
                <form role="search" action="<?= esc_url( home_url('noticias/') );?>" method="GET" class="form">
                    <h3 class="text">Faça sua busca agora mesmo!</h3>
                    <div class="campos">
                        <label for="s">
                            <input type="text" name="s" id="s" placeholder="Buscar">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </label>
                        <?php wp_dropdown_categories();?>
                    </div>
                </form>


                    <div class="list">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
                            <?php else: ?>
                                <span class="nto">
                                    Nenhuma notícia encontrada
                                </span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>