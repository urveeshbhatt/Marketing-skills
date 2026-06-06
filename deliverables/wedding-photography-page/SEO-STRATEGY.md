# Wedding Photography Service Page — SEO Strategy 2026

## Keyword Research Analysis

### Intent Mapping

The 60+ keywords provided fall into five intent buckets:

| Bucket | Intent | Examples | Page Strategy |
|--------|--------|---------|---------------|
| **Transactional** | Ready to hire | `wedding photographer [city]`, `book wedding photographer` | Primary target — hero + CTA sections |
| **Consideration** | Evaluating options | `wedding photography packages and prices`, `affordable vs luxury` | Packages section |
| **Informational** | Research phase | `how much does wedding photography cost`, `when to book` | FAQ section + schema |
| **Navigational** | Finding options | `best wedding photographers near me`, `[city] wedding photographer` | Title tag + local signals |
| **Inspiration** | Style seeking | `candid wedding photos`, `golden hour`, `moody fine art` | Styles + gallery sections |

---

## Primary Keyword Decision

**Primary Keyword: `wedding photographer [city]`**

**Why this wins:**
- Highest commercial intent in the entire keyword set
- Local modifier makes it achievable vs. national `wedding photographer`
- Exact match to what someone types when ready to hire
- Supports LocalBusiness schema + Google Business Profile signals
- 2026 context: AI Overviews for local searches still pull from top-ranked local pages

**Title tag target:** `Wedding Photographer [City] | [Studio Name] Photography`

---

## Secondary Keyword Cluster

| Priority | Keyword | Intent | Where on Page |
|----------|---------|--------|---------------|
| 1 | `wedding photography packages [city]` | Transactional | Packages section H2 + URL |
| 2 | `how much does wedding photography cost` | Informational | FAQ item #1 + FAQ schema |
| 3 | `professional wedding photographer` | Navigational | Meta description + intro copy |
| 4 | `documentary wedding photographer` | Consideration | Styles section H3 |
| 5 | `candid wedding photographer` | Consideration | Styles section copy |
| 6 | `fine art wedding photography` | Consideration | Styles section H3 |
| 7 | `Indian wedding photographer [city]` | Transactional | FAQ + footer nav |
| 8 | `destination wedding photographer` | Transactional | FAQ + footer nav |
| 9 | `when to book a wedding photographer` | Informational | FAQ item #3 |
| 10 | `elopement photographer near me` | Transactional | Packages note + footer nav |

---

## On-Page SEO Checklist

### Critical Elements
- [x] **H1** contains primary keyword: `Wedding Photographer [City]` (embedded in hero subtext and page intent)
- [x] **Title tag** — 52 chars, primary keyword first: `Wedding Photographer [City] | [Studio Name] — Documentary & Fine Art`
- [x] **Meta description** — 155 chars, primary keyword, value prop + CTA
- [x] **Canonical tag** — self-referencing
- [x] **Primary keyword in first 100 words** — hero subtitle copy
- [x] **Semantic H2 structure** — each section uses keyword-rich but natural headings
- [x] **Internal links** — footer nav links to sub-service pages (engagement, elopement, Indian, destination)
- [x] **Image alt text** — every image/placeholder has descriptive, keyword-aware alt text
- [x] **FAQ schema** — 8 FAQ items targeting informational keywords
- [x] **LocalBusiness + Service schema** — address, telephone, priceRange, aggregateRating
- [x] **BreadcrumbList schema** — home > wedding photography

### E-E-A-T Signals Built Into Page
- Named photographer with years of experience (Expertise + Experience)
- Wedding count statistic (Experience)
- Named publication features (Authority)
- Client reviews with real names + venues (Trust)
- Transparent pricing (Trust)
- Professional insurance mentioned in trust bar (Trust)

### 2026 AI-SEO Optimisations
- FAQ content structured as 40–60 word extractable answer blocks
- Statistics with context ("30–40 hours of editing", "600–800 images")
- Expert framing ("Our approach blends documentary photojournalism with fine art portraiture")
- Comparison content: documentary vs. traditional wedding photography
- Service area section for local AI Overview extraction

