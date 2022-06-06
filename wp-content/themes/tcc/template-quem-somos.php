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
                    Com o objetivo de minimizar o estresse diário e também pela possibilidade de praticar uma atividade física em ambiente aberto, com mais liberdade, é que os alunos da Guardaí recorrem ao esporte. Outros benefícios que a modalidade proporciona são: bom condicionamento físico, aprimora a concentração E desenvolve o espírito de equipe.
                </p>
                <p class="text">
                    Nossa guardaria tem uma das mais privilegiadas localizações de toda a baixada, bastando atravessar a rua para colocar o "pé na areia".
                </p>
                <p class="text">
                    A praia tem águas protegidas, perfeita para aprender SUP, ou iniciação à canoagem havaiana.
                </p>
                <p class="text">
                    Além de seu barco estar em boas mãos, a microregião possui ótima infraestrutura, com padaria, restaurantes, pousadas e estacionamentos.
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