<?php /* Template Name: Pagamento */ ?>

<?php get_header('shop'); ?>

<main class="checkout-page">

    <section class="checkout">
        <div class="container">
            <?= do_shortcode('[woocommerce_checkout]'); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>