<?php
/**
 * Template Name: All Tutorials
 * The template for displaying a professional list of all SAP Security tutorials.
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
                <span class="breadcrumb-current">All Tutorials</span>
            </nav>
            <h1 class="page-hero__title">Explore All Tutorials</h1>
            <p class="page-hero__subtitle">Comprehensive guide to SAP Security, Authorizations, HR Security, and Technical concepts.</p>
        </div>
    </div>
    <div class="page-hero__glow" aria-hidden="true"></div>
</section>

<main id="main" class="site-main tutorials-main">
    <div class="container">
        
        <!-- SEARCH / FILTER (Visual Only) -->
        <div class="tutorials-filter" data-aos="fade-up">
            <h2 class="filter-title">Browse by Category</h2>
            <div class="filter-pills">
                <button class="filter-pill active" data-filter="all">All Tutorials</button>
                <button class="filter-pill" data-filter="basics">Basics</button>
                <button class="filter-pill" data-filter="auth">Authorization</button>
                <button class="filter-pill" data-filter="hr">HR Security</button>
                <button class="filter-pill" data-filter="technical">Technical</button>
            </div>
        </div>

        <div class="tutorials-card-grid">
            
            <?php
            $all_tutorials = [
                // BASICS
                [ 'title' => 'Basics of SAP Security', 'slug' => 'basics', 'cat' => 'basics', 'icon' => '📚', 'desc' => 'Foundational concepts and architecture of SAP Security.' ],
                [ 'title' => 'Elements in SAP Authorization', 'slug' => 'elements-in-sap-authorization', 'cat' => 'basics', 'icon' => '🧩', 'desc' => 'Understanding authorization objects, fields, and values.' ],
                [ 'title' => 'Company Overview', 'slug' => 'company', 'cat' => 'basics', 'icon' => '🏢', 'desc' => 'SAP Organizational levels and company-specific security structures.' ],

                // AUTHORIZATION
                [ 'title' => 'Authorization Check', 'slug' => 'authorization-check', 'cat' => 'auth', 'icon' => '🔐', 'desc' => 'How SAP performs authorization checks in the background.' ],
                [ 'title' => 'Audit Guidelines', 'slug' => 'audit', 'cat' => 'auth', 'icon' => '📋', 'desc' => 'Standard guidelines for SAP Security auditing and compliance.' ],
                [ 'title' => 'Double Verification Principle', 'slug' => 'double-verification-principle', 'cat' => 'auth', 'icon' => '👥', 'desc' => 'Implementation of the four-eyes principle in SAP.' ],
                
                // HR SECURITY
                [ 'title' => 'HR Security Concepts', 'slug' => 'hr-security', 'cat' => 'hr', 'icon' => '👤', 'desc' => 'Mastering Personnel Administration and Organizational Management security.' ],
                [ 'title' => 'HR Authorization Objects', 'slug' => 'hr-security-authorization-objects', 'cat' => 'hr', 'icon' => '🛡️', 'desc' => 'In-depth look at P_ORGIN, P_PERNR, and other HR objects.' ],
                [ 'title' => 'HR Transaction Codes', 'slug' => 'hr-security-transaction-codes', 'cat' => 'hr', 'icon' => '⌨️', 'desc' => 'Essential T-Codes for HR Security maintenance.' ],
                [ 'title' => 'Applicant Infotype (P_APPL)', 'slug' => 'applicant-infotype-authorization-p_appl', 'cat' => 'hr', 'icon' => '📝', 'desc' => 'Securing recruitment and applicant data in SAP HR.' ],
                [ 'title' => 'Evaluation Path', 'slug' => 'evaluation-path', 'cat' => 'hr', 'icon' => '🛤️', 'desc' => 'Technical guide to evaluation paths in structural auth.' ],
                [ 'title' => '(Personnel Planning) PLOG', 'slug' => 'personnel-planning-plog', 'cat' => 'hr', 'icon' => '📊', 'desc' => 'Security for personnel planning and organizational objects.' ],
                [ 'title' => 'Context Solution', 'slug' => 'context-solution', 'cat' => 'hr', 'icon' => '🌐', 'desc' => 'Implementing context-sensitive HR authorization.' ],

                // TECHNICAL / MISC
                [ 'title' => 'Background Job Management', 'slug' => 'background-job', 'cat' => 'technical', 'icon' => '⏳', 'desc' => 'Securing and managing background processing in SAP.' ],
                [ 'title' => 'Security T-Codes', 'slug' => 'important-sap-security-transaction-codes', 'cat' => 'technical', 'icon' => '⚡', 'desc' => 'Quick reference for must-know security transactions.' ],
                [ 'title' => 'Interview Q&A', 'slug' => 'interview-questions', 'cat' => 'technical', 'icon' => '❓', 'desc' => 'Prepare for your next SAP Security role with our Q&A bank.' ],
                [ 'title' => 'SAP Security Quiz', 'slug' => 'sap-security-quiz', 'cat' => 'technical', 'icon' => '🏆', 'desc' => 'Test your knowledge with our interactive security assessment.' ],
            ];

            $displayed_count = 0;
            foreach ( $all_tutorials as $t ) : 
                // Only show if the page actually exists
                $page_exists = get_page_by_path($t['slug']);
                if (!$page_exists && $t['slug'] !== 'blogs') continue; 
                
                $displayed_count++;
            ?>
                <a href="<?php echo esc_url( home_url( '/' . $t['slug'] ) ); ?>" class="tutorial-card-box" data-cat="<?php echo esc_attr($t['cat']); ?>" data-aos="fade-up" data-aos-delay="<?php echo $displayed_count * 50; ?>">
                    <div class="card-box__icon"><?php echo $t['icon']; ?></div>
                    <div class="card-box__content">
                        <h3 class="card-box__title"><?php echo esc_html($t['title']); ?></h3>
                        <p class="card-box__desc"><?php echo esc_html($t['desc']); ?></p>
                    </div>
                    <div class="card-box__footer">
                        <span>Read Tutorial</span>
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
</main>

<style>
/* =====================================================
   ALL TUTORIALS TEMPLATE STYLES - CARD GRID
===================================================== */
.page-hero {
    position: relative;
    padding: 120px 0 80px;
    background: var(--color-primary-dark);
    overflow: hidden;
    text-align: center;
}

