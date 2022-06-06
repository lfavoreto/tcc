<?php /* Template Name: Contatos */ ?>

<?php get_header(); ?>

<main class="pageContatos">

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

    <section class="content">
        <div class="wrapper">
            <div class="container">
                <div class="left">
                    <h3 class="title">Envie uma mensagem</h3>
                    <form action="" class="form">
                        <div class="campo">
                            <label for="" class="label">Nome:</label>
                            <input type="text" class="input">
                        </div>

                        <div class="campo">
                            <label for="" class="label">E-mail:</label>
                            <input type="email" class="input">
                        </div>

                        <div class="campo">
                            <label for="" class="label">Assunto:</label>
                            <select name="" id="" class="input">
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="campo">
                            <label for="" class="label">Mensagem:</label>
                            <textarea name="" id="" class="input textarea"></textarea>
                        </div>

                        <div class="box-button">
                            <button class="button">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="right">
                    <h3 class="title">Se preferir fale por:</h3>
                    <ul>
                        <li>
                            <div class="icon">
                                <img src="<?= $assets; ?>/icons/contato/telefone.svg" alt="">
                            </div>
                            <div class="text">
                                Atendimento
                                <a href="tel:+5513000000000" class="number">(13) 00000-0000</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?= $assets; ?>/icons/contato/whatsapp.svg" alt="">
                            </div>
                            <div class="text">
                                Fale conosco
                                <a href="https://wa.me/5513000000000" target="_blank" class="number">(13) 00000-0000</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="<?= $assets; ?>/icons/contato/email.svg" alt="">
                            </div>
                            <div class="text">
                                <a href="mailto:contato@guardai.com.br" class="number">contato@guardai.com.br</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29164.671078209165!2d-46.30862794783934!3d-23.975150341212967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1650939802230!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
</main>

<?php get_footer(); ?>