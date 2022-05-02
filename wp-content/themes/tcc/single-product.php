<?php get_header('shop'); ?>

<main class="single-product-page">


<?php $product = wc_get_product( get_the_ID() ); ?>


    <section class="content">
        <div class="container">
            <h2 class="title"><?= $product->get_title(); ?></h2>
            <?php wc_get_template_part( 'content', 'single-product' ); ?>
        </div>
    </section>

    <section class="related">
        <div class="container">
            <h2 class="title">Outros Produtos</h2>
            <?= do_shortcode('[products limit="4" columns="4" orderby="popularity" class="ll-produtos"]') ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>