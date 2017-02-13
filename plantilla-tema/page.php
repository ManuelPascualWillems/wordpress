<?php get_header(); ?>
<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
    <?php if ( have_posts() ) : the_post(); ?>
      <section>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </section>
    <?php endif; ?>
  </div>
  <div class="col-xs-0 col-sm-3">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
