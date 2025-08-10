<?php

    namespace App\View\Composers;

    use Roots\Acorn\View\Composer;

    class TemplateLearn extends Composer
    {
        /**
         * List of views served by this composer.
         *
         * @var array
         */
        protected static $views = [
            'template-learn', // Update this to match your Blade view name
        ];

        /**
         * Data to be passed to the view.
         *
         * @return array
         */
        public function with()
        {
            return [
                'projectEducation' => $this->projectEducation(),
            ];
        }

        /**
         * Query for education projects.
         *
         * @return \WP_Query
         */
        protected function projectEducation(): \WP_Query
        {
            $args = [
                'post_type'      => 'project',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
                'meta_key'       => '_thumbnail_id',
                'orderby'        => 'publish_date',
            ];

            return new \WP_Query($args);
        }
    }
