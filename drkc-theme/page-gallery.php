<?php
/**
 * Template Name: Gallery Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<header class="page-hero" style="background:#0a1628; color:#fff; padding: 120px 0 80px; position:relative; overflow:hidden;">
    <div class="wrap">
        <h1 style="font-family: var(--font-display); font-size: clamp(2.8rem, 6vw, 5.5rem); font-weight: 700; color: #fff;">Visual<br><em>Moments.</em></h1>
        <p style="font-size: clamp(15px,1.7vw,18px); color: rgba(255,255,255,0.55); margin-top: 18px; max-width: 520px;">Photos of elite workshops, campus visits, and executive seminars.</p>
    </div>
</header>

<section class="sec" style="background: var(--white); padding: 80px 0;">
    <div class="wrap" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 24px;">
        <div class="rev" style="border-radius: var(--radius-lg); overflow:hidden; border:1.5px solid var(--grey-200); box-shadow:var(--shadow-sm);">
            <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?auto=format&fit=crop&q=80&w=600" alt="Leadership Seminar" style="width:100%; height:240px; object-fit:cover; display:block;">
        </div>
        <div class="rev d1" style="border-radius: var(--radius-lg); overflow:hidden; border:1.5px solid var(--grey-200); box-shadow:var(--shadow-sm);">
            <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=600" alt="Corporate Training" style="width:100%; height:240px; object-fit:cover; display:block;">
        </div>
        <div class="rev d2" style="border-radius: var(--radius-lg); overflow:hidden; border:1.5px solid var(--grey-200); box-shadow:var(--shadow-sm);">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=600" alt="Executive Coaching" style="width:100%; height:240px; object-fit:cover; display:block;">
        </div>
    </div>
</section>

<?php get_footer(); ?>
