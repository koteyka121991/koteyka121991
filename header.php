<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Официальный сайт Техноторг</title>
    
<?php wp_head(  ); ?>
</head>

<body>

    <div class="wrapper">
        <div class="header">
            <div class="container">

                <div class="header_menu">
                    <div class="menu-burger">
                        <span></span>
                    </div>

                    <div class="header__info-block">
                        <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo wp_get_attachment_image_url( carbon_get_theme_option( 'site_logo') ) ; ?>"></a></div>
                        <div class="header__contacts-block">
                            <a href="header__contact">г. Волжский, ул. Кирова 19, каб. 107</a>
                        </div>
                        <div class="header__contacts-block">
                            <ul>
                                <li><a href="tel:+79093830775">8 (909) 383-07-75</a></li>
                                <li><a href="tel:+79033769087">8 (903) 376-90-87</a></li>
                            </ul>
                        </div>
                        <div class="button">
                            <a class="header__btn" href="#">Обратный звонок</a>
                        </div>
                    </div>
                    <div class="header__menu">

                        <ul class="header__list">
                            <?php
                        wp_nav_menu( [
	'theme_location'  => 'menu_main_header',
	'menu'            => '',
	'container'       => 'div',
	'container_class' => '',
	'container_id'    => '',
	'menu_class'      => 'header__list',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '*',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
] );
?>
                           
                        </ul>
                        <!-- контакты на мобильном -->
                        <div class="menu-burger__contacts">
                            <img src="img/icon/1.png">
                            <a href="tel:+79093830775">8 (909) 383-07-75</a>
                        </div>
                        <div class="menu-burger__contacts">
                            <img src="img/icon/1.png">
                            <a href="tel:+79033769087">8 (903) 376-90-87</a><br>
                            <a href="#">Обратный звонок</a>
                        </div>

                        <div class="menu-burger__contacts">
                            <img src="img/icon/2.png">

                            <a href="geo:48.810521023520735,44.7506398879949">г. Волжский, ул.Кирова 19, каб. 107</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>