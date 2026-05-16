<?php
/**
 * Front Page Template
 * 
 * @package SAP_Security_Pro
 */

get_header();
?>

<!-- ============================================
     HERO SECTION
============================================ -->
<section class="hero-section" aria-labelledby="hero-heading">
    <!-- Animated particles bg -->
    <div class="hero-particles" aria-hidden="true" id="heroParticles"></div>
    <div class="hero-grid-lines" aria-hidden="true"></div>

    <div class="container">
        <div class="hero-inner">
            <div class="hero-content">
                <!-- Badge -->
                <div class="hero-badge">
                    <span class="badge badge-accent">
                        <span class="badge-pulse"></span>
                        <?php esc_html_e( 'SAP Security Knowledge Base', 'sap-security-pro' ); ?>
                    </span>
                    <span class="badge badge-green"><?php esc_html_e( 'Free Resources', 'sap-security-pro' ); ?></span>
                </div>

                <!-- Headline -->
                <h1 class="hero-headline" id="hero-heading">
                    <?php echo wp_kses_post( get_theme_mod( 'sap_hero_headline', 'Master <span class="text-gradient">SAP Security</span> Like a Pro' ) ); ?>
                </h1>

                <!-- Sub -->
                <p class="hero-desc">
                    <?php echo esc_html( get_theme_mod( 'sap_hero_subheadline', 'Comprehensive SAP Security tutorials, authorization concepts, HR security, RFC, interview Q&A and more — crafted for analysts, consultants & architects.' ) ); ?>
                </p>

                <!-- CTA Buttons -->
                <div class="hero-actions">
                    <a href="<?php echo esc_url( home_url( '/all-tutorials' ) ); ?>" class="btn btn-primary hero-cta-primary">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                        </svg>
                        <?php echo esc_html( get_theme_mod( 'sap_hero_cta_text', 'Explore All Tutorials' ) ); ?>
                    </a>
                    <a href="<?php echo esc_url( home_url( '/sap-security-quiz' ) ); ?>" class="btn btn-outline">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3M12 17h.01"/>
                        </svg>
                        <?php esc_html_e( 'Interview Questions', 'sap-security-pro' ); ?>
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="hero-stats">
                    <?php
                    $stats = [
                        [ 'number' => get_theme_mod( 'sap_stat_1_number', '50+' ),   'label' => get_theme_mod( 'sap_stat_1_label', 'In-depth Articles' ), 'icon' => 'M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z' ],
                        [ 'number' => get_theme_mod( 'sap_stat_2_number', '7+' ),    'label' => get_theme_mod( 'sap_stat_2_label', 'SAP Modules Covered' ), 'icon' => 'M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10' ],
                        [ 'number' => get_theme_mod( 'sap_stat_3_number', '200+' ),  'label' => get_theme_mod( 'sap_stat_3_label', 'Interview Questions' ), 'icon' => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z' ],
                        [ 'number' => get_theme_mod( 'sap_stat_4_number', '10K+' ),  'label' => get_theme_mod( 'sap_stat_4_label', 'Monthly Readers' ), 'icon' => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z' ],
                    ];
                    foreach ( $stats as $stat ) : ?>
                        <div class="hero-stat">
                            <svg class="hero-stat__icon" width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="<?php echo esc_attr( $stat['icon'] ); ?>"/>
                            </svg>
                            <span class="hero-stat__number"><?php echo esc_html( $stat['number'] ); ?></span>
                            <span class="hero-stat__label"><?php echo esc_html( $stat['label'] ); ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class="hero-visual" aria-hidden="true">
                <div class="hero-terminal">
                    <div class="terminal-header">
                        <span class="terminal-dot terminal-dot--red"></span>
                        <span class="terminal-dot terminal-dot--yellow"></span>
                        <span class="terminal-dot terminal-dot--green"></span>
                        <span class="terminal-title">SAP Security Console</span>
                    </div>
                    <div class="terminal-body">
                        <div class="terminal-line">
                            <span class="terminal-prompt">$</span>
                            <span class="terminal-cmd terminal-typing">check_authorization SU01</span>
                        </div>
                        <div class="terminal-output terminal-delay-1">
                            <span class="terminal-ok">✓</span> User: <span class="terminal-val">ANALYST_01</span>
                        </div>
                        <div class="terminal-output terminal-delay-2">
                            <span class="terminal-ok">✓</span> Auth Object: <span class="terminal-val">S_TCODE</span>
                        </div>
                        <div class="terminal-output terminal-delay-3">
                            <span class="terminal-ok">✓</span> Role: <span class="terminal-val">Z_SAP_SECURITY_ANALYST</span>
                        </div>
                        <div class="terminal-output terminal-delay-4">
                            <span class="terminal-warn">▶</span> Org Level: <span class="terminal-val">COMPANY_CODE = 1000</span>
                        </div>
                        <div class="terminal-output terminal-delay-5">
                            <span class="terminal-ok">✓</span> SU24 Check: <span class="terminal-val">PASSED</span>
                        </div>
                        <div class="terminal-line terminal-delay-6">
                            <span class="terminal-prompt">$</span>
                            <span class="terminal-cursor">_</span>
                        </div>
                    </div>
                </div>

                <!-- Floating Info Cards -->
                <div class="hero-float-card hero-float-card--1">
                    <div class="float-card-icon">🔐</div>
                    <div>
                        <div class="float-card-title">Authorization Check</div>
                        <div class="float-card-sub">SU53 Trace Analysis</div>
                    </div>
                </div>
                <div class="hero-float-card hero-float-card--2">
                    <div class="float-card-icon">📋</div>
                    <div>
                        <div class="float-card-title">Role Design</div>
                        <div class="float-card-sub">PFCG Best Practices</div>
                    </div>
                </div>
                <div class="hero-float-card hero-float-card--3">
                    <div class="float-card-icon">🛡️</div>
                    <div>
                        <div class="float-card-title">HR Security</div>
                        <div class="float-card-sub">Structural Auth</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll indicator -->
    <a href="#topics-section" class="hero-scroll-indicator" aria-label="Scroll down">
        <div class="scroll-mouse">
            <div class="scroll-wheel"></div>
        </div>
        <span><?php esc_html_e( 'Scroll to explore', 'sap-security-pro' ); ?></span>
    </a>
</section>

<!-- ============================================
     AD UNIT 1 — After Hero
============================================ -->
<div class="container" style="padding-top: 2rem; padding-bottom: 0;">
    <p class="sap-ad-label">Advertisement</p>
    <div class="sap-ad-unit">
        <ins class="adsbygoogle"
             style="display:block;text-align:center;"
             data-ad-client="ca-pub-1241348474673689"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
</div>




<!-- ============================================
     TOPICS / CATEGORIES SECTION
============================================ -->
<section id="topics-section" class="topics-section section" aria-labelledby="topics-heading">
    <div class="container">
        <div class="section-header">
            <div class="section-label"><?php esc_html_e( 'Knowledge Areas', 'sap-security-pro' ); ?></div>
            <h2 class="section-title" id="topics-heading"><?php esc_html_e( 'Explore SAP Security Topics', 'sap-security-pro' ); ?></h2>
            <p class="section-desc"><?php esc_html_e( 'Structured learning paths from foundational concepts to advanced security architecture.', 'sap-security-pro' ); ?></p>
        </div>

        <div class="topics-grid">
            <?php
            $topics = [
                [
                    'title'    => 'SAP Basics',
                    'desc'     => 'Web AS ABAP components, background jobs, operation modes and foundational concepts.',
                    'url'      => home_url( '/general-disclaimer/sap-web-as-abap' ),
                    'icon'     => 'M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5',
                    'color'    => 'accent',
                    'count'    => '6 Articles',
                    'level'    => 'Beginner',
                ],
                [
                    'title'    => 'R/3 Security',
                    'desc'     => 'Authorization objects, roles, profiles, SU24, organizational levels, and security tables.',
                    'url'      => home_url( '/general-disclaimer/authorization' ),
                    'icon'     => 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z',
                    'color'    => 'warm',
                    'count'    => '12 Articles',
                    'level'    => 'Intermediate',
                ],
                [
                    'title'    => 'RFC Security',
                    'desc'     => 'RFC authorization, SM59 maintenance, trusted/trustee configuration and remote calls.',
                    'url'      => home_url( '/general-disclaimer/sap-rfc-authorization' ),
                    'icon'     => 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0',
                    'color'    => 'green',
                    'count'    => '3 Articles',
                    'level'    => 'Advanced',
                ],
                [
                    'title'    => 'SECATT & Mass Tasks',
                    'desc'     => 'Mass user creation, bulk role assignments using SECATT extended computer-aided tool.',
                    'url'      => home_url( '/general-disclaimer/mass-user-creation' ),
                    'icon'     => 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z',
                    'color'    => 'gold',
                    'count'    => '2 Articles',
                    'level'    => 'Intermediate',
                ],
                [
                    'title'    => 'HR Security',
                    'desc'     => 'P_ORGIN, infotypes, structural authorization, PLOG, context solutions, and indirect roles.',
                    'url'      => home_url( '/general-disclaimer/hr-security-tcodes' ),
                    'icon'     => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z',
                    'color'    => 'accent',
                    'count'    => '14 Articles',
                    'level'    => 'Advanced',
                ],
                [
                    'title'    => 'Security Audit',
                    'desc'     => 'SAP security audit guidelines, compliance frameworks, and best practices for auditors.',
                    'url'      => home_url( '/sap-security-audit-guidelines-part-ii' ),
                    'icon'     => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4',
                    'color'    => 'warm',
                    'count'    => '1 Article',
                    'level'    => 'Expert',
                ],
                [
                    'title'    => 'Interview Questions',
                    'desc'     => 'Comprehensive SAP Security interview preparation with 200+ questions across 6 parts.',
                    'url'      => home_url( '/sap-security-quiz' ),
                    'icon'     => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z',
                    'color'    => 'green',
                    'count'    => '6 Parts',
                    'level'    => 'All Levels',
                ],
                [
                    'title'    => 'Miscellaneous',
                    'desc'     => 'Password management, role transport, table authorization, program authorization and more.',
                    'url'      => home_url( '/general-disclaimer/sap-password-expired' ),
                    'icon'     => 'M4 6h16M4 12h16M4 18h7',
                    'color'    => 'gold',
                    'count'    => '10 Articles',
                    'level'    => 'All Levels',
                ],
            ];
            foreach ( $topics as $i => $topic ) :
                $level_colors = [
                    'Beginner'     => 'green',
                    'Intermediate' => 'accent',
                    'Advanced'     => 'warm',
                    'Expert'       => 'gold',
                    'All Levels'   => 'accent',
                ];
                $level_color = $level_colors[ $topic['level'] ] ?? 'accent';
            ?>
                <a href="<?php echo esc_url( $topic['url'] ); ?>" class="topic-card" style="--topic-color: var(--color-<?php echo esc_attr( $topic['color'] ); ?>)" data-aos="fade-up" data-aos-delay="<?php echo $i * 50; ?>">
                    <div class="topic-card__icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="<?php echo esc_attr( $topic['icon'] ); ?>"/>
                        </svg>
                    </div>
                    <div class="topic-card__meta">
                        <span class="badge badge-<?php echo esc_attr( $level_color ); ?>" style="font-size:0.68rem;">
                            <?php echo esc_html( $topic['level'] ); ?>
                        </span>
                        <span class="topic-card__count"><?php echo esc_html( $topic['count'] ); ?></span>
                    </div>
                    <h3 class="topic-card__title"><?php echo esc_html( $topic['title'] ); ?></h3>
                    <p class="topic-card__desc"><?php echo esc_html( $topic['desc'] ); ?></p>
                    <div class="topic-card__arrow">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     FEATURED POSTS SECTION
============================================ -->
<section class="featured-section section" aria-labelledby="featured-heading">
    <div class="container">
        <div class="section-header">
            <div class="section-label"><?php esc_html_e( 'Editor\'s Pick', 'sap-security-pro' ); ?></div>
            <h2 class="section-title" id="featured-heading"><?php esc_html_e( 'Featured Articles', 'sap-security-pro' ); ?></h2>
            <p class="section-desc"><?php esc_html_e( 'Handpicked in-depth articles on critical SAP Security topics.', 'sap-security-pro' ); ?></p>
        </div>

        <?php
        $featured_query = new WP_Query([
            'post_type'      => 'post',
            'posts_per_page' => 4,
            'post_status'    => 'publish',
            'meta_query'     => [
                [
                    'key'   => '_is_featured',
                    'value' => '1',
                ],
            ],
        ]);

        // Fallback to latest posts
        if ( ! $featured_query->have_posts() ) {
            $featured_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'post_status'    => 'publish',
            ]);
        }
        ?>

        <?php if ( $featured_query->have_posts() ) : ?>
            <div class="featured-grid">
                <?php $feat_count = 0; while ( $featured_query->have_posts() ) : $featured_query->the_post(); $feat_count++; ?>
                    <article class="featured-card <?php echo $feat_count === 1 ? 'featured-card--large' : ''; ?>" id="post-<?php the_ID(); ?>">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="featured-card__img-wrap">
                                <?php the_post_thumbnail( $feat_count === 1 ? 'sap-featured' : 'sap-card', [
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
                            <div class="featured-card__meta">
                                <?php
                                $cats = get_the_category();
                                if ( $cats ) :
                                    $color = sap_get_category_color( $cats[0]->name );
                                ?>
                                    <a href="<?php echo esc_url( get_category_link( $cats[0]->term_id ) ); ?>" class="badge badge-<?php echo esc_attr( $color ); ?>">
                                        <?php echo esc_html( $cats[0]->name ); ?>
                                    </a>
                                <?php endif; ?>
                                <span class="featured-card__read-time">
                                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                        <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                                    </svg>
                                    <?php echo esc_html( sap_reading_time() ); ?> <?php esc_html_e( 'min read', 'sap-security-pro' ); ?>
                                </span>
                            </div>

                            <h3 class="featured-card__title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>

                            <?php if ( $feat_count === 1 ) : ?>
                                <p class="featured-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25, '...' ) ); ?></p>
                            <?php endif; ?>

                            <div class="featured-card__footer">
                                <div class="featured-card__author">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 28, '', get_the_author(), [ 'class' => 'featured-card__avatar' ] ); ?>
                                    <span class="featured-card__author-name"><?php the_author(); ?></span>
                                </div>
                                <span class="featured-card__date">
                                    <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo get_the_date( 'M j, Y' ); ?></time>
                                </span>
                            </div>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>

        <div class="text-center" style="margin-top: 3rem;">
            <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-outline">
                <?php esc_html_e( 'View All Articles', 'sap-security-pro' ); ?>
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- ============================================
     QUICK REFERENCE / KEY T-CODES SECTION
============================================ -->
<section class="tcodes-section section" aria-labelledby="tcodes-heading">
    <div class="container">
        <div class="section-header">
            <div class="section-label"><?php esc_html_e( 'Quick Reference', 'sap-security-pro' ); ?></div>
            <h2 class="section-title" id="tcodes-heading"><?php esc_html_e( 'Essential SAP Security T-Codes', 'sap-security-pro' ); ?></h2>
            <p class="section-desc"><?php esc_html_e( 'The most-used transaction codes every SAP Security professional must know.', 'sap-security-pro' ); ?></p>
        </div>

        <div class="tcodes-grid">
            <?php
            $tcodes = [
                [ 'code' => 'SU01',   'name' => 'User Maintenance',           'cat' => 'User Mgmt',   'color' => 'accent' ],
                [ 'code' => 'SU10',   'name' => 'Mass User Changes',          'cat' => 'User Mgmt',   'color' => 'accent' ],
                [ 'code' => 'PFCG',   'name' => 'Role Maintenance',           'cat' => 'Roles',       'color' => 'warm' ],
                [ 'code' => 'SU24',   'name' => 'Maintain Check Indicators',  'cat' => 'Auth',        'color' => 'green' ],
                [ 'code' => 'SU25',   'name' => 'Upgrade Tool',               'cat' => 'Auth',        'color' => 'green' ],
                [ 'code' => 'SU53',   'name' => 'Display Auth Check',         'cat' => 'Debug',       'color' => 'gold' ],
                [ 'code' => 'SM59',   'name' => 'RFC Destinations',           'cat' => 'RFC',         'color' => 'accent' ],
                [ 'code' => 'SE16',   'name' => 'Data Browser',               'cat' => 'Tables',      'color' => 'warm' ],
                [ 'code' => 'SM36',   'name' => 'Define Background Jobs',     'cat' => 'Jobs',        'color' => 'green' ],
                [ 'code' => 'SUIM',   'name' => 'User Information System',    'cat' => 'Reports',     'color' => 'gold' ],
                [ 'code' => 'SE38',   'name' => 'ABAP Editor',                'cat' => 'Dev',         'color' => 'accent' ],
                [ 'code' => 'STMS',   'name' => 'Transport Management',       'cat' => 'Transport',   'color' => 'warm' ],
            ];
            foreach ( $tcodes as $tc ) : ?>
                <div class="tcode-card">
                    <div class="tcode-code" style="color: var(--color-<?php echo esc_attr( $tc['color'] ); ?>)"><?php echo esc_html( $tc['code'] ); ?></div>
                    <div class="tcode-info">
                        <span class="tcode-name"><?php echo esc_html( $tc['name'] ); ?></span>
                        <span class="badge badge-<?php echo esc_attr( $tc['color'] ); ?>" style="font-size:0.68rem;"><?php echo esc_html( $tc['cat'] ); ?></span>
                    </div>
                    <button class="tcode-copy" data-code="<?php echo esc_attr( $tc['code'] ); ?>" aria-label="Copy <?php echo esc_attr( $tc['code'] ); ?>">
                        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/>
                        </svg>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ============================================
     AD UNIT 2 — Before Blog Posts
============================================ -->
<div class="container" style="padding-top: 2rem; padding-bottom: 0;">
    <p class="sap-ad-label">Advertisement</p>
    <div class="sap-ad-unit">
        <ins class="adsbygoogle"
             style="display:block;text-align:center;"
             data-ad-client="ca-pub-1241348474673689"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
</div>

<!-- ============================================
     LATEST BLOG POSTS SECTION
============================================ -->
<section class="blog-section section" aria-labelledby="blog-heading">
    <div class="container">
        <div class="section-header">
            <div class="section-label"><?php esc_html_e( 'Latest Updates', 'sap-security-pro' ); ?></div>
            <h2 class="section-title" id="blog-heading"><?php esc_html_e( 'Recent Blog Posts', 'sap-security-pro' ); ?></h2>
            <p class="section-desc"><?php esc_html_e( 'Fresh content on SAP Security concepts, tips, and industry updates.', 'sap-security-pro' ); ?></p>
        </div>

        <!-- Blog Posts Grid -->
        <div class="blog-grid" id="blogGrid">
            <?php
            $blog_query = new WP_Query([
                'post_type'      => 'post',
                'posts_per_page' => 6,
                'post_status'    => 'publish',
                'ignore_sticky_posts' => true,
            ]);

            if ( $blog_query->have_posts() ) :
                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                    get_template_part( 'template-parts/card-post' );
                endwhile;
                wp_reset_postdata();
            else : ?>
                <div class="no-posts-box">
                    <p><?php esc_html_e( 'No recent blog posts found. Please run the blog generation script to add 10 high-quality posts!', 'sap-security-pro' ); ?></p>
                    <a href="<?php echo esc_url( home_url( '/add_blogs.php' ) ); ?>" class="btn btn-primary" target="_blank"><?php esc_html_e( 'Generate Blogs Now', 'sap-security-pro' ); ?></a>
                </div>
            <?php endif; ?>
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
                'hide_empty' => false
            ]);
            
            foreach($categories as $cat) : 
                $icon = 'M12 2L2 7l10 5 10-5-10-5z';
                $name = strtolower($cat->name);
                if (strpos($name, 'security') !== false) $icon = 'M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z';
                if (strpos($name, 'hr') !== false || strpos($name, 'user') !== false) $icon = 'M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2M9 11a4 4 0 100-8 4 4 0 000 8zm7-3a3 3 0 11-6 0 3 3 0 016 0zm-1 13v-2a4 4 0 00-3-3.87M23 21v-2a4 4 0 00-3-3.87';
                if (strpos($name, 'audit') !== false || strpos($name, 'check') !== false) $icon = 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4';
                if (strpos($name, 'rfc') !== false || strpos($name, 'net') !== false) $icon = 'M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.14 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0';
            ?>
                <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="cat-card-pro" data-aos="fade-up">
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
     WHY / FEATURES SECTION
