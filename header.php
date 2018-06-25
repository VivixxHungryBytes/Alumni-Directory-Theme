<!DOCTYPE html>
<html <?php language_attributes();?> >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php wp_title(''); echo ' | ';  bloginfo( 'name' ); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php $hero=get_field('section-1','options') ?>
    <div class="wrapper" style="background:url(<?php echo $hero['background'] ?>)!important;">
        <div id="header">
            <nav class="navbar-nav navbar-expand-lg">
                <div class="container">
                    <?php $logo = get_field('logo','options'); ?>
                    <div id="logo">
                        <img src="<?php echo $logo ?>">
                    </div>
                    <div id="divider">
                        <h1> | </h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menu">
                        <?php wp_nav_menu(); ?>
                    </div>
                    <div id="socials">
                        <ul>
                            <li><a href="#" class="fab fa-facebook"></a></li>
                            <li><a href="#" class="fab fa-twitter"></a></li>
                            <li><a href="#" class="fab fa-github"></a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>

                </div>
            </nav>
        </div>