<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>

    <title>Guardaí</title>
</head>

    <?php 
        global $url;
        global $assets;

        $assets = get_template_directory_uri().'/assets/dist/img'; 
        $url = get_home_url();
    ?>

<body>