<?php
/**
 * WoredPress Latest blog entries
 * @package WordPress
 */
 
require( '../cm/wp-load.php' );
 
// Load the recent top 10 posts
query_posts( 'posts_per_page=10' );
?>
 
<div id="blogPosts">
    <ul id="blogList">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <li>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                <?php the_title(); ?><span class="date"><?php the_time('F jS, Y') ?></span></a>
                </li>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul>
</div>