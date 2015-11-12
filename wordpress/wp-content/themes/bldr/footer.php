<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package BLDR
 */
?>

	</div><!-- #content -->
    
    <?php if( get_theme_mod( 'active_footer_social' ) == '') : ?> 
        
        	<div class="social-bar"> 
        		<div class="grid grid-pad">
        			<div class="col-1-1">
                
                	<?php if ( get_theme_mod( 'footer_social_text' ) ) : ?>
        			  	<h3><?php echo esc_html( get_theme_mod( 'footer_social_text' )); ?></h3> 
                	<?php else : ?>  
					<?php endif; ?> 
              			
                        	<ul class='social-media-icons'>
                            	<?php if ( get_theme_mod( 'bldr_fb' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_fb' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-facebook"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_twitter' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_twitter' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>> 
                                    <i class="fa fa-twitter"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_linked' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_linked' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-linkedin"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_google' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_google' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-google-plus"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_instagram' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_instagram' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-instagram"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_flickr' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_flickr' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-flickr"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_pinterest' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_pinterest' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-pinterest"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_youtube' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_youtube' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-youtube"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_vimeo' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_vimeo' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-vimeo-square"></i>
                                    </a>
                                    </li> 
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_tumblr' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_tumblr' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-tumblr"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                <?php if ( get_theme_mod( 'bldr_dribbble' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_dribbble' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-dribbble"></i>
                                    </a>
                                    </li>
								<?php endif; ?>
                                
                                <?php if ( get_theme_mod( 'bldr_behance' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_behance' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-behance"></i>
                                    </a> 
                                    </li>
								<?php endif; ?>
                                
                                <?php if ( get_theme_mod( 'bldr_rss' ) ) : ?>
                                	<li>
                                    <a href="<?php echo esc_url( get_theme_mod( 'bldr_rss' )); ?>" <?php if( get_theme_mod( 'bldr_social_new_window' ) ) : ?>target="_blank"<?php endif; ?>>
                                    <i class="fa fa-rss"></i>
                                    </a>
                                    </li>   
								<?php endif; ?>
                        	</ul>
                       
                
                	</div><!-- col-1-1 -->
        		</div><!-- grid -->
        	</div><!-- social-bar -->
        
    	<?php else : ?>  
		<?php endif; ?>
		<?php // end if ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
    	<div class="grid grid-pad">
        
        	<?php if ( is_active_sidebar('footer-1') ) : ?> 
        		<div class="col-1-4">
					<?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-2') ) : ?>
        		<div class="col-1-4">
					<?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-3') ) : ?>
        		<div class="col-1-4">
					<?php dynamic_sidebar('footer-3'); ?>
                </div>
            <?php endif; ?>
            
            <?php if ( is_active_sidebar('footer-4') ) : ?>
        		<div class="col-1-4">
					<?php dynamic_sidebar('footer-4'); ?>
                </div>
            <?php endif; ?>
            
        </div>
    	<div class="grid grid-pad">
        	<div class="col-1-1">
                <div class="site-info">
                    <?php if ( get_theme_mod( 'bldr_footerid' ) ) : ?> 
        				<?php echo esc_html( get_theme_mod( 'bldr_footerid' )); // footer id ?> 
					<?php else : ?>  
    					<?php printf( __( 'Theme: %1$s by %2$s', 'bldr' ), 'bldr', '<a href="http://modernthemes.net" rel="designer">modernthemes.net</a>' ); ?>
					<?php endif; ?> 
                </div><!-- .site-info -->
        	</div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
