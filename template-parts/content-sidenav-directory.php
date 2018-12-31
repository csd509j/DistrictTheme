<div id="sidebar-first">
	<div class="navbar navbar-default" role="navigation">
		<?php 		
	
		$children = wp_list_pages("title_li=&depth=1&child_of=564&echo=0");
		$titlenamer = get_the_title('564');

		if ($children): ?>
		
		<div class="navbar-header d-block d-lg-none w-100">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-1x fa-chevron-down"></i>
			</button>
			<h2>
				<span <?php if ( is_page_template( 'page-parent.php' ) ): ?> class="sidebar-parent-title" <?php endif; ?>><a href="<?php the_permalink(get_topmost_parent($post)); ?>"><?php echo $titlenamer; ?></a></span>
			</h2>
		</div>
		<h2 class="d-none d-lg-block w-100">
			<span<?php if ( is_page_template( 'page-parent.php' ) ): ?> class="sidebar-parent-title" <?php endif; ?>><a href="<?php the_permalink(get_topmost_parent($post)); ?>"><?php echo $titlenamer; ?></a></span>
		</h2>
		<div class="navbar-collapse collapse sidebar-navbar-collapse">
			<ul class="nav navbar-nav">
		  		
		  		<?php echo $children; ?>
		  		
			</ul>
		</div>		
		
		<?php 
			
		endif; 
		
		?>
		
	</div>
</div>