============================================ -->
<section class="why-section section" aria-labelledby="why-heading">
    <div class="container">
        <div class="why-grid">
            <div class="why-content">
                <div class="section-label" style="justify-content: flex-start;"><?php esc_html_e( 'Why This Resource', 'sap-security-pro' ); ?></div>
                <h2 class="why-title" id="why-heading">
                    <?php esc_html_e( 'The Most Practical SAP Security Reference Online', 'sap-security-pro' ); ?>
                </h2>
                <p class="why-desc">
                    <?php esc_html_e( 'Built by a working SAP Security professional, this knowledge base covers real-world scenarios, actual project experiences, and exam-ready interview prep.', 'sap-security-pro' ); ?>
                </p>

                <div class="why-features">
                    <?php
                    $features = [
                        [
                            'icon'  => 'M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z',
                            'title' => 'Real-world Focus',
                            'desc'  => 'Content drawn from actual SAP implementation projects, not just theory.',
                            'color' => 'accent',
                        ],
                        [
                            'icon'  => 'M13 10V3L4 14h7v7l9-11h-7z',
                            'title' => 'Always Updated',
                            'desc'  => 'Content regularly updated to reflect latest SAP versions and security patches.',
                            'color' => 'warm',
                        ],
                        [
                            'icon'  => 'M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253',
                            'title' => 'Structured Learning',
                            'desc'  => 'Content organized from beginner to expert, with clear learning progression.',
                            'color' => 'green',
                        ],
                        [
                            'icon'  => 'M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z',
                            'title' => 'Interview Ready',
                            'desc'  => '200+ curated interview questions with detailed answers for SAP Security roles.',
                            'color' => 'gold',
                        ],
                    ];
                    foreach ( $features as $f ) : ?>
                        <div class="why-feature">
                            <div class="why-feature__icon" style="color: var(--color-<?php echo esc_attr( $f['color'] ); ?>)">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="<?php echo esc_attr( $f['icon'] ); ?>"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="why-feature__title"><?php echo esc_html( $f['title'] ); ?></h4>
                                <p class="why-feature__desc"><?php echo esc_html( $f['desc'] ); ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="why-visual">
                <div class="why-card-stack">
                    <div class="why-stack-card why-stack-card--back"></div>
                    <div class="why-stack-card why-stack-card--mid"></div>
                    <div class="why-stack-card why-stack-card--front">
                        <div class="why-front-inner">
                            <div class="why-front-icon">
                                <svg width="36" height="36" fill="none" stroke="#00d4ff" stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                </svg>
                            </div>
                            <h3><?php esc_html_e( 'SAP Security', 'sap-security-pro' ); ?></h3>
                            <p><?php esc_html_e( 'Analyst Certification Path', 'sap-security-pro' ); ?></p>
                            <div class="progress-list">
                                <?php
                                $progress_items = [
                                    [ 'label' => 'Basics & Architecture', 'pct' => 100, 'color' => 'accent' ],
                                    [ 'label' => 'R/3 Authorization',     'pct' => 85,  'color' => 'warm' ],
                                    [ 'label' => 'HR Security',            'pct' => 75,  'color' => 'green' ],
                                    [ 'label' => 'RFC & Remote',           'pct' => 60,  'color' => 'gold' ],
                                ];
                                foreach ( $progress_items as $item ) : ?>
                                    <div class="progress-item">
                                        <div class="progress-item__header">
                                            <span><?php echo esc_html( $item['label'] ); ?></span>
                                            <span style="color: var(--color-<?php echo esc_attr( $item['color'] ); ?>)"><?php echo esc_html( $item['pct'] ); ?>%</span>
                                        </div>
                                        <div class="progress-bar">
                                            <div class="progress-fill" style="width: <?php echo esc_attr( $item['pct'] ); ?>%; background: var(--color-<?php echo esc_attr( $item['color'] ); ?>)"></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     QUIZ / CTA STRIP SECTION
