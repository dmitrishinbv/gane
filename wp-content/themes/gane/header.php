<?php
global $theme_options;
$theme_options = get_option('theme_options');
global $theme_uri;
$theme_uri = get_template_directory_uri();
$title = get_bloginfo('name');
$body_class = '';

switch (get_post_meta($post->ID, '_wp_page_template', true)) {
    case "page-home.php":
        $title .= ' - Home';
        $body_class = 'home';
        break;
    case "page-blog.php":
        $title .= ' - News & Insights';
        $body_class = 'blog';
        break;
    case "page-contact.php":
        $title .= ' - Contact Us';
        $body_class = 'contact';
        break;
    default:
        $title .= ' - Individual News & Insights';
        $body_class = 'single-post';
}

if (is_category()) {
    $body_class = 'blog';
}
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="icon" type="image/png" href="<?php echo $theme_uri . '/images/favicon.png' ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
    <?php wp_head(); ?>
</head>

<body class="<?php echo $body_class; ?>">
<header>
    <div class="header__content d-flex justify-content-between">
        <div class="header__img">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo $theme_uri . '/images/logos/logo.svg'; ?>"
                                                         alt="Gane Energy Icon"></a>
        </div>
        <nav class="header__menu">
            <?php
            wp_nav_menu([
                'theme_location' => 'main_nav_menu',
                'container' => false,
                'menu_class' => 'header__menu__links d-flex flex-column justify-content-end align-items-end',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ]);
            ?>
        </nav>
    </div>
</header>
<div class="header__base"></div>
<div class="header__mask"></div>