<?php
/**
 * Template Name: Wedding Photography Service Page
 * Description: Full-width custom landing page — bypasses theme & Gutenberg entirely.
 *
 * HOW TO INSTALL:
 * 1. Upload this file to your active (child) theme folder via FTP or
 *    Appearance > Theme File Editor.
 * 2. In WordPress admin go to Pages > Add New.
 * 3. In the right sidebar under "Page Attributes" → Template, select
 *    "Wedding Photography Service Page".
 * 4. Set permalink to /wedding-photography/ and Publish.
 *
 * CUSTOMISE:
 * Search for every [PLACEHOLDER] and replace with your real info.
 * To add your hero background image, add to Additional CSS:
 *   .wp-hero__bg { background-image: url('/wp-content/uploads/YOUR-HERO.jpg'); }
 */

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) exit;

// Remove the admin bar top margin on this page
add_filter( 'show_admin_bar', '__return_false' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- SEO meta — fill these in via your SEO plugin (Yoast / RankMath)  -->
  <!-- OR manually replace the title/description below                   -->
  <?php wp_head(); ?>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

  <style>
  /* ================================================================
     RESET
  ================================================================ */
  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  :root {
    --dark:       #151515;
    --dark-2:     #1e1e1e;
    --dark-3:     #252525;
    --cream:      #f8f4ef;
    --cream-2:    #ede7df;
    --cream-3:    #e4dbd0;
    --gold:       #b8965a;
    --gold-light: #d4b483;
    --gold-faint: rgba(184,150,90,.08);
    --white:      #ffffff;
    --text:       #2c2c2c;
    --muted:      #6b6b6b;
    --border:     #e5ddd4;
    --serif: 'Cormorant Garamond', Georgia, serif;
    --sans:  'Jost', 'Helvetica Neue', Arial, sans-serif;
    --max: 1200px;
    --sp: clamp(70px,10vw,110px) 24px;
    --tr: .3s ease;
  }

  /* Override any leftover theme styles on this page */
  html, body {
    font-family: var(--sans) !important;
    background: var(--cream) !important;
    color: var(--text) !important;
    overflow-x: hidden !important;
    width: 100% !important;
    margin: 0 !important;
    padding: 0 !important;
  }

  /* Kill theme wrappers */
  .wpp-page,
  #page, #content, .site, .site-content,
  .entry-content, .wp-block-group,
  .spectra-container, .uagb-container,
  .container, .wrapper, .inner-wrap {
    max-width: none !important;
    padding: 0 !important;
    margin: 0 !important;
    width: 100% !important;
  }

  img { max-width: 100%; height: auto; display: block; }
  a   { color: inherit; text-decoration: none; }
  h1,h2,h3,h4 { font-family: var(--serif); font-weight: 400; line-height: 1.2; }
  h1  { font-size: clamp(2.8rem,6vw,5rem); }
  h2  { font-size: clamp(2rem,4vw,3.2rem); }
  h3  { font-size: clamp(1.4rem,2.5vw,2rem); }
  h4  { font-size: 1.15rem; }
  p   { font-size: 1rem; line-height: 1.85; color: var(--muted); }

  .eyebrow {
    font-family: var(--sans); font-size: .68rem; font-weight: 500;
    letter-spacing: .28em; text-transform: uppercase;
    color: var(--gold); display: block; margin-bottom: 14px;
  }

  /* ================================================================
     BUTTONS
  ================================================================ */
  .btn {
    display: inline-block; padding: 15px 40px;
    font-family: var(--sans); font-size: .72rem; font-weight: 500;
    letter-spacing: .18em; text-transform: uppercase;
    transition: all var(--tr); cursor: pointer;
    border: none; text-align: center;
  }
  .btn--gold        { background: var(--gold); color: var(--white); }
  .btn--gold:hover  { background: var(--gold-light); transform: translateY(-2px); }
  .btn--outline     { border: 1px solid var(--gold); color: var(--gold); background: transparent; }
  .btn--outline:hover { background: var(--gold); color: var(--white); transform: translateY(-2px); }
  .btn--ghost       { border: 1px solid rgba(255,255,255,.4); color: var(--white); background: transparent; }
  .btn--ghost:hover { background: var(--white); color: var(--dark); transform: translateY(-2px); }

  /* ================================================================
     SECTION HEADER
  ================================================================ */
  .sec-hdr { text-align: center; margin-bottom: 60px; }
  .sec-hdr h2 { margin-bottom: 18px; }
  .sec-hdr p  { max-width: 560px; margin: 0 auto; font-size: 1.05rem; }

  /* ================================================================
     NAVIGATION
  ================================================================ */
  .wpp-nav {
    position: fixed; top: 0; left: 0; right: 0; z-index: 9999;
    padding: 22px 24px;
    transition: background .4s, padding .4s, box-shadow .4s;
  }
  .wpp-nav.scrolled {
    background: rgba(18,15,10,.96);
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    padding: 14px 24px;
    box-shadow: 0 1px 30px rgba(0,0,0,.25);
  }
  .wpp-nav__inner {
    max-width: var(--max); margin: 0 auto;
    display: flex; align-items: center; justify-content: space-between;
  }
  .wpp-nav__logo {
    font-family: var(--serif); font-size: 1.35rem;
    color: var(--white); letter-spacing: .06em;
  }
  .wpp-nav__logo span { color: var(--gold); }
  .wpp-nav__links { display: flex; align-items: center; gap: 36px; list-style: none; }
  .wpp-nav__links a {
    font-size: .7rem; font-weight: 500; letter-spacing: .15em;
    text-transform: uppercase; color: rgba(255,255,255,.75);
    transition: color var(--tr);
  }
  .wpp-nav__links a:hover { color: var(--gold); }
  .wpp-nav__book {
    background: var(--gold) !important; color: var(--white) !important;
    padding: 9px 22px;
  }
  .wpp-nav__book:hover { background: var(--gold-light) !important; }

  /* ================================================================
     HERO
  ================================================================ */
  .wpp-hero {
    position: relative; min-height: 100vh;
    display: flex; align-items: center; justify-content: center;
    text-align: center; overflow: hidden; background: var(--dark);
  }
  .wpp-hero__bg {
    position: absolute; inset: 0;
    /* ADD YOUR HERO IMAGE:
       background-image: url('/wp-content/uploads/your-hero.jpg');
       background-size: cover; background-position: center; */
    background: linear-gradient(135deg, #0e0b07 0%, #1a1410 45%, #0e0b07 100%);
  }
  .wpp-hero__overlay {
    position: absolute; inset: 0; z-index: 1;
    background: linear-gradient(to bottom,rgba(10,8,5,.45) 0%,rgba(10,8,5,.25) 50%,rgba(10,8,5,.65) 100%);
  }
  .wpp-hero__frame {
    position: absolute; inset: 36px; z-index: 1; pointer-events: none;
    border: 1px solid rgba(184,150,90,.12);
  }
  .wpp-hero__frame::after {
    content: ''; position: absolute; inset: 8px;
    border: 1px solid rgba(184,150,90,.07);
  }
  .wpp-hero__content {
    position: relative; z-index: 2;
    padding: 130px 24px 80px; max-width: 880px;
  }
  .wpp-hero__badge {
    display: inline-block; border: 1px solid var(--gold); color: var(--gold);
    font-size: .65rem; letter-spacing: .3em; text-transform: uppercase;
    padding: 7px 22px; margin-bottom: 34px; font-family: var(--sans);
  }
  .wpp-hero h1 { color: var(--white); margin-bottom: 22px; font-weight: 300; }
  .wpp-hero h1 em { font-style: italic; display: block; }
  .wpp-hero h1 strong {
    font-style: normal; font-weight: 500; display: block;
    color: var(--gold-light); font-size: 1.1em;
  }
  .wpp-hero__sub {
    font-size: 1.08rem; color: rgba(255,255,255,.65);
    max-width: 540px; margin: 0 auto 48px;
    font-family: var(--sans); line-height: 1.85;
  }
  .wpp-hero__btns  { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; margin-bottom: 64px; }
  .wpp-hero__stats { display: flex; gap: 48px; justify-content: center; flex-wrap: wrap; }
  .stat-num { font-family: var(--serif); font-size: 2.6rem; color: var(--gold); display: block; line-height: 1; margin-bottom: 5px; }
  .stat-lbl { font-size: .65rem; letter-spacing: .2em; text-transform: uppercase; color: rgba(255,255,255,.4); }
  .wpp-hero__scroll {
    position: absolute; bottom: 36px; left: 50%; transform: translateX(-50%); z-index: 2;
    display: flex; flex-direction: column; align-items: center; gap: 8px;
    color: rgba(255,255,255,.35); font-size: .62rem; letter-spacing: .2em; text-transform: uppercase;
  }
  .scroll-line {
    width: 1px; height: 44px;
    background: linear-gradient(to bottom,rgba(255,255,255,.3),transparent);
    animation: scrollAnim 1.8s ease-in-out infinite;
  }
  @keyframes scrollAnim {
    0%  { transform: scaleY(0); transform-origin: top; }
    49% { transform: scaleY(1); transform-origin: top; }
    50% { transform: scaleY(1); transform-origin: bottom; }
    100%{ transform: scaleY(0); transform-origin: bottom; }
  }

  /* ================================================================
     TRUST BAR
  ================================================================ */
  .wpp-trust {
    background: var(--dark-2);
    border-bottom: 1px solid rgba(184,150,90,.1); padding: 20px 24px;
  }
  .wpp-trust__inner {
    max-width: var(--max); margin: 0 auto;
    display: flex; align-items: center; justify-content: center;
    gap: 40px; flex-wrap: wrap;
  }
  .trust-item { display: flex; align-items: center; gap: 9px; font-size: .78rem; color: rgba(255,255,255,.45); }
  .trust-item svg { color: var(--gold); flex-shrink: 0; }

  /* ================================================================
     INTRO / ABOUT
  ================================================================ */
  .wpp-intro { padding: var(--sp); background: var(--cream); }
  .wpp-intro__grid {
    max-width: var(--max); margin: 0 auto;
    display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: center;
  }
  .wpp-intro__img-wrap { position: relative; }
  .wpp-intro__img {
    width: 100%; aspect-ratio: 3/4; object-fit: cover;
    /* REPLACE with: <img src="..." alt="..."> */
    background: linear-gradient(145deg,#dfd6c9 0%,#c9bfb0 100%);
    display: block;
  }
  .wpp-intro__quote {
    position: absolute; bottom: -18px; right: -18px;
    background: var(--gold); color: var(--white);
    padding: 18px 24px; font-family: var(--serif);
    font-size: 1rem; font-style: italic; max-width: 240px; line-height: 1.5;
  }
  .wpp-intro__text { padding: 16px 0; }
  .wpp-intro__text h2 { color: var(--dark); margin-bottom: 24px; }
  .wpp-intro__text p  { margin-bottom: 18px; font-size: 1.02rem; }
  .wpp-sig  { font-family: var(--serif); font-size: 2rem; font-style: italic; color: var(--gold); margin: 28px 0 8px; }
  .wpp-role { font-size: .75rem; letter-spacing: .15em; text-transform: uppercase; color: var(--muted); }

  /* ================================================================
     STYLES
  ================================================================ */
  .wpp-styles { background: var(--dark); padding: var(--sp); }
  .wpp-styles .sec-hdr h2 { color: var(--cream); }
  .wpp-styles .sec-hdr p  { color: rgba(255,255,255,.5); }
  .styles-grid {
    max-width: var(--max); margin: 0 auto;
    display: grid; grid-template-columns: repeat(3,1fr); gap: 3px;
  }
  .style-card { position: relative; overflow: hidden; }
  .style-card__img {
    width: 100%; aspect-ratio: 2/3; object-fit: cover;
    /* REPLACE with <img src="..." alt="..."> */
    background: linear-gradient(155deg,#2a231a 0%,#181210 100%);
    transition: transform .7s ease; display: block;
  }
  .style-card:hover .style-card__img { transform: scale(1.04); }
  .style-card__over {
    position: absolute; inset: 0;
    background: linear-gradient(to top,rgba(0,0,0,.82) 0%,rgba(0,0,0,.18) 55%,transparent 100%);
    display: flex; flex-direction: column; justify-content: flex-end; padding: 30px;
  }
  .style-card__tag { font-size: .62rem; letter-spacing: .28em; text-transform: uppercase; color: var(--gold); margin-bottom: 8px; }
  .style-card__over h3 { color: var(--white); font-size: 1.7rem; margin-bottom: 10px; }
  .style-card__over p  { color: rgba(255,255,255,.6); font-size: .88rem; line-height: 1.65; }

  /* ================================================================
     GALLERY
  ================================================================ */
  .wpp-gallery { padding: var(--sp); background: var(--cream); }
  .gallery-grid {
    max-width: var(--max); margin: 0 auto 44px;
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-template-rows: 260px 260px;
    gap: 8px;
  }
  .g-item { overflow: hidden; }
  .g-item--tall { grid-row: span 2; }
  .g-item--wide { grid-column: span 2; }
  .g-ph {
    width: 100%; height: 100%; min-height: 200px;
    /* REPLACE each with: <img src="..." alt="..." style="width:100%;height:100%;object-fit:cover;"> */
    background: linear-gradient(135deg,#e4dbd0 0%,#cec3b4 100%);
    transition: transform .5s ease; display: block;
  }
  .g-item:nth-child(even) .g-ph { background: linear-gradient(135deg,#e8e0d5 0%,#d4c9bb 100%); }
  .g-item:hover .g-ph { transform: scale(1.04); }
  .gallery-cta { text-align: center; }

  /* ================================================================
     PROCESS
  ================================================================ */
  .wpp-process { padding: var(--sp); background: var(--cream-2); }
  .process-steps {
    max-width: 960px; margin: 0 auto;
    display: grid; grid-template-columns: repeat(4,1fr);
    gap: 32px; position: relative;
  }
  .process-steps::before {
    content: ''; position: absolute;
    top: 35px; left: 12%; right: 12%; height: 1px;
    background: linear-gradient(to right,transparent,var(--gold),transparent);
    opacity: .3;
  }
  .proc-step { text-align: center; }
  .proc-num {
    width: 70px; height: 70px; border: 1px solid var(--gold); border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 22px; font-family: var(--serif); font-size: 1.4rem;
    color: var(--gold); background: var(--cream-2); position: relative; z-index: 1;
  }
  .proc-step h4 { color: var(--dark); margin-bottom: 10px; }
  .proc-step p  { font-size: .88rem; line-height: 1.75; }

  /* ================================================================
     PACKAGES
  ================================================================ */
  .wpp-packages { padding: var(--sp); background: var(--dark); }
  .wpp-packages .sec-hdr h2 { color: var(--cream); }
  .wpp-packages .sec-hdr p  { color: rgba(255,255,255,.5); }
  .pkgs-grid {
    max-width: var(--max); margin: 0 auto;
    display: grid; grid-template-columns: repeat(3,1fr); gap: 2px;
  }
  .pkg {
    background: var(--dark-2); padding: 48px 36px;
    border: 1px solid rgba(255,255,255,.04); position: relative;
  }
  .pkg--pop { background: var(--dark-3); border-color: rgba(184,150,90,.28); }
  .pkg--pop::before {
    content: 'Most Popular'; position: absolute; top: -1px; left: 50%; transform: translateX(-50%);
    background: var(--gold); color: var(--white);
    font-size: .62rem; letter-spacing: .18em; text-transform: uppercase;
    padding: 6px 20px; font-family: var(--sans); white-space: nowrap;
  }
  .pkg__name    { font-family: var(--serif); font-size: 1.9rem; color: var(--cream); margin-bottom: 6px; }
  .pkg__tag     { font-size: .8rem; color: rgba(255,255,255,.38); letter-spacing: .08em; margin-bottom: 28px; }
  .pkg__price   { display: flex; align-items: baseline; gap: 3px; margin-bottom: 28px; padding-bottom: 28px; border-bottom: 1px solid rgba(255,255,255,.06); }
  .pkg__cur     { font-family: var(--serif); font-size: 1.4rem; color: var(--gold); align-self: flex-start; margin-top: 7px; }
  .pkg__amt     { font-family: var(--serif); font-size: 3.6rem; color: var(--white); line-height: 1; }
  .pkg__note    { font-size: .75rem; color: rgba(255,255,255,.3); margin-left: 6px; align-self: flex-end; margin-bottom: 4px; }
  .pkg__list    { list-style: none; margin-bottom: 36px; }
  .pkg__list li { padding: 10px 0; border-bottom: 1px solid rgba(255,255,255,.04); font-size: .88rem; color: rgba(255,255,255,.6); display: flex; align-items: flex-start; gap: 12px; }
  .pkg__list li::before { content: '—'; color: var(--gold); flex-shrink: 0; }
  .pkg__list li:last-child { border-bottom: none; }
  .pkg .btn { display: block; width: 100%; }
  .pkgs-note { max-width: var(--max); margin: 36px auto 0; text-align: center; font-size: .85rem; color: rgba(255,255,255,.3); line-height: 1.8; }
  .pkgs-note a { color: var(--gold); border-bottom: 1px solid transparent; transition: border-color var(--tr); }
  .pkgs-note a:hover { border-bottom-color: var(--gold); }

  /* ================================================================
     TESTIMONIALS
  ================================================================ */
  .wpp-reviews { padding: var(--sp); background: var(--cream); }
  .reviews-grid { max-width: var(--max); margin: 0 auto; display: grid; grid-template-columns: repeat(3,1fr); gap: 28px; }
  .review { background: var(--white); padding: 36px; border-bottom: 3px solid var(--gold); }
  .review__stars { color: var(--gold); font-size: .85rem; letter-spacing: 3px; margin-bottom: 18px; }
  .review__quote { font-family: var(--serif); font-size: 1.08rem; font-style: italic; line-height: 1.8; color: var(--text); margin-bottom: 24px; }
  .review__author { display: flex; align-items: center; gap: 14px; }
  .review__avatar {
    width: 46px; height: 46px; border-radius: 50%;
    background: linear-gradient(135deg,#e4dbd0,#c8bfb0); flex-shrink: 0;
    display: flex; align-items: center; justify-content: center;
    font-family: var(--serif); font-size: 1.1rem; color: var(--white); overflow: hidden;
  }
  .review__name   { font-weight: 500; font-size: .88rem; color: var(--dark); display: block; margin-bottom: 2px; }
  .review__couple { font-size: .78rem; color: var(--muted); }

  /* ================================================================
     FAQ
  ================================================================ */
  .wpp-faq { padding: var(--sp); background: var(--cream-2); }
  .faq-wrap { max-width: 800px; margin: 0 auto; }
  .faq-item { border-bottom: 1px solid var(--border); }
  .faq-item:first-of-type { border-top: 1px solid var(--border); }
  .faq-q {
    width: 100%; background: none; border: none; cursor: pointer;
    padding: 22px 0; text-align: left;
    display: flex; align-items: flex-start; justify-content: space-between; gap: 20px;
    font-family: var(--serif); font-size: 1.12rem; color: var(--dark); line-height: 1.4;
    transition: color var(--tr);
  }
  .faq-q:hover, .faq-q[aria-expanded="true"] { color: var(--gold); }
  .faq-icon { flex-shrink: 0; width: 24px; height: 24px; border-radius: 50%; border: 1px solid currentColor; display: flex; align-items: center; justify-content: center; font-size: 1rem; margin-top: 2px; transition: transform var(--tr); }
  .faq-q[aria-expanded="true"] .faq-icon { transform: rotate(45deg); }
  .faq-a { display: none; padding: 0 0 22px; font-size: .96rem; line-height: 1.9; color: var(--muted); }
  .faq-a.open { display: block; }
  .faq-a ul { margin: 10px 0 10px 18px; }
  .faq-a li { margin-bottom: 6px; }
  .faq-a a { color: var(--gold); border-bottom: 1px solid transparent; transition: border-color var(--tr); }
  .faq-a a:hover { border-bottom-color: var(--gold); }

  /* ================================================================
     SERVICE AREAS
  ================================================================ */
  .wpp-areas { background: var(--dark); padding: 80px 24px; text-align: center; }
  .wpp-areas h2 { color: var(--cream); margin-bottom: 16px; }
  .areas-desc { color: rgba(255,255,255,.45); max-width: 520px; margin: 0 auto 44px; line-height: 1.85; }
  .areas-tags { max-width: 860px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; }
  .area-tag { padding: 9px 18px; border: 1px solid rgba(184,150,90,.2); color: rgba(255,255,255,.55); font-size: .8rem; letter-spacing: .08em; transition: all var(--tr); }
  .area-tag:hover, .area-tag--main { border-color: var(--gold); color: var(--gold); background: var(--gold-faint); }

  /* ================================================================
     FINAL CTA
  ================================================================ */
  .wpp-cta {
    padding: 120px 24px; text-align: center;
    background: linear-gradient(145deg,#0d0a06 0%,#1a1410 50%,#0d0a06 100%);
    position: relative; overflow: hidden;
  }
  .wpp-cta::before {
    content: ''; position: absolute; top: 50%; left: 50%; transform: translate(-50%,-50%);
    width: 700px; height: 700px;
    background: radial-gradient(circle,rgba(184,150,90,.055) 0%,transparent 70%);
    pointer-events: none;
  }
  .wpp-cta h2   { color: var(--white); max-width: 620px; margin: 0 auto 20px; font-size: clamp(2rem,5vw,3.6rem); }
  .wpp-cta__p   { color: rgba(255,255,255,.5); max-width: 460px; margin: 0 auto 44px; line-height: 1.85; font-size: 1.05rem; }
  .wpp-cta__btns { display: flex; gap: 14px; justify-content: center; flex-wrap: wrap; }
  .wpp-cta__badge { margin-top: 44px; font-size: .78rem; color: rgba(255,255,255,.25); letter-spacing: .05em; }

  /* ================================================================
     FOOTER
  ================================================================ */
  .wpp-footer { background: var(--dark); border-top: 1px solid rgba(255,255,255,.04); padding: 64px 24px 28px; }
  .wpp-footer__inner { max-width: var(--max); margin: 0 auto; }
  .footer-top { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 40px; padding-bottom: 44px; border-bottom: 1px solid rgba(255,255,255,.05); margin-bottom: 28px; }
  .footer-brand h3 { font-family: var(--serif); font-size: 1.5rem; color: var(--white); margin-bottom: 14px; }
  .footer-brand p  { font-size: .88rem; color: rgba(255,255,255,.38); line-height: 1.8; max-width: 270px; }
  .footer-col h4 { font-size: .65rem; letter-spacing: .25em; text-transform: uppercase; color: var(--gold); margin-bottom: 18px; font-family: var(--sans); font-weight: 500; }
  .footer-col ul { list-style: none; }
  .footer-col li { margin-bottom: 9px; }
  .footer-col a  { font-size: .88rem; color: rgba(255,255,255,.4); transition: color var(--tr); }
  .footer-col a:hover { color: var(--gold); }
  .footer-bottom { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 14px; }
  .footer-copy   { font-size: .76rem; color: rgba(255,255,255,.22); }
  .footer-copy a { color: rgba(255,255,255,.22); margin-left: 12px; }
  .footer-social { display: flex; gap: 18px; }
  .footer-social a { font-size: .72rem; color: rgba(255,255,255,.3); text-transform: uppercase; letter-spacing: .1em; transition: color var(--tr); }
  .footer-social a:hover { color: var(--gold); }

  /* ================================================================
     RESPONSIVE
  ================================================================ */
  @media (max-width: 1024px) {
    .pkgs-grid   { grid-template-columns: 1fr; max-width: 500px; }
    .styles-grid { grid-template-columns: 1fr 1fr; }
    .footer-top  { grid-template-columns: 1fr 1fr; }
  }
  @media (max-width: 768px) {
    :root { --sp: 64px 20px; }
    .wpp-nav__links    { display: none; }
    .wpp-intro__grid   { grid-template-columns: 1fr; gap: 52px; }
    .wpp-intro__quote  { position: static; display: inline-block; }
    .styles-grid       { grid-template-columns: 1fr; }
    .gallery-grid { grid-template-columns: repeat(2,1fr); grid-template-rows: auto; }
    .g-item--wide, .g-item--tall { grid-column: span 1; grid-row: span 1; }
    .g-ph { min-height: 200px; }
    .process-steps { grid-template-columns: repeat(2,1fr); }
    .process-steps::before { display: none; }
    .reviews-grid { grid-template-columns: 1fr; }
    .footer-top   { grid-template-columns: 1fr; }
    .wpp-hero__frame { inset: 18px; }
  }
  @media (max-width: 480px) {
    .wpp-hero__btns, .wpp-cta__btns { flex-direction: column; align-items: center; }
    .btn { width: 100%; }
    .process-steps { grid-template-columns: 1fr; }
    .gallery-grid  { grid-template-columns: 1fr; }
    .wpp-hero__stats { gap: 28px; }
  }

  /* Admin bar compensation when logged in */
  .admin-bar .wpp-nav { top: 32px; }
  @media screen and (max-width: 782px) { .admin-bar .wpp-nav { top: 46px; } }
  </style>
</head>
<body <?php body_class( 'wpp-page' ); ?>>

<?php
// Allow WordPress plugins (forms, cookie banners, etc.) to inject content
wp_body_open();
?>

<!-- ================================================================
     NAVIGATION
================================================================ -->
<nav class="wpp-nav" id="wpp-nav" role="navigation" aria-label="Main navigation">
  <div class="wpp-nav__inner">
    <a class="wpp-nav__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php bloginfo('name'); ?> Homepage">
      <?php bloginfo('name'); ?><span> Photography</span>
    </a>
    <ul class="wpp-nav__links">
      <li><a href="#about">About</a></li>
      <li><a href="#gallery">Gallery</a></li>
      <li><a href="#packages">Packages</a></li>
      <li><a href="#faq">FAQ</a></li>
      <li><a href="#contact" class="wpp-nav__book">Book a Date</a></li>
    </ul>
  </div>
</nav>


<!-- ================================================================
     HERO
================================================================ -->
<header class="wpp-hero" role="banner">
  <div class="wpp-hero__bg" aria-hidden="true"></div>
  <div class="wpp-hero__overlay" aria-hidden="true"></div>
  <div class="wpp-hero__frame" aria-hidden="true"></div>

  <div class="wpp-hero__content">
    <div class="wpp-hero__badge">Wedding Photographer &middot; [City] &amp; Worldwide</div>

    <h1>
      <em>Timeless stories of your</em>
      <strong>Most Beautiful Day</strong>
    </h1>

    <p class="wpp-hero__sub">
      Documentary &amp; fine art wedding photography in [City]. Authentic, emotional,
      and beautifully crafted images that tell your complete love story &mdash; exactly as it happened.
    </p>

    <div class="wpp-hero__btns">
      <a href="#contact" class="btn btn--gold">Book a Free Consultation</a>
      <a href="#gallery" class="btn btn--ghost">View Portfolio</a>
    </div>

    <div class="wpp-hero__stats" role="list" aria-label="Studio credentials">
      <div role="listitem">
        <span class="stat-num">250+</span>
        <span class="stat-lbl">Weddings Captured</span>
      </div>
      <div role="listitem">
        <span class="stat-num">5.0&#9733;</span>
        <span class="stat-lbl">Google Rating</span>
      </div>
      <div role="listitem">
        <span class="stat-num">8+</span>
        <span class="stat-lbl">Years Experience</span>
      </div>
      <div role="listitem">
        <span class="stat-num">48h</span>
        <span class="stat-lbl">Sneak Peek Delivered</span>
      </div>
    </div>
  </div>

  <div class="wpp-hero__scroll" aria-hidden="true">
    <div class="scroll-line"></div>
    <span>Discover</span>
  </div>
</header>


<!-- ================================================================
     TRUST BAR
================================================================ -->
<div class="wpp-trust" role="complementary" aria-label="Trust highlights">
  <div class="wpp-trust__inner">
    <div class="trust-item">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87L18.18 21 12 17.77 5.82 21 7 14.14l-5-4.87 6.91-1.01z"/></svg>
      5-Star Rated on Google (87+ reviews)
    </div>
    <div class="trust-item">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
      Fully Insured &amp; Backed Up
    </div>
    <div class="trust-item">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
      Gallery in 4&ndash;8 Weeks
    </div>
    <div class="trust-item">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
      Destination Weddings Worldwide
    </div>
    <div class="trust-item">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
      Indian &amp; South Asian Specialists
    </div>
  </div>
</div>


<!-- ================================================================
     ABOUT
================================================================ -->
<section class="wpp-intro" id="about" aria-labelledby="about-h">
  <div class="wpp-intro__grid">

    <div class="wpp-intro__img-wrap">
      <!--
        REPLACE THIS DIV with your actual image tag:
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/photographer-portrait.jpg"
             alt="[Your Name] — Wedding Photographer in [City]"
             class="wpp-intro__img" width="600" height="800" loading="lazy">
      -->
      <div class="wpp-intro__img" role="img" aria-label="[Your Name] — Wedding Photographer in [City]"></div>
      <div class="wpp-intro__quote">&ldquo;Every wedding has a story that deserves to be told beautifully.&rdquo;</div>
    </div>

    <div class="wpp-intro__text">
      <span class="eyebrow">Your Photographer</span>
      <h2 id="about-h">Documentary Wedding Photography That Feels Like <em>You</em></h2>
      <p>I&rsquo;m <strong>[Your Name]</strong>, a [City]-based wedding photographer with over 8 years of experience capturing authentic, emotional love stories across [Region] and beyond. My approach blends documentary photojournalism with fine art portraiture &mdash; letting your day unfold naturally while creating images of genuine beauty.</p>
      <p>The best wedding photos aren&rsquo;t staged. They&rsquo;re the quiet moments between the big ones: the nervous laugh before you walk down the aisle, the look your partner gives when they first see you, the dancing at midnight when everyone&rsquo;s forgotten there&rsquo;s a camera.</p>
      <p>My work has been featured in <em>[Publication Name]</em>, and I&rsquo;ve had the privilege of photographing 250+ weddings &mdash; from intimate garden elopements to grand South Asian celebrations spanning multiple days.</p>
      <div class="wpp-sig">[Your Name]</div>
      <div class="wpp-role">Lead Photographer &amp; Creative Director</div>
    </div>

  </div>
</section>


<!-- ================================================================
     PHOTOGRAPHY STYLES
================================================================ -->
<section class="wpp-styles" aria-labelledby="styles-h">
  <div class="sec-hdr">
    <span class="eyebrow">Photography Styles</span>
    <h2 id="styles-h">Find Your Perfect Style</h2>
    <p>From cinematic documentary to moody fine art &mdash; every style tailored to reflect your unique love story.</p>
  </div>

  <div class="styles-grid">
    <article class="style-card">
      <!-- REPLACE: <img src="..." alt="Documentary wedding photography" class="style-card__img" loading="lazy"> -->
      <div class="style-card__img" role="img" aria-label="Documentary wedding photography — candid ceremony moment"></div>
      <div class="style-card__over">
        <span class="style-card__tag">Most Popular</span>
        <h3>Documentary</h3>
        <p>Photojournalistic storytelling. Candid emotions and authentic moments &mdash; never posed, always real.</p>
      </div>
    </article>
    <article class="style-card">
      <!-- REPLACE: <img src="..." alt="Fine art wedding photography" class="style-card__img" loading="lazy"> -->
      <div class="style-card__img" role="img" aria-label="Fine art wedding photography — cinematic golden hour portrait"></div>
      <div class="style-card__over">
        <span class="style-card__tag">Timeless</span>
        <h3>Fine Art</h3>
        <p>Moody, cinematic, film-inspired imagery. Artistic compositions with breathtaking natural light.</p>
      </div>
    </article>
    <article class="style-card">
      <!-- REPLACE: <img src="..." alt="Classic wedding portraits" class="style-card__img" loading="lazy"> -->
      <div class="style-card__img" role="img" aria-label="Classic posed wedding portrait — elegant bride and groom"></div>
      <div class="style-card__over">
        <span class="style-card__tag">Classic</span>
        <h3>Traditional Portraits</h3>
        <p>Timeless, beautifully posed portraits of you, your partner, and family. Elegant for generations to cherish.</p>
      </div>
    </article>
  </div>
</section>


<!-- ================================================================
     GALLERY
================================================================ -->
<section class="wpp-gallery" id="gallery" aria-labelledby="gallery-h">
  <div class="sec-hdr">
    <span class="eyebrow">Portfolio</span>
    <h2 id="gallery-h">Stories We&rsquo;ve Told</h2>
    <p>A curated selection from recent weddings across [City], [Region], and beyond.</p>
  </div>

  <div class="gallery-grid" role="list" aria-label="Wedding photography portfolio">
    <!--
      REPLACE each .g-ph div with your actual portfolio images, e.g.:
      <img src="/wp-content/uploads/wedding-photo-1.jpg"
           alt="Bride portrait — natural light, [Venue Name]"
           style="width:100%;height:100%;object-fit:cover;"
           loading="lazy">
    -->
    <div class="g-item g-item--tall" role="listitem"><div class="g-ph" role="img" aria-label="Bride portrait — soft natural window light"></div></div>
    <div class="g-item" role="listitem"><div class="g-ph" role="img" aria-label="Ceremony — candid first look reaction"></div></div>
    <div class="g-item" role="listitem"><div class="g-ph" role="img" aria-label="Wedding detail — rings and florals"></div></div>
    <div class="g-item" role="listitem"><div class="g-ph" role="img" aria-label="Reception first dance — emotional candid"></div></div>
    <div class="g-item" role="listitem"><div class="g-ph" role="img" aria-label="Couple portrait — golden hour backlight"></div></div>
    <div class="g-item g-item--wide" role="listitem"><div class="g-ph" role="img" aria-label="Wedding party portrait — outdoor setting"></div></div>
    <div class="g-item" role="listitem"><div class="g-ph" role="img" aria-label="Getting ready — bride and bridesmaids morning"></div></div>
  </div>

  <div class="gallery-cta">
    <a href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>" class="btn btn--outline">View Full Portfolio</a>
  </div>
</section>


<!-- ================================================================
     PROCESS
================================================================ -->
<section class="wpp-process" aria-labelledby="process-h">
  <div class="sec-hdr">
    <span class="eyebrow">How It Works</span>
    <h2 id="process-h">From Enquiry to Forever</h2>
    <p>A simple, stress-free process from your first hello to your final gallery delivery.</p>
  </div>
  <div class="process-steps" role="list">
    <div class="proc-step" role="listitem">
      <div class="proc-num" aria-hidden="true">01</div>
      <h4>Connect &amp; Consult</h4>
      <p>Fill in the enquiry form with your date and vision. We&rsquo;ll schedule a complimentary consultation &mdash; in person, video call, or phone.</p>
    </div>
    <div class="proc-step" role="listitem">
      <div class="proc-num" aria-hidden="true">02</div>
      <h4>Secure Your Date</h4>
      <p>Choose your package, sign your wedding photography contract, and reserve your date with a 20% deposit. Your date is exclusively yours.</p>
    </div>
    <div class="proc-step" role="listitem">
      <div class="proc-num" aria-hidden="true">03</div>
      <h4>Plan Together</h4>
      <p>We build your shot list, timeline, and do a venue walkthrough. Engagement session available to get you camera-comfortable.</p>
    </div>
    <div class="proc-step" role="listitem">
      <div class="proc-num" aria-hidden="true">04</div>
      <h4>Relive the Moment</h4>
      <p>Sneak peek within 48 hours. Full gallery of 500&ndash;800+ beautifully edited images delivered in 4&ndash;8 weeks with full print rights.</p>
    </div>
  </div>
</section>


<!-- ================================================================
     PACKAGES
================================================================ -->
<section class="wpp-packages" id="packages" aria-labelledby="packages-h">
  <div class="sec-hdr">
    <span class="eyebrow">Wedding Photography Packages &amp; Pricing</span>
    <h2 id="packages-h">Transparent Pricing. No Surprises.</h2>
    <p>Simple, all-inclusive packages. Every package includes full print rights and a private online gallery.</p>
  </div>

  <div class="pkgs-grid" role="list">

    <article class="pkg" role="listitem">
      <div class="pkg__name">Essential</div>
      <div class="pkg__tag">Intimate weddings &amp; elopements</div>
      <div class="pkg__price"><span class="pkg__cur">$</span><span class="pkg__amt">2,500</span><span class="pkg__note">starting from</span></div>
      <ul class="pkg__list">
        <li>6 hours of continuous coverage</li>
        <li>400+ professionally edited photos</li>
        <li>Private online gallery (1 year)</li>
        <li>High-resolution digital downloads</li>
        <li>Full print release</li>
        <li>48-hour sneak peek delivery</li>
        <li>Pre-wedding planning consultation</li>
      </ul>
      <a href="#contact" class="btn btn--ghost">Enquire Now</a>
    </article>

    <article class="pkg pkg--pop" role="listitem">
      <div class="pkg__name">Classic</div>
      <div class="pkg__tag">Our most popular package</div>
      <div class="pkg__price"><span class="pkg__cur">$</span><span class="pkg__amt">3,500</span><span class="pkg__note">starting from</span></div>
      <ul class="pkg__list">
        <li>8 hours of continuous coverage</li>
        <li>Second photographer included</li>
        <li>600+ professionally edited photos</li>
        <li>Engagement session (1 hour)</li>
        <li>Private online gallery (2 years)</li>
        <li>High-resolution digital downloads</li>
        <li>Full print release</li>
        <li>48-hour sneak peek delivery</li>
        <li>Rehearsal dinner add-on available</li>
      </ul>
      <a href="#contact" class="btn btn--gold">Enquire Now</a>
    </article>

    <article class="pkg" role="listitem">
      <div class="pkg__name">Luxury</div>
      <div class="pkg__tag">Full-day luxury experience</div>
      <div class="pkg__price"><span class="pkg__cur">$</span><span class="pkg__amt">5,000</span><span class="pkg__note">starting from</span></div>
      <ul class="pkg__list">
        <li>10 hours full-day coverage</li>
        <li>Second photographer included</li>
        <li>800+ professionally edited photos</li>
        <li>Engagement session (2 hours)</li>
        <li>Fine art heirloom album (20 spreads)</li>
        <li>Private online gallery (5 years)</li>
        <li>High-resolution digital downloads</li>
        <li>Full print release</li>
        <li>48-hour sneak peek delivery</li>
        <li>Complimentary set of 5 fine art prints</li>
      </ul>
      <a href="#contact" class="btn btn--ghost">Enquire Now</a>
    </article>

  </div>

  <p class="pkgs-note">
    All packages are fully customisable. <a href="#contact">Get in touch</a> to build a bespoke package.
    Destination weddings, Indian &amp; South Asian multi-day coverage, elopement packages,
    and photo &amp; video bundles available. Flexible payment plans available.
  </p>
</section>


<!-- ================================================================
     TESTIMONIALS
================================================================ -->
<section class="wpp-reviews" id="reviews" aria-labelledby="reviews-h">
  <div class="sec-hdr">
    <span class="eyebrow">Client Reviews</span>
    <h2 id="reviews-h">What Couples Are Saying</h2>
    <p>Over 87 five-star reviews from real couples who trusted us with their most important day.</p>
  </div>

  <div class="reviews-grid" role="list">
    <article class="review" role="listitem" itemscope itemtype="https://schema.org/Review">
      <div class="review__stars" aria-label="5 out of 5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <blockquote class="review__quote" itemprop="reviewBody">&ldquo;[Photographer Name] captured our day so perfectly we still can&rsquo;t believe it. Every photo feels like a painting. They were completely invisible during the ceremony &mdash; yet somehow captured every single moment. Our families cried when they saw the gallery.&rdquo;</blockquote>
      <div class="review__author">
        <div class="review__avatar" aria-hidden="true">S</div>
        <div>
          <span class="review__name" itemprop="author">Sarah &amp; James M.</span>
          <span class="review__couple">Garden Wedding &middot; [Venue], [City]</span>
        </div>
      </div>
    </article>
    <article class="review" role="listitem" itemscope itemtype="https://schema.org/Review">
      <div class="review__stars" aria-label="5 out of 5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <blockquote class="review__quote" itemprop="reviewBody">&ldquo;We were nervous about the investment, but it was absolutely the best decision we made. The photos are beyond anything we imagined. Worth every penny &mdash; if you&rsquo;re even thinking about it, just book. You won&rsquo;t regret it.&rdquo;</blockquote>
      <div class="review__author">
        <div class="review__avatar" aria-hidden="true">A</div>
        <div>
          <span class="review__name" itemprop="author">Aisha &amp; Marcus T.</span>
          <span class="review__couple">Luxury Hotel Wedding &middot; [City]</span>
        </div>
      </div>
    </article>
    <article class="review" role="listitem" itemscope itemtype="https://schema.org/Review">
      <div class="review__stars" aria-label="5 out of 5 stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
      <blockquote class="review__quote" itemprop="reviewBody">&ldquo;We had a South Asian fusion wedding with 300+ guests across two days. [Photographer Name] understood every tradition, knew exactly when to be where, and captured both the grandeur and the intimate family moments brilliantly. Our families in India were moved to tears.&rdquo;</blockquote>
      <div class="review__author">
        <div class="review__avatar" aria-hidden="true">P</div>
        <div>
          <span class="review__name" itemprop="author">Priya &amp; Rohan S.</span>
          <span class="review__couple">Indian Fusion Wedding &middot; [Venue], [City]</span>
        </div>
      </div>
    </article>
  </div>
</section>


<!-- ================================================================
     FAQ
================================================================ -->
<section class="wpp-faq" id="faq" aria-labelledby="faq-h">
  <div class="sec-hdr">
    <span class="eyebrow">Frequently Asked Questions</span>
    <h2 id="faq-h">Everything You Want to Know</h2>
    <p>Answers to the most common questions couples ask when planning their wedding photography.</p>
  </div>

  <div class="faq-wrap">

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa1">How much does wedding photography cost in [City]?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa1"><p>Wedding photography in [City] typically costs between <strong>$2,500 and $6,000+</strong>. Our packages start at $2,500 for 6 hours (Essential), $3,500 for 8 hours with a second photographer (Classic), and $5,000 for full-day luxury coverage with a fine art album (Luxury). The investment reflects consultations, 8&ndash;12 hours of shooting, 30&ndash;40 hours of editing, premium equipment, and insurance. <a href="#packages">View full package details.</a></p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa2">How many hours of wedding photography do I need?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa2"><p>Most weddings need <strong>8 hours</strong> &mdash; from getting ready through to the first dances. Quick guide:</p><ul><li><strong>4&ndash;6 hours</strong> &mdash; Elopements, micro-weddings, ceremony only</li><li><strong>8 hours</strong> &mdash; Standard wedding with getting ready, ceremony, portraits, first dances</li><li><strong>10+ hours</strong> &mdash; Large weddings, multi-venue days, late-night receptions</li></ul><p>We recommend a 30-minute buffer on each end for timing flexibility.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa3">When should I book my wedding photographer?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa3"><p>Book <strong>12&ndash;18 months in advance</strong> for peak season Saturday dates (May&ndash;October). Popular photographers book 1&ndash;2 years ahead. Book your photographer immediately after securing your venue &mdash; they&rsquo;re typically the first vendor to become fully booked.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa4">How long does it take to get wedding photos back?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa4"><p>You&rsquo;ll receive a <strong>sneak peek of 20&ndash;30 edited images within 48&ndash;72 hours</strong>. Your full gallery of 500&ndash;800+ professionally edited images is delivered within <strong>4&ndash;8 weeks</strong> via a private online gallery with high-resolution downloads and a full print release.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa5">Do I need a second photographer at my wedding?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa5"><p>Highly recommended for weddings with 100+ guests, different getting-ready locations, or large multi-event celebrations. A second shooter captures simultaneous moments the lead photographer cannot. Our Classic and Luxury packages both include a second photographer.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa6">What&rsquo;s the difference between documentary and traditional wedding photography?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa6"><p><strong>Documentary</strong> captures events as they naturally unfold &mdash; candid, unposed, authentic. <strong>Traditional</strong> uses more posed portraits and formal group shots. Most couples prefer a <strong>blend of both</strong>: documentary coverage throughout the day with a dedicated 20&ndash;30 minutes for creative couple portraits at golden hour.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa7">How many wedding photos will I receive?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa7"><p>Expect <strong>75&ndash;100 professionally edited photos per hour</strong> of coverage. For an 8-hour wedding that&rsquo;s 600&ndash;800 beautiful images. Every photo is carefully selected from thousands of frames, colour-graded, and edited. All delivered as high-resolution files with a full print release.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa8">Why is wedding photography so expensive?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa8"><p>Each wedding involves: 2&ndash;3 planning meetings, 8&ndash;12 hours of shooting, 30&ndash;40 hours of editing, $15,000+ in professional equipment, backup systems, insurance, and years of expertise. Most importantly &mdash; your wedding photos are a <strong>once-in-a-lifetime irreplaceable investment</strong>. There are no retakes.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa9">Do you photograph Indian, South Asian, and multicultural weddings?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa9"><p>Yes &mdash; South Asian weddings are a speciality. I have extensive experience with Indian, Pakistani, Sri Lankan, and fusion celebrations spanning multiple days &mdash; from the mehndi and sangeet through the baraat, pheras, and reception. I understand every tradition and come prepared to ensure nothing is missed. Multi-day packages are available.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa10">Do you travel for destination weddings?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa10"><p>Absolutely. Destination weddings are a passion &mdash; I&rsquo;ve photographed weddings in [Country], [Country], and across [Region]. Destination packages include all travel costs and are fully customised to your location. <a href="#contact">Get in touch</a> to discuss your destination wedding.</p></div>
    </div>

    <div class="faq-item">
      <button class="faq-q" aria-expanded="false" aria-controls="fa11">Do you tip wedding photographers?<span class="faq-icon" aria-hidden="true">+</span></button>
      <div class="faq-a" id="fa11"><p>Tips are never expected or required &mdash; we charge a price that reflects the full value of our work. If you feel we went above and beyond, $50&ndash;$200 for the lead photographer and $20&ndash;$100 for second shooters is a lovely gesture. An honest Google review means just as much and genuinely helps other couples find us.</p></div>
    </div>

  </div>
</section>


<!-- ================================================================
     SERVICE AREAS
================================================================ -->
<section class="wpp-areas" aria-labelledby="areas-h">
  <span class="eyebrow">Coverage Areas</span>
  <h2 id="areas-h">Based in [City] &mdash; Available Everywhere</h2>
  <p class="areas-desc">[City]-based wedding photographer serving [Region] and available worldwide for destination weddings. Travel included within [X miles/km] of [City].</p>
  <div class="areas-tags" role="list">
    <span class="area-tag area-tag--main" role="listitem">[City]</span>
    <span class="area-tag" role="listitem">[Nearby City 1]</span>
    <span class="area-tag" role="listitem">[Nearby City 2]</span>
    <span class="area-tag" role="listitem">[Nearby City 3]</span>
    <span class="area-tag" role="listitem">[County / Region 1]</span>
    <span class="area-tag" role="listitem">[County / Region 2]</span>
    <span class="area-tag" role="listitem">[Country]</span>
    <span class="area-tag" role="listitem">Destination Worldwide</span>
  </div>
</section>


<!-- ================================================================
     FINAL CTA
================================================================ -->
<section class="wpp-cta" id="contact" aria-labelledby="cta-h">
  <span class="eyebrow">Book Your Wedding Photography</span>
  <h2 id="cta-h">Your Story Deserves to Be Told Beautifully</h2>
  <p class="wpp-cta__p">Limited dates available for [Year] &amp; [Year+1]. Let&rsquo;s have a no-obligation conversation about your wedding.</p>
  <div class="wpp-cta__btns">
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn--gold">Check Date Availability</a>
    <a href="tel:[your-phone]" class="btn btn--ghost">Call [Your Number]</a>
  </div>
  <p class="wpp-cta__badge">Secure your date with a 20% deposit &nbsp;&middot;&nbsp; No-obligation consultation &nbsp;&middot;&nbsp; Flexible payment plans</p>
</section>


<!-- ================================================================
     FOOTER
================================================================ -->
<footer class="wpp-footer" role="contentinfo">
  <div class="wpp-footer__inner">
    <div class="footer-top">
      <div class="footer-brand">
        <h3><?php bloginfo('name'); ?> Photography</h3>
        <p>Documentary &amp; fine art wedding photographer based in [City], available across [Region] and worldwide.</p>
      </div>
      <nav class="footer-col" aria-label="Services">
        <h4>Services</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url('/wedding-photography/') ); ?>">Wedding Photography</a></li>
          <li><a href="<?php echo esc_url( home_url('/engagement-photos/') ); ?>">Engagement Sessions</a></li>
          <li><a href="<?php echo esc_url( home_url('/elopement-photography/') ); ?>">Elopement Photography</a></li>
          <li><a href="<?php echo esc_url( home_url('/destination-weddings/') ); ?>">Destination Weddings</a></li>
          <li><a href="<?php echo esc_url( home_url('/indian-wedding-photography/') ); ?>">Indian Wedding Photography</a></li>
        </ul>
      </nav>
      <nav class="footer-col" aria-label="Explore">
        <h4>Explore</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url('/about/') ); ?>">About</a></li>
          <li><a href="<?php echo esc_url( home_url('/portfolio/') ); ?>">Portfolio</a></li>
          <li><a href="<?php echo esc_url( home_url('/packages/') ); ?>">Packages &amp; Pricing</a></li>
          <li><a href="<?php echo esc_url( home_url('/blog/') ); ?>">Wedding Blog</a></li>
          <li><a href="<?php echo esc_url( home_url('/contact/') ); ?>">Contact</a></li>
        </ul>
      </nav>
      <div class="footer-col">
        <h4>Contact</h4>
        <ul>
          <li><a href="mailto:[your@email.com]">[your@email.com]</a></li>
          <li><a href="tel:[your-phone]">[Your Phone Number]</a></li>
          <li style="font-size:.85rem;color:rgba(255,255,255,.28);">[City], [Region]</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <p class="footer-copy">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> Photography. All rights reserved.
        <a href="<?php echo esc_url( home_url('/privacy-policy/') ); ?>">Privacy Policy</a>
        <a href="<?php echo esc_url( home_url('/terms/') ); ?>">Terms</a>
      </p>
      <div class="footer-social" aria-label="Social media">
        <a href="https://instagram.com/[yourhandle]" target="_blank" rel="noopener noreferrer">Instagram</a>
        <a href="https://facebook.com/[yourpage]" target="_blank" rel="noopener noreferrer">Facebook</a>
        <a href="https://pinterest.com/[yourprofile]" target="_blank" rel="noopener noreferrer">Pinterest</a>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- ================================================================
     JS: sticky nav + FAQ accordion + smooth scroll
================================================================ -->
<script>
(function(){
  'use strict';
  var nav = document.getElementById('wpp-nav');
  if(nav){
    window.addEventListener('scroll',function(){ nav.classList.toggle('scrolled', window.scrollY > 80); },{passive:true});
  }
  document.querySelectorAll('.faq-q').forEach(function(btn){
    btn.addEventListener('click',function(){
      var open = btn.getAttribute('aria-expanded') === 'true';
      document.querySelectorAll('.faq-q[aria-expanded="true"]').forEach(function(b){
        if(b !== btn){ b.setAttribute('aria-expanded','false'); var a=document.getElementById(b.getAttribute('aria-controls')); if(a) a.classList.remove('open'); }
      });
      btn.setAttribute('aria-expanded', String(!open));
      var ans = document.getElementById(btn.getAttribute('aria-controls'));
      if(ans) ans.classList.toggle('open', !open);
    });
  });
  var fq = document.querySelector('.faq-q');
  if(fq) fq.click();
  document.querySelectorAll('a[href^="#"]').forEach(function(a){
    a.addEventListener('click',function(e){
      var id = a.getAttribute('href'); if(id==='#') return;
      var t = document.querySelector(id); if(!t) return;
      e.preventDefault();
      var off = nav ? nav.offsetHeight + 20 : 100;
      window.scrollTo({ top: t.getBoundingClientRect().top + window.scrollY - off, behavior:'smooth' });
    });
  });
}());
</script>
</body>
</html>
