 <?php
/**
 * The main template file
 * 
 * @package saschapiesker
 */
?>
<?php get_header(); ?>
  <div class="portrait">
    Hallo, ich bin Sascha Piesker, <br />Medieninformatiker aus Berlin
  </div>
  <div class="content" id="main-column">
    <main id="main" class="site-main" role="main">
      <?php if (have_posts()) { ?> 
        <?php while ( have_posts() ) : the_post(); ?>
          <a class="post-thumbs view view-first" href="<?php echo get_permalink(); ?>">
            <div class="mask">
              <div class="image-caption"> 
               <h2><?php echo get_the_title( $ID ); ?></h2>  
               <p><?php $meta = get_post_meta($post->ID, $field['_my_meta_value_key'], true); echo $meta[_my_meta_value_key][0];?></p>
               </div>
              </div>
             <?php the_post_thumbnail( 'frontpage-thumb' ); ?>
          </a>
        <?php endwhile; ?>
      <?php } // endif; ?> 
      <div style="clear:both"></div>
    </main>
  </div>
<?php get_footer(); ?>