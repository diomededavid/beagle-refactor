<?php

    namespace App\View\Composers;

    use Roots\Acorn\View\Composer;
    use WP_Query;

    /**
     * Composer for product data.
     */
    class Product extends Composer
    {
        /**
         * List of views served by this composer.
         *
         * @var array
         */
        protected static $views = [
            'single-product',
            'archive-product',
            // Add other relevant views here
        ];

        /**
         * Get product data.
         *
         * @return array
         */
        public function product(): array
        {
            $query = new WP_Query( [
                'meta_key' => '_thumbnail_id',
                'post_type' => 'product',
                'no_found_rows' => true,
            ] );

            return array_map( function ( $post ) {
                return [
                    'content' => apply_filters( 'the_content', $post->post_content ),
                    'thumbnail' => get_the_post_thumbnail( $post->ID, 'large' ),
                ];
            }, $query->posts );
        }
    }
