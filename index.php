<?php get_header(); ?>

<!-- ======================= -->
<!-- Post list with excerpts -->
<!-- ======================= -->

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
    <h2>Hmm...</h2>

    <p>No content found, sorry.</p>
  </article>

<?php endif; ?>

<?php get_footer(); ?>
