<!-- FOOTER -->
<footer class="sec bg-b900" style="background:#0a1628; color:#fff; padding: 60px 0;">
    <div class="wrap" style="text-align: center;">
        <p style="font-size: 14px; color: rgba(255,255,255,0.4);">&copy; <?php echo date('Y'); ?> Dr. Krishnan Chandrasekharan. All Rights Reserved.</p>
    </div>
</footer>

<!-- NEW COURSE PROMO POPUP TOAST -->
<div class="promo-toast" id="promoToast">
    <div class="promo-head">
        <h4 class="promo-title">🎉 New Course Available!</h4>
        <button class="promo-close" onclick="closePromo()"><i class="fas fa-times"></i></button>
    </div>
    <p class="promo-desc">Empower your leadership journey with our latest "Executive Behavioral Mastery" program. Limited seats available!</p>
    <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>" class="promo-btn">View Courses</a>
</div>

<a href="https://wa.me/916300405352" class="wa" target="_blank" aria-label="WhatsApp" style="position:fixed; bottom:32px; right:32px; background:#25d366; color:#fff; width:56px; height:56px; border-radius:50%; display:flex; align-items:center; justify-content:center; font-size:24px; box-shadow:0 12px 36px rgba(0,0,0,0.25); z-index:2000; text-decoration:none;"><i class="fab fa-whatsapp"></i></a>

<script>
    // NAV SCROLL
    const nav = document.getElementById('nav');
    window.addEventListener('scroll', () => nav.classList.toggle('sc', scrollY > 48));

    // HAMBURGER
    const ham = document.getElementById('ham'), drw = document.getElementById('drw');
    if (ham && drw) {
        ham.addEventListener('click', () => { ham.classList.toggle('op'); drw.classList.toggle('op'); });
    }

    // REVEAL
    const ro = new IntersectionObserver(es => es.forEach(e => { if(e.isIntersecting){e.target.classList.add('in');ro.unobserve(e.target);} }), {threshold:0.1});
    document.querySelectorAll('.rev').forEach(el => ro.observe(el));

    // PROMO POPUP after 3 seconds
    setTimeout(() => {
        const promo = document.getElementById('promoToast');
        if (promo) promo.classList.add('active');
    }, 3000);

    function closePromo() {
        const promo = document.getElementById('promoToast');
        if (promo) promo.classList.remove('active');
    }
</script>

<?php wp_footer(); ?>
</body>
</html>
