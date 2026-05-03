<?php
/**
 * Template Name: Contact Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<header class="page-hero" style="background:#0a1628; color:#fff; padding: 120px 0 80px; position:relative; overflow:hidden;">
    <div class="wrap">
        <h1 style="font-family: var(--font-display); font-size: clamp(2.8rem, 6vw, 5.5rem); font-weight: 700; color: #fff;">Connect with<br><em>Dr. Krishnan.</em></h1>
        <p style="font-size: clamp(15px,1.7vw,18px); color: rgba(255,255,255,0.55); margin-top: 18px; max-width: 520px;">Ready to elevate individual capability and organizational impact? Let's talk.</p>
    </div>
</header>

<section class="sec" style="background: var(--white); padding: 80px 0;">
    <div class="wrap" style="display:grid; grid-template-columns:1fr 1.2fr; gap:64px; align-items:start;">
        <!-- Left: Details -->
        <div>
            <div class="eyebrow">Direct Contact</div><div class="rule"></div>
            <h3 style="font-family:var(--font-display); font-size:1.85rem; margin-bottom:14px;">Let's explore your possibilities.</h3>
            <p style="font-size:15px; color:var(--grey-500); line-height:1.8; margin-bottom:32px;">Reach out directly via WhatsApp for course registration or dynamic leadership seminars.</p>

            <div style="display:flex; flex-direction:column; gap:20px;">
                <div style="display:flex; align-items:center; gap:16px;">
                    <div style="width:48px; height:48px; border-radius:12px; background:var(--blue-50); color:var(--blue-500); display:flex; align-items:center; justify-content:center; font-size:18px;"><i class="fab fa-whatsapp"></i></div>
                    <div>
                        <span style="font-size:11px; font-weight:700; letter-spacing:0.12em; text-transform:uppercase; color:var(--grey-500); display:block; margin-bottom:2px;">WhatsApp</span>
                        <a href="https://wa.me/916300405352" target="_blank" style="font-size:16px; font-weight:600; text-decoration:none; color:var(--ink);">+91 63004 05352</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: Fast Form -->
        <div style="background:var(--grey-50); padding: clamp(24px, 5vw, 48px); border-radius: var(--radius-lg); border:1px solid var(--grey-200); box-shadow:var(--shadow-sm);">
            <h4 style="font-family:var(--font-display); font-size:1.4rem; font-weight:700; margin-bottom:8px;">Fast Inquiry Form</h4>
            <p style="font-size:13px; color:var(--grey-500); margin-bottom:24px;">Drop your message here and we'll reply to your query as soon as possible.</p>
            
            <form action="#" method="POST" style="display:flex; flex-direction:column; gap:18px;">
                <div>
                    <label style="font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:0.05em; color:var(--grey-700); margin-bottom:8px; display:block;">Full Name *</label>
                    <input type="text" style="width:100%; border-radius:10px; border:1.5px solid var(--grey-200); padding:12px 16px; font-size:14px;" required>
                </div>
                <div>
                    <label style="font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:0.05em; color:var(--grey-700); margin-bottom:8px; display:block;">Email Address *</label>
                    <input type="email" style="width:100%; border-radius:10px; border:1.5px solid var(--grey-200); padding:12px 16px; font-size:14px;" required>
                </div>
                <div>
                    <label style="font-size:12px; font-weight:700; text-transform:uppercase; letter-spacing:0.05em; color:var(--grey-700); margin-bottom:8px; display:block;">Message *</label>
                    <textarea style="width:100%; border-radius:10px; border:1.5px solid var(--grey-200); padding:12px 16px; font-size:14px; min-height:120px;" required></textarea>
                </div>
                <button type="button" onclick="alert('Thank you for reaching out!')" class="btn btn-blue" style="justify-content:center; padding:15px 24px;">Send Message <i class="fas fa-paper-plane"></i></button>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
