<?php
/**
 * Header.php is generally used on all the pages of your site and is called somewhere near the top
 * of your template files. It's a very important file that should never be deleted.
 *
 * @package dangopress
 */ ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11" >
<title><?php wp_title('-', true, 'right'); ?></title> 
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width" />
<meta http-equiv="x-dns-prefetch-control" content="on">
<?php wp_head(); ?>   
</head>

<body <?php body_class(); ?>>
<div id="page">
    <div id="header">
        <div class="container clearfix">
            <h1 class="logo">
                <a class="sprite" href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </h1>

            <div id="mobile-menu"><i class="icon-list"></i></div>

            <?php wp_nav_menu(array('theme_location' => 'primary', 'container_class' => 'header-menu')); ?>

            <div class="search-box">
                <form method="get" id="search-form" class="search-form" action="<?php bloginfo('url'); ?>/">
                    <input type="text" name="s" class="search-input" size="15">
                    <button type="submit" alt="search" class="search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
        </div>
    </div>

    <div id="content">
    <div class="container clearfix">
        <div id="primary"><?php dangopress_breadcrumb(); ?>