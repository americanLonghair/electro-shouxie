<?php
/**
 * electro engine room
 *
 *@package electro
 */

/**
 * Initialize all the thins.
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */

?>

<!--
这段 PHP 代码是一个 WordPress 主题的初始化文件，主要功能是引入主题所需的初始化文件，并包含一些注释说明。

让我来解释一下其中的几个关键部分：

require get_template_directory() . '/inc/init.php';：这行代码引入了主题所需的初始化文件 init.php。
通常，初始化文件用于设置主题的功能、加载所需的资源和注册必要的 WordPress 钩子和过滤器等。

注释部分 /** Initialize all the thins. */：这是一个注释，用于说明下面的代码将执行初始化操作。

注释部分 Note: Do not add any custom code here.
Please use a child theme so that your customizations aren't lost during updates.：
这是一个提示，建议不要在这个文件中添加任何自定义代码。
相反，应该使用子主题来添加自定义代码，以确保在主题更新时自定义内容不会丢失。

总的来说，这个文件的作用是引入主题的初始化文件，并提供了一些关于如何添加自定义代码的建议。
-->