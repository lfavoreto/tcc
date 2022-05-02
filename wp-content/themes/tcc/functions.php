<?php

// REMOVE ADMIN BAR
add_filter('show_admin_bar', '__return_false');

// STYLES AND SCRIPTS
include('config/style.php');

// CUSTOM POST TYPE
function post_types() {
  register_post_type('eventos', array(
    'labels' => array(
      'name' => 'Eventos',
      'singular_name' => 'Evento',
      'add_new_item' => 'Adicionar nova Evento'
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array(''),
    'menu_icon' => 'dashicons-category'
  ));
}

function post_title($id) {
    if(get_post_type($id) == 'eventos') {
        $post = array();
    
        $title = get_field('titulo');

        $post['ID'] = $id;
        $post['post_title'] = $title;

        wp_update_post($post);
    }
}

add_action('acf/save_post', 'post_title');

add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
add_filter( 'woocommerce_checkout_fields' , 'remove_company_name' );

function remove_company_name( $fields ) {
  unset($fields['billing']['billing_company']);
  return $fields;
}

add_action('init', 'post_types');