</main><!-- /#main -->

<!-- ============================================
     NEWSLETTER SECTION (before footer)
============================================ -->
<section class="newsletter-section" aria-labelledby="newsletter-heading">
    <div class="container">
        <div class="newsletter-card">
            <div class="newsletter-glow" aria-hidden="true"></div>
            <div class="newsletter-content">
                <div class="newsletter-icon" aria-hidden="true">
                    <svg width="40" height="40" fill="none" stroke="#00d4ff" stroke-width="1.5" viewBox="0 0 24 24">
                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 11 19.79 19.79 0 01.12 2.35 2 2 0 012.11 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.91 7.09a16 16 0 006 6l.46-.46a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92v2z"/>
                    </svg>
                </div>
                <div>
                    <h2 class="newsletter-title" id="newsletter-heading">
                        <?php esc_html_e( 'Stay Updated on SAP Security', 'sap-security-pro' ); ?>
                    </h2>
                    <p class="newsletter-desc">
                        <?php esc_html_e( 'Get notified about new tutorials, interview questions, and SAP Security insights. No spam — ever.', 'sap-security-pro' ); ?>
                    </p>
                </div>
            </div>
            <form class="newsletter-form" id="newsletterForm" novalidate aria-label="<?php esc_attr_e( 'Newsletter signup', 'sap-security-pro' ); ?>">
                <?php wp_nonce_field( 'sap_newsletter', 'newsletter_nonce' ); ?>
                <div class="newsletter-form__group">
                    <input 
                        type="email" 
                        name="email" 
                        class="newsletter-input" 
                        placeholder="<?php esc_attr_e( 'Enter your email address...', 'sap-security-pro' ); ?>"
                        required
                        aria-label="<?php esc_attr_e( 'Email address', 'sap-security-pro' ); ?>"
                    />
                    <button type="submit" class="btn btn-primary newsletter-btn">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M22 2L11 13M22 2L15 22 11 13 2 9l20-7z"/>
                        </svg>
                        <?php esc_html_e( 'Subscribe', 'sap-security-pro' ); ?>
                    </button>
                </div>
                <div class="newsletter-msg" id="newsletterMsg" role="alert" aria-live="polite"></div>
                <p class="newsletter-privacy">
                    <svg width="12" height="12" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0110 0v4"/>
                    </svg>
                    <?php esc_html_e( 'We respect your privacy. Unsubscribe any time.', 'sap-security-pro' ); ?>
                </p>
            </form>
        </div>
    </div>
</section>

<!-- ============================================
     MAIN FOOTER
