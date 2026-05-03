<?php
/**
 * Template Name: Courses Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<header class="page-hero" style="background:#0a1628; color:#fff; padding: 120px 0 80px; position:relative; overflow:hidden;">
    <div class="wrap">
        <h1 style="font-family: var(--font-display); font-size: clamp(2.8rem, 6vw, 5.5rem); font-weight: 700; color: #fff;">Explore our<br><em>Elite Courses.</em></h1>
        <p style="font-size: clamp(15px,1.7vw,18px); color: rgba(255,255,255,0.55); margin-top: 18px; max-width: 520px;">Curated high-impact courses for professional and organizational transformation.</p>
    </div>
</header>

<section class="sec bg-g" style="background:#f8fafc; padding: 80px 0;">
    <div class="wrap" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;">
        <?php
        $args = array(
            'post_type' => 'courses',
            'posts_per_page' => -1
        );
        $courses_query = new WP_Query( $args );

        if ( $courses_query->have_posts() ) :
            while ( $courses_query->have_posts() ) : $courses_query->the_post();
        ?>
            <div class="rev" style="background:var(--white); border-radius:var(--radius-lg); padding:32px; border:1px solid var(--grey-200); box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between; min-height:360px;">
                <div>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div style="margin-bottom:18px; border-radius:var(--radius-md); overflow:hidden;">
                            <?php the_post_thumbnail( 'medium', array( 'style' => 'width:100%; height:180px; object-fit:cover;' ) ); ?>
                        </div>
                    <?php endif; ?>
                    <h4 style="font-family:var(--font-display); font-size:1.45rem; font-weight:700; color:var(--ink); margin-bottom:12px;"><?php the_title(); ?></h4>
                    <p style="font-size:14px; line-height:1.6; color:var(--grey-500); margin-bottom:18px;"><?php the_excerpt(); ?></p>
                </div>
                <div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-blue" style="width:100%; justify-content:center;">Learn More & Enroll</a>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <!-- Fallback Content (Static examples) -->
            <div class="rev" style="background:var(--white); border-radius:var(--radius-lg); padding:32px; border:1px solid var(--grey-200); box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between; min-height:360px;">
                <div>
                    <h4 style="font-family:var(--font-display); font-size:1.45rem; font-weight:700; color:var(--ink); margin-bottom:12px;">Executive Behavioral Mastery</h4>
                    <p style="font-size:14px; line-height:1.6; color:var(--grey-500); margin-bottom:18px;">Our signature intensive program. Realize true leadership presence.</p>
                </div>
                <div>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-blue" style="width:100%; justify-content:center;">Enquire via WhatsApp</a>
                </div>
            </div>

            <div class="rev" style="background:var(--white); border-radius:var(--radius-lg); padding:32px; border:1px solid var(--grey-200); box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between; min-height:360px;">
                <div>
                    <h4 style="font-family:var(--font-display); font-size:1.45rem; font-weight:700; color:var(--ink); margin-bottom:12px;">The 1-Day Leadership Lab</h4>
                    <p style="font-size:14px; line-height:1.6; color:var(--grey-500); margin-bottom:18px;">Accelerated skill-building for modern managers and directors.</p>
                </div>
                <div>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-blue" style="width:100%; justify-content:center;">Enquire via WhatsApp</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
