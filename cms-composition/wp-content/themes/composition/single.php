<?php 
    get_header();
 
    ?>

    
    <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
              <h1><?php the_title();?></h1>
                <img src="<?php the_post_thumbnail_url();?>" alt="" style="width:100%; height:auto">
                <?php the_content();?>
            <?php endwhile ?>
            <a href="<?= get_post_type_archive_link('post') ?>" class="btn btn-info">Voir la page des actualités</a>
<?php else: ?>
    <h1>pas d'articles</h1>
<?php endif; ?>


<?php get_footer(); ?>
