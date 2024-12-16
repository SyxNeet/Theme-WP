<?php

// ============================== start wp_enqueue lib =====================//
// function  wp_enqueue_lib()
// {
// 	wp_enqueue_style('font-poppins', get_theme_file_uri('/assets/fonts/Poppins/stylesheet.css'));
// }
// add_action('wp_enqueue_scripts', 'wp_enqueue_lib', 1000);


function wp_enqueue_lib() {
	// Enqueue the font stylesheet
	wp_enqueue_style('font-poppins', get_theme_file_uri('/assets/fonts/Poppins/stylesheet.css'), array(), null, 'all');
}
add_action('wp_enqueue_scripts', 'wp_enqueue_lib', 1000);



// ============================== end wp_enqueue lib =====================//

// ============================== wp_enqueue lib =====================//
function  wp_enqueue_local()
{
	// Preload the styles
	echo '<link rel="preload" href="' . get_theme_file_uri('/assets/css/reset.css') . '?ver=' . VERSION . '" as="style">';
	echo '<link rel="preload" href="' . get_theme_file_uri('/assets/css/global.css') . '?ver=' . VERSION . '" as="style">';

	// Enqueue the styles as usual
	wp_enqueue_style('reset', get_theme_file_uri('/assets/css/reset.css'),[],VERSION);
	wp_enqueue_style('global', get_theme_file_uri('/assets/css/global.css'),[],VERSION);

	if (isMobileDevice()) {
		wp_enqueue_style('header', get_theme_file_uri('/template-parts/compound/header/assets/menu-mobile.css'),[],VERSION);
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'));
		wp_enqueue_style('offcanvas', get_theme_file_uri('/assets/css/offcanvas.css'));
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'));
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], false, true);
	} else {
		wp_enqueue_style('header', get_theme_file_uri('/template-parts/compound/header/assets/header-pc-new.css'),[],VERSION);
	}
	wp_enqueue_style('footer', get_theme_file_uri('/template-parts/compound/footer/assets/styles.css'),[],VERSION);
	wp_enqueue_script("header", get_theme_file_uri('/template-parts/compound/header/assets/scripts.js'), [], VERSION, true);

	// 	affiliate-marketing
	if (is_page_template('static-pages/page-affiliate_marketing.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('marketing-platform', get_theme_file_uri('/template-parts/compound/marketing-platform/assets/styles.css'),[],VERSION);
		wp_enqueue_style('brands-use', get_theme_file_uri('/template-parts/compound/brands-use/assets/styles.css'),[],VERSION);
		wp_enqueue_style('benefits-of-using', get_theme_file_uri('/template-parts/compound/benefits-of-using/assets/styles.css'),[],VERSION);
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'),[],VERSION);
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'),[],VERSION);
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'),[],VERSION);
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], VERSION, true);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('customer-word', get_theme_file_uri('/template-parts/compound/customers-words/assets/styles.css'),[],VERSION);
		wp_enqueue_script('customer-word', get_theme_file_uri('/template-parts/compound/customers-words/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/styles.css'),[],VERSION);
		wp_enqueue_style('affiliate-marketing', get_theme_file_uri('/template-parts/Round1/page-affiliate-marketing/assets/affiliate.css'),[],VERSION);
	}


	// 	home page
	if (is_front_page()) {
		// 		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',[],VERSION);
		// 		wp_enqueue_script("swiper", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], VERSION, true);
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('number', get_theme_file_uri('/template-parts/Round1/homepage/section-number/assets/styles.css'),[],VERSION);
		wp_enqueue_style('multi-purpose', get_theme_file_uri('/template-parts/Round1/homepage/section-multi-purpose/assets/styles.css'),[],VERSION);
		wp_enqueue_script('multi-purpose', get_theme_file_uri('/template-parts/Round1/homepage//section-multi-purpose/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('intergrations', get_theme_file_uri('/template-parts/Round1/homepage/section-intergrations/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('homepage', get_theme_file_uri('/template-parts/Round1/homepage/assets/homepage.css'),[],VERSION);
		$custom_css = get_field('custom_css');
		if ($custom_css) {
			wp_add_inline_style('homepage', $custom_css);
		}
	}
	// 	Contact
	if (is_page_template('static-pages/page-contact.php')) {
		wp_enqueue_script('jquery');
		wp_enqueue_style('page-contact', get_theme_file_uri('/template-parts/Round1/page-contact/assets/styles.css'),[],VERSION);
		wp_enqueue_script('contact', get_theme_file_uri('/template-parts/Round1/page-contact/assets/scripts.js'), [], VERSION, true);
	}

	// 	beauty
	if (is_page_template('static-pages-R3/page-beauty_health.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('marketing', get_theme_file_uri('/template-parts/Round3/page-beauty-health/section-marketing/assets/styles.css'),[],VERSION);
		wp_enqueue_style('profits', get_theme_file_uri('/template-parts/Round3/page-beauty-health/section-extra-profits/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('explore', get_theme_file_uri('/template-parts/Round3/page-beauty-health/section-explore/assets/styles.css'),[],VERSION);
		wp_enqueue_script('explore', get_theme_file_uri('/template-parts/Round3/page-beauty-health/section-explore/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('beauty-health', get_theme_file_uri('/template-parts/Round3/page-beauty-health/assets/beauty_health.css'),[],VERSION);
	}

	// 	Fashion
	if (is_page_template('static-pages-R3/page-fashion.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('empowred', get_theme_file_uri('/template-parts/Round3/page-fashion/section-empowerd/assets/styles.css'),[],VERSION);
		wp_enqueue_style('story', get_theme_file_uri('/template-parts/Round3/page-fashion/setion-story/assets/styles.css'),[],VERSION);
		wp_enqueue_script('story', get_theme_file_uri('/template-parts/Round3/page-fashion/setion-story/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('brands', get_theme_file_uri('/template-parts/Round3/page-fashion/section-fashion-brands/assets/styles.css'),[],VERSION);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('fashion', get_theme_file_uri('/template-parts/Round3/page-fashion/assets/fashion.css'),[],VERSION);
	}
	// 	Home & Tool
	if (is_page_template('static-pages-R3/page-home_tool.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('partner', get_theme_file_uri('/template-parts/Round3/page-home-tool/section-partner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('simplify', get_theme_file_uri('/template-parts/Round3/page-home-tool/section-simplify/assets/styles.css'),[],VERSION);
		wp_enqueue_style('story', get_theme_file_uri('/template-parts/Round3/page-home-tool/section-story/assets/styles.css'),[],VERSION);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('home-tool', get_theme_file_uri('/template-parts/Round3/page-home-tool/assets/styles.css'),[],VERSION);
	}
	// 	Sports
	if (is_page_template('static-pages-R3/page-sports.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('partner', get_theme_file_uri('/template-parts/Round3/page-sports/section-partner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('turnpro', get_theme_file_uri('/template-parts/Round3/page-sports/section-turnpro/assets/styles.css'),[],VERSION);
		wp_enqueue_style('story', get_theme_file_uri('/template-parts/Round3/page-sports/section-story/assets/styles.css'),[],VERSION);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('sports', get_theme_file_uri('/template-parts/Round3/page-sports/assets/sports.css'),[],VERSION);
	}

	// 	Customer Success
	if (is_page_template('static-pages-R3/page-customer_success.php')) {
		// 		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',[],VERSION);
		// 		wp_enqueue_script("swiper", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], VERSION, true);
		wp_enqueue_style('stories', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-story/assets/styles.css'),[],VERSION);
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/styles.css'),[],VERSION);
		wp_enqueue_style('slide', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-slide/assets/styles.css'),[],VERSION);
		wp_enqueue_script('slide', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-slide/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('blog', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-blog/assets/styles.css'),[],VERSION);
		wp_enqueue_script('blog', get_theme_file_uri('/template-parts/Round3/page-customer-success/section-blog/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('customer-success', get_theme_file_uri('/template-parts/Round3/page-customer-success/assets/customer-story.css'),[],VERSION);
	}
	//  Refferal Marketing
	if (is_page_template('static-pages-R3/page-referral_marketing.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/styles.css'),[],VERSION);
		wp_enqueue_style('proofs', get_theme_file_uri('/template-parts/Round3/page-referral-mkt/section-proofs/assets/styles.css'),[],VERSION);
		if (!isMobileDevice()) {
			wp_enqueue_style('simplify', get_theme_file_uri('/template-parts/Round3/page-referral-mkt/section-simplify/assets/styles.css'),[],VERSION);
		} else {
			wp_enqueue_style('simplify', get_theme_file_uri('/template-parts/Round3/page-referral-mkt/section-simplify/assets/responsives.css'),[],VERSION);
		}
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'),[],VERSION);
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'),[],VERSION);
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'),[],VERSION);
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('ref-mkt', get_theme_file_uri('/template-parts/Round3/page-referral-mkt/assets/referral-mkt.css'),[],VERSION);
	}


	// 	Getting Started
	if (is_page_template('static-pages-R3/page-getting_started.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/styles.css'),[],VERSION);
		wp_enqueue_style('aff-mkt', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-aff-mkt/assets/styles.css'),[],VERSION);
		wp_enqueue_style('alternative', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-alternative/assets/styles.css'),[],VERSION);
		wp_enqueue_style('starters', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-for-starters/assets/styles.css'),[],VERSION);
		wp_enqueue_style('simplify-pc', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-simplify/assets/styles.css'),[],VERSION);
		wp_enqueue_style('simplify-mb', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-simplify/assets/responsives.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('tip-guide', get_theme_file_uri('/template-parts/Round3/page-getting-started/section-tips-guides/assets/styles.css'),[],VERSION);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'),[],VERSION);
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'),[],VERSION);
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'),[],VERSION);
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('getting-st', get_theme_file_uri('/template-parts/Round3/page-getting-started/assets/get_started.css'),[],VERSION);
	}



	// 	================================================= Round 2 =================================================
	if (is_page_template('static-pages-R2/page-refersion.php') || is_page_template('static-pages-R2/page-snowball.php') || is_page_template('static-pages-R2/page-impact.php') || is_page_template('static-pages-R2/page-go_affpro.php')) {
		wp_enqueue_style('number', get_theme_file_uri('/template-parts/Round1/homepage/section-number/assets/styles.css'),[],VERSION);
		wp_enqueue_style('table', get_theme_file_uri('/template-parts/Round2/compound/section-table/assets/styles.css'),[],VERSION);
		wp_enqueue_style('banner-r2', get_theme_file_uri('/template-parts/Round2/compound/section-banner-r2/assets/styles.css'),[],VERSION);
		wp_enqueue_style('why-uppromote', get_theme_file_uri('/template-parts/Round2/compound/section-why-uppromote/assets/styles.css'),[],VERSION);
		wp_enqueue_style('switch-to-uppromote', get_theme_file_uri('/template-parts/Round2/compound/section-to-uppromote/assets/styles.css'),[],VERSION);
		wp_enqueue_style('compare', get_theme_file_uri('/template-parts/Round2/compound/section-compare/assets/styles.css'),[],VERSION);
		wp_enqueue_style('switch', get_theme_file_uri('/template-parts/Round2/compound/section-switch/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
	}
	if (is_page_template('static-pages-R2/page-refersion.php')) {
		wp_enqueue_style('refersion', get_theme_file_uri('/template-parts/Round2/refersion/assets/styles.css'),[],VERSION);
	}
	if (is_page_template('static-pages-R2/page-snowball.php')) {
		wp_enqueue_style('social-snowball', get_theme_file_uri('/template-parts/Round2/snowball/assets/styles.css'),[],VERSION);
	}
	if (is_page_template('static-pages-R2/page-go_affpro.php')) {
		wp_enqueue_style('go-affpro', get_theme_file_uri('/template-parts/Round2/go-affpro/assets/styles.css'),[],VERSION);
	}
	if (is_page_template('static-pages-R2/page-impact.php')) {
		wp_enqueue_style('impact', get_theme_file_uri('/template-parts/Round2/impact/assets/styles.css'),[],VERSION);
	}
	if (is_page_template('static-pages-R2/page-influencer.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/styles.css'),[],VERSION);
		wp_enqueue_style('handle', get_theme_file_uri('/template-parts/Round2/page-influence/section-handle/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('solution', get_theme_file_uri('/template-parts/Round2/page-influence/section-solutions/assets/styles.css'),[],VERSION);
		wp_enqueue_style('client', get_theme_file_uri('/template-parts/Round2/page-influence/section-client/assets/styles.css'),[],VERSION);
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'),[],VERSION);
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'),[],VERSION);
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'),[],VERSION);
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], VERSION, true);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('influencer', get_theme_file_uri('/template-parts/Round2/page-influence/assets/influencer.css'),[],VERSION);
	}
	// 	================================================= Single POST =================================================
	if (is_singular('post')) {
		wp_enqueue_style('short-code', get_theme_file_uri('/assets/css/shortcodes.css'),[],VERSION);
		wp_enqueue_style('single', get_theme_file_uri('/assets/css/single.css'),[],VERSION);
	}
	// 	================================================= Round 4 =================================================
	// Author
	if (is_page_template('static-pages-R4/page-author.php')) {
		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',[],VERSION);
		wp_enqueue_script("swiper", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], VERSION, true);
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round4/page-author/section-banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('info', get_theme_file_uri('/template-parts/Round4/page-author/section-info/assets/styles.css'),[],VERSION);
		if (isMobileDevice()) {
			wp_enqueue_style('album', get_theme_file_uri('/template-parts/Round4/page-author/section-album/assets/responsives.css'),[],VERSION);
			wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/Round4/page-author/section-album/assets/scripts.js'), [], VERSION, true);
		} else {
			wp_enqueue_style('album', get_theme_file_uri('/template-parts/Round4/page-author/section-album/assets/styles.css'),[],VERSION);
		}
		wp_enqueue_style('article', get_theme_file_uri('/template-parts/Round4/page-author/section-article/assets/styles.css'),[],VERSION);
		wp_enqueue_script('article', get_theme_file_uri('/template-parts/Round4/page-author/section-article/assets/scripts.js'), [], VERSION, true);
	}
	// 	================================================= Round5 ================================================= 
	// 	Commission
	if (is_page_template('static-pages-R5/page-smart_commission.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'),[],VERSION);
		wp_enqueue_style('winbig', get_theme_file_uri('/template-parts/Round5/page-smart-commisision/section-winbig/assets/styles.css'),[],VERSION);
		wp_enqueue_style('further', get_theme_file_uri('/template-parts/Round5/components/section-further/assets/styles.css'),[],VERSION);
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('simple', get_theme_file_uri('/template-parts/Round5/page-smart-commisision/section-simple/assets/styles.css'),[],VERSION);
		wp_enqueue_style('advanced', get_theme_file_uri('/template-parts/Round5/page-smart-commisision/section-advanced/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('smart-commission', get_theme_file_uri('/template-parts/Round5/page-smart-commisision/assets/smart-commision.css'),[],VERSION);
	}
	// 	Custom Dashboard
	if (is_page_template('static-pages-R5/page-custom_dashboard.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'),[],VERSION);
		wp_enqueue_style('further', get_theme_file_uri('/template-parts/Round5/components/section-further/assets/styles.css'),[],VERSION);
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('bespoke', get_theme_file_uri('/template-parts/Round5/page-customdb/assets/bespoke.css'),[],VERSION);
		wp_enqueue_style('customisable', get_theme_file_uri('/template-parts/Round5/page-customdb/assets/customisable.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('custom-dashboard', get_theme_file_uri('/template-parts/Round5/page-customdb/assets/custom-dashboard.css'),[],VERSION);
	}
	// White Label
	if (is_page_template('static-pages-R5/page-white_label.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'),[],VERSION);
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('own-style', get_theme_file_uri('/template-parts/Round5/page-whitelabel/assets/own-style.css'),[],VERSION);
		wp_enqueue_style('customisable', get_theme_file_uri('/template-parts/Round5/page-whitelabel/assets/white-label-features.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('white-label', get_theme_file_uri('/template-parts/Round5/page-whitelabel/assets/white-label.css'),[],VERSION);
	}
	//Features
	if (is_page_template('static-pages-R5/page-feature_page.php')) {
		wp_enqueue_style('banner-desktop', get_theme_file_uri('/template-parts/compound/banner-desktop/assets/styles.css'),[],VERSION);
		wp_enqueue_style('support-at-every-step', get_theme_file_uri('/template-parts/Round5/page-featurepage/support-at-every-step/assets/styles.css'),[],VERSION);
		wp_enqueue_script('support-at-every-step', get_theme_file_uri('/template-parts/Round5/page-featurepage/support-at-every-step/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('program-setup', get_theme_file_uri('/template-parts/Round5/page-featurepage/program-setup/assets/styles.css'),[],VERSION);
		wp_enqueue_style('affiliate-recruitment', get_theme_file_uri('/template-parts/Round5/page-featurepage/affiliate-recruitment/assets/styles.css'),[],VERSION);
		wp_enqueue_style('affiliate-management', get_theme_file_uri('/template-parts/Round5/page-featurepage/affiliate_management/assets/styles.css'),[],VERSION);
		wp_enqueue_style('tracking-analytics', get_theme_file_uri('/template-parts/Round5/page-featurepage/tracking-analytics/assets/styles.css'),[],VERSION);
		wp_enqueue_style('payment', get_theme_file_uri('/template-parts/Round5/page-featurepage/payment/assets/styles.css'),[],VERSION);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round5/page-featurepage/assets/feature.css'),[],VERSION);
	}
	// 	================================================= Round6 ================================================= 
	// Recurring Comiissions
	if (is_page_template('static-pages-R6/page-recurring_commissions.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('triple', get_theme_file_uri('/template-parts/compound/triple-aff/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('why-customer', get_theme_file_uri('/template-parts/compound/why-customer-think/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('recurring-commissions', get_theme_file_uri('/template-parts/Round6/page-recurring-commissions/assets/styles.css'),[],VERSION);
	}
	// MLM
	if (is_page_template('static-pages-R6/page-mlm.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'),[],VERSION);
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		// 		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('mlm', get_theme_file_uri('/template-parts/Round6/page-mlm/assets/mlm.css'),[],VERSION);
	}

	// Lifetime
	if (is_page_template('static-pages-R6/page-lifetime_commissions.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('triple', get_theme_file_uri('/template-parts/compound/triple-aff/assets/styles.css'),[],VERSION);
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		// 		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('commission', get_theme_file_uri('/template-parts/Round6/page-lifetime/section-lifetime-commission/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('life-time', get_theme_file_uri('/template-parts/Round6/page-lifetime/assets/styles.css'),[],VERSION);
	}
	// About Us
	if (is_page_template('static-pages-R6/page-about_us.php')) {
		wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',[],VERSION);
		wp_enqueue_script("swiper", 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], VERSION, true);
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/page-about-us/section-banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('result', get_theme_file_uri('/template-parts/Round6/page-about-us/section-result/assets/styles.css'),[],VERSION);
		wp_enqueue_style('content', get_theme_file_uri('/template-parts/Round6/page-about-us/section-content/assets/styles.css'),[],VERSION);
		wp_enqueue_style('our-team', get_theme_file_uri('/template-parts/Round6/page-about-us/section-our-team/assets/styles.css'),[],VERSION);
		wp_enqueue_style('core-values', get_theme_file_uri('/template-parts/Round6/page-about-us/section-core-values/assets/styles.css'),[],VERSION);
		wp_enqueue_style('customer', get_theme_file_uri('/template-parts/Round6/page-about-us/section-customer/assets/styles.css'),[],VERSION);
		wp_enqueue_script('customer', get_theme_file_uri('/template-parts/Round6/page-about-us/section-customer/assets/scripts.js'), [], VERSION, true);

	}

	// 	================================================= Round7 ================================================= 
	//  Customer Refferal
	if (is_page_template('static-pages-R7/page-customer_refferal.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('triple', get_theme_file_uri('/template-parts/compound/triple-aff/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('why-customer', get_theme_file_uri('/template-parts/compound/why-customer-think/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('customer-refferal', get_theme_file_uri('/template-parts/Round7/page-customer_refferal/assets/styles.css'),[],VERSION);

	}
	//  Marketplace
	if (is_page_template('static-pages-R7/page-market_place.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('triple', get_theme_file_uri('/template-parts/compound/triple-aff/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('why-customer', get_theme_file_uri('/template-parts/Round7/page-market_place/section-customer-think/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('marketplace', get_theme_file_uri('/template-parts/Round7/page-market_place/assets/styles.css'),[],VERSION);
	}
	// Integration
	if (is_page_template('static-pages-R7/page-integration.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('filter-styles', get_theme_file_uri('/template-parts/Round7/page-integration/section-filter/assets/styles.css'),[],VERSION);
		wp_enqueue_script('filter-script', get_theme_file_uri('/template-parts/Round7/page-integration/section-filter/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('integration', get_theme_file_uri('/template-parts/Round7/page-integration/assets/styles.css'),[],VERSION);

	}
	// 	================================================= Round8 ================================================= 
	// Affiliate Discount Coupons
	if (is_page_template('static-pages-R8/page-affiliate_discount.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('aff-discount', get_theme_file_uri('/template-parts/Round8/page-affiliate_discount/assets/styles.css'),[],VERSION);
	}

	// Affiliate Assets
	if (is_page_template('static-pages-R8/page-affiliate_assets.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('why-customer', get_theme_file_uri('/template-parts/compound/why-customer-think/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('aff-assets', get_theme_file_uri('/template-parts/Round8/page-affiliate_assets/assets/styles.css'),[],VERSION);
	}

	//  Affiliate Fraud Detection
	if (is_page_template('static-pages-R8/page-affiliate_fraud.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('triple', get_theme_file_uri('/template-parts/compound/triple-aff/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('aff-fraud', get_theme_file_uri('/template-parts/Round8/page-affiliate_fraud/assets/styles.css'),[],VERSION);

	}
	if (is_page_template('static-pages-R8/page-road_map.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('why-uppromote-css', get_theme_file_uri('/template-parts/Round8/page-road_map/why-uppromote/assets/styles.css'),[],VERSION);
		wp_enqueue_script('why-uppromote-js', get_theme_file_uri('/template-parts/Round8/page-road_map/why-uppromote/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('feedback-section', get_theme_file_uri('/template-parts/Round8/page-road_map/feedback-section/assets/styles.css'),[],VERSION);
		// 		wp_enqueue_script('feedback-section-js', get_theme_file_uri('/template-parts/Round8/page-road_map/feedback-section/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('roadmap', get_theme_file_uri('/template-parts/Round8/page-road_map/assets/styles.css'),[],VERSION);

	}

	// 	================================================= Round9 ================================================= 
	// Payment Method
	if (is_page_template('static-pages-R9/page-payment_method.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('triple', get_theme_file_uri('/template-parts/compound/triple-aff/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('payment-method', get_theme_file_uri('/template-parts/Round9/page-payment_methos/assets/styles.css'),[],VERSION);

	}
	// Affiliate Reports & Analytics
	if (is_page_template('static-pages-R9/page-affiliate_reports.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'),[],VERSION);
		wp_enqueue_style('why-customer', get_theme_file_uri('/template-parts/compound/why-customer-think/assets/styles.css'),[],VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('report-analytics', get_theme_file_uri('/template-parts/Round9/page-affiliate_reports/assets/styles.css'),[],VERSION);
	}
	//Affiliate Bonus
	if (is_page_template('static-pages-R9/page-affiliate_bonus.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'), [], VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'), [], VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'), [], VERSION);
		wp_enqueue_style('why-customer', get_theme_file_uri('/template-parts/compound/why-customer-think/assets/styles.css'), [], VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'), [], VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'), [], VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		// 		wp_enqueue_style('recurring-commissions', get_theme_file_uri('/template-parts/Round6/page-recurring-commissions/assets/styles.css'), [], VERSION);
		wp_enqueue_style('affiliate-bonus', get_theme_file_uri('template-parts/Round9/page-affiliate-bonus/assets/styles.css'), [], VERSION);

	}
	//Why UpPromote
	if (is_page_template('static-pages-R9/page-why-up-promote.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'), [], VERSION);
		wp_enqueue_style('partner', get_theme_file_uri('/template-parts/Round3/page-sports/section-partner/assets/styles.css'),[],VERSION);
		// 		wp_enqueue_style('partner', get_theme_file_uri('/template-parts/Round3/page-home-tool/section-partner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('up-promote-advantage', get_theme_file_uri('/template-parts/Round9/why-up-promote/up-promote-advantage/assets/styles.css'), [], VERSION);
		wp_enqueue_script('up-promote-advantage', get_theme_file_uri('/template-parts/Round9/why-up-promote/up-promote-advantage/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('up-promote-difference', get_theme_file_uri('/template-parts/Round9/why-up-promote/up-promote-difference/assets/styles.css'), [], VERSION);
		wp_enqueue_style('features', get_theme_file_uri('/template-parts/Round1/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('pricing-plan', get_theme_file_uri('/template-parts/compound/pricing-plan/assets/styles.css'),[],VERSION);
		// 		wp_enqueue_style('customer', get_theme_file_uri('/template-parts/Round6/page-about-us/section-customer/assets/styles.css'),[],VERSION);

		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_style('compare', get_theme_file_uri('/template-parts/Round2/compound/section-compare/assets/styles.css'),[],VERSION);
		wp_enqueue_style('customer', get_theme_file_uri('/template-parts/Round6/page-about-us/section-customer/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'), [], VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'), [], VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('why-uppromote', get_theme_file_uri('/template-parts/Round9/why-up-promote/assets/styles.css'), [], VERSION);
		wp_enqueue_script('why-uppromote', get_theme_file_uri('/template-parts/Round9/why-up-promote/assets/scripts.js'), [], VERSION, true);


	}
	// 	================================================= Round10 ================================================= 
	//Pricing
	if (is_page_template('static-pages-R10/page-pricing.php')) {
		wp_enqueue_style('pricing', get_theme_file_uri('/template-parts/Round10/pricing/assets/styles.css'), [], VERSION);
		wp_enqueue_script('pricing', get_theme_file_uri('/template-parts/Round10/pricing/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('utils', get_theme_file_uri('/assets/css/utils.css'),[],VERSION);
		wp_enqueue_style('accordion', get_theme_file_uri('/assets/css/accordion.css'),[],VERSION);
		wp_enqueue_style('faqs', get_theme_file_uri('/template-parts/compound/faqs/assets/styles.css'),[],VERSION);
		wp_enqueue_script("collapse", get_theme_file_uri('/assets/bootstrap/js/src/collapse.js'), [], VERSION, true);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'), [], VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'), [], VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
	}

	// Auto Payout
	if (is_page_template('static-pages-R10/page-auto_payout.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round6/compound/banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('campaign', get_theme_file_uri('/template-parts/Round5/components/section-campaign/assets/styles.css'),[],VERSION);
		wp_enqueue_style('feature', get_theme_file_uri('/template-parts/Round5/components/section-feature/assets/styles.css'),[],VERSION);
		wp_enqueue_style('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/styles.css'),[],VERSION);
		wp_enqueue_script('most-entrusted', get_theme_file_uri('/template-parts/Round1/homepage/section-most-entrusted/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/styles.css'),[],VERSION);
		wp_enqueue_style('get-started-mb', get_theme_file_uri('/template-parts/compound/get-started/assets/responsives.css'),[],VERSION);
		wp_enqueue_script('get-started', get_theme_file_uri('/template-parts/compound/get-started/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('auto-payout', get_theme_file_uri('/template-parts/Round10/page-auto_payout/assets/styles.css'),[],VERSION);
	}

	// Partners 	
	if (is_page_template('static-pages-R10/page-partners.php')) {
		wp_enqueue_style('banner', get_theme_file_uri('/template-parts/Round10/page-partners/section-banner/assets/styles.css'),[],VERSION);
		wp_enqueue_style('logo-carousel', get_theme_file_uri('/template-parts/compound/logo-carousel/assets/styles.css'),[],VERSION);
		wp_enqueue_style('up-promote-difference', get_theme_file_uri('/template-parts/Round9/why-up-promote/up-promote-difference/assets/styles.css'), [], VERSION);
		wp_enqueue_style('good-fit', get_theme_file_uri('/template-parts/Round10/page-partners/section-good-fit/assets/styles.css'),[],VERSION);
		wp_enqueue_style('why-customer', get_theme_file_uri('/template-parts/compound/why-customer-think/assets/styles.css'), [], VERSION);
		wp_enqueue_style('form-collab', get_theme_file_uri('/template-parts/Round10/page-partners/section-form/assets/styles.css'),[],VERSION);
		wp_enqueue_script('form-collab', get_theme_file_uri('/template-parts/Round10/page-partners/section-form/assets/scripts.js'), [], VERSION, true);
		wp_enqueue_style('page-partners', get_theme_file_uri('/template-parts/Round10/page-partners/assets/styles.css'),[],VERSION);	
	}
	// Directory
	if (is_page_template('static-pages-R10/page-directory.php')) {
		wp_enqueue_style('directory', get_theme_file_uri('/template-parts/Round10/page-directory/assets/styles.css'),[],VERSION);
		wp_enqueue_script('directory', get_theme_file_uri('/template-parts/Round10/page-directory/assets/scripts.js'), [], VERSION, true);

	}

}
add_action('wp_enqueue_scripts', 'wp_enqueue_local', 1001);

// ============================== wp_enqueue lib =====================//
add_filter('script_loader_tag', 'add_type_attribute', 10, 3);
function add_type_attribute($tag, $handle, $src)
{
	// if not your script, do nothing and return original $tag
	if ('collapse' !== $handle && 'offcanvas' !== $handle) {
		return $tag;
	}

	// change the script tag by adding type="module" and return it.
	$tag = '<script type="module" src="' . esc_url($src) . '"></script>';
	return $tag;
}
