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

<!-- ============================================
     RECENT BLOGS
============================================ -->
<section class="recent-blogs-section section" style="background: rgba(13,30,56,0.2); border-top: 1px solid var(--color-border); border-bottom: 1px solid var(--color-border);">
    <div class="container">
        <div class="section-header" style="margin-bottom: 3rem; text-align: left;">
            <h2 class="section-title" style="font-size: 2rem;">Recent Blogs</h2>
            <p class="section-desc" style="margin: 0;">Continue reading our latest insights and tutorials on SAP Security.</p>
        </div>
        
        <div class="recent-blogs-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem;">
            <?php
            $recent_posts = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'post__not_in'   => [get_the_ID()],
                'ignore_sticky_posts' => 1
            ]);
            
            if ($recent_posts->have_posts()) :
                while ($recent_posts->have_posts()) : $recent_posts->the_post();
            ?>
                <a href="<?php the_permalink(); ?>" class="card recent-blog-card" style="text-decoration: none; display: flex; flex-direction: column;">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="recent-blog-img">
                            <?php the_post_thumbnail('medium_large'); ?>
                        </div>
                    <?php endif; ?>
                    <div style="font-size: 0.8rem; color: var(--color-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; margin-bottom: 0.5rem;">
                        <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        }
                        ?>
                    </div>
                    <h3 style="font-size: 1.25rem; color: var(--color-heading); margin-bottom: 1rem; line-height: 1.4; flex-grow: 1;"><?php the_title(); ?></h3>
                    <div style="font-size: 0.85rem; color: var(--color-text-muted); display: flex; align-items: center; justify-content: space-between; margin-top: auto; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.05);">
                        <span><?php echo get_the_date(); ?></span>
                        <span style="color: var(--color-accent); font-weight: 500;">Read Article &rarr;</span>
                    </div>
                </a>
            <?php 
                endwhile;
                wp_reset_postdata();
            else:
                echo '<p style="color: var(--color-text-muted);">No recent posts available.</p>';
            endif;
            ?>
        </div>
    </div>
</section>

<!-- ============================================
     BROWSE BY CATEGORY — Professional UI
============================================ -->
<section class="category-browse section">
    <div class="container">
        <div class="section-header">
            <div class="section-label"><?php esc_html_e( 'Knowledge Architecture', 'sap-security-pro' ); ?></div>
            <h2 class="section-title"><?php esc_html_e( 'Comprehensive Category Index', 'sap-security-pro' ); ?></h2>
            <p class="section-desc"><?php esc_html_e( 'Access our entire SAP Security knowledge base organized by technical modules and professional domains.', 'sap-security-pro' ); ?></p>
        </div>
        
        <div class="category-grid-pro">
            <?php
            $categories = get_categories([
                'orderby'    => 'name',
                'order'      => 'ASC',
                'hide_empty' => false // Show all as requested
            ]);
            
            foreach($categories as $cat) : 
                // Determine Icon based on name
                $icon = 'M12 2L2 7l10 5 10-5-10-5z'; // Default
                $name = strtolower($cat->name);
                if (strpos($name, 'security') !== false) $icon = 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z';
                if (strpos($name, 'hr') !== false || strpos($name, 'user') !== false) $icon = 'M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zm7-3a3 3 0 11-6 0 3 3 0 016 0zm-1 13v-2a4 4 0 00-3-3.87M23 21v-2a4 4 0 00-3-3.87';
                if (strpos($name, 'audit') !== false || strpos($name, 'check') !== false) $icon = 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4';
                if (strpos($name, 'rfc') !== false || strpos($name, 'net') !== false) $icon = 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0';
            ?>
                <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="cat-card-pro">
                    <div class="cat-card-pro__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="<?php echo $icon; ?>"/></svg>
                    </div>
                    <div class="cat-card-pro__content">
                        <h3 class="cat-card-pro__name"><?php echo esc_html($cat->name); ?></h3>
                        <span class="cat-card-pro__count"><?php echo sprintf( _n( '%s Article', '%s Articles', $cat->count, 'sap-security-pro' ), $cat->count ); ?></span>
                    </div>
                    <div class="cat-card-pro__arrow">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M9 5l7 7-7 7"/></svg>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     SAP SECURITY ROADMAP
============================================ -->
<section class="roadmap-section section">
    <div class="container">
        <div class="roadmap-box">
            <div class="roadmap-content">
                <div class="section-label"><?php esc_html_e( 'Learning Path', 'sap-security-pro' ); ?></div>
                <h2 class="section-title"><?php esc_html_e( 'SAP Security Mastery Roadmap', 'sap-security-pro' ); ?></h2>
                <p class="section-desc"><?php esc_html_e( 'Follow our structured roadmap to transition from a beginner to a certified SAP Security professional.', 'sap-security-pro' ); ?></p>
                
                <div class="roadmap-steps">
                    <div class="roadmap-step">
                        <div class="roadmap-step__num">01</div>
                        <div class="roadmap-step__body">
                            <h4><?php esc_html_e( 'Foundations', 'sap-security-pro' ); ?></h4>
                            <p><?php esc_html_e( 'Learn Web AS ABAP architecture, Client concept, and T-Code basics.', 'sap-security-pro' ); ?></p>
                        </div>
                    </div>
                    <div class="roadmap-step">
                        <div class="roadmap-step__num">02</div>
                        <div class="roadmap-step__body">
                            <h4><?php esc_html_e( 'Authorizations', 'sap-security-pro' ); ?></h4>
                            <p><?php esc_html_e( 'Master PFCG, SU24, and the Role Maintenance life cycle.', 'sap-security-pro' ); ?></p>
                        </div>
                    </div>
                    <div class="roadmap-step">
                        <div class="roadmap-step__num">03</div>
                        <div class="roadmap-step__body">
                            <h4><?php esc_html_e( 'Advanced Topics', 'sap-security-pro' ); ?></h4>
                            <p><?php esc_html_e( 'Dive into HR Security, RFC Security, and GRC integration.', 'sap-security-pro' ); ?></p>
                        </div>
                    </div>
                    <div class="roadmap-step roadmap-step--finish">
                        <div class="roadmap-step__num">✓</div>
                        <div class="roadmap-step__body">
                            <h4><?php esc_html_e( 'Audit & Compliance', 'sap-security-pro' ); ?></h4>
                            <p><?php esc_html_e( 'Prepare for audits with SOX compliance and security guidelines.', 'sap-security-pro' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-cta">
                <div class="roadmap-cta__inner">
                    <h3><?php esc_html_e( 'Ready to Start?', 'sap-security-pro' ); ?></h3>
                    <p><?php esc_html_e( 'Get instant access to our curated interview Q&A bank.', 'sap-security-pro' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/interview-questions-part-1' ) ); ?>" class="btn btn-primary btn-block">
                        <?php esc_html_e( 'Start Learning Now', 'sap-security-pro' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
