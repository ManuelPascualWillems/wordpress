<?php get_header(); ?>
<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
    <?php if ( have_posts() ) : the_post(); ?>
      <section>
        <h1><?php the_title(); ?></h1>
        <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
        <?php the_category (); ?>
        <?php the_content(); ?>
        <p>Etiquetas: <?php the_tags('',',',''); ?></p>
        <p><address>Creado por <?php the_author_posts_link() ?></address></p>
       <?php comments_template(); ?>
      </section>
    <?php else : ?>
      <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
    <?php endif; ?>
  </div>
  <div class="col-xs-0 col-sm-3">
    <?php get_sidebar(); ?>
  </div>
</div>
<?php get_footer(); ?>