.page-hero__glow {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(0,212,255,0.1) 0%, transparent 70%);
    pointer-events: none;
    z-index: 1;
}

.page-hero__content { position: relative; z-index: 2; }

.breadcrumb {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.8rem;
    color: var(--color-text-faint);
    margin-bottom: 1.5rem;
    text-transform: uppercase;
    letter-spacing: 0.1em;
}
.breadcrumb a { color: var(--color-text-muted); text-decoration: none; transition: color 0.2s; }
.breadcrumb a:hover { color: var(--color-accent); }
.breadcrumb-separator { opacity: 0.5; }
.breadcrumb-current { color: var(--color-accent); font-weight: 700; }

.page-hero__title {
    font-family: var(--font-display);
    font-size: clamp(2.5rem, 5vw, 4rem);
    font-weight: 800;
    color: var(--color-heading);
    margin-bottom: 1rem;
    letter-spacing: -0.03em;
}

.page-hero__subtitle {
    font-size: 1.1rem;
    color: var(--color-text-muted);
    max-width: 600px;
    margin: 0 auto;
    line-height: 1.6;
}

.tutorials-main {
    padding: 4rem 0 8rem;
    background: radial-gradient(circle at top right, rgba(0,212,255,0.05), transparent 40%);
}

.tutorials-filter {
    margin-bottom: 4rem;
    text-align: center;
}
.filter-title {
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    color: var(--color-text-faint);
    margin-bottom: 1.5rem;
}
.filter-pills {
    display: flex;
    justify-content: center;
    gap: 0.75rem;
    flex-wrap: wrap;
}
.filter-pill {
    background: rgba(255,255,255,0.03);
    border: 1px solid var(--color-border);
    padding: 0.6rem 1.25rem;
    border-radius: var(--radius-full);
    color: var(--color-text-muted);
    font-size: 0.85rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
}
.filter-pill:hover, .filter-pill.active {
    background: var(--color-accent);
    color: var(--color-primary);
    border-color: var(--color-accent);
    box-shadow: 0 10px 20px rgba(0,212,255,0.2);
}

