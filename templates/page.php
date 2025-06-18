<?php get_header(); ?>
<main class="max-w-4xl mx-auto px-4 py-8">
  <article class="prose">
    <h1><?php the_title(); ?></h1>
    <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
  </article>
</main>
<?php get_footer(); ?>