============================================ -->
<section class="cta-strip section--sm" aria-labelledby="cta-heading">
    <div class="container">
        <div class="cta-strip__inner">
            <div class="cta-strip__content">
                <div class="cta-strip__icon" aria-hidden="true">
                    <svg width="36" height="36" fill="none" stroke="#00d4ff" stroke-width="1.5" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3M12 17h.01"/>
                    </svg>
                </div>
                <div>
                    <h2 class="cta-strip__title" id="cta-heading"><?php esc_html_e( 'Test Your SAP Security Knowledge', 'sap-security-pro' ); ?></h2>
                    <p class="cta-strip__desc"><?php esc_html_e( 'Take our interactive quizzes to assess your knowledge and identify gaps.', 'sap-security-pro' ); ?></p>
                </div>
            </div>
            <div class="cta-strip__actions">
                <a href="<?php echo esc_url( home_url( '/sap-security-quiz' ) ); ?>" class="btn btn-primary">
                    <?php esc_html_e( 'Take Quiz I', 'sap-security-pro' ); ?>
                    <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/sap-security-quiz-ii' ) ); ?>" class="btn btn-outline">
                    <?php esc_html_e( 'Take Quiz II', 'sap-security-pro' ); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
/* =====================================================
   HERO SECTION
===================================================== */
.hero-section {
    position: relative;
    min-height: 500px;
    display: flex;
    align-items: center;
    padding: 100px 0 80px;
    overflow: hidden;
}

