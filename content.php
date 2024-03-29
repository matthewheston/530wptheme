<?php
/**
 * @package MH
 * @since MH 100
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'booklite' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
<?php if ( 'post' == get_post_type() ): ?>
<div class="published-on"><?php the_date()?></div>
<?php endif; ?>

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'booklite' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'booklite' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->
  <?php endif; ?>

              <footer class="entry-meta">
                    <?php if ( 'post' == get_post_type() && is_single() ) : // Hide category and tag text for pages on Search ?>
<?php
/* translators: used between list items, there is a space after the comma */
$categories_list = get_the_category_list( __( ', ', 'booklite' ) );
if ( $categories_list && book_categorized_blog() ) :
?>
      <span class="cat-links">
        <?php printf( __( 'Posted in %1$s', 'booklite' ), $categories_list ); ?>
      </span>
      <?php endif; // End if categories ?>

<?php
  /* translators: used between list items, there is a space after the comma */
  $tags_list = get_the_tag_list( '', __( ', ', 'booklite' ) );
if ( $tags_list ) :
?>
      <span class="sep"> | </span>
      <span class="tag-links">
        <?php printf( __( 'Tagged %1$s', 'booklite' ), $tags_list ); ?>
      </span>
      <?php endif; // End if $tags_list ?>
    <?php endif; // End if 'post' == get_post_type() ?>

                <?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
                      <span class="comments-link"><?php comments_popup_link( __( 'Leave your thought', 'booklite' ), __( '1 Thought', 'booklite' ), __( '% Thoughts', 'booklite' ) ); ?></span>
                          <?php endif; ?>

                <?php edit_post_link( __( 'Edit', 'booklite' ), '<span class="sep"> &mdash; </span><span class="edit-link">', '</span>' ); ?>


              </footer><!-- #entry-meta -->
                </article><!-- #post-<?php the_ID(); ?> -->
