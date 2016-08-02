<!DOCTYPE html>
<html>
<head>
  <title><?php wp_title() . "  |  " . bloginfo('name'); ?></title>

  <meta charset="utf-8" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <?php wp_head(); ?>
</head>

<body>

</body>
  <!-- ========== -->
  <!-- Navigation -->
  <!-- ========== -->
  <nav>
    <h1 class="nr-blog-title">
      <a href="<?php echo get_home_url(); ?>" title="<?php bloginfo('name'); ?>">
        <?php bloginfo('name'); ?>
      </a>
    </h1>

    <a class="nr-big-button" href="http://matthewbryancurtis.com">About</a>
  </nav>

  <!-- ============= -->
  <!-- Begin Content -->
  <!-- ============= -->
  <div class="nr-content-container">
