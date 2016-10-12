<?php
get_header();
?>
<?php
if (have_posts()) :
while ( have_posts() ) : the_post();
?>

<article class="article">
  <header class="article__header">
    <h1 class="article__title"><?php single_post_title(); ?></h1>
    <!-- Time? -->
  </header>
  <div class="article__thumbnail"></div>
  <section class="article__body">
    <?php the_content(); ?>
  </section>
</article>

<?php
  endwhile;
endif;
?>
</section>
<?php
get_footer();
?>