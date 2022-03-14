<?php

/*
actions
 */

function project_name_init()
{
    register_taxonomy('recettes', 'post', [
        'labels' => [
            'name' => 'Recettes',
            'singular_name' => 'Recette',
            'plural_name' => 'Recettes',
            'search_items' => 'Rechercher des recettes',
            'all_items' => 'Toutes les recettes',
            'edit_item' => 'Editer la recette',
            'update_item' => 'Mettre à jour la recette',
            'add_new_item' => 'Ajouter une nouvelle recette',
            'new_item_name' => 'Ajouter une nouvelle recette',
            'menu_name' => 'Recettes',
        ],
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'has_archive' => true,
        'show_in_admin_bar' => true,
    ]);
}
function project_name_supports()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ]);
    // register_nav_menu('main_nav', 'menu principal');
    register_nav_menus([
        'main_nav' => 'menu principal',
        'carte-pizz' => 'menu de la carte',
        'menu-social' => 'liens sociaux',
    ]);

/*
ajut d un format d image supplementaire.
add_image_size('post-thumbnail', 350, 215, true);
 */

}

function project_name_register_assets()
{
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], false, true);

    wp_enqueue_style('project_name_style', get_stylesheet_uri());
}

/*
filtres
 */

function project_name_menu_link_class(array $classes)
{
    $classes['class'] = '';
    return $classes;
}

/* Autoriser les fichiers SVG */
function project_name_mime_types(array $mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_action('init', 'project_name_init');
add_action('after_setup_theme', 'project_name_supports');
add_action('wp_enqueue_scripts', 'project_name_register_assets');
add_filter('nav_menu_link_attributes', 'project_name_menu_link_class');

add_filter('upload_mimes', 'project_name_mime_types');

require_once 'metaboxes/FreeMetaboxe.php';

FreeMetaboxe::register();
