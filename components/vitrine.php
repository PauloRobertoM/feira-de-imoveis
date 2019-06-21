<?php
	$args = array(
		'posts_per_page' => 5,
		'post_type'      => 'vitrines',
	);

	$vitrines = get_posts($args);
?>

<section class="vitrine">
	<div class="owl-carousel owl-theme">
		<?php foreach ($vitrines as $vitrine) : ?>
			<div class="item">
				<?php
		        	$vitrines = rwmb_meta('vitrines_foto', 'type=plupload_image', $vitrine->ID);
		        	foreach ( $vitrines as $vitrine ) {
		        		echo "<img src='{$vitrine['url']}' alt='{$vitrine['alt']}' />";
		        	}
	        	?>
			</div><!-- item -->
		<?php endforeach; ?>
    </div><!-- . owl-carousel -->
</section><!-- vitrine -->