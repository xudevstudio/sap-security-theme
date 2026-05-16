<?php
/**
 * SAP Security Analyst Pro - Theme Functions
 * 
 * @package SAP_Security_Pro
 * @version 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// =====================================================
// THEME CONSTANTS
// =====================================================
define( 'SAP_THEME_VERSION', '2.0.8' );
define( 'SAP_THEME_DIR', get_template_directory() );
define( 'SAP_THEME_URI', get_template_directory_uri() );

// =====================================================
// THEME SETUP
// =====================================================
function sap_theme_setup() {
    // Translation support
    load_theme_textdomain( 'sap-security-pro', SAP_THEME_DIR . '/languages' );

    // Title tag
    add_theme_support( 'title-tag' );

    // Post thumbnails
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'sap-featured', 1200, 600, true );
    add_image_size( 'sap-card', 600, 400, true );
    add_image_size( 'sap-thumb', 300, 200, true );
    add_image_size( 'sap-hero', 1920, 800, true );

    // HTML5 support
    add_theme_support( 'html5', [
        'search-form', 'comment-form', 'comment-list',
        'gallery', 'caption', 'style', 'script',
    ]);

    // Custom logo
    add_theme_support( 'custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Custom background
    add_theme_support( 'custom-background', [
        'default-color' => '060e1c',
    ]);

    // Editor color palette
    add_theme_support( 'editor-color-palette', [
        [ 'name' => 'Cyber Blue',  'slug' => 'accent',   'color' => '#00d4ff' ],
        [ 'name' => 'Dark Navy',   'slug' => 'primary',  'color' => '#0a1628' ],
        [ 'name' => 'Warm Orange', 'slug' => 'warm',     'color' => '#ff6b35' ],
        [ 'name' => 'Neon Green',  'slug' => 'green',    'color' => '#00e5a0' ],
    ]);

    // Wide alignment
    add_theme_support( 'align-wide' );

    // Block editor styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'assets/css/editor.css' );

    // Automatic feed links
    add_theme_support( 'automatic-feed-links' );

    // Register navigation menus
    register_nav_menus([
        'primary'   => esc_html__( 'Primary Navigation', 'sap-security-pro' ),
        'footer-1'  => esc_html__( 'Footer Column 1', 'sap-security-pro' ),
        'footer-2'  => esc_html__( 'Footer Column 2', 'sap-security-pro' ),
        'footer-3'  => esc_html__( 'Footer Column 3', 'sap-security-pro' ),
        'social'    => esc_html__( 'Social Links', 'sap-security-pro' ),
    ]);
}
add_action( 'after_setup_theme', 'sap_theme_setup' );

// =====================================================
// ENQUEUE STYLES & SCRIPTS
// =====================================================
function sap_enqueue_assets() {
    // Google Fonts - Syne + DM Sans + JetBrains Mono
    wp_enqueue_style(
        'sap-google-fonts',
        'https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=JetBrains+Mono:wght@400;500&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'sap-style',
        get_stylesheet_uri(),
        [ 'sap-google-fonts' ],
        SAP_THEME_VERSION
    );

    // Main JS
    wp_enqueue_script(
        'sap-main',
        SAP_THEME_URI . '/assets/js/main.js',
        [ 'jquery' ],
        SAP_THEME_VERSION,
        true
    );

    // Localize script
    wp_localize_script( 'sap-main', 'sapTheme', [
        'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
        'nonce'     => wp_create_nonce( 'sap_nonce' ),
        'homeUrl'   => home_url(),
        'themeUri'  => SAP_THEME_URI,
    ]);

    // Comment reply
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

    // Prism.js for code highlighting on single posts
    if ( is_single() || is_page() ) {
        wp_enqueue_style(
            'prism-css',
            SAP_THEME_URI . '/assets/css/prism.css',
            [],
            '1.29.0'
        );
        wp_enqueue_script(
            'prism-js',
            SAP_THEME_URI . '/assets/js/prism.js',
            [],
            '1.29.0',
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'sap_enqueue_assets' );

// =====================================================
// WIDGET AREAS (SIDEBARS)
// =====================================================
function sap_register_sidebars() {
    $sidebars = [
        [
            'name'          => esc_html__( 'Main Sidebar', 'sap-security-pro' ),
            'id'            => 'sidebar-main',
            'description'   => esc_html__( 'Main blog sidebar widgets.', 'sap-security-pro' ),
        ],
        [
            'name'          => esc_html__( 'Blog Sidebar', 'sap-security-pro' ),
            'id'            => 'sidebar-blog',
            'description'   => esc_html__( 'Blog archive sidebar.', 'sap-security-pro' ),
        ],
        [
            'name'          => esc_html__( 'Ads Sidebar (Global)', 'sap-security-pro' ),
            'id'            => 'sidebar-ads',
            'description'   => esc_html__( 'AdSense ad units shown on all pages in the sidebar.', 'sap-security-pro' ),
        ],
        [
            'name'          => esc_html__( 'Footer Column 1', 'sap-security-pro' ),
            'id'            => 'footer-1',
        ],
        [
            'name'          => esc_html__( 'Footer Column 2', 'sap-security-pro' ),
            'id'            => 'footer-2',
        ],
        [
            'name'          => esc_html__( 'Footer Column 3', 'sap-security-pro' ),
            'id'            => 'footer-3',
        ],
        [
            'name'          => esc_html__( 'Footer Column 4', 'sap-security-pro' ),
            'id'            => 'footer-4',
        ],
    ];

    foreach ( $sidebars as $sidebar ) {
        register_sidebar( array_merge( [
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ], $sidebar ) );
    }
}
add_action( 'widgets_init', 'sap_register_sidebars' );

// =====================================================
// CUSTOM POST TYPES
// =====================================================
function sap_register_post_types() {
    // SAP Tutorials CPT
    register_post_type( 'sap_tutorial', [
        'labels' => [
            'name'               => esc_html__( 'Tutorials', 'sap-security-pro' ),
            'singular_name'      => esc_html__( 'Tutorial', 'sap-security-pro' ),
            'add_new'            => esc_html__( 'Add Tutorial', 'sap-security-pro' ),
            'add_new_item'       => esc_html__( 'Add New Tutorial', 'sap-security-pro' ),
            'edit_item'          => esc_html__( 'Edit Tutorial', 'sap-security-pro' ),
            'search_items'       => esc_html__( 'Search Tutorials', 'sap-security-pro' ),
        ],
        'public'             => true,
        'has_archive'        => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'supports'           => [ 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'comments' ],
        'rewrite'            => [ 'slug' => 'tutorials' ],
    ]);

    // SAP Quiz CPT
    register_post_type( 'sap_quiz', [
        'labels' => [
            'name'          => esc_html__( 'Quizzes', 'sap-security-pro' ),
            'singular_name' => esc_html__( 'Quiz', 'sap-security-pro' ),
        ],
        'public'      => true,
        'has_archive' => true,
        'show_in_rest'=> true,
        'menu_icon'   => 'dashicons-clipboard',
        'supports'    => [ 'title', 'editor', 'thumbnail' ],
        'rewrite'     => [ 'slug' => 'quizzes' ],
    ]);
}
add_action( 'init', 'sap_register_post_types' );

// =====================================================
// CUSTOM TAXONOMIES
// =====================================================
function sap_register_taxonomies() {
    // SAP Module taxonomy
    register_taxonomy( 'sap_module', [ 'post', 'sap_tutorial' ], [
        'labels' => [
            'name'          => esc_html__( 'SAP Modules', 'sap-security-pro' ),
            'singular_name' => esc_html__( 'SAP Module', 'sap-security-pro' ),
        ],
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => [ 'slug' => 'module' ],
    ]);

    // Difficulty Level taxonomy
    register_taxonomy( 'difficulty', [ 'post', 'sap_tutorial' ], [
        'labels' => [
            'name'          => esc_html__( 'Difficulty Levels', 'sap-security-pro' ),
            'singular_name' => esc_html__( 'Difficulty', 'sap-security-pro' ),
        ],
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'show_admin_column' => true,
        'rewrite'           => [ 'slug' => 'difficulty' ],
    ]);
}
add_action( 'init', 'sap_register_taxonomies' );

// =====================================================
// THEME OPTIONS (CUSTOMIZER)
// =====================================================
function sap_customize_register( $wp_customize ) {
    // Hero Section
    $wp_customize->add_section( 'sap_hero', [
        'title'    => esc_html__( 'Hero Section', 'sap-security-pro' ),
        'priority' => 30,
    ]);

    $hero_settings = [
        'sap_hero_headline'    => [ 'default' => 'Master SAP Security', 'label' => 'Hero Headline' ],
        'sap_hero_subheadline' => [ 'default' => 'Comprehensive SAP Security knowledge base for analysts, consultants, and architects.', 'label' => 'Hero Subheadline' ],
        'sap_hero_cta_text'    => [ 'default' => 'Explore Tutorials', 'label' => 'CTA Button Text' ],
        'sap_hero_cta_url'     => [ 'default' => '/blog', 'label' => 'CTA Button URL' ],
    ];

    foreach ( $hero_settings as $id => $args ) {
        $wp_customize->add_setting( $id, [ 'default' => $args['default'], 'sanitize_callback' => 'sanitize_text_field' ] );
        $wp_customize->add_control( $id, [ 'label' => esc_html__( $args['label'], 'sap-security-pro' ), 'section' => 'sap_hero', 'type' => 'text' ] );
    }

    // Hero Stats
    $wp_customize->add_section( 'sap_hero_stats', [
        'title'    => esc_html__( 'Hero Stats', 'sap-security-pro' ),
        'priority' => 31,
    ]);

    $stats_settings = [
        'sap_stat_1_number' => [ 'default' => '50+', 'label' => 'Stat 1 Number' ],
        'sap_stat_1_label'  => [ 'default' => 'In-depth Articles', 'label' => 'Stat 1 Label' ],
        'sap_stat_2_number' => [ 'default' => '7+', 'label' => 'Stat 2 Number' ],
        'sap_stat_2_label'  => [ 'default' => 'SAP Modules Covered', 'label' => 'Stat 2 Label' ],
        'sap_stat_3_number' => [ 'default' => '200+', 'label' => 'Stat 3 Number' ],
        'sap_stat_3_label'  => [ 'default' => 'Interview Questions', 'label' => 'Stat 3 Label' ],
        'sap_stat_4_number' => [ 'default' => '10K+', 'label' => 'Stat 4 Number' ],
        'sap_stat_4_label'  => [ 'default' => 'Monthly Readers', 'label' => 'Stat 4 Label' ],
    ];

    foreach ( $stats_settings as $id => $args ) {
        $wp_customize->add_setting( $id, [ 'default' => $args['default'], 'sanitize_callback' => 'sanitize_text_field' ] );
        $wp_customize->add_control( $id, [ 'label' => esc_html__( $args['label'], 'sap-security-pro' ), 'section' => 'sap_hero_stats', 'type' => 'text' ] );
    }

    // Footer Section
    $wp_customize->add_section( 'sap_footer', [
        'title'    => esc_html__( 'Footer Options', 'sap-security-pro' ),
        'priority' => 50,
    ]);

    $wp_customize->add_setting( 'sap_footer_about', [
        'default'           => 'A comprehensive SAP Security knowledge base for professionals.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control( 'sap_footer_about', [
        'label'   => esc_html__( 'Footer About Text', 'sap-security-pro' ),
        'section' => 'sap_footer',
        'type'    => 'textarea',
    ]);

    // Footer Stats Settings
    $footer_stats_settings = [
        'sap_footer_stat_1_number' => [ 'default' => '47+', 'label' => 'Footer Stat 1 Number' ],
        'sap_footer_stat_1_label'  => [ 'default' => 'Articles', 'label' => 'Footer Stat 1 Label' ],
        'sap_footer_stat_2_number' => [ 'default' => '7+', 'label' => 'Footer Stat 2 Number' ],
        'sap_footer_stat_2_label'  => [ 'default' => 'Topics', 'label' => 'Footer Stat 2 Label' ],
        'sap_footer_stat_3_number' => [ 'default' => '10K+', 'label' => 'Footer Stat 3 Number' ],
        'sap_footer_stat_3_label'  => [ 'default' => 'Readers', 'label' => 'Footer Stat 3 Label' ],
    ];

    foreach ( $footer_stats_settings as $id => $args ) {
        $wp_customize->add_setting( $id, [ 'default' => $args['default'], 'sanitize_callback' => 'sanitize_text_field' ] );
        $wp_customize->add_control( $id, [ 'label' => esc_html__( $args['label'], 'sap-security-pro' ), 'section' => 'sap_footer', 'type' => 'text' ] );
    }

    // Social Links
    $social_links = [ 'linkedin', 'twitter', 'youtube', 'github', 'rss' ];
    foreach ( $social_links as $social ) {
        $wp_customize->add_setting( "sap_social_{$social}", [ 'default' => '', 'sanitize_callback' => 'esc_url_raw' ] );
        $wp_customize->add_control( "sap_social_{$social}", [
            'label'   => sprintf( esc_html__( '%s URL', 'sap-security-pro' ), ucfirst( $social ) ),
            'section' => 'sap_footer',
            'type'    => 'url',
        ]);
    }
}
add_action( 'customize_register', 'sap_customize_register' );

// =====================================================
// EXCERPT LENGTH & MORE
// =====================================================
function sap_excerpt_length( $length ) {
    return is_admin() ? $length : 30;
}
add_filter( 'excerpt_length', 'sap_excerpt_length' );

function sap_excerpt_more( $more ) {
    return '&hellip;';
}
add_filter( 'excerpt_more', 'sap_excerpt_more' );

// =====================================================
// BODY CLASSES
// =====================================================
function sap_body_classes( $classes ) {
    if ( is_singular() ) {
        $classes[] = 'singular-post';
    }
    if ( has_post_thumbnail() ) {
        $classes[] = 'has-featured-image';
    }
    return $classes;
}
add_filter( 'body_class', 'sap_body_classes' );

// =====================================================
// READING TIME HELPER
// =====================================================
function sap_reading_time( $post_id = null ) {
    $post_id    = $post_id ?: get_the_ID();
    $content    = get_post_field( 'post_content', $post_id );
    $word_count = str_word_count( strip_tags( $content ) );
    $minutes    = (int) ceil( $word_count / 200 );
    return max( 1, $minutes );
}

// =====================================================
// CATEGORY COLOR HELPER
// =====================================================
function sap_get_category_color( $category_name ) {
    $colors = [
        'basics'     => 'accent',
        'r3-security'=> 'warm',
        'rfc'        => 'green',
        'secatt'     => 'gold',
        'hr-security'=> 'accent',
        'audit'      => 'warm',
        'interview'  => 'green',
        'misc'       => 'gold',
    ];
    $slug = sanitize_title( $category_name );
    return $colors[ $slug ] ?? 'accent';
}

// =====================================================
// AJAX: LOAD MORE POSTS
// =====================================================
function sap_load_more_posts() {
    check_ajax_referer( 'sap_nonce', 'nonce' );

    $page     = intval( $_POST['page'] ?? 1 );
    $category = sanitize_text_field( $_POST['category'] ?? '' );
    $per_page = 6;

    $args = [
        'post_type'      => 'post',
        'posts_per_page' => $per_page,
        'paged'          => $page,
        'post_status'    => 'publish',
    ];

    if ( $category ) {
        $args['category_name'] = $category;
    }

    $query = new WP_Query( $args );
    ob_start();

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            get_template_part( 'template-parts/card', 'post' );
        }
    }

    $html = ob_get_clean();
    wp_reset_postdata();

    wp_send_json_success([
        'html'    => $html,
        'hasMore' => $page < $query->max_num_pages,
        'total'   => $query->found_posts,
    ]);
}
add_action( 'wp_ajax_sap_load_more', 'sap_load_more_posts' );
add_action( 'wp_ajax_nopriv_sap_load_more', 'sap_load_more_posts' );

// =====================================================
// SEARCH FORM OVERRIDE
// =====================================================
function sap_search_form( $form ) {
    $form = '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
        <div class="search-form__inner">
            <input type="search" class="form-input search-input" 
                   placeholder="' . esc_attr__( 'Search SAP topics...', 'sap-security-pro' ) . '" 
                   value="' . get_search_query() . '" name="s" />
            <button type="submit" class="btn btn-primary search-submit">
                <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8"/><path d="m21 21-4.35-4.35"/>
                </svg>
            </button>
        </div>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'sap_search_form' );

// =====================================================
// MENU WALKER - DROPDOWN SUPPORT
// =====================================================
class SAP_Nav_Walker extends Walker_Nav_Menu {
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="nav__dropdown">';
    }
    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $classes   = empty( $item->classes ) ? [] : (array) $item->classes;
        $has_child = in_array( 'menu-item-has-children', $classes );
        $class_str = implode( ' ', array_filter( array_map( 'trim', $classes ) ) );
        $output   .= '<li class="nav__item ' . esc_attr( $class_str ) . '">';

        $atts           = [];
        $atts['href']   = $item->url ?? '#';
        $atts['class']  = 'nav__link' . ( $has_child ? ' nav__link--dropdown' : '' );
        if ( $item->current || $item->current_item_ancestor ) {
            $atts['class'] .= ' active';
        }

        $attr_str = '';
        foreach ( $atts as $attr => $value ) {
            $attr_str .= ' ' . $attr . '="' . esc_attr( $value ) . '"';
        }

        $title  = apply_filters( 'the_title', $item->title, $item->ID );
        $output .= '<a' . $attr_str . '>' . $title;
        if ( $has_child ) {
            $output .= ' <svg class="nav__chevron" width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polyline points="6 9 12 15 18 9"/></svg>';
        }
        $output .= '</a>';
    }
    public function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}

// =====================================================
// DISABLE XMLRPC (Security)
// =====================================================
add_filter( 'xmlrpc_enabled', '__return_false' );

// =====================================================
// REMOVE WORDPRESS VERSION
// =====================================================
remove_action( 'wp_head', 'wp_generator' );

// =====================================================
// CLEAN UP WP HEAD
// =====================================================
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// =====================================================
// AJAX LIVE SEARCH
// =====================================================
function sap_ajax_search() {
    $search_term = sanitize_text_field($_POST['term']);
    
    $query = new WP_Query([
        'post_type'      => 'post',
        'post_status'    => 'publish',
        's'              => $search_term,
        'posts_per_page' => 5
    ]);
    
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <a href="<?php the_permalink(); ?>" class="ajax-search-result">
                <?php if (has_post_thumbnail()): ?>
                    <div class="ajax-result-img"><?php the_post_thumbnail('thumbnail'); ?></div>
                <?php endif; ?>
                <div class="ajax-result-content">
                    <div class="ajax-result-title"><?php the_title(); ?></div>
                    <div class="ajax-result-meta"><?php echo get_the_date(); ?></div>
                </div>
            </a>
            <?php
        }
        echo '<a href="' . home_url('/?s=' . $search_term) . '" class="ajax-search-view-all">View All Results</a>';
    } else {
        echo '<div class="ajax-no-results">No results found for "' . esc_html($search_term) . '"</div>';
    }
    
    wp_die();
}
add_action('wp_ajax_sap_search', 'sap_ajax_search');
add_action('wp_ajax_nopriv_sap_search', 'sap_ajax_search');

function sap_enqueue_ajax_search() {
    wp_localize_script('jquery', 'sap_ajax', [
        'url' => admin_url('admin-ajax.php')
    ]);
}
add_action('wp_enqueue_scripts', 'sap_enqueue_ajax_search');

// =====================================================
// GOOGLE ADSENSE AUTO ADS
// Auto Ads handles placement automatically — no push()
// needed. Just the script tag in <head> is correct.
// =====================================================
function sap_add_adsense() {
    // Modern syntax with crossorigin for best performance & revenue
    echo '<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1241348474673689" crossorigin="anonymous"></script>' . "\n";
}
add_action('wp_head', 'sap_add_adsense');

// =====================================================
// ADSENSE: BETWEEN PARAGRAPHS (revenue-optimized)
// Injects a responsive ad after the 3rd and 7th paragraph
// in single posts — highest-CTR positions per Google.
// =====================================================
function sap_inject_in_content_ads( $content ) {
    // Only on single posts, not pages or admin
    if ( ! is_single() || is_admin() || is_feed() ) {
        return $content;
    }

    $ad_html = '<div class="sap-in-content-ad" style="margin:2rem 0;text-align:center;clear:both;">
        <p class="sap-ad-label" style="font-size:0.7rem;color:#475569;text-transform:uppercase;letter-spacing:0.1em;margin-bottom:4px;">Advertisement</p>
        <ins class="adsbygoogle"
             style="display:block;text-align:center;"
             data-ad-client="ca-pub-1241348474673689"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>';

    // Split content by </p> tags
    $paragraphs = preg_split( '/(<\/p>)/i', $content, -1, PREG_SPLIT_DELIM_CAPTURE );
    $new_content = '';
    $para_count  = 0;

    foreach ( $paragraphs as $i => $part ) {
        $new_content .= $part;
        // Count closing </p> tags
        if ( strtolower(trim($part)) === '</p>' ) {
            $para_count++;
            // Insert ad after paragraph 3 and 7
            if ( $para_count === 3 || $para_count === 7 ) {
                $new_content .= $ad_html;
            }
        }
    }

    return $new_content;
}
add_filter( 'the_content', 'sap_inject_in_content_ads' );

// =====================================================
// ADSENSE: GLOBAL SIDEBAR AD OUTPUT
// Call sap_render_ads_sidebar() in any template to
// display the AdSense responsive sidebar widget.
// =====================================================
function sap_render_ads_sidebar() {
    ?>
    <aside class="sap-ads-sidebar" aria-label="Advertisements">
        <?php if ( is_active_sidebar('sidebar-ads') ) : ?>
            <?php dynamic_sidebar('sidebar-ads'); ?>
        <?php else : ?>
            <!-- Default AdSense responsive unit (sidebar) -->
            <div class="sap-sidebar-ad-unit">
                <p class="sap-ad-label">Advertisement</p>
                <ins class="adsbygoogle"
                     style="display:block;"
                     data-ad-client="ca-pub-1241348474673689"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
            <!-- Sticky sidebar ad (best for revenue) -->
            <div class="sap-sidebar-ad-unit sap-sidebar-sticky">
                <p class="sap-ad-label">Advertisement</p>
                <ins class="adsbygoogle"
                     style="display:block;"
                     data-ad-client="ca-pub-1241348474673689"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
        <?php endif; ?>
    </aside>
    <style>
    .sap-ads-sidebar {
        width: 300px;
        flex-shrink: 0;
    }
    .sap-sidebar-ad-unit {
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.06);
        border-radius: 12px;
        padding: 0.75rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }
    .sap-sidebar-sticky {
        position: sticky;
        top: 90px;
    }
    .sap-ad-label {
        font-size: 0.7rem;
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        text-align: center;
        margin-bottom: 6px;
    }
    .sap-in-content-ad {
        border-radius: 12px;
        overflow: hidden;
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.06);
        padding: 0.5rem;
    }
    /* Layout: content + sidebar wrapper */
    .sap-content-with-sidebar {
        display: flex;
        gap: 2.5rem;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
    }
    .sap-main-content { flex: 1; min-width: 0; }
    @media (max-width: 1024px) {
        .sap-ads-sidebar { display: none; }
        .sap-content-with-sidebar { display: block; }
    }
    </style>
    <?php
}

