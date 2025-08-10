<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateContact extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // e.g. 'template-contact'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'contactFormShortcode' => $this->contactFormShortcode(),
        ];
    }

    protected function contactFormShortcode()
    {
        $shortcode = get_field('contact_form_shortcode');
        if (!empty($shortcode)) {
            return do_shortcode($shortcode);
        }
        return '';
    }
}

