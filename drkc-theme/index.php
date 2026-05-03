<?php
/**
 * Main Fallback Template
 *
 * @package drkc-theme
 */

get_header(); ?>

<main class="sec bg-g" style="padding-top:120px;">
    <div class="wrap">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article style="margin-bottom:48px;">
                <h1 class="hd"><?php the_title(); ?></h1>
                <div class="rule" style="margin-bottom:24px;"></div>
                <div style="line-height:1.8; color:var(--grey-600); font-size:15px;">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
