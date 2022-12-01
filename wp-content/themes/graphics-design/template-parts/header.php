<!doctype html>
<html <?php language_attributes(); ?>">
<head>
    <?php wp_head(); ?>
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo('title'); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri().'/assets/images/apple-touch-icon.png' ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri().'/assets/images/favicon-32x32.png' ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri().'/assets/images/favicon-16x16.png' ?>">
    <link rel="manifest" href="<?php echo get_template_directory_uri().'/assets/images/site.webmanifest' ?>">
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--====== PRELOADER PART START ======-->
<?php get_template_part('template-parts/preloader') ?>
<!--====== PRELOADER PART ENDS ======-->