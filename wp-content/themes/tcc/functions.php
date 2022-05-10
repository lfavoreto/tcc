<?php

// Removendo a barra de admin do Wordpress
add_filter('show_admin_bar', '__return_false');

// Adicionando folhas de estilos e scripts
include('config/style.php');

// Adicionando posts personalizados
function post_types() {
  register_post_type('eventos', array(
    'labels' => array(
      'name' => 'Eventos',
      'singular_name' => 'Evento',
      'add_new_item' => 'Adicionar novo Evento'
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array(''),
    'menu_icon' => 'dashicons-category'
  ));
}

add_action('init', 'post_types');

// Definindo um campo personalizado como Título da Postagem
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

// Removendo campo "Notas adicionais" da página de finalização de compra
add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );



// Removendo campo "Nome da Empresa" dos dados pessoais do cliente
function remove_company_name( $fields ) {
  unset($fields['billing']['billing_company']);
  return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'remove_company_name' );

// Billing Fields.
add_filter( 'woocommerce_billing_fields', 'custom_woocommerce_billing_fields' );
function custom_woocommerce_billing_fields( $fields ) {
    $fields['billing_address_2']['label'] = 'Address 2';
    $fields['billing_address_2']['label_class'] = '';
    
    return $fields;
}

add_filter( 'woocommerce_default_address_fields', 'custom_override_address2_label', 200000, 1 );

function custom_override_address2_label( $address_fields ) {
	$address_fields['address_2']['label'] = $address_fields['address_2']['placeholder'] = 'Complemento';

	return $address_fields;
}

add_action( 'admin_menu', 'change_post_menu_label' );

function change_post_menu_label() {
    global $menu;
    global $submenu;

    $menu[5][0] = 'Notícias';
    $submenu['edit.php'][5][0] = 'Notícias';
    $submenu['edit.php'][10][0] = 'Adicionar notícia';
    $submenu['edit.php'][16][0] = 'Tags de Notícias';
    echo '';
}

// CUSTOMIZE ADMIN MENU ORDER

function custom_menu_order($menu_ord) {

  if (!$menu_ord) return true;

  return array(
   'edit.php?post_type=shop_order',
);

  }

  add_filter('custom_menu_order', 'custom_menu_order');

  add_filter('menu_order', 'custom_menu_order');