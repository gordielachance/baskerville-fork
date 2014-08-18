<?php $audio_url = get_post_meta($post->ID, 'audio_url', true); ?>

<div class="post-header">
	
    <h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    
    <?php if( is_sticky() ) { ?> <span class="sticky-post"><?php _e('Sticky post', 'baskerville'); ?></span> <?php } ?>
    
</div> <!-- /post-header -->

<?php if ( $audio_url != '' ) : ?>
	
	<div class="post-audio">
	
		<audio controls="controls" id="audio-player">
		
			<source src="<?php echo $audio_url; ?>" />
			
		</audio>
	
	</div> <!-- /post-audio -->
		
<?php endif; ?>

<?php if($post->post_content != "") : ?>
									                                    	    
	<div class="post-excerpt">
		    		            			            	                                                                                            
		<?php the_excerpt('100'); ?>
	
	</div> <!-- /post-excerpt -->

<?php endif; ?>
									                                    	    
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