============================================ -->
<footer class="site-footer" role="contentinfo">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">

                <!-- Brand Column -->
                <div class="footer-brand">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo footer-logo-custom" rel="home">
                        <div class="site-logo-icon">
                            <svg width="48" height="48" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 2L5 9V19C5 29.5 12.5 38.5 21 41C29.5 38.5 37 29.5 37 19V9L21 2Z" fill="url(#logo_grad_footer)" stroke="#00d4ff" stroke-width="2"/>
                                <rect x="15" y="18" width="12" height="10" rx="2" fill="white"/>
                                <path d="M18 18V15.5C18 13.8431 19.3431 12.5 21 12.5C22.6569 12.5 24 13.8431 24 15.5V18" stroke="white" stroke-width="2"/>
                                <circle cx="21" cy="23" r="1.5" fill="#060e1c"/>
                                <defs>
                                    <linearGradient id="logo_grad_footer" x1="5" y1="2" x2="37" y2="41" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#0066ff"/><stop offset="1" stop-color="#00d4ff" stop-opacity="0.5"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                        <div class="site-logo-text">
                            <span class="logo-main">SAP</span>
                            <span class="logo-sub">Security Analyst</span>
                        </div>
                    </a>
                    <p class="footer-about">
                        <?php echo esc_html( get_theme_mod( 'sap_footer_about', 'A comprehensive SAP Security knowledge base for professionals, analysts, and consultants. Learn SAP authorization concepts, R/3 security, HR security, and more.' ) ); ?>
                    </p>

                    <!-- Stats Row -->
                    <div class="footer-stats">
                        <div class="footer-stat">
                            <span class="footer-stat__number"><?php echo esc_html( get_theme_mod( 'sap_footer_stat_1_number', '47+' ) ); ?></span>
                            <span class="footer-stat__label"><?php echo esc_html( get_theme_mod( 'sap_footer_stat_1_label', 'Articles' ) ); ?></span>
                        </div>
                        <div class="footer-stat">
                            <span class="footer-stat__number"><?php echo esc_html( get_theme_mod( 'sap_footer_stat_2_number', '7+' ) ); ?></span>
                            <span class="footer-stat__label"><?php echo esc_html( get_theme_mod( 'sap_footer_stat_2_label', 'Topics' ) ); ?></span>
                        </div>
                        <div class="footer-stat">
                            <span class="footer-stat__number"><?php echo esc_html( get_theme_mod( 'sap_footer_stat_3_number', '10K+' ) ); ?></span>
                            <span class="footer-stat__label"><?php echo esc_html( get_theme_mod( 'sap_footer_stat_3_label', 'Readers' ) ); ?></span>
                        </div>
                    </div>

                    <!-- Social Links -->
                    <div class="footer-social" aria-label="<?php esc_attr_e( 'Social media links', 'sap-security-pro' ); ?>">
                        <?php if ( $linkedin = get_theme_mod( 'sap_social_linkedin' ) ) : ?>
                            <a href="<?php echo esc_url( $linkedin ); ?>" class="social-icon" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ( $twitter = get_theme_mod( 'sap_social_twitter' ) ) : ?>
                            <a href="<?php echo esc_url( $twitter ); ?>" class="social-icon" target="_blank" rel="noopener noreferrer" aria-label="Twitter/X">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.261 5.635 5.904-5.635zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ( $youtube = get_theme_mod( 'sap_social_youtube' ) ) : ?>
                            <a href="<?php echo esc_url( $youtube ); ?>" class="social-icon" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ( $github = get_theme_mod( 'sap_social_github' ) ) : ?>
                            <a href="<?php echo esc_url( $github ); ?>" class="social-icon" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
                                <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </a>
                        <?php endif; ?>
                        <a href="<?php echo esc_url( get_feed_link() ); ?>" class="social-icon" aria-label="RSS Feed">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4 11a9 9 0 019 9"/><path d="M4 4a16 16 0 0116 16"/><circle cx="5" cy="19" r="1"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links Column -->
                <div class="footer-col">
                    <h4 class="footer-col__title"><?php esc_html_e( 'SAP Topics', 'sap-security-pro' ); ?></h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/all-tutorials' ) ); ?>" style="color: var(--color-accent); font-weight: 700;"><?php esc_html_e( 'Explore All Tutorials', 'sap-security-pro' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/sap-web-as-abap' ) ); ?>">Web AS ABAP Components</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/authorization' ) ); ?>">SAP Authorization Concepts</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/roles' ) ); ?>">Roles & Profiles</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/user-authentication' ) ); ?>">User Authentication</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/sap-rfc-authorization' ) ); ?>">RFC Authorization</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/security-tables' ) ); ?>">Security Tables</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/security-tcodes' ) ); ?>">Security Transaction Codes</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/su25-steps' ) ); ?>">SU25 Steps</a></li>
                    </ul>
                </div>

                <!-- HR Security Column -->
                <div class="footer-col">
                    <h4 class="footer-col__title"><?php esc_html_e( 'HR & Interview', 'sap-security-pro' ); ?></h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/hr-security-tcodes' ) ); ?>">HR Security T-Codes</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/infotypes' ) ); ?>">SAP HR Infotypes</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/structural-authorization' ) ); ?>">Structural Authorization</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/context-solution' ) ); ?>">Context Solution</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/sap-security-quiz' ) ); ?>">Interview Questions & Quiz</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/sap-security-quiz' ) ); ?>">Security Quiz Part I</a></li>
                        <li><a href="<?php echo esc_url( home_url( '/sap-security-quiz-ii' ) ); ?>">Security Quiz Part II</a></li>
                    </ul>
                </div>

                <!-- Recent Posts Column -->
                <div class="footer-col">
                    <h4 class="footer-col__title"><?php esc_html_e( 'Recent Articles', 'sap-security-pro' ); ?></h4>
                    <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-4' ); ?>
                    <?php else : ?>
                        <?php
                        $recent_posts = wp_get_recent_posts([
                            'numberposts' => 4,
                            'post_status' => 'publish',
                        ]);
                        if ( $recent_posts ) : ?>
                            <div class="footer-recent-posts">
                                <?php foreach ( $recent_posts as $rp ) : ?>
                                    <a href="<?php echo esc_url( get_permalink( $rp['ID'] ) ); ?>" class="footer-recent-post">
                                        <?php if ( has_post_thumbnail( $rp['ID'] ) ) : ?>
                                            <?php echo get_the_post_thumbnail( $rp['ID'], 'thumbnail', [ 'class' => 'footer-recent-post__img', 'alt' => esc_attr( $rp['post_title'] ) ] ); ?>
                                        <?php else : ?>
                                            <div class="footer-recent-post__placeholder" aria-hidden="true">
                                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                                </svg>
                                            </div>
                                        <?php endif; ?>
                                        <div class="footer-recent-post__info">
                                            <span class="footer-recent-post__title"><?php echo esc_html( wp_trim_words( $rp['post_title'], 8, '...' ) ); ?></span>
                                            <span class="footer-recent-post__date"><?php echo esc_html( date_i18n( 'M j, Y', strtotime( $rp['post_date'] ) ) ); ?></span>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif;
                        wp_reset_postdata();
                        ?>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div><!-- /.footer-top -->

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__inner">
                <div class="footer-bottom__left">
                    <p class="footer-copy">
                        <?php
                        printf(
                            esc_html__( '© %1$s %2$s. All rights reserved.', 'sap-security-pro' ),
                            date_i18n( 'Y' ),
                            esc_html( get_bloginfo( 'name' ) )
                        );
                        ?>
                    </p>
                    <p class="footer-disclaimer">
                        <?php esc_html_e( 'Not affiliated with SAP AG. Educational purposes only.', 'sap-security-pro' ); ?>
                    </p>
                </div>
                <div class="footer-bottom__nav" role="navigation" aria-label="<?php esc_attr_e( 'Legal navigation', 'sap-security-pro' ); ?>">
                    <a href="<?php echo esc_url( home_url( '/disclaimer' ) ); ?>"><?php esc_html_e( 'Disclaimer', 'sap-security-pro' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>"><?php esc_html_e( 'Privacy Policy', 'sap-security-pro' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/sitemap' ) ); ?>"><?php esc_html_e( 'Sitemap', 'sap-security-pro' ); ?></a>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><?php esc_html_e( 'Contact', 'sap-security-pro' ); ?></a>
                </div>
                <div class="footer-badge">
                    <span><?php esc_html_e( 'Built with', 'sap-security-pro' ); ?></span>
                    <svg width="14" height="14" fill="#ff6b35" viewBox="0 0 24 24" aria-label="love"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
                    <span><?php esc_html_e( 'for SAP Community', 'sap-security-pro' ); ?></span>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- SCROLL TO TOP BUTTON -->
<button class="scroll-top" id="scrollTop" aria-label="<?php esc_attr_e( 'Scroll to top', 'sap-security-pro' ); ?>">
    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M18 15l-6-6-6 6"/>
    </svg>
</button>

<style>
/* =====================================================
   NEWSLETTER SECTION
===================================================== */
.newsletter-section {
    padding: 5rem 0;
    position: relative;
    z-index: 1;
}

.newsletter-card {
    position: relative;
    background: linear-gradient(135deg, var(--color-primary-mid), rgba(0,212,255,0.05));
    border: 1px solid rgba(0,212,255,0.2);
    border-radius: 24px;
    padding: 3.5rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 2.5rem;
    overflow: hidden;
}

.newsletter-glow {
    position: absolute;
    top: -80px; right: -80px;
    width: 300px; height: 300px;
    background: radial-gradient(circle, rgba(0,212,255,0.12) 0%, transparent 70%);
    pointer-events: none;
}

.newsletter-content { display: flex; align-items: flex-start; gap: 1.5rem; flex: 1; min-width: 280px; }
.newsletter-icon {
    width: 64px; height: 64px; flex-shrink: 0;
    background: rgba(0,212,255,0.08);
    border: 1px solid rgba(0,212,255,0.2);
    border-radius: var(--radius-lg);
    display: flex; align-items: center; justify-content: center;
}

.newsletter-title {
    font-size: 1.6rem;
    margin-bottom: 0.5rem;
    color: var(--color-heading);
}
.newsletter-desc { color: var(--color-text-muted); margin: 0; font-size: 1rem; }

.newsletter-form { flex: 1; min-width: 300px; }
.newsletter-form__group { display: flex; gap: 0.75rem; margin-bottom: 0.75rem; }
.newsletter-input {
    flex: 1;
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-full);
    padding: 0.875rem 1.25rem;
    color: var(--color-text);
    font-family: var(--font-body);
    font-size: 0.95rem;
    outline: none;
    transition: all 0.2s;
}
.newsletter-input::placeholder { color: var(--color-text-faint); }
.newsletter-input:focus { border-color: var(--color-accent); background: rgba(0,212,255,0.04); box-shadow: 0 0 0 3px rgba(0,212,255,0.1); }

