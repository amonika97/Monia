

<div class="blog-card">
  <div class="blog-card-header">
    <h2 class="blog-card-title"><?php the_title(); ?></h2>
    <div class="blog-card-meta"><?php echo 'Posted by ' . get_the_author() . ' on ' . get_the_date();?></div>
  </div>
  <div class="blog-card-image">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('medium'); ?>
    <?php endif; ?>
  </div>
  <div class="blog-card-content">
    <?php the_tags(); ?>
    <?php the_content(); ?>
  </div>
</div>


