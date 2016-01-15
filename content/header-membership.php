<?php
/**
 * The theme header without the visible header.
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php template_part($theme->content_sub_path.'/head'); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/style.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/stylesheets/owl.carousel.css">


<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>      
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.4/semantic.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/javascript/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri() ?>/javascript/main.js"></script>
</head>
<body class="membership" <?php body_class('public-page'); ?>>
  <?php 
    $menu = 'membership';
    include '_menu.php'; 
  ?>