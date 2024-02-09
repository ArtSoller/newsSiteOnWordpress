<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/gerb.jpg" type="image/x-icon">
    <!-- get_stylesheet_directory_uri() - функция абсолютного пути -->
    <?php wp_head() ?> <!-- подключает стили, скрипты и заголовок-->
</head>
<header class="page-header">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/img//kostil.jpg" width="55" height="55" class="round imgff">
        <h1 id="header">
            <a href="avtorization.php"><img src="<?php echo get_stylesheet_directory_uri() ?>/img//settings.jpg" width="35" height="35" class="round imgf" style="float: right; margin-right: 20px;"></a>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img//Account.jpg" width="35" height="35" class="round imgf">
            <a href="<?php echo site_url()?>" style="color: black;">
                <?php bloginfo('name')?>           
            </a>            
        </h1>
    </header>
<body class="page">



