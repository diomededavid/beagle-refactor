<?php

    namespace App\View\Composers;

    use Roots\Acorn\View\Composer;

    /**
     * Composer for the front page.
     */
    class FrontPage extends Composer
    {
        /**
         * List of views served by this composer.
         *
         * @var array
         */
        protected static $views = [
            'front-page',
        ];

        /**
         * The ACF field for external URL.
         *
         * @var string
         */
        protected $acf = 'external_url';

        /**
         * Get board selection page.
         *
         * @return \WP_Query
         */
        public function boardSelection(): \WP_Query
        {
            $args = [
                'post_name__in' => [ 'board-selection' ],
                'meta_key' => '_thumbnail_id',
                'post_type' => 'page',
                'post_status' => 'publish',
                'ignore_sticky_posts' => 1,
                'no_found_rows' => true,
                'cache_results' => true,
            ];

            return new \WP_Query( $args );
        }

        /**
         * Get featured sections.
         *
         * @return \WP_Query
         */
        public function featuredSections(): \WP_Query
        {
            $args = [
                'post_type' => 'page',
                'post_name__in' => [ 'educate', 'collaborate', 'learn', 'getting-started' ],
                'meta_key' => '_thumbnail_id',
                'post_status' => 'publish',
                'orderby' => 'menu_order',
                'no_found_rows' => true,
                'cache_results' => true,
            ];

            return new \WP_Query( $args );
        }

        /**
         * Get the author's full name.
         *
         * @return string
         */
        public function theAuthor(): string
        {
            return get_the_author_meta( 'first_name' ) . get_the_author_meta( 'last_name' );
        }

        /**
         * Get featured posts.
         *
         * @return \WP_Query
         */
        public function featuredPosts(): \WP_Query
        {
            $args = [
                'post_type' => 'post',
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'meta_key' => '_thumbnail_id',
                'orderby' => 'publish_date',
                'order' => 'DESC',
                'no_found_rows' => true,
            ];

            return new \WP_Query( $args );
        }
    }
