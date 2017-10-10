<?php
/**
 * The header for theme
 *
 * This is the template that displays all of the <head>
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> <?php wp_title("", true); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

