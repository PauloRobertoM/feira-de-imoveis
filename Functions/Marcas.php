<?php if (! defined('ABSPATH')) exit('No direct script access allowed');

class Marcas {

   public function __construct() {
      add_action('init', array($this, 'init'), 0);
      add_filter('rwmb_meta_boxes', array($this, 'marcas_register_meta_boxes'));
   }

   public function init() {
      $this->marcas_post_type();
   }

   public function marcas_post_type() {

      $labels = array(
         'name'                => _x( 'Marcas', 'Post Type General Name', 'text_domain' ),
         'singular_name'       => _x( 'Marca', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'           => __( 'Marcas', 'text_domain' ),
         'name_admin_bar'      => __( 'Marcas', 'text_domain' ),
         'parent_item_colon'   => __( 'Marca pai:', 'text_domain' ),
         'all_items'           => __( 'Todas as marcas', 'text_domain' ),
         'add_new_item'        => __( 'Adicionar nova marca', 'text_domain' ),
         'add_new'             => __( 'Adicionar nova', 'text_domain' ),
         'new_item'            => __( 'Nova marca', 'text_domain' ),
         'edit_item'           => __( 'Editar marca', 'text_domain' ),
         'update_item'         => __( 'Atualizar marca', 'text_domain' ),
         'view_item'           => __( 'Ver marca', 'text_domain' ),
         'search_items'        => __( 'Procurar marca', 'text_domain' ),
         'not_found'           => __( 'Não encontrado', 'text_domain' ),
         'not_found_in_trash'  => __( 'Não encontrado na lixeira', 'text_domain' ),
      );
      $args = array(
         'label'               => __( 'marcas', 'text_domain' ),
         'description'         => __( 'Cadastro de marcas', 'text_domain' ),
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
         'menu_icon'           => 'dashicons-star-filled',
      );

      register_post_type( 'marcas', $args );

   }

   public function marcas_register_meta_boxes( $meta_boxes ) {
      $prefix = 'marca_';
      $meta_boxes[] = array(
         'id'         => "{$prefix}foto",
         'title'      => 'Foto Principal da Marca',
         'post_types' => array( 'marcas' ),
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
      $meta_boxes[] = array(
         'id'         => "{$prefix}tipo",
         'title'      => 'Tipo de Marca',
         'post_types' => array( 'marcas' ),
         'context'    => 'normal',
         'priority'   => 'high',
         'autosave'   => true,
         'fields'     => array(
            array(
               'id'           => "{$prefix}tipo",
               'name'         => null,
               'type'         => 'radio',
               'force_delete' => false,
               'desc'         => 'Selecione o tipo de Marca',
               'placeholder'  => 'Selecione o tipo de Marca',
               'options'      => array(
                  'Patrocínio Master'     => 'Patrocínio Master',
                  'Patrocínio Secundário' => 'Patrocínio Secundário',
                  'Organização'           => 'Organização',
                  'Realização'            => 'Realização',
               ),
               'inline' => 'true',
            ),
         )
      );
      
      return $meta_boxes;
   }

}