.hero-grid-lines {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(0,212,255,0.04) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0,212,255,0.04) 1px, transparent 1px);
    background-size: 40px 40px;
    mask-image: radial-gradient(ellipse at center, black 40%, transparent 80%);
    pointer-events: none;
}

.hero-particles {
    position: absolute;
    inset: 0;
    pointer-events: none;
    overflow: hidden;
}

.hero-inner {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    gap: 5rem;
    align-items: center;
}

.hero-badge { display: flex; gap: 0.6rem; flex-wrap: wrap; margin-bottom: 2rem; }
.badge-pulse {
    width: 8px; height: 8px;
    background: var(--color-accent-green);
    border-radius: 50%;
    display: inline-block;
    animation: pulse-dot 2s ease-in-out infinite;
}
@keyframes pulse-dot {
    0%,100% { box-shadow: 0 0 0 0 rgba(0,229,160,0.4); }
    70% { box-shadow: 0 0 0 10px rgba(0,229,160,0); }
}

.hero-headline {
    font-family: var(--font-display);
    font-size: clamp(2.5rem, 7vw, 4.8rem);
    font-weight: 900;
    line-height: 0.95;
    letter-spacing: -0.05em;
    color: var(--color-heading);
    margin-bottom: 1.5rem;
    text-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.text-gradient {
    background: linear-gradient(135deg, var(--color-accent) 0%, #0099cc 50%, var(--color-accent-warm) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.hero-desc {
    font-size: 1.2rem;
    color: var(--color-text-muted);
    line-height: 1.6;
    max-width: 580px;
    margin-bottom: 3rem;
    font-weight: 400;
}

.hero-actions { display: flex; gap: 1.25rem; flex-wrap: wrap; margin-bottom: 3.5rem; }
.hero-cta-primary { font-size: 1rem; padding: 1rem 2.25rem; }

.hero-stats {
    display: flex;
    gap: 0;
    flex-wrap: wrap;
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    background: rgba(13,30,56,0.5);
    backdrop-filter: blur(10px);
}
.hero-stat {
    flex: 1;
    min-width: 140px;
    padding: 1.25rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.25rem;
    text-align: center;
    border-right: 1px solid var(--color-border);
    transition: background 0.2s;
}
.hero-stat:last-child { border-right: none; }
.hero-stat:hover { background: rgba(0,212,255,0.06); }
.hero-stat__icon { color: var(--color-accent); margin-bottom: 0.25rem; }
.hero-stat__number { font-family: var(--font-display); font-size: 1.4rem; font-weight: 800; color: var(--color-heading); }
.hero-stat__label { font-size: 0.75rem; color: var(--color-text-faint); letter-spacing: 0.05em; text-transform: uppercase; }

/* Hero Terminal */
.hero-visual { position: relative; }
.hero-terminal {
    background: rgba(13,30,56,0.95);
    border: 1px solid rgba(0,212,255,0.25);
    border-radius: var(--radius-lg);
    overflow: hidden;
    backdrop-filter: blur(20px);
    box-shadow: 0 40px 100px rgba(0,0,0,0.6), 0 0 50px rgba(0,212,255,0.1);
    animation: float-terminal 6s ease-in-out infinite;
}
@keyframes float-terminal {
    0%,100% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-15px) rotate(1deg); }
}