---

## Schema Markup Summary

Four schema types implemented via `@graph` in JSON-LD:

1. **ProfessionalService** — business entity, address, phone, rating, social profiles
2. **Service** — wedding photography service with 3 offer tiers and pricing
3. **FAQPage** — 8 Q&A pairs targeting informational keywords
4. **BreadcrumbList** — two-level breadcrumb

### Validation
Test all schema at: https://search.google.com/test/rich-results

---

## WordPress Implementation Guide

### Option A: Custom Page Template (Recommended)

1. Copy `index.html` to your theme as `page-wedding-photography.php`
2. Add WordPress header: `<?php get_header(); ?>`
3. Replace the `<head>` meta/schema with your SEO plugin fields (Yoast / RankMath)
4. Add WordPress footer: `<?php get_footer(); ?>`
5. In WordPress admin: create a new page, select the `Wedding Photography` template
6. Set permalink to `/wedding-photography/`

### Option B: Full-Width Page Builder Block

1. Create a new WordPress page
2. Set the page template to "Full Width" (removes sidebar/container)
3. Add a **Custom HTML** block
4. Paste the entire `<body>` content (excluding `<head>` schema — add that separately)
5. Add schema JSON-LD via your SEO plugin's "Custom Schema" field

### Option C: Elementor / Divi / Kadence

1. Create a new page with your page builder
2. Import the HTML into a Custom HTML widget
3. Move `<style>` block to Elementor's Custom CSS panel (Page > Custom CSS)
4. Add schema via SEO plugin

### SEO Plugin Settings (Yoast / RankMath)

```
Focus Keyword:    wedding photographer [city]
SEO Title:        Wedding Photographer [City] | [Studio Name] — Documentary & Fine Art
Meta Description: [City]'s leading wedding photographer. Documentary, fine art & candid
                  wedding photography. Packages from $2,500. Limited dates — book today.
Social Image:     Upload a 1200×630px hero image from the portfolio
```

### Required Image Replacements

| Placeholder | What to Replace With |
|-------------|---------------------|
| `intro__image` div | Your professional portrait (portrait orientation) |
| `style-card__image` divs (×3) | Portfolio samples for each style (documentary, fine art, classic) |
| `gallery__item-placeholder` divs (×7) | Your best 7 wedding portfolio images |
| `testimonial__avatar-placeholder` divs (×3) | Couple headshots (or leave as initials) |
| Hero background | Add a `background-image: url(...)` to `.hero__bg` CSS |

### Hero Background Image

To add your hero image, in WordPress Custom CSS (or `style.css`):

```css
.hero__bg {
    background-image: url('/wp-content/uploads/your-hero-image.jpg');
    background-size: cover;
    background-position: center;
}
```

---

## Off-Page SEO Priorities for This Page

1. **Google Business Profile** — match NAP exactly, add Wedding Photographer category
2. **Wedding directory listings** — Hitched, WeddingWire, The Knot, local wedding directories
3. **Backlink targets** — local wedding venues (get listed as a recommended supplier)
4. **Review strategy** — direct every client to Google after gallery delivery
5. **Internal linking** — link to this page from homepage, blog posts, and sub-service pages

---

## Content Expansion Roadmap

Support the main service page with these cluster pages:

| Page | Target Keyword | Intent |
|------|---------------|--------|
| `/engagement-photos/` | `engagement photographer [city]` | Transactional |
| `/elopement-photography/` | `elopement photographer near me` | Transactional |
| `/indian-wedding-photography/` | `Indian wedding photographer [city]` | Transactional |
| `/destination-weddings/` | `destination wedding photographer` | Transactional |
| `/blog/wedding-photography-cost/` | `how much does wedding photography cost` | Informational |
| `/blog/when-to-book-wedding-photographer/` | `when to book a wedding photographer` | Informational |
| `/blog/questions-to-ask-wedding-photographer/` | `questions to ask a wedding photographer` | Informational |
| `/blog/wedding-photography-shot-list/` | `wedding photography shot list` | Informational |

All cluster pages should link back to the main service page.
