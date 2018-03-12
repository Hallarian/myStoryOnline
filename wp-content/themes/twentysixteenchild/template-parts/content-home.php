<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php
$cat_classes = '';
$cats = get_the_category();
            //print_r($cats);
            foreach($cats as $cat){
                $cat_classes = $cat_classes . $cat->slug . ' ';
            }
?>
   
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="mix umItem <?php echo $cat_classes; ?>"
          <?php 
            $post_id = get_the_ID();
            $sharing = get_post_meta($post_id, "sharing", true); 
            if ($sharing == "My Contacts") {
                echo do_shortcode('[ultimatemember_friends_post]');
            } elseif ($sharing == "Private") {
                echo do_shortcode('[ultimatemember_private_post]');
            } else {
    
            };
        ?>
        >
            <header class="entry-header">
                <?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
                <span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
                <?php endif; ?>

                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
            </header>
            <!-- .entry-header -->

            <?php twentysixteen_excerpt(); ?>
            <div class="umItemMeta">by<br>
        <?php echo get_the_author(); ?>
        </div>
        </div>
    </article>
    <!-- #post-## -->