.terminal-header {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 1rem 1.5rem;
    background: rgba(0,0,0,0.4);
    border-bottom: 1px solid rgba(0,212,255,0.1);
}
.terminal-dot {
    width: 12px; height: 12px;
    border-radius: 50%;
}
.terminal-dot--red { background: #ff5f57; }
.terminal-dot--yellow { background: #febc2e; }
.terminal-dot--green { background: #28c840; }
.terminal-title {
    flex: 1;
    text-align: center;
    font-size: 0.8rem;
    color: var(--color-text-faint);
    font-family: var(--font-mono);
    letter-spacing: 0.05em;
}

.terminal-body { padding: 2rem; font-family: var(--font-mono); font-size: 0.9rem; line-height: 1.6; }
.terminal-line { display: flex; gap: 0.75rem; margin-bottom: 0.75rem; }
.terminal-prompt { color: var(--color-accent-green); font-weight: 700; }
.terminal-cmd { color: var(--color-accent); }
.terminal-output { padding-left: 1.5rem; margin-bottom: 0.5rem; color: var(--color-text-muted); }
.terminal-ok { color: var(--color-accent-green); }
.terminal-warn { color: var(--color-gold); }
.terminal-val { color: var(--color-gold); font-weight: 600; }
.terminal-cursor {
    display: inline-block;
    background: var(--color-accent);
    color: transparent;
    width: 8px; height: 1.2em;
    vertical-align: middle;
    animation: blink 1s step-end infinite;
}
@keyframes blink { 0%,100%{opacity:1} 50%{opacity:0} }

.terminal-typing { overflow: hidden; white-space: nowrap; animation: typing 1.5s steps(20, end) forwards; }
@keyframes typing { from{width:0} to{width:100%} }

.terminal-delay-1 { opacity:0; animation: fadein 0.3s ease 1.5s forwards; }
.terminal-delay-2 { opacity:0; animation: fadein 0.3s ease 1.9s forwards; }
.terminal-delay-3 { opacity:0; animation: fadein 0.3s ease 2.3s forwards; }
.terminal-delay-4 { opacity:0; animation: fadein 0.3s ease 2.7s forwards; }
.terminal-delay-5 { opacity:0; animation: fadein 0.3s ease 3.1s forwards; }
.terminal-delay-6 { opacity:0; animation: fadein 0.3s ease 3.5s forwards; }
@keyframes fadein { from{opacity:0;transform:translateY(8px)} to{opacity:1;transform:none} }

/* Floating cards */
.hero-float-card {
    position: absolute;
    background: rgba(13,30,56,0.9);
    border: 1px solid rgba(0,212,255,0.25);
    border-radius: var(--radius-md);
    padding: 0.875rem 1.25rem;
    display: flex;
    align-items: center;
    gap: 0.875rem;
    backdrop-filter: blur(15px);
    font-size: 0.85rem;
    box-shadow: 0 15px 40px rgba(0,0,0,0.4);
    z-index: 2;
}
.float-card-icon { font-size: 1.4rem; }
.float-card-title { font-weight: 700; color: var(--color-heading); font-size: 0.85rem; margin-bottom: 0.15rem; }
.float-card-sub { color: var(--color-text-faint); font-size: 0.75rem; }

.hero-float-card--1 {
    top: -30px; right: -40px;
    animation: float-1 5s ease-in-out infinite;
}
.hero-float-card--2 {
    bottom: 40px; left: -50px;
    animation: float-2 6s ease-in-out infinite 1s;
}
.hero-float-card--3 {
    bottom: -30px; right: 20px;
    animation: float-1 7s ease-in-out infinite 0.5s;
}
@keyframes float-1 { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-12px)} }
@keyframes float-2 { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-15px)} }

/* Scroll Indicator */
.hero-scroll-indicator {
    position: absolute;
    bottom: 2.5rem;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.75rem;
    font-size: 0.75rem;
    color: var(--color-text-faint);
    letter-spacing: 0.1em;
    text-transform: uppercase;
    text-decoration: none;
    transition: color 0.3s ease;
    cursor: pointer;
    z-index: 10;
    animation: bounce-indicator 2s ease-in-out infinite;
}
.hero-scroll-indicator:hover { color: var(--color-accent); }
.hero-scroll-indicator:hover .scroll-mouse { border-color: var(--color-accent); }
@keyframes bounce-indicator { 0%,100%{transform:translateX(-50%) translateY(0)} 50%{transform:translateX(-50%) translateY(-10px)} }
.scroll-mouse {
    width: 26px; height: 40px;
    border: 2px solid rgba(0,212,255,0.3);
    border-radius: 13px;
    display: flex;
    justify-content: center;
    padding-top: 6px;
}
.scroll-wheel {
    width: 4px; height: 8px;
    background: var(--color-accent);
    border-radius: 2px;
    animation: scroll-wheel 2s ease-in-out infinite;
}
@keyframes scroll-wheel { 0%{transform:translateY(0);opacity:1} 100%{transform:translateY(14px);opacity:0} }

