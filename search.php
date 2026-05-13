<?php
/**
 * The template for displaying archive pages
 *
 * Used for Category, Tag, and Date archives.
 */

get_header();
?>

<!-- PAGE HEADER -->
<div class="page-hero">
    <div class="container">
        <h1 class="page-hero__title">Search Results</h1>
        <div style="color: #94a3b8; font-size: 1.1rem; max-width: 600px; margin: 1rem auto 0; line-height: 1.6;">
            Found <?php 
            global $wp_query;
            echo $wp_query->found_posts; 
            ?> results for "<?php echo get_search_query(); ?>"
        </div>
    </div>
    <div class="page-hero__glow" aria-hidden="true"></div>
</div>

<main id="main" class="site-main page-main">
    <div class="container">
        
        <!-- Blog Filters & Search -->
        <div class="blogs-filter-bar">
            <div class="blogs-search">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" class="search-field" placeholder="Search blogs..." value="<?php echo get_search_query(); ?>" name="s" />
                    <button type="submit" class="search-submit" aria-label="Search">
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    </button>
                </form>
            </div>
            <div class="blogs-categories">
                <span style="color: #94a3b8; font-size: 0.95rem; margin-right: 10px; font-weight: 500;">Categories:</span>
                <a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>" class="badge badge-accent" style="margin-right: 8px;">All</a>
                <?php
                $categories = get_categories( array( 'hide_empty' => true ) );
                $colors = ['warm', 'green', 'gold', 'accent'];
                $c_index = 0;
                foreach ( $categories as $category ) {
                    $color = $colors[$c_index % count($colors)];
                    // Highlight current category
                    $is_current = ( is_category() && get_queried_object_id() === $category->term_id ) ? 'border: 2px solid #fff;' : '';
                    echo '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="badge badge-' . $color . '" style="margin-right: 8px;' . $is_current . '">' . esc_html( $category->name ) . '</a> ';
                    $c_index++;
                }
                ?>
            </div>
        </div>
        
        <?php if ( have_posts() ) : ?>
            <div class="blogs-grid">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article class="featured-card" id="post-<?php the_ID(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="featured-card__img-wrap">
                                <?php the_post_thumbnail( 'medium_large', [
                                    'class' => 'featured-card__img',
                                    'alt'   => get_the_title(),
                                    'loading' => 'lazy',
                                ] ); ?>
                                <div class="featured-card__overlay"></div>
                            </div>
                        <?php else : ?>
                            <div class="featured-card__img-placeholder">
                                <svg width="48" height="48" fill="none" stroke="rgba(0,212,255,0.3)" stroke-width="1" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                        <?php endif; ?>

                        <div class="featured-card__body">
                            <div class="featured-card__meta" style="margin-bottom: 0.8rem; font-size: 0.85rem; color: #94a3b8; display: flex; gap: 10px; align-items: center;">
                                <span style="color:#00d4ff;">
                                    <?php
                                    $cats = get_the_category();
                                    if ( $cats ) {
                                        echo esc_html( $cats[0]->name );
                                    } else {
                                        echo 'Article';
                                    }
                                    ?>
                                </span>
                                <span>&bull;</span>
                                <span><?php echo get_the_date(); ?></span>
                            </div>

                            <h3 class="featured-card__title" style="font-size: 1.4rem; margin-bottom: 0.8rem; line-height: 1.3;">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>

                            <p class="featured-card__excerpt" style="font-size: 0.95rem; color: #cbd5e1; margin-bottom: 1.5rem; line-height: 1.6;">
                                <?php echo esc_html( wp_trim_words( get_the_excerpt(), 20, '...' ) ); ?>
                            </p>

                            <a href="<?php the_permalink(); ?>" class="btn-text" style="display: inline-flex; align-items: center; color: #00d4ff; font-weight: 600; font-size: 0.9rem; text-decoration: none;">
                                Read Article 
                                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" style="margin-left: 5px;">
                                    <path d="M5 12h14M12 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="blogs-pagination" style="margin-top: 4rem; text-align: center;">
                <?php
                global $wp_query;
                echo paginate_links([
                    'total'     => $wp_query->max_num_pages,
                    'current'   => max(1, get_query_var('paged')),
                    'prev_text' => '&laquo; Previous',
                    'next_text' => 'Next &raquo;',
                    'type'      => 'list',
                ]);
                ?>
            </div>
            
        <?php else : ?>
            <div class="no-results" style="text-align: center; padding: 4rem 2rem; background: var(--color-bg-card); border-radius: var(--radius-xl); border: 1px solid var(--color-border);">
                <svg width="64" height="64" fill="none" stroke="rgba(0,212,255,0.5)" stroke-width="1.5" viewBox="0 0 24 24" style="margin-bottom: 1rem;">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                </svg>
                <h2 style="font-size: 1.8rem; color: #fff; margin-bottom: 1rem;">No Posts Found</h2>
                <p style="color: #94a3b8;">It seems we don't have any blog posts published yet. Please check back later!</p>
            </div>
        <?php endif; ?>
        
    </div>
