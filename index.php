<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <article>
    <h2>
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <?php the_title(); ?>
      </a>
    </h2>

    <p>
      <?php the_excerpt(); ?>
    </p>
  </article>

<?php endwhile; else : ?>

  <article>
    <h2>Hmm...</h2>

    <p>No content found, sorry.</p>
  </article>

<?php endif; ?>

<?php get_footer(); ?>
