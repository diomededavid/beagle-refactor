<?php

    namespace App\Controllers;

    use Sober\Controller\Controller;

    class TemplateLearn extends Controller
    {
        public function projectEducation(): \WP_Query
        {
            $args = [
                'post_type' => 'project',
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'meta_key' => '_thumbnail_id',
                'orderby' => 'publish_date',
            ];

            return new \WP_Query($args);
        }
    }
