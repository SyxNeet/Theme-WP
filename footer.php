</main>
<?php if(isMobileDevice()) {
	get_template_part('template-parts/compound/footer/footer','mb');
	}else {
		get_template_part('template-parts/compound/footer/footer');
		} ?> 
<?php wp_footer(); ?>
</body>
</html>