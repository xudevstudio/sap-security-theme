<?php
/**
 * The template for displaying all single pages
 */

get_header();
?>

<!-- PAGE HERO -->
<section class="page-hero">
    <div class="page-hero__particles" id="pageParticles" aria-hidden="true"></div>
    <div class="container container--narrow">
        <div class="page-hero__content" data-aos="fade-up">
            <nav class="breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span class="breadcrumb-separator">/</span>
                <span class="breadcrumb-current"><?php the_title(); ?></span>
            </nav>
            <h1 class="page-hero__title"><?php the_title(); ?></h1>
            <div class="page-hero__meta">
                <span class="page-hero__updated">
                    <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    Last updated: <?php the_modified_date(); ?>
                </span>
            </div>
        </div>
    </div>
    <div class="page-hero__glow" aria-hidden="true"></div>
</section>

<main id="main" class="site-main page-main">
    <div class="container container--narrow">
        <article class="page-content-card" data-aos="fade-up" data-aos-delay="100">
            <?php
            while ( have_posts() ) :
                the_post();
                
                if ( has_post_thumbnail() ) {
                    echo '<div class="page-featured-image">';
                    the_post_thumbnail( 'full', [ 'class' => 'img-responsive' ] );
                    echo '</div>';
                }

                echo '<div class="entry-content">';
                the_content();
                echo '</div>';
                
            endwhile; 
            ?>
            
            <div class="page-footer-actions">
                <button class="btn btn-outline btn-sm" onclick="window.print()">
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M6 9V2h12v7M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2m-10 0h10v4H6v-4z"/></svg>
                    Print Page
                </button>
                <div class="share-links">
                    <span class="share-label">Share:</span>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener" aria-label="Share on LinkedIn"><svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg></a>
                </div>
            </div>
        </article>
    </div>
</main>

<style>
/* =====================================================
   PAGE TEMPLATE MODERN UI
===================================================== */
.page-hero {
    position: relative;
    padding: 10rem 0 6rem;
    background: radial-gradient(circle at top right, rgba(0,212,255,0.05), transparent 40%),
                radial-gradient(circle at bottom left, rgba(255,107,53,0.03), transparent 30%);
    border-bottom: 1px solid var(--color-border);
    overflow: hidden;
}

.page-hero__particles {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 0;
}

.page-hero__content {
    position: relative;
    z-index: 2;
    text-align: center;
}

.breadcrumb {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1.5rem;
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--color-text-faint);
    text-transform: uppercase;
    letter-spacing: 0.1em;
}
.breadcrumb a { color: var(--color-text-faint); transition: color 0.2s; }
.breadcrumb a:hover { color: var(--color-accent); }
.breadcrumb-separator { color: rgba(255,255,255,0.1); }
.breadcrumb-current { color: var(--color-accent); }

.page-hero__title {
    font-size: clamp(2.5rem, 6vw, 4rem);
    font-weight: 800;
    line-height: 1.1;
    letter-spacing: -0.04em;
    color: var(--color-heading);
    margin-bottom: 1.5rem;
}

.page-hero__meta {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1.5rem;
    font-size: 0.9rem;
    color: var(--color-text-muted);
}
.page-hero__updated { display: flex; align-items: center; gap: 0.5rem; }

.page-hero__glow {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 80vw; height: 80vw;
    background: radial-gradient(circle, rgba(0,212,255,0.06) 0%, transparent 70%);
    pointer-events: none;
    z-index: 1;
}

.page-main {
    padding: 0;
    margin-top: -3rem;
    position: relative;
    z-index: 10;
}

.page-content-card {
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-xl);
    padding: 4rem;
    box-shadow: 0 40px 100px rgba(0,0,0,0.5);
    backdrop-filter: blur(20px);
}

.page-featured-image {
    margin: -4rem -4rem 3rem -4rem;
    border-radius: var(--radius-xl) var(--radius-xl) 0 0;
    overflow: hidden;
    border-bottom: 1px solid var(--color-border);
}
.page-featured-image img {
    width: 100%;
    height: auto;
    max-height: 500px;
    object-fit: cover;
}

