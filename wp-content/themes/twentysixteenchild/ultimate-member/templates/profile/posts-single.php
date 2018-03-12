<?php while ($ultimatemember->shortcodes->loop->have_posts()) { $ultimatemember->shortcodes->loop->the_post(); $post_id = get_the_ID(); ?>

<?php
$cat_classes = '';
$cats = get_the_category();
            //print_r($cats);
            foreach($cats as $cat){
                $cat_classes = $cat_classes . $cat->slug . ' ';
            }
?>
<div class="mix umItem <?php echo $cat_classes; ?>" 
  <?php 
    $sharing = get_post_meta($post_id, "sharing", true); 
    if ($sharing == "My Contacts") {
      echo do_shortcode('[ultimatemember_friends_post]');
    } elseif ($sharing == "Private") {
      echo do_shortcode('[ultimatemember_private_post]');
    } else {
    
    };
  ?>>
    <div class="umItemLink"><i class="um-icon-ios-paper"></i>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </div>

    <?php if ( has_post_thumbnail( $post_id ) ) {
					$image_id = get_post_thumbnail_id( $post_id );
					$image_url = wp_get_attachment_image_src( $image_id, 'full', true );
			?>
      <!-- pull in category name -->
      <!-- Make own taxonomy for wordpress -->
      <!-- Custom taxonomy -->
      <!-- get_categories function -->
      <!-- Return category objects -->
      <!-- $newVariable = get_categories($args); -->
      <!-- $newVariable = ""; -->

      <!-- print_r($cats); -->
      <!-- <?php foreach ($category as $key => $variable): ?> -->
        <!-- $Categories =  -->
      <!-- <?php endforeach; ?> -->

    <div class="umItemImg">
        <a href="<?php the_permalink(); ?>">
            <?php echo get_the_post_thumbnail( $post_id, 'medium' ); ?>
        </a>
    </div>

    <?php } ?>

    <div class="umItemMeta">by<br>
        <?php echo get_the_author(); ?>
    </div>
</div>

<?php } ?>

<?php if ( isset($ultimatemember->shortcodes->modified_args) && $ultimatemember->shortcodes->loop->have_posts() && $ultimatemember->shortcodes->loop->found_posts >= 10 ) { ?>

<div class="umLoadItems">
    <a href="#" class="um-ajax-paginate um-button" data-hook="um_load_posts" data-args="<?php echo $ultimatemember->shortcodes->modified_args; ?>">
        <?php _e('load more posts','ultimate-member'); ?>
    </a>
</div>

<?php } ?>
