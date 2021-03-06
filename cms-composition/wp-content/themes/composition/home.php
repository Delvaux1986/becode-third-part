<?php 
    get_header();
 
    ?>

<h1 class="title">Home</h1>
    <?php if(have_posts()): ?>
       <div class="row">
        
            <?php while(have_posts()): the_post(); ?>
            
            <div class="col-md-5 offset-md-1">
            <div class="card">
                <h5 class="card-title"><?php the_title();?></h5>
                <?php the_post_thumbnail('large' , ['class' => 'card-img-top' , 'alt' => '' , 'style' => 'height: auto']) ?>
                <div class="card-body">
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-info">More</a>
                </div>
                </div>
                </div>
                

        <?php endwhile ?>
        </div> 
<?php else: ?>
    <h1>pas d'articles</h1>
<?php endif; ?>

<?php get_footer(); ?>