.newsletter-btn { border-radius: var(--radius-full); white-space: nowrap; }
.newsletter-msg { font-size: 0.875rem; min-height: 20px; color: var(--color-accent-green); }
.newsletter-msg.error { color: var(--color-accent-warm); }
.newsletter-privacy {
    display: flex; align-items: center; gap: 0.4rem;
    font-size: 0.78rem; color: var(--color-text-faint);
    margin: 0;
}

/* =====================================================
   FOOTER
===================================================== */
.site-footer {
    background: var(--color-primary);
    border-top: 1px solid var(--color-border);
    position: relative;
    z-index: 1;
}

.site-footer::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 3px;
    background: linear-gradient(90deg, var(--color-accent), var(--color-accent-warm), var(--color-accent-green), var(--color-accent));
    background-size: 200% 100%;
    animation: gradient-scroll 4s linear infinite;
}
@keyframes gradient-scroll {
    0% { background-position: 0 0; }
    100% { background-position: 200% 0; }
}

.footer-top { padding: 5rem 0 3rem; }

.footer-grid {
    display: grid;
    grid-template-columns: 1.4fr 1fr 1fr 1.1fr;
    gap: 3rem;
}

/* Brand */
.footer-logo { display: flex; align-items: center; gap: 0.75rem; text-decoration: none; margin-bottom: 1.25rem; }
.footer-logo-icon { flex-shrink: 0; }
.footer-site-name { display: block; font-family: var(--font-display); font-weight: 800; color: var(--color-heading); font-size: 1rem; line-height: 1.1; }
.footer-site-desc { display: block; font-size: 0.7rem; color: var(--color-text-faint); letter-spacing: 0.06em; text-transform: uppercase; }
.footer-about { color: var(--color-text-muted); font-size: 0.9rem; line-height: 1.7; margin-bottom: 1.5rem; }

