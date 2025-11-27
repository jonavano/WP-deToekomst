<?php
$editors_choice_section_title = get_theme_mod( 'editors_choice_section_title', 'Editors Choice' );
$editors_choice_id 			  = get_theme_mod( 'editors_choice_category', '' );
$number_of_editors_choice_items     = get_theme_mod( 'number_of_editors_choice_items', 6 );

$query = new WP_Query( apply_filters( 'cube_edge_editors_choice_args', array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'posts_per_page'      => absint( $number_of_editors_choice_items ),
	'cat'                 => $editors_choice_id,
	'offset'              => 0,
	'ignore_sticky_posts' => 1
)));

$posts_array = $query->get_posts();
$show_editors_choice = count( $posts_array ) > 0 && is_home();

if( get_theme_mod( 'editors_choice', true ) && $show_editors_choice ){
	?>
	<section class="section-editors-choice">
		<div class="section-header">
			<h2 class="section-title"><?php echo esc_html($editors_choice_section_title); ?></h2>
		</div><!-- .section-header -->

		<div class="columns-3 clear">
			<?php
			while ( $query->have_posts() ) : $query->the_post(); ?>

	            <article>
	            	<div class="editors-choice-item">
						<div class="featured-image" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
							<a href="<?php the_permalink();?>" class="post-thumbnail-link"></a>
						</div><!-- .featured-image -->

			            <div class="entry-container">
			            	<div class="entry-meta">
				        		<?php if( 'post' == get_post_type() ): 
									$categories_list = get_the_category_list( ' ' );
									if( $categories_list ):
									printf( '<span class="cat-links">' . '%1$s' . '</span>', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
								endif; endif; ?>
				        	</div><!-- .entry-meta -->

							<header class="entry-header">
								<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</header>

							<?php cube_edge_posted_on() ?>
				        </div><!-- .entry-container -->
				    </div><!-- .editors-choice-item -->
	            </article>
		        
			<?php
			endwhile; 
			wp_reset_postdata(); ?>
		</div><!-- .columns-4 -->
	</section>
<?php } ?>