<?php

  add_action('after_setup_theme', function () {
    echo app('sage.view')->make('partials.header');
  });
