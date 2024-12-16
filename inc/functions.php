<?php

function set_default_featured_image($html, $post_id, $post_thumbnail_id, $size, $attr)
{
    if (empty($post_thumbnail_id)) {
        $html =  wp_get_attachment_image(DEFAULT_IMAGE_POST, 'medium');
    }
    return $html;
}

add_filter('post_thumbnail_html', 'set_default_featured_image', 10, 5);

function set_default_featured_image_url($url, $post_id)
{
    if (empty(get_post_thumbnail_id($post_id))) {
        $url = wp_get_attachment_image_url(DEFAULT_IMAGE_POST, 'medium');
    }
    return $url;
}
add_filter('default_post_thumbnail_url', 'set_default_featured_image_url', 10, 2);

$page_template = [
    30136 => 'template-render/page-affiliate-marketing',
    18823 => 'template-render/front-page',
    30539 => 'template-render/beauty-health',
    31025 => 'template-render/page-refersion',
    // 	33525 => 'template-render/Round6/page-lifetime-commissions'
    // 	33492 => 'template-render/Round6/page-mlm',
    // 	33416 => 'template-render/Round6/page-recurring-commissions'
    // 	32326 => 'template-render/Round3/page-getting-started'
    //     32496 => 'template-render/Round5/page-smart-commission'
];

function update_data($data)
{
    ob_start();
    global $page_template;
    if (isset($page_template[$data['post_id']])) {
        get_template_part($page_template[$data['post_id']]);
    }
    return ob_get_clean();
}

function set_post($post_id, $post, $update)
{

    if (!wp_is_post_revision($post_id)) {
        remove_action('save_post', 'set_post', 10, 3);
        if (!$post_id) {
            return;
        }
        if ('page' !== $post->post_type) {
            return;
        }

        $my_post = array(
            'ID'           => $post_id,
            'post_content' => update_data(['post_id' => $post_id]),
        );

        // Update the post into the database
        wp_update_post($my_post);

        add_action('save_post', 'set_post', 10, 3);
    }
}

add_action('save_post', 'set_post', 10, 3);
