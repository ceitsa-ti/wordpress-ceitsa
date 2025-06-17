<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h2 class="text-2xl font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="text-gray-700"><?php the_excerpt(); ?></div>
</article>