/* =====================================================
   TOPICS SECTION
===================================================== */
.topics-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
}

.topic-card {
    position: relative;
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: 2.25rem;
    text-decoration: none;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.topic-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--topic-color, var(--color-accent)), transparent);
    opacity: 0;
    transition: opacity 0.4s;
}
.topic-card:hover {
    transform: translateY(-8px);
    border-color: var(--topic-color, var(--color-accent));
    box-shadow: 0 30px 60px rgba(0,0,0,0.4), 0 0 0 1px var(--topic-color, var(--color-accent));
}
.topic-card:hover::before { opacity: 0.08; }

.topic-card__icon {
    width: 60px; height: 60px;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: var(--radius-md);
    display: flex; align-items: center; justify-content: center;
    color: var(--topic-color, var(--color-accent));
    position: relative;
    z-index: 1;
    transition: all 0.4s;
}
.topic-card:hover .topic-card__icon { 
    background: var(--topic-color, var(--color-accent)); 
    color: var(--color-primary);
    transform: scale(1.1) rotate(-5deg);
}

.topic-card__meta { display: flex; align-items: center; justify-content: space-between; gap: 0.5rem; position: relative; z-index: 1; }
.topic-card__count { font-size: 0.75rem; color: var(--color-text-faint); font-family: var(--font-mono); font-weight: 500; }

.topic-card__title {
    font-family: var(--font-display);
    font-size: 1.25rem;
    font-weight: 800;
    color: var(--color-heading);
    margin: 0;
    position: relative;
    z-index: 1;
    transition: color 0.3s;
}

.topic-card__desc {
    font-size: 0.95rem;
    color: var(--color-text-muted);
    line-height: 1.6;
    margin: 0;
    flex: 1;
    position: relative;
    z-index: 1;
}

.topic-card__arrow {
    color: var(--topic-color, var(--color-accent));
    opacity: 0;
    transform: translateX(-10px);
    transition: all 0.4s;
    position: relative;
    z-index: 1;
    align-self: flex-end;
}
.topic-card:hover .topic-card__arrow { opacity: 1; transform: translateX(0); }

/* =====================================================
   FEATURED SECTION
===================================================== */
.featured-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: auto auto;
    gap: 2rem;
}

.featured-card--large {
    grid-column: 1 / -1;
    grid-row: 1;
    display: grid;
    grid-template-columns: 1.6fr 1fr;
}

.featured-card {
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    transition: all 0.4s;
    display: flex;
    flex-direction: column;
}
.featured-card:hover {
    border-color: rgba(0,212,255,0.4);
    transform: translateY(-6px);
    box-shadow: 0 30px 60px rgba(0,0,0,0.5);
}

.featured-card__img-wrap { position: relative; overflow: hidden; aspect-ratio: 4/3; min-height: 260px; }
.featured-card--large .featured-card__img-wrap { aspect-ratio: auto; min-height: 450px; }
.featured-card__img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1); }
.featured-card:hover .featured-card__img { transform: scale(1.05); }
.featured-card__overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to top, rgba(6,14,28,0.9), transparent 70%);
}
.featured-card__img-placeholder {
    background: linear-gradient(135deg, #0d1e38, #1a3a6b, #0d1e38);
    display: flex; align-items: center; justify-content: center;
    min-height: 250px;
    border-bottom: 1px solid var(--color-border);
    position: relative;
}
.featured-card__img-placeholder::after {
    content: '';
    position: absolute;
    width: 60%; height: 60%;
    background: radial-gradient(circle, rgba(0,212,255,0.1) 0%, transparent 70%);
}

.featured-card__body { padding: 2rem; display: flex; flex-direction: column; gap: 1rem; flex: 1; }
.featured-card__meta { display: flex; align-items: center; gap: 1rem; }
.featured-card__read-time { display: flex; align-items: center; gap: 0.4rem; font-size: 0.8rem; color: var(--color-text-faint); font-family: var(--font-mono); }

.featured-card__title {
    font-size: 1.25rem;
    font-family: var(--font-display);
    font-weight: 800;
    line-height: 1.3;
    margin: 0;
}
.featured-card--large .featured-card__title { font-size: 1.8rem; }
.featured-card__title a { color: var(--color-heading); text-decoration: none; transition: color 0.2s; }
.featured-card__title a:hover { color: var(--color-accent); }

.featured-card__excerpt { font-size: 1rem; color: var(--color-text-muted); line-height: 1.7; margin: 0; flex: 1; }

.featured-card__footer { display: flex; align-items: center; justify-content: space-between; margin-top: auto; padding-top: 1.5rem; border-top: 1px solid rgba(255,255,255,0.05); }
.featured-card__author { display: flex; align-items: center; gap: 0.75rem; }
.featured-card__avatar { width: 32px !important; height: 32px !important; border-radius: 50% !important; border: 1px solid var(--color-accent); }
.featured-card__author-name { font-size: 0.875rem; color: var(--color-text-muted); font-weight: 600; }
.featured-card__date { font-size: 0.8rem; color: var(--color-text-faint); font-family: var(--font-mono); }

/* =====================================================
   T-CODES SECTION
===================================================== */
.tcodes-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.25rem;
}

.tcode-card {
    background: rgba(13,30,56,0.6);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-md);
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1.25rem;
    transition: all 0.3s;
    position: relative;
    backdrop-filter: blur(10px);
}
.tcode-card:hover {
    border-color: var(--color-accent);
    background: var(--color-bg-card-hover);
    transform: translateY(-4px) scale(1.02);
    box-shadow: 0 10px 30px rgba(0,212,255,0.1);
}
.tcode-code { font-family: var(--font-mono); font-size: 1.1rem; font-weight: 800; min-width: 60px; letter-spacing: 0.05em; }
.tcode-info { flex: 1; display: flex; flex-direction: column; gap: 0.4rem; }
.tcode-name { font-size: 0.875rem; color: var(--color-text-muted); font-weight: 500; }
.tcode-copy {
    background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.1);
    color: var(--color-text-faint);
    cursor: pointer;
    padding: 0.5rem;
    border-radius: var(--radius-sm);
    transition: all 0.2s;
    opacity: 0;
}
.tcode-card:hover .tcode-copy { opacity: 1; }
.tcode-copy:hover { color: var(--color-accent); background: rgba(0,212,255,0.15); border-color: var(--color-accent); }

