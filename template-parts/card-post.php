<?php
/**
 * Template part for displaying posts in a grid
 */
?>
<article class="blog-card" id="post-<?php the_ID(); ?>">
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="blog-card__img-wrap">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'sap-card', [ 'class' => 'blog-card__img' ] ); ?>
            </a>
            <div class="blog-card__overlay"></div>
        </div>
    <?php else : ?>
        <div class="blog-card__img-placeholder">
            <svg width="48" height="48" fill="none" stroke="rgba(0,212,255,0.3)" stroke-width="1" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
            </svg>
        </div>
    <?php endif; ?>

    <div class="blog-card__body">
        <div class="blog-card__meta">
            <?php
            $cats = get_the_category();
            if ( $cats ) :
            ?>
                <span class="badge badge-accent"><?php echo esc_html( $cats[0]->name ); ?></span>
            <?php endif; ?>
            <span class="blog-card__date"><?php echo get_the_date( 'M j, Y' ); ?></span>
        </div>

        <h3 class="blog-card__title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <p class="blog-card__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 15 ); ?></p>

        <a href="<?php the_permalink(); ?>" class="blog-card__link">
            <?php esc_html_e( 'Read More', 'sap-security-hub' ); ?>
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</article>