.tutorials-card-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 2rem;
}

.tutorial-card-box {
    background: var(--color-bg-card);
    border: 1px solid var(--color-border);
    border-radius: var(--radius-lg);
    padding: 2rem;
    text-decoration: none;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    display: flex;
    flex-direction: column;
    height: 100%;
    position: relative;
    overflow: hidden;
}

.tutorial-card-box::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, var(--color-accent), transparent);
    opacity: 0;
    transition: opacity 0.4s;
}

.tutorial-card-box:hover {
    transform: translateY(-10px);
    border-color: var(--color-accent);
    box-shadow: 0 40px 80px rgba(0,0,0,0.5), 0 0 0 1px var(--color-accent);
}

.tutorial-card-box:hover::after {
    opacity: 0.05;
}

.card-box__icon {
    font-size: 2rem;
    margin-bottom: 1.5rem;
    width: 60px; height: 60px;
    background: rgba(255,255,255,0.03);
    display: flex; align-items: center; justify-content: center;
    border-radius: var(--radius-md);
    transition: all 0.4s;
    border: 1px solid rgba(255,255,255,0.05);
}

.tutorial-card-box:hover .card-box__icon {
    background: var(--color-accent);
    transform: scale(1.1) rotate(-5deg);
    color: var(--color-primary);
}

.card-box__content {
    flex: 1;
    margin-bottom: 1.5rem;
}

.card-box__title {
    font-size: 1.2rem;
    font-weight: 800;
    color: var(--color-heading);
    margin-bottom: 0.75rem;
    line-height: 1.3;
    letter-spacing: -0.02em;
}

.card-box__desc {
    font-size: 0.9rem;
    color: var(--color-text-muted);
    line-height: 1.6;
}

.card-box__footer {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 0.85rem;
    font-weight: 700;
    color: var(--color-accent);
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-top: auto;
}

.card-box__footer svg {
    transition: transform 0.3s;
}

.tutorial-card-box:hover .card-box__footer svg {
    transform: translateX(5px);
}

@media (max-width: 768px) {
    .page-hero { padding: 80px 0 60px; }
    .page-hero__title { font-size: 2.2rem; }
    .page-hero__subtitle { font-size: 1rem; padding: 0 20px; }
    
    .tutorials-main { padding: 3rem 0 5rem; }
    .tutorials-card-grid { grid-template-columns: repeat(auto-fill, minmax(240px, 1fr)); gap: 1.5rem; }
}

@media (max-width: 480px) {
    .page-hero__title { font-size: 1.8rem; }
    
    .tutorials-filter { margin-bottom: 2.5rem; }
    .filter-pills {
        justify-content: flex-start;
        overflow-x: auto;
        padding: 10px 0;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none; /* Hide scrollbar Firefox */
    }
    .filter-pills::-webkit-scrollbar { display: none; /* Hide scrollbar Chrome/Safari */ }
    .filter-pill { white-space: nowrap; font-size: 0.8rem; padding: 0.5rem 1rem; }

    .tutorials-card-grid { grid-template-columns: 1fr; }
    .tutorial-card-box { padding: 1.5rem; }
    .card-box__icon { width: 50px; height: 50px; font-size: 1.5rem; margin-bottom: 1rem; }
    .card-box__title { font-size: 1.1rem; }
}
</style>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterPills = document.querySelectorAll('.filter-pill');
    const cards = document.querySelectorAll('.tutorial-card-box');

    filterPills.forEach(pill => {
        pill.addEventListener('click', () => {
            const filter = pill.getAttribute('data-filter');

            // Update active state
            filterPills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');

            // Filter cards
            cards.forEach(card => {
                const cardCat = card.getAttribute('data-cat');
                
                if (filter === 'all' || cardCat === filter) {
                    card.style.display = 'flex';
                    // Re-trigger AOS if needed or just simple fade
                    card.style.opacity = '1';
                    card.style.transform = 'scale(1)';
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.95)';
                    setTimeout(() => {
                        if (card.style.opacity === '0') card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
});
</script>

<?php get_footer(); ?>
