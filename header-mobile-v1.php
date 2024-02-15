<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package electro
 *
 *
    这段代码是一个WordPress主题的头部文件，主要负责显示整个<head>部分以及<div id="content">之前的内容。
 *  它通常包括了网站的标题、描述、样式表链接、JavaScript引用等内容，以及一些必要的WordPress函数调用。

    具体来说，这段代码执行以下功能：

    1.开始一个PHP标签，并包含了一个注释，说明这个文件是主题的头部文件，负责显示<head>部分。

    2.设置了主题的包名为"electro"，用于标识这个主题。

    3.包含了WordPress主题的头部标准注释，说明这是一个WordPress主题的头部文件。
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>><!-- 通过php代码配置html的属性值，具体是语言属性 -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    wp_body_open();
    ?>
<div class="off-canvas-wrapper w-100 position-relative"><!-- 外层div盒子只有开始标签没有结束标签，
                                                            因为本php文件是header部分，
                                                            div等标签的结束标签写在别的php文件中
                                                        -->
<div id="page" class="hfeed site">
    <?php
    /**
     * @hooked electro_skip_links - 0
     * @hooked electro_top_bar - 10
     */
    do_action( 'electro_before_header' ); //钩子函数执行electro_before_header相关代码 ?>

    <?php if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'header' ) ) : ?>

    <header id="masthead" class="site-header">
        <div class="container">
            <div class="mobile-header-v1 row align-items-center handheld-stick-this">
                <?php
                /**
                 * @hoocked electro_row_wrap_start - 0
                 * @hoocked electro_header_logo - 10
                 * @hoocked electro_primary_menu - 20
                 * @hoocked electro_header_support_info - 30
                 * @hoocked electro_row_wrap_end - 40
                 */
                do_action( 'electro_mobile_header_v1' ); //钩子函数执行electro_mobile_header_v1相关代码，主要实现以上注释中的几个功能如logo，主菜单，支持信息等 ?>

            </div>
        </div>
    </header><!-- #masthead -->

    <?php endif; ?>




