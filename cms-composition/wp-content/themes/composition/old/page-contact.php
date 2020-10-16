<?php 
   get_header(); 
    ?>

    <h1 class="text-center">Contact</h1>
    <?php 
        
    ?>

<?php acf_form_head(); ?>

<h1 class="text-center">Add Articles</h1>
<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
    <!-- <?php acf_form(array(
        'post_id'       => 'new_post',
        'post_title'    => true,
        'post_content'  => true,
        'form' => true ,
        'updated_message' => __("Post updated", 'acf'),
        'submit_value' => __("Send", 'acf'),
        'return' => '%post_url%',
        'label_placement' => 'top',
        'uploader' => 'wp',
        'honeypot' => true,
        'kses' => true,
        'html_submit_button'  => '<input type="submit" class="acf-button button button-primary button-large text-center" value="%s" />',
        
    )); 
    ?>
    <?php endwhile; ?>
    </div><!-- #content -->
</div><!-- #primary -->