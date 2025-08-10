<?php

    namespace App\View\Composers;

    use Roots\Acorn\View\Composer;
    use WP_Query;

    class TemplateDistros extends Composer
    {
        /**
         * List of views served by this composer.
         *
         * @var array
         */
        protected static $views = [
            // e.g. 'template-distros'
        ];

        /**
         * Data to be passed to view before rendering.
         *
         * @return array
         */
        public function with()
        {
            $postID = get_the_ID();

            return [
                'distroBaseCategoryList' => $this->getDistroBaseCategoryList($postID),
                'distroBoardCategoryList' => $this->getDistroBoardCategoryList($postID),
                'distroMemoryCategoryList' => $this->getDistroMemoryCategoryList($postID),
                'distroFeatsCategoryList' => $this->getDistroFeatsCategoryList($postID),
                'distrosArchive' => $this->distrosArchive(),
            ];
        }

        protected function getDistroBaseCategoryList(int $postID)
        {
            return wp_get_post_categories($postID, [
                'fields' => 'all_with_object_id',
                'orderby' => 'name',
                'order' => 'ASC',
                'parent' => CATEGORY_PARENT_ID_DISTROBASE,
                'hide_empty' => true
            ]);
        }

        protected function getDistroBoardCategoryList(int $postID)
        {
            return wp_get_post_categories($postID, [
                'fields' => 'all_with_object_id',
                'orderby' => 'name',
                'order' => 'ASC',
                'parent' => CATEGORY_PARENT_ID_BOARDS,
                'hide_empty' => true
            ]);
        }

        protected function getDistroMemoryCategoryList(int $postID)
        {
            return wp_get_post_categories($postID, [
                'fields' => 'all_with_object_id',
                'orderby' => 'name',
                'order' => 'ASC',
                'parent' => CATEGORY_PARENT_ID_MEMORY,
                'hide_empty' => true
            ]);
        }

        protected function getDistroFeatsCategoryList(int $postID)
        {
            return wp_get_post_categories($postID, [
                'fields' => 'all_with_object_id',
                'orderby' => 'name',
                'order' => 'ASC',
                'parent' => CATEGORY_PARENT_ID_DISTROFEATS,
                'hide_empty' => true
            ]);
        }

        protected function distrosArchive(): WP_Query
        {
            $basecrit = [
                'post_type' => 'distros',
                'post_status' => 'publish',
                'orderby' => 'publish_date',
                'fields' => 'ids',
                'posts_per_page' => -1
            ];
            $featposts = get_posts(array_merge($basecrit, ['meta_key' => 'latest', 'meta_value' => '1']));
            $notfeatposts = get_posts(array_merge($basecrit, ['post__not_in' => $featposts]));
            $postslist = array_merge($featposts, $notfeatposts);
            $postslist = array_unique($postslist);

            $args = [
                'post_type' => 'distros',
                'post__in'  => $postslist,
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'orderby'   => 'post__in'
            ];

            return new WP_Query($args);
        }
    }
