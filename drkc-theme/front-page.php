<?php
/**
 * Custom WordPress Home/Front Page Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<!-- STYLE FOR EXTRA CONTENT IN HOME -->
<style>
    /* Add any inline home-specific styling here if needed */
    .lww { background: #0a1628; color: #fff; }
    .lwimg img { border-radius: var(--radius-lg); width:100%; aspect-ratio:4/3; object-fit:cover; }
    .lwl { list-style:none; margin-top:28px; display:flex; flex-direction:column; gap:14px; }
    .lwl li { display:flex; align-items:center; gap:12px; font-size:15px; color:rgba(255,255,255,0.7); }
    .lwl i { color:var(--blue-400); font-size:18px; }

    /* CASE STUDIES CARDS */
    .cs-card {
        background: var(--white); border-radius: var(--radius-lg); padding: clamp(24px,4vw,44px);
        box-shadow: var(--shadow-sm); border: 1px solid var(--grey-100); transition: var(--tr);
        display: flex; flex-direction: column; gap: 34px; margin-bottom: 28px;
    }
    .cs-card:hover { box-shadow: var(--shadow-lg); border-color: var(--blue-100); }
    .cs-top { display: grid; grid-template-columns: 1.2fr 1.6fr 1.2fr; gap: 42px; align-items: center; width: 100%; }
    .cs-left { display: flex; flex-direction: column; }
    .cs-left-icon { font-size: 24px; color: var(--blue-500); margin-bottom: 16px; }
    .cs-title { font-family: var(--font-display); font-size: 1.85rem; font-weight: 700; color: var(--ink); line-height: 1.15; margin: 0 0 14px; }
    .cs-line { width: 32px; height: 3px; background: #e2e8f0; border-radius: 2px; margin-bottom: 16px; }
    .cs-sub { font-size: 12px; font-weight: 700; letter-spacing: 0.1em; text-transform: uppercase; color: var(--grey-500); margin: 0; }
    .cs-compare { display: flex; flex-direction: column; gap: 20px; border-left: 1px solid #f1f5f9; border-right: 1px solid #f1f5f9; padding: 0 32px; min-height: 120px; justify-content: center; }
    .cs-compare-header { font-size: 10px; font-weight: 700; letter-spacing: 0.14em; text-transform: uppercase; color: #1e293b; text-align: center; }
    .cs-compare-body { display: flex; align-items: center; justify-content: space-around; gap: 28px; }
    .cs-metric-box { display: flex; flex-direction: column; align-items: center; text-align: center; }
    .cs-metric-label { font-size: 11px; font-weight: 600; text-transform: uppercase; color: var(--grey-500); letter-spacing: 0.05em; margin-bottom: 4px; }
    .cs-metric-value { font-family: var(--font-display); font-size: 2.85rem; font-weight: 700; color: #475569; line-height: 1; }
    .cs-metric-value.after { color: #1d4ed8; font-weight: 700; }
    .cs-metric-user { font-size: 11px; color: #64748b; margin-top: 8px; display: flex; align-items: center; gap: 4px; }
    .cs-arrow { font-size: 2.2rem; color: #3b82f6; opacity: 0.8; font-weight: 300; }
    .cs-highlight { background: #f0fdf4; border: 1px solid #dcfce7; border-radius: var(--radius-md); padding: 28px 24px; display: flex; flex-direction: column; align-items: center; text-align: center; box-shadow: 0 8px 24px -6px rgba(21,128,61,0.08); transition: var(--tr); }
    .cs-highlight.blue { background: #eff6ff; border-color: #dbeafe; box-shadow: 0 8px 24px -6px rgba(29,78,216,0.08); }
    .cs-hi-icon { font-size: 18px; color: #16a34a; margin-bottom: 12px; }
    .cs-highlight.blue .cs-hi-icon { color: #2563eb; }
    .cs-hi-val { font-family: var(--font-display); font-size: 2.85rem; font-weight: 700; color: #15803d; line-height: 1; margin-bottom: 4px; }
    .cs-highlight.blue .cs-hi-val { color: #1d4ed8; }
    .cs-hi-title { font-size: 11px; font-weight: 700; text-transform: uppercase; color: #475569; letter-spacing: 0.08em; margin: 0 0 12px; }
    .cs-hi-sep { width: 24px; height: 1.5px; background: rgba(21,128,61,0.25); margin-bottom: 12px; }
    .cs-highlight.blue .cs-hi-sep { background: rgba(29,78,216,0.25); }
    .cs-hi-sub { font-size: 12px; color: #64748b; line-height: 1.45; margin: 0; }
    .cs-bottom { display: flex; align-items: center; gap: 16px; border: 1px solid #e2e8f0; background: #f8fafc; border-radius: 99px; padding: 14px 28px; width: 100%; border-color: rgba(59,130,246,0.18); }
    .cs-bot-icon { font-size: 20px; color: #1d4ed8; flex-shrink: 0; }
    .cs-bot-text { font-size: 13px; color: var(--grey-600); line-height: 1.4; margin: 0; }
    .cs-bot-text strong { color: #1d4ed8; font-weight: 700; }
</style>

<!-- HERO -->
<section id="hero" style="min-height: 100svh; position: relative; overflow: hidden; background: #0a1628; display: flex; align-items: stretch; color:#fff;">
    <div class="wrap" style="position: relative; z-index: 2; display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: center; padding: 120px 0 80px; width: 100%;">
        <div>
            <div class="hbadge" style="display: inline-flex; align-items: center; gap: 10px; background: rgba(59,130,246,0.16); border: 1px solid rgba(147,197,253,0.28); border-radius: 99px; padding: 7px 18px; margin-bottom: 26px;">
                <span style="font-size: 11px; font-weight: 700; letter-spacing: 0.18em; text-transform: uppercase; color: #93c5fd;">GLOBAL STRATEGIST & EXECUTIVE MENTOR</span>
            </div>
            <h1 class="htitle" style="font-family: var(--font-display); font-size: clamp(2.8rem, 6vw, 6rem); font-weight: 700; line-height: 1.0; color: #fff; margin-bottom: 22px;">Transforming<br><em>Leaders & Cultures.</em></h1>
            <p class="hsub" style="font-size: 16px; line-height: 1.85; color: rgba(255,255,255,0.52); margin-bottom: 44px; max-width: 500px;">Over 25 years of global executive experience bringing about organizational growth, high-impact behavioral ownership, and irreversible transformation.</p>
            <div class="hacts" style="display: flex; gap: 14px; flex-wrap: wrap;">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-blue">Schedule Consultation <i class="fas fa-arrow-right"></i></a>
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="btn btn-white">Read Biography</a>
            </div>
        </div>
        <div style="display: flex; justify-content: center; align-items: flex-end;">
            <img src="https://raw.githubusercontent.com/antigravity-ai/assets/main/drkc/profile1.jpeg" alt="Dr. Krishnan" style="max-width: 100%; border-radius: var(--radius-xl); border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 32px 80px rgba(0,0,0,0.4);">
        </div>
    </div>
</section>

<!-- PROBLEM -->
<section class="sec bg-w" style="background:#fff;">
    <div class="wrap">
        <div class="rev"><div class="eyebrow">The Narrative</div><div class="rule" style="margin-top:14px;"></div></div>
        <div style="font-family: var(--font-display); font-size: clamp(1.8rem, 3.5vw, 2.8rem); line-height: 1.25; margin-bottom:24px;">Training happens. People attend. Nothing <em>changes.</em></div>
        <div style="font-size: 16px; color: var(--grey-500); line-height: 1.85; max-width: 800px;">
            The gap between attendance and transformation is where most leadership development fails. We close that gap — with precision, evidence, and irreversible behavioral shift.
        </div>
    </div>
</section>

<!-- CASE STUDIES -->
<section class="sec bg-g" style="background:#f8fafc;">
    <div class="wrap">
        <div style="text-align:center;margin-bottom:52px;">
            <div class="eyebrow ctr rev">Documented Impact</div>
            <div class="rule ctr rev" style="margin-top:14px;"></div>
            <h2 class="hd rev">Case Studies &<br><em>Transformation Metrics.</em></h2>
        </div>
        <div class="clist">
            <!-- Leadership Pipeline -->
            <div class="cs-card rev">
                <div class="cs-top">
                    <div class="cs-left">
                        <div class="cs-left-icon"><i class="fas fa-users"></i></div>
                        <h4 class="cs-title">Leadership<br>Pipeline</h4>
                        <div class="cs-line"></div>
                        <p class="cs-sub">Fortune 500 Tech Company</p>
                    </div>
                    <div class="cs-compare">
                        <div class="cs-compare-header">Leadership Readiness Improvement</div>
                        <div class="cs-compare-body">
                            <div class="cs-metric-box">
                                <span class="cs-metric-label">Before</span>
                                <span class="cs-metric-value">35%</span>
                                <span class="cs-metric-user"><i class="fas fa-user"></i> Readiness Score</span>
                            </div>
                            <div class="cs-arrow">➔</div>
                            <div class="cs-metric-box">
                                <span class="cs-metric-label">After</span>
                                <span class="cs-metric-value after">82%</span>
                                <span class="cs-metric-user"><i class="fas fa-user"></i> Readiness Score</span>
                            </div>
                        </div>
                    </div>
                    <div class="cs-highlight blue">
                        <div class="cs-hi-icon"><i class="fas fa-bolt"></i></div>
                        <h3 class="cs-hi-val">+2.3X</h3>
                        <h5 class="cs-hi-title">Improvement Rate</h5>
                        <div class="cs-hi-sep"></div>
                        <p class="cs-hi-sub">6-Month Intervention Across 120+ Managers</p>
                    </div>
                </div>
                <div class="cs-bottom">
                    <div class="cs-bot-icon"><i class="fas fa-bullseye"></i></div>
                    <p class="cs-bot-text">Accelerating management capability and succession readiness. <strong>Higher Impact. Faster Delivery. Lasting Culture.</strong></p>
                </div>
            </div>

            <!-- Communication Transformation -->
            <div class="cs-card rev d1">
                <div class="cs-top">
                    <div class="cs-left">
                        <div class="cs-left-icon"><i class="fas fa-comments"></i></div>
                        <h4 class="cs-title">Communication<br>Transformation</h4>
                        <div class="cs-line"></div>
                        <p class="cs-sub">Global Financial Services Firm</p>
                    </div>
                    <div class="cs-compare">
                        <div class="cs-compare-header">Emotional Intelligence Enhancement</div>
                        <div class="cs-compare-body">
                            <div class="cs-metric-box">
                                <span class="cs-metric-label">Before</span>
                                <span class="cs-metric-value">28%</span>
                                <span class="cs-metric-user"><i class="fas fa-user"></i> PTS EQ</span>
                            </div>
                            <div class="cs-arrow">➔</div>
                            <div class="cs-metric-box">
                                <span class="cs-metric-label">After</span>
                                <span class="cs-metric-value after">73%</span>
                                <span class="cs-metric-user"><i class="fas fa-user"></i> PTS EQ</span>
                            </div>
                        </div>
                    </div>
                    <div class="cs-highlight">
                        <div class="cs-hi-icon"><i class="fas fa-chart-line"></i></div>
                        <h3 class="cs-hi-val">+160%</h3>
                        <h5 class="cs-hi-title">Emotional Lift</h5>
                        <div class="cs-hi-sep"></div>
                        <p class="cs-hi-sub">Workshops across 250+ professionals</p>
                    </div>
                </div>
                <div class="cs-bottom">
                    <div class="cs-bot-icon"><i class="fas fa-bullseye"></i></div>
                    <p class="cs-bot-text">Instilling strategic soft skills and empathy. <strong>Stronger Collaboration. Clear Messaging. Direct Solutions.</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
