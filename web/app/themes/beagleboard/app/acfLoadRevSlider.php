<?php

    /**
     * Revolution slider display from ACF text field
     */
    function acf_load_rev_slider($field)
    {
        if (class_exists('RevSlider')) {
            $rev_slider = new RevSlider();
            $sliders = $rev_slider->get_sliders();
            if (count($sliders) > 0) {
                foreach ($sliders as $slider) {
                    $field[ 'rev_slider_alias' ][ $slider->alias ] = $slider->title;
                }
            } else {
                $field[ 'choices' ] = array( 'none' => 'No sliders exist. You must create one first.' );
            }
        } else {
            $field[ 'choices' ] = array( 'none' => 'Slider Revolution plugin was not found.' );
        }
        return $field;
    }


    add_filter('acf/load_field/name=rev_slider', 'acf_load_rev_slider');
