<?php /* Template Name: Carrinho */ ?>

<?php get_header('shop'); ?>

<main class="cart-page">

    <section class="cart">
        <div class="container">
            <?= do_shortcode('[woocommerce_cart]'); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>