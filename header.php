<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#060e1c">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo.png' ); ?>">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- ============================================
     SITE LOADER
============================================ -->
<div class="site-loader" id="siteLoader" aria-hidden="true">
    <div class="site-loader__inner">
        <div class="site-loader__logo">
            <svg width="60" height="60" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 2L5 9V19C5 29.5 12.5 38.5 21 41C29.5 38.5 37 29.5 37 19V9L21 2Z" fill="url(#loader_grad)" stroke="#00d4ff" stroke-width="2"/>
                <rect x="15" y="18" width="12" height="10" rx="2" fill="white"/>
                <path d="M18 18V15.5C18 13.8431 19.3431 12.5 21 12.5C22.6569 12.5 24 13.8431 24 15.5V18" stroke="white" stroke-width="2"/>
                <circle cx="21" cy="23" r="1.5" fill="#060e1c"/>
                <defs>
                    <linearGradient id="loader_grad" x1="5" y1="2" x2="37" y2="41" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0066ff"/><stop offset="1" stop-color="#00d4ff" stop-opacity="0.5"/>
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="site-loader__bar"><div class="site-loader__progress"></div></div>
        <span class="site-loader__text">Loading SAP Security...</span>
    </div>
</div>

<!-- ============================================
     ANNOUNCEMENT BAR
============================================ -->
<div class="announcement-bar" id="announcementBar">
    <div class="container">
        <div class="announcement-bar__inner">
            <span class="announcement-bar__icon">
                <svg width="14" height="14" fill="#00e5a0" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"/><path d="M12 8v4m0 4h.01" stroke="white" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </span>
            <p class="announcement-bar__text">
                🚀 <strong>New:</strong> SAP Security Interview Questions Part 6 is now live — 
                <a href="<?php echo esc_url( home_url( '/interview-questions-part-6' ) ); ?>">Read Now →</a>
            </p>
            <button class="announcement-bar__close" id="closeAnnouncement" aria-label="Close announcement">
                <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<!-- ============================================
     MAIN HEADER
============================================ -->
<header class="site-header" id="siteHeader" role="banner">
    <div class="container">
        <div class="header-inner">

            <!-- LOGO -->
            <div class="site-branding">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">
                    <div class="site-logo-icon">
                        <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 2L5 9V19C5 29.5 12.5 38.5 21 41C29.5 38.5 37 29.5 37 19V9L21 2Z" fill="url(#logo_grad)" stroke="#00d4ff" stroke-width="2"/>
                            <rect x="15" y="18" width="12" height="10" rx="2" fill="white"/>
                            <path d="M18 18V15.5C18 13.8431 19.3431 12.5 21 12.5C22.6569 12.5 24 13.8431 24 15.5V18" stroke="white" stroke-width="2"/>
                            <circle cx="21" cy="23" r="1.5" fill="#060e1c"/>
                            <defs>
                                <linearGradient id="logo_grad" x1="5" y1="2" x2="37" y2="41" gradientUnits="userSpaceOnUse">
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
            </div>

            <!-- PRIMARY NAVIGATION -->
            <nav class="primary-nav" id="primaryNav" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'sap-security-pro' ); ?>">
                <?php
                wp_nav_menu([
                    'menu'           => 'Menu1',
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav__list',
                    'fallback_cb'    => 'sap_fallback_menu',
                    'walker'         => new SAP_Nav_Walker(),
                    'items_wrap'     => '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>',
                ]);
                ?>
            </nav>

            <!-- HEADER ACTIONS -->
            <div class="header-actions">
                <!-- Search Toggle -->
                <button class="header-action-btn" id="searchToggle" aria-label="<?php esc_attr_e( 'Toggle Search', 'sap-security-pro' ); ?>" aria-expanded="false">
                    <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                    </svg>
                </button>

                <!-- RSS Feed -->
                <a href="<?php echo esc_url( get_feed_link() ); ?>" class="header-action-btn header-action-btn--rss" aria-label="<?php esc_attr_e( 'RSS Feed', 'sap-security-pro' ); ?>" title="Subscribe to RSS">
                    <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M4 11a9 9 0 0 1 9 9"/><path d="M4 4a16 16 0 0 1 16 16"/><circle cx="5" cy="19" r="1"/>
                    </svg>
                </a>

                <!-- CTA Button -->
                <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn--primary header-cta" style="border-radius:20px;">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right:6px;">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    BLOGS
                </a>

                <!-- Mobile Menu Toggle -->
                <button class="hamburger" id="hamburger" aria-label="<?php esc_attr_e( 'Toggle Menu', 'sap-security-pro' ); ?>" aria-expanded="false" aria-controls="mobileMenu">
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                    <span class="hamburger__line"></span>
                </button>
            </div>

        </div><!-- /.header-inner -->
    </div><!-- /.container -->

    <!-- SEARCH OVERLAY -->
    <div class="search-overlay" id="searchOverlay" role="search" aria-label="Site Search" aria-hidden="true">
        <div class="container">
            <div class="search-overlay__inner">
                <div class="search-overlay__label"><?php esc_html_e( 'Search SAP Security Topics', 'sap-security-pro' ); ?></div>
                <?php get_search_form(); ?>
                <div class="search-overlay__suggestions">
                    <span class="search-overlay__suggestion-label"><?php esc_html_e( 'Popular:', 'sap-security-pro' ); ?></span>
                    <?php
                    $popular = [ 'Authorization', 'Roles', 'SU24', 'RFC', 'HR Security', 'Audit', 'Interview Questions' ];
                    foreach ( $popular as $term ) : ?>
                        <a href="<?php echo esc_url( home_url( '/?s=' . urlencode( $term ) ) ); ?>" class="search-suggestion"><?php echo esc_html( $term ); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <button class="search-overlay__close" id="searchClose" aria-label="<?php esc_attr_e( 'Close Search', 'sap-security-pro' ); ?>">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>
</header>

<!-- MOBILE MENU OVERLAY -->
<div class="mobile-overlay" id="mobileOverlay" aria-hidden="true"></div>

<!-- MOBILE MENU DRAWER -->
<nav class="mobile-menu" id="mobileMenu" aria-label="<?php esc_attr_e( 'Mobile Navigation', 'sap-security-pro' ); ?>" aria-hidden="true">
    <div class="mobile-menu__header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mobile-menu__logo" aria-label="<?php bloginfo( 'name' ); ?>">
            <div class="logo-icon" aria-hidden="true">
                <svg width="40" height="40" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24 4L4 12V22C4 32.5 12.5 41.5 24 44C35.5 41.5 44 32.5 44 22V12L24 4Z" fill="url(#grad_mobile)" stroke="#00d4ff" stroke-width="2"/>
                    <path d="M24 12V36C31 34 36 28 36 22V15L24 12Z" fill="#00d4ff" opacity="0.3"/>
                    <rect x="18" y="18" width="12" height="10" rx="2" fill="#fff"/>
                    <path d="M21 18V15C21 13.3431 22.3431 12 24 12C25.6569 12 27 13.3431 27 15V18" stroke="#fff" stroke-width="2"/>
                    <circle cx="24" cy="23" r="1.5" fill="#060e1c"/>
                    <defs>
                        <linearGradient id="grad_mobile" x1="4" y1="4" x2="44" y2="44" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#0066ff" stop-opacity="0.8"/><stop offset="1" stop-color="#00d4ff" stop-opacity="0.2"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
            <span class="mobile-menu__site-name" style="font-size:1.1rem; letter-spacing:0.5px;"><?php bloginfo( 'name' ); ?></span>
        </a>
        <button class="mobile-menu__close" id="mobileClose" aria-label="<?php esc_attr_e( 'Close Menu', 'sap-security-pro' ); ?>">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
        </button>
    </div>

    <!-- Mobile Search -->
    <div class="mobile-menu__search">
        <?php get_search_form(); ?>
    </div>

    <!-- Mobile Nav Links -->
    <div class="mobile-menu__nav">
        <?php
        wp_nav_menu([
            'menu'           => 'Menu1',
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'mobile-nav',
            'fallback_cb'    => 'sap_mobile_fallback_menu',
        ]);
        ?>
    </div>

    <!-- Mobile Social & CTA -->
    <div class="mobile-menu__footer">
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="btn btn-primary" style="width:100%;justify-content:center;">
            <?php esc_html_e( 'Explore Our Blogs', 'sap-security-pro' ); ?>
        </a>
        <div class="mobile-social">
            <?php if ( $linkedin = get_theme_mod( 'sap_social_linkedin' ) ) : ?>
                <a href="<?php echo esc_url( $linkedin ); ?>" class="mobile-social__link" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
            <?php endif; ?>
            <?php if ( $twitter = get_theme_mod( 'sap_social_twitter' ) ) : ?>
                <a href="<?php echo esc_url( $twitter ); ?>" class="mobile-social__link" target="_blank" rel="noopener noreferrer" aria-label="Twitter/X">
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.261 5.635 5.904-5.635zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
            <?php endif; ?>
            <a href="<?php echo esc_url( get_feed_link() ); ?>" class="mobile-social__link" aria-label="RSS Feed">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M4 11a9 9 0 0 1 9 9"/><path d="M4 4a16 16 0 0 1 16 16"/><circle cx="5" cy="19" r="1"/>
                </svg>
            </a>
        </div>
    </div>
</nav>

<!-- MAIN CONTENT WRAPPER -->
<main id="main" class="site-main" role="main">

<style>
/* =====================================================
   HEADER STYLES
===================================================== */
.site-loader {
    position: fixed;
    inset: 0;
    background: var(--color-bg);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 9999;
    transition: opacity 0.5s ease, visibility 0.5s ease;
}
.site-loader.loaded { opacity: 0; visibility: hidden; pointer-events: none; }
.site-loader__inner { text-align: center; display: flex; flex-direction: column; align-items: center; gap: 1.5rem; }
.site-loader__logo { animation: loader-pulse 1s ease-in-out infinite; }
@keyframes loader-pulse { 0%,100%{transform:scale(1)}50%{transform:scale(1.1)} }
.site-loader__bar { width: 200px; height: 3px; background: rgba(255,255,255,0.1); border-radius: 99px; overflow: hidden; }
.site-loader__progress { height: 100%; background: linear-gradient(90deg, var(--color-accent), var(--color-accent-warm)); border-radius: 99px; animation: loader-progress 1.5s ease forwards; }
@keyframes loader-progress { from{width:0} to{width:100%} }
.site-loader__text { font-size: 0.8rem; color: var(--color-text-muted); letter-spacing: 0.1em; text-transform: uppercase; font-family: var(--font-mono); }

/* Announcement Bar */
.announcement-bar {
    background: linear-gradient(135deg, rgba(0,212,255,0.08), rgba(255,107,53,0.06));
    border-bottom: 1px solid rgba(0,212,255,0.12);
    padding: 0.55rem 0;
    position: relative;
    z-index: 100;
}
.announcement-bar__inner { display: flex; align-items: center; justify-content: center; gap: 0.75rem; }
.announcement-bar__text { font-size: 0.85rem; color: var(--color-text-muted); margin: 0; }
.announcement-bar__text a { color: var(--color-accent); font-weight: 600; }
.announcement-bar__text a:hover { color: var(--color-accent-warm); }
.announcement-bar__close { background: none; border: none; color: var(--color-text-faint); cursor: pointer; padding: 2px; margin-left: auto; transition: color 0.2s; }
.announcement-bar__close:hover { color: var(--color-text); }

/* Site Header */
.site-header {
    position: sticky;
    top: 0;
    z-index: 500;
    background: rgba(6,14,28,0.85);
    backdrop-filter: blur(20px) saturate(180%);
    -webkit-backdrop-filter: blur(20px) saturate(180%);
    border-bottom: 1px solid rgba(0,212,255,0.08);
    transition: all 0.3s ease;
    height: var(--header-height);
    display: flex;
    align-items: center;
}
.site-header.scrolled {
    background: rgba(6,14,28,0.97);
    box-shadow: 0 4px 40px rgba(0,0,0,0.5);
    border-bottom-color: rgba(0,212,255,0.15);
}

.header-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
    width: 100%;
}

/* Logo */
.site-logo {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    text-decoration: none;
    flex-shrink: 0;
}
.logo-icon { flex-shrink: 0; }
.logo-text { display: flex; flex-direction: column; }
.logo-name {
    font-family: var(--font-display);
    font-size: 1rem;
    font-weight: 800;
    color: var(--color-heading);
    line-height: 1.1;
    letter-spacing: -0.02em;
}
.logo-tagline {
    font-size: 0.65rem;
    color: var(--color-text-faint);
    letter-spacing: 0.08em;
    text-transform: uppercase;
}

/* Primary Nav */
.primary-nav { flex: 1; display: flex; justify-content: center; }
.nav__list {
    display: flex;
    align-items: center;
    gap: 0;
    list-style: none;
    padding: 0;
    margin: 0;
}
.nav__item { position: relative; }
.nav__link {
    display: flex;
    align-items: center;
    gap: 0.3rem;
    padding: 0.6rem 1rem;
    font-size: 0.875rem;
    font-weight: 500;
    color: var(--color-text-muted);
    text-decoration: none;
    border-radius: var(--radius-sm);
    transition: all 0.2s ease;
    white-space: nowrap;
}
.nav__link:hover, .nav__link.active {
    color: var(--color-accent);
    background: rgba(0,212,255,0.06);
}
.nav__chevron { transition: transform 0.2s ease; }
.nav__item:hover .nav__chevron { transform: rotate(180deg); }

/* Dropdown */
.nav__dropdown {
    position: absolute;
    top: calc(100% + 8px);
    left: 50%;
    transform: translateX(-50%) translateY(-8px);
    min-width: 240px;
    background: var(--color-primary-mid);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: 0.5rem;
    list-style: none;
    opacity: 0;
    visibility: hidden;
    transition: all 0.25s ease;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5), var(--shadow-glow);
    z-index: 1000;
}
.nav__dropdown::before {
    content: '';
    position: absolute;
    top: -6px;
    left: 50%;
    transform: translateX(-50%);
    width: 12px;
    height: 12px;
    background: var(--color-primary-mid);
    border: 1px solid var(--color-border);
    border-right: none;
    border-bottom: none;
    transform: translateX(-50%) rotate(45deg);
}
.nav__item:hover > .nav__dropdown {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) translateY(0);
}

