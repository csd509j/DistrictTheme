<?php $type = get_sub_field('call_to_action_type'); ?>

<div id="cta-block" class="<?php echo (is_page_template('page-parent-no-sidebar.php') ? 'padding-vertical-three' : 'padding-two margin-vertical-two'); ?>">
	<?php echo (is_page_template('page-parent-no-sidebar.php') ? '<div class="container">' : ''); ?>
	<div class="row">
		<?php if($type == "Form"): ?>
			<div id="cta-block-heading" class="<?php echo (get_sub_field('call_to_action_form_type') == 'Horizontal' ? 'col-lg-4 text-right' : 'col-xs-12 margin-bottom-half'); ?>">
				<?php the_sub_field('call_to_action_heading'); ?>
			</div>
			<div class="<?php echo (get_sub_field('call_to_action_form_type') == 'Horizontal' ? 'col-lg-8' : 'col-xs-12'); ?>">
				<?php $form_object = get_sub_field('call_to_action_form'); ?>
				<?php echo do_shortcode('[gravityform id="' . $form_object['id'] . '" title="false" description="false" ajax="true"]'); ?>
			</div>
		<?php endif; ?>
	</div>
	<?php echo (is_page_template('page-parent-no-sidebar.php') ? '</div>' : ''); ?>
</div>