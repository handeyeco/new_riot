<?php get_header(); ?>

<!-- ======================= -->
<!-- Post list with excerpts -->
<!-- ======================= -->

<?php if ( is_search() ) : ?>
  <p><i class="fa fa-search nr-search-icon" aria-hidden="true"></i> Showing results for "<?php the_search_query(); ?>"</p>
<?php endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


  <article>
    <h2 class="nr-post-title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>

    <p class="nr-post-content">
      <?php if ( is_single() ) : ?>
        <?php the_content(); ?>
      <?php else : ?>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
      <?php endif; ?>
    </p>
  </article>

<?php endwhile; else : ?>

  <!-- ====================== -->
  <!-- No posts found message -->
  <!-- ====================== -->

  <article>
    <h2>No content found, sorry.</h2>

    <!-- <p>No content found, sorry.</p> -->
  </article>

<?php endif; ?>

<?php if ( is_single() || is_search() ) : ?>
  <p>
    <a href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">Return Home</a>
  </p>
<?php endif; ?>

<?php get_footer(); ?>