.footer-stats { display: flex; gap: 1.5rem; margin-bottom: 1.5rem; }
.footer-stat { text-align: center; }
.footer-stat__number { display: block; font-family: var(--font-display); font-size: 1.4rem; font-weight: 800; color: var(--color-accent); line-height: 1; }
.footer-stat__label { display: block; font-size: 0.72rem; color: var(--color-text-faint); text-transform: uppercase; letter-spacing: 0.06em; margin-top: 0.2rem; }

.footer-social { display: flex; gap: 0.5rem; flex-wrap: wrap; }
.social-icon {
    width: 38px; height: 38px;
    display: flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-md);
    color: var(--color-text-muted);
    transition: all 0.25s;
    text-decoration: none;
}
.social-icon:hover { color: var(--color-accent); background: rgba(0,212,255,0.1); border-color: rgba(0,212,255,0.3); transform: translateY(-2px); }

/* Footer Columns */
.footer-col__title {
    font-family: var(--font-display);
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--color-heading);
    letter-spacing: 0.08em;
    text-transform: uppercase;
    margin-bottom: 1.25rem;
    padding-bottom: 0.75rem;
    border-bottom: 1px solid var(--color-border-subtle);
    position: relative;
}
.footer-col__title::after {
    content: '';
    position: absolute;
    bottom: -1px; left: 0;
    width: 30px; height: 2px;
    background: var(--color-accent);
}

