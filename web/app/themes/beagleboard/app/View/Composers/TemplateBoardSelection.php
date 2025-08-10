<?php

    namespace App\View\Composers;

    use Roots\Acorn\View\Composer;
    use WP_Query;

    class TemplateBoardSelection extends Composer
    {
        /**
         * List of views served by this composer.
         *
         * @var array
         */
        protected static $views = [
            'template-board-selection'
        ];

        /**
         * Data to be passed to view before rendering.
         *
         * @return array
         */
        public function with()
        {
            return [
                'boardSelection' => $this->boardSelection(),
                'beagleSelection' => $this->beagleSelection(),
                'riscVSelection' => $this->riscVSelection(),
                'compatibleBoardSelection' => $this->compatibleBoardSelection(),
                'accessorySelection' => $this->accessorySelection(),
            ];
        }

        protected function boardSelection(): WP_Query
        {
            $args = [
                'post_type' => 'product',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'category_name' => 'boards+featured',
                'meta_key' => '_thumbnail_id',
                'orderby' => 'publish_date',
                'order' => 'DESC',
            ];

            return new WP_Query($args);
        }

        protected function beagleSelection(): WP_Query
        {
            $args = [
                'post_type' => 'product',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'category__and'  => array(CATEGORY_PARENT_ID_BOARDS, CATEGORY_BEAGLES),
                'meta_key' => '_thumbnail_id',
                'orderby' => 'publish_date',
                'order' => 'DESC',
            ];

            return new WP_Query($args);
        }

        protected function riscVSelection(): WP_Query
        {
            $args = [
                'post_type' => 'product',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'category__and'  => array(CATEGORY_PARENT_ID_BOARDS, CATEGORY_RISCV),
                'meta_key' => '_thumbnail_id',
                'orderby' => 'publish_date',
                'order' => 'DESC',
            ];

            return new WP_Query($args);
        }

        protected function compatibleBoardSelection(): WP_Query
        {
            $args = [
                'post_type' => 'product',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'category__and'  => array(CATEGORY_PARENT_ID_BOARDS, CATEGORY_COMPATIBLE),
                'meta_key' => '_thumbnail_id',
                'orderby' => 'publish_date',
                'order' => 'DESC',
            ];

            return new WP_Query($args);
        }

        protected function accessorySelection(): WP_Query
        {
            $args = [
                'post_type' => 'product',
                'posts_per_page' => -1,
                'post_status' => 'publish',
                'category__not_in'  => CATEGORY_PARENT_ID_BOARDS,
                'meta_key' => '_thumbnail_id',
                'orderby' => 'publish_date',
                'order' => 'DESC',
            ];

            return new WP_Query($args);
        }
    }
