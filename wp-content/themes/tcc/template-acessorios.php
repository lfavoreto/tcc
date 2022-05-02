<?php /* Template Name: Acessórios */ ?>

<?php get_header('shop'); ?>

<main class="products-page">

    <section class="products">
        <div class="container">
            <h2 class="title">Acessórios</h2>
            <?= do_shortcode('[products limit="12" columns="4" class="ll-produtos" category="acessorios"]'); ?>
        </div>
    </section>
    
</main>

<?php get_footer(); ?>