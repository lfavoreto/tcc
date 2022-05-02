<?php /* Template Name: Produtos */ ?>

<?php get_header('shop'); ?>

<main class="products-page">

    <section class="products">
        <div class="container">
            <h2 class="title">Produtos</h2>
            <?= do_shortcode('[products limit="12" columns="4" class="ll-produtos" category="produtos"]'); ?>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>