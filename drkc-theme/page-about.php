<?php
/**
 * Template Name: About Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<header class="page-hero" style="background:#0a1628; color:#fff; padding: 120px 0 80px; position:relative; overflow:hidden;">
    <div class="wrap">
        <h1 style="font-family: var(--font-display); font-size: clamp(2.8rem, 6vw, 5.5rem); font-weight: 700; color: #fff; margin-bottom: 22px;">Beyond the<br><em>Methodology.</em></h1>
        <p style="font-size: clamp(15px,1.7vw,18px); color: rgba(255,255,255,0.55); margin-top: 18px; max-width: 520px; line-height: 1.8;">Meet the architect behind the "Learning Without Walls" movement — a 25-year journey of human transformation.</p>
    </div>
</header>

<section class="sec" style="background: var(--white); padding: 80px 0;">
    <div class="wrap" style="display:grid; grid-template-columns:1fr 1fr; gap:60px;">
        <!-- LEFT COLUMN -->
        <div>
            <img src="https://raw.githubusercontent.com/antigravity-ai/assets/main/drkc/profile1.jpeg" alt="Dr. Krishnan Chandrasekharan" style="max-width:100%; border-radius:var(--radius-xl); border: 1.5px solid var(--blue-200);">
        </div>

        <!-- RIGHT COLUMN -->
        <div style="font-size:15px; line-height:1.88; color:var(--grey-500);">
            <div class="eyebrow">The Persona</div><div class="rule"></div>
            <p><strong>Dr. Krishnan Chandrasekharan</strong> is a world-class authority on human development and executive behavioral shift. With over two decades of global executive experience, his interventions have touched the lives of over 150,000 professionals across four continents.</p>
            <p>Through the <em>Learning Without Walls</em> movement, he has successfully disrupted traditional rote training systems by pioneering the **Behavioral Ownership Model** — a structured framework that accelerates individual capability and sustainable personal ownership.</p>
            <p>He works as a trusted advisor to global boards, corporate giants, high-growth startups, and individual senior executives globally.</p>
            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-blue" style="margin-top:24px;">Get in Touch</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