.entry-content {
    font-size: 1.1rem;
    line-height: 1.7;
    color: var(--color-text) !important;
}

/* Force colors on ALL nested elements to override inline styles */
.entry-content p, 
.entry-content span, 
.entry-content strong, 
.entry-content li,
.entry-content em,
.entry-content div {
    color: var(--color-text) !important;
    background-color: transparent !important;
    margin-bottom: 0.8rem !important; /* Reduced space */
}

.entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4,
.entry-content h1 *, .entry-content h2 *, .entry-content h3 *, .entry-content h4 * {
    color: var(--color-white) !important;
    font-family: var(--font-display);
    font-weight: 800;
    margin: 1.5rem 0 0.75rem !important; /* Reduced space */
    line-height: 1.2;
}

.entry-content h1 { font-size: 2rem; }
.entry-content h2 { font-size: 1.6rem; border-left: 4px solid var(--color-accent); padding-left: 1rem; }
.entry-content h3 { font-size: 1.3rem; color: var(--color-accent) !important; }

/* Specific fix for blue text in user content */
.entry-content [style*="color"] {
    color: var(--color-text) !important;
}

.entry-content a {
    color: var(--color-accent) !important;
    text-decoration: underline;
}

.entry-content ul, .entry-content ol {
    margin-bottom: 1.5rem;
    padding-left: 1.2rem;
}

.entry-content blockquote {
    background: rgba(255,255,255,0.03);
    border-left: 4px solid var(--color-accent);
    padding: 1.5rem 2rem;
    margin: 2rem 0;
    font-style: italic;
    color: var(--color-text-muted);
}

.page-footer-actions {
    margin-top: 4rem;
    padding-top: 2rem;
    border-top: 1px solid rgba(255,255,255,0.05);
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.share-links { display: flex; align-items: center; gap: 1rem; }
.share-label { font-size: 0.9rem; font-weight: 700; color: var(--color-text-faint); text-transform: uppercase; }
.share-links a {
    width: 36px; height: 36px;
    display: flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--color-border);
    border-radius: 50%;
    color: var(--color-text-muted);
    transition: all 0.2s;
}
.share-links a:hover { color: var(--color-accent); background: rgba(0,212,255,0.08); border-color: var(--color-accent); transform: translateY(-2px); }

/* Responsive Improvements */
@media (max-width: 1024px) {
    .page-hero { padding: 8rem 0 5rem; }
}

@media (max-width: 768px) {
    .page-hero { padding: 6rem 0 4rem; }
    .page-hero__title { font-size: 2.2rem; }
    .page-main { margin-top: -2rem; }
    .page-content-card { padding: 2.5rem 1.5rem; border-radius: var(--radius-lg); margin: 0 10px; }
    .page-featured-image { margin: -2.5rem -1.5rem 2rem -1.5rem; }
    .page-hero__meta { flex-direction: column; gap: 0.75rem; }
}

@media (max-width: 480px) {
    .page-hero { padding: 5rem 0 3rem; }
    .page-hero__title { font-size: 1.8rem; padding: 0 10px; }
    .page-main { margin-top: -1.5rem; }
    .page-content-card { padding: 1.5rem; border-radius: var(--radius-md); }
    .page-featured-image { margin: -1.5rem -1.5rem 1.5rem -1.5rem; }
    .entry-content { font-size: 1.05rem; }
    .page-footer-actions { flex-direction: column; align-items: flex-start; text-align: left; }
}
</style>

<script>
(function() {
    // Page Particles
    const container = document.getElementById('pageParticles');
    if (container) {
        for (let i = 0; i < 15; i++) {
            const p = document.createElement('div');
            const size = Math.random() * 2 + 1;
            Object.assign(p.style, {
                position: 'absolute',
                width: size + 'px',
                height: size + 'px',
                borderRadius: '50%',
                background: 'rgba(0,212,255,0.15)',
                left: Math.random() * 100 + '%',
                top: Math.random() * 100 + '%',
                animation: `page-float ${Math.random() * 10 + 10}s linear infinite`
            });
            container.appendChild(p);
        }
    }
})();
</script>

<?php get_footer(); ?>
