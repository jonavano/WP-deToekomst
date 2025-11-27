<?php
$number_of_multiple_items_slider_column         = get_theme_mod( 'number_of_multiple_items_slider_column', 2 );
$number_of_multiple_items_slider         = get_theme_mod( 'number_of_multiple_items_slider', 4 );
$multiple_items_slider_id 			  	 = get_theme_mod( 'multiple_items_slider_category', '' );

$query = new WP_Query( apply_filters( 'slider_posts_args', array(
	'post_type'           => 'post',
	'post_status'         => 'publish',
	'posts_per_page'      => absint( $number_of_multiple_items_slider ),
	'cat'                 => $multiple_items_slider_id,
	'offset'              => 0,
	'ignore_sticky_posts' => 1
)));

$posts_array = $query->get_posts();
$show_multiple_items_slider = count( $posts_array ) > 0 && is_home();

if( get_theme_mod( 'enable_multiple_items_slider', true ) && $show_multiple_items_slider ) {
	?>
	<section id="section-multiple-items-slider" data-slick='{"slidesToShow": <?php echo esc_html($number_of_multiple_items_slider_column); ?>, "slidesToScroll": 1, "infinite": false, "speed": 800, "dots": true, "arrows": false, "autoplay": false, "draggable": true, "fade": false }'>
		<?php
		while ( $query->have_posts() ) : $query->the_post(); ?>

            <article style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');">
	            <div class="entry-container">
	            	<div class="entry-meta">
    					<?php cube_edge_entry_footer(); ?>
		        	</div><!-- .entry-meta -->

					<header class="entry-header">
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</header>
		        </div><!-- .entry-container -->
            </article>
	        
		<?php
		endwhile; 
		wp_reset_postdata(); ?>
	</section>
<?php } ?>