<?php

function project_name_init()
{
    register_taxonomy('albums', 'post', [
        'labels' => [
            'name' => 'Album',
            'singular_name' => 'Album',
            'plural_name' => 'Albums',
            'search_items' => 'Rechercher des albums',
            'all_items' => 'Tous les albums',
            'edit_item' => 'Editer l\'album',
            'update_item' => 'Mettre à jour l\'album',
            'add_new_item' => 'Ajouter un nouvel album',
            'new_item_name' => 'Ajouter un nouvel album',
            'menu_name' => 'Albums',
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
    ]);
    register_nav_menus([
        'main_nav' => 'menu principal',
        'menu_sociaux' => 'liens sociaux',
    ]);

    /*
ajut d un format d image supplementaire.
add_image_size('post-thumbnail', 350, 215, true);
 */

}

function project_name_register_assets()
{
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', [], false, true);

    wp_enqueue_style('project_name_style', get_stylesheet_uri());
}

function project_name_title_separator()
{
    return '|';
}

function project_name_pagination()
{
    $pages = paginate_links(['type' => 'array']);
    if ($pages === null) {
        return;
    }
    echo '<nav aria-label="Pagination" class="pagination-links">';
    echo '<ul>';
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = '';
        if ($active) {
            $class .= 'active-link';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', '', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';

}

function project_name_menu_link_class(array $classes)
{
    $classes['class'] = '';
    return $classes;
}

/* Autoriser les fichiers SVG */
function project_name_mime_types(array $mimes)
{
    $mimes['svg'] = 'image/svg';
    return $mimes;
}

add_action('init', 'project_name_init');
add_action('after_setup_theme', 'project_name_supports');
add_action('wp_enqueue_scripts', 'project_name_register_assets');
add_filter('document_title_separator', 'project_name_title_separator');
add_filter('nav_menu_link_attributes', 'project_name_menu_link_class');
add_filter('upload_mimes', 'project_name_mime_types');

require_once 'metaboxes/ImpMetaboxe.php';

ImpMetaboxe::register();

//-----------------------------------------------------------------------
