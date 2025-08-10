<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class ArchiveProduct extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'archive-product',
    ];

    /**
     * Data to be passed to the view.
     *
     * @return array
     */
    public function with()
    {
        return [
            'background_style' => get_field('background_style'),
        ];
    }
}
