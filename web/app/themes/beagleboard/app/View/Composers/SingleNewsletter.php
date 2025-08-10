<?php

    namespace App\View\Composers;

    use Roots\Acorn\View\Composer;
    use WP_Query;

    /**
     * Composer for single newsletter data.
     */
    class SingleNewsletter extends Composer
    {
        /**
         * List of views served by this composer.
         *
         * @var array
         */
        protected static $views = [
            'single-newsletter',
        ];

        /**
         * Get the latest newsletter post.
         *
         * @return \WP_Query
         */
        public function newsletterSingle(): WP_Query
        {
            $args = [
                'post_type' => 'post',
                'category_name' => 'newsletter',
                'posts_per_page' => 1,
                'post_status' => 'publish',
                'orderby' => 'publish_date',
                'order' => 'DESC',
            ];

            return new WP_Query( $args );
        }
    }
