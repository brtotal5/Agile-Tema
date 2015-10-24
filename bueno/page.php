<?php get_header(); ?>
       
    <div class="container">
		<div class="row">
		
			            
            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>

                <div class="col s6">
                    <div class="card blue-grey darken-1">  
                        <div class="card-content"> 
                            <p>teste</p>
                        </div>
                    </div>
                </div><!--end col s6 post --> 
                                                                        
                <div class="col s6">
                    <div class="col s7">
                        <div class="card blue-grey darken-1 retira_borda">  
                            <div class="card-content white-text retira_borda_padding"> 
                                <h1 class="card-title add_margin_left"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>                               
                             </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="card blue-light">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div><!--end col s6 post -->                 
                
				
                                                    
			<?php endwhile; else: ?>
				<div class="post">
                	<p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
                </div><!-- /.post -->
            <?php endif; ?>  
        
		</div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>