<?php 
    /*
    * Template Name: page_addcontent
    */
?>

<?php acf_form_head(); ?>
<?php get_header(); ?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <?php acf_form(array(
        'post_id'       => 'new_post',
        'new_post'      => array(
            'post_type'     => 'Article',
            'post_status'   => 'publish',
            'post_author' => get_current_user_id(),
            'post_content' => '',
            'post_title' => '',
            

        ),
        'submit_value'  => 'Add Article'
    )); ?>
    <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #primary -->


<?php get_footer(); ?>