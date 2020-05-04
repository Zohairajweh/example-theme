<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php
    bloginfo('name');

    if($current_post_title=get_the_title()){
        echo '|'. $current_post_title;
    }
    ?>
    </title>
    <?php wp_head(); // ALL WP styles, scripts, meta, etc. will output here. ?>
</head>
<body>
    
<h1>
<?php
    bloginfo('name');

    if($current_post_title=get_the_title()){
        echo '|'. $current_post_title;
    }
    ?>
</h1>
<nav> 
<h2>website Navigation (main menu) </h2>
<?php 
wp_nav_menu(array('them_location'=>'Main Menu'));

?> </nav>
