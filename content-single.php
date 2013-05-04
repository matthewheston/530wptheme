<?php
/**
 * @package MH
 * @since MH 100
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php the_title(); ?></h2>
  <div class="published-on"><?php the_date(); ?></div>

  <div class="entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'booklite' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta">
<?php
/* translators: used between list items, there is a space after the comma */
$category_list = get_the_category_list( __( ', ', 'booklite' ) );

/* translators: used between list items, there is a space after the comma */
$tag_list = get_the_tag_list( '', ', ' );


printf(
  $meta_text,
  $category_list,
  $tag_list,
  get_permalink(),
  the_title_attribute( 'echo=0' )
);
?>

    <?php edit_post_link( __( 'Edit', 'booklite' ), '<span class="edit-link">', '</span>' ); ?>
  </footer><!-- .entry-meta -->
    </article><!-- #post-<?php the_ID(); ?> -->
