<?php get_header(); ?>
<div class="row">
  <div class="col-xs-10 col-xs-offset-1 col-sm-7 col-sm-offset-1">
    <p>Resultados de búsqueda para <strong><?php echo get_search_query() ?></strong></p>
      <?php if ( have_posts() ) : ?>
        <section>
          <?php while ( have_posts() ) : the_post(); ?>
            <article>
              <header>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
                <?php the_category (); ?>
              </header>

              <?php the_excerpt(); ?>

              <footer>
                  <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
                  <address>Creado por <?php the_author_posts_link() ?></address>
              </footer>
            </article>
          <?php endwhile; ?>

          <div class="pagination">
            <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
            <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
          </div>
        </section>

      <?php else : ?>
        <p><?php _e('Ups!, no hay entradas.'); ?></p>
      <?php endif; ?>
    </div>

    <div class="col-xs-0 col-sm-3">
      <?php get_sidebar(); ?>
    </div>
  </div>

<?php get_footer(); ?>