.footer-links { list-style: none; padding: 0; margin: 0; }
.footer-links li { margin-bottom: 0.6rem; }
.footer-links a {
    display: flex;
    align-items: center;
    gap: 0.4rem;
    font-size: 0.875rem;
    color: var(--color-text-muted);
    text-decoration: none;
    transition: all 0.2s;
    padding: 0.15rem 0;
}
.footer-links a::before {
    content: '›';
    color: var(--color-text-faint);
    transition: color 0.2s, transform 0.2s;
}
.footer-links a:hover { color: var(--color-accent); padding-left: 0.25rem; }
.footer-links a:hover::before { color: var(--color-accent); }

/* Recent Posts in Footer */
.footer-recent-posts { display: flex; flex-direction: column; gap: 1rem; }
.footer-recent-post {
    display: flex;
    gap: 0.75rem;
    align-items: flex-start;
    text-decoration: none;
    transition: all 0.2s;
}
.footer-recent-post:hover { transform: translateX(4px); }
.footer-recent-post__img {
    width: 56px; height: 46px;
    border-radius: var(--radius-sm);
    object-fit: cover;
    flex-shrink: 0;
    border: 1px solid var(--color-border);
}
.footer-recent-post__placeholder {
    width: 56px; height: 46px;
    border-radius: var(--radius-sm);
    background: rgba(0,212,255,0.06);
    border: 1px solid var(--color-border);
    display: flex; align-items: center; justify-content: center;
    flex-shrink: 0;
    color: var(--color-text-faint);
}
.footer-recent-post__info { display: flex; flex-direction: column; gap: 0.2rem; }
.footer-recent-post__title { font-size: 0.825rem; color: var(--color-text-muted); line-height: 1.4; transition: color 0.2s; }
.footer-recent-post:hover .footer-recent-post__title { color: var(--color-accent); }
.footer-recent-post__date { font-size: 0.72rem; color: var(--color-text-faint); font-family: var(--font-mono); }

/* Footer Bottom */
.footer-bottom {
    border-top: 1px solid var(--color-border-subtle);
    padding: 1.5rem 0;
    background: rgba(0,0,0,0.15);
}
.footer-bottom__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
    flex-wrap: wrap;
}
.footer-bottom__left {}
.footer-copy { font-size: 0.85rem; color: var(--color-text-muted); margin: 0 0 0.2rem; }
.footer-disclaimer { font-size: 0.75rem; color: var(--color-text-faint); margin: 0; }
.footer-bottom__nav { display: flex; gap: 1.5rem; flex-wrap: wrap; }
.footer-bottom__nav a { font-size: 0.82rem; color: var(--color-text-faint); text-decoration: none; transition: color 0.2s; }
.footer-bottom__nav a:hover { color: var(--color-accent); }
.footer-badge {
    display: flex;
    align-items: center;
    gap: 0.3rem;
    font-size: 0.78rem;
    color: var(--color-text-faint);
}

/* Responsive */
@media (max-width: 1100px) {
    .footer-grid { grid-template-columns: 1fr 1fr; gap: 2.5rem; }
}
@media (max-width: 768px) {
    .footer-grid { grid-template-columns: 1fr; gap: 2rem; }
    .newsletter-card { padding: 2rem; flex-direction: column; }
    .footer-top { padding: 3rem 0 2rem; }
    .footer-bottom__inner { flex-direction: column; text-align: center; }
    .footer-bottom__nav { justify-content: center; }
    .footer-badge { justify-content: center; }
}
@media (max-width: 480px) {
    .newsletter-form__group { flex-direction: column; }
    .newsletter-btn { width: 100%; justify-content: center; }
    .footer-stats { gap: 1rem; }
}
</style>

