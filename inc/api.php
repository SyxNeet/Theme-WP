<?php
// API load more article Stephen 
// API load more article Stephen 
// API load more article Stephen 
// API load more article Stephen 

function post_stephen_api_endpoint()
{
	register_rest_route('okhub/v1', '/posts-stephen', array(
		'methods'  => 'GET',
		'callback' => 'get_posts_stephen',
	));
}
add_action('rest_api_init', 'post_stephen_api_endpoint');

function get_posts_stephen($data)
{
	// Làm sạch các giá trị page và per_page
	$page = isset($data['page']) ? absint($data['page']) : 1;
	$per_page = isset($data['per_page']) ? absint($data['per_page']) : 6;
	$offset = ($page - 1) * $per_page;

	// Truy vấn bài viết
	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => $per_page,
		'paged'          => $page,
		'offset'         => $offset,
		'orderby'        => 'date',
		'order'          => 'DESC',
	);

	if (isset($data['category'])) {
		$category_slug = sanitize_text_field($data['category']);
		$args['tax_query'][] = array(
			'taxonomy' => 'category',
			'field'    => 'slug',
			'terms'    => $category_slug,
		);
	}

	$query = new WP_Query($args);

	// Kiểm tra có bài viết không
	if (!$query->have_posts()) {
		return new WP_Error('no_post_found', 'Không có bài viết hợp lệ', array('status' => 404));
	}

	$posts = $query->posts;
	$total_posts = $query->found_posts;
	$total_pages = ceil($total_posts / $args['posts_per_page']);

	$response = array(
		'total_posts'  => $total_posts,
		'current_page' => $args['paged'],
		'total_pages'  => $total_pages,
		'posts'        => array(),
	);

	// Vòng lặp để tạo phản hồi JSON cho mỗi bài viết
	foreach ($posts as $post) {
		$title = $post->post_title;
		$slug = get_the_permalink($post->ID);
		$feature_image = get_the_post_thumbnail_url($post->ID);
		$post_date = date_i18n('M j, Y', strtotime($post->post_date)); // Định dạng ngày thành Aug 21, 2024
		$excerpt = get_the_excerpt($post->ID);

		// Lấy danh sách danh mục của bài viết
		$categories = get_the_category($post->ID);
		$category_names = wp_list_pluck($categories, 'name'); // Chỉ lấy tên danh mục

		$response['posts'][] = array(
			'title'         => $title,
			'slug'          => $slug,
			'feature_image' => $feature_image,
			'excerpt'       => $excerpt,
			'date'          => $post_date,
			'categories'    => $category_names, // Thêm danh mục vào phản hồi
		);
	}

	return rest_ensure_response($response);
}


// API load more customer success
// API load more customer success
// API load more customer success
// API load more customer success

function post_customer_success_api_endpoint()
{
	register_rest_route('okhub/v1', '/posts-customer-success', array(
		'methods'  => 'GET',
		'callback' => 'get_posts_customer_success',
	));
}
add_action('rest_api_init', 'post_customer_success_api_endpoint');

function get_posts_customer_success($data)
{
	// Làm sạch các giá trị page và per_page
	$page = isset($data['page']) ? absint($data['page']) : 1;
	$per_page = isset($data['per_page']) ? absint($data['per_page']) : 9;
	$offset = ($page - 1) * $per_page;

	// Truy vấn bài viết
	$args = array(
		'post_type'      => 'post',
		'posts_per_page' => $per_page * $page,
		'paged'          => $page,
		'offset'         => 0,
		'orderby'        => 'date',
		'order'          => 'DESC',
	);
	$query = new WP_Query($args);

	// Kiểm tra có bài viết không
	if (!$query->have_posts()) {
		return new WP_Error('no_post_found', 'Không có bài viết hợp lệ', array('status' => 404));
	}

	$posts = $query->posts;
	$total_posts = $query->found_posts;
	$total_pages = ceil($total_posts / $args['posts_per_page']);

	$response = array(
		'total_posts'  => $total_posts,
		'current_page' => $args['paged'],
		'total_pages'  => $total_pages,
		'posts'        => array(),
	);

	// Vòng lặp để tạo phản hồi JSON cho mỗi bài viết
	foreach ($posts as $post) {
		$title = $post->post_title;
		$slug = get_the_permalink($post->ID);
		$feature_image = get_the_post_thumbnail_url($post->ID);
		$brand_name = get_field('brand_name', $post->ID);
		$logo = get_field('brand_logo', $post->ID);
		// Lấy danh sách danh mục của bài viết
		$categories = get_the_category($post->ID);
		$first_category_name = isset($categories[0]) ? $categories[0]->name : '';


		$response['posts'][] = array(
			'title'         => $title,
			'slug'          => $slug,
			'feature_image' => $feature_image,
			'categories'    => $first_category_name,
			'brand_name'	=> $brand_name,
			'logo'			=> $brand_logo
		);
	}

	return rest_ensure_response($response);
}
//Api lọc integration theo taxonomy
add_action('rest_api_init', function () {
    register_rest_route('okhub/v1', '/get-integrations', [
        'methods' => 'POST',
        'callback' => 'get_integration_posts',
        'permission_callback' => '__return_true', // Public API (có thể thay bằng kiểm tra quyền nếu cần)
    ]);
});

