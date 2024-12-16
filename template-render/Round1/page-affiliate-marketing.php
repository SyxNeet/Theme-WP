<?php
if (have_rows('banner_affiliate')) {
    while (have_rows('banner_affiliate')) {
        the_row();
        echo do_shortcode('[sc_banner_desktop]');
    }
}
echo do_shortcode('[sc_logo_carousel]');
if (have_rows('page_affiliate_marketing_platform')) {
    while (have_rows('page_affiliate_marketing_platform')) {
        the_row();
        echo do_shortcode('[sc_marketing_platform]');
    }
}
if (have_rows('page_affiliate_marketing_brands_use')) {
    while (have_rows('page_affiliate_marketing_brands_use')) {
        the_row();
        echo do_shortcode('[sc_brands_use]');
    }
}
if (have_rows('page_affiliate_marketing_benefits')) {
    while (have_rows('page_affiliate_marketing_benefits')) {
        the_row();
        echo do_shortcode('[sc_benefits_of_using]');
    }
}

if (have_rows('features_affiliate')) {
    while (have_rows('features_affiliate')) {
        the_row();
        echo do_shortcode('[sc_feature_r1]');
    }
}

echo do_shortcode('[sc_pricing_plan]');


if (have_rows('page_affiliate_marketing_customers_words')) {
    while (have_rows('page_affiliate_marketing_customers_words')) {
        the_row();
        echo do_shortcode('[sc_customers_words]');
    }
}

if (have_rows('faqs_test')) {
    while (have_rows('faqs_test')) {
        the_row();
        echo do_shortcode('[sc_faqs]');
    }
}

if (have_rows('get_started_affiliate')) {
    while (have_rows('get_started_affiliate')) {
        the_row();
        echo do_shortcode('[sc_get_started]');
    }
}
