<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class TemplateSubmitProject extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        // e.g. 'template-submit-project'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'submitProjectResult' => $this->handleSubmitProject(),
        ];
    }

    /**
     * Handles the project submission logic.
     *
     * @return string|null
     */
    protected function handleSubmitProject()
    {
        if (!is_user_logged_in()) {
            return "<h2 style='text-align:center;'>User must be logged in to add project.</h2>";
        }

        if (isset($_POST['ispost'])) {
            global $current_user;
            wp_get_current_user();

            $user_login = $current_user->user_login;
            $user_email = $current_user->user_email;
            $user_firstname = $current_user->user_firstname;
            $user_lastname = $current_user->user_lastname;
            $user_id = $current_user->ID;

            $post_title = $_POST['title'];
            $featured_thumbnail = $_FILES['sample_image']['name'];
            $post_content = $_POST['project_details'];
            $post_excerpt = $_POST['post_excerpt'];
            $category = $_POST['category'];

            $new_post = [
                'post_title'    => $post_title,
                'post_excerpt'  => $post_excerpt,
                'post_content'  => $post_content,
                'post_name'     => $post_title,
                'post_type'     => 'project',
                'post_category' => [$_POST['category']],
                'post_status'   => 'pending'
            ];

            $pid = wp_insert_post($new_post);
            add_post_meta($pid, 'meta_key', true);

            if (!function_exists('wp_generate_attachment_metadata')) {
                require_once(ABSPATH . "wp-admin" . '/includes/image.php');
                require_once(ABSPATH . "wp-admin" . '/includes/file.php');
                require_once(ABSPATH . "wp-admin" . '/includes/media.php');
            }

            // Uncomment and adapt file upload logic as needed
            /*
            if ($_FILES) {
                foreach ($_FILES as $file => $array) {
                    if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                        return "upload error : " . $_FILES[$file]['error'];
                    }
                    $attach_id = media_handle_upload($file, $pid);
                }
            }

            if ($attach_id > 0) {
                update_post_meta($pid, '_thumbnail_id', $attach_id);
            }
            */

            wp_redirect('/projects');
            exit;
        }

        return null;
    }
}