/* =====================================================
   BLOG SECTION
===================================================== */
.blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    min-height: 200px;
}

.blog-card {
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    overflow: hidden;
    transition: all 0.4s;
    display: flex;
    flex-direction: column;
}

.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
    border-color: var(--color-accent);
}

.blog-card__img-wrap {
    position: relative;
    aspect-ratio: 16/9;
    min-height: 180px;
    overflow: hidden;
}

.blog-card__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s;
}

.blog-card:hover .blog-card__img { transform: scale(1.05); }

.blog-card__body { padding: 1.5rem; display: flex; flex-direction: column; flex: 1; }
.blog-card__meta { display: flex; align-items: center; justify-content: space-between; margin-bottom: 1rem; }
.blog-card__date { font-size: 0.8rem; color: var(--color-text-faint); font-family: var(--font-mono); }
.blog-card__title { font-size: 1.25rem; font-weight: 700; margin-bottom: 1rem; line-height: 1.4; }
.blog-card__title a { color: var(--color-heading); text-decoration: none; transition: color 0.2s; }
.blog-card__title a:hover { color: var(--color-accent); }
.blog-card__excerpt { font-size: 0.95rem; color: var(--color-text-muted); line-height: 1.6; margin-bottom: 1.5rem; flex: 1; }
.blog-card__link { display: flex; align-items: center; gap: 0.5rem; color: var(--color-accent); font-size: 0.9rem; font-weight: 700; text-decoration: none; text-transform: uppercase; letter-spacing: 0.05em; }

/* =====================================================
   WHY SECTION
===================================================== */
.why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 6rem;
    align-items: center;
}

.why-title { font-size: clamp(2rem, 4vw, 2.8rem); margin: 1.5rem 0; line-height: 1.1; }
.why-desc { color: var(--color-text-muted); font-size: 1.1rem; line-height: 1.8; margin-bottom: 3rem; }

.why-features { display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; }
.why-feature { display: flex; flex-direction: column; gap: 1rem; align-items: flex-start; }
.why-feature__icon {
    width: 48px; height: 48px; flex-shrink: 0;
    background: rgba(0,212,255,0.08);
    border: 1px solid rgba(0,212,255,0.2);
    border-radius: var(--radius-md);
    display: flex; align-items: center; justify-content: center;
}
.why-feature__title { font-size: 1.1rem; font-weight: 800; color: var(--color-heading); margin-bottom: 0.5rem; }
.why-feature__desc { font-size: 0.9rem; color: var(--color-text-muted); margin: 0; line-height: 1.6; }

/* Card Stack */
.why-card-stack { position: relative; height: 450px; perspective: 1000px; }
.why-stack-card {
    position: absolute;
    inset: 0;
    border-radius: var(--radius-lg);
    border: 1px solid var(--color-border);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
}
.why-stack-card--back {
    background: rgba(255,107,53,0.05);
    transform: rotate(8deg) translateY(30px) translateZ(-50px);
    opacity: 0.5;
}
.why-stack-card--mid {
    background: rgba(0,212,255,0.05);
    transform: rotate(4deg) translateY(15px) translateZ(-25px);
    opacity: 0.8;
}
.why-stack-card--front {
    background: var(--color-bg-card);
    transform: translateZ(0);
    box-shadow: 0 40px 100px rgba(0,0,0,0.5);
}
.why-front-inner { padding: 3rem; height: 100%; display: flex; flex-direction: column; }
.why-front-icon {
    width: 70px; height: 70px;
    background: linear-gradient(135deg, rgba(0,212,255,0.15), transparent);
    border: 1px solid rgba(0,212,255,0.3);
    border-radius: var(--radius-lg);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 2rem;
}
.why-front-inner h3 { font-size: 1.5rem; font-weight: 800; margin-bottom: 0.5rem; letter-spacing: -0.02em; }
.why-front-inner > p { color: var(--color-text-faint); font-size: 0.95rem; margin-bottom: 2.5rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; }

.progress-list { display: flex; flex-direction: column; gap: 1.5rem; flex: 1; }
.progress-item__header { display: flex; justify-content: space-between; font-size: 0.9rem; margin-bottom: 0.6rem; color: var(--color-text-muted); font-weight: 600; }
.progress-bar { height: 8px; background: rgba(255,255,255,0.06); border-radius: 4px; overflow: hidden; }
.progress-fill { height: 100%; border-radius: 4px; transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1); }

/* =====================================================
   CTA STRIP
===================================================== */
.cta-strip__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 3rem;
    flex-wrap: wrap;
    background: linear-gradient(135deg, var(--color-primary-mid), rgba(0,212,255,0.12));
    border: 1px solid rgba(0,212,255,0.2);
    border-radius: var(--radius-xl);
    padding: 4rem;
    position: relative;
    overflow: hidden;
    box-shadow: 0 40px 100px rgba(0,0,0,0.4);
}
.cta-strip__inner::after {
    content: '';
    position: absolute;
    right: -100px; top: -100px;
    width: 300px; height: 300px;
    background: radial-gradient(circle, rgba(0,212,255,0.15) 0%, transparent 70%);
    pointer-events: none;
}
.cta-strip__content { display: flex; align-items: center; gap: 2rem; flex: 1; }
.cta-strip__icon {
    width: 80px; height: 80px; flex-shrink: 0;
    background: rgba(0,212,255,0.1);
    border: 1px solid rgba(0,212,255,0.3);
    border-radius: var(--radius-lg);
    display: flex; align-items: center; justify-content: center;
    color: var(--color-accent);
}
.cta-strip__title { font-size: 1.8rem; font-weight: 800; margin-bottom: 0.5rem; letter-spacing: -0.02em; }
.cta-strip__desc { color: var(--color-text-muted); font-size: 1.1rem; margin: 0; line-height: 1.6; }
.cta-strip__actions { display: flex; gap: 1.25rem; flex-wrap: wrap; }

/* RESPONSIVE */
@media (max-width: 1300px) {
    .hero-inner { gap: 3rem; }
    .topics-grid { grid-template-columns: repeat(3, 1fr); }
    .tcodes-grid { grid-template-columns: repeat(3, 1fr); }
}

@media (max-width: 1024px) {
    .hero-inner { grid-template-columns: 1fr; text-align: center; }
    .hero-desc { margin-left: auto; margin-right: auto; }
    .hero-actions { justify-content: center; }
    .hero-visual { display: none; }
    .why-grid { grid-template-columns: 1fr; gap: 4rem; }
    .why-card-stack { display: none; }
    .featured-grid { grid-template-columns: 1fr 1fr; }
    .featured-card--large { grid-column: 1 / -1; grid-template-columns: 1fr; }
    .blog-grid { grid-template-columns: repeat(2, 1fr); }
    .cta-strip__inner { padding: 3rem; text-align: center; flex-direction: column; }
    .cta-strip__content { flex-direction: column; text-align: center; }
    .cta-strip__actions { justify-content: center; }
}

