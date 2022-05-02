<?php /* Template Name: Passeios */ ?>

<?php get_header('shop'); ?>

<main class="products-page">

    <section class="products">
        <div class="container">
            <h2 class="title">Passeios</h2>
            <?= do_shortcode('[products limit="12" columns="4" class="ll-produtos" category="passeios"]'); ?>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>