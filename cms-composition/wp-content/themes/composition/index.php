<?php 
    get_header();
 
    ?>

<h1 class="title">Index</h1>
    <?php if(have_posts()): ?>
        <div class="row mt-5">
            <?php while(have_posts()): the_post(); ?>
                <div class="col-sm-5 offset-sm-1">
                <a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>
                    <div class="card-body">
                        
                            
                    <?php the_post_thumbnail('large' , ['class' => 'card-img-top' , 'alt' => '' , 'style' => 'height: auto']) ?>
                            <p class="card-text"><?php the_excerpt();?></p></a>
                            
                        
                    </div>
                </div>
           
        <?php endwhile ?>
        </div> 
<?php else: ?>
    <h1>pas d'articles</h1>
<?php endif; ?>

<?php get_footer(); ?>