/* Nested Dropdowns (Desktop) */
.nav__dropdown .nav__item { position: relative; width: 100%; }
.nav__dropdown .nav__dropdown {
    top: -0.5rem;
    left: 100%;
    transform: translateX(10px) translateY(0);
    margin-left: 2px;
}
.nav__dropdown .nav__item:hover > .nav__dropdown {
    transform: translateX(0) translateY(0);
}
.nav__dropdown .nav__dropdown::before { display: none; }

.nav__dropdown .nav__link {
    display: block;
    padding: 0.6rem 1rem;
    border-radius: var(--radius-sm);
    font-size: 0.85rem;
    color: var(--color-text-muted);
    border-left: 2px solid transparent;
}
.nav__dropdown .nav__link:hover {
    color: var(--color-accent);
    background: rgba(0,212,255,0.06);
    border-left-color: var(--color-accent);
}

/* Header Actions */
.header-actions { display: flex; align-items: center; gap: 0.5rem; flex-shrink: 0; }
.header-action-btn {
    width: 40px; height: 40px;
    display: flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-md);
    color: var(--color-text-muted);
    cursor: pointer;
    transition: all 0.2s ease;
    text-decoration: none;
}
.header-action-btn:hover {
    color: var(--color-accent);
    background: rgba(0,212,255,0.08);
    border-color: rgba(0,212,255,0.3);
}
.header-cta { height: 40px; padding: 0 1.25rem; font-size: 0.82rem; }

