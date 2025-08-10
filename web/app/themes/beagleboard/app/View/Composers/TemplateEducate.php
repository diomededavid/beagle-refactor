<?php

    namespace App\View\Composers;

    use Roots\Acorn\View\Composer;
    use WP_Query;

    class TemplateEducate extends Composer
    {
        /**
         * List of views served by this composer.
         *
         * @var array
         */
        protected static $views = [
            // e.g. 'template-educate'
        ];

        /**
         * Data to be passed to view before rendering.
         *
         * @return array
         */
        public function with()
        {
            return [
                'projectEducation' => $this->projectEducation(),
            ];
        }

        protected function projectEducation(): WP_Query
        {
            $args = [
                'post_type' => 'project',
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'meta_key' => '_thumbnail_id',
                'orderby' => 'publish_date',
            ];

            return new WP_Query($args);
        }
    }
