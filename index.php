	<?php get_header(); ?>

	<div id="presentacion" class="container">
		<div class="about content seccion">
		<?php 
			$post = get_page_by_path('presentacion');
			$content = apply_filters('the_content', $post->post_content); 
			echo $content;  
		?>
		</div>
	</div>

	<div id="perfiles" class="divider_one">
		<h2>PERFILES</h2>
	</div>

	<div class="container clearfix">
		<div class="perfiles content clearfix seccion"> 
	
			<?php
				$args = array(
					'post_type' => 'perfil',
					'post_status' => 'publish',
					'posts_per_page' => -1
				);
			
				$perfiles = get_posts($args);
				foreach($perfiles as $post): setup_postdata($post); 
			?>
			<div class="perfil">
				<div class="perfil_logo">
					<?php the_post_thumbnail('full'); ?>
				</div>
				<div class="perfil_content">
					<?php the_content(); ?>
				</div>
			</div>

			<?php endforeach; wp_reset_postdata(); ?>

		</div>
	</div>

	<div id="innovacion" class="divider_two">
		<h2>INNOVACIÓN</h2>
	</div>

	<div class="container clearfix">
		<div class="innovacion content clearfix seccion"> 
		<?php 
			$post = get_page_by_path('innovacion');
			$content = apply_filters('the_content', $post->post_content); 
			echo $content;  
		?>
		</div>
	</div>

	<div id="impacto" class="divider_three">
		<h2>IMPACTO</h2>
	</div>

	<div class="container clearfix">
		<div class="impacto content clearfix seccion"> 
		<?php 
			$post = get_page_by_path('impacto');
			$content = apply_filters('the_content', $post->post_content); 
			echo $content;  
		?>
		</div>
	</div>


	<?php get_footer(); ?>