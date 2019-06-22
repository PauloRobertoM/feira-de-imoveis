<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Ultimas {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'ultimas_register_meta_boxes'));
   }

   public function init() {
      $this->ultimas_post_type();
   }

   public function ultimas_post_type() {

      $labels = array(
         'name'                => _x( 'Últimas Edições', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Última Edição', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Últimas Edições', 'text_domain' ),
         'name_admin_bar'      => __( 'Últimas Edições', 'text_domain' ),
         'parent_item_colon'   => __( 'Última Edição pai:', 'text_domain' ),
         'all_items'           => __( 'Todas as edições', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar nova edição', 'text_domain' ),
         'add_new'             => __( 'Adicionar nova', 'text_domain' ),
         'new_item'            => __( 'Nova edição', 'text_domain' ),
         'edit_item'           => __( 'Ediar edição', 'text_domain' ),
         'update_item'         => __( 'Atualizar edição', 'text_domain' ),
         'view_item'           => __( 'Ver edição', 'text_domain' ),
         'search_items'        => __( 'Procurar edição', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'ultimas', 'text_domain' ),
         'description'         => __( 'Cadastro de Ultimas edições', 'text_domain' ),
         'labels'              => $labels,
         'supports'            => array( 'title', 'editor', ),
         'taxonomies'          => array( ),
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'menu_position'       => 5,
         'show_in_admin_bar'   => true,
         'show_in_nav_menus'   => true,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'page',
         'menu_icon'           => 'dashicons-calendar-alt',
      );

      register_post_type( 'ultimas', $args );
   }

   public function ultimas_register_meta_boxes( $meta_boxes ) {
      $prefix = 'ultimas_';
      $meta_boxes[] = array(
         'id' => '{$prefix}ano',
         'title' => 'Ano da Edição',
         'post_types' => array( 'ultimas' ),
         'context' => 'advanced',
         'priority' => 'default',
         'autosave' => 'false',
         'fields' => array(
            array(
               'id' => "{$prefix}ano",
               'type' => 'number',
               'name' => null,
            ),
         ),
      );
      return $meta_boxes;
   }
}