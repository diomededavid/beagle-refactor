<?php
const CATEGORY_LATEST_IMAGES = 482;
const CATEGORY_PARENT_ID_CAPES = 394;
const CATEGORY_PARENT_ID_MEMORY = 474;
const CATEGORY_PARENT_ID_DISTROFEATS = 483;
const CATEGORY_PARENT_ID_PROCESSORS = 453;
const CATEGORY_PARENT_ID_BOARDS = 503;
const CATEGORY_PARENT_ID_CONNECTIVITY = 504;
const CATEGORY_PARENT_ID_DISTROBASE = 501;
const CATEGORY_PARENT_ID_PROJECTEXPLEVEL = 448;
const CATEGORY_PARENT_ID_APPLICATON = 338;
const CATEGORY_COMPATIBLE = 440;
const CATEGORY_BEAGLES = 549;
const CATEGORY_RISCV = 456;
const CATEGORY_FEATURED = 427;

function getBoardCategoryList(): array
{
    return get_categories(
        [
            'orderby'=>'name',
            'order'=>'ASC',
            'parent'=>CATEGORY_PARENT_ID_BOARDS, // ID = 503
            'hide_empty'=>false
        ]
    );
}
function getBoardCategoryFeatured(): array
{
    return get_categories(
        [
            'orderby'=>'name',
            'order'=>'ASC',
            'parent'=>CATEGORY_FEATURED, // ID = 427
            'hide_empty'=>false
        ]
    );
}

function getBoardCategoryIDList(): array
{
    return get_categories(
        [
            'orderby'=>'name',
            'order'=>'ASC',
            'parent'=>CATEGORY_PARENT_ID_BOARDS, // ID = 503
            'hide_empty'=>false,
            'fields'=>'ids'
        ]
    );
}

function getProcessorsCategoryList(): array
{
    return get_categories(
        [
            'orderby'=>'name',
            'order'=>'ASC',
            'parent'=>CATEGORY_PARENT_ID_PROCESSORS,  // ID = 453
            'hide_empty'=>false
        ]
    );
}

function getMemoryCategoryList(): array
{
    return get_categories(
        [
            'orderby'=>'name',
            'order'=>'ASC',
            'parent'=>CATEGORY_PARENT_ID_MEMORY, // ID = 474
            'hide_empty'=>false
        ]
    );
}

function getDistroFeatsCategoryList(): array
{
    return get_categories(
        [
            'orderby'=>'name',
            'order'=>'ASC',
            'parent'=>CATEGORY_PARENT_ID_DISTROFEATS,  // ID = 483
            'hide_empty'=>false
        ]
    );
}

function getConnectivityCategoryList(): array
{
    return get_categories(
        [
            'orderby'=>'name',
            'order'=>'ASC',
            'parent'=>CATEGORY_PARENT_ID_CONNECTIVITY, // ID = 504
            'hide_empty'=>false
        ]
    );
}

function getProjectExpLevelCategoryList(): array
{
    return get_categories(
        [
            'orderby'=>'name',
            'order'=>'ASC',
            'parent'=>CATEGORY_PARENT_ID_PROJECTEXPLEVEL, // ID = 448
            'hide_empty'=>false
        ]
    );
}

function getApplicationCategoryList(): array
{
    return get_categories(
        [
        'orderby' => 'name',
        'order' => 'ASC',
        'parent' => CATEGORY_PARENT_ID_APPLICATON,  // ID = 338
        'hide_empty' => false
        ]
    );
}
