<div class="pb-2">

	<?php

	if ( get_sub_field('img') ) {
	
		$image = get_sub_field('img');
	
	} else {
		
		// For legacy images added by ACF-Crop
		$crop = get_sub_field('image');
		$image = $crop['original_image'];
		
	}
	
	echo wp_get_attachment_image($image['id'], 'Page Builder Image', 0, array('class' => 'img-fluid'));

	?>
	
	<?php if ( get_sub_field('image_caption') ) : ?>
				
		<p class="post-image-caption"><?php the_sub_field('image_caption'); ?></p>
		
	<?php endif; ?>

</div>