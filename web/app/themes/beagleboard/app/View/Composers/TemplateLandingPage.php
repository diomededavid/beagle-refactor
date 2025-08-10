<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateLandingPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // e.g. 'template-landing-page'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'sliderRevolution' => $this->sliderRevolution(),
        ];
    }

    protected function sliderRevolution()
    {
        $slider_alias = get_field('rev_slider_alias');
        if (!empty($slider_alias)) {
            return do_shortcode(sprintf('[rev_slider alias="%s"]', $slider_alias));
        }
        return '';
    }
}
