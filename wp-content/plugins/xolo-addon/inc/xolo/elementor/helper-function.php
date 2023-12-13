<?php
/*
 * Get Taxonomy
 * return array
 */
if( !function_exists('xolo_get_taxonomies') ){
    function xolo_get_taxonomies( $xolo_texonomy = 'category' ){
        $terms = get_terms( array(
            'taxonomy' => $xolo_texonomy,
            'hide_empty' => true,
        ));
        $options = array();
        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            foreach ( $terms as $term ) {
                $options[ $term->slug ] = $term->name;
            }
            return $options;
        }
    }
}

/*
 * Get Post Type
 * return array
 */
if( !function_exists('xolo_get_post_types') ){
    function xolo_get_post_types( $args = [] ) {
        $post_type_args = [
            'show_in_nav_menus' => true,
        ];
        if ( ! empty( $args['post_type'] ) ) {
            $post_type_args['name'] = $args['post_type'];
        }
        $_post_types = get_post_types( $post_type_args , 'objects' );

        $post_types  = [];
        foreach ( $_post_types as $post_type => $object ) {
            $post_types[ $post_type ] = $object->label;
        }
        return $post_types;
    }
}