</main>

<style>
/* =====================================================
   BLOGS PAGE STYLES
===================================================== */
.page-hero {
    position: relative;
    padding: 6rem 0 4rem;
    background: var(--color-primary-dark);
    border-bottom: 1px solid rgba(0,212,255,0.1);
    text-align: center;
    overflow: hidden;
}
.page-hero__glow {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 60vw; height: 60vw;
    background: radial-gradient(circle, rgba(0,212,255,0.08) 0%, transparent 60%);
    pointer-events: none;
    z-index: 0;
}
.page-hero .container {
    position: relative;
    z-index: 1;
}
.page-hero__title {
    font-family: var(--font-display);
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    color: var(--color-heading);
    margin: 0;
    letter-spacing: -0.02em;
    text-shadow: 0 4px 20px rgba(0,0,0,0.5);
}

.page-main {
    padding: 3rem 0 5rem;
}

.blogs-filter-bar {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
    margin-bottom: 3rem;
    padding: 1.5rem;
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-xl);
}

.blogs-search .search-form {
    display: flex;
    align-items: center;
    position: relative;
    max-width: 400px;
    width: 100%;
}
.blogs-search .search-field {
    width: 100%;
    padding: 0.8rem 1.2rem 0.8rem 2.8rem;
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--color-border);
    border-radius: 20px;
    color: #fff;
    font-size: 0.95rem;
    outline: none;
    transition: all 0.2s;
}
.blogs-search .search-field:focus {
    border-color: #00d4ff;
    background: rgba(255,255,255,0.08);
}
.blogs-search .search-submit {
    position: absolute;
    left: 12px;
    background: none;
    border: none;
    color: #94a3b8;
    padding: 0;
    cursor: pointer;
    display: flex;
    align-items: center;
}
.blogs-search .search-submit:hover {
    color: #00d4ff;
}

.blogs-categories {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    gap: 0.5rem 0;
}

.blogs-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 2rem;
}

/* Card Styles */
.featured-card {
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    transition: all var(--transition-normal);
    display: flex;
    flex-direction: column;
    height: 100%;
}
.featured-card:hover {
    transform: translateY(-5px);
    border-color: rgba(0,212,255,0.3);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}
.featured-card__img-wrap {
    position: relative;
    padding-top: 56.25%; /* 16:9 Aspect Ratio */
    overflow: hidden;
    background: var(--color-primary-dark);
}
.featured-card__img {
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}
.featured-card:hover .featured-card__img {
    transform: scale(1.05);
}
.featured-card__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(15,23,42,0.8) 0%, transparent 50%);
    pointer-events: none;
}
.featured-card__img-placeholder {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,0.02);
    border-bottom: 1px solid var(--color-border);
}
.featured-card__body {
    padding: 1.5rem;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}
.featured-card__title a {
    color: var(--color-heading);
    text-decoration: none;
    transition: color 0.2s;
}
.featured-card__title a:hover {
    color: #00d4ff;
}

/* Pagination Styles */
.blogs-pagination ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: inline-flex;
    gap: 0.5rem;
}
.blogs-pagination li a, .blogs-pagination li span {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 40px;
    height: 40px;
    padding: 0 12px;
    border-radius: 8px;
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    color: #f8fafc;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.2s;
}
.blogs-pagination li a:hover {
    background: rgba(0,212,255,0.1);
    border-color: #00d4ff;
    color: #00d4ff;
}
.blogs-pagination li span.current {
    background: #00d4ff;
    border-color: #00d4ff;
    color: #0f172a;
}

@media (max-width: 768px) {
    .page-hero { padding: 4rem 0 3rem; }
    .page-main { padding: 3rem 0; }
    .blogs-grid { grid-template-columns: 1fr; gap: 1.5rem; }
}
</style>

<?php get_footer(); ?>
