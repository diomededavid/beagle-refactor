<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class SingleProduct extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // e.g. 'single-product', 'partials.content-single-product'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'relatedProducts' => $this->relatedProducts(),
            'capesProducts' => $this->capesProducts(),
            'relatedProjects' => $this->relatedProjects(),
            'relatedDistros' => $this->relatedDistros(),
            'relatedCapes' => $this->relatedCapes(),
            'relatedBoards' => $this->relatedBoards(),
        ];
    }

    protected function relatedProducts(): WP_Query
    {
        $args = [
            'post_type'         =>      'product',
            'post_status'       =>      'publish',
            'category__in'      =>      wp_get_post_categories(get_the_ID()),
            'post__not_in'      =>      [ get_the_ID() ],
            'posts_per_page'    =>      -1,
            'orderby'           =>      'title',
            'order'             =>      'ASC',
            'no_found_rows'     =>      true,
            'cache_results'     =>      true
        ];

        return new WP_Query($args);
    }

    protected function capesProducts(): WP_Query
    {
        $args = [
            'post_type'         =>      'product',
            'post_status'       =>      'publish',
            'category_name'     =>      'capes',
            'post__not_in'      =>      [ get_the_ID() ],
            'orderby'           =>      'title',
            'order'             =>      'ASC',
            'no_found_rows'     =>      true,
            'cache_results'     =>      true
        ];

        return new WP_Query($args);
    }

    protected function relatedProjects(): WP_Query
    {
        $args = [
            'post_type'         =>      'project',
            'post_status'       =>      'publish',
            'meta_key'          =>      '_thumbnail_id',
            'category__in'      =>      array_intersect(wp_get_post_categories(get_the_ID()), getBoardCategoryIDList()),
            'post__not_in'      =>      [ get_the_ID() ],
            'posts_per_page'    =>      8,
            'orderby'           =>      'date',
            'no_found_rows'     =>      true,
            'cache_results'     =>      true
        ];

        return new WP_Query($args);
    }

    protected function relatedDistros(): WP_Query
    {
        $args = [
            'post_type' => 'distros',
            'post_status' => 'publish',
            'meta_key' => 'latest',
            'meta_value' => '1',
            'category__in' => wp_get_post_categories(get_the_ID(), ['parent' => CATEGORY_PARENT_ID_BOARDS]),
            'posts_per_page' => 8,
            'orderby' => 'date',
            'order' => 'DESC',
            'no_found_rows' => true
        ];

        return new WP_Query($args);
    }

    protected function relatedCapes(): WP_Query
    {
        $args = [
            'post_type'         =>      'product',
            'post_status'       =>      'publish',
            'category__in'      =>      wp_get_post_categories(get_the_ID(), ['parent'=>CATEGORY_PARENT_ID_BOARDS]),
            'category__not_in'  =>      CATEGORY_PARENT_ID_BOARDS,
            'posts_per_page'    =>      -1,
            'orderby'           =>      'date',
            'order'             =>      'DESC',
            'no_found_rows'     =>      true
        ];

        return new WP_Query($args);
    }

    protected function relatedBoards(): WP_Query
    {
        $args = [
            'post_type'         =>      'product',
            'post_status'       =>      'publish',
            'category__in'      =>      wp_get_post_categories(get_the_ID(), ['parent'=>CATEGORY_PARENT_ID_BOARDS]),
            'category__not_in'  =>      CATEGORY_PARENT_ID_CAPES,
            'posts_per_page'    =>      -1,
            'orderby'           =>      'date',
            'order'             =>      'DESC',
            'no_found_rows'     =>      true
        ];

        return new WP_Query($args);
    }
}
