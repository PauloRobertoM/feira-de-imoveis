<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Programacaos {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'programacaos_register_meta_boxes'));
   }

   public function init() {
      $this->programacaos_post_type();
   }

   public function programacaos_post_type() {

      $labels = array(
         'name'                => _x( 'Programações', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Programação', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Programações', 'text_domain' ),
         'name_admin_bar'      => __( 'Programações', 'text_domain' ),
         'parent_item_colon'   => __( 'Programação pai:', 'text_domain' ),
         'all_items'           => __( 'Todos as programações', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar nova programação', 'text_domain' ),
         'add_new'             => __( 'Adicionar nova', 'text_domain' ),
         'new_item'            => __( 'Nova programação', 'text_domain' ),
         'edit_item'           => __( 'Ediar programação', 'text_domain' ),
         'update_item'         => __( 'Atualizar programação', 'text_domain' ),
         'view_item'           => __( 'Ver programação', 'text_domain' ),
         'search_items'        => __( 'Procurar programação', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'programacaos', 'text_domain' ),
         'description'         => __( 'Cadastro das programações', 'text_domain' ),
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
         'menu_icon'           => 'dashicons-media-spreadsheet',
      );

      register_post_type( 'programacaos', $args );

   }

   public function programacaos_register_meta_boxes( $meta_boxes ) {
      $prefix = 'programacaos_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto Principal da Programação',
         'post_types' => array( 'programacaos' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'               => "{$prefix}foto",
               'name'             => null,
               'type'             => 'image_advanced',
               'force_delete'     => false,
               'desc'             => 'Adicionar foto Principal',
               'max_file_uploads' => 1,
            ),
         )
      );
      return $meta_boxes;
   }
}