function get_integration_posts($request) {
    // Lấy danh sách ID của taxonomy từ request
    $taxonomy_ids = $request->get_param('taxonomy_ids');

    // Nếu taxonomy_ids là rỗng, set nó thành null để không lọc theo taxonomy
    $tax_query = [];

    if (!empty($taxonomy_ids) && is_array($taxonomy_ids)) {
        // Chỉ thêm tax_query nếu taxonomy_ids không rỗng
        $tax_query = [
            [
                'taxonomy' => 'integration-categories',
                'field' => 'term_id',
                'terms' => $taxonomy_ids,
                'operator' => 'IN',
            ],
        ];
    }

    // Query bài viết với hoặc không có taxonomy
    $query_args = [
        'post_type' => 'integration',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'tax_query' => $tax_query,
		'orderby' => 'date',
		'order' => 'ASC',
    ];

    $query = new WP_Query($query_args);

    if (!$query->have_posts()) {
        return rest_ensure_response([
            'success' => false,
            'message' => 'Không tìm thấy bài viết nào.',
        ]);
    }

    // Lấy dữ liệu bài viết
    $posts = [];
    while ($query->have_posts()) {
        $query->the_post();

        $terms = get_the_terms(get_the_ID(), 'integration-categories');
        $term_names = $terms ? wp_list_pluck($terms, 'name') : [];

        // Lấy URL của ảnh từ ID (nếu có)
        $thumbnail_image_id = get_field('thumbnail_image'); // ID ảnh
        $thumbnail_image_url = $thumbnail_image_id ? wp_get_attachment_url($thumbnail_image_id) : '';

        $posts[] = [
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'excerpt' => get_the_excerpt(),
            'thumbnail_image' => $thumbnail_image_url, // Trả về URL của ảnh thay vì ID
            'terms' => $term_names,
        ];
    }
    wp_reset_postdata();

    return rest_ensure_response([
        'success' => true,
        'posts' => $posts,
    ]);
}
// lấy chi tiết bài post
add_action('rest_api_init', function () {
    register_rest_route('okhub/v1', '/get-post-details', [
        'methods' => 'POST',
        'callback' => 'get_custom_post_details',
        'permission_callback' => '__return_true', // Public API (có thể thay đổi thành kiểm tra quyền nếu cần)
    ]);
});

function get_custom_post_details($request) {
    // Lấy post ID từ request
    $post_id = $request->get_param('post_id');

    if (empty($post_id) || !is_numeric($post_id)) {
        return new WP_Error('invalid_param', 'post_id phải là một số hợp lệ.', ['status' => 400]);
    }

    // Kiểm tra xem bài viết có tồn tại và đã xuất bản không
    $post = get_post($post_id);
    if (!$post || $post->post_status !== 'publish') {
        return new WP_Error('not_found', 'Không tìm thấy bài viết hoặc bài viết không được xuất bản.', ['status' => 404]);
    }

    // Lấy URL của ảnh từ custom field
    $image_id = get_field('image', $post_id); // 'image' là tên custom field
    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';

    // Lấy custom field title
    $custom_title = get_field('title', $post_id);

    // Lấy danh sách thông tin từ custom field
    $list_information_post = get_field('list_information_post', $post_id); // Thay tên meta key nếu cần

    // Trả về dữ liệu bài viết
    $response = [
        'success' => true,
        'post' => [
            'id' => $post_id,
            'title' => $custom_title, // Custom field 'title'
            'image' => $image_url,    // URL của ảnh từ custom field 'image'
            'list_information_post' => $list_information_post, // Custom field
        ],
    ];

    return rest_ensure_response($response);
}
//search Affiliate Program Directory

add_action('rest_api_init', function () {
    register_rest_route('custom-api/v1', '/filter-posts', [
        'methods'  => 'POST',
        'callback' => 'filter_directory_posts',
        'permission_callback' => '__return_true', // Cho phép truy cập công khai
    ]);
});

