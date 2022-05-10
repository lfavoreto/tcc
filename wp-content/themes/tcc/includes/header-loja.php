<header class="dark">
    <div class="container loja">
        <div class="hh">
            <a href="<?= $url; ?>/servicos" class="logo" title="Guardaí">
                <img src="<?= $assets; ?>/white-logo.webp" alt="">
                <h1 class="hidden">
                    Guardaí
                </h1>
            </a>
            <ul>
                <li><a href="<?= $url; ?>/servicos">Loja</a></li>
                <li><a href="<?= $url; ?>">Voltar para Home</a></li>
            </ul>
        </div>

        <div class="header__search">
            <?php echo do_shortcode('[fibosearch]'); ?>
        </div>

        <div class="menu">
            <a href="<?= $url ?>/minha-conta"><img src="<?= $assets; ?>/icons/loja/user.svg" alt=""></a>
            <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Veja seu carrinho' ); ?>">
                <img src="<?= $assets; ?>/icons/loja/cart.svg" alt="">
                <span class="number"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
            </a>
        </div>
    </div>
</header>