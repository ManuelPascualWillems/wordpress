<?php
/**
* Plugin Name: Botones Redes Sociales
* Description: This plugin adds a widget that shows the share buttons for use with Social Networks.
* Version: 1.0.0
* Author: Manuel Pascual
* License: GPL2
*/

add_action( 'the_content', 'show_social_buttons' );

function show_social_buttons($content){
  if (is_home() || is_singular())
  {
    $url_share=urlencode(get_permalink());
    //$url_share='http://www.facebook.com';
    $title=urlencode(get_the_title());
    $host  = $_SERVER['HTTP_HOST'];
    $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $base = "http://" . $host . $uri . "/wp-content/plugins/botones-redes-sociales/images/";
    $a_click="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;";
    $content=$content.'
      <div>
        <h4>Compartir</h4>
          <p><a href="https://www.facebook.com/sharer.php?u='.$url_share.'&t='.$title.'&s=100" onclick="'.$a_click.'">
              <img src="'.$base.'facebook.png" height="30px"/>
          </a>

          <a href="https://twitter.com/intent/tweet?url='.$url_share.'&text='.$title.'" onclick="'.$a_click.'" >
              <img src="'.$base.'twitter.jpg" height="30px"/>
          </a>

          <a href="https://plus.google.com/share?url='.$url_share.'" onclick="'.$a_click.'">
            <img src="'.$base.'google_plus.png" height="30px"/>
          </a>

          <a href="http://www.linkedin.com/shareArticle?mini=true&url='.$url_share.'&title='.$title.'" onclick="'.$a_click.'">
            <img src="'.$base.'linkedin.png"/>
          </a></p>
      </div>';
    }
    return $content;
  }
