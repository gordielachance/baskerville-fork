<?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>

<?php if ( has_post_thumbnail() ) : ?>

	<div class="featured-media">
	
		<?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>
	
		<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
		
			<?php the_post_thumbnail('post-thumbnail'); ?>
			
		</a>
				
	</div> <!-- /featured-media -->
		
<?php endif; ?>

<div class="post-excerpt">

	<?php if ( !empty(get_post(get_post_thumbnail_id())->post_excerpt) ) : ?>
										
		<p class="image-caption"><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></p>
		
	<?php else : the_excerpt('100'); endif; ?>
		
</div>
									                                    	    
<div class="post-meta">

	<a class="post-date" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><i class="fa fa-clock-o"></i> <?php the_time( 'Y/m/d' ); ?></a>
	
	<?php
	
		if( function_exists('zilla_likes') ) zilla_likes(); 
	
		if ( comments_open() ) {
			comments_popup_link( '<i class="fa fa-comments-o"></i> 0', '<i class="fa fa-comments-o"></i> 1', '<i class="fa fa-comments-o"></i> %', 'post-comments' );
		}
		
		edit_post_link('<i class="fa fa-pencil-square-o"></i>'); 
	
	?>

	<div class="clear"></div>

</div>
            
<div class="clear"></div>