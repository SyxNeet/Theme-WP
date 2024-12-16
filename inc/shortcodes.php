<?php
// ========================= Table =========================
add_shortcode('sc_table', 'table_shortcode');
function table_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round2/compound/section-table/uppromote-table');
    return ob_get_clean();
}

// ========================= Campaign =========================
add_shortcode('sc_campaign', 'campaign_shortcode');
function campaign_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round5/components/section-campaign/campaign');
    return ob_get_clean();
}

// ======================== Section Feature Round1 ==================
add_shortcode('sc_feature_r1', 'feature_r1_shortcode');
function feature_r1_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round1/components/section-feature/feature');
    return ob_get_clean();
}

// ========================= FAQ =========================
add_shortcode('sc_faqs', 'faqs_shortcode');
function faqs_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/faqs/faqs');
    return ob_get_clean();
}
// ========================= Numbers =========================

add_shortcode('sc_number_outstanding', 'numbers_shortcode');
function numbers_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round1/homepage/section-number/number');
    return ob_get_clean();
}

// ========================= Get Started =========================

add_shortcode('sc_get_started', 'get_started_shortcode');
function get_started_shortcode($atts, $content = null)
{
    ob_start();
    if (isMobileDevice()) {
        get_template_part('template-parts/compound/get-started/get-started-mb');
    } else {
        get_template_part('template-parts/compound/get-started/get-started');
    }
    return ob_get_clean();
}

// ========================= Banner =========================

add_shortcode('sc_banner_desktop', 'banner_desktop_shortcode');
function banner_desktop_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/banner-desktop/banner');
    return ob_get_clean();
}
// ========================= Banner R2 =========================

add_shortcode('sc_banner_r2', 'banner_r2_shortcode');
function banner_r2_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round2/compound/section-banner-r2/banner');
    return ob_get_clean();
}

// ========================= Banner R6 =========================

add_shortcode('sc_banner_cpn', 'banner_r6_shortcode');
function banner_r6_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/Round6/compound/banner/banner');
    return ob_get_clean();
}
// ========================= Logo Carousel =========================

add_shortcode('sc_logo_carousel', 'logo_carousel_shortcode');
function logo_carousel_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/logo-carousel/logo-carousel');
    return ob_get_clean();
}

// ========================= Why customer think =========================

add_shortcode('sc_customer_think', 'customer_think_shortcode');
function customer_think_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/why-customer-think/customer');
    return ob_get_clean();
}


// ========================= Fashion Brands Slide =========================

add_shortcode('sc_fashion_brands_slide', 'fashion_brands_slide_shortcode');
function fashion_brands_slide_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/fashion-brands-slide/fashion-brands-slide');
    return ob_get_clean();
}

// ========================= Content section =========================

add_shortcode('sc_content_section', 'section_content_shortcode');
function section_content_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/content-section/content-section');
    return ob_get_clean();
}
// ========================= Pricing Plan =========================

add_shortcode('sc_pricing_plan', 'pricing_plan_shortcode');
function pricing_plan_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/pricing-plan/pricing-plan');
    return ob_get_clean();
}

// ========================= Benefit of using =========================

add_shortcode('sc_benefits_of_using', 'benefits_of_using_shortcode');
function benefits_of_using_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/benefits-of-using/benefits-of-using');
    return ob_get_clean();
}

// ========================= Brands use =========================

add_shortcode('sc_brands_use', 'brands_use_shortcode');
function brands_use_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/brands-use/brands-use');
    return ob_get_clean();
}

// ========================= Triple =========================

add_shortcode('sc_triple', 'triple_shortcode');
function triple_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/triple-aff/triple');
    return ob_get_clean();
}

// ========================= Customer words =========================

add_shortcode('sc_customers_words', 'customers_words_shortcode');
function customers_words_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/customers-words/customers-words');
    return ob_get_clean();
}
// ========================= Marketing Platform =========================

add_shortcode('sc_marketing_platform', 'marketing_platform_shortcode');
function marketing_platform_shortcode($atts, $content = null)
{
    ob_start();
    get_template_part('template-parts/compound/marketing-platform/marketing-platform');
    return ob_get_clean();
}

add_shortcode('highlight', 'highlight_shortcode');
function highlight_shortcode($atts, $content = null)
{
    $background = $atts['background_color'] ?? '#F4F4F5';
    $color = $atts['text_color'] ?? '#000000';
    return '<div style="--background: ' . $background . '; --color: ' . $color . ';" class="highlight">' . $content . '</div>';
}

add_shortcode('list', 'list_shortcode');
function list_shortcode($atts, $content = null)
{
    $styles  = '';
    $class_name = '';
    if (array_key_exists('number_background', $atts)) {
        $styles .= '--number-background: ' . $atts['number_background'] . ';';
    }

    if (array_key_exists('number_text', $atts)) {
        $styles .= '--number-text: ' . $atts['number_text'] . ';';
    }

    if (array_key_exists('style', $atts)) {
        $class_name .= ' ' . $atts['style'];
    }

    if (array_key_exists('type', $atts)) {
        $class_name .= ' ' . $atts['type'];
    } else {
        $class_name .= ' ' . 'bullet';
    }

    if (array_key_exists('with_zero', $atts)) {
        $class_name .= ' with-zero';
    }

    return '<div style="' . $styles . '" class="list-group ' . $class_name . '">' . $content . '</div>';
}

// shortcode
add_shortcode('sc_pros', 'pros_shortcode');
function pros_shortcode($atts, $content = null)
{
    $background = $atts['background_color'] ?? '#43B780';
    $color = $atts['text_color'] ?? '#fff';
    $title = $atts['title'] ?? '😍 PROs';

    return '<div style="--background: ' . $background . '; --color: ' . $color . ';" class="pros__list"> <div class="pros__title">' . $title . '</div> ' . $content . '</div>';
}

add_shortcode('sc_cons', 'cons_shortcode');
function cons_shortcode($atts, $content = null)
{
    $background = $atts['background_color'] ?? '#9DA3AF';
    $color = $atts['text_color'] ?? '#fff';
    $title = $atts['title'] ?? '😳 CONs';

    return '<div style="--background: ' . $background . '; --color: ' . $color . ';" class="cons__list"><div class="cons__title">' . $title . '</div> ' . $content . '</div>';
}
add_shortcode('sc_pros_cons', 'pros_cons_shortcode');
function pros_cons_shortcode($atts, $content = null)
{
    return '<div class="group__pros__cons"> ' . do_shortcode($content) . ' </div>';
}

add_shortcode('sc_button', 'button_shortcode');
function button_shortcode($atts, $content = null)
{
    $background = $atts['background_color'] ?? '#F4F4F5';
    $url = $atts['url'] ?? '/';
    $color = $atts['text_color'] ?? '#fff';
    return '<a href="' . esc_url($url) . '" style="--background: ' . $background . '; --color: ' . $color . ';" class="sc_button">' . $content . '</a>';
}


add_shortcode('sc_block_infomation', 'block_info_shortcode');
function block_info_shortcode($atts, $content = null)
{
    $background_title = $atts['background_color_title'] ?? '#3B67ED';
    $color_title = $atts['color_title'] ?? '#fff';
    $title = $atts['title'] ?? 'Tips for Researching Your Niche';
    return '<div style="--background: ' . $background_title . '; --color: ' . $color_title . ';" class="block__information"><div class="block__info__title" > ' . $title . '</div>' . $content . '</div>';
}
