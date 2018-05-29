	<?php get_header(); ?>

	<div id="about" class="container">
		<div class="about content">
		<?php 
			$post = get_page_by_path('presentacion');
			$content = apply_filters('the_content', $post->post_content); 
			echo $content;  
		?>
		</div>
	</div>

	<?php get_footer(); ?>