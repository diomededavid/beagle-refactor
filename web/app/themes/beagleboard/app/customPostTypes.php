<?php
    namespace App;

    add_action('init', 'App\my_cpt_init');

function my_cpt_init()
{
    register_extended_post_type('product', [

        # Add the post type to the site's main RSS feed:
        'show_in_feed'  => true,
        'taxonomies'    => [ 'category' ],
        'has_archive'   => false,
        'show_in_rest' => true,
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt'],

        # Show all posts on the post type archive:
        'archive' => [
            'nopaging'  => true
        ]
    ], [

        # Override the base names used for labels:
        'singular'      => 'Board',
        'plural'        => 'Board Selection',
        'slug'          => 'boards'
    ]);
    register_extended_post_type('project', [

        # Add the post type to the site's main RSS feed:
        'show_in_feed'  => true,
        'taxonomies'    => [ 'category' ],
        'has_archive'   => true,
        'show_in_rest' => true,
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt'],
        'public'    =>  true,
        'menu_position' =>  5,
        'capability_type' => array('project','projects'),
        'map_meta_cap'  => true,

        # Show all posts on the post type archive:
        'archive' => [
            'nopaging'  => true
        ]
    ], [

        # Override the base names used for labels:
        'singular'      => 'Project',
        'plural'        => 'Projects',
        'slug'          => 'projects'
    ]);
    register_extended_post_type('distros', [

        # Add the post type to the site's main RSS feed:
        'show_in_feed'  => true,
        'taxonomies'    => [ 'category' ],
        'has_archive'   => false,
        'public'       => true,
        'show_in_rest' => true,
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt'],


        # Show all posts on the post type archive:
        'archive' => [
            'nopaging'  => true
        ]
    ], [

        # Override the base names used for labels:
        'singular'      => 'Distro',
        'plural'        => 'Distros',
        'slug'          => 'distros'
    ]);
    register_extended_post_type('book', [

        # Add the post type to the site's main RSS feed:
        'show_in_feed'   => true,
        'has_archive'   => true,
        'taxonomies'    => [ 'category' ],
        'supports'      => ['title', 'editor', 'thumbnail', 'excerpt'],


        # Show all posts on the post type archive:
        'archive' => [
            'nopaging'   => true
        ],
    ], [

        # Override the base names used for labels:
        'singular'      => 'Book',
        'plural'        => 'Books',
        'slug'          => 'books'
    ]);
};

register_activation_hook(__FILE__, '\my_rewrite_flush');
function my_rewrite_flush()
{
    my_cpt_init();
    flush_rewrite_rules();
}
