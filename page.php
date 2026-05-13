<?php
/**
 * The template for displaying all single pages
 */

get_header();
?>

<!-- Reading Progress Bar -->
<div class="reading-progress" id="readingProgress"></div>

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
    <div class="container">
        <article class="page-content-card" data-aos="fade-up" data-aos-delay="100">
            <?php
            while ( have_posts() ) :
                the_post();
                
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

<script>
(function() {
    // Reading Progress Bar
    const progressBar = document.getElementById('readingProgress');
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        if (progressBar) progressBar.style.width = scrolled + "%";
    });

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
