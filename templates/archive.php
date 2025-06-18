<?php get_header(); ?>
<main class="max-w-4xl mx-auto px-4 py-8">
  <h1 class="text-3xl font-semibold mb-6"><?php the_archive_title(); ?></h1>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="mb-4 border-b pb-4">
      <h2 class="text-xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p class="text-gray-600 text-sm"><?php the_excerpt(); ?></p>
    </article>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
