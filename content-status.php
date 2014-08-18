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
		
		edit_post_link(); 
	
	?>

	<div class="clear"></div>

</div>
            
<div class="clear"></div>