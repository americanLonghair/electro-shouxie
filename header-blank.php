<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package electro
 *
 * 这是electro主题的header部分
 *
 * 显示全部<head>部分的相关代码，直到进入<div id="content">标签
 */

remove_action( 'electro_before_content', 'electro_navbar', 10 );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); //标签属性嵌入php代码配置charset字符集 ?>">
<meta name="viewport" content="width=device-width, initial-scale=1"><!--
class 只能使用空格隔开多个名称
而meta name="keywords"标签可以使用很多各种符号的，没什么限制
而类似，<meta http-equiv 这种是可以使用逗号以及分号表示多个属性
问题链接：https://ask.csdn.net/questions/346391
-->
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head><!-- 使用wp_head()函数生成页面head -->

<body <?php body_class(); ?>><!-- body标签的class属性由php代码生成。
由于该php文件只负责页面的header部分，所以body标签只有开始标签没有结束标签
包括下面的div标签也都只有开始标签没有结束标签
-->
    <?php
    wp_body_open();
    ?>
<div class="off-canvas-wrapper w-100 position-relative">
<div id="page" class="hfeed site">

    <?php do_action( 'electro_before_content' ); //钩子函数执行electro_before_content相关代码  ?>

    <div id="content" class="site-content" tabindex="-1">
        <div class="container">

        <?php
        /**
         * @hooked woocommerce_breadcrumb - 10
         */
        do_action( 'electro_content_top' ); //钩子函数执行electro_content_top相关代码 ?>

<!--
    本php文件负责生成页面的header部分，故body标签，div标签等标签均只有开始标签而没有结束标签
 -->









