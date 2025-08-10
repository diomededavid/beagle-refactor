<?php

namespace App\Controllers;

use Sober\Controller\Controller;

include_once "CategoryDefs.php";

/**
 * Controller for the archive-product view.
 */
class ArchiveProduct extends Controller
{
    /**
     * The ACF field for background style.
     *
     * @var string
     */
    protected $acf = 'background_style';
}
