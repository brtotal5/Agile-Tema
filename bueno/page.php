<?php get_header(); ?>
       
    <div class="container">
		<div class="row">
		
			            
            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>                             
                                                                        
                <section>   
                     
                    <div class="col s4 offset-s5">
                        <div class="card blue-grey darken-1 retira_borda retira_margin retira_sombra">  
                            <div class="card-content white-text retira_borda_padding"> 
                                <h1 class="card-title add_margin_left white-text"><?php the_title(); ?></h1>                               
                             </div>
                        </div>
                    </div>
                    <div class="col s7 offset-s5">
                        <div class="card blue-light retira_borda retira_margin retira_sombra deslocamento_index">
                            <div class="card-content definir_font">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col s7 img_destaque_margin">
                        <div class="card blue-grey darken-1 retira_borda retira_margin retira_sombra">  
                            <div class="card-content white-text"> 
                                <?php the_content(); ?>                               
                             </div>
                        </div>
                    </div>  
                    <div class="col s5">
                        <div class="card blue-grey darken-1 retira_borda retira_margin retira_sombra">  
                            <div class="card-content white-text"> 
                                <?php the_content(); ?>                              
                             </div>
                        </div>
                    </div>                            
                </section>            
                                                    
			<?php endwhile; else: ?>
				<div class="post">
                	<p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
                </div><!-- /.post -->
            <?php endif; ?>  
        
		</div><!-- row -->

        <?php get_sidebar(); ?>

    </div><!-- container -->
		
<?php get_footer(); ?>