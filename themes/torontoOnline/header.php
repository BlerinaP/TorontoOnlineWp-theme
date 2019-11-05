<!DOCTYPE html>
<html lang=<?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wordpress PSD Theme Development</title>
</head>
<body>

    <div id="page">
        <header id="masthead" class="site-header" role="banner">
            <div class="container">
                <div class="logo">
                   <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.svg">
                   </a>
                </div>
            </div>
        </header>
       <div class="container content">