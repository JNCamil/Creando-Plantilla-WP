<?php get_header(); ?>
<div class="row">

  <div class="col-sm-8 blog-main">


    

    

        <div class="blog-post">
          <h2 class="blog-post-title"><?php the_title(); ?> </h2> 
          
          <?php if(has_post_thumbnail()): ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail('thumbnail') ?>
            </div>
          <?php endif; ?>
          <p><?php the_content(); ?></p>

          

        </div><!-- /.blog-post -->



  </div><!-- /.blog-main -->
  <?php get_footer(); ?>