function filter_directory_posts($data) {
    // Lấy tham số từ request
    $search_name = sanitize_text_field($data->get_param('name')); // Tìm kiếm theo tên
    $taxonomy_filters = $data->get_param('taxonomy_filters'); // Bộ lọc taxonomy
    $price_from = floatval($data->get_param('price_from')); // Giá thấp nhất
    $price_to = floatval($data->get_param('price_to'));     // Giá cao nhất
    $cookie_from = intval($data->get_param('cookie_from')); // Cookie thấp nhất
    $cookie_to = intval($data->get_param('cookie_to'));     // Cookie cao nhất
    $commission_rate = floatval($data->get_param('commission_rate')); // Tỷ lệ hoa hồng
    $current_page = max(1, intval($data->get_param('page'))); // Trang hiện tại, mặc định là 1
    $posts_per_page = 12; // Số bài viết mỗi trang

    // Kiểm tra điều kiện không hợp lệ
    if (($price_to > 0 && $price_to < $price_from) || ($cookie_to > 0 && $cookie_to < $cookie_from)) {
        return new WP_REST_Response(['ok' => false, 'message' => 'No posts found'], 404);
    }

    // Query posts
    $query_args = [
        'post_type'      => 'directory-2',
        'posts_per_page' => $posts_per_page,
        'post_status'    => 'publish',
        'orderby'        => 'name',
        'order'          => 'ASC',
        'paged'          => $current_page, // Thêm thông số phân trang
    ];

    // Thêm điều kiện tìm kiếm theo tên (nếu có)
    if (!empty($search_name)) {
        $query_args['s'] = $search_name;
    }

    // Thêm điều kiện tax_query nếu có bộ lọc taxonomy
    if (!empty($taxonomy_filters) && is_array($taxonomy_filters)) {
        $tax_query = [];

        foreach ($taxonomy_filters as $filter) {
            if (!empty($filter['taxonomy']) && !empty($filter['terms'])) {
                $tax_query[] = [
                    'taxonomy' => sanitize_text_field($filter['taxonomy']),
                    'field'    => 'term_id',
                    'terms'    => array_map('intval', $filter['terms']),
                    'operator' => 'IN',
                ];
            }
        }

        // Thêm tax_query vào query_args nếu có bộ lọc taxonomy
        if (!empty($tax_query)) {
            $query_args['tax_query'] = $tax_query;
        }
    }

    // Thêm điều kiện meta_query để filter theo giá, cookie và commission_rate
    $meta_query = [];

    if ($price_from > 0) {
        $meta_query[] = [
            'key'     => 'commissions',
            'value'   => $price_from,
            'type'    => 'NUMERIC',
            'compare' => '>=',
        ];
    }

    if ($price_to > 0) {
        $meta_query[] = [
            'key'     => 'commissions',
            'value'   => $price_to,
            'type'    => 'NUMERIC',
            'compare' => '<=',
        ];
    }

    if ($cookie_from > 0) {
        $meta_query[] = [
            'key'     => 'cookies',
            'value'   => $cookie_from,
            'type'    => 'NUMERIC',
            'compare' => '>=',
        ];
    }

    if ($cookie_to > 0) {
        $meta_query[] = [
            'key'     => 'cookies',
            'value'   => $cookie_to,
            'type'    => 'NUMERIC',
            'compare' => '<=',
        ];
    }

    // Thêm điều kiện meta_query cho commission_rate
    if ($commission_rate > 0) {
        $meta_query[] = [
            'key'     => 'commissions_rate',
            'value'   => $commission_rate,
            'type'    => 'NUMERIC',
            'compare' => '<',
        ];
    }

    if (!empty($meta_query)) {
        $query_args['meta_query'] = $meta_query;
    }

    // Thực hiện truy vấn WP_Query
    $query = new WP_Query($query_args);

    // Chuẩn bị dữ liệu trả về
    if ($query->have_posts()) {
        $posts = [];
        while ($query->have_posts()) {
            $query->the_post();

            $posts[] = [
                'id'            => get_the_ID(),
                'title'         => get_the_title(),
                'thumbnail'     => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : get_template_directory_uri() . '/imgs/item.webp',
                'cookies'       => get_field('cookies') . ' days',
                'commission'    => '$' . get_field('commissions') . ' per sale',
                'niche_tags'    => wp_list_pluck(get_the_terms(get_the_ID(), 'niche'), 'name'),
                'commission_rate' => get_field('commissions_rate'),
                'permalink'     => get_permalink(),
            ];
        }
        wp_reset_postdata();

        // Tổng số bài viết và số trang
        $total = $query->found_posts;
        $total_pages = $query->max_num_pages;

        return new WP_REST_Response([
            'ok'           => true,
            'posts'        => $posts,
            'total'        => $total,
            'totalPages'   => $total_pages,
            'currentPage'  => $current_page,
        ], 200);
    } else {
        return new WP_REST_Response(['ok' => false, 'message' => 'No posts found'], 404);
    }
}