<script>
(function() {
    // === PAGE LOADER ===
    const loader = document.getElementById('siteLoader');
    window.addEventListener('load', () => {
        setTimeout(() => {
            if (loader) loader.classList.add('loaded');
        }, 800);
    });

    // === ANNOUNCEMENT BAR CLOSE ===
    const closeBtn = document.getElementById('closeAnnouncement');
    const announcementBar = document.getElementById('announcementBar');
    if (closeBtn && announcementBar) {
        closeBtn.addEventListener('click', () => {
            announcementBar.style.maxHeight = announcementBar.offsetHeight + 'px';
            requestAnimationFrame(() => {
                announcementBar.style.transition = 'max-height 0.3s ease, opacity 0.3s ease';
                announcementBar.style.maxHeight = '0';
                announcementBar.style.overflow = 'hidden';
                announcementBar.style.opacity = '0';
            });
            sessionStorage.setItem('sapAnnouncementClosed', '1');
        });
        if (sessionStorage.getItem('sapAnnouncementClosed')) {
            announcementBar.style.display = 'none';
        }
    }

    // === STICKY HEADER SCROLL CLASS ===
    const siteHeader = document.getElementById('siteHeader');
    let lastScroll = 0;
    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;
        if (siteHeader) {
            siteHeader.classList.toggle('scrolled', scrollY > 50);
        }
        // Scroll top button
        const scrollTop = document.getElementById('scrollTop');
        if (scrollTop) {
            scrollTop.classList.toggle('visible', scrollY > 400);
        }
        lastScroll = scrollY;
    }, { passive: true });

    // === SCROLL TO TOP ===
    const scrollTopBtn = document.getElementById('scrollTop');
    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // === SEARCH OVERLAY ===
    const searchToggle = document.getElementById('searchToggle');
    const searchOverlay = document.getElementById('searchOverlay');
    const searchClose = document.getElementById('searchClose');

    function openSearch() {
        searchOverlay?.classList.add('active');
        searchToggle?.setAttribute('aria-expanded', 'true');
        searchOverlay?.setAttribute('aria-hidden', 'false');
        const input = searchOverlay?.querySelector('input[type="search"]');
        setTimeout(() => input?.focus(), 100);
    }
    function closeSearch() {
        searchOverlay?.classList.remove('active');
        searchToggle?.setAttribute('aria-expanded', 'false');
        searchOverlay?.setAttribute('aria-hidden', 'true');
    }

    searchToggle?.addEventListener('click', () => {
        searchOverlay?.classList.contains('active') ? closeSearch() : openSearch();
    });
    searchClose?.addEventListener('click', closeSearch);
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeSearch();
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') { e.preventDefault(); openSearch(); }
    });

    // === MOBILE MENU ===
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileOverlay = document.getElementById('mobileOverlay');
    const mobileClose = document.getElementById('mobileClose');

    function openMobileMenu() {
        hamburger?.classList.add('active');
        hamburger?.setAttribute('aria-expanded', 'true');
        mobileMenu?.classList.add('active');
        mobileMenu?.setAttribute('aria-hidden', 'false');
        mobileOverlay?.classList.add('active');
        mobileOverlay?.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }
    function closeMobileMenu() {
        hamburger?.classList.remove('active');
        hamburger?.setAttribute('aria-expanded', 'false');
        mobileMenu?.classList.remove('active');
        mobileMenu?.setAttribute('aria-hidden', 'true');
        mobileOverlay?.classList.remove('active');
        mobileOverlay?.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    hamburger?.addEventListener('click', () => {
        mobileMenu?.classList.contains('active') ? closeMobileMenu() : openMobileMenu();
    });
    mobileClose?.addEventListener('click', closeMobileMenu);
    mobileOverlay?.addEventListener('click', closeMobileMenu);

    // Mobile dropdown toggles
    document.querySelectorAll('.mobile-nav .menu-item-has-children > .nav__link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const parent = link.closest('.nav__item');
            parent?.classList.toggle('open');
        });
    });

    // === NEWSLETTER FORM ===
    const newsletterForm = document.getElementById('newsletterForm');
    const newsletterMsg = document.getElementById('newsletterMsg');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = newsletterForm.querySelector('input[type="email"]').value;
            const btn = newsletterForm.querySelector('.newsletter-btn');
            btn.disabled = true;
            btn.textContent = 'Subscribing...';
            // Simulate API call (replace with actual endpoint)
            await new Promise(r => setTimeout(r, 1200));
            newsletterMsg.textContent = '✓ You\'re subscribed! Welcome to the SAP Security community.';
            newsletterMsg.className = 'newsletter-msg';
            newsletterForm.querySelector('input[type="email"]').value = '';
            btn.disabled = false;
            btn.innerHTML = '<svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M22 2L11 13M22 2L15 22 11 13 2 9l20-7z"/></svg> Subscribe';
        });
    }

    // === ACTIVE NAV LINK ===
    const currentPath = window.location.pathname;
    document.querySelectorAll('.nav__link').forEach(link => {
        if (link.getAttribute('href') === currentPath) {
            link.classList.add('active');
        }
    });
    // === AJAX LIVE SEARCH ===
    const searchInputs = document.querySelectorAll('input[type="search"]');
    searchInputs.forEach(input => {
        let resultsContainer = null;
        input.addEventListener('input', debounce(function(e) {
            const term = e.target.value;
            if (term.length < 2) {
                if (resultsContainer) resultsContainer.style.display = 'none';
                return;
            }
            
            // Create container if not exists
            if (!resultsContainer) {
                resultsContainer = document.createElement('div');
                resultsContainer.className = 'ajax-search-results';
                input.parentNode.appendChild(resultsContainer);
            }
            
            resultsContainer.innerHTML = '<div class="ajax-search-loading">Searching...</div>';
            resultsContainer.style.display = 'block';
            
            // Use URLSearchParams for form-encoded body
            const params = new URLSearchParams();
            params.append('action', 'sap_search');
            params.append('term', term);
            
            fetch(sap_ajax.url, {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: params
            })
            .then(res => res.text())
            .then(data => {
                resultsContainer.innerHTML = data;
            });
        }, 300));
        
        // Close results on click outside
        document.addEventListener('click', (e) => {
            if (resultsContainer && !input.contains(e.target) && !resultsContainer.contains(e.target)) {
                resultsContainer.style.display = 'none';
            }
        });
    });
    
    function debounce(func, wait) {
        let timeout;
        return function(...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), wait);
        };
    }

    // === RESPONSIVE TABLES WRAPPER ===
    document.querySelectorAll('table').forEach(table => {
        // Skip if already wrapped by Gutenberg block or our responsive wrapper
        if(!table.parentElement.classList.contains('table-responsive') && !table.parentElement.classList.contains('wp-block-table')) {
            const wrapper = document.createElement('div');
            wrapper.className = 'table-responsive';
            table.parentNode.insertBefore(wrapper, table);
            wrapper.appendChild(table);
        }
    });

})();
</script>

<style>
.ajax-search-results {
    position: absolute;
    top: 100%; left: 0; right: 0;
    background: #0f172a;
    border: 1px solid var(--color-border);
    border-radius: 12px;
    margin-top: 8px;
    z-index: 1000;
    box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    overflow: hidden;
    display: none;
}
.ajax-search-result {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 12px;
    color: #fff;
    text-decoration: none;
    transition: background 0.2s;
    border-bottom: 1px solid rgba(255,255,255,0.05);
}
.ajax-search-result:hover { background: rgba(0,212,255,0.1); }
.ajax-result-img img { width: 40px; height: 40px; border-radius: 4px; object-fit: cover; }
.ajax-result-title { font-size: 0.95rem; font-weight: 500; margin-bottom: 2px; }
.ajax-result-meta { font-size: 0.75rem; color: #94a3b8; }
.ajax-search-view-all {
    display: block;
    padding: 10px;
    text-align: center;
    background: rgba(0,212,255,0.1);
    color: #00d4ff;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
}
.ajax-search-loading, .ajax-no-results { padding: 15px; color: #94a3b8; font-size: 0.9rem; text-align: center; }
</style>

<?php wp_footer(); ?>
</body>
</html>