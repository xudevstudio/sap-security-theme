<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <p style="font-size: 1.25rem; color: var(--text-muted);"><?php bloginfo('description'); ?></p>
        </div>
    </section>

    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem;">
            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <article class="card">
                        <h2 style="margin-top: 0;"><a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a></h2>
                        <div style="color: var(--text-muted); font-size: 0.875rem; margin-bottom: 1rem;">
                            <?php the_date(); ?>
                        </div>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" style="color: var(--primary); font-weight: 600; text-decoration: none; margin-top: 1rem; display: inline-block;">Read More &rarr;</a>
                    </article>
                <?php endwhile;
            else :
                echo '<p>No posts found.</p>';
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