@media (max-width: 768px) {
    .hero-section { padding: 80px 0 60px; }
    .hero-headline { font-size: 2.5rem; }
    .topics-grid { grid-template-columns: repeat(2, 1fr); }
    .tcodes-grid { grid-template-columns: repeat(2, 1fr); }
    .featured-grid { grid-template-columns: 1fr; gap: 2rem; }
    .featured-card--large { grid-column: 1; }
    .featured-card__img-wrap { aspect-ratio: 16/9; min-height: 200px; }
    .featured-card--large .featured-card__img-wrap { min-height: 250px; }
    .blog-grid { grid-template-columns: 1fr; }
    .hero-stats { display: none; }
    .why-features { grid-template-columns: 1fr; }
    .section { padding: 4rem 0; }
}

@media (max-width: 600px) {
    .hero-headline { font-size: 2.2rem; }
    .hero-desc { font-size: 1rem; }
    .topics-grid { grid-template-columns: 1fr; }
    .tcodes-grid { grid-template-columns: 1fr; }
    .cta-strip__inner { padding: 2rem; }
    .cta-strip__title { font-size: 1.5rem; }
    .cta-strip__desc { font-size: 1rem; }
}

@media (max-width: 480px) {
    .hero-actions { gap: 0.75rem; justify-content: center; }
    .hero-actions .btn { 
        width: auto; 
        flex: 1; 
        min-width: 150px; 
        padding: 0.85rem 1rem; 
        font-size: 0.8rem; 
        white-space: nowrap;
        justify-content: center;
    }
    .hero-badge { justify-content: center; }
}

.text-center { text-align: center; }
</style>

<script>
(function() {
    // === PARTICLE GENERATOR ===
    const particlesContainer = document.getElementById('heroParticles');
    if (particlesContainer) {
        for (let i = 0; i < 30; i++) {
            const dot = document.createElement('div');
            const size = Math.random() * 3 + 1;
            Object.assign(dot.style, {
                position: 'absolute',
                width: size + 'px',
                height: size + 'px',
                borderRadius: '50%',
                background: `rgba(${Math.random() > 0.5 ? '0,212,255' : '255,107,53'}, ${Math.random() * 0.4 + 0.1})`,
                left: Math.random() * 100 + '%',
                top: Math.random() * 100 + '%',
                animation: `float-particle ${Math.random() * 10 + 8}s ease-in-out ${Math.random() * 5}s infinite`,
            });
            particlesContainer.appendChild(dot);
        }
        const style = document.createElement('style');
        style.textContent = `
            @keyframes float-particle {
                0%,100% { transform: translateY(0) scale(1); opacity: 0.3; }
                50% { transform: translateY(-40px) scale(1.2); opacity: 0.7; }
            }
        `;
        document.head.appendChild(style);
    }

    // === TCODE COPY TO CLIPBOARD ===
    document.querySelectorAll('.tcode-copy').forEach(btn => {
        btn.addEventListener('click', async () => {
            const code = btn.dataset.code;
            try {
                await navigator.clipboard.writeText(code);
                btn.innerHTML = '<svg width="14" height="14" fill="none" stroke="#00e5a0" stroke-width="2" viewBox="0 0 24 24"><polyline points="20 6 9 17 4 12"/></svg>';
                setTimeout(() => {
                    btn.innerHTML = '<svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"/><path d="M5 15H4a2 2 0 01-2-2V4a2 2 0 012-2h9a2 2 0 012 2v1"/></svg>';
                }, 2000);
            } catch(e) {}
        });
    });

    // === BLOG CATEGORY TABS ===
    const blogTabs = document.querySelectorAll('.blog-tab');
    const blogGrid = document.getElementById('blogGrid');
    const loadMoreBtn = document.getElementById('loadMorePosts');

    blogTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            blogTabs.forEach(t => { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
            tab.classList.add('active');
            tab.setAttribute('aria-selected', 'true');
            const cat = tab.dataset.cat;
            if (loadMoreBtn) { loadMoreBtn.dataset.page = '2'; loadMoreBtn.dataset.cat = cat; }
            fetchPosts(cat, 1, true);
        });
    });

    async function fetchPosts(cat, page, replace) {
        if (!blogGrid) return;
        blogGrid.style.opacity = '0.5';
        const formData = new FormData();
        formData.append('action', 'sap_load_more');
        formData.append('nonce', (typeof sapTheme !== 'undefined') ? sapTheme.nonce : '');
        formData.append('page', page);
        formData.append('category', cat || '');
        try {
            const res = await fetch((typeof sapTheme !== 'undefined') ? sapTheme.ajaxUrl : '/wp-admin/admin-ajax.php', { method: 'POST', body: formData });
            const data = await res.json();
            if (data.success) {
                if (replace) {
                    blogGrid.innerHTML = data.data.html || '<p style="grid-column:1/-1;text-align:center;color:var(--color-text-muted)">No posts found.</p>';
                } else {
                    blogGrid.insertAdjacentHTML('beforeend', data.data.html);
                }
                if (loadMoreBtn) {
                    loadMoreBtn.style.display = data.data.hasMore ? '' : 'none';
                }
            }
        } catch(e) {}
        blogGrid.style.opacity = '1';
    }

    // Load More
    if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
            const page = parseInt(loadMoreBtn.dataset.page, 10);
            const cat = loadMoreBtn.dataset.cat || '';
            loadMoreBtn.classList.add('loading');
            loadMoreBtn.textContent = 'Loading...';
            fetchPosts(cat, page, false).then(() => {
                loadMoreBtn.dataset.page = page + 1;
                loadMoreBtn.classList.remove('loading');
                loadMoreBtn.innerHTML = '<svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M23 4v6h-6M1 20v-6h6"/><path d="M3.51 9a9 9 0 0114.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0020.49 15"/></svg> Load More Posts';
            });
        });
    }

    // === SCROLL REVEAL (simple) ===
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.08 });

    document.querySelectorAll('.topic-card, .featured-card, .tcode-card, .why-feature').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(el);
    });
})();
</script>

<!-- ============================================
     SAP SECURITY ROADMAP
============================================ -->
<section class="roadmap-section section">
    <div class="container">
        <div class="roadmap-box" data-aos="zoom-in">
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
                    <a href="<?php echo esc_url( home_url( '/sap-security-quiz' ) ); ?>" class="btn btn-primary btn-block">
                        <?php esc_html_e( 'Start Learning Now', 'sap-security-pro' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>