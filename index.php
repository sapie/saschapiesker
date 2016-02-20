 <?php
/**
 * The main template file
 * 
 * @package saschapiesker
 */
?>
<?php get_header(); ?>
  <div class="portrait">
    <h1>Hallo, ich bin Sascha Piesker, <br />Medieninformatiker und Webentwickler aus Berlin</h1>
  </div>
  <div class="about_me">
    <h2>Über mich</h2>
    <p>Ich habe seit meinem Studienabschluss für verschiedene Digitalagenturen und Kreative Freiberufler an
      unterschiedlichen Projekten mitgearbeitet. Meine Kenntnisse umfassen:
  </div>
  <div class="content" id="main-column">
    <main id="main" class="site-main" role="main">
      <h2> Eine Auswahl meiner Bisherigen Arbeiten</h2>
      <?php if (have_posts()) { ?> 
        <?php while ( have_posts() ) : the_post(); ?>
          <div class="post-thumbs container view view-first">
            <div class="1 mask">
              <div class="image-caption"> 
               <h2><?php echo get_the_title( $ID ); ?></h2>  
               <p><?php $meta = get_post_meta($post->ID, $field['_my_meta_value_key'], true); echo $meta[_my_meta_value_key][0];?></p>
              </div>
            </div>
            <div class="c1">
              <?php the_post_thumbnail( 'frontpage-thumb' ); ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php } // endif; ?> 
      <div style="clear:both"></div>
      <h2>Kontakt</h2>
      <p>Sascha Piesker<br />Großbeerenstr. 21<br />12107Berlin</p>
      <a href="mailto:kontakt@saschapiesker.com">kontakt@saschapiesker.com</a>
    </main>
  </div>
<?php get_footer(); ?>