/* Search Overlay */
.search-overlay {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: rgba(6,14,28,0.98);
    backdrop-filter: blur(20px);
    border-bottom: 1px solid var(--color-border);
    padding: 2rem 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
    z-index: 400;
}
.search-overlay.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}
.search-overlay__label {
    font-size: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.12em;
    color: var(--color-text-faint);
    margin-bottom: 0.75rem;
    font-weight: 600;
}
.search-overlay .search-form__inner { display: flex; gap: 0.75rem; }
.search-overlay .search-input { flex: 1; font-size: 1.1rem; }
.search-overlay__suggestions { display: flex; align-items: center; gap: 0.5rem; flex-wrap: wrap; margin-top: 1rem; }
.search-overlay__suggestion-label { font-size: 0.8rem; color: var(--color-text-faint); }
.search-suggestion {
    padding: 0.3rem 0.75rem;
    background: rgba(0,212,255,0.07);
    border: 1px solid rgba(0,212,255,0.15);
    border-radius: var(--radius-full);
    font-size: 0.8rem;
    color: var(--color-text-muted);
    transition: all 0.2s;
}
.search-suggestion:hover { background: rgba(0,212,255,0.15); color: var(--color-accent); }
.search-overlay__close {
    position: absolute;
    top: 1rem; right: 2rem;
    background: none; border: none;
    color: var(--color-text-muted);
    cursor: pointer;
    transition: color 0.2s;
}
.search-overlay__close:hover { color: var(--color-accent); }

