<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Get the current page title.
     *
     * @return string
     */
    public function title(): string
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            $q = get_queried_object();
            $title = is_category() ? $q->name : $q->labels->name;
            return $title;
        }
        if (is_search()) {
            return sprintf(__('Search Results for "%s"', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    /**
     * Get related projects.
     *
     * @return \WP_Query
     */
    public function projectRelated(): \WP_Query
    {
        $args = [
            'post_type' => 'project',
            'posts_per_page' => 12,
            'post_status' => 'publish',
            'meta_key' => '_thumbnail_id',
            'orderby' => 'publish_date',
        ];

        return new \WP_Query($args);
    }

    /**
     * Get books for education page.
     *
     * @return \WP_Query
     */
    public function booksEducation(): \WP_Query
    {
        $args = [
            'post_type' => 'book',
            'posts_per_page' => 4,
            'category_name' => 'page-educate',
            'post_status' => 'publish',
            'meta_key' => '_thumbnail_id',
            'orderby' => 'rand',
        ];

        return new \WP_Query($args);
    }

    /**
     * Get books for learn page.
     *
     * @return \WP_Query
     */
    public function booksLearn(): \WP_Query
    {
        $args = [
            'post_type' => 'book',
            'posts_per_page' => 4,
            'category_name' => 'page-learn',
            'post_status' => 'publish',
            'meta_key' => '_thumbnail_id',
            'orderby' => 'rand',
        ];

        return new \WP_Query($args);
    }

    /**
     * Get books for getting started page.
     *
     * @return \WP_Query
     */
    public function booksGettingstarted(): \WP_Query
    {
        $args = [
            'post_type' => 'book',
            'posts_per_page' => 4,
            'category_name' => 'page-getting-started',
            'post_status' => 'publish',
            'meta_key' => '_thumbnail_id',
            'orderby' => 'rand',
        ];

        return new \WP_Query($args);
    }
}
