<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;
use WP_Query;

class TemplateProjects extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // e.g. 'template-projects'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'projectsArchive' => $this->projectsArchive(),
        ];
    }

    protected function projectsArchive(): WP_Query
    {
        $args = [
            'post_type' => 'project',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'orderby' => 'publish_date',
            'order' => 'DESC',
        ];

        return new WP_Query($args);
    }
}

