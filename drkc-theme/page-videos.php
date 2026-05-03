<?php
/**
 * Template Name: Videos Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<header class="page-hero" style="background:#0a1628; color:#fff; padding: 120px 0 80px; position:relative; overflow:hidden;">
    <div class="wrap">
        <h1 style="font-family: var(--font-display); font-size: clamp(2.8rem, 6vw, 5.5rem); font-weight: 700; color: #fff;">Dr. Krishnan's<br><em>Showreel.</em></h1>
        <p style="font-size: clamp(15px,1.7vw,18px); color: rgba(255,255,255,0.55); margin-top: 18px; max-width: 520px;">Watch our latest masterclasses, media appearances, and executive coaching seminars.</p>
    </div>
</header>

<section class="sec bg-g" style="background:#f8fafc; padding: 80px 0;">
    <div class="wrap" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 32px;">
        <?php
        $args = array(
            'post_type' => 'videos',
            'posts_per_page' => -1
        );
        $videos_query = new WP_Query( $args );

        if ( $videos_query->have_posts() ) :
            while ( $videos_query->have_posts() ) : $videos_query->the_post();
        ?>
            <div class="rev" style="background:var(--white); border-radius:var(--radius-lg); padding:24px; border:1px solid var(--grey-200); box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between;">
                <div>
                    <h4 style="font-family:var(--font-display); font-size:1.35rem; font-weight:700; color:var(--ink); margin-bottom:8px;"><?php the_title(); ?></h4>
                    <p style="font-size:13px; color:var(--grey-500); line-height:1.55; margin-bottom:16px;"><?php the_excerpt(); ?></p>
                    <div style="border-radius:var(--radius-md); overflow:hidden; background:#000;">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <!-- Fallback Static Items -->
            <div class="rev" style="background:var(--white); border-radius:var(--radius-lg); padding:24px; border:1px solid var(--grey-200); box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between;">
                <div>
                    <h4 style="font-family:var(--font-display); font-size:1.35rem; font-weight:700; color:var(--ink); margin-bottom:8px;">Leadership Behavioral Ownership</h4>
                    <p style="font-size:13px; color:var(--grey-500); line-height:1.55; margin-bottom:16px;">Key takeaways from our latest live corporate intervention.</p>
                    <div style="aspect-ratio:16/9; background:#000; border-radius:12px; display:flex; align-items:center; justify-content:center; color:#fff;">
                        <span style="font-size: 14px; font-weight: 600; color:rgba(255,255,255,0.4);"><i class="fas fa-play-circle"></i> Video Player Mockup</span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
