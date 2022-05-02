<?php /* Template Name: Quem Somos */ ?>

<?php get_header(); ?>

<main class="pageSobre">

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
    
    <section class="about">
        <div class="container">
            <div class="content">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius mauris mollis porta rhoncus. Pellentesque vehicula arcu quis risus finibus placerat. In lectus tellus, pretium sed dolor quis, luctus vestibulum ligula. Sed molestie, tortor eget rutrum pretium, eros eros luctus magna, sed bibendum est enim et augue. Nullam mattis, ipsum id vehicula porta, purus lacus venenatis odio, id finibus nisi libero a turpis. Etiam ac turpis finibus, ullamcorper velit non, semper orci. Duis posuere eros porttitor maximus vestibulum. Nulla elementum luctus gravida. Mauris a urna felis.
                </p>
                <p class="text">
                    Duis a ligula porttitor, maximus justo a, pharetra est. Cras congue augue lectus, et congue urna pulvinar efficitur. Ut erat nisi, volutpat at metus eu, feugiat tempus tellus. Vestibulum volutpat accumsan mauris sed tincidunt. Quisque nunc lacus, sollicitudin ut feugiat ac, semper ut ex.
                </p>
                <p class="text">
                    Duis a ligula porttitor, maximus justo a, pharetra est. Cras congue augue lectus, et congue urna pulvinar efficitur. Ut erat nisi, volutpat at metus eu, feugiat tempus tellus. Vestibulum volutpat accumsan mauris sed tincidunt. Quisque nunc lacus, sollicitudin ut feugiat ac, semper ut ex.
                </p>
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce varius mauris mollis porta rhoncus. Pellentesque vehicula arcu quis risus finibus placerat. In lectus tellus, pretium sed dolor quis, luctus vestibulum ligula. Sed molestie, tortor eget rutrum pretium, eros eros luctus magna, sed bibendum est enim et augue. Nullam mattis, ipsum id vehicula porta, purus lacus venenatis odio, id finibus nisi libero a turpis. Etiam ac turpis finibus, ullamcorper velit non, semper orci. Duis posuere eros porttitor maximus vestibulum. Nulla elementum luctus gravida. Mauris a urna felis.
                </p>
            </div>
        </div>
    </section>
    
    <section class="galeria">
        <div class="container">
            <h2 class="title">Galeria</h2>

            <div class="slider-principal">
                <div class="image"><img src="<?= $assets; ?>/canoa_2.webp" alt=""></div>
                <div class="image"><img src="<?= $assets; ?>/banner_02.webp" alt=""></div>
                <div class="image"><img src="<?= $assets; ?>/canoe.webp" alt=""></div>
                <div class="image"><img src="<?= $assets; ?>/stand-up-paddle.webp" alt=""></div>
                <div class="image"><img src="<?= $assets; ?>/banner_03.webp" alt=""></div>          
            </div>

            <div class="slider-nav">
                <div class="image"><img src="<?= $assets; ?>/canoa_2.webp" alt=""></div>
                <div class="image"><img src="<?= $assets; ?>/banner_02.webp" alt=""></div>
                <div class="image"><img src="<?= $assets; ?>/canoe.webp" alt=""></div>
                <div class="image"><img src="<?= $assets; ?>/stand-up-paddle.webp" alt=""></div>
                <div class="image"><img src="<?= $assets; ?>/banner_03.webp" alt=""></div>    
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>