<?php /* Template Name: Minha Conta */ ?>

<?php get_header('shop'); ?>

<main class="account-page">

    <section class="account">
        <div class="container">
            <h2 class="title">Minha Conta</h2>
            <?= do_shortcode('[woocommerce_my_account]'); ?>
        </div>
    </section>

</main>

<?php get_footer(); ?>