// =====================================================
// ADSENSE AD UNIT HELPER
// =====================================================
function sap_ad_unit( $slot = '', $style = 'display:block;text-align:center;' ) {
    if ( empty($slot) ) return;
    ?>
    <div class="sap-ad-unit" style="margin: 2rem auto; text-align: center; overflow: hidden;">
        <ins class="adsbygoogle"
             style="<?php echo esc_attr($style); ?>"
             data-ad-client="ca-pub-1241348474673689"
             data-ad-slot="<?php echo esc_attr($slot); ?>"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
    </div>
    <?php
}

// =====================================================
// QUIZ UI FIX — hover text visibility override
// The plugin's blue theme sets text to #000 on hover
// but our dark theme background makes it invisible.
// We override to ensure text always stays readable.
// =====================================================
function sap_quiz_ui_fix() {
    ?>
    <style>
    /* ── mTouch Quiz: Dark-theme compatibility override ── */
    .mtq_quiz_area {
        background: #0f172a !important;
        border: 1px solid rgba(0,212,255,0.2) !important;
        border-radius: 16px !important;
        padding: 2rem !important;
        margin: 2rem 0 !important;
        font-family: 'Inter', sans-serif !important;
        max-width: 100% !important;
        box-sizing: border-box !important;
    }
    .mtq_question_text {
        color: #e2e8f0 !important;
        font-size: 1.1rem !important;
        line-height: 1.7 !important;
        font-weight: 500 !important;
        margin-bottom: 1.5rem !important;
    }
    .mtq_question_label {
        color: #00d4ff !important;
        font-size: 0.8rem !important;
        font-weight: 700 !important;
        letter-spacing: 0.1em !important;
        text-transform: uppercase !important;
        margin-bottom: 0.5rem !important;
    }
    /* Answer rows — default state */
    .mtq_answer_table tr td {
        color: #cbd5e1 !important;
        background: #1e293b !important;
        border-color: rgba(255,255,255,0.08) !important;
        padding: 0.75rem 1rem !important;
        transition: all 0.2s ease !important;
    }
    /* Answer rows — hover state: FIX text hiding */
    .mtq_answer_table tr:hover td,
    .mtq_color_blue .mtq_answer_table tr:hover td,
    .mtq_color_green .mtq_answer_table tr:hover td,
    .mtq_color_red .mtq_answer_table tr:hover td,
    .mtq_color_orange .mtq_answer_table tr:hover td,
    .mtq_color_navy .mtq_answer_table tr:hover td,
    .mtq_color_indigo .mtq_answer_table tr:hover td,
    .mtq_color_violet .mtq_answer_table tr:hover td,
    .mtq_color_black .mtq_answer_table tr:hover td {
        color: #ffffff !important;
        background: rgba(0, 212, 255, 0.12) !important;
        border-color: rgba(0,212,255,0.3) !important;
        cursor: pointer !important;
    }
    /* Letter button (A, B, C, D) */
    .mtq_css_letter_button,
    [class*="mtq_color_"] .mtq_css_letter_button {
        color: #fff !important;
        background: linear-gradient(135deg, #0066ff, #00d4ff) !important;
        border-radius: 8px !important;
        font-weight: 700 !important;
        min-width: 36px !important;
        text-align: center !important;
    }
    [class*="mtq_color_"] .mtq_css_letter_button:hover {
        background: linear-gradient(135deg, #00d4ff, #0066ff) !important;
        color: #fff !important;
        transform: scale(1.05) !important;
    }
    /* Answer text */
    .mtq_answer_text {
        color: #cbd5e1 !important;
        font-size: 1rem !important;
    }
    .mtq_answer_table tr:hover .mtq_answer_text {
        color: #ffffff !important;
    }
    
    /* Responsive fixes for Quiz on Mobile */
    @media (max-width: 768px) {
        .mtq_quiz_area {
            padding: 1rem !important;
            margin: 1rem 0 !important;
            box-sizing: border-box !important;
        }
        .mtq_answer_table {
            display: block !important;
            width: 100% !important;
        }
        .mtq_answer_table tbody {
            display: block !important;
            width: 100% !important;
        }
        .mtq_answer_table tr {
            display: flex !important;
            align-items: center !important;
            width: 100% !important;
            box-sizing: border-box !important;
            padding: 0.5rem !important;
        }
        .mtq_answer_table tr td {
            padding: 0.25rem !important;
            border: none !important;
            background: transparent !important;
        }
        .mtq_answer_table tr td:first-child {
            flex-shrink: 0 !important;
            margin-right: 10px !important;
        }
        .mtq_question_text, .mtq_answer_text {
            word-wrap: break-word !important;
            overflow-wrap: break-word !important;
            white-space: normal !important;
            line-height: 1.4 !important;
        }
        .mtq_answer_text {
            font-size: 0.9rem !important;
        }
        /* Mobile fixes for Quiz Buttons (Start, List, Restart) */
        .mtq_css_button, [class*="mtq_color_"] .mtq_css_button, .mtq_quiz_area input[type="button"] {
            max-width: 100% !important;
            white-space: normal !important;
            word-wrap: break-word !important;
            height: auto !important;
            padding: 0.6rem 1rem !important;
            font-size: 0.85rem !important;
            display: inline-block !important;
            margin: 5px 2px !important;
            box-sizing: border-box !important;
        }
        /* Fix the container that holds the buttons */
        .mtq_button_table, .mtq_button_row, .mtq_quiz_area table, .mtq_quiz_area tbody, .mtq_quiz_area tr, .mtq_quiz_area td {
            max-width: 100% !important;
        }
        .mtq_quiz_area table {
            display: block !important;
        }
    }
    
    /* Buttons */
    .mtq_css_button,
    [class*="mtq_color_"] .mtq_css_button {
        background: linear-gradient(135deg, #0066ff, #00d4ff) !important;
        color: #fff !important;
        border-radius: 50px !important;
        padding: 0.6rem 1.5rem !important;
        font-weight: 600 !important;
        letter-spacing: 0.04em !important;
        border: none !important;
    }
    [class*="mtq_color_"] .mtq_css_button:hover {
        background: linear-gradient(135deg, #00d4ff, #0066ff) !important;
        color: #fff !important;
    }
    /* Status + nav */
    .mtq_quiz_status { color: #94a3b8 !important; font-size: 0.9rem !important; }
    .mtq_quiztitle h2 { color: #00d4ff !important; }
    .mtq_instructions { color: #cbd5e1 !important; }
    .mtq_css_next_button, .mtq_css_back_button,
    [class*="mtq_color_"] .mtq_css_next_button,
    [class*="mtq_color_"] .mtq_css_back_button {
        color: #00d4ff !important;
        font-size: 1.5rem !important;
    }
    /* Correct / Wrong markers */
    .mtq_correct_marker { border-color: #22c55e !important; }
    .mtq_wrong_marker { border-color: #ef4444 !important; }
    /* Results bubble */
    [class*="mtq_color_"] .mtq_quiz_results_bubble {
        background: rgba(0,212,255,0.08) !important;
        border-color: rgba(0,212,255,0.3) !important;
        color: #e2e8f0 !important;
        border-radius: 12px !important;
    }
    /* Nav list items */
    .mtq_list_item {
        background: #1e293b !important;
        color: #94a3b8 !important;
        border-color: rgba(255,255,255,0.1) !important;
    }
    .mtq_list_item_complete,
    [class*="mtq_color_"] .mtq_list_item_complete {
        background: rgba(0,212,255,0.15) !important;
        color: #00d4ff !important;
    }
    /* Hint */
    [class*="mtq_color_"] .mtq_hint {
        background: rgba(255,165,0,0.1) !important;
        border-color: rgba(255,165,0,0.3) !important;
        color: #fbbf24 !important;
        border-radius: 8px !important;
    }
    /* Question heading underline */
    [class*="mtq_color_"] .mtq_question_heading_table {
        border-bottom: 2px solid rgba(0,212,255,0.3) !important;
    }

    /* ── AdSense Ad Unit Styling ── */
    .sap-ad-unit {
        border-radius: 12px;
        overflow: hidden;
        background: rgba(255,255,255,0.02);
        border: 1px solid rgba(255,255,255,0.06);
        padding: 0.5rem;
    }
    .sap-ad-label {
        font-size: 0.7rem;
        color: #475569;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        text-align: center;
        margin-bottom: 4px;
    }
    </style>
    <?php
}
add_action('wp_head', 'sap_quiz_ui_fix');