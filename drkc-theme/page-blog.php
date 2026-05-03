<?php
/**
 * Template Name: Blog Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<header class="page-hero" style="background:#0a1628; color:#fff; padding: 120px 0 80px; position:relative; overflow:hidden;">
    <div class="wrap">
        <h1 style="font-family: var(--font-display); font-size: clamp(2.8rem, 6vw, 5.5rem); font-weight: 700; color: #fff;">Leadership<br><em>Insights.</em></h1>
        <p style="font-size: clamp(15px,1.7vw,18px); color: rgba(255,255,255,0.55); margin-top: 18px; max-width: 520px;">Regular reflections on global cross-cultural transformation, behavioral ownership, and mindset development.</p>
    </div>
</header>

<section class="sec bg-g" style="background:#f8fafc; padding: 80px 0;">
    <div class="wrap" style="display:grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 32px;">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1
        );
        $blog_query = new WP_Query( $args );

        if ( $blog_query->have_posts() ) :
            while ( $blog_query->have_posts() ) : $blog_query->the_post();
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
                    <a href="<?php the_permalink(); ?>" class="btn btn-blue" style="width:100%; justify-content:center;">Read Article</a>
                </div>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        else :
        ?>
            <!-- Fallback Content (Static Examples) -->
            <div class="rev" style="background:var(--white); border-radius:var(--radius-lg); padding:32px; border:1px solid var(--grey-200); box-shadow:var(--shadow-sm); display:flex; flex-direction:column; justify-content:space-between; min-height:360px;">
                <div>
                    <h4 style="font-family:var(--font-display); font-size:1.45rem; font-weight:700; color:var(--ink); margin-bottom:12px;">Cultivating the Ownership Mindset</h4>
                    <p style="font-size:14px; line-height:1.6; color:var(--grey-500); margin-bottom:18px;">How leaders can effectively shift from compliance to committed, deep behavioral ownership.</p>
                </div>
                <div>
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-blue" style="width:100%; justify-content:center;">Inquire on WhatsApp</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
