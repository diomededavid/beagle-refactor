<?php
    namespace App;

    add_action('init', 'App\my_cpt_init');

    function my_cpt_init()
    {
        // Product (Board)
        register_post_type('product', [
            'label' => 'Board Selection',
            'labels' => [
                'singular_name' => 'Board',
                'name' => 'Board Selection',
            ],
            'public' => true,
            'has_archive' => false,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'taxonomies' => ['category'],
            'rewrite' => ['slug' => 'boards'],
        ]);

        // Project
        register_post_type('project', [
            'label' => 'Projects',
            'labels' => [
                'singular_name' => 'Project',
                'name' => 'Projects',
            ],
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'taxonomies' => ['category'],
            'menu_position' => 5,
            'capability_type' => ['project', 'projects'],
            'map_meta_cap' => true,
            'rewrite' => ['slug' => 'projects'],
        ]);

        // Distros
        register_post_type('distros', [
            'label' => 'Distros',
            'labels' => [
                'singular_name' => 'Distro',
                'name' => 'Distros',
            ],
            'public' => true,
            'has_archive' => false,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'taxonomies' => ['category'],
            'rewrite' => ['slug' => 'distros'],
        ]);

        // Book
        register_post_type('book', [
            'label' => 'Books',
            'labels' => [
                'singular_name' => 'Book',
                'name' => 'Books',
            ],
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,
            'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
            'taxonomies' => ['category'],
            'rewrite' => ['slug' => 'books'],
        ]);
    }

    register_activation_hook(__FILE__, '\App\my_rewrite_flush');
    function my_rewrite_flush()
    {
        my_cpt_init();
        flush_rewrite_rules();
    }
