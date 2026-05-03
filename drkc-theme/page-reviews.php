<?php
/**
 * Template Name: Reviews Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<header class="page-hero" style="background:#0a1628; color:#fff; padding: 120px 0 80px; position:relative; overflow:hidden;">
    <div class="wrap">
        <h1 style="font-family: var(--font-display); font-size: clamp(2.8rem, 6vw, 5.5rem); font-weight: 700; color: #fff;">Client<br><em>Transformations.</em></h1>
        <p style="font-size: clamp(15px,1.7vw,18px); color: rgba(255,255,255,0.55); margin-top: 18px; max-width: 520px;">Stories of sustainable personal growth from individuals and global teams.</p>
    </div>
</header>

<section class="sec" style="background: var(--white); padding: 80px 0;">
    <div class="wrap" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;">
        <!-- Testimonials -->
        <div class="rev" style="background:var(--white); border-radius:var(--radius-lg); padding:32px; border:1px solid var(--grey-200); box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between;">
            <div>
                <div style="display:flex; gap:4px; margin-bottom:18px; color:#fbbf24;">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p style="font-size:15px; color:var(--grey-500); line-height:1.75; margin-bottom:24px;">"The Behavioral Ownership session with Dr. Krishnan was completely irreversible. It changed the way I interact with my management team entirely. Exceptional."</p>
            </div>
            <div style="display:flex; align-items:center; gap:14px;">
                <div>
                    <h5 style="font-size:14px; font-weight:700; color:var(--ink);">Vikram S.</h5>
                    <span style="font-size:12px; color:var(--grey-500);">Director at Fortune 500 Tech</span>
                </div>
            </div>
        </div>

        <div class="rev" style="background:var(--white); border-radius:var(--radius-lg); padding:32px; border:1px solid var(--grey-200); box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between;">
            <div>
                <div style="display:flex; gap:4px; margin-bottom:18px; color:#fbbf24;">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p style="font-size:15px; color:var(--grey-500); line-height:1.75; margin-bottom:24px;">"His strategies for empathy, communication, and real presence are exceptional. It led to an instant 160% emotional intelligence lift across our professionals."</p>
            </div>
            <div style="display:flex; align-items:center; gap:14px;">
                <div>
                    <h5 style="font-size:14px; font-weight:700; color:var(--ink);">Anita M.</h5>
                    <span style="font-size:12px; color:var(--grey-500);">Head of Talent Development</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