/* Hamburger */
.hamburger {
    display: none;
    flex-direction: column;
    gap: 5px;
    background: rgba(255,255,255,0.04);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-md);
    padding: 9px 11px;
    cursor: pointer;
    width: 44px; height: 44px;
    align-items: center; justify-content: center;
}
.hamburger__line {
    display: block;
    width: 20px; height: 2px;
    background: var(--color-text-muted);
    border-radius: 2px;
    transition: all 0.3s ease;
}
.hamburger.active .hamburger__line:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.hamburger.active .hamburger__line:nth-child(2) { opacity: 0; transform: scaleX(0); }
.hamburger.active .hamburger__line:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }

/* Mobile Overlay */
.mobile-overlay {
    position: fixed;
    inset: 0;
    background: rgba(0,0,0,0.7);
    backdrop-filter: blur(4px);
    z-index: 600;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}
.mobile-overlay.active { opacity: 1; visibility: visible; }

/* Mobile Menu */
.mobile-menu {
    position: fixed;
    top: 0; right: 0; bottom: 0;
    width: min(85vw, 360px);
    background: var(--color-primary-mid);
    border-left: 1px solid var(--color-border);
    z-index: 700;
    transform: translateX(100%);
    transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    overflow-y: auto;
}
.mobile-menu.active { transform: translateX(0); }
.mobile-menu__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.25rem 1.5rem;
    border-bottom: 1px solid var(--color-border);
}
.mobile-menu__logo { display: flex; align-items: center; gap: 0.75rem; text-decoration: none; }
.mobile-menu__site-name { font-family: var(--font-display); font-weight: 700; color: var(--color-heading); font-size: 0.95rem; }
.mobile-menu__close { background: none; border: none; color: var(--color-text-muted); cursor: pointer; }
.mobile-menu__search { padding: 1rem 1.5rem; border-bottom: 1px solid var(--color-border); }
.mobile-menu__search .search-form__inner { display: flex; gap: 0.5rem; }
.mobile-menu__nav { flex: 1; padding: 0.75rem 0; }
.mobile-nav { list-style: none; padding: 0; margin: 0; }
.mobile-nav .nav__item > .nav__link {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 1.5rem;
    color: var(--color-text-muted);
    font-size: 0.95rem;
    border-left: 3px solid transparent;
    transition: all 0.2s;
    white-space: normal; /* Fix for overflow */
    word-wrap: break-word;
    line-height: 1.4;
}
.mobile-nav .nav__link:hover, .mobile-nav .nav__link.active {
    color: var(--color-accent);
    background: rgba(0,212,255,0.05);
    border-left-color: var(--color-accent);
}
.mobile-nav .nav__dropdown {
    position: static;
    opacity: 1;
    visibility: visible;
    transform: none;
    background: rgba(0,0,0,0.2);
    box-shadow: none;
    padding: 0;
    border: none;
    border-radius: 0;
    display: none;
}
.mobile-nav .nav__item.open > .nav__dropdown { display: block; }
.mobile-nav .nav__dropdown .nav__link { padding-left: 2.5rem; font-size: 0.875rem; white-space: normal; word-break: break-word; }
.mobile-nav .nav__dropdown .nav__dropdown .nav__link { padding-left: 3.5rem; font-size: 0.8rem; white-space: normal; word-break: break-word; }
.mobile-nav .menu-item-has-children > .nav__link .nav__chevron {
    transform: rotate(0deg);
    transition: transform 0.3s;
    flex-shrink: 0;
    margin-left: 10px;
}
.mobile-nav .menu-item-has-children.open > .nav__link .nav__chevron {
    transform: rotate(180deg);
}

