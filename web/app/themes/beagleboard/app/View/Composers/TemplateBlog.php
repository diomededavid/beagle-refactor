<?php

    namespace App\View\Composers;

    use Roots\Acorn\View\Composer;
    use WP_Query;

    class TemplateBlog extends Composer
    {
        /**
         * List of views served by this composer.
         *
         * @var array
         */
        protected static $views = [
            // Add the Blade view(s) this composer should be attached to, e.g.:
            'template-blog', 'partials.content'
        ];

        /**
         * Data to be passed to view before rendering.
         *
         * @return array
         */
        public function with()
        {
            return [
                'blogArchive' => $this->blogArchive(),
            ];
        }

        protected function blogArchive(): WP_Query
        {
            $args = [
                'post_type' => 'post',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby' => 'publish_date',
                'order' => 'DESC'
            ];

            return new WP_Query($args);
        }
    }
