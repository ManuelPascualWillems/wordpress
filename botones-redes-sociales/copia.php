<?php
//Eliminar cohone


/*En el pie del post(Encima de las etiquetas si es una entrada del blog, sino en el pie de la pagina)*/

add_action( 'the_content', 'show_social_buttons' );

function show_social_buttons($content){
  if (is_home() || is_singular())
  {

    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $base = "http://" . $host . $uri . "/wp-content/plugins/botones-redes-sociales/images/";
    $a_click="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;";
    $content=$content.'
      <div>
          <a href="https://www.facebook.com/sharer/sharer.php?u='.get_permalink().'" onclick="'.$a_click.'">
              <img src="'.$base.'facebook.png" height="30px"/>
          </a>

          <a href="https://twitter.com/intent/tweet?url='.get_permalink().'&text='.the_title().'" onclick="'.$a_click.'" >
              <img src="'.$base.'twitter.jpg" height="30px"/>
          </a>

          <a href="https://plus.google.com/share?url='.get_permalink().'" onclick="'.$a_click.'">
            <img src="'.$base.'google_plus.png" height="30px"/>
          </a>

          <a href="http://www.linkedin.com/shareArticle?url='.get_permalink().'" onclick="'.$a_click.'">
            <img src="'.$base.'linkedin.png"/>
          </a>
      </div>';
    }
    return $content;
  }



/*En la cabecera de la página(justo enncima del título)*/

  add_action( 'the_post', 'show_social_buttons' );
  function show_social_buttons(){
    if (is_home() || is_singular())
    {
      $host  = $_SERVER['HTTP_HOST'];
      $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
      $base = "http://" . $host . $uri . "/wp-content/plugins/botones-redes-sociales/images/";
      $a_click="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;";
      ?>
        <div>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" onclick="<?php echo $a_click; ?>">
                <img src="<?php echo $base?>facebook.png" height="30px"/>
            </a>

            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title_attribute(); ?>" onclick="<?php echo $a_click; ?>" >
                <img src="<?php echo $base?>twitter.jpg" height="30px"/>
            </a>

            <a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="<?php echo $a_click; ?>">
              <img src="<?php echo $base?>google_plus.png" height="30px"/>
            </a>

            <a href="http://www.linkedin.com/shareArticle?url=<?php the_permalink(); ?>" onclick="<?php echo $a_click; ?>">
              <img src="<?php echo $base?>linkedin.png"/>
            </a>
        </div>
  <?php
      }
    } ?>