.mobile-menu__footer { padding: 1.5rem; border-top: 1px solid var(--color-border); display: flex; flex-direction: column; gap: 1rem; }
.mobile-social { display: flex; justify-content: center; gap: 1rem; }
.mobile-social__link {
    width: 38px; height: 38px;
    display: flex; align-items: center; justify-content: center;
    background: rgba(255,255,255,0.05);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-md);
    color: var(--color-text-muted);
    transition: all 0.2s;
}
.mobile-social__link:hover { color: var(--color-accent); background: rgba(0,212,255,0.08); }

/* Responsive */
@media (max-width: 1100px) {
    .primary-nav { display: none; }
    .hamburger { display: flex; }
    .header-cta { display: none; }
}
@media (max-width: 600px) {
    .announcement-bar__text { font-size: 0.78rem; }
    .logo-tagline { display: none; }
}
</style>

<?php
/**
 * Fallback menu when no menu is assigned
 */
function sap_fallback_menu() {
    $pages = [
        'Blog'              => '/blog',
        'R/3 Security'      => '/r3-security',
        'HR Security'       => '/hr-security',
        'Interview Q&A'     => '/interview-questions',
        'Contact'           => '/contact',
    ];
    echo '<ul class="nav__list" role="menubar">';
    foreach ( $pages as $label => $url ) {
        echo '<li class="nav__item"><a href="' . esc_url( home_url( $url ) ) . '" class="nav__link">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}

function sap_mobile_fallback_menu() {
    $pages = [
        'Home'          => '/',
        'Blog'          => '/blog',
        'Basics'        => '/basics',
        'R/3 Security'  => '/r3-security',
        'HR Security'   => '/hr-security',
        'Interview Q&A' => '/interview-questions',
        'Contact'       => '/contact',
    ];
    echo '<ul class="mobile-nav">';
    foreach ( $pages as $label => $url ) {
        echo '<li class="nav__item"><a href="' . esc_url( home_url( $url ) ) . '" class="nav__link">' . esc_html( $label ) . '</a></li>';
    }
    echo '</ul>';
}
?>