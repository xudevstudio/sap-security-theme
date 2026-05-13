<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

<!-- POST HEADER -->
<div class="page-hero">
    <div class="container">
        <h1 class="page-hero__title"><?php the_title(); ?></h1>
        <div class="post-meta" style="margin-top: 1rem; font-size: 0.9rem; color: #94a3b8;">
            <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align: middle; margin-right: 4px; margin-top:-2px;"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> <?php echo get_the_date(); ?></span>
            <span style="margin: 0 0.5rem;">|</span>
            <span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="vertical-align: middle; margin-right: 4px; margin-top:-2px;"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> <?php the_author(); ?></span>
            <span style="margin: 0 0.5rem;">|</span>
            <span style="color: #00d4ff;"><?php the_category(', '); ?></span>
        </div>
    </div>
    <div class="page-hero__glow" aria-hidden="true"></div>
</div>

<main id="main" class="site-main page-main">
    <div class="container">
        <div class="sap-content-with-sidebar">
            <!-- MAIN ARTICLE CONTENT -->
            <div class="sap-main-content page-content-wrapper">
                <?php
                while ( have_posts() ) :
                    the_post();
                    
                    // If a featured image exists, display it at the top of the content
                    if ( has_post_thumbnail() ) {
                        echo '<div class="page-featured-image">';
                        the_post_thumbnail( 'large', [ 'class' => 'img-responsive' ] );
                        echo '</div>';
                    }

                    echo '<div class="entry-content">';
                    the_content();
                    echo '</div>';
                    
                endwhile; // End of the loop.
                ?>
            </div>
            <!-- GLOBAL ADS SIDEBAR -->
            <?php sap_render_ads_sidebar(); ?>
        </div>
    </div>
</main>

<style>
/* =====================================================
   SINGLE POST TEMPLATE STYLES
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
    font-size: clamp(2rem, 4vw, 3.5rem);
    font-weight: 800;
    color: var(--color-heading);
    margin: 0;
    letter-spacing: -0.02em;
    text-shadow: 0 4px 20px rgba(0,0,0,0.5);
    line-height: 1.2;
}

.page-main {
    padding: 5rem 0;
}
.page-content-wrapper {
    max-width: 900px;
    margin: 0 auto;
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-xl);
    padding: 3.5rem;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}
.page-featured-image {
    margin: -3.5rem -3.5rem 2.5rem -3.5rem;
    border-radius: var(--radius-xl) var(--radius-xl) 0 0;
    overflow: hidden;
    border-bottom: 1px solid var(--color-border);
}
.page-featured-image img {
    width: 100%;
    height: auto;
    display: block;
    max-height: 650px;
    object-fit: cover;
}

/* HIGH VISIBILITY TEXT SETTINGS FOR DARK MODE */
.entry-content {
    color: #f8fafc;
    font-size: 1.15rem;
    line-height: 1.7;
    letter-spacing: 0.01em;
}
.entry-content p, .entry-content li, .entry-content span, .entry-content div {
    color: #f8fafc !important; /* Force light text to override any block editor defaults */
}
.entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6 {
    color: #ffffff !important;
    font-family: var(--font-display);
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 700;
    line-height: 1.3;
}
.entry-content h2 { font-size: 2.2rem; border-bottom: 2px solid rgba(0,212,255,0.2); padding-bottom: 0.5rem; }
.entry-content h3 { font-size: 1.6rem; color: #00d4ff !important; }
.entry-content p { margin-bottom: 1.2rem; }
.entry-content a { color: #00e5a0 !important; text-decoration: none; border-bottom: 1px solid rgba(0,229,160,0.3); transition: all 0.2s; font-weight: 500; }
.entry-content a:hover { border-bottom-color: #00e5a0; color: #fff !important; }
.entry-content strong, .entry-content b { color: #00d4ff !important; font-weight: 700; letter-spacing: 0.02em; }
.entry-content ul, .entry-content ol { background: rgba(0,0,0,0.2); padding: 1.5rem 1.5rem 1.5rem 3rem; border-radius: 12px; border: 1px solid rgba(255,255,255,0.05); margin-bottom: 2rem; }
.entry-content li { margin-bottom: 0.8rem; }
.entry-content li::marker { color: #00d4ff; font-weight: bold; }
.entry-content blockquote { background: linear-gradient(90deg, rgba(0,212,255,0.1), transparent); border-left: 4px solid #00d4ff; padding: 1.5rem 2rem; margin: 2rem 0; border-radius: 0 12px 12px 0; font-style: italic; font-size: 1.25rem; }
.entry-content blockquote p { margin-bottom: 0; color: #e2e8f0 !important; }
.entry-content img { max-width: 100%; height: auto; border-radius: 12px; margin: 2rem 0; box-shadow: 0 10px 30px rgba(0,0,0,0.5); }

@media (max-width: 768px) {
    .page-hero { padding: 4rem 0 3rem; }
    .page-content-wrapper { padding: 2rem; }
    .page-featured-image { margin: -2rem -2rem 1.5rem -2rem; }
    .page-main { padding: 3rem 0; }
}
</style>

<?php get_footer(); ?>
