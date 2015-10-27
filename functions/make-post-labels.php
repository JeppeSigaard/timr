<?php 

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Nedtællinger';
    $submenu['edit.php'][5][0] = 'Nedtællinger';
    $submenu['edit.php'][10][0] = 'Tilføj nedtælling';
    $submenu['edit.php'][15][0] = 'Typer'; // Change name for categories
    $submenu['edit.php'][16][0] = 'Labels'; // Change name for tags
    echo '';
}

function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Nedtællinger';
        $labels->singular_name = 'Nedtælling';
        $labels->add_new = 'Tilføj nedtælling';
        $labels->add_new_item = 'Tilføj nedtælling';
        $labels->edit_item = 'Rediger nedtælling';
        $labels->new_item = 'Nedtælling';
        $labels->view_item = 'Se nedtælling';
        $labels->search_items = 'Søg nedtællinger';
        $labels->not_found = 'Ingen nedtællinger fundet :-(';
        $labels->not_found_in_trash = 'Ingen nedtællinger fundet i Papirkurven';
    }

add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );