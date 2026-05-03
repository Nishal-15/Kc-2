<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Official Portfolio of Dr. Krishnan Chandrasekharan | Global Leadership Strategist & Executive Mentor impacting 150,000+ professionals.">
    <meta name="keywords" content="Leadership Development, Executive Coaching, Communication Mastery, Dr. Krishnan Chandrasekharan, Learning Without Walls, Leadership Strategy India, Behavioral Ownership, Global Leadership Strategist, Executive Transformation, Mindset Shift, Talent Development, High-Impact Interventions, India, UK, US, EMEA, Soft skills, public speaking, soft skills training, Communication skills, Communication training">
    <meta name="author" content="Dr. Krishnan Chandrasekharan">

    <!-- JSON-LD Structured Data Schema (SEO & GEO Optimization) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Dr. Krishnan Chandrasekharan",
      "jobTitle": "Global Leadership Strategist & Executive Mentor",
      "url": "https://learningwithoutwalls.in",
      "sameAs": [
        "https://linkedin.com/in/drkrishnanc"
      ],
      "description": "Executive mentor and leadership consultant impacting 150,000+ professionals globally.",
      "knowsAbout": [
        "Leadership Transformation",
        "Executive Coaching",
        "Mindset Coaching",
        "Corporate Communication"
      ],
      "brand": {
        "@type": "Brand",
        "name": "Dr. Krishnan Chandrasekharan",
        "logo": "https://raw.githubusercontent.com/antigravity-ai/assets/main/drkc/profile1.jpeg"
      }
    }
    </script>
    <?php wp_head(); ?>

    <style>
        :root {
            --blue-900: #0a1628; --blue-800: #102040; --blue-700: #1a3560; --blue-600: #1e4080;
            --blue-500: #1d4ed8; --blue-400: #3b82f6; --blue-300: #93c5fd; --blue-200: #bfdbfe;
            --blue-100: #dbeafe; --blue-50:  #eff6ff; --white:    #ffffff; --grey-50:  #f8fafc;
            --grey-100: #f1f5f9; --grey-200: #e2e8f0; --grey-300: #cbd5e1; --grey-500: #64748b;
            --grey-700: #334155; --ink:      #0f172a; --radius-sm: 10px; --radius-md: 16px;
            --radius-lg: 24px; --radius-xl: 36px; --radius-full: 9999px;
            --shadow-xs:  0 1px 4px rgba(15,23,42,0.06);
            --shadow-sm:  0 2px 12px rgba(15,23,42,0.08);
            --shadow-md:  0 8px 32px rgba(15,23,42,0.10);
            --shadow-lg:  0 20px 60px rgba(15,23,42,0.13);
            --shadow-xl:  0 32px 80px rgba(15,23,42,0.16);
            --shadow-blue: 0 12px 40px rgba(29,78,216,0.22);
            --font-display: 'Playfair Display', serif;
            --font-body: 'Plus Jakarta Sans', sans-serif;
            --ease: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            --tr: all 0.38s var(--ease);
        }
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        html { scroll-behavior: smooth; }
        body { font-family: var(--font-body); background: var(--white); color: var(--ink); overflow-x: hidden; -webkit-font-smoothing: antialiased; }
        .wrap { max-width: 1240px; margin: 0 auto; padding: 0 clamp(20px, 5vw, 72px); }
        .sec { padding: clamp(80px, 10vw, 140px) 0; }
        .sec-sm { padding: clamp(56px, 7vw, 96px) 0; }
        
        .eyebrow { display: inline-flex; align-items: center; gap: 10px; font-size: 11px; font-weight: 700; letter-spacing: 0.22em; text-transform: uppercase; color: var(--blue-500); }
        .eyebrow::before { content: ''; width: 22px; height: 2px; background: var(--blue-500); border-radius: 2px; }
        .eyebrow.ctr::before { display: none; }
        .eyebrow.ctr::after { content: ''; width: 22px; height: 2px; background: var(--blue-500); border-radius: 2px; }
        .rule { width: 44px; height: 3px; background: var(--blue-500); border-radius: 2px; margin: 18px 0 26px; }
        .rule.ctr { margin: 18px auto 26px; }
        .hd { font-family: var(--font-display); font-size: clamp(2.2rem, 5vw, 4.6rem); font-weight: 700; line-height: 1.08; color: var(--ink); }
        .hd em { font-style: italic; color: var(--blue-500); }
        
        /* NAV */
        #nav { position: fixed; top: 0; left: 0; right: 0; z-index: 1000; transition: var(--tr); width: 100%; }
        .nb {
            display: flex; align-items: center; justify-content: space-between;
            padding: 0 clamp(20px,5vw,72px); height: 72px; background: rgba(255,255,255,0.92);
            backdrop-filter: blur(24px) saturate(180%); border-bottom: 1px solid rgba(29,78,216,0.07);
        }
        #nav.sc .nb { height: 64px; box-shadow: var(--shadow-md); }
        .nbrand { font-family: var(--font-display); font-size: clamp(13px,1.5vw,16px); font-weight: 700; color: var(--blue-900); text-decoration: none; }
        .nlinks { display: flex; align-items: center; gap: clamp(16px,2.5vw,36px); list-style: none; }
        .nlinks a { font-size: 12px; font-weight: 600; letter-spacing: 0.1em; text-transform: uppercase; color: var(--grey-500); text-decoration: none; transition: color 0.25s; }
        .nlinks a:hover, .nlinks a.act { color: var(--blue-600); }
        .ncta { font-size: 12px; font-weight: 700; padding: 10px 22px; border-radius: var(--radius-full); background: var(--blue-500); color: var(--white) !important; text-decoration: none; transition: var(--tr); }
        .ncta:hover { background: var(--blue-700); }
        
        .ham { display: none; flex-direction: column; gap: 5px; cursor: pointer; background: none; border: none; padding: 4px; }
        .ham span { display: block; width: 22px; height: 2px; background: var(--blue-800); border-radius: 2px; transition: var(--tr); }
        
        .drw { display: none; position: fixed; top: 72px; left: 0; right: 0; z-index: 999; background: rgba(255,255,255,0.98); backdrop-filter: blur(24px); border-bottom: 1px solid var(--grey-200); flex-direction: column; box-shadow: var(--shadow-lg); opacity: 0; transition: var(--tr); pointer-events: none; }
        .drw.op { display: flex; opacity: 1; pointer-events: all; }
        .drw a { font-size: 13px; font-weight: 600; text-transform: uppercase; color: var(--grey-700); text-decoration: none; padding: 18px clamp(20px,5vw,72px); border-bottom: 1px solid var(--grey-100); }
        
        @media(max-width:860px) { .nlinks { display: none; } .ham { display: flex; } }

        /* HERO & OTHERS */
        .btn { display: inline-flex; align-items: center; gap: 10px; font-size: 13px; font-weight: 700; text-decoration: none; border: none; border-radius: var(--radius-full); padding: 15px 32px; transition: var(--tr); cursor: pointer; }
        .btn-blue { background: var(--blue-500); color: var(--white); }
        .btn-blue:hover { background: var(--blue-700); }
        .btn-white { background: var(--white); color: var(--blue-700); }
        .btn-white:hover { background: var(--grey-50); }

        .rev { opacity: 0; transform: translateY(26px); transition: opacity 0.65s var(--ease), transform 0.65s var(--ease); }
        .rev.in { opacity: 1; transform: translateY(0); }

        /* NEW COURSE TOAST POPUP - bottom left */
        .promo-toast {
            position: fixed; bottom: 32px; left: 32px;
            background: var(--white); border-radius: var(--radius-lg);
            padding: 24px 28px; box-shadow: 0 16px 48px -12px rgba(15, 23, 42, 0.18);
            border-left: 6px solid var(--blue-600); border-top: 1px solid var(--grey-100); border-bottom: 1px solid var(--grey-100); border-right: 1px solid var(--grey-100);
            z-index: 2500; max-width: 360px; display: flex; flex-direction: column; gap: 14px;
            transform: translateY(150px); opacity: 0; pointer-events: none;
            transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.6s ease;
        }
        .promo-toast.active { transform: translateY(0); opacity: 1; pointer-events: auto; }
        .promo-head { display: flex; justify-content: space-between; align-items: center; }
        .promo-title { font-family: var(--font-display); font-size: 1.4rem; font-weight: 700; color: var(--ink); margin: 0; display: flex; align-items: center; gap: 8px; }
        .promo-desc { font-size: 14px; line-height: 1.55; color: var(--grey-600); margin: 0; }
        .promo-btn {
            align-self: flex-start; background: var(--blue-600); color: var(--white); border: none;
            border-radius: 99px; padding: 12px 28px; font-size: 14px; font-weight: 600; cursor: pointer;
            transition: var(--tr); text-decoration: none; display: inline-flex; align-items: center; justify-content: center; margin-top: 4px;
        }
        .promo-btn:hover { background: var(--blue-500); transform: translateY(-2px); }
        .promo-close { background: none; border: none; font-size: 18px; color: var(--grey-300); cursor: pointer; transition: color 0.2s; padding: 4px; }
        .promo-close:hover { color: var(--grey-600); }

        @media(max-width:640px) {
            .promo-toast { left: 16px; right: 16px; bottom: 16px; max-width: none; width: calc(100% - 32px); padding: 18px 22px; }
        }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- NAVIGATION -->
<nav id="nav">
    <div class="nb">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nbrand">
            DR. KRISHNAN <em>CHANDRASEKHARAN</em>
        </a>
        <ul class="nlinks">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a></li>
            <li><a href="<?php echo esc_url( home_url( '/courses' ) ); ?>">Courses</a></li>
            <li><a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a></li>
            <li><a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Gallery</a></li>
            <li><a href="<?php echo esc_url( home_url( '/videos' ) ); ?>">Videos</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="ncta">Connect</a></li>
        </ul>
        <button class="ham" id="ham" aria-label="Toggle Menu">
            <span></span><span></span><span></span>
        </button>
    </div>
    <div class="drw" id="drw">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/about' ) ); ?>">About</a>
        <a href="<?php echo esc_url( home_url( '/courses' ) ); ?>">Courses</a>
        <a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a>
        <a href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">Gallery</a>
        <a href="<?php echo esc_url( home_url( '/videos' ) ); ?>">Videos</a>
        <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a>
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="mcta">Connect</a>
    </